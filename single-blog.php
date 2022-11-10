<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tiah
 */
get_header();
?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/blog.css?5">

<div id="main">
    <div class="inner-wrap">
    </div>
    <div class="inner-wrap-title text-center">
        <div class="container">
            <div class="inner-wrap_content">
                <h2 class="sub-h1">
                    <?php $category = get_the_category();
                    $firstCategory = $category[0]->cat_name;
                    echo $firstCategory; ?>
                </h2>
                <div class="desc">
                    <?php
                    if (function_exists('yoast_breadcrumb')) {
                        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                    }
                    ?>
                </div>
            </div>
        </div>
        <img class="d-block" src="<?php echo get_template_directory_uri() ?>/assets/img/pattern-4.png" alt="logo">
    </div>
    <main class="l-main -blog">
        <article class="c-blogArticle">
            <div class="container not-fix-container">
                <div class="d-flex c-blogArticle-list">
                    <div class="-blog-main">
                        <img class="w-100" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" />
                        <header class=" c-blogArticle_header -mb30 -mb20sm">
                            <p class="c-blogArticle_metadata -mt60 -mb20 -mt40sm -mb32sm">
                                <span class="t-text -f12sb"><?php echo get_the_date() ?></span>
                                <span class="t-text -f12sb c-blogArticle_readTime">
                                    Đăng lúc <span><?php echo get_the_time() ?></span>
                                </span>
                            </p>
                            <h1 class="t-title -f40_56">
                                <?php the_title() ?>
                            </h1>
                        </header>
                        <div class="c-blogArticle_richText">

                            <?php
                            while (have_posts()) :
                                the_post();
                                the_content();
                            endwhile; ?>
                        </div>
                    </div>
                    <div class="-blog-sidebar">
                        <div class="-blog-sidebar-box -mb30">
                            <div class="title">Bài viết mới nhất</div>
                            <ul class="list-post">
                                <?php $getposts = new WP_query();
                                $getposts->query('post_status=publish&showposts=5&post_type=post&cat=1'); ?>
                                <?php global $wp_query;
                                $wp_query->in_the_loop = true; ?>
                                <?php $i = 1 ?>
                                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                                    <li>
                                        <div class="img">
                                            <a href="<?php the_permalink() ?>">
                                                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="<?php the_title(); ?>">
                                                <span class="side-count">
                                                    <?php echo $i ?>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="conten">
                                            <h4>
                                                <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                                            </h4>
                                            <div class="date"><?php echo get_the_date() ?></div>
                                        </div>
                                    </li>
                                    <?php $i++ ?>
                                <?php endwhile;
                                wp_reset_postdata(); ?>
                            </ul>
                        </div>
                        <div class="-blog-sidebar-box">
                            <div class="title">Danh mục</div>
                            <ul class="list-cate">
                                <?php
                                $value1 = get_terms(
                                    array(
                                        'taxonomy'   => 'category',
                                        'hide_empty' => false,
                                        'parent' => 1,
                                    )
                                );
                                if (!empty($value1) && is_array($value1)) {
                                    foreach ($value1 as $key) { ?>
                                        <li><a href="<?php echo esc_url(get_term_link($key)) ?>">
                                                <?php echo $key->name; ?>
                                                <span><?php echo $key->count  ?></span>
                                            </a>
                                        </li>
                                <?php
                                    }
                                } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <section class="c-postSliderSec -pt100 -bgGreyLight">
            <div class="container not-fix-container">
                <div class="row">
                    <div class="col">
                        <h4 class="c-postSliderSec_title t-title -mb60 -f32 -f28sm">Cùng chuyên mục</h4>
                        <div class="swiper-container c-postSliderSec_swiper">
                            <div class="swiper-wrapper row">
                                <?php
                                $categories = get_the_category($post->ID);
                                if ($categories) {
                                    $category_ids = array();
                                    foreach ($categories as $individual_category) $category_ids[] = $individual_category->term_id;
                                    $args = array(
                                        'category__in'   => $category_ids,
                                        'post__not_in'   => array($post->ID), //Bỏ qua bài viết hiện tại
                                        'posts_per_page' => 8, // Số bài viết bạn muốn hiển thị.
                                        'caller_get_posts' => 1,
                                        'no_found_rows'   => true //Bỏ qua load phân trang tăng hiệu suât query
                                    );
                                    $my_query = new wp_query($args);
                                    if ($my_query->have_posts()) {
                                        while ($my_query->have_posts()) {
                                            $my_query->the_post();
                                ?>
                                            <div class="col-md-6 col-xl-4">
                                                <a href="<?php the_permalink() ?>" class="c-teaserBlog">
                                                    <figure class="c-teaserBlog_image">
                                                        <img loading="lazy" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="<?php the_title(); ?>" />
                                                    </figure>

                                                    <div class="c-teaserBlog_content">
                                                        <div class="c-teaserBlog_content_inner">
                                                            <h3 class="t-title -f16 -mb12"><?php the_title(); ?></h3>
                                                            <div class="t-text -f14_28 -cGreyDark -mb24"><?php the_excerpt(); ?></div>
                                                        </div>
                                                        <div class="c-teaserBlog_cta">
                                                            <time class="t-text -f12sb -wSemiBold -cDark"><?php the_date(); ?></time>
                                                            <span class="c-linkMore">Xem chi tiết</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                <?php
                                        }
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
</div>

<?php
get_footer();
