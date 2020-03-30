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

<?php
$custom = new WP_Query(array(
    'post_type' => 'page',
    'p' => 15,
    'posts_per_page' => '-1',
        ));
while ($custom->have_posts()) {
    $custom->the_post();
    ?>
    <div class="ftco-intro">
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


    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(<?php echo get_theme_file_uri('images/bg_4.jpg'); ?>);" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section heading-section-black ftco-animate">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php } ?>

<section  class="ftco-section testimony-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <?php
                $custom = new WP_Query(array(
                    'post_type' => 'page',
                    'p' => 15,
                    'posts_per_page' => '-1',
                ));
                while ($custom->have_posts()) {
                    $custom->the_post();
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

<?php get_footer(); ?>