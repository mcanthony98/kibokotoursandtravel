<!-- =======================
Footer START -->
<footer class="bg-dark pt-5">
	<div class="container">
		<!-- Row START -->
		<div class="row g-4">

			<!-- Widget 1 START -->
			<div class="col-lg-3">
				<!-- logo -->
				<a hrefffr="index.php">
					<img class="h-40px" src="assets/images/logok.png" alt="logo">
				</a>
				<p class="mb-2"><a hrefffr="" class="text-muted text-primary-hover"><i class="bi bi-telephone me-2"></i> Call Us: +254 7123 123 123 </a> </p>
				<p class="mb-0"><a hrefffr="#" class="text-muted text-primary-hover"><i class="bi bi-envelope me-2"></i>Email Us: info@kibokotoursandtravel.com</a></p>
			</div>
			<!-- Widget 1 END -->

			<!-- Widget 2 START -->
			<div class="col-lg-8 ms-auto">
				<div class="row g-4">
					<!-- Link block -->
					<div class="col-6">
						<h5 class="text-white mb-2 mb-md-4">Where we Operate</h5>
						<ul class="nav flex-column text-primary-hover">
							<li class="nav-item"><a class="nav-link text-muted" hrefffr="country.php?country=1"><i class="bi bi-geo-alt-fill"></i> Kenya</a></li>
							<li class="nav-item"><a class="nav-link text-muted" hrefffr="country.php?country=2"><i class="bi bi-geo-alt-fill"></i> Tanzania</a></li>
							<li class="nav-item"><a class="nav-link text-muted" hrefffr="country.php?country=3"><i class="bi bi-geo-alt-fill"></i> Zanzibar</a></li>
						</ul>
					</div>

					<!-- Link block -->
					<div class="col-6">
						<h5 class="text-white mb-2 mb-md-4">Top Destinations</h5>
						<ul class="nav flex-column text-primary-hover">
							<li class="nav-item"><a class="nav-link text-muted" hrefffr="destination.php?destination=1">Maasai Mara</a></li>
							<li class="nav-item"><a class="nav-link text-muted" hrefffr="destination.php?destination=14">Serengeti National Park</a></li>
							<li class="nav-item"><a class="nav-link text-muted" hrefffr="destination.php?destination=4">Tsavo East National Park</a></li>
							<li class="nav-item"><a class="nav-link text-muted" hrefffr="destination.php?destination=9">Tsavo West National Park</a></li>
							<li class="nav-item"><a class="nav-link text-muted" hrefffr="country.php?country=3">Zanzibar</a></li>
						</ul>
					</div>

				</div>
			</div>
			<!-- Widget 2 END -->

		</div><!-- Row END -->

		<!-- Tops Links -->
		<div class="row mt-5">
			<h5 class="mb-2 text-white">Top Experiences</h5>
			<ul class="list-inline text-primary-hover lh-lg">
				<?php 
				$experienceres = $conn->query("SELECT * FROM experience");
				while($experiencerow = $experienceres->fetch_assoc()){
				?>
				<li class="list-inline-item"><a hrefffr="#" class="text-muted"><?php echo $experiencerow['experience_name'];?></a></li>
				<?php }?>
			</ul>
		</div>

		<!-- Payment and card -->
		<div class="row g-4 justify-content-between mt-0 mt-md-2">

			<!-- Payment card -->
			<div class="col-sm-7 col-md-6 col-lg-4">
				<h5 class="text-white mb-2">Payment & Security</h5>
				<ul class="list-inline mb-0 mt-3">
					<li class="list-inline-item"> <img src="assets/images/element/paypal.svg" class="h-30px" alt=""></li>
					<li class="list-inline-item"> <img src="assets/images/element/visa.svg" class="h-30px" alt=""></li>
					<li class="list-inline-item"> <img src="assets/images/element/mastercard.svg" class="h-30px" alt=""></li>
					<li class="list-inline-item"> <img src="assets/images/element/expresscard.svg" class="h-30px" alt=""></li>
				</ul>
			</div>

			<!-- Social media icon -->
			<div class="col-sm-5 text-sm-end">
				<h5 class="text-white mb-2">Follow us on</h5>
				<ul class="list-inline mb-0 mt-3">
					<li class="list-inline-item"> <a class="btn btn-sm px-2 bg-facebook mb-0" hrefffr="https://web.facebook.com/p/Snapshot-tours-and-safaris-100069692835734/?paipv=0&eav=Afbs4aG1WjYoHUTASuM4BuAJ93Py_aBzThQaolWIppzsXoNQRnJCXK3X_y75Fxz-ghE&_rdc=1&_rdr"><i class="fab fa-fw fa-facebook-f"></i></a> </li>
					<li class="list-inline-item"> <a class="btn btn-sm shadow px-2 bg-instagram mb-0" hrefffr="https://www.instagram.com/snapshot_tours_and_safaris/"><i class="fab fa-fw fa-instagram"></i></a> </li>
					<li class="list-inline-item"> <a class="btn btn-sm shadow px-2 bg-twitter mb-0" hrefffr="https://twitter.com/Snapshot_tours_"><i class="fab fa-fw fa-twitter"></i></a> </li>
					<li class="list-inline-item"> <a class="btn btn-sm shadow px-2 bg-linkedin mb-0" hrefffr="https://ke.linkedin.com/company/snapshot-tours-and-safaris"><i class="fab fa-fw fa-linkedin-in"></i></a> </li>
					<li class="list-inline-item"> <a class="btn btn-sm shadow px-2 bg-success mb-0 text-light" hrefffr="https://www.tripadvisor.com/Attraction_Review-g294207-d23898384-Reviews-Snapshot_Tours_and_Safaris-Nairobi.html">Trip Advisor</a> </li>
				</ul>	
			</div>
		</div>

		<!-- Divider -->
		<hr class="mt-4 mb-0">

		<!-- Bottom footer -->
		<div class="row">
			<div class="container">
				<div class="d-lg-flex justify-content-between align-items-center py-3 text-center text-lg-start">
					<!-- copyright text -->
					<div class="text-muted text-primary-hover"> Copyrights ©2024 Kiboko Tours and Travel. <!--Build by <a hrefffr="https://ganiamtech.com" class="text-muted fs-sm text-warning">Ganiam Tech</a>.--> </div>
					<!-- copyright links-->
					<div class="nav mt-2 mt-lg-0">
						<ul class="list-inline text-primary-hover mx-auto mb-0">
							<li class="list-inline-item me-0"><a class="nav-link py-1 text-muted" hrefffr="#">Privacy policy</a></li>
							<li class="list-inline-item me-0"><a class="nav-link py-1 text-muted" hrefffr="#">Terms and conditions</a></li>
							<li class="list-inline-item me-0"><a class="nav-link py-1 text-muted pe-0" hrefffr="#">Refund policy</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- =======================
Footer END -->