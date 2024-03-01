<?php 
require "includes/connect.php";

$pkgres = $conn->query("SELECT * FROM package");
$destres = $conn->query("SELECT * FROM destination LIMIT 6");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>The East African Best Travel Agency | Kiboko Tours and Travel</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Plan your adventure with Kiboko Tours and Travel in Kenya and Tanzania. Specializing in personalized safaris, beach retreats, and cultural explorations, our six years of expertise ensure every moment is a captivating snapshot of wonder. Discover East Africa’s top destinations like Maasai Mara, Tsavo, Amboseli, and Zanzibar.">

	<meta name="keywords" content="Adventure Safaris, Beach Holidays in Kenya and Tanzania, Cultural Explorations, Maasai Mara Safaris, Tsavo Safari packages,  Amboseli Tours, Zanzibar Getaway, Accommodation Deals, Exclusive Offers, African Culture Experiences, Top Safari Destinations, Kenya and Tanzania Travel, Honeymoon Stay, Executive Stay, Large Group Travels, East Africa Exploration, Kiboko Tours and Travel, Wildlife Encounters, Travel Packages, Scenic Executive and Luxury, 2024 Travel Deals, Safari Reviews, Personalized Itinerary, East Africa Adventure Holidays, Thrilling Safari Experiences">


	<?php include "includes/stylesheets.php";?>

</head>

<body>
	<?php include "includes/navbar.php";?>


<!-- **************** MAIN CONTENT START **************** -->
<main>
	
<!-- =======================
Main Banner START -->
<section class="py-0">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 mx-auto">
				<!-- Slider START -->
				<div class="tiny-slider arrow-round arrow-blur arrow-hover rounded-3 overflow-hidden">
					<div class="tiny-slider-inner" data-gutter="0" data-arrow="true" data-dots="false" data-items="1" data-autoplaytime="7000" data-loop="false">
						

						<!-- Card item START -->
						<div class="card overflow-hidden h-400px h-sm-600px rounded-0" style="background-image:url(assets/images/banner5.jpg); background-position: center left; background-size: cover;">
							<!-- Background dark overlay -->
							<div class="bg-overlay bg-dark opacity-3"></div>
							<!-- Card image overlay -->
							<div class="card-img-overlay d-flex align-items-center"> 
								<div class="container">
									<div class="row">
										<div class="col-11 col-lg-7">
											<h6 class="text-white fw-normal mb-0"><i class="fa-solid fa-heart bg-danger p-1 rounded-3"></i> Fall in love with the Wild</h6>
											<!-- Title -->
											<h1 class="text-white display-6">Experience the Beauty of Nature</h1>
											<a href="#" class="btn btn-warning mb-0">Get a Customized Package</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Card item END -->

						<!-- Card item START -->
						<div class="card overflow-hidden h-400px h-sm-600px bg-parallax text-center rounded-0"  data-jarallax-video="https://youtu.be/4W61GqRttNY?si=JIXG7Yd_KAeyxt9d&t=117">
							<!-- Background dark overlay -->
							<div class="bg-overlay bg-dark opacity-3"></div>
							<!-- Card image overlay -->
							<div class="card-img-overlay d-flex align-items-center"> 
								<div class="container w-100 my-auto">
									<div class="row justify-content-center">
										<div class="col-11">	
											<!-- Title -->
											<h1 class="text-white">Explore Kenya & Tanzania with <br><span class="text-warning"> Kiboko Tours and Travel</span></h1>
											<a href="#" class="btn btn-dark mb-0">Speak to our Expert Now!</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Card item END -->

					</div>
				</div>
				<!-- Slider END -->
			</div>
		</div>
	</div>
</section>
<!-- =======================
Main Banner END -->


