<?php

/**
Template Name: Bảng giá
 */

get_header();
?>
<div id="main">
    <div class="inner-wrap">
    </div>
    <div class="inner-wrap-title text-center">
        <div class="container">
            <div class="inner-wrap_content">
                <h1><?php the_field('sub_title') ?></h1>
                <h2 class="desc"><?php the_excerpt(); ?></h2>
            </div>
        </div>
        <img class="d-block" src="<?php echo get_template_directory_uri() ?>/assets/img/pattern-4.png" alt="logo">
    </div>
    <div id="price-list" class="pt-5">
        <div class="container-fluid container-fluid-mx">
            <div class="bg-white price-list-box">
                <div class="price-head">
                    <div class="price-head-item w-flex d-flex align-items-center">
                        <img class="w-100" src="<?php echo get_template_directory_uri() ?>/assets/img/sass-3-banner-image.png" alt="EZS - Phần mềm quản lý SPA">
                    </div>
                    <div class="price-head-item w-year">
                        <div class="card-price bg-primary-2">
                            <div class="price-t">Tổng chi phí</div>
                            <div class="price-s1 d-flex justify-content-center flex-column">
                                <span class="price-s1-p font-number total-price-first">81.600.000</span>
                                <span class="price-s1-s font-number total-price-year-old">81.600.000</span>
                            </div>
                            <div class="price-d">Năm đầu tiên</div>
                        </div>
                    </div>
                    <div class="price-head-item w-year">
                        <div class="card-price">
                            <div class="price-t">Tổng chi phí</div>
                            <div class="price-s1 d-flex justify-content-center flex-column">
                                <span class="price-s1-p total-price">6.000.000</span>
                                <span class="price-s1-s font-number total-price-old">6.000.000</span>
                            </div>
                            <div class="price-d">Năm tiếp theo</div>
                        </div>
                    </div>
                </div>
                <div class="price-body">
                    <div class="price-body-item">
                        <div class="price-head-item w-flex">
                            <div class="price-content">
                                <h2 class="price-content-title mb-0">Phần mềm, APP Android & IOS, Website</h2>
                                <div class="price-content-desc">
                                    <h3>Phần mềm quản lý spa, App khách hàng thương hiệu riêng 2 phiên bản android và IOS, Khởi tạo website giới thiệu Spa/ thẩm mỹ viện với tên miền riêng </h3>
                                </div>
                            </div>
                        </div>
                        <div class="price-head-item w-year">
                            <div class="price-note"><code>Năm đầu</code></div>
                            <div class="price-s font-number" data-price-frist="30000000">
                                30.000.000
                            </div>
                            <div class="price-d font-number" data-price-year-old="75000000">
                                75.000.000
                            </div>
                        </div>
                        <div class="price-head-item w-year">
                            <div class="price-note"><code>Năm tiếp theo</code></div>
                            <div class="price-s" data-price="0" data-price-old="0">
                                Miễn phí
                            </div>
                        </div>
                    </div>
                    <div class="price-body-item">
                        <div class="price-head-item w-flex">
                            <div class="price-content-title">
                                <div class="dropdown">
                                    Phí đăng kí tên miền
                                    <span class="text-success cursor-pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="domain-item-curent">.Com</span>
                                        <i class="far fa-angle-down vertical-text-bottom"></i>
                                    </span>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item domain-item" data-value-first="300000" data-value="300000" href="javascript:;">.Com</a>
                                        <a class="dropdown-item domain-item" data-value-first="450000" data-value="350000" href="javascript:;">.Com.Vn</a>
                                        <a class="dropdown-item domain-item" data-value-first="550000" data-value="450000" href="javascript:;">.Vn</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="price-head-item w-year">
                            <div class="price-note"><code>Năm đầu</code></div>
                            <div class="price-s font-number domain-first" data-price-frist="300000" data-price-year-old="300000">
                                300.000
                            </div>
                        </div>
                        <div class="price-head-item w-year">
                            <div class="price-note"><code>Năm tiếp theo</code></div>
                            <div class="price-s domain" data-price="300000" data-price-old="300000">
                                300.000
                            </div>
                        </div>
                    </div>
                    <div class="price-body-item">
                        <div class="price-head-item w-flex">
                            <div class="price-content-title">
                                Phí chứng chỉ bảo mật tên miền - <span class="text-danger font-number">SSL</span>
                            </div>
                        </div>
                        <div class="price-head-item w-year">
                            <div class="price-note"><code>Năm đầu</code></div>
                            <div class="price-s" data-price-frist="0">
                                Miễn phí
                            </div>
                            <div class="price-d font-number" data-price-year-old="300000">
                                300.000
                            </div>
                        </div>
                        <div class="price-head-item w-year">
                            <div class="price-note"><code>Năm tiếp theo</code></div>
                            <div class="price-s" data-price-frist="0">
                                Miễn phí
                            </div>
                            <div class="price-d font-number" data-price-old="300000">
                                300.000
                            </div>
                        </div>
                    </div>
                    <div class="price-body-item">
                        <div class="price-head-item w-flex">
                            <div class="price-content-title">
                                Phí tài khoản AppStore, CH Play - <span class="text-danger font-number">125$ / 1 năm</span>
                            </div>
                            <div class="price-content-desc">
                                <h3>Miễn phí duy trì app trên tài khoản chung của công ty EZS</h3>
                            </div>
                        </div>
                        <div class="price-head-item w-year">
                            <div class="price-note"><code>Năm đầu</code></div>
                            <div class="price-s" data-price-frist="0">
                                Miễn phí
                            </div>
                            <div class="price-d font-number" data-price-year-old="3000000">
                                3.000.000
                            </div>
                        </div>
                        <div class="price-head-item w-year">
                            <div class="price-note"><code>Năm tiếp theo</code></div>
                            <div class="price-s" data-price-frist="0">
                                Miễn phí
                            </div>
                            <div class="price-d font-number" data-price-old="2400000">
                                2.400.000
                            </div>
                        </div>
                    </div>
                    <div class="price-body-item">
                        <div class="price-head-item w-flex">
                            <div class="price-content-title">
                                <div class="dropdown">
                                    Phí duy trì hệ thống có
                                    <span class="text-success cursor-pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="total-count font-number">1</span> cơ sở
                                        <i class="far fa-angle-down vertical-text-bottom"></i>
                                    </span>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <div class="px-3 py-1 form-count">
                                            <label>Nhập số cơ sở</label>
                                            <input type="number" min="1" class="form-control input-count" placeholder="Nhập số cơ sở" value="1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="price-head-item w-year">
                            <div class="price-note"><code>Năm đầu</code></div>
                            <div class="price-s font-number cs-first" data-price-frist="3000000" data-price-year-old="3000000">
                                3.000.000
                            </div>
                        </div>
                        <div class="price-head-item w-year">
                            <div class="price-note"><code>Năm tiếp theo</code></div>
                            <div class="price-s cs" data-price="3000000" data-price-old="3000000">
                                3.000.000
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer-pattern-hidden bg-main">
    <img src="<?php echo get_template_directory_uri() ?>/assets/img/pattern-5.png" alt="logo">
</div>
<?php get_footer();
