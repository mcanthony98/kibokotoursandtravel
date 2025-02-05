<?php 
require "includes/connect.php";

if(!isset($_GET['id'])){
	header('location: index.php');
}
$pkgid = $_GET['id'];
$pkgres = $conn->query("SELECT * FROM package WHERE package_id='$pkgid'");
$pkgrow = $pkgres->fetch_assoc();
?>
<?php 
        $seo_title = "Book a Package | Kiboko Tours & Travel"; 
        $seo_desc = "Kiboko Tours and Travel offers safari tours, travel booking, hotel reservations, beach tours, and gorilla trekking in Kenya and beyond."; 

        $seo_img = "assets/images/kiboko.jpeg";
        $og_type = "website";
        $canonical = "booking.php/";
        $robot = "index, follow";
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

            		<!-- Booking form START -->
                    <form class="card border col-md-8 col-sm-10 mx-auto"  method="post" action="processes.php">
						<!-- Card header -->
						<div class="card-header border-bottom px-4">
							<h3 class="card-title mb-0">Customer Details</h3>
						</div>

						<!-- Card body START -->
						<div class="card-body py-4">
							<!-- Badge with content -->
							<div class="bg-primary bg-opacity-10 rounded-2 p-3 mb-3">
								<p class="h6 fw-light small mb-0"><span class="badge bg-orange me-2">Booking for:</span><?php echo $pkgrow['title'];?> (<?php echo $pkgrow['currency'];?> <?php echo number_format($pkgrow['price']);?>)</p>
							</div>

							<!-- Form START -->
							<div class="row g-4">
												<!-- Select item -->
												<div class="col-md-3">
													<label class="form-label">Title</label>
													<select class="form-select js-choice" name="title">
														<option value="Mr">Mr</option>
														<option value="Mrs">Mrs</option>
														<option value="Ms">Ms</option>
													</select>
												</div>

												<!-- Input item -->
												<div class="col-md-9">
													<label class="form-label">Full name</label>
													<div class="input-group">
														<input type="text" class="form-control" name="fname" placeholder="First name" required>
														<input type="text" class="form-control" name="lname" placeholder="Last name" required>
													</div>
												</div>


												<!-- Select item -->
												<div class="col-md-6">
													<label class="form-label">Country of Residence</label>
													<select class="form-select js-choice" data-search-enabled="true" name="country" required>
														<option value="">Select Country</option>
														<option value="Afghanistan">Afghanistan</option>
			<option value="Albania">Albania</option>
			<option value="Algeria">Algeria</option>
			<option value="Andorra">Andorra</option>
			<option value="Angola">Angola</option>
			<option value="Antigua and Barbuda">Antigua and Barbuda</option>
			<option value="Argentina">Argentina</option>
			<option value="Armenia">Armenia</option>
			<option value="Australia">Australia</option>
			<option value="Austria">Austria</option>
			<option value="Azerbaijan">Azerbaijan</option>
			<option value="Bahamas">Bahamas</option>
			<option value="Bahrain">Bahrain</option>
			<option value="Bangladesh">Bangladesh</option>
			<option value="Barbados">Barbados</option>
			<option value="Belarus">Belarus</option>
			<option value="Belgium">Belgium</option>
			<option value="Belize">Belize</option>
			<option value="Benin">Benin</option>
			<option value="Bhutan">Bhutan</option>
			<option value="Bolivia">Bolivia</option>
			<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
			<option value="Botswana">Botswana</option>
			<option value="Brazil">Brazil</option>
			<option value="Brunei">Brunei</option>
			<option value="Bulgaria">Bulgaria</option>
			<option value="Burkina Faso">Burkina Faso</option>
			<option value="Burundi">Burundi</option>
			<option value="Cabo Verde">Cabo Verde</option>
			<option value="Cambodia">Cambodia</option>
			<option value="Cameroon">Cameroon</option>
			<option value="Canada">Canada</option>
			<option value="Central African Republic">Central African Republic</option>
			<option value="Chad">Chad</option>
			<option value="Chile">Chile</option>
			<option value="China">China</option>
			<option value="Colombia">Colombia</option>
			<option value="Comoros">Comoros</option>
			<option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option>
			<option value="Congo, Republic of the">Congo, Republic of the</option>
			<option value="Costa Rica">Costa Rica</option>
			<option value="Croatia">Croatia</option>
			<option value="Cuba">Cuba</option>
			<option value="Cyprus">Cyprus</option>
			<option value="Czech Republic">Czech Republic</option>
			<option value="Denmark">Denmark</option>
			<option value="Djibouti">Djibouti</option>
			<option value="Dominica">Dominica</option>
			<option value="Dominican Republic">Dominican Republic</option>
			<option value="East Timor (Timor-Leste)">East Timor (Timor-Leste)</option>
			<option value="Ecuador">Ecuador</option>
			<option value="Egypt">Egypt</option>
			<option value="El Salvador">El Salvador</option>
			<option value="Equatorial Guinea">Equatorial Guinea</option>
			<option value="Eritrea">Eritrea</option>
			<option value="Estonia">Estonia</option>
			<option value="Eswatini">Eswatini</option>
			<option value="Ethiopia">Ethiopia</option>
			<option value="Fiji">Fiji</option>
			<option value="Finland">Finland</option>
			<option value="France">France</option>
			<option value="Gabon">Gabon</option>
			<option value="Gambia">Gambia</option>
			<option value="Georgia">Georgia</option>
			<option value="Germany">Germany</option>
			<option value="Ghana">Ghana</option>
			<option value="Greece">Greece</option>
			<option value="Grenada">Grenada</option>
			<option value="Guatemala">Guatemala</option>
			<option value="Guinea">Guinea</option>
			<option value="Guinea-Bissau">Guinea-Bissau</option>
			<option value="Guyana">Guyana</option>
			<option value="Haiti">Haiti</option>
			<option value="Honduras">Honduras</option>
			<option value="Hungary">Hungary</option>
			<option value="Iceland">Iceland</option>
			<option value="India">India</option>
			<option value="Indonesia">Indonesia</option>
			<option value="Iran">Iran</option>
			<option value="Iraq">Iraq</option>
			<option value="Ireland">Ireland</option>
			<option value="Israel">Israel</option>
			<option value="Italy">Italy</option>
			<option value="Jamaica">Jamaica</option>
			<option value="Japan">Japan</option>
			<option value="Jordan">Jordan</option>
			<option value="Kazakhstan">Kazakhstan</option>
			<option value="Kenya">Kenya</option>
			<option value="Kiribati">Kiribati</option>
			<option value="Korea, North">Korea, North</option>
			<option value="Korea, South">Korea, South</option>
			<option value="Kosovo">Kosovo</option>
			<option value="Kuwait">Kuwait</option>
			<option value="Kyrgyzstan">Kyrgyzstan</option>
			<option value="Laos">Laos</option>
			<option value="Latvia">Latvia</option>
			<option value="Lebanon">Lebanon</option>
			<option value="Lesotho">Lesotho</option>
			<option value="Liberia">Liberia</option>
			<option value="Libya">Libya</option>
			<option value="Liechtenstein">Liechtenstein</option>
			<option value="Lithuania">Lithuania</option>
			<option value="Luxembourg">Luxembourg</option>
			<option value="Madagascar">Madagascar</option>
			<option value="Malawi">Malawi</option>
			<option value="Malaysia">Malaysia</option>
			<option value="Maldives">Maldives</option>
			<option value="Mali">Mali</option>
			<option value="Malta">Malta</option>
			<option value="Marshall Islands">Marshall Islands</option>
			<option value="Mauritania">Mauritania</option>
			<option value="Mauritius">Mauritius</option>
			<option value="Mexico">Mexico</option>
			<option value="Micronesia">Micronesia</option>
			<option value="Moldova">Moldova</option>
			<option value="Monaco">Monaco</option>
			<option value="Mongolia">Mongolia</option>
			<option value="Montenegro">Montenegro</option>
			<option value="Morocco">Morocco</option>
			<option value="Mozambique">Mozambique</option>
			<option value="Myanmar">Myanmar</option>
			<option value="Namibia">Namibia</option>
			<option value="Nauru">Nauru</option>
			<option value="Nepal">Nepal</option>
			<option value="Netherlands">Netherlands</option>
			<option value="New Zealand">New Zealand</option>
			<option value="Nicaragua">Nicaragua</option>
			<option value="Niger">Niger</option>
			<option value="Nigeria">Nigeria</option>
			<option value="North Macedonia">North Macedonia</option>
			<option value="Norway">Norway</option>
			<option value="Oman">Oman</option>
			<option value="Pakistan">Pakistan</option>
			<option value="Palau">Palau</option>
			<option value="Palestine">Palestine</option>
			<option value="Panama">Panama</option>
			<option value="Papua New Guinea">Papua New Guinea</option>
			<option value="Paraguay">Paraguay</option>
			<option value="Peru">Peru</option>
			<option value="Philippines">Philippines</option>
			<option value="Poland">Poland</option>
			<option value="Portugal">Portugal</option>
			<option value="Qatar">Qatar</option>
			<option value="Romania">Romania</option>
			<option value="Russia">Russia</option>
			<option value="Rwanda">Rwanda</option>
			<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
			<option value="Saint Lucia">Saint Lucia</option>
			<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
			<option value="Samoa">Samoa</option>
			<option value="San Marino">San Marino</option>
			<option value="Sao Tome and Principe">Sao Tome and Principe</option>
			<option value="Saudi Arabia">Saudi Arabia</option>
			<option value="Senegal">Senegal</option>
			<option value="Serbia">Serbia</option>
			<option value="Seychelles">Seychelles</option>
			<option value="Sierra Leone">Sierra Leone</option>
			<option value="Singapore">Singapore</option>
			<option value="Slovakia">Slovakia</option>
			<option value="Slovenia">Slovenia</option>
			<option value="Solomon Islands">Solomon Islands</option>
			<option value="Somalia">Somalia</option>
			<option value="South Africa">South Africa</option>
			<option value="South Sudan">South Sudan</option>
			<option value="Spain">Spain</option>
			<option value="Sri Lanka">Sri Lanka</option>
			<option value="Sudan">Sudan</option>
			<option value="Suriname">Suriname</option>
			<option value="Sweden">Sweden</option>
			<option value="Switzerland">Switzerland</option>
			<option value="Syria">Syria</option>
			<option value="Taiwan">Taiwan</option>
			<option value="Tajikistan">Tajikistan</option>
			<option value="Tanzania">Tanzania</option>
			<option value="Thailand">Thailand</option>
			<option value="Togo">Togo</option>
			<option value="Tonga">Tonga</option>
			<option value="Trinidad and Tobago">Trinidad and Tobago</option>
			<option value="Tunisia">Tunisia</option>
			<option value="Turkey">Turkey</option>
			<option value="Turkmenistan">Turkmenistan</option>
			<option value="Tuvalu">Tuvalu</option>
			<option value="Uganda">Uganda</option>
			<option value="Ukraine">Ukraine</option>
			<option value="United Arab Emirates">United Arab Emirates</option>
			<option value="United Kingdom">United Kingdom</option>
			<option value="United States">United States</option>
			<option value="Uruguay">Uruguay</option>
			<option value="Uzbekistan">Uzbekistan</option>
			<option value="Vanuatu">Vanuatu</option>
			<option value="Vatican City">Vatican City</option>
			<option value="Venezuela">Venezuela</option>
			<option value="Vietnam">Vietnam</option>
			<option value="Yemen">Yemen</option>
			<option value="Zambia">Zambia</option>
			<option value="Zimbabwe">Zimbabwe</option>
			</select>
												</div>

												
												<!-- Select group -->
												<div class="col-md-6">
													<label class="form-label">Date Of Travel</label>
													<div class="row g-0">
														<div class="col-4">
															<div class="choice-radius-end">
																<select class="form-select js-choice z-index-9 rounded-start" name="day" required>
																	<option value="">Date</option>
																	<?php for($i=1;$i<32;$i++){?>
																	<option value="<?php echo $i;?>"><?php echo $i;?></option>
																	<?php } ?>
																	
																</select>
															</div>
														</div>
														<div class="col-4">
															<div class="choice-radius-0">
																<select class="form-select choice-radius-0 js-choice z-index-9 border-0 bg-light" name="month" required>
																	<option value="">Month</option>
																	<option value="1">Jan</option>
																	<option value="2">Feb</option>
																	<option value="3">Mar</option>
																	<option value="4">Apr</option>
																	<option value="5">May</option>
																	<option value="6">Jun</option>
																	<option value="7">Jul</option>
																	<option value="8">Aug</option>
																	<option value="9">Sep</option>
																	<option value="10">Oct</option>
																	<option value="11">Nov</option>
																	<option value="12">Dec</option>
																</select>
															</div>
														</div>
														<div class="col-4">
															<div class="choice-radius-start">
																<select class="form-select js-choice z-index-9 border-0 bg-light" name="year" required >
																	<option value='<?php echo date("Y");?>' ><?php echo date("Y");?></option>
																	<option value='<?php echo date("Y")+1;?>' ><?php echo date("Y")+1;?></option>
																	
																</select>
															</div>
														</div>
													</div>
												</div>

												
												<!-- Input item -->
												<div class="col-md-6">
													<label class="form-label">Email Address</label>
													<input type="email" class="form-control" placeholder="Enter your email address" name="email" required>
												</div>

																<!-- Input item -->
												<div class="col-md-6">
													<label class="form-label">Mobile Number</label>
													<input type="text" class="form-control" placeholder="Enter your mobile number" name="phone" required>
												</div>

												<!-- Input item -->
												<div class="col-md-9">
													<label class="form-label">Number of People Travelling (<span id="totaltravellers"></span>)</label>
													<div class="input-group">
														<input type="number" min="1" class="form-control" name="adults" id="adults" placeholder="Adults (12yrs and above)" required>
														<input type="number" min="0" class="form-control" name="children" id="children" placeholder="Children (3yrs - 11yrs)" required>

													</div>
												</div>

												<input type="hidden" value="<?php echo $pkgrow['price'];?>" id="pprice">
												<input type="hidden" value="<?php echo $pkgid;?>" name="packageid">

												<div class="col-md-3">
													<label class="form-label">Total Payable (<?php echo $pkgrow['currency'];?>)</label>
													<div class="input-group">
														<input type="text" class="form-control disabled" id="total" name="price" placeholder="Total" readonly >
													</div>
												</div>

											</div>
											<!-- Form END -->


							
							<!-- Button -->
							<div class="d-grid mt-4">
								<button class="btn btn-primary mb-0" type="submit" name="booking">Proceed To Payment</button>
							</div>
						</div>
						<!-- Card body END -->
					</form>
					<!-- Booking form END -->

        </main>

        <!-- Footer START -->
            <?php include "includes/footer.php";?>
        <!-- Footer END -->

		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script>
			$(document).ready(function(){
				// Function to update the total
				function updateTotal() {
					var adults = parseInt($('#adults').val()) || 0;
					var children = parseInt($('#children').val()) || 0;
					var pprice = parseInt($('#pprice').val()) || 0;
					var total = adults + children;
					var totalp = (adults + (children*0.5))*pprice;
					$('#total').val(totalp);
					$('#totaltravellers').html(total);
				}
			
				// Call updateTotal when either adults or children input fields change
				$('#adults, #children').on('input', updateTotal);
			});
			</script>
    </body>


</html>