<!-- =======================
About START -->
<section class="pb-0 pb-xl-5">
	<div class="container">
		<div class="row g-4 justify-content-between align-items-center">
			<!-- Left side START -->
			<div class="col-lg-5 position-relative">
				<!-- Svg Decoration 
				<figure class="position-absolute top-0 start-0 translate-middle z-index-1 ms-4">
					<svg class="fill-success" width="77px" height="77px">
						<path d="M76.997,41.258 L45.173,41.258 L67.676,63.760 L63.763,67.673 L41.261,45.171 L41.261,76.994 L35.728,76.994 L35.728,45.171 L13.226,67.673 L9.313,63.760 L31.816,41.258 L-0.007,41.258 L-0.007,35.725 L31.816,35.725 L9.313,13.223 L13.226,9.311 L35.728,31.813 L35.728,-0.010 L41.261,-0.010 L41.261,31.813 L63.763,9.311 L67.676,13.223 L45.174,35.725 L76.997,35.725 L76.997,41.258 Z"/>
					</svg>
				</figure>

				Svg decoration -->
				<figure class="position-absolute bottom-0 end-0 d-none d-md-block mb-n5 me-n4">
					<svg height="400" class="fill-primary opacity-2" viewBox="0 0 340 340">
						<circle cx="194.2" cy="2.2" r="2.2"></circle>
						<circle cx="2.2" cy="2.2" r="2.2"></circle>
						<circle cx="218.2" cy="2.2" r="2.2"></circle>
						<circle cx="26.2" cy="2.2" r="2.2"></circle>
						<circle cx="242.2" cy="2.2" r="2.2"></circle>
						<circle cx="50.2" cy="2.2" r="2.2"></circle>
						<circle cx="266.2" cy="2.2" r="2.2"></circle>
						<circle cx="74.2" cy="2.2" r="2.2"></circle>
						<circle cx="290.2" cy="2.2" r="2.2"></circle>
						<circle cx="98.2" cy="2.2" r="2.2"></circle>
						<circle cx="314.2" cy="2.2" r="2.2"></circle>
						<circle cx="122.2" cy="2.2" r="2.2"></circle>
						<circle cx="338.2" cy="2.2" r="2.2"></circle>
						<circle cx="146.2" cy="2.2" r="2.2"></circle>
						<circle cx="170.2" cy="2.2" r="2.2"></circle>
						<circle cx="194.2" cy="26.2" r="2.2"></circle>
						<circle cx="2.2" cy="26.2" r="2.2"></circle>
						<circle cx="218.2" cy="26.2" r="2.2"></circle>
						<circle cx="26.2" cy="26.2" r="2.2"></circle>
						<circle cx="242.2" cy="26.2" r="2.2"></circle>
						<circle cx="50.2" cy="26.2" r="2.2"></circle>
						<circle cx="266.2" cy="26.2" r="2.2"></circle>
						<circle cx="74.2" cy="26.2" r="2.2"></circle>
						<circle cx="290.2" cy="26.2" r="2.2"></circle>
						<circle cx="98.2" cy="26.2" r="2.2"></circle>
						<circle cx="314.2" cy="26.2" r="2.2"></circle>
						<circle cx="122.2" cy="26.2" r="2.2"></circle>
						<circle cx="338.2" cy="26.2" r="2.2"></circle>
						<circle cx="146.2" cy="26.2" r="2.2"></circle>
						<circle cx="170.2" cy="26.2" r="2.2"></circle>
						<circle cx="194.2" cy="50.2" r="2.2"></circle>
						<circle cx="2.2" cy="50.2" r="2.2"></circle>
						<circle cx="218.2" cy="50.2" r="2.2"></circle>
						<circle cx="26.2" cy="50.2" r="2.2"></circle>
						<circle cx="242.2" cy="50.2" r="2.2"></circle>
						<circle cx="50.2" cy="50.2" r="2.2"></circle>
						<circle cx="266.2" cy="50.2" r="2.2"></circle>
						<circle cx="74.2" cy="50.2" r="2.2"></circle>
						<circle cx="290.2" cy="50.2" r="2.2"></circle>
						<circle cx="98.2" cy="50.2" r="2.2"></circle>
						<circle cx="314.2" cy="50.2" r="2.2"></circle>
						<circle cx="122.2" cy="50.2" r="2.2"></circle>
						<circle cx="338.2" cy="50.2" r="2.2"></circle>
						<circle cx="146.2" cy="50.2" r="2.2"></circle>
						<circle cx="170.2" cy="50.2" r="2.2"></circle>
						<circle cx="194.2" cy="74.2" r="2.2"></circle>
						<circle cx="2.2" cy="74.2" r="2.2"></circle>
						<circle cx="218.2" cy="74.2" r="2.2"></circle>
						<circle cx="26.2" cy="74.2" r="2.2"></circle>
						<circle cx="242.2" cy="74.2" r="2.2"></circle>
						<circle cx="50.2" cy="74.2" r="2.2"></circle>
						<circle cx="266.2" cy="74.2" r="2.2"></circle>
						<circle cx="74.2" cy="74.2" r="2.2"></circle>
						<circle cx="290.2" cy="74.2" r="2.2"></circle>
						<circle cx="98.2" cy="74.2" r="2.2"></circle>
						<circle cx="314.2" cy="74.2" r="2.2"></circle>
						<circle cx="122.2" cy="74.2" r="2.2"></circle>
						<circle cx="338.2" cy="74.2" r="2.2"></circle>
						<circle cx="146.2" cy="74.2" r="2.2"></circle>
						<circle cx="170.2" cy="74.2" r="2.2"></circle>
						<circle cx="194.2" cy="98.2" r="2.2"></circle>
						<circle cx="2.2" cy="98.2" r="2.2"></circle>
						<circle cx="218.2" cy="98.2" r="2.2"></circle>
						<circle cx="26.2" cy="98.2" r="2.2"></circle>
						<circle cx="242.2" cy="98.2" r="2.2"></circle>
						<circle cx="50.2" cy="98.2" r="2.2"></circle>
						<circle cx="266.2" cy="98.2" r="2.2"></circle>
						<circle cx="74.2" cy="98.2" r="2.2"></circle>
						<circle cx="290.2" cy="98.2" r="2.2"></circle>
						<circle cx="98.2" cy="98.2" r="2.2"></circle>
						<circle cx="314.2" cy="98.2" r="2.2"></circle>
						<circle cx="122.2" cy="98.2" r="2.2"></circle>
						<circle cx="338.2" cy="98.2" r="2.2"></circle>
						<circle cx="146.2" cy="98.2" r="2.2"></circle>
						<circle cx="170.2" cy="98.2" r="2.2"></circle>
						<circle cx="194.2" cy="122.2" r="2.2"></circle>
						<circle cx="2.2" cy="122.2" r="2.2"></circle>
						<circle cx="218.2" cy="122.2" r="2.2"></circle>
						<circle cx="26.2" cy="122.2" r="2.2"></circle>
						<circle cx="242.2" cy="122.2" r="2.2"></circle>
						<circle cx="50.2" cy="122.2" r="2.2"></circle>
						<circle cx="266.2" cy="122.2" r="2.2"></circle>
						<circle cx="74.2" cy="122.2" r="2.2"></circle>
						<circle cx="290.2" cy="122.2" r="2.2"></circle>
						<circle cx="98.2" cy="122.2" r="2.2"></circle>
						<circle cx="314.2" cy="122.2" r="2.2"></circle>
						<circle cx="122.2" cy="122.2" r="2.2"></circle>
						<circle cx="338.2" cy="122.2" r="2.2"></circle>
						<circle cx="146.2" cy="122.2" r="2.2"></circle>
						<circle cx="170.2" cy="122.2" r="2.2"></circle>
						<circle cx="194.2" cy="146.2" r="2.2"></circle>
						<circle cx="2.2" cy="146.2" r="2.2"></circle>
						<circle cx="218.2" cy="146.2" r="2.2"></circle>
						<circle cx="26.2" cy="146.2" r="2.2"></circle>
						<circle cx="242.2" cy="146.2" r="2.2"></circle>
						<circle cx="50.2" cy="146.2" r="2.2"></circle>
						<circle cx="266.2" cy="146.2" r="2.2"></circle>
						<circle cx="74.2" cy="146.2" r="2.2"></circle>
						<circle cx="290.2" cy="146.2" r="2.2"></circle>
						<circle cx="98.2" cy="146.2" r="2.2"></circle>
						<circle cx="314.2" cy="146.2" r="2.2"></circle>
						<circle cx="122.2" cy="146.2" r="2.2"></circle>
						<circle cx="338.2" cy="146.2" r="2.2"></circle>
						<circle cx="146.2" cy="146.2" r="2.2"></circle>
						<circle cx="170.2" cy="146.2" r="2.2"></circle>
						<circle cx="194.2" cy="170.2" r="2.2"></circle>
						<circle cx="2.2" cy="170.2" r="2.2"></circle>
						<circle cx="218.2" cy="170.2" r="2.2"></circle>
						<circle cx="26.2" cy="170.2" r="2.2"></circle>
						<circle cx="242.2" cy="170.2" r="2.2"></circle>
						<circle cx="50.2" cy="170.2" r="2.2"></circle>
						<circle cx="266.2" cy="170.2" r="2.2"></circle>
						<circle cx="74.2" cy="170.2" r="2.2"></circle>
						<circle cx="290.2" cy="170.2" r="2.2"></circle>
						<circle cx="98.2" cy="170.2" r="2.2"></circle>
						<circle cx="314.2" cy="170.2" r="2.2"></circle>
						<circle cx="122.2" cy="170.2" r="2.2"></circle>
						<circle cx="338.2" cy="170.2" r="2.2"></circle>
						<circle cx="146.2" cy="170.2" r="2.2"></circle>
						<circle cx="170.2" cy="170.2" r="2.2"></circle>
						<circle cx="194.2" cy="194.2" r="2.2"></circle>
						<circle cx="2.2" cy="194.2" r="2.2"></circle>
						<circle cx="218.2" cy="194.2" r="2.2"></circle>
						<circle cx="26.2" cy="194.2" r="2.2"></circle>
						<circle cx="242.2" cy="194.2" r="2.2"></circle>
						<circle cx="50.2" cy="194.2" r="2.2"></circle>
						<circle cx="266.2" cy="194.2" r="2.2"></circle>
						<circle cx="74.2" cy="194.2" r="2.2"></circle>
						<circle cx="290.2" cy="194.2" r="2.2"></circle>
						<circle cx="98.2" cy="194.2" r="2.2"></circle>
						<circle cx="314.2" cy="194.2" r="2.2"></circle>
						<circle cx="122.2" cy="194.2" r="2.2"></circle>
						<circle cx="338.2" cy="194.2" r="2.2"></circle>
						<circle cx="146.2" cy="194.2" r="2.2"></circle>
						<circle cx="170.2" cy="194.2" r="2.2"></circle>
						<circle cx="194.2" cy="218.2" r="2.2"></circle>
						<circle cx="2.2" cy="218.2" r="2.2"></circle>
						<circle cx="218.2" cy="218.2" r="2.2"></circle>
						<circle cx="26.2" cy="218.2" r="2.2"></circle>
						<circle cx="242.2" cy="218.2" r="2.2"></circle>
						<circle cx="50.2" cy="218.2" r="2.2"></circle>
						<circle cx="266.2" cy="218.2" r="2.2"></circle>
						<circle cx="74.2" cy="218.2" r="2.2"></circle>
						<circle cx="290.2" cy="218.2" r="2.2"></circle>
						<circle cx="98.2" cy="218.2" r="2.2"></circle>
						<circle cx="314.2" cy="218.2" r="2.2"></circle>
						<circle cx="122.2" cy="218.2" r="2.2"></circle>
						<circle cx="338.2" cy="218.2" r="2.2"></circle>
						<circle cx="146.2" cy="218.2" r="2.2"></circle>
						<circle cx="170.2" cy="218.2" r="2.2"></circle>
						<circle cx="194.2" cy="242.2" r="2.2"></circle>
						<circle cx="2.2" cy="242.2" r="2.2"></circle>
						<circle cx="218.2" cy="242.2" r="2.2"></circle>
						<circle cx="26.2" cy="242.2" r="2.2"></circle>
						<circle cx="242.2" cy="242.2" r="2.2"></circle>
						<circle cx="50.2" cy="242.2" r="2.2"></circle>
						<circle cx="266.2" cy="242.2" r="2.2"></circle>
						<circle cx="74.2" cy="242.2" r="2.2"></circle>
						<circle cx="290.2" cy="242.2" r="2.2"></circle>
						<circle cx="98.2" cy="242.2" r="2.2"></circle>
						<circle cx="314.2" cy="242.2" r="2.2"></circle>
						<circle cx="122.2" cy="242.2" r="2.2"></circle>
						<circle cx="338.2" cy="242.2" r="2.2"></circle>
						<circle cx="146.2" cy="242.2" r="2.2"></circle>
						<circle cx="170.2" cy="242.2" r="2.2"></circle>
						<circle cx="194.2" cy="266.2" r="2.2"></circle>
						<circle cx="2.2" cy="266.2" r="2.2"></circle>
						<circle cx="218.2" cy="266.2" r="2.2"></circle>
						<circle cx="26.2" cy="266.2" r="2.2"></circle>
						<circle cx="242.2" cy="266.2" r="2.2"></circle>
						<circle cx="50.2" cy="266.2" r="2.2"></circle>
						<circle cx="266.2" cy="266.2" r="2.2"></circle>
						<circle cx="74.2" cy="266.2" r="2.2"></circle>
						<circle cx="290.2" cy="266.2" r="2.2"></circle>
						<circle cx="98.2" cy="266.2" r="2.2"></circle>
						<circle cx="314.2" cy="266.2" r="2.2"></circle>
						<circle cx="122.2" cy="266.2" r="2.2"></circle>
						<circle cx="338.2" cy="266.2" r="2.2"></circle>
						<circle cx="146.2" cy="266.2" r="2.2"></circle>
						<circle cx="170.2" cy="266.2" r="2.2"></circle>
						<circle cx="194.2" cy="290.2" r="2.2"></circle>
						<circle cx="2.2" cy="290.2" r="2.2"></circle>
						<circle cx="218.2" cy="290.2" r="2.2"></circle>
						<circle cx="26.2" cy="290.2" r="2.2"></circle>
						<circle cx="242.2" cy="290.2" r="2.2"></circle>
						<circle cx="50.2" cy="290.2" r="2.2"></circle>
						<circle cx="266.2" cy="290.2" r="2.2"></circle>
						<circle cx="74.2" cy="290.2" r="2.2"></circle>
						<circle cx="290.2" cy="290.2" r="2.2"></circle>
						<circle cx="98.2" cy="290.2" r="2.2"></circle>
						<circle cx="314.2" cy="290.2" r="2.2"></circle>
						<circle cx="122.2" cy="290.2" r="2.2"></circle>
						<circle cx="338.2" cy="290.2" r="2.2"></circle>
						<circle cx="146.2" cy="290.2" r="2.2"></circle>
						<circle cx="170.2" cy="290.2" r="2.2"></circle>
						<circle cx="194.2" cy="314.2" r="2.2"></circle>
						<circle cx="2.2" cy="314.2" r="2.2"></circle>
						<circle cx="218.2" cy="314.2" r="2.2"></circle>
						<circle cx="26.2" cy="314.2" r="2.2"></circle>
						<circle cx="242.2" cy="314.2" r="2.2"></circle>
						<circle cx="50.2" cy="314.2" r="2.2"></circle>
						<circle cx="266.2" cy="314.2" r="2.2"></circle>
						<circle cx="74.2" cy="314.2" r="2.2"></circle>
						<circle cx="290.2" cy="314.2" r="2.2"></circle>
						<circle cx="98.2" cy="314.2" r="2.2"></circle>
						<circle cx="314.2" cy="314.2" r="2.2"></circle>
						<circle cx="122.2" cy="314.2" r="2.2"></circle>
						<circle cx="338.2" cy="314.2" r="2.2"></circle>
						<circle cx="146.2" cy="314.2" r="2.2"></circle>
						<circle cx="170.2" cy="314.2" r="2.2"></circle>
						<circle cx="194.2" cy="338.2" r="2.2"></circle>
						<circle cx="2.2" cy="338.2" r="2.2"></circle>
						<circle cx="218.2" cy="338.2" r="2.2"></circle>
						<circle cx="26.2" cy="338.2" r="2.2"></circle>
						<circle cx="242.2" cy="338.2" r="2.2"></circle>
						<circle cx="50.2" cy="338.2" r="2.2"></circle>
						<circle cx="266.2" cy="338.2" r="2.2"></circle>
						<circle cx="74.2" cy="338.2" r="2.2"></circle>
						<circle cx="290.2" cy="338.2" r="2.2"></circle>
						<circle cx="98.2" cy="338.2" r="2.2"></circle>
						<circle cx="314.2" cy="338.2" r="2.2"></circle>
						<circle cx="122.2" cy="338.2" r="2.2"></circle>
						<circle cx="338.2" cy="338.2" r="2.2"></circle>
						<circle cx="146.2" cy="338.2" r="2.2"></circle>
						<circle cx="170.2" cy="338.2" r="2.2"></circle>
					</svg>
				</figure>

				<!-- Image -->
				<img src="assets/images/aboutlion.jpg" class="rounded-3 position-relative" alt="">

				<!-- Client rating START -->
				<div class="position-absolute bottom-0 start-0 z-index-1 mb-4 ms-5">
					<div class="bg-body d-flex d-inline-block rounded-3 position-relative p-3">	

						<!-- Element -->
						<img src="assets/images/tripadvisorlogo.png" class="position-absolute top-0 start-0 translate-middle w-40px" alt="">

						<!-- Avatar group -->
						<div class="me-4">
							<h6 class="fw-light">Clients</h6>
							<!-- Avatar group -->
							<ul class="avatar-group mb-0">
								<li class="avatar avatar-sm">
									<img class="avatar-img rounded-circle" src="assets/images/tr1.jpg" alt="avatar">
								</li>
								<li class="avatar avatar-sm">
									<img class="avatar-img rounded-circle" src="assets/images/tr2.jpg" alt="avatar">
								</li>
								<li class="avatar avatar-sm">
									<img class="avatar-img rounded-circle" src="assets/images/tr3.jpg" alt="avatar">
								</li>
								<li class="avatar avatar-sm">
									<img class="avatar-img rounded-circle" src="assets/images/tr4.jpg" alt="avatar">
								</li>
								<li class="avatar avatar-sm">
									<div class="avatar-img rounded-circle bg-warning">
										<span class="text-white position-absolute top-50 start-50 translate-middle small">10+</span>
									</div>
								</li>
							</ul>
						</div>

						<!-- Rating -->
						<div>
							<h6 class="fw-light mb-3">Rating</h6>
							<h6 class="m-0">4.8<i class="fa-solid fa-star text-success ms-1"></i></h6>
						</div>
					</div>
				</div>
				<!-- Client rating END -->
			</div>
			<!-- Left side END -->

			<!-- Right side START -->
			<div class="col-lg-6">
				<h2 class="mb-3 mb-lg-5">The Best Holidays Start Here!</h2>
				<p class="mb-3 mb-lg-5">Enjoy a thrilling savannah adventure with Kiboko Tours and Travel. With six years of expertise, we specialize in personalized safaris, beach retreats, and cultural explorations in Kenya and Tanzania. Our team ensures every moment is a captivating snapshot of wonder. Join us as we delve into an unforgettable journey where your Savannah safari story unfolds. Welcome to Kiboko Tours and Travel, where travel dreams become reality.</p>

				<!-- Features START -->
				<div class="row g-4">
					<!-- Item -->
					<div class="col-sm-6">
						<div class="icon-lg bg-info bg-opacity-10 text-info rounded-circle"><i class="fa-solid fa-utensils"></i></div>
						<h5 class="mt-2">Accommodation</h5>
						<p class="mb-0">Enjoy Scenic Executive and Luxury Hotels in the wild.</p>
					</div>
					<!-- Item -->
					<div class="col-sm-6">
						<div class="icon-lg bg-success bg-opacity-10 text-success rounded-circle"><i class="fa-solid fa-binoculars"></i></div>
						<h5 class="mt-2">Adventure Safaris</h5>
						<p class="mb-0">Expereince wildlife encounters like never before. </p>
					</div>
					<!-- Item -->
					<div class="col-sm-6">
						<div class="icon-lg bg-orange bg-opacity-10 text-orange rounded-circle"><i class="fa-solid fa-umbrella-beach"></i></div>
						<h5 class="mt-2">Beach Holidays</h5>
						<p class="mb-0">Relax on pristine coastal beaches in Kenya and Zanzibar. </p>
					</div>
					<!-- Item -->
					<div class="col-sm-6">
						<div class="icon-lg bg-danger bg-opacity-10 text-danger rounded-circle"><i class="fa-solid fa-drum"></i></div>
						<h5 class="mt-2">African Culture</h5>
						<p class="mb-0">Immerse yourself in local traditions and culture.</p>
					</div>		
				</div>
				<!-- Features END -->

			</div>
			<!-- Right side END -->
		</div>
	</div>
