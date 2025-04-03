<?php
require "includes/connect.php";

$actres = $conn->query("SELECT * FROM experience ORDER BY CASE WHEN priority = 0 THEN 1 ELSE 0 END, priority LIMIT 6");

$packres = $conn->query("SELECT * FROM package WHERE category_id = 3  AND package_status = 1 ORDER BY CASE WHEN priority = 0 THEN 1 ELSE 0 END, priority, package_id DESC LIMIT 4");

$destsres = $conn->query("SELECT * FROM destination ORDER BY CASE WHEN priority = 0 THEN 1 ELSE 0 END, priority, destination_views DESC LIMIT 8");

$blogres = $conn->query("SELECT * FROM blog WHERE blog_status='1' ORDER BY blog_id DESC LIMIT 3");

$cntryres = $conn->query("SELECT country.country_id, country.country_name, country.country_flag, country.country_image, country.country_short_description, COUNT(destination.destination_id) as destination_count 
                FROM country 
                LEFT JOIN destination ON country.country_id = destination.country_id 
                GROUP BY country.country_id 
                ORDER BY country.country_name ASC");
?>
<?php 
        $seo_title = "Safari Tours in East Africa | Kiboko Tours & Travel"; 
        $seo_desc = "Kiboko Tours and Travel offers safari tours, travel booking, hotel reservations, beach tours, and gorilla trekking in Kenya and beyond."; 

        $seo_img = "assets/images/kiboko.jpeg";
        $og_type = "website";
        $canonical = "";
        $robot = "index, follow";
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    

    <!-- Libraries, Favicon & CSS -->
    <?php include "includes/libs_fav.php"; ?>

    <style>
        /* Custom CSS for the Our Benefits Accordion */
        .accordion-button:not(.collapsed) {
            background-color: #fd7e14;
            color: #fff;
        }

        .link-light:hover {
            color: #fbb03b !important;
            text-decoration: none;
        }
    </style>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TravelAgency",
  "name": "Kiboko Tours and Travel",
  "url": "https://kibokotoursandtravel.com/",
  "logo": "https://kibokotoursandtravel.com/assets/images/kiboko-logo.png",
  "image": "https://kibokotoursandtravel.com/assets/images/kiboko.jpeg",
  "description": "Kiboko Tours and Travel specializes in safari tours, travel booking, hotel reservations, beach tours, and gorilla trekking in Kenya and beyond.",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Kabarnet Rd",
    "addressLocality": "Ngong",
    "addressRegion": "Nairobi",
    "postalCode": "00100",
    "addressCountry": "KE"
  },
  "telephone": "+254732962224",
  "email": "info@kibokotoursandtravel.com",
  "priceRange": "$65 - $20,000",
  "openingHours": "Mo-Fr 08:00-18:00",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+254732962224",
    "contactType": "customer service",
    "availableLanguage": ["English", "Swahili", "French", "Italian", "Spanish", "Portuguese"]
  },
  "sameAs": [
    "https://www.instagram.com/kiboko_tours/",
    "https://www.tripadvisor.com/Attraction_Review-g294207-d17206466-Reviews-KIBOKO_TOURS_AND_TRAVEL_LTD-Nairobi.html",
    "https://www.linkedin.com/company/kiboko-tours-and-travel/",
    "https://www.tiktok.com/@kibokotours"
  ],
  "areaServed": {
    "@type": "Country",
    "name": "Kenya"
  },
  "serviceProvided": [
    {
      "@type": "TouristInformationCenter",
      "name": "Safari Tours"
    },
    {
      "@type": "TravelAgency",
      "name": "Travel Booking"
    },
    {
      "@type": "LodgingBusiness",
      "name": "Hotel Reservations"
    },
    {
      "@type": "Beach",
      "name": "Beach Tours"
    },
    {
      "@type": "TravelAgency",
      "name": "Gorilla Trekking"
    }
  ]
}
</script>



</head>

