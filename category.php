<?php
get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/blog.css?5">
<div id="main">
    <div class="inner-wrap"></div>
    <div class="inner-wrap-title text-center">
        <div class="container">
            <div class="inner-wrap_content">
                <h1><?php single_cat_title(); ?></h1>
                <h2 class="desc"><?php the_archive_description(); ?></h2>
            </div>
        </div>
        <img class="d-block" src="<?php echo get_template_directory_uri() ?>/assets/img/pattern-4.png" alt="logo">
    </div>
    <main class="l-main -blog ">
        <?php $term = get_queried_object(); ?>
        <section class="c-blogArticlesSec">
            <div class="container-fluid container-fluid-mx">
                <div class="row c-blogArticlesSec_row -list -pt50 -pt0xs">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="col-md-6 col-xl-4 -mb30">
                                <a href="<?php the_permalink() ?>" class="c-teaserBlog">
                                    <figure class="c-teaserBlog_image">
                                        <img loading="lazy" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="<?php the_title_attribute(); ?>" />
                                    </figure>
                                    <div class="c-teaserBlog_content">
                                        <div class="c-teaserBlog_content_inner">
                                            <div class="c-teaserBlog_misc -mb8">
                                                <time class="t-text -f12 -wSemiBold -cDark -showSm"><?php echo get_the_date() ?>
                                                </time>
                                            </div>
                                            <h3 class="t-title -f16 -mb12"><?php the_title(); ?></h3>
                                            <div class="t-text -f14_28 -cGreyDark -mb24"><?php the_excerpt(); ?></div>
                                        </div>
                                        <div class="c-teaserBlog_cta">
                                            <time class="t-text -f12 -wSemiBold -cDark -hideSm"><?php echo get_the_date() ?>
                                            </time>
                                            <span class="c-linkMore">Xem chi tiết</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endwhile;
                    else : ?>
                        <p>Không có</p>
                    <?php endif; ?>
                </div>
                <div class="row -mt60 -mt48sm -pb60 -pb48sm">
                    <?php if (paginate_links() != '') { ?>
                        <div class="col">
                            <div class="c-pagination">
                                <?php
                                global $wp_query;
                                $big = 999999999;
                                echo paginate_links(array(
                                    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                                    'format' => '?paged=%#%',
                                    'prev_text'    => __('<i class="fa fa-angle-left"></i>'),
                                    'next_text'    => __('<i class="fa fa-angle-right"></i>'),
                                    'current' => max(1, get_query_var('paged')),
                                    'total' => $wp_query->max_num_pages
                                ));
                                ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    </main>
</div>
<div class="footer-pattern-hidden bg-main">
    <img src="<?php echo get_template_directory_uri() ?>/assets/img/pattern-5.png" alt="logo">
</div>
<?php get_footer();
