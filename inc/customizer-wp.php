<?php

/**
 * Functions which customizer into WordPress
 *
 * @package tiah
 */

/**
 * Function help upload SVG
 */
function add_file_types_to_uploads($file_types)
{
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes);
    return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');

/**
 * Remove Crop Image Wordpress Size: Large + Medium_large + Medium
 */
function tiah_remove_image_sizes($sizes)
{
    unset($sizes['large']);
    unset($sizes['medium_large']);
    unset($sizes['medium']);
    // Remove Crop Image Woocommerce Size
    if (class_exists('WooCommerce')) {
        unset($sizes['shop_thumbnail']);
        unset($sizes['shop_catalog']);
        unset($sizes['shop_single']);
    }
    return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'tiah_remove_image_sizes');

/**
 * Remove Editor Gutenberg, make Edior Classic
 */
// Post
add_filter('use_block_editor_for_post', '__return_false', 10);
// Post type
add_filter('use_block_editor_for_post_type', '__return_false', 10);

/**
 * Setup Plugin ACF
 */
// 1. customize ACF path
add_filter('acf/settings/path', 'willgroup_acf_settings_path');
function willgroup_acf_settings_path($path)
{
    $path = get_stylesheet_directory() . '/inc/acf/';
    return $path;
}

// 2. customize ACF dir
add_filter('acf/settings/dir', 'willgroup_acf_settings_dir');
function willgroup_acf_settings_dir($dir)
{
    $dir = get_stylesheet_directory_uri() . '/inc/acf/';
    return $dir;
}

// 3. Include ACF
include_once(get_stylesheet_directory() . '/inc/acf/acf.php');

/**
 * Style Dashboard
 */
//Css Admin
if (!function_exists('tiah_css_admin')) :
    add_action('admin_head', 'tiah_css_admin');
    add_action('admin_enqueue_scripts', 'tiah_css_admin');
    function tiah_css_admin()
    {
        wp_enqueue_style('admin_css', get_template_directory_uri() . '/admin/admin.css');
    }
endif;
//CSS Login
if (!function_exists('tiah_css_admin_login')) :
    add_action('login_enqueue_scripts', 'tiah_css_admin_login');
    function tiah_css_admin_login()
    {
        wp_enqueue_style('admin_login_css', get_template_directory_uri() . '/admin/login.css');
    }
endif;

/**
 * Create Option Page from ACF
 */
add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init()
{
    acf_add_options_sub_page(array(
        'page_title'  => 'Header',
        'menu_title'  => 'Header',
        'parent_slug' => 'themes.php',
    ));
    acf_add_options_sub_page(array(
        'page_title'  => 'Script',
        'menu_title'  => 'Script',
        'parent_slug' => 'themes.php',
    ));
}
/**
 * Get home url Author
 */
add_filter('login_headerurl', 'my_custom_login_url');
function my_custom_login_url($url)
{
    $theme_data = wp_get_theme();
    $theme_uri = $theme_data->get('ThemeURI');
    return $theme_uri;
}

/**
 * Automatically set the image Title, Alt-Text, Caption & Description upload (image tab)
 */
add_action('add_attachment', 'tiah_set_image_meta_image_upload');
function tiah_set_image_meta_image_upload($post_ID)
{
    if (wp_attachment_is_image($post_ID)) {
        $tiah_image_title = get_post($post_ID)->post_title;
        $tiah_image_title = preg_replace(
            '%\s*[-_\s]+\s*%',
            ' ',
            $tiah_image_title
        );
        $tiah_image_title = ucwords(strtolower($tiah_image_title));
        $tiah_my_image_meta = array(
            'ID' => $post_ID,
            'post_title' => $tiah_image_title,
            'post_excerpt' => '',
            'post_content' => '',
        );
        update_post_meta($post_ID, '_wp_attachment_image_alt',    $tiah_image_title);
        wp_update_post($tiah_my_image_meta);
    }
}

/**
 * Automatically resizes uploaded images (image tab)
 */
require get_template_directory() . '/inc/auto-resize-image.php';


add_filter('get_the_archive_title', 'my_theme_archive_title');
function my_theme_archive_title($title)
{
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_author()) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif (is_post_type_archive()) {
        $title = post_type_archive_title('', false);
    } elseif (is_tax()) {
        $title = single_term_title('', false);
    }
    return $title;
}