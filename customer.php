<?php

/**
Template Name: Khách hàng
 */

get_header();
?>
<div id="main">
    <div class="inner-wrap">
    </div>
    <div class="inner-wrap-title text-center">
        <div class="container">
            <div class="inner-wrap_content">
                <h1>9 năm - 1500 Khách hàng</h1>
                <h2 class="desc">Chúng tôi yêu thích và hiểu rõ cách làm thế nào để giúp website hỗ trợ tốt nhất cho chuyện kinh doanh của bạn.</h2>
            </div>
        </div>
        <img class="d-block" src="<?php echo get_template_directory_uri() ?>/assets/img/pattern-4.png" alt="logo">
    </div>
    <div class="customer-main">

        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $query = new WP_Query(array(
            'cat' => 13,
            'posts_per_page' => 13,
            'paged' => $paged
        ));
        $total = $query->post_count;
        ?>

        <?php if ($query->have_posts()) : ?>

            <!-- begin loop -->
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <div class="customer-main-item<?php if ($total == 13) echo ' customer-main-set' ?>">
                    <div class="container-fluid container-fluid-mx">
                        <div class="customer-charactor">
                            <div class="customer-charactor__box flex-md-row-reverse">
                                <figure class="customer-charactor__box-detail">
                                    <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="<?php the_title(); ?>">
                                </figure>
                                <div class="customer-charactor__content">
                                    <p class="upper-title"><?php the_field('website') ?></p>
                                    <h3><?php the_title(); ?></h3>
                                    <div class="customer-charactor__content-desc"><?php the_excerpt(); ?></div>
                                    <ul class="sociallist">
                                        <li class="sociallist-item">
                                            <a href="<?php the_field('facebook') ?>" target="_blank" rel="noopener">
                                                <span class="sociallist-icon facebook"></span>
                                            </a>
                                        </li>
                                        <li class="sociallist-item">
                                            <a href="<?php the_field('url_website') ?>" target="_blank" rel="noopener">
                                                <span class="sociallist-icon instagram"></span>
                                            </a>
                                        </li>
                                        <li class="sociallist-item">
                                            <a href="#" target="_blank" rel="noopener nofollow">
                                                <span class="sociallist-icon booksy"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            <!-- end loop -->
            <div class="c-pagination">
                <?php
                echo paginate_links(array(
                    'base'         => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                    'total'        => $query->max_num_pages,
                    'current'      => max(1, get_query_var('paged')),
                    'format'       => '?paged=%#%',
                    'show_all'     => false,
                    'type'         => 'plain',
                    'end_size'     => 2,
                    'mid_size'     => 1,
                    'prev_next'    => true,
                    'prev_text'    => __('<i class="fa fa-angle-left"></i>'),
                    'next_text'    => __('<i class="fa fa-angle-right"></i>'),
                    'add_args'     => false,
                    'add_fragment' => '',
                ));
                ?>
            </div>
            <?php wp_reset_postdata(); ?>

        <?php else : ?>
            <p><?php _e('Không có khách hàng.'); ?></p>
        <?php endif; ?>
    </div>
</div>
<div class="footer-pattern-hidden bg-main">
    <img src="<?php echo get_template_directory_uri() ?>/assets/img/pattern-5.png" alt="logo">
</div>
<?php get_footer();
