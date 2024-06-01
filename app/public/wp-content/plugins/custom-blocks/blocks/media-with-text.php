<?php
if (function_exists('acf_register_block_type')) {
    acf_register_block_type(array(
        'name'              => 'media-with-text',
        'title'             => __('Media with text'),
        'description'       => __('A block for media with text.'),
        'post_types'        => array('page'),
        'icon'              => 'laptop',
        'supports'          => array(
            'multiple' => true,
        ),
    ));
}
