<?php 
require "includes/connect.php";

$pkgres = $conn->query("SELECT * FROM package WHERE package_status='1'");

$countryres = $conn->query("SELECT * FROM destination d JOIN country c ON d.country_id=c.country_id");
$expres = $conn->query("SELECT * FROM experience");

?>
<!DOCTYPE html>
<html lang="en">


<head>
	<title>Thank you for Booking | Snapshot Tours and Safaris</title>

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
Main content START -->
<section class="pt-4">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-xl-8 mx-auto">

				<div class="card shadow">
					<!-- Image -->
					<img src="assets/images/banner3.jpg" class="rounded-top" alt="">

					<!-- Card body -->
					<div class="card-body text-center p-4">
						<!-- Title -->
						<h1 class="card-title fs-3">🎊 Congratulations! 🎊</h1>
						<p class="lead mb-3">Your booking request has been received. <br> Our team will contact you shortly!</p>

						

						<!-- Button -->
						<div class="d-sm-flex justify-content-sm-center d-grid mt-5">
							<!-- Share button with dropdown -->
							<div class="dropdown me-sm-2 mb-2 mb-sm-0">
								<a href="#" class="btn btn-light mb-0 w-100" role="button" id="dropdownShare" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="bi bi-share me-2"></i>Share
								</a>
								<!-- dropdown button -->
								<ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare">
									<li><a  class="dropdown-item" href="#"><i class="fab fa-twitter-square me-2"></i>Twitter</a></li>
									<li><a class="dropdown-item" href="#"><i class="fab fa-facebook-square me-2"></i>Facebook</a></li>
									<li><a class="dropdown-item" href="#"><i class="fab fa-linkedin me-2"></i>LinkedIn</a></li>
									<li><a class="dropdown-item" href="#"><i class="fas fa-copy me-2"></i>Copy link</a></li>
								</ul>
							</div>
							<!-- Download button -->
							<a href="packages.php" class="btn btn-warning mb-0"><i class="me-2"></i>Browse our Deals</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
<!-- =======================
Main content START -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<?php include "includes/footer.php";?>
<?php include "includes/scripts.php";?>


</body>

</html>