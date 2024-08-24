<?php
require "includes/connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kenya | Kiboko Tours & Travel</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="GNM">
    <meta name="description" content="Explore the best of Kenya with Kiboko Tours & Travel">

    <!-- Libraries, Favicon & CSS -->
    <?php include "includes/libs_fav.php"; ?>
</head>

<body>
    <!-- Header START -->
    <?php include "includes/header_navbar.php"; ?>
    <!-- Header END -->

    <main>

        <!-- =======================
Main Banner START -->
        <section class="py-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-11 mx-auto">
                        <!-- Banner Image START -->
                        <div class="card overflow-hidden h-400px h-sm-600px rounded-0" style="background-image:url(assets/images/Small_400x400/lion.png); background-position: center center; background-size: cover;">
                            <!-- Background dark overlay -->
                            <div class="bg-overlay bg-dark opacity-3"></div>
                            <!-- Card image overlay -->
                            <div class="card-img-overlay d-flex align-items-center">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-11 col-lg-7">
                                            <!-- Title -->
                                            <h1 class="text-white display-6">Discover the Wild Beauty of Kenya</h1>
                                            <p class="text-white mb-4">From the iconic savannas to the majestic mountains, Kenya offers an unparalleled travel experience.</p>
                                            <a href="contact-us.php#quote" class="btn btn-primary mb-0">Plan Your Safari Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Banner Image END -->
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
Main Banner END -->

        <!-- =======================
About Kenya START -->
        <section class="pt-4 pt-md-5">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-7">
                        <!-- Title -->
                        <h1 class="mb-4 display-5">Explore Kenya’s Rich Heritage and Natural Beauty</h1>
                        <!-- Info -->
                        <p class="mb-4">Kenya is a land of diversity, offering everything from bustling cities to serene landscapes. Experience the culture, wildlife, and adventures that make Kenya a top travel destination.</p>

                        <!-- List -->
                        <h6 class="fw-normal mb-1">What Makes Kenya Unique</h6>
                        <ul class="list-group list-group-borderless mb-0 small">
                            <li class="list-group-item d-flex mb-0">
                                <i class="fa-solid fa-check-circle text-success me-2 mt-1"></i>Home to the Great Migration and diverse wildlife.
                            </li>
                            <li class="list-group-item d-flex mb-0">
                                <i class="fa-solid fa-check-circle text-success me-2 mt-1"></i>Stunning landscapes from beaches to mountains.
                            </li>
                            <li class="list-group-item d-flex mb-0">
                                <i class="fa-solid fa-check-circle text-success me-2 mt-1"></i>A rich blend of traditional cultures and modern city life.
                            </li>
                        </ul>
                    </div>
                    <!-- Image -->
                    <div class="col-lg-5 text-center">
                        <img src="assets/images/flags/kenya.svg" alt="Kenya">
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
About Kenya END -->


        <!-- =======================
Experiences You'll Get START -->
        <section>
            <div class="container">
                <!-- Title -->
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <h2 class="mb-0">Exciting Experiences You'll Get</h2>
                    </div>
                </div>

                <!-- Slider START -->
                <div class="tiny-slider arrow-round arrow-blur arrow-hover">
                    <div class="tiny-slider-inner" data-autoplay="false" data-arrow="true" data-edge="2" data-dots="false" data-items-xl="3" data-items-lg="2" data-items-sm="1">

                        <!-- Slider item -->
                        <div class="h-100">
                            <div class="card border rounded-3 overflow-hidden h-100">
                                <div class="row g-0 align-items-center">
                                    <!-- Image -->
                                    <div class="col-sm-6">
                                        <img src="assets/images/activities/bush-walk.jpg" class="card-img rounded-0" alt="Bungee Jumping">
                                    </div>

                                    <!-- Title and content -->
                                    <div class="col-sm-6">
                                        <div class="card-body px-3">
                                            <h6 class="card-title"><a href="experience-details.php" class="stretched-link">Bungee Jumping</a></h6>
                                            <p class="mb-0">Feel the adrenaline rush at the Tana River.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slider item -->
                        <div class="h-100">
                            <div class="card border rounded-3 overflow-hidden h-100">
                                <div class="row g-0 align-items-center">
                                    <!-- Image -->
                                    <div class="col-sm-6">
                                        <img src="assets/images/activities/bush-walk.jpg" class="card-img rounded-0" alt="Hot Air Balloon Safari">
                                    </div>

                                    <!-- Title and content -->
                                    <div class="col-sm-6">
                                        <div class="card-body px-3">
                                            <h6 class="card-title"><a href="experience-details.php" class="stretched-link">Hot Air Balloon</a></h6>
                                            <p class="mb-0">Soar over the Maasai Mara at sunrise.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slider item -->
                        <div class="h-100">
                            <div class="card border rounded-3 overflow-hidden h-100">
                                <div class="row g-0 align-items-center">
                                    <!-- Image -->
                                    <div class="col-sm-6">
                                        <img src="assets/images/activities/bush-walk.jpg" class="card-img rounded-0" alt="Scuba Diving">
                                    </div>

                                    <!-- Title and content -->
                                    <div class="col-sm-6">
                                        <div class="card-body px-3">
                                            <h6 class="card-title"><a href="experience-details.php" class="stretched-link">Scuba Diving</a></h6>
                                            <p class="mb-0">Explore the underwater wonders.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slider item -->
                        <div class="h-100">
                            <div class="card border rounded-3 overflow-hidden h-100">
                                <div class="row g-0 align-items-center">
                                    <!-- Image -->
                                    <div class="col-sm-6">
                                        <img src="assets/images/activities/bush-walk.jpg" class="card-img rounded-0" alt="Mountain Climbing">
                                    </div>

                                    <!-- Title and content -->
                                    <div class="col-sm-6">
                                        <div class="card-body px-3">
                                            <h6 class="card-title"><a href="experience-details.php" class="stretched-link">Mountain Climbing</a></h6>
                                            <p class="mb-0">Conquer the peaks of Mount Kenya.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider END -->
            </div>
        </section>
        <!-- =======================
