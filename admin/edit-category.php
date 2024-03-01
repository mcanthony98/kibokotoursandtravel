<?php 
include "includes/includes.php";
include "includes/header.php";



if(!isset($_GET['cat'])){
    header("location: categories.php");
    exit();
}
$cat_id = $_GET['cat'];

$res = $conn->query("SELECT * FROM category WHERE category_id='$cat_id'");
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
						<h1 class="h3 mb-2 mb-sm-0">Edit Category</h1>		
						
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
									<label class="form-label">Category Name</label>
									<input class="form-control" type="text" name="cat" value="<?php echo $row['category_name'];?>" placeholder="Enter Category Name">
								</div>

								<!-- Desc -->
								<div class="col-12">
									<label class="form-label">Description (30 - 50 Words)</label>
									<textarea class="form-control" rows="3" name="desc" placeholder="Enter Description"><?php echo $row['description'];?></textarea>
								</div>
								<input type="hidden" name="cat_id" value="<?php echo $cat_id;?>">
																
							</div>
						</div>
                        <div class="card-footer text-end">
                            <button type="submit" name="edit-category" class="btn btn-primary mb-0">Edit Category</button>
                            </form>
                        </div>
					</div>
					<!-- Cab Detail END -->






                    <form class="vstack gap-4" enctype="multipart/form-data" method="post" action="processes/processes.php">
                    
					<!-- Cab Detail START -->
					<div class="card shadow mt-3">
						<div class="card-header">
                            Category Image
                        </div>
						<!-- Card body -->
						<div class="card-body">
							<div class="row g-3">
								<!-- Car name -->
								<div class="col-8 mx-auto" class="max-width:400px">
									<img src="../uploads/<?php echo $row['category_image'];?>">
								</div>

								<!-- Desc -->
								<div class="col-12">
									<label class="form-label">Change Photo</label>
									<input class="form-control" type="file" accept="image/*" name="photos" oninput="this.form.submit();" placeholder="Choose Photo">
                                    <input type="hidden" name="edit-cat-img" value="<?php echo $cat_id;?>">
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
								<input type="hidden" name="elemid" value="<?php echo $cat_id;?>">
																
							</div>
						</div>
                        <div class="card-footer text-end">
                            <button type="submit" name="seo-category" class="btn btn-primary mb-0">Save Changes</button>
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