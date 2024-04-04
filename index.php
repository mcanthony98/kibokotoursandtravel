<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Home | Kiboko Tours & Travel</title>

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
<header class="header-transparent">

        <!-- Top alert START -->
        <div class="alert alert-warning py-2 m-0 border-0 bg-transparent rounded-0 alert-dismissible fade show text-center overflow-hidden d-inline-flex justify-content-end w-100" role="alert">
        <p class="text-warning m-0" style="color: #ff8c00; margin-right: 5px;">
            <a href="mailto:info@kibokotoursandtravel.com" class="link-light text-decoration-underline" style="color: #ff8c00;"><i class="fa fa-envelope"></i>  <span class="d-none d-md-inline">info@kibokotoursandtravel.com</span></a>
        </p>
        <span class="ms-3">
            <a href="https://api.whatsapp.com/send?phone=254732962224" target="_blank" class="link-light text-decoration-underline"><i class="bi bi-whatsapp "></i> <span class="d-none d-md-inline">Whatsapp: +254 732 962224</span></a>
        </span>
        </div>
	<!-- Logo Nav START -->
	<nav class="navbar navbar-dark navbar-expand-xl">
		<div class="container-fluid px-md-5">
			<!-- Logo START -->
            <a class="navbar-brand pt-2" href="index.php">
                <img class="navbar-brand-item d-none d-md-block" src="assets/images/kiboko-logo.png" alt="logo" style="width:100px; height:auto;">
                <img class="navbar-brand-item d-block d-md-none" src="assets/images/kiboko-logo.png" alt="logo" style="width:80px; height:auto;">
            </a>
			<!-- Logo END -->

      <!-- Responsive navbar toggler -->
			<button class="navbar-toggler ms-auto me-3 p-0 order-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-animation">
					<span></span>
					<span></span>
					<span></span>
				</span>
			</button>

 			<!-- Main navbar START -->
			 <div class="navbar-collapse collapse" id="navbarCollapse">
				<ul class="navbar-nav navbar-nav-scroll mx-auto">


				<div class="col-12">
                        <!-- Navbar top Right-->
                        <div class="align-items-center justify-content-center d-none d-lg-flex">
                            <ul class="nav border-bottom">

                                <!-- Google Translate Functionality -->
                                <div id="google_translate_element"></div> 

                                <li class="nav-item"> <a href="#" class="nav-link small pb-2" style="color: white; font-weight: bold"><i
                                            class="bi bi-info-circle me-2" style="color: white; font-weight: bold"></i>Help</a> </li>
                                <li class="nav-item"> <a href="sign-in.php" class="nav-link small pb-2" style="color: white; font-weight: bold"><i
                                            class="far fa-user me-2" style="color: white; font-weight: bold"></i>B2B Login</a> </li>
                                <!-- Dark mode option START -->
                                <li class="nav-item dropdown">
                                    <button class="btn btn-link text-warning lh-3 p-0 mb-0" id="bd-theme" type="button"
                                        aria-expanded="false" data-bs-toggle="dropdown" data-bs-display="static">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-circle-half theme-icon-active fa-fw"
                                            viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
                                            <use href="#"></use>
                                        </svg>
                                    </button>

                                    <ul class="dropdown-menu min-w-auto dropdown-menu-end" aria-labelledby="bd-theme">
                                        <li class="mb-1">
                                            <button type="button" class="dropdown-item d-flex align-items-center"
                                                data-bs-theme-value="light">
                                                <svg width="16" height="16" fill="currentColor"
                                                    class="bi bi-brightness-high-fill fa-fw mode-switch me-1"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
                                                    <use href="#"></use>
                                                </svg>Light
                                            </button>
                                        </li>
                                        <li class="mb-1">
                                            <button type="button" class="dropdown-item d-flex align-items-center"
                                                data-bs-theme-value="dark">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor"
                                                    class="bi bi-moon-stars-fill fa-fw mode-switch me-1"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
                                                    <path
                                                        d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
                                                    <use href="#"></use>
                                                </svg>Dark
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="dropdown-item d-flex align-items-center active"
                                                data-bs-theme-value="auto">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-circle-half fa-fw mode-switch me-1"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
                                                    <use href="#"></use>
                                                </svg>Auto
                                            </button>
                                        </li>
                                    </ul>
                                </li>
                                <!-- Dark mode option END -->
                            </ul>
                        </div>

                        <div class="d-sm-flex align-items-center justify-content-end">
                            <!-- Main navbar START -->
                            <div class="navbar-collapse collapse" id="navbarCollapse">
                                <ul class="navbar-nav navbar-nav-scroll ms-auto">


                                <!-- Nav item Find hotel -->
								<li class="nav-item dropdown dropdown-fullwidth">
									<a class="nav-link dropdown-toggle" href="#" id="hotelMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">DISCOVER KENYA</a>
									<div class="dropdown-menu" aria-labelledby="hotelMenu">
										<div class="container">
											<div class="row g-4 justify-content-between p-lg-3">
												<!-- Destination -->
												<div class="col-lg-5">
                                                    <h6 class="mb-3"><a href="destinations.php"><i class="bi bi-pin-map-fill text-warning me-2"></i>Destinations</a></h6>
													<hr class="my-2">
													<div class="row">
														<div class="col-lg-6">
															<ul class="list-unstyled">
																<li> <a class="dropdown-item" href="destinations-details.php">Amboseli National Park</a> </li>
																<li> <a class="dropdown-item" href="destinations-details.php">Maasai Mara National Reserve</a> </li>
																<li> <a class="dropdown-item" href="destinations-details.php">Lake Naivasha National Park</a> </li>
																<li> <a class="dropdown-item" href="destinations-details.php">Lake Nakuru National Park</a> </li>
																<li> <a class="dropdown-item" href="destinations-details.php">Samburu National Reserve</a> </li>
															</ul>
														</div>
	
														<div class="col-lg-6">
															<ul class="list-unstyled">
																<li> <a class="dropdown-item" href="destinations-details.php">Nairobi National Park</a> </li>
																<li> <a class="dropdown-item" href="destinations-details.php">Ol Pejeta Conservancy</a> </li>
																<li> <a class="dropdown-item" href="destinations-details.php">Tsavo East National Park</a> </li>
                                                                <li> <a class="dropdown-item" href="destinations-details.php">Tsavo West National Park</a> </li>
															</ul>
														</div>
													</div>
												</div>
	
												<!-- Activities -->
												<div class="col-lg-3">
													<h6 class="mb-3"><i class="bi bi-list-ul text-warning me-2"></i>Activities</h6>
													<hr class="my-2">
													<ul class="list-unstyled">
														<li> <a class="dropdown-item" href="experience-details.php">Hot Air Ballon Rides</a> </li>
														<li> <a class="dropdown-item" href="experience-details.php">Cultural Immersion</a> </li>
														<li> <a class="dropdown-item" href="experience-details.php">Bush Walks</a> </li>
														<li> <a class="dropdown-item" href="experience-details.php">Night Game Visits</a> </li>
														<li> <a class="dropdown-item" href="experience-details.php">Scenic Flights</a> </li>
                                                        <li> <a class="dropdown-item" href="experience-details.php">Sundowners in the Wild</a> </li>

													</ul>
												</div>
	
												<!-- Safari Types -->
												<div class="col-lg-3">
													<h6 class="mb-3"><i class="bi bi-grid-3x3-gap text-warning me-2"></i>Safari Types</h6>
													<hr class="my-2">
													<ul class="list-unstyled">
														<li> <a class="dropdown-item" href="classic-safaris.php"><i class="fa-solid fa-umbrella-beach fa-fw me-2"></i>Classic Safaris</a> </li>
														<li> <a class="dropdown-item" href="accessible-safaris.php"><i class="fa-solid fa-city fa-fw me-2"></i>Accessible Safaris</a> </li>
														<li> <a class="dropdown-item" href="family-couple-safaris.php"><i class="fa-solid fa-spa fa-fw me-2"></i>Family & Couple Safaris</a> </li>
													</ul>
												</div>
	
												<!-- Action box -->
												<div class="col-12">
													<div class="card overflow-hidden" style="background-image:url(assets/images/footer-bg.jpg); background-position: center left; background-size: cover;">
														<div class="bg-overlay bg-dark opacity-5"></div>
														<div class="card-body d-lg-flex justify-content-between align-items-center position-relative z-index-9">
															<!-- Meta -->
															<div class="mb-3 mb-lg-0">
																<h5 class="text-white">Enjoy What Nature Offers in Kenya</h5>
																<ul class="list-inline">
																	<li class="list-inline-item text-white me-2"> <i class="bi bi-patch-check-fill me-1 text-warning"></i>Easy Online Booking</li>
																	<li class="list-inline-item text-white me-2"> <i class="bi bi-patch-check-fill me-1 text-warning"></i>Fast Payment System</li>
																	<li class="list-inline-item text-white"> <i class="bi bi-patch-check-fill me-1 text-warning"></i>Variety of Destinations</li>
																</ul>
															</div>
															<!-- Button -->
															<a href="destinations.php" class="btn btn-primary mb-0">Book a Dream Package Now!</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</li>


                                    <!-- Safaris -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="pagesFacilities"
                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Safaris</a>
                                        <ul class="dropdown-menu" aria-labelledby="pagesFacilities">
                                            <li class="dropdown-submenu dropend">
                                                <a class="dropdown-item" href="classic-safaris.php">
                                                    Classic <i class="fas fa-chevron-right align-icon-right"></i>
                                                </a>
                                                <ul class="dropdown-menu" data-bs-popper="none">
                                                    <li> <a class="dropdown-item" href="classic-safaris.php">3-Day Amboseli National Park Safari</a></li>
                                                    <li> <a class="dropdown-item" href="classic-safaris.php">6-Day Maasai Mara - L Naivasha - Amboseli Safari</a></li>
                                                    <li> <a class="dropdown-item" href="classic-safaris.php">6–Day Samburu – L Nakuru – Maasai Mara Tour</a></li>
                                                    <li> <a class="dropdown-item" href="classic-safaris.php">7 Days of Exploring Kenya’s Wilderness Parks</a></li>
                                                    <li> <a class="dropdown-item" href="classic-safaris.php">9-Day Mid-Range Safari at Leisure</a></li>
                                                    <li> <a class="dropdown-item" href="classic-safaris.php">8-Day Kenya Mid-Range Safari Experience</a></li>
                                                    <li> <a class="dropdown-item" href="classic-safaris.php">4–Day Samburu – Ol Pajeta Experience</a></li>
                                                    <li> <a class="dropdown-item" href="classic-safaris.php">5–Day L Nakuru – Maasai Mara Experience</a></li>
                                                    <li> <a class="dropdown-item" href="classic-safaris.php">7-Day Kenya Safari in Style</a></li>
                                                    <li> <a class="dropdown-item" href="classic-safaris.php">10–Day Magical Kenyan Experience</a></li>

                                                </ul>
                                            </li>

                                            <li class="dropdown-submenu dropend">
                                                <a class="dropdown-item" href="accessible-safaris.php">
                                                    Accessible Safaris <i
                                                        class="fas fa-chevron-right align-icon-right"></i>
                                                </a>
                                                <ul class="dropdown-menu" data-bs-popper="none">
                                                    <li> <a class="dropdown-item"
                                                            href="accessible-safaris.php">Therapeutic Horseback
                                                            Riding</a></li>
                                                    <li> <a class="dropdown-item" href="accessible-safaris.php">Special
                                                            Needs Buzz Tour</a>
                                                    </li>
                                                    <li> <a class="dropdown-item" href="accessible-safaris.php">Game
                                                            Drive & Dining
                                                            Experience</a></li>
                                                    <li> <a class="dropdown-item" href="accessible-safaris.php">Safari
                                                            Experience</a></li>
                                                    <li> <a class="dropdown-item" href="accessible-safaris.php">Group
                                                            Shopping</a></li>
                                                    <li> <a class="dropdown-item"
                                                            href="accessible-safaris.php">Countryside Road
                                                            Experience</a></li>
                                                    <li> <a class="dropdown-item" href="accessible-safaris.php">Coast
                                                            Experience & Dolphin
                                                            Watching in Watamu</a></li>
                                                    <li> <a class="dropdown-item"
                                                            href="accessible-safaris.php">Agricultural Farm Visit</a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="dropdown-submenu dropend">
                                                <a class="dropdown-item" href="family-couple-safaris.php">
                                                    Family & Couple <i
                                                        class="fas fa-chevron-right align-icon-right"></i>
                                                </a>
                                                <ul class="dropdown-menu" data-bs-popper="none">
                                                    <li> <a class="dropdown-item"
                                                            href="family-couple-safaris.php">Exploring Ways of Growing
                                                            Rich Together</a></li>
                                                    <li> <a class="dropdown-item"
                                                            href="family-couple-safaris.php">Learn Parenting in an
                                                            Exciting Way</a></li>
                                                    <li> <a class="dropdown-item" href="family-couple-safaris.php">Keep
                                                            Discovering your Spouse
                                                            for Healthy & Enriching Relationship</a></li>
                                                    <li> <a class="dropdown-item"
                                                            href="family-couple-safaris.php">Learn to Fight in Love</a>
                                                    </li>
                                                    <li> <a class="dropdown-item" href="family-couple-safaris.php">Keep
                                                            Dating your Spouse</a>
                                                    </li>
                                                    <li> <a class="dropdown-item"
                                                            href="family-couple-safaris.php">Enriching Communication
                                                            for
                                                            Better Days</a></li>

                                                </ul>
                                            </li>

                                        </ul>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="about-us.php" id="pagesFacilities">About Us</a>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="blog.php" id="pagesFacilities">Blog</a>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="contact-us.php" id="pagesFacilities">Contact Us</a>
                                    </li>


                                </ul>

                            </div>
                            <!-- Main navbar END -->

                            <!-- Toggler button and stay button -->
                            <div class="d-flex align-items-center justify-content-end">
                                <!-- Responsive navbar toggler -->
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarCollapse" aria-controls="navbarCollapse"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-animation">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </span>
                                    <span class="d-none d-sm-inline-block small">Menu</span>
                                </button>


                            </div>
                        </div>
                    </div>


			</div>
			<!-- Main navbar END -->

            <div class="nav-item dropdown form-control-bg-light">
                <!-- Stay button -->
                <a class="btn btn-l btn-primary mb-0 order-12" href="contact-us.php#quote" role="button"
                    aria-expanded="false" data-bs-auto-close="outside">
                    Get a Free Quote Today! </i>
                </a>
            </div>

		</div>
	</nav>
	<!-- Logo Nav END -->
