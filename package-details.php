<?php 
require "includes/connect.php";

if(!isset($_GET['id'])){
	header('location: index.php');
}
$pkgid = $_GET['id'];

$pkgres = $conn->query("SELECT * FROM package WHERE package_id='$pkgid'");
$pkgrow = $pkgres->fetch_assoc();

$pkgdaysres = $conn->query("SELECT * FROM package_day pd WHERE pd.package_id='$pkgid'");

$pkgexpres = $conn->query("SELECT * FROM package_day_experience pde JOIN package_day pd ON pd.package_day_id=pde.package_day_id JOIN experience e ON e.experience_id=pde.experience_id WHERE pd.package_id=$pkgid");

$pkgdestres = $conn->query("SELECT * FROM package_day_destination pdd JOIN package_day pd ON pd.package_day_id=pdd.package_day_id JOIN destination d ON d.destination_id=pdd.destination_id WHERE pd.package_id=$pkgid GROUP BY pdd.destination_id");

$pkgdayres = $conn->query("SELECT * FROM package_day pd WHERE pd.package_id=$pkgid ORDER BY pd.day ASC");
?>

<?php 
        $seo_title = $pkgrow['seo_title']; 
        $seo_desc = $pkgrow['seo_description']; 

        $seo_img = "uploads/".$pkgrow['package_image'];
        $og_type = "website";
        $canonical = "package-details.php?id=".$pkgrow['package_id']."&".$pkgrow['title_slag']."/";
        $robot = "index, follow";
    ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        

        <!-- Libraries, Favicon & CSS -->
        <?php include "includes/libs_fav.php";?>

				<style>
				.sticky-section {
					position: sticky;
					top: 0;
					display: flex;
					justify-content: space-between;
					align-items: center;
					padding: 2rem 3rem; 
					background-color: black;
					height: 100px; 
					
				}

				.sticky-section h3 {
					color: white;
					font-weight: bold;
					font-size: 1.5rem; 
					margin: 0;
				}

				.sticky-section button {
					background-color: #fff;
					color: black;
					font-weight: bold;
					font-size: 1.2rem; 
					padding: 1rem 2rem; 
					border: none;
					border-radius: 5px;
					cursor: pointer;
					margin-top: 10px;
					margin-bottom: 10px; 
				}

			</style>



    </head>

    <body>
        <!-- Header START -->
        <?php include "includes/header_navbar.php";?>
        <!-- Header END -->

        <main>

            <!-- =======================
Main Title START -->
<section class="py-0 pt-sm-5">
	<div class="container position-relative">
		<!-- Title and button START -->
		<div class="row">
			<div class="col-12">
				<!-- Meta -->
				<div class="d-lg-flex justify-content-lg-between mb-1">
					<!-- Title -->
					<div class="mb-2 mb-lg-3">
						<h1 class="fs-2"><?php echo $pkgrow['title'];?> </h1>
						
					</div>

					<!-- Buttons -->
					<ul class="list-inline text-end">
						<!-- Heart icon -->
						<li class="list-inline-item">
							<a href="#" class="btn btn-sm btn-light px-2"><i class="fa-solid fa-fw fa-heart"></i></a>
						</li>
						<!-- Share icon -->
						<li class="list-inline-item dropdown">
							<!-- Share button -->
							<a href="#" class="btn btn-sm btn-light px-2" role="button" id="dropdownShare" data-bs-toggle="dropdown" aria-expanded="false">
								<i class="fa-solid fa-fw fa-share-alt"></i>
							</a>
							<!-- dropdown button -->
							<ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare">
								<li><a class="dropdown-item" href="#"><i class="fab fa-twitter-square me-2"></i>Twitter</a></li>
								<li><a class="dropdown-item" href="#"><i class="fab fa-facebook-square me-2"></i>Facebook</a></li>
								<li><a class="dropdown-item" href="#"><i class="fab fa-linkedin me-2"></i>LinkedIn</a></li>
								<li><a class="dropdown-item" href="#"><i class="fa-solid fa-copy me-2"></i>Copy link</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Title and button END -->

		<!-- Alert box START -->
		<div class="alert alert-danger alert-dismissible d-flex justify-content-between align-items-center fade show mb-4 rounded-3 pe-2" role="alert">
			<div class="d-flex">
				<span class="alert-heading h5 mb-0 me-2"><i class="bi bi-exclamation-octagon-fill"></i></span>
				<span><strong class="alert-heading me-2">ETA Policy</strong>ETA (Electronic Travel Authorization) Policy is required for travel to Kenya. <a href="http://www.etakenya.go.ke/" target="_blank" class="ms-2 text-decoration-underline">Apply for the ETA</a></span>
			</div>
				<button type="button" class="btn btn-link text-primary-hover pb-0 text-end" data-bs-dismiss="alert" aria-label="Close"><i class="bi bi-x-lg"></i></button>
		</div>
		<!-- Alert box END -->
	</div>
