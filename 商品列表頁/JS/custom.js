//加入商品至購物車/喜好清單/比較列表

$('button.joincart').click(function(event){
    //取得 button 的 jQuery 物件
    let btn = $(this);

    //送出 post 請求，加入購物車
    let objProduct = {
        prod_id: btn.attr('data-prod-id'),
        prod_name: btn.attr('data-prod-name'),
        prod_thumbnail: btn.attr('data-prod-thumbnail'),
        prod_price: btn.attr('data-prod-price'),
    };

    $.post("shopping_cart.php", objProduct, function(obj){
        if(obj['success']){
            //成功訊息
            alert('加入購物車成功');
        }
        console.log(obj);
    }, 'json');

    $.post("follow.php", objProduct, function(obj){
        if(obj['success']){
            //成功訊息
            alert('加入喜好清單成功');
        }
        console.log(obj);
    }, 'json');

    $.post("compare.php", objProduct, function(obj){
        if(obj['success']){
            //成功訊息
            alert('加入比較清單成功');
        }
        console.log(obj);
    }, 'json');

    
});