</header>
<!-- Header END -->

<!-- **************** MAIN CONTENT START **************** -->
<main>


<!-- =======================
Main banner START -->
<section class="position-relative py-8 py-sm-9">
    <video autoplay loop muted playsinline 
           style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: -1;">
        <source src="assets/video/wildlife.mp4" type="video/mp4">
        Your browser does not support the HTML5 video tag. 
    </video>
    <div class="bg-overlay bg-dark opacity-2"></div>
    <div class="container z-index-9 position-relative">
        <div class="row">
            <div class="col-xl-8 m-auto text-center pt-7">
                <h1 class="display-4 text-white mb-3">Experience Kenya's Natural Wonders</h1>
                <h5 class="text-white mb-3">Book your adventure with East Africa's Best Tour Agent!</h5>
                <a href="contact-us.php#quote" class="btn btn-lg btn-primary mb-0">Request a Free Quote Today!</a>
            </div>
        </div> </div>
</section>
<!-- =======================
Main banner END -->


<!-- =======================
About START -->
<section class="pt-5 pt-md-8 pb-0">
	<div class="container z-index-9">
		<div class="row">
			<div class="col-lg-10 m-auto text-center">
				<h2>Come Visit Kenya with Us!</h2>
				<p class="lead"><span class="text-primary-kiboko fw-bold">Kiboko Tours and Travel</span> is a Kenyan company specializing in celebrating life through unique travel experiences. Our aim is to bring together individuals from diverse backgrounds, cultures, and abilities. We specialize in disability travel services, providing tailored experiences that are spiritually enriching and often transformative.</p>
				
				<!-- List -->
				<ul class="list-inline hstack gap-4 flex-wrap justify-content-center mt-4">
					<li class="list-inline-item">
						<h5 class="mb-0 fw-normal"><i class="bi bi-person fa-fw text-warning me-1"></i>Excellent Service</h5>
					</li>
					<li class="list-inline-item"> 
						<h5 class="mb-0 fw-normal"><i class="bi bi-pin-map fa-fw text-warning me-1"></i>Best Destinations</h5>
					</li>
					<li>
					<div class="d-flex justify-content-center align-items-center text-start me-0 me-sm-4">
						<h3 class="me-2 mb-0">4.8</h3>
						<div>
							<ul class="list-inline mb-0">
								<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
								<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
								<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
								<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
								<li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
							</ul>
							<p class="mb-0 small">Clients Love Us!</p>
						</div>
					</li>
				</ul>

					<!-- About Us Btn -->
					<div class="d-flex justify-content-center align-items-center text-start me-0 me-sm-4">
					<!-- Button -->
					<br>
					<div> <a href="about-us.php" class="btn btn-lg btn-outline-primary mb-0">Book your Trip Now!</a> </div>
				</div>

			</div>
		</div> <!-- Row END -->
	</div>
