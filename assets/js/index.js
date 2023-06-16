var myTimeout = null
$(document).ready(function() {
    // Price Change ====================
    // EzsChangePrice.init()
    EzsFC.init()
    EzsListCustomer.init()
    EzsImageMarker.init()
    EzsListen.init()
    EzsPrice.init()

    $(".btn-regadvise").click(function() {
        let elForm = $(this).parents('#reg-advise')
        let name = elForm.find('input[name="name"]')
        let phone = elForm.find('input[name="phone"]')
        let address = elForm.find('input[name="address"]')
        let brand = elForm.find('input[name="brand"]')
        if (!name.val()) {
            name.focus()
            return;
        }
        if (!phone.val()) {
            phone.focus()
            return;
        }
        let templateParams = {
            from_name: name.val(),
            message: `Số điện thoại : ${phone.val()} - Địa chỉ : ${address.val() || 'Chưa xác định'} - Thương hiệu : ${brand.val() || "Chưa xác định"}`
        }
        $(this).prop("disabled", true);
        $(this).html(
            `Đang thực hiện ...`
        );

        emailjs.send("service_b2m9qlf", "template_ctuitar", templateParams, "q6puDBkyNoYO6MuYy").then(function(response) {

            toastr.success('Gửi đăng ký tư vấn thành công !', { timeOut: 1500 })
            $(".btn-regadvise").prop("disabled", false);
            $(".btn-regadvise").html("Đăng ký ngay !");

            $("#reg-advise").modal('hide')
        }, function(error) {
            console.log(error);
        });
    })

    $('.tip-pro a').click(function() {
        const el = $("#price-list");
        if (el.hasClass('d-none')) {
            el.removeClass('d-none')
            $('html,body').animate({
                    scrollTop: $("#price-list").offset().top - 120
                },
                'slow');
        } else {
            el.addClass('d-none')
        }
    })

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll > 0) {
            $(".header-mobi").addClass("header-noti");
        } else {
            $(".header-mobi").removeClass("header-noti");
        }
    });

    var options = {
        strings: ['Vận hành APP ngay khi Spa không có <i> nhân viên phụ trách hình ảnh, nội dung.</i>'],
        typeSpeed: 30,
        loop: true
    };
    if ($('.element-typed').length > 0) {
        var typed = new Typed('.element-typed', options);
    }

    $('.notification-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        vertical: true,
        variableWidth: false,
        autoplay: true,
        autoplaySpeed: 2500,
        arrows: false,
    });

    $(".btn-listen").click(function() {
        const Audio = document.getElementById('audio-listen');
        $(".listen-advice").addClass('show')
        $('body').addClass('listen-show')
        if (Audio) {
            Audio.currentTime = 0
            Audio.play()
        }
    })

    $(".listen-advice .bg, .listen-advice .close").click(function() {
        $(".listen-advice").removeClass('show')
        $('body').removeClass('listen-show')
        const Audio = document.getElementById('audio-listen');
        if (Audio) {
            Audio.currentTime = 0
            Audio.pause()
        }
    })

    const checkAudio = (callback) => {
        const Audio = document.getElementById('audio-listen');
        if (Audio) {
            callback && callback()
        } else {
            setTimeout(function() {
                checkAudio(callback)
            }, 50)
        }
    }

    if (window.location.hash && window.location.hash == '#nghe-tu-van-online') {
        checkAudio(function() {
            $(".btn-listen").trigger('click')
        })
    }

    $('.owl-thongke').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        dots: true,
        items: 1,
        autoplay: false,
        autoplayTimeout: 4500,
        autoplayHoverPause: false,
    })

    $('[data-toggle="popover"]').popover({
        trigger: 'focus'
    })

    $(".item-point").each(function() {
        const top = $(this).attr("data-top");
        const left = $(this).attr("data-left");
        $(this).css({
            top: top + 'px',
            left: left + 'px'
        })
    })

    var owlScreen1 = $('.screen-carousel1').owlCarousel({
        loop: true,
        margin: 0,
        center: true,
        dots: true,
        nav: false,
        rtl: true,
        autoplay: false,
        responsive: {
            0: {
                items: 1.4,
                //autoWidth: true
            },
            768: {
                items: 3
            },
            991: {
                items: 3
            },
            1367: {
                items: 4
            }
        }
    });

    EzsImageMarker.onChangOwl(".screen-carousel1")

    owlScreen1.on('changed.owl.carousel', function(event) {
        $('.screen-carousel1 [data-toggle="popover"]').popover('hide')
        setTimeout(function() {
            EzsImageMarker.onChangOwl(".screen-carousel1")
        }, 1000)
    })

    $('.screenshots-owl').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 1,
                autoWidth: true,
            },
            768: {
                items: 2
            },
            1025: {
                items: 3
            },
            1200: {
                items: 4
            }
        }
    })

    $('.popup-youtube').magnificPopup({
        //disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });

    $(".c-blogArticle_richText img").click(function() {
        $.magnificPopup.open({
            items: {
                src: $(this).attr('src')
            },
            type: 'image' // this is default type
        });
    })

    const navExpand = [].slice.call(document.querySelectorAll('.nav-expand'))
        //     const backLink = `<li class="nav-item">
        // 	<a class="nav-link nav-back-link" href="javascript:;">
        // 		Back
        // 	</a>
        // </li>`

    navExpand.forEach(item => {
            //item.querySelector('.nav-expand-content').insertAdjacentHTML('afterbegin', backLink)
            item.querySelector('.nav-link').addEventListener('click', () => item.classList.add('active'))
            item.querySelector('.nav-back-link').addEventListener('click', () => item.classList.remove('active'))
        })
        // ====================
        // $('.menu-mobi__icon-arrow').click(function () {
        //     var t = $(this)
        //     t.parent().next('ul').slideToggle()
        //     t.find('i').toggleClass('fa-plus fa-minus')
        //     t.parents('li').siblings().find('ul').slideUp()
        //     t.parents('li').siblings().find('i').removeClass(' fa-minus').addClass('fa-plus')
        // })

    $('.-blog-main, .-blog-sidebar').theiaStickySidebar({
        // Settings
        additionalMarginTop: 75,
        minWidth: 992
    });

    var url = window.location.hash;
    if ($(url).length != 0) {
        $('html, body').animate({
            scrollTop: $(url).offset().top
        }, 1000)
    }

    function e(e) {
        var i = 0;
        if (0 == e) return i;
        for (var t = 0; t <= e; t++) i += $(".header-fixed-search-index").eq(t).width();
        return i;
    }

    function i(e) {
        for (var i = 0, t = 0; t <= e; t++) i += $(".header-fixed__menu-detail > ul > li").eq(t).width();
        return i;
    }

    function t(e) {
        var i = 0;
        if (0 == e) return i;
        for (var t = 0; t <= e; t++) i += $(".header-search-index").eq(t).width();
        return i + 25;
    }

    function a(e) {
        for (var i = 0, t = 0; t <= e; t++) i += $(".header-top__menu-detail > ul > li").eq(t).width();
        return i;
    }
    window.scrollY >= 750 ? $(".header-fixed").addClass("show") : $(".header-fixed").removeClass("show"),
        $(".header-top__tool-search").click(function() {
            $(".box-search").addClass("show");
        }),
        $(".header-fixed__tool-search").click(function() {
            $(".box-search").addClass("show");
        }),
        $(".box-search__close svg").click(function() {
            $(".box-search").removeClass("show");
        }),
        $(".arrow-active-move").on({
            mouseenter: function() {
                $(this).removeClass("arrow-active-move-out");
            },
            mouseleave: function() {
                $(this).addClass("arrow-active-move-out");
            },
        }),
        $(".nav-menu").click(function() {
            $(this).toggleClass("active"), $(".menu-mobi").toggleClass("show");
            $('body').toggleClass('overflow-hidden');
            if (!$(".menu-mobi").hasClass("show")) {
                $(".nav-expand").removeClass("active")
            }
        }),
        $(".mobile-bg").click(function() {
            $(".nav-menu").removeClass("active"), $(".menu-mobi").removeClass("show");
            $('body').removeClass('overflow-hidden');
            $(".nav-expand").removeClass("active");
        }),
        $(".header-top__menu-detail > ul > li ").hover(
            function() {
                var e = $(".header-top__menu-detail > ul > li").index(this);
                $(this).find("span").addClass("active"), $(this).siblings().find("span").removeClass("active"), $(".menu-background-move").css({
                    width: $(this).width(),
                    left: a(e - 1)
                });
            },
            function() {
                $(".menu-background-move").css({
                    width: 0,
                    left: 0
                }), $(this).find("span").removeClass("active");
            }
        ),
        $(".header-fixed__menu-detail > ul > li ").hover(
            function() {
                var e = $(".header-fixed__menu-detail > ul > li").index(this);
                $(this).find("span").addClass("active"), $(this).siblings().find("span").removeClass("active"), $(".menu-fixed-background-move").css({
                    width: $(this).width(),
                    left: i(e - 1)
                });
            },
            function() {
                $(".menu-fixed-background-move").css({
                    width: 0,
                    left: 0
                });
            }
        ),
        $(".header-search-index").hover(
            function() {
                var e = $(".header-search-index").index(this);
                $(".search-background-move").css({
                    width: $(this).outerWidth(),
                    left: t(e)
                });
            },
            function() {
                $(".search-background-move").css({
                    width: 0,
                    left: 0
                });
            }
        ),
        $(".header-fixed-search-index").hover(
            function() {
                var i = $(".header-search-index").index(this);
                $(".search-fixed-background-move").css({
                    width: $(this).outerWidth(),
                    left: e(i)
                });
            },
            function() {
                $(".search-fixed-background-move").css({
                    width: 0,
                    left: 0
                });
            }
        );
    var r = 0;

    function l() {
        $(".review-app__slider .owl-item .review-app__slider-title .review-app__slider-title-freemes").html("GỬI tin nhắn <br> miễn phí</br>"),
            $(".review-app__slider .owl-item .review-app__slider-title .review-app__slider-title-voucher").html("Quản lý <br> voucher/coupon</br>"),
            $(".review-app__slider .owl-item .review-app__slider-title .review-app__slider-title-online").html("Mua hàng <br> Online</br>"),
            $(".review-app__slider .owl-item .review-app__slider-title .review-app__slider-title-book").html("Đặt lịch <br> trực tuyến</br>"),
            $(".review-app__slider .owl-item .review-app__slider-title .review-app__slider-title-qltlt").html("Quản lý <br> Thẻ Liệu trình</br>"),
            $(".review-app__slider .owl-item .review-app__slider-title .review-app__slider-title-connect").html("Kết nối <br> fanpage chat</br>"),
            $(".review-app__slider .owl-item .review-app__slider-title .review-app__slider-title-login").html("Đăng nhập bằng <br> QRcode</br>"),
            $(".review-app__slider .owl-item .review-app__slider-title .review-app__slider-title-foget").html("Quên mật khẩu <br> qua SMS</br>"),
            $(".review-app__slider .owl-item .review-app__slider-title .review-app__slider-title-table").html("Thống kê <br> sử dụng</br>");
    }

    function s() {
        $(".review-app__slider .owl-item .review-app__slider-title .review-app__slider-title-freemes").html("GỬI tin nhắn <br> miễn phí</br>"),
            $(".review-app__slider .owl-item .review-app__slider-title .review-app__slider-title-voucher").html("Quản lý <br> voucher/coupon</br>"),
            $(".review-app__slider .owl-item .review-app__slider-title .review-app__slider-title-online").html("Mua hàng <br> Online</br>"),
            $(".review-app__slider .owl-item .review-app__slider-title .review-app__slider-title-book").html("Đặt lịch <br> trực tuyến</br>"),
            $(".review-app__slider .owl-item .review-app__slider-title .review-app__slider-title-qltlt").html("Quản lý <br> Thẻ Liệu trình</br>"),
            $(".review-app__slider .owl-item .review-app__slider-title .review-app__slider-title-connect").html("Kết nối <br> fanpage chat</br>"),
            $(".review-app__slider .owl-item .review-app__slider-title .review-app__slider-title-login").html("Đăng nhập bằng <br> QRcode</br>"),
            $(".review-app__slider .owl-item .review-app__slider-title .review-app__slider-title-foget").html("Quên mật khẩu <br> qua SMS</br>"),
            $(".review-app__slider .owl-item .review-app__slider-title .review-app__slider-title-table").html("Thống kê <br> sử dụng</br>");
    }

    function n(e, i) {
        setTimeout(function() {
            $(e).addClass("show translate-default");
        }, i);
    }

    function o(e, i, t) {
        setTimeout(function() {
            $(e).eq(t).addClass("show translate-default");
        }, i);
    }
    $(window).scroll(function(e) {
            var i = $(this).scrollTop();
            i > r ? window.scrollY >= 150 && $(".header-fixed").addClass("show") : window.scrollY < 150 && $(".header-fixed").removeClass("show"), (r = i);
        }),
        $(".software-box-mobi .software-box-slide").slick({
            slidesToShow: 3,
            slidesToScroll: 3,
            autoplay: !0,
            dots: !0,
            responsive: [{
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: !1,
                        rows: 2
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        dots: !0
                    }
                },
            ],
        }),
        $(".system-slider").owlCarousel({
            nav: !0,
            loop: !0,
            autoplay: !0,
            autoplayTimeout: 3e3,
            autoplayHoverPause: !0,
            margin: 0,
            navText: [
                '<svg xmlns="http://www.w3.org/2000/svg" width="53" height="28" viewBox="0 0 53.02 27" class="modal-view-pre" data-id="0">\n        <rect class="swiper-line" y="13.5" width="52.05" height="1"></rect>\n        <polygon class="swiper-cap" points="51.65 14 38.35 27.3 39.05 28 52.35 14.7 53.05 14 52.35 13.3 39.05 0 38.35 0.7 51.65 14">\n        </polygon>\n    </svg>',
                '<svg xmlns="http://www.w3.org/2000/svg" width="53" height="28" viewBox="0 0 53.02 27" class="modal-view-next" data-id="2">\n        <rect class="swiper-line" y="13.5" width="52.05" height="1"></rect>\n        <polygon class="swiper-cap" points="51.65 14 38.35 27.3 39.05 28 52.35 14.7 53.05 14 52.35 13.3 39.05 0 38.35 0.7 51.65 14">\n        </polygon>\n    </svg>',
            ],
            dots: !1,
            responsive: {
                0: {
                    items: 1
                }
            },
        }),
        $(".main-slide").slick({
            centerMode: !0,
            autoplay: !0,
            centerPadding: "60px",
            slidesToShow: 3,
            slidesToScroll: 2,
            swipeToSlide: !0,
            responsive: [{
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        }),
        $(".review-app__slider").owlCarousel({
            nav: !0,
            loop: !0,
            autoplay: !0,
            autoplayTimeout: 3e3,
            autoplayHoverPause: !0,
            margin: 0,
            responsive: {
                0: {
                    items: 2,
                    slideBy: 2
                },
                500: {
                    items: 2,
                    slideBy: 2
                },
                678: {
                    items: 3
                },
                1025: {
                    items: 5
                }
            },
        }),
        $(".swiper-button-next").click(function() {
            $(".review-app .owl-next").trigger("click");
        }),
        $(".swiper-button-prev").click(function() {
            $(".review-app .owl-prev").trigger("click");
        }),
        $(".topleft-view-more").click(function() {
            $(".review-app__topleft p").fadeIn(400), $(".review-app__topleft h3").html("APP KHÁCH HÀNG").css("color", "#404040"), $(".review-app__topleft .review-app_tag").html("Màu sắc & Thương hiệu riêng"), $(this).hide();
        }),
        $(".review-app__slider-item").hover(
            function() {
                $(this).find(".app-img-after").addClass("hide-img"), $(this).find(".app-img-before").addClass("show-img");
            },
            function() {
                $(this).find(".app-img-after").removeClass("hide-img"), $(this).find(".app-img-before").removeClass("show-img");
            }
        ),
        $(".review-app__slider-item").click(function() {
            if ($(this).attr("data-title").length >= 5) {
                $(".modal-review-app img").attr("src", $(this).attr("data-title")),
                    $(".modal-view-next").attr("data-id", parseInt($(this).attr("data-id")) + 1),
                    $(".modal-view-pre").attr("data-id", $(this).attr("data-id") - 1),
                    $(".modal-review-app").addClass("show-img"),
                    $(".shadow-behind").addClass("show-img");
            }
        }),
        $(".shadow-behind").click(function() {
            $(".modal-review-app").removeClass("show-img"), $(".shadow-behind").removeClass("show-img");
        }),
        $(".modal-view-pre").click(function() {
            1 == $(this).attr("data-id") ? $(this).attr("data-id", 10) : $(this).attr("data-id", parseInt($(this).attr("data-id")) - 1),
                $(".modal-review-app__img img").attr(
                    "src",
                    $(".review-app__slider-item")
                    .eq($(this).attr("data-id") - 1)
                    .attr("data-title")
                );
        }),
        $(".modal-view-next").click(function() {
            10 == $(this).attr("data-id") ? $(this).attr("data-id", 1) : $(this).attr("data-id", parseInt($(this).attr("data-id")) + 1),
                $(".modal-review-app__img img").attr(
                    "src",
                    $(".review-app__slider-item")
                    .eq($(this).attr("data-id") - 1)
                    .attr("data-title")
                );
        }),
        $("#email .search-title input")
        .focusin(function() {
            $(".search-title__under-line").css("background", "#1d1d1f");
        })
        .focusout(function() {
            $(".search-title__under-line").css("background", "#d2d2d2");
        }),

        window.outerWidth > 440 ?
        $(".introduce-box__title .introduce-box__des-software").html("Kết nối phần mềm") :
        window.outerWidth > 576 ?
        ($("#email .table-app").html("Phí thuê tài khoản AppleStore / CHPlay"), $(".header__item filter__link--number:first-child").html("NĂM ĐẦU TIÊN"), $(".header__item filter__link--number:last-child").html("NĂM TIẾP THEO")) :
        window.outerWidth > 1024 && $("#main-footer .row .footer-title span").html("Đối tác không thể thiếu<br> khi bạn kinh doanh</br> SPA / Thẩm mỹ viện"),
        window.outerWidth <= 576 && ($("#email .table-app").html("Phí thuê tài khoản app"), $(".table-header .filter__link--number:first-child").html("NĂM ĐẦU"), $(".table-header .filter__link--number:last-child").html("NĂM TIẾP")),
        window.outerWidth <= 440 ?
        $(".introduce-box__title .introduce-box__des-software").html("Kết nối phần mềm trực tiếp") :
        window.outerWidth <= 1024 ?
        ($("#main-footer .row .footer-title span").html("Đối tác không thể thiếu khi bạn kinh doanh SPA / Thẩm mỹ viện"), $(".main-head__title .review-app_tag").html("Ưu đãi 80% | Tặng Canva Pro"), l()) :
        window.outerWidth <= 1366 ?
        ($(".main-head__title .review-app_tag").html("Ưu đãi 80% | Tặng tài khoản Canva Pro"), l()) :
        ($(".main-head__title .review-app_tag").html("Ưu đãi lên đến 80% | Tặng tài khoản Canva Pro"), s()),
        $(window).resize(function() {
            window.outerWidth > 440 ?
                $(".introduce-box__title .introduce-box__des-software").html("Kết nối phần mềm") :
                window.outerWidth > 1024 && $("#main-footer .row .footer-title span").html("Đối tác không thể thiếu<br> khi bạn kinh doanh</br> SPA / Thẩm mỹ viện"),
                window.outerWidth > 576 &&
                ($("#email .table-app").html("Phí thuê tài khoản AppleStore / CHPlay"),
                    $(".header__item .filter__link--number:first-child").html("NĂM ĐẦU TIÊN"),
                    $(".header__item .filter__link--number:last-child").html("NĂM TIẾP THEO")),
                window.outerWidth <= 440 ?
                $(".introduce-box__title .introduce-box__des-software").html("Kết nối phần mềm trực tiếp") :
                window.outerWidth <= 576 &&
                ($(".header__item .filter__link--number:first-child").html("NĂM ĐẦU"), $(".header__item .filter__link--number:last-child").html("NĂM TIẾP"), $("#email .table-app").html("Phí thuê tài khoản app")),
                window.outerWidth <= 1024 ?
                ($("#main-footer .row .footer-title span").html("Đối tác không thể thiếu khi bạn kinh doanh SPA / Thẩm mỹ viện"), $(".main-head__title .review-app_tag").html("Ưu đãi 80% | Tặng Canva Pro"), l()) :
                window.outerWidth <= 1366 ?
                ($(".main-head__title .review-app_tag").html("Ưu đãi 80% | Tặng tài khoản Canva Pro"), l(), $(".main-head__title .review-app_tag").html("Ưu đãi 80% | Tặng tài khoản Canva Pro")) :
                ($(".main-head__title .review-app_tag").html("Ưu đãi lên đến 80% | Tặng tài khoản Canva Pro"), s());
        }),
        $("#domain").on("change", function() {
            1 == $(this).val() ?
                ($(".domain").siblings().eq(0).html('\n                    <p class="old-price">250.000</p>\n                    <p class="new-price">Free</p>\n                '), $(".domain").siblings().eq(1).html("250.000")) :
                2 == $(this).val() ?
                ($(".domain").siblings().eq(0).html('\n                <p class="old-price">750.000</p>\n                <p class="new-price">250.000</p>\n            '), $(".domain").siblings().eq(1).html("400.000")) :
                ($(".domain").siblings().eq(0).html('\n                <p class="old-price">650.000</p>\n                <p class="new-price">250.000</p>\n            '), $(".domain").siblings().eq(1).html("300.000"));
        }),
        $("#system .system-image img").addClass("show translate-default"),
        o("#system .system-left-mobi .system-detail", 200, 0),
        o("#system .system-left-desktop .system-detail", 200, 0),
        o("#system .system-right-des .system-detail", 200, 0),
        o("#system .system-left-mobi .system-detail", 400, 1),
        o("#system .system-left-desktop .system-detail", 400, 1),
        o("#system .system-right-des .system-detail", 400, 1),
        o("#system .system-left-mobi .system-detail", 600, 2),
        o("#system .system-left-desktop .system-detail", 600, 2),
        o("#system .system-right-des .system-detail", 600, 2),
        $("#introduce .introduce-title h6").addClass("show translate-default"),
        n("#introduce .introduce-title h2", 200),
        n("#introduce .introduce-title .introduce-title__detail", 400),
        n("#introduce .introduce-image img:last-child", 600),
        n("#introduce .introduce-image img:first-child", 800),
        $(".review-app .review-app__topleft .review-app_tag").addClass("show translate-default"),
        n(".review-app .review-app__topleft h3", 200),
        n(".review-app .review-app__topleft .topleft-view-more", 400),
        n(".review-app .review-app__topright img:last-child", 600),
        n(".review-app .review-app__topright img:first-child", 800),
        $(".main-head__title .review-app_tag").addClass("show translate-default"),
        n(".main-head__title > h1", 200),
        n(".main-head__title p", 400),
        n(".main-head__title .main-head__view-more", 600),
        n(".main-head .main-head__img-before", 800),
        n(".main-head .main-head__img-after", 1e3);
});

var EzsPrice = {
    init: () => {
        $(".select-pm-cs .dropdown-item, .select-pm-year .dropdown-item").click(function() {
            EzsPrice.onChangePM($(this))
        });
        $(".select-app-year .dropdown-item").click(function() {
            EzsPrice.onChangeAPP($(this))
        });

        $(".el-click").click(function() {
            $(this).removeClass('show');
            $('.select-app-year .dropdown-item:nth-child(2)').trigger('click')
        })
    },
    onChangePM: (_this) => {
        const elDropdown = _this.parents('.dropdown')
        const type = elDropdown.attr('data-type')
        elDropdown.find('.dropdown-item').removeClass('active')
        _this.addClass('active')
        const val = _this.attr('data-value')
        const valText = _this.text()
        elDropdown.find('.current-select').attr('data-cs', val).html(valText)
        elDropdown.parents('.module-ezs').find(type === 'cs' ? '.val-cs-pmg' : '.val-year-pmg').text(val)
        EzsPrice.getTotalPM()
    },
    onChangeAPP: _this => {
        const elDropdown = _this.parents('.dropdown')
        elDropdown.find('.dropdown-item').removeClass('active')
        _this.addClass('active')
        const val = _this.attr('data-value')
        const valPrice = Number(_this.attr('data-price'))
        const valText = _this.text()
        elDropdown.find('.current-select').attr({
            'data-cs': val,
            'data-price': valPrice
        }).html(valText)
        elDropdown.parents('.module-ezs').find('.val-year-app').text(val)
        $('.total-app').attr('data-totalapp', valPrice).html(`${EzsPrice.formatVND(valPrice)}₫`)
        if (valPrice > 0) {
            $('.total-app').removeClass('text-danger').next().removeClass('d-none')
            $(".el-click").removeClass('show')
        } else {
            $('.total-app').addClass('text-danger').text('Không sử dụng').next().addClass('d-none')
            $(".el-click").addClass('show')
        }
        EzsPrice.getTotalBasic()
    },
    getTotalPM: () => {
        const currentCS = Number($('.current-pm-cs').attr('data-cs'))
        const currentYear = Number($('.current-pm-year').attr('data-cs'))
        let total = currentCS * 3500000
        if (currentYear > 1) {
            total = currentCS * currentYear * 3000000
            $('.user-total').text('5')
        } else {
            total = currentYear * currentCS * 3500000
            $('.user-total').text('3')
        }
        $('.total-pm').attr('data-totalcs', total).html(`${EzsPrice.formatVND(total)}₫`)
        EzsPrice.getTotalBasic()
    },
    getTotalBasic: () => {
        const total = Number($('.total-pm').attr('data-totalcs')) + Number($('.total-app').attr('data-totalapp'))
        $(".total-basic").html(`${EzsPrice.formatVND(total)}₫`)
    },
    formatVND: price => {
        if (!price || price === 0) {
            return '0'
        } else {
            return price.toFixed(0).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, '$1.')
        }
    },
}

