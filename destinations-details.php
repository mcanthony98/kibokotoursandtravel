<?php 
require "includes/connect.php";

if(!isset($_GET['id'])){
	header('location: index.php');
}
$destid = $_GET['id'];
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

?>
<?php 
        $seo_title = $destrow['tit']; 
        $seo_desc = $destrow['descr']; 

        $seo_img = "uploads/".$destrow['destination_image'];
        $og_type = "website";
        $canonical = "destinations-details.php?id=".$destrow['destination_id']."&".$destrow['destination_slag']."/";
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

        <main>
<!-- =======================
About START -->
<section class="pt-4">
	<div class="container">
		<div class="row g-4">
			
			<div class="col-lg-6 position-relative">
				<h2><?php echo $destrow['destination_name'];?></h2>
				<p><?php echo $destrow['description'];?></p>
				<a href="#related-packages" class="btn btn-outline-primary">Choose a package</a>


			</div>

			<div class="col-lg-5 position-relative ms-auto">
				<!-- Svg decoration -->
				<figure class="position-absolute top-0 start-0 translate-middle mt-8 ms-n4 z-index-9 d-none d-xl-block">
					<svg class="fill-orange" width="153.6px" height="71.4px" viewBox="0 0 153.6 71.4" style="enable-background:new 0 0 153.6 71.4;" xml:space="preserve">
						<path d="M14.4,0.8c-2.3,0.4-4.6,0.9-6.8,1.5C6.7,2.6,5.8,2.8,4.9,3.1S3,3.7,2.3,4.2c-0.6,0.3-1.1,1-1.5,1.4C0.3,6.2,0,6.9,0,7.6 c0,0.1,0,0.2,0.1,0.3C0.2,8.1,0.6,8,0.8,7.9c0.7-0.4,1.4-0.7,2.1-1.1c0.5-0.3,1-0.6,1.6-0.7c1.1-0.2,2.1-0.6,3.1-0.9 c3.4-1,7-1.4,10.5-1.7c6.5-0.6,12.9,0,19.2,1.4c2.7,0.6,5.5,1.3,8.2,1.9c2.2,0.6,4.5,1.1,6.7,1.8c1.1,0.3,2.2,0.6,3.4,1 c1,0.3,2.2,0.6,3.2,1c0.3,0.2,0.6,0.4,0.9,0.6c0.5,0.2,1,0.3,1.4,0.5c1,0.3,1.9,0.7,2.8,1.2c1.8,0.9,3.5,2,5.1,3.3 c1.5,1.2,3,2.5,4.4,3.8c0.6,0.6,1.4,1.4,2,2.1c0.1,0.1,0.4,0.3,0.3,0.5c0,0.2-1,0.2-1.1,0.2c-0.7,0-1.4,0.1-2.1,0.2 c-2.9,0.3-5.8,0.7-8.6,1.4c-2,0.6-4,1.3-5.8,2.2c-0.9,0.5-1.8,1-2.6,1.7c-0.7,0.6-1.4,1.4-2.2,1.8c-1,0.6-1.8,1.8-2.2,3 c-0.6,1.3-0.8,2.7-0.8,4.1c-0.1,2.1,2.6,5.3,4.9,6.1c4.4,1.5,8.5,0.1,12.7-0.6c3.8-0.6,6.9-2.6,10.1-4.6c2.8-1.8,5.3-3.9,4.6-7.8 c-0.2-1.5,0.5-1.4,1.6-1.2c0.2,0,0.2,0.1,0.4,0.1c4.5,0.7,9,1,13.4,2.2c4.6,1.2,8.9,3,13,5.1c3.5,1.9,6.7,4.4,9.8,6.9 c0.9,0.6,1.8,1.4,2.6,2.1c0.8,0.6,1.8,1.2,2.5,2c0.6,0.7,1.4,1.1,2.1,1.6c0.8,0.6,1.7,1.2,2.5,1.8c0.7,0.6,1.4,1.1,2.1,1.8 c0.3,0.3,0.6,0.6,1,1c1,0.9,2.2,1.4,3.1,2.2c0.3,0.2,0.5,0.6,0.7,0.8c0.5,0.4,0.9,0.8,1.4,1.2c0.9,0.8,1.8,1.5,2.7,2.3 c0.4,0.3,0.7,0.6,1.1,1c0.2,0.2,0.7,0.5,0.7,0.8c0,0.2,0,0.2-0.2,0.2c-0.2,0.1-0.7-0.1-1-0.1c-0.2,0-0.4,0-0.6,0 c-0.6,0.1-1.1,0.1-1.7,0.2c-2.2,0.2-4.4,0.8-6.5,1.4c-0.6,0.2-1.2,0.3-1.5,0.8c-0.4,0.5-0.2,1.3,0.3,1.4c0.2,0.1,0.4,0,0.6,0 c3.8-0.6,7.6,0,11,1.4c1.6,0.6,3.2,1.4,4.6,2.5c0.3,0.2,0.6,0.4,0.9,0.6c0.7,0.4,1.4,0.9,2.1,1.3c0.3,0.2,0.6,0.4,1,0.4 c0.6-0.1,1-0.7,1.3-1.4c0.1-0.3,0.2-0.6,0.2-0.9c-0.1-0.2-0.2-0.5-0.7-0.7c-0.6-0.7-1.4-1.4-1.7-2.2c-0.4-0.9-1-1.6-1.4-2.4 c-0.9-1.7-1.4-3.7-1.6-5.6c-0.4-3,0-5.9,0.6-8.9c0.1-0.2,0.1-0.3,0-0.5c-0.1-0.1-0.2-0.2-0.3-0.2c-0.6-0.3-1.4-0.1-1.9,0.5 c-0.5,0.5-0.7,1.2-0.9,1.9c-0.4,1.4-0.6,3-0.6,4.4c0,0.6,0.2,1,0.2,1.6c-0.8-0.6-1.4-1.4-2.2-2.2c-0.6-0.6-1.2-1-1.8-1.5 c-0.8-0.7-1.7-1.5-2.5-2.2c-0.8-0.7-1.7-1.4-2.4-2.2c-0.9-1-1.9-1.8-2.9-2.6c-1.1-1-2.3-2.1-3.4-3.1c-0.6-0.6-1.2-1.2-1.9-1.6 c-0.7-0.3-1.4-0.7-2-1.3c-1.5-1.4-3.1-2.6-4.7-3.9c-3.2-2.5-6.5-4.9-10.1-6.6c-4-2-8.5-3.1-12.8-4.3c-1.4-0.4-2.7-0.7-4.1-1.1 c-2.6-0.7-5.2-1-7.8-1.3c-0.6,0-1-0.2-1.5-0.2c-1.1,0-2.2,0.2-3.4,0.1c-0.4,0-0.7-0.2-1-0.5c-0.8-0.9-1.4-1.8-2.2-2.7 c-0.2-0.4-0.5-0.8-0.7-1.1c-0.2-0.4-0.8-0.6-1.1-1c-0.6-0.7-1.3-1.4-2-2.2c-1.4-1.4-2.9-2.6-4.5-3.8c-2.2-1.6-4.5-3-6.9-4.2 c-1-0.6-2.2-1.3-3.4-1.4c-0.3-0.1-0.6-0.1-1-0.1c-0.5-0.1-1-0.2-1.4-0.4c-2.2-0.7-4.3-1.4-6.5-2c-4.3-1.2-8.7-2.2-13.2-2.9 c-0.8-0.1-1.5-0.3-2.3-0.2c-0.4,0-0.8,0.1-1.2,0c-1.1-0.2-2.3-0.3-3.4-0.4C28.9,0,26.6,0,24.3,0c-2.1,0.1-4.2,0.3-6.2,0.4 c-0.2,0-0.2,0-0.3,0C16.6,0.5,15.4,0.7,14.4,0.8z M71.3,28.3c0.7-0.1,1.4-0.4,2.2-0.4c2-0.1,4,0.1,5.9,0.4c0.3,0,0.6,0.1,0.7,0.2 c0.2,0.2,0.1,0.5,0,0.7C80,29.5,80,29.8,79.9,30c-0.2,0.6-0.7,1.2-1.2,1.7c-3,3-6.9,4.6-10.8,5.6c-3.7,1-7.6,2.2-11.6,1 c-1.1-0.4-2.5-0.5-2.8-1.8c-0.4-1.4,1-2,1.8-2.7c4-3.4,8.9-4.3,12.9-4.9C69.2,28.6,70.2,28.5,71.3,28.3z"/>
					</svg>
				</figure>
				<!-- Image -->
				<div class="position-relative mb-5">
					<!-- Image -->
					<img src="uploads/<?php echo $destrow['destination_image'];?>" class="rounded-3 w-100" loading="lazy"  alt="a picture of <?php echo $destrow['destination_name'];?>">
					<!-- Manager -->
					<div class="position-absolute bottom-0 start-0 ms-n3 ms-lg-n6 mb-2 z-index-1">
						<div class="bg-mode shadow d-inline-block text-center rounded-3 position-relative p-4">
							<span class="h3 text-primary-kiboko mb-2">4.9</span>
							<h6 class="fw-normal">Global Rating</h6>
						</div>
					</div>
					
				</div>	

			</div>
		</div>

	</div>
