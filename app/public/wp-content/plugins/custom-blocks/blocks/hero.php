<?php
if (function_exists('acf_register_block_type')) {
    acf_register_block_type(array(
        'name'              => 'hero',
        'title'             => __('Hero Section'),
        'description'       => __('A hero section block.'),
        'post_types'        => array('page'),
        'icon'              => 'laptop',
        'supports'          => array(
            'multiple' => true,
        ),
    ));
}
