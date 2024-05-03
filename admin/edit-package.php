<?php 
include "includes/includes.php";
include "includes/header.php";


if(!isset($_GET['pack'])){
    header("location: destinations.php");
    exit();
}
$pack_id = $_GET['pack'];

$res = $conn->query("SELECT * FROM package WHERE package_id='$pack_id'");
$row = $res->fetch_assoc();

$packdayres = $conn->query("SELECT * FROM package_day WHERE package_id = '$pack_id' ORDER BY day ASC");

//$countryres = $conn->query("SELECT * FROM country");



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
						<h1 class="h3 mb-2 mb-sm-0">Edit Package</h1>
                        <a href="processes/processes.php?duplicate_package=<?php echo $pack_id;?>" class="btn btn-primary">Duplicate</a>		
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
                            Package Basic Details
                        </div>
						<!-- Card body -->
						<div class="card-body">
							<div class="row g-3">
								<!-- Car name -->
								<div class="col-12">
									<label class="form-label">Package Title</label>
									<input class="form-control" type="text" name="tit" value="<?php echo $row['title'];?>" placeholder="Enter Package Title">
								</div>

                                <!-- Car name -->
								<div class="col-12">
									<label class="form-label">Subtitle</label>
									<input class="form-control" type="text" name="stit" value="<?php echo $row['subtitle'];?>" placeholder="Eg: 3 day beach Holiday">
								</div>

								<!-- Desc -->
								<div class="col-12">
									<label class="form-label">Description </label>
									<textarea class="form-control" rows="7" name="desc" id="summernote2" placeholder="Enter Description"><?php echo $row['package_description'];?></textarea>
								</div>

                                <div class="col-md-6">
                                    <label class="form-label">Currency</label>
                                    <select class="form-select js-choice border-0 z-index-9 bg-transparent" name="currency" required>
                                        <option <?php if($row['currency'] == '$'){ echo "selected";}?> value="$">USD</option>
                                        <option <?php if($row['currency'] == 'KES'){ echo "selected";}?> value="KES">KES</option>
                                       
                                    </select>
                                </div>

                                
                                <!-- Car name -->
								<div class="col-sm-6">
									<label class="form-label">Package Price</label>
									<div class="input-group mb-3">
                                        <input type="number" class="form-control" value="<?php echo $row['price'];?>" placeholder="" name="price">
                                    </div>
								</div>

                                <!-- Car name -->
								 <div class="col-sm-6">
									<label class="form-label">Date</label>
									<input type="text" class="form-control flatpickr" data-mode="range" name="dates" placeholder="Select date" value="<?php echo $row['travel_dates'];?>" required>
								</div>

                                <div class="col-md-6">
                                    <label class="form-label">Package Category</label>
                                    <select class="form-select js-choice border-0 z-index-9 bg-transparent" name="cat_id" required>
                                        <?php 
											$catres = $conn->query("SELECT * FROM category");
											while($catrow = $catres->fetch_assoc()){
										?>
											<option <?php if($catrow['category_id'] == $row['category_id']){ echo "selected";}?>  value="<?php echo $catrow['category_id'];?>"><?php echo $catrow['category_name'];?></option>
										<?php }?>
                                    </select>
                                </div>

                                <!-- Car name -->
								<div class="col-md-6">
									<label class="form-label">Package Visibility</label>
									<select class="form-control" name="status">
                                        <option <?php if($row['package_status'] == 0){ echo "selected";}?> value="0">Not Visible</option>
                                        <option <?php if($row['package_status'] == 1){ echo "selected";}?> value="1">Visible</option>
                                    </select>
								</div>
								
								<input type="hidden" name="pack_id" value="<?php echo $pack_id;?>">
																
							</div>
						</div>
                        <div class="card-footer text-end">
                            <button type="submit" name="edit-package" class="btn btn-primary mb-0">Edit Package</button>
                            </form>
                        </div>
					</div>
					<!-- Cab Detail END -->

                    <div class="my-4 d-sm-flex justify-content-between align-items-center">
                        <h4>Itinerary</h4>
                        <div class="d-grid"><a href="processes/processes.php?add-packit=<?php echo $pack_id;?>" class="btn btn-primary-soft btn-sm mb-0"><i class="bi bi-plus fa-fw"></i> Add Itinerary</a></div>	
                    </div>
                    <?php if($packdayres->num_rows == 0){?>
                        <div class="card shadow mt-3" >
                            <div class="card-body text-center">
                                <p>No Itinerary Yet!</p>
                            </div>
                        </div>
                    <?php } ?>

                    <?php while($packdayrow = $packdayres->fetch_assoc()){
                        $pack_day_id = $packdayrow['package_day_id'];
                        $allcatres = $conn->query("SELECT c.destination_id, c.destination_name FROM destination c LEFT JOIN package_day_destination dc ON c.destination_id = dc.destination_id AND dc.package_day_id = '$pack_day_id' WHERE dc.destination_id IS NULL ORDER BY c.destination_name ASC");

                        $catres = $conn->query("SELECT * FROM package_day_destination JOIN destination ON package_day_destination.destination_id=destination.destination_id WHERE package_day_destination.package_day_id = '$pack_day_id' ORDER BY destination.destination_name ASC");

                        $allexpres = $conn->query("SELECT e.experience_id, e.experience_name FROM experience e LEFT JOIN package_day_experience de ON e.experience_id = de.experience_id AND de.package_day_id = '$pack_day_id' WHERE de.experience_id IS NULL ORDER BY e.experience_name ASC");

                        $expres = $conn->query("SELECT * FROM package_day_experience JOIN experience ON experience.experience_id=package_day_experience.experience_id WHERE package_day_experience.package_day_id = '$pack_day_id' ORDER BY experience.experience_name ASC");
                        
                        ?>

                         <!-- Cab Detail START -->
                    <div class="card shadow mt-3" >
						<div class="card-header  text-center">
                            <span class="h5">Day <?php echo $packdayrow['day'];?></span>

                            
                                <a href="processes/processes.php?delete-pack-day=<?php echo $pack_day_id;?>&pack_id=<?php echo $pack_id;?>" class="btn btn-danger-soft float-end deleteBtn"><i class="fas fa-times"></i> Remove</a>
                   
                            
                        </div>
						<!-- Card body -->
						<div class="card-body">
							<div class="row g-3">
								<!-- Car name -->
								

                                <!-- Desc -->
								<div class="col-12">
                                <form class="vstack gap-4" enctype="multipart/form-data" method="post" action="processes/processes.php">
									<label class="form-label">Short Description (Max 30 words) </label>
									<textarea class="form-control" rows="3" name="sdesc" placeholder="Enter Description"><?php echo $packdayrow['short_itinerary'];?></textarea>
								</div>


                                <!-- Desc -->
								<div class="col-12">
									<label class="form-label">Long Description  </label>
									<textarea class="form-control" rows="7" name="ldesc" placeholder="Enter Description"><?php echo $packdayrow['long_itinerary'];?></textarea>
								</div>

                                <input type="hidden" name="pack_id" value="<?php echo $pack_id;?>">
                                <input type="hidden" name="pack_day_id" value="<?php echo $pack_day_id;?>">

                                <div class="col-12">
                                <button type="submit" name="edit-itinerary" class="btn btn-primary-soft mb-0">Save Changes</button>
                                    </form>
                                </div>

                                <div class="col-12 pt-3">
                                    <h6>Day <?php echo $packdayrow['day'];?> Destinations & Activities</h6>
                                </div>
									<div class="col-md-6 px-2  border-end">
                                        <form class="vstack gap-4" enctype="multipart/form-data" method="post" action="processes/processes.php">
                                            <label class="form-label">Destinations</label>
                                            <select class="form-select js-choice" name="cat" data-search-enabled="true">
                                                <option value="">Select Destination</option>
                                                <?php 
                                                while($allcatrow = $allcatres->fetch_assoc()){
                                                ?>
                                                    <option value="<?php echo $allcatrow['destination_id'];?>"><?php echo $allcatrow['destination_name'];?></option>
                                                <?php } ?>
                                            </select>
                                                <input type="hidden" name="pack_day_id" value="<?php echo $pack_day_id;?>">
                                                <input type="hidden" name="pack_id" value="<?php echo $pack_id;?>">
                                            <button type="submit" name="add-pack-dests" class="btn btn-primary btn-sm mb-0 mt-2">Add Destination</button>
                                        </form>
                                    </div>

                                    <div class="col-md-6 ">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th style="width: 80%;">Destination</th>
                                                    <th>Remove</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                while($catrow = $catres->fetch_assoc()){
                                                ?>
                                                <tr>
                                                    <td><?php echo $catrow['destination_name'];?></td>
                                                    <td><a class="btn btn-sm btn-danger-soft" href="processes/processes.php?delpackdest=<?php echo $catrow['package_day_destination_id'];?>&pack_id=<?php echo $pack_id;?>"><i class="fa-solid fa-times"></i></td>
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
                                            <input type="hidden" name="pack_day_id" value="<?php echo $pack_day_id;?>">
                                            <input type="hidden" name="pack_id" value="<?php echo $pack_id;?>">
                                        <button type="submit" name="add-pack-exp" class="btn btn-primary btn-sm mb-0 mt-2">Add Experience</button>
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
                                                    <td><a class="btn btn-sm btn-danger-soft" href="processes/processes.php?delpackexp=<?php echo $exprow['package_day_experience_id'];?>&pack_id=<?php echo $pack_id;?>"><i class="fa-solid fa-times"></i></td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>						
																
							</div>
						</div>
					</div>

                    <?php } ?>


                   


                    <form class="vstack gap-4" enctype="multipart/form-data" method="post" action="processes/processes.php">
                    
					<!-- Cab Detail START -->
					<div class="card shadow mt-3">
						<div class="card-header">
                            Package Image
                        </div>
						<!-- Card body -->
						<div class="card-body">
							<div class="row g-3">
								<!-- Car name -->
								<div class="col-8 mx-auto" class="max-width:400px">
									<img src="../uploads/<?php echo $row['package_image'];?>">
								</div>

								<!-- Desc -->
								<div class="col-12">
									<label class="form-label">Change Photo</label>
									<input class="form-control" type="file" accept="image/*" name="photos" oninput="this.form.submit();" placeholder="Choose Photo">
                                    <input type="hidden" name="edit-pack-img" value="<?php echo $pack_id;?>">
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
									<label class="form-label">SEO Page Title</label>
									<input class="form-control" type="text" name="tit" value="<?php echo $row['seo_title'];?>" placeholder="Enter title" >
								</div>

								<!-- Desc -->
								<div class="col-12">
									<label class="form-label">SEO Page Description (30 - 50 Words)</label>
									<textarea class="form-control" rows="4" name="desc" placeholder="Enter Description"><?php echo $row['seo_description'];?></textarea>
								</div>

                                <!-- Desc -->
								<div class="col-12">
									<label class="form-label">SEO Keywords</label>
									<textarea class="form-control" rows="4" name="kw" placeholder="Enter Keywords"><?php echo $row['seo_keywords'];?></textarea>
								</div>
								<input type="hidden" name="elemid" value="<?php echo $pack_id;?>">
																
							</div>
						</div>
                        <div class="card-footer text-end">
                            <button type="submit" name="seo-package" class="btn btn-primary mb-0">Save Changes</button>
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