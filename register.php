<?php 
require "includes/connect.php";

?>
<?php 
        $seo_title = "Register | Kiboko Tours & Travel"; 
        $seo_desc = "Kiboko Tours and Travel offers safari tours, travel booking, hotel reservations, beach tours, and gorilla trekking in Kenya and beyond."; 

        $seo_img = "assets/images/kiboko.jpeg";
        $og_type = "website";
        $canonical = "register.php/";
        $robot = "noindex, nofollow";
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
Main Content START -->
<section class="vh-xxl-100">
	<div class="container h-100 d-flex px-0 px-sm-4">
		<div class="row justify-content-center align-items-center m-auto">
			<div class="col-12">
				<div class="bg-mode shadow rounded-3 overflow-hidden">
					<div class="row g-0">
						<!-- Vector Image -->
						<div class="col-lg-6 d-md-flex align-items-center order-2 order-lg-1">
							<div class="p-3 p-lg-5">
								<img src="assets/images/hippo.jpg" loading="lazy" alt="Hippo SVG">
							</div>
							<!-- Divider -->
							<div class="vr opacity-1 d-none d-lg-block"></div>
						</div>
		
						<!-- Information -->
						<div class="col-lg-6 order-1">
							<div class="p-4 p-sm-6">
								<!-- Logo -->
								<a href="index.html">
									<img class="h-50px mb-4" src="assets/images/kiboko-logo.png" loading="lazy" alt="logo">
								</a>
								<!-- Title -->
								<h1 class="mb-2 h3">Create new account</h1>
								<p class="mb-0">Already a member?<a href="sign-in.php"> Log in</a></p>
		
								<!-- Form START -->
								<form class="mt-4 text-start">
									<!-- Email -->
									<div class="mb-3">
										<label class="form-label">Enter email address</label>
										<input type="email" class="form-control">
									</div>
									<!-- Password -->
									<div class="mb-3 position-relative">
										<label class="form-label">Enter password</label>
										<input class="form-control fakepassword" type="password" id="psw-input">
										<span class="position-absolute top-50 end-0 translate-middle-y p-0 mt-3">
											<i class="fakepasswordicon fas fa-eye-slash cursor-pointer p-2"></i>
										</span>
									</div>
									<!-- Confirm Password -->
									<div class="mb-3">
										<label class="form-label">Confirm Password</label>
										<input type="password" class="form-control">
									</div>
									<!-- Remember me -->
									<div class="mb-3">
										<input type="checkbox" class="form-check-input" id="rememberCheck">
										<label class="form-check-label" for="rememberCheck">Keep me signed in</label>
									</div>
									<!-- Button -->
									<div><button type="submit" class="btn btn-primary w-100 mb-0">Sign up</button></div>
		
									<!-- Divider -->
									<div class="position-relative my-4">
										<hr>
										<p class="small position-absolute top-50 start-50 translate-middle bg-mode px-1 px-sm-2">Or sign in with</p>
									</div>
		
									<!-- Google and facebook button -->
									<div class="vstack gap-3">
										<a href="#" class="btn btn-light mb-0"><i class="fab fa-fw fa-google text-google-icon me-2"></i>Sign in with Google</a>
										<a href="#" class="btn btn-light mb-0"><i class="fab fa-fw fa-facebook-f text-facebook me-2"></i>Sign in with Facebook</a>
									</div>
		
									<!-- Copyright -->
									<div class="text-primary-hover mt-3 text-center"> Copyrights ©2024 Kiboko Tours & Travel. <br> Built by <a href="https://ganiamtech.com/">Ganiam Tech</a>. </div>
								</form>
								<!-- Form END -->
							</div>		
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Main Content END -->

        </main>

        <!-- Footer START -->
            <?php include "includes/footer.php";?>
        <!-- Footer END -->
    </body>


</html>