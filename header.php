<!DOCTYPE html>
<html lang="vi-VN">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="theme-color" content="#f36451" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri() ?>/assets/img/icon.jpg" />

	<!-- FONT ROBOTO -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">

	<!-- FONT ICONS -->
	<link href="<?php echo get_template_directory_uri() ?>/assets/lib/font-awesome-pro/css/all.min.css" rel="stylesheet">

	<!-- Owl Carousel 2 core CSS -->
	<link type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/lib/owl-carousel/owl.carousel.min.css" rel="stylesheet" />

	<!-- Bootstrap 4 -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/lib/bootstrap/css/bootstrap.css?1">

	<!-- Animate -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/lib/animate/animate.min.css">

	<!-- Magnific -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/lib/magnific-popup/magnific-popup.css">

	<!-- PLUGINS SLICKSLIDER -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/lib/slick/slick/slick.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/lib/slick/slick/slick-theme.css" />

	<!-- IMAGE MARKER -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/lib/Image-Marker/jquery.image-marker.css" />

	<!-- SCALIZE -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/lib/scalize/scalize.min.js" />

	<!-- INDEX CSS -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/index.css?8">

	<!-- css,js,jq -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assets/lib/jq/jquery-3.6.0.js"></script>
	<script src="<?php echo get_template_directory_uri() ?>/assets/lib/dragui/jquery-ui.js"></script>

	<?php wp_head(); ?>

</head>

