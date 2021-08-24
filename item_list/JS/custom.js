//加入商品至購物車/喜好清單/比較列表

//加入商品至購物車
$('button.joincart').click(function (event) {
    //取得 button 的 jQuery 物件
    let btn = $(this);

    //送出 post 請求，加入購物車
    let objProduct = {
        prod_id: btn.attr('data-prod-id'),
        prod_name: btn.attr('data-prod-name'),
        prod_thumbnail: btn.attr('data-prod-thumbnail'),
        prod_price: btn.attr('data-prod-price'),
    };

    $.post("shopping_cart.php", objProduct, function (obj) {
        if (obj['success']) {
            //成功訊息
            alert('加入購物車成功');
        }
        console.log(obj);
    }, 'json');


});

//加入喜好清單
$('button.saved').click(function (event) {
    //避免元素的預設事件被觸發
    event.preventDefault();

    //取得 button 的 jQuery 物件
    let btn = $(this);

    //送出 post 請求，加入購物車
    let objProduct = {
        prod_id: btn.attr('data-prod-id'),
    };
    $.post("follow.php", objProduct, function (obj) {
        if (obj['success']) {
            //成功訊息
            alert('商品追蹤成功');
        } else {
            alert(`${obj['info']}`);
        }
        console.log(obj);
    }, 'json');
});


//加入比較列表
$('button.compare').click(function (event) {
    event.preventDefault();

    //取得 button 的 jQuery 物件
    let btn = $(this);

    //送出 post 請求，加入購物車
    let objProduct = {
        prod_id: btn.attr('data-prod-id'),
        // prod_name: btn.attr('data-prod-name'),
        // prod_thumbnail: btn.attr('data-prod-thumbnail'),
        // prod_price: btn.attr('data-prod-price'),
    };

    $.post("setCompare.php", objProduct, function (obj) {
        if (obj['success']) {
            //成功訊息
            alert('加入比較列表成功');
        }
        console.log(obj);
    }, 'json');


});



$('input#member_info').on("click", function () {
    $.get("setuser.php", function ($obj) {
        if ($('input#member_info').prop('checked')) {
            $('input#quick_e').val($obj['email']);
            $('input#quick_n').val($obj['name']);
            $('input#quick_p').val($obj['phone']);
            $('input#quick_a').val($obj['address']);
            // $('input#quick_a').addClass("border border-danger border-2");

        } else {
            $('input#quick_e').val('');
            $('input#quick_n').val('');
            $('input#quick_p').val('');
            $('input#quick_a').val('');

        }
        // alert("Data Loaded: " + JSON.stringify($obj));

        // $('input#jenemail').addClass("border border-danger border-2");
    });

});