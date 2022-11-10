<?php

/**
Template Name: Chi tiết chức năng
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
    <div class="fc-detail" id="scrollIntoView">
        <div class="fc-detail-header">
            <div class="container not-fix-container">
                <div class="fc-tabs">
                    <ul class="fc-tab">
                        <li class="active" data-nav="setting">
                            <h3 class="text-uppercase title mb-0"><span class="font-number">1.</span> Cài đặt</h3>
                            <span class="text-gray-500 desc">Cài đặt hệ thống</span>
                        </li>
                        <li data-nav="manage">
                            <h3 class="text-uppercase title mb-0"><span class="font-number">2.</span> Quản lý</h3>
                            <span class="text-gray-500 desc">Pos quản lý tại điểm</span>
                        </li>
                        <li data-nav="website">
                            <h3 class="text-uppercase title mb-0"><span class="font-number">3.</span> Website</h3>
                            <span class="text-gray-500 desc">Quản lý Website</span>
                        </li>
                        <li data-nav="app">
                            <h3 class="text-uppercase title mb-0"><span class="font-number">4.</span> App</h3>
                            <span class="text-gray-500 desc">Quản lý App</span>
                        </li>
                        <li data-nav="report">
                            <h3 class="text-uppercase title mb-0"><span class="font-number">5.</span> Báo cáo</h3>
                            <span class="text-gray-500 desc">Quản lý thống kê</span>
                        </li>
                        <li data-nav="device">
                            <h3 class="text-uppercase title mb-0"><span class="font-number">6.</span> Thiết bị</h3>
                            <span class="text-gray-500 desc">Quản lý Thiết bị</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="fc-detail-wrap">
            <div class="container not-fix-container">
                <div class="fc-detail-main">
                    <div class="fc-tab-content active" data-tab="setting">
                        <div class="fc-content">
                            <table class="table table-striped table-borderless">
                                <thead>
                                    <tr>
                                        <th class="fs-4 fw-bold text-dark ps-6 py-6" colspan="2">Quản lý thông tin
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <code>Thông tin cơ bản của thương hiệu</code>
                                        </td>
                                        <td>
                                            Tên thương hiệu, địa chỉ, logo, hotline, Email, Fanpage v..v
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Cài đặt máy in & Mẫu in </code>
                                        </td>
                                        <td>
                                            Cài đặt máy in, Khổ in
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Thông tin hệ thống </code>
                                        </td>
                                        <td>
                                            Cấu hình kết nối hệ thống đến App, Google v..v
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Cài đặt thanh toán </code>
                                        </td>
                                        <td>
                                            Các tài khoản ngân hàng, Các thông số để kết nối thanh toán tự động
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- ========================== -->
                                <thead>
                                    <tr class="border-top-tb">
                                        <th class="fs-4 fw-bold text-dark ps-6 py-6" colspan="2">
                                            Quản lý cơ sở
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <code>Quản lý và tạo mới các điểm kinh doanh</code>
                                        </td>
                                        <td>
                                            Tạo mới các điểm, cơ sở kinh doanh của SPA
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- ========================== -->
                                <thead>
                                    <tr>
                                        <th class="fs-4 fw-bold text-dark ps-6 py-6" colspan="2">
                                            Quản lý nhân viên
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <code>Quản lý nhân viên </code>
                                        </td>
                                        <td>
                                            Danh sách nhân viên, Chỉnh sửa thông tin / tài khoản / mật khẩu, Vô hiệu hóa tài khoản & Thêm mới nhân viên
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Quản lý Lương và chính sách </code>
                                        </td>
                                        <td>
                                            Quản lý cấp bậc <code class="fs-14px">Thử việc / nhân viên / chuyên gia </code>, Quản lý phụ cấp, Cấu hình giữ lương, Cấu hình ngày nghỉ / ngày công & Cấu hình ngày phép / tháng
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Quản lý phân quyền </code>
                                        </td>
                                        <td>
                                            Cấp quyền cho nhân viên, lễ tân, ...
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>KPI doanh số </code>
                                        </td>
                                        <td>
                                            Cấu hình KPI doanh số cho chung hoặc riêng từng nhân viên
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- ========================== -->
                                <thead>
                                    <tr>
                                        <th class="fs-4 fw-bold text-dark ps-6 py-6" colspan="2">
                                            Quản lý nhãn hàng
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <code>Quản lý các thương hiệu </code>
                                        </td>
                                        <td>
                                            Quản lý các thương hiệu sản phẩm / mỹ phẩm tại SPA
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- ========================== -->
                                <thead>
                                    <tr>
                                        <th class="fs-4 fw-bold text-dark ps-6 py-6" colspan="2">
                                            Quản lý phân loại
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <code>Quản lý phân chia các nhóm </code>
                                        </td>
                                        <td>
                                            Quản lý phân chia các nhóm sản phẩm, nhóm dịch vụ tại SPA
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- ========================== -->
                                <thead>
                                    <tr>
                                        <th class="fs-4 fw-bold text-dark ps-6 py-6" colspan="2">
                                            Quản lý sản phẩm, dịch vụ
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <code>Quản lý sản phẩm </code>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>Quản lý sản phẩm <code class="fs-14px">theo từng cơ sở</code></li>
                                                <li>Quản lý sản phẩm theo nhãn hàng</li>
                                                <li>Quản lý sản phẩm theo nhóm phân loại</li>
                                                <li>Quản lý thông tin: Tên / mã / đơn vị / giá bán</li>
                                                <li>Cài đặt sản phẩm combo <code class="fs-14px">1 sản phẩm gồm 2 SP A + 1 DV B</code></li>
                                                <li>Quản lý hoa hồng bán hàng <code class="fs-14px">nhân viên nhận được khi tư vấn</code></li>
                                                <li>Quản lý thông tin cho web / app: Có hiển thị hay không?, Hình ảnh, Thông tin sản phẩm, Option lựa chọn, Có hiển thị giá hay không?, sắp xếp thứ tự</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Quản lý buổi lẻ, thẻ liệu trình </code>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>
                                                    Quản lý dịch vụ <code class="fs-14px">theo cơ sở</code>
                                                </li>
                                                <li>
                                                    Quản lý dịch vụ theo nhóm phân loại
                                                </li>
                                                <li>
                                                    Quản lý lương nhân viên
                                                    <ol>
                                                        <li>
                                                            Theo số tiền hoặc theo % giá bán
                                                        </li>
                                                        <li>
                                                            Cấu hình chung / khác nhau giữa các cấp bậc nhân viên
                                                        </li>
                                                        <li>
                                                            Cấu hính giảm lương dịch vụ khi ưu đãi lớn
                                                        </li>
                                                    </ol>
                                                </li>
                                                <li>
                                                    Cấu hình đặt lịch tự động sau bao nhiêu ngày <code class="fs-14px">khi hoàn thành buổi này sẽ tự động đặt lịch buổi sau cho khách hàng</code>
                                                </li>
                                                <li>
                                                    Quản lý buổi lẻ / thẻ liệu trình của dịch vụ <code class="fs-14px">các lựa chọn khách hàng có thể mua</code>
                                                    <ol>
                                                        <li>
                                                            Tên / Giá bán
                                                        </li>
                                                        <li>
                                                            Số lượng buổi
                                                        </li>
                                                        <li>
                                                            Số phút / buổi
                                                        </li>
                                                        <li>
                                                            Dịch vụ có bảo hành / số buổi + Thời gian bảo hành
                                                        </li>
                                                        <li>
                                                            Hoa hồng bán hàng
                                                        </li>
                                                        <li>
                                                            Thời hạn sử dụng của thẻ từ ngày mua
                                                        </li>
                                                    </ol>
                                                </li>
                                                <li>
                                                    Quản lý định mức nguyên liệu sử dụng / các buổi
                                                </li>
                                                <li>
                                                    Quản lý thông tin cho web / app: Có hiển thị hay không?, Hình ảnh, Thông tin sản phẩm, Có hiển thị giá hay không?, sắp xếp thứ tự
                                                </li>
                                                <li>
                                                    Hỗ trợ quản lý phác đồ điều trị <code class="fs-14px">Combo các dịch vụ để điều trị theo 1 tình trạng riêng của khách hàng</code>
                                                </li>
                                                <li>
                                                    Tạo combo trực tiếp tại Pos quản lý khi khách hàng mua dịch vụ phác đồ điều trị
                                                </li>
                                                <li>
                                                    Quản lý tin nhắn chăm sóc tự động sau mỗi buổi dịch vụ <code class="fs-14px">thẻ liệu trình</code>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Quản lý thẻ tiền</code>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>
                                                    Quản lý thẻ tiền theo cơ sở
                                                </li>
                                                <li>
                                                    Quản lý thông tin: Tên / mã / giá bán
                                                </li>
                                                <li>
                                                    Hoa hồng bán hàng
                                                </li>
                                                <li>
                                                    Chi tiết thẻ tiền
                                                    <ol>
                                                        <li>Tổng số tiền được chi tiêu</li>
                                                        <li>Số tiền được sử dụng cho sản phẩm / sử dụng dịch vụ</li>
                                                        <li>Không giới hạn sản phẩm / dịch vụ</li>
                                                        <li>Giới hạn chi tiêu <code class="fs-14px">Không bắt buộc thanh toán hết thẻ tiền / Chi tiêu thẻ tiền theo hạn mức thanh toán</code></li>
                                                        <li>
                                                            Giới hạn thời hạn thẻ tiền <code class="fs-14px">hạn dùng</code>
                                                        </li>
                                                    </ol>
                                                </li>
                                                <li>Quản lý thông tin cho web / app: Có hiển thị hay không?, Hình ảnh, Thông tin sản phẩm, Có hiển thị giá hay không?, sắp xếp thứ tự</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Quản lý phụ phí</code>
                                        </td>
                                        <td>
                                            Ví dụ <code class="fs-14px">Phụ phí làm ngoài giờ</code>
                                            <div>Khách phải trả thêm chi phí <code class="fs-14ox">giá bán</code>, hoa hồng cho nhân viên bán và tiền dịch vụ dành cho nhân viên.</div>
                                            <ul>
                                                <li>Quản lý phụ phí theo cơ sở</li>
                                                <li>Quản lý phụ phí theo nhóm phân loại</li>
                                                <li>Quản lý thông tin: Tên / mã / giá bán</li>
                                                <li>Giá bán / Lương nhân viên / Hoa hồng bán hàng</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Quản lý Nguyên vật liệu</code>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>
                                                    Quản lý phụ phí theo cơ sở
                                                </li>
                                                <li>
                                                    Quản lý nguyên vật liệu theo nhóm phân loại
                                                </li>
                                                <li>
                                                    Cấu hình chuyển đổi nguyên liệu từ sản phẩm <code class="fs-14px">mở sản phẩm ra làm nguyên liệu hoặc đóng chai bán thành phẩm</code>
                                                </li>
                                                <li>
                                                    Cho phép quản lý bán nguyên liệu trong trường hợp KH mua trực tiếp
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- ========================== -->
                                <thead>
                                    <tr>
                                        <th class="fs-4 fw-bold text-dark ps-6 py-6" colspan="2">
                                            Quản lý sản phẩm, dịch vụ
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <code>Phân loại khách hàng theo cấp bậc</code>
                                            <div class="sub-title">Khách thường, Khách VIP hoặc <code class="fs-14px">tự cấu hình cấp bậc</code></div>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>
                                                    Quản lý danh sách nhóm khách hàng
                                                </li>
                                                <li>
                                                    Điều kiện lên cấp <code class="fs-14px">tổng số tiền chi tiêu vượt ngưỡng</code>
                                                </li>
                                                <li>
                                                    Cấu hình tự động lên cấp / hạ cấp / Nội dung chúc mừng lên cấp
                                                </li>
                                                <li>
                                                    Cấu hình cách tính ngưỡng: Theo hệ số của mua sản phẩm và hệ số sử dụng dịch vụ
                                                </li>
                                                <li>
                                                    Cài đặt quyền lợi của nhóm: ưu đãi giảm giá khi mua hàng
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- ========================== -->
                                <thead>
                                    <tr>
                                        <th class="fs-4 fw-bold text-dark ps-6 py-6" colspan="2">
                                            Nhóm – cấp bậc khách hàng
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <code>Phân loại khách hàng theo cấp bậc</code>
                                            <div class="sub-title">Khách thường, Khách VIP hoặc <code class="fs-14px">tự cấu hình cấp bậc</code></div>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>
                                                    Quản lý danh sách nhóm khách hàng
                                                </li>
                                                <li>
                                                    Điều kiện lên cấp <code class="fs-14px">tổng số tiền chi tiêu vượt ngưỡng</code>
                                                </li>
                                                <li>
                                                    Cấu hình tự động lên cấp / hạ cấp / Nội dung chúc mừng lên cấp
                                                </li>
                                                <li>
                                                    Cấu hình cách tính ngưỡng: Theo hệ số của mua sản phẩm và hệ số sử dụng dịch vụ
                                                </li>
                                                <li>
                                                    Cài đặt quyền lợi của nhóm: ưu đãi giảm giá khi mua hàng
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- ========================== -->
                                <thead>
                                    <tr>
                                        <th class="fs-4 fw-bold text-dark ps-6 py-6" colspan="2">
                                            Tích lũy khi mua hàng
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <code>Mua hàng hoàn tiền</code>
                                            <div class="sub-title">Tiền sẽ được hoàn vào ví điện tử <code class="fs-14px">nội bộ của riêng SPA – không liên quan đến bên thứ 3 nào</code> cho khách hàng và khách hàng có thể thanh toán cho các sản phẩm dịch vụ tiếp theo từ ví này</div>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>
                                                    Cài đặt mức hoàn tiền cho tất cả sản phẩm, dịch vụ hay 1 nhóm phân loại hay 1 sản phẩm, dịch vụ cụ thể
                                                </li>
                                                <li>
                                                    Cài đặt chính sách riêng cho từng nhóm cấp bậc khách hàng
                                                </li>
                                                <li>
                                                    Cài đặt mức hoàn tiền cụ thể riêng biệt khi mua nguyên giá và khi đã mua giảm giá
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- ========================== -->
                                <thead>
                                    <tr>
                                        <th class="fs-4 fw-bold text-dark ps-6 py-6" colspan="2">
                                            Affiliate Marketing
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <code>Nhận hoa hồng khi giới thiệu khách hàng</code>
                                            <div class="sub-title">Tiền sẽ được hoàn vào ví điện tử <code class="fs-14px">nội bộ của riêng SPA – không liên quan đến bên thứ 3 nào</code> cho khách hàng và khách hàng có thể thanh toán cho các sản phẩm dịch vụ tiếp theo từ ví này</div>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>
                                                    Cài đặt mức hoa hồng cho tất cả sản phẩm, dịch vụ hay 1 nhóm phân loại hay 1 sản phẩm, dịch vụ cụ thể
                                                </li>
                                                <li>
                                                    Cài đặt chính sách riêng cho từng nhóm cấp bậc khách hàng
                                                </li>
                                                <li>
                                                    Cài đặt mức hoa hồng cụ thể riêng biệt khi mua nguyên giá và khi đã mua giảm giá
                                                </li>
                                                <li>
                                                    Hỗ trợ áp dụng qua việc gửi link website <code class="fs-14px">đơn hàng phát sinh từ website sẽ được tính hoa hồng cho người gửi</code> & Tặng mã giảm giá cho người khác <code class="fs-14px">mã giảm giá được sử dụng, người tặng mã sẽ được hưởng hoa hồng</code>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- ========================== -->
                                <thead>
                                    <tr>
                                        <th class="fs-4 fw-bold text-dark ps-6 py-6" colspan="2">
                                            Quyền lợi khác
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <code>Đăng nhập lần đầu </code>
                                        </td>
                                        <td>
                                            Tặng tiền vào ví và mã giảm giá
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Đăng ký tài khoản </code>
                                        </td>
                                        <td>
                                            Tặng tiền vào ví và mã giảm giá
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Quyền lợi tháng sinh nhật </code>
                                        </td>
                                        <td>
                                            Tặng tiền vào ví và tặng mã giảm giá
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Quyền lợi đúng ngày sinh nhật </code>
                                        </td>
                                        <td>
                                            Tặng tiền vào ví và tặng mã giảm giá
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- ========================== -->
                                <thead>
                                    <tr>
                                        <th class="fs-4 fw-bold text-dark ps-6 py-6" colspan="2">
                                            Chương trình khuyến mại & VOUCHER/COUPON
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <code>Chương trình khuyến mại</code>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>
                                                    Cài đặt chương trình khuyến mại theo thời gian
                                                </li>
                                                <li>
                                                    Cài đặt giá trị giảm của chương trình ưu đãi
                                                </li>
                                                <li>
                                                    Cài đặt tặng thêm buổi cho các dịch vụ
                                                </li>
                                                <li>
                                                    Cài đặt chương trình ưu đãi theo <code class="fs-14px">cơ sở </code>
                                                </li>
                                                <li>
                                                    Cài đặt chương trình ưu đãi cho <code class="fs-14px">riêng tứng nhóm cấp bậc khách hàng</code>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Voucher giảm giá và Coupon tiền mặt ( Voucher tiền mặt )</code>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>
                                                    Cài đặt Giá trị giảm giá (%) hoặc số tiền cố định
                                                </li>
                                                <li>
                                                    Cài đặt theo thời hạn sử dụng <code class="fs-14px">từ ngày đến ngày</code>
                                                </li>
                                                <li>
                                                    Số lần sử dụng tối đa
                                                </li>
                                                <li>
                                                    Mỗi khách hàng sử dụng tối đa bao nhiêu lần
                                                </li>
                                                <li>
                                                    Điều kiện áp dụng kèm chương trình ưu đãi <code class="fs-14px">Có / Không</code>
                                                </li>
                                                <li>
                                                    Đối tượng <code class="fs-14px">sản phẩm, dịch vụ</code> được áp dụng
                                                </li>
                                                <li>
                                                    Đối tượng khách hàng được sử dụng <code class="fs-14px">Nhóm khách hàng hoặc từng khách hàng</code> cụ thể
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <div class="fc-tab-content" data-tab="manage">
                        <div class="fc-content">
                            <table class="table table-striped table-borderless">
                                <thead>
                                    <tr>
                                        <th class="fs-4 fw-bold text-dark ps-6 py-6" colspan="2">
                                            Quản lý khách hàng
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <code>Quản lý danh sách hàng</code>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>
                                                    Lọc khách hàng theo các tiêu chí
                                                    <ol>
                                                        <li>
                                                            Thông tin : Tên, điện thoại, Email
                                                        </li>
                                                        <li>
                                                            Theo danh mục sản phẩm / dịch vụ đã mua
                                                        </li>
                                                        <li>
                                                            Theo nhóm cấp bậc khách hàng
                                                        </li>
                                                        <li>
                                                            Theo nhân viên chăm sóc
                                                        </li>
                                                        <li>
                                                            Theo cơ sở
                                                        </li>
                                                        <li>
                                                            Theo nguồn khách
                                                        </li>
                                                        <li>
                                                            Khách hàng đã cài app hay chưa <code class="fs-14px">đăng nhập với thiết bị nào</code>
                                                        </li>
                                                    </ol>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Quản lý thông tin khách hàng</code>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>
                                                    Thông tin cơ bản <code class="fs-14px">Tên / ngày sinh / giới tính / Điện thoại / Email</code>
                                                </li>
                                                <li>
                                                    Thông tin địa chỉ <code class="fs-14px">Địa chỉ / quận huyện / thành phố</code>
                                                </li>
                                                <li>
                                                    Hình ảnh <code class="fs-14px">tích hợp kết nối camera nhận diện khuôn mặt</code>
                                                </li>
                                                <li>
                                                    Nguồn khách hàng / nhân viên phụ trách
                                                </li>
                                                <li>
                                                    Thẻ từ, thẻ mã vạch khách hàng thân thiết
                                                </li>
                                                <li>
                                                    Nhóm khách hàng & Nội dung ghi chú
                                                </li>
                                                <li>
                                                    Mật khẩu đăng nhập WEB / APP
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- ========================== -->
                                <thead>
                                    <tr class="border-top-tb">
                                        <th class="fs-4 fw-bold text-dark ps-6 py-6" colspan="2">
                                            Thao tác nghiệp vụ khách hàng
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <code>Thông tin khách hàng</code>
                                        </td>
                                        <td>
                                            Thay đổi thông tin, mật khẩu khách hàng
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Gửi thông báo APP đến khách hàng </code>
                                        </td>
                                        <td>
                                            Tin nhắn miễn phí qua APP
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Bật mã QR Code</code>
                                        </td>
                                        <td>
                                            Khách hàng mở APP <code class="fs-14px">quét QR code</code> để login nhanh
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>CheckIn / CheckOut</code>
                                        </td>
                                        <td>
                                            Thực hiện CheckIn / CheckOut khách hàng
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Tạo đơn hàng cho khách </code>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>
                                                    Chọn sản phẩm / dịch vụ
                                                </li>
                                                <li>
                                                    Điều chỉnh giá nếu cần
                                                </li>
                                                <li>
                                                    Nhập mã giảm giá nếu KH cung cấp
                                                </li>
                                                <li>
                                                    Thanh toán đơn hàng ( Tiền mặt / Quẹt thẻ / Chuyển khoản / Ví và thẻ tiền ) ( <code class="fs-14px">* Hỗ trợ mở QR code để khách quét thanh toán nhanh</code> )
                                                </li>
                                                <li>
                                                    In hóa đơn
                                                </li>
                                                <li>
                                                    Cài đặt hoa hồng cho nhân viên <code class="fs-14px">Hỗ trợ thưởng hoa hồng tự động</code>
                                                </li>
                                                <li>
                                                    Cài đặt doanh số đơn hàng cho nhân viên <code class="fs-14px">cuối tháng tổng kết tính KPI & Thưởng thêm</code>
                                                </li>
                                                <li>
                                                    Bật mã QRcode giúp khách hàng thanh toán chuyển khoản nhanh <code class="fs-14px">quét mã QRcode bằng ứng dụng ngân hàng giúp khách nhập sẵn số tiền cần chuyển, số tài khoản người nhận, ngân hàng và nội dung chuyển khoản</code>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Cài đặt phác đồ điều trị </code>
                                        </td>
                                        <td>
                                            Cho phép tùy chỉnh những phác đồ riêng cho từng khách hàng – tùy theo thực trạng của từng khách hàng để set những combo điều trị riêng.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Xử lý đơn hàng từ WEB / APP</code>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>
                                                    Nhận đơn hàng online từ khách hàng
                                                </li>
                                                <li>
                                                    Hoàn thành hoặc hủy đơn hàng Online <code class="fs-14px">Có tin nhắn App miễn phí thông báo đến khách hàng</code>
                                                </li>
                                                <li>
                                                    Xác nhận thanh toán tự động khi khách hàng chuyển khoản
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Quản lý đơn hàng </code>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>
                                                    Quản lý danh sách và thông tin chi tiết các đơn hàng
                                                </li>
                                                <li>
                                                    Thanh toán nợ cho các đơn hàng
                                                </li>
                                                <li>
                                                    Khóa nợ đơn hàng / tặng đơn hàng
                                                </li>
                                                <li>
                                                    Trả hàng <code class="fs-14px">Cho phép khấu trừ tích lũy, affliate, hoa hồng và doanh số nhân viên</code>
                                                </li>
                                                <li>
                                                    Xóa đơn hàng <code class="fs-14px">chỉ thao tác xóa trong ngày</code>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Quản lý thẻ dịch vụ </code>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>
                                                    Quản lý thẻ dịch vụ theo nhóm: Đang kích hoạt / Thẻ bảo hành / Thẻ đã dùng hết và thẻ đã hết hạn
                                                </li>
                                                <li>
                                                    Tích buổi cho khách
                                                    <ol>
                                                        <li>
                                                            Làm tại cơ sở nào
                                                        </li>
                                                        <li>
                                                            Làm thời gian nào
                                                        </li>
                                                        <li>
                                                            Có sử dụng phụ phí gì không?
                                                        </li>
                                                        <li>
                                                            Nhân viên thực hiện <code class="fs-14px">có thể thêm nhiều nhân viên</code>
                                                        </li>
                                                        <li>
                                                            Lương dịch vụ của nhân viên
                                                        </li>
                                                    </ol>
                                                </li>
                                                <li>
                                                    Hỗ trợ in phiếu dịch vụ
                                                </li>
                                                <li>
                                                    Lưu trữ hình ảnh thực tế làm cho khách
                                                </li>
                                                <li>
                                                    Lưu trữ chữ ký khách hàng xác nhận
                                                </li>
                                                <li>
                                                    Nghiệp vụ nâng cao
                                                    <ol>
                                                        <li>
                                                            Kích hoạt bảo hành thẻ
                                                        </li>
                                                        <li>
                                                            Chuyển nhượng thẻ
                                                        </li>
                                                        <li>
                                                            Tặng / xóa buổi
                                                        </li>
                                                        <li>
                                                            Kết thúc thẻ
                                                        </li>
                                                        <li>
                                                            Chuyển cơ sở cho thẻ dịch vụ
                                                        </li>
                                                        <li>
                                                            Giao ca nhanh cho cả liệu trình
                                                        </li>
                                                    </ol>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Quản lý đặt lịch</code>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>
                                                    Quản lý đặt lịch theo ngày / tuần / tháng
                                                </li>
                                                <li>
                                                    Quản lý đặt lịch theo nhân viên
                                                </li>
                                                <li>
                                                    Quản lý đặt lịch theo khách hàng
                                                </li>
                                                <li>
                                                    Quản lý trạng thái đặt lịch <code class="fs-14px">khách đến / khách không đến</code>
                                                </li>
                                                <li>
                                                    Hỗ trợ quản lý đặt lịch tại nhà
                                                </li>
                                                <li>
                                                    Nhận đặt lịch của khách hàng từ web / App <code class="fs-14px">có thể xác nhận và hủy trực tiếp đặt lịch của khách từ phần mềm</code> <code class="fs-14px">có tin nhắn App miễn phí thông báo cho khách</code>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Quản lý Ví & Thẻ tiền</code>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>
                                                    Quản lý ví điện tử
                                                    <ol>
                                                        <li>
                                                            Tổng tiền trong ví
                                                        </li>
                                                        <li>
                                                            Lịch sử giao dịch <code class="fs-14px">Thưởng và chi tiêu</code>
                                                        </li>
                                                    </ol>
                                                </li>
                                                <li>
                                                    Quản lý Thẻ tiền
                                                    <ol>
                                                        <li>
                                                            Danh sách các thẻ tiền
                                                        </li>
                                                        <li>
                                                            Chi tiết thẻ tiền <code class="fs-14px">Giá trị thẻ tiền / hạn mức / Áp dụng cho sản phẩm, dịch vụ / thời hạn sử dụng / Thẻ tiền kích hoạt hay bị khóa</code>
                                                        </li>
                                                    </ol>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Quản lý nhật ký và chăm sóc khách hàng</code>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>
                                                    Cho phép tạo ghi chú phân loại theo dịch vụ hoặc Sales
                                                </li>
                                                <li>
                                                    Cho phép đăng tải video và hình ảnh thực tế của khách hàng
                                                </li>
                                                <li>
                                                    Cho phép chọn các sản phẩm / dịch vụ mà khách đang quan tâm để phục vụ tư vấn và sale
                                                </li>
                                                <li>
                                                    Cho phép đặt các lịch nhắc với nhân viên cho khách hàng <code class="fs-14px">Ví dụ ngày 15/05/2022 gọi lại khách để nhắc khách mua thêm sản phẩm</code>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- ========================== -->
                                <thead>
                                    <tr>
                                        <th class="fs-4 fw-bold text-dark ps-6 py-6" colspan="2">
                                            Thao tác nghiệp vụ kho
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <code>Quản lý tồn kho </code>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>Quản lý tồn kho theo từng cơ sở</li>
                                                <li>
                                                    Quản lý chi tiết giao dịch xuất và nhập trên từng mã sản phẩm
                                                </li>
                                                <li>
                                                    Quản lý tồn thực tế trên hệ thống và tồn thực tế trên kho <code class="fs-14px">những sản phẩm khách hàng đã thanh toán nhưng chưa giao</code>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Quản lý nhập xuất kho </code>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>Quản lý đơn nhập / xuất hàng</li>
                                                <li>
                                                    Cho phép quản lý thanh toán hoặc thu tiền đơn nhập xuất hàng
                                                </li>
                                                <li>
                                                    Hỗ trợ tạo đơn nhập xuất qua file Excel
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Quản lý chuyển kho</code>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>Chuyển đổi hàng từ cơ sở này sang cơ sở khác</li>
                                                <li>Có hỗ trợ xác nhận cho cơ sở được chuyển đến <code class="fs-14px">khi nhận đơn sẽ tự động tạo đơn nhập tự động</code></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Quản lý chuyển đổi</code>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>
                                                    Chuyển đổi từ sản phẩm sang Nguyên vật liệu
                                                </li>
                                                <li>
                                                    Chuyển đổi từ Nguyên vật liệu sang sản phẩm
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- ========================== -->
                                <thead>
                                    <tr>
                                        <th class="fs-4 fw-bold text-dark ps-6 py-6" colspan="2">
                                            Kế toán / HCNS
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <code>Kế toán</code>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>
                                                    Tạo thu / Chi khác – Thu tại quầy sẽ tự động link vào thu chi chung
                                                </li>
                                                <li>
                                                    Quản lý bảng lương
                                                </li>
                                                <li>
                                                    Tạo thưởng / Phạt
                                                </li>
                                                <li>
                                                    Tạo giữ lương / Hoàn lương
                                                </li>
                                                <li>
                                                    Tạo tạm ứng / Hoàn ứng
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Đánh giá tại quầy</code>
                                            <div class="sub-title">
                                                Mỗi điểm sử dụng 1 máy tính bảng tại quầy giúp khách hàng ký xác nhận sử dụng dịch vụ và đánh giá chất lượng dịch vụ
                                            </div>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>
                                                    Không cần kết nối dây, chỉ cần kết nối mạng
                                                </li>
                                                <li>
                                                    Liên kết trực tiếp vào hệ thống Phần mềm & Báo cáo
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- ========================== -->
                                <!-- <thead>
                                    <tr>
                                        <th class="fs-4 fw-bold text-dark ps-6 py-6" colspan="2">
                                            Chăm sóc khách hàng
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <code>Phân bổ khách hàng cho các nhân viên CSKH</code>
                                            <div class="sub-title">
                                                Chăm sóc khách hàng theo quy trình <code class="fs-14px">Tiếp cận, đặt lịch, trải nghiệm, mua gói, chăm sóc buổi đầu, 50% dịch vụ, 80% dịch vụ, Upsale</code>
                                            </div>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>Tích hợp hệ thống tổng đài cho phép 10 nhân viên gọi từ 1 đầu số di động tới khách hàng trực tiếp từ phần mềm</li>
                                                <li>
                                                    Hỗ trợ ghi âm cuộc gọi
                                                </li>
                                                <li>
                                                    Khách hàng khi gọi vào tổng đài sẽ chuyển cuộc gọi cho các nhân viên tư vấn
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody> -->
                            </table>

                        </div>
                    </div>
                    <div class="fc-tab-content" data-tab="website">
                        <div class="fc-content">
                            <table class="table table-striped table-borderless">
                                <thead>
                                    <tr>
                                        <th class="fs-4 fw-bold text-dark ps-6 py-6" colspan="2">
                                            Kết nối
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <code>Phần mềm </code>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>
                                                    Hiển thị thông tin
                                                    <ol>
                                                        <li>
                                                            Danh sách sản phẩm / dịch vụ
                                                        </li>
                                                        <li>
                                                            Bảng giá và các chương trình ưu đãi
                                                        </li>
                                                    </ol>
                                                </li>
                                                <li>
                                                    Đặt lịch, đơn hàng online: sẽ được kết nối vào phần mềm theo điểm để được nhân viên xử lý
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Fanpage, Zalo </code>
                                        </td>
                                        <td>
                                            Live chat trực tiếp qua Fanpage hoặc Zalo
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Analytics Google </code>
                                        </td>
                                        <td>
                                            Thống kê chi tiết các lượt truy cập và xu hướng truy cập
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- ========================== -->
                                <thead>
                                    <tr class="border-top-tb">
                                        <th class="fs-4 fw-bold text-dark ps-6 py-6" colspan="2">
                                            Thông tin giới thiệu
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <code>SiteMap Website</code>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>
                                                    Trang chủ
                                                </li>
                                                <li>
                                                    Trang giới thiệu
                                                </li>
                                                <li>
                                                    Trang tin tức / Blogs
                                                </li>
                                                <li>
                                                    Trang sản phẩm
                                                </li>
                                                <li>
                                                    Trang gói dịch vụ
                                                </li>
                                                <li>
                                                    Trang đặt lịch
                                                </li>
                                                <li>
                                                    Trang đặt hàng trực tuyến
                                                </li>
                                                <li>
                                                    Trang chính sách bán hàng
                                                </li>
                                                <li>
                                                    Trang liên hệ
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- ========================== -->
                                <thead>
                                    <tr>
                                        <th class="fs-4 fw-bold text-dark ps-6 py-6" colspan="2">
                                            Đăng ký & Đăng nhập thành viên
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <code>Đăng ký, Đăng nhập & Quên mật khẩu</code>
                                        </td>
                                        <td>
                                            Hỗ trợ quên mật khẩu qua mã OTP <code class="fs-14px">Miễn phí theo chính sách của Google Firebase</code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Menu thành viên đăng nhập</code>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>
                                                    Quản lý thông tin cá nhân
                                                </li>
                                                <li>
                                                    Quản lý đặt lịch
                                                </li>
                                                <li>
                                                    Quản lý đơn hàng
                                                </li>
                                                <li>
                                                    Quản lý ví và thẻ tiền
                                                </li>
                                                <li>
                                                    Quản lý mã giảm giá
                                                </li>
                                                <li>
                                                    Quản lý thẻ dịch vụ
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Gửi tin nhắn đến khách hàng</code>
                                        </td>
                                        <td>
                                            Cho phép gửi ngay cả <code class="fs-14px">khi khách hàng đang không truy cập</code> website của SPA / Thẩm mỹ viện
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <div class="fc-tab-content" data-tab="app">
                        <div class="fc-content">
                            <table class="table table-striped table-borderless">
                                <thead>
                                    <tr>
                                        <th class="fs-4 fw-bold text-dark ps-6 py-6" colspan="2">
                                            Đăng ký – Đăng nhập
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <code>Đăng ký tài khoản</code>
                                        </td>
                                        <td>
                                            Đăng ký thành viên tại SPA
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Đăng nhập tài khoản </code>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>Đăng nhập qua tài khoản và mật khẩu</li>
                                                <li>Hỗ trợ đăng nhập nhanh qua việc <code class="fs-14px">quét mã QR Code tại quầy</code></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Quên mật khẩu</code>
                                        </td>
                                        <td>
                                            Hỗ trợ quên mật khẩu qua Email và <code class="fs-14px">Mã OTP điện thoại</code>
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- ========================== -->
                                <thead>
                                    <tr class="border-top-tb">
                                        <th class="fs-4 fw-bold text-dark ps-6 py-6" colspan="2">
                                            Cập nhật thông tin về Spa qua App
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <code>Trang chủ APP </code>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>
                                                    Banner các chương trình khuyến mại
                                                </li>
                                                <li>
                                                    QUICK Link truy cập nhanh
                                                    <ol>
                                                        <li>
                                                            Sản phẩm / dịch vụ
                                                        </li>
                                                        <li>
                                                            <code class="fs-14px">Ưu đãi</code>
                                                        </li>
                                                        <li>
                                                            Ví và Thẻ tiền
                                                        </li>
                                                        <li>
                                                            Voucher / Coupon
                                                        </li>
                                                        <li>
                                                            Thẻ dịch vụ
                                                        </li>
                                                    </ol>
                                                </li>
                                                <li>
                                                    Khối <code class="fs-14px">Dịch vụ Hot</code>
                                                </li>
                                                <li>
                                                    Khối sản phẩm ưu đãi
                                                </li>
                                                <li>
                                                    Khối tin tức / blog
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- ========================== -->
                                <thead>
                                    <tr>
                                        <th class="fs-4 fw-bold text-dark ps-6 py-6" colspan="2">
                                            Quản lý thông tin tài khoản
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <code>Quản lý thông tin tài khoản </code>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>
                                                    Quản lý Thông tin cá nhân
                                                </li>
                                                <li>
                                                    Quản lý ví và thẻ tiền
                                                </li>
                                                <li>
                                                    Quản lý nhật ký
                                                </li>
                                                <li>
                                                    Quản lý đơn hàng & Lịch sử thanh toán
                                                </li>
                                                <li>
                                                    Quản lý mã giảm giá
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- ========================== -->
                                <thead>
                                    <tr>
                                        <th class="fs-4 fw-bold text-dark ps-6 py-6" colspan="2">
                                            Đặt lịch và đánh giá dịch vụ
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <code>Đặt lịch trực tuyến</code>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>
                                                    Đặt lịch trực tuyến
                                                </li>
                                                <li>
                                                    Quản lý đặt lịch <code class="fs-14px">Chỉnh sửa và hủy</code>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- ========================== -->
                                <thead>
                                    <tr>
                                        <th class="fs-4 fw-bold text-dark ps-6 py-6" colspan="2">
                                            Đặt hàng (Mua sản phẩm, thẻ dịch vụ)
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <code>Đặt hàng</code>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>
                                                    Xem thông tin sản phẩm & Dịch vụ
                                                </li>
                                                <li>
                                                    Chọn và đặt hàng trực tuyến qua APP
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- ========================== -->
                                <thead>
                                    <tr>
                                        <th class="fs-4 fw-bold text-dark ps-6 py-6" colspan="2">
                                            Nhận thông báo
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <code>Tin nhắn APP ( Notification ) </code>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>Tin nhắn về <code class="fs-14px">chương trình ưu đãi</code></li>
                                                <li>Tin nhắn lên cấp</li>
                                                <li>Tin nhắn <code class="fs-14px">chúc mừng sinh nhật</code></li>
                                                <li>Tin nhắn nhắc lịch</li>
                                                <li>Tin nhắn <code class="fs-14px">thông báo thanh toán</code></li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- ========================== -->
                                <!-- <thead>
                                    <tr>
                                        <th class="fs-4 fw-bold text-dark ps-6 py-6" colspan="2">
                                            Nhận Smart Call
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <code>Cuộc gọi tự động giới thiệu về các chương trình ưu đãi </code>
                                        </td>
                                        <td>
                                            Cho phép đo lường <code class="fs-14px">thời gian nghe của khách hàng</code> để đổi <code class="fs-14px">sale tiếp cận Marketing</code>
                                        </td>
                                    </tr>
                                </tbody> -->
                                <!-- ========================== -->
                                <thead>
                                    <tr>
                                        <th class="fs-4 fw-bold text-dark ps-6 py-6" colspan="2">
                                            NHÂN VIÊN ĐĂNG NHẬP
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <code>Quản lý thông tin cá nhân </code>
                                        </td>
                                        <td>
                                            Xem thông tin cá nhân
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Tài khoản kỹ thuật viên</code>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>Danh sách các dịch vụ đã làm cho khách</li>
                                                <li>Có thể lọc theo ngày / tháng</li>
                                                <li>Nhập ghi chú khách hàng trên mỗi ca dịch vụ</li>
                                                <li><code class="fs-14px">Chụp ảnh thực tế khách hàng</code> thông qua APP</li>
                                                <li>Tự hoàn thành ca khi thực hiện xong</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Hoa hồng bán hàng, Lương ca dịch vụ </code>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>
                                                    Tự quản lý theo ngày
                                                </li>
                                                <li>
                                                    Đảm bảo lương dịch vụ và thưởng hoa hồng không bị nhập thiếu
                                                </li>
                                                <li>
                                                    Thống kê tổng <code class="fs-14px">doanh số và dự kiến thưởng</code> hoa hồng KPI
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <div class="fc-tab-content" data-tab="report">
                        <div class="fc-content">
                            <table class="table table-striped table-borderless">
                                <thead>
                                    <tr>
                                        <th class="fs-4 fw-bold text-dark ps-6 py-6" colspan="2">
                                            BÁO CÁO PHẦN MỀM
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <code>Báo cáo tổng quan ngày</code>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>Báo cáo theo toàn bộ hoặc từng chi nhánh</li>
                                                <li>Khách hàng mới <code class="fs-14px">Đến cơ sở / Đến từ online web / app</code></li>
                                                <li>Doanh số bán hàng / Thanh toán đơn mới / Thanh toán nợ</li>
                                                <li>Thống kê lượt đặt lịch, làm dịch vụ</li>
                                                <li>Tổng thu / chi trong ngày</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Báo cáo Khách hàng </code>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>
                                                    Thống kê khách hàng mới theo thời gian
                                                </li>
                                                <li>
                                                    Thống kê theo toàn bộ hoặc từng chi nhánh
                                                </li>
                                                <li>
                                                    Thống kê theo nhóm <code class="fs-14px">cấp bậc</code> khách hàng
                                                </li>
                                                <li>
                                                    Thống kê theo nhân viên chăm sóc
                                                </li>
                                                <li>
                                                    Thống kê theo nguồn khách hàng
                                                </li>
                                                <li>
                                                    Thống kê theo khu vực <code class="fs-14px">thành phố / quận huyện</code>
                                                </li>
                                                <li>
                                                    Biểu đồ thống kê theo <code class="fs-14px">12 tháng hiện tại</code> kết hợp so sánh với <code class="fs-14px">12 tháng năm trước</code>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Báo cáo dịch vụ</code>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>
                                                    Thống kê dịch vụ theo toàn bộ hoặc từng chi nhánh
                                                </li>
                                                <li>
                                                    Thống kê dịch vụ theo thời gian
                                                </li>
                                                <li>
                                                    Thống kê dịch vụ theo nhân viên
                                                </li>
                                                <li>
                                                    Thống kê dịch vụ thường / bảo hành
                                                </li>
                                                <li>
                                                    <code class="fs-14px">Cảnh báo buổi đầu tiên của khách hàng</code>
                                                </li>
                                                <li>
                                                    <code class="fs-14px">Cảnh báo buổi đầu tiên của thẻ</code>
                                                </li>
                                                <li>
                                                    <code class="fs-14px">Cảnh báo buổi cuối của khách hàng</code>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Báo cáo bán hàng</code>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>
                                                    Báo cáo doanh số
                                                </li>
                                                <li>
                                                    Báo cáo danh sách <code class="fs-14px">sản phẩm / dịch vụ bán ra</code>
                                                </li>
                                                <li>
                                                    Báo cáo trả hàng
                                                </li>
                                                <li>
                                                    Báo cáo thanh toán nợ
                                                </li>
                                                <li>
                                                    Báo cáo <code class="fs-14px">Top bán hàng, Doanh số</code>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Thu chi & Sổ quỹ</code>
                                        </td>
                                        <td>
                                            Danh sách thu chi và Sổ quỹ
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Báo cáo công nợ </code>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>
                                                    Báo cáo công nợ
                                                </li>
                                                <li>
                                                    Báo cáo khóa nợ
                                                </li>
                                                <li>
                                                    Báo cáo đơn tặng
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Báo cáo Nhân viên </code>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>
                                                    Báo cáo Nhân viên
                                                </li>
                                                <li>
                                                    Báo cáo Lương ca
                                                </li>
                                                <li>
                                                    Báo cáo Hoa hồng tư vấn
                                                </li>
                                                <li>
                                                    Báo cáo doanh số
                                                </li>
                                                <li>
                                                    Báo cáo bảng lương
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Báo cáo tồn kho </code>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>
                                                    Báo cáo tồn
                                                </li>
                                                <li>
                                                    Báo cáo tiêu hao
                                                </li>
                                                <li>
                                                    Báo cáo nguyên liệu dự kiến
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- ========================== -->
                                <thead>
                                    <tr class="border-top-tb">
                                        <th class="fs-4 fw-bold text-dark ps-6 py-6" colspan="2">
                                            BÁO CÁO WEB/APP
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <code>Tích hợp công cụ thống kê số 1 thế giới từ Google </code>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>
                                                    Website tích hợp <code class="fs-14px">Google Analytics</code>
                                                </li>
                                                <li>
                                                    APP tích hợp <code class="fs-14px">Google Firebase</code>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <div class="fc-tab-content" data-tab="device">
                        <div class="fc-content">
                            <table class="table table-striped table-borderless">
                                <thead>
                                    <tr>
                                        <th class="fs-4 fw-bold text-dark ps-6 py-6" colspan="2">
                                            THIẾT BỊ HỖ TRỢ
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <code>Máy in hóa đơn </code>
                                        </td>
                                        <td>
                                            Các máy khổ A4, A5, K80, K57
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Camera nhận diện khuôn mặt</code>
                                        </td>
                                        <td>
                                            Camera nhà cung cấp
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Webcam</code>
                                        </td>
                                        <td>
                                            Chụp ảnh khách hàng tại quầy
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Máy đọc mã vạch </code>
                                        </td>
                                        <td>
                                            Giúp quản lỷ sản phẩm & bán hàng nhanh
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Máy đọc thẻ từ </code>
                                        </td>
                                        <td>
                                            Thẻ khách hàng thân thiết <code class="fs-14px">thẻ VIP</code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Máy tính bảng & Bút ký điện tử </code>
                                        </td>
                                        <td>
                                            Hỗ trợ ký điện tử và đánh giá dịch vụ tại quầy
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Điện thoại chạy hệ điều hành Android </code>
                                        </td>
                                        <td>
                                            Xác nhận thanh toán và tạo thanh toán tự động khi khách hàng chuyển khoản cá nhân
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

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
<?php
get_footer();
