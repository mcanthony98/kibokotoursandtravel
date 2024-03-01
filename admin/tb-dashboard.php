<?php 
include "includes/includes.php";
include "includes/header.php";?>
</head>

<body>

<!-- **************** MAIN CONTENT START **************** -->
<main>
	
<?php include "includes/tb-sidebar.php";?>
	
	<!-- Page content START -->
	<div class="page-content">
	
    <?php include "includes/tb-navbar.php";?>
	
		<!-- Page main content START -->
		<div class="page-content-wrapper p-xxl-4">
	
			<!-- Title -->
			<div class="row">
				<div class="col-12 mb-4 mb-sm-5">
					<div class="d-sm-flex justify-content-between align-items-center">
						<h1 class="h3 mb-2 mb-sm-0">Dashboard</h1>
						<div class="d-grid"><a href="#" class="btn btn-primary-soft mb-0"><i class="bi bi-plus-lg fa-fw"></i> New Booking</a></div>				
					</div>
				</div>
			</div>

			<!-- Counter boxes START -->
			<div class="row g-4 mb-5">
				<!-- Counter item -->
				<div class="col-md-6 col-xxl-3">
					<div class="card card-body bg-warning bg-opacity-10 border border-warning border-opacity-25 p-4 h-100">
						<div class="d-flex justify-content-between align-items-center">
							<!-- Digit -->
							<div>
								<h4 class="mb-0">56</h4>
								<span class="h6 fw-light mb-0">Total Hotels</span>
							</div>
							<!-- Icon -->
							<div class="icon-lg rounded-circle bg-warning text-white mb-0"><i class="fa-solid fa-hotel fa-fw"></i></div>
						</div>
					</div>
				</div>

				<!-- Counter item -->
				<div class="col-md-6 col-xxl-3">
					<div class="card card-body bg-success bg-opacity-10 border border-success border-opacity-25 p-4 h-100">
						<div class="d-flex justify-content-between align-items-center">
							<!-- Digit -->
							<div>
								<h4 class="mb-0">$836,789</h4>
								<span class="h6 fw-light mb-0">Total Incomes</span>
							</div>
							<!-- Icon -->
							<div class="icon-lg rounded-circle bg-success text-white mb-0"><i class="fa-solid fa-hand-holding-dollar fa-fw"></i></div>
						</div>
					</div>
				</div>

				<!-- Counter item -->
				<div class="col-md-6 col-xxl-3">
					<div class="card card-body bg-primary bg-opacity-10 border border-primary border-opacity-25 p-4 h-100">
						<div class="d-flex justify-content-between align-items-center">
							<!-- Digit -->
							<div>
								<h4 class="mb-0">245</h4>
								<span class="h6 fw-light mb-0">Total Rooms</span>
							</div>
							<!-- Icon -->
							<div class="icon-lg rounded-circle bg-primary text-white mb-0"><i class="fa-solid fa-bed fa-fw"></i></div>
						</div>
					</div>
				</div>

				<!-- Counter item -->
				<div class="col-md-6 col-xxl-3">
					<div class="card card-body bg-info bg-opacity-10 border border-info border-opacity-25 p-4 h-100">
						<div class="d-flex justify-content-between align-items-center">
							<!-- Digit -->
							<div>
								<h4 class="mb-0">147</h4>
								<span class="h6 fw-light mb-0">Booked Room</span>
							</div>
							<!-- Icon -->
							<div class="icon-lg rounded-circle bg-info text-white mb-0"><i class="fa-solid fa-building-circle-check fa-fw"></i></div>
						</div>
					</div>
				</div>
			</div>
			<!-- Counter boxes END -->

			<!-- Hotel grid START -->
			<div class="row g-4 mb-5">
				<!-- Title -->
				<div class="col-12">
					<div class="d-flex justify-content-between">
						<h4 class="mb-0">Popular Hotels</h4>
						<a href="#" class="btn btn-primary-soft mb-0">View All</a>
					</div>	
				</div>

				<!-- Hotel item -->
				<div class="col-lg-6">
					<div class="card shadow p-3">
						<div class="row g-4">
							<!-- Card img -->
							<div class="col-md-3">
								<img src="../assets/images/category/hotel/4by3/10.jpg" class="rounded-2" alt="Card image">
							</div>

							<!-- Card body -->
							<div class="col-md-9">
								<div class="card-body position-relative d-flex flex-column p-0 h-100">

									<!-- Buttons -->
									<div class="list-inline-item dropdown position-absolute top-0 end-0">
										<!-- Share button -->
										<a href="#" class="btn btn-sm btn-round btn-light" role="button" id="dropdownAction1" data-bs-toggle="dropdown" aria-expanded="false">
											<i class="bi bi-three-dots-vertical"></i>
										</a>
										<!-- dropdown button -->
										<ul class="dropdown-menu dropdown-menu-end min-w-auto shadow" aria-labelledby="dropdownAction1">
											<li><a class="dropdown-item small" href="#"><i class="bi bi-info-circle me-2"></i>Report</a></li>
											<li><a class="dropdown-item small" href="#"><i class="bi bi-slash-circle me-2"></i>Disable</a></li>
										</ul>
									</div>

									<!-- Title -->
									<h5 class="card-title mb-0 me-5"><a href="hotel-detail.html">Pride moon Village Resort & Spa</a></h5>
									<small><i class="bi bi-geo-alt me-2"></i>31J W Spark Street, California - 24578</small>

									<!-- Price and Button -->
									<div class="d-sm-flex justify-content-sm-between align-items-center mt-3 mt-md-auto">
										<!-- Price -->
										<div class="d-flex align-items-center">
											<h5 class="fw-bold mb-0 me-1">$1586</h5>
											<span class="mb-0 me-2">/day</span>
										</div>
										<!-- Button -->
										<div class="hstack gap-2 mt-3 mt-sm-0">
											<a href="#" class="btn btn-sm btn-primary-soft px-2 mb-0"><i class="bi bi-pencil-square fa-fw"></i></a>    
											<a href="#" class="btn btn-sm btn-danger-soft px-2 mb-0"><i class="bi bi-slash-circle fa-fw"></i></a>    
										</div>                 
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Hotel item -->
				<div class="col-lg-6">
					<div class="card shadow p-3">
						<div class="row g-4">
							<!-- Card img -->
							<div class="col-md-3">
								<img src="../assets/images/category/hotel/4by3/08.jpg" class="rounded-2" alt="Card image">
							</div>

							<!-- Card body -->
							<div class="col-md-9">
								<div class="card-body position-relative d-flex flex-column p-0 h-100">

									<!-- Buttons -->
									<div class="list-inline-item dropdown position-absolute top-0 end-0">
										<!-- Share button -->
										<a href="#" class="btn btn-sm btn-round btn-light" role="button" id="dropdownAction2" data-bs-toggle="dropdown" aria-expanded="false">
											<i class="bi bi-three-dots-vertical"></i>
										</a>
										<!-- dropdown button -->
										<ul class="dropdown-menu dropdown-menu-end min-w-auto shadow" aria-labelledby="dropdownAction2">
											<li><a class="dropdown-item small" href="#"><i class="bi bi-info-circle me-2"></i>Report</a></li>
											<li><a class="dropdown-item small" href="#"><i class="bi bi-slash-circle me-2"></i>Disable</a></li>
										</ul>
									</div>

									<!-- Title -->
									<h5 class="card-title mb-0 me-5"><a href="hotel-detail.html">Courtyard by Marriott New York</a></h5>
									<small><i class="bi bi-geo-alt me-2"></i>258 W jimmy Street, New york - 24578</small>

									<!-- Price and Button -->
									<div class="d-sm-flex justify-content-sm-between align-items-center mt-3 mt-md-auto">
										<!-- Price -->
										<div class="d-flex align-items-center">
											<h5 class="fw-bold mb-0 me-1">$1025</h5>
											<span class="mb-0 me-2">/day</span>
										</div>
										<!-- Button -->
										<div class="hstack gap-2 mt-3 mt-sm-0">
											<a href="#" class="btn btn-sm btn-primary-soft px-2 mb-0"><i class="bi bi-pencil-square fa-fw"></i></a>    
											<a href="#" class="btn btn-sm btn-danger-soft px-2 mb-0"><i class="bi bi-slash-circle fa-fw"></i></a>    
										</div>                  
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Hotel item -->
				<div class="col-lg-6">
					<div class="card shadow p-3">
						<div class="row g-4">
							<!-- Card img -->
							<div class="col-md-3">
								<img src="../assets/images/category/hotel/4by3/09.jpg" class="rounded-2" alt="Card image">
							</div>

							<!-- Card body -->
							<div class="col-md-9">
								<div class="card-body position-relative d-flex flex-column p-0 h-100">

									<!-- Buttons -->
									<div class="list-inline-item dropdown position-absolute top-0 end-0">
										<!-- Share button -->
										<a href="#" class="btn btn-sm btn-round btn-light" role="button" id="dropdownAction3" data-bs-toggle="dropdown" aria-expanded="false">
											<i class="bi bi-three-dots-vertical"></i>
										</a>
										<!-- dropdown button -->
										<ul class="dropdown-menu dropdown-menu-end min-w-auto shadow" aria-labelledby="dropdownAction3">
											<li><a class="dropdown-item small" href="#"><i class="bi bi-info-circle me-2"></i>Report</a></li>
											<li><a class="dropdown-item small" href="#"><i class="bi bi-slash-circle me-2"></i>Disable</a></li>
										</ul>
									</div>

									<!-- Title -->
									<h5 class="card-title mb-0 me-5"><a href="hotel-detail.html">Park Plaza Lodge Hotel</a></h5>
									<small><i class="bi bi-geo-alt me-2"></i>31J W Spark Street, California - 24578</small>

									<!-- Price and Button -->
									<div class="d-sm-flex justify-content-sm-between align-items-center mt-3 mt-md-auto">
										<!-- Price -->
										<div class="d-flex align-items-center">
											<h5 class="fw-bold mb-0 me-1">$958</h5>
											<span class="mb-0 me-2">/day</span>
										</div>
										<!-- Button -->
										<div class="hstack gap-2 mt-3 mt-sm-0">
											<a href="#" class="btn btn-sm btn-primary-soft px-2 mb-0"><i class="bi bi-pencil-square fa-fw"></i></a>    
											<a href="#" class="btn btn-sm btn-danger-soft px-2 mb-0"><i class="bi bi-slash-circle fa-fw"></i></a>    
										</div>                 
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Hotel item -->
				<div class="col-lg-6">
					<div class="card shadow p-3">
						<div class="row g-4">
							<!-- Card img -->
							<div class="col-md-3">
								<img src="../assets/images/category/hotel/4by3/07.jpg" class="rounded-2" alt="Card image">
							</div>

							<!-- Card body -->
							<div class="col-md-9">
								<div class="card-body position-relative d-flex flex-column p-0 h-100">

									<!-- Buttons -->
									<div class="list-inline-item dropdown position-absolute top-0 end-0">
										<!-- Share button -->
										<a href="#" class="btn btn-sm btn-round btn-light" role="button" id="dropdownAction4" data-bs-toggle="dropdown" aria-expanded="false">
											<i class="bi bi-three-dots-vertical"></i>
										</a>
										<!-- dropdown button -->
										<ul class="dropdown-menu dropdown-menu-end min-w-auto shadow" aria-labelledby="dropdownAction4">
											<li><a class="dropdown-item small" href="#"><i class="bi bi-info-circle me-2"></i>Report</a></li>
											<li><a class="dropdown-item small" href="#"><i class="bi bi-slash-circle me-2"></i>Disable</a></li>
										</ul>
									</div>

									<!-- Title -->
									<h5 class="card-title mb-0 me-5"><a href="hotel-detail.html">Royal Beach Resort</a></h5>
									<small><i class="bi bi-geo-alt me-2"></i>589 J Wall Street, London - 24578</small>

									<!-- Price and Button -->
									<div class="d-sm-flex justify-content-sm-between align-items-center mt-3 mt-md-auto">
										<!-- Price -->
										<div class="d-flex align-items-center">
											<h5 class="fw-bold mb-0 me-1">$1005</h5>
											<span class="mb-0 me-2">/day</span>
										</div>
										<!-- Button -->
										<div class="hstack gap-2 mt-3 mt-sm-0">
											<a href="#" class="btn btn-sm btn-primary-soft px-2 mb-0"><i class="bi bi-pencil-square fa-fw"></i></a>    
											<a href="#" class="btn btn-sm btn-danger-soft px-2 mb-0"><i class="bi bi-slash-circle fa-fw"></i></a>    
										</div>                  
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Hotel grid END -->
			
			<!-- Widget START -->
			<div class="row g-4">
				<!-- Booking Chart START -->
				<div class="col-xxl-8">
					<!-- Chart START -->
					<div class="card shadow h-100">
						<!-- Card header -->
						<div class="card-header border-bottom">
							<h5 class="card-header-title">Guest Activity</h5>
						</div>

						<!-- Card body -->
						<div class="card-body">
							<!-- Content -->
							<div class="d-flex gap-4 mb-3">
								<h6><span class="fw-light"><i class="bi bi-square-fill text-primary"></i> Check-in:</span> 475 Guests</h6>
								<h6><span class="fw-light"><i class="bi bi-square-fill text-info"></i> Check-out:</span> 157 Guests</h6>
							</div>
							<!-- Apex chart -->
							<div id="ChartGuesttraffic" class="mt-2"></div>
						</div>
					</div>
					<!-- Chart END -->
				</div>
				<!-- Booking Chart END -->

				<!-- Booking graph START -->
				<div class="col-lg-6 col-xxl-4">
					<div class="card shadow h-100">
						<!-- Card header -->
						<div class="card-header border-bottom">
							<h5 class="card-header-title">Room Availability</h5>
						</div>

						<!-- Card body START -->
						<div class="card-body p-3">
							<!-- Chart -->
							<div class="col-sm-6 mx-auto">
								<div class="d-flex justify-content-center" id="ChartTrafficRooms"></div>
							</div>

							<!-- Content -->
							<ul class="list-group list-group-borderless mb-0">
								<li class="list-group-item d-flex justify-content-between">
									<span class="h6 fw-light mb-0"><i class="text-success fas fa-circle me-2"></i> Available</span>
									<span class="h6 fw-light mb-0">73 Rooms</span>
								</li>
								<li class="list-group-item d-flex justify-content-between">
									<span class="h6 fw-light mb-0"><i class="text-danger fas fa-circle me-2"></i> Sold Out</span>
									<span class="h6 fw-light mb-0">245 Rooms</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Booking graph END -->

				<!-- Rooms START -->
				<div class="col-lg-6 col-xxl-4">
					<div class="card shadow h-100">
						<!-- Card header -->
						<div class="card-header border-bottom d-flex justify-content-between align-items-center">
							<h5 class="card-header-title">Room Notifications</h5>
							<a href="#" class="btn btn-link p-0 mb-0">View all</a>
						</div>

						<!-- Card body START -->
						<div class="card-body">
							<!-- Rooms item START -->
							<div class="d-flex justify-content-between align-items-center">
								<!-- Image and info -->
								<div class="d-sm-flex align-items-center mb-1 mb-sm-0">
									<!-- Avatar -->
									<div class="flex-shrink-0">
										<img src="../assets/images/category/hotel/4by3/04.jpg" class="rounded h-60px" alt="">
									</div>
									<!-- Info -->
									<div class="ms-sm-3 mt-2 mt-sm-0">
										<h6 class="mb-1">Deluxe Pool View with Breakfast</h6>
										<ul class="nav nav-divider small">
											<li class="nav-item">18 Nov to 22 Nov</li>
											<li class="nav-item"><span class="text-success">Booked</span></li>
										</ul>
									</div>
								</div>
								<!-- Button -->
								<a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0 ms-3">View</a>
							</div>
							<!-- Rooms item END -->

							<hr><!-- Divider -->

							<!-- Rooms item START -->
							<div class="d-flex justify-content-between align-items-center">
								<!-- Image and info -->
								<div class="d-sm-flex align-items-center mb-1 mb-sm-0">
									<!-- Avatar -->
									<div class="flex-shrink-0">
										<img src="../assets/images/category/hotel/4by3/05.jpg" class="rounded h-60px" alt="">
									</div>
									<!-- Info -->
									<div class="ms-sm-3 mt-2 mt-sm-0">
										<h6 class="mb-1">Deluxe Pool View</h6>
										<ul class="nav nav-divider small">
											<li class="nav-item">16 Nov</li>
											<li class="nav-item"><span class="text-danger">Booking cancel</span></li>
										</ul>
									</div>
								</div>
								<!-- Button -->
								<a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0 ms-3">View</a>
							</div>
							<!-- Rooms item END -->

							<hr><!-- Divider -->

							<!-- Rooms item START -->
							<div class="d-flex justify-content-between align-items-center">
								<!-- Image and info -->
								<div class="d-sm-flex align-items-center mb-1 mb-sm-0">
									<!-- Avatar -->
									<div class="flex-shrink-0">
										<img src="../assets/images/category/hotel/4by3/06.jpg" class="rounded h-60px" alt="">
									</div>
									<!-- Info -->
									<div class="ms-sm-3 mt-2 mt-sm-0">
										<h6 class="mb-1">Luxury Room with Balcony</h6>
										<ul class="nav nav-divider small">
											<li class="nav-item">15 Nov to 20 Nov</li>
											<li class="nav-item"><span class="text-success">Booked</span></li>
										</ul>
									</div>
								</div>
								<!-- Button -->
								<a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0 ms-3">View</a>
							</div>
							<!-- Rooms item END -->

							<hr><!-- Divider -->

							<!-- Rooms item START -->
							<div class="d-flex justify-content-between align-items-center">
								<!-- Image and info -->
								<div class="d-sm-flex align-items-center mb-1 mb-sm-0">
									<!-- Avatar -->
									<div class="flex-shrink-0">
										<img src="../assets/images/category/hotel/4by3/08.jpg" class="rounded h-60px" alt="">
									</div>
									<!-- Info -->
									<div class="ms-sm-3 mt-2 mt-sm-0">
										<h6 class="mb-1">Premium Room With Balcony</h6>
										<ul class="nav nav-divider small">
											<li class="nav-item">14 Nov to 16 Nov</li>
											<li class="nav-item"><span class="text-success">Booked</span></li>
										</ul>
									</div>
								</div>
								<!-- Button -->
								<a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0 ms-3">View</a>
							</div>
							<!-- Rooms item END -->

							<hr><!-- Divider -->

							<!-- Rooms item START -->
							<div class="d-flex justify-content-between align-items-center">
								<!-- Image and info -->
								<div class="d-sm-flex align-items-center mb-1 mb-sm-0">
									<!-- Avatar -->
									<div class="flex-shrink-0">
										<img src="../assets/images/category/hotel/4by3/02.jpg" class="rounded h-60px" alt="">
									</div>
									<!-- Info -->
									<div class="ms-sm-3 mt-2 mt-sm-0">
										<h6 class="mb-1">Rock Family Suite</h6>
										<ul class="nav nav-divider small">
											<li class="nav-item">13 Nov</li>
											<li class="nav-item"><span class="text-danger">Booking cancel</span></li>
										</ul>
									</div>
								</div>
								<!-- Button -->
								<a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0 ms-3">View</a>
							</div>
							<!-- Rooms item END -->
						</div>
						<!-- Card body END -->
					</div>
				</div>
				<!-- Rooms END -->

				<!-- Upcoming Arrival START -->
				<div class="col-lg-6 col-xxl-4">
					<div class="card shadow h-100">
						<!-- Card header -->
						<div class="card-header border-bottom d-flex justify-content-between align-items-center p-3">
							<h5 class="card-header-title">Upcoming Arrivals</h5>
							<a href="#" class="btn btn-link p-0 mb-0">View all</a>
						</div>

						<!-- Card body START -->
						<div class="card-body p-3">

							<!-- Arrival item -->
							<div class="d-flex justify-content-between align-items-center">
								<!-- Avatar and info -->
								<div class="d-sm-flex align-items-center mb-1 mb-sm-0">
									<!-- Avatar -->
									<div class="avatar avatar-md flex-shrink-0">
										<img class="avatar-img rounded-circle" src="../assets/images/avatar/09.jpg" alt="avatar">
									</div>
									<!-- Info -->
									<div class="ms-sm-2 mt-2 mt-sm-0">
										<h6 class="mb-1">Lori Stevens</h6>
										<ul class="nav nav-divider small">
											<li class="nav-item">Room 25A</li>
											<li class="nav-item">24Nov - 28Nov</li>
										</ul>
									</div>
								</div>
								<!-- Button -->
								<a href="#" class="btn btn-sm btn-light mb-0 ms-3 px-2"><i class="fa-solid fa-chevron-right fa-fw"></i></a>
							</div>

							<hr><!-- Divider -->

							<!-- Arrival item -->
							<div class="d-flex justify-content-between align-items-center">
								<!-- Avatar and info -->
								<div class="d-sm-flex align-items-center mb-1 mb-sm-0">
									<!-- Avatar -->
									<div class="avatar avatar-md flex-shrink-0">
										<img class="avatar-img rounded-circle" src="../assets/images/avatar/03.jpg" alt="avatar">
									</div>
									<!-- Info -->
									<div class="ms-sm-2 mt-2 mt-sm-0">
										<h6 class="mb-1">Dennis Barrett</h6>
										<ul class="nav nav-divider small">
											<li class="nav-item">Room 12B</li>
											<li class="nav-item">21Nov - 23Nov</li>
										</ul>
									</div>
								</div>
								<!-- Button -->
								<a href="#" class="btn btn-sm btn-light mb-0 ms-3 px-2"><i class="fa-solid fa-chevron-right fa-fw"></i></a>
							</div>

							<hr><!-- Divider -->

							<!-- Arrival item -->
							<div class="d-flex justify-content-between align-items-center">
								<!-- Avatar and info -->
								<div class="d-sm-flex align-items-center mb-1 mb-sm-0">
									<!-- Avatar -->
									<div class="avatar avatar-md flex-shrink-0">
										<img class="avatar-img rounded-circle" src="../assets/images/avatar/01.jpg" alt="avatar">
									</div>
									<!-- Info -->
									<div class="ms-sm-2 mt-2 mt-sm-0">
										<h6 class="mb-1">Jacqueline Miller</h6>
										<ul class="nav nav-divider small">
											<li class="nav-item">Room 11A</li>
											<li class="nav-item">19Nov - 21Nov</li>
										</ul>
									</div>
								</div>
								<!-- Button -->
								<a href="#" class="btn btn-sm btn-light mb-0 ms-3 px-2"><i class="fa-solid fa-chevron-right fa-fw"></i></a>
							</div>

							<hr><!-- Divider -->

							<!-- Arrival item -->
							<div class="d-flex justify-content-between align-items-center">
								<!-- Avatar and info -->
								<div class="d-sm-flex align-items-center mb-1 mb-sm-0">
									<!-- Avatar -->
									<div class="avatar avatar-md flex-shrink-0">
										<img class="avatar-img rounded-circle" src="../assets/images/avatar/04.jpg" alt="avatar">
									</div>
									<!-- Info -->
									<div class="ms-sm-2 mt-2 mt-sm-0">
										<h6 class="mb-1">Billy Vasquez</h6>
										<ul class="nav nav-divider small">
											<li class="nav-item">Room 05A</li>
											<li class="nav-item">14Nov - 18Nov</li>
										</ul>
									</div>
								</div>
								<!-- Button -->
								<a href="#" class="btn btn-sm btn-light mb-0 ms-3 px-2"><i class="fa-solid fa-chevron-right fa-fw"></i></a>
							</div>

							<hr><!-- Divider -->

							<!-- Arrival item -->
							<div class="d-flex justify-content-between align-items-center">
								<!-- Avatar and info -->
								<div class="d-sm-flex align-items-center mb-1 mb-sm-0">
									<!-- Avatar -->
									<div class="avatar avatar-md flex-shrink-0">
										<img class="avatar-img rounded-circle" src="../assets/images/avatar/05.jpg" alt="avatar">
									</div>
									<!-- Info -->
									<div class="ms-sm-2 mt-2 mt-sm-0">
										<h6 class="mb-1">Amanda Reed</h6>
										<ul class="nav nav-divider small">
											<li class="nav-item">Room 9</li>
											<li class="nav-item">11Nov - 12Nov</li>
										</ul>
									</div>
								</div>
								<!-- Button -->
								<a href="#" class="btn btn-sm btn-light mb-0 ms-3 px-2"><i class="fa-solid fa-chevron-right fa-fw"></i></a>
							</div>

							<hr><!-- Divider -->

							<!-- Arrival item -->
							<div class="d-flex justify-content-between align-items-center">
								<!-- Avatar and info -->
								<div class="d-sm-flex align-items-center mb-1 mb-sm-0">
									<!-- Avatar -->
									<div class="avatar avatar-md flex-shrink-0">
										<img class="avatar-img rounded-circle" src="../assets/images/avatar/08.jpg" alt="avatar">
									</div>
									<!-- Info -->
									<div class="ms-sm-2 mt-2 mt-sm-0">
										<h6 class="mb-1">Dennis Barrett</h6>
										<ul class="nav nav-divider small">
											<li class="nav-item">Room 10</li>
											<li class="nav-item">11Nov - 12Nov</li>
										</ul>
									</div>
								</div>
								<!-- Button -->
								<a href="#" class="btn btn-sm btn-light mb-0 ms-3 px-2"><i class="fa-solid fa-chevron-right fa-fw"></i></a>
							</div>
						</div>
						<!-- Card body END -->
					</div>
				</div>
				<!-- Upcoming Arrival END -->

				<!-- Reviews START -->
				<div class="col-lg-6 col-xxl-4">
					<div class="card shadow h-100">
						<!-- Card header -->
						<div class="card-header border-bottom d-flex justify-content-between align-items-center p-3">
							<h5 class="card-header-title">Reviews</h5>
							<a href="#" class="btn btn-link p-0 mb-0">View all</a>
						</div>

						<!-- Card body START -->
						<div class="card-body p-3">

							<!-- Rooms item START -->
							<div class="d-flex justify-content-between align-items-center">
								<!-- Image and info -->
								<div class="d-sm-flex align-items-center mb-1 mb-sm-0">
									<!-- Avatar -->
									<div class="flex-shrink-0">
										<img src="../assets/images/category/hotel/4by3/08.jpg" class="rounded h-60px" alt="">
									</div>
									<!-- Info -->
									<div class="ms-sm-3 mt-2 mt-sm-0">
										<h6 class="mb-1">Deluxe Pool View with Breakfast</h6>
										<ul class="list-inline smaller mb-0">
											<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="far fa-star text-warning"></i></li>
											<li class="list-inline-item me-0">(35 reviews)</li>
										</ul>
									</div>
								</div>
								<!-- Button -->
								<a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0 ms-3">View</a>
							</div>
							<!-- Rooms item END -->

							<hr><!-- Divider -->

							<!-- Rooms item START -->
							<div class="d-flex justify-content-between align-items-center">
								<!-- Image and info -->
								<div class="d-sm-flex align-items-center mb-1 mb-sm-0">
									<!-- Avatar -->
									<div class="flex-shrink-0">
										<img src="../assets/images/category/hotel/4by3/09.jpg" class="rounded h-60px" alt="">
									</div>
									<!-- Info -->
									<div class="ms-sm-3 mt-2 mt-sm-0">
										<h6 class="mb-1">Deluxe Pool View</h6>
										<ul class="list-inline smaller mb-0">
											<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="far fa-star text-warning"></i></li>
											<li class="list-inline-item me-0">(25 reviews)</li>
										</ul>
									</div>
								</div>
								<!-- Button -->
								<a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0 ms-3">View</a>
							</div>
							<!-- Rooms item END -->

							<hr><!-- Divider -->

							<!-- Rooms item START -->
							<div class="d-flex justify-content-between align-items-center">
								<!-- Image and info -->
								<div class="d-sm-flex align-items-center mb-1 mb-sm-0">
									<!-- Avatar -->
									<div class="flex-shrink-0">
										<img src="../assets/images/category/hotel/4by3/01.jpg" class="rounded h-60px" alt="">
									</div>
									<!-- Info -->
									<div class="ms-sm-3 mt-2 mt-sm-0">
										<h6 class="mb-1">Luxury Room with Balcony</h6>
										<ul class="list-inline smaller mb-0">
											<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="far fa-star text-warning"></i></li>
											<li class="list-inline-item me-0">(18 reviews)</li>
										</ul>
									</div>
								</div>
								<!-- Button -->
								<a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0 ms-3">View</a>
							</div>
							<!-- Rooms item END -->

							<hr><!-- Divider -->

							<!-- Rooms item START -->
							<div class="d-flex justify-content-between align-items-center">
								<!-- Image and info -->
								<div class="d-sm-flex align-items-center mb-1 mb-sm-0">
									<!-- Avatar -->
									<div class="flex-shrink-0">
										<img src="../assets/images/category/hotel/4by3/05.jpg" class="rounded h-60px" alt="">
									</div>
									<!-- Info -->
									<div class="ms-sm-3 mt-2 mt-sm-0">
										<h6 class="mb-1">Premium Room With Balcony</h6>
										<ul class="list-inline smaller mb-0">
											<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="far fa-star-half-stroke text-warning"></i></li>
											<li class="list-inline-item me-0">(08 reviews)</li>
										</ul>
									</div>
								</div>
								<!-- Button -->
								<a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0 ms-3">View</a>
							</div>
							<!-- Rooms item END -->

							<hr><!-- Divider -->

							<!-- Rooms item START -->
							<div class="d-flex justify-content-between align-items-center">
								<!-- Image and info -->
								<div class="d-sm-flex align-items-center mb-1 mb-sm-0">
									<!-- Avatar -->
									<div class="flex-shrink-0">
										<img src="../assets/images/category/hotel/4by3/02.jpg" class="rounded h-60px" alt="">
									</div>
									<!-- Info -->
									<div class="ms-sm-3 mt-2 mt-sm-0">
										<h6 class="mb-1">Rock Family Suite</h6>
										<ul class="list-inline smaller mb-0">
											<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="far fa-star-half-stroke text-warning"></i></li>
											<li class="list-inline-item me-0">(11 reviews)</li>
										</ul>
									</div>
								</div>
								<!-- Button -->
								<a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0 ms-3">View</a>
							</div>
							<!-- Rooms item END -->
							
						</div>
						<!-- Card body END -->
					</div>
				</div>
				<!-- Reviews END -->
			</div>	
			<!-- Widget END -->
	
		</div>
		<!-- Page main content END -->
	</div>
	<!-- Page content END -->
	
	</main>
<!-- **************** MAIN CONTENT END **************** -->

<?php include "includes/scripts.php";?>

</body>


</html>