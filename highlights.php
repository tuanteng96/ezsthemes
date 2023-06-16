<?php

/**
Template Name: Điểm nổi bật
 */

get_header();
?>

<script src="<?php echo get_template_directory_uri() ?>/assets/lib/react.production.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/lib/react-dom.production.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/lib/babel.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/lib/axios.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assets/lib/email.min.js"></script>
<script type="text/babel" src="<?php echo get_template_directory_uri() ?>/assets/js/highlights.js"></script>

<div id="main">
    <div class="inner-wrap">
    </div>
    <div class="inner-wrap-title text-center">
        <div class="container">
            <div class="inner-wrap_content">
                <h1><?php single_post_title(); ?></h1>
                <h2 class="desc"><?php the_excerpt(); ?></h2>
            </div>
        </div>
        <img class="d-block" src="<?php echo get_template_directory_uri() ?>/assets/img/pattern-4.png" alt="logo">
    </div>
    <div class="pt-5" id="hightlights"></div>
    <div class="preloader" id="preloader"></div>
</div>

<?php get_footer();