Experiences You'll Get END -->

        <!-- =======================
Country Destinations START -->
        <section class="pt-5 pt-md-8 pb-0">
            <div class="container-fluid px-lg-5">
                <!-- Title -->
                <div class="row mb-4">
                    <div class="col-12 text-center">
                        <h2>Top Packages in Kenya</h2>
                    </div>
                </div>

                <!-- Slider START -->
                <div class="tiny-slider arrow-round arrow-blur rounded-3 overflow-hidden">
                    <div class="tiny-slider-inner" data-autoplay="true" data-arrow="true" data-dots="false" data-items-xl="4" data-items-lg="3" data-items-md="2" data-items-xs="1">
                        <!-- Card item START -->
                        <div>
                            <div class="card card-metro overflow-hidden">
                                <img src="assets/images/Small_400x400/cheetahs.jpg" alt="Maasai Mara">
                                <!-- Image overlay -->
                                <div class="card-img-overlay d-flex">
                                    <!-- Info -->
                                    <div class="card-text mt-auto">
                                        <h4><a href="destinations-details.php" class="text-white stretched-link">Maasai Mara</a></h4>
                                        <p class="text-white mb-2">Witness the Great Migration and explore Kenya's premier safari destination.</p>
                                        <button class="btn btn-link text-white p-0 mb-0">Explore now <i class="fa-solid fa-arrow-right-long fa-fw"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->

                        <!-- Card item START -->
                        <div>
                            <div class="card card-metro overflow-hidden">
                                <img src="assets/images/Small_400x400/gazelles.jpg" alt="Amboseli National Park">
                                <!-- Image overlay -->
                                <div class="card-img-overlay d-flex">
                                    <!-- Info -->
                                    <div class="card-text mt-auto">
                                        <h4><a href="destinations-details.php" class="text-white stretched-link">Amboseli National Park</a></h4>
                                        <p class="text-white mb-2">Capture stunning views of Mount Kilimanjaro and large elephant herds.</p>
                                        <button class="btn btn-link text-white p-0 mb-0">Explore now <i class="fa-solid fa-arrow-right-long fa-fw"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->

                        <!-- Card item START -->
                        <div>
                            <div class="card card-metro overflow-hidden">
                                <img src="assets/images/Small_400x400/lion.png" alt="Nairobi">
                                <!-- Image overlay -->
                                <div class="card-img-overlay d-flex">
                                    <!-- Info -->
                                    <div class="card-text mt-auto">
                                        <h4><a href="destinations-details.php" class="text-white stretched-link">Nairobi</a></h4>
                                        <p class="text-white mb-2">Explore the vibrant capital city with national parks and cultural attractions.</p>
                                        <button class="btn btn-link text-white p-0 mb-0">Explore now <i class="fa-solid fa-arrow-right-long fa-fw"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->

                        <!-- Card item START -->
                        <div>
                            <div class="card card-metro overflow-hidden">
                                <img src="assets/images/Small_400x400/wildebeasts.jpg" alt="Diani Beach">
                                <!-- Image overlay -->
                                <div class="card-img-overlay d-flex">
                                    <!-- Info -->
                                    <div class="card-text mt-auto">
                                        <h4><a href="destinations-details.php" class="text-white stretched-link">Diani Beach</a></h4>
                                        <p class="text-white mb-2">Relax on pristine white sands and enjoy the warm Indian Ocean waters.</p>
                                        <button class="btn btn-link text-white p-0 mb-0">Explore now <i class="fa-solid fa-arrow-right-long fa-fw"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
Country Destinations END -->

        <!-- =======================