</section>
<!-- =======================
About END -->


<!-- =======================
Special offer START -->
<section class="pb-0">
	<div class="container">
		<!-- Title -->
		<div class="row mb-4">
			<div class="col-12 text-center">
				<h3 class="mb-0">Top Packages</h3>
			</div>
		</div>

		<!-- Slider START -->
		<div class="tiny-slider arrow-round arrow-blur arrow-hover">
			<div class="tiny-slider-inner mb-8" data-autoplay="true" data-arrow="true" data-edge="2" data-dots="false" data-items-xl="3" data-items-lg="3" data-items-md="2" data-items-sm="1">
				
				<?php while($pkgrow = $pkgres->fetch_assoc()){?>
				<!-- Offer card START -->
				<div>
					<div class="card">
						<img src="https://snapshottoursandsafaris.com/uploads/<?php echo $pkgrow['package_image'];?>" class="card-img" alt="Kiboko Tours and Travel <?php echo $pkgrow['subtitle'];?>" style="height: 300px">
						<!-- Card body -->
						<div class="position-absolute top-100 start-50 translate-middle w-100">
							<div class="card-body text-center bg-mode shadow rounded mx-4 p-3">
								<h6 class="card-title mb-1"><a href="package.php?package=<?php echo $pkgrow['package_id'];?>"><?php echo $pkgrow['title'];?></a></h6>
								<small><?php echo $pkgrow['subtitle'];?></small>
								<div class="mt-2"><a href="#" class="btn btn-sm btn-dark mb-0">View Package</a></div>
							</div>
						</div>
					</div>
				</div>
				<!-- Offer card END -->
				<?php } ?>

				
			</div>	
		</div>
		<!-- Slider END -->
	</div>