<body>

    <!-- Header START -->
    <header class="header-transparent">

        <!-- Top alert START -->
        <div class="alert alert-warning py-2 m-0 bg-dark border-0 rounded-0 alert-dismissible fade show text-center overflow-hidden d-inline-flex justify-content-md-end justify-content-between w-100" role="alert">
            <!-- Google Translate Functionality -->
            <div class="d-block d-md-none" id="google_translate_element2"></div>
            <span>
                <span class="text-warning m-0" style="color: #ff8c00; margin-right: 5px;">
                    <a href="mailto:info@kibokotoursandtravel.com" class="link-light text-decoration-underline" style="color: #ff8c00;"><i class="fa fa-envelope"></i><span class="d-none d-md-inline"> &#105;&#110;&#102;&#111;&#064;&#107;&#105;&#098;&#111;&#107;&#111;&#116;&#111;&#117;&#114;&#115;&#097;&#110;&#100;&#116;&#114;&#097;&#118;&#101;&#108;&#046;&#099;&#111;&#109;</span></a>
                </span>
                <span class="ms-3">
                    <a href="https://api.whatsapp.com/send?phone=254732962224" target="_blank" class="link-success text-decoration-underline"><i class="bi bi-whatsapp"></i><span class="d-none d-md-inline"> Whatsapp: +254 732 962224</span></a>
                </span>

                <span class="ms-3">
                    <a href="#" target="_blank" class="link-light text-decoration-underline" style="color: #0088cc;"><i class="bi bi-wechat"></i><span class="d-none d-md-inline"> WeChat: +254788050783</span></a>
                </span>
            </span>
        </div>


        <!-- Logo Nav START -->
        <nav class="navbar navbar-dark navbar-expand-xl">
            <div class="container-fluid px-md-5">
                <!-- Logo START -->
                <a class="navbar-brand pt-2" href="index.php">
                    <img class="navbar-brand-item d-none d-md-block" src="assets/images/kiboko-logo.png" alt="logo" style="width:100px; height:auto;" loading="lazy">
                    <img class="navbar-brand-item d-block d-md-none" src="assets/images/kiboko-logo.png" alt="logo" style="width:80px; height:auto;" loading="lazy">
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

                                    <li class="nav-item"> <a href="faq.php" class="nav-link small pb-2" style="color: white; font-weight: bold"><i
                                                class="bi bi-info-circle me-2" style="color: white; font-weight: bold"></i>Help</a> </li>
                                    <li class="nav-item"> <a href="sign-in.php" class="nav-link small pb-2" style="color: white; font-weight: bold"><i
                                                class="far fa-user me-2" style="color: white; font-weight: bold"></i>B2B Login</a> </li>
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
                                        <?php
                                        // Fetch all countries
                                        $country_query = "SELECT * FROM country";
                                        $country_res = $conn->query($country_query);
                                        ?>

                                        <li class="nav-item dropdown dropdown-fullwidth">
                                            <a class="nav-link dropdown-toggle active fw-bold" href="#" id="hotelMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">DISCOVER EAST AFRICA</a>
                                            <div class="dropdown-menu" aria-labelledby="hotelMenu">
                                                <div class="container">
                                                    <div class="row g-4 justify-content-between p-lg-3">
                                                        <!-- Destination -->
                                                        <div class="col-lg-5">
                                                            <h6 class="mb-3"><a href="destinations.php"><i class="bi bi-pin-map-fill text-warning me-2"></i>Destinations</a></h6>
                                                            <hr class="my-2">
                                                            <div class="row">
                                                                <?php
                                                                while ($destination_country = $country_res->fetch_assoc()) {
                                                                    // Fetch destinations for this country
                                                                    $destinations_query = "SELECT * FROM destination WHERE country_id = ? ORDER BY CASE WHEN priority = 0 THEN 1 ELSE 0 END, priority LIMIT 5";
                                                                    $dest_stmt = $conn->prepare($destinations_query);
                                                                    $dest_stmt->bind_param("i", $destination_country['country_id']);
                                                                    $dest_stmt->execute();
                                                                    $dest_result = $dest_stmt->get_result();
                                                                ?>
                                                                    <div class="col-lg-6">
                                                                        <h6 class="dropdown-header"><?php echo htmlspecialchars($destination_country['country_name']); ?></h6>
                                                                        <ul class="list-unstyled">
                                                                            <?php if ($dest_result->num_rows > 0) {
                                                                                while ($destination = $dest_result->fetch_assoc()) { ?>
                                                                                    <li>
                                                                                        <a class="dropdown-item" href="destinations-details.php?id=<?php echo $destination['destination_id']; ?>&slug=<?php echo $destination['destination_slag']; ?>">
                                                                                            <?php echo htmlspecialchars($destination['destination_name']); ?>
                                                                                        </a>
                                                                                    </li>
                                                                                <?php }
                                                                            } else { ?>
                                                                                <li>
                                                                                    <div class="dropdown-item text-muted">No destinations available</div>
                                                                                </li>
                                                                            <?php } ?>
                                                                        </ul>
                                                                    </div>
                                                                <?php } ?>
                                                            </div>
                                                        </div>

                                                        <!-- Activities -->
                                                        <div class="col-lg-3">
                                                            <h6 class="mb-3"><i class="bi bi-list-ul text-warning me-2"></i>Activities</h6>
                                                            <hr class="my-2">
                                                            <ul class="list-unstyled">
                                                                <?php while ($navactsrow = $navactres->fetch_assoc()) { ?>
                                                                    <li>
                                                                        <a class="dropdown-item" href="experience-details.php?id=<?php echo $navactsrow['experience_id']; ?>&slug=<?php echo $navactsrow['experience_slag']; ?>">
                                                                            <?php echo htmlspecialchars($navactsrow['experience_name']); ?>
                                                                        </a>
                                                                    </li>
                                                                <?php } ?>
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
                                                            <div class="card overflow-hidden" style="background-image:url(assets/images/footer-bg.jpg); background-position: center left; background-size: cover;">
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
                                                        <?php
                                                        $yrnow = date('Y');
                                                        while ($row = $yearsofpack->fetch_assoc()) {

                                                            if ($yrnow > $row['year']) {
                                                                continue;
                                                            }
                                                        ?>
                                                            <li> <a class="dropdown-item" href="classic-safaris.php?year=<?php echo $row['year']; ?>&<?php echo $row['year']; ?>-Safaris"><?php echo $row['year']; ?> Safaris</a></li>
                                                        <?php } ?>
                                                    </ul>
                                                </li>

                                                <li class="dropdown-submenu dropend">
                                                    <a class="dropdown-item" href="accessible-safaris.php">
                                                        Accessible Safaris <i
                                                            class="fas fa-chevron-right align-icon-right"></i>
                                                    </a>
                                                    <ul class="dropdown-menu" data-bs-popper="none">
                                                        <?php while ($row = $navaccpack->fetch_assoc()) { ?>
                                                            <li> <a class="dropdown-item" href="package-details.php?id=<?php echo $row['package_id']; ?>&<?php echo $row['title_slag']; ?>"><?php echo $row['title']; ?></a></li>
                                                        <?php } ?>
                                                    </ul>
                                                </li>

                                                <li class="dropdown-submenu dropend">
                                                    <a class="dropdown-item" href="family-couple-safaris.php">
                                                        Family & Couple <i
                                                            class="fas fa-chevron-right align-icon-right"></i>
                                                    </a>
                                                    <ul class="dropdown-menu" data-bs-popper="none">
                                                        <?php while ($row = $navfampack->fetch_assoc()) { ?>
                                                            <li> <a class="dropdown-item" href="package-details.php?id=<?php echo $row['package_id']; ?>&<?php echo $row['title_slag']; ?>"><?php echo $row['title']; ?></a></li>
                                                        <?php } ?>

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

    <!-- **************** MAIN CONTENT START **************** -->
    <main>


        <!-- =======================