var EzsChangePrice = {
    init: () => {
        EzsChangePrice.render();
        $(".domain-item").click((e) => {
            const {
                innerText,
                dataset
            } = e.target;
            $(".domain-item-curent").html(innerText);
            $(".domain-first").html(EzsChangePrice.formatVND(Number(dataset.valueFirst))).attr({
                "data-price-frist": dataset.valueFirst,
                "data-price-year-old": dataset.valueFirst
            })
            $(".domain").html(EzsChangePrice.formatVND(Number(dataset.value))).attr({
                "data-price": dataset.value,
                "data-price-old": dataset.value
            })
            EzsChangePrice.render();
        })
        $(".input-count").on("keyup", function(e) {
            if (!e.target.value || Number(e.target.value) < 1) return;
            let totalFirst = 0;
            let total = 0;
            totalFirst = 3000000 * Number(e.target.value);
            total = 3000000 * Number(e.target.value);
            $(".cs-first").html(EzsChangePrice.formatVND(totalFirst)).attr({
                "data-price-frist": totalFirst,
                "data-price-year-old": totalFirst
            })
            $(".cs").html(EzsChangePrice.formatVND(total)).attr({
                "data-price": total,
                "data-price-old": total
            })
            $(".total-count").html(e.target.value)
            EzsChangePrice.render();
        })
    },
    render: () => {
        const elPriceFirst = $(".total-price-first");
        const elPrice = $(".total-price");
        const elPriceYearOld = $(".total-price-year-old");
        const elPriceOld = $(".total-price-old");
        elPriceFirst.html(EzsChangePrice.formatVND(EzsChangePrice.getTotal("[data-price-frist]", "data-price-frist")))
        elPrice.html(EzsChangePrice.formatVND(EzsChangePrice.getTotal("[data-price]", "data-price")))
        elPriceYearOld.html(EzsChangePrice.formatVND(EzsChangePrice.getTotal("[data-price-year-old]", "data-price-year-old")))
        elPriceOld.html(EzsChangePrice.formatVND(EzsChangePrice.getTotal("[data-price-old]", "data-price-old")))
    },
    getTotal: (el, attr) => {
        let total = 0;
        $(el).each(function() {
            const elmPrice = $(this).attr(attr);
            total += Number(elmPrice)
        });
        return total
    },
    formatVND: price => {
        if (!price || price === 0) {
            return '0'
        } else {
            return price.toFixed(0).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, '$1.')
        }
    },
}

