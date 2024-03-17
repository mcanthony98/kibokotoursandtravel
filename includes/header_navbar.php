    <!-- Top alert START -->
    <div class="alert alert-warning py-2 m-0 bg-dark border-0 rounded-0 alert-dismissible fade show text-center overflow-hidden d-inline-flex justify-content-around w-100" role="alert">
        <p class="text-warning m-0" style="color: orange; margin-right: 5px;">
            <a href="mailto:info@kibokotoursandtravel.com" class="link-light"><i class="fa fa-envelope"></i>  <span class="d-none d-md-inline">info@kibokotoursandtravel.com</span></a>
        </p>
        <span style="margin-left: 5px;">
            <a href="https://api.whatsapp.com/send?phone=254712123123" target="_blank" class="pl-1 link-success"><i class="bi bi-whatsapp "></i> <span class="d-none d-md-inline">Whatsapp: +254 712 123 123</span></a>
        </span>
    </div>

    
    <!-- Header START -->
    <header class="navbar-light py-3">
        <!-- Logo Nav START -->
        <nav class="navbar navbar-expand-lg">
            <div class="container d-block">
                <div class="row align-items-center">
                    <div class="col-4">
                        <!-- Logo START -->
                        <a class="navbar-brand" href="index.php">
                            <img class="light-mode-item navbar-brand-item d-inline h-40px h-md-60px"
                                src="assets/images/kiboko-logo.png" alt="logo">
                            <img class="dark-mode-item navbar-brand-item d-inline h-40px h-md-60px"
                                src="assets/images/kiboko-logo.png" alt="logo">
                        </a>
                        <!-- Logo END -->
                    </div>

                    <div class="col-8">
                        <!-- Navbar top Right-->
                        <div class="align-items-center justify-content-end d-none d-lg-flex">
                            <ul class="nav border-bottom">
                                <li class="dropdown nav-item">
                                    <a class="nav-link small pb-2" href="#" role="button" id="languageDropdown"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                            class="bi bi-globe fa-fw me-2"></i>Language</a>
                                    <ul class="dropdown-menu dropdown-animation dropdown-menu-end min-w-auto"
                                        aria-labelledby="languageDropdown">
                                        <li> <a class="dropdown-item me-4" href="#"><img class="fa-fw me-2"
                                                    src="assets/images/flags/uk.svg" alt="">English</a> </li>
                                        <li> <a class="dropdown-item me-4" href="#"><img class="fa-fw me-2"
                                                    src="assets/images/flags/sp.svg" alt="">Español</a> </li>
                                        <li> <a class="dropdown-item me-4" href="#"><img class="fa-fw me-2"
                                                    src="assets/images/flags/fr.svg" alt="">Français</a> </li>
                                        <li> <a class="dropdown-item me-4" href="#"><img class="fa-fw me-2"
                                                    src="assets/images/flags/gr.svg" alt="">Deutsch</a> </li>
                                        <li> <a class="dropdown-item me-4" href="#"><img class="fa-fw me-2"
                                                    src="assets/images/flags/russia.svg" alt="">Russian</a> </li>
                                        <li> <a class="dropdown-item me-4" href="#"><img class="fa-fw me-2"
                                                    src="assets/images/flags/china.svg" alt="">Chinese</a> </li>
                                        <li> <a class="dropdown-item me-4" href="#"><img class="fa-fw me-2"
                                                    src="assets/images/flags/italy.svg" alt="">Italian</a> </li>
                                        <li> <a class="dropdown-item me-4" href="#"><img class="fa-fw me-2"
                                                    src="assets/images/flags/turkey.svg" alt="">Turkish</a> </li>
                                    </ul>
                                </li>
                                <li class="nav-item"> <a href="help-center.html" class="nav-link small pb-2"><i
                                            class="bi bi-info-circle me-2"></i>Help</a> </li>
                                <li class="nav-item"> <a href="sign-in.html" class="nav-link small pb-2"><i
                                            class="far fa-user me-2"></i>B2B Login</a> </li>
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
													<h6 class="mb-3"><i class="bi bi-pin-map-fill text-primary me-2"></i>Destinations</h6>
													<hr class="my-2">
													<div class="row">
														<div class="col-lg-6">
															<ul class="list-unstyled">
																<li> <a class="dropdown-item" href="#">Amboseli National Park</a> </li>
																<li> <a class="dropdown-item" href="#">Maasai Mara National Reserve</a> </li>
																<li> <a class="dropdown-item" href="#">Lake Naivasha National Park</a> </li>
																<li> <a class="dropdown-item" href="#">Lake Nakuru National Park</a> </li>
																<li> <a class="dropdown-item" href="#">Samburu National Reserve</a> </li>
															</ul>
														</div>
	
														<div class="col-lg-6">
															<ul class="list-unstyled">
																<li> <a class="dropdown-item" href="#">Nairobi National Park</a> </li>
																<li> <a class="dropdown-item" href="#">Ol Pejeta Conservancy</a> </li>
																<li> <a class="dropdown-item" href="#">Malaysia</a> </li>
																<li> <a class="dropdown-item" href="#">manhattan</a> </li>
															</ul>
														</div>
													</div>
												</div>
	
												<!-- Activities -->
												<div class="col-lg-3">
													<h6 class="mb-3"><i class="bi bi-list-ul text-primary me-2"></i>Activities</h6>
													<hr class="my-2">
													<ul class="list-unstyled">
														<li> <a class="dropdown-item" href="#">Hot Air Ballon Ride</a> </li>
														<li> <a class="dropdown-item" href="#">Hot Air Ballon Ride</a> </li>
														<li> <a class="dropdown-item" href="#">Hot Air Ballon Ride</a> </li>
														<li> <a class="dropdown-item" href="#">Hot Air Ballon Ride</a> </li>
														<li> <a class="dropdown-item" href="#">Hot Air Ballon Ride</a> </li>
													</ul>
												</div>
	
												<!-- Safari Types -->
												<div class="col-lg-3">
													<h6 class="mb-3"><i class="bi bi-grid-3x3-gap text-primary me-2"></i>Safari Types</h6>
													<hr class="my-2">
													<ul class="list-unstyled">
														<li> <a class="dropdown-item" href="#"><i class="fa-solid fa-umbrella-beach fa-fw me-2"></i>Classic Safaris</a> </li>
														<li> <a class="dropdown-item" href="#"><i class="fa-solid fa-city fa-fw me-2"></i>Accessible Safaris</a> </li>
														<li> <a class="dropdown-item" href="#"><i class="fa-solid fa-spa fa-fw me-2"></i>Family & Couple Safaris</a> </li>
													</ul>
												</div>
	
												<!-- Action box -->
												<div class="col-12">
													<div class="card overflow-hidden" style="background-image:url(assets/images/bg/05.jpg); background-position: center left; background-size: cover;">
														<div class="bg-overlay bg-dark opacity-5"></div>
														<div class="card-body d-lg-flex justify-content-between align-items-center position-relative z-index-9">
															<!-- Meta -->
															<div class="mb-3 mb-lg-0">
																<h5 class="text-white">Enjoy What Nature Offers in Kenya</h5>
																<ul class="list-inline">
																	<li class="list-inline-item text-white me-2"> <i class="bi bi-patch-check-fill me-1"></i>Easy Online Booking</li>
																	<li class="list-inline-item text-white me-2"> <i class="bi bi-patch-check-fill me-1"></i>Fast Payment System</li>
																	<li class="list-inline-item text-white"> <i class="bi bi-patch-check-fill me-1"></i>Variety of Destinations</li>
																</ul>
															</div>
															<!-- Button -->
															<a href="#" class="btn btn-white mb-0">Book a Dream Package Now!</a>
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
                                                    <li> <a class="dropdown-item" href="classic-safaris.php">3-Day
                                                            Tours</a></li>
                                                    <li> <a class="dropdown-item" href="classic-safaris.php">4-Day
                                                            Tours</a></li>
                                                    <li> <a class="dropdown-item" href="classic-safaris.php">5-Day
                                                            Tours</a></li>
                                                    <li> <a class="dropdown-item" href="classic-safaris.php">3 Day
                                                            Tours</a></li>
                                                    <li> <a class="dropdown-item" href="classic-safaris.php">6-Day
                                                            Tours</a></li>
                                                    <li> <a class="dropdown-item" href="classic-safaris.php">7-Day
                                                            Tours</a></li>
                                                    <li> <a class="dropdown-item" href="classic-safaris.php">8-Day
                                                            Tours</a></li>
                                                    <li> <a class="dropdown-item" href="classic-safaris.php">9-Day
                                                            Tours</a></li>
                                                    <li> <a class="dropdown-item" href="classic-safaris.php">10-Day
                                                            Tours</a></li>


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

                                <!-- Booking form dropdown START -->
                                <div class="nav-item dropdown form-control-bg-light">
                                    <!-- Stay button -->
                                    <a class="btn btn-sm btn-primary mb-0" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                        Get a Free Quote Today! </i>
                                    </a>

                                    <!-- Form END -->
                                </div>
                                <!-- Booking form dropdown END -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Logo Nav END -->
    </header>
    <!-- Header END -->    
    