Main banner START -->
        <section class="position-relative py-8 py-sm-9">
            <video autoplay loop muted playsinline
                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: -1;">
                <source src="assets/video/wildlife.mp4" type="video/mp4">
                Your browser does not support the HTML5 video tag.
            </video>
            <div class="bg-overlay bg-dark opacity-2"></div>
            <div class="container z-index-9 position-relative">
                <div class="row">
                    <div class="col-xl-8 m-auto text-center pt-7">
                        <h1 class="display-4 text-white mb-3">Experience East Africa's Natural Wonders</h1>
                        <h5 class="text-white mb-3">Book your adventure with East Africa's Best Tour Operator!</h5>
                        <a href="contact-us.php#quote" class="btn btn-lg btn-primary mb-0">Request a Free Quote Today!</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 text-end" style="position: absolute; bottom: 0; right: 0;">
                    <p class="text-white mb-0">Video by <a href="https://youtu.be/kjLwGjSd4qQ" target="_blank" rel="noopener noreferrer" style="color: orange;">Flysabunch</a></p>
                </div>
            </div>
        </section>
        <!-- =======================
Main banner END -->


        <!-- =======================
About START -->
        <section class="pt-5 pt-md-8 pb-0">
            <div class="container z-index-9">
                <div class="row">
                    <div class="col-lg-10 m-auto text-center">
                        <h2>Come Visit East Africa with Us!</h2>
                        <p class="lead"><span class="text-primary-kiboko fw-bold">Kiboko Tours and Travel</span> is a Kenyan company specializing in celebrating life through unique travel experiences. Our aim is to bring together individuals from diverse backgrounds, cultures, and abilities. We specialize in disability travel services, providing tailored experiences that are spiritually enriching and often transformative.</p>

                        <!-- List -->
                        <ul class="list-inline hstack gap-4 flex-wrap justify-content-center mt-4">
                            <li class="list-inline-item">
                                <h5 class="mb-0 fw-normal"><i class="bi bi-person fa-fw text-warning me-1"></i>Excellent Service</h5>
                            </li>
                            <li class="list-inline-item">
                                <h5 class="mb-0 fw-normal"><i class="bi bi-pin-map fa-fw text-warning me-1"></i>Best Destinations</h5>
                            </li>
                            <li>
                                <div class="d-flex justify-content-center align-items-center text-start me-0 me-sm-4">
                                    <h3 class="me-2 mb-0">4.8</h3>
                                    <div>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
                                        </ul>
                                        <p class="mb-0 small">Clients Love Us!</p>
                                    </div>
                            </li>
                        </ul>

                        <!-- About Us Btn -->
                        <div class="d-flex justify-content-center align-items-center text-start me-0 me-sm-4">
                            <!-- Button -->
                            <br>
                            <div> <a href="classic-safaris.php" class="btn btn-lg btn-outline-primary mb-0">Book your Trip Now!</a> </div>
                        </div>

                    </div>
                </div> <!-- Row END -->
            </div>
        </section>
        <!-- =======================
