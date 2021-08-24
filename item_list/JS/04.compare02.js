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

// ------------------------ 換卡片 ------------------------

// var $card = $('.card');
// var lastCard = $(".card-list .card").length - 1;

// $(this).click(function () {
//     var prependList = function () {
//         if ($('.card').hasClass('activeNow')) {
//             var $slicedCard = $('.card').slice(lastCard).removeClass('transformThis activeNow');
//             $('ul').prepend($slicedCard);
//         }
//     }
//     $('li').last().removeClass('transformPrev').addClass('transformThis').prev().addClass('activeNow');
//     setTimeout(function () { prependList(); }, 150);
// });