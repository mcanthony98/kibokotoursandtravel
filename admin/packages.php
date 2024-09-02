<?php 
include "includes/includes.php";
include "includes/header.php";


$qry = $conn->query("SELECT * FROM package ORDER BY title ASC");

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
						<h1 class="h3 mb-2 mb-sm-0">Packages</h1>
						<div class="d-grid">
							<a href="order-packages.php" class="btn btn-primary mb-1"><i class="bi bi-list-ol fa-fw"></i> Order Items</a>
							<a href="add-package.php" class="btn btn-primary mb-0"><i class="bi bi-plus-lg fa-fw"></i>Add New Package</a></div>				
					</div>
				</div>
			</div>

            <!-- Guest list START -->
			<div class="card shadow mt-5">
				<!-- Card body START -->
				<div class="card-body">
					<!-- Table head -->
					<div class="bg-light rounded p-3 d-none d-lg-block">
						<div class="row row-cols-7 g-4">
							<div class="col"><h6 class="mb-0">Package</h6></div>
							<div class="col"><h6 class="mb-0">Price</h6></div>
							<div class="col"><h6 class="mb-0">Dates</h6></div>
							<div class="col"><h6 class="mb-0">Status</h6></div>
							<div class="col"><h6 class="mb-0">Action</h6></div>
						</div>
					</div>

                    <?php 
                    if ($qry->num_rows > 0) {
                        while ($row = $qry->fetch_assoc()) {
                    ?>
					<!-- Table data -->
					<div class="row row-cols-xl-6 align-items-lg-center border-bottom g-4 px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Package</small>
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar avatar-xl flex-shrink-0">
									<img class="avatar-img " src="../uploads/<?php echo $row['package_image'];?>" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-2">
									<h6 class="mb-0 fw-light"><?php echo $row['title'];?> <br> <span class="fs-sm"><?php echo $row['subtitle'];?> </span></h6>
								</div>
							</div>
						</div>

						<!-- Price Data -->
						<div class="col d-none d-lg-block">
							<small class="d-block d-lg-none">Price</small>
							<h6 class="mb-0 fw-normal"><?php echo $row['currency'];?> <?php echo number_format($row['price'], 2);?></h6>
						</div>

						<!-- Dates Data -->
						<div class="col d-none d-lg-block">
							<small class="d-block d-lg-none">Dates</small>
							<h6 class="mb-0 fw-normal"><?php echo $row['travel_dates'] ;?></h6>
						</div>

						<!-- Status Data -->
						<div class="col d-none d-lg-block">
							<small class="d-block d-lg-none">Status</small>
							<?php echo packageStatus($row['package_status']);?>
						</div>

						<!-- Action Data -->
						<div class="col">
							<a href="edit-package.php?pack=<?php echo $row['package_id'];?>" class="btn btn-sm btn-primary mb-0"><i class="fa-solid fa-edit"></i> Edit</a>
							<a class="btn btn-sm btn-warning mb-0" href="processes/processes.php?duplicate_package=<?php echo $row['package_id'];?>"><i class="fa-solid fa-clone"></i> Duplicate</a>
						</div>
					</div>

					<?php 
                        }
                    } else {
                        echo "<p>No packages found.</p>";
                    }
                    ?>

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

<?php 
	function packageStatus($status){
		if($status == 1){
			$output = '<div class="badge bg-success bg-opacity-10 text-success">Visible</div>';
		}elseif($status == 0){
			$output = '<div class="badge bg-orange bg-opacity-10 text-orange">Not Visible</div>';
		}else{
			$output = "";
		}
		return $output;
	}
?>
</body>

</html>
