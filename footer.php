<footer class="page-footer stylish-color-dark mt-4 pt-4">

    <!-- Footer Links -->
    <div class="container-fluid">

        <!-- Footer links -->
        <div class="row text-center text-md-left mt-3 pb-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mr-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">درباره ما</h6>
	            <?php if(is_active_sidebar('fdesc')){
		            dynamic_sidebar('fdesc');
	            } ?>
            </div>
            <!-- Grid column -->

            <hr class="w-100 clearfix d-md-none">
            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mr-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">دسترسی سریع</h6>
                <div class="text-right">
	                <?php wp_nav_menu(array(
		                'theme_location'=>'Footer_two',
		                'depth'=>'1',
	                )); ?>
                </div>
            </div>
            <!-- Grid column -->

            <hr class="w-100 clearfix d-md-none">

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mr-auto mt-3">

                <h6 class="text-uppercase mb-4 font-weight-bold">لینک های مفید</h6>
                <div class="text-right">
	                <?php wp_nav_menu(array(
		                'theme_location'=>'Footer_three',
		                'depth'=>'1',
	                )); ?>
                </div>
            </div>
            <!-- Third column -->

            <hr class="w-100 clearfix d-md-none">

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mr-auto mt-3">

                <h6 class="text-uppercase mb-4 font-weight-bold">آخرین مطالب</h6>
	            <?php get_template_part("inc/Last","post2"); ?>
            </div>
            <!-- Grid column -->

        </div>
        <!-- Footer links -->

        <hr>

        <div class="row py-3 d-flex align-items-center">

            <!-- Grid column -->
            <div class="col-md-7 col-lg-8">

                <!-- Copyright -->
                <p class="text-center text-md-left grey-text">
                    © <?php echo date("Y") ?> کپی رایت: تمامی حقوق مادی و معنوی این سایت متعلق به <a href="/"> این سایت</a>
                     هست.

                </p>
                <!-- Copyright -->

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-5 col-lg-4 ml-lg-0">

                <!-- Social buttons -->
                <div class="social-section text-center mr-auto text-md-left">

                    <ul class="list-unstyled list-inline">

                        <li class="list-inline-item">

                            <a class="btn-floating btn-sm rgba-white-slight">

                                <i class="fab fa-facebook-f"></i>

                            </a>

                        </li>

                        <li class="list-inline-item">

                            <a class="btn-floating btn-sm rgba-white-slight">

                                <i class="fab fa-twitter"></i>

                            </a>

                        </li>

                        <li class="list-inline-item">

                            <a class="btn-floating btn-sm rgba-white-slight">

                                <i class="fab fa-google-plus-g"></i>

                            </a>

                        </li>

                        <li class="list-inline-item">

                            <a class="btn-floating btn-sm rgba-white-slight">

                                <i class="fab fa-linkedin-in"></i>

                            </a>

                        </li>

                    </ul>

                </div>
                <!-- Social buttons -->

            </div>
            <!-- Grid column -->

        </div>

    </div>

</footer>

<?php wp_footer(); ?>
</body>
</html>