<?php

/**
Template Name: App khách hàng
 */

get_header();
?>
<div id="main">
    <div class="video-outstanding">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-xl-6 d-flex flex-column justify-content-center align-items-center align-items-lg-start">
                    <span class="pm-title-tag">ĐIỂM NỔI BẬT</span>
                    <h1>
                        <div>APP thương hiệu riêng</div>
                        <div>2 Phiên bản ANDROID & IOS</div>
                    </h1>
                    <div class="text-white font-weight-light mb-3">
                        Được tải và cài đặt chính thống trên kho ứng dụng miễn phí của <span class="font-weight-bold">APP STORE & CH PLAY</span> hoặc có thể thực hiện quét <span class="font-weight-bold">QR Code</span> tại quầy SPA để cài đặt.
                    </div>
                    <div class="text-white element-typed"></div>
                    <div class="wpb_wrapper">
                        <a class="custom-btn" href="#">
                            <i class="fab fa-google-play"></i>
                            <p><em>Available on</em>Google Play</p>
                        </a>
                        <a class="custom-btn" href="#">
                            <i class="fab fa-apple"></i>
                            <p><em>Download on</em>App Store</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-6">
                    <a href="#" data-toggle="modal" data-target="#modal-video">
                        <div class="video-outstanding__video text-right">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/app/hinh-anh-app.png" alt="Hình ảnh app">
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="wave-effect wave-anim">
            <div class="waves-shape shape-one">
                <div class="wave wave-one"></div>
            </div>
            <div class="waves-shape shape-two">
                <div class="wave wave-two"></div>
            </div>
            <div class="waves-shape shape-three">
                <div class="wave wave-three"></div>
            </div>
        </div>
    </div>

    <div class="bg-light-app app-section-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-6">
                    <div class="app-1-text">
                        <h3>App kết nối trực tiếp <br /> vào phần mềm quản lý</h3>
                        <div class="sub">
                            Lợi ích đồng bộ dữ liệu
                        </div>
                        <ul>
                            <li>
                                <div class="num">1</div>
                                <div class="val">
                                    Khi cập nhập bất cứ thông tin gì lên phần mềm ( Sản phẩm mới, dịch vụ với, các chương trình ưu đãi ) thì ngay lập tức các thông tin trên APP mà khách hàng cài đặt sẽ được cập nhập theo.
                                </div>
                            </li>
                            <li>
                                <div class="num">2</div>
                                <div class="val"> Khi khách hàng đặt lịch, mua hàng hay Live Chat thì các nhân viên lễ tân tại SPA sẽ nhận được thông tin để xử lý yêu cầu từ khách hàng.</div>
                            </li>
                            <li>
                                <div class="num">3</div>
                                <div class="val">
                                    Giúp khách hàng có thể quản lý thẻ dịch vụ, công nợ, đơn hàng, ví điện tử, ... của mình tại SPA.
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="app-1-img">
                        <!-- <img class="w-100" src="<?php echo get_template_directory_uri() ?>/assets/img/app/app-img7.png" alt="App hoạt động như thế nào ?"> -->
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/app/app-ket-noi-truc-tiep-vao-phan-mem.png" alt="App hoạt động như thế nào ?">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="bg-white app-one">
        <div class="container">
            <div class="app-title">
                <div class="sub">
                    Sau khi cài đặt APP
                </div>
                <h3>Chưa đăng nhập tài khoản ?</h3>
                <div class="desc">
                    Xem được toàn bộ các thông tin được công khai đến từ SPA.
                </div>
            </div>
        </div>
        <div class="container">
            <div id="element" data-image="<?php echo get_template_directory_uri() ?>/assets/img/app/home-app.png"></div>
            <!-- <div id=" add_pos_marker">Add Positive dot</div>
            <div id="add_neg_marker">Add Negative dot</div>
            <div id="save">Save</div> -->
        </div>
        <div class="app-title mb-0 mt-5">
            <div class="desc">
                Trang chủ màn hình APP
            </div>
        </div>
    </section>

    <section id="screenshots" class="screenshots-section app-two">
        <!-- <div class="container">
            <div class="app-title">
                <div class="sub">
                    Ảnh chụp màn hình
                </div>
                <h3>Chức năng khác ?</h3>
                <div class="desc">
                    Các chức năng khác bạn có thể xem được khi chưa đăng nhập tài khoản.
                </div>
            </div>
        </div> -->
        <div class="container">
            <!--start app screen carousel-->
            <div class="screen-slider-content mt-5">
                <div class="screenshot-frame"></div>
                <div class="screen-carousel screen-carousel1 owl-carousel owl-theme dot-indicator">
                    <div class="scalize position-relative">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/app/before-login/blog-lam-dep.jpg" class="img-fluid" alt="Danh sách Blogs">
                        <!-- <a tabindex="0" class="item-point" data-top="50" data-left="50" role="button" data-toggle="popover" data-trigger="focus" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?"></a>
                        <a tabindex="1" class="item-point" data-top="200" data-left="50" role="button" data-toggle="popover" data-trigger="focus" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?"></a>
                        <a tabindex="1" class="item-point" data-top="300" data-left="50" role="button" data-toggle="popover" data-trigger="focus" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?"></a> -->
                        <div class="scalize-text text-center">Blogs - Tin tức</div>
                    </div>
                    <div class="scalize w-100 position-relative">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/app/before-login/chi-tiet-blog.jpg" class="img-fluid" alt="Nội dung Blog">
                        <!-- <a tabindex="0" class="item-point" data-top="150" data-left="50" role="button" data-toggle="popover" data-trigger="focus" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?"></a>
                        <a tabindex="1" class="item-point" data-top="220" data-left="50" role="button" data-toggle="popover" data-trigger="focus" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?"></a> -->
                        <div class="scalize-text text-center">Chi tiết bài viết</div>
                    </div>
                    <div class="scalize w-100 position-relative">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/app/before-login/maps.jpg" class="img-fluid" alt="Danh sách cơ sở">
                        <div class="scalize-text text-center">Chuỗi cơ sở</div>
                    </div>
                    <div class="scalize w-100 position-relative">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/app/before-login/ds-sp.jpg" class="img-fluid" alt="Danh sách sản phẩm">
                        <div class="scalize-text text-center">Danh sách sản phẩm</div>
                    </div>
                    <div class="scalize w-100 position-relative">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/app/before-login/chi-tiet-sp.jpg" class="img-fluid" alt="Chi tiết sản phẩm">
                        <div class="scalize-text text-center">Chi tiết sản phẩm</div>
                    </div>
                    <div class="scalize w-100 position-relative">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/app/before-login/ds-dv.jpg" class="img-fluid" alt="Danh sách dịch vụ">
                        <div class="scalize-text text-center">Danh sách dịch vụ</div>
                    </div>
                    <div class="scalize w-100 position-relative">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/app/before-login/chi-tiet-dv.jpg" class="img-fluid" alt="Chi tiết dịch vụ">
                        <!-- <a tabindex="0" class="item-point" data-top="250" data-left="50" role="button" data-toggle="popover" data-trigger="focus" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?"></a>
                        <a tabindex="1" class="item-point" data-top="260" data-left="50" role="button" data-toggle="popover" data-trigger="focus" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?"></a> -->
                        <div class="scalize-text text-center">Chi tiết dịch vụ</div>
                    </div>
                </div>
            </div>
            <!--end app screen carousel-->

        </div>
    </section>

    <section class="app-three">
        <div class="shape shape-1">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                <path class="elementor-shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
                     c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
                     c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
            </svg>
        </div>
        <div class="shape">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                <path class="elementor-shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
                     c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
                     c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
            </svg>
        </div>
        <div class="overlay"></div>
        <div class="app-three__content">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-7">
                        <div class="content-left">
                            <div class="mb-5">
                                <h2>Đăng nhập tài khoản</h2>
                                <ul>
                                    <li>
                                        <h5>1. Đăng nhập tài khoản (Số tài khoản / Mật khẩu)</h5>
                                        <div class="desc">
                                            Mật khẩu mặc định là <code>1234</code>, sau khi đăng nhập hệ thống sẽ yêu cầu khách hàng đổi mật khẩu để bảo mật.
                                        </div>
                                    </li>
                                    <li>
                                        <h5>2. Quét mã QR code trực tiếp tại quầy SPA để đăng nhập</h5>
                                        <div class="desc">
                                            Mỗi khách hàng sẽ có 1 mã <code>QR Code</code> riêng và được bật tại quầy SPA.
                                        </div>
                                    </li>
                                    <!-- <li>
                                        <h5>3. Thực hiện quên mật khẩu</h5>
                                        <div class="desc">
                                            Quên mật khẩu thông qua mã xác nhận <code>OTP</code> được gửi về điện thoại hoặc Email của bạn.
                                        </div>
                                    </li> -->
                                </ul>
                            </div>
                            <div>
                                <h2>Đăng ký trực tiếp tại APP</h2>
                                <ul>
                                    <li>
                                        <h5>1. Giao diện đăng ký</h5>
                                        <div class="desc">
                                            Giao diện được tối giản giúp khách hàng đăng ký nhanh chóng, các thông tin có thể được cập nhập sau khi đăng nhập.
                                        </div>
                                    </li>
                                    <li>
                                        <h5>2. Tài khoản sau khi đăng ký</h5>
                                        <div class="desc">
                                            Tài khoản sẽ được lưu trên hệ thống danh sách khách hàng chung của phần mềm ( Có thể phân loại nguồn khách hàng đăng ký từ APP & tạo trực tiếp tại SPA )
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-5 d-flex align-items-end">
                        <figure class="subscribe-image">
                            <img class="w-100" src="<?php echo get_template_directory_uri() ?>/assets/img/app/dang-ky-va-dang-nhap.png" alt="Đăng ký và đăng nhập trên APP">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="screenshots" class="screenshots-section app-two app-twos">
        <div class="container">
            <div class="app-title">
                <!-- <div class="sub">
                    Ảnh chụp màn hình
                </div> -->
                <h3>Sau khi đăng nhập ?</h3>
                <div class="desc">
                    Khách hàng sau khi đăng nhập có thể tự quản lý thẻ, đơn hàng & tương tác đặt lịch, mua hàng với SPA.
                </div>
                <div class="app-nav">
                    <ul class="nav" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="tab-1-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Đặt lịch</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab-2-tab" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Mua hàng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab-3-tab" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Quản lý thẻ & Đơn hàng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab-5-tab" data-toggle="tab" href="#tab-5" role="tab" aria-controls="tab-5" aria-selected="false">Khác</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1-tab">
                    <div class="owl-carousel owl-theme screenshots-owl">
                        <div class="item">
                            <div class="screenshots-box">
                                <div class="screenshots-img">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/app/booking/chon-co-so-ngay-gio.jpg" class="img-fluid" alt="Chọn cơ sở - Ngày giờ">
                                </div>
                                <div class="screenshots-text">
                                    <div class="title">1. Chọn cơ sở - Ngày giờ</div>
                                    <!-- <div class="desc">Bạn cần chọn cơ sở làm dịch vụ, Thời gian tới làm dịch vụ</div> -->
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="screenshots-box">
                                <div class="screenshots-img">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/app/booking/chon-dich-vu.jpg" class="img-fluid" alt="Chọn dịch vụ">
                                </div>
                                <div class="screenshots-text">
                                    <div class="title">2. Chọn dịch vụ</div>
                                    <!-- <div class="desc">Bạn cần chọn cơ sở làm dịch vụ, Thời gian tới làm dịch vụ</div> -->
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="screenshots-box">
                                <div class="screenshots-img">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/app/booking/xac-nhan-va-ghi-chu.jpg" class="img-fluid" alt="Xác nhận & Thêm ghi chú">
                                </div>
                                <div class="screenshots-text">
                                    <div class="title">3. Xác nhận & Thêm ghi chú</div>
                                    <!-- <div class="desc">Bạn cần chọn cơ sở làm dịch vụ, Thời gian tới làm dịch vụ</div> -->
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="screenshots-box">
                                <div class="screenshots-img">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/app/booking/xac-nhan-thanh-cong.jpg" class="img-fluid" alt="screenshots">
                                </div>
                                <div class="screenshots-text">
                                    <div class="title">4. Hoàn thành đặt lịch</div>
                                    <!-- <div class="desc">Bạn cần chọn cơ sở làm dịch vụ, Thời gian tới làm dịch vụ</div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2-tab">
                    <div class="owl-carousel owl-theme screenshots-owl">
                        <div class="item">
                            <div class="screenshots-box">
                                <div class="screenshots-img">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/app/order/chon-san-pham.jpg" class="img-fluid" alt="Chọn sản phẩm & dịch vụ">
                                </div>
                                <div class="screenshots-text">
                                    <div class="title">1. Chọn sản phẩm</div>
                                    <!-- <div class="desc">Bạn lựa chọn sản phẩm muốn đặt hàng</div> -->
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="screenshots-box">
                                <div class="screenshots-img">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/app/order/don-hang-voucher.jpg" class="img-fluid" alt="Đơn hàng & mã giảm giá">
                                </div>
                                <div class="screenshots-text">
                                    <div class="title">2. Đơn hàng & mã giảm giá</div>
                                    <!-- <div class="desc">Xem chi tiết về sản phẩm bạn muốn đặt hàng</div> -->
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="screenshots-box">
                                <div class="screenshots-img">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/app/order/xac-nhan-don-hang.jpg" class="img-fluid" alt="Xác nhận & gửi đơn hàng">
                                </div>
                                <div class="screenshots-text">
                                    <div class="title">3. Xác nhận & gửi đơn hàng</div>
                                    <!-- <div class="desc">Bạn thay đổi số lượng sản phẩm muốn đặt hàng</div> -->
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="screenshots-box">
                                <div class="screenshots-img">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/app/order/dat-hang-thanh-cong.jpg" class="img-fluid" alt="Đặt hàng thành công">
                                </div>
                                <div class="screenshots-text">
                                    <div class="title">4. Đặt hàng thành công</div>
                                    <!-- <div class="desc">Thông báo & xác nhận đơn hàng đã được đặt hàng thành công</div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3-tab">
                    <div class="owl-carousel owl-theme screenshots-owl">
                        <div class="item">
                            <div class="screenshots-box">
                                <div class="screenshots-img">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/app/manage-card/dan-sach-the.jpg" class="img-fluid" alt="Quản lý thẻ dịch vụ">
                                </div>
                                <div class="screenshots-text">
                                    <div class="title">1. Quản lý thẻ dịch vụ</div>
                                    <!-- <div class="desc">Bạn cần chọn cơ sở làm dịch vụ, Thời gian tới làm dịch vụ</div> -->
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="screenshots-box">
                                <div class="screenshots-img">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/app/manage-card/the-danh-gia.jpg" class="img-fluid" alt="Đánh giá dịch vụ">
                                </div>
                                <div class="screenshots-text">
                                    <div class="title">2. Đánh giá dịch vụ</div>
                                    <!-- <div class="desc">Bạn cần chọn cơ sở làm dịch vụ, Thời gian tới làm dịch vụ</div> -->
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="screenshots-box">
                                <div class="screenshots-img">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/app/manage-card/DH1.jpg" class="img-fluid" alt="Quản lý đơn hàng">
                                </div>
                                <div class="screenshots-text">
                                    <div class="title">3. Quản lý đơn hàng</div>
                                    <!-- <div class="desc">Bạn cần chọn cơ sở làm dịch vụ, Thời gian tới làm dịch vụ</div> -->
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="screenshots-box">
                                <div class="screenshots-img">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/app/manage-card/DH2.jpg" class="img-fluid" alt="Hướng dẫn thanh toán">
                                </div>
                                <div class="screenshots-text">
                                    <div class="title">4. Hướng dẫn thanh toán</div>
                                    <!-- <div class="desc">Bạn cần chọn cơ sở làm dịch vụ, Thời gian tới làm dịch vụ</div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-5" role="tabpanel" aria-labelledby="tab-5-tab">
                    <div class="owl-carousel owl-theme screenshots-owl">
                        <div class="item">
                            <div class="screenshots-box">
                                <div class="screenshots-img">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/app/more/voucher.jpg" class="img-fluid" alt="Mã giảm giá">
                                </div>
                                <div class="screenshots-text">
                                    <div class="title">1. Mã giảm giá</div>
                                    <!-- <div class="desc">Bạn cần chọn cơ sở làm dịch vụ, Thời gian tới làm dịch vụ</div> -->
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="screenshots-box">
                                <div class="screenshots-img">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/app/more/chi-tiet-voucher.jpg" class="img-fluid" alt="Chi tiết mã giảm giá">
                                </div>
                                <div class="screenshots-text">
                                    <div class="title">2. Chi tiết mã giảm giá</div>
                                    <!-- <div class="desc">Bạn cần chọn cơ sở làm dịch vụ, Thời gian tới làm dịch vụ</div> -->
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="screenshots-box">
                                <div class="screenshots-img">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/app/more/vi.jpg" class="img-fluid" alt="Ví">
                                </div>
                                <div class="screenshots-text">
                                    <div class="title">3. Quản lý ví</div>
                                    <!-- <div class="desc">Bạn cần chọn cơ sở làm dịch vụ, Thời gian tới làm dịch vụ</div> -->
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="screenshots-box">
                                <div class="screenshots-img">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/app/more/the-tien.jpg" class="img-fluid" alt="Ví">
                                </div>
                                <div class="screenshots-text">
                                    <div class="title">4. Quản lý thẻ tiền</div>
                                    <!-- <div class="desc">Bạn cần chọn cơ sở làm dịch vụ, Thời gian tới làm dịch vụ</div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="bg-white app-noti">
        <div class="overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-6">
                    <div class="app-noti__img">
                        <!-- <img src="<?php echo get_template_directory_uri() ?>/assets/img/app/img2.png" alt=""> -->
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/app/thong-bao-app.png" alt="Gửi tin nhắn miễn phí đến khách hàng">
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="app-noti__content">
                        <!-- <div class="sub">Đối với những khách đã đăng nhập</div> -->
                        <h2>Gửi tin nhắn miễn phí <br> đến khách hàng</h2>
                        <div class="note">Tin nhắn sau khi được gửi tới sẽ được bật trên màn hình chính như tin nhắn Zalo, Messager, ...</div>
                        <div>
                            <h5>Tin nhắn được gửi khi nào ?</h5>
                            <ul>
                                <li>
                                    1. Tự động nhắc lịch khách hàng có đặt lịch trước <code>1 ngày</code>, trước <code>1 giờ</code>
                                </li>
                                <li>
                                    2. <code>Chúc mừng khách hàng</code> những ngày lễ tết.
                                </li>
                                <li>
                                    3. Chủ động gửi thông tin các <code>sản phẩm</code>, <code>gói dịch vụ</code> mới hay các chương trình ưu đãi đến khách hàng.
                                </li>
                                <li>
                                    4. Tổ chức các chương trình <code>FALSE SALE</code> ( Khuyến mại trong thời gian <code>ngắn hạn</code> )
                                    <div class="note-1"> Ví dụ : Duy nhất 3 ngày, duy nhất 3 giờ đến 4 giờ hay duy nhất hôm nay để tạo độ kích thích khiến khách hàng đưa ra quyết định trả tiền.</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="app-sir bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12">
                    <div>
                        <h2>Thống kê đo lường</h2>
                        <div>
                            <ul>
                                <li>
                                    <h5>1. Nhận biết khách hàng nào đã cài đặt APP, trên thiết bị gì & đã đăng nhập tài khoản</h5>
                                    <div class="desc">
                                        Trực tiếp tên phần mềm & Có thể nhận biết khách khi thực hiện thoát tài khoản.
                                    </div>
                                </li>
                                <li>
                                    <h5>2. Tích hợp bộ thống kê của Google Firebase</h5>
                                    <div class="desc">
                                        Bộ thống kê đầy đủ về người dùng, luồng sử dụng, ... chi tiết nhất từ Google.
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="imgs">
                        <div class="owl-thongke owl-carousel owl-theme">
                            <div class="item">
                                <img class="w-100" src="<?php echo get_template_directory_uri() ?>/assets/img/app/thong-ke-1.png" alt="Thống kê sử dụng APP">
                            </div>
                            <div class="item">
                                <img class="w-100" src="<?php echo get_template_directory_uri() ?>/assets/img/app/thong-ke-2.png" alt="Thống kê sử dụng APP">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
    </section>
</div>
<div class="footer-pattern-hidden bg-white">
    <img src="<?php echo get_template_directory_uri() ?>/assets/img/pattern-5.png" alt="logo">
</div>
<?php get_footer();
