<?php

/*
Plugin Name: Le Plugin de Kevin
Description: Un super slider
Author: Radosz Kevin
Version: 1
*/

add_action('init', 'monsuperslider_init');


/*Permet d'initialiser les fonctionnalitées liées au carroussel*/
function monsuperslider_init(){
    $labels = array(
        'name' => 'Slide',
        'singular_name' => 'Slide',
        'add_new' => 'Ajouter un slide',
        'add_new_item' => 'Ajouter un nouveau slide',
        'edit_item' => 'Editer un slide',
        'new_item' => 'Nouvelle Slide',
        'view_item' => 'Voir l\'Slide',
        'search_items' => 'Rechercher un slide',
        'not_found' => 'Aucun_slide',
        'not_found_in_trash' => 'Aucun Slide dans la corbeille',
        'parent_item_colon' => '',
        'menu_name' => 'Slides'
    );
    register_post_type('slide', array(
        'public' => true,
        'labels' => $labels,
        'menu_position' => 10,   /*position dans le menu de gauche*/
        'capability_post' =>'post', /*ceux qui ont le droit de changer le slide sont les mêmes personne qui ont le droit de poster des articles*/
        'supports' => array('title', 'thumbnail'),  /* Je supporte les titres, et les images à la une */
    ));

    add_image_size('slider', 1000,300, true);  /*Pour ajouter un format d'image'*/
}

/* Permet d'afficher le carroussel*/
function monsuperslider_show($limit = 10)
{
    $slides = new WP_query('post_type=slide$posts_per_page=$limit'); /*Pour afficher en front office*/
    while($slides->have_posts()){
        $slides->the_post();
        global $post;
        the_post_thumbnail('slider');   /*le format d'image a récupérer'*/
    }
}
