<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Us | Kiboko Tours & Travel</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="GNM">
    <meta name="description" content="Kiboko Tours & Travel">

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
            if (el != 'undefined' && el != null) {
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
    <link rel="shortcut icon" href="assets/images/kiboko-logo.png">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&amp;family=Poppins:wght@400;500;700&amp;display=swap">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/tiny-slider/tiny-slider.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/glightbox/css/glightbox.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/flatpickr/css/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/choices/css/choices.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


</head>

<body>

    <!-- Header START -->
    <header class="navbar-light py-3">
        <!-- Logo Nav START -->
        <nav class="navbar navbar-expand-lg">
            <div class="container d-block">
                <div class="row align-items-center">
                    <div class="col-4">
                        <!-- Logo START -->
                        <a class="navbar-brand" href="index.html">
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
                                <li class="nav-item"> <a href="account-bookings.html" class="nav-link small pb-2"><i
                                            class="bi bi-briefcase me-2"></i>My Adventures</a> </li>
                                <li class="nav-item"> <a href="help-center.html" class="nav-link small pb-2"><i
                                            class="bi bi-info-circle me-2"></i>Help</a> </li>
                                <li class="nav-item"> <a href="sign-in.html" class="nav-link small pb-2"><i
                                            class="far fa-user me-2"></i>Login or Register</a> </li>
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


                                    <!-- Safaris -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="pagesFacilities"
                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Safaris</a>
                                        <ul class="dropdown-menu" aria-labelledby="pagesFacilities">
                                            <li class="dropdown-submenu dropend">
                                                <a class="dropdown-item" href="classic-safaris.html">
                                                    Classic <i class="fas fa-chevron-right align-icon-right"></i>
                                                </a>
                                                <ul class="dropdown-menu" data-bs-popper="none">
                                                    <li> <a class="dropdown-item" href="classic-safaris.html">3-Day
                                                            Tours</a></li>
                                                    <li> <a class="dropdown-item" href="classic-safaris.html">4-Day
                                                            Tours</a></li>
                                                    <li> <a class="dropdown-item" href="classic-safaris.html">5-Day
                                                            Tours</a></li>
                                                    <li> <a class="dropdown-item" href="classic-safaris.html">3 Day
                                                            Tours</a></li>
                                                    <li> <a class="dropdown-item" href="classic-safaris.html">6-Day
                                                            Tours</a></li>
                                                    <li> <a class="dropdown-item" href="classic-safaris.html">7-Day
                                                            Tours</a></li>
                                                    <li> <a class="dropdown-item" href="classic-safaris.html">8-Day
                                                            Tours</a></li>
                                                    <li> <a class="dropdown-item" href="classic-safaris.html">9-Day
                                                            Tours</a></li>
                                                    <li> <a class="dropdown-item" href="classic-safaris.html">10-Day
                                                            Tours</a></li>


                                                </ul>
                                            </li>

                                            <li class="dropdown-submenu dropend">
                                                <a class="dropdown-item" href="accessible-safaris.html">
                                                    Accessible Safaris <i
                                                        class="fas fa-chevron-right align-icon-right"></i>
                                                </a>
                                                <ul class="dropdown-menu" data-bs-popper="none">
                                                    <li> <a class="dropdown-item"
                                                            href="accessible-safaris.html">Therapeutic Horseback
                                                            Riding</a></li>
                                                    <li> <a class="dropdown-item" href="accessible-safaris.html">Special
                                                            Needs Buzz Tour</a>
                                                    </li>
                                                    <li> <a class="dropdown-item" href="accessible-safaris.html">Game
                                                            Drive & Dining
                                                            Experience</a></li>
                                                    <li> <a class="dropdown-item" href="accessible-safaris.html">Safari
                                                            Experience</a></li>
                                                    <li> <a class="dropdown-item" href="accessible-safaris.html">Group
                                                            Shopping</a></li>
                                                    <li> <a class="dropdown-item"
                                                            href="accessible-safaris.html">Countryside Road
                                                            Experience</a></li>
                                                    <li> <a class="dropdown-item" href="accessible-safaris.html">Coast
                                                            Experience & Dolphin
                                                            Watching in Watamu</a></li>
                                                    <li> <a class="dropdown-item"
                                                            href="accessible-safaris.html">Agricultural Farm Visit</a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="dropdown-submenu dropend">
                                                <a class="dropdown-item" href="family-couple-safaris.html">
                                                    Family & Couple <i
                                                        class="fas fa-chevron-right align-icon-right"></i>
                                                </a>
                                                <ul class="dropdown-menu" data-bs-popper="none">
                                                    <li> <a class="dropdown-item"
                                                            href="family-couple-safaris.html">Exploring Ways of Growing
                                                            Rich Together</a></li>
                                                    <li> <a class="dropdown-item"
                                                            href="family-couple-safaris.html">Learn Parenting in an
                                                            Exciting Way</a></li>
                                                    <li> <a class="dropdown-item" href="family-couple-safaris.html">Keep
                                                            Discovering your Spouse
                                                            for Healthy & Enriching Relationship</a></li>
                                                    <li> <a class="dropdown-item"
                                                            href="family-couple-safaris.html">Learn to Fight in Love</a>
                                                    </li>
                                                    <li> <a class="dropdown-item" href="family-couple-safaris.html">Keep
                                                            Dating your Spouse</a>
                                                    </li>
                                                    <li> <a class="dropdown-item"
                                                            href="family-couple-safaris.html">Enriching Communication
                                                            for
                                                            Better Days</a></li>

                                                </ul>
                                            </li>

                                        </ul>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="about-us.html" id="pagesFacilities">About Us</a>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="contact-us.html" id="pagesFacilities">Contact Us</a>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="blog.html" id="pagesFacilities">Blog</a>
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

    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================
Main banner START -->
        <section class="pt-4 pt-md-5">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-xl-10">
                        <!-- Title -->
                        <h1>Let's connect and get to know each other</h1>
                        <p class="lead mb-0">Feel free to reach out to us for any inquiries.
                        </p>
                    </div>
                </div>

                <!-- Contact info -->
                <div class="row g-4">

                    <!-- Contact item START -->
                    <div class="col-md-6 col-xl-4">
                        <div class="card card-body shadow text-center align-items-center h-100">
                            <!-- Icon -->
                            <div class="icon-lg bg-info bg-opacity-10 text-info rounded-circle mb-2"><i
                                    class="bi bi-headset fs-5"></i></div>
                            <!-- Title -->
                            <h5>Call us</h5>
                            <p>We are one phone call away</p>
                            <!-- Buttons -->
                            <div class="d-grid gap-3 d-sm-block">
                                <button class="btn btn-sm btn-primary-soft"><i class="bi bi-phone me-2"></i>+254 712 123
                                    123</button>
                                <button class="btn btn-sm btn-light"><i class="bi bi-telephone me-2"></i>+254 712 123
                                    123</button>
                            </div>
                        </div>
                    </div>
                    <!-- Contact item END -->

                    <!-- Contact item START -->
                    <div class="col-md-6 col-xl-4">
                        <div class="card card-body shadow text-center align-items-center h-100">
                            <!-- Icon -->
                            <div class="icon-lg bg-danger bg-opacity-10 text-danger rounded-circle mb-2"><i
                                    class="bi bi-inboxes-fill fs-5"></i></div>
                            <!-- Title -->
                            <h5>Email us</h5>
                            <p>Our email is open 24/7</p>
                            <!-- Buttons -->
                            <a href="#" class="btn btn-link text-decoration-underline p-0 mb-0"><i
                                    class="bi bi-envelope me-1"></i>info@kibokotoursandtravel.com</a>
                        </div>
                    </div>
                    <!-- Contact item END -->

                    <!-- Contact item START -->
                    <div class="col-xl-4 position-relative">
                        <!-- Svg decoration -->
                        <figure class="position-absolute top-0 end-0 z-index-1 mt-n4 ms-n7">
                            <svg class="fill-warning" width="77px" height="77px">
                                <path
                                    d="M76.997,41.258 L45.173,41.258 L67.676,63.760 L63.763,67.673 L41.261,45.171 L41.261,76.994 L35.728,76.994 L35.728,45.171 L13.226,67.673 L9.313,63.760 L31.816,41.258 L-0.007,41.258 L-0.007,35.725 L31.816,35.725 L9.313,13.223 L13.226,9.311 L35.728,31.813 L35.728,-0.010 L41.261,-0.010 L41.261,31.813 L63.763,9.311 L67.676,13.223 L45.174,35.725 L76.997,35.725 L76.997,41.258 Z">
                                </path>
                            </svg>
                        </figure>

                        <div class="card card-body shadow text-center align-items-center h-100">
                            <!-- Icon -->
                            <div class="icon-lg bg-orange bg-opacity-10 text-orange rounded-circle mb-2"><i
                                    class="bi bi-globe2 fs-5"></i></div>
                            <!-- Title -->
                            <h5>Social media</h5>
                            <p>Send us a DM and follow us.</p>
                            <!-- Buttons -->
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"> <a class="btn btn-sm bg-facebook px-2 mb-0" href="#"><i
                                            class="fab fa-fw fa-facebook-f"></i></a> </li>
                                <li class="list-inline-item"> <a class="btn btn-sm bg-instagram px-2 mb-0" href="#"><i
                                            class="fab fa-fw fa-instagram"></i></a> </li>
                                <li class="list-inline-item"> <a class="btn btn-sm bg-twitter px-2 mb-0" href="#"><i
                                            class="fab fa-fw fa-twitter"></i></a> </li>
                                <li class="list-inline-item"> <a class="btn btn-sm bg-linkedin px-2 mb-0" href="#"><i
                                            class="fab fa-fw fa-linkedin-in"></i></a> </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Contact item END -->
                </div>
            </div>
        </section>
        <!-- =======================
Main banner START -->

        <!-- =======================
Contact form and vector START -->
        <section class="pt-0 pt-lg-5">
            <div class="container">
                <div class="row g-4 g-lg-5 align-items-center">
                    <!-- Vector image START -->
                    <div class="col-lg-6 text-center">
                        <img src="assets/images/element/contact.svg" alt="">
                    </div>
                    <!-- Vector image END -->

                    <!-- Contact form START -->
                    <div class="col-lg-6">
                        <div class="card bg-light p-4">
                            <!-- Svg decoration -->
                            <figure class="position-absolute end-0 bottom-0 mb-n4 me-n2">
                                <svg class="fill-orange" width="104.2px" height="95.2px">
                                    <circle cx="2.6" cy="92.6" r="2.6" />
                                    <circle cx="2.6" cy="77.6" r="2.6" />
                                    <circle cx="2.6" cy="62.6" r="2.6" />
                                    <circle cx="2.6" cy="47.6" r="2.6" />
                                    <circle cx="2.6" cy="32.6" r="2.6" />
                                    <circle cx="2.6" cy="17.6" r="2.6" />
                                    <circle cx="2.6" cy="2.6" r="2.6" />
                                    <circle cx="22.4" cy="92.6" r="2.6" />
                                    <circle cx="22.4" cy="77.6" r="2.6" />
                                    <circle cx="22.4" cy="62.6" r="2.6" />
                                    <circle cx="22.4" cy="47.6" r="2.6" />
                                    <circle cx="22.4" cy="32.6" r="2.6" />
                                    <circle cx="22.4" cy="17.6" r="2.6" />
                                    <circle cx="22.4" cy="2.6" r="2.6" />
                                    <circle cx="42.2" cy="92.6" r="2.6" />
                                    <circle cx="42.2" cy="77.6" r="2.6" />
                                    <circle cx="42.2" cy="62.6" r="2.6" />
                                    <circle cx="42.2" cy="47.6" r="2.6" />
                                    <circle cx="42.2" cy="32.6" r="2.6" />
                                    <circle cx="42.2" cy="17.6" r="2.6" />
                                    <circle cx="42.2" cy="2.6" r="2.6" />
                                    <circle cx="62" cy="92.6" r="2.6" />
                                    <circle cx="62" cy="77.6" r="2.6" />
                                    <circle cx="62" cy="62.6" r="2.6" />
                                    <circle cx="62" cy="47.6" r="2.6" />
                                    <circle cx="62" cy="32.6" r="2.6" />
                                    <circle cx="62" cy="17.6" r="2.6" />
                                    <circle cx="62" cy="2.6" r="2.6" />
                                    <circle cx="81.8" cy="92.6" r="2.6" />
                                    <circle cx="81.8" cy="77.6" r="2.6" />
                                    <circle cx="81.8" cy="62.6" r="2.6" />
                                    <circle cx="81.8" cy="47.6" r="2.6" />
                                    <circle cx="81.8" cy="32.6" r="2.6" />
                                    <circle cx="81.8" cy="17.6" r="2.6" />
                                    <circle cx="81.8" cy="2.6" r="2.6" />
                                    <circle cx="101.7" cy="92.6" r="2.6" />
                                    <circle cx="101.7" cy="77.6" r="2.6" />
                                    <circle cx="101.7" cy="62.6" r="2.6" />
                                    <circle cx="101.7" cy="47.6" r="2.6" />
                                    <circle cx="101.7" cy="32.6" r="2.6" />
                                    <circle cx="101.7" cy="17.6" r="2.6" />
                                    <circle cx="101.7" cy="2.6" r="2.6" />
                                </svg>
                            </figure>

                            <!-- Card header -->
                            <div class="card-header bg-light p-0 pb-3">
                                <h3 class="mb-0">Send us message</h3>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body p-0">
                                <form class="row g-4">
                                    <!-- Name -->
                                    <div class="col-md-6">
                                        <label class="form-label">Your name *</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <!-- Email -->
                                    <div class="col-md-6">
                                        <label class="form-label">Email address *</label>
                                        <input type="email" class="form-control">
                                    </div>
                                    <!-- Mobile number -->
                                    <div class="col-12">
                                        <label class="form-label">Mobile number *</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <!-- Message -->
                                    <div class="col-12">
                                        <label class="form-label">Message *</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                    <!-- Checkbox -->
                                    <div class="col-12 form-check ms-2">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">
                                            By submitting this form you agree to our terms and conditions.
                                        </label>
                                    </div>
                                    <!-- Button -->
                                    <div class="col-12">
                                        <button class="btn btn-dark mb-0" type="button">Send Message</button>
                                    </div>
                                </form>
                            </div>
                            <!-- Card body END -->
                        </div>
                    </div>
                    <!-- Contact form END -->
                </div>
            </div>
        </section>
        <!-- =======================
Contact form and vector END -->

        <!-- =======================
Map START -->
        <section class="pt-0 pt-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <iframe class="w-100 h-300px grayscale rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8137392917917!2d36.82194621480718!3d-1.2920658990666353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10d705c10fb3%3A0xe2fad409a8b9b606!2sNairobi%2C%20Kenya!5e0!3m2!1sen!2ske!4v1678279563258!5m2!1sen!2ske
                            " height="500" style="border:0;" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
Map END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- =======================
Footer START -->
    <footer class="bg-dark pt-5">
        <div class="container">
            <!-- Row START -->
            <div class="row g-4">

                <!-- Widget 1 START -->
                <div class="col-lg-3">
                    <!-- logo -->
                    <a href="index.html">
                        <img class="h-40px" src="assets/images/kiboko-logo.png" alt="logo">
                    </a>
                    <p class="my-3 text-muted">Kiboko Tours & Travel.</p>
                    <p class="mb-2"><a href="kibokotoursandtravel.com" class="text-muted text-primary-hover"><i
                                class="bi bi-telephone me-2"></i>+254 712 123 123</a> </p>
                    <p class="mb-0"><a href="mailto:info@kibokotoursandtravel.com"
                            class="text-muted text-primary-hover"><i
                                class="bi bi-envelope me-2"></i>info@kibokotoursandtravel.com</a></p>
                </div>
                <!-- Widget 1 END -->

                <!-- Widget 2 START -->
                <div class="col-lg-8 ms-auto">
                    <div class="row g-4">
                        <!-- Link block -->
                        <div class="col-6 col-md-3">
                            <h5 class="text-white mb-2 mb-md-4">Page</h5>
                            <ul class="nav flex-column text-primary-hover">
                                <li class="nav-item"><a class="nav-link text-muted" href="index.html">Home</a></li>
                                <li class="nav-item"><a class="nav-link text-muted" href="#">Safaris</a></li>
                                <li class="nav-item"><a class="nav-link text-muted" href="about-us.html">About us</a>
                                </li>
                                <li class="nav-item"><a class="nav-link text-muted" href="contact-us.html">Contact
                                        us</a></li>
                                <li class="nav-item"><a class="nav-link text-muted" href="blog.html">Blog</a></li>
                                <li class="nav-item"><a class="nav-link text-muted" href="quote.html">Quote</a></li>
                            </ul>
                        </div>

                        <!-- Link block -->
                        <div class="col-6 col-md-3">
                            <h5 class="text-white mb-2 mb-md-4">Link</h5>
                            <ul class="nav flex-column text-primary-hover">
                                <li class="nav-item"><a class="nav-link text-muted" href="login.html">Login</a></li>
                                <li class="nav-item"><a class="nav-link text-muted" href="login.html">Register</a></li>
                                <li class="nav-item"><a class="nav-link text-muted" href="#">Privacy Policy</a></li>
                                <li class="nav-item"><a class="nav-link text-muted" href="#">Terms</a></li>
                                <li class="nav-item"><a class="nav-link text-muted" href="#">Cookie</a></li>
                                <li class="nav-item"><a class="nav-link text-muted" href="#">Support</a></li>
                            </ul>
                        </div>

                        <!-- Link block -->
                        <div class="col-6 col-md-3">
                            <h5 class="text-white mb-2 mb-md-4">Safaris</h5>
                            <ul class="nav flex-column text-primary-hover">
                                <li class="nav-item"><a class="nav-link text-muted" href="classic-safaris.html">Classic
                                        Safaris</a></li>
                                <li class="nav-item"><a class="nav-link text-muted"
                                        href="accessible-safaris.html">Accessible Safaris</a></li>
                                <li class="nav-item"><a class="nav-link text-muted"
                                        href="family-couple-safaris.html">Family & Couple Safaris</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Link block -->
                        <div class="col-6 col-md-3">
                            <h5 class="text-white mb-2 mb-md-4">Extra Services</h5>
                            <ul class="nav flex-column text-primary-hover">
                                <li class="nav-item"><a class="nav-link text-muted" href="#"><i
                                            class="fa-solid fa-hotel me-2"></i>Hotel Booking</a></li>
                                <li class="nav-item"><a class="nav-link text-muted" href="#"><i
                                            class="fa-solid fa-plane me-2"></i>Flight Booking</a></li>
                                <li class="nav-item"><a class="nav-link text-muted" href="#"><i
                                            class="fa-solid fa-globe-americas me-2"></i>Personlized Tours</a></li>
                                <li class="nav-item"><a class="nav-link text-muted" href="#"><i
                                            class="fa-solid fa-car me-2"></i>Cabs Booking</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Widget 2 END -->

            </div><!-- Row END -->


            <!-- Payment and card -->
            <div class="row g-4 justify-content-between mt-0 mt-md-2">

                <!-- Payment card -->
                <div class="col-sm-7 col-md-6 col-lg-4">
                    <h5 class="text-white mb-2">Payment & Security</h5>
                    <ul class="list-inline mb-0 mt-3">
                        <li class="list-inline-item"> <a href="#"><img src="assets/images/element/paypal.svg"
                                    class="h-30px" alt=""></a></li>
                        <li class="list-inline-item"> <a href="#"><img src="assets/images/element/visa.svg"
                                    class="h-30px" alt=""></a></li>
                        <li class="list-inline-item"> <a href="#"><img src="assets/images/element/mastercard.svg"
                                    class="h-30px" alt=""></a></li>
                        <li class="list-inline-item"> <a href="#"><img src="assets/images/element/expresscard.svg"
                                    class="h-30px" alt=""></a></li>
                    </ul>
                </div>

                <!-- Social media icon -->
                <div class="col-sm-5 col-md-6 col-lg-3 text-sm-end">
                    <h5 class="text-white mb-2">Follow us on</h5>
                    <ul class="list-inline mb-0 mt-3">
                        <li class="list-inline-item"> <a class="btn btn-sm px-2 bg-facebook mb-0" href="#"><i
                                    class="fab fa-fw fa-facebook-f"></i></a> </li>
                        <li class="list-inline-item"> <a class="btn btn-sm shadow px-2 bg-instagram mb-0" href="#"><i
                                    class="fab fa-fw fa-instagram"></i></a> </li>
                        <li class="list-inline-item"> <a class="btn btn-sm shadow px-2 bg-twitter mb-0" href="#"><i
                                    class="fab fa-fw fa-twitter"></i></a> </li>
                        <li class="list-inline-item"> <a class="btn btn-sm shadow px-2 bg-linkedin mb-0" href="#"><i
                                    class="fab fa-fw fa-linkedin-in"></i></a> </li>
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
                                <li class="list-inline-item me-0"><a class="nav-link py-1 text-muted" href="#">Privacy
                                        policy</a></li>
                                <li class="list-inline-item me-0"><a class="nav-link py-1 text-muted" href="#">Terms and
                                        conditions</a></li>
                                <li class="list-inline-item me-0"><a class="nav-link py-1 text-muted pe-0"
                                        href="#">Refund policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- =======================
Footer END -->

    <!-- Back to top -->
    <div class="back-top"></div>

    <!-- Bootstrap JS -->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- ThemeFunctions -->
    <script src="assets/js/functions.js"></script>

</body>

<!-- Mirrored from booking.webestica.com/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Sep 2023 03:59:17 GMT -->

</html>