$(document).ready(function() {
    $('.table-detail.table tr td:first-child').each(function() {
        if (window.outerWidth <= 992) {
            if ($(this).hasClass('text-center')) {
                $(this).removeClass('haschild')
            } else {
                if ($(this).next().text().trim() == "") {
                    return
                }
                $(this).addClass('haschild')
            }
        } else {
            $(this).removeClass('haschild')
        }
    });
    var f_offsettop = $('#function-nav').offset().top + $('#function-nav').height() - 100
    $('.function-nav').height($('#function-nav').height())
    $(window).resize(function() {
        $('.table-detail.table tr td:first-child').each(function() {
            if (window.outerWidth <= 992) {
                if ($(this).hasClass('text-center')) {
                    $(this).removeClass('haschild')
                } else {
                    if ($(this).next().text().trim() == "") {
                        return
                    }
                    $(this).addClass('haschild')
                }
            } else {
                $(this).removeClass('haschild')
            }
        });
        $('.function-nav').height($('#function-nav').height())
        if (window.outerWidth <= 992) {
            $('#function-nav').css({ left: '0' });
            $('.table-detail.table tr td:first-child').click(function(e) {
                e.preventDefault();
                if ($(this).hasClass('text-center')) {
                    return
                } else {
                    if ($(this).next().text().trim() == "") {
                        return
                    }
                    $('#function-modal .modal-body').html($(this).next().text())
                    $('#function-modal').modal()
                }
            });
        } else {
            $('#function-nav').css({ left: 'unset' });
        }

        $('.table-detail.table tr td:first-child').click(function(e) {
            if (window.outerWidth <= 992) {
                e.preventDefault();
                if ($(this).hasClass('text-center')) {} else {
                    if ($(this).next().text().trim() == "") {
                        return
                    }
                    $('#function-modal .modal-body').html($(this).next().html())
                    $('#function-modal').modal()
                }
            } else {
                e.preventDefault();
                return
            }
        });
        $('a').click(function(event) {
            event.preventDefault();
        });

    })
    var arr = []
    $(window).scroll(function() {
        if (window.scrollY >= f_offsettop) {
            $('#function-nav').addClass("fixed")
            if (window.outerWidth <= 992) {
                $('#function-nav').width('100%')
                $('#function-nav').css({ left: '0' });
            } else {
                $('#function-nav').width('100%')
            }
        } else if (window.scrollY < f_offsettop) {
            $('#function-nav').removeClass("fixed")
            $('#function-nav').width('100%')
        }
        $('#function h3').each(function() {
            if ((window.scrollY - $(this).offset().top + 100) >= 0) {
                var c = $(this).attr("title")
                arr.push(c)
            }
        })
        to = arr[arr.length - 1]
        $(`#function-nav p[to=` + to + `]`).addClass('active')
        $(`#function-nav p[to=` + to + `]`).siblings().removeClass('active')
    })
    if (window.outerWidth <= 992) {
        $('.table-detail.table tr td:first-child').click(function(e) {
            e.preventDefault();
            if ($(this).hasClass('text-center')) {
                console.log('123')
            } else {
                if ($(this).next().text().trim() == "") {
                    return
                }
                $('#function-modal .modal-body').html($(this).next().html())
                $('#function-modal').modal()
            }
        });
        $('a').click(function(event) {
            event.preventDefault();
        });
    }

    function goToByScroll(id) {
        $('html,body').animate({
            scrollTop: $("#" + id).offset().top - 50
        }, 1000, 'linear');
    }
    $('#function-nav').draggable();
    $(function() {
        $('#function-nav').draggable();
        $('#function-nav p').click(function() {
            goToByScroll($(this).attr("to"))
        });
    });
})