About Kenya More Info START -->
        <section class="pt-4 pb-4">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bg-light rounded-3 position-relative overflow-hidden p-4 p-xl-5">
                            <div class="row g-4 align-items-center">
                                <!-- Content -->
                                <div class="col-lg-8">
                                    <!-- Title -->
                                    <h1 class="mb-3 fs-2">Why Visit Kenya?</h1>
                                    <p class="mb-3">Kenya offers a unique blend of adventure, culture, and relaxation. Whether you’re seeking thrilling safaris, exploring vibrant cities, or unwinding on pristine beaches, Kenya has it all. Immerse yourself in the breathtaking landscapes of Maasai Mara, witness the majestic Mount Kilimanjaro in Amboseli National Park, experience the vibrant energy of Nairobi, or indulge in the tranquility of Diani Beach. Discover the wonders of Kenya and create unforgettable memories that will last a lifetime.</p>
                                </div>

                                <!-- Image -->
                                <div class="col-lg-4">
                                    <img src="assets/images/hippo.png" style="height: 250px;" alt="Why Visit Kenya">
                                </div>
                            </div> <!-- Row END -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
About Kenya More Info END -->

        <!-- =======================
Top Destinations in Kenya START -->
        <section>
            <div class="container">
                <!-- Title -->
                <div class="row mb-4">
                    <div class="col-12 text-center">
                        <h2 class="mb-0">Top Destinations in Kenya</h2>
                    </div>
                </div>

                <div class="row g-4 g-md-5">
                    <!-- Card item START -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="card bg-transparent text-center p-1 h-100">
                            <!-- Image -->
                            <img src="assets/images/Small_400x400/cheetahs.jpg" class="rounded-circle" alt="Maasai Mara">
                            <div class="card-body p-0 pt-3">
                                <h5 class="card-title"><a href="destinations-details.php" class="stretched-link">Maasai Mara</a></h5>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="card bg-transparent text-center p-1 h-100">
                            <!-- Image -->
                            <img src="assets/images/Small_400x400/gazelles.jpg" class="rounded-circle" alt="Amboseli National Park">
                            <div class="card-body p-0 pt-3">
                                <h5 class="card-title"><a href="destinations-details.php" class="stretched-link">Amboseli</a></h5>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="card bg-transparent text-center p-1 h-100">
                            <!-- Image -->
                            <img src="assets/images/Small_400x400/lion.png" class="rounded-circle" alt="Nairobi">
                            <div class="card-body p-0 pt-3">
                                <h5 class="card-title"><a href="destinations-details.php" class="stretched-link">Nairobi</a></h5>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="card bg-transparent text-center p-1 h-100">
                            <!-- Image -->
                            <img src="assets/images/Small_400x400/wildebeasts.jpg" class="rounded-circle" alt="Diani Beach">
                            <div class="card-body p-0 pt-3">
                                <h5 class="card-title"><a href="destinations-details.php" class="stretched-link">Diani Beach</a></h5>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->


                    <!-- Card item START -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="card bg-transparent text-center p-1 h-100">
                            <!-- Image -->
                            <img src="assets/images/Small_400x400/gazelles.jpg" class="rounded-circle" alt="Amboseli National Park">
                            <div class="card-body p-0 pt-3">
                                <h5 class="card-title"><a href="destinations-details.php" class="stretched-link">Amboseli</a></h5>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->


                    <!-- Card item START -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="card bg-transparent text-center p-1 h-100">
                            <!-- Image -->
                            <img src="assets/images/Small_400x400/gazelles.jpg" class="rounded-circle" alt="Amboseli National Park">
                            <div class="card-body p-0 pt-3">
                                <h5 class="card-title"><a href="destinations-details.php" class="stretched-link">Amboseli</a></h5>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->


                </div> <!-- Row END -->
            </div>
        </section>
        <!-- =======================
Top Destinations in Kenya END -->

        <!-- =======================
CTA START -->
        <section>
            <div class="container">
                <div class="row g-4">
                    <div class="col-12">
                        <!-- Action box START -->
                        <div class="card card-body shadow p-4">
                            <div class="row g-4 justify-content-between align-items-center">
                                <!-- Image -->
                                <div class="col-sm-3 col-lg-2">
                                    <img src="assets/images/element/22.svg" alt="">
                                </div>

                                <!-- Title and content -->
                                <div class="col-sm-9 col-lg-6 col-xl-7">
                                    <h4>Ready to Explore Kenya?</h4>
                                    <p class="mb-0">Book your unforgettable Kenyan adventure with us today and experience the wonders of this incredible country.</p>
                                </div>

                                <!-- Button -->
                                <div class="col-lg-3 col-xxl-2 d-grid">
                                    <a href="destinations.php" class="btn btn-primary mb-0">Start Your Journey</a>
                                </div>
                            </div>
                        </div>
                        <!-- Action box END -->
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
CTA END -->

    </main>

    <!-- Footer START -->
    <?php include "includes/footer.php"; ?>
    <!-- Footer END -->
</body>

</html>