</section>
<!-- =======================
Special offer END -->





<!-- =======================
Near by START -->
<section>
	<div class="container">
		<!-- Title -->
		<div class="row mb-4">
			<div class="col-12 text-center">
				<h2 class="mb-0">Explore Top Destinations</h2>
			</div>
		</div>

		<div class="row g-4 g-md-5">
			<!-- Card item START -->

			<?php while($destrow = $destres->fetch_assoc()){?>
			<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
				<div class="card bg-transparent text-center p-1 h-100">
					<!-- Image -->
					<img src="https://snapshottoursandsafaris.com/uploads/<?php echo $destrow['destination_image'];?>" class="rounded-circle"  alt="<?php echo $destrow['destination_name'];?>" style="width:150px;height:120px">

					<div class="card-body p-0 pt-3">
						<h5 class="card-title"><a href="#" class="stretched-link"><?php echo $destrow['destination_name'];?></a></h5>
					</div>
				</div>
			</div>
			<?php } ?>

		</div> <!-- Row END -->
	</div>
</section>
<!-- =======================
Near by END -->

<!-- =======================
Services START -->
<section class="pt-0 pt-lg-5">
	<div class="container">
		<div class="row g-4 align-items-center">
			<div class="col-lg-6">
				<!-- Title -->
				<h2>We Provide The Best Experience For You</h2>
				<p>Book your trip with us and don't forget to grab an awesome package deal to save massive on your travel.</p>
				
				<!-- Services -->
				<div class="row g-sm-4 mb-4">
					<div class="col-sm-6">
						<ul class="list-group list-group-borderless mt-2 mb-0">
							<li class="list-group-item">
								<h6 class="fw-normal mb-0"><i class="fa-solid fa-wifi fa-fw text-primary me-2"></i>Honeymoon Stay</h6>
							</li>

							<li class="list-group-item">
								<h6 class="fw-normal mb-0"><i class="fa-solid fa-person-swimming fa-fw text-primary me-2"></i>Adventure Stay</h6>
							</li>

							<li class="list-group-item">
								<h6 class="fw-normal mb-0"><i class="fa-solid fa-person-shelter fa-fw text-primary me-2"></i>Work Travel</h6>
							</li>

							<li class="list-group-item">
								<h6 class="fw-normal mb-0"><i class="fa-solid fa-utensils fa-fw text-primary me-2"></i>For Business</h6>
							</li>
						</ul>
					</div>

					<div class="col-sm-6">
						<ul class="list-group list-group-borderless">
							<li class="list-group-item">
								<h6 class="fw-normal mb-0"><i class="fa-solid fa-bolt fa-fw text-primary me-2"></i>Executive Stay</h6>
							</li>

							<li class="list-group-item">
								<h6 class="fw-normal mb-0"><i class="fa-solid fa-dumbbell fa-fw text-primary me-2"></i>Large Group Travels</h6>
							</li>

							<li class="list-group-item">
								<h6 class="fw-normal mb-0"><i class="fa-solid fa-spa fa-fw text-primary me-2"></i>Culture</h6>
							</li>
						</ul>
					</div>
				</div>

				<!-- Button -->
				<a href="#" class="btn btn-dark mb-4">Travel With Us Today!</a>
			</div>

			<div class="col-lg-6">
				<div class="bg-light rounded-3 h-100 p-4">
					<!-- Slider START -->
					<div class="tiny-slider arrow-round arrow-blur">
						<div class="tiny-slider-inner" data-autoplay="true" data-arrow="true" data-edge="2" data-dots="false" data-items-xl="1" data-items-md="1">
							
							<!-- Card START -->
							<div class="card bg-transparent">
								<div class="row g-4 align-items-center">
									<div class="col-sm-6">
										<img src="assets/images/category/flight/02.jpg" class="img-fluid card-img" alt="">
									</div>
									<div class="col-sm-6">
										<div class="card-body p-0">
											<h6 class="fw-normal mb-3">Honeymoon Sweets</h6>
											<h4 class="card-title mb-3"><a href="#" class="stretched-link">Zanzibar</a></h4>
											<a href="#" class="btn btn-link p-0">Explore Now <i class="bi bi-arrow-right"></i></a>
										</div>
									</div>
								</div>
							</div>
							<!-- Card END -->

							<!-- Card START -->
							<div class="card bg-transparent">
								<div class="row g-4 align-items-center">
									<div class="col-sm-6">
										<img src="assets/images/adventure-stay.jpg" class="img-fluid card-img" alt="">
									</div>
									<div class="col-sm-6">
										<div class="card-body p-0">
											<h6 class="fw-normal mb-3">Adventure Stay</h6>
											<h4 class="card-title mb-3"><a href="#" class="stretched-link">Maasai Mara</a></h4>
											<a href="#" class="btn btn-link p-0">Explore Now <i class="bi bi-arrow-right"></i></a>
										</div>
									</div>
								</div>
							</div>
							<!-- Card END -->

							<!-- Card START -->
							<div class="card bg-transparent">
								<div class="row g-4 align-items-center">
									<div class="col-sm-6">
										<img src="assets/images/wildbeest.jpg" class="img-fluid card-img" alt="">
									</div>
									<div class="col-sm-6">
										<div class="card-body p-0">
											<h6 class="fw-normal mb-3">Wildlife Experience</h6>
											<h4 class="card-title mb-3"><a href="#" class="stretched-link">The Wildbeest Migration</a></h4>
											<a href="#" class="btn btn-link p-0">Explore Now <i class="bi bi-arrow-right"></i></a>
										</div>
									</div>
								</div>
							</div>
							<!-- Card END -->
						</div>
					</div>	
					<!-- Slider END -->
				</div>
			</div>
		</div> <!-- Row END -->
	</div>
