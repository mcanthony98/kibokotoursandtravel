<?php
require "includes/connect.php";

// Get the country name from the URL parameter
$country_name = isset($_GET['name']) ? $_GET['name'] : '';

// Fetch country details from the database
$query = "SELECT * FROM country WHERE country_name = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $country_name);
$stmt->execute();
$country_result = $stmt->get_result();
$country = $country_result->fetch_assoc();

// Get the country ID for subsequent queries
$country_id = $country['country_id'];


// Fetch top destinations from the database
$destination_query = "SELECT * FROM destination WHERE country_id = ? LIMIT 4";
$destination_stmt = $conn->prepare($destination_query);
$destination_stmt->bind_param("i", $country_id);
$destination_stmt->execute();
$destinations_result = $destination_stmt->get_result();

// Fetch top experiences from the database
$experience_query = "
    SELECT e.* 
    FROM experience e 
    JOIN destination_experience de ON e.experience_id = de.experience_id 
    JOIN destination d ON de.destination_id = d.destination_id 
    WHERE d.country_id = ? 
    GROUP BY e.experience_id 
    ORDER BY CASE WHEN e.priority = 0 THEN 1 ELSE 0 END, e.priority, e.experience_id DESC 
    LIMIT 4
";

$experience_stmt = $conn->prepare($experience_query);
$experience_stmt->bind_param("i", $country_id);
$experience_stmt->execute();
$experiences_result = $experience_stmt->get_result();


// Fetch packages from the database
$package_query = "SELECT * FROM package p JOIN package_day pd ON p.package_id=pd.package_id JOIN package_day_destination pdd ON pd.package_day_id=pdd.package_day_id JOIN destination d ON d.destination_id=pdd.destination_id WHERE d.country_id = ? AND p.package_status = 1 GROUP BY p.package_id ORDER BY CASE WHEN p.priority = 0 THEN 1 ELSE 0 END, p.priority, p.package_id DESC LIMIT 12";
$package_stmt = $conn->prepare($package_query);
$package_stmt->bind_param("i", $country_id);
$package_stmt->execute();
$packres = $package_stmt->get_result();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo htmlspecialchars($country['country_name']); ?> | Kiboko Tours & Travel</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="GNM">
    <meta name="description" content="Explore the best of <?php echo htmlspecialchars($country['country_name']); ?> with Kiboko Tours & Travel">
    <style>
        .short-description {
            display: -webkit-box;
            -webkit-line-clamp: 8;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            max-height: calc(1.2em * 8);
            line-height: 1.2em;
        }

        .dest-img {
            height: 200px;
            width: ;
        }

    </style>

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
                        <div class="card overflow-hidden h-400px h-sm-600px rounded-0" style="background-image:url('uploads/<?php echo htmlspecialchars($country['country_image']); ?>'); background-position: center center; background-size: cover;">
                            <!-- Background dark overlay -->
                            <div class="bg-overlay bg-dark opacity-3"></div>
                            <!-- Card image overlay -->
                            <div class="card-img-overlay d-flex align-items-center">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-11 col-lg-7">
                                            <!-- Title -->
                                            <h1 class="text-white display-6">Discover the Wild Beauty of <?php echo htmlspecialchars($country['country_name']); ?></h1>
                                            <p class="text-white mb-4"><?php echo htmlspecialchars($country['country_short_description']); ?></p>
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
About Country START -->
        <section class="pt-4 pt-md-5">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-7">
                        <!-- Title -->
                        <h1 class="mb-4 display-5">Explore <?php echo htmlspecialchars($country['country_name']); ?>’s Rich Heritage and Natural Beauty</h1>
                        <!-- Info -->
                        <p class="mb-4"><?php echo htmlspecialchars($country['country_description']); ?></p>
                    </div>
                    <!-- Image -->
                    <div class="col-lg-5 text-center">
                        <img src="./uploads/<?php echo htmlspecialchars($country['country_flag']); ?>" alt="<?php echo htmlspecialchars($country['country_name']); ?>">
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
About Country END -->

        <!-- =======================
