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
	<title><?php echo $pkgrow['seo_title'];?> | Snapshot Tours and Safaris</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="">
	<meta name="description" content="<?php echo $pkgrow['seo_description'];?>">
	<meta name="keywords" content="<?php echo $pkgrow['seo_keywords'];?>">

	<?php include "includes/stylesheets.php";?>

</head>
<body>

    <?php include "includes/navbar.php";?>

<!-- **************** MAIN CONTENT START **************** -->
<main>
	
<!-- =======================
Main Banner START -->
<section class="pt-4 pt-lg-5">
	<div class="container position-relative">

		<!-- Title and button START -->
		<div class="row">
			<div class="col-12">

				<!-- Meta -->
				<div class="d-md-flex justify-content-md-between">
					<!-- Title -->
					<div>
						<h1 class="fs-2"><?php echo $pkgrow['title'];?></h1>
						<ul class="nav nav-divider h6 text-body mb-0">
							<li class="nav-item"><?php echo $pkgdaysres->num_rows-1;?> nights - <?php echo $pkgdaysres->num_rows;?> Days</li>
							<li class="nav-item"><?php echo $pkgdestres->num_rows;?> Destinations - <?php echo $pkgexpres->num_rows;?> Experiences</li>
						</ul>
					</div>

					<!-- Buttons -->
					<ul class="list-inline text-end">
							<!-- Heart icon -->
						<li class="list-inline-item">
							<a href="#" class="btn btn-sm btn-light px-2"><i class="fa-solid fa-fw fa-heart"></i></a>
						</li>
						<!-- Share icon -->
						<li class="list-inline-item dropdown">
							<!-- Share button -->
							<a href="#" class="btn btn-sm btn-light px-2" role="button" id="dropdownShare" data-bs-toggle="dropdown" aria-expanded="false">
								<i class="fa-solid fa-fw fa-share-alt"></i>
							</a>
							<!-- dropdown button -->
							<ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare">
								<li><a class="dropdown-item" href="#"><i class="fab fa-twitter-square me-2"></i>Twitter</a></li>
								<li><a class="dropdown-item" href="#"><i class="fab fa-facebook-square me-2"></i>Facebook</a></li>
								<li><a class="dropdown-item" href="#"><i class="fab fa-linkedin me-2"></i>LinkedIn</a></li>
								<li><a class="dropdown-item" href="#"><i class="fa-solid fa-copy me-2"></i>Copy link</a></li>
							</ul>
						</li>
					</ul>
				</div>

			</div>
		</div>
		<!-- Title and button END -->

		<!-- Image gallery START -->
		<div class="row mt-md-5 d-none">
			<div class="col-12">
				<!-- Primary image -->
				<div class="splide splide-main mb-3" data-splide='{"type" : "fade","autoplay": true,"heightRatio":0.5,"pagination":false,"arrows":false,"cover":true,"lazyLoad":"sequential"}'>
					<div class="splide__track">
						<ul class="splide__list">
							<li class="splide__slide rounded"><img src="assets/images/gallery/04.jpg" alt="">
								<!-- Glightbox image -->
								<a href="assets/images/gallery/04.jpg" class="stretched-link" data-glightbox="" data-gallery="banner"></a>
							</li>
							<li class="splide__slide rounded"><img src="assets/images/gallery/05.jpg" alt="">
								<!-- Glightbox image -->
								<a href="assets/images/gallery/05.jpg" class="stretched-link" data-glightbox="" data-gallery="banner"></a>
							</li>
							<li class="splide__slide rounded"><img src="assets/images/gallery/03.jpg" alt="">
								<!-- Glightbox image -->
								<a href="assets/images/gallery/03.jpg" class="stretched-link" data-glightbox="" data-gallery="banner"></a>
							</li>
							<li class="splide__slide rounded"><img src="assets/images/gallery/09.jpg" alt="">
								<!-- Glightbox image -->
								<a href="assets/images/gallery/09.jpg" class="stretched-link" data-glightbox="" data-gallery="banner"></a>
							</li>
							<li class="splide__slide rounded"><img src="assets/images/gallery/10.jpg" alt="">
								<!-- Glightbox image -->
								<a href="assets/images/gallery/10.jpg" class="stretched-link" data-glightbox="" data-gallery="banner"></a>
							</li>
							<li class="splide__slide rounded"><img src="assets/images/gallery/06.jpg" alt="">
								<!-- Glightbox image -->
								<a href="assets/images/gallery/06.jpg" class="stretched-link" data-glightbox="" data-gallery="banner"></a>
							</li>
							<li class="splide__slide rounded"><img src="assets/images/gallery/07.jpg" alt="">
								<!-- Glightbox image -->
								<a href="assets/images/gallery/07.jpg" class="stretched-link" data-glightbox="" data-gallery="banner"></a>
							</li>
							<li class="splide__slide rounded"><img src="assets/images/gallery/08.jpg" alt="">
								<!-- Glightbox image -->
								<a href="assets/images/gallery/08.jpg" class="stretched-link" data-glightbox="" data-gallery="banner"></a>
							</li>
						</ul>
					</div>
				</div>
				<!-- Secondary image -->
				<div class="splide splide-thumb" data-splide='{"rewind":true,"fixedWidth":200,"fixedHeight":120,"isNavigation":true,"gap":20,"focus":"center","pagination":false,"cover":true,"lazyLoad":"sequential","breakpoints":{"600":{"fixedWidth":150,"fixedHeight":80}}}'>
					<div class="splide__track">
						<ul class="splide__list">
							<li class="splide__slide"><img src="assets/images/gallery/04.jpg" alt=""></li>
							<li class="splide__slide"><img src="assets/images/gallery/05.jpg" alt=""></li>
							<li class="splide__slide"><img src="assets/images/gallery/03.jpg" alt=""></li>
							<li class="splide__slide"><img src="assets/images/gallery/09.jpg" alt=""></li>
							<li class="splide__slide"><img src="assets/images/gallery/10.jpg" alt=""></li>
							<li class="splide__slide"><img src="assets/images/gallery/06.jpg" alt=""></li>
							<li class="splide__slide"><img src="assets/images/gallery/07.jpg" alt=""></li>
							<li class="splide__slide"><img src="assets/images/gallery/08.jpg" alt=""></li>
						</ul>
					</div>
					<!-- Arrows -->
					<div class="splide__arrows">
						<button class="splide__arrow  splide__arrow--prev p-splide__arrow--prev bg-primary"><span class="spi-angle-left text-white"><i class="fa-solid fa-fw fa-angle-left"></i></span></button>
						<button class="splide__arrow splide__arrow--next p-splide__arrow--next bg-primary"><span class="spi-angle-right text-white"><i class="fa-solid fa-fw fa-angle-right"></i></span></button>
					</div>
				</div>
			</div>
		</div>
		<!-- Image gallery END -->

	</div>
