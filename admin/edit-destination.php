<?php 
include "includes/includes.php";
include "includes/header.php";



if(!isset($_GET['dest'])){
    header("location: destinations.php");
    exit();
}
$dest_id = $_GET['dest'];

$res = $conn->query("SELECT *, destination.seo_title AS seo_tit, destination.seo_description AS seo_desc, destination.seo_keywords AS seo_kw FROM destination JOIN country ON destination.country_id=country.country_id  WHERE destination.destination_id='$dest_id'");
$row = $res->fetch_assoc();

$countryres = $conn->query("SELECT * FROM country");

$allcatres = $conn->query("SELECT c.category_id, c.category_name FROM category c LEFT JOIN destination_category dc ON c.category_id = dc.category_id AND dc.destination_id = '$dest_id' WHERE dc.category_id IS NULL ORDER BY c.category_name ASC");

$allexpres = $conn->query("SELECT e.experience_id, e.experience_name FROM experience e LEFT JOIN destination_experience de ON e.experience_id = de.experience_id AND de.destination_id = '$dest_id' WHERE de.experience_id IS NULL ORDER BY e.experience_name ASC");

$catres = $conn->query("SELECT * FROM destination_category JOIN category ON category.category_id=destination_category.category_id WHERE destination_category.destination_id = '$dest_id' ORDER BY category.category_name ASC");

$expres = $conn->query("SELECT * FROM destination_experience JOIN experience ON experience.experience_id=destination_experience.experience_id WHERE destination_experience.destination_id = '$dest_id' ORDER BY experience.experience_name ASC");
?>
</head>

<body>

<!-- **************** MAIN CONTENT START **************** -->
<main>
	
<?php include "includes/sidebar.php";?>
	
	<!-- Page content START -->
	<div class="page-content">
	
    <?php include "includes/navbar.php";?>
	
		<!-- Page main content START -->
		<div class="page-content-wrapper p-xxl-4">
	
			<!-- Title -->
			<div class="row">
				<div class="col-12 mb-2 mb-sm-2">
					<div class="d-sm-flex justify-content-between align-items-center">
						<h1 class="h3 mb-2 mb-sm-0">Edit Destination</h1>		
					</div>
				</div>
			</div>

	<!--Page Conteeeeeeeeeeeeeeeeent-->		


	<!--Main content START -->
