<!-- php link -------------------------------------------->
<?php require_once 'db.inc.php' ?>

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
    <link rel="stylesheet" href="./CSS/product_list.css">


    <!-- JS link ----------------------------------->
    <script src="JS/1.header.js"></script>


    <style>
        * {
            /* outline: 1px solid red; */
        }
    </style>


</head>

<body class="bg-light">

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
                            <img src="./img/icon_compare-list.svg" alt="">
                            <!-- <svg xmlns="./img/icon_compare-list.svg" ></svg> -->
                        </a>
                    </div>

                    <!-- 喜好清單 -->
                    <div class="hd_icon_link i2">
                        <a href="#"><img src="./img/icon_saved.svg" alt=""></a>
                    </div>

                    <!-- 會員登入 / 註冊 -->
                    <div class="hd_icon_link i3">
                        <a href="#"><img src="./img/icon_member.svg" alt=""></a>
                    </div>

                    <!-- 購物車 -->
                    <div class="hd_icon_link i4">
                        <a href="#"><img src="./img/icon_shopping-cart.svg" alt=""></a>
                    </div>

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
                    註冊 / 登入
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

        <!--桌機內容開始-->
        <div class="web_part">
            <!--兩大分頁-->
            <div class="lgbtn">
                <div class="btn-group btn-group-lg col-12" style="padding: 0;">
                    <a href="./product_list_01_smart.php" class="btn btn-light active" aria-current="page">智慧家電</a>
                    <a href="./product_list_02_ai.php" class="btn btn-light">Ai 機器人</a>
                </div>
            </div>


            <div class="lgtitle">
                <h4>熱門商品</h4>
            </div>

            <!-- 路徑 -->
            <div class="pathnfilter">
                <!--path 需套php？-->
                <div class="path">
                    <a href="#">廚房家電</a>
                    >
                    <a href="#">電子鍋</a>
                    >
                    <a href="#">Panasonic</a>
                    <!-- 看要不要用麵包屑，但樣式就會跟視覺版不太一樣 -->
                    <!-- <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item"><a href="#">Library</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                      </nav> -->
                </div>



                <!--filter 需套php？-->
                <div class="filter">
                    <div class="dropdown">
                        <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            最新上架
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">熱門程度</a>
                            <a class="dropdown-item" href="#">低價優先</a>
                            <a class="dropdown-item" href="#">評價最高</a>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <!--sidebar-->
            <div class="mainpart">

                <!-- 右側篩選 -->
                <div class="l_part col-2">
                    <h3 class="mt-5">篩選</h3>
                    <h5 class="mt-5">
                        依品牌
                    </h5>
                    <div>
                        <input type="checkbox" name="product_name" <label for="c1"><span></span>Apple</label>
                    </div>
                    <div>
                        <input type="checkbox" name="product_name" <label for="c1"><span></span>Amazfit</label>
                    </div>
                    <div>
                        <input type="checkbox" name="product_name" <label for="c1"><span></span>Fitbit</label>
                    </div>
                    <div>
                        <input type="checkbox" name="product_name" <label for="c1"><span></span>Garmin</label>
                    </div>
                    <div>
                        <input type="checkbox" name="product_name" <label for="c1"><span></span>Samsung</label>
                    </div>
                    <div>
                        <input type="checkbox" name="product_name" <label for="c1"><span></span>Toyota</label>
                    </div>

                    <h5 class="mt-5">
                        依金額
                    </h5>
                    <div>
                        <input type="checkbox" name="product_name" <label for="c1"><span></span>低→高</label>
                    </div>
                    <div>
                        <input type="checkbox" name="product_name" <label for="c1"><span></span>高→低</label>
                    </div>
                    <h5 class="mt-5">
                        優惠活動
                    </h5>
                    <div>
                        <input type="checkbox" name="product_name" <label for="c1"><span></span>新→舊</label>
                    </div>
                    <div>
                        <input type="checkbox" name="product_name" <label for="c1"><span></span>舊→新</label>
                    </div>

                </div>


                <!-- 上排分頁籤 -->
                <!--right-part-->
                <div class="r_part col-10">
                    <div class="smbtn col-12">
                        <div class="card text-center">
                            <div class="card-header">

                                <ul class="nav nav-tabs card-header-tabs">

                                    <?php
                                    $sql = "SELECT `cate_id`, `cate_name` FROM `categories` WHERE `parent_id` = 2";
                                    $arr = $pdo->query($sql)->fetchAll();
                                    foreach ($arr as $obj) {
                                    ?>

                                        <li class="nav-item">

                                            <a class="nav-link active" href="product_list_01_smart.php?cate_id=<?= $obj['cate_id'] ?>"><?= $obj['cate_name'] ?></a>

                                        </li>

                                        <!-- <a class="nav-link active" href="#">廚房家電</a> -->
                                    <?php
                                    }
                                    ?>

                                </ul>
                            </div>



                            <!--php套底下類別?-->
                            <div class="card-body">

                                <?php if (isset($_GET['cate_id'])) { ?>

                                    <div class="minibtn">

                                        <?php
                                        $sql = "SELECT `cate_id`, `cate_name` FROM `categories` WHERE `parent_id` = {$_GET['cate_id']}";
                                        $arr1 = $pdo->query($sql)->fetchAll();
                                        foreach ($arr1 as $obj1) {
                                        ?>

                                            <a class="btn btn-light" href="product_list_01_smart.php?cate_id=<?= $_GET['cate_id'] ?>&sub_cate_id=<?= $obj1['cate_id'] ?>"><?= $obj1['cate_name'] ?></a>

                                            <!-- <a href="#" class="btn btn-light">電子鍋</a> -->

                                        <?php } ?>

                                    </div>

                                <?php } ?>

                            </div>




                        </div>
                    </div>


                    <!-- 商品展示連結-->
                    <div class="maincards col-12">
                        <div class="row justify-content-between">

                            <!-- 商品card ------------>

                            <?php if (isset($_GET['sub_cate_id'])) { ?>

                                <?php
                                $sql = "SELECT `id`, `prod_name`, `prod_thumbnail`, `prod_price` 
                                            FROM `products_ver2` 
                                            WHERE `cate_id` = {$_GET['sub_cate_id']} 
                                            LIMIT {$offset}, {$numPerPage}";
                                $stmt = $pdo->query($sql);
                                if ($stmt->rowCount() > 0) {
                                    /**
                                     * 如果查詢結果很多筆
                                     * $stmt->fetchAll()
                                     * 
                                     * 如果查詢只有一筆
                                     * $stmt->fetch()
                                     */
                                    $arr = $stmt->fetchAll();
                                    foreach ($arr as $obj) {
                                ?>

                                        <div class="col-lg-3 col-sm-12">
                                            <div class="card">
                                                <div class="firstline">


                                                    <!-- 商品品牌 -->
                                                    <h4 class="card-title">Panasonic</h4>

                                                    <!-- 加入比較清單 -->
                                                    <a href="product_list_01_smart.php?cate_id=<?= $_GET['cate_id'] ?>&sub_cate_id=<?= $_GET['sub_cate_id'] ?>&prod_id=<?= $obj['prod_id'] ?>" class="compare"><img src="./img/icon_compare-list.svg" alt="">比較</a>

                                                    <!-- 加入購物車 -->
                                                    <a href="#" class="saved"><img src="./img/icon_saved.svg" alt="">加入購物車</a>

                                                </div>

                                                <!-- 商品名稱 -->
                                                <h5 class="card-title">電氣壓力鍋 SR-PG501 </h5>


                                                <!-- 商品照片 -->
                                                <img src="./img/1.jpeg" class="card-img-top" alt="...">

                                                <!-- 免運優惠 -->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="149.945" height="36" viewBox=" 0 0 149.945 36">
                                                    <g id="Group_650" data-name="Group 650" transform="translate(-364.442 -1080)">
                                                        <g id="Group_275" data-name="Group 275">
                                                            <path id="Subtraction_1" data-name="Subtraction 1" d="M-6172.056,39H-6322V3h149.943L-6190.4,21l18.338,18Z" transform="translate(6686.442 1077)" fill="#8b82b2" opacity="0.561" />
                                                            <text id="免運優惠" transform="translate(377.442 1103.857)" fill="#fff" font-size="16" font-family="PingFangHK-Regular, PingFang HK" letter-spacing="0.2em">
                                                                <tspan x="0" y="0">88折</tspan>
                                                            </text>
                                                        </g>
                                                    </g>
                                                </svg>


                                                <div class="card-body">

                                                    <!-- price -->
                                                    <a href="#" class="price">$18,888</a>

                                                    <!-- 加入購物車 -->
                                                    <a href="#" class="joincart">加入購物車</a>
                                                </div>


                                            </div>
                                        </div>

                            <?php
                                    }
                                }
                            }
                            ?>

                            <!-- 商品card ------------>
                            <div class="col-lg-3 col-sm-12">
                                <div class="card">
                                    <div class="firstline">
                                        <h4 class="card-title">Panasonic</h4>
                                        <a href="#" class="compare"><img src="
                                                ./img/icon_compare-list.svg" alt="">比較</a>
                                        <a href="#" class="saved"><img src="./img/icon_saved.svg" alt="">加入購物車</a>
                                    </div>
                                    <h5 class="card-title">電氣壓力鍋 SR-PG501 </h5>
                                    <img src="./img/1.jpeg" class="card-img-top" alt="...">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="149.945" height="36""
                                        viewBox=" 0 0 149.945 36">
                                        <g id="Group_650" data-name="Group 650" transform="translate(-364.442 -1080)">
                                            <g id="Group_275" data-name="Group 275">
                                                <path id="Subtraction_1" data-name="Subtraction 1" d="M-6172.056,39H-6322V3h149.943L-6190.4,21l18.338,18Z" transform="translate(6686.442 1077)" fill="#8b82b2" opacity="0.561" />
                                                <text id="免運優惠" transform="translate(377.442 1103.857)" fill="#fff" font-size="16" font-family="PingFangHK-Regular, PingFang HK" letter-spacing="0.2em">
                                                    <tspan x="0" y="0">88折</tspan>
                                                </text>
                                            </g>
                                        </g>
                                    </svg>
                                    <div class="card-body">
                                        <a href="#" class="price">$18,888</a>
                                        <a href="#" class="joincart">加入購物車</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-12">
                                <div class="card">
                                    <div class="firstline">
                                        <h4 class="card-title">Panasonic</h4>
                                        <a href="#" class="compare"><img src="
                                                ./img/icon_compare-list.svg" alt="">比較</a>
                                        <a href="#" class="saved"><img src="./img/icon_saved.svg" alt="">加入購物車</a>
                                    </div>
                                    <h5 class="card-title">電氣壓力鍋 SR-PG501 </h5>
                                    <img src="./img/1.jpeg" class="card-img-top" alt="...">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="149.945" height="36""
                                        viewBox=" 0 0 149.945 36">
                                        <g id="Group_650" data-name="Group 650" transform="translate(-364.442 -1080)">
                                            <g id="Group_275" data-name="Group 275">
                                                <path id="Subtraction_1" data-name="Subtraction 1" d="M-6172.056,39H-6322V3h149.943L-6190.4,21l18.338,18Z" transform="translate(6686.442 1077)" fill="#8b82b2" opacity="0.561" />
                                                <text id="免運優惠" transform="translate(377.442 1103.857)" fill="#fff" font-size="16" font-family="PingFangHK-Regular, PingFang HK" letter-spacing="0.2em">
                                                    <tspan x="0" y="0">88折</tspan>
                                                </text>
                                            </g>
                                        </g>
                                    </svg>
                                    <div class="card-body">
                                        <a href="#" class="price">$18,888</a>
                                        <a href="#" class="joincart">加入購物車</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-12">
                                <div class="card">
                                    <div class="firstline">
                                        <h4 class="card-title">Panasonic</h4>
                                        <a href="#" class="compare"><img src="
                                                ./img/icon_compare-list.svg" alt="">比較</a>
                                        <a href="#" class="saved"><img src="./img/icon_saved.svg" alt="">加入購物車</a>
                                    </div>
                                    <h5 class="card-title">電氣壓力鍋 SR-PG501 </h5>
                                    <img src="./img/1.jpeg" class="card-img-top" alt="...">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="149.945" height="36""
                                        viewBox=" 0 0 149.945 36">
                                        <g id="Group_650" data-name="Group 650" transform="translate(-364.442 -1080)">
                                            <g id="Group_275" data-name="Group 275">
                                                <path id="Subtraction_1" data-name="Subtraction 1" d="M-6172.056,39H-6322V3h149.943L-6190.4,21l18.338,18Z" transform="translate(6686.442 1077)" fill="#8b82b2" opacity="0.561" />
                                                <text id="免運優惠" transform="translate(377.442 1103.857)" fill="#fff" font-size="16" font-family="PingFangHK-Regular, PingFang HK" letter-spacing="0.2em">
                                                    <tspan x="0" y="0">88折</tspan>
                                                </text>
                                            </g>
                                        </g>
                                    </svg>
                                    <div class="card-body">
                                        <a href="#" class="price">$18,888</a>
                                        <a href="#" class="joincart">加入購物車</a>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- 手機內容開始 -->
        <div class="moblie_part">
            <div class="lgbtn">
                <div class="btn-group btn-group-lg col-12" style="padding: 0;">
                    <a href="./product_list.html" class="btn btn-light active" aria-current="page">智慧家電</a>
                    <a href="./product_list_ai.html" class="btn btn-light">Ai 機器人</a>
                </div>
            </div>
            <div class="lgtitle">
                <h4>熱門商品</h4>
            </div>

            <hr>

            <!--path 需套php？-->
            <div class="path">
                <a href="#">廚房家電</a>
                >
                <a href="#">電子鍋</a>
                >
                <a href="#">Panasonic</a>
                <!-- 看要不要用麵包屑，但樣式就會跟視覺版不太一樣 -->
                <!-- <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item"><a href="#">Library</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                      </nav> -->
            </div>

            <!-- 篩選 -->
            <div class="moblie_filter">
                <div class="head">

                    <button class="m_button">篩選</button>

                    <div class="filter">
                        <div class="dropdown">
                            <button class="btndropdown-toggle dropdown_btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                最新上架
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">熱門程度</a>
                                <a class="dropdown-item" href="#">低價優先</a>
                                <a class="dropdown-item" href="#">評價最高</a>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="s_select">
                    <h6 class="">分類</h6>
                    <div>
                        <label for="c1"> <input type="checkbox" name="product_name">品牌名字(A→Z)</label>
                    </div>
                    <div>
                        <label for="c1"><input type="checkbox" name="product_name"> 家電類別(A→Z)</label>
                    </div>
                    <div>
                        <label for="c1"> <input type="checkbox" name="product_name">優惠活動(新→舊)</label>
                    </div>
                    <div>
                        <label for="c1"><input type="checkbox" name="product_name">優惠活動(舊→新)</label>
                    </div>
                    <h6 class="">排序</h6>
                    <div>
                        <label for="c1"><input type="checkbox" name="product_name">金額(大→小)</label>
                    </div>
                    <div>
                        <label for="c1"> <input type="checkbox" name="product_name">金額(小→大)</label>
                    </div>
                    <div>
                        <label for="c1"><input type="checkbox" name="product_name">上架時間(新→舊)</label>
                    </div>
                    <div>
                        <label for="c1"><input type="checkbox" name="product_name">上架時間(舊→新)</label>
                    </div>
                    <div>
                        <label for="c1"><input type="checkbox" name="product_name">加入時間(新→舊)</label>
                    </div>
                    <div>
                        <label for="c1"><input type="checkbox" name="product_name">加入時間(舊→新)</label>
                    </div>
                    <h6 class="">篩選</h6>
                    <div>
                        <label for="c1"><input type="checkbox" name="product_name" checked="true">只顯示折扣商品</label>
                    </div>
                    <div>
                        <label for="c1">
                            <input type="checkbox" name="product_name">
                            可快速到貨
                        </label>
                    </div>
                </div>

                <div class="m_body">
                    <div class="m_card">
                        <div class=" m_card_head">
                            <h6 class="mb-0">Toyota</h6>
                            <svg xmlns="http://www.w3.org/2000/svg" width="83.3" height="20" viewBox=" 0 0 149.945 36">
                                <g id="Group_650" data-name="Group 650" transform="translate(-364.442 -1080)">
                                    <g id="Group_275" data-name="Group 275">
                                        <path id="Subtraction_1" data-name="Subtraction 1" d="M-6172.056,39H-6322V3h149.943L-6190.4,21l18.338,18Z" transform="translate(6686.442 1077)" fill="#8b82b2" opacity="0.561" />
                                        <text id="免運優惠" transform="translate(377.442 1103.857)" fill="#fff" font-size="16" font-family="PingFangHK-Regular, PingFang HK" letter-spacing="0.2em">
                                            <tspan x="0" y="0">88折</tspan>
                                        </text>
                                    </g>
                                </g>
                            </svg>

                        </div>
                        <div class="card_center">
                            <img src="./img/1.jpeg" alt="">
                            <div class="r_rpart">
                                <a class="m_button2 mr-2"><img src="./img/icon_saved.svg" alt="">
                                    收藏</a>

                                <a class="m_button2 mr-2"><img src="./img/icon_compare-list.svg" alt="">
                                    比較</a>


                                <div class="m_rpart">
                                    <div class="m_price mb-3">$$$$PHP</div>
                                    <button class="m_button1"><img src="./img/icon_shopping-cart.svg" alt="">
                                        加入購物車</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--filter 需套php？-->


        </div>
        <!-- 在這裡結束網頁撰寫 ----------------------->


    </div>
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

        // tog_lv_0

        $('.tog_lv_0').click(function() {
            console.log('商品分類 click');
            $('.tog_lv_1').removeClass('d-none');
            // $('.tog_lv_0').css('color', 'white').css('background-color', 'wheat');
        });

        // tog_lv_2
        // tog_lv2-1 廚房家電
        $('.lv2-1').click(function() {
            console.log('廚房家電 click');
            $('.lv3-1').removeClass('d-none');
            $('.lv2-1>p').css('color', 'rgb(11, 141, 173)');
        });

        $('.lv2-2, .lv2-3, .lv2-4, .lv2-5').click(function() {
            console.log('關閉廚房家電 click');
            $('.lv3-1').addClass('d-none');
            $('.lv2-1>p').css('color', '#5a5a5a');
        });

        // tog_lv2-2 居家安全
        $('.lv2-2').click(function() {
            console.log('居家安全 click');
            $('.lv3-2').removeClass('d-none');
            $('.lv2-2>p').css('color', 'rgb(11, 141, 173)');
        });

        $('.lv2-1, .lv2-3, .lv2-4, .lv2-5').click(function() {
            console.log('關閉居家安全 click');
            $('.lv3-2').addClass('d-none');
            $('.lv2-2>p').css('color', '#5a5a5a');
        });

        // tog_lv2-3 居家清潔
        $('.lv2-3').click(function() {
            console.log('居家清潔 click');
            $('.lv3-3').removeClass('d-none');
            $('.lv2-3>p').css('color', 'rgb(11, 141, 173)');
        });

        $('.lv2-1, .lv2-2, .lv2-4, .lv2-5').click(function() {
            console.log('關閉居家清潔 click');
            $('.lv3-3').addClass('d-none');
            $('.lv2-3>p').css('color', '#5a5a5a');
        });

        // tog_lv2-4 娛樂與教育
        $('.lv2-4').click(function() {
            console.log('娛樂與教育 click');
            $('.lv3-4').removeClass('d-none');
            $('.lv2-4>p').css('color', 'rgb(11, 141, 173)');
        });

        $('.lv2-1, .lv2-2, .lv2-3, .lv2-5').click(function() {
            console.log('關閉娛樂與教育 click');
            $('.lv3-4').addClass('d-none');
            $('.lv2-4>p').css('color', '#5a5a5a');
        });

        // tog_lv2-5 智能周邊
        $('.lv2-5').click(function() {
            console.log('智能周邊 click');
            $('.lv3-5').removeClass('d-none');
            $('.lv2-5>p').css('color', 'rgb(11, 141, 173)');
        });

        $('.lv2-1, .lv2-2, .lv2-3, .lv2-4').click(function() {
            console.log('智能周邊 click');
            $('.lv3-5').addClass('d-none');
            $('.lv2-5>p').css('color', '#5a5a5a');
        });

        //此頁
        $("input,checkbox").click(function() {
            if ($(this).prop("checked")) {
                $(this).css("background-color", "#FA8873")
            } else {
                $(this).css("background-color", "#ffffff")

            }

        })
    </script>

</body>

</html>