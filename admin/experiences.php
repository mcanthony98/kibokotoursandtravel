<?php 
include "includes/includes.php";
include "includes/header.php";

// Modified query with LEFT JOIN to include experiences even if there's no matching country
$qry = $conn->query("SELECT * FROM experience ORDER BY experience_name ASC");

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
						<h1 class="h3 mb-2 mb-sm-0">Experiences</h1>
						<div class="d-grid">
							<a href="order-experiences.php" class="btn btn-primary mb-1"><i class="bi bi-list-ol fa-fw"></i> Order Items</a>
							<a href="add-experience.php" class="btn btn-primary mb-0"><i class="bi bi-plus-lg fa-fw"></i>Add New Experience</a>
						</div>				
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
							<div class="col"><h6 class="mb-0">Experience</h6></div>
							<div class="col"><h6 class="mb-0">Description</h6></div>
							<div class="col"><h6 class="mb-0">Action</h6></div>
						</div>
					</div>

                    <?php 
                    if ($qry->num_rows > 0) {
                        while ($row = $qry->fetch_assoc()) {
                    ?>
					<!-- Table data -->
					<div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
						<!-- Experience Data -->
						<div class="col">
							<small class="d-block d-lg-none">Experience</small>
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar avatar-xl flex-shrink-0">
									<img class="avatar-img" src="../uploads/<?php echo $row['experience_image'];?>" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-2">
									<h6 class="mb-0 fw-light"><?php echo $row['experience_name'];?></h6>
								</div>
							</div>
						</div>

						<!-- Description -->
						<div class="col d-none d-lg-block">
							<small class="d-block d-lg-none">Description</small>
							<h6 class="mb-0 fw-normal"><?php echo $row['description'];?></h6>
						</div>	

						<!-- Action -->
						<div class="col">
							<a href="edit-experience.php?exp=<?php echo $row['experience_id'];?>" class="btn btn-sm btn-primary mb-0">
								<i class="fa-solid fa-edit"></i> Edit
							</a>
						</div>
					</div>

					<?php 
                        }
                    } else {
                        echo "<p>No experiences found.</p>";
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

</body>
</html>
