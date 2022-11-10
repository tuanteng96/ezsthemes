<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tiah
 */
?>

<?php
$post = $wp_query->post;

if (in_category('huong-dan-su-dung')) {
    include(TEMPLATEPATH . '/single-guide.php');
} else {
    include(TEMPLATEPATH . '/single-blog.php');
}
?>

