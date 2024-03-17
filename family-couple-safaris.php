<!DOCTYPE html>
<html lang="en">

<head>
    <title>Classic Safaris | Kiboko Tours & Travel</title>

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
Main Banner START -->
        <section class="pt-0">
            <div class="container">
                <!-- Background image -->
                <div class="p-3 p-sm-5 rounded-3"
                    style="background-image: url(assets/images/wildlife/wildebeasts.jpg); background-position: center center; background-repeat: no-repeat; background-size: cover;">
                    <!-- Banner title -->
                    <div class="row">
                        <div class="col-md-8 mx-auto my-5">
                            <h1 class="text-center text-dark">Family & Couple Safaris Safaris</h1>
                            <ul class="nav nav-divider h6 text-dark mb-0 justify-content-center">
                                <li class="nav-item">Safaris for every bond: Adventure tailored for couples and
                                    families.</li>
                            </ul>
                        </div>
                    </div>
                </div>



                <!-- Alert box START -->
                <div class="alert alert-danger d-flex align-items-center mt-5 rounded-3 mb-0" role="alert">
                    <span class="h4 mb-0 alert-heading"><i class="bi bi-exclamation-octagon-fill me-2"></i> </span>
                    <div class="ms-3">
                        <h6 class="mb-0 alert-heading">Hurry! 65% off the tours are already fully booked</h6>
                        <p class="mb-0">Many trips to various areas have been ordered, don't miss out!</p>
                    </div>
                </div>
                <!-- Alert box END -->

            </div>
        </section>
        <!-- =======================
Main Banner END -->

        <!-- =======================