</section>
<!-- =======================
About END -->

<!-- =======================
Offers START -->
<section class="pt-5 pt-md-8 pb-0">
	<div class="container-fluid px-lg-5">
		<!-- Title -->
		<div class="row mb-4">
			<div class="col-12 text-center">
				<h2>Activities to do in Kenya</h2>
			</div>
		</div>

		<div class="row g-4">
			<!-- Offer item -->
			<div class="col-6 col-md-4 col-xl-2">
				<div class="card bg-transparent h-100">
					<img src="assets/images/activities/hot-air-balloon.jpg" class="card-img" alt="">
					<div class="card-body text-center p-2">
						<h6 class="mb-0"><a href="experience-details.php" class="stretched-link">Hot Air Balloon Rides</a></h6>
						<p>Float above the wild – witness the epic scale of the Great Migration from the clouds.</p>
					</div>
				</div>
			</div>

			<!-- Offer item -->
			<div class="col-6 col-md-4 col-xl-2">
				<div class="card bg-transparent h-100">
					<img src="assets/images/activities/maasai.webp" class="card-img" alt="">
					<div class="card-body text-center p-2">
						<h6 class="mb-0"><a href="experience-details.php" class="stretched-link">Cultural Immersion</a></h6>
						<p>Journey into the heart of Kenya. Connect with the iconic Maasai and their vibrant traditions.</p>

					</div>
				</div>
			</div>

			<!-- Offer item -->
			<div class="col-6 col-md-4 col-xl-2">
				<div class="card bg-transparent h-100">
					<img src="assets/images/activities/bush-walk.jpg" class="card-img" alt="">
					<div class="card-body text-center p-2">
						<h6 class="mb-0"><a href="experience-details.php" class="stretched-link">Bush Walks</a></h6>
						<p>Feel the pulse of the wild beneath your feet – immerse yourself in nature's heartbeat on a guided bush walk.</p>
					</div>
				</div>
			</div>

			<!-- Offer item -->
			<div class="col-6 col-md-4 col-xl-2">
				<div class="card bg-transparent h-100">
					<img src="assets/images/activities/night-game-drive.jpg" class="card-img" alt="">
					<div class="card-body text-center p-2">
						<h6 class="mb-0"><a href="experience-details.php" class="stretched-link">Night Game Visits</a></h6>
						<p>Witness the unseen world of the African night – predators on the prowl and starlight as your guide.</p>
					</div>
				</div>
			</div>

			<!-- Offer item -->
			<div class="col-6 col-md-4 col-xl-2">
				<div class="card bg-transparent h-100">
					<img src="assets/images/activities/chopper-ride.jpg" class="card-img" alt="">
					<div class="card-body text-center p-2">
						<h6 class="mb-0"><a href="experience-details.php" class="stretched-link">Scenic Flights</a></h6>
						<p>The ultimate bird's eye view – soar over vast landscapes and witness wildlife like never before.</p>
					</div>
				</div>
			</div>

			<!-- Offer item -->
			<div class="col-6 col-md-4 col-xl-2">
				<div class="card bg-transparent h-100">
					<img src="assets/images/activities/sunset.webp" class="card-img" alt="">
					<div class="card-body text-center p-2">
						<h6 class="mb-0"><a href="experience-details.php" class="stretched-link">Sundowners in the Wild</a></h6>
						<p>Celebrate the day's adventure – golden hour cocktails with an unforgettable backdrop.</p>
						
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- =======================
Offers END -->

        <!-- =======================
