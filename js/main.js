// ハンバーガーメニュー
$(function (){
    const hum = $('#hamburger')
    const nav = $('.sp_nav')
    hum.on('click', function(){
        nav.toggleClass('toggle');
    });
});

$('header nav').find('a').each(function(idx){
    $(this).jKit('scroll', {
        'offset':-120,
        'speed':1000
    });
});

$(document).ready(function() {
    $(".btn-top").hide(); // 初期位置ではボタンを非表示
    $(window).on("scroll", function() {
        // ある程度スクロールしたらボタンを表示
        if ($(this).scrollTop() > 10) {
            $(".btn-top").fadeIn("fast");
        } else {
            $(".btn-top").fadeOut("fast");
        }
        scrollHeight = $(document).height();
        scrollPosition = $(window).height() + $(window).scrollTop();
        footHeight = $(".footer").innerHeight();
        // フッターエリアまでスクロールしたらボタンを固定
        if ( scrollHeight - scrollPosition  <= footHeight ) {
            $(".btn-top").css({
                "position":"absolute",
            });
        } else {
            $(".btn-top").css({
                "position":"fixed",
                "bottom": "20px"
            });
        }
    });
    $('.btn-top').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 800); // スクロール速度
        return false;
    });
});