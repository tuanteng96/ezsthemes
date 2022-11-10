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
<div id="main">
    <div class="inner-wrap">
    </div>
    <main class="l-main -blog ">
        <?php $term = get_queried_object(); ?>
        <section class="c-blogHero -business -pt60 -pb60 -pt40sm -pb48sm -bgDark" style="background-image: url(<?php the_field('thumbnail_category', $term) ?>">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="t-title -f40_56 -f28sm -mb16 -cWhite"><?php single_cat_title(); ?></h2>
                        <div class="t-text -f14_28 -mb32 -cGreyMedium">
                            <?php the_archive_description(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="c-blogArticlesSec -bgGreyLight">
            <div class="container -xsFullWidth">
                <div class="row c-blogArticlesSec_row -list -pt60 -pt0xs">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="col-md-6 col-xl-4 -mb40 -mb80sm">
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
<?php
get_footer();