var EzsListCustomer = {
    init: () => {
        EzsListCustomer.render()
    },
    render: () => {
        const elmItem = $(".customer-main-item");
        const minDelete = 3;
        const maxDelete = 10;
        const ListImg = []
        if (elmItem.length > 0 && elmItem.hasClass("customer-main-set")) {
            const ListItem = document.querySelectorAll(".customer-main-set");
            for (let [index, elm] of ListItem.entries()) {
                if (index > minDelete && index < maxDelete) {
                    ListImg.push({
                        Url: EzsListCustomer.getUrlImage($(elm).find(".customer-charactor__box-detail")),
                        Title: $(elm).find("h3").text()
                    })
                    ListItem[index].remove()
                }
            }
            $(ListItem[minDelete]).find(".customer-charactor").addClass("gallery").html(ListImg.map((image, i) =>
                $("<div class='cus'>").append(
                    `
                        <img src="${image.Url}" alt="${image.Title}"/>
                    `
                )
            ));
        }
    },
    getUrlImage: (elm) => {
        return elm.find("img").attr("src");
    }
}

var EzsFC = {
    init: () => {
        EzsFC.changeHref();
        $(`[data-nav]`).click(function() {
            const navName = $(this).data('nav');
            EzsFC.changeHref(navName)
        })
    },
    removeParam: (key, sourceURL) => {
        var rtn = sourceURL.split("?")[0],
            param,
            params_arr = [],
            queryString = (sourceURL.indexOf("?") !== -1) ? sourceURL.split("?")[1] : "";
        if (queryString !== "") {
            params_arr = queryString.split("&");
            for (var i = params_arr.length - 1; i >= 0; i -= 1) {
                param = params_arr[i].split("=")[0];
                if (param === key) {
                    params_arr.splice(i, 1);
                }
            }
            if (params_arr.length) rtn = rtn + "?" + params_arr.join("&");
        }
        return rtn;
    },
    getParamUrl: (key, sourceURL) => {
        var url = new URL(sourceURL);
        return url.searchParams.get(key);
    },
    changeHref: (tab) => {
        const tabCurrent = tab || EzsFC.getParamUrl("tab", window.location.href);
        const clientYs = $(window).width() > 767 ? 50 : 25;
        if (tabCurrent) {
            $(`[data-nav]`).removeClass("active");
            $(`[data-nav="${tabCurrent}"]`).addClass("active");
            $(`[data-tab]`).removeClass("active");
            $(`[data-tab="${tabCurrent}"]`).addClass("active");
            var doc = document.documentElement;
            var top = (window.pageYOffset || doc.scrollTop) - (doc.clientTop || 0);
            if (top != $("#scrollIntoView").offset().top - clientYs) {
                $('html,body').animate({
                    scrollTop: $("#scrollIntoView").offset().top - clientYs
                }, 'slow');
            }
        } else {
            $(`[data-nav]`).first().addClass("active");
            $(`[data-tab]`).first().addClass("active");
        }
    }
}

