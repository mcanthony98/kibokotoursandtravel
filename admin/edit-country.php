<?php 
include "includes/includes.php";
include "includes/header.php";

if(!isset($_GET['cat'])){
    header("location: countries.php");
    exit();
}
$cou_id = $_GET['cat'];

$res = $conn->query("SELECT * FROM country WHERE country_id='$cou_id'");
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
						<h1 class="h3 mb-2 mb-sm-0">Edit Country</h1>
					</div>
				</div>
			</div>

	<!--Page Content-->		

	<!--Main content START -->
<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-10 mx-auto">
				<form class="vstack gap-4" enctype="multipart/form-data" method="post" action="processes/processes.php">

					<!-- Country Detail START -->
					<div class="card shadow">
						
						<!-- Card body -->
						<div class="card-body">
							<div class="row g-3">
								<!-- Country Name -->
								<div class="col-12">
									<label class="form-label">Country Name</label>
									<input class="form-control" type="text" name="cat" value="<?php echo $row['country_name'];?>" placeholder="Enter Country Name">
								</div>

								<!-- Country Initials -->
								<div class="col-12">
									<label class="form-label">Country Initials</label>
									<input class="form-control" type="text" name="initials" value="<?php echo $row['country_initials'];?>" placeholder="Enter Country Initials">
								</div>

								<!-- Short Desc -->
								<div class="col-12">
									<label class="form-label">Short Description</label>
									<input class="form-control" type="text" name="short_desc" value="<?php echo $row['country_short_description'];?>" placeholder="Enter Short Description"/>
								</div>

								<!-- Description -->
								<div class="col-12">
									<label class="form-label">Description (30 - 50 Words)</label>
									<textarea class="form-control" rows="3" name="desc" placeholder="Enter Description"><?php echo $row['country_description'];?></textarea>
								</div>
								<input type="hidden" name="cou_id" value="<?php echo $cou_id;?>">
							</div>
						</div>
                        <div class="card-footer text-end">
                            <button type="submit" name="edit-country" class="btn btn-primary mb-0">Edit Country</button>
                            </form>
                        </div>
					</div>
					<!-- Country Detail END -->

                    <form class="vstack gap-4" enctype="multipart/form-data" method="post" action="processes/processes.php">
                    
					<!-- Country Image Detail START -->
					<div class="card shadow mt-3">
						<div class="card-header">
                            Country Image
                        </div>
						<!-- Card body -->
						<div class="card-body">
							<div class="row g-3">
								<!-- Country Image -->
								<div class="col-8 mx-auto">
									<img src="../uploads/<?php echo $row['country_image'];?>">
								</div>

								<!-- Change Photo -->
								<div class="col-12">
									<label class="form-label">Change Photo</label>
									<input class="form-control" type="file" accept="image/*" name="photos" oninput="this.form.submit();" placeholder="Choose Photo">
                                    <input type="hidden" name="edit-cou-img" value="<?php echo $cou_id;?>">
								</div>
							</div>
						</div>
					</div>
					<!-- Country Image Detail END -->
                    </form>

					<!-- Country Flag Detail START -->
					<form class="vstack gap-4" enctype="multipart/form-data" method="post" action="processes/processes.php">
						<div class="card shadow mt-3">
							<div class="card-header">
								Country Flag
							</div>
							<!-- Card body -->
							<div class="card-body">
								<div class="row g-3">
									<!-- Country Flag -->
									<div class="col-8 mx-auto">
										<?php if (!empty($row['country_flag'])): ?>
											<img src="../uploads/<?php echo $row['country_flag']; ?>" alt="Country Flag">
										<?php else: ?>
											<p>No photo available</p>
										<?php endif; ?>
									</div>

									<!-- Change Flag -->
									<div class="col-12">
										<label class="form-label">Change Flag</label>
										<input class="form-control" type="file" accept="image/*" name="flag" oninput="this.form.submit();" placeholder="Choose Flag">
										<input type="hidden" name="edit-cou-flag" value="<?php echo $cou_id; ?>">
									</div>
								</div>
							</div>
						</div>
						<!-- Country Flag Detail END -->
					</form>


					<div class="text-center mt-5 mb-3">
						<h3>Advanced Settings</h3>
					</div>

					<form class="vstack gap-4" enctype="multipart/form-data" method="post" action="processes/processes.php">

					<!-- SEO Detail START -->
					<div class="card shadow">
						
						<!-- Card body -->
						<div class="card-body">
							<div class="row g-3">
								<!-- SEO Page Title -->
								<div class="col-12">
									<label class="form-label">SEO Page Title (Max 70 characters)</label>
									<input class="form-control" maxlength="70" type="text" name="tit" value="<?php echo $row['seo_title'];?>" placeholder="Enter title" >
								</div>

								<!-- SEO Page Description -->
								<div class="col-12">
									<label class="form-label">SEO Page Description (Max 150 characters)</label>
									<textarea class="form-control" rows="4" maxlength="150" name="desc" placeholder="Enter Description"><?php echo $row['seo_description'];?></textarea>
								</div>

                                <!-- SEO Keywords -->
								<div class="col-12">
									<label class="form-label">SEO Keywords</label>
									<textarea class="form-control" rows="4" name="kw" placeholder="Enter Keywords"><?php echo $row['seo_keywords'];?></textarea>
								</div>
								<input type="hidden" name="elemid" value="<?php echo $cou_id;?>">						
							</div>
						</div>
                        <div class="card-footer text-end">
                            <button type="submit" name="seo-country" class="btn btn-primary mb-0">Save Changes</button>
                            </form>
                        </div>
					</div>
					<!-- SEO Detail END -->

			</div>
		</div>
	</div>
</section>

</main>
<!-- **************** MAIN CONTENT END **************** -->

<?php include "includes/scripts.php";?>

</body>
</html>
