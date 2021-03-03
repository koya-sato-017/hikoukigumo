jQuery(function($){

// タブレット幅のグローバルナビの固定
if (window.matchMedia( "(max-width: 1199px) and (min-width: 768px)" ).matches) {
    var _window = $(window),
    _header = $(".gnavi"),
    mainPhotoBottom;

    _window.on("scroll", function () {
    mainPhotoBottom = $(".site-introduction").height();
    if (_window.scrollTop() > mainPhotoBottom) {
        _header.addClass("fixed");
    } else {
        _header.removeClass("fixed");
    }
    });

    _window.trigger("scroll");
}
// スマホ幅のハンバーガーメニューの固定
if (window.matchMedia( "(max-width: 767px)" ).matches) {
    var _window = $(window),
    _icon = $("#my-parts-icon"),
    mainPhotoBottom;

    _window.on("scroll", function () {
    mainPhotoBottom = $(".site-introduction").height();
    if (_window.scrollTop() > mainPhotoBottom) {
        _icon.addClass("fixed");
    } else {
        _icon.removeClass("fixed");
    }
    });

    _window.trigger("scroll");
}
// スマホ幅のグローバルナビの固定
if (window.matchMedia( "(max-width: 767px)" ).matches) {
    var _window = $(window),
    _navi = $(".gnavi"),
    mainPhotoBottom;

    _window.on("scroll", function () {
    mainPhotoBottom = $(".site-introduction").height();
    if (_window.scrollTop() > mainPhotoBottom) {
        _navi.addClass("fixed");
    } else {
        _navi.removeClass("fixed");
    }
    });

    _window.trigger("scroll");
}
// ページトップに戻る
jQuery(function() {
    var appear = false;
    var pagetop = $('#page_top');
    $(window).scroll(function () {
    if ($(this).scrollTop() > 160) {
        if (appear == false) {
        appear = true;
        pagetop.stop().animate( {
            'bottom': '20px'
        }, 300);
        }
    } else {
        if (appear) {
        appear = false;
        pagetop.stop().animate( {
            'bottom': '-50px'
        }, 300);
        }
    }
    });
    pagetop.click(function () {
        $('body, html').animate({ scrollTop: 0 }, 500);
        return false;
    });
});
// ハンバーガーメニューをクリックするとスライドダウン
jQuery('#my-parts-checkbox').on('click', function() {
    if(jQuery('.gnavi .menu').css('display') === 'block') {
      jQuery('.gnavi .menu').slideUp('1500');
    }else {
      jQuery('.gnavi .menu').slideDown('500');
    }
  });

  $('.slider').slick({
    autoplay: true,
    dots: true,
    fade: true,
    autoplaySpeed: 2000,
  });

});