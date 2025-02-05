<?php 
session_start();
require "includes/connect.php";
include "includes/mailer.php";

if(!isset($_GET['id'])){
	header('location: index.php');
}
$bkid = $_GET['id'];
$bkres = $conn->query("SELECT * FROM package_booking WHERE booking_id='$bkid'");
$bkrow = $bkres->fetch_assoc();

$pkgid = $bkrow['package_id'];
$pkgres = $conn->query("SELECT * FROM package WHERE package_id='$pkgid'");
$pkgrow = $pkgres->fetch_assoc();

$txres = $conn->query("SELECT * FROM transaction WHERE booking_id = '$bkid'");
$txrow = $txres->fetch_assoc();




  //email to kiboko
  $emsubject = "New Booking from the Website";
  $embody = "
	  <p>Hello,</p>
	  <p>You have a new Booking from the website (Kibokotoursandtravel.com) <br/> Here is the message:</p>
	  <br/>
	  <p>
	  <b>Name:</b> ".$bkrow['firstname']." ".$bkrow['lastname']." <br/>
	  <b>Email:</b> ".$bkrow['email']." <br/>
	  <b>Phone:</b> ".$bkrow['phone']." <br/>
	  <b>Status:</b> PAID <br/>
	  </p> 

	  <p> Check Administrator Portal for more details!
  ";

  maillinge('info@kibokotoursandtravel.com', $emsubject, $embody);
?>
<?php 
        $seo_title = "Payment Confirmed | Kiboko Tours & Travel"; 
        $seo_desc = "Kiboko Tours and Travel offers safari tours, travel booking, hotel reservations, beach tours, and gorilla trekking in Kenya and beyond."; 

        $seo_img = "assets/images/kiboko.jpeg";
        $og_type = "website";
        $canonical = "payment-confirmation.php/";
        $robot = "noindex, nofollow";
    ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        

        <!-- Libraries, Favicon & CSS -->
        <?php include "includes/libs_fav.php";?>



    </head>

    <body>
        <!-- Header START -->
        <?php include "includes/header_navbar.php";?>
        <!-- Header END -->

        <main>

            <!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- =======================
Main content START -->
<section class="pt-4">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-xl-8 mx-auto">

				<!-- Alert box -->
				<div class="alert alert-success" role="alert">
				<h5 class="text-center">You Payment has been Received Successfully !</h5>	
				An account has been created for you.<strong class="mx-1">Confirm your email address</strong>to finish setting up your account.
				</div>

				<br>

				<div class="card shadow">

					<!-- Image -->
					<div class="d-flex justify-content-center">
						<img src="assets/images/kiboko-logo.png" class="rounded-top" alt="logo" loading="lazy" style="width: 200px; height: 200px;">
					</div>

					<!-- Card body -->
					<div class="card-body text-center p-4">
						<!-- Title -->
						<h1 class="card-title fs-3">Congratulations!</h1>
						<p class="lead mb-3">Your trip has been booked</p>

						<!-- Second title -->
						<h5 class="text-primary mb-4" style="color: darkorange !important;"><?php echo $pkgrow['title'];?></h5>

						<!-- List -->
						<div class="row justify-content-between text-start mb-4">
							<div class="col-lg-5">
								<ul class="list-group list-group-borderless">
									<li class="list-group-item d-sm-flex justify-content-between align-items-center">
										<span class="mb-0"><i class="bi bi-vr fa-fw me-2"></i>Email:</span>
										<span class="h6 fw-normal mb-0"><?php echo $bkrow['email'];?></span>
									</li>
									<li class="list-group-item d-sm-flex justify-content-between align-items-center">
										<span class="mb-0"><i class="bi bi-person fa-fw me-2"></i>Booked by:</span>
										<span class="h6 fw-normal mb-0"><?php echo $bkrow['title'].". ".$bkrow['firstname']." ".$bkrow['lastname'];?></span>
									</li>
									<li class="list-group-item d-sm-flex justify-content-between align-items-center">
										<span class="mb-0"><i class="bi bi-wallet2 fa-fw me-2"></i>Payment Method:</span>
										<span class="h6 fw-normal mb-0"><?php echo $txrow['payment_method'];?> </span>
									</li>
									<li class="list-group-item d-sm-flex justify-content-between align-items-center">
										<span class="mb-0"><i class="bi bi-currency-dollar fa-fw me-2"></i>Total Price:</span>
										<span class="h6 fw-normal mb-0"><?php echo $txrow['currency'];?> <?php echo $txrow['amount'];?></span>
									</li>
								</ul>
							</div>

							<div class="col-lg-5">
								<ul class="list-group list-group-borderless">
									<li class="list-group-item d-sm-flex justify-content-between align-items-center">
										<span class="mb-0"><i class="bi bi-calendar fa-fw me-2"></i>Date Booked:</span>
										<span class="h6 fw-normal mb-0"><?php echo date('d M Y', strtotime($txrow['date_paid']));?></span>
									</li>
									<li class="list-group-item d-sm-flex justify-content-between align-items-center">
										<span class="mb-0"><i class="bi bi-calendar fa-fw me-2"></i>Tour Date:</span>
										<span class="h6 fw-normal mb-0"> <?php echo $pkgrow['travel_dates'];?></span>
									</li>
									<li class="list-group-item d-sm-flex justify-content-between align-items-center">
										<span class="mb-0"><i class="bi bi-people fa-fw me-2"></i>Guests:</span>
										<span class="h6 fw-normal mb-0"><?php echo $bkrow['adults'] + $bkrow['children'];?></span>
									</li>
								</ul>
							</div>
						</div>

						<!-- Button -->
						<div class="d-sm-flex justify-content-sm-end d-grid">
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
							<a href="#" class="btn btn-primary mb-0"><i class="bi bi-file-pdf me-2"></i>Download PDF</a>
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

        </main>

        <!-- Footer START -->
            <?php include "includes/footer.php";?>
        <!-- Footer END -->
    </body>


</html>