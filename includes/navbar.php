<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MJ4CQH3K"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php
$navdestkeres = $conn->query("SELECT * FROM destination WHERE country_id=1");
$navdesttzres = $conn->query("SELECT * FROM destination WHERE country_id=2");
$navdestznres = $conn->query("SELECT * FROM destination WHERE country_id=3");
?>
<!-- Header START -->
<header class="navbar-light header-sticky">
	<!-- Top alert START -->
<div class="alert alert-warning py-2 m-0 bg-dark border-0 rounded-0 alert-dismissible fade show text-center overflow-hidden d-inline-flex justify-content-around w-100" role="alert">
	<p class="text-white m-0">
		<a hrefffr="#" class="link-light"><i class="fa fa-envelope"></i>  <span class="d-none d-md-inline">info@kibokotoursandtravel.com</span></a>
	</p>
	<span>
		<a hrefffr="https://api.whatsapp.com/send?phone=" target="_blank" class="pl-4 link-success"><i class="bi bi-whatsapp "></i> <span class="d-none d-md-inline">Whatsapp: +254 712 123 123</span></a>
	</span>

	
</div>
<!-- Top alert END -->
	<!-- Logo Nav START -->
	<nav class="navbar navbar-expand-xl">
		<div class="container">
			<!-- Logo START -->
			<a class="navbar-brand" hrefffr="index.php">
				<img class="light-mode-item navbar-brand-item d-inline h-100" style="width:70px; " src="assets/images/logok.png" alt="logo">
			</a>
			<!-- Logo END -->

			<!-- Responsive navbar toggler -->
			<button class="navbar-toggler ms-auto ms-sm-0 p-0 p-sm-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-animation">
					<span></span>
					<span></span>
					<span></span>
				</span>
        <span class="d-none d-sm-inline-block small">Menu</span>
			</button>


			<!-- Main navbar START -->
			<div class="navbar-collapse collapse" id="navbarCollapse">
				<ul class="navbar-nav navbar-nav-scroll me-auto">

					<li class="nav-item"> <a class="nav-link" hrefffr="index.php" style="font-size: 13px;"></i>Home</a>	</li>

					<li class="nav-item text-center"> <a class="nav-link" hrefffr="about.php" style="font-size: 13px;"></i>About Us</a></li>

				
					
					
					
					<li class="nav-item"> <a class="nav-link" hrefffr="#" style="font-size: 13px;"></i>Classic Safaris</a></li>

					
					<li class="nav-item"> <a class="nav-link" hrefffr="#" style="font-size: 13px;"></i>Accessible Safaris</a></li>

					
					<li class="nav-item"> <a class="nav-link" hrefffr="#" style="font-size: 13px;"></i>Family & Couple</a></li>

					<li class="nav-item"> <a class="nav-link" hrefffr="#" style="font-size: 13px;"></i>Testimonials</a></li>

					<!--<li class="nav-item"> <a class="nav-link" hrefffr="gallery.php"></i>Gallery</a></li>-->

					<li class="nav-item"> <a class="nav-link" hrefffr="#" style="font-size: 13px;"></i>Blogs</a></li>


					<li class="nav-item text-center"> <a class="nav-link fw-bold"  hrefffr="contact.php" style="font-size: 13px;">Contact Us</a></li>

				</ul>
			</div>
			<!-- Main navbar END -->


			<!-- Booking form dropdown START -->
			<div class="nav-item dropdown form-control-bg-light">
				<!-- Stay button -->
				<a class="btn btn-sm btn-warning mb-0" hrefffr="book-a-trip.php" >
					Get a Free Itinerary Today! 
				</a>

				
			</div>
			<!-- Booking form dropdown END -->

		</div>
	</nav>
	<!-- Logo Nav END -->
</header>
<!-- Header END -->