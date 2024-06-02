<?php
if (function_exists('acf_register_block_type')) {
    acf_register_block_type(array(
        'name'              => 'page-header',
        'title'             => __('Page Header'),
        'description'       => __('A block for page header.'),
        'post_types'        => array('page'),
        'icon'              => 'laptop',
        'supports'          => array(
            'multiple' => true,
        ),
    ));
}
