<?php require_once 'db.inc.php' ?>
<?php session_start() ?>
<?php

if (!isset($_SESSION['data_compare'])) {
    echo "比較清單沒有任何商品喔!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!";
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Public Version - Header & Footer</title>


    <!-- bootstrap 4 link -------------------------------->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


    <!-- jquery link -------------------------------------->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


    <!-- google font link ------------------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">


    <!-- CSS link ---------------------------->
    <link rel="stylesheet" href="CSS/0.body.css">
    <link rel="stylesheet" href="CSS/1.header.css">
    <link rel="stylesheet" href="CSS/2.footer.css">
    <link rel="stylesheet" href="CSS/3.btn_to_top.css">

    <!-- CSS link Compare-List---------------------------->
    <link rel="stylesheet" href="./CSS/04.compare.css">


    <!-- fa -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- JS link ----------------------------------->
    <script src="JS/1.header.js"></script>



    <!----------------------- 拖曳效果 ----------------------->
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">




</head>

<body>

    <!-- HD : Header (Navbar) ----------------------------------------------->
    <header>
        <nav class="navbar fixed-top hd_navbar">
            <!-- logo ------------------------>
            <a href="#" class="d-none d-lg-block">
                <div class="hd_logo">
                    <img src="./img/logo-png.png" alt="">
                </div>
            </a>

            <!-- nav-link d-none d-lg-block-------------------------->
            <div class="hd_nav-link">

                <!-- title-link ---------------------->
                <div class="hd_title">

                    <!-- 品牌專區 -->
                    <div class="hd_title_link t1">
                        <a href="#">品牌專區</a>
                    </div>

                    <!-- 商品分類 -->
                    <div class="hd_title_link t2">
                        <a href="#">商品分類</a>
                    </div>

                    <!-- 智慧專欄 -->
                    <div class="hd_title_link t3">
                        <a href="#">智慧專欄</a>
                    </div>

                    <!-- 窩的智慧 -->
                    <div class="hd_title_link t4">
                        <a href="#">窩的智慧</a>
                    </div>

                </div>

                <!-- icon-link --------------------->
                <div class="hd_icon">

                    <!-- 比較清單 -->
                    <div class="hd_icon_link i1">
                        <a href="#">
                            <!-- <img src="./img/icon_compare-list.svg" alt=""> -->
                            <svg class="svg_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37.51 37.51">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: none;
                                            stroke: #2d2d2d;
                                            stroke-miterlimit: 10;
                                            stroke-width: 2px;
                                        }
                                    </style>
                                </defs>
                                <g id="圖層_2" data-name="圖層 2">
                                    <g id="圖層_2-2" data-name="圖層 2">
                                        <line class="cls-1" y1="17.85" x2="37.51" y2="17.85" />
                                        <line class="cls-1" x1="18.83" x2="18.83" y2="37.51" />
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>

                    <!-- 喜好清單 -->
                    <div class="hd_icon_link i2">
                        <a href="#">
                            <!-- <img src="./img/icon_saved.svg" alt=""> -->
                            <svg class="svg_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38.14 35.05">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: none;
                                            stroke: #2d2d2d;
                                            stroke-miterlimit: 10;
                                            stroke-width: 2px;
                                        }
                                    </style>
                                </defs>
                                <g id="圖層_2" data-name="圖層 2">
                                    <g id="圖層_2-2" data-name="圖層 2">
                                        <path class="cls-1" d="M34,3.69c-4.13-4.13-10.83-3.25-15,.89-4.13-4.14-10.84-5-15-.89a10.59,10.59,0,0,0,0,15l15,15,15-15A10.57,10.57,0,0,0,34,3.69Z" />
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>

                    <!-- 購物車 -->
                    <div class="hd_icon_link i3">
                        <a href="#">
                            <!-- <img src="./img/icon_shopping-cart.svg" alt=""> -->
                            <svg class="svg_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47.28 39.27">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: none;
                                            stroke: #2d2d2d;
                                            stroke-linejoin: round;
                                            stroke-width: 2px;
                                        }
                                    </style>
                                </defs>
                                <g id="圖層_2" data-name="圖層 2">
                                    <g id="圖層_2-2" data-name="圖層 2">
                                        <path class="cls-1" d="M0,1H8.08A1.51,1.51,0,0,1,9.55,2.16L15.38,27a1.5,1.5,0,0,0,1.47,1.16h24A1.51,1.51,0,0,0,42.31,27L46.24,8.12A1.51,1.51,0,0,0,44.77,6.3H14.92" />
                                        <line class="cls-1" x1="24.81" y1="12.44" x2="41.63" y2="12.44" />
                                        <line class="cls-1" x1="21.04" y1="16.79" x2="41.63" y2="16.79" />
                                        <line class="cls-1" x1="31.35" y1="22.07" x2="41.57" y2="22.07" />
                                        <circle class="cls-1" cx="19.29" cy="35.18" r="3.1" />
                                        <circle class="cls-1" cx="38.6" cy="35.18" r="3.1" />
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>

                    <!-- 會員登入 / 註冊 -->
                    <div class="hd_icon_link i4">
                        <a href="#">
                            <!-- <img src="./img/icon_member.svg" alt=""> -->
                            <svg class="svg_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42.76 45.4">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: none;
                                            stroke: #2d2d2d;
                                            stroke-miterlimit: 10;
                                            stroke-width: 2px;
                                        }
                                    </style>
                                </defs>
                                <g id="圖層_2" data-name="圖層 2">
                                    <g id="圖層_2-2" data-name="圖層 2">
                                        <circle class="cls-1" cx="21.38" cy="9.67" r="8.67" />
                                        <path class="cls-1" d="M1.06,44.4H41.7C40.12,16.83,2.63,16.83,1.06,44.4Z" />
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>

                </div>

                <!-- 會員登入 / 註冊狀態 ------------------------->
                <div class="hd_member_state">

                    <a href="#">登入</a>
                    <!-- 若已登入則改成"使用者姓名" -->

                    <!-- ↓↓我是可愛的中界線，不要刪掉我↓↓ -->
                    ｜
                    <!-- ↑↑我是可愛的中界線，不要刪掉我↑↑ -->

                    <a href="#">註冊</a>
                    <!-- 若已登入則改成"登出" -->

                </div>

            </div>

            <!-- mobile_nav d-lg-none------------------------------>
            <!-- 三明治選單 -->
            <div class="hd_icon_link d-lg-none btn_toggler">
                <img src="./img/icon_menu2_black_24dp.svg" alt="">
            </div>

            <!-- LOGO -->
            <a href="#" class="d-lg-none">
                <div class="hd_logo">
                    <img src="./img/logo-png.png" alt="">
                </div>
            </a>

            <!-- 購物車 -->
            <div class="hd_icon_link i4 d-lg-none">
                <a href="#"><img src="./img/icon_shopping-cart.svg" alt=""></a>
            </div>
        </nav>
    </header>

    <!-- 三明治選單 -------------------------------------->
    <div class="hd_toggler d-lg-none d-none">
        <div class="toggler_box">

            <!-- icon-link -->
            <div class="tog_icon_box">
                <!-- 註冊 / 登入 -->
                <a href="#"></a>
                <div class="tog_icon_link">
                    <img class="tog_icon" src="./img/icon_member.svg" alt="">

                    <div>登入</div>
                    <!-- 若已登入則改成"使用者姓名" -->

                    <!-- ↓↓我是可愛的中界線，不要刪掉我↓↓ -->
                    ｜
                    <!-- ↑↑我是可愛的中界線，不要刪掉我↑↑ -->

                    <div>註冊</div>
                    <!-- 若已登入則改成"登出" -->

                </div>
                </a>

                <!-- 喜好清單 -->
                <a href="#"></a>
                <div class="tog_icon_link">
                    <img class="tog_icon" src="./img/icon_saved.svg" alt="">
                    喜好清單
                </div>
                </a>

                <!-- 比較清單 -->
                <a href="#"></a>
                <div class="tog_icon_link">
                    <img class="tog_icon" src="./img/icon_compare-list.svg" alt="">
                    比較清單
                </div>
                </a>

            </div>

            <!-- title-link ---------------------->
            <div class="hd_title">

                <!-- 品牌專區 -->
                <div class="hd_title_link">
                    <a href="#">品牌專區</a>
                </div>

                <!-- 商品分類_level_0 -->
                <div class="hd_title_link tog_lv_0">
                    <a href="#">商品分類</a>
                </div>

                <!-- 商品分類細項_level_1 ---------------->
                <div class="tog_lv_1 d-none">

                    <!-- 廚房家電_level_2 -->
                    <div class="tog_lv_2 lv2-1">
                        <p>廚房家電</p>

                        <!-- 商品項目(含機器人)_level_3 -->
                        <div class="tog_lv_3 d-none lv3-1">
                            <div class="tog_lv_4">
                                <a href="#">烹飪機器人</a>
                            </div>

                            <div class="tog_lv_4">
                                <a href="#">萬用鍋</a>
                            </div>

                            <div class="tog_lv_4">
                                <a href="#">智能烤箱/微波爐</a>
                            </div>

                            <div class="tog_lv_4">
                                <a href="#">冰箱</a>
                            </div>
                        </div>

                    </div>

                    <!-- 居家安全_level_2 -->
                    <div class="tog_lv_2 lv2-2">
                        <p>居家安全</p>

                        <!-- 商品項目(含機器人)_level_3 -->
                        <div class="tog_lv_3 d-none lv3-2">
                            <div class="tog_lv_4">
                                <a href="#">智慧門鎖</a>
                            </div>

                            <div class="tog_lv_4">
                                <a href="#">網路攝影機</a>
                            </div>
                        </div>

                    </div>

                    <!-- 居家清潔_level_2 -->
                    <div class="tog_lv_2 lv2-3">
                        <p>居家清潔</p>

                        <!-- 商品項目(含機器人)_level_3 -->
                        <div class="tog_lv_3 d-none lv3-3">
                            <div class="tog_lv_4">
                                <a href="#">掃地機器人</a>
                            </div>

                            <div class="tog_lv_4">
                                <a href="#">空氣清淨機</a>
                            </div>

                            <div class="tog_lv_4">
                                <a href="#">除濕機</a>
                            </div>

                            <div class="tog_lv_4">
                                <a href="#">冷氣</a>
                            </div>
                        </div>

                    </div>

                    <!-- 娛樂與教育_level_2 -->
                    <div class="tog_lv_2 lv2-4">
                        <p>娛樂與教育</p>

                        <!-- 商品項目(含機器人)_level_3 -->
                        <div class="tog_lv_3 d-none lv3-4">
                            <div class="tog_lv_4">
                                <a href="#">管家機器人</a>
                            </div>

                            <div class="tog_lv_4">
                                <a href="#">陪伴機器人</a>
                            </div>

                            <div class="tog_lv_4">
                                <a href="#">電視</a>
                            </div>

                            <div class="tog_lv_4">
                                <a href="#">智慧音箱</a>
                            </div>
                        </div>
                    </div>

                    <!-- 智能周邊_level_2 -->
                    <div class="tog_lv_2 lv2-5">
                        <p>智能周邊</p>

                        <!-- 商品項目(含機器人)_level_3 -->
                        <div class="tog_lv_3 d-none lv3-5">
                            <div class="tog_lv_4">
                                <a href="#">智能插座</a>
                            </div>

                            <div class="tog_lv_4">
                                <a href="#">智能燈泡</a>
                            </div>

                            <div class="tog_lv_4">
                                <a href="#">智能窗簾</a>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- 智慧專欄 -->
                <div class="hd_title_link">
                    <a href="#">智慧專欄</a>
                </div>

                <!-- 窩的智慧 -->
                <div class="hd_title_link">
                    <a href="#">窩的智慧</a>
                </div>

            </div>

        </div>

        <div class="toggler_box_right"></div>
    </div>



    <!-- 從這裡開始進行網頁撰寫 ------------------->
    <!-- WP : wrap -->
    <!-- ★★★ 請不要調整wrap原數值(in 0.body.css) -->
    <div class="wrap">
        <div class="cate_area_title">
            <h3 class="display_title">商品種類</h3>
            <p>(請選擇想比較的商品類別)</p>
        </div>
        <!-------- mob版 類別資料夾-------->
        <div class="cate_area">
            <ul>
                <li class="martop_0"><a class="folder_1" href="">掃地機器人</a></li>
                <li><a class="folder_2" href="">管家機器人</a></li>
                <li><a class="folder_3" href="">烹飪機器人</a></li>
                <li><a class="folder_4" href="">智慧手錶</a></li>
                <li><a class="folder_5" href="">智慧音箱</a></li>
                <li><a class="folder_6" href="">智慧音箱</a></li>
                <li><a class="folder_7" href="">電子鍋</a></li>
                <li><a class="folder_8" href="">寵物機器人</a></li>
                <li><a class="folder_9" href="">空氣清淨機機機</a></li>
            </ul>
        </div>
        <!-------- web版 類別資料夾--------->
        <div class="cate_wrap">
            <div class="cate_area_web">
                <ul>
                    <?php
                    $number = 0;
                    if (isset($_SESSION['data_compare']) && count($_SESSION['data_compare']) > 0) {
                        $cateIDArray = [];
                        foreach ($_SESSION['data_compare'] as $key => $obj1) {
                            $sql = "SELECT `prod_id`, `cate_name`,`categories`.`cate_id` 
                                    FROM `products` 
                                    INNER JOIN `categories` 
                                    ON `products`.`cate_id`=`categories`.`cate_id`
                                    WHERE `prod_id` = {$obj1['prod_id']};";

                            $arr = $pdo->query($sql)->fetchAll();
                            foreach ($arr as $obj2) {
                                if (in_array($obj2['cate_id'], $cateIDArray)) {
                                    // echo "The 'first' element is in the array";

                                } else {
                                    $number++;
                                    $cateIDArray[] = $obj2['cate_id'];

                    ?>
                                    <li><a class="folder_<?= $number ?>" href="compare.php?cate_id=<?= $obj2['cate_id'] ?>"><?= $obj2['cate_name'] ?></a></li>

                    <?php
                                }
                            }
                        }
                    }
                    ?>
                </ul>
            </div>
            <button class="cate_wrap_left_arrow_area">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="cate_wrap_right_arrow_area">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>

        <!-------- 商品選擇區 -------->
        <div class="select_area_title">
            <?php
            if (isset($_GET['cate_id'])) {
                $sql = "SELECT * 
                FROM `categories`
                WHERE `cate_id`= {$_GET['cate_id']};";
                $arr = $pdo->query($sql)->fetchAll();
                foreach ($arr as $obj) {
            ?>
                    <h3><?= $obj['cate_name'] ?></h3>
                    <p>(您加入比較清單的商品)</p>
            <?php
                }
            }
            ?>
        </div>
        <div class="select_area">

            <div class="img_area">
                <ul class="img_wrap" id="left_card">
                    <?php
                    if (isset($_GET['cate_id'])) {
                        foreach ($_SESSION['data_compare'] as $key => $obj1) {
                            $sql = "SELECT `prod_name`, `prod_price`,`cate_name`,`prod_thumbnail`,`prod_id`
                        FROM `products` 
                        INNER JOIN `categories` 
                        ON `products`.`cate_id`=`categories`.`cate_id`
                        WHERE `products` .`prod_id` = {$obj1['prod_id']}
                        AND `products`.`cate_id`={$_GET['cate_id']};";
                            $arr = $pdo->query($sql)->fetchAll();
                            foreach ($arr as $obj2) {
                    ?>
                                <li data-id="<?= $obj2['prod_id'] ?>" data-price="<?= $obj2['prod_price'] ?>">
                                    <a href="#">
                                        <img class="img1" src="./img_prod_thumbnail/<?= $obj2['prod_thumbnail'] ?>" alt="">
                                    </a>
                                </li>
                    <?php
                            }
                        }
                    }
                    ?>
                    <!-- <li data-id="305" data-price='100'><a href=""><img class="img1" src="./img_prod_thumbnail/0305.png" alt=""></a>
                    </li>
                    <li data-id="1.3" data-price='100'><a href=""><img class="img1" src="./img_prod_thumbnail/0307.png" alt=""></a>
                    </li>
                    <li data-id="1.4"><a href=""><img class="img1" src="./img_prod_thumbnail/0304.png" alt=""></a></li>
                    <li data-id="1.5"><a href=""><img class="img1" src="./img_prod_thumbnail/0302.png" alt=""></a></li>
                    <li data-id="1.6"><a href=""><img class="img1" src="./img_prod_thumbnail/0306.png" alt=""></a></li>
                    <li data-id="1.7"><a href=""><img class="img1" src="./img_prod_thumbnail/0310.png" alt=""></a></li>
                    <li data-id="1.8"><a href=""><img class="img1" src="./img_prod_thumbnail/0312.png" alt=""></a></li> -->
                </ul>
            </div>
            <div class="plus d-none d-md-block">
                <a href="">
                    <img class="img9" src="img/icon_compare-list.svg" alt="">
                </a>
                </li>
            </div>
            <button class="select_left_arrow_area">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="select_right_arrow_area">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
        <ul class="slider_dots">
            <li class="dots dot1"></li>
            <li class="dots dot2"></li>
            <li class="dots dot3"></li>
        </ul>

        <!-------- 比較表格 -------->
        <div class="compare_table_title">
            <h3 class="mob">快速查看詳細規格</h3>
            <h3 class="web">詳細規格比較</h3>
        </div>
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



            // foreach ($arr as $obj) {
            //     $strobjA[] = "{$obj['order_id']}";
            // }
        }
        ?>





        <div class="compare_table">
            <div class="box box01 box_pic">item_pic</div>
            <ul class="box box02 box_pic box_pic1" id="right_card" class=""></ul>
            <ul class="box box03 box_pic box_pic2" id="middle_card"></ul>
            <ul class="box box04 box_pic box_pic3" id="middle2_card"></ul>
            <div class="box box01">item1</div>
            <div class="box box02">123</div>
            <div class="box box03">value2-1</div>
            <div class="box box04 best">value3-1</div>
            <div class="box box01">item2</div>
            <div class="box box02">value1-2</div>
            <div class="box box03 best">value2-2</div>
            <div class="box box04">value3-2</div>
            <div class="box box01">item3</div>
            <div class="box box02">value1-3</div>
            <div class="box box03 best">value2-3</div>
            <div class="box box04">value3-3</div>
            <div class="box box01">item4</div>
            <div class="box box02 best">value1-4</div>
            <div class="box box03">value2-4</div>
            <div class="box box04">value3-4</div>
            <div class="box box01">item5</div>
            <div class="box box02 best">value1-5</div>
            <div class="box box03 best">value2-5</div>
            <div class="box box04">value3-5</div>
            <div class="box box01">item6</div>
            <div class="box box02">value1-6</div>
            <div class="box box03">value2-6</div>
            <div class="box box04 best">value3-6</div>
            <div class="box box01">item7</div>
            <div class="box box02">value1-7</div>
            <div class="box box03">value2-7</div>
            <div class="box box04 best">value3-7</div>
            <div class="box box01">item8</div>
            <div class="box box02">value1-8</div>
            <div class="box box03 best">value2-8</div>
            <div class="box box04">value3-8</div>
            <div class="box box01">item9</div>
            <div class="box box02 best">value1-9</div>
            <div class="box box03">value2-9</div>
            <div class="box box04 best">
                <p style="font-size: 60px;"></p>
            </div>
        </div>


        <!-------- 快速比較區 (web_only) -------->
        <div class="card_wrap">

            <?php
            if (isset($_GET['prod_id'])) {
                $sql = "SELECT `prod_name`, `prod_id`, `prod_price`,`brand_name`,`prod_thumbnail`
                    FROM `products` 
                    INNER JOIN `brands` 
                    ON `products`.`brand_id`=`brands`.`brand_id`                                
                    WHERE `prod_id` = {$_GET['prod_id']}";
                $arr = $pdo->query($sql)->fetchAll();
                foreach ($arr as $obj) {
            ?>
                    <li class="compare_card">
                        <h3 class="display_title">快速比較<small> (僅提供站內資料)</small></h3>
                        <!-- 上半卡片 -->
                        <div class="card_title row">
                            <!-- 商品資訊 -->
                            <div class="title_wrap">
                                <h4 class="display_1 brand_name"><?= $obj['brand_name'] ?></h4>
                                <h4 class="display_1"><?= $obj['prod_name'] ?></h4>
                                <h6 class="display_1">NT$ <?= $obj['prod_price'] ?></h4>

                            </div>
                            <a href="#"><img src="./img/icon_trash.svg" alt=""></a>
                        </div>
                        <!-------- 下半卡片  -------->
                        <div class="outerwrap">
                            <!-- 商品圖 -->
                            <div class="itemcard">
                                <a href="#">
                                    <img src="./img_prod_thumbnail/<?= $obj['prod_thumbnail'] ?>" alt="">
                                </a>
                            </div>
                            <!-------- 雷達圖  -------->
                            <div class="card_radar">
                                <div id="chart1"></div>
                            </div>
                            <!-------- 右邊icon  -------->
                            <div class="icon_wrap">
                                <a href="#" class="compare">
                                    <img src="./img/icon_saved.svg" alt="">
                                    <span class="display_title_2">加入喜好清單</span>
                                </a>
                                <a href="#" class="shopping-cart">
                                    <img src="./img/icon_shopping-cart.svg" alt="">
                                    <span class="display_title_2">加入購物車</span>
                                </a>
                            </div>
                        </div>
                    </li>
            <?php
                }
            }
            ?>
            <button class="fixed_left_arrow_area">
                <i class="fas fa-chevron-right"></i>
            </button>
            <button class="fixed_right_arrow_area">
                <i class="fas fa-chevron-left"></i>
            </button>


        </div>

    </div>

    <!-- 在這裡結束網頁撰寫 ----------------------->



    <!-- FT : Footer ----------------------------------------------->

    <footer class="footer d-flex">

        <!-- LOGO -------------------------------->
        <a class="ft_logo" href="#">
            <img src="img/logo-png.png" alt="">
        </a>

        <!-- ft_box_link ---------------------------->
        <div class="ft_box">

            <div class="d-flex ft_box_top">

                <!-- footer_link 品牌專區 -->
                <p class="col ft_tt">
                    <a href="#">品牌專區</a>
                </p>

                <!-- footer_link 商品分類 -->
                <p class="col ft_tt">
                    <a href="#">商品分類</a>
                </p>

                <!-- footer_link 智慧專欄 -->
                <p class="col ft_tt">
                    <a href="#">智慧專欄</a>
                </p>

                <!-- footer_link 聯絡客服 -->
                <p class="col ft_tt">
                    <a href="#">聯絡客服</a>
                </p>

                <!-- footer_link 會員資料 -->
                <p class="col ft_tt">
                    <a href="#">會員資料</a>
                </p>
            </div>

            <div class="ft_box_bot">
                © copy right by Tech it
            </div>

        </div>

        <!-- ft_mobile_copy_right -->
        <div class="ft_mb_copy_right d-lg-none">
            <p>© copy right by Tech it</p>
        </div>

    </footer>


    <!-- btn_toTop --------------------------------------------->

    <button class="btn_toTop btn">
        <p>TOP</p>
    </button>


    <!-- JQ ----------------------------------->
    <script>
        // btn_toTop ----------------------------------
        $(".btn_toTop").click(function() {
            $("html, body").animate({
                scrollTop: 0
            }, "slow");
            return false;
        });


        // PC : click & hover ----------------------------
        // mouseenter ------------------------------
        $('.t1').mouseenter(function() {
            console.log('navbar mouseenter');
            // pc
            $('.t1').css('border-bottom', '1px solid rgb(11, 141, 173)');
            $('.t1>a').css('color', 'rgb(11, 141, 173)')
        });

        $('.t2').mouseenter(function() {
            console.log('navbar mouseenter');
            // pc
            $('.t2').css('border-bottom', '1px solid rgb(11, 141, 173)');
            $('.t2>a').css('color', 'rgb(11, 141, 173)')
        });

        $('.t3').mouseenter(function() {
            console.log('navbar mouseenter');
            // pc
            $('.t3').css('border-bottom', '1px solid rgb(11, 141, 173)');
            $('.t3>a').css('color', 'rgb(11, 141, 173)')
        });

        $('.t4').mouseenter(function() {
            console.log('navbar mouseenter');
            // pc
            $('.t4').css('border-bottom', '1px solid rgb(11, 141, 173)');
            $('.t4>a').css('color', 'rgb(11, 141, 173)')
        });


        // mouseleave --------------------------------
        $('.t1').mouseleave(function() {
            console.log('navbar mouseleave');
            // pc
            $('.t1').css('border-bottom', '1px solid #707070');
            $('.t1>a').css('color', 'black')
        });

        $('.t2').mouseleave(function() {
            console.log('navbar mouseleave');
            // pc
            $('.t2').css('border-bottom', '1px solid #707070');
            $('.t2>a').css('color', 'black')
        });

        $('.t3').mouseleave(function() {
            console.log('navbar mouseleave');
            // pc
            $('.t3').css('border-bottom', '1px solid #707070');
            $('.t3>a').css('color', 'black')
        });

        $('.t4').mouseleave(function() {
            console.log('navbar mouseleave');
            // pc
            $('.t4').css('border-bottom', '1px solid #707070');
            $('.t4>a').css('color', 'black')
        });


        // toggler 下拉選單 ---------------------------------

        // open/close toggler
        $('.btn_toggler').click(function() {
            console.log('btn_toggler click');
            $('.hd_toggler').removeClass('d-none');
        });

        $('.toggler_box_right').click(function() {
            console.log('.toggler_box_right click');
            $('.hd_toggler').addClass('d-none');
        });

        // tog_lv_0 商品分類
        $('.tog_lv_0').click(function() {
            console.log('商品分類 click');
            if ($('.tog_lv_1').hasClass('d-none')) {
                $('.tog_lv_1').removeClass('d-none');
            } else {
                $('.tog_lv_1').addClass('d-none');
            }

            // 清除項目點選效果
            $('.lv3-1,.lv3-2,.lv3-3,.lv3-4,.lv3-5').addClass('d-none');
            $('.lv2-1>p, .lv2-2>p, .lv2-3>p, .lv2-4>p, .lv2-5>p').css('color', '#5a5a5a');
            // $('.tog_lv_0').css('color', 'white').css('background-color', 'wheat');
        });

        // tog_lv_2
        // tog_lv2-1 廚房家電
        $('.lv2-1').click(function() {
            console.log('廚房家電 click');
            if ($('.lv3-1').hasClass('d-none')) {
                $('.lv3-1').removeClass('d-none');
                $('.lv2-1>p').css('color', 'rgb(11, 141, 173)');
            } else {
                $('.lv3-1').addClass('d-none');
            }

            // 清除項目點選效果
            $('.lv3-2, .lv3-3, .lv3-4, .lv3-5').addClass('d-none');
            $('.lv2-2>p, .lv2-3>p, .lv2-4>p, .lv2-5>p').css('color', '#5a5a5a');
        });

        $('.lv2-2, .lv2-3, .lv2-4, .lv2-5').click(function() {
            console.log('關閉廚房家電 click');
            $('.lv3-1').addClass('d-none');
            $('.lv2-1>p').css('color', '#5a5a5a');
        });

        // tog_lv2-2 居家安全
        $('.lv2-2').click(function() {
            console.log('居家安全 click');
            if ($('.lv3-2').hasClass('d-none')) {
                $('.lv3-2').removeClass('d-none');
                $('.lv2-2>p').css('color', 'rgb(11, 141, 173)');
            } else {
                $('.lv3-2').addClass('d-none');
            }

            // 清除項目點選效果
            $('.lv3-1, .lv3-3, .lv3-4, .lv3-5').addClass('d-none');
            $('.lv2-1>p, .lv2-3>p, .lv2-4>p, .lv2-5>p').css('color', '#5a5a5a');
        });

        $('.lv2-1, .lv2-3, .lv2-4, .lv2-5').click(function() {
            console.log('關閉居家安全 click');
            $('.lv3-2').addClass('d-none');
            $('.lv2-2>p').css('color', '#5a5a5a');
        });

        // tog_lv2-3 居家清潔
        $('.lv2-3').click(function() {
            console.log('居家安全 click');
            if ($('.lv3-3').hasClass('d-none')) {
                $('.lv3-3').removeClass('d-none');
                $('.lv2-3>p').css('color', 'rgb(11, 141, 173)');
            } else {
                $('.lv3-3').addClass('d-none');
            }

            // 清除項目點選效果
            $('.lv3-1, .lv3-2, .lv3-4, .lv3-5').addClass('d-none');
            $('.lv2-1>p, .lv2-2>p, .lv2-4>p, .lv2-5>p').css('color', '#5a5a5a');
        });

        $('.lv2-1, .lv2-2, .lv2-4, .lv2-5').click(function() {
            console.log('關閉居家清潔 click');
            $('.lv3-3').addClass('d-none');
            $('.lv2-3>p').css('color', '#5a5a5a');
        });

        // tog_lv2-4 娛樂與教育
        $('.lv2-4').click(function() {
            console.log('居家安全 click');
            if ($('.lv3-4').hasClass('d-none')) {
                $('.lv3-4').removeClass('d-none');
                $('.lv2-4>p').css('color', 'rgb(11, 141, 173)');
            } else {
                $('.lv3-4').addClass('d-none');
            }

            // 清除項目點選效果
            $('.lv3-1, .lv3-2, .lv3-3, .lv3-5').addClass('d-none');
            $('.lv2-1>p, .lv2-2>p, .lv2-3>p, .lv2-5>p').css('color', '#5a5a5a');
        });

        $('.lv2-1, .lv2-2, .lv2-3, .lv2-5').click(function() {
            console.log('關閉娛樂與教育 click');
            $('.lv3-4').addClass('d-none');
            $('.lv2-4>p').css('color', '#5a5a5a');
        });

        // tog_lv2-5 智能周邊
        $('.lv2-5').click(function() {
            console.log('居家安全 click');
            if ($('.lv3-5').hasClass('d-none')) {
                $('.lv3-5').removeClass('d-none');
                $('.lv2-5>p').css('color', 'rgb(11, 141, 173)');
            } else {
                $('.lv3-5').addClass('d-none');
            }

            // 清除項目點選效果
            $('.lv3-1, .lv3-2, .lv3-3, .lv3-4').addClass('d-none');
            $('.lv2-1>p, .lv2-2>p, .lv2-3>p, .lv2-4>p').css('color', '#5a5a5a');
        });

        $('.lv2-1, .lv2-2, .lv2-3, .lv2-4').click(function() {
            console.log('智能周邊 click');
            $('.lv3-5').addClass('d-none');
            $('.lv2-5>p').css('color', '#5a5a5a');
        });
    </script>



    <!-------- LLink: Radar Chart -------->
    <script src="./JS/04.radar.js" type="text/javascript"></script>

    <!-------- Data: Radar Chart -------->
    <script>
        $(function() {
            $('#chart1').radarChart({
                size: [500, 400],
                step: 1,
                title: '',
                values: {
                    '<?= $strobjA ?>': <?= $scoreA ?>,
                    '<?= $strobjB ?>': <?= $scoreB ?>,
                    '<?= $strobjC ?>': <?= $scoreC ?>,
                    '<?= $strobjD ?>': <?= $scoreD ?>,
                    '<?= $strobjE ?>': <?= $scoreE ?>,
                },
                showAxisLabels: true
            });
        });

        $('.card_radar').click(function() {

            $.post("product_info_api.php", {
                prod_id: 301
            }, function(obj) {
                console.log(obj.result);
                console.log('result');

                $('#chart1').html('');

                $('#chart1').radarChart({
                    size: [500, 400],
                    step: 1,
                    title: '',
                    values: {
                        '<?= $strobjA ?>': 1,
                        '<?= $strobjB ?>': 1,
                        '<?= $strobjC ?>': 1,
                        '<?= $strobjD ?>': 5,
                        '<?= $strobjE ?>': 1,
                    },
                    showAxisLabels: true
                });
            }, "json");




        })
    </script>



    <!-- <script src="JS/04.compare03.js"></script> -->

    <!-- <script>
        var $card = $('.compare_card');
        var lastCard = $(".compare_card_list .compare_card").length - 1;

        console.log(lastCard);

        $('.compare_card').click(function () {
            console.log('click');
            $(this).addClass('activeNow');

            var prependList = function () {
                if ($('.compare_card').hasClass('activeNow')) {
                    console.log('active');
                    var $slicedCard = $('.compare_card').slice(lastCard).removeClass('transformThis activeNow');
                    $('.compare_card_list').prepend($slicedCard);
                    console.log($('.compare_card_list'));
                }
            }
            $('.compare_card > li').last().removeClass('transformPrev').addClass('transformThis').prev().addClass('activeNow');
            setTimeout(function () { prependList(); }, 200);
        });
    </script> -->

    <script>
        //----------------------- 拖曳效果 -----------------------
        var saveDragId_1 = '';
        var saveDragHtml_1 = '';
        var saveDragId_2 = '';
        var saveDragHtml_2 = '';
        var saveDragId_3 = '';
        var saveDragHtml_3 = '';

        $(function() {


            $('ul#left_card').sortable({
                connectWith: "ul#right_card, ul#middle_card, ul#middle2_card",
            });

            $('ul#right_card').sortable({
                connectWith: "ul#left_card",
                update: function(event, ui) {
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
                    console.log('hi');



                    // 規格放進表格
                    $.post("product_info_api.php", {
                        prod_id: ui.item[0].dataset.id
                    }, function(obj) {
                        console.log(obj.result);
                        console.log('result');

                        let prod_info = obj.result[0];

                        $('.box02').eq(1).text(prod_info.prod_name);
                        $('.box02').eq(2).text(prod_info.prod_price);
                        $('.box02').eq(3).text(prod_info.prod_size);
                        $('.box02').eq(4).text(prod_info.prod_type);
                        $('.box02').eq(5).text(prod_info.specific_A);
                        $('.box02').eq(6).text(prod_info.specific_B);
                        $('.box02').eq(7).text(prod_info.specific_C);
                        $('.box02').eq(8).text(prod_info.specific_D);
                        $('.box02').eq(9).text(prod_info.specific_E);
                    }, "json");


                }
            });
            $('ul#middle_card').sortable({
                connectWith: "ul#left_card",
                update: function(event, ui) {
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

                    // 規格放進表格
                    $.post("product_info_api.php", {
                        prod_id: ui.item[0].dataset.id
                    }, function(obj) {
                        console.log(obj.result);
                        console.log('result');

                        let prod_info = obj.result[0];

                        $('.box03').eq(1).text(prod_info.prod_name);
                        $('.box03').eq(2).text(prod_info.prod_price);
                        $('.box03').eq(3).text(prod_info.prod_size);
                    }, "json");
                }
            });
            $('ul#middle2_card').sortable({
                connectWith: "ul#left_card",
                update: function(event, ui) {
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



                    // 規格放進表格
                    $.post("product_info_api.php", {
                        prod_id: ui.item[0].dataset.id
                    }, function(obj) {
                        console.log(obj.result);
                        console.log('result');

                        let prod_info = obj.result[0];

                        $('.box04').eq(1).text(prod_info.prod_name);
                        $('.box04').eq(2).text(prod_info.prod_price);
                        $('.box04').eq(3).text(prod_info.prod_size);
                    }, "json");
                }
            });

            $("#left_card, #right_card, #middle2_card, #middle_card").disableSelection();

        });



        // ------------------------ 雷達卡片 ------------------------
        $('.fixed_left_arrow_area').hide();
        // 卡片收合
        $('.fixed_right_arrow_area').click(function(event) {
            event.preventDefault();
            setTimeout(function() {
                $('.fixed_right_arrow_area').hide();
            }, 600);
            // $(this).delay(10000).hide();
            setTimeout(function() {
                $('.fixed_left_arrow_area').show();
            }, 600);
            $('.card_wrap').css('width', '30px');
        })
        // 卡片展開
        $('.fixed_left_arrow_area').click(function(event) {
            event.preventDefault();
            $(this).hide();
            $('.fixed_right_arrow_area').show();
            $('.card_wrap').css('width', '70vw');

        })
    </script>

</body>

</html>