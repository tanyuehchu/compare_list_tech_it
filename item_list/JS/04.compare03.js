//----------------------- 拖曳效果 -----------------------
var saveDragId_1 = '';
var saveDragHtml_1 = '';
var saveDragId_2 = '';
var saveDragHtml_2 = '';
var saveDragId_3 = '';
var saveDragHtml_3 = '';

$(function () {


    $('ul#left_card').sortable({
        connectWith: "ul#right_card, ul#middle_card, ul#middle2_card",
    });

    $('ul#right_card').sortable({
        connectWith: "ul#left_card",
        update: function (event, ui) {
            let _ui = $(ui.item[0]);
            // console.log(_ui.attr('data-price'));
            // alert(ui.item[0].getAttribute('data-price'));

            if (saveDragHtml_1 == '') {
                saveDragId_1 = ui.item[0].dataset.id;
                saveDragHtml_1 = `<li data-id="${ui.item[0].dataset.id}">${ui.item[0].innerHTML}</li>`;

            } else {
                $('ul#right_card').find(`li[data-id="${saveDragId_1}"]`).remove();
                $('ul#left_card').append(saveDragHtml_1);
                saveDragId_1 = ui.item[0].dataset.id;
                saveDragHtml_1 = `<li data-id="${ui.item[0].dataset.id}">${ui.item[0].innerHTML}</li>`;
            }


        }
    });
    $('ul#middle_card').sortable({
        connectWith: "ul#left_card",
        update: function (event, ui) {
            let _ui = $(ui.item[0]);
            // console.log(_ui.attr('data-price'));
            // alert(ui.item[0].getAttribute('data-price'));

            if (saveDragHtml_2 == '') {
                saveDragId_2 = ui.item[0].dataset.id;
                saveDragHtml_2 = `<li data-id="${ui.item[0].dataset.id}">${ui.item[0].innerHTML}</li>`;
            } else {
                $('ul#middle_card').find(`li[data-id="${saveDragId_2}"]`).remove();
                $('ul#left_card').append(saveDragHtml_2);
                saveDragId_2 = ui.item[0].dataset.id;
                saveDragHtml_2 = `<li data-id="${ui.item[0].dataset.id}">${ui.item[0].innerHTML}</li>`;
            }
        }
    });
    $('ul#middle2_card').sortable({
        connectWith: "ul#left_card",
        update: function (event, ui) {
            let _ui = $(ui.item[0]);
            // console.log(_ui.attr('data-price'));
            // alert(ui.item[0].getAttribute('data-price'));

            if (saveDragHtml_3 == '') {
                saveDragId_3 = ui.item[0].dataset.id;
                saveDragHtml_3 = `<li data-id="${ui.item[0].dataset.id}">${ui.item[0].innerHTML}</li>`;
            } else {
                $('ul#middle2_card').find(`li[data-id="${saveDragId_3}"]`).remove();
                $('ul#left_card').append(saveDragHtml_3);
                saveDragId_3 = ui.item[0].dataset.id;
                saveDragHtml_3 = `<li data-id="${ui.item[0].dataset.id}">${ui.item[0].innerHTML}</li>`;
            }
        }
    });

    $("#left_card, #right_card, #middle2_card, #middle_card").disableSelection();

});



// ------------------------ 卡片 ------------------------
$('.fixed_left_arrow_area').hide();
// 卡片收合
$('.fixed_right_arrow_area').click(function (event) {
    event.preventDefault();
    setTimeout(function () { $('.fixed_right_arrow_area').hide(); }, 600);
    // $(this).delay(10000).hide();
    setTimeout(function () { $('.fixed_left_arrow_area').show(); }, 600);
    $('.card_wrap').css('width', '30px');
})
// 卡片展開
$('.fixed_left_arrow_area').click(function (event) {
    event.preventDefault();
    $(this).hide();
    $('.fixed_right_arrow_area').show();
    $('.card_wrap').css('width', '70vw');

})


// ------------------------ 換卡片 ------------------------


// $('.compare_card_list .compare_card').click(function () {
//     console.log('click');
//     if ($(this).hasClass('ori_card_2')) {
//         console.log('has 2');
//         $('.ori_card_3').removeClass('ori_card_3').addClass('ori_card_2');
//         $('.ori_card_1').removeClass('ori_card_1').addClass('ori_card_3');

//         $(this).removeClass('ori_card_2').addClass('ori_card_1');
//     };

//     if ($(this).hasClass('ori_card_3')) {
//         console.log('has 3');
//         $('.ori_card_2').removeClass('ori_card_2').addClass('ori_card_3');
//         $('.ori_card_1').removeClass('ori_card_1').addClass('ori_card_2');

//         $(this).removeClass('ori_card_3').addClass('ori_card_1');
//     }

// })
