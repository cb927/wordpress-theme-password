<?php
add_action('init', function () {


    register_post_type(
        'banner_img',
        array(
            'labels' => array(
                'name' => __('バナーイメージ (PC)'),
                'singular_name' => __('banner_img')
            ),
            'rewrite' => array(
                'slug' => 'banner_img',
                'with_front' => false,
            ),
            'hierarchical' => false,
            'has_archive' => true,
            'menu_position' => 26,
            'public' => true,
            "supports" => ['thumbnail'],
        )
    );

    register_post_type(
        'banner_img_sp',
        array(
            'labels' => array(
                'name' => __('バナーイメージ (SP)'),
                'singular_name' => __('banner_img_sp')
            ),
            'rewrite' => array(
                'slug' => 'banner_img_sp',
                'with_front' => false,
            ),
            'hierarchical' => false,
            'has_archive' => true,
            'menu_position' => 27,
            'public' => true,
            "supports" => ['thumbnail'],
        )
    );
    register_post_type(
        'info',
        array(
            'labels' => array(
                'name' => __('Information'),
                'singular_name' => __('info')
            ),
            'rewrite' => array(
                'slug' => 'info',
                'with_front' => false,
            ),
            'hierarchical' => false,
            'has_archive' => true,
            'menu_position' => 28,
            'public' => true,
            "supports" => ['title', 'editor', 'author'],
        )
    );
    register_post_type(
        'model',
        array(
            'labels' => array(
                'name' => __('Model'),
                'singular_name' => __('model')
            ),
            'rewrite' => array(
                'slug' => 'model',
                'with_front' => false,
            ),
            'hierarchical' => false,
            'has_archive' => true,
            'menu_position' => 29,
            'public' => true,
            "supports" => ['custom-fields', 'thumbnail'],
            'show_in_rest' => true,
            'taxonomies' => array('category'),
        )
    );
    register_post_type(
        'liver',
        array(
            'labels' => array(
                'name' => __('Liver'),
                'singular_name' => __('liver')
            ),
            'rewrite' => array(
                'slug' => 'liver',
                'with_front' => false,
            ),
            'hierarchical' => false,
            'has_archive' => true,
            'menu_position' => 30,
            'public' => true,
            "supports" => ['editor', 'custom-fields', 'thumbnail'],
            'show_in_rest' => true,
            'taxonomies' => array('category'),
        )
    );

    flush_rewrite_rules();
});

add_action('save_post_model', function ($post_ID) {
    if (
        'auto-draft' === get_post_status($post_ID)
        &&  post_type_supports(get_post_type($post_ID), 'custom-fields')
    ) {
        add_post_meta($post_ID, 'Name', '');
        add_post_meta($post_ID, 'name-confirm', '');
        add_post_meta($post_ID, 'size', '');
        add_post_meta($post_ID, 'birth-place', '');
        add_post_meta($post_ID, 'blood-type', '');
        add_post_meta($post_ID, 'hobby', '');
        add_post_meta($post_ID, 'special-skill', '');
        add_post_meta($post_ID, 'twitter', '');
        add_post_meta($post_ID, 'instagram', '');
        add_post_meta($post_ID, 'tiktok', '');
        add_post_meta($post_ID, 'bigo', '');
        add_post_meta($post_ID, 'mico', '');
        add_post_meta($post_ID, 'pokocha', '');
    }
});

add_action('save_post_liver', function ($post_ID) {
    if (
        'auto-draft' === get_post_status($post_ID)
        &&  post_type_supports(get_post_type($post_ID), 'custom-fields')
    ) {
        add_post_meta($post_ID, 'Name', '');
        add_post_meta($post_ID, 'name-confirm', '');
        add_post_meta($post_ID, 'twitter', '');
        add_post_meta($post_ID, 'instagram', '');
        add_post_meta($post_ID, 'tiktok', '');
        add_post_meta($post_ID, 'bigo', '');
        add_post_meta($post_ID, 'mico', '');
        add_post_meta($post_ID, 'pokocha', '');
    }
});
