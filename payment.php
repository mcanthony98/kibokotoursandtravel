<?php 
session_start();
require "includes/connect.php";

if(!isset($_GET['id'])){
	header('location: index.php');
}
$bkid = $_GET['id'];
$bkres = $conn->query("SELECT * FROM package_booking WHERE booking_id='$bkid'");
$bkrow = $bkres->fetch_assoc();

$pkgid = $bkrow['package_id'];
$pkgres = $conn->query("SELECT * FROM package WHERE package_id='$pkgid'");
$pkgrow = $pkgres->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Pay | Kiboko Tours & Travel</title>

        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="GNM">
        <meta name="description" content="Kiboko Tours & Travel">

        <!-- Libraries, Favicon & CSS -->
        <?php include "includes/libs_fav.php";?>



    </head>

    <body>
        <!-- Header START -->
        <?php include "includes/header_navbar.php";?>
        <!-- Header END -->

        <main>

            	<!-- =======================
Main Content START -->
<section class="pt-4 pt-lg-5">
	<div class="container">

		<div class="row g-4 g-xl-5">
			<!-- Left Content START -->
			<div class="col-md-8 mx-auto">
				<div class="card bg-transparent p-0">
					<!-- Card header START -->
					<div class="card-header bg-transparent p-0">
						<h1 class="card-title fs-2 mb-0">Confirm Booking and Payment</h1>
					</div>
					<!-- Card header END -->

					<br>
					<br>

					

					<!-- Card body START -->
					<div class="card-body p-0 mt-3">
						<?php 
						if(isset($_SESSION['success'])){
						?>
						<!-- Alert box -->
						<div class="alert alert-success" role="alert">
							<?php echo $_SESSION['success']; ?>
						</div>
						<?php unset($_SESSION['success']); } ?>




					</div>
					<!-- Card body END -->
				</div>


				<div class="row g-4">
					<!-- Price summary START -->
					<div class="col-md-6 col-xl-12">
						<div class="card bg-light rounded-2">
							<!-- card header -->
							<div class="card-header border-bottom bg-light">
								<h5 class="card-title mb-0">Booking Info</h5>
							</div>

							<!-- Card body -->
							<div class="card-body">
								<ul class="list-group list-group-borderless">
									<li class="list-group-item d-flex justify-content-between align-items-center">
										<span class="h6 fw-normal mb-0">Name</span>
										<span class="fs-5">
											<?php echo $bkrow['title'].". ".$bkrow['firstname']." ".$bkrow['lastname'];?>
										</span>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center">
										<span class="h6 fw-normal mb-0">Country of Residence</span>
										<span class="fs-5"><?php echo $bkrow['country'];?></span>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center">
										<span class="h6 fw-normal mb-0">Email address</span>
										<span class="fs-5"><?php echo $bkrow['email'];?></span>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center">
										<span class="h6 fw-normal mb-0">Phone Number</span>
										<span class="fs-5"><?php echo $bkrow['phone'];?></span>
									</li>
								</ul>
							</div>
						</div>

						<div class="card bg-light rounded-2">
							<!-- card header -->
							<div class="card-header border-bottom bg-light">
								<h5 class="card-title mb-0">Price Summary</h5>
							</div>

							<!-- Card body -->
							<div class="card-body">
								<ul class="list-group list-group-borderless">
									<li class="list-group-item d-flex justify-content-between align-items-center">
										<span class="h6 fw-normal mb-0">Adults</span>
										<span class="fs-5"><?php echo $bkrow['adults'];?> person (s)</span>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center">
										<span class="h6 fw-normal mb-0">Children</span>
										<span class="fs-5"><?php echo $bkrow['children'];?> person (s)</span>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center">
										<span class="h6 fw-bold mb-0">Total Travellers</span>
										<span class="fs-5 text-success fw-bold"><?php echo $bkrow['adults'] + $bkrow['children'];?> person (s)</span>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center">
										<span class="h6 fw-bold mb-0">Package price
										<a tabindex="0" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="bottom" data-bs-content="Selected Package: <?php echo $pkgrow['title']; ?>">
												<i class="bi bi-info-circle"></i>
											</a>
										</span>
										<span class="fs-5 text-success fw-bold"><?php echo $pkgrow['currency'];?> <?php echo $pkgrow['price'];?> per person </span>
									</li>
								</ul>
							</div>

							<!-- Card footer -->
							<div class="card-footer border-top bg-light">
								<div class="d-flex justify-content-between align-items-center">
									<span class="h5 fw-normal mb-0">Total Cost</span>
									<span class="h5 fw-normal mb-0"><?php echo $pkgrow['currency'];?><?php echo number_format($pkgrow['price']*($bkrow['adults'] + $bkrow['children']));?></span>
								</div>
							</div>
						</div>
					</div>
					<!-- Price summary END -->

				</div>	
				


				<form class="bg-light rounded-3 p-4">
							<!-- Card options -->
							<div class="d-sm-flex justify-content-sm-between align-items-center mb-3">
								<h6 class="mb-2 mb-sm-0">We Accept:</h6>
								<ul class="list-inline mb-0">
									<li class="list-inline-item"> <a href="#"><img src="assets/images/element/M-PESA_LOGO-01.svg.png" class="h-30px" alt=""></a></li>
									<li class="list-inline-item"> <a href="#"><img src="assets/images/element/visa.svg" class="h-30px" alt=""></a></li>
									<li class="list-inline-item"> <a href="#"><img src="assets/images/element/mastercard.svg" class="h-30px" alt=""></a></li>
									<li class="list-inline-item"> <a href="#"><img src="assets/images/element/expresscard.svg" class="h-30px" alt=""></a></li>
								</ul>
							</div>

							<!-- Form START -->
							<div class="row g-3">
							<!-- Buttons -->
								<div class="col-12">
									<a href="pesapal/SubmitOrderRequest.php?booking_id=<?php echo $bkid;?>"" class="btn btn-primary w-100 mb-0">Proceed to Payment</a>
								</div>
							</div>
							<!-- Form END -->
						</form>

			</div>
			<!-- Left Content END -->

			
		</div>
	</div>
</section>
<!-- =======================
Main Content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

        </main>

        <!-- Footer START -->
            <?php include "includes/footer.php";?>
        <!-- Footer END -->
    </body>


</html>