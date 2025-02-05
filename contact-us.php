<?php 
require "includes/connect.php";

?>
<?php 
        $seo_title = "Contact Us | Kiboko Tours & Travel"; 
        $seo_desc = "Kiboko Tours and Travel offers safari tours, travel booking, hotel reservations, beach tours, and gorilla trekking in Kenya and beyond."; 

        $seo_img = "assets/images/kiboko.jpeg";
        $og_type = "website";
        $canonical = "contact-us.php/";
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

    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================
Main banner START -->
        <section class="pt-4 pt-md-5">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-xl-10">
                        <!-- Title -->
                        <h1>Connect with us</h1>
                        <p class="lead mb-0">Feel free to reach out to us for free quotes via our form below
                        </p>
                    </div>
                </div>

                <!-- Contact info -->
                <div class="row g-4">

                    <!-- Contact item START -->
                    <div class="col-md-6 col-xl-4">
                        <div class="card card-body shadow text-center align-items-center h-100">
                            <!-- Icon -->
                            <div class="icon-lg bg-info bg-opacity-10 text-info rounded-circle mb-2"><i
                                    class="bi bi-headset fs-5"></i></div>
                            <!-- Title -->
                            <h5>Call us</h5>
                            <p>We are one phone call away</p>
                            <!-- Buttons -->
                            <div class="d-grid gap-3 d-sm-block">
                                <button class="btn btn-sm btn-primary-soft"><i  class="bi bi-phone me-2"></i>+254 732 962224</button>
                            </div>
                        </div>
                    </div>
                    <!-- Contact item END -->

                    <!-- Contact item START -->
                    <div class="col-md-6 col-xl-4">
                        <div class="card card-body shadow text-center align-items-center h-100">
                            <!-- Icon -->
                            <div class="icon-lg bg-danger bg-opacity-10 text-danger rounded-circle mb-2"><i
                                    class="bi bi-inboxes-fill fs-5"></i></div>
                            <!-- Title -->
                            <h5>Email us</h5>
                            <p>Our email is open 24/7</p>
                            <!-- Buttons -->
                            <a href="mailto:info@kibokotoursandtravel.com" class="btn btn-link text-decoration-underline p-0 mb-0"><i
                                    class="bi bi-envelope me-1"></i>&#105;&#110;&#102;&#111;&#064;&#107;&#105;&#098;&#111;&#107;&#111;&#116;&#111;&#117;&#114;&#115;&#097;&#110;&#100;&#116;&#114;&#097;&#118;&#101;&#108;&#046;&#099;&#111;&#109;</a>
                        </div>
                    </div>
                    <!-- Contact item END -->

                <!-- Contact item START -->
                <div class="col-md-6 col-xl-4">
                    <div class="card card-body shadow text-center align-items-center h-100">
                        <div class="icon-lg bg-success bg-opacity-10 text-success rounded-circle mb-2"> 
                            <i class="bi bi-wechat fs-5"></i> 
                        </div>
                        <h5>Contact us on WeChat</h5>
                        <p class="mb-3">Our WeChat Number is:</p>
                        <a href="#" class="btn btn-link text-decoration-underline p-0 mb-0">
                        +254 788 050783
                                            </a> 
                    </div>

                </div>
            </div>
            <br>
            <br>

                <!-- Contact info Row 2 -->
                <div class="row g-4 justify-content-center">

                <!-- Contact item START -->
                <div class="col-md-6 col-xl-4">
                    <div class="card card-body shadow text-center align-items-center h-100">
                        <div class="icon-lg bg-success bg-opacity-10 text-success rounded-circle mb-2"> 
                            <i class="bi bi-whatsapp fs-5"></i> 
                        </div>
                        <h5>Contact us on WhatsApp</h5>
                        <p class="mb-3">Our WhatsApp Number is:</p>
                        <a href="https://api.whatsapp.com/send?phone=254732962224" class="btn btn-link text-decoration-underline p-0 mb-0">
                            <i class="bi bi-phone me-1"></i>+254 732 962 224
                        </a> 
                    </div>

                </div>

                <!-- Contact item START -->
                    <div class="col-md-6 col-xl-4">
                    <div class="card card-body shadow text-center align-items-center h-100">
                        <div class="icon-lg bg-primary bg-opacity-10 text-primary rounded-circle mb-2"> 
                            <i class="bi bi-telegram fs-5"></i> 
                        </div>
                        <h5>Contact us on Telegram</h5>
                        <p class="mb-3">Our Telegram Number is:</p>
                        <a href="https://t.me/Kiboko_Tours" class="btn btn-link text-decoration-underline p-0 mb-0">
                            <i class="bi bi-phone me-1"></i>+254 732 962 224
                        </a> 
                    </div>

                </div>
                    <!-- Contact item END -->

            </div>    

        </section>
        <!-- =======================
