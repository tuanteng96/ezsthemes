<?php

/**
Template Name: App khách hàng
 */

get_header();
?>
<div id="main">
    <div class="video-outstanding">
        <span class="pm-banner-shape1 position-absolute" data-parallax='{"y" : 100}'><img src="<?php echo get_template_directory_uri() ?>/assets/img/video-outstanding/5.png" alt></span>
        <span class="pm-banner-shape2 position-absolute" data-parallax='{"y" : -100}'><img src="<?php echo get_template_directory_uri() ?>/assets/img/video-outstanding/5.png" alt></span>
        <span class="pm-banner-shape3 position-absolute" data-parallax='{"y" : 100}'><img src="<?php echo get_template_directory_uri() ?>/assets/img/video-outstanding/5.png" alt></span>
        <span class="pm-banner-shape4 position-absolute" data-parallax='{"y" : -100}'><img src="<?php echo get_template_directory_uri() ?>/assets/img/video-outstanding/5.png" alt></span>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start">
                    <span class="pm-title-tag">APP KHÁCH HÀNG</span>
                    <h1>Gồm 2 phiên bản trên thiết bị ANDROID & IOS </h1>
                    <div class="text-white font-weight-light">
                        Được tải và cài đặt chính thống trên kho ứng dụng miễn phí của <span class="font-weight-bold">APP STORE & CH PLAY</span> hoặc có thể thực hiện quét <span class="font-weight-bold">QR Code</span> tại quầy SPA để cài đặt.
                    </div>
                    <p></p>
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
                <div class="col-lg-6">
                    <a href="#" data-toggle="modal" data-target="#modal-video">
                        <div class="video-outstanding__video text-right">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/hinh-anh-app.png" alt="HÌnh ảnh app">
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
                <div class="col-md-7">
                    <div class="app-1-text">
                        <h3>App hoạt động như thế nào ?</h3>
                        <div class="desc">
                            APP được kết nối trực tiếp vào phần mềm quản lý SPA ( Đồng bộ hóa toàn bộ dữ liệu từ phần mềm quản lý ).
                        </div>
                        <div class="sub">
                            Lợi ích đồng bộ dữ liệu
                        </div>
                        <ul>
                            <li>
                                Khi cập nhập bất cứ thông tin gì lên phần mềm ( Sản phẩm mới, dịch vụ với, các chương trình ưu đãi ) thì ngay lập tức các thông tin trên APP mà khách hàng cài đặt sẽ được cập nhập theo.
                            </li>
                            <li>
                                Khi khách hàng đặt lịch, mua hàng hay Live Chat thì các nhân viên lễ tân tại SPA sẽ nhận được thông tin để xử lý yêu cầu từ khách hàng.
                            </li>
                            <li>
                                Giúp khách hàng có thể quản lý thẻ dịch vụ, công nợ, đơn hàng, ví điện tử, ... của mình tại SPA.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="app-1-img">
                        <img class="w-100" src="https://themes.hibootstrap.com/kiedo/wp-content/uploads/2021/08/app-img7.png" alt="">
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
            <div id="element"></div>
            <!-- <div id="add_pos_marker">Add Positive dot</div>
            <div id="add_neg_marker">Add Negative dot</div>
            <div id="save">Save</div> -->
        </div>
    </section>
    <section id="screenshots" class="screenshots-section app-two">
        <div class="container">
            <div class="app-title">
                <div class="sub">
                    Ảnh chụp màn hình
                </div>
                <h3>Chức năng khác ?</h3>
                <div class="desc">
                    Các chức năng khác bạn có thể xem được khi chưa đăng nhập tài khoản.
                </div>
            </div>
        </div>
        <div class="container">
            <!--start app screen carousel-->
            <div class="screen-slider-content mt-5">
                <div class="screenshot-frame"></div>
                <div class="screen-carousel owl-carousel owl-theme dot-indicator">
                    <img src="https://appco.themetags.com/rtl/img/01.png" class="img-fluid" alt="screenshots">
                    <img src="https://appco.themetags.com/rtl/img/02.png" class="img-fluid" alt="screenshots">
                    <img src="https://appco.themetags.com/rtl/img/03.png" class="img-fluid" alt="screenshots">
                    <img src="https://appco.themetags.com/rtl/img/04.png" class="img-fluid" alt="screenshots">
                    <img src="https://appco.themetags.com/rtl/img/05.png" class="img-fluid" alt="screenshots">
                    <img src="https://appco.themetags.com/rtl/img/06.png" class="img-fluid" alt="screenshots">
                </div>
            </div>
            <!--end app screen carousel-->

        </div>
    </section>
</div>
<div class="footer-pattern-hidden bg-white">
    <img src="<?php echo get_template_directory_uri() ?>/assets/img/pattern-5.png" alt="logo">
</div>
<?php get_footer();
