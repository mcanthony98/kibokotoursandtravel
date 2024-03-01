<?php 
include "includes/includes.php";
include "includes/header.php";



if(!isset($_GET['blog'])){
    header("location: blogs.php");
    exit();
}
$exp_id = $_GET['blog'];

$res = $conn->query("SELECT * FROM blog WHERE blog_id='$exp_id'");
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
						<h1 class="h3 mb-2 mb-sm-0">Edit Blog</h1>		
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
									<label class="form-label">Blog Title</label>
									<input class="form-control" type="text" name="tit" value="<?php echo $row['blog_title'];?>" placeholder="Enter Blog Name">
								</div>

								<!-- Desc -->
								<div class="col-12">
									<label class="form-label">Short Description (20 - 30 Words)</label>
									<textarea class="form-control" rows="3" name="desc" placeholder="Enter Description"><?php echo $row['blog_description'];?></textarea>
								</div>

                                <!-- Desc 
								<div class="col-12">
									<label class="form-label">Long Description (50 Words)</label>
									<textarea class="form-control" rows="6" name="ldesc" placeholder="Enter Description"></textarea>
								</div>-->

                                 <!-- Desc -->
								<div class="col-12">
									<label class="form-label">Blog Content</label>
									<textarea class="form-control" id="summernote" name="content"><?php echo $row['blog_content'];?></textarea>
								</div>


                                <!-- Desc -->
								<div class="col-md-6">
									<label class="form-label">Blog Category (Eg. Wildlife)</label>
									<input class="form-control" type="text" name="cat" value="<?php echo $row['blog_category'];?>" placeholder="Enter Blog Category">
								</div>

                                <div class="col-md-6">
                                    <label class="form-label">Blog Category Color</label>
                                    <select class="form-select js-choice border-0 z-index-9 bg-transparent" name="cat_color" >
                                        <option>Select a color</option>
                                        <option <?php if($row['blog_category_color'] == 'warning'){echo "selected";}?> value="warning">Mustard</option>
                                        <option <?php if($row['blog_category_color'] == 'success'){echo "selected";}?> value="success">Green</option>
                                        <option <?php if($row['blog_category_color'] == 'danger'){echo "selected";}?> value="danger">Red</option>
                                        <option <?php if($row['blog_category_color'] == 'primary'){echo "selected";}?> value="primary">Purple</option>
                                        <option <?php if($row['blog_category_color'] == 'dark'){echo "selected";}?> value="dark">Black</option>
                                    </select>
                                </div>
								
                                <div class="col-md-6">
                                    <label class="form-label">Status</label>
                                    <select class="form-select js-choice border-0 z-index-9 bg-transparent" name="status" >
                                        <option <?php if($row['blog_status'] == 0){echo "selected";}?> value="0">Unpublished</option>
                                        <option <?php if($row['blog_status'] == 1){echo "selected";}?> value="1">Active</option>
                                        <option <?php if($row['blog_status'] == 2){echo "selected";}?> value="2">Disabled</option>
                                    </select>
                                </div>


								<input type="hidden" name="blog_id" value="<?php echo $exp_id;?>">
																
							</div>
						</div>
                        <div class="card-footer text-end">
                            <button type="submit" name="edit-blog" class="btn btn-primary mb-0">Edit Blog Details</button>
                            </form>
                        </div>
					</div>
					<!-- Cab Detail END -->






                    <form class="vstack gap-4" enctype="multipart/form-data" method="post" action="processes/processes.php">
                    
					<!-- Cab Detail START -->
					<div class="card shadow mt-3">
						<div class="card-header">
                            Change Image
                        </div>
						<!-- Card body -->
						<div class="card-body">
							<div class="row g-3">
								<!-- Car name -->
								<div class="col-8 mx-auto" class="max-width:400px">
									<img src="../uploads/<?php echo $row['blog_image'];?>">
								</div>

								<!-- Desc -->
								<div class="col-12">
									<label class="form-label">Change Photo</label>
									<input class="form-control" type="file" accept="image/*" name="photos" oninput="this.form.submit();" placeholder="Choose Photo">
                                    <input type="hidden" name="edit-blog-img" value="<?php echo $exp_id;?>">
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
								<input type="hidden" name="elemid" value="<?php echo $exp_id;?>">
																
							</div>
						</div>
                        <div class="card-footer text-end">
                            <button type="submit" name="seo-blog" class="btn btn-primary mb-0">Save Changes</button>
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