Main banner START -->

        <!-- =======================
Contact form and vector START -->
        <section class="pt-0 pt-lg-5">
            <div class="container">
                <div class="row g-4 g-lg-5 align-items-center">
                    <!-- Vector image START -->
                    <div class="col-lg-6 text-center">
                        <img src="assets/images/element/view.svg" loading="lazy" alt="Elephant under a tree">
                    </div>
                    <!-- Vector image END -->

                    <!-- Contact form START -->
                    <div class="col-lg-6">
                        <div class="card bg-light p-4">
                            

                            <!-- Card header -->
                            <div id="quote" class="card-header bg-light p-0 pb-3">
                                <h3 class="mb-0">Request a Free Quote</h3>
                            </div>

                            <!-- Card body START -->
                            <div card-body p-0>
                                <form class="row g-4" method="post" action="processes.php">
                                    <!-- First Name -->
                                    <div class="col-md-6">
                                        <label class="form-label">First Name *</label>
                                        <input type="text" class="form-control" name="fname" required>
                                    </div>
                                    <!-- Last Name -->
                                    <div class="col-md-6">
                                        <label class="form-label">Last Name *</label>
                                        <input type="text" class="form-control" name="lname" required>
                                    </div>
                                    <!-- Email -->
                                    <div class="col-12">
                                        <label class="form-label">Email address *</label>
                                        <input type="email" class="form-control" name="email" required>
                                    </div>

                                    <!-- Country -->
                                    <div class="col-md-5">
                                        <label class="form-label">Country of Residence *</label>
                                        <select class="form-select js-choice" data-search-enabled="true" name="country" required>
                                            <option value="">Choose..</option>
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

                                    <!-- Mobile number -->
                                    <div class="col-md-7">
                                        <label class="form-label">Mobile number *</label>
                                        <input type="text" class="form-control" name="phone" required>
                                    </div>

                                    <!-- Input item -->
                                    <div class="col-12">
                                        <label class="form-label">Number of People Travelling *</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" name="adults" placeholder="Adults">
                                            <input type="number" class="form-control" name="children" placeholder="Children">
                                        </div>
                                    </div>


                                    <!-- Message -->
                                    <div class="col-12">
                                        <label class="form-label">More info </label>
                                        <textarea class="form-control" rows="3" name="desc"></textarea>
                                    </div>
                                    <div class="col-12" id="google-recaptcha-checkbox"></div>
                                    <!-- Checkbox -->
                                    <div class="col-12 form-check ms-2">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                        <label class="form-check-label" for="exampleCheck1">
                                            By submitting this form you agree to our <a class="link-orange" target="_blank" href="assets/docs/kiboko-terms-and-conditions.pdf" download> Terms and Conditions</a>.
                                        </label>
                                    </div>
                                    <!-- Button -->
                                    <div class="col-12">
                                        <button class="btn btn-dark mb-0" name="sendsms" type="submit">Send Message</button>
                                    </div>
                                </form>
                            </div>
                            <!-- Card body END -->
                        </div>
                    </div>
                    <!-- Contact form END -->
                </div>
            </div>
        </section>
        <!-- =======================
Contact form and vector END -->

            <!-- =======================
