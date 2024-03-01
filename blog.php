<?php 
require "includes/connect.php";

if(!isset($_GET['blog'])){
	header('location: blogs.php');
}
$blogid = $_GET['blog'];
$res = $conn->query("SELECT * FROM blog WHERE blog_id='$blogid' ");

$row = $res->fetch_assoc();


?>
<!DOCTYPE html>
<html lang="en">


<head>
	<title><?php echo $row['seo_title']; ?></title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Ganiam Tech">
	<meta name="description" content="<?php echo $row['seo_description']; ?>">
	<meta name="keywords" content="<?php echo $row['seo_keywords']; ?>">

    <meta property="og:title" content="<?php echo $row['seo_title']; ?>">
    <meta name="twitter:title" content="<?php echo $row['seo_title']; ?>">

    <meta property="og:description" content="<?php echo $row['seo_description']; ?>">
    <meta name="twitter:description" content="<?php echo $row['seo_description']; ?>">

    <meta property="og:image" content="https://snapshottoursandsafaris.com/uploads/<?php echo $row['blog_image']; ?>">
    <meta name="twitter:image" content="https://snapshottoursandsafaris.com/uploads/<?php echo $row['blog_image']; ?>">
    <meta property="og:url" content="https://snapshottoursandsafaris.com">
    <meta property="og:site_name" content="Snapshot Tours and Safaris">
    <meta property="og:type" content="article">
   

	<?php include "includes/stylesheets.php";?>

</head>
<body>

    <?php include "includes/navbar.php";?>

<!-- **************** MAIN CONTENT START **************** -->
<main>


<!-- =======================
Main banner START -->
<section class="py-0">
	<div class="container">
		<!-- Title -->
		<div class="row g-4">
			<!-- Image -->
			<div class="col-12">
				<img src="uploads/<?php echo $row['blog_image'];?>" class="rounded-3" alt="<?php echo $row['blog_title'];?>" loading="lazy">
			</div>
			<!-- Title and content -->
			<div class="col-11 col-lg-10 mx-auto position-relative mt-n5 mt-sm-n7 mt-md-n8">
				<div class="bg-mode shadow rounded-3 p-4">
					<!-- Badge -->
					<div class="badge text-bg-<?php echo $row['blog_category_color'];?> mb-2"><?php echo $row['blog_category'];?></div>
					<!-- Title -->
					<h1 class="fs-3"><?php echo $row['blog_title'];?></h1>
					<p class="mb-2"><?php echo $row['blog_description'];?> </p>
					
					<!-- List -->
					<ul class="nav nav-divider align-items-center">
						<li class="nav-item"><?php echo date('M d Y ', strtotime($row['date_created']));?></li>
						<li class="nav-item">5 min read</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Main banner END -->

<!-- =======================
Blog content START -->
<section>
	<div class="container">
		<div class="row">
			
			<div class="col-lg-10 mx-auto">
            <?php echo $row['blog_content'];?>
	
			</div>	
		</div>
	</div>
</section>
<!-- =======================
Blog content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->



<!-- Back to top -->
<div class="back-top"></div>

<?php include "includes/footer.php";?>
<?php include "includes/scripts.php";?>

</body>

</html>


<?php 
$viewins=$conn->query("UPDATE blog SET blog_views=blog_views+1 WHERE blog_id='$blogid'");
?>