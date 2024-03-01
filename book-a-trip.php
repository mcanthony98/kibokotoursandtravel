<?php 
require "includes/connect.php";

$pkgres = $conn->query("SELECT * FROM package WHERE package_status='1'");

$countryres = $conn->query("SELECT * FROM destination d JOIN country c ON d.country_id=c.country_id");
$expres = $conn->query("SELECT * FROM experience");

?>
<!DOCTYPE html>
<html lang="en">


<head>
	<title>Plan a Trip Today | Snapshot Tours and Safaris</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="keywords" content="">

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
        <h1 class="mb-3 text-center">Book a Trip Today!</h1>

      

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
                    

                </div>
            </div>
            <!-- Card body END -->
        </div>	

        <!-- Step 1 button -->
        <div class="text-start">
            <button type="submit" name="book-trip" class="btn btn-warning mb-0">Submit</button>
        </div>
        </form>
    </div>
    </div>
</section>


<!-- =======================
Hotel grid START -->
<section class="pt-0">
	<div class="container"><!-- Title -->
		<div class="row mb-4 mt-3">
			<div class="col-12 text-center">
                <h6>or</h6>
				<h4 class="mt-2 mb-3 text-danger">Browse our 2024 Deals!</h4>
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