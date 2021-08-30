<?php
$strobjA = [];
$strobjB = [];
$strobjC = [];
$strobjD = [];
$strobjE = [];
$scoreA = [];
$scoreB = [];
$scoreC = [];
$scoreD = [];
$scoreE = [];
if (isset($_GET['prod_id'])) {
    $sql = "SELECT `order_id`,`products`.`cate_id`,`products`.`prod_id`,`prod_name`,
            `rate_A_name`,`rate_A_score`,
            `rate_B_name`,`rate_B_score`,
            `rate_C_name`,`rate_C_score`,
            `rate_D_name`,`rate_D_score`,
            `rate_E_name`,`rate_E_score`
            FROM `products` 
            INNER JOIN `orders_rate` 
            ON `products`.`prod_id`=`orders_rate`.`prod_id`
            INNER JOIN `rate_item` 
            ON `products`.`cate_id`=`rate_item`.`cate_id`                                 
            WHERE `products`.`prod_id` = {$_GET['prod_id']};";
    $arr = $pdo->query($sql)->fetchAll();

    if (count($arr) > 0) {
        $strobjA = "{$arr[0]['rate_A_name']}";
        $strobjB = "{$arr[0]['rate_B_name']}";
        $strobjC = "{$arr[0]['rate_C_name']}";
        $strobjD = "{$arr[0]['rate_D_name']}";
        $strobjE = "{$arr[0]['rate_E_name']}";
        $scoreA = "{$arr[0]['rate_A_score']}";
        $scoreB = "{$arr[0]['rate_B_score']}";
        $scoreC = "{$arr[0]['rate_C_score']}";
        $scoreD = "{$arr[0]['rate_D_score']}";
        $scoreE = "{$arr[0]['rate_E_score']}";
    }
}
