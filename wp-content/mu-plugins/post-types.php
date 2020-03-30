<?php

function theme_post_types() {
    
    register_post_type('slider', array(
        'rewrite' => array('slug' => 'Diaporama'),
        'public' => true,
        'supports' => 'title',
        'has_archive' => true,
        'taxonomies' => array('category'),
        'labels' => array(
            'name' => 'Diaporama',
            'add_new_item' => 'Ajouter une diapositive',
            'edit_item' => 'Modifier diapositive',
            'all_items' => 'Toutes les diapositives',
            'singular_name' => 'Diaporama'
        ),
        'menu_icon' => 'dashicons-slides',
    ));


    register_post_type('assets', array(
        'rewrite' => array('slug' => 'assets'),
        'public' => true,
        'has_archive' => true,
        'taxonomies' => array('category'),
        'labels' => array(
            'name' => 'Atouts',
            'add_new_item' => 'Ajouter un atout',
            'edit_item' => 'Modifier un atout',
            'all_items' => 'Tous vos atouts',
            'singular_name' => 'Atout'
        ),
        'menu_icon' => 'dashicons-pressthis',
    ));

    register_post_type('testimonial', array(
        'rewrite' => array('slug' => 'testimonial'),
        'public' => true,
        'has_archive' => true,
        'taxonomies' => array('category'),
        'labels' => array(
            'name' => 'Témoignage',
            'add_new_item' => 'Ajouter un Témoignage',
            'edit_item' => 'Modifier un témoignage',
            'all_items' => 'Tous vos Témoignages',
            'singular_name' => 'Témoignage'
        ),
        'menu_icon' => 'dashicons-format-quote',
    ));

}

add_action('init', 'theme_post_types');