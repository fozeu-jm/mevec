<section class="ftco-gallery">
    <div class="container-wrap">
        <div class="gallery-slider owl-carousel no-gutters">

            <?php
            $custom = new WP_Query(array(
                'post_type' => 'page',
                'p' => 15,
                'posts_per_page' => '-1',
            ));
            while ($custom->have_posts()) {
                $custom->the_post();
                $images = acf_photo_gallery('gallery', get_the_ID());
                $img_count = count($images);
                $counter = 0;
                for ($counter = 0; $counter < $img_count; $counter++) {
                    ?>
                    <div class=" ftco-animate">
                        <a href="<?php echo $images[$counter]['full_image_url'] ?>" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?php echo $images[$counter]['full_image_url'] ?>);">
                            <div class="icon mb-4 d-flex align-items-center justify-content-center">
                                <span class="icon-instagram"></span>
                            </div>
                        </a>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</section>


<footer style="padding-bottom:0px; padding-top:30px;" class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2">MEVEC</h2>
                    <div class="block-23 mb-3">
                        <p>Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod erat. Ut at erat et arcu pulvinar cursus a eget.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-5 ml-md-4">
                    <h2 class="ftco-heading-2">Liens utile</h2>
                    <ul class="list-unstyled">
                        <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                        <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                        <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Services</a></li>
                        <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Deparments</a></li>
                        <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2">Recent Blog</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">Cameroun Yaounde, Nkomkana</span></li>
                            <li><a href="tel:+237677688000"><span class="icon icon-phone"></span><span class="text">+237 677 688 000 </span></a></li>
                            <li><a href="mailto:contact@mevec.com"><span class="icon icon-envelope"></span><span class="text">contact@mevec.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p style="display:none;">
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                    All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                </p>

                <p>
                    Copyright &copy;2019
                    Tous droits reservé | Powered by <a href="https://eyocreative.com" target="_blank">eYoCreative</a>
                </p>

            </div>
        </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
    <?php wp_footer(); ?>
</body>
</html>