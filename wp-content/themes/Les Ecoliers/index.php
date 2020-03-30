<?php get_header(); ?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo get_theme_file_uri('images/bg_2.jpg'); ?>');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 style="text-transform: uppercase;" class="mb-2 bread">Nos Actualités</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo site_url(''); ?>">Accueil <i class="ion-ios-arrow-forward"></i></a></span> <span>Nos Actualiés <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <?php
            while (have_posts()) {
                the_post();
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
            <?php } ?>
        </div>
    </div>
</section>



<?php get_footer(); ?>