</section>
<!-- =======================
Main Title END -->


<!-- =======================
About hotel START -->
<section class="pt-0">
	<div class="container" data-sticky-container>

		<div class="row g-4 g-xl-5">
			<!-- Content START -->
			<div class="col-xl-7 order-1">
				<div class="vstack gap-5">

					<!-- About hotel START -->
					<div class="card bg-transparent">
						<!-- Card header -->
						<div class="card-header border-bottom bg-transparent px-0 pt-0">
							<h3 class="mb-0">About This Package</h3>
						</div>

						<!-- Card body START -->
						<div class="card-body pt-4 p-0">
							<h5 class="fw-light mb-2">Main Highlights</h5>

							<!-- Highlights Icons -->
							<div class="hstack gap-4 mb-4">
							<span><i class="bi bi-clock fa-fw text-info me-1"></i><?php echo $pkgdaysres->num_rows;?> Days</span>
							<span><i class="bi bi-map fa-fw text-warning me-1"></i><?php echo $pkgdestres->num_rows;?> Major Destinations</span>
							<span><i class="bi bi-list fa-fw text-success me-1"></i><?php echo $pkgexpres->num_rows;?> Activities</span>
								
							</div>
							<p><?php echo $pkgrow['subtitle'];?></p>
								
							<?php 
							$daycount = 1;
							while($pkgdayrow = $pkgdayres->fetch_assoc()){
								$pkgdaydestres = $conn->query("SELECT * FROM package_day_destination pdd JOIN destination d ON d.destination_id=pdd.destination_id WHERE pdd.package_day_id=".$pkgdayrow['package_day_id']);

								$pkgdayexpres = $conn->query("SELECT * FROM package_day_experience pde JOIN experience e ON e.experience_id=pde.experience_id WHERE pde.package_day_id=".$pkgdayrow['package_day_id']);
								?>
							<h6 class="fw-light mb-2"><strong>Day <?php echo $pkgdayrow['day'];?></strong></h6>
							<p class="mb-3"><?php echo $pkgdayrow['long_itinerary'];?></p>


							<?php if($daycount == 1 && $pkgdayres->num_rows > 1){?>
								<div class="collapse" id="collapseContent">
									
							<?php }?>
							<?php $daycount++; ?>
							<br>
							<?php }?>
							
							<?php if($pkgdayres->num_rows > 1){?>
							</div>
							<?php }?>

							<?php if($pkgdayres->num_rows > 1){?>
							<a class="p-0 mb-4 mt-2 btn-more d-flex align-items-center collapsed" data-bs-toggle="collapse" href="#collapseContent" role="button" aria-expanded="false" aria-controls="collapseContent">
								See <span class="see-more ms-1">more</span><span class="see-less ms-1">less</span><i class="fa-solid fa-angle-down ms-2"></i>
							</a>
							<?php }?>

							<p><?php echo $pkgrow['package_description'];?></p>
							<!-- Inclusions List -->
							<!--<h5 class="fw-light mb-2"><strong>What's Included</strong></h5>
							<ul class="list-group list-group-borderless mb-0">
								<li class="list-group-item h6 fw-light d-flex mb-0"><i class="bi bi-patch-check-fill text-success me-2"></i>Service of an English-speaking professional driver/guide.</li>
								<li class="list-group-item h6 fw-light d-flex mb-0"><i class="bi bi-patch-check-fill text-success me-2"></i>Transport whilst on safari in a customized safari van with a pop-up roof for game viewing.</li>
								<li class="list-group-item h6 fw-light d-flex mb-0"><i class="bi bi-patch-check-fill text-success me-2"></i>Full Board Accommodation whilst on safari.</li>
								<li class="list-group-item h6 fw-light d-flex mb-0"><i class="bi bi-patch-check-fill text-success me-2"></i>Driver’s salary and allowances plus park fees for driver and vehicle.</li>
							</ul>

							<br>

							<!-- Exclusions List -->
							<!-- <h5 class="fw-light mb-2"><strong>What's Not Included</strong></h5>
							<ul class="list-group list-group-borderless mb-0">
								<li class="list-group-item h6 fw-light d-flex mb-0"><i class="bi bi-x-circle-fill text-danger me-2"></i>International flights.</li>
								<li class="list-group-item h6 fw-light d-flex mb-0"><i class="bi bi-x-circle-fill text-danger me-2"></i>Room upgrades</li>
								<li class="list-group-item h6 fw-light d-flex mb-0"><i class="bi bi-x-circle-fill text-danger me-2"></i>Tips and Gratuities</li>
								<li class="list-group-item h6 fw-light d-flex mb-0"><i class="bi bi-x-circle-fill text-danger me-2"></i>Items of a personal nature i.e., telephone usage, laundry etc.</li>
								<li class="list-group-item h6 fw-light d-flex mb-0"><i class="bi bi-x-circle-fill text-danger me-2"></i>Change in the itinerary.</li>
								<li class="list-group-item h6 fw-light d-flex mb-0"><i class="bi bi-x-circle-fill text-danger me-2"></i>Increase in park fees or other charges beyond our control.</li>
								<li class="list-group-item h6 fw-light d-flex mb-0"><i class="bi bi-x-circle-fill text-danger me-2"></i>Activities not mentioned in the package.</li>

							</ul>-->

						</div>
						<!-- Card body END -->
					</div>
					<!-- About hotel START -->

				</div>	
			</div>
			<!-- Content END -->

			<!-- Right side content START -->
			<aside class="col-xl-5 order-xl-2">
				<div >
					<!-- Book now START -->
					<div class="card card-body border sticky-lg-top" >
						
						<!-- Title -->
						<div class="d-sm-flex justify-content-sm-between align-items-center mb-3 ">
							<div>
								<span>Price Start at</span>
								<h4 class="card-title mb-0"><?php echo $pkgrow['currency'];?> <?php echo number_format($pkgrow['price']);?></h4>
							</div>
							<div>
								<h6 class="fw-normal mb-0">Price applies per person</h6>
								<small></small>
							</div>
						</div>		

						<!-- Rating -->
						<ul class="list-inline mb-2">
							<li class="list-inline-item me-1 h6 fw-light mb-0"><i class="bi bi-arrow-right me-2"></i>4.8</li>
							<li class="list-inline-item me-0 small"><i class="fa-solid fa-star text-warning"></i></li>
							<li class="list-inline-item me-0 small"><i class="fa-solid fa-star text-warning"></i></li>
							<li class="list-inline-item me-0 small"><i class="fa-solid fa-star text-warning"></i></li>
							<li class="list-inline-item me-0 small"><i class="fa-solid fa-star text-warning"></i></li>
							<li class="list-inline-item me-0 small"><i class="fa-solid fa-star-half-alt text-warning"></i></li>
						</ul>

						<p class="h6 fw-light mb-4"><i class="bi bi-arrow-right me-2"></i>Date: <span class="fw-bold"><?php echo $pkgrow['travel_dates'];?></span></p>

						<!-- Button -->
						<div class="d-grid">
							<a href="booking.php?id=<?php echo $pkgid;?>" class="btn btn-lg btn-primary mb-0">Book this Package Now!</a>
						</div>
					</div>
					<!-- Book now END -->

				</div>	
			</aside>
			<!-- Right side content END -->
		</div> <!-- Row END -->
	</div>
