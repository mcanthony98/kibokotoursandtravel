<!-- Sidebar START -->
<nav class="navbar sidebar navbar-expand-xl navbar-light">
		<!-- Navbar brand for xl START -->
		<div class="d-flex align-items-center">
			<a class="navbar-brand m-0" href="tb-dashboard.php">
				<img class="light-mode-item navbar-brand-item" src="../assets/images/logo.png" alt="logo">
				<img class="dark-mode-item navbar-brand-item" src="../assets/images/logo.png" alt="logo">
			</a>
			<span class="h5 text-secondary pt-4">Team Building</span>
		</div>
		<!-- Navbar brand for xl END -->
		
		<div class="offcanvas offcanvas-start flex-row custom-scrollbar h-100" data-bs-backdrop="true" tabindex="-1" id="offcanvasSidebar">
			<div class="offcanvas-body sidebar-content d-flex flex-column pt-4">
	

				
				<!-- Sidebar menu START -->
				<ul class="navbar-nav flex-column" id="navbar-sidebar">
					<!-- Menu item 
					<li class="nav-item"><a href="dashboard.php" class="nav-link active">Dashboard</a></li>-->

					<!-- Title -->
					<li class="nav-item ms-2 my-2">Website Manager</li>


					<!-- Menu item -->
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="collapse" href="#collapsebooking" role="button" aria-expanded="false" aria-controls="collapsebooking">
						Venues
						</a>
						<!-- Submenu -->
						<ul class="nav collapse flex-column" id="collapsebooking" data-bs-parent="#navbar-sidebar">
							<li class="nav-item"> <a class="nav-link" href="tb-venues.php">View Venues</a></li>
							<li class="nav-item"> <a class="nav-link" href="tb-add-venue.php">Add Venue</a></li>
						</ul>
					</li>


					
	
				</ul>
				<!-- Sidebar menu end -->
	
				<!-- Sidebar footer START -->
				<div class="d-flex align-items-center justify-content-between text-primary-hover mt-auto p-3">
					<a class="h6 fw-light mb-0 text-body" href="sign-in.html" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Sign out">
						<i class="fa-solid fa-arrow-right-from-bracket"></i> Log out
					</a>
					<a class="h6 mb-0 text-body" href="admin-settings.html" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Settings">
						<i class="bi bi-gear-fill"></i>
					</a>
				</div>
				<!-- Sidebar footer END -->
				
			</div>
		</div>
	</nav>
	<!-- Sidebar END -->