</section>
<!-- =======================
Main Banner END -->

<!-- =======================
Tabs START -->
<section class="py-0">
	<div class="container">
		
		<!-- Tabs START -->
		<div class="row">
			<div class="col-12">
				<!-- Outer tabs START -->
				<ul class="nav nav-pills nav-justified nav-responsive bg-primary bg-opacity-10 rounded p-2" id="tour-pills-tab" role="tablist">
					<!-- Tab item -->
					<li class="nav-item" role="presentation">
						<button class="nav-link active mb-0" id="tour-pills-tab-1" data-bs-toggle="pill" data-bs-target="#tour-pills-tab1" type="button" role="tab" aria-controls="tour-pills-tab1" aria-selected="true">Overview</button>
					</li>
					<!-- Tab item -->
					<li class="nav-item" role="presentation">
						<button class="nav-link mb-0" id="tour-pills-tab-2" data-bs-toggle="pill" data-bs-target="#tour-pills-tab2" type="button" role="tab" aria-controls="tour-pills-tab2" aria-selected="false">Itinerary</button>
					</li>
					<!-- Tab item -->
					<li class="nav-item" role="presentation">
						<button class="nav-link mb-0" id="tour-pills-tab-3" data-bs-toggle="pill" data-bs-target="#tour-pills-tab3" type="button" role="tab" aria-controls="tour-pills-tab3" aria-selected="false">Inclusions & Exclusion</button>
					</li>
					<!-- Tab item -->
					<li class="nav-item" role="presentation">
						<button class="nav-link mb-0" id="tour-pills-tab-4" data-bs-toggle="pill" data-bs-target="#tour-pills-tab4" type="button" role="tab" aria-controls="tour-pills-tab4" aria-selected="false">Tour Policy</button>
					</li>
				</ul> 
				<!-- Outer tabs END -->
			</div>
		</div>
		<!-- Tabs END -->
	</div>