Featured Packages START -->
<section>
            <div class="container">

                <!-- Title -->
                <div class="row mb-4">
                    <div class="col-12 text-center">
                        <h2 class="mb-0">Our Top Packages</h2>
                    </div>
                </div>

                <div class="row g-4">


<?php for($i=3;$i<7;$i++){?>
                    <!-- Package item -->
                    <div class="col-sm-6 col-xl-3 shadow">
                        <!-- Card START -->
                        <div class="card card-img-scale overflow-hidden bg-transparent rounded-3">
                            <!-- Image and overlay -->
                            <div class="card-img-scale-wrapper rounded-3">
                                <!-- Image -->
                                <img src="assets/images/accessible/a<?php echo "3";?>.jpg" class="card-img mt-1" alt="kiboko image">
                                <!-- Badge -->
                                <div class="position-absolute bottom-0 start-0 p-3">
                                    <div class="badge text-bg-dark fs-6 rounded-pill stretched-link"><i
                                            class="bi bi-geo-alt me-2"></i>Kenya</div>
                                </div>
                            </div>

                            <!-- Card body -->
                            <div class="card-body px-2">
                                <!-- Title -->
                                <h5 class="card-title"><a href="package-details.php" class="stretched-link">7-Days
                                        Kenya Safari in Style</a></h5>
                                <!-- Price and rating -->
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="text-success mb-0">$2,058 
                                    </h5>
                                    <h6 class="mb-0">4.6<i class="fa-solid fa-star text-warning ms-1"></i></h6>
                                </div>
                                <div class="pt-3">
                                    <a class="btn btn-primary btn-sm">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card END -->
                    </div>

                    <?php } ?>

                    <!-- About Us Btn -->
					<div class="d-flex justify-content-center align-items-center text-start me-0 me-sm-4">
                        <!-- Button -->
                        <br>
                        <div> <a href="classic-safaris.php" class="btn btn-lg btn-outline-primary mb-0">View all Packages!</a> </div>
                    </div>



                </div> <!-- Row END -->
            </div>
        </section>
        <!-- =======================
