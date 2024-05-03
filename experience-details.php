<?php 
require "includes/connect.php";

if(!isset($_GET['id'])){
	header('location: index.php');
}
$blogid = $_GET['id'];
$blogres = $conn->query("SELECT * FROM experience WHERE experience_id='$blogid' ");

$blogrow = $blogres->fetch_assoc();

$packres = $conn->query("SELECT * FROM package p JOIN package_day pd ON p.package_id=pd.package_id JOIN package_day_experience pde ON pd.package_day_id=pde.package_day_id WHERE pde.experience_id = '$blogid'");
?>
<!DOCTYPE html>
<html lang="en">

    <head>
    <title><?php echo $blogrow['seo_title']; ?></title>

<!-- Meta Tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="Ganiam Tech">
<meta name="description" content="<?php echo $blogrow['seo_description']; ?>">

<meta property="og:title" content="<?php echo $blogrow['seo_title']; ?>">
<meta name="twitter:title" content="<?php echo $blogrow['seo_title']; ?>">

<meta property="og:description" content="<?php echo $blogrow['seo_description']; ?>">
<meta name="twitter:description" content="<?php echo $blogrow['seo_description']; ?>">

<meta property="og:image" content="https://kibokotoursandtravel.com/uploads/<?php echo $blogrow['experience_image']; ?>">
<meta name="twitter:image" content="https://kibokotoursandtravel.com/uploads/<?php echo $blogrow['experience_image']; ?>">
<meta property="og:url" content="https://kibokotoursandtravel.com">
<meta property="og:site_name" content="kiboko tours and travel">
<meta property="og:type" content="website">

        <!-- Libraries, Favicon & CSS -->
        <?php include "includes/libs_fav.php";?>



    </head>

    <body>
        <!-- Header START -->
        <?php include "includes/header_navbar.php";?>
        <!-- Header END -->

        <main>

        <div style="display: flex; justify-content: center;">
                <div class="col-sm-8 col-11 mx-auto">

        <!-- Activity Details START -->
        <div class="card bg-transparent">

            <br>
            <br>

            <!-- Card header -->
            <div class="card-header border-bottom bg-transparent px-0 pt-0">
                <h4 class="mb-0"><?php echo $blogrow['experience_name'];?></h4>
            </div>

            <!-- Card body -->
            <div class="card-body pt-4 p-0">
                <!-- List -->
                <p><?php echo $blogrow['description'];?></p>

                <br>
                <br>

                <!-- Activity images -->

                

                
            </div>	

        </div>
        <!-- Activity Details END -->



    <!-- Packages START -->
<section class="pt-0 pt-md-5" id="related-packages">
	<div class="container">
		<!-- Title -->
		<div class="row mb-4">
			<div class="col-12 text-center">
                <h6>Want to go <?php echo $blogrow['experience_name'];?>?</h6>
				<h2 class="mb-0">Choose a Package</h2>
			</div>
		</div>

		<div class="row g-4">
            <?php while($row = $packres->fetch_assoc()){
                $packid = $row['package_id'];
                $pdayres = $conn->query("SELECT * FROM package_day WHERE package_id = '$packid'");
                $pkgexpres = $conn->query("SELECT * FROM package_day_experience pde JOIN package_day pd ON pd.package_day_id=pde.package_day_id JOIN experience e ON e.experience_id=pde.experience_id WHERE pd.package_id=$packid");
                $pkgdestres = $conn->query("SELECT * FROM package_day_destination pdd JOIN package_day pd ON pd.package_day_id=pdd.package_day_id JOIN destination d ON d.destination_id=pdd.destination_id WHERE pd.package_id=$packid GROUP BY pdd.destination_id");
                ?>
                                <!-- Card item START -->
                                <div class="col-sm-12 col-md-6 col-xl-4">
                                    <div class="card card-hover-shadow pb-0 h-100">
                                        <!-- Overlay item -->
                                        <div class="position-relative">
                                            <!-- Image -->
                                            <img src="uploads/<?php echo $row['package_image'];?>" class="card-img-top" alt="Card image">
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
	</div>
</section>
<!-- =======================
Packages END -->



    <br>
    <br>

    </div>

        </main>

        <!-- Footer START -->
            <?php include "includes/footer.php";?>
        <!-- Footer END -->
    </body>


</html>