    <!-- ======================= Footer START -->


    <footer class="bg-dark pt-5" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('assets/images/footer-bg.jpg'); background-size: cover;">
        <div class="container">
            <!-- Row START -->
            <div class="row g-4">

                <!-- Widget 1 START -->
                <div class="col-lg-3">
                    <!-- logo -->
                    <div class="bg-white d-inline-block rounded-circle p-1">
                        <a class="navbar-brand" href="index.php">
                            <img class="navbar-brand-item d-none d-md-block" src="assets/images/logo/kiboko-logo.png" alt="logo" style="width:100px; height:auto;">
                            <img class="navbar-brand-item d-block d-md-none" src="assets/images/kiboko-logo.png" alt="logo" style="width:80px; height:auto;">
                        </a>
                    </div>
                    <p class="my-3 text-muted">Kiboko Tours & Travel.</p>
                    <br>

                    <p class="mb-2"><a href="kibokotoursandtravel.com" class="text-muted text-primary-hover"><i
                                class="bi bi-telephone me-2"></i>+254 732 962224</a> </p>
                    <p class="mb-0"><a href="mailto:info@kibokotoursandtravel.com"
                            class="text-muted text-primary-hover"><i
                                class="bi bi-envelope me-2"></i>&#105;&#110;&#102;&#111;&#064;&#107;&#105;&#098;&#111;&#107;&#111;&#116;&#111;&#117;&#114;&#115;&#097;&#110;&#100;&#116;&#114;&#097;&#118;&#101;&#108;&#046;&#099;&#111;&#109;</a></p>
                </div>
                <!-- Widget 1 END -->

                <!-- Widget 2 START -->
                <div class="col-lg-8 ms-auto">
                    <div class="row g-4">
                        <!-- Link block -->
                        <div class="col-6 col-md-4">
                            <h5 class="text-white mb-4 mb-md-4">Navigation</h5>
                            <ul class="nav flex-column text-primary-hover">
                                <li class="nav-item"><a class="nav-link text-muted" href="index.phh">Home</a></li>
                                <li class="nav-item"><a class="nav-link text-muted" href="destinations.php">Destination</a></li>
                                <li class="nav-item"><a class="nav-link text-muted" href="experience-details.php">Experiences</a></li>
                                <li class="nav-item"><a class="nav-link text-muted" href="about-us.php">About us</a>
                                </li>
                                <li class="nav-item"><a class="nav-link text-muted" href="contact-us.php">Contact
                                        us</a></li>
                                <li class="nav-item"><a class="nav-link text-muted" href="blog.php">Blog</a></li>
                                <li class="nav-item"><a class="nav-link text-muted" href="contact-us.php#quote">Quote</a></li>
                            </ul>
                        </div>

                        <!-- Link block -->
                        <div class="col-6 col-md-5">
                            <h5 class="text-white mb-2 mb-md-">Top Destinations</h5>
                            <ul class="nav flex-column text-primary-hover">
                                <?php while ($navdestsrow = $footdestsres->fetch_assoc()) { ?>
                                    <li class="nav-item"><a class="nav-link text-muted" href="destinations-details.php?id=<?php echo $navdestsrow['destination_id']; ?>&<?php echo $navdestsrow['destination_slag']; ?>"><?php echo $navdestsrow['destination_name']; ?></a></li>
                                <?php     } ?>

                            </ul>
                        </div>

                        <!-- Link block -->
                        <div class="col-6 col-md-3">
                            <h5 class="text-white mb-2 mb-md-4">Safari Types</h5>
                            <ul class="nav flex-column text-primary-hover">
                                <li class="nav-item"><a class="nav-link text-muted" href="classic-safaris.php">Classic
                                        Safaris</a></li>
                                <li class="nav-item"><a class="nav-link text-muted"
                                        href="accessible-safaris.php">Accessible Safaris</a></li>
                                <li class="nav-item"><a class="nav-link text-muted"
                                        href="family-couple-safaris.php">Family & Couple Safaris</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- Widget 2 END -->

                </div><!-- Row END -->


                <!-- Payment and card -->
                <div class="row g-4 justify-content-between mt-0 mt-md-2 ">

                    <!-- Payment card -->
                    <div class="col-sm-7 col-md-6 col-lg-4 order-2">
                        <h5 class="text-white mb-2">Payment & Security</h5>
                        <ul class="list-inline mb-0 mt-3">
                            <li class="list-inline-item"> <a href="#"><img src="assets/images/element/pesapal-2.png"
                                        class="h-30px" alt=""></a></li>
                            <li class="list-inline-item"> <a href="#"><img src="assets/images/element/visa.svg"
                                        class="h-30px" alt=""></a></li>
                            <li class="list-inline-item"> <a href="#"><img src="assets/images/element/mastercard.svg"
                                        class="h-30px" alt=""></a></li>
                            <li class="list-inline-item"> <a href="#"><img src="assets/images/element/expresscard.svg"
                                        class="h-30px" alt=""></a></li>
                        </ul>
                    </div>

                    <!-- Tagline -->
                    <div class="col-12 order-1">
                        <br>
                        <p class="text-muted text-center h4">We lead the path to your intended destination.</p>
                    </div>

                    <!-- Social media icon -->
                    <div class="col-sm-5 col-md-6 col-lg-3 text-sm-end order-3">
                        <h5 class="text-white mb-2">Follow us on</h5>
                        <ul class="list-inline mb-0 mt-3">
                            <li class="list-inline-item"> <a class="btn btn-sm px-2 bg-facebook mb-0" href="https://www.facebook.com/KibokoTours" target="_blank"><i
                                        class="fab fa-fw fa-facebook-f"></i></a> </li>
                            <li class="list-inline-item"> <a class="btn btn-sm shadow px-2 bg-instagram mb-0" href="https://www.instagram.com/kiboko_tours" target="_blank"><i
                                        class="fab fa-fw fa-instagram"></i></a> </li>
                            <li class="list-inline-item">
                                <a class="btn btn-sm shadow px-2  mb-0" href="https://twitter.com/ToursKiboko" target="_blank">
                                    <img src="assets/images/element/x-logo.jpg" alt="X logo" class="icon-size" width="40" height="50">
                                </a>
                            </li>
                            <li class="list-inline-item"> <a class="btn btn-sm shadow px-2 bg-linkedin mb-0" href="https://www.linkedin.com/company/kiboko-tours-and-travel/" target="_blank"><i
                                        class="fab fa-fw fa-linkedin-in"></i></a> </li>

                            <li class="list-inline-item">
                                <a class="btn btn-sm shadow px-2  mb-0" href="https://www.xiaohongshu.com/user/profile/6523fa87000000002a0357c6" target="_blank">
                                    <img src="assets/images/element/xiao-logo.png" alt="Xiaohongshu logo" class="icon-size" width="40" height="50">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Divider -->
                <hr class="mt-4 mb-0">

                <!-- Bottom footer -->
                <div class="row">
                    <div class="container">
                        <div class="d-lg-flex justify-content-between align-items-center py-3 text-center text-lg-start">
                            <!-- copyright text -->
                            <div class="text-muted text-primary-hover"> Copyrights ©2024 Kiboko Tours & Travel. Built by <a
                                    href="https://www.ganiamtech.com/index.php" class="text-muted">Ganiam Tech</a>. </div>

                            <!-- copyright links-->
                            <div class="nav mt-2 mt-lg-0">
                                <ul class="list-inline text-primary-hover mx-auto mb-0">
                                    <li class="list-inline-item me-0">
                                        <a class="nav-link py-1 text-muted" target="_blank" href="assets/docs/kiboko-terms-and-conditions.pdf" download>Download our Terms and Conditions</a>
                                    </li>
                                    <li class="list-inline-item me-0"><a class="nav-link py-1 text-muted pe-0"
                                            href="faq.php">Help</a></li>
                                </ul>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
    </footer>
    <!-- =======================Footer END -->


    <!-- Back to top -->
    <div class="back-top"></div>

    <!-- Bootstrap JS -->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Vendors -->
    <script src="assets/vendor/tiny-slider/tiny-slider.js"></script>
    <script src="assets/vendor/purecounterjs/dist/purecounter_vanilla.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.js"></script>
    <script src="assets/vendor/flatpickr/js/flatpickr.min.js"></script>
    <script src="assets/vendor/choices/js/choices.min.js"></script>
    <script src="assets/vendor/jarallax/jarallax.min.js"></script>
    <script src="assets/vendor/jarallax/jarallax-video.min.js"></script>

    <!-- ThemeFunctions -->
    <script src="assets/js/functions.js"></script>

    <!-- Google Translate Functionality -->
    <script src="script.js"></script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                    pageLanguage: 'en'
                },
                'google_translate_element'
            );

        }
    </script>

    <!-- 'Chatbot' -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const mainChatIcon = document.getElementById("main-chat-icon");
            const contactIcons = document.getElementById("contact-icons");
            const whatsappIcon = document.querySelector(".contact-icon.whatsapp");
            const whatsappChat = document.getElementById("whatsapp-chat");
            const closeChat = document.querySelector(".close-chat");
            const sendMessageButton = document.getElementById("send-message");
            const chatMessageInput = document.getElementById("chat-message");

            // Toggle contact icons
            mainChatIcon.addEventListener("click", () => {
                if (contactIcons.classList.contains("hidden")) {
                    contactIcons.classList.remove("hidden");
                    contactIcons.classList.add("fade-in");
                } else {
                    contactIcons.classList.add("hidden");
                    contactIcons.classList.remove("fade-in");
                    // Hide WhatsApp chatbox
                    whatsappChat.classList.add("hidden");
                }
            });

            // Toggle WhatsApp chatbox 
            whatsappIcon.addEventListener("click", (e) => {
                e.stopPropagation(); // Prevent event bubbling
                whatsappChat.classList.toggle("hidden");
            });

            // Close WhatsApp chatbox
            closeChat.addEventListener("click", () => {
                whatsappChat.classList.add("hidden");
            });

            // Send message func()
            sendMessageButton.addEventListener("click", () => {
                const message = chatMessageInput.value.trim();
                if (message) {
                    const whatsappUrl = `https://web.whatsapp.com/send?phone=254732962224&text=${encodeURIComponent(message)}`;
                    window.open(whatsappUrl, "_blank");
                    chatMessageInput.value = "";
                    whatsappChat.classList.add("hidden");
                }
            });

            // Handle Submission
            chatMessageInput.addEventListener("keypress", (e) => {
                if (e.key === "Enter") {
                    sendMessageButton.click();
                }
            });

            // Close
            document.addEventListener("click", (e) => {
                if (!e.target.closest('#contact-icons') &&
                    !e.target.closest('#whatsapp-chat') &&
                    !e.target.closest('#main-chat-icon')) {
                    contactIcons.classList.add("hidden");
                    whatsappChat.classList.add("hidden");
                }
            });
        });
    </script>
    <?php 
    $conn->close();
    ?>