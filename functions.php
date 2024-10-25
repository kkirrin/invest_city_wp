<?php
add_action('wp_enqueue_scripts', 'theme_add_scripts');
add_filter('use_block_editor_for_post_type', '__return_false', 10);

add_theme_support('custom-templates');

add_action('after_setup_theme', 'add_menu');
add_theme_support('post-thumbnails', array('post'));



function theme_add_scripts()
{

    wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css');
    wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_style('swiper', get_template_directory_uri() . '/css/swiper-bundle.min.css');
}



function add_menu()
{
    register_nav_menu('aside', 'Категории в sidebar');
    register_nav_menu('lk', 'Навигация ЛК');
}

add_action('init', 'create_news_type');

function create_news_type()
{
    register_post_type(
        'trands',
        array(
            'public' => true,
            'has_archive' => true,
            'exclude_from_search' => true,
            'rewrite' => array(
                'slug' => 'trands',
                'with_front' => false,
            ),
            'labels' => array(
                'name' => 'Трендовые товары баннеры',
                'singular_name' => 'Трендовые товары баннеры',
                'menu_name' => 'Трендовые товары баннеры',
                'all_items' => 'Все трендовые товары баннеры',
            ),
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes'),
            'taxonomies' => array('category')
        )
    );
};
