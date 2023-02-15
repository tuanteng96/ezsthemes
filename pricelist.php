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
    <div class="py-5">
        <div class="container-fluid container-fluid-mx">
            <div class="bg-white price-list2">
                <div class="price-list2-title">
                    <h4>Gói EZS BASIC</h4>
                    <div class="font-number price-list2-price total-basic">3.500.000₫</div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-6 mb-4 mb-lg-0">
                        <div class="module-ezs">
                            <h5>1. Phần mềm quản lý</h5>
                            <div class="price">
                                <span class="font-number total-pm" data-totalcs="3500000">3.500.000₫</span>
                                <span>/ <b class="val-cs-pmg">1</b> cơ sở / <b class="val-year-pmg">1</b> năm</span>
                            </div>
                            <div class="sale">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                    <path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="currentColor"></path>
                                    <path d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white"></path>
                                </svg>
                                Sử dụng cho 2 Cơ sở chỉ còn <span class="font-number">6.000.000</span> / 1 Năm
                            </div>
                            <div class="list-module">
                                <div class="module-item">
                                    <div class="module-title">Giới hạn truy cập <b class="user-total">3</b> tài khoản / 1 cơ sở</div>
                                    <div class="module-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"></rect>
                                            <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="module-item">
                                    <div class="module-title">Không hạn chế chức năng</div>
                                    <div class="module-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"></rect>
                                            <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="module-item">
                                    <div class="module-title">Hỗ trợ sử dụng 24/7</div>
                                    <div class="module-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"></rect>
                                            <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center list-choose">
                                <div class="dropdown dropup select-pm-cs" data-type="cs">
                                    <span class="btn btn-primary cursor-pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="current-select current-pm-cs" data-cs="1">1 Cơ sở</span>
                                        <i class="far fa-angle-down"></i>
                                    </span>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item active" data-value="1" href="javascript:;">1 Cơ sở</a>
                                        <a class="dropdown-item" data-value="2" href="javascript:;">2 Cơ sở</a>
                                        <a class="dropdown-item" data-value="3" href="javascript:;">3 Cơ sở</a>
                                        <a class="dropdown-item" data-value="4" href="javascript:;">4 Cơ sở</a>
                                        <a class="dropdown-item" data-value="5" href="javascript:;">5 Cơ sở</a>
                                    </div>
                                </div>
                                <div class="dropdown dropup select-pm-year" data-type="year">
                                    <span class="cursor-pointer btn btn-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="current-select current-pm-year" data-cs="1">1 năm</span>
                                        <i class="far fa-angle-down vertical-text-bottom"></i>
                                    </span>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item active" data-value="1" href="javascript:;">1 Năm</a>
                                        <a class="dropdown-item" data-value="2" href="javascript:;">2 Năm</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="module-ezs">
                            <h5>2. APP thương hiệu riêng</h5>
                            <div class="price">
                                <span class="font-number total-app text-danger" data-totalapp="0">Không sử dụng</span>
                                <span class="d-none">/ <b class="val-year-app">1</b> năm</span>
                            </div>
                            <div class="sale">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                    <path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="currentColor"></path>
                                    <path d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white"></path>
                                </svg>
                                Mua 2 năm chỉ với <span class="font-number">7.200.000₫</span>
                            </div>
                            <div class="list-module">
                                <div class="module-item">
                                    <div class="module-title">Miễn phí tài khoản APP Store, CH Play</div>
                                    <div class="module-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"></rect>
                                            <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="module-item">
                                    <div class="module-title">Tên APP theo thương hiệu sở hữu</div>
                                    <div class="module-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"></rect>
                                            <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="module-item">
                                    <div class="module-title">Tải xuống trên CH Play & APP Store</div>
                                    <div class="module-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"></rect>
                                            <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center list-choose">
                                <div class="dropdown select-app-year">
                                    <span class="cursor-pointer btn btn-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="current-select current-app-year" data-cs="1" data-price="0">Không sử dụng</span>
                                        <i class="far fa-angle-down vertical-text-bottom"></i>
                                    </span>
                                    <div class="dropdown-menu dropup" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item active" data-value="0" data-price="0" href="javascript:;">Không sử dụng</a>
                                        <a class="dropdown-item" data-value="1" data-price="5990000" href="javascript:;">1 Năm</a>
                                        <a class="dropdown-item" data-value="2" data-price="7190000" href="javascript:;">2 Năm</a>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="el-click show">
                                <button type="button" class="btn btn-primary">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor"></path>
                                        <path d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor"></path>
                                    </svg>
                                    Sử dụng APP
                                </button>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="tip-pro">Quý khách hàng có thể tham khảo gói EZS PRO của chúng tôi <a href="javascript:;">tại đây!</a></div>
            </div>
            <div id="price-list" class="mt-5 d-none">
                <div class="bg-white price-list-box">
                    <div class="_title">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                            <path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="currentColor"></path>
                            <path d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white"></path>
                        </svg>
                        <h4>EZS PRO</h4>
                    </div>
                    <div class="price-head">
                        <div class="price-head-item w-flex d-flex align-items-center">
                            <img class="w-100" src="<?php echo get_template_directory_uri() ?>/assets/img/sass-3-banner-image.png" alt="EZS - Phần mềm quản lý SPA">
                        </div>
                        <div class="price-head-item w-pro">
                            <div class="card-price bg-primary-2">
                                <div class="price-t">Chi phí từ</div>
                                <div class="price-s1 d-flex justify-content-center flex-column">
                                    <span class="price-s1-p font-number">75.000.000₫</span>
                                </div>
                                <div class="price-d">Phiên bản EZS PRO</div>
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
                                <div class="price-s">
                                    Chi phí từ
                                </div>
                                <div class="price-d font-number">
                                    75.000.000₫
                                </div>
                            </div>
                        </div>
                        <div class="price-body-item">
                            <div class="price-head-item w-flex">
                                <div class="price-content-title">
                                    <div class="dropdown">
                                        Phí Online phần mềm
                                    </div>
                                </div>
                            </div>
                            <div class="price-head-item w-year">
                                <div class="price-d font-number">
                                    12.000.000₫ <span>/ 1 - 2 cở sở</span>
                                </div>
                                <div class="price-d font-number">
                                    <span>Từ 3 cơ sở</span> + 6.000.000₫
                                </div>
                            </div>
                        </div>
                        <div class="price-body-item">
                            <div class="price-head-item w-flex">
                                <div class="price-content-title">
                                    Các chi phí khác phải đăng ký và duy trì từ năm đầu tiên
                                </div>
                                <div class="price-content-desc">
                                    Nếu quý khách đã sẵn có thì có thể sử dụng luôn mà không cần đăng ký mới. <br>
                                    Đăng ký trực tiếp và thanh toán với nhà cung cấp sở hữu trực tiếp bởi khách hàng
                                </div>
                            </div>
                            <div class="price-head-item w-year"></div>
                        </div>
                        <div class="price-body-item">
                            <div class="price-head-item w-flex">
                                <div class="price-content-title">
                                    Phí tên miền chạy Website
                                </div>
                            </div>
                            <div class="price-head-item w-year">
                                <div class="price-d font-number">
                                    300.000₫ <span>/ Tên miền</span> .Com
                                </div>
                                <div class="price-content-desc">Các tên miền <b>.Vn, .Com.Vn</b> theo bảng giá niêm yết</div>
                            </div>
                        </div>
                        <div class="price-body-item">
                            <div class="price-head-item w-flex">
                                <div class="price-content-title">
                                    <div class="dropdown">
                                        Phí chứng chỉ bảo mật SSL
                                    </div>
                                </div>
                            </div>
                            <div class="price-head-item w-year">
                                <div class="price-d font-number">
                                    300.000₫
                                </div>
                            </div>
                        </div>
                        <div class="price-body-item">
                            <div class="price-head-item w-flex">
                                <div class="price-content-title">
                                    <div class="dropdown">
                                        Phí tài khoản APP Store - 99$ / 1 năm
                                    </div>
                                </div>
                            </div>
                            <div class="price-head-item w-year">
                                <div class="price-head-item w-year">
                                    <div class="price-d font-number">
                                        2.500.000₫
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="price-body-item">
                            <div class="price-head-item w-flex">
                                <div class="price-content-title">
                                    <div class="dropdown">
                                        Phí tài khoản CH Play - 25$ ( Vĩnh viễn )
                                    </div>
                                </div>
                            </div>
                            <div class="price-head-item w-year">
                                <div class="price-head-item w-year">
                                    <div class="price-d font-number">
                                        550.000₫
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="note-prices">(*) Chi phí trên chưa bao gồm Thuế & Thiết bị đính kèm</div>
    </div>
</div>
</div>
<div class="footer-pattern-hidden bg-main">
    <img src="<?php echo get_template_directory_uri() ?>/assets/img/pattern-5.png" alt="logo">
</div>
<?php get_footer();
