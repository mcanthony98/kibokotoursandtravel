<?php 
require "includes/connect.php";
$cat = 4;
$catres = $conn->query("SELECT * FROM category WHERE category_id='$cat'");
$catrow = $catres->fetch_assoc();
$packres = $conn->query("SELECT * FROM package  WHERE category_id = '$cat' AND package_status = 1 ORDER BY CASE WHEN priority = 0 THEN 1 ELSE 0 END, priority, package_id DESC");
?>
<?php 
        $seo_title = "Accessible Safaris | Kiboko Tours & Travel"; 
        $seo_desc = "Kiboko Tours and Travel offers safari tours, travel booking, hotel reservations, beach tours, and gorilla trekking in Kenya and beyond."; 

        $seo_img = "assets/images/kiboko.jpeg";
        $og_type = "website";
        $canonical = "accessible-safaris.php/";
        $robot = "index, follow";
    ?>
<!DOCTYPE html>
<html lang="en">

<head>


    <!-- Libraries, Favicon & CSS -->
    <?php include "includes/libs_fav.php";?>


</head>


<body>

    <!-- Header START -->
    <?php include "includes/header_navbar.php";?>
    <!-- Header END -->

    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================
Main Banner START -->
        <section class="pt-0">
            <div class="container">
                <!-- Background image -->
                <div class="p-3 p-sm-5 rounded-3"
                    style="background-image: url(uploads/<?php echo $catrow['category_image'];?>); background-position: center center; background-repeat: no-repeat; background-size: cover; ">
                    <!-- Banner title -->
                    <div class="row">
                        <div class="col-md-8 mx-auto my-5">
                            <h1 class="text-center text-light">Accessible Safaris</h1>
                            <ul class="nav nav-divider h6 text-dark mb-0 justify-content-center">
                                <p style="text-align: center; color: white;"><?php echo $catrow['description'];?></p>
                            </ul>
                        </div>
                    </div>
                </div>



                <!-- Alert box START -->
                <div class="alert alert-danger d-flex align-items-center mt-5 rounded-3 mb-0" role="alert">
                    <span class="h4 mb-0 alert-heading"><i class="bi bi-exclamation-octagon-fill me-2"></i> </span>
                    <div class="ms-3">
                        <h6 class="mb-0 alert-heading">Hurry! 65% off, the tours are almost fully booked</h6>
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
                        <h5 class="mb-0">Showing 1-<?php echo $packres->num_rows;?> of <?php echo $packres->num_rows;?> result</h5>
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
<?php while($row = $packres->fetch_assoc()){
    $packid = $row['package_id'];
    $pdayres = $conn->query("SELECT * FROM package_day WHERE package_id = '$packid'");
    $pkgexpres = $conn->query("SELECT * FROM package_day_experience pde JOIN package_day pd ON pd.package_day_id=pde.package_day_id JOIN experience e ON e.experience_id=pde.experience_id WHERE pd.package_id=$packid");
    $pkgdestres = $conn->query("SELECT * FROM package_day_destination pdd JOIN package_day pd ON pd.package_day_id=pdd.package_day_id JOIN destination d ON d.destination_id=pdd.destination_id WHERE pd.package_id=$packid GROUP BY pdd.destination_id");
    ?>
                    <!-- Card item START -->
                    <div class="col-md-6 col-xl-4">
                        <div class="card card-hover-shadow pb-0 h-100">
                            <!-- Overlay item -->
                            <div class="position-relative">
                                <!-- Image -->
                                <img src="uploads/<?php echo $row['package_image'];?>" class="card-img-top" alt="<?php echo $row['title'];?>" loading="lazy">
                                <!-- Overlay -->
                                <div class="card-img-overlay d-flex flex-column p-4 z-index-1">
                                    
                                    <div class="w-100 mt-auto">
                                        <span class="badge text-bg-white fs-6"><?php echo $pdayres->num_rows;?> days</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Image -->

                            <!-- Card body START -->
                            <div class="card-body px-3">
                                <!-- Title -->
                                <h5 class="card-title mb-0"><a href="package-details.php?id=<?php echo $row['package_id'];?>&<?php echo $row['title_slag'];?>" class="stretched-link"><?php echo $row['title'];?></a></h5>
                                <p><small><?php echo $row['subtitle'];?></small></p>
                                <span class="small"><i class="far fa-calendar-alt me-2"></i><?php echo $row['travel_dates'];?></span>

                                <!-- List -->
                                <ul class="nav nav-divider mt-3 mb-0">
                                    <li class="nav-item h6 fw-normal mb-0">
                                        <i class="fa-solid fa-map-pin text-info me-2"></i><?php echo $pkgdestres->num_rows;?> Parks
                                    </li>
                                    <li class="nav-item h6 fw-normal mb-0">
                                        <i class="fa-solid fa-list text-danger me-2"></i><?php echo $pkgexpres->num_rows;?> Activities
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
                                        <h5 class="fw-normal text-success mb-0"><?php echo $row['currency'];?> <?php echo number_format($row['price']);?></h5>
                                        <small>/per person</small>
                                    </div>
                                    <!-- Button -->
                                    <div class="mt-2 mt-sm-0">
                                        <a href="package-details.php?id=<?php echo $row['package_id'];?>&<?php echo $row['title_slag'];?>" class="btn btn-sm btn-primary mb-0">View Details</a>
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
    <!-- **************** MAIN CONTENT END **************** -->

        <!-- Footer START -->
        <?php include "includes/footer.php";?>
        <!-- Footer END -->

</body>


</html>