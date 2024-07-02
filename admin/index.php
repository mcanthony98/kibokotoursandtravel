<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from booking.webestica.com/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Sep 2023 03:55:47 GMT -->
<head>
	<title>Booking - Multipurpose Online Booking Theme</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="Booking - Multipurpose Online Booking Theme">

	<!-- Dark mode -->
	<script>
		const storedTheme = localStorage.getItem('theme')
 
		const getPreferredTheme = () => {
			if (storedTheme) {
				return storedTheme
			}
			return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
		}

		const setTheme = function (theme) {
			if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
				document.documentElement.setAttribute('data-bs-theme', 'dark')
			} else {
				document.documentElement.setAttribute('data-bs-theme', theme)
			}
		}

		setTheme(getPreferredTheme())

		window.addEventListener('DOMContentLoaded', () => {
		    var el = document.querySelector('.theme-icon-active');
			if(el != 'undefined' && el != null) {
				const showActiveTheme = theme => {
				const activeThemeIcon = document.querySelector('.theme-icon-active use')
				const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
				const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

				document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
					element.classList.remove('active')
				})

				btnToActive.classList.add('active')
				activeThemeIcon.setAttribute('href', svgOfActiveBtn)
			}

			window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
				if (storedTheme !== 'light' || storedTheme !== 'dark') {
					setTheme(getPreferredTheme())
				}
			})

			showActiveTheme(getPreferredTheme())

			document.querySelectorAll('[data-bs-theme-value]')
				.forEach(toggle => {
					toggle.addEventListener('click', () => {
						const theme = toggle.getAttribute('data-bs-theme-value')
						localStorage.setItem('theme', theme)
						setTheme(theme)
						showActiveTheme(theme)
					})
				})

			}
		})
		
	</script>

	<!-- Favicon -->
	<link rel="shortcut icon" href="../../assets/images/favicon.ico">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&amp;family=Poppins:wght@400;500;700&amp;display=swap">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="../../assets/vendor/font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="../../assets/css/style.css">

</head>

