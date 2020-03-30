<?php get_header(); ?>

<section class="home-slider owl-carousel">
    <?php
    $custom = new WP_Query(array(
        'post_type' => 'slider',
        'post_status' => 'publish',
        'posts_per_page' => '-1',
    ));
    while ($custom->have_posts()) {
        $custom->the_post();
        ?>
        <div class="slider-item" style="background-image:url(<?php the_field('slider-img'); ?>);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                    <div class="col-md-8 text-center ftco-animate">
                        <h1 class="mb-4"><?php the_field('slider-title'); ?></h1>
                        <p><a href="#" class="btn btn-secondary slider-btn px-4 py-3 mt-3">A propos</a></p>
                    </div>
                </div>
            </div>
        </div>
    <?php } wp_reset_postdata(); ?>
</section>

<section class="ftco-services ftco-no-pb">
    <div class="container-wrap">
        <div class="row no-gutters">
            <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-primary">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-teacher"></span>
                    </div>
                    <?php
                    while (have_posts()) {
                        the_post();
                        ?>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading"><?php the_field('service-title1'); ?></h3>
                            <p><?php the_field('service-desc1'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-tertiary">
                    <div class="media block-6 d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-reading"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading"><?php the_field('service-title2'); ?></h3>
                            <p><?php the_field('service-desc2'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-fifth">
                    <div class="media block-6 d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-books"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading"><?php the_field('service-title3'); ?></h3>
                            <p><?php the_field('service-desc3'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-quarternary">
                    <div class="media block-6 d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-diploma"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading"><?php the_field('service-title4'); ?></h3>
                            <p><?php the_field('service-desc4'); ?></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!-- ##### Welcome Area ##### -->
    <div   class="ftco-intro">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4 text-center">
                    <h1 style="font-size: 55px; margin-bottom: 15px; color: #1eaaf1;" class="welcome-h"><?php the_field('welcome-title'); ?></h1>
                    <div class="welcome-txt" style="text-align: justify; color: black; line-height: 2.29; margin-bottom: 25px;">
                        <?php the_field('welcome-desc'); ?>
                    </div>
                </div>
                <div class="offset-md-1 col-md-7">
                    <img style="max-width: 100%; border-radius: 5px;" src="<?php the_field('welcome-img'); ?>" alt="Les Armandins">
                </div>
            </div>
        </div>
    </div>

    <!-- ##### Welcome Area ##### -->

    <section class="ftco-intro" style="background-image: url(<?php the_field('cta-img'); ?>);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h2><?php the_field('cta-title'); ?></h2>
                    <p class="mb-0"><?php the_field('cta-desc'); ?></p>
                </div>
                <div class="col-md-3 d-flex align-items-center">
                    <p class="mb-0"><a href="#" class="btn btn-secondary px-4 py-3">Contact</a></p>
                </div>
            </div>
        </div>
    </section>
<?php } ?>

<section class="ftco-section asset-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4"><span>Nos</span> Atout</h2>
            </div>
        </div>

        <div class="assets-slider owl-carousel">
            <?php
            $custom = new WP_Query(array(
                'post_type' => 'assets',
                'post_status' => 'publish',
                'posts_per_page' => '-1',
            ));
            while ($custom->have_posts()) {
                $custom->the_post();
                ?>
                <div class="a-slide ftco-animate">
                    <div class="blog-entry">
                        <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('<?php the_field('asset-img'); ?>');">
                        </a>
                        <div style="background-color:#f8f9fb;" class="text p-4">
                            <h3 class="heading"><a href="#"><?php the_title(); ?></a></h3>
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>
                </div>
            <?php } wp_reset_postdata(); ?>
        </div>
    </div>
</section>


<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(<?php echo get_theme_file_uri('images/bg_4.jpg'); ?>);" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section heading-section-black ftco-animate">
                <?php
                while (have_posts()) {
                    the_post();
                    ?>
                    <h2 class="mb-4"><?php the_field('counter_section-title'); ?></h2>
                </div>
            </div>
            <div class="row d-md-flex align-items-center justify-content-center">
                <div class="col-lg-10">
                    <div class="row d-md-flex align-items-center">
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="icon"><span class="flaticon-doctor"></span></div>
                                <div class="text">
                                    <strong class="number" data-number="<?php the_field('counter-numb1'); ?>">0</strong>
                                    <span><?php the_field('counter-title1'); ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="icon"><span class="flaticon-doctor"></span></div>
                                <div class="text">
                                    <strong class="number" data-number="<?php the_field('counter-numb2'); ?>">0</strong>
                                    <span><?php the_field('counter-title2'); ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="icon"><span class="flaticon-doctor"></span></div>
                                <div class="text">
                                    <strong class="number" data-number="<?php the_field('counter-numb3'); ?>">0</strong>
                                    <span><?php the_field('counter-title3'); ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="icon"><span class="flaticon-doctor"></span></div>
                                <div class="text">
                                    <strong class="number" data-number="<?php the_field('counter-numb4'); ?>">0</strong>
                                    <span><?php the_field('counter-title4'); ?></span>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section style="padding-bottom:0px;" class="ftco-section testimony-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <?php
                while (have_posts()) {
                    the_post();
                    ?>
                    <h2 class="mb-4"><?php the_field('testi_section-title'); ?></h2>
                    <p><?php the_field('testi_section-desc'); ?></p>
                <?php } ?>
            </div>
        </div>
        <div class="row ftco-animate justify-content-center">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                    <?php
                    $custom = new WP_Query(array(
                        'post_type' => 'testimonial',
                        'post_status' => 'publish',
                        'posts_per_page' => '-1',
                    ));
                    while ($custom->have_posts()) {
                        $custom->the_post();
                        ?>
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img mr-4" style="background-image: url(<?php the_field('testi-img'); ?>)">
                                </div>
                                <div class="text ml-2 bg-light">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                    <p><?php the_content(); ?></p>
                                    <p class="name"><?php the_title(); ?></p>
                                    <span class="position"><?php the_field('tesi-title'); ?></span>
                                </div>
                            </div>
                        </div>
                    <?php } wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4"><span>Actualités</span> Récentes</h2>
            </div>
        </div>
        <div class="row">
            <?php
            $custom = new WP_Query(array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => '3',
            ));
            while ($custom->have_posts()) {
                $custom->the_post();
                ?>
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="blog-entry">
                        <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('<?php the_field('post-img'); ?>');">
                            <div class="meta-date text-center p-2">
                                <span class="day"><?php the_time('d'); ?></span>
                                <span class="mos"><?php the_time('F'); ?></span>
                                <span class="yr"><?php the_time('Y'); ?></span>
                            </div>
                        </a>
                        <div class="text bg-white p-4">
                            <h3 class="heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php the_excerpt(); ?></p>
                            <div class="d-flex align-items-center mt-4">
                                <p class="mb-0"><a href="<?php the_permalink(); ?>" class="btn btn-secondary">Lire plus <span class="ion-ios-arrow-round-forward"></span></a></p>
                                <p class="ml-auto mb-0">
                                    <a href="#" class="mr-2"><?php the_author(); ?></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }wp_reset_postdata(); ?>
        </div>
    </div>
</section>




<?php get_footer(); ?> 