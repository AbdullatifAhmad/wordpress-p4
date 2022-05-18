<?php

add_action('init', 'ReviewPostType');

function reviewPostType()
{
    $args = [
        'labels' => [
            'name' => 'Review',
            'singular_name' => 'Review',
            'all_items' => 'Al het Review',
            'edit_item' => 'Review bewerken',
            'add_review' => 'Review aanmaken',
            'add_review_item' => 'Review toevoegen',
        ],
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'show_ui' => true,
        'show_in_nav_menus' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-media-document',
        'supports' => [
            'title',
            'editor',
        ],
        'rewrite' => [
            'slug' => 'review',
        ],
    ];

    \register_post_type('review', $args);
}