<body>
        <!-- Header START -->
            <!-- Top alert START -->
    <div class="alert alert-warning py-2 m-0 bg-dark border-0 rounded-0 alert-dismissible fade show text-center overflow-hidden d-inline-flex justify-content-md-end justify-content-between w-100" role="alert">
        <!-- Google Translate Functionality -->
        <div class="d-block d-md-none" id="google_translate_element2"></div> 
        <span>
        <span class="text-warning m-0" style="color: #ff8c00; margin-right: 5px;">
            <a href="mailto:info@kibokotoursandtravel.com" class="link-light text-decoration-underline" style="color: #ff8c00;"><i class="fa fa-envelope"></i><span class="d-none d-md-inline">info@kibokotoursandtravel.com</span></a>
        </span>
        <span class="ms-3">
            <a href="https://api.whatsapp.com/send?phone=254732962224" target="_blank" class="link-success text-decoration-underline"><i class="bi bi-whatsapp"></i><span class="d-none d-md-inline">Whatsapp: +254 732 962224</span></a>
        </span>
        
        <span class="ms-3">
            <a href="#" target="_blank" class="link-light text-decoration-underline" style="color: #0088cc;"><i class="bi bi-wechat"></i><span class="d-none d-md-inline">WeChat: +254788050783</span></a>
        </span>
        </span>
        </div>

    
    <!-- Header START -->
    <header class="navbar-light pt-0">
        <!-- Logo Nav START -->
        <nav class="navbar navbar-light navbar-expand-xl">
            <div class="container-fluid px-md-5">
                <!-- Logo START -->
                <a class="navbar-brand pt-2" href="index.php">
                    <img class="navbar-brand-item d-none d-md-block" src="../assets/images/kiboko-logo.png" alt="logo" style="width:100px; height:auto;">
                    <img class="navbar-brand-item d-block d-md-none" src="../assets/images/kiboko-logo.png" alt="logo" style="width:80px; height:auto;">
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

                                    <li class="nav-item"> <a href="faq.php" class="nav-link small pb-2" style="font-weight: bold"><i
                                                class="bi bi-info-circle me-2" style="font-weight: bold"></i>Help</a> </li>
                                    <li class="nav-item"> <a href="sign-in.php" class="nav-link small pb-2" style="font-weight: bold"><i
                                                class="far fa-user me-2" style="font-weight: bold"></i>B2B Login</a> </li>
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
                                        <a class="nav-link dropdown-toggle active fw-bold" href="#" id="hotelMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">DISCOVER KENYA</a>
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
                                                                                                                                        <li> <a class="dropdown-item" href="destinations-details.php?id=4&tsavo-east-national-park">Tsavo East National Park</a> </li>

                                                                 
                                                                                                                                <li> <a class="dropdown-item" href="destinations-details.php?id=1&maasai-mara">Maasai Mara</a> </li>

                                                                 
                                                                                                                                <li> <a class="dropdown-item" href="destinations-details.php?id=28&aberdare-national-park">Aberdare National Park</a> </li>

                                                                 
                                                                                                                                <li> <a class="dropdown-item" href="destinations-details.php?id=2&amboseli">Amboseli</a> </li>

                                                                 
                                                                                                                                <li> <a class="dropdown-item" href="destinations-details.php?id=3&samburu-national-reserve">Samburu National Reserve</a> </li>

                                                                 
                                                                                                                                <li> <a class="dropdown-item" href="destinations-details.php?id=9&tsavo-west-national-park">Tsavo West National Park</a> </li>

                                                                    
															</ul>
														</div>
	
														<div class="col-lg-6">
															<ul class="list-unstyled">
                                                                
                                                                                                                                <li> <a class="dropdown-item" href="destinations-details.php?id=22&lake-naivasha">Lake Naivasha</a> </li>

                                                                 
                                                                                                                                <li> <a class="dropdown-item" href="destinations-details.php?id=23&nairobi-national-park">Nairobi National Park</a> </li>

                                                                 
                                                                                                                                <li> <a class="dropdown-item" href="destinations-details.php?id=24&ol-pejeta-consevancy">Ol Pejeta Consevancy</a> </li>

                                                                 
                                                                                                                                <li> <a class="dropdown-item" href="destinations-details.php?id=25&lake-nakuru-national-park">Lake Nakuru National Park</a> </li>

                                                                 
                                                                                                                                <li> <a class="dropdown-item" href="destinations-details.php?id=26&lake-bogoria-national-reserve">Lake Bogoria National Reserve</a> </li>

                                                                 
                                                                                                                                <li> <a class="dropdown-item" href="destinations-details.php?id=27&hell-gate-national-park">Hell Gate National Park</a> </li>

                                                                 
                                                                                                                                
															</ul>
                                                            </div>
                                                        </div>
                                                    </div>
        
                                                    <!-- Activities -->
                                                    <div class="col-lg-3">
                                                        <h6 class="mb-3"><i class="bi bi-list-ul text-warning me-2"></i>Activities</h6>
                                                        <hr class="my-2">
                                                            <ul class="list-unstyled">
                                                                                                                    <li> <a class="dropdown-item" href="experience-details.php?id=4&kayaking">Kayaking</a> </li>
                                                                                                                        <li> <a class="dropdown-item" href="experience-details.php?id=3&volley-ball">Volley Ball</a> </li>
                                                                                                                        <li> <a class="dropdown-item" href="experience-details.php?id=17&balloon-safaris">Balloon Safaris</a> </li>
                                                                                                                        <li> <a class="dropdown-item" href="experience-details.php?id=9&great-wildebeest-migration">Great Wildebeest Migration</a> </li>
                                                                                                                        <li> <a class="dropdown-item" href="experience-details.php?id=1&camping">Camping</a> </li>
                                                                                                                        <li> <a class="dropdown-item" href="experience-details.php?id=2&surfing">Surfing</a> </li>
                                                            
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
                                                        <div class="card overflow-hidden" style="background-image:url(../assets/images/footer-bg.jpg); background-position: center left; background-size: cover;">
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
                                                        Classic Safaris<i class="fas fa-chevron-right align-icon-right"></i>
                                                    </a>
                                                    <ul class="dropdown-menu" data-bs-popper="none">
                                                                                                        <li> <a class="dropdown-item" href="package-details.php?id=2&3-day-amboseli-national-park-experience">3 Day Amboseli National Park Experience</a></li>
                                                                                                        <li> <a class="dropdown-item" href="package-details.php?id=1&masai-mara---lake-nakuru-experience">Masai Mara - Lake Nakuru Experience</a></li>
                                                                                                        <li> <a class="dropdown-item" href="package-details.php?id=3&amboseli-&-tsavo-parks-in-style">Amboseli & Tsavo Parks In Style</a></li>
                                                                                                        <li> <a class="dropdown-item" href="package-details.php?id=4&nairobi---l-naivasha---masai-mara-safari">Nairobi - L Naivasha - Masai Mara Safari</a></li>
                                                                                                        <li> <a class="dropdown-item" href="package-details.php?id=5&exploring-amboseli-np--tsavo-west-tsavo-east-parks">Exploring Amboseli NP- Tsavo West-Tsavo East Parks</a></li>
                                                                                                        <li> <a class="dropdown-item" href="package-details.php?id=6&l-naivasha---lake-nakuru---masai-mara-safari">L Naivasha - Lake Nakuru - Masai Mara Safari</a></li>
                                                                                                        <li> <a class="dropdown-item" href="package-details.php?id=7&nairobi---amboseli---saltlick--tsavo-east-nairobi">Nairobi - Amboseli - Saltlick- Tsavo East-Nairobi</a></li>
                                                                                                        <li> <a class="dropdown-item" href="package-details.php?id=8&nairobi-samburu-ol-pejeta-lake-naivasha-mara">Nairobi-Samburu-Ol Pejeta-Lake Naivasha-Mara</a></li>
                                                                                                        <li> <a class="dropdown-item" href="package-details.php?id=9&masai-mara--l-nakuru---amboseli-safari-experience">Masai Mara -L Nakuru - Amboseli Safari Experience</a></li>
                                                                                                        <li> <a class="dropdown-item" href="package-details.php?id=10&masai-mara-lake-naivasha-amboseli-park-safari">Masai Mara-Lake Naivasha-Amboseli Park Safari</a></li>
                                                        
                                                    </ul>
                                                </li>
    
                                                <li class="dropdown-submenu dropend">
                                                    <a class="dropdown-item" href="accessible-safaris.php">
                                                        Accessible Safaris <i
                                                            class="fas fa-chevron-right align-icon-right"></i>
                                                    </a>
                                                    <ul class="dropdown-menu" data-bs-popper="none">
                                                                                                        <li> <a class="dropdown-item" href="package-details.php?id=27&agricultural-farm-visit">Agricultural Farm Visit</a></li>
                                                                                                        <li> <a class="dropdown-item" href="package-details.php?id=13&game-drive-&-dining-experience">Game Drive & Dining Experience</a></li>
                                                                                                        <li> <a class="dropdown-item" href="package-details.php?id=12&special-needs-buzz-tour">Special Needs Buzz Tour</a></li>
                                                                                                        <li> <a class="dropdown-item" href="package-details.php?id=23&safari-experience">Safari Experience</a></li>
                                                                                                        <li> <a class="dropdown-item" href="package-details.php?id=24&group-shopping">Group Shopping</a></li>
                                                                                                        <li> <a class="dropdown-item" href="package-details.php?id=25&countryside-visit-&-road-experience">Countryside Visit & Road Experience</a></li>
                                                                                                        <li> <a class="dropdown-item" href="package-details.php?id=26&pre-flight-check-in-experience">Pre-flight Check In Experience</a></li>
                                                                                                        </ul>
                                                </li>
    
                                                <li class="dropdown-submenu dropend">
                                                    <a class="dropdown-item" href="family-couple-safaris.php">
                                                        Family & Couple <i
                                                            class="fas fa-chevron-right align-icon-right"></i>
                                                    </a>
                                                    <ul class="dropdown-menu" data-bs-popper="none">
                                                                                                        <li> <a class="dropdown-item" href="package-details.php?id=29&lets-share-the-journey">Lets Share The Journey</a></li>
                                                        
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
    


        <!-- Header END -->

        <main>

            <!-- =======================