About END -->


        <!-- =======================
Country Destinations START -->

        <section class="pb-0">
            <div class="container">
                <!-- Title -->
                <div class="row mb-4">
                    <div class="col-12 text-center">
                        <h3 class="mb-0">Explore Top Destinations by Country</h3>
                    </div>
                </div>

                <!-- Slider START -->
                <div class="tiny-slider arrow-round arrow-blur arrow-hover">
                    <div class="tiny-slider-inner mb-8" data-autoplay="true" data-arrow="true" data-edge="2" data-dots="false" data-items-xl="3" data-items-lg="3" data-items-md="2" data-items-sm="1">

                        <?php
                        while ($row = $cntryres->fetch_assoc()) {
                        ?>
                            <!-- Country card START -->
                            <div>
                                <div class="card">
                                    <img src="./uploads/<?php echo htmlspecialchars($row['country_image']); ?>" class="card-img" alt="<?php echo htmlspecialchars($row['country_name']); ?>" loading="lazy">
                                    <!-- Card body -->
                                    <div class="position-absolute top-100 start-50 translate-middle w-100">
                                        <div class="card-body text-center bg-mode shadow rounded mx-4 p-3">
                                            <h6 class="card-title mb-1"><a href="country.php?name=<?php echo urlencode($row['country_name']); ?>"><?php echo htmlspecialchars($row['country_name']); ?></a></h6>
                                            <small><?php echo htmlspecialchars($row['country_short_description']); ?></small>
                                            <div class="mt-2"><?php echo htmlspecialchars($row['destination_count']); ?> Destinations Available</div>
                                            <div class="mt-2"><a href="country.php?name=<?php echo urlencode($row['country_name']); ?>" class="btn btn-sm btn-primary mb-0">View Destinations</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Country card END -->
                        <?php
                        }
                        ?>

                    </div>
                </div>
                <!-- Slider END -->

            </div>
        </section>
        <!-- =======================
Country Destinations END -->



        <!-- =======================
