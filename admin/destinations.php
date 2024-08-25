<?php 
include "includes/includes.php";
include "includes/header.php";

$qry = $conn->query("SELECT * FROM destination JOIN country ON destination.country_id=country.country_id ORDER BY destination_name ASC");

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
						<h1 class="h3 mb-2 mb-sm-0">Destinations</h1>
						<div class="d-grid"><a href="order-destinations.php" class="btn btn-primary mb-1"><i class="bi bi-list-ol fa-fw"></i> Order Items</a><a href="add-destination.php" class="btn btn-primary mb-0"><i class="bi bi-plus-lg fa-fw"></i>Add New Destination</a></div>				
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
							<div class="col"><h6 class="mb-0">Destination</h6></div>
							<div class="col"><h6 class="mb-0">Country</h6></div>
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
							<small class="d-block d-lg-none">Destination</small>
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar avatar-xl flex-shrink-0">
									<img class="avatar-img " src="../uploads/<?php echo $row['destination_image'];?>" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-2">
									<h6 class="mb-0 fw-light"><?php echo $row['destination_name'];?></h6>
								</div>
							</div>
						</div>	

						<!-- Data item -->
						<div class="col d-none d-lg-block">
							<small class="d-block d-lg-none">Country</small>
							<h6 class="mb-0 fw-normal"><?php echo $row['country_name'];?></h6>
						</div>

						

						<!-- Data item -->
						<div class="col"><a href="edit-destination.php?dest=<?php echo $row['destination_id'];?>" class="btn btn-sm btn-primary mb-0"><i class="fa-solid fa-edit"></i> Edit</a></div>
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