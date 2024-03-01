<?php 
include "includes/includes.php";
include "includes/header.php";


$countryres = $conn->query("SELECT * FROM tb_location");
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
						<h1 class="h3 mb-2 mb-sm-0">Add a New Venue</h1>			
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
									<label class="form-label">Venue Name</label>
									<input class="form-control" type="text" name="name" placeholder="Enter Venue Name">
								</div>

                                <!-- State -->
								<div class="col-md-6">
									<label class="form-label">Location</label>
									<select class="form-select js-choice" name="loc" data-search-enabled="true">
										<option value="">Select Location</option>
                                        <?php 
                                        while($countryrow = $countryres->fetch_assoc()){
                                        ?>
										    <option value="<?php echo $countryrow['location_id'];?>"><?php echo $countryrow['location_name'];?></option>
                                        <?php } ?>
									</select>
								</div>

                                <!-- State -->
								<div class="col-md-6">
									<label class="form-label">Type</label>
									<select class="form-select js-choice" name="type" data-search-enabled="true">
										<option value="">Select Venue Type</option>
										<option value="1">Budget</option>
										<option value="2">Mid-Luxury</option>
										<option value="3">Luxury</option>
                                        
									</select>
								</div>

                                <!-- Car name -->
								<div class="col-12">
									<label class="form-label">Price</label>
									<input class="form-control" type="number" name="price" placeholder="Enter Price per Person ">
								</div>

								<!-- Desc -->
								<div class="col-12">
									<label class="form-label">Description </label>
									<textarea class="form-control" rows="7" name="desc" placeholder="Enter Description"></textarea>
								</div>

                                
                                <!-- Desc -->
								<div class="col-12">
									<label class="form-label">Google Map Code</label>
									<textarea class="form-control" rows="4" name="map" placeholder="Enter map location"></textarea>
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
						<button type="submit" name="add-venue" class="btn btn-primary mb-0">Add Venue</button>
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