Tour grid START -->
        <section class="pt-0">
            <div class="container">

                <!-- Filter and content START -->
                <div class="row g-4 align-items-center justify-content-between mb-4">
                    <!-- Content -->
                    <div class="col-12 col-xl-8">
                        <h5 class="mb-0">Showing 1-7 of 32 result</h5>
                    </div>

                    <!-- Select option -->
                    <div class="col-xl-2">
                        <form class="form-control-bg-light">
                            <select class="form-select js-choice">
                                <option value="">Most Viewed</option>
                                <option>Recently search</option>
                                <option>Most popular</option>
                                <option>Top rated</option>
                            </select>
                        </form>
                    </div>
                </div>
                <!-- Filter and content END -->

                <div class="row g-4">

                    <!-- Card item START -->
                    <div class="col-md-6 col-xl-4">
                        <div class="card card-hover-shadow pb-0 h-100">
                            <!-- Overlay item -->
                            <div class="position-relative">
                                <!-- Image -->
                                <img src="assets/images/fc/f1.jpg" class="card-img-top" alt="Card image">
                                <!-- Overlay -->
                                <div class="card-img-overlay d-flex flex-column p-4 z-index-1">
                                    <!-- Card overlay top -->
                                    <div>
                                        <span class="badge text-bg-danger">30% Off</span>
                                        <span class="badge text-bg-dark">Adventure</span>
                                    </div>
                                    <!-- Card overlay bottom -->
                                    <div class="w-100 mt-auto">
                                        <span class="badge text-bg-white fs-6">6 days / 5 nights</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Image -->

                            <!-- Card body START -->
                            <div class="card-body px-3">
                                <!-- Title -->
                                <h5 class="card-title mb-0"><a href="tour-detail.html" class="stretched-link">Exploring
                                        ways of growing rich together</a></h5>
                                <span class="small"><i class="far fa-calendar-alt me-2"></i>April 12-17</span>

                                <!-- List -->
                                <ul class="nav nav-divider mt-3 mb-0">
                                    <li class="nav-item h6 fw-normal mb-0">
                                        <i class="fa-solid fa-plane text-orange me-2"></i>1 Flight
                                    </li>
                                    <li class="nav-item h6 fw-normal mb-0">
                                        <i class="fa-solid fa-hotel text-info me-2"></i>1 Hotel
                                    </li>
                                    <li class="nav-item h6 fw-normal mb-0">
                                        <i class="fa-solid fa-person-skating text-danger me-2"></i>2 Activities
                                    </li>
                                </ul>
                            </div>
                            <!-- Card body END -->

                            <!-- Card footer START-->
                            <div class="card-footer pt-0">
                                <!-- Price and Button -->
                                <div class="d-sm-flex justify-content-sm-between align-items-center flex-wrap">
                                    <!-- Price -->
                                    <div class="hstack gap-2">
                                        <h5 class="fw-normal text-success mb-0">$1500</h5>
                                        <small>/per person</small>
                                        <span class="text-decoration-line-through">$1800</span>
                                    </div>
                                    <!-- Button -->
                                    <div class="mt-2 mt-sm-0">
                                        <a href="#" class="btn btn-sm btn-primary mb-0">View Details</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div class="col-md-6 col-xl-4">
                        <div class="card card-hover-shadow pb-0 h-100">
                            <!-- Overlay item -->
                            <div class="position-relative">
                                <!-- Image -->
                                <img src="assets/images/fc/f2.jpg" class="card-img-top" alt="Card image">
                                <!-- Overlay -->
                                <div class="card-img-overlay d-flex flex-column p-4 z-index-1">
                                    <!-- Card overlay top -->
                                    <div> <span class="badge text-bg-dark">Game Drive</span> </div>
                                    <!-- Card overlay bottom -->
                                    <div class="w-100 mt-auto">
                                        <!-- Card category -->
                                        <span class="badge text-bg-white fs-6">6 days / 5 nights</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Image -->

                            <!-- Card body START -->
                            <div class="card-body px-3">
                                <!-- Title -->
                                <h5 class="card-title mb-0"><a href="tour-detail.html" class="stretched-link">Learn
                                        parenting in an exciting way</a></h5>
                                <span class="small"><i class="far fa-calendar-alt me-2"></i>April 12-17</span>

                                <!-- List -->
                                <ul class="nav nav-divider mt-3 mb-0">
                                    <li class="nav-item h6 fw-normal mb-0">
                                        <i class="fa-solid fa-hotel text-info me-2"></i>1 Hotel
                                    </li>
                                    <li class="nav-item h6 fw-normal mb-0">
                                        <i class="fa-solid fa-person-skating text-danger me-2"></i>2 Activities
                                    </li>
                                </ul>
                            </div>
                            <!-- Card body END -->

                            <!-- Card footer START-->
                            <div class="card-footer pt-0">
                                <!-- Price and Button -->
                                <div class="d-sm-flex justify-content-sm-between align-items-center flex-wrap">
                                    <!-- Price -->
                                    <div class="hstack gap-2">
                                        <h5 class="fw-normal text-success mb-0">$800</h5>
                                        <small>/per person</small>
                                    </div>
                                    <!-- Button -->
                                    <div class="mt-2 mt-sm-0">
                                        <a href="#" class="btn btn-sm btn-primary mb-0">View Details</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div class="col-md-6 col-xl-4">
                        <div class="card card-hover-shadow pb-0 h-100">
                            <!-- Overlay item -->
                            <div class="position-relative">
                                <!-- Image -->
                                <img src="assets/images/fc/f3.jpg" class="card-img-top" alt="Card image">
                                <!-- Overlay -->
                                <div class="card-img-overlay d-flex flex-column p-4 z-index-1">
                                    <!-- Card overlay top -->
                                    <div> <span class="badge text-bg-dark">Aventure</span> </div>
                                    <!-- Card overlay bottom -->
                                    <div class="w-100 mt-auto">
                                        <!-- Card category -->
                                        <span class="badge text-bg-white fs-6">5 days / 4 nights</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Image -->

                            <!-- Card body START -->
                            <div class="card-body px-3">
                                <!-- Title -->
                                <h5 class="card-title mb-0"><a href="tour-detail.html" class="stretched-link">Keep
                                        discovering your spouse for healthy & enriching relationship</a></h5>
                                <span class="small"><i class="far fa-calendar-alt me-2"></i>April 22-28</span>

                                <!-- List -->
                                <ul class="nav nav-divider mt-3 mb-0">
                                    <li class="nav-item h6 fw-normal mb-0">
                                        <i class="fa-solid fa-plane text-orange me-2"></i>1 Flight
                                    </li>
                                    <li class="nav-item h6 fw-normal mb-0">
                                        <i class="fa-solid fa-hotel text-info me-2"></i>1 Hotel
                                    </li>
                                    <li class="nav-item h6 fw-normal mb-0">
                                        <i class="fa-solid fa-person-skating text-danger me-2"></i>2 Activities
                                    </li>
                                </ul>
                            </div>
                            <!-- Card body END -->

                            <!-- Card footer START-->
                            <div class="card-footer pt-0">
                                <!-- Price and Button -->
                                <div class="d-sm-flex justify-content-sm-between align-items-center flex-wrap">
                                    <!-- Price -->
                                    <div class="hstack gap-2">
                                        <h5 class="fw-normal text-success mb-0">$725</h5>
                                        <small>/per person</small>
                                    </div>
                                    <!-- Button -->
                                    <div class="mt-2 mt-sm-0">
                                        <a href="#" class="btn btn-sm btn-primary mb-0">View Details</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div class="col-md-6 col-xl-4">
                        <div class="card card-hover-shadow pb-0 h-100">
                            <!-- Overlay item -->
                            <div class="position-relative">
                                <!-- Image -->
                                <img src="assets/images/fc/f4.jpg" class="card-img-top" alt="Card image">
                                <!-- Overlay -->
                                <div class="card-img-overlay d-flex flex-column p-4 z-index-1">
                                    <!-- Card overlay top -->
                                    <div> <span class="badge text-bg-dark">Nature</span> </div>
                                    <!-- Card overlay bottom -->
                                    <div class="w-100 mt-auto">
                                        <!-- Card category -->
                                        <span class="badge text-bg-white fs-6">4 days / 3 nights</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Image -->

                            <!-- Card body START -->
                            <div class="card-body px-3">
                                <!-- Title -->
                                <h5 class="card-title mb-0"><a href="tour-detail.html" class="stretched-link">Lake
                                        Naivasha National
                                        Park</a></h5>
                                <span class="small"><i class="far fa-calendar-alt me-2"></i>April 22-28</span>

                                <!-- List -->
                                <ul class="nav nav-divider mt-3 mb-0">
                                    <li class="nav-item h6 fw-normal mb-0">
                                        <i class="fa-solid fa-hotel text-info me-2"></i>1 Hotel
                                    </li>
                                    <li class="nav-item h6 fw-normal mb-0">
                                        <i class="fa-solid fa-person-skating text-danger me-2"></i>2 Activities
                                    </li>
                                </ul>
                            </div>
                            <!-- Card body END -->

                            <!-- Card footer START-->
                            <div class="card-footer pt-0">
                                <!-- Price and Button -->
                                <div class="d-sm-flex justify-content-sm-between align-items-center flex-wrap">
                                    <!-- Price -->
                                    <div class="hstack gap-2">
                                        <h5 class="fw-normal text-success mb-0">$400</h5>
                                        <small>/per person</small>
                                    </div>
                                    <!-- Button -->
                                    <div class="mt-2 mt-sm-0">
                                        <a href="#" class="btn btn-sm btn-primary mb-0">View Details</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div class="col-md-6 col-xl-4">
                        <div class="card card-hover-shadow pb-0 h-100">
                            <!-- Overlay item -->
                            <div class="position-relative">
                                <!-- Image -->
                                <img src="assets/images/fc/f5.png" class="card-img-top" alt="Card image">
                                <!-- Overlay -->
                                <div class="card-img-overlay d-flex flex-column p-4 z-index-1">
                                    <!-- Card overlay top -->
                                    <div> <span class="badge text-bg-dark">Wildlife in the City</span> </div>
                                    <!-- Card overlay bottom -->
                                    <div class="w-100 mt-auto">
                                        <!-- Card category -->
                                        <span class="badge text-bg-white fs-6">5 days / 4 nights</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Image -->

                            <!-- Card body START -->
                            <div class="card-body px-3">
                                <!-- Title -->
                                <h5 class="card-title mb-0"><a href="tour-detail.html" class="stretched-link">Learn to
                                        fight in love</a></h5>
                                <span class="small"><i class="far fa-calendar-alt me-2"></i>May 02-06</span>

                                <!-- List -->
                                <ul class="nav nav-divider mt-3 mb-0">
                                    <li class="nav-item h6 fw-normal mb-0">
                                        <i class="fa-solid fa-plane text-orange me-2"></i>1 Flight
                                    </li>
                                    <li class="nav-item h6 fw-normal mb-0">
                                        <i class="fa-solid fa-hotel text-info me-2"></i>1 Hotel
                                    </li>
                                    <li class="nav-item h6 fw-normal mb-0">
                                        <i class="fa-solid fa-person-skating text-danger me-2"></i>2 Activities
                                    </li>
                                </ul>
                            </div>
                            <!-- Card body END -->

                            <!-- Card footer START-->
                            <div class="card-footer pt-0">
                                <!-- Price and Button -->
                                <div class="d-sm-flex justify-content-sm-between align-items-center flex-wrap">
                                    <!-- Price -->
                                    <div class="hstack gap-2">
                                        <h5 class="fw-normal text-success mb-0">$845</h5>
                                        <small>/per person</small>
                                    </div>
                                    <!-- Button -->
                                    <div class="mt-2 mt-sm-0">
                                        <a href="#" class="btn btn-sm btn-primary mb-0">View Details</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div class="col-md-6 col-xl-4">
                        <div class="card card-hover-shadow pb-0 h-100">
                            <!-- Overlay item -->
                            <div class="position-relative">
                                <!-- Image -->
                                <img src="assets/images/fc/f1.jpg" class="card-img-top" alt="Card image">
                                <!-- Overlay -->
                                <div class="card-img-overlay d-flex flex-column p-4 z-index-1">
                                    <!-- Card overlay top -->
                                    <div> <span class="badge text-bg-dark">Heritage</span> </div>
                                    <!-- Card overlay bottom -->
                                    <div class="w-100 mt-auto">
                                        <!-- Card category -->
                                        <span class="badge text-bg-white fs-6">6 days / 7 nights</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Image -->

                            <!-- Card body START -->
                            <div class="card-body px-3">
                                <!-- Title -->
                                <h5 class="card-title mb-0"><a href="tour-detail.html" class="stretched-link">Keep
                                        dating your spouse</a></h5>
                                <span class="small"><i class="far fa-calendar-alt me-2"></i>May 02-08</span>

                                <!-- List -->
                                <ul class="nav nav-divider mt-3 mb-0">
                                    <li class="nav-item h6 fw-normal mb-0">
                                        <i class="fa-solid fa-plane text-orange me-2"></i>1 Flight
                                    </li>
                                    <li class="nav-item h6 fw-normal mb-0">
                                        <i class="fa-solid fa-hotel text-info me-2"></i>1 Hotel
                                    </li>
                                    <li class="nav-item h6 fw-normal mb-0">
                                        <i class="fa-solid fa-person-skating text-danger me-2"></i>2 Activities
                                    </li>
                                </ul>
                            </div>
                            <!-- Card body END -->

                            <!-- Card footer START-->
                            <div class="card-footer pt-0">
                                <!-- Price and Button -->
                                <div class="d-sm-flex justify-content-sm-between align-items-center flex-wrap">
                                    <!-- Price -->
                                    <div class="hstack gap-2">
                                        <h5 class="fw-normal text-success mb-0">$1250</h5>
                                        <small>/per person</small>
                                    </div>
                                    <!-- Button -->
                                    <div class="mt-2 mt-sm-0">
                                        <a href="#" class="btn btn-sm btn-primary mb-0">View Details</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Card item END -->

                </div> <!-- Row END -->

                <!-- Pagination -->
                <div class="row">
                    <div class="col-12">
                        <nav class="mt-4 d-flex justify-content-center" aria-label="navigation">
                            <ul class="pagination pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                                <li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i
                                            class="fa-solid fa-angle-left"></i></a></li>
                                <li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
                                <li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item mb-0"><a class="page-link" href="#">..</a></li>
                                <li class="page-item mb-0"><a class="page-link" href="#">6</a></li>
                                <li class="page-item mb-0"><a class="page-link" href="#"><i
                                            class="fa-solid fa-angle-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