</section>
<!-- =======================
About END -->

<!-- =======================
Offers START -->
<section class="pt-5 pt-md-5 pb-0 d-flex justify-content-center align-items-center">
	<div class="container-fluid ">
		<!-- Title -->
		<div class="row mb-4">
			<div class="col-12 text-center">
				<h2>Available Activities</h2>
			</div>
		</div>

		<div class="row g-4 justify-content-center align-items-center">

		<?php 
			while($destexprow = $destexpres->fetch_assoc()){
				?>
			<!-- Offer item -->
			<div class="col-6 col-md-4 col-xl-2">
				<div class="card bg-transparent h-100">
					<img src="uploads/<?php echo $destexprow['experience_image'];?>" class="card-img" loading="lazy" alt="<?php echo $destexprow['experience_name'];?> with Kiboko Tours and Travel">
					<div class="card-body text-center p-2">
						<h6 class="mb-0"><a href="experience-details.php?id=<?php echo $destexprow['experience_id'];?>&<?php echo $destexprow['experience_slag'];?>" class="stretched-link"><?php echo $destexprow['experience_name'];?></a></h6>
						<p><?php echo substr($destexprow['description'], 0, 35);?>...</p>
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
Packages START -->
<section class="pt-0 pt-md-5" id="related-packages">
	<div class="container">
		<!-- Title -->
		<div class="row mb-4">
			<div class="col-12 text-center">
				<h2 class="mb-0">Choose a Package</h2>
			</div>
		</div>

		<div class="row g-4">

		<?php while($destpkgrow = $destpkgres->fetch_assoc()){
			$daysnightscountres = $conn->query("SELECT * FROM package_day WHERE package_id=".$destpkgrow['package_id']);
			?>
			<!-- Package item -->
			<div class="col-sm-6 col-xl-4">
				<!-- Card START -->
				<div class="card card-img-scale overflow-hidden bg-transparent">
					<div class="card-img-scale-wrapper rounded-3">
						<!-- Card Image -->
						<img src="uploads/<?php echo $destpkgrow['package_image'];?>" class="card-img" alt="<?php echo $destpkgrow['title'];?>" loading="lazy">
						<!-- Overlay -->
						<div class="card-img-overlay d-flex flex-column z-index-1 p-4">
							<!-- Card overlay top -->
							<div class="d-flex justify-content-between">
								<span class="badge text-bg-white"><i class="fa-solid fa-star text-warning me-2"></i>4.8</span>
							</div>
							<!-- Card overlay bottom -->
							<div class="w-100 mt-auto">
								<!-- Card category -->
								<span class="badge text-bg-dark fs-6"><?php echo $daysnightscountres->num_rows;?> days</span>
							</div>
						</div>
					</div> 
					
					<!-- Card body -->
					<div class="card-body px-2">
						<!-- Title -->
						<h5 class="card-title"><a href="package-details.php?id=<?php echo $destpkgrow['package_id'];?>&<?php echo $destpkgrow['title_slag'];?>" class="stretched-link"><?php echo $destpkgrow['title'];?></a></h5>
						
						<p><small><?php echo $destpkgrow['subtitle'];?></small></p>
						<!-- Content -->
						<div class="hstack gap-2">
							<span class="h5 mb-0 text-success"><?php echo $destpkgrow['currency'];?> <?php echo $destpkgrow['price'];?></span>
							
						</div>
					</div>
				</div>
				<!-- Card END -->
			</div>
		<?php } ?>
			

		</div> <!-- Row END -->
	</div>
</section>
<!-- =======================
Packages END -->


        </main>

        <!-- Footer START -->
            <?php include "includes/footer.php";?>
        <!-- Footer END -->
    </body>


</html>