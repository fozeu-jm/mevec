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



<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-3 d-flex">
                <div class="bg-light align-self-stretch box p-4 text-center">
                    <h3 class="mb-4">Addresse</h3>
                    <p>Cameroun Yaounde, Nkomkana</p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="bg-light align-self-stretch box p-4 text-center">
                    <h3 class="mb-4">Numero Contact</h3>
                    <p><a href="tel://+237677688000">+237 677 688 000</a></p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="bg-light align-self-stretch box p-4 text-center">
                    <h3 class="mb-4">Adresse Email</h3>
                    <p><a href="mailto:info@yoursite.com">contact@mevec.com</a></p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="bg-light align-self-stretch box p-4 text-center">
                    <h3 class="mb-4">Siteweb</h3>
                    <p><a href="#">mevec.com</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
    <div class="container">
        <div class="row d-flex align-items-stretch no-gutters">
            <div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
                <?php
                while (have_posts()) {
                    the_post();
                    the_content();
                }
                ?>
            </div>
            <div class="col-md-6 d-flex align-items-stretch">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.7266792078362!2d11.514852314706832!3d3.868696997185946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x108bcf7891ef7295%3A0x5ec7cf6c8f000fb7!2sUrbatech+Conseils!5e0!3m2!1sen!2scm!4v1555718317164!5m2!1sen!2scm" width="800" height="600" frameborder="0" style="border:0;width: 100%;" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>