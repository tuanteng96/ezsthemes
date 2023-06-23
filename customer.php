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
                <h1>KHÁCH HÀNG TIÊU BIỂU</h1>
                <h2 class="desc">Chúng tôi yêu thích và hiểu rõ cách làm thế nào để SPA của bạn kinh doanh tốt nhất.</h2>
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
                <div class="customer-main-item">
                    <div class="container-fluid container-fluid-mx">
                        <div class="customer-charactor">
                            <div class="customer-charactor__box">
                                <div class="customer-charactor__content">
                                    <h3><?php the_title(); ?></h3>
                                    <div class="customer-charactor__content-desc"><?php the_excerpt(); ?></div>
                                </div>
                                <div class="customer-charactor__box-slider">
                                    <?php
                                    $images = get_field('hinh_anh');

                                    if ($images) : ?>
                                        <div class="owl-slider-customer">
                                            <?php foreach ($images as $image) : ?>
                                                <div class="item">
                                                    <img class="d-block" src="<?php echo $image ?>" alt="<?php echo $image ?>" />
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
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