Main Content START -->
<section class="vh-xxl-100">
	<div class="container h-100 d-flex px-0 px-sm-4">
		<div class="row justify-content-center align-items-center m-auto">
			<div class="col-12">
				<div class="bg-mode shadow rounded-3 overflow-hidden">
					<div class="row g-0">
						<!-- Vector Image -->
						<div class="col-lg-6 d-md-flex align-items-center order-2 order-lg-1">
							<div class="p-3 p-lg-5">
								<img src="../assets/images/hippo.jpg" alt="Hippo SVG">
							</div>
							<!-- Divider -->
							<div class="vr opacity-1 d-none d-lg-block"></div>
						</div>
		
						<!-- Information -->
						<div class="col-lg-6 order-1">
							<div class="p-4 p-sm-6">
								<!-- Logo -->
								<a href="index.html">
									<img class="h-50px mb-4" src="../assets/images/kiboko-logo.png" alt="logo">
								</a>
								<!-- Title -->
								<h1 class="mb-2 h3">Create new account</h1>
								<p class="mb-0">Already a member?<a href="sign-in.php"> Log in</a></p>
		
								<!-- Form START -->
								<form class="mt-4 text-start">
									<!-- Email -->
									<div class="mb-3">
										<label class="form-label">Enter email address</label>
										<input type="email" class="form-control">
									</div>
									<!-- Password -->
									<div class="mb-3 position-relative">
										<label class="form-label">Enter password</label>
										<input class="form-control fakepassword" type="password" id="psw-input">
										<span class="position-absolute top-50 end-0 translate-middle-y p-0 mt-3">
											<i class="fakepasswordicon fas fa-eye-slash cursor-pointer p-2"></i>
										</span>
									</div>
									<!-- Confirm Password -->
									<div class="mb-3">
										<label class="form-label">Confirm Password</label>
										<input type="password" class="form-control">
									</div>
									<!-- Remember me -->
									<div class="mb-3">
										<input type="checkbox" class="form-check-input" id="rememberCheck">
										<label class="form-check-label" for="rememberCheck">Keep me signed in</label>
									</div>
									<!-- Button -->
									<div><button type="submit" class="btn btn-primary w-100 mb-0">Sign up</button></div>
		
									<!-- Divider -->
									<div class="position-relative my-4">
										<hr>
										<p class="small position-absolute top-50 start-50 translate-middle bg-mode px-1 px-sm-2">Or sign in with</p>
									</div>
		
									<!-- Google and facebook button -->
									<div class="vstack gap-3">
										<a href="#" class="btn btn-light mb-0"><i class="fab fa-fw fa-google text-google-icon me-2"></i>Sign in with Google</a>
										<a href="#" class="btn btn-light mb-0"><i class="fab fa-fw fa-facebook-f text-facebook me-2"></i>Sign in with Facebook</a>
									</div>
		
									<!-- Copyright -->
									<div class="text-primary-hover mt-3 text-center"> Copyrights ©2024 Kiboko Tours & Travel. <br> Built by <a href="https://ganiamtech.com/">Ganiam Tech</a>. </div>
								</form>
								<!-- Form END -->
							</div>		
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Main Content END -->

        </main>

        <!-- Footer START -->
                <!-- ======================= Footer START -->


