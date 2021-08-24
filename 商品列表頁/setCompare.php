<?php
session_start();

$obj['success'] = false;
$obj['info'] = '加入比較清單失敗';

if (
    isset($_POST['prod_id'])
    // && isset($_POST['prod_name']) 
    // &&isset($_POST['prod_thumbnail']) 
    // && isset($_POST['prod_price'])
) {

    //假如先前沒有建立，就直接初始化 (建立)
    if (!isset($_SESSION['data_compare'])) $_SESSION['data_compare'] = [];


    // $obj = ["name" => "Alex", "age" => 17];

    //放置主要資料

    $_SESSION['data_compare'][] = [
        "prod_id" => $_POST['prod_id'],
        // "prod_name" => $_POST['prod_name'],
        // "prod_thumbnail" => $_POST['prod_thumbnail'],
        // "prod_price" => $_POST['prod_price']
    ];


    //設定訊息
    $obj['success'] = true;
    $obj['info'] = "加入比較清單成功";
}
// foreach ($_SESSION['data_compare'] as $key => $obj);

//告訴前端，回傳格式為 JSON (前端接到，會是物件型態)
header('Content-Type: application/json');

//輸出 JSON 格式，供 ajax 取得 response
echo json_encode($obj, JSON_UNESCAPED_UNICODE);
