<?php require_once 'db.inc.php';

$sql = "SELECT * 
FROM `products`
WHERE `prod_id` = " . $_POST['prod_id'];

$arr = $pdo->query($sql)->fetchAll();

//預設訊息
$obj['result'] = $arr;

//告訴前端，回傳格式為 JSON (前端接到，會是物件型態)
header('Content-Type: application/json');

//輸出 JSON 格式，供 ajax 取得 response
echo json_encode($obj, JSON_UNESCAPED_UNICODE);
