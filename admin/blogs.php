<?php 
include "includes/includes.php";
include "includes/header.php";

$qry = $conn->query("SELECT * FROM blog");

function blogstatus($status){
	if($status == 0){
		$output = '<span class="badge bg-info">Unpublished</span>';
	}elseif($status == 1){
		$output = '<span class="badge bg-success">Active</span>';
	}elseif($status == 2){
		$output = '<span class="badge bg-danger">Disabled</span>';
	}

	return $output;
}
?>
</head>

<body>

<!-- **************** MAIN CONTENT START **************** -->
<main>
	
<?php include "includes/sidebar.php";?>
	
	<!-- Page content START -->
	<div class="page-content">
	
    <?php include "includes/navbar.php";?>
	
		<!-- Page main content START -->
		<div class="page-content-wrapper p-xxl-4">
	
			<!-- Title -->
			<div class="row">
				<div class="col-12 mb-4 mb-sm-5">
					<div class="d-sm-flex justify-content-between align-items-center">
						<h1 class="h3 mb-2 mb-sm-0">Blogs</h1>
						<div class="d-grid"><a href="add-blog.php" class="btn btn-primary-soft mb-0"><i class="bi bi-plus-lg fa-fw"></i> New Blog</a></div>				
					</div>
				</div>
			</div>

	<!--Page Conteeeeeeeeeeeeeeeeent-->		


            <!-- Guest list START -->
			<div class="card shadow mt-5">
				<!-- Card body START -->
				<div class="card-body">
					<!-- Table head -->
					<div class="bg-light rounded p-3 d-none d-lg-block">
						<div class="row row-cols-7 g-4">
							<div class="col"><h6 class="mb-0">Title</h6></div>
							<div class="col"><h6 class="mb-0">Views</h6></div>
							<div class="col"><h6 class="mb-0">Status</h6></div>
							<div class="col"><h6 class="mb-0">Posted on</h6></div>
							<div class="col"><h6 class="mb-0">Action</h6></div>
						</div>
					</div>

                    <?php 
                    while($row = $qry->fetch_assoc()){
                    ?>
					<!-- Table data -->
					<div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Title</small>
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar avatar-xl flex-shrink-0">
									<img class="avatar-img " src="../uploads/<?php echo $row['blog_image'];?>" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-2">
									<h6 class="mb-0 fw-light"><?php echo $row['blog_title'];?></h6>
								</div>
							</div>
						</div>	

						<!-- Data item -->
						<div class="col d-none d-lg-block">
							<small class="d-block d-lg-none">Views</small>
							<h6 class="mb-0 fw-normal"><?php echo $row['blog_views'];?> Views</h6>
						</div>

						<!-- Data item -->
						<div class="col d-none d-lg-block">
							<small class="d-block d-lg-none">Status</small>
							<h6 class="mb-0 fw-normal"><?php echo blogstatus($row['blog_status']);?> </h6>
						</div>

                        <!-- Data item -->
						<div class="col d-none d-lg-block">
							<small class="d-block d-lg-none">Posted</small>
							<h6 class="mb-0 fw-normal"><?php echo date('d/m/Y ', strtotime($row['date_created']));?></h6>
						</div>

						

						<!-- Data item -->
						<div class="col"><a href="edit-blog.php?blog=<?php echo $row['blog_id'];?>" class="btn btn-sm btn-primary mb-0"><i class="fa-solid fa-edit"></i> Edit</a></div>
					</div>

					<?php } ?>

				</div>
				<!-- Card body END -->

				
			</div>
			<!-- Guest list END -->



	
		</div>
		<!-- Page main content END -->
	</div>
	<!-- Page content END -->
	
	</main>
<!-- **************** MAIN CONTENT END **************** -->

<?php include "includes/scripts.php";?>

</body>


</html>