Featured Packages END -->


<!-- =======================
Accreitations START -->
<section class="py-0 py-md-5">
    <div class="container">

        <!-- Title -->
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="mb-0">Memberships & Accreditations</h2>
            </div>
        </div>

        <div class="row g-4 g-lg-7 justify-content-center align-items-center">
            <!-- Image -->
            <div class="col-5 col-sm-3 col-xl-2">
                <img src="assets/images/client/ECO.jpg" class="grayscale" alt="">
            </div>
            <!-- Image -->
            <div class="col-5 col-sm-3 col-xl-2">
                <img src="assets/images/client/KAT.jpg" class="grayscale" alt="">
            </div>
            <!-- Image -->
            <div class="col-5 col-sm-3 col-xl-2">
                <img src="assets/images/client/MK.jpeg" class="grayscale" alt="">
            </div>
            <!-- Image -->
            <div class="col-5 col-sm-3 col-xl-2">
                <img src="assets/images/client/TRA.png" class="grayscale" alt="">
            </div>
            <!-- Image -->
            <div class="col-5 col-sm-3 col-xl-2">
                <img src="assets/images/client/tosk-cert.jpg" class="grayscale" alt="">
            </div>
        </div>

        <div style="display: flex; justify-content: center; gap: 20px;">
            <!-- Safari Bookings Widget -->
            <div style="display: inline-block; padding: 0 10px 5px 0;" class="grayscale"><span class="94c5245077111">&nbsp;</span></div>

            <!--TripAdvisor Widget -->
            <div class="grayscale">
                <a class="widFRRClickWrap" target="_blank" href="https://www.tripadvisor.com/Attraction_Review-g294207-d17206466-Reviews-KIBOKO_TOURS_AND_TRAVEL_LTD-Nairobi.html" onclick="ta.cds.handleTALink(11424,this);return true;"></a>

                <div class="col medium-6 small-12 large-6"  ><div class="col-inner"  >

                    <div id="TA_rated511" class="TA_rated">
                        <ul id="XilmmB" class="TA_links z8ISMh6">
                        <li id="4HFiYkWs7c7" class="ZFKcSEurPD4"><a target="_blank" href="https://www.tripadvisor.com/Attraction_Review-g294207-d17206466-Reviews-KIBOKO_TOURS_AND_TRAVEL_LTD-Nairobi.html" rel="noopener"><img src="https://www.tripadvisor.com/img/cdsi/img2/badges/ollie-11424-2.gif" alt="TripAdvisor"/></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- =======================
Accreitations END -->

<!-- =======================
Main Banner START -->
<section class="pt-8 pt-md-5">
	<div class="container">
		<div class="row g-4 align-items-center">				
			<div class="col-lg-7">
				<!-- Title -->
				<h1 class="mb-4 display-5">Experience a Wildlife Tour of a  <span class="text-bg-warning">Lifetime!</span></h1>
				<!-- Info -->
				<p class="mb-4">Life is all about adventure and enjoying what nature has to offer!</p>
				<!-- Button -->
				<a href="classic-safaris.php" class="btn btn-primary mb-4">Book a Package Now! <i class="fa-solid fa-arrow-right-long fa-fw"></i></a>
				<!-- List -->
				<h6 class="fw-normal mb-1">Our Benefits</h6>
				<ul class="list-group list-group-borderless mb-0 small">
					<li class="list-group-item d-flex mb-0">
						<i class="fa-solid fa-check-circle text-success me-2 mt-1"></i>A variety of the best destinations in Kenya 
					</li>
					<li class="list-group-item d-flex mb-0">
						<i class="fa-solid fa-check-circle text-success me-2 mt-1"></i>Accessible Safaris to cater for everyone
					</li>
					<li class="list-group-item d-flex mb-0">
						<i class="fa-solid fa-check-circle text-success me-2 mt-1"></i>Family & Couple Packages are available; enjoy with your loved ones.
					</li>
				</ul>
			</div>
			<!-- Image -->
			<div class="col-lg-5 text-center">
				<img src="assets/images/element/wild.svg" alt="">
			</div>
		</div>
	</div>