Experiences You'll Get START -->
        <section>
            <div class="container">
                <!-- Title -->
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <h2 class="mb-0">Exciting Experiences You'll Get in <?php echo htmlspecialchars($country['country_name']); ?></h2>
                    </div>
                </div>

                <!-- Slider START -->
                <div class="tiny-slider arrow-round arrow-blur arrow-hover">
                    <div class="tiny-slider-inner" data-autoplay="false" data-arrow="true" data-edge="2" data-dots="false" data-items-xl="3" data-items-lg="2" data-items-sm="1">
                        <?php while ($experience = $experiences_result->fetch_assoc()) { ?>
                        <!-- Slider item -->
                        <div class="h-100">
                            <div class="card border rounded-3 overflow-hidden h-100">
                                <div class="row g-0 align-items-center">
                                    <!-- Image -->
                                    <div class="col-sm-6">
                                        <img src="./uploads/<?php echo htmlspecialchars($experience['experience_image']); ?>" class="card-img rounded-0" alt="<?php echo htmlspecialchars($experience['experience_name']); ?>">
                                    </div>

                                    <!-- Title and content -->
                                    <div class="col-sm-6">
                                        <div class="card-body px-3">
                                            <h6 class="card-title"><a href="experience-details.php?id=<?php echo htmlspecialchars($experience['experience_id']); ?>" class="stretched-link"><?php echo htmlspecialchars($experience['experience_name']); ?></a></h6>
                                            <p class="short-description mb-0"><?php echo htmlspecialchars($experience['short_description']); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
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
                        <h2>Top Destinations in <?php echo htmlspecialchars($country['country_name']); ?></h2>
                    </div>
                </div>

                <!-- Slider START -->
                <div class="tiny-slider arrow-round arrow-blur rounded-3 overflow-hidden">
                    <div class="tiny-slider-inner" data-autoplay="true" data-arrow="true" data-dots="false" data-items-xl="4" data-items-lg="3" data-items-md="2" data-items-xs="1">
                        <?php while ($destination = $destinations_result->fetch_assoc()) { ?>
                        <!-- Card item START -->
                        <div>
                            <div class="card card-metro overflow-hidden">
                                <img class="dest-img" src="./uploads/<?php echo htmlspecialchars($destination['destination_image']); ?>" alt="<?php echo htmlspecialchars($destination['destination_name']); ?>">
                                <!-- Image overlay -->
                                <div class="card-img-overlay d-flex">
                                    <!-- Info -->
                                    <div class="card-text mt-auto">
                                        <h4><a href="destinations-details.php?id=<?php echo htmlspecialchars($destination['destination_id']); ?>" class="text-white stretched-link"><?php echo htmlspecialchars($destination['destination_name']); ?></a></h4>
                                        <button class="btn btn-link text-white p-0 mb-0">Explore now <i class="fa-solid fa-arrow-right-long fa-fw"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
Country Destinations END -->

        <!-- =======================
Country Packages START -->
        <section>
            <div class="container">

                <!-- Title -->
                <div class="row mb-4">
                    <div class="col-12 text-center">
                        <h2 class="mb-0">Top Packages in <?php echo htmlspecialchars($country['country_name']); ?></h2>
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
                                <img src="uploads/<?php echo $row['package_image']; ?>" class="card-img mt-1" alt="kiboko image">
                                <!-- Badge -->
                                <div class="position-absolute bottom-0 start-0 p-3">
                                    <div class="badge text-bg-dark fs-6 rounded-pill stretched-link d-none"><i
                                            class="bi bi-geo-alt me-2 "></i><?php echo htmlspecialchars($country['country_name']); ?></div>
                                </div>
                            </div>

                            <!-- Card body -->
                            <div class="card-body px-2">
                                <!-- Title -->
                                <h6 class="card-title"><a href="package-details.php?id=<?php echo $row['package_id']; ?>&<?php echo $row['title_slag']; ?>" class="stretched-link"><?php echo $row['title']; ?></a></h6>
                                <!-- Price and rating -->
                                <p><small><?php echo $row['subtitle']; ?></small></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="text-success mb-0"><?php echo $row['currency']; ?> <?php echo number_format($row['price']); ?> </h5>
                                    <ul class="list-inline mb-0 small">
                                        <li class="list-inline-item text-success"><i class="fas fa-star"></i></li>
                                        <li class="list-inline-item text-success"><i class="fas fa-star"></i></li>
                                        <li class="list-inline-item text-success"><i class="fas fa-star"></i></li>
                                        <li class="list-inline-item text-success"><i class="fas fa-star"></i></li>
                                        <li class="list-inline-item text-success"><i class="fas fa-star-half-alt"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Card END -->
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <!-- =======================
Country Packages END -->

        <!-- =======================
Why Choose Us Start -->
        <section class="pt-8 pt-md-5">
            <div class="container">
                
                <!-- Section Title -->
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <h2 class="display-6">Why Choose Us</h2>
                        <p class="section-subtitle">Discover what sets us apart from the rest</p>
                    </div>
                </div>

                <!-- Benefits Grid -->
                <div class="row g-4 justify-content-center">

                    <!-- Benefit 1 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 text-center shadow-sm">
                            <div class="card-body p-4">
                                <div class="icon bg-primary rounded-circle mb-4 mx-auto" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-user-cog fa-2x text-white"></i>
                                </div>
                                <h5 class="card-title">Customized Experiences</h5>
                                <p class="card-text">Each journey is meticulously crafted to align with your unique preferences, from personalized dining to bespoke activities. We ensure every aspect is fine-tuned for your comfort and enjoyment.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Benefit 2 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 text-center shadow-sm">
                            <div class="card-body p-4">
                                <div class="icon bg-success rounded-circle mb-4 mx-auto" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-users fa-2x text-white"></i>
                                </div>
                                <h5 class="card-title">Expert Team</h5>
                                <p class="card-text">Our dedicated professionals are not only experts in travel but are also passionate advocates for accessible tourism, ensuring every guest experiences the best care and attention possible.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Benefit 3 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 text-center shadow-sm">
                            <div class="card-body p-4">
                                <div class="icon bg-warning rounded-circle mb-4 mx-auto" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-hands-helping fa-2x text-white"></i>
                                </div>
                                <h5 class="card-title">Continued Assistance</h5>
                                <p class="card-text">From your initial inquiry to the conclusion of your trip, our team is available to offer support and guidance. A dedicated therapist or assistant accompanies group tours for added assurance.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Benefit 4 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 text-center shadow-sm">
                            <div class="card-body p-4">
                                <div class="icon bg-danger rounded-circle mb-4 mx-auto" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-briefcase-medical fa-2x text-white"></i>
                                </div>
                                <h5 class="card-title">Emergency Care Ready</h5>
                                <p class="card-text">With comprehensive emergency medical evacuation available at all times, you can travel confidently knowing that expert care is always on standby, should you need it.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Benefit 5 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 text-center shadow-sm">
                            <div class="card-body p-4">
                                <div class="icon bg-info rounded-circle mb-4 mx-auto" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-handshake fa-2x text-white"></i>
                                </div>
                                <h5 class="card-title">Carefully Selected Partners</h5>
                                <p class="card-text">We only collaborate with trusted partners who meet our high standards. Our team personally audits each location to ensure accessibility and suitability for your needs.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>


        <!-- =======================
Why Choose Us End -->

        <!-- =======================
About Country More Info START -->
        <section class="pt-4 pb-4">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bg-light rounded-3 position-relative overflow-hidden p-4 p-xl-5">
                            <div class="position-relative z-index-1">
                                <h4 class="mb-4">Ready to Explore <?php echo htmlspecialchars($country['country_name']); ?>?</h4>
                                <p class="mb-0">Book your unforgettable adventure with us today and experience the wonders of <?php echo htmlspecialchars($country['country_name']); ?>.</p>
                            </div>
                            <a href="contact-us.php" class="btn btn-primary">Start Your Journey</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
About Country More Info END -->

    </main>

    <!-- Footer START -->
    <?php include "includes/footer.php"; ?>
    <!-- Footer END -->
</body>

</html>
