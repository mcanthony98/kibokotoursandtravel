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
			<div class="col-xl-8">
				<div class="card bg-transparent p-0">
					<!-- Card header START -->
					<div class="card-header bg-transparent p-0">
						<h1 class="card-title fs-2 mb-0">Choose a payment option below:</h1>
					</div>
					<!-- Card header END -->

					<br>
					<br>

					<!-- Card header START -->
					<div class="card-header bg-transparent p-0">
						<h2 class="card-title fs-4 mb-0">Card Payment</h2>
					</div>

					<!-- Card body START -->
					<div class="card-body p-0 mt-3">
						<!-- Alert box -->
						<div class="alert alert-success" role="alert">
							Hey' you are saving<strong class="mx-1">$2,560</strong>discount using the appliedcoupon code
						</div>

						<form class="bg-light rounded-3 p-4">
							<!-- Card options -->
							<div class="d-sm-flex justify-content-sm-between align-items-center mb-3">
								<h6 class="mb-2 mb-sm-0">We Accept:</h6>
								<ul class="list-inline mb-0">
									<li class="list-inline-item"> <a href="#"><img src="assets/images/element/visa.svg" class="h-30px" alt=""></a></li>
									<li class="list-inline-item"> <a href="#"><img src="assets/images/element/mastercard.svg" class="h-30px" alt=""></a></li>
									<li class="list-inline-item"> <a href="#"><img src="assets/images/element/expresscard.svg" class="h-30px" alt=""></a></li>
								</ul>
							</div>

							<!-- Form START -->
							<div class="row g-3">
								<!-- Card number -->
								<div class="col-12">
									<label class="form-label"><span class="h6 fw-normal">Card Number *</span></label>
									<div class="position-relative">
										<input type="text" class="form-control" maxlength="14" placeholder="XXXX XXXX XXXX XXXX">
										<img src="assets/images/element/visa.svg" class="w-30px position-absolute top-50 end-0 translate-middle-y me-2 d-none d-sm-block" alt="">
									</div>	
								</div>
								<!-- Expiration Date -->
								<div class="col-md-6">
									<label class="form-label"><span class="h6 fw-normal">Expiration date *</span></label>
									<div class="input-group">
										<input type="text" class="form-control" maxlength="2" placeholder="Month">
										<input type="text" class="form-control" maxlength="4" placeholder="Year">
									</div>
								</div>	
								<!--Cvv code  -->
								<div class="col-md-6">
									<label class="form-label"><span class="h6 fw-normal">CVV / CVC *</span></label>
									<input type="text" class="form-control" maxlength="3" placeholder="XXX">
								</div>
								<!-- Card name -->
								<div class="col-12">
									<label class="form-label"><span class="h6 fw-normal">Name on Card *</span></label>
									<input type="text" class="form-control" aria-label="name of card holder" placeholder="Enter card holder name">
								</div>

								<!-- Buttons -->
								<div class="col-12">
									<button class="btn btn-primary w-100 mb-0">Pay with your Card</button>
								</div>
							</div>
							<!-- Form END -->
						</form>
					</div>
					<!-- Card body END -->
				</div>

				<br>
				<br>

				<!-- Card for PayPal Payment START -->
				<div class="card bg-transparent p-0">
					<!-- Card header START -->
					<div class="card-header bg-transparent p-0">
						<h2 class="card-title fs-4 mb-0">PayPal Payment</h2>
					</div>
					<!-- Card header END -->

					<!-- Card body START -->
					<div class="card-body p-0 mt-3">
						<!-- Alert box -->
						<div class="alert alert-success" role="alert">
							You can pay using your PayPal account
						</div>

						<form class="bg-light rounded-3 p-4">
							<!-- Form START -->
							<div class="row g-3">
								<!-- PayPal Email -->
								<div class="col-12">
									<label class="form-label"><span class="h6 fw-normal">PayPal Email *</span></label>
									<input type="email" class="form-control" aria-label="PayPal Email" placeholder="Enter your PayPal email">
								</div>

								<!-- Buttons -->
								<div class="col-12">
									<a href="payment-confirmation.php" class="btn btn-primary w-100 mb-0">Pay with PayPal</a>
								</div>
							</div>
							<!-- Form END -->
						</form>
					</div>
					<!-- Card body END -->
				</div>
				<!-- Card for PayPal Payment END -->

				<br>
				<br>

				<!-- Card for Mpesa Payment START -->
				<div class="card bg-transparent p-0 mt-4">
					<!-- Card header START -->
					<div class="card-header bg-transparent p-0">
						<h2 class="card-title fs-4 mb-0">Mpesa Payment</h1>
					</div>
					<!-- Card header END -->

					<!-- Card body START -->
					<div class="card-body p-0 mt-3">
						<!-- Alert box -->
						<div class="alert alert-success" role="alert">
							You can pay using Mpesa
						</div>

						<form class="bg-light rounded-3 p-4">
							<!-- Form START -->
							<div class="row g-3">
								<!-- Mpesa Phone Number -->
								<div class="col-12">
									<label class="form-label"><span class="h6 fw-normal">Mpesa Phone Number *</span></label>
									<input type="tel" class="form-control" aria-label="Mpesa Phone Number" placeholder="Enter your Mpesa phone number">
								</div>

								<!-- Buttons -->
								<div class="col-12">
									<a href="payment-confirmation.php" class="btn btn-primary w-100 mb-0">Pay with Mpesa</a>
								</div>
							</div>
							<!-- Form END -->
						</form>
					</div>
					<!-- Card body END -->
				</div>
				<!-- Card for Mpesa Payment END -->

			</div>
			<!-- Left Content END -->

			<!-- Right content START -->
			<aside class="col-xl-4">
				<div class="row g-4">
					<!-- Price summary START -->
					<div class="col-md-6 col-xl-12">
						<div class="card bg-light rounded-2">
							<!-- card header -->
							<div class="card-header border-bottom bg-light">
								<h5 class="card-title mb-0">Price Summary</h5>
							</div>

							<!-- Card body -->
							<div class="card-body">
								<ul class="list-group list-group-borderless">
									<li class="list-group-item d-flex justify-content-between align-items-center">
										<span class="h6 fw-normal mb-0">Base Fare
											<a tabindex="0" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="bottom" data-bs-content="COVID-19 test required Vaccinated travelers can visit">
												<i class="bi bi-info-circle"></i>
											</a>
										</span>
										<span class="fs-5">$8,660</span>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center">
										<span class="h6 fw-normal mb-0">Discount</span>
										<span class="fs-5 text-danger">-$2,560</span>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center">
										<span class="h6 fw-normal mb-0">Other Services</span>
										<span class="fs-5">$20</span>
									</li>
								</ul>
							</div>

							<!-- Card footer -->
							<div class="card-footer border-top bg-light">
								<div class="d-flex justify-content-between align-items-center">
									<span class="h5 fw-normal mb-0">Total Cost</span>
									<span class="h5 fw-normal mb-0">$6,500</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Price summary END -->

				</div>	
			</aside>
			<!-- Right content END -->
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