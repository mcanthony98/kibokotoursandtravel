<?php 
require "includes/connect.php";

if(!isset($_GET['package'])){
	header('location: index.php');
}
$pkgid = $_GET['package'];

$pkgres = $conn->query("SELECT * FROM package WHERE package_id='$pkgid'");
$pkgrow = $pkgres->fetch_assoc();

$pkgdaysres = $conn->query("SELECT * FROM package_day pd WHERE pd.package_id='$pkgid'");

$pkgexpres = $conn->query("SELECT * FROM package_day_experience pde JOIN package_day pd ON pd.package_day_id=pde.package_day_id JOIN experience e ON e.experience_id=pde.experience_id WHERE pd.package_id=$pkgid");

$pkgdestres = $conn->query("SELECT * FROM package_day_destination pdd JOIN package_day pd ON pd.package_day_id=pdd.package_day_id JOIN destination d ON d.destination_id=pdd.destination_id WHERE pd.package_id=$pkgid GROUP BY pdd.destination_id");

$pkgdayres = $conn->query("SELECT * FROM package_day pd WHERE pd.package_id=$pkgid ORDER BY pd.day ASC");

?>
<!DOCTYPE html>
<html lang="en">


<head>
	<title>Book the <?php echo $pkgrow['seo_title'];?> Package | Snapshot Tours and Safaris</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="">
	<meta name="description" content="Reserve your slot for this package. <?php echo $pkgrow['seo_description'];?>">
	<meta name="keywords" content="<?php echo $pkgrow['seo_keywords'];?>">

	<?php include "includes/stylesheets.php";?>

</head>
<body>

    <?php include "includes/navbar.php";?>

<!-- **************** MAIN CONTENT START **************** -->
<main>
	

<section>
    <div class="container">
    <div class="vstack gap-4">
        <!-- Title -->
        <h1 class="mb-3 text-center">Book a Package</h1>

      

        <!-- Tour list START -->
        <div class="card shadow rounded-2 overflow-hidden">
            <div class="row g-0">
                <!-- Image -->
                <div class="col-sm-6 col-md-3">
                    <img src="uploads/<?php echo $pkgrow['package_image'];?>" class="" style="height:250px;width:250px" alt="<?php echo $pkgrow['title'];?>">
                </div>

                <!-- Card Body START -->
                <div class="col-sm-6 col-md-9">
                    <div class="card-body p-3">
                        <!-- Title -->
                        <h5 class="card-title mb-1"><a href="package.php?package=<?php echo $pkgid;?>"><?php echo $pkgrow['title'];?></a></h5>
                        <h6><?php echo $pkgrow['subtitle'];?></h6>

                        <!-- Rating star -->
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item me-0 small"><i class="fa-solid fa-star text-warning"></i></li>
                            <li class="list-inline-item me-0 small"><i class="fa-solid fa-star text-warning"></i></li>
                            <li class="list-inline-item me-0 small"><i class="fa-solid fa-star text-warning"></i></li>
                            <li class="list-inline-item me-0 small"><i class="fa-solid fa-star text-warning"></i></li>
                            <li class="list-inline-item me-0 small"><i class="fa-solid fa-star-half-alt text-warning"></i></li>
                        </ul>

                        <!-- List -->
                        <ul class="nav nav-divider small mb-0 mt-2">
                            <li class="nav-item mb-1"><i class="far fa-calendar-alt me-2"></i><?php echo $pkgdaysres->num_rows;?> Days, <?php echo $pkgdaysres->num_rows-1;?> Nights</li>
                            <li class="nav-item mb-1"><i class="bi bi-geo-alt-fill me-2"></i><?php echo $pkgdestres->num_rows;?> Destinations </li>
                            <li class="nav-item mb-1"><i class="bi bi-joystick me-2"></i><?php echo $pkgexpres->num_rows;?> Experiences</li>
                        </ul>
                        <!-- Price -->
                            <div class="mt-5">
                            <span class="mb-0 me-2 fs-xs">Starting from</span>
							<div class="d-flex align-items-center">
								<h5 class="fw-normal text-success mb-0 me-1"> $<?php echo $pkgrow['price'];?></h5>
								<span class="mb-0 me-2">/person</span>
							</div>
                            </div>
                    </div>
                </div>
                <!-- Card body END -->
            </div>
        </div>
        <!-- Tour list END -->

        <div class="card border">
            <!-- Card header -->
            <div class="card-header border-bottom">
                <h5 class="mb-0">Enter your Details</h5>
            </div>

            <form method="post" action="processes.php">
            <!-- Card body START -->
            <div class="card-body">
                <div class="row g-4">
                    <!-- Title -->
                    <div class="col-md-2">
                        <label class="form-label">Title</label>
                        <div class="form-control-bg-light">
                            <select name="title" class="form-select form-select-sm js-choice border-0">
                                <option value="Mr">Mr</option>
                                <option value="Mrs">Mrs</option>
                                <option value="-">Prefer not to say</option>
                            </select>
                        </div>
                    </div>

                    <!-- First Name -->
                    <div class="col-md-5">
                        <div class="form-control-bg-light">
                            <label class="form-label">Full Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                    </div>

                    <!-- Last name -->
                    <div class="col-md-5">
                        <div class="form-control-bg-light">
                            <label class="form-label">Email Address</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                    </div>

                    <!-- DOB -->
                    <div class="col-md-6">
                        <div class="form-control-bg-light">
                            <label class="form-label">Month of Travel</label>
                            <select class="form-select form-select-sm js-choice border-0" name="month">
                                <option value="January">January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                            </select>
                        </div>
                    </div>

                    <!-- Passport number -->
                    <div class="col-md-6">
                        <div class="form-control-bg-light">
                            <label class="form-label">Whatsapp number</label>
                            <input type="text" name="phone" class="form-control">
                        </div>
                    </div>


                    <!-- Passport number -->
                    <div class="col-md-12">
                        <div class="form-control-bg-light">
                            <label class="form-label">Any other information (Optional)</label>
                            <textarea name="desc" class="form-control" rows="5"></textarea>
                        </div>
                    </div>
                    
                    <input value="<?php echo $pkgrow['title'];?>" name="package" type="hidden">

                </div>
            </div>
            <!-- Card body END -->
        </div>	

        <!-- Step 1 button -->
        <div class="text-start">
            <button type="submit" name="book-package" class="btn btn-warning mb-0">Submit</button>
        </div>
        </form>
    </div>
    </div>