<footer class="bg-dark pt-5" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('../assets/images/footer-bg.jpg'); background-size: cover;">
        <div class="container">
            <!-- Row START -->
            <div class="row g-4">

                <!-- Widget 1 START -->
                <div class="col-lg-3">
                    <!-- logo -->
                    <div class="bg-white d-inline-block rounded-circle p-1">
                    <a class="navbar-brand" href="index.php">
                    <img class="navbar-brand-item d-none d-md-block" src="../assets/images/logo/kiboko-logo.png" alt="logo" style="width:100px; height:auto;">
                <img class="navbar-brand-item d-block d-md-none" src="../assets/images/kiboko-logo.png" alt="logo" style="width:80px; height:auto;"> 
                        </a>
</div>
                    <p class="my-3 text-muted">Kiboko Tours & Travel.</p>
                    <br>

                    <p class="mb-2"><a href="kibokotoursandtravel.com" class="text-muted text-primary-hover"><i
                                class="bi bi-telephone me-2"></i>+254 732 962224</a> </p>
                    <p class="mb-0"><a href="mailto:info@kibokotoursandtravel.com"
                            class="text-muted text-primary-hover"><i
                                class="bi bi-envelope me-2"></i>info@kibokotoursandtravel.com</a></p>
                </div>
                <!-- Widget 1 END -->

                <!-- Widget 2 START -->
                <div class="col-lg-8 ms-auto">
                    <div class="row g-4">
                        <!-- Link block -->
                        <div class="col-6 col-md-4">
                            <h5 class="text-white mb-4 mb-md-4">Navigation</h5>
                            <ul class="nav flex-column text-primary-hover">
                                <li class="nav-item"><a class="nav-link text-muted" href="index.phh">Home</a></li>
                                <li class="nav-item"><a class="nav-link text-muted" href="destinations.php">Destination</a></li>
                                <li class="nav-item"><a class="nav-link text-muted" href="experience-details.php">Experiences</a></li>
                                <li class="nav-item"><a class="nav-link text-muted" href="about-us.php">About us</a>
                                </li>
                                <li class="nav-item"><a class="nav-link text-muted" href="contact-us.php">Contact
                                        us</a></li>
                                <li class="nav-item"><a class="nav-link text-muted" href="blog.php">Blog</a></li>
                                <li class="nav-item"><a class="nav-link text-muted" href="contact-us.php#quote">Quote</a></li>
                            </ul>
                        </div>

                        <!-- Link block -->
                        <div class="col-6 col-md-5">
                            <h5 class="text-white mb-2 mb-md-">Top Destinations</h5>
                            <ul class="nav flex-column text-primary-hover">
                                                            <li class="nav-item"><a class="nav-link text-muted" href="destinations-details.php?id=4&tsavo-east-national-park">Tsavo East National Park</a></li>
                                                                <li class="nav-item"><a class="nav-link text-muted" href="destinations-details.php?id=1&maasai-mara">Maasai Mara</a></li>
                                                                <li class="nav-item"><a class="nav-link text-muted" href="destinations-details.php?id=28&aberdare-national-park">Aberdare National Park</a></li>
                                                                <li class="nav-item"><a class="nav-link text-muted" href="destinations-details.php?id=2&amboseli">Amboseli</a></li>
                                                                <li class="nav-item"><a class="nav-link text-muted" href="destinations-details.php?id=3&samburu-national-reserve">Samburu National Reserve</a></li>
                                                                <li class="nav-item"><a class="nav-link text-muted" href="destinations-details.php?id=9&tsavo-west-national-park">Tsavo West National Park</a></li>
                                                                <li class="nav-item"><a class="nav-link text-muted" href="destinations-details.php?id=22&lake-naivasha">Lake Naivasha</a></li>
                                                                <li class="nav-item"><a class="nav-link text-muted" href="destinations-details.php?id=23&nairobi-national-park">Nairobi National Park</a></li>
                                                                <li class="nav-item"><a class="nav-link text-muted" href="destinations-details.php?id=24&ol-pejeta-consevancy">Ol Pejeta Consevancy</a></li>
                                                                <li class="nav-item"><a class="nav-link text-muted" href="destinations-details.php?id=25&lake-nakuru-national-park">Lake Nakuru National Park</a></li>
                                
                            </ul>
                        </div>

                        <!-- Link block -->
                        <div class="col-6 col-md-3">
                            <h5 class="text-white mb-2 mb-md-4">Safari Types</h5>
                            <ul class="nav flex-column text-primary-hover">
                                <li class="nav-item"><a class="nav-link text-muted" href="classic-safaris.php">Classic
                                        Safaris</a></li>
                                <li class="nav-item"><a class="nav-link text-muted"
                                        href="accessible-safaris.php">Accessible Safaris</a></li>
                                <li class="nav-item"><a class="nav-link text-muted"
                                        href="family-couple-safaris.php">Family & Couple Safaris</a>
                                </li>
                            </ul>
                        </div>

                </div>
                <!-- Widget 2 END -->

            </div><!-- Row END -->


            <!-- Payment and card -->
            <div class="row g-4 justify-content-between mt-0 mt-md-2 ">

                <!-- Payment card -->
                <div class="col-sm-7 col-md-6 col-lg-4 order-2">
                    <h5 class="text-white mb-2">Payment & Security</h5>
                    <ul class="list-inline mb-0 mt-3">
                        <li class="list-inline-item"> <a href="#"><img src="../assets/images/element/pesapal-2.png"
                                    class="h-30px" alt=""></a></li>
                        <li class="list-inline-item"> <a href="#"><img src="../assets/images/element/visa.svg"
                                    class="h-30px" alt=""></a></li>
                        <li class="list-inline-item"> <a href="#"><img src="../assets/images/element/mastercard.svg"
                                    class="h-30px" alt=""></a></li>
                        <li class="list-inline-item"> <a href="#"><img src="../assets/images/element/expresscard.svg"
                                    class="h-30px" alt=""></a></li>
                    </ul>
                </div>

                <!-- Tagline -->
                <div class="col-12 order-1">
                    <br>
                    <p class="text-muted text-center h4">We lead the path to your intended destination.</p>
                </div>

                <!-- Social media icon -->
                <div class="col-sm-5 col-md-6 col-lg-3 text-sm-end order-3">
                    <h5 class="text-white mb-2">Follow us on</h5>
                    <ul class="list-inline mb-0 mt-3">
                        <li class="list-inline-item"> <a class="btn btn-sm px-2 bg-facebook mb-0" href="https://www.facebook.com/KibokoTours" target="_blank"><i
                                    class="fab fa-fw fa-facebook-f"></i></a> </li>
                        <li class="list-inline-item"> <a class="btn btn-sm shadow px-2 bg-instagram mb-0" href="https://www.instagram.com/kiboko_tours" target="_blank"><i
                                    class="fab fa-fw fa-instagram"></i></a> </li>
                            <li class="list-inline-item"> 
                                <a class="btn btn-sm shadow px-2  mb-0" href="https://twitter.com/ToursKiboko" target="_blank">
                                    <img src="../assets/images/element/x-logo.jpg" alt="X logo" class="icon-size" width="40" height="50">
                                </a> 
                            </li>
                            <li class="list-inline-item"> <a class="btn btn-sm shadow px-2 bg-linkedin mb-0" href="https://www.linkedin.com/company/kiboko-tours-and-travel/" target="_blank"><i
                                        class="fab fa-fw fa-linkedin-in"></i></a> </li>

                            <li class="list-inline-item"> 
                                <a class="btn btn-sm shadow px-2  mb-0" href="https://www.xiaohongshu.com/user/profile/6523fa87000000002a0357c6" target="_blank">
                                    <img src="../assets/images/element/xiao-logo.png" alt="Xiaohongshu logo" class="icon-size" width="40" height="50">
                                </a> 
                            </li>
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
                        <div class="text-muted text-primary-hover"> Copyrights ©2024 Kiboko Tours & Travel. Built by <a
                                href="https://www.ganiamtech.com/index.php" class="text-muted">Ganiam Tech</a>. </div>
                    
                    <!-- copyright links-->
                    <div class="nav mt-2 mt-lg-0">
                        <ul class="list-inline text-primary-hover mx-auto mb-0">
                            <li class="list-inline-item me-0">
                                <a class="nav-link py-1 text-muted" target="_blank" href="../assets/docs/kiboko-terms-and-conditions.pdf" download>Download our Terms and Conditions</a>
                            </li>
                            <li class="list-inline-item me-0"><a class="nav-link py-1 text-muted pe-0"
                                    href="faq.php">Help</a></li>
                        </ul>
                    </div>

                    </div>


                </div>
            </div>
        </div>
    </footer>
    <!-- =======================Footer END -->


    <!-- Back to top -->
    <div class="back-top"></div>

    <!-- Bootstrap JS -->
    <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Vendors -->
    <script src="../assets/vendor/tiny-slider/tiny-slider.js"></script>
    <script src="../assets/vendor/purecounterjs/dist/purecounter_vanilla.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.js"></script>
    <script src="../assets/vendor/flatpickr/js/flatpickr.min.js"></script>
    <script src="../assets/vendor/choices/js/choices.min.js"></script>
    <script src="../assets/vendor/jarallax/jarallax.min.js"></script>
    <script src="../assets/vendor/jarallax/jarallax-video.min.js"></script>

    <!-- ThemeFunctions -->
    <script src="../assets/js/functions.js"></script>

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

        <!-- Footer END -->
    </body>


</html>