<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-10 mx-auto">
				<form class="vstack gap-4" enctype="multipart/form-data" method="post" action="processes/processes.php">

					<!-- Cab Detail START -->
					<div class="card shadow">
                        <div class="card-header text-center">
                            Destination Basic Details
                        </div>
						<!-- Card body -->
						<div class="card-body">
							<div class="row g-3">
								<!-- Car name -->
								<div class="col-12">
									<label class="form-label">Destination Name</label>
									<input class="form-control" type="text" name="cat" value="<?php echo $row['destination_name'];?>" placeholder="Enter Destination Name">
								</div>

                                <!-- Car name -->
								<!-- <div class="col-12">
									<label class="form-label">Creative Destination Name</label>
									<input class="form-control" type="text" name="ccat" value="<?php echo $row['catchy_title'];?>" placeholder="Enter Creative Destination Name">
								</div>-->

								<!-- Desc -->
								<div class="col-12">
									<label class="form-label">Description </label>
									<textarea class="form-control" rows="7" name="desc"  placeholder="Enter Description"><?php echo $row['description'];?></textarea>
								</div>

                                <!-- State -->
								<div class="col-md-6">
									<label class="form-label">Country</label>
									<select class="form-select js-choice" name="country" data-search-enabled="true">
										<option value="">Select Country</option>
                                        <?php 
                                        while($countryrow = $countryres->fetch_assoc()){
                                        ?>
										    <option <?php if($row['country_id'] == $countryrow['country_id']){ echo "selected";}?> value="<?php echo $countryrow['country_id'];?>"><?php echo $countryrow['country_name'];?></option>
                                        <?php } ?>
									</select>
								</div>

                                <!-- Car name -->
								<div class="col-12">
									<label class="form-label">Physical Location</label>
									<input class="form-control" type="text" name="loc"  value="<?php echo $row['location'];?>" placeholder="Enter Destination Location">
								</div>

                                
                                <!-- Desc -->
								<div class="col-12">
									<label class="form-label">Google Map Code <a href="#" class="ms-2 text-decoration-underline" data-bs-toggle="modal" data-bs-target="#mapmodal">
								<i class="bi bi-eye-fill me-1"></i>View On Map
							</a></label>
									<textarea class="form-control" rows="6" name="map"  placeholder="Enter map location"><?php echo $row['map_iframe'];?></textarea>
								</div>
								
								<input type="hidden" name="dest_id" value="<?php echo $dest_id;?>">
																
							</div>
						</div>
                        <div class="card-footer text-end">
                            <button type="submit" name="edit-destination" class="btn btn-primary mb-0">Edit Destination</button>
                            </form>
                        </div>
					</div>
					<!-- Cab Detail END -->


                    <!-- Cab Detail START -->
                    <div class="card shadow mt-3" id="catsection">
						<div class="card-header">
                            Destination Categories & Experiences
                        </div>
						<!-- Card body -->
						<div class="card-body">
							<div class="row g-3">
								<!-- Car name -->
								
                                
									<div class="col-md-6 px-2  border-end">
                                        <form class="vstack gap-4" enctype="multipart/form-data" method="post" action="processes/processes.php">
                                            <label class="form-label">Category</label>
                                            <select class="form-select js-choice" name="cat" data-search-enabled="true">
                                                <option value="">Select Category</option>
                                                <?php 
                                                while($allcatrow = $allcatres->fetch_assoc()){
                                                ?>
                                                    <option value="<?php echo $allcatrow['category_id'];?>"><?php echo $allcatrow['category_name'];?></option>
                                                <?php } ?>
                                            </select>
                                            <input type="hidden" name="dest_id" value="<?php echo $dest_id;?>">
                                            <button type="submit" name="add-destination-cats" class="btn btn-primary btn-sm mb-0 mt-2">Add Category</button>
                                        </form>
                                    </div>

                                    <div class="col-md-6 ">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th style="width: 80%;">Category</th>
                                                    <th>Remove</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                while($catrow = $catres->fetch_assoc()){
                                                ?>
                                                <tr>
                                                    <td><?php echo $catrow['category_name'];?></td>
                                                    <td><a class="btn btn-sm btn-danger-soft" href="processes/processes.php?deldestcat=<?php echo $catrow['destination_category_id'];?>&dest_id=<?php echo $dest_id;?>"><i class="fa-solid fa-times"></i></td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>						
																
							</div>

<hr class="my-4">

                            <div class="row g-3">
								<!-- Car name -->
								
									<div class="col-md-6 px-2  border-end">
                                        <form class="vstack gap-4" enctype="multipart/form-data" method="post" action="processes/processes.php">
                                        <label class="form-label">Experiences</label>
                                        <select class="form-select js-choice" name="cat" data-search-enabled="true">
                                            <option value="">Select Experience</option>
                                            <?php 
                                            while($allexprow = $allexpres->fetch_assoc()){
                                            ?>
                                                <option value="<?php echo $allexprow['experience_id'];?>"><?php echo $allexprow['experience_name'];?></option>
                                            <?php } ?>
                                        </select>
                                        <input type="hidden" name="dest_id" value="<?php echo $dest_id;?>">
                                        <button type="submit" name="add-destination-exp" class="btn btn-primary btn-sm mb-0 mt-2">Add Experience</button>
                                    </form>
                                    </div>

                                    <div class="col-md-6 ">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th style="width: 80%;">Experience</th>
                                                    <th>Remove</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                while($exprow = $expres->fetch_assoc()){
                                                ?>
                                                <tr>
                                                    <td><?php echo $exprow['experience_name'];?></td>
                                                    <td><a class="btn btn-sm btn-danger-soft" href="processes/processes.php?deldestexp=<?php echo $exprow['destination_experience_id'];?>&dest_id=<?php echo $dest_id;?>"><i class="fa-solid fa-times"></i></td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>						
																
							</div>
						</div>
					</div>



                    <form class="vstack gap-4" enctype="multipart/form-data" method="post" action="processes/processes.php">
                    
					<!-- Cab Detail START -->
					<div class="card shadow mt-3">
						<div class="card-header">
                            Destination Image
                        </div>
						<!-- Card body -->
						<div class="card-body">
							<div class="row g-3">
								<!-- Car name -->
								<div class="col-8 mx-auto" class="max-width:400px">
									<img src="../uploads/<?php echo $row['destination_image'];?>">
								</div>

								<!-- Desc -->
								<div class="col-12">
									<label class="form-label">Change Photo</label>
									<input class="form-control" type="file" accept="image/*" name="photos" oninput="this.form.submit();" placeholder="Choose Photo">
                                    <input type="hidden" name="edit-dest-img" value="<?php echo $dest_id;?>">
								</div>
								
																
							</div>
						</div>
					</div>
					<!-- Cab Detail END -->
                    </form>

					<div class="text-center mt-5 mb-3">
						<h3>Advanced Settings</h3>
					</div>

					<form class="vstack gap-4" enctype="multipart/form-data" method="post" action="processes/processes.php">

					<!-- Cab Detail START -->
					<div class="card shadow">
						
						<!-- Card body -->
						<div class="card-body">
							<div class="row g-3">
								<!-- Car name -->
								<div class="col-12">
									<label class="form-label">SEO Page Title (Max 70 characters)</label>
									<input class="form-control" maxlength="70" type="text" name="tit" value="<?php echo $row['seo_tit'];?>" placeholder="Enter title" >
								</div>

								<!-- Desc -->
								<div class="col-12">
									<label class="form-label">SEO Page Description (Max 150 characters)</label>
									<textarea class="form-control" rows="4" maxlength="150" name="desc" placeholder="Enter Description"><?php echo $row['seo_desc'];?></textarea>
								</div>

                                <!-- Desc -->
								<div class="col-12">
									<label class="form-label">SEO Keywords</label>
									<textarea class="form-control" rows="4" name="kw" placeholder="Enter Keywords"><?php echo $row['seo_kw'];?></textarea>
								</div>
								<input type="hidden" name="elemid" value="<?php echo $dest_id;?>">
																
							</div>
						</div>
                        <div class="card-footer text-end">
                            <button type="submit" name="seo-dest" class="btn btn-primary mb-0">Save Changes</button>
                            </form>
                        </div>
					</div>
					<!-- Cab Detail END -->


			</div>
		</div>
	</div>
</section>



	
	</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- Map modal START -->
<div class="modal fade" id="mapmodal" tabindex="-1" aria-labelledby="mapmodalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<!-- Title -->
			<div class="modal-header">
				<h5 class="modal-title" id="mapmodalLabel"><?php echo $row['destination_name'];?></h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<!-- Map -->
			<div class="modal-body text-center ">
				<?php echo $row['map_iframe'];?>
			</div>
			
		</div>
	</div>
</div>
<!-- Map modal END -->

<?php include "includes/scripts.php";?>


</body>


</html>