var EzsImageMarker = {
    init: () => {
        EzsImageMarker.MarkerOne()
    },
    MarkerOne: () => {
        var windowsize = $(window).width();
        const data = [{
                "title": `${windowsize < 1200 ? '1. ' : ''}` + "Tìm kiếm",
                "content": "Bạn có thể tìm kiếm các thông tin về sản phẩm ( Mỹ phẩm ) & Dịch vụ",
                "className": "green",
                "pos": {
                    "x": 32,
                    "y": 76
                },
                "col": 1
            },
            {
                "title": `${windowsize < 1200 ? '2. ' : ''}` + "Slider Banner",
                "content": "Banner các chương trình ưu đãi, dịch vụ mới - HOT, các sự kiện quan trọng trong SPA",
                "className": "green",
                "pos": {
                    "x": 32,
                    "y": 155
                },
                "col": 1
            },
            {
                "title": `${windowsize < 1200 ? '3. ' : ''}` + "Quick Link",
                "content": "Giúp người dùng ( Khách hàng truy cập nhanh đến các nội dung chính ), có thể thay đổi theo nhu cầu của SPA",
                "className": "green",
                "pos": {
                    "x": 32,
                    "y": 327
                },
                "col": 1
            },
            {
                "title": `${windowsize < 1200 ? '4. ' : ''}` + "Danh sách các dịch vụ Sale",
                "content": "Có thể chủ động thay đổi theo thời gian, xu hướng.",
                "className": "green",
                "pos": {
                    "x": 32,
                    "y": 448
                },
                "col": 1
            },
            {
                "title": `${windowsize < 1200 ? '5. ' : ''}` + "TOP dịch vụ giảm giá",
                "content": "Có thể chủ động thay đổi theo thời gian, xu hướng.",
                "className": "yello",
                "pos": {
                    "x": 533,
                    "y": 73
                },
                "col": 2
            },
            {
                "title": `${windowsize < 1200 ? '6. ' : ''}` + "TOP Deal HOT",
                "content": "Có thể chủ động thay đổi theo thời gian, xu hướng.",
                "className": "yello",
                "pos": {
                    "x": 533,
                    "y": 170
                },
                "col": 2
            },
            {
                "title": `${windowsize < 1200 ? '7. ' : ''}` + "Danh sách sản phẩm HOT",
                "content": "TOP các sản phẩm mới, hot & bán chạy",
                "className": "yello",
                "pos": {
                    "x": 533,
                    "y": 320
                },
                "col": 2
            },
            {
                "title": `${windowsize < 1200 ? '8. ' : ''}` + "Danh sách tin tức",
                "content": "Tin tức & các thông tin hữu ích SPA.",
                "className": "yello",
                "pos": {
                    "x": 533,
                    "y": 480
                },
                "col": 2
            }
        ];
        var imageMarker = $("#element").imageMarker({
            src: $("#element").attr("data-image"),
            drag_disabled: true
        });

        data.forEach(function(m) {
            $(imageMarker).trigger('add_marker', m);
        })

        $('#add_neg_marker').click(function() {
            $(imageMarker).trigger('add_marker', {
                className: 'yello'
            });
        });
        $('#add_pos_marker').click(function() {
            $(imageMarker).trigger('add_marker', {
                title: 'adadad',
                content: 'Content for mock marker should be a bit longer, longer, longer... ok that`s it.',
                className: 'green'
            });
        });
        $('#save').click(function() {
            $(imageMarker).trigger('get_markers', function(data) {
                console.log(JSON.stringify(data))
            });
        });
    },
    onChangOwl: (elm) => {
        var offset = 0;
        let arrElm = document.querySelectorAll(`${elm} .active.center [data-toggle='popover']`);

        function fn() {
            arrElm.forEach((el, index) => {
                myTimeout = setTimeout(function() {
                    $(`${elm} [data-toggle='popover']`).popover('hide')
                    $(el).popover('show');
                    if (arrElm.length - 1 === index) {
                        fn()
                    }
                }, offset);
                offset += 5000;
            })
        }
        if (myTimeout) {
            clearTimeout(myTimeout);
            fn()
        } else {
            fn()
        }
    }
}

