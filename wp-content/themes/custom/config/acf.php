<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Rental Custom Post Type
    |--------------------------------------------------------------------------
    */
    array(
        'key' => 'group_5b06798058c4b',
        'title' => 'Rental',
        'fields' => array(
            array(
                'key' => 'field_5b0679ce078a7',
                'label' => 'Brand',
                'name' => 'brand',
                'type' => 'post_object',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'post_type' => array(
                    0 => 'brand',
                ),
                'taxonomy' => array(
                ),
                'allow_null' => 0,
                'multiple' => 0,
                'return_format' => 'object',
                'ui' => 1,
            ),
            array(
                'key' => 'field_5b07faae0df5a',
                'label' => 'Rental Image',
                'name' => 'rental_image',
                'type' => 'image',
                'instructions' => '800x800px upwards, and less than .5MB in size.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'thumbnail',
                'library' => 'all',
                'min_width' => 800,
                'min_height' => 800,
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '.5',
                'mime_types' => 'jpeg,png,jpg',
            ),
            array(
                'key' => 'field_5b565908963d7',
                'label' => 'Description',
                'name' => 'description',
                'type' => 'textarea',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => 500,
                'rows' => 6,
                'new_lines' => 'wpautop',
            ),
            array(
                'key' => 'field_5b09918c1ab32',
                'label' => 'Accessories Package',
                'name' => 'accessories_package',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => '',
                'min' => 0,
                'max' => 0,
                'layout' => 'row',
                'button_label' => 'Add accessory',
                'sub_fields' => array(
                    array(
                        'key' => 'field_5b09919d1ab33',
                        'label' => 'Accessory item',
                        'name' => 'accessory_item',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => 255,
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'rental',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'acf_after_title',
        'style' => 'default',
        'label_placement' => 'left',
        'instruction_placement' => 'label',
        'hide_on_screen' => array(
            0 => 'the_content',
            1 => 'excerpt',
            2 => 'custom_fields',
            3 => 'discussion',
            4 => 'comments',
            5 => 'author',
            6 => 'featured_image',
            7 => 'tags',
            8 => 'send-trackbacks',
        ),
        'active' => 1,
        'description' => '',
    ),

    /*
    |--------------------------------------------------------------------------
    | Home Page
    |--------------------------------------------------------------------------
    */
    array(
        'key' => 'group_5b0791d6c9299',
        'title' => 'Home Page',
        'fields' => array(
            array(
                'key' => 'field_5b41ff2c64d60',
                'label' => 'Hero',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_5b41ff4664d61',
                'label' => 'Title',
                'name' => 'hero_title',
                'type' => 'text',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => 35,
            ),
            array(
                'key' => 'field_5b41ff8e64d62',
                'label' => 'Subheading',
                'name' => 'hero_subheading',
                'type' => 'text',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => 20,
            ),
            array(
                'key' => 'field_5b41ffe264d63',
                'label' => 'Subheading Highlight',
                'name' => 'hero_subheading_highlight',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => 15,
            ),
            array(
                'key' => 'field_5b41fffc64d64',
                'label' => 'Call To Action',
                'name' => 'hero_show_cta',
                'type' => 'true_false',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'message' => '',
                'default_value' => 0,
                'ui' => 0,
                'ui_on_text' => '',
                'ui_off_text' => '',
            ),
            array(
                'key' => 'field_5b42001264d65',
                'label' => 'CTA Text',
                'name' => 'hero_cta_text',
                'type' => 'text',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5b41fffc64d64',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => 15,
            ),
            array(
                'key' => 'field_5b42003864d66',
                'label' => 'CTA Link',
                'name' => 'hero_cta_link',
                'type' => 'text',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5b41fffc64d64',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => 155,
            ),
            array(
                'key' => 'field_5b43b8de2d7e7',
                'label' => 'Video',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_5b43b9372d7e9',
                'label' => 'Show video section',
                'name' => 'show_video_section',
                'type' => 'true_false',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'message' => '',
                'default_value' => 0,
                'ui' => 0,
                'ui_on_text' => '',
                'ui_off_text' => '',
            ),
            array(
                'key' => 'field_5b43b9192d7e8',
                'label' => 'Video url',
                'name' => 'video_url',
                'type' => 'oembed',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5b43b9372d7e9',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'width' => '',
                'height' => '',
            ),
            array(
                'key' => 'field_5b43b96b2d7ea',
                'label' => 'Video Heading',
                'name' => 'video_heading',
                'type' => 'text',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5b43b9372d7e9',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => 20,
            ),
            array(
                'key' => 'field_5b43b97a2d7eb',
                'label' => 'Video Background Image',
                'name' => 'video_background_image',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5b43b9372d7e9',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'thumbnail',
                'library' => 'all',
                'min_width' => 1000,
                'min_height' => 1000,
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '.5',
                'mime_types' => '',
            ),
            array(
                'key' => 'field_5b468cb43d324',
                'label' => 'Advert/Marketing Banner',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_5b468cc13d325',
                'label' => 'Banner Image Mobile',
                'name' => 'banner_image',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'thumbnail',
                'library' => 'all',
                'min_width' => 800,
                'min_height' => '',
                'min_size' => 250,
                'max_width' => '',
                'max_height' => '',
                'max_size' => '.5',
                'mime_types' => 'jpeg,jpg,png',
            ),
            array(
                'key' => 'field_5c4dd766b7d55',
                'label' => 'Banner Image Desktop (Carousel)',
                'name' => 'banner_image_v2',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => '',
                'min' => 1,
                'max' => 3,
                'layout' => 'row',
                'button_label' => 'Add image',
                'sub_fields' => array(
                    array(
                        'key' => 'field_5c4dd795b7d56',
                        'label' => 'Image',
                        'name' => 'image',
                        'type' => 'image',
                        'instructions' => '400kb or less, 800x250px minimum dimensions, aspect ratio 3:1',
                        'required' => 1,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => 'array',
                        'preview_size' => 'thumbnail',
                        'library' => 'all',
                        'min_width' => 800,
                        'min_height' => 250,
                        'min_size' => '',
                        'max_width' => '',
                        'max_height' => '',
                        'max_size' => '.4',
                        'mime_types' => 'jpeg,jpg,png',
                    ),
                    array(
                        'key' => 'field_5c4de7ac49fe1',
                        'label' => 'Link',
                        'name' => 'link',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 1,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => 255,
                    ),
                ),
            ),
            array(
                'key' => 'field_5bedfaf68edff',
                'label' => 'Banner Image Desktop',
                'name' => 'banner_image_desktop',
                'type' => 'image',
                'instructions' => '3:1 aspect ratio',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'thumbnail',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array(
                'key' => 'field_5b468cdb3d326',
                'label' => 'Banner Link',
                'name' => 'banner_link',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => 155,
            ),
            array(
                'key' => 'field_5b4fa4a77402b',
                'label' => 'Rentals',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_5b4fa4d27402c',
                'label' => 'Camera',
                'name' => 'camera_image',
                'type' => 'image',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'thumbnail',
                'library' => 'all',
                'min_width' => 800,
                'min_height' => 600,
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '.5',
                'mime_types' => 'jpg,png,jpeg',
            ),
            array(
                'key' => 'field_5b4fa51a7402d',
                'label' => 'Lenses',
                'name' => 'lens_image',
                'type' => 'image',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'thumbnail',
                'library' => 'all',
                'min_width' => 800,
                'min_height' => 600,
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '.5',
                'mime_types' => 'jpg,png,jpeg',
            ),
            array(
                'key' => 'field_5b4fa52d7402e',
                'label' => 'Sound',
                'name' => 'sound_image',
                'type' => 'image',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'thumbnail',
                'library' => 'all',
                'min_width' => 800,
                'min_height' => 600,
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '.5',
                'mime_types' => 'jpg,png,jpeg',
            ),
            array(
                'key' => 'field_5b4fa53f7402f',
                'label' => 'Lights',
                'name' => 'lights_image',
                'type' => 'image',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'thumbnail',
                'library' => 'all',
                'min_width' => 800,
                'min_height' => 600,
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '.5',
                'mime_types' => 'jpg,png,jpeg',
            ),
            array(
                'key' => 'field_5b4fa54c74030',
                'label' => 'Accessories',
                'name' => 'accessories_image',
                'type' => 'image',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'thumbnail',
                'library' => 'all',
                'min_width' => 800,
                'min_height' => 600,
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '.5',
                'mime_types' => 'jpg,png,jpeg',
            ),
            array(
                'key' => 'field_5bedfac68edfd',
                'label' => 'Sales',
                'name' => 'sales_image',
                'type' => 'image',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'thumbnail',
                'library' => 'all',
                'min_width' => 800,
                'min_height' => 600,
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '.5',
                'mime_types' => 'jpg,png,jpeg',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'page',
                ),
                array(
                    'param' => 'post_taxonomy',
                    'operator' => '==',
                    'value' => 'page_type:home',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'acf_after_title',
        'style' => 'default',
        'label_placement' => 'left',
        'instruction_placement' => 'label',
        'hide_on_screen' => array(
            0 => 'the_content',
            1 => 'excerpt',
            2 => 'custom_fields',
            3 => 'discussion',
            4 => 'comments',
            5 => 'author',
            6 => 'featured_image',
            7 => 'categories',
            8 => 'tags',
        ),
        'active' => 1,
        'description' => '',
    ),


    /*
    |--------------------------------------------------------------------------
    | Contact page
    |--------------------------------------------------------------------------
    */
    array(
        'key' => 'group_5b1ecccd70345',
        'title' => 'Contact',
        'fields' => array(
            array(
                'key' => 'field_5b1eccdf1929b',
                'label' => 'Form blurb',
                'name' => 'form_blurb',
                'type' => 'text',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => 120,
            ),
            array(
                'key' => 'field_5b1eccf21929c',
                'label' => 'Side information',
                'name' => 'side_information',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'basic',
                'media_upload' => 1,
                'delay' => 0,
            ),
            array(
                'key' => 'field_5b1ecdd2c6f9d',
                'label' => 'Hero',
                'name' => 'hero_image',
                'type' => 'image',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'thumbnail',
                'library' => 'all',
                'min_width' => 1000,
                'min_height' => 800,
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '.5',
                'mime_types' => 'jpeg,jpg,png',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_taxonomy',
                    'operator' => '==',
                    'value' => 'page_type:contact',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array(
            0 => 'the_content',
            1 => 'excerpt',
            2 => 'custom_fields',
            3 => 'discussion',
            4 => 'comments',
            5 => 'revisions',
            6 => 'author',
            7 => 'page_attributes',
            8 => 'featured_image',
            9 => 'categories',
            10 => 'tags',
            11 => 'send-trackbacks',
        ),
        'active' => 1,
        'description' => '',
    ),

    /*
    |--------------------------------------------------------------------------
    | Brand Custom Post Type
    |--------------------------------------------------------------------------
    */
    array(
        'key' => 'group_5b0678db9d638',
        'title' => 'Brand',
        'fields' => false,
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'brand',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array(
            0 => 'the_content',
            1 => 'excerpt',
                2 => 'custom_fields',
                3 => 'discussion',
                4 => 'comments',
                5 => 'author',
                6 => 'featured_image',
                7 => 'categories',
                8 => 'tags',
                9 => 'send-trackbacks',
            ),
            'active' => 1,
            'description' => '',
    ),

    /*
    |--------------------------------------------------------------------------
    | About page
    |--------------------------------------------------------------------------
    */
    array(
        'key' => 'group_5b1d347e87802',
        'title' => 'About page',
        'fields' => array(
            array(
                'key' => 'field_5b1d3511a3b09',
                'label' => 'Blurb',
                'name' => 'blurb',
                'type' => 'textarea',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => 291,
                'rows' => 3,
                'new_lines' => 'br',
            ),
            array(
                'key' => 'field_5b1d3534a3b0a',
                'label' => 'Hero Image',
                'name' => 'hero_image',
                'type' => 'image',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'thumbnail',
                'library' => 'all',
                'min_width' => 1000,
                'min_height' => 800,
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '.5',
                'mime_types' => 'jpeg,jpg,png',
            ),
            array(
                'key' => 'field_5bdf757705f51',
                'label' => 'Services',
                'name' => 'about_services',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => '',
                'min' => 6,
                'max' => 6,
                'layout' => 'row',
                'button_label' => 'Add service',
                'sub_fields' => array(
                    array(
                        'key' => 'field_5bdf758e05f52',
                        'label' => 'Service',
                        'name' => 'service',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => 65,
                    ),
                    array(
                        'key' => 'field_5bdf75aa05f53',
                        'label' => 'Image',
                        'name' => 'image',
                        'type' => 'image',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => 'array',
                        'preview_size' => 'thumbnail',
                        'library' => 'all',
                        'min_width' => 800,
                        'min_height' => 800,
                        'min_size' => '',
                        'max_width' => '',
                        'max_height' => '',
                        'max_size' => '.5',
                        'mime_types' => 'jpeg,jpg,png',
                    ),
                    array(
                        'key' => 'field_5bdf75d205f54',
                        'label' => 'Blurb',
                        'name' => 'blurb',
                        'type' => 'textarea',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'maxlength' => 280,
                        'rows' => 3,
                        'new_lines' => '',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_taxonomy',
                    'operator' => '==',
                    'value' => 'page_type:about',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'left',
        'instruction_placement' => 'label',
        'hide_on_screen' => array(
            0 => 'the_content',
            1 => 'excerpt',
            2 => 'discussion',
            3 => 'comments',
            4 => 'author',
            5 => 'featured_image',
            6 => 'categories',
            7 => 'tags',
        ),
        'active' => 1,
        'description' => '',
    )
];
