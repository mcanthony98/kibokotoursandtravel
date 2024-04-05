<?php 
require "includes/connect.php";

$destres = $conn->query("SELECT * FROM destination");
$pkgres = $conn->query("SELECT * FROM package");
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Destinations | Kiboko Tours & Travel</title>

        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="GNM">
        <meta name="description" content="Kiboko Tours & Travel">

        <!-- Libraries, Favicon & CSS -->
        <?php include "includes/libs_fav.php";?>



    </head>

    <body>
        <!-- Header START -->
        <?php include "includes/header_navbar.php";?>
        <!-- Header END -->

        <main>

                    <!-- =======================
Main Banner START -->
        <section class="pt-0">
            <div class="container">
                <!-- Background image -->
                <div class="p-3 p-sm-5 rounded-3"
                    style="background-image: url(assets/images/views/rhinos.jpg); background-position: center center; background-repeat: no-repeat; background-size: cover;">
                    <!-- Banner title -->
                    <div class="row">
                        <div class="col-md-8 mx-auto my-5">
                            <h1 class="text-center text-dark">Places to Visit in Kenya</h1></h1>
                            <ul class="nav nav-divider h6 text-dark mb-0 justify-content-center">
                                <li class="nav-item" style="color: white; font-weight: bold;"><?php echo $destres->num_rows;?> Destinations</li>
                                <li class="nav-item" style="color: white; font-weight: bold;"><?php echo $pkgres->num_rows;?> Packages</li>
                            </ul>
                        </div>
                    </div>
                </div>



                <!-- Alert box START -->
                <div class="alert alert-danger d-flex align-items-center mt-5 rounded-3 mb-0" role="alert">
                    <span class="h4 mb-0 alert-heading"><i class="bi bi-exclamation-octagon-fill me-2"></i> </span>
                    <div class="ms-3">
                        <h6 class="mb-0 alert-heading">Hurry! 65% of the tours are already fully booked</h6>
                        <p class="mb-0">Many tours to various areas have been booked, don't miss out!</p>
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
                        <h5 class="mb-0">Showing 1-<?php echo $destres->num_rows;?> of <?php echo $destres->num_rows;?> result</h5>
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

                <?php while($row = $destres->fetch_assoc()){
                    $destid = $row['destination_id'];
                    $destexpres = $conn->query("SELECT * FROM destination_experience de JOIN experience e ON de.experience_id=e.experience_id WHERE de.destination_id='$destid'");
                    ?>
                    <!-- Card item START -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card card-hover-shadow pb-0 h-100">
                            <!-- Overlay item -->
                            <div class="position-relative">
                                <!-- Image -->
                                <img src="uploads/<?php echo $row['destination_image'];?>" class="card-img-top" alt="Card image">
                                <!-- Overlay -->
                                <div class="card-img-overlay d-flex flex-column p-4 z-index-1">
                                    <!-- Card overlay top -->
                                    
                                    <!-- Card overlay bottom -->
                                    <div class="w-100 mt-auto">
                                        <span class="badge text-bg-white fs-6">Kenya</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Image -->

                            <!-- Card body START -->
                            <div class="card-body px-3">
                                <!-- Title -->
                                <h5 class="card-title mb-0"><a href="destinations-details.php?id=<?php echo $row['destination_id'];?>&<?php echo $row['destination_slag'];?>" class="stretched-link"><?php echo $row['destination_name'];?></a></h5>
                                <p class="mt-2"><?php echo $row['catchy_title'];?></p>

                                 <!-- List -->
                                 <ul class="nav nav-divider mt-3 mb-0">
                                    <li class="nav-item h6 fw-normal mb-0">
                                        <i class="fa-solid fa-list text-danger me-2"></i><?php echo $destexpres->num_rows;?> Activities
                                    </li>
                                </ul>

                            </div>
                            <!-- Card body END -->

                            <!-- Card footer START-->
                            <div class="card-footer pt-0">
                                <!-- Price and Button -->
                                <div class="d-sm-flex justify-content-sm-between align-items-center flex-wrap">
                                    
                                    <!-- Button -->
                                    <div class="mt-0 mt-sm-0">
                                        <a href="#" class="btn btn-sm btn-primary mb-0">View Packages</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Card item END -->

                   <?php } ?>

                    

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

        <!-- Footer START -->
            <?php include "includes/footer.php";?>
        <!-- Footer END -->
    </body>


</html>