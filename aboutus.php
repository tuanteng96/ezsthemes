<?php

/**
Template Name: Giới thiệu
 */

get_header();
?>
<div id="main">
    <div class="inner-wrap">
    </div>
    <div class="banner-top">
        <div class="c-aboutHero_bg d-none d-md-block" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/about/71-hero.jpg)"></div>
        <div class="c-aboutHero_bg d-md-none" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/about/66-hero-mobile.jpg)"></div>
        <div class="container">
            <div class="banner-top__menu">
                <h3>
                    <span>About Us</span>
                    <br> On Pace With
                    <br> Your Passion
                </h3>
            </div>
        </div>
        <a href="#about-vision" data-id="claims" class="c-btnArrow d-none d-lg-block js-scrollLink">
            <div class="c-btnArrow_inner">
                <span class="c-icon -arrowDown -s16 -bgAuto"></span>
            </div>
        </a>
    </div>
    <div class="about-vision" id="about-vision">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 about-vision__left">
                    <h2>Our Vision</h2>
                    <p>We aim to be the most trusted solution for appointment-based service providers, delivering tools and connecting communities to foster rhythm, organization, and opportunity.</p>
                    <h3>Beauty in all. Booksy for all.</h3>
                    <p>We celebrate ideas — brave, inspiring, and wacky, all the same. Providers, their clients, and our team members belong here. We actively seek out and amplify diverse voices and communities, knowing our world is better for it, and
                        so are we.</p>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="about-vision__right">
                        <div class="about-vision__right-decor">
                        </div>
                        <div class="about-vision__right-img">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/about/4359-A-CoLab-Self-Made-Q2-2021-PRINT-2049.jpg" alt="#">
                        </div>
                        <h3 class="about-vision__right-title">Better You</h3>
                        <p class="about-vision__right-desc">You’ve built a career doing things your own way — honing your skills, developing relationships, and growing your business. We’re here to streamline the small stuff so you can focus on running your business — and not the other
                            way around.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-started pt-0">
        <div class="container">
            <div class="row">
                <div class="offset-lg-2 col-lg-8 text-center">
                    <h2>How We Started</h2>
                    <p>Booksy was founded on the fundamental idea that small business owners need time and space to bring their artistry to life. Our founders know this first-hand, and they created Booksy to give entrepreneurs back their most valuable
                        resource - time. Today our team carries that purpose through our work as we empower beauty pros around the world.</p>
                </div>
                <div class="col-12">
                    <div class="about-started__img">
                        <img class="d-md-none" loading="lazy" src="<?php echo get_template_directory_uri() ?>/assets/img/about/67-founders@mobile.jpg" alt="founders@mobile" title="">
                        <img class="d-none d-md-block" loading="lazy" src="<?php echo get_template_directory_uri() ?>/assets/img/about/4228-20220408-WCP01115.jpg" alt="20220408-WCP01115" title="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-sale pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-sale__main">
                        <div class="about-sale__main-bg">

                        </div>
                        <div class="about-sale__main-inner">
                            <h3 class="about-sale__main-title">Let's do <br> more, better.</h3>
                            <a class="about-sale__main-btn" href="#">Start FREE trial</a>
                        </div>
                        <div class="about-sale__main-img">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/about/2060-CTA_US.png" alt="#">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
