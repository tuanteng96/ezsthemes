$(document).ready(function() {
    // Price Change ====================
    EzsChangePrice.init()
    EzsFC.init()
    EzsListCustomer.init()

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

var EzsChangePrice = {
    init: () => {
        EzsChangePrice.render();
        $(".domain-item").click((e) => {
            const {
                innerText,
                dataset
            } = e.target;
            $(".domain-item-curent").html(innerText);
            $(".domain-first").html(EzsChangePrice.formatVND(Number(dataset.valueFirst))).attr("data-price-frist", dataset.valueFirst)
            $(".domain").html(EzsChangePrice.formatVND(Number(dataset.value))).attr("data-price", dataset.value)
            EzsChangePrice.render();
        })
        $(".input-count").on("keyup", function(e) {
            if (!e.target.value || Number(e.target.value) < 1) return;
            let totalFirst = 0;
            let total = 0;
            totalFirst = 3000000 * Number(e.target.value);
            total = 3000000 * Number(e.target.value);
            $(".cs-first").html(EzsChangePrice.formatVND(totalFirst)).attr("data-price-frist", totalFirst)
            $(".cs").html(EzsChangePrice.formatVND(total)).attr("data-price", total)
            $(".total-count").html(e.target.value)
            EzsChangePrice.render();
        })
    },
    render: () => {
        const elPriceFirst = $(".total-price-first");
        const elPrice = $(".total-price");
        elPriceFirst.html(EzsChangePrice.formatVND(EzsChangePrice.getTotal("[data-price-frist]", "data-price-frist")))
        elPrice.html(EzsChangePrice.formatVND(EzsChangePrice.getTotal("[data-price]", "data-price")))
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