It's Time to Discover START -->
<section class="py-0">
            <div class="container position-relative">
                <div class="bg-light rounded-3 position-relative p-4 p-sm-5">

                    <!-- Svg decoration -->
                    <figure class="position-absolute top-50 start-50 d-none d-lg-block mt-n4 ms-9">
                        <svg class="fill-primary" width="138px" height="33px">
                            <path
                                d="M105.158,32.490 L107.645,20.515 L101.600,21.873 L108.218,14.263 L110.496,2.974 L137.327,32.728 L105.158,32.490 ZM97.722,13.092 C96.678,12.477 95.604,11.881 94.529,11.319 L94.235,11.166 L94.543,10.576 L94.837,10.730 C95.922,11.296 97.006,11.898 98.060,12.519 L98.346,12.687 L98.009,13.260 L97.722,13.092 ZM91.250,9.714 C90.131,9.202 89.001,8.723 87.890,8.290 L87.581,8.170 L87.822,7.550 L88.132,7.671 C89.254,8.108 90.396,8.592 91.527,9.109 L91.829,9.247 L91.553,9.852 L91.250,9.714 ZM84.453,7.073 C83.279,6.699 82.117,6.374 80.943,6.092 L80.620,6.014 L80.776,5.368 L81.099,5.445 C82.287,5.730 83.465,6.060 84.655,6.439 L84.971,6.539 L84.770,7.173 L84.453,7.073 ZM77.372,5.388 C76.150,5.201 74.933,5.073 73.757,5.007 L73.425,4.988 L73.462,4.324 L73.794,4.343 C74.992,4.409 76.230,4.540 77.473,4.730 L77.802,4.781 L77.701,5.438 L77.372,5.388 ZM66.526,5.421 L66.199,5.480 L66.080,4.826 L66.407,4.766 C67.599,4.550 68.838,4.405 70.090,4.336 L70.422,4.318 L70.458,4.982 L70.126,5.000 C68.902,5.068 67.690,5.209 66.526,5.421 ZM59.574,7.498 L59.267,7.625 L59.014,7.010 L59.321,6.883 C60.448,6.418 61.621,6.003 62.809,5.646 L63.128,5.551 L63.318,6.188 L63.000,6.283 C61.833,6.633 60.681,7.042 59.574,7.498 ZM59.311,8.479 C60.126,9.473 60.795,10.540 61.300,11.649 L61.438,11.952 L60.833,12.228 L60.695,11.925 C60.214,10.868 59.575,9.851 58.797,8.901 L58.586,8.644 L59.100,8.222 L59.311,8.479 ZM54.714,31.225 L54.415,31.370 L54.126,30.771 L54.425,30.626 C55.435,30.137 56.398,29.436 57.287,28.542 L57.522,28.306 L57.993,28.775 L57.759,29.011 C56.816,29.959 55.792,30.703 54.714,31.225 ZM56.229,6.392 C55.322,5.672 54.309,5.004 53.218,4.408 L52.926,4.248 L53.245,3.665 L53.537,3.824 C54.662,4.439 55.706,5.128 56.643,5.871 L56.903,6.078 L56.489,6.599 L56.229,6.392 ZM56.268,8.312 L56.584,8.897 L56.292,9.055 C55.219,9.636 54.178,10.276 53.199,10.957 L52.926,11.147 L52.546,10.601 L52.819,10.411 C53.819,9.715 54.881,9.063 55.976,8.470 L56.268,8.312 ZM51.033,32.098 C50.331,32.098 49.622,32.004 48.925,31.819 C48.925,31.819 48.924,31.819 48.923,31.818 C48.397,31.678 47.868,31.483 47.351,31.238 L47.051,31.096 L47.336,30.495 L47.636,30.637 C48.117,30.865 48.608,31.046 49.095,31.176 C49.096,31.176 49.096,31.176 49.097,31.176 C49.737,31.347 50.389,31.433 51.034,31.433 L51.366,31.433 L51.366,32.098 L51.033,32.098 ZM47.808,15.784 L47.592,16.037 L47.087,15.605 L47.303,15.352 C48.086,14.437 48.962,13.546 49.905,12.704 L50.154,12.483 L50.596,12.979 L50.348,13.200 C49.426,14.022 48.572,14.892 47.808,15.784 ZM49.926,2.908 C48.822,2.493 47.656,2.136 46.459,1.846 L46.136,1.768 L46.293,1.121 L46.616,1.200 C47.836,1.495 49.031,1.861 50.160,2.285 L50.471,2.402 L50.237,3.024 L49.926,2.908 ZM44.153,21.953 L44.048,22.268 L43.418,22.058 L43.523,21.742 C43.892,20.634 44.428,19.496 45.115,18.362 L45.287,18.077 L45.856,18.421 L45.683,18.706 C45.022,19.798 44.507,20.891 44.153,21.953 ZM42.888,1.188 C41.701,1.034 40.482,0.940 39.265,0.907 L38.933,0.898 L38.951,0.233 L39.283,0.242 C40.523,0.275 41.764,0.372 42.974,0.528 L43.303,0.571 L43.218,1.230 L42.888,1.188 ZM32.021,1.426 L31.694,1.482 L31.582,0.827 L31.910,0.770 C33.121,0.564 34.357,0.414 35.583,0.326 L35.915,0.302 L35.962,0.965 L35.630,0.989 C34.426,1.076 33.212,1.223 32.021,1.426 ZM25.072,3.458 L24.766,3.588 L24.506,2.976 L24.812,2.845 C25.949,2.362 27.122,1.942 28.300,1.598 L28.619,1.505 L28.805,2.143 L28.485,2.237 C27.333,2.573 26.185,2.984 25.072,3.458 ZM18.761,7.025 L18.490,7.219 L18.103,6.679 L18.374,6.485 C19.387,5.759 20.435,5.087 21.492,4.488 L21.781,4.324 L22.108,4.902 L21.819,5.067 C20.783,5.654 19.754,6.313 18.761,7.025 ZM13.280,11.802 L13.050,12.042 L12.570,11.581 L12.801,11.341 C13.668,10.439 14.568,9.579 15.475,8.786 L15.725,8.567 L16.163,9.067 L15.913,9.286 C15.020,10.067 14.134,10.913 13.280,11.802 ZM8.648,17.428 L8.455,17.699 L7.914,17.314 L8.106,17.043 C8.831,16.023 9.585,15.035 10.349,14.106 L10.560,13.849 L11.073,14.271 L10.862,14.528 C10.109,15.445 9.364,16.420 8.648,17.428 ZM4.796,23.630 L4.637,23.922 L4.053,23.605 L4.212,23.313 C4.803,22.223 5.426,21.149 6.064,20.120 L6.240,19.837 L6.805,20.187 L6.629,20.470 C5.998,21.488 5.381,22.551 4.796,23.630 ZM1.658,30.231 L1.532,30.539 L0.917,30.286 L1.044,29.979 C1.508,28.850 2.011,27.714 2.539,26.603 L2.682,26.303 L3.282,26.588 L3.140,26.888 C2.617,27.989 2.118,29.113 1.658,30.231 ZM43.602,25.437 C43.661,26.716 44.055,27.783 44.772,28.607 L44.990,28.858 L44.488,29.295 L44.270,29.044 C43.452,28.104 43.004,26.901 42.937,25.468 L42.922,25.136 L43.586,25.104 L43.602,25.437 ZM60.942,22.425 L61.047,22.110 L61.678,22.319 L61.573,22.634 C61.175,23.834 60.657,24.979 60.033,26.037 L59.864,26.323 L59.291,25.986 L59.461,25.699 C60.061,24.681 60.559,23.580 60.942,22.425 ZM61.816,17.509 C61.836,16.777 61.795,16.048 61.694,15.341 L61.648,15.012 L62.306,14.918 L62.353,15.247 C62.458,15.991 62.502,16.758 62.480,17.527 C62.467,18.008 62.433,18.500 62.378,18.989 L62.341,19.319 L61.680,19.246 L61.717,18.915 C61.770,18.445 61.803,17.972 61.816,17.509 Z" />
                        </svg>
                    </figure>

                    <div class="row align-items-center position-relative">
                        <div class="col-lg-8">
                            <!-- Title -->
                            <div class="d-flex">
                                <h3>It's time to discover nature's best</h3>
                                <img src="assets/images/element/wild.svg" loading="lazy" class="h-100px w-100px ms-3" alt="nature and animals in the wild">
                            </div>
                            <p class="mb-3 mb-lg-0">Witness the unseen: Book your once-in-a-lifetime wildlife journey.
                            </p>
                        </div>
                        <!-- Content and input -->
                        <div class="col-lg-4 text-lg-end">
                            <a href="destinations.php" class="btn btn-lg btn-dark mb-0">Book a Package Now!</a>
                        </div>
                    </div> <!-- Row END -->
                </div>
            </div>
        </section>
        <br>
        <!-- =======================
It's Time to Discover END -->


    </main>
    <!-- **************** MAIN CONTENT END **************** -->

        <!-- Footer START -->
        <?php include "includes/footer.php";?>
        <!-- Footer END -->

        <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
            async defer>
        </script>

        <script type="text/javascript">
            var onloadCallback = function() {
                grecaptcha.render('google-recaptcha-checkbox', {
                    'sitekey' : '6Ldm68IpAAAAAOWn8REuugOiRF3Tv6ydezAD2Ui9'
                });
            };
        </script>

</body>


</html>