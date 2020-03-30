<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="py-2 bg-primary">
            <div class="container">
                <div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
                    <div class="col-lg-12 d-block">
                        <div class="row d-flex">
                            <div class="col-md-5 pr-4 d-flex topper align-items-center">
                                <div class="icon bg-fifth mr-2 d-flex justify-content-center align-items-center"><span class="icon-map"></span></div>
                                <span class="text">Cameroun Yaounde, Nkomkana</span>
                            </div>
                            <div class="col-md pr-4 d-flex topper align-items-center">
                                <div class="icon bg-secondary mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                                <span class="text">contact@mevec.com</span>
                            </div>
                            <div class="col-md pr-4 d-flex topper align-items-center">
                                <div class="icon bg-tertiary mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                                <span class="text">+237 677 688 000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
            <div class="container d-flex align-items-center">
                <a class="navbar-brand" href="<?php echo site_url(''); ?>">M.E.V.E.C</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span> Menu
                </button>
                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item <?php if(is_front_page()){echo 'active';} ?>"><a href="<?php echo site_url(''); ?>" class="nav-link pl-0">Accueil</a></li>
                        <li class="nav-item <?php if(is_page('a-propos')){echo 'active';} ?>"><a href="<?php echo site_url('/a-propos'); ?>" class="nav-link">A propos</a></li>
                        <li class="nav-item <?php if(is_page('admission')){echo 'active';} ?>"><a href="<?php echo site_url('/admission'); ?>" class="nav-link">Admission</a></li>
                        <li class="nav-item <?php if(get_post_type()=='post'){echo 'active';} ?>"><a href="<?php echo site_url('/actualite'); ?>" class="nav-link">Actualités</a></li>
                        <li class="nav-item <?php if(is_page('contact')){echo 'active';} ?>" ><a href="<?php echo site_url('/contact'); ?>" class="nav-link">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END nav -->