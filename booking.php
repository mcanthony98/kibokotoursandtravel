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
                    <form class="card border col-md-8 col-sm-10 mx-auto">
						<!-- Card header -->
						<div class="card-header border-bottom px-4">
							<h3 class="card-title mb-0">Customer Details</h3>
						</div>

						<!-- Card body START -->
						<div class="card-body py-4">
							<!-- Badge with content -->
							<div class="bg-danger bg-opacity-10 rounded-2 p-3 mb-3">
								<p class="h6 fw-light small mb-0"><span class="badge bg-danger me-2">New</span>Please make sure you enter the Name as per your passport</p>
							</div>

							<!-- Form START -->
							<div class="row g-4">
												<!-- Select item -->
												<div class="col-md-3">
													<label class="form-label">Title</label>
													<select class="form-select js-choice">
														<option>Mr</option>
														<option>Mrs</option>
														<option>Ms</option>
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

												
												<!-- Select group -->
												<div class="col-md-6">
													<label class="form-label">Date Of Travel</label>
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

												
												<!-- Input item -->
												<div class="col-md-6">
													<label class="form-label">Email Address</label>
													<input type="email" class="form-control" placeholder="Enter your email address">
												</div>

																<!-- Input item -->
												<div class="col-md-6">
													<label class="form-label">Mobile Number</label>
													<input type="text" class="form-control" placeholder="Enter your mobile number">
												</div>

												<!-- Input item -->
												<div class="col-md-9">
													<label class="form-label">Number of People Travelling</label>
													<div class="input-group">
														<input type="number" class="form-control" placeholder="Adults">
														<input type="number" class="form-control" placeholder="Children">
													</div>
												</div>

											</div>
											<!-- Form END -->


							
							<!-- Button -->
							<div class="d-grid mt-4">
								<a href="payment.php" class="btn btn-primary mb-0">Proceed To Payment</a>
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