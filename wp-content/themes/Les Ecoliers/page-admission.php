<?php get_header(); ?>



<?php
while (have_posts()) {
    the_post();
    ?>
    <section class="hero-wrap hero-wrap-2" style="background-image: url(<?php the_field('banner-img'); ?>);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 style="text-transform: uppercase;" class="mb-2 bread"><?php the_title(); ?></h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo site_url(''); ?>">Accueil <i class="ion-ios-arrow-forward"></i></a></span> <span><?php the_title(); ?> <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>



<?php } ?>



<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4"><span>Frais de</span> Scolarité</h2>
            </div>
        </div>
        <div class="row">
            <div style="margin-bottom: 30px;" class="col-md-6 col-lg-4 ftco-animate">
                <div class="pricing-entry bg-light pb-4 text-center">
                    <div>
                        <h3 class="mb-3">Maternelle</h3>
                        <p><span class="price">55,000 CFA</span></p>
                    </div>
                    <div class="img" style="background-image: url(<?php echo get_theme_file_uri('images/bg_1.jpg'); ?>);"></div>
                    <div class="px-4">
                        <ul class="list-unstyled">
                            <li>
                                <i style="font-size: 18px; color: #1faaf1;" class="fa fa-check"></i>
                                Frais d'inscription : <strong>10 000 CFA</strong>  
                            </li>
                            <li>
                                <i style="font-size: 18px; color: #1faaf1;" class="fa fa-check"></i>
                                Date Limite Septembre : <strong>25 000 CFA</strong>
                            </li>
                            <li>
                                <i style="font-size: 18px; color: #1faaf1;" class="fa fa-check"></i>
                                Date Limite Décembre : <strong>10 000 CFA</strong>
                            </li>
                            <li>
                                <i style="font-size: 18px; color: #1faaf1;" class="fa fa-check"></i>
                                Date Limite Janvier : <strong>10 000 CFA</strong>
                            </li>
                        </ul>
                    </div>
                    <p class="button text-center"><a href="<?php echo site_url('/contact'); ?>" class="btn btn-primary px-4 py-3">Contact</a></p>
                </div>
            </div>
            
            
            <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="pricing-entry bg-light pb-4 text-center">
                    <div>
                        <h3 class="mb-3">Nursery</h3>
                        <p><span class="price">60,000 CFA</span></p>
                    </div>
                    <div class="img" style="background-image: url(<?php echo get_theme_file_uri('images/bg_2.jpg'); ?>);"></div>
                    <div class="px-4">
                        <ul class="list-unstyled">
                            <li>
                                <i style="font-size: 18px; color: #1faaf1;" class="fa fa-check"></i>
                                Frais d'inscription : <strong>10 000 CFA</strong>  
                            </li>
                            <li>
                                <i style="font-size: 18px; color: #1faaf1;" class="fa fa-check"></i>
                                Date Limite Septembre : <strong>30 000 CFA</strong>
                            </li>
                            <li>
                                <i style="font-size: 18px; color: #1faaf1;" class="fa fa-check"></i>
                                Date Limite Décembre : <strong>10 000 CFA</strong>
                            </li>
                            <li>
                                <i style="font-size: 18px; color: #1faaf1;" class="fa fa-check"></i>
                                Date Limite Janvier : <strong>10 000 CFA</strong>
                            </li>
                        </ul>
                    </div>
                    <p class="button text-center"><a href="<?php echo site_url('/contact'); ?>" class="btn btn-secondary px-4 py-3">Contact</a></p>
                </div>
            </div>
            
            
            <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="pricing-entry bg-light active pb-4 text-center">
                    <div>
                        <h3 class="mb-3">Primaire</h3>
                        <p><span class="price">45,000 CFA</span></p>
                    </div>
                    <div class="img" style="background-image: url(<?php echo get_theme_file_uri('images/bg_3.jpg'); ?>);"></div>
                    <div class="px-4">
                        <ul class="list-unstyled">
                            <li>
                                <i style="font-size: 18px; color: #1faaf1;" class="fa fa-check"></i>
                                Frais d'inscription : <strong>10 000 CFA</strong>  
                            </li>
                            <li>
                                <i style="font-size: 18px; color: #1faaf1;" class="fa fa-check"></i>
                                Date Limite Septembre : <strong>20 000 CFA</strong>
                            </li>
                            <li>
                                <i style="font-size: 18px; color: #1faaf1;" class="fa fa-check"></i>
                                Date Limite Décembre : <strong>10 000 CFA</strong>
                            </li>
                            <li>
                                <i style="font-size: 18px; color: #1faaf1;" class="fa fa-check"></i>
                                Date Limite Janvier : <strong>5 000 CFA</strong>
                            </li>
                        </ul>
                    </div>
                    <p class="button text-center"><a href="<?php echo site_url('/contact'); ?>" class="btn btn-tertiary px-4 py-3">Contact</a></p>
                </div>
            </div>
            
            
            <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="pricing-entry bg-light pb-4 text-center">
                    <div>
                        <h3 class="mb-3">Primary</h3>
                        <p><span class="price">55,000 CFA</span></p>
                    </div>
                    <div class="img" style="background-image: url(<?php echo get_theme_file_uri('images/bg_5.jpg'); ?>);"></div>
                    <div class="px-4">
                        <ul class="list-unstyled">
                            <li>
                                <i style="font-size: 18px; color: #1faaf1;" class="fa fa-check"></i>
                                Frais d'inscription : <strong>10 000 CFA</strong>  
                            </li>
                            <li>
                                <i style="font-size: 18px; color: #1faaf1;" class="fa fa-check"></i>
                                Date Limite Septembre : <strong>25 000 CFA</strong>
                            </li>
                            <li>
                                <i style="font-size: 18px; color: #1faaf1;" class="fa fa-check"></i>
                                Date Limite Décembre : <strong>10 000 CFA</strong>
                            </li>
                            <li>
                                <i style="font-size: 18px; color: #1faaf1;" class="fa fa-check"></i>
                                Date Limite Janvier : <strong>10 000 CFA</strong>
                            </li>
                        </ul>
                    </div>
                    <p class="button text-center"><a href="<?php echo site_url('/contact'); ?>" class="btn btn-quarternary px-4 py-3">Contact</a></p>
                </div>
            </div>
            
            
        </div>
    </div>
</section>




<?php get_footer(); ?>