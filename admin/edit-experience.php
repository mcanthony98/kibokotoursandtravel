<?php 
include "includes/includes.php";
include "includes/header.php";



if(!isset($_GET['exp'])){
    header("location: experiences.php");
    exit();
}
$exp_id = $_GET['exp'];

$countryres = $conn->query("SELECT * FROM country");
$res = $conn->query("SELECT * FROM experience WHERE experience_id='$exp_id'");
$row = $res->fetch_assoc();
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
						<h1 class="h3 mb-2 mb-sm-0">Edit Experience</h1>		
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
						
						<!-- Card body -->
						<div class="card-body">
							<div class="row g-3">
								<!-- Car name -->
								<div class="col-12">
									<label class="form-label">Experience Name</label>
									<input class="form-control" type="text" name="cat" value="<?php echo $row['experience_name'];?>" placeholder="Enter Experience Name" required>
								</div>

								<!-- Desc -->
								<div class="col-12">
									<label class="form-label">Description</label>
									<textarea class="form-control" rows="5" name="desc" placeholder="Enter Description" required><?php echo $row['description'];?></textarea>
								</div>

                                <!-- State -->
                                <div class="col-md-6">
                                    <label class="form-label">Country</label>
                                    <select class="form-select js-choice" name="country" data-search-enabled="true">
                                        <option value="">Select Country</option>
                                        <?php 
                                        while ($countryrow = $countryres->fetch_assoc()) {
                                            // Check if the current country is the one selected in the package data
                                            $selected = ($countryrow['country_id'] == $row['country_id']) ? 'selected' : '';
                                        ?>
                                            <option value="<?php echo htmlspecialchars($countryrow['country_id']); ?>" <?php echo $selected; ?>>
                                                <?php echo htmlspecialchars($countryrow['country_name']); ?>
                                            </option>
                                        <?php 
                                        } 
                                        ?>
                                    </select>

                                </div>
								<input type="hidden" name="exp_id" value="<?php echo $exp_id;?>">
																
							</div>
						</div>
                        <div class="card-footer text-end">
                            <button type="submit" name="edit-experience" class="btn btn-primary mb-0">Edit Experience</button>
                            </form>
                        </div>
					</div>
					<!-- Cab Detail END -->






                    <form class="vstack gap-4" enctype="multipart/form-data" method="post" action="processes/processes.php">
                    
					<!-- Cab Detail START -->
					<div class="card shadow mt-3">
						<div class="card-header">
                            Experience Image
                        </div>
						<!-- Card body -->
						<div class="card-body">
							<div class="row g-3">
								<!-- Car name -->
								<div class="col-8 mx-auto" class="max-width:400px">
									<img src="../uploads/<?php echo $row['experience_image'];?>">
								</div>

								<!-- Desc -->
								<div class="col-12">
									<label class="form-label">Change Photo</label>
									<input class="form-control" type="file" accept="image/*" name="photos" oninput="this.form.submit();" placeholder="Choose Photo" required>
                                    <input type="hidden" name="edit-exp-img" value="<?php echo $exp_id;?>">
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
									<input class="form-control" maxlength="70" type="text" name="tit" value="<?php echo $row['seo_title'];?>" placeholder="Enter title" >
								</div>

								<!-- Desc -->
								<div class="col-12">
									<label class="form-label">SEO Page Description (Max 150 characters)</label>
									<textarea class="form-control" rows="4" maxlength="150" name="desc" placeholder="Enter Description"><?php echo $row['seo_description'];?></textarea>
								</div>

                                <!-- Desc -->
								<div class="col-12">
									<label class="form-label">SEO Keywords</label>
									<textarea class="form-control" rows="4" name="kw" placeholder="Enter Keywords"><?php echo $row['seo_keywords'];?></textarea>
								</div>
								<input type="hidden" name="elemid" value="<?php echo $exp_id;?>">
																
							</div>
						</div>
                        <div class="card-footer text-end">
                            <button type="submit" name="seo-exp" class="btn btn-primary mb-0">Save Changes</button>
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

<?php include "includes/scripts.php";?>


</body>


</html>