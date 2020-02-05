<?php
add_action('init', 'create_event_cpt');
function create_event_cpt(){
  $post_type = "event";
  $labels = array(
        'name'               => 'events',
        'singular_name'      => 'event',
        'all_items'          => 'Tous les events',
        'add_new'            => 'Ajouter un event',
        'add_new_item'       => 'Ajouter un event',
        'edit_item'          => "Éditer le event",
        'new_item'           => 'Nouveau event',
        'view_item'          => "Voir le event",
        'search_items'       => 'Rechercher un event',
        'not_found'          => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de résultat',
        'parent_item_colon'  => 'event parent',
        'menu_name'          => 'events',
    );
    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail','editor'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       =>0,
        'menu_icon'           => 'dashicons-video-alt3',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => $post_type )
    );

    register_post_type( 'event', $args );
    $taxonomy = "categorie";
    $object_type='event';
    $args = array(
          'label' => 'Catégorie de event',
          'rewrite' => array( 'slug' => 'event-categorie' ),
          'hierarchical' => true,
      );
    register_taxonomy( $taxonomy, $object_type, $args );
}