Tour grid END -->

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
                    <p class="mb-2"><a href="#" class="text-muted text-primary-hover"><i
                                class="bi bi-telephone me-2"></i>+254 712 123 123</a> </p>
                    <p class="mb-0"><a href="#" class="text-muted text-primary-hover"><i
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
                                <li class="nav-item"><a class="nav-link text-muted" href="#">Home</a></li>
                                <li class="nav-item"><a class="nav-link text-muted" href="#">Safaris</a></li>
                                <li class="nav-item"><a class="nav-link text-muted" href="#">About us</a></li>
                                <li class="nav-item"><a class="nav-link text-muted" href="#">Contact us</a></li>
                                <li class="nav-item"><a class="nav-link text-muted" href="#">Blog</a></li>
                                <li class="nav-item"><a class="nav-link text-muted" href="#">Quote</a></li>
                            </ul>
                        </div>

                        <!-- Link block -->
                        <div class="col-6 col-md-3">
                            <h5 class="text-white mb-2 mb-md-4">Link</h5>
                            <ul class="nav flex-column text-primary-hover">
                                <li class="nav-item"><a class="nav-link text-muted" href="#">Login</a></li>
                                <li class="nav-item"><a class="nav-link text-muted" href="#">Register</a></li>
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
                                <li class="nav-item"><a class="nav-link text-muted" href="#">Classic Safaris</a></li>
                                <li class="nav-item"><a class="nav-link text-muted" href="#">Accessible Safaris</a></li>
                                <li class="nav-item"><a class="nav-link text-muted" href="#">Family & Couple Safaris</a>
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

    <!-- Vendors -->
    <script src="assets/vendor/flatpickr/js/flatpickr.min.js"></script>
    <script src="assets/vendor/choices/js/choices.min.js"></script>
    <script src="assets/vendor/nouislider/nouislider.min.js"></script>

    <!-- ThemeFunctions -->
    <script src="assets/js/functions.js"></script>

</body>

<!-- Mirrored from booking.webestica.com/tour-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Sep 2023 03:56:47 GMT -->

</html>