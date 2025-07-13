  <!-- *****Footer Section Start *****-->

    <div class="container-fluid footer-bg-color">
        <div class="container">
            <div class="row py-5">

            <!-- Address Start  -->
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-12 footer-logo-size mb-3">
                            <a href="#"><img src="<?php echo esc_url(get_template_directory_uri(). '/images/logo-1.jpg');?>" alt="main logo" style="width: 80px;"></a>
                        </div>
                        
                        <div class="col-12 footer-address mt-3">
                            <a href="#" class="text-decoration-none">
                                <div class="d-flex">
                                <i class="bi bi-geo-alt me-1"></i>
                                 <p> New Circular Road, Mouchak Mor, Malibagh, Dhaka, Bangladesh</p>
                                 </div>
                            </a>
                            <a href="tel:+8801715-038031" class="text-decoration-none d-block">
                                <div class="d-flex">
                                <i class="bi bi-phone-vibrate me-1"></i> 
                                <p>+88001914449393</p>
                                </div>
                                
                            </a>
                            <a href="#" class="text-decoration-none d-block">
                                <div class="d-flex">
                                    <i class="bi bi-envelope-at me-1"></i> 
                                    <p>masudrana@gmail.com</p>
                                </div>
                                
                            </a>
                        </div>
                    </div>
                </div>
            <!-- Address End  -->
                

             <!-- Company Start-->
                <div class="col-md-2 footer-company mt-md-0 mt-4">
                    <h5 class="footer-headings-color mb-md-3 mb-2">Company</h5>

                <?php 
                    wp_nav_menu(array(
                        'theme_location' => 'company-menu',
                        'container'      => false,
                    ));
                ?>
                  
                </div>
                 <!-- Company End-->

                <!-- Recent Projects Start  -->
                <div class="col-md-3 footer-courses mt-md-0 mt-4">
                    <h5 class="footer-headings-color mb-md-3 mb-2">Recent Projects</h5>

                    <?php wp_nav_menu(array(
                        'theme_location' => 'recent-projects-menu',
                        'container'      => false,
                    ));
                    
                    ?>
                    
                </div>
                <!-- Recent Projects End  -->

                <!-- Get In Touch Start  -->
                <div class="col-md-3 footer-getin-touch mt-md-0 mt-4">
                    <h5 class="footer-headings-color mb-md-3 mb-2">Get In Touch</h5>

                    <?php 
                    wp_nav_menu(array(
                        'theme_location' => 'get-in-touch-menu',
                        'container'      => false,

                    ));
                    ?>
                    
                </div>
                <!-- Get In Touch End  -->
            </div>
        </div>
    </div>
    <!-- *****Footer Section End *****-->

    <!-- ****Footer-Bottom section Start  ****-->

    <div class="container-fluid footer-bg-color border-top border-secondary">
        <div class="container">
            <div class="row">
                <div class="col-12 py-3 d-flex justify-content-center ">

                    <p class="text-secondary mb-0">2025 <code class="text-white">Masud Rana</code> All Rights
                        Reserved.</p>
                </div>

            </div>
        </div>
    </div>

    <!-- ****Footer-Bottom section End  ****-->

    <!-- for js Links  -->
    <?php wp_footer();?>
    
</body>

</html>
