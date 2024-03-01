<?php 
require "includes/connect.php";

if(!isset($_GET['destination'])){
	header('location: index.php');
}
$destid = $_GET['destination'];
$destres = $conn->query("SELECT *, d.seo_title AS tit, d.seo_description AS descr, d.seo_keywords AS kw FROM destination d JOIN country c ON d.country_id=c.country_id WHERE d.destination_id=$destid");
$destrow = $destres->fetch_assoc();

$destcatres = $conn->query("SELECT * FROM destination_category dc JOIN category c ON dc.category_id=c.category_id WHERE dc.destination_id='$destid'");
$destcatrow = $destcatres->fetch_assoc();


$destexpres = $conn->query("SELECT * FROM destination_experience de JOIN experience e ON de.experience_id=e.experience_id WHERE de.destination_id='$destid'");
if($destexpres->num_rows < 5){
	$expcounts = 5 - $destexpres->num_rows;
}else{
	$expcounts = 0;
}

$destexpotherres = $conn->query("SELECT * FROM experience LIMIT $expcounts");

$destpkgres = $conn->query("SELECT * FROM package p JOIN package_day pd ON p.package_id=pd.package_id JOIN package_day_destination pdd ON pdd.package_day_id=pd.package_day_id WHERE pdd.destination_id=$destid AND p.package_status=1 GROUP BY pd.package_id");


