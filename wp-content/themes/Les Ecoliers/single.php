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

<section style="padding-top: 100px; padding-bottom: 80px;" class="news">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="news-container">
                    <div class="news-banner">
                        <img style="max-width: 100%;" src="<?php the_field('post-img'); ?>" alt="les armandins">
                    </div>
                    <div style="margin-top: 40px;" class="full-width text-center">
                        <h4  style="text-transform: capitalize;"><?php the_title(); ?></h4>
                        <?php
                        while (have_posts()) {
                            the_post();
                            ?>
                        <h6 style="text-transform: uppercase;">Par <?php the_author(); ?> | <?php the_time('F d, Y'); ?></h6>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div style="margin-top: 20px;" class="col-12 text-justify">
                <?php
                while (have_posts()) {
                    the_post();
                    the_content();
                }
                ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>