</section>

</main>
<!-- **************** MAIN CONTENT END **************** -->



<!-- Send Inquiry START -->
<div class="modal fade" id="inquiryForm" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<!-- Title -->
			<div class="modal-header">
				<h5 class="modal-title" id="inquiryFormlabel">Get Inquiry</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			
			<!-- Body -->
			<div class="modal-body p-3">
				<div class="card bg-transparent">
					<!-- Card header -->
					<div class="card-header bg-transparent">
						<!-- Title -->
						<h6 class="card-title mb-0">Our expert will get in touch with you shortly</h6>
					</div>

					<!-- Card body -->
					<div class="card-body pt-0">

						<form>
							<!-- Name -->
							<div class="mb-3">
								<label class="form-label">Name</label>
								<input type="text" class="form-control" placeholder="Enter Your name">
							</div>
							<!-- Email -->
							<div class="mb-3">
								<label class="form-label">Email id</label>
								<input type="email" class="form-control" placeholder="Enter Your emil id">
							</div>
							<!-- Phone number -->
							<div class="mb-3">
								<label class="form-label">Phone number</label>
								<input type="text" class="form-control" placeholder="Enter Your phone number">
							</div>

							<div class="mb-3 ms-2 form-check">
								<input type="checkbox" class="form-check-input" id="inquiryCheck">
								<label class="form-check-label" for="inquiryCheck">I agree to receive updates and offers</label>
							</div>

							<!-- Buttons -->
							<div class="d-grid gap-2 d-md-block">
								<button class="btn btn-dark mb-0" type="button">Send Inquiry</button>
								<button class="btn btn-link mb-0" type="button">Call on: +123 456 89</button>
							</div>
						</form> <!-- Form END -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Send Inquiry END -->

<!-- Back to top -->
<div class="back-top"></div>


<script src="assets/js/functions.js"></script>


<?php include "includes/footer.php";?>
<?php include "includes/scripts.php";?>


</body>

<!-- Mirrored from booking.webestica.com/tour-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Sep 2023 03:57:13 GMT -->
</html>