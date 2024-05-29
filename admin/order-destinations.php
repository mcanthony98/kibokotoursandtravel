<?php 
include "includes/includes.php";
include "includes/header.php";

$qry = $conn->query("SELECT * FROM destination JOIN country ON destination.country_id=country.country_id ORDER BY CASE WHEN priority = 0 THEN 1 ELSE 0 END,priority");

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
						<h1 class="h3 mb-2 mb-sm-0">Order Destinations</h1>
						<div class="d-grid"><a href="destinations.php" class="btn btn-primary mb-1"><i class="bi bi-arrow-bar-left fa-fw"></i> Back to Destinations</a></div>				
					</div>
				</div>
			</div>

	<!--Page Conteeeeeeeeeeeeeeeeent-->		


            <!-- Guest list START -->
			<div class="card shadow mt-5">
				<div class="pt-2 ps-2">
					<p class="mb-0">Items will appear in the website as they appear here. (<a href="">REFRESH/RELOAD</a> this page after editing to see new order of items) <br>Items are ordered starting from 1 (Priority 0 is not ranked and will appear last). Eg: 1, 1, 2, 3, 3, 7, 10, 100, 0, 0, 0, 0.</p>
				</div>
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
							<small class="d-block d-lg-none">Description</small>
							<h6 class="mb-0 fw-normal"><?php echo $row['country_name'];?></h6>
						</div>

						

						<!-- Data item -->
						<div class="col">
							<input type="number" min="0" class="form-control priority_input" value="<?php echo $row['priority'];?>" id="<?php echo $row['destination_id'];?>">
							<small style="display:none;" class="text-success saved-conf<?php echo $row['destination_id'];?>"><i class="bi bi-check"></i> <i>Saved</i></small>
							<small style="display:none;" class="saving-conf<?php echo $row['destination_id'];?>"><i>Saving...</i></small>
						</div>
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

<script>
	$(document).ready(function() {
		$('.priority_input').on('change', function() {
			// Fetch the value and the ID of the changed input field
			var inputValue = $(this).val();
			var inputId = $(this).attr('id');
			// Show the hidden element
			$('.saving-conf'+inputId).show();
			$('.saved-conf'+inputId).hide();

			$.ajax({  
                url:"processes/processes.php",  
                method:"POST",  
                data: {
                        dest_priority: inputId,
                        value: inputValue
                    },  
                success:function(data){  
					if(data==1){
						$('.saving-conf'+inputId).hide();
						$('.saved-conf'+inputId).show();
					}else{

					}
                }  
           });  

			//alert("inputValue:"+inputValue+", id:"+inputId);
		});
	});
    </script>

</body>


</html>