</section>
<!-- =======================
About hotel END -->

<!-- Table START -->
<!-- 
<h5 class="fw-light mb-2 text-center"><strong>Package Program</strong></h5>
<div class="table-responsive d-flex justify-content-center px-5" style="padding-left: 30%; padding-right: 30%;">
    <table class="table table-bordered" style="width: 70%; margin: 0 auto;"> <thead class="table-primary">
            <tr>
                <th scope="col">Day</th>
                <th scope="col">Location</th>
                <th scope="col">Accomodation</th>
                <th scope="col">Meal Plan</th>
				<th scope="col">Activity</th>

            </tr>
        </thead>
        <tbody class="align-middle">
            <tr>
                <td class="h6 fw-normal mb-0">1</td>
                <td class="h6 fw-normal mb-0">Amboseli National Park</td>
                <td class="h6 fw-normal mb-0">Aa Lodge</td>
                <td class="h6 fw-normal mb-0">Lunch & Dinner</td>
				<td class="h6 fw-normal mb-0">Evening Game Drive</td>
            </tr>
            <tr>
                <td class="h6 fw-normal mb-0">2</td>
                <td class="h6 fw-normal mb-0">Amboseli National Park</td>
                <td class="h6 fw-normal mb-0">Aa Lodge</td>
                <td class="h6 fw-normal mb-0">Breakfast, Lunch & Dinner</td>
				<td class="h6 fw-normal mb-0">Full-Day Game Drive</td>
            </tr>
			<tr>
                <td class="h6 fw-normal mb-0">3</td>
                <td class="h6 fw-normal mb-0">Amboseli National Park</td>
                <td class="h6 fw-normal mb-0">No Accomadation</td>
                <td class="h6 fw-normal mb-0">Breakfast</td>
				<td class="h6 fw-normal mb-0">Return Jouney</td>
            </tr>
        </tbody>
    </table>
