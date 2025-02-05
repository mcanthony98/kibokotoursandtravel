<?php 
require "includes/connect.php";

if(!isset($_GET['id'])){
	header('location: blog.php');
}
$blogid = $_GET['id'];
$blogres = $conn->query("SELECT * FROM blog WHERE blog_id='$blogid' ");

$blogrow = $blogres->fetch_assoc();


?>
<?php 
        $seo_title = $blogrow['seo_title']; 
        $seo_desc =  $blogrow['seo_description']; 

        $seo_img = "uploads/".$blogrow['blog_image'];
        $og_type = "article";
        $canonical = "blog-detail.php?id=".$blogrow['blog_id']."&".$blogrow['blog_slag'];
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