</section>
<!-- =======================
Main Banner END -->


<!-- =======================
Experience START -->
<section class="pt-5 pt-md-8 pb-0">
	<div class="container-fluid px-lg-5">
		<!-- Title -->
		<div class="row mb-4">
			<div class="col-12 text-center">
				<h2>Explore our Best Destinations</h2>
			</div>
		</div>

		<!-- Slider START -->
		<div class="tiny-slider arrow-round arrow-blur rounded-3 overflow-hidden">
			<div class="tiny-slider-inner" data-autoplay="true" data-arrow="true" data-dots="false" data-items-xl="4" data-items-lg="3" data-items-md="2" data-items-xs="1">
					<!-- Card item START -->
					<div>
						<div class="card card-metro overflow-hidden">
							<img src="assets/images/wildlife/maasai-mara.jpg" alt="">
							<!-- Image overlay -->
							<div class="card-img-overlay d-flex"> 
								<!-- Info -->
								<div class="card-text mt-auto">
									<h4><a href="destinations-details.php" class="text-white stretched-link">Maasai Mara National Reserve</a></h4>
									<p class="text-white mb-2">Where the Big Five roam and the Great Migration thunders across the plains.</p>
									<button class="btn btn-link link-primary p-0 mb-0">Explore now <i class="fa-solid fa-arrow-right-long fa-fw"></i></button>
								</div>
							</div>
						</div>
					</div>
					<!-- Card item END -->

					<!-- Card item START -->
					<div>
						<div class="card card-metro overflow-hidden">
							<img src="assets/images/wildlife/amboseli-np.jpg" alt="">
							<!-- Image overlay -->
							<div class="card-img-overlay d-flex"> 
								<!-- Info -->
								<div class="card-text mt-auto">
									<h4><a href="destinations-details.php" class="text-white stretched-link">Amboseli National Park</a></h4>
									<p class="text-white mb-2">Elephants dwarfed by the majesty of Kilimanjaro.</p>
									<button class="btn btn-link link-primary p-0 mb-0">Explore now <i class="fa-solid fa-arrow-right-long fa-fw"></i></button>
								</div>
							</div>
						</div>
					</div>
					<!-- Card item END -->

					<!-- Card item START -->
					<div>
						<div class="card card-metro overflow-hidden">
							<img src="assets/images/wildlife/tsavo-east-np.jpg" alt="">
							<!-- Image overlay -->
							<div class="card-img-overlay d-flex"> 
								<!-- Info -->
								<div class="card-text mt-auto">
									<h4><a href="destinations-details.php" class="text-white stretched-link">Tsavo East National Park</a></h4>
									<p class="text-white mb-2">Kenya's wilderness giants, painted red by volcanic earth.</p>
									<button class="btn btn-link link-primary p-0 mb-0">Explore now <i class="fa-solid fa-arrow-right-long fa-fw"></i></button>
								</div>
							</div>
						</div>
					</div>
					<!-- Card item END -->

					<!-- Card item START -->
					<div>
						<div class="card card-metro overflow-hidden">
							<img src="assets/images/wildlife/l-naivasha-np.jpg" alt="">
							<!-- Image overlay -->
							<div class="card-img-overlay d-flex"> 
								<!-- Info -->
								<div class="card-text mt-auto">
									<h4><a href="destinations-details.php" class="text-white stretched-link">Lake Naivasha National Park</a></h4>
									<p class="text-white mb-2">Hippos bask, and eagles soar across shimmering waters.</p>
									<button class="btn btn-link link-primary p-0 mb-0">Explore now <i class="fa-solid fa-arrow-right-long fa-fw"></i></button>
								</div>
							</div>
						</div>
					</div>
					<!-- Card item END -->

					<!-- Card item START -->
					<div>
						<div class="card card-metro overflow-hidden">
							<img src="assets/images/wildlife/ol-pajeta.jpg" alt="">
							<!-- Image overlay -->
							<div class="card-img-overlay d-flex"> 
								<!-- Info -->
								<div class="card-text mt-auto">
									<h4><a href="destinations-details.php" class="text-white stretched-link">Ol Pajeta Conservancy</a></h4>
									<p class="text-white mb-2">Rhino sanctuary and a beacon of conservation hope.</p>
									<button class="btn btn-link link-primary p-0 mb-0">Explore now <i class="fa-solid fa-arrow-right-long fa-fw"></i></button>
								</div>
							</div>
						</div>
					</div>
					<!-- Card item END -->

					<!-- Card item START -->
					<div>
						<div class="card card-metro overflow-hidden">
							<img src="assets/images/wildlife/l-nakuru-np.jpg" alt="">
							<!-- Image overlay -->
							<div class="card-img-overlay d-flex"> 
								<!-- Info -->
								<div class="card-text mt-auto">
									<h4><a href="destinations-details.php" class="text-white stretched-link">Lake Nakuru National Park</a></h4>
									<p class="text-white mb-2">A vibrant spectacle of pink – flamingos in their breathtaking thousands.</p>
									<button class="btn btn-link link-primary p-0 mb-0">Explore now <i class="fa-solid fa-arrow-right-long fa-fw"></i></button>
								</div>
							</div>
						</div>
					</div>
					<!-- Card item END -->

					<!-- Card item START -->
					<div>
						<div class="card card-metro overflow-hidden">
							<img src="assets/images/wildlife/samburu-np.jpg" alt="">
							<!-- Image overlay -->
							<div class="card-img-overlay d-flex"> 
								<!-- Info -->
								<div class="card-text mt-auto">
									<h4><a href="destinations-details.php" class="text-white stretched-link">Samburu National Reserve</a></h4>
									<p class="text-white mb-2">The rugged north, where unique species and vibrant cultures thrive.</p>
									<button class="btn btn-link link-primary p-0 mb-0">Explore now <i class="fa-solid fa-arrow-right-long fa-fw"></i></button>
								</div>
							</div>
						</div>
					</div>
					<!-- Card item END -->

                    f<!-- Card item START -->
					<div>
						<div class="card card-metro overflow-hidden">
							<img src="assets/images/wildlife/tsavo-west-np.jpg" alt="">
							<!-- Image overlay -->
							<div class="card-img-overlay d-flex"> 
								<!-- Info -->
								<div class="card-text mt-auto">
									<h4><a href="destinations-details.php" class="text-white stretched-link">Tsavo West National Park</a></h4>
									<p class="text-white mb-2">The rugged north, where unique species and vibrant cultures thrive.</p>
									<button class="btn btn-link link-primary p-0 mb-0">Explore now <i class="fa-solid fa-arrow-right-long fa-fw"></i></button>
								</div>
							</div>
						</div>
					</div>
					<!-- Card item END -->
			</div>	
		</div>
         <!-- About Us Btn -->
					<div class="d-flex justify-content-center align-items-center text-start me-0 me-sm-4 mt-5">
                        <!-- Button -->
                        <br>
                        <div> <a href="destinations.php" class="btn btn-lg btn-outline-primary mb-0">See all Destinations!</a> </div>
                    </div>
	</div>
