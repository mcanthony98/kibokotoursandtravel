<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Book a Package | Kiboko Tours & Travel</title>

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

            		<!-- Booking form START -->
                    <form class="card border" style="width: 70%; margin: auto;">
						<!-- Card header -->
						<div class="card-header border-bottom px-4">
							<h3 class="card-title mb-0">Traveler Details</h3>
						</div>

						<!-- Card body START -->
						<div class="card-body py-4">
							<!-- Badge with content -->
							<div class="bg-danger bg-opacity-10 rounded-2 p-3 mb-3">
								<p class="h6 fw-light small mb-0"><span class="badge bg-danger me-2">New</span>Please make sure you enter the Name as per your passport</p>
							</div>

							<!-- Button -->
							<div class="d-flex justify-content-end mb-3">
								<a href="#" class="btn btn-primary-soft mb-0 me-2">Add New Adult</a>
								<a href="#" class="btn btn-primary-soft mb-0">Add New Child</a>
							</div>

							<!-- Accordion START -->
							<div class="accordion accordion-icon accordion-bg-light" id="accordionExample2">
								<!-- Item -->
								<div class="accordion-item mb-3">
									<h6 class="accordion-header font-base" id="heading-1">
										<button class="accordion-button fw-bold rounded collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
											Adult 1
										</button>
									</h6>
									<!-- Accordion Body START -->
									<div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#accordionExample2">
										<div class="accordion-body mt-3">
											
											<!-- Form START -->
											<div class="row g-4">
												<!-- Select item -->
												<div class="col-md-3">
													<label class="form-label">Title</label>
													<select class="form-select js-choice">
														<option>Mr</option>
														<option>Mrs</option>
													</select>
												</div>

												<!-- Input item -->
												<div class="col-md-9">
													<label class="form-label">Full name</label>
													<div class="input-group">
														<input type="text" class="form-control" placeholder="First name">
														<input type="text" class="form-control" placeholder="Last name">
													</div>
												</div>

												<!-- Select group -->
												<div class="col-md-6">
													<label class="form-label">Date Of Birth</label>
													<div class="row g-0">
														<div class="col-4">
															<div class="choice-radius-end">
																<select class="form-select js-choice z-index-9 rounded-start">
																	<option value="">Date</option>
																	<option>1</option>
																	<option>2</option>
																	<option>3</option>
																	<option>4</option>
																	<option>5</option>
																	<option>6</option>
																	<option>7</option>
																	<option>8</option>
																	<option>9</option>
																	<option>10</option>
																	<option>11</option>
																	<option>12</option>
																	<option>13</option>
																	<option>14</option>
																	<option>15</option>
																	<option>16</option>
																	<option>17</option>
																	<option>18</option>
																	<option>19</option>
																	<option>20</option>
																	<option>21</option>
																	<option>22</option>
																	<option>23</option>
																	<option>24</option>
																	<option>25</option>
																	<option>26</option>
																	<option>27</option>
																	<option>28</option>
																	<option>29</option>
																	<option>30</option>
																	<option>31</option>
																</select>
															</div>
														</div>
														<div class="col-4">
															<div class="choice-radius-0">
																<select class="form-select choice-radius-0 js-choice z-index-9 border-0 bg-light">
																	<option value="">Month</option>
																	<option>Jan</option>
																	<option>Feb</option>
																	<option>Mar</option>
																	<option>Apr</option>
																	<option>May</option>
																	<option>Jun</option>
																	<option>Jul</option>
																	<option>Aug</option>
																	<option>Sep</option>
																	<option>Oct</option>
																	<option>Nov</option>
																	<option>Dec</option>
																</select>
															</div>
														</div>
														<div class="col-4">
															<div class="choice-radius-start">
																<select class="form-select js-choice z-index-9 border-0 bg-light">
																	<option value="">Year</option>
																	<option>1990</option>
																	<option>1991</option>
																	<option>1992</option>
																	<option>1993</option>
																	<option>1994</option>
																	<option>1995</option>
																	<option>1996</option>
																	<option>1997</option>
																	<option>1998</option>
																	<option>1999</option>
																	<option>2000</option>
																	<option>2001</option>
																	<option>2002</option>
																	<option>2003</option>
																	<option>2004</option>
																	<option>2005</option>
																</select>
															</div>
														</div>
													</div>
												</div>

												<!-- Select item -->
												<div class="col-md-6">
													<label class="form-label">Nationality</label>
													<select class="form-select js-choice">
														<option value="">Select Nationality</option>
														<option>USA</option>
														<option>Canada</option>
														<option>Japan</option>
														<option>Germany</option>
														<option>Italy</option>
														<option>Spain</option>
														<option>China</option>
														<option>Portugal</option>
														<option>Norway</option>
														<option>France</option>
														<option>Poland</option>
													</select>
												</div>

												<!-- Input item -->
												<div class="col-md-6">
													<label class="form-label">Passport Number</label>
													<input type="text" class="form-control" placeholder="Enter passport number">
												</div>

												<!-- Select item -->
												<div class="col-md-6">
													<label class="form-label">Passport Issuing Country</label>
													<select class="form-select js-choice">
														<option value="">Select Country</option>
														<option>USA</option>
														<option>Canada</option>
														<option>Japan</option>
														<option>Germany</option>
														<option>Italy</option>
														<option>Spain</option>
														<option>China</option>
														<option>Portugal</option>
														<option>Norway</option>
														<option>France</option>
														<option>Poland</option>

													</select>
												</div>

												<!-- Select group -->
												<div class="col-md-6">
													<label class="form-label">Passport Expiry</label>
													<input type="text" class="form-control flatpickr" placeholder="Enter passport date" data-date-format="d M y">
												</div>
											</div>
											<!-- Form END -->

										</div>
									</div>
									<!-- Accordion Body END -->
								</div>

								<!-- Child Accordion -->

			
								<!-- Item -->
								<div class="accordion-item">
									<h6 class="accordion-header font-base" id="heading-2">
										<button class="accordion-button rounded fw-bold collapsed pe-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
											Child 1
										</button>
									</h6>
									<!-- Body -->
									<div id="collapse-1" class="accordion-collapse collapse" aria-labelledby="heading-1" data-bs-parent="#accordionExample2">
										<div class="accordion-body mt-3">
											
											<!-- Form START -->
											<div class="row g-4">

												<!-- Input item -->
												<div class="col-md-9">
													<label class="form-label">Full name</label>
													<div class="input-group">
														<input type="text" class="form-control" placeholder="First name">
														<input type="text" class="form-control" placeholder="Last name">
													</div>
												</div>

												<!-- Input item -->
												<div class="col-md-9">
													<label class="form-label">Parent/Guardian Name</label>
													<div class="input-group">
														<input type="text" class="form-control" placeholder="First name">
														<input type="text" class="form-control" placeholder="Last name">
													</div>
												</div>

												<!-- Select group -->
												<div class="col-md-6">
													<label class="form-label">Date Of Birth</label>
													<div class="row g-0">
														<div class="col-4">
															<div class="choice-radius-end">
																<select class="form-select js-choice z-index-9 rounded-start">
																	<option value="">Date</option>
																	<option>1</option>
																	<option>2</option>
																	<option>3</option>
																	<option>4</option>
																	<option>5</option>
																	<option>6</option>
																	<option>7</option>
																	<option>8</option>
																	<option>9</option>
																	<option>10</option>
																	<option>11</option>
																	<option>12</option>
																	<option>13</option>
																	<option>14</option>
																	<option>15</option>
																	<option>16</option>
																	<option>17</option>
																	<option>18</option>
																	<option>19</option>
																	<option>20</option>
																	<option>21</option>
																	<option>22</option>
																	<option>23</option>
																	<option>24</option>
																	<option>25</option>
																	<option>26</option>
																	<option>27</option>
																	<option>28</option>
																	<option>29</option>
																	<option>30</option>
																	<option>31</option>
																</select>
															</div>
														</div>
														<div class="col-4">
															<div class="choice-radius-0">
																<select class="form-select choice-radius-0 js-choice z-index-9 border-0 bg-light">
																	<option value="">Month</option>
																	<option>Jan</option>
																	<option>Feb</option>
																	<option>Mar</option>
																	<option>Apr</option>
																	<option>May</option>
																	<option>Jun</option>
																	<option>Jul</option>
																	<option>Aug</option>
																	<option>Sep</option>
																	<option>Oct</option>
																	<option>Nov</option>
																	<option>Dec</option>
																</select>
															</div>
														</div>
														<div class="col-4">
															<div class="choice-radius-start">
																<select class="form-select js-choice z-index-9 border-0 bg-light">
																	<option value="">Year</option>
																	<option>1990</option>
																	<option>1991</option>
																	<option>1992</option>
																	<option>1993</option>
																	<option>1994</option>
																	<option>1995</option>
																	<option>1996</option>
																	<option>1997</option>
																	<option>1998</option>
																	<option>1999</option>
																	<option>2000</option>
																	<option>2001</option>
																	<option>2002</option>
																	<option>2003</option>
																	<option>2004</option>
																	<option>2005</option>
																</select>
															</div>
														</div>
													</div>
												</div>

												<!-- Select item -->
												<div class="col-md-6">
													<label class="form-label">Nationality</label>
													<select class="form-select js-choice">
														<option value="">Select Nationality</option>
														<option>USA</option>
														<option>Canada</option>
														<option>Japan</option>
														<option>Germany</option>
														<option>Italy</option>
														<option>Spain</option>
														<option>China</option>
														<option>Portugal</option>
														<option>Norway</option>
														<option>France</option>
														<option>Poland</option>
													</select>
												</div>

												<!-- Input item -->
												<div class="col-md-6">
													<label class="form-label">Passport Number</label>
													<input type="text" class="form-control" placeholder="Enter passport number">
												</div>

												<!-- Select item -->
												<div class="col-md-6">
													<label class="form-label">Passport Issuing Country</label>
													<select class="form-select js-choice">
														<option value="">Select Country</option>
														<option>USA</option>
														<option>Canada</option>
														<option>Japan</option>
														<option>Germany</option>
														<option>Italy</option>
														<option>Spain</option>
														<option>China</option>
														<option>Portugal</option>
														<option>Norway</option>
														<option>France</option>
														<option>Poland</option>

													</select>
												</div>

												<!-- Select group -->
												<div class="col-md-6">
													<label class="form-label">Passport Expiry</label>
													<input type="text" class="form-control flatpickr" placeholder="Enter passport date" data-date-format="d M y">
												</div>
											</div>
											<!-- Form END -->

										</div>
									</div>
								</div>
							</div>
							<!-- Accordion END -->

							<!-- Number and email START -->
							<!-- Title -->
							<h5 class="mt-4">Booking detail will be sent to</h5>
							<div class="row g-3 g-md-4">
								<!-- Input item -->
								<div class="col-md-6">
									<label class="form-label">Mobile Number</label>
									<input type="text" class="form-control" placeholder="Enter your mobile number">
								</div>

								<!-- Input item -->
								<div class="col-md-6">
									<label class="form-label">Email Address</label>
									<input type="email" class="form-control" placeholder="Enter your email address">
								</div>
							</div>
							<!-- Number and email START -->

							<!-- Button -->
							<div class="d-grid mt-4">
								<a href="flight-booking.html" class="btn btn-primary mb-0">Proceed To Payment</a>
							</div>
						</div>
						<!-- Card body END -->
					</form>
					<!-- Booking form END -->

        </main>

        <!-- Footer START -->
            <?php include "includes/footer.php";?>
        <!-- Footer END -->
    </body>


</html>