</section>
<!-- =======================
Services END -->

<!-- =======================
Action box START -->
<section class="py-0 py-md-5">
	<div class="container">
		<div class="position-relative rounded-3 overflow-hidden p-3 p-sm-5" style="background-image:url(assets/images/zanzibar2.jpg); background-position: center left; background-size: cover;">
			<div class="row position-relative z-index-9">
				<div class="col-md-7 col-xl-5 ms-auto">
					<div class="card card-body p-sm-5">
						<div class="d-sm-flex justify-content-between align-items-center mb-2">
							<h6 class="text-primary mb-0">Exclusive Offer</h6>
							<!-- Rating -->
							<ul class="list-inline small mb-0">
								<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
								<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
								<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
								<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
								<li class="list-inline-item"><i class="fa-solid fa-star text-warning"></i></li>
							</ul>
						</div>
						<!-- Title -->
						<h5>Enjoy Your Dream Vacation In Zanzibar</h5>
						<p class="mb-3">Embark on your dream Zanzibar getaway with our exclusive 2 days/3 nights offer. Don't miss this opportunity!</p>

						<!-- Price -->
						<h6 class="fw-normal mb-1">2 Days / 3 Nights</h6>
						<div class="d-flex align-items-center">
							<h5 class="text-success mb-0 me-1">$750</h5>
							<span class="mb-0 me-2">/day</span>
							<span class="text-decoration-line-through">$1000</span>
						</div>
							<!-- Button -->
							<a href="#" class="btn btn-warning mb-0 mt-3">Book Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Action box END -->