const EzsListen = {
    init: () => {
        EzsListen.getListen()
    },
    getListen: () => {
        $.get("https://ezs.vn/wp-json/wp/v2/categories/15", function({
            acf
        }) {
            $(".btn-listen").removeClass('d-none')
            EzsListen.renderListen(acf)
        });
    },
    renderListen: (data) => {
        const myAudio = $(`<audio class="react-audio-player w-100" controls="" id="audio-listen" preload="metadata" controlslist="nodownload" src="${data.file_mp3}" title="${data.file_mp3}"><p>Your browser does not support the <code>audio</code> element.</p></audio>`)
        const dom = $(".listen-content");
        dom.append(myAudio);
        dom.append(`<div class="controls-video">
            <div class="title">Nghe tư vấn Online về giải pháp EZS</div>
                <ul>
                    <li data-time="0" class="text-danger">1. Nghe toàn bộ</li>
                    <li data-time="${data.mo_hinh_he_thong}">2. Mô hình hệ thống</li>
                    <li data-time="${data.chuc_nang_co_ban}">3. Chức năng cơ bản</li>
                    <li data-time="${data.cau_hinh_luong_nv}">4. Cấu hình lương nhân viên</li>
                    <li data-time="${data.kich_hoat_thanh_toan_tu_dong}">5. Ký điện tử, đánh giá</li>
                    <li data-time="${data.giai_phap_vi_dien_tu}">6. Giải pháp ví điện tử</li>
                    <li data-time="${data.giai_phap_the_tien}">7. Giải pháp thẻ tiền</li>
                    <li data-time="${data.affiliate_marketing}">8. Affiliate Marketing</li>
                    <li data-time="${data.telesale_cham_soc_khach_hang}">9. Telesale &amp; Chăm sóc khách hàng</li>
                    <li data-time="${data.kich_hoat_thanh_toan_tu_dong}">10. Kích hoạt thanh toán tự động</li>
                    <li data-time="${data.app_khach_hang}">11. APP khách hàng</li>
                    <li data-time="${data.website_gioi_thieu}">12. Website giới thiệu</li>
                </ul>
            </div>`)

        $(".controls-video li").click(function() {
            $(".controls-video li").removeClass('text-danger');
            $(this).addClass('text-danger');
            const Audio = document.getElementById('audio-listen');
            const time = $(this).attr('data-time')
            Audio.currentTime = Number(time);
            Audio.play()
        })
    }
}