</div>  
 <br>
 <br>
<!-- Table END -->

<!--<div class="sticky-bottom bg-dark d-block d-lg-none d-flex justify-content-around py-3 px-2 z-index-4">
    <h5 class="text-white">3-Day Amboseli Package <br> <span class="text-orange mt-2 h4">$1,500</span></h5>
	<a href="booking.php" class="btn btn-primary">Get this Package Now	</a>

  </div>-->


	<!-- Back to top -->
	<div class="back-top"></div>
	</main>

        <!-- Footer START -->
            <?php include "includes/footer.php";?>
        <!-- Footer END -->

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-Ogq4zTIlKH8fcfcqjsKbQPHbjswQ9vbAKjlkxmYVBFwIWVLRyEkgzBsj2ONiCxp3z" crossorigin="anonymous"></script>


		<!-- Map modal START -->
		<div class="modal fade" id="mapmodal" tabindex="-1" aria-labelledby="mapmodalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<!-- Title -->
					<div class="modal-header">
						<h5 class="modal-title" id="mapmodalLabel">Kiboko Tours & Travel HQ</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<!-- Map -->
					<div class="modal-body p-0">
						<iframe class="w-100" height="400" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.7857943622957!2d36.78912700000001!3d-1.3035297000000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f11694ca41e73%3A0x54248aec19cbbfd4!2sKiboko%20Tours%20and%20Travel!5e0!3m2!1sen!2ske!4v1710861403273!5m2!1sen!2ske"  style="border:0;" aria-hidden="false" tabindex="0"></iframe>	
					</div>
					<!-- Button -->
					<div class="modal-footer">
						<button type="button" class="btn btn-sm btn-primary mb-0"><i class="bi fa-fw bi-pin-map-fill me-2"></i>View In Google Map</button>
					</div>
				</div>
			</div>
		</div>
		<!-- Map modal END -->



    </body>


</html>