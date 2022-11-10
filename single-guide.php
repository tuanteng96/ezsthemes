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
    <main class="l-main -blog c-postSliderSec">
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
                            <div class="title">Bài viết khác</div>
                            <ul class="list-post">
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
                                    $i = 0;
                                    if ($my_query->have_posts()) {

                                        while ($my_query->have_posts()) {
                                            $my_query->the_post();
                                            $i++;
                                ?>
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

                                <?php
                                        }
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </article>

    </main>
</div>
<?php
get_footer();
