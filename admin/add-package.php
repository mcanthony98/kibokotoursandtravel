<?php 
include "includes/includes.php";
include "includes/header.php";


$countryres = $conn->query("SELECT * FROM country");
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
						<h1 class="h3 mb-2 mb-sm-0">Add a New Package</h1>			
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
									<label class="form-label">Package Title</label>
									<input class="form-control" type="text" name="tit" placeholder="Enter Package Title" required>
								</div>

                                <!-- Car name -->
								<div class="col-12">
									<label class="form-label">Subtitle</label>
									<input class="form-control" type="text" name="stit" placeholder="Eg: 3 day beach Holiday" required>
								</div>

								<!-- Desc -->
								<div class="col-12">
									<label class="form-label">Description </label>
									<textarea class="form-control" rows="7" name="desc" id="summernote2" placeholder="Enter Description" required></textarea>
								</div>

                                <div class="col-md-6">
                                    <label class="form-label">Currency</label>
                                    <select class="form-select js-choice border-0 z-index-9 bg-transparent" name="currency" required>
                                        <option value="$">USD</option>
                                        <option value="KES">KES</option>
                                       
                                    </select>
                                </div>


                                <!-- Car name -->
								<div class="col-sm-6">
									<label class="form-label">Package Price</label>
									<div class="input-group mb-3">
                                        <input type="number" class="form-control" placeholder="" name="price" required>
                                    </div>
								</div>


								 <!-- Car name -->
								 <div class="col-sm-6">
									<label class="form-label">Date</label>
									<input type="text" class="form-control flatpickr" data-mode="range" name="dates" placeholder="Select date" required>
								</div>



								<div class="col-md-6">
                                    <label class="form-label">Year Valid</label>
                                    <select class="form-select js-choice border-0 z-index-9 bg-transparent" name="year" required>
                                        <option>Choose validity</option>
                                        <?php 
											$yrnow = date('Y');
											for($i=$yrnow-1; $i<$yrnow+5; $i++){
										?>
											<option value="<?php echo $i;?>"><?php echo $i;?></option>
										<?php }?>
                                    </select>
                                </div>


								
								<div class="col-md-6">
                                    <label class="form-label">Package Category</label>
                                    <select class="form-select js-choice border-0 z-index-9 bg-transparent" name="cat_id" required>
                                        <option>Select a category</option>
                                        <?php 
											$catres = $conn->query("SELECT * FROM category");
											while($catrow = $catres->fetch_assoc()){
										?>
											<option value="<?php echo $catrow['category_id'];?>"><?php echo $catrow['category_name'];?></option>
										<?php }?>
                                    </select>
                                </div>

								


                                
								
								<!-- Desc -->
								<div class="col-12">
									<label class="form-label">Choose Photo</label>
									<input class="form-control" type="file" accept="image/*" name="photos" placeholder="Choose Photo" required>
								</div>

								
							</div>
						</div>
					</div>
					<!-- Cab Detail END -->


					<!-- Button -->
					<div class="text-end">
						<button type="submit" name="add-package" class="btn btn-primary mb-0">Add Package</button>
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