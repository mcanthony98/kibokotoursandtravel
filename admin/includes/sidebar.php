<!-- Sidebar START -->
<nav class="navbar sidebar navbar-expand-xl navbar-light">
		<!-- Navbar brand for xl START -->
		<div class="d-flex align-items-center border-bottom">
			<a class="navbar-brand m-0" href="dashboard.php">
				<img class="light-mode-item navbar-brand-item" src="../assets/images/kiboko-logo.png" style="width:60px;height:60px;" alt="logo">
				<img class="dark-mode-item navbar-brand-item" src="../assets/images/kiboko-logo.png" style="width:60px;height:60px;" alt="logo">
			</a>
			<span class="h5 text-secondary pt-3">Admin Panel</span>
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
					<li class="nav-item"> <a class="nav-link" href="countries.php">Countries</a></li>

					<!-- Menu item -->
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="collapse" href="#collapsebooking" role="button" aria-expanded="false" aria-controls="collapsebooking">
						Categories
						</a>
						<!-- Submenu -->
						<ul class="nav collapse flex-column" id="collapsebooking" data-bs-parent="#navbar-sidebar">
							<li class="nav-item"> <a class="nav-link" href="categories.php">View Categories</a></li>
							<li class="nav-item"> <a class="nav-link" href="add-category.php">Add Category</a></li>
						</ul>
					</li>


					<!-- Menu item -->
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="collapse" href="#experiences" role="button" aria-expanded="false" aria-controls="experiences">
						Experiences
						</a>
						<!-- Submenu -->
						<ul class="nav collapse flex-column" id="experiences" data-bs-parent="#navbar-sidebar">
							<li class="nav-item"> <a class="nav-link" href="experiences.php">View Experiences</a></li>
							<li class="nav-item"> <a class="nav-link" href="add-experience.php">Add Experience</a></li>
						</ul>
					</li>

					
					<!-- Menu item -->
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="collapse" href="#destinations" role="button" aria-expanded="false" aria-controls="destinations">
						Destinations
						</a>
						<!-- Submenu -->
						<ul class="nav collapse flex-column" id="destinations" data-bs-parent="#navbar-sidebar">
							<li class="nav-item"> <a class="nav-link" href="destinations.php">View Destinations</a></li>
							<li class="nav-item"> <a class="nav-link" href="add-destination.php">Add Destination</a></li>
						</ul>
					</li>


					<!-- Menu item -->
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="collapse" href="#Packages" role="button" aria-expanded="false" aria-controls="Packages">
						Packages
						</a>
						<!-- Submenu -->
						<ul class="nav collapse flex-column" id="Packages" data-bs-parent="#navbar-sidebar">
							<li class="nav-item"> <a class="nav-link" href="packages.php">View Packages</a></li>
							<li class="nav-item"> <a class="nav-link" href="add-package.php">Add Packages</a></li>
						</ul>
					</li>


					<!-- Menu item -->
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="collapse" href="#Blogs" role="button" aria-expanded="false" aria-controls="Blogs">
						Blogs
						</a>
						<!-- Submenu -->
						<ul class="nav collapse flex-column" id="Blogs" data-bs-parent="#navbar-sidebar">
							<li class="nav-item"> <a class="nav-link" href="blogs.php">View Blogs</a></li>
							<li class="nav-item"> <a class="nav-link" href="add-blog.php">Add Blog</a></li>
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