<body <?php body_class() ?>>

	<header>
		<div class="header-top">
			<div class="header-top__logo">
				<a href="<?php echo home_url(); ?>">
					<img width="74" height="25" src="<?php echo get_template_directory_uri() ?>/assets/img/logo-trang.png" class="qodef-header-logo-image qodef--light" alt="logo light" itemprop="image">
				</a>
			</div>
			<div class="header-top__menu">
				<div>
					<div class="header-top__menu-detail">
						<ul>
							<li data-stt="0"><a href="<?php echo home_url(); ?>"><span>01.</span>Trang chủ</a></li>
							<li data-stt="1">
								<?php $the_query = new WP_Query('page_id=3195'); ?>
								<?php while ($the_query->have_posts()) : $the_query->the_post();  ?>
									<a class="popup-youtube" href="<?php the_field('url_video') ?>"><span>02.</span>Giải pháp</a>
								<?php endwhile; ?>
								<ul class="header-top__menu-sub">
									<li>
										<?php $the_query = new WP_Query('page_id=3195'); ?>
										<?php while ($the_query->have_posts()) : $the_query->the_post();  ?>
											<a class="popup-youtube" href="<?php the_field('url_video') ?>"><?php the_title(); ?></a>
										<?php endwhile; ?>
									</li>
									<li>
										<?php $the_query = new WP_Query('page_id=3197'); ?>
										<?php while ($the_query->have_posts()) : $the_query->the_post();  ?>
											<a href="<?php echo get_page_link() ?>"><?php the_title(); ?></a>
										<?php endwhile; ?>
									</li>
									<li>
										<?php $the_query = new WP_Query('page_id=3251'); ?>
										<?php while ($the_query->have_posts()) : $the_query->the_post();  ?>
											<a href="<?php echo get_page_link() ?>"><?php the_title(); ?></a>
										<?php endwhile; ?>
									</li>
								</ul>
							</li>
							<li data-stt="2">
								<?php $the_query = new WP_Query('page_id=3193'); ?>
								<?php while ($the_query->have_posts()) : $the_query->the_post();  ?>
									<a href="<?php echo get_page_link() ?>">
										<span>03.</span><?php the_title(); ?>
									</a>
								<?php endwhile; ?>
							</li>
							<li data-stt="3">
								<?php $the_query = new WP_Query('page_id=3191'); ?>
								<?php while ($the_query->have_posts()) : $the_query->the_post();  ?>
									<a href="<?php echo get_page_link() ?>?tab=demo">
										<span>04.</span><?php the_title(); ?>
									</a>
									<ul class="header-top__menu-sub">
										<li><a href="<?php echo get_page_link() ?>?tab=demo">Tư vấn - Demo</a></li>
										<li><a href="<?php echo get_page_link() ?>?tab=pay">Ký hợp đồng - Thanh toán</a>
										</li>
										<li><a href="<?php echo get_page_link() ?>?tab=guide">Bàn giao - Hướng dẫn sử dụng</a>
										</li>
										<li><a href="<?php echo get_page_link() ?>?tab=support">Bảo hành - Hỗ trợ - Nâng cấp</a>
										</li>
									</ul>
								<?php endwhile; ?>
							</li>
							<li data-stt="4">
								<?php $the_query = new WP_Query('page_id=3188'); ?>
								<?php while ($the_query->have_posts()) : $the_query->the_post();  ?>
									<a href="<?php echo get_page_link() ?>">
										<span>05.</span><?php the_title(); ?>
									</a>
								<?php endwhile; ?>
							</li>
							<li data-stt="5">
								<?php
								$value = get_terms(
									array(
										'taxonomy'   => 'category',
										'hide_empty' => false,
										'parent' => 0,
										'number' => 1,
									)
								);
								if (!empty($value) && is_array($value)) {
									foreach ($value as $key) { ?>
										<a href="<?php echo esc_url(get_term_link($key)) ?>"><span>06.</span>Blogs</a>
										<ul class="header-top__menu-sub">
											<?php
											$value1 = get_terms(
												array(
													'taxonomy'   => 'category',
													'hide_empty' => false,
													'parent' => $key->term_id,
												)
											);
											if (!empty($value1) && is_array($value1)) {
												foreach ($value1 as $key) { ?>
													<li><a href="<?php echo esc_url(get_term_link($key)) ?>">
															<?php echo $key->name; ?>
														</a>
													</li>
											<?php
												}
											} ?>
										</ul>
								<?php
									}
								} ?>
							</li>
							<!-- <li data-stt="6"><a href="gioi-thieu"><span>07.</span>Giới thiệu</a></li> -->
							<div class="menu-background-move">
							</div>
						</ul>
					</div>
				</div>
			</div>
			<div class="header-top__tool">
				<div class="header-top__tool-search header-search-index">
					<i class="far fa-phone-alt"></i>
					<p>0981.883.338</p>
				</div>
				<!-- <div class="search-background-move">
                </div> -->
			</div>
		</div>
		<div class="header-fixed">
			<div class="header-fixed__logo">
				<a href="<?php echo home_url(); ?>">
					<img width="74" height="25" src="<?php echo get_template_directory_uri() ?>/assets/img/logo-mau.png" class="qodef-header-logo-image qodef--light" alt="logo light" itemprop="image">
				</a>
			</div>
			<div class="header-fixed__menu h-100">
				<div class="h-100">

					<div class="header-fixed__menu-detail h-100">
						<ul class="d-inline-flex h-100 align-items-center">
							<li data-stt="0"><a href="<?php echo home_url(); ?>" title="Trang chủ"><span>01.</span>Trang chủ</a></li>
							<li data-stt="1">
								<?php $the_query = new WP_Query('page_id=3195'); ?>
								<?php while ($the_query->have_posts()) : $the_query->the_post();  ?>
									<a class="popup-youtube" href="<?php the_field('url_video') ?>"><span>02.</span>Giải pháp</a>
								<?php endwhile; ?>
								<ul class="header-top__menu-sub">
									<li>
										<?php $the_query = new WP_Query('page_id=3195'); ?>
										<?php while ($the_query->have_posts()) : $the_query->the_post();  ?>
											<a class="popup-youtube" href="<?php the_field('url_video') ?>"><?php the_title(); ?></a>
										<?php endwhile; ?>
									</li>
									<li>
										<?php $the_query = new WP_Query('page_id=3197'); ?>
										<?php while ($the_query->have_posts()) : $the_query->the_post();  ?>
											<a href="<?php echo get_page_link() ?>"><?php the_title(); ?></a>
										<?php endwhile; ?>
									</li>
									<li>
										<?php $the_query = new WP_Query('page_id=3251'); ?>
										<?php while ($the_query->have_posts()) : $the_query->the_post();  ?>
											<a href="<?php echo get_page_link() ?>"><?php the_title(); ?></a>
										<?php endwhile; ?>
									</li>
								</ul>
							</li>
							<li data-stt="2">
								<?php $the_query = new WP_Query('page_id=3193'); ?>
								<?php while ($the_query->have_posts()) : $the_query->the_post();  ?>
									<a href="<?php echo get_page_link() ?>">
										<span>03.</span><?php the_title(); ?>
									</a>
								<?php endwhile; ?>
							</li>
							<li data-stt="3">
								<?php $the_query = new WP_Query('page_id=3191'); ?>
								<?php while ($the_query->have_posts()) : $the_query->the_post();  ?>
									<a href="<?php echo get_page_link() ?>?tab=demo">
										<span>04.</span><?php the_title(); ?>
									</a>
									<ul class="header-top__menu-sub">
										<li><a href="<?php echo get_page_link() ?>?tab=demo">Tư vấn - Demo</a></li>
										<li><a href="<?php echo get_page_link() ?>?tab=pay">Ký hợp đồng - Thanh toán</a>
										</li>
										<li><a href="<?php echo get_page_link() ?>?tab=guide">Bàn giao - Hướng dẫn sử dụng</a>
										</li>
										<li><a href="<?php echo get_page_link() ?>?tab=support">Bảo hành - Hỗ trợ - Nâng cấp</a>
										</li>
									</ul>
								<?php endwhile; ?>
							</li>
							<li data-stt="4">
								<?php $the_query = new WP_Query('page_id=3188'); ?>
								<?php while ($the_query->have_posts()) : $the_query->the_post();  ?>
									<a href="<?php echo get_page_link() ?>">
										<span>05.</span><?php the_title(); ?>
									</a>
								<?php endwhile; ?>
							</li>
							<li data-stt="5">
								<?php
								$value = get_terms(
									array(
										'taxonomy'   => 'category',
										'hide_empty' => false,
										'parent' => 0,
										'number' => 1,
									)
								);
								if (!empty($value) && is_array($value)) {
									foreach ($value as $key) { ?>
										<a href="<?php echo esc_url(get_term_link($key)) ?>"><span>06.</span>Blogs</a>
										<ul class="header-top__menu-sub">
											<?php
											$value1 = get_terms(
												array(
													'taxonomy'   => 'category',
													'hide_empty' => false,
													'parent' => $key->term_id,
												)
											);
											if (!empty($value1) && is_array($value1)) {
												foreach ($value1 as $key) { ?>
													<li><a href="<?php echo esc_url(get_term_link($key)) ?>">
															<?php echo $key->name; ?>
														</a>
													</li>
											<?php
												}
											} ?>
										</ul>
								<?php
									}
								} ?>
							</li>
							<!-- <li data-stt="6"><a href="gioi-thieu"><span>07.</span>Giới thiệu</a></li> -->
							<div class="menu-fixed-background-move">
							</div>
						</ul>
					</div>
				</div>

			</div>
			<div class="header-fixed__tool">
				<div class="header-fixed__tool-search header-fixed-search-index">
					<i class="far fa-phone-alt"></i>
					<p>0981.883.338</p>
				</div>
				<div class="search-fixed-background-move">
				</div>
			</div>
		</div>
		<div class="header-mobi">
			<div class="header-mobi-detail">
				<div id="phone-call">
					<i class="fas fa-phone-alt txt-white"></i>
					<a href="tel:0981883338"></a>
				</div>
				<div>
					<a href="<?php echo home_url(); ?>">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logo-trang.png" alt="logo" width="74" height="25">
					</a>
				</div>
				<div class="nav-menu">
					<div class="icon-menu-1">
					</div>
					<div class="icon-menu-2">
					</div>
					<div class="icon-menu-3">
					</div>
				</div>
			</div>
			<!-- https://codepen.io/tiffachoo/pen/yzZRXK -->
			<div class="menu-mobi">
				<div class="mobile-bg"></div>
				<ul class="menu-mobi__nav animate__animated">
					<li class="menu-mobi__nav-item">
						<a class="active nav-link" href="<?php echo home_url(); ?>">
							Trang chủ
						</a>
					</li>
					<li class="menu-mobi__nav-item nav-expand">
						<a href="<?php echo home_url(); ?>#app">
							Giải pháp
						</a>
						<div class="menu-mobi__icon-arrow nav-link">
							<i class="fal fa-angle-right"></i>
						</div>
						<ul class="menu-mobi__sub nav-expand-content">
							<li class="nav-item">
								<a class="nav-link nav-back-link" href="javascript:;">
									<div class="icon-back"><i class="fal fa-angle-double-left"></i></div>
									Giải pháp
								</a>
							</li>
							<li>
								<?php $the_query = new WP_Query('page_id=3195'); ?>
								<?php while ($the_query->have_posts()) : $the_query->the_post();  ?>
									<a class="popup-youtube" href="<?php the_field('url_video') ?>"><?php the_title(); ?></a>
								<?php endwhile; ?>
							</li>
							<li>
								<?php $the_query = new WP_Query('page_id=3197'); ?>
								<?php while ($the_query->have_posts()) : $the_query->the_post();  ?>
									<a href="<?php echo get_page_link() ?>"><?php the_title(); ?></a>
								<?php endwhile; ?>
							</li>
						</ul>
					</li>
					<li class="menu-mobi__nav-item">
						<?php $the_query = new WP_Query('page_id=3193'); ?>
						<?php while ($the_query->have_posts()) : $the_query->the_post();  ?>
							<a class="nav-link" href="<?php echo get_page_link() ?>">
								<?php the_title(); ?>
							</a>
						<?php endwhile; ?>
					</li>
					<li class="menu-mobi__nav-item nav-expand">
						<?php $the_query = new WP_Query('page_id=3191'); ?>
						<?php while ($the_query->have_posts()) : $the_query->the_post();  ?>
							<a href="<?php echo home_url(); ?>#system">
								<?php the_title(); ?>
							</a>
							<div class="menu-mobi__icon-arrow nav-link">
								<i class="fal fa-angle-right"></i>
							</div>
							<ul class="menu-mobi__sub nav-expand-content">
								<li class="nav-item">
									<a class="nav-link nav-back-link" href="javascript:;">
										<div class="icon-back"><i class="fal fa-angle-double-left"></i></div>
										<?php the_title(); ?>
									</a>
								</li>
								<li><a href="<?php echo get_page_link() ?>?tab=demo">Tư vấn - Demo</a></li>
								<li><a href="<?php echo get_page_link() ?>?tab=pay">Ký hợp đồng - Thanh toán</a>
								</li>
								<li><a href="<?php echo get_page_link() ?>?tab=guide">Bàn giao - Hướng dẫn sử dụng</a>
								</li>
								<li><a href="<?php echo get_page_link() ?>?tab=support">Bảo hành - Hỗ trợ - Nâng cấp</a>
								</li>
							</ul>
						<?php endwhile; ?>
					</li>
					<li class="menu-mobi__nav-item">
						<?php $the_query = new WP_Query('page_id=3188'); ?>
						<?php while ($the_query->have_posts()) : $the_query->the_post();  ?>
							<a class="nav-link" href="<?php echo get_page_link() ?>">
								<?php the_title(); ?>
							</a>
						<?php endwhile; ?>
					</li>
					<li class="menu-mobi__nav-item nav-expand">
						<?php
						$value = get_terms(
							array(
								'taxonomy'   => 'category',
								'hide_empty' => false,
								'parent' => 0,
								'number' => 1,
							)
						);
						if (!empty($value) && is_array($value)) {
							foreach ($value as $key) { ?>
								<a href="<?php echo esc_url(get_term_link($key)) ?>">
									Blogs
								</a>
								<div class="menu-mobi__icon-arrow nav-link">
									<i class="fal fa-angle-right"></i>
								</div>
								<ul class="menu-mobi__sub nav-expand-content">
									<li class="nav-item">
										<a class="nav-link nav-back-link" href="javascript:;">
											<div class="icon-back"><i class="fal fa-angle-double-left"></i></div>
											Blogs
										</a>
									</li>
									<?php
									$value1 = get_terms(
										array(
											'taxonomy'   => 'category',
											'hide_empty' => false,
											'parent' => $key->term_id,
										)
									);
									if (!empty($value1) && is_array($value1)) {
										foreach ($value1 as $key) { ?>
											<li><a href="<?php echo esc_url(get_term_link($key)) ?>">
													<?php echo $key->name; ?>
												</a>
											</li>
									<?php
										}
									} ?>
								</ul>
						<?php
							}
						} ?>
					</li>
					<!-- <li class="menu-mobi__nav-item">
						<a href="gioi-thieu">
							<span>07.</span> giới thiệu
						</a>
					</li> -->
				</ul>
			</div>
		</div>
	</header>
	<?php wp_reset_postdata() ?>