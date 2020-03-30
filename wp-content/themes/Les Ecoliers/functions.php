<?php

function theme_resources() {


    wp_enqueue_style('work', 'https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900');
    wp_enqueue_style('fredericka', 'https://fonts.googleapis.com/css?family=Fredericka+the+Great');
    wp_enqueue_style('open-ionic', get_theme_file_uri('css/open-iconic-bootstrap.min.css'));
    wp_enqueue_style('animate', get_theme_file_uri('css/animate.css'));
    wp_enqueue_style('rousel', get_theme_file_uri('css/owl.carousel.min.css'));
    wp_enqueue_style('default', get_theme_file_uri('css/owl.theme.default.min.css'));
    wp_enqueue_style('magnigic', get_theme_file_uri('css/magnific-popup.css'));
    wp_enqueue_style('aos', get_theme_file_uri('css/aos.css'));
    wp_enqueue_style('ionics', get_theme_file_uri('css/ionicons.min.css'));
    wp_enqueue_style('CSS', get_theme_file_uri('css/font-awesome.min.css'));

    wp_enqueue_style('flticons', get_theme_file_uri('css/flaticon.css'));
    wp_enqueue_style('icomoon', get_theme_file_uri('css/icomoon.css'));
    wp_enqueue_style('main-css', get_stylesheet_uri());




    wp_enqueue_script('migrate', get_theme_file_uri('js/jquery-migrate-3.0.1.min.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('poppper', get_theme_file_uri('js/popper.min.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('boot', get_theme_file_uri('js/bootstrap.min.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('easing', get_theme_file_uri('js/jquery.easing.1.3.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('waypoints', get_theme_file_uri('js/jquery.waypoints.min.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('stellar', get_theme_file_uri('js/jquery.stellar.min.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('owl', get_theme_file_uri('js/owl.carousel.min.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('popup', get_theme_file_uri('js/jquery.magnific-popup.min.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('aos', get_theme_file_uri('js/aos.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('number', get_theme_file_uri('js/jquery.animateNumber.min.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('scrollax', get_theme_file_uri('js/scrollax.min.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('main', get_theme_file_uri('js/main.js'), array('jquery'), '1.0', true);
    
}

add_action('wp_enqueue_scripts', 'theme_resources');

function theme_features() {
    add_theme_support('title-tag');
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
}

add_action('after_setup_theme', 'theme_features');

add_filter('show_admin_bar', '__return_false');