Offers START -->
        <section class="pt-5 pt-md-8 pb-0">
            <div class="container-fluid px-lg-5">
                <!-- Title -->
                <div class="row mb-4">
                    <div class="col-12 text-center">
                        <h2>Some of the activities you'll enjoy...</h2>
                    </div>
                </div>

                <div class="row g-4">
                    <!-- Offer item -->
                    <?php while ($actrow = $actres->fetch_assoc()) { ?>
                        <div class="col-6 col-md-4 col-xl-2">
                            <div class="card bg-transparent h-100">
                                <img src="uploads/<?php echo $actrow['experience_image']; ?>" class="card-img" alt="<?php echo $actrow['experience_name']; ?>" loading="lazy">
                                <div class="card-body text-center p-2">
                                    <h6 class="mb-0"><a href="experience-details.php?id=<?php echo $actrow['experience_id']; ?>&<?php echo $actrow['experience_slag']; ?>" class="stretched-link"><?php echo $actrow['experience_name']; ?></a></h6>
                                    <p><?php echo substr($actrow['description'], 0, 35); ?>...</p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>



                </div>
            </div>
        </section>
        <!-- =======================
Offers END -->

        <!-- =======================
Featured Packages START -->
        <section>
            <div class="container">

                <!-- Title -->
                <div class="row mb-4">
                    <div class="col-12 text-center">
                        <h2 class="mb-0">Our Top Packages</h2>
                    </div>
                </div>

                <div class="row g-4">


                    <?php while ($row = $packres->fetch_assoc()) { ?>
                        <!-- Package item -->
                        <div class="col-sm-6 col-xl-3 shadow">
                            <!-- Card START -->
                            <div class="card card-img-scale overflow-hidden bg-transparent rounded-3">
                                <!-- Image and overlay -->
                                <div class="card-img-scale-wrapper rounded-3">
                                    <!-- Image -->
                                    <img src="uploads/<?php echo $row['package_image']; ?>" loading="lazy" class="card-img mt-1" alt="<?php echo $row['title'];?>">
                                    <!-- Badge -->
                                    <div class="position-absolute bottom-0 start-0 p-3">
                                        <div class="badge text-bg-dark fs-6 rounded-pill stretched-link"><i
                                                class="bi bi-geo-alt me-2"></i>Kenya</div>
                                    </div>
                                </div>

                                <!-- Card body -->
                                <div class="card-body px-2">
                                    <!-- Title -->
                                    <h6 class="card-title"><a href="package-details.php?id=<?php echo $row['package_id']; ?>&<?php echo $row['title_slag']; ?>" class="stretched-link"><?php echo $row['title']; ?></a></h6>
                                    <!-- Price and rating -->
                                    <p><small><?php echo $row['subtitle']; ?></small></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="text-success mb-0"><?php echo $row['currency']; ?> <?php echo number_format($row['price']); ?>
                                        </h5>
                                        <h6 class="mb-0">4.8<i class="fa-solid fa-star text-warning ms-1"></i></h6>
                                    </div>
                                    <div class="pt-3">
                                        <a class="btn btn-primary btn-sm">Book Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card END -->
                        </div>

                    <?php } ?>


                    <div class="d-flex justify-content-center align-items-center text-start me-0 me-sm-4">
                        <!-- Button -->
                        <br>
                        <div> <a href="classic-safaris.php" class="btn btn-lg btn-outline-primary mb-0">View all Packages!</a> </div>
                    </div>



                </div> <!-- Row END -->
            </div>
        </section>
        <!-- =======================
Featured Packages END -->


        <!-- =======================
Accreitations START -->
        <section class="py-0 py-md-5">
            <div class="container">

                <!-- Title -->
                <div class="row mb-4">
                    <div class="col-12 text-center">
                        <h2 class="mb-0">Memberships & Accreditations</h2>
                    </div>
                </div>

                <div class="row g-4 g-lg-7 justify-content-center align-items-center">
                    <!-- Image -->
                    <div class="col-5 col-sm-3 col-xl-2">
                        <a href="https://atta.travel/organisation/kiboko-tours-and-travel-ltd.html"><img src="assets/images/client/ATTA.jpeg" class="grayscale" loading="lazy" alt="African Travel and Tourism membership"></a>
                    </div>
                    <!-- Image -->
                    <div class="col-5 col-sm-3 col-xl-2">
                        <img src="assets/images/client/ECO2.jpg" class="grayscale" loading="lazy" alt="eco tourism membership">
                    </div>
                    <!-- Image -->
                    <div class="col-5 col-sm-3 col-xl-2">
                        <img src="assets/images/client/KAT.jpg" class="grayscale" loading="lazy" alt="KATO Membership">
                    </div>
                    <!-- Image -->
                    <div class="col-5 col-sm-3 col-xl-2">
                        <img src="assets/images/client/MK.jpeg" class="grayscale" loading="lazy" alt="Magical kenya">
                    </div>
                    <!-- Image -->
                    <div class="col-5 col-sm-3 col-xl-2">
                        <img src="assets/images/client/TRA.png" class="grayscale" loading="lazy" alt="Tourism Regulatory Authority logo">
                    </div>
                    <!-- Image -->
                    <div class="col-5 col-sm-3 col-xl-2">
                        <img src="assets/images/client/tosk-cert.jpg" loading="lazy" class="grayscale" alt="TOSK Certificate">
                    </div>
                </div>

                <div style="display: flex; justify-content: center; gap: 20px;">
                    <!-- Safari Bookings Widget -->
                    <div style="display: inline-block; padding: 0 10px 5px 0;" class="grayscale"><span class="94c5245077111">&nbsp;</span></div>

                    <!--TripAdvisor Widget -->
                    <div class="grayscale">
                        <a class="widFRRClickWrap" target="_blank" href="https://www.tripadvisor.com/Attraction_Review-g294207-d17206466-Reviews-KIBOKO_TOURS_AND_TRAVEL_LTD-Nairobi.html" onclick="ta.cds.handleTALink(11424,this);return true;"></a>

                        <div class="col medium-6 small-12 large-6">
                            <div class="col-inner">

                                <div id="TA_rated511" class="TA_rated">
                                    <ul id="XilmmB" class="TA_links z8ISMh6">
                                        <li id="4HFiYkWs7c7" class="ZFKcSEurPD4"><a target="_blank" href="https://www.tripadvisor.com/Attraction_Review-g294207-d17206466-Reviews-KIBOKO_TOURS_AND_TRAVEL_LTD-Nairobi.html" rel="noopener"><img src="https://www.tripadvisor.com/img/cdsi/img2/badges/ollie-11424-2.gif" loading="lazy" alt="Our reviews on TripAdvisor" /></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- =======================
Accreitations END -->

        <!-- =======================
Main Banner START -->
        <section class="pt-8 pt-md-5">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-7">
                        <!-- Title -->
                        <h2 class="h1 mb-4 display-5">Experience a Wildlife Tour of a <span class="text-bg-warning">Lifetime!</span></h2>
                        <!-- Info -->
                        <p class="mb-4">Life is all about adventure and enjoying what nature has to offer!</p>
                        <!-- Button -->
                        <a href="classic-safaris.php" class="btn btn-primary mb-4">Book a Package Now! <i class="fa-solid fa-arrow-right-long fa-fw"></i></a>
                    </div>
                    <!-- Image -->
                    <div class="col-lg-5 text-center">
                        <img src="assets/images/element/wild.svg" loading="lazy" alt="wild nature animals">
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
Main Banner END -->


        <!-- =======================
Our Benefits START -->

        <section class="pt-8 pt-md-5">

            <div class="container">

                <!-- Title -->
                <div class="row mb-4">
                    <div class="col-sm-8 text-center mx-auto">
                        <h2>Our Benefits</h2>
                    </div>
                </div>

                <!-- Accordion -->
                <div class="accordion col-sm-8 mx-auto" id="accordionOurBenefits">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <b>1. Our tours are tailored specifically to our guests’ requirements</b>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionOurBenefits">
                            <div class="accordion-body" style="color: black;">
                                All tours and packages are custom-made to meet the specific travel needs of each of our guests to make travel as easy, practical, and enjoyable as possible. We cover everything from custom food options to individualized activities, amending our inclusions and programs accordingly. </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <b>2. We are a team of specialists</b>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionOurBenefits">
                            <div class="accordion-body" style="color: black;">
                                Our team is made up of passionate and experienced professionals. We are skilled and knowledgeable in therapeutic travel and are experts in our fields. As well as offering tours, we are committed to educating our local communities on disability to make travel more accessible for all. </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <b>3. We provide ongoing support</b>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionOurBenefits">
                            <div class="accordion-body" style="color: black;">
                                We provide our guests with all the support they could need from the point of inquiry, through to their travel home. All group tours are accompanied by a trained Therapist or Special Assistant for assistance, help, and leadership. </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <b>4. We have medical attention on hand</b>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionOurBenefits">
                            <div class="accordion-body" style="color: black;">
                                All tours include air & ground emergency medical evacuation in the unlikely event additional medical attention is required at any point during the tour. You can travel safely in the knowledge that you will always be looked after. </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <b>5. We handpick our partners</b>
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionOurBenefits">
                            <div class="accordion-body" style="color: black;">
                                All accommodation facilities are pre-selected and audited for accessibility. We never take our guests anywhere we haven’t been ourselves to check its suitability and we work with our partners in advance to ensure they understand what adjustments may be required. </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>

        <!-- =======================
Our Benefits END -->


        <!-- =======================
Experience START -->
        <section class="pt-5 pt-md-8 pb-0">
            <div class="container-fluid px-lg-5">
                <!-- Title -->
                <div class="row mb-4">
                    <div class="col-12 text-center">
                        <h2>Explore our Best Destinations</h2>
                    </div>
                </div>

                <!-- Slider START -->
                <div class="tiny-slider arrow-round arrow-blur rounded-3 overflow-hidden">
                    <div class="tiny-slider-inner" data-autoplay="true" data-arrow="true" data-dots="false" data-items-xl="4" data-items-lg="3" data-items-md="2" data-items-xs="1">
                        <?php while ($row = $destsres->fetch_assoc()) { ?>
                            <!-- Card item START -->
                            <div>
                                <div class="card card-metro overflow-hidden">
                                    <img src="uploads/<?php echo $row['destination_image']; ?>"  loading="lazy" alt="<?php echo $row['destination_name']; ?>">
                                    <!-- Image overlay -->
                                    <div class="card-img-overlay d-flex">
                                        <!-- Info -->
                                        <div class="card-text mt-auto">
                                            <h4><a href="destinations-details.php?id=<?php echo $row['destination_id']; ?>&<?php echo $row['destination_slag']; ?>" class="text-white stretched-link"><?php echo $row['destination_name']; ?></a></h4>
                                            <p class="text-white mb-2"><?php echo $row['catchy_title']; ?></p>
                                            <button class="btn btn-link link-primary p-0 mb-0">Explore now <i class="fa-solid fa-arrow-right-long fa-fw"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->
                        <?php } ?>


                    </div>
                </div>
                <!-- About Us Btn -->
                <div class="d-flex justify-content-center align-items-center text-start me-0 me-sm-4 mt-5">
                    <!-- Button -->
                    <br>
                    <div> <a href="destinations.php" class="btn btn-lg btn-outline-primary mb-0">See all Destinations!</a> </div>
                </div>
            </div>
        </section>
        <!-- =======================
Experience END -->

        <br>
        <br>

        <!-- =======================
Blog grid START -->
        <section class="pt-0 pt-sm-5">
            <div class="container">

                <!-- Title -->
                <div class="row mb-4">
                    <div class="col-12 text-center">
                        <h2 class="mb-0">Our Blogs</h2>
                    </div>
                </div>

                <!-- Blog grid -->
                <div class="row g-4">

                    <?php while ($blogrow = $blogres->fetch_assoc()) { ?>
                        <!-- Blog item START -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card bg-transparent">
                                <!-- Image -->
                                <div class="position-relative">
                                    <img src="uploads/<?php echo $blogrow['blog_image']; ?>" class="card-img" alt="<?php echo $blogrow['blog_title']; ?>" loading="lazy">
                                    <!-- Badge -->
                                    <div class="card-img-overlay p-3">
                                        <a href="blog-detail.php?id=<?php echo $blogrow['blog_id']; ?>&<?php echo $blogrow['blog_slag']; ?>" class="badge text-bg-<?php echo $blogrow['blog_category_color']; ?> mb-2"><?php echo $blogrow['blog_category']; ?></a>
                                    </div>
                                </div>

                                <!-- Card body -->
                                <div class="card-body p-3 pb-0">
                                    <!-- Title -->
                                    <h5 class="card-title mt-2"><a href="blog-detail.php?id=<?php echo $blogrow['blog_id']; ?>&<?php echo $blogrow['blog_slag']; ?>"><?php echo $blogrow['blog_title']; ?></a></h5>
                                    <h6 class="fw-light mb-0"><?php echo date('M d Y ', strtotime($blogrow['date_created'])); ?></h6>
                                </div>
                            </div>
                        </div>
                        <!-- Blog item END -->
                    <?php } ?>

                </div>

                <!-- Buttons -->
                <div class="text-center mt-4">
                    <a href="blog.php" class="btn btn-primary mb-0">Check Out Our Blogs Now<i class="fas fa-newspaper ms-2"></i></a>
                </div>
            </div>
        </section>
        <!-- =======================
Blog grid END -->

        <!-- =======================
Gallery START -->
        <section>
            <div class="container-fluid">
                <!-- Title -->
                <div class="row mb-md-4">
                    <div class="col-12 mx-auto text-center mb-4">
                        <h2 class="mb-0">Some of the Views You'll Get to Experience</h2>
                    </div>
                </div>

                <!-- Slider START -->
                <div class="tiny-slider arrow-round arrow-blur arrow-hover rounded-3 overflow-hidden">
                    <div class="tiny-slider-inner d-flex align-items-end" data-autoplay="true" data-edge="2"
                        data-arrow="true" data-dots="false" data-items="6" data-items-lg="4" data-items-sm="2">
                        <!-- Slider item 1 -->
                        <div>
                            <a data-glightbox="" data-gallery="gallery" href="assets/images/Small_400x400/birds.png">
                                <div class="card card-element-hover card-overlay-hover overflow-hidden">
                                    <!-- Image -->
                                    <img src="assets/images/Small_400x400/birds.png" class="rounded-3" alt="birds" loading="lazy">
                                    <!-- Full screen button -->
                                    <div class="hover-element w-100 h-100">
                                        <i
                                            class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Slider item 2 -->
                        <div>
                            <a data-glightbox="" data-gallery="gallery" href="assets/images/Small_400x400/cheetahs.jpg">
                                <div class="card card-element-hover card-overlay-hover overflow-hidden">
                                    <!-- Image -->
                                    <img src="assets/images/Small_400x400/cheetahs.jpg" class="rounded-3" alt="cheetahs" loading="lazy">
                                    <!-- Full screen button -->
                                    <div class="hover-element w-100 h-100">
                                        <i
                                            class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Slider item 3 -->
                        <div>
                            <a data-glightbox="" data-gallery="gallery" href="assets/images/Small_400x400/gazelles.jpg">
                                <div class="card card-element-hover card-overlay-hover overflow-hidden">
                                    <!-- Image -->
                                    <img src="assets/images/Small_400x400/gazelles.jpg" class="rounded-3" alt="gazelles" loading="lazy">
                                    <!-- Full screen button -->
                                    <div class="hover-element w-100 h-100">
                                        <i
                                            class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Slider item 4 -->
                        <div>
                            <a data-glightbox="" data-gallery="gallery" href="assets/images/Small_400x400/cheetahs-2.png">
                                <div class="card card-element-hover card-overlay-hover overflow-hidden">
                                    <!-- Image -->
                                    <img src="assets/images/Small_400x400/cheetahs-2.png" class="rounded-3" alt="cheetahs" loading="lazy">
                                    <!-- Full screen button -->
                                    <div class="hover-element w-100 h-100">
                                        <i
                                            class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Slider item 5 -->
                        <div>
                            <a data-glightbox="" data-gallery="gallery" href="assets/images/Small_400x400/zebras.jpg">
                                <div class="card card-element-hover card-overlay-hover overflow-hidden">
                                    <!-- Image -->
                                    <img src="assets/images/Small_400x400/zebras.jpg" class="rounded-3" loading="lazy" alt="zebras">
                                    <!-- Full screen button -->
                                    <div class="hover-element w-100 h-100">
                                        <i
                                            class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Slider item 6 -->
                        <div>
                            <a data-glightbox="" data-gallery="gallery" href="assets/images/Small_400x400/lion.png">
                                <div class="card card-element-hover card-overlay-hover overflow-hidden">
                                    <!-- Image -->
                                    <img src="assets/images/Small_400x400/lion.png" class="rounded-3" loading="lazy" alt="lion">
                                    <!-- Full screen button -->
                                    <div class="hover-element w-100 h-100">
                                        <i
                                            class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Slider item 7 -->
                        <div>
                            <a data-glightbox="" data-gallery="gallery" href="assets/images/Small_400x400/rhinos.jpg">
                                <div class="card card-element-hover card-overlay-hover overflow-hidden">
                                    <!-- Image -->
                                    <img src="assets/images/Small_400x400/rhinos.jpg" class="rounded-3" loading="lazy" alt="rhinos">
                                    <!-- Full screen button -->
                                    <div class="hover-element w-100 h-100">
                                        <i
                                            class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Slider item 8 -->
                        <div>
                            <a data-glightbox="" data-gallery="gallery" href="assets/images/Small_400x400/wildebeasts.jpg">
                                <div class="card card-element-hover card-overlay-hover overflow-hidden">
                                    <!-- Image -->
                                    <img src="assets/images/Small_400x400/wildebeasts.jpg" class="rounded-3" loading="lazy" alt="wildebeasts running">
                                    <!-- Full screen button -->
                                    <div class="hover-element w-100 h-100">
                                        <i
                                            class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Slider END	 -->
            </div>
        </section>
        <!-- =======================
Gallery END -->


    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- Footer START -->
    <?php include "includes/footer.php"; ?>
    <!-- Footer END -->

    <!-- Safari Bookings Widget Script -->
    <script type="text/javascript">
        (function() {
            var sb = document.createElement('script');
            sb.type = 'text/javascript';
            sb.async = true;
            sb.src = 'https://s3.amazonaws.com/z_437er23a/dca450748.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(sb, s);
        })();
    </script>


    <!-- TripAdvisor Widget Script -->
    <script async src="https://www.jscache.com/wejs?wtype=rated&amp;uniq=511&amp;locationId=17206466&amp;lang=en_US&amp;display_version=2" data-loadtrk onload="this.loadtrk=true"></script>


    <!-- Google Translate Functionality -->
    <script src="script.js"></script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                    pageLanguage: 'en'
                },
                'google_translate_element'
            );
        }
    </script>

</body>


</html>