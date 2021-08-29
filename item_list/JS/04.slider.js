// slide
$(function () {
    $('.left').click(function () {
        let nowX = $('ul').css('margin-left');
        nowX = Number(nowX.split('px')[0]);
        if (nowX >= -216) {
            $('ul').animate({
                marginLeft: `${(nowX * 100 - 72 * 100) / 100}px`
            });
        }
    });

    $('.right').click(function () {
        let nowX = $('ul').css('margin-left');
        nowX = Number(nowX.split('px')[0]);
        if (nowX <= -72) {
            $('ul').animate({
                marginLeft: `${(nowX * 100 + 72 * 100) / 100}px`
            });
        }
    });

    var splide = new Splide('.splide', {
        type: 'loop',
        width: '500px',
        height: '30px',
        focus: 'center',
        perPage: 3,
        pagination: false
    }).mount();
    $('li.is-active').addClass('active-menu');

    splide.on('moved', function () {
        $('li').removeClass('active-menu');
        $('li.is-active').addClass('active-menu');
    });

    $('.del').click(function () {
        $('.full').show();
    })

    $('.ans_f').click(function () {
        $('.full').css('display', 'none');
    })
    $('.ans_y').click(function () {
        $('.full').css('display', 'none');
    })
});
//