<?php require_once 'db.inc.php' ?>
<?php session_start() ?>
<?php
//如果這個階段沒有購物車，就將頁面轉到商品確認頁
if (isset($_SESSION['data_compare'])) {
    foreach ($_SESSION['data_compare'] as $key => $obj);
} else {
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


    <!-- JS link ----------------------------------->
    <script src="JS/1.header.js"></script>



    <!----------------------- 拖曳效果 ----------------------->
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

    <script src="./JS/04.compare02.js"></script>


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
            <h3>商品種類</h3>
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
                    <li><a class="folder_1" href="">掃地機器人</a></li>
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
            <button class="cate_wrap_left_arrow_area">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="cate_wrap_right_arrow_area">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
        <!-------- 快速比較區 (web_only) -------->
        <div class="card_wrap">
            <h3>快速比較<small> (僅提供站內資料)</small></h3>
            <!-- <div id="chart"></div> -->
            <!-- <div class="card_radar">
                <canvas id="radarChart"></canvas>
            </div> -->


            <div class="outerwrap">
                <!-------- 雷達圖 (web_only) -------->
                <!-- <div class="card_radar">
                    <div id="container" class="example-container"></div>
                </div> -->
                <!-------- 小卡 (web_only) -------->
                <div class="itemcard">
                    <div class="top_area">
                        <h4 class="aaaaa">掃地機器人二代 S5 Max(黑)</h4>
                        <!-- <a href="#" class="compare"><img src="./img/icon_trash.svg" alt="">刪除</a> -->
                        <!-- <a href="#" class="saved"><img src="./img/icon_saved.svg" alt="">加入購物車</a> -->
                    </div>
                    <!-- <div class="bottom_area"><a href="#"><img src="./img/item-01.png" alt=""></a>
                    </div> -->
                </div>
            </div>




        </div>

        <!-------- 商品選擇區 -------->
        <div class="select_area_title">
            <h3>01 掃地機器人</h3>
            <p>(您加入比較清單的商品)</p>
        </div>
        <ul class="slider_dots">
            <li class="dots dot1"></li>
            <li class="dots dot2"></li>
            <li class="dots dot3"></li>
        </ul>
        <div class="select_area">
            <div class="img_area">
                <ul class="img_wrap" id="left_card">
                    <li data-id="1.1" data-price='100'><a href=""><img class="img1" src="./img_prod_thumbnail/0301.png" alt=""></a>
                    </li>
                    <li data-id="1.2" data-price='100'><a href=""><img class="img1" src="./img_prod_thumbnail/0305.png" alt=""></a>
                    </li>
                    <li data-id="1.3" data-price='100'><a href=""><img class="img1" src="./img_prod_thumbnail/0307.png" alt=""></a>
                    </li>
                    <!-- <li data-id="1.4"><a href=""><img class="img1" src="img/item-01.png" alt=""></a></li> -->
                    <!-- <li data-id="1.5"><a href=""><img class="img1" src="img/item-02.png" alt=""></a></li>
                    <li data-id="1.6"><a href=""><img class="img1" src="img/item-01.png" alt=""></a></li>
                    <li data-id="1.7"><a href=""><img class="img1" src="img/item-02.png" alt=""></a></li>
                    <li data-id="1.8"><a href=""><img class="img1" src="img/item-01.png" alt=""></a></li> -->
                    <li class="put_svg"><a href="">
                            <img class="img9" src="img/icon_compare-list.svg" alt="">
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37.51 37.51">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: none;

                                            stroke: #929292;
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
                            </svg> -->
                        </a>
                    </li>
                </ul>
            </div>
            <button class="select_left_arrow_area">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="select_right_arrow_area">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>

        <!-------- 比較表格 -------->
        <!-- <div class="compare_table_title">
            <h3 class="mob">快速查看詳細規格</h3>
            <h3 class="web">詳細規格比較</h3>
        </div> -->

        <div class="compare_table">
            <div class="box box01 box_pic">item_pic</div>
            <ul class="box box02 box_pic box_pic1 card" id="right_card" class=""></ul>
            <!-- <div class="box box02 box_pic box_pic1 card" id="right_card" class=""></div> -->
            <ul class="box box03 box_pic box_pic2" id="middle_card"></ul>
            <ul class="box box04 box_pic box_pic3" id="middle2_card"></ul>
            <div class="box box01">item1</div>
            <div class="box box02">value1-1</div>
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
            <div class="box box04 best">value3-9</div>
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


    <!-------- Radar Chart -------->
    <script src="./JS/04.radar.js" type="text/javascript"></script>
</body>

</html>