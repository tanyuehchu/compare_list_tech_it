//----------------------- 拖曳效果 -----------------------
var saveDragId = '';
var saveDragHtml = '';
$(function () {
    $('ul#left_card').sortable({
        connectWith: "ul#right_card",
    });

    $('ul#right_card').sortable({
        connectWith: "ul#left_card",
        update: function (event, ui) {
            let _ui = $(ui.item[0]);
            console.log(_ui.attr('data-price'));
            alert(ui.item[0].getAttribute('data-price'));

            if (saveDragHtml == '') {
                saveDragId = ui.item[0].dataset.id;
                saveDragHtml = `<li data-id="${ui.item[0].dataset.id}">${ui.item[0].innerHTML}</li>`;
            } else {
                $('ul#right_card').find(`li[data-id="${saveDragId}"]`).remove();
                $('ul#left_card').append(saveDragHtml);
                saveDragId = ui.item[0].dataset.id;
                saveDragHtml = `<li data-id="${ui.item[0].dataset.id}">${ui.item[0].innerHTML}</li>`;
            }
        }
    });

    $("#left_card, #right_card").disableSelection();

});