</section>
<!-- =======================
Experience END -->

<br>
<br>

<!-- =======================
Blog grid START -->
<section class="pt-0 pt-sm-5">
            <div class="container">

                <!-- Title -->
                <div class="row mb-4">
                    <div class="col-12 text-center">
                        <h2 class="mb-0">Our Blogs</h2>
                    </div>
                </div>

                <!-- Blog grid -->
                <div class="row g-4">
                    <!-- Blog item START -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card bg-transparent">
                            <!-- Image -->
                            <div class="position-relative">
                                <img src="assets/images/blogs/rhinos.jpg" class="card-img" alt="">
                                <!-- Badge -->
                                <div class="card-img-overlay p-3">
                                    <a href="blog.php" class="badge text-bg-warning mb-2">Classic</a>
                                </div>
                            </div>

                            <!-- Card body -->
                            <div class="card-body p-3 pb-0">
                                <!-- Title -->
                                <h5 class="card-title mt-2"><a href="blog-detail.php">Kenya's Hidden Gems: Exploring
                                        Beyond the Safari Mainstays</a></h5>
                                <h6 class="fw-light mb-0">By <a href="blog-detail.php">Kevin Ocheing</a></h6>
                            </div>
                        </div>
                    </div>
                    <!-- Blog item END -->

                    <!-- Blog item START -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card bg-transparent">
                            <!-- Image -->
                            <div class="position-relative">
                                <img src="assets/images/blogs/lion.png" class="card-img" alt="">
                                <!-- Badge -->
                                <div class="card-img-overlay p-3">
                                    <a href="blog.php" class="badge text-bg-dark mb-2">Accessible</a>
                                </div>
                            </div>

                            <!-- Card body -->
                            <div class="card-body p-3 pb-0">
                                <!-- Title -->
                                <h5 class="card-title"><a href="blog-detail.php">Accessible Adventures: How Kiboko Tours Makes
                                                    the Wild Welcoming for All</a></h5>
                                <h6 class="fw-light mb-0">By <a href="blog-detail.php">John Kipchumba</a></h6>
                            </div>
                        </div>
                    </div>
                    <!-- Blog item END -->

                    <!-- Blog item START -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card bg-transparent">
                            <!-- Image -->
                            <div class="position-relative">
                                <img src="assets/images/blogs/wildebeasts.jpg" class="card-img" alt="">
                                <!-- Badge -->
                                <div class="card-img-overlay p-3">
                                    <a href="blog-detail.php" class="badge text-bg-danger mb-2">Personal</a>
                                </div>
                            </div>

                            <!-- Card body -->
                            <div class="card-body p-3 pb-0">
                                <!-- Title -->
                                <h5 class="card-title"><a href="blog-detail.php">Wildlife Encounters That Changed My
                                        Life: A Kiboko Tour Guide's Stories</a></h5>
                                <h6 class="fw-light mb-0">By <a href="blog-detail.php">Ashley Mwikali</a></h6>
                            </div>
                        </div>
                    </div>
                    <!-- Blog item END -->
                </div>

                <!-- Buttons -->
                <div class="text-center mt-4">
                    <a href="blog.php" class="btn btn-primary mb-0">Check Out Our Blogs Now<i class="fas fa-newspaper ms-2"></i></a>
                </div>
            </div>
        </section>
        <!-- =======================
Blog grid END -->

        <!-- =======================