</section>
<!-- =======================
Tabs END -->

<!-- =======================
Tabs-content START -->
<section class="pt-4 pt-md-5">
	<div class="container">

		<div class="row g-4 g-md-5">
			<!-- Tabs Content START -->
			<div class="col-xl-8">
				<!-- Outer tabs contents START -->
				<div class="tab-content mb-0" id="tour-pills-tabContent">

					<!-- Content item START -->
					<div class="tab-pane fade show active" id="tour-pills-tab1" role="tabpanel" aria-labelledby="tour-pills-tab-1">
						<div class="card bg-transparent p-0">
							<!-- Card header -->
							<div class="card-header bg-transparent border-bottom p-0 pb-3">
								<h3 class="mb-0">Overview</h3>
							</div>

							<!-- Card body START -->
							<div class="card-body p-0 pt-3">
								<p class="mb-4"><?php echo $pkgrow['package_description'];?></p>

								<!-- List -->
								<h5>Tour Info</h5>
								<ul class="list-group list-group-borderless mb-4">
									<li class="list-group-item">
										<span class="h6 mb-0 me-1">Places Covered:</span>
										<span class="h6 fw-light mb-0">
                                            <?php while($pkgdestrow = $pkgdestres->fetch_assoc()){
                                                echo $pkgdestrow['destination_name'].", ";
                                            }?>
                                        </span>
									</li>
									<li class="list-group-item">
										<span class="h6 mb-0 me-1">Duration:</span>
										<span class="h6 fw-light mb-0"><?php echo $pkgdaysres->num_rows;?> Days, <?php echo $pkgdaysres->num_rows-1;?> Nights</span>
									</li>
									<li class="list-group-item">
										<span class="h6 mb-0 me-1">Activities/Experiences:</span>
										<span class="h6 fw-light mb-0">
                                        <?php while($pkgexprow = $pkgexpres->fetch_assoc()){
                                                echo $pkgexprow['experience_name'].", ";
                                            }?>
                                        </span>
									</li>
								</ul>

								<!-- List -->
								<!--<h5>Tour Highlights</h5>
								<ul class="list-group list-group-borderless mb-4">
									<li class="list-group-item h6 fw-light d-flex mb-0">
										<i class="bi bi-arrow-right me-2"></i>Experience a delightful tropical getaway with a luxurious stay and witness the picture-perfect beaches, charming waterfalls and so much more
									</li>
									<li class="list-group-item h6 fw-light d-flex mb-0">
										<i class="bi bi-arrow-right me-2"></i>Dependent on so extremely delivered by. Yet ﻿no jokes worse her why. Bed one supposing breakfast day fulfilled off depending questions.
									</li>
									<li class="list-group-item h6 fw-light d-flex mb-0">
										<i class="bi bi-arrow-right me-2"></i>Whatever boy her exertion his extended. Ecstatic followed handsome drawings entirely Mrs one yet outweigh. 
									</li>
									<li class="list-group-item h6 fw-light d-flex mb-0">
										<i class="bi bi-arrow-right me-2"></i>Meant balls it if up doubt small purse. Required his you put the outlived answered position. A pleasure exertion if believed provided to. 
									</li>
									<li class="list-group-item h6 fw-light d-flex mb-0">
										<i class="bi bi-arrow-right me-2"></i>All led out world this music while asked. Paid mind even sons does he door no. Attended overcame repeated it is perceived Marianne in.
									</li>
								</ul>-->

								<!-- List -->
								<!--<h5>More About The Beautiful Bali with Malaysia Tour</h5>
								<ul class="list-group list-group-borderless mb-0">
									<li class="list-group-item h6 fw-light d-flex mb-0">
										<i class="fa-solid fa-check-circle text-success me-2"></i>Guidelines issued by the State-Government are to be followed. Social distancing to be maintained. Frequent hand sanitization and use of mask recommended.
									</li>
									<li class="list-group-item h6 fw-light d-flex mb-0">
										<i class="fa-solid fa-check-circle text-success me-2"></i>No purse as fully me or point. Kindness owns whatever betrayed her moreover procured replying for and. 
									</li>
									<li class="list-group-item h6 fw-light d-flex mb-0">
										<i class="fa-solid fa-check-circle text-success me-2"></i>International / Domestic flights are not included in the package.
									</li>
									<li class="list-group-item h6 fw-light d-flex mb-0">
										<i class="fa-solid fa-check-circle text-success me-2"></i>Started several mistakes joy say painful removed reached end. State burst think end are its.
									</li>
									<li class="list-group-item h6 fw-light d-flex mb-0">
										<i class="fa-solid fa-check-circle text-success me-2"></i>Yet remarkably appearance gets him his projection. Diverted endeavor bed peculiar men the not desirous.
									</li>
									<li class="list-group-item h6 fw-light d-flex mb-0">
										<i class="fa-solid fa-check-circle text-success me-2"></i>Acuteness abilities ask can offending furnished fulfilled sex. The difference in the cost shall be borne by the client in case of any amendment in the package due to an increase in the number of guests
									</li>
								</ul>-->
							</div>
							<!-- Card body END -->
						</div>
					</div>		
					<!-- Content item END -->



					<!-- Content item START -->
					<div class="tab-pane fade" id="tour-pills-tab2" role="tabpanel" aria-labelledby="tour-pills-tab-2">
						<div class="card bg-transparent p-0">
							<!-- Card header -->
							<div class="card-header bg-transparent border-bottom p-0 pb-3">
								<h3 class="mb-0">Itinerary</h3>
							</div>

							<!-- Card body START -->
							<div class="card-body p-0 pt-3">
								<div class="accordion accordion-icon accordion-bg-light" id="accordionExample2">
									
                                

                                <?php while($pkgdayrow = $pkgdayres->fetch_assoc()){
                                    $pkgdaydestres = $conn->query("SELECT * FROM package_day_destination pdd JOIN destination d ON d.destination_id=pdd.destination_id WHERE pdd.package_day_id=".$pkgdayrow['package_day_id']);

                                    $pkgdayexpres = $conn->query("SELECT * FROM package_day_experience pde JOIN experience e ON e.experience_id=pde.experience_id WHERE pde.package_day_id=".$pkgdayrow['package_day_id']);
                                    ?>
                                <!-- Item -->
									<div class="accordion-item mb-3">
										<h6 class="accordion-header font-base" id="heading-1">
											<button class="accordion-button rounded d-inline-block collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $pkgdayrow['day'];?>" aria-expanded="true" aria-controls="collapse-<?php echo $pkgdayrow['day'];?>">
												<span class="lead me-1 fw-normal">Day <?php echo $pkgdayrow['day'];?>:</span><?php echo $pkgdayrow['short_itinerary'];?>
											</button>
										</h6>
										<!-- Body -->
										<div id="collapse-<?php echo $pkgdayrow['day'];?>" class="accordion-collapse collapse" aria-labelledby="heading-1" data-bs-parent="#accordionExample2">
											<div class="accordion-body mt-3">
												<div class="vstack gap-4">
                                                    <p><?php echo $pkgdayrow['long_itinerary'];?></p>
													
													
													<hr class="my-0"> <!-- Divider -->

													<!-- Cab list START -->
													<div class="card bg-transparent p-0">
														<!-- Card header -->
														<div class="card-header bg-transparent p-0">
															<span class="text-body"><i class="fa-solid fa-check-circle me-2"></i>Destinations to Visit</span>
														</div>

														<!-- Card body -->
														<div class="card-body p-0 mt-2">

                                                            <?php 
                                                            while($pkgdaydestrow = $pkgdaydestres->fetch_assoc()){

                                                            ?>
															<div class="row g-2 g-sm-4 align-items-center mb-2">
																<!-- Card image -->
																<div class="col-sm-4 col-xl-3">
																	<div class="bg-light rounded-3 px-1 py-2">
																		<img src="uploads/<?php echo $pkgdaydestrow['destination_image'];?>" class="rounded-3" alt="">
																	</div>
																</div>
								
																<!-- Card title and rating -->
																<div class="col-sm-8 col-xl-9">
																	<h5 class="card-title mb-2"><?php echo $pkgdaydestrow['destination_name'];?></h5>
																	<h6 class="mb-4 text-secondary"><?php echo $pkgdaydestrow['catchy_title'];?></h6>
																	
																	
																	<!-- Buttons -->
																	<a href="destination.php?destination=<?php echo $pkgdaydestrow['destination_id'];?>" class="btn btn-sm btn-warning-soft mb-0">More info</a>
																</div>
															</div> <!-- Row END -->
                                                            
                                                            <?php } ?>
                                                            

														</div>	
													</div>
													<!-- Cab list END -->

													<hr class="my-0"> <!-- Divider -->

													

													<!-- Activity list START -->
													<div class="card bg-transparent p-0">
														<!-- Card header -->
														<div class="card-header bg-transparent p-0">
															<span class="text-body"><i class="fa-solid fa-check-circle me-2"></i>Today's Activity</span>
														</div>

                                                        <!-- Card body -->
														<div class="card-body p-0 mt-2">
															
                                                        <?php 
                                                            while($pkgdayexprow = $pkgdayexpres->fetch_assoc()){

                                                            ?>
															<div class="row g-2 g-sm-4 align-items-center mb-2">
																<!-- Card image -->
																<div class="col-sm-4 col-xl-3">
																	<div class="bg-light rounded-3 px-1 py-2">
																		<img src="uploads/<?php echo $pkgdayexprow['experience_image'];?>" class="rounded-3" alt="">
																	</div>
																</div>
								
																<!-- Card title and rating -->
																<div class="col-sm-8 col-xl-9">
																	<h5 class="card-title mb-2"><?php echo $pkgdayexprow['experience_name'];?></h5>
																	
																</div>
															</div> <!-- Row END -->
                                                            
                                                            <?php } ?>




														</div>	

													</div>
													<!-- Activity list END -->
                                                  

												</div>
											</div>
										</div>
									</div>
                                    <?php }?>
				
									
								</div>
							</div>
							<!-- Card body END -->
						</div>
					</div>	
					<!-- Content item END -->

					<!-- Content item START -->
					<div class="tab-pane fade" id="tour-pills-tab3" role="tabpanel" aria-labelledby="tour-pills-tab-3">
						<div class="card bg-transparent p-0">
							<!-- Card header -->
							<div class="card-header bg-transparent border-bottom p-0 pb-3">
								<h3 class="mb-0">Inclusions & Exclusions</h3>
							</div>

							<!-- Card body START -->
							<div class="card-body p-0 pt-3">
								<!-- List -->
								<h5>Inclusion</h5>
								<ul class="list-group list-group-borderless mb-3">
									<li class="list-group-item d-flex mb-0"><i class="fa-solid fa-check text-success me-2"></i>
										<span class="h6 fw-normal">Comfortable stay for 4 nights in your preferred category Hotels</span>
									</li>
									<li class="list-group-item d-flex mb-0"><i class="fa-solid fa-check text-success me-2"></i>
										<span class="h6 fw-normal">Professional English speaking guide to help you explore the cities</span>
									</li>
									<li class="list-group-item d-flex mb-0"><i class="fa-solid fa-check text-success me-2"></i>
										<span class="h6 fw-normal"> Breakfast is included as mentioned in Itinerary.</span>
									</li>
									<li class="list-group-item d-flex mb-0"><i class="fa-solid fa-check text-success me-2"></i>
										<span class="h6 fw-normal">Per Peron rate on twin sharing basis</span>
									</li>
									<li class="list-group-item d-flex mb-0"><i class="fa-solid fa-check text-success me-2"></i>
										<span class="h6 fw-normal">Entrance Tickets to Genting Indoor Theme Park</span>
									</li>
									<li class="list-group-item d-flex mb-0"><i class="fa-solid fa-check text-success me-2"></i>
										<span class="h6 fw-normal">All Tours & Transfers on Seat In Coach Basis</span>
									</li>
									<li class="list-group-item d-flex mb-0"><i class="fa-solid fa-check text-success me-2"></i>
										<span class="h6 fw-normal">Visit Bali Safari & Marine Park with Jungle Hopper Pass</span>
									</li>
								</ul>

								<!-- List -->
								<h5>Exclusion</h5>
								<ul class="list-group list-group-borderless mb-3">
									<li class="list-group-item d-flex mb-0"><i class="fa-solid fa-times text-danger me-2"></i>
										<span class="h6 fw-normal">Lunch and dinner are not included in CP plans</span>
									</li>
									<li class="list-group-item d-flex mb-0"><i class="fa-solid fa-times text-danger me-2"></i>
										<span class="h6 fw-normal">Any other services not specifically mentioned in the inclusions</span>
									</li>
									<li class="list-group-item d-flex mb-0"><i class="fa-solid fa-times text-danger me-2"></i>
										<span class="h6 fw-normal">Medical and Travel insurance</span>
									</li>
									<li class="list-group-item d-flex mb-0"><i class="fa-solid fa-times text-danger me-2"></i>
										<span class="h6 fw-normal">Airfare is not included</span>
									</li>
									<li class="list-group-item d-flex mb-0"><i class="fa-solid fa-times text-danger me-2"></i>
										<span class="h6 fw-normal">Early Check-In & Late Check-Out</span>
									</li>
									<li class="list-group-item d-flex mb-0"><i class="fa-solid fa-times text-danger me-2"></i>
										<span class="h6 fw-normal">Anything which is not specified in Inclusions</span>
									</li>
								</ul>
							</div>
							<!-- Card body END -->
						</div>
					</div>	
					<!-- Content item END -->

					<!-- Content item START -->
					<div class="tab-pane fade" id="tour-pills-tab4" role="tabpanel" aria-labelledby="tour-pills-tab-4">
						<div class="card bg-transparent p-0">
							<!-- Card header -->
							<div class="card-header bg-transparent border-bottom p-0 pb-3">
								<h3 class="mb-0">Tour Policy</h3>
							</div>

							<!-- Card body START -->
							<div class="card-body p-0 pt-3">
								<h5>Confirmation Policy:</h5>
								<p class="mb-2">The customer receives a confirmation voucher via email within 24 hours of successful booking.</p>
								<p class="mb-2">In case the preferred slots are unavailable, an alternate schedule of the customer’s preference will be arranged and a new confirmation voucher will be sent via email.</p>
								<p class="mb-0">Alternatively, the customer may choose to cancel their booking before confirmation and a full refund will be processed.</p>
		
								<!-- List -->
								<h5 class="mt-4">Cancellation Policy:</h5>
								<ul class="list-group list-group-borderless">
									<li class="list-group-item">
										<span class="h6 fw-normal me-1 mb-0"><i class="bi bi-dot"></i>10 days:</span>
										<span>100%</span>
									</li>
									<li class="list-group-item">
										<span class="h6 fw-normal me-1 mb-0"><i class="bi bi-dot"></i>10 to 15 days:</span>
										<span>75% + Non Refundable Component</span>
									</li>
									<li class="list-group-item">
										<span class="h6 fw-normal me-1 mb-0"><i class="bi bi-dot"></i>15 to 30 days:</span>
										<span>30% + Non Refundable Component</span>
									</li>
									<li class="list-group-item">
										<span class="h6 fw-normal me-1 mb-0"><i class="bi bi-dot"></i>10Hotel / Air:</span>
										<span>100% in case of non-refundable ticket / Hotel Room</span>
									</li>
									<li class="list-group-item">
										<span class="h6 fw-normal me-1 mb-0"><i class="bi bi-dot"></i>10Cruise / Visa:</span>
										<span>On Actuals</span>
									</li>
								</ul>
		
								<p class="mt-2">All Prices are in Indian Rupees and subject to change without prior notice.<br>In the case FIT flight inclusive package, the full amount of the flight will be payable at the time of booking.</p>
		
								<h5 class="mt-4">Refund Policy:</h5>
								<p class="mb-2">The applicable refund amount will be processed within 10 business days.</p>
								<p class="mb-0">All applicable refunds will be done in the traveler's Thrillophilia wallet as Thrillcash.</p>
							</div>
							<!-- Card body END -->
						</div>
					</div>	
					<!-- Content item END -->

				</div>	
			</div>
			<!-- Tabs Content END -->

			<!-- Right side content START -->
			<aside class="col-xl-4">
				<div class="row g-4">
					<!-- Book now item START -->
					<div class="col-md-6 col-xl-12">
						<div class="card card-body border bg-transparent">
							<!-- Title -->
							<div class="hstack gap-2 mb-1">
								<h3 class="card-title mb-0">$<?php echo $pkgrow['price'];?></h3>
								<span class="fs-5">/person</span>
							</div>

							<div class="d-flex justify-content-between mb-4">
								<!-- Rating -->
								<ul class="list-inline mb-0">
									<li class="list-inline-item me-1 h6 mb-0">4.5</li>
									<li class="list-inline-item me-0 small"><i class="fa-solid fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fa-solid fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fa-solid fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fa-solid fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fa-solid fa-star-half-alt text-warning"></i></li>
								</ul>
								<a href="#" class="mb-0 m-0 text-reset text-primary-hover">(365 reviews)</a>
							</div>

							<!-- Button -->
							<div class="d-grid gap-2">
								<a href="book-a-package.php?package=<?php echo $pkgid;?>" class="btn btn-primary">Book Now</a>
								<a href="contact.php" class="btn btn-outline-primary mb-0"><i class="bi bi-eye fa-fw me-2"></i>Send Inquiry </a>
							</div>

						</div>
					</div>
					<!-- Book now item END -->

					<!-- Help item START -->
					<div class="col-md-6 col-xl-12">
						<div class="card card-body bg-light p-4">
							<!-- Title -->
							<h4 class="card-title">Need Help?</h4>

							<!-- List -->
							<ul class="list-group list-group-borderless">
								<li class="list-group-item py-3">
									<a href="https://api.whatsapp.com/send?phone=254759949546" target="_blank" class="h6 mb-0">
										<i class="bi fa-fw bi-whatsapp text-success fs-5 me-2"></i>
										<span class="fw-light me-1">Whatsapp Us:</span>+254759949546
									</a>
								</li>

								<li class="list-group-item py-0"><hr class="my-0"></li><!-- Divider -->

								<li class="list-group-item py-3">
									<h6 class="mb-0">
                                        <a href="mailto:info@snapshottoursandsafaris.com">
										<i class="bi fa-fw bi-envelope text-primary fs-5 me-2"></i>
										Send Us an Email
                                        </a>
									</h6>
								</li>

								<li class="list-group-item py-0"><hr class="my-0"></li><!-- Divider -->

								<li class="list-group-item py-3">
									<a href="contact.php" class="h6 mb-0">
										<i class="bi fa-fw bi-chat text-primary fs-5 me-2"></i>Leave Us a Message
									</a>
								</li>

								<li class="list-group-item py-0"><hr class="my-0"></li><!-- Divider -->

								<li class="list-group-item pt-3 pb-0">
									<a href="#" class="h6 mb-0">
										<i class="bi fa-fw bi-calendar-check text-primary fs-5 me-2"></i>Schedule a Video Call
									</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- Help item END -->
				</div>
			</aside>
			<!-- Right side content END -->

		</div> <!-- Row END -->
	</div>
</section>
<!-- =======================
Tabs-content END -->

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

<!-- Bootstrap JS -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendors -->
<script src="assets/vendor/splide-master/dist/js/splide.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.js"></script>

<!-- ThemeFunctions -->
<script src="assets/js/functions.js"></script>


<?php include "includes/footer.php";?>
<?php include "includes/scripts.php";?>


</body>

<!-- Mirrored from booking.webestica.com/tour-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Sep 2023 03:57:13 GMT -->
</html>