function shortenString($inputString) {
    // Calculate the length of the input string
    $length = strlen($inputString);

    // Check if the length is more than 60 characters
    if ($length > 45) {
        // If yes, truncate the string to 60 characters and add three dots
        $shortenedString = substr($inputString, 0, 45) . '...';
    } else {
        // If not, keep the original string
        $shortenedString = $inputString;
    }

    // Output the result
    echo $shortenedString;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title><?php echo $destrow['tit'];?> | Snapshot Tours and Safaris</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="">
	<meta name="description" content="<?php echo $destrow['descr'];?>">
	<meta name="keywords" content="<?php echo $destrow['kw'];?>">

	<?php include "includes/stylesheets.php";?>

</head>

<body>
	<?php include "includes/navbar.php";?>


<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- =======================
Main Banner START -->
<section class="pt-0">
	<div class="container position-relative">
		<!-- Background image -->
		<div class="p-3 p-sm-5 rounded-3" style="background-image: url(uploads/<?php echo $destcatrow['category_image'];?>); background-position: center center; background-repeat: no-repeat; background-size: cover;min-height: 400px">
			<!-- Banner title -->
			<div class="row"> 
				<div class="col-md-8 mx-auto my-5 text-light bg-primary py-3 rounded-3"> 
					<h1 class="text-center "><?php echo $destrow['destination_name'].", ".$destrow['country_name'];?></h1>
					<ul class="nav nav-divider h6 text-dark mb-0 justify-content-center">
						<li class="nav-item"><a href="#experiences-section"><?php echo $destexpres->num_rows;?> Experience(s)</a></li>
						<li class="nav-item"><a href="#packages-section"><?php echo $destpkgres->num_rows;?> Package(s)</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Main Banner END -->
		
<!-- =======================
Main Title START -->
<section class="py-0 pt-sm-5 d-none">
	<div class="container position-relative">
		<!-- Title and button START -->
		<div class="row mb-3">
			<div class="col-12">
				<!-- Meta -->
				<div class="d-lg-flex justify-content-lg-between mb-1">
					<!-- Title -->
					<div class="mb-2 mb-lg-0">
						<h1 class="fs-2"><?php echo $destrow['destination_name'].", ".$destrow['country_name'];?></h1>
						<!-- Location -->
						<p class="fw-bold mb-0"><i class="bi bi-geo-alt me-2"></i><?php echo $destrow['location'];?>
							<a href="#" class="ms-2 text-decoration-underline" data-bs-toggle="modal" data-bs-target="#mapmodal">
								<i class="bi bi-eye-fill me-1"></i>View On Map
							</a>
						</p>
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
		<div class="d-none alert alert-info alert-dismissible d-flex justify-content-between align-items-center fade show mb-4 rounded-3 pe-2" role="alert">
			<div class="d-flex">
				<span class="alert-heading h5 mb-0 me-2"><i class="bi bi-exclamation-octagon-fill"></i></span>
				<span><strong class="alert-heading me-2">Covid Policy:</strong>You may require to present an RT-PCR negative test report at the hotel</span>
			</div>
				<button type="button" class="btn btn-link text-primary-hover pb-0 text-end" data-bs-dismiss="alert" aria-label="Close"><i class="bi bi-x-lg"></i></button>
		</div>
		<!-- Alert box END -->
	</div>
</section>
<!-- =======================
Main Title END -->

<!-- =======================
Image gallery START -->
<section class="card-grid pt-0 d-none">
	<div class="container">
		<div class="row g-2">
			<!-- Image -->
			<div class="col-md-6">
				<a data-glightbox data-gallery="gallery" href="assets/images/gallery/14.jpg">
					<div class="card card-grid-lg card-element-hover card-overlay-hover overflow-hidden" style="background-image:url(assets/images/gallery/14.jpg); background-position: center left; background-size: cover;">
						<!-- Card hover element -->
						<div class="hover-element position-absolute w-100 h-100">
							<i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
						</div>
					</div>
				</a>
			</div>

			<div class="col-md-6">
				<!-- Card item START -->
				<div class="row g-2"> 
					<!-- Image -->
					<div class="col-12">
						<a data-glightbox data-gallery="gallery" href="assets/images/gallery/13.jpg">
							<div class="card card-grid-sm card-element-hover card-overlay-hover overflow-hidden" style="background-image:url(assets/images/gallery/13.jpg); background-position: center left; background-size: cover;">
								<!-- Card hover element -->
								<div class="hover-element position-absolute w-100 h-100">
									<i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
								</div>
							</div>
						</a>	
					</div>

					<!-- Image -->
					<div class="col-md-6">
						<a data-glightbox data-gallery="gallery" href="assets/images/gallery/12.jpg">
							<div class="card card-grid-sm card-element-hover card-overlay-hover overflow-hidden" style="background-image:url(assets/images/gallery/12.jpg); background-position: center left; background-size: cover;">
								<!-- Card hover element -->
								<div class="hover-element position-absolute w-100 h-100">
									<i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
								</div>
							</div>
						</a>	
					</div>

					<!-- Images -->
					<div class="col-md-6">
						<div class="card card-grid-sm overflow-hidden" style="background-image:url(assets/images/gallery/11.jpg); background-position: center left; background-size: cover;">
							<!-- Background overlay -->
							<div class="bg-overlay bg-dark opacity-7"></div>

							<!-- Popup Images -->
							<a data-glightbox="" data-gallery="gallery" href="assets/images/gallery/11.jpg" class="stretched-link z-index-9"></a>
							<a data-glightbox="" data-gallery="gallery" href="assets/images/gallery/15.jpg"></a>
							<a data-glightbox="" data-gallery="gallery" href="assets/images/gallery/16.jpg"></a>

							<!-- Overlay text -->
							<div class="card-img-overlay d-flex h-100 w-100">
								<h6 class="card-title m-auto fw-light text-decoration-underline"><a href="#" class="text-white">View all</a></h6>
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
Image gallery END -->


<!-- =======================
About START -->
<section class="pt-5 pt-md-5 pb-0">
	<div class="container z-index-9">
		<div class="row">
			<div class="col-lg-10 m-auto text-center">
				<h2><?php echo $destrow['catchy_title'];?></h2>
				
				<p class="lead"><?php echo $destrow['description'];?></p>

				<p class="fw-bold mb-0">Located: <i class="bi bi-geo-alt me-2"></i><?php echo $destrow['location'];?>
					<a href="#" class="ms-2 text-decoration-underline" data-bs-toggle="modal" data-bs-target="#mapmodal">
						<i class="bi bi-eye-fill me-1"></i>View On Map
					</a>
				</p>
				

				<!-- Button and rating -->
				<div class="d-sm-flex justify-content-center align-items-center mt-4">
					<!-- Button -->
					<div> <a href="book-a-trip.php" class="btn btn-lg btn-dark mb-0">I want to visit</a> </div>
				</div>
			</div>
		</div> <!-- Row END -->
	</div>
</section>
<!-- =======================
About END -->


<!-- =======================
Experience START -->
<section class="pt-5 pt-md-8 pb-0" id="experiences-section">
	<div class="container-fluid px-lg-5">
		<!-- Title -->
		<div class="row mb-4">
			<div class="col-12 text-center">
				<h2>What you will Experience</h2>
			</div>
		</div>

		<!-- Slider START -->
		<div class="tiny-slider arrow-round arrow-blur rounded-3 overflow-hidden">
			<div class="tiny-slider-inner" data-autoplay="true" data-arrow="true" data-dots="false" data-items-xl="4" data-items-lg="3" data-items-md="2" data-items-xs="1">

			<?php 
			while($destexprow = $destexpres->fetch_assoc()){
				?>
					<!-- Card item START -->
					<div>
						<div class="card card-metro overflow-hidden">
							<img src="uploads/<?php echo $destexprow['experience_image'];?>" alt="<?php echo $destexprow['experience_name'];?> with snapshot tours and safaris" style="height:360px">
							<!-- Image overlay -->
							<div class="card-img-overlay d-flex"> 
								<!-- Info -->
								<div class="card-text mt-auto">
									<h4><a href="#!" class="text-white stretched-link"><?php echo $destexprow['experience_name'];?> </a></h4>
									<p class="text-white mb-2"><?php echo shortenString($destexprow['short_description']);?> </p>
									
								</div>
							</div>
						</div>
					</div>
					<!-- Card item END -->
					<?php } ?>

					
					<?php 
			while($destexprow = $destexpotherres->fetch_assoc()){
				?>
					<!-- Card item START -->
					<div>
						<div class="card card-metro overflow-hidden">
							<img src="uploads/<?php echo $destexprow['experience_image'];?>" alt="<?php echo $destexprow['experience_name'];?> with snapshot tours and safaris" style="height:360px">
							<!-- Image overlay -->
							<div class="card-img-overlay d-flex"> 
								<!-- Info -->
								<div class="card-text mt-auto">
									<h4><a href="#!" class="text-white stretched-link"><?php echo $destexprow['experience_name'];?> </a></h4>
									<p class="text-white mb-2"><?php echo shortenString($destexprow['short_description']);?> </p>
									
								</div>
							</div>
						</div>
					</div>
					<!-- Card item END -->
					<?php } ?>

			</div>	
		</div>
	</div>
</section>
<!-- =======================
Experience END -->

<!-- =======================
Tour grid START -->
<section class="pt-5 mt-5" id="packages-section">
	<div class="container">
    
    <!-- Title -->
		<div class="row mb-5">
			<div class="col-12 text-center">
				<h3 class="mb-0">Related Packages</h3>
			</div>
		</div>

		<div class="row g-4">


		<?php while($destpkgrow = $destpkgres->fetch_assoc()){
			$daysnightscountres = $conn->query("SELECT * FROM package_day WHERE package_id=".$destpkgrow['package_id']);
			?>
			<!-- Card item START -->
			<div class="col-md-6 col-xl-4">
				<div class="card card-hover-shadow pb-0 h-100">
					<!-- Overlay item -->
					<div class="position-relative">
						<!-- Image -->
						<img src="uploads/<?php echo $destpkgrow['package_image'];?>" class="card-img-top" alt="<?php echo $destpkgrow['title'];?>" style="height:300px" >
						<!-- Overlay -->
						<div class="card-img-overlay d-flex flex-column p-4 z-index-1">
							<!-- Card overlay top -->
							<!--<div>
								<span class="badge text-bg-danger">30% Off</span>
								<span class="badge text-bg-dark">Adventure</span>
							</div>-->
							<!-- Card overlay bottom -->
							<div class="w-100 mt-auto">
								<span class="badge text-bg-white fs-6"><?php echo $daysnightscountres->num_rows;?> days / <?php echo $daysnightscountres->num_rows-1;?> nights</span>
							</div>
						</div>
					</div>
					<!-- Image -->

					<!-- Card body START -->
					<div class="card-body px-3">
						<!-- Title -->
						<h5 class="card-title mb-0"><a href="package.php?package=<?php echo $destpkgrow['package_id'];?>" class="stretched-link"><?php echo $destpkgrow['title'];?></a></h5>
						<span class="small"><i class="far fa-calendar-alt me-2"></i><?php echo $destpkgrow['subtitle'];?></span>
					</div>
					<!-- Card body END -->

					<!-- Card footer START-->
					<div class="card-footer pt-0">
						<!-- Price and Button -->
						<div class="d-sm-flex justify-content-sm-between align-items-center flex-wrap">
							<!-- Price -->
							<div class="hstack gap-2">
								<h5 class="fw-normal text-success mb-0">$<?php echo $destpkgrow['price'];?></h5>
								<small>/per person</small>
								<span class="text-decoration-line-through">$<?php echo $destpkgrow['price']*1.3;?></span>
							</div>
							<!-- Button -->
							<div class="mt-2 mt-sm-0">
								<a href="#" class="btn btn-sm btn-warning mb-0">View Details</a>    
							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- Card item END -->

			<?php } ?>

		</div>
</section>
<!-- =======================
Tour grid END -->


								
	

</main>
<!-- **************** MAIN CONTENT END **************** -->





<?php include "includes/footer.php";?>
<?php include "includes/scripts.php";?>

<!-- Map modal START -->
<div class="modal fade" id="mapmodal" tabindex="-1" aria-labelledby="mapmodalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<!-- Title -->
			<div class="modal-header">
				<h5 class="modal-title" id="mapmodalLabel"><?php echo $destrow['destination_name'].", ".$destrow['country_name'];?></h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<!-- Map -->
			<div class="modal-body p-2 text-center">
				<?php echo $destrow['map_iframe'];?>
			</div>
			<!-- Button -->
			<!--<div class="modal-footer">
				<button type="button" class="btn btn-sm btn-primary mb-0"><i class="bi fa-fw bi-pin-map-fill me-2"></i>View In Google Map</button>
			</div>-->
		</div>
	</div>
</div>
<!-- Map modal END -->

</body>


</html>