<?php 
include "includes/includes.php";
include "includes/header.php";?>
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
						<h1 class="h3 mb-2 mb-sm-0">Add a New Blog</h1>			
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
									<input class="form-control" type="text" name="tit" placeholder="Enter Blog Name">
								</div>

								<!-- Desc -->
								<div class="col-12">
									<label class="form-label">Short Description (20 - 30 Words)</label>
									<textarea class="form-control" rows="3" name="desc" placeholder="Enter Description"></textarea>
								</div>

                                <!-- Desc 
								<div class="col-12">
									<label class="form-label">Long Description (50 Words)</label>
									<textarea class="form-control" rows="6" name="ldesc" placeholder="Enter Description"></textarea>
								</div>-->

                                 <!-- Desc -->
								<div class="col-12">
									<label class="form-label">Blog Content</label>
									
                                    <textarea class="form-control" id="summernote" name="content"></textarea>
								</div>


                                <!-- Desc -->
								<div class="col-md-6">
									<label class="form-label">Blog Category (Eg. Wildlife)</label>
									<input class="form-control" type="text" name="cat" placeholder="Enter Blog Category">
								</div>
								
                                <div class="col-md-6">
                                    <label class="form-label">Blog Category Color</label>
                                    <select class="form-select js-choice border-0 z-index-9 bg-transparent" name="cat_color" >
                                        <option>Select a color</option>
                                        <option value="warning">Mustard</option>
                                        <option value="success">Green</option>
                                        <option value="danger">Red</option>
                                        <option value="primary">Purple</option>
                                        <option value="dark">Black</option>
                                    </select>
                                </div>

								<!-- Desc -->
								<div class="col-12">
									<label class="form-label">Choose Photo</label>
									<input class="form-control" type="file" accept="image/*" name="photos" placeholder="Choose Photo">
								</div>

								
							</div>
						</div>
					</div>
					<!-- Cab Detail END -->


					<!-- Button -->
					<div class="text-end">
						<button type="submit" name="add-blog" class="btn btn-primary mb-0">Add Blog</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>



	
	</main>
<!-- **************** MAIN CONTENT END **************** -->

<?php include "includes/scripts.php";?>


</body>


</html>