<!-- =======================
Steps START -->
<section class="pt-0">
	<div class="container">
		<!-- Title -->
		<div class="row mb-4">
			<div class="col-12 text-center">
				<h2 class="mt-2 mb-3">It's Easy to Book a Trip!</h2>
			</div>
		</div>
		<div class="row g-4 g-lg-5 justify-content-center">
			<!-- Step item -->
			<div class="col-sm-6 col-md-4 text-center position-relative">
				<!-- SVG decoration -->
				<figure class="position-absolute top-0 start-100 translate-middle mt-8 d-none d-lg-block">
					<svg width="154px" height="83px">
						<path class="fill-secondary opacity-4" d="M142.221,83.016 L140.251,81.082 L148.020,73.376 C146.847,73.405 145.665,73.402 144.479,73.353 L144.548,70.637 C145.888,70.692 147.217,70.676 148.535,70.628 L139.384,62.839 L141.165,60.792 L153.787,71.539 L142.221,83.016 ZM131.667,71.378 L132.327,68.751 C134.373,69.284 136.418,69.712 138.402,70.022 L138.015,72.707 C135.938,72.383 133.803,71.936 131.667,71.378 ZM119.489,67.036 L120.594,64.564 C122.531,65.433 124.480,66.221 126.383,66.905 L125.482,69.458 C123.509,68.751 121.493,67.935 119.489,67.036 ZM108.113,60.978 L109.540,58.677 C111.340,59.784 113.170,60.834 114.978,61.800 L113.698,64.186 C111.840,63.193 109.961,62.115 108.113,60.978 ZM99.302,55.005 C98.712,54.567 98.124,54.125 97.540,53.680 L99.203,51.541 C99.776,51.978 100.352,52.412 100.933,52.843 C102.031,53.657 103.148,54.459 104.282,55.243 L102.729,57.461 C101.568,56.659 100.426,55.841 99.302,55.005 ZM87.631,45.617 L89.413,43.574 C91.015,44.943 92.626,46.298 94.258,47.629 L92.525,49.714 C90.877,48.369 89.247,47.000 87.631,45.617 ZM78.063,37.231 L79.883,35.221 L84.635,39.423 L82.823,41.439 L78.063,37.231 ZM68.521,28.905 L70.295,26.853 C71.914,28.227 73.520,29.618 75.118,31.017 L73.310,33.038 C71.724,31.648 70.130,30.268 68.521,28.905 ZM58.688,21.003 L60.328,18.848 C62.036,20.128 63.717,21.440 65.378,22.781 L63.659,24.875 C62.023,23.557 60.369,22.263 58.688,21.003 ZM48.288,13.967 L49.683,11.647 C51.494,12.727 53.321,13.891 55.111,15.108 L53.575,17.340 C51.832,16.155 50.053,15.019 48.288,13.967 ZM38.981,9.077 C38.372,8.799 37.760,8.531 37.146,8.268 L38.204,5.775 C38.838,6.046 39.469,6.325 40.098,6.611 C41.429,7.216 42.746,7.854 44.046,8.521 L42.810,10.930 C41.547,10.283 40.272,9.664 38.981,9.077 ZM25.330,4.320 L25.934,1.679 C27.985,2.168 30.080,2.771 32.161,3.471 L31.314,6.042 C29.311,5.369 27.298,4.791 25.330,4.320 ZM13.076,2.706 L13.084,-0.012 C15.208,0.029 17.387,0.197 19.559,0.487 L19.234,3.180 C17.166,2.905 15.094,2.745 13.076,2.706 ZM0.759,1.270 C2.660,0.821 4.623,0.487 6.593,0.273 L6.939,2.975 C5.080,3.177 3.230,3.493 1.439,3.914 L0.759,1.270 Z"/>
					</svg>
				</figure>
		
				<div class="px-4">
					<!-- Image -->
					<img src="assets/images/element/step-3.svg" class="w-150px mb-3" alt="">
					<!-- Title -->
					<h5>Search your Destination</h5>
					<p class="mb-0">Total 30+ locations that we work with in Kenya and Tanzania</p>
				</div>	
			</div>
		
			<!-- Step item -->
			<div class="col-sm-6 col-md-4 position-relative text-center pt-0 pt-lg-5">
				<!-- SVG decoration -->
				<figure class="position-absolute top-100 start-100 translate-middle d-none d-lg-block mt-n9">
					<svg class="fill-secondary opacity-4" width="161px" height="79px">
						<path d="M158.107,15.463 L157.135,5.449 C156.369,6.347 155.573,7.235 154.736,8.101 L152.599,6.579 C153.544,5.600 154.425,4.592 155.272,3.574 L142.859,6.243 L142.411,3.796 L159.535,0.118 L160.985,15.028 L158.107,15.463 ZM131.614,21.310 C133.615,20.323 135.558,19.284 137.387,18.222 L138.833,20.282 C136.938,21.383 134.927,22.459 132.858,23.479 L131.614,21.310 ZM119.450,26.438 C121.550,25.684 123.624,24.876 125.616,24.039 L126.674,26.293 C124.626,27.153 122.496,27.983 120.340,28.758 L119.450,26.438 ZM107.366,32.761 L106.764,30.352 C107.500,30.158 108.237,29.959 108.974,29.755 C110.367,29.370 111.762,28.963 113.155,28.535 L113.894,30.904 C112.468,31.343 111.042,31.759 109.615,32.153 C108.867,32.359 108.116,32.563 107.366,32.761 ZM93.778,33.405 C95.956,32.941 98.128,32.461 100.295,31.955 L100.806,34.386 C98.616,34.898 96.421,35.383 94.222,35.850 L93.778,33.405 ZM80.657,36.053 L87.229,34.752 L87.633,37.206 L81.049,38.509 L80.657,36.053 ZM67.485,38.736 C69.678,38.262 71.876,37.807 74.074,37.362 L74.484,39.816 C72.299,40.256 70.119,40.708 67.942,41.181 L67.485,38.736 ZM54.349,41.900 C56.526,41.309 58.711,40.754 60.906,40.230 L61.433,42.656 C59.274,43.174 57.122,43.718 54.979,44.301 L54.349,41.900 ZM41.404,46.011 C43.490,45.232 45.654,44.489 47.835,43.801 L48.597,46.164 C46.472,46.834 44.363,47.557 42.331,48.315 L41.404,46.011 ZM30.259,53.613 L28.967,51.468 C29.611,51.137 30.259,50.813 30.912,50.495 C32.293,49.821 33.691,49.176 35.102,48.558 L36.207,50.792 C34.838,51.392 33.483,52.016 32.143,52.670 C31.511,52.978 30.883,53.292 30.259,53.613 ZM17.425,58.480 C19.198,57.202 21.090,55.953 23.052,54.765 L24.549,56.794 C22.662,57.937 20.844,59.138 19.142,60.364 L17.425,58.480 ZM7.428,67.231 C8.888,65.655 10.488,64.107 12.182,62.630 L14.128,64.332 C12.516,65.738 10.995,67.211 9.607,68.707 L7.428,67.231 ZM0.172,77.195 C1.089,75.523 2.140,73.865 3.293,72.267 L5.697,73.469 C4.610,74.977 3.620,76.539 2.755,78.114 L0.172,77.195 ZM149.871,12.613 C148.214,13.999 146.419,15.364 144.535,16.669 L142.867,14.750 C144.671,13.499 146.390,12.194 147.973,10.869 L149.871,12.613 Z"/>
						</svg>
				</figure>
		
				<div class="px-4">
					<!-- Image -->
					<img src="assets/images/element/step-2.svg" class="w-150px mb-3" alt="">

					<!-- Title -->
					<h5>Get a Detailed Travel Plan</h5>
					<p class="mb-0">We provide a customized itinerary for your travel.</p>
				</div>
			</div>
		
			<!-- Step item -->
			<div class="col-sm-6 col-md-4 text-center">
				<div class="px-4">
					<!-- Image -->
					<img src="assets/images/element/step-1.svg" class="w-150px mb-3" alt="">

					<!-- Title -->
					<h5>Easy to Book</h5>
					<p class="mb-0">Book your premium experience in just a few steps.<br> <a class="btn btn-link">Book with Us!</a></p>
				</div>	
			</div>
		</div>
	</div>
</section>
<!-- =======================
Steps END -->

<!-- =======================
Action box START -->
<section class="py-0 mb-4">
	<div class="container position-relative">
		<div class="bg-light rounded-3 position-relative p-4 p-sm-5">

			<!-- Svg decoration -->
			

			<div class="row align-items-center position-relative">
				<div class="col-lg-8">
					<!-- Title -->
					<div class="d-flex">
						<h3 class="">It's time to discover the world!</h3>
						<i class="bi bi-compass fs-4"></i>
					</div>
					<p class="mb-3 mb-lg-0">Do you think it's time you need to explore the beauty of East Africa? Book a trip with us today for a premium adventure holiday!</p>
				</div>
				<!-- Content and input -->
				<div class="col-lg-4 text-lg-end">
					<a href="#" class="btn btn-lg btn-dark mb-0">Book a Trip Today</a>
				</div>
			</div> <!-- Row END -->
		</div>
	</div>
</section>
<!-- =======================
Action box END -->
</main>
<!-- **************** MAIN CONTENT END **************** -->





<?php include "includes/footer.php";?>
<?php include "includes/scripts.php";?>

</body>


</html>