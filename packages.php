<?php 
require "includes/connect.php";

$pkgres = $conn->query("SELECT * FROM package WHERE package_status='1'");

$countryres = $conn->query("SELECT * FROM destination d JOIN country c ON d.country_id=c.country_id");
$expres = $conn->query("SELECT * FROM experience");

?>
<!DOCTYPE html>
<html lang="en">


<head>
	<title>2024 Deals | Snapshot Tours and Safaris</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="">
	<meta name="description" content="">
	<meta name="keywords" content="">

	<?php include "includes/stylesheets.php";?>

</head>
<body>

    <?php include "includes/navbar.php";?>

<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- =======================
Main Banner START -->
<section class="pt-0">
	<div class="container">
		<!-- Background image -->
		<div class="rounded-3 p-3 p-sm-5" style="background-image: url(assets/images/zanzibar5.jpg); background-position: center center; background-repeat: no-repeat; background-size: cover;">
			<!-- Banner title -->
			<div class="row my-2 my-xl-5"> 
				<div class="col-md-8 mx-auto"> 
					<h1 class="text-center text-white"><?php echo $pkgres->num_rows;?> Travel Packages to East Africa</h1>
				</div>
			</div>

			<!-- Booking from START -->
			<form class="bg-mode shadow rounded-3 position-relative p-4 pe-md-5 pb-5 pb-md-4 mb-4">
				<div class="row g-4 align-items-center">
					<!-- Location -->
					<div class="col-lg-6">
						<div class="form-control-border form-control-transparent form-fs-md d-flex">
							<!-- Icon -->
							<i class="bi bi-geo-alt fs-3 me-2 mt-2"></i>
							<!-- Select input -->
							<div class="flex-grow-1">
								<label class="form-label">Destination</label>
								<select class="form-select js-choice" data-search-enabled="true">
									<option value="">Select location</option>
                                    <?php while($countryrow = $countryres->fetch_assoc()){?>
									<option ><?php echo $countryrow['destination_name'].", ".$countryrow['country_name'];?></option>
                                    <?php }?>
								</select>
							</div>
						</div>
					</div>


                    <div class="col-lg-6">
						<div class="form-control-border form-control-transparent form-fs-md d-flex">
							<!-- Icon -->
							<i class="fa-solid fa-person-skating fs-3 me-2 mt-2"></i>
							<!-- Select input -->
							<div class="flex-grow-1">
								<label class="form-label">Experience/Activity</label>
								<select class="form-select js-choice" data-search-enabled="true">
									<option value="">Select an activity</option>
                                    <?php while($exprow = $expres->fetch_assoc()){?>
									<option ><?php echo $exprow['experience_name'];?></option>
                                    <?php }?>
								</select>
							</div>
						</div>
					</div>

					
				</div>
				<!-- Button -->
				<div class="btn-position-md-middle">
					<a  class="icon-lg btn btn-round btn-primary mb-0" href="#"><i class="bi bi-search fa-fw"></i></a>
				</div>
			</form>
			<!-- Booking from END -->
		</div>
	</div>
</section>
<!-- =======================
Main Banner END -->
	


<!-- =======================
Hotel grid START -->
<section class="pt-0">
	<div class="container"><!-- Title -->
		<div class="row mb-4 mt-5">
			<div class="col-12 text-center">
				<h2 class="mt-2 mb-3 text-danger">2024 Deals!</h2>
			</div>
		</div>
		<div class="row g-4">

            <?php 
            while($pkgrow = $pkgres->fetch_assoc()){
            ?>
			<!-- Card item START -->
			<div class="col-md-6 col-xl-4">
				<div class="card shadow p-2 pb-0 h-100">
					<!-- Image -->
					<img src="uploads/<?php echo $pkgrow['package_image'];?>" class="rounded-2" alt="<?php echo $pkgrow['title']. " - ". $pkgrow['subtitle'];?>" style="height: 250px">

					<!-- Card body START -->
					<div class="card-body px-3 pb-0">
						<!-- Rating and cart -->
						<div class="d-flex justify-content-between mb-3">
							<a href="#" class="badge bg-dark text-white"><i class="bi fa-fw bi-star-fill me-2 text-warning"></i>4.0</a>
							<a href="#" class="h6 mb-0 z-index-2"><i class="bi fa-fw bi-bookmark"></i></a>
						</div>

						<!-- Title -->
						<h5 class="card-title"><a href="package.php?package=<?php echo $pkgrow['package_id'];?>"><?php echo $pkgrow['title'];?> </a></h5>
                        <span class="small"><i class="far fa-calendar-alt me-2"></i><?php echo $pkgrow['subtitle'];?></span>

					</div>
					<!-- Card body END -->

					<!-- Card footer START-->
					<div class="card-footer pt-0">
						<!-- Price and Button -->
						<div class="d-sm-flex justify-content-sm-between align-items-center">
							<!-- Price -->
							<div class="d-flex align-items-center">
								<h5 class="fw-normal text-success mb-0 me-1">$<?php echo $pkgrow['price'];?></h5>
								<span class="mb-0 me-2">/person</span>
							</div>
							<!-- Button -->
							<div class="mt-2 mt-sm-0 z-index-2">
								<a href="package.php?package=<?php echo $pkgrow['package_id'];?>" class="btn btn-sm btn-warning mb-0 w-100">View Detail<i class="bi bi-arrow-right ms-2"></i></a>    
							</div>                  
						</div>
					</div>
				</div>
			</div>
			<!-- Card item END -->
            <?php }?>


		</div> <!-- Row END -->

		
	</div>
</section>
<!-- =======================
Hotel grid END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->



<!-- Back to top -->
<div class="back-top"></div>



<?php include "includes/footer.php";?>
<?php include "includes/scripts.php";?>


</body>

<!-- Mirrored from booking.webestica.com/hotel-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Sep 2023 03:55:59 GMT -->
</html>