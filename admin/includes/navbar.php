<!-- Top bar START -->
<nav class="navbar top-bar navbar-light py-0 py-xl-3">
			<div class="container-fluid p-0">
				<div class="d-flex align-items-center w-100">
	
					<!-- Logo START -->
					<div class="d-flex align-items-center d-xl-none">
						<a class="navbar-brand" href="index.html">
							<img class="navbar-brand-item h-40px" src="../assets/images/logo-icon.svg" alt="">
						</a>
					</div>
					<!-- Logo END -->
	
					<!-- Toggler for sidebar START -->
					<div class="navbar-expand-xl sidebar-offcanvas-menu">
						<button class="navbar-toggler me-auto p-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar" aria-expanded="false" aria-label="Toggle navigation" data-bs-auto-close="outside">
							<i class="bi bi-list text-primary fa-fw" data-bs-target="#offcanvasMenu"></i>
						</button>
					</div>
					<!-- Toggler for sidebar END -->
					
					<!-- Top bar left -->
					<div class="navbar-expand-lg ms-auto ms-xl-0">
						<!-- Toggler for menubar START -->
						<button class="navbar-toggler ms-auto p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTopContent" aria-controls="navbarTopContent" aria-expanded="false" aria-label="Toggle navigation">
							<i class="bi bi-search"></i>
						</button>
						<!-- Toggler for menubar END -->
	
						<!-- Topbar menu START -->
						<div class="collapse navbar-collapse w-100 z-index-1" id="navbarTopContent">
							<!-- Top search START -->
							<div class="nav my-3 my-xl-0 flex-nowrap align-items-center">
								<div class="nav-item w-100">
									<form class="position-relative">
										<input class="form-control bg-light pe-5" type="search" placeholder="Search" aria-label="Search">
										<button class="bg-transparent px-2 py-0 border-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="fas fa-search fs-6 text-primary"></i></button>
									</form>
								</div>
							</div>
							<!-- Top search END -->
						</div>
						<!-- Topbar menu END -->
					</div>
					<!-- Top bar left END -->
					
					<!-- Top bar right START -->
					<ul class="nav flex-row align-items-center list-unstyled ms-xl-auto">
						<!-- Dark mode options START -->
						<li class="nav-item dropdown ms-3">
							<button class=" btn btn-light mb-0" type="button" aria-expanded="false" data-bs-toggle="dropdown" data-bs-display="static">
								Manage<i class="fa-solid fa-chevron-down px-2 text-primary"></i>
							</button>

							<ul class="dropdown-menu min-w-auto dropdown-menu-end" aria-labelledby="bd-theme">
								<li class="mb-1">
									<a href="https://snapshottoursandsafaris.com/admin/dashboard.php" class="dropdown-item d-flex align-items-center" >
										Tours and Safaris						
									</a>
								</li>
								<li class="mb-1">
									<a href="https://snapshotteambuilding.com/admin/tb-dashboard.php" class="dropdown-item d-flex align-items-center" >
										Team Building						
									</a>
								</li>
							</ul>
						</li>
						<!-- Dark mode options END-->

						<!-- Notification dropdown START -->
						<li class="nav-item dropdown ms-3">
							<!-- Notification button -->
							<a class="nav-notification btn btn-light p-0 mb-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
								<i class="bi bi-bell fa-fw"></i>
							</a>
							<!-- Notification dote -->
							<span class="notif-badge animation-blink"></span>
		
							<!-- Notification dropdown menu START -->
							<div class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md shadow-lg p-0">
								<div class="card bg-transparent">
									<!-- Card header -->
									<div class="card-header bg-transparent d-flex justify-content-between align-items-center border-bottom">
										<h6 class="m-0">Notifications <span class="badge bg-danger bg-opacity-10 text-danger ms-2">4 new</span></h6>
										<a class="small" href="#">Clear all</a>
									</div>
		
									<!-- Card body START -->
									<div class="card-body p-0">
										<ul class="list-group list-group-flush list-unstyled p-2">
											<!-- Notification item -->
											<li>
												<a href="#" class="list-group-item list-group-item-action rounded notif-unread border-0 mb-1 p-3">
													<h6 class="mb-2">New! Booking flights from New York ✈️</h6>
													<p class="mb-0 small">Find the flexible ticket on flights around the world. Start searching today</p>
													<span>Wednesday</span>
												</a>
											</li>
											<!-- Notification item -->
											<li>
												<a href="#" class="list-group-item list-group-item-action rounded border-0 mb-1 p-3">
													<h6 class="mb-2">Sunshine saving are here 🌞 save 30% or more on a stay</h6>
													<span>15 Nov 2022</span>
												</a>
											</li>
										</ul>
									</div>
									<!-- Card body END -->
		
									<!-- Card footer -->
									<div class="card-footer bg-transparent text-center border-top">
										<a href="#" class="btn btn-sm btn-link mb-0 p-0">See all incoming activity</a>
									</div>
								</div>
							</div>
							<!-- Notification dropdown menu END -->
						</li>
						<!-- Notification dropdown END -->
		
						<!-- Profile dropdown START -->
						<li class="nav-item ms-3 dropdown">
							<!-- Avatar -->
							<a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
								<img class="avatar-img rounded-2" src="../assets/images/logo.png" alt="avatar">
							</a>
		
							<ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3" aria-labelledby="profileDropdown">
								<!-- Profile info -->
								<li class="px-3 mb-3">
									<div class="d-flex align-items-center">
										<!-- Avatar -->
										<div class="avatar me-3">
											<img class="avatar-img rounded-circle shadow" src="../assets/images/logo.png" alt="avatar">
										</div>
										<div>
											<a class="h6 mt-2 mt-sm-0" href="#">Snapshot Admin</a>
											<p class="small m-0">info@snapshottoursandsafaris.com</p>
										</div>
									</div>
								</li>
		
								<!-- Links -->
								<li> <hr class="dropdown-divider"></li>
								<li><a class="dropdown-item" href="#"><i class="bi bi-bookmark-check fa-fw me-2"></i>My Bookings</a></li>
								<li><a class="dropdown-item" href="#"><i class="bi bi-heart fa-fw me-2"></i>My Wishlist</a></li>
								<li><a class="dropdown-item" href="#"><i class="bi bi-gear fa-fw me-2"></i>Settings</a></li>
								<li><a class="dropdown-item" href="#"><i class="bi bi-info-circle fa-fw me-2"></i>Help Center</a></li>
								<li><a class="dropdown-item bg-danger-soft-hover" href="#"><i class="bi bi-power fa-fw me-2"></i>Sign Out</a></li>
							</ul>
						</li>
						<!-- Profile dropdown END -->
					</ul>
					<!-- Top bar right END -->
				</div>
			</div>
		</nav>
		<!-- Top bar END -->