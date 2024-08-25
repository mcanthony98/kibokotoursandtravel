<?php 
include "includes/includes.php";
include "includes/header.php";?>
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
				<div class="col-12 mb-2 mb-sm-2">
					<div class="d-sm-flex justify-content-between align-items-center">
						<h1 class="h3 mb-2 mb-sm-0">Add a New Country</h1>			
					</div>
				</div>
			</div>

	<!--Page Conteeeeeeeeeeeeeeeeent-->		


	<!--Main content START -->
<section>
	<div class="container">
		<div class="row">
            <div class="col-lg-10 mx-auto">
                <form class="vstack gap-4" enctype="multipart/form-data" method="post" action="processes/processes.php">

                    <!-- Cab Detail START -->
                    <div class="card shadow">

                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row g-3">
                                <!-- Country name -->
                                <div class="col-12">
                                    <label class="form-label">Country Name</label>
                                    <input class="form-control" type="text" name="cat" placeholder="Enter Country Name" required>
                                </div>

                                <!-- Country Initials -->
                                <div class="col-12">
                                    <label class="form-label">Country Initials</label>
                                    <input class="form-control" type="text" name="initials" placeholder="Enter Country Initials" required>
                                </div>

                                <!-- Short Description -->
                                <div class="col-12">
                                    <label class="form-label">Short Description </label>
                                    <input class="form-control" type="text" name="short_desc" placeholder="Enter Short Description" required/>
                                </div>

                                <!-- Description -->
                                <div class="col-12">
                                    <label class="form-label">Description (30 - 50 Words)</label>
                                    <textarea class="form-control" rows="6" name="desc" placeholder="Enter Description" required></textarea>
                                </div>

                                <!-- Country Flag -->
                                <div class="col-12">
                                    <label class="form-label">Country Flag</label>
                                    <input class="form-control" type="file" accept="image/*" name="flag" placeholder="Choose Flag Image" required>
                                </div>

                                <!-- Photo -->
                                <div class="col-12">
                                    <label class="form-label">Choose Photo</label>
                                    <input class="form-control" type="file" accept="image/*" name="photos" placeholder="Choose Photo" required>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Cab Detail END -->

                    <!-- Button -->
                    <div class="text-end">
                        <button type="submit" name="add-country" class="btn btn-primary mb-0">Add Country</button>
                    </div>
                </form>
            </div>
		</div>
	</div>
</section>



	
	</main>
<!-- **************** MAIN CONTENT END **************** -->

<?php include "includes/scripts.php";?>


</body>


</html>