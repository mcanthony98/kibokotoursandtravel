<?php 
require "includes/connect.php";

if(!isset($_GET['id'])){
	header('location: blog.php');
}
$blogid = $_GET['id'];
$blogres = $conn->query("SELECT * FROM blog WHERE blog_id='$blogid' ");

$blogrow = $blogres->fetch_assoc();


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
<meta name="keywords" content="<?php echo $blogrow['seo_keywords']; ?>">

<meta property="og:title" content="<?php echo $blogrow['seo_title']; ?>">
<meta name="twitter:title" content="<?php echo $blogrow['seo_title']; ?>">

<meta property="og:description" content="<?php echo $blogrow['seo_description']; ?>">
<meta name="twitter:description" content="<?php echo $blogrow['seo_description']; ?>">

<meta property="og:image" content="https://kibokotoursandtravel.com/uploads/<?php echo $blogrow['blog_image']; ?>">
<meta name="twitter:image" content="https://kibokotoursandtravel.com/uploads/<?php echo $blogrow['blog_image']; ?>">
<meta property="og:url" content="https://kibokotoursandtravel.com">
<meta property="og:site_name" content="kiboko tours and travel">
<meta property="og:type" content="article">

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
Main banner START -->
<section class="py-0">
	<div class="container">
		<!-- Title -->
		<div class="row g-4">
			<!-- Image -->
			<div class="col-12">
				<img src="uploads/<?php echo $blogrow['blog_image'];?>" class="rounded-3" alt="<?php echo $blogrow['blog_title'];?>" loading="lazy">
			</div>
			<!-- Title and content -->
			<div class="col-11 col-lg-10 mx-auto position-relative mt-n5 mt-sm-n7 mt-md-n8">
				<div class="bg-mode shadow rounded-3 p-4">
					<!-- Badge -->
					<div class="badge text-bg-<?php echo $blogrow['blog_category_color'];?> mb-2"><?php echo $blogrow['blog_category'];?></div>
					<!-- Title -->
					<h1 class="fs-3"><?php echo $blogrow['blog_title'];?></h1>
					<p class="mb-2"><?php echo $blogrow['blog_description'];?> </p>
					
					<!-- List -->
					<ul class="nav nav-divider align-items-center">
						<li class="nav-item"><?php echo date('M d Y ', strtotime($blogrow['date_created']));?></li>
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
            <?php echo $blogrow['blog_content'];?>
	
			</div>	
		</div>
	</div>
</section>
<!-- =======================
Blog content END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->

        <!-- Footer START -->
        <?php include "includes/footer.php";?>
        <!-- Footer END -->

</body>


</html>