Gallery START -->
<section>
            <div class="container-fluid">
                <!-- Title -->
                <div class="row mb-md-4">
                    <div class="col-12 mx-auto text-center mb-4">
                        <h2 class="mb-0">Some of the Views You'll Get to Experience</h2>
                    </div>
                </div>

                <!-- Slider START -->
                <div class="tiny-slider arrow-round arrow-blur arrow-hover rounded-3 overflow-hidden">
                    <div class="tiny-slider-inner d-flex align-items-end" data-autoplay="true" data-edge="2"
                        data-arrow="true" data-dots="false" data-items="6" data-items-lg="4" data-items-sm="2">
                        <!-- Slider item 1 -->
                        <div>
                            <a data-glightbox="" data-gallery="gallery" href="assets/images/Small_400x400/birds.png">
                                <div class="card card-element-hover card-overlay-hover overflow-hidden">
                                    <!-- Image -->
                                    <img src="assets/images/Small_400x400/birds.png" class="rounded-3" alt="">
                                    <!-- Full screen button -->
                                    <div class="hover-element w-100 h-100">
                                        <i
                                            class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Slider item 2 -->
                        <div>
                            <a data-glightbox="" data-gallery="gallery" href="assets/images/Small_400x400/cheetahs.jpg">
                                <div class="card card-element-hover card-overlay-hover overflow-hidden">
                                    <!-- Image -->
                                    <img src="assets/images/Small_400x400/cheetahs.jpg" class="rounded-3" alt="">
                                    <!-- Full screen button -->
                                    <div class="hover-element w-100 h-100">
                                        <i
                                            class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Slider item 3 -->
                        <div>
                            <a data-glightbox="" data-gallery="gallery" href="assets/images/Small_400x400/gazelles.jpg">
                                <div class="card card-element-hover card-overlay-hover overflow-hidden">
                                    <!-- Image -->
                                    <img src="assets/images/Small_400x400/gazelles.jpg" class="rounded-3" alt="">
                                    <!-- Full screen button -->
                                    <div class="hover-element w-100 h-100">
                                        <i
                                            class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Slider item 4 -->
                        <div>
                            <a data-glightbox="" data-gallery="gallery" href="assets/images/Small_400x400/cheetahs-2.png">
                                <div class="card card-element-hover card-overlay-hover overflow-hidden">
                                    <!-- Image -->
                                    <img src="assets/images/Small_400x400/cheetahs-2.png" class="rounded-3" alt="">
                                    <!-- Full screen button -->
                                    <div class="hover-element w-100 h-100">
                                        <i
                                            class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Slider item 5 -->
                        <div>
                            <a data-glightbox="" data-gallery="gallery" href="assets/images/Small_400x400/zebras.jpg">
                                <div class="card card-element-hover card-overlay-hover overflow-hidden">
                                    <!-- Image -->
                                    <img src="assets/images/Small_400x400/zebras.jpg" class="rounded-3" alt="">
                                    <!-- Full screen button -->
                                    <div class="hover-element w-100 h-100">
                                        <i
                                            class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Slider item 6 -->
                        <div>
                            <a data-glightbox="" data-gallery="gallery" href="assets/images/Small_400x400/lion.png">
                                <div class="card card-element-hover card-overlay-hover overflow-hidden">
                                    <!-- Image -->
                                    <img src="assets/images/Small_400x400/lion.png" class="rounded-3" alt="">
                                    <!-- Full screen button -->
                                    <div class="hover-element w-100 h-100">
                                        <i
                                            class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Slider item 7 -->
                        <div>
                            <a data-glightbox="" data-gallery="gallery" href="assets/images/Small_400x400/rhinos.jpg">
                                <div class="card card-element-hover card-overlay-hover overflow-hidden">
                                    <!-- Image -->
                                    <img src="assets/images/Small_400x400/rhinos.jpg" class="rounded-3" alt="">
                                    <!-- Full screen button -->
                                    <div class="hover-element w-100 h-100">
                                        <i
                                            class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Slider item 8 -->
                        <div>
                            <a data-glightbox="" data-gallery="gallery" href="assets/images/Small_400x400/wildebeasts.jpg">
                                <div class="card card-element-hover card-overlay-hover overflow-hidden">
                                    <!-- Image -->
                                    <img src="assets/images/Small_400x400/wildebeasts.jpg" class="rounded-3" alt="">
                                    <!-- Full screen button -->
                                    <div class="hover-element w-100 h-100">
                                        <i
                                            class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Slider END	 -->
            </div>
        </section>
        <!-- =======================
Gallery END -->


</main>
<!-- **************** MAIN CONTENT END **************** -->

        <!-- Footer START -->
            <?php include "includes/footer.php";?>
        <!-- Footer END -->

        <!-- Safari Bookings Widget Script -->
        <script type="text/javascript">(function(){var sb=document.createElement('script');sb.type='text/javascript';sb.async=true;sb.src='https://s3.amazonaws.com/z_437er23a/dca450748.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(sb,s);})();</script>


        <!-- TripAdvisor Widget Script -->
        <script async src="https://www.jscache.com/wejs?wtype=rated&amp;uniq=511&amp;locationId=17206466&amp;lang=en_US&amp;display_version=2" data-loadtrk onload="this.loadtrk=true"></script>


        <!-- Google Translate Functionality -->
        <script src="script.js"></script>
        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement(
                    {pageLanguage: 'en'},
                    'google_translate_element'
                );
            } 
        </script>

    </body>


</html>