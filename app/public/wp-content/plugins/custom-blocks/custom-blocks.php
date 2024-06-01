<?php
/*
Plugin Name: Custom Blocks
Description: Custom Gutenberg blocks for Headless WordPress.
Version: 1.0
Author: Your Name
*/

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

// Initialize global variable to store block definitions
global $acf_blocks;
$acf_blocks = array();

/**
 * Load block configurations and register custom ACF blocks
 */
function register_custom_blocks()
{
    $block_config_dir = plugin_dir_path(__FILE__) . 'blocks/';
    $block_files = glob($block_config_dir . '*.php');

    if (function_exists('acf_register_block_type') && !empty($block_files)) {
        foreach ($block_files as $filename) {
            include_once $filename;
        }
    }
}
add_action('acf/init', 'register_custom_blocks');


/**
 * Restrict block types to only custom blocks
 */
function allow_only_custom_blocks($allowed_blocks, $editor_context)
{
    $block_config_dir = plugin_dir_path(__FILE__) . 'blocks/';
    $block_files = glob($block_config_dir . '*.php');

    $allowed_custom_blocks = array();

    foreach ($block_files as $filename) {
        // Extract the block name from the filename
        $block_name = basename($filename, '.php');
        $allowed_custom_blocks[] = 'acf/' . $block_name;
    }

    return $allowed_custom_blocks;
}
add_filter('allowed_block_types_all', 'allow_only_custom_blocks', 10, 2);
