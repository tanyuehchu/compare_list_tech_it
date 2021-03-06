<!-- php link -------------------------------------------->
<?php require_once 'db.inc.php' ?>
<?php session_start() ?>


<!-- html ----------------------------------------------->
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
    <link rel="stylesheet" href="./CSS/product_list_ai.css">



    <!-- JS link ----------------------------------->
    <script src="JS/1.header.js"></script>
    <script src="JS/custom.js"></script>



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

                    <!-- ???????????? -->
                    <div class="hd_title_link t1">
                        <a href="#">????????????</a>
                    </div>

                    <!-- ???????????? -->
                    <div class="hd_title_link t2">
                        <a href="#">????????????</a>
                    </div>

                    <!-- ???????????? -->
                    <div class="hd_title_link t3">
                        <a href="#">????????????</a>
                    </div>

                    <!-- ???????????? -->
                    <div class="hd_title_link t4">
                        <a href="#">????????????</a>
                    </div>

                </div>

                <!-- icon-link --------------------->
                <div class="hd_icon">

                    <!-- ???????????? -->
                    <div class="hd_icon_link i1">
                        <a href="compare.php">
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
                                <g id="??????_2" data-name="?????? 2">
                                    <g id="??????_2-2" data-name="?????? 2">
                                        <line class="cls-1" y1="17.85" x2="37.51" y2="17.85" />
                                        <line class="cls-1" x1="18.83" x2="18.83" y2="37.51" />
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>

                    <!-- ???????????? -->
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
                                <g id="??????_2" data-name="?????? 2">
                                    <g id="??????_2-2" data-name="?????? 2">
                                        <path class="cls-1" d="M34,3.69c-4.13-4.13-10.83-3.25-15,.89-4.13-4.14-10.84-5-15-.89a10.59,10.59,0,0,0,0,15l15,15,15-15A10.57,10.57,0,0,0,34,3.69Z" />
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>

                    <!-- ????????? -->
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
                                <g id="??????_2" data-name="?????? 2">
                                    <g id="??????_2-2" data-name="?????? 2">
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

                    <!-- ???????????? / ?????? -->
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
                                <g id="??????_2" data-name="?????? 2">
                                    <g id="??????_2-2" data-name="?????? 2">
                                        <circle class="cls-1" cx="21.38" cy="9.67" r="8.67" />
                                        <path class="cls-1" d="M1.06,44.4H41.7C40.12,16.83,2.63,16.83,1.06,44.4Z" />
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>

                </div>

                <!-- ???????????? / ???????????? ------------------------->
                <div class="hd_member_state">

                    <a href="#">??????</a>
                    <!-- ?????????????????????"???????????????" -->

                    <!-- ?????????????????????????????????????????????????????? -->
                    ???
                    <!-- ?????????????????????????????????????????????????????? -->

                    <a href="#">??????</a>
                    <!-- ?????????????????????"??????" -->

                </div>

            </div>

            <!-- mobile_nav d-lg-none------------------------------>
            <!-- ??????????????? -->
            <div class="hd_icon_link d-lg-none btn_toggler">
                <img src="./img/icon_menu2_black_24dp.svg" alt="">
            </div>

            <!-- LOGO -->
            <a href="#" class="d-lg-none">
                <div class="hd_logo">
                    <img src="./img/logo-png.png" alt="">
                </div>
            </a>

            <!-- ????????? -->
            <div class="hd_icon_link i4 d-lg-none">
                <a href="#"><img src="./img/icon_shopping-cart.svg" alt=""></a>
            </div>
        </nav>
    </header>

    <!-- ??????????????? -------------------------------------->
    <div class="hd_toggler d-lg-none d-none">
        <div class="toggler_box">

            <!-- icon-link -->
            <div class="tog_icon_box">
                <!-- ?????? / ?????? -->
                <a href="#"></a>
                <div class="tog_icon_link">
                    <img class="tog_icon" src="./img/icon_member.svg" alt="">

                    <div>??????</div>
                    <!-- ?????????????????????"???????????????" -->

                    <!-- ?????????????????????????????????????????????????????? -->
                    ???
                    <!-- ?????????????????????????????????????????????????????? -->

                    <div>??????</div>
                    <!-- ?????????????????????"??????" -->

                </div>
                </a>

                <!-- ???????????? -->
                <a href="follow.php"></a>
                <div class="tog_icon_link">
                    <img class="tog_icon" src="./img/icon_saved.svg" alt="">
                    ????????????
                </div>
                </a>

                <!-- ???????????? -->
                <a href="compare.php"></a>
                <div class="tog_icon_link">
                    <img class="tog_icon" src="./img/icon_compare-list.svg" alt="">
                    ????????????
                </div>
                </a>

            </div>

            <!-- title-link ---------------------->
            <div class="hd_title">

                <!-- ???????????? -->
                <div class="hd_title_link">
                    <a href="#">????????????</a>
                </div>

                <!-- ????????????????????????_level_0 -->
                <div class="hd_title_link tog_lv_0">
                    <a href="#">????????????</a>
                </div>

                <!-- ??????????????????_level_1 ---------------->
                <div class="tog_lv_1 d-none">

                    <!-- ????????????_level_2 -->
                    <div class="tog_lv_2 lv2-1">
                        <p>????????????</p>

                        <!-- ????????????(???????????????)_level_3 -->
                        <div class="tog_lv_3 d-none lv3-1">

                            <?php
                            $sql = "SELECT `cate_id`, `cate_name` FROM `categories` WHERE `parent_id` = 7";
                            $arr = $pdo->query($sql)->fetchAll();
                            foreach ($arr as $obj) {
                            ?>

                                <div class="tog_lv_4">

                                    <a href="product_list_01_smart.php?cate_id=<?= $obj['cate_id'] ?>">
                                        <?= $obj['cate_name'] ?>
                                    </a>

                                </div>

                                <!-- <div class="tog_lv_4">
                                    <a href="#">???????????????</a>
                                </div> -->

                            <?php
                            }
                            ?>

                        </div>

                    </div>

                    <!-- ????????????_level_2 -->
                    <div class="tog_lv_2 lv2-2">
                        <p>????????????</p>

                        <!-- ????????????(???????????????)_level_3 -->
                        <div class="tog_lv_3 d-none lv3-2">


                            <?php
                            $sql = "SELECT `cate_id`, `cate_name` FROM `categories` WHERE `parent_id` = 8";
                            $arr = $pdo->query($sql)->fetchAll();
                            foreach ($arr as $obj) {
                            ?>

                                <div class="tog_lv_4">

                                    <a href="product_list_01_smart.php?cate_id=<?= $obj['cate_id'] ?>">
                                        <?= $obj['cate_name'] ?>
                                    </a>

                                </div>

                            <?php
                            }
                            ?>

                        </div>

                    </div>

                    <!-- ????????????_level_2 -->
                    <div class="tog_lv_2 lv2-3">
                        <p>????????????</p>

                        <!-- ????????????(???????????????)_level_3 -->
                        <div class="tog_lv_3 d-none lv3-3">

                            <?php
                            $sql = "SELECT `cate_id`, `cate_name` FROM `categories` WHERE `parent_id` = 9";
                            $arr = $pdo->query($sql)->fetchAll();
                            foreach ($arr as $obj) {
                            ?>

                                <div class="tog_lv_4">

                                    <a href="product_list_01_smart.php?cate_id=<?= $obj['cate_id'] ?>">
                                        <?= $obj['cate_name'] ?>
                                    </a>

                                </div>

                            <?php
                            }
                            ?>

                            <!-- <div class="tog_lv_4">
                                <a href="#">???????????????</a>
                            </div> -->


                        </div>

                    </div>

                    <!-- ???????????????_level_2 -->
                    <div class="tog_lv_2 lv2-4">
                        <p>???????????????</p>

                        <!-- ????????????(???????????????)_level_3 -->
                        <div class="tog_lv_3 d-none lv3-4">


                            <?php
                            $sql = "SELECT `cate_id`, `cate_name` FROM `categories` WHERE `parent_id` = 10";
                            $arr = $pdo->query($sql)->fetchAll();
                            foreach ($arr as $obj) {
                            ?>

                                <div class="tog_lv_4">

                                    <a href="product_list_01_smart.php?cate_id=<?= $obj['cate_id'] ?>">
                                        <?= $obj['cate_name'] ?>
                                    </a>

                                </div>

                            <?php
                            }
                            ?>


                            <!-- <div class="tog_lv_4">
                                <a href="#">???????????????</a>
                            </div> -->

                            <!-- <div class="tog_lv_4">
                                <a href="#">???????????????</a>
                            </div> -->

                        </div>
                    </div>

                    <!-- ????????????_level_2 -->
                    <div class="tog_lv_2 lv2-5">
                        <p>????????????</p>

                        <!-- ????????????(???????????????)_level_3 -->
                        <div class="tog_lv_3 d-none lv3-5">

                            <?php
                            $sql = "SELECT `cate_id`, `cate_name` FROM `categories` WHERE `parent_id` = 11";
                            $arr = $pdo->query($sql)->fetchAll();
                            foreach ($arr as $obj) {
                            ?>

                                <div class="tog_lv_4">

                                    <a href="product_list_01_smart.php?cate_id=<?= $obj['cate_id'] ?>">
                                        <?= $obj['cate_name'] ?>
                                    </a>

                                </div>

                            <?php
                            }
                            ?>


                        </div>

                    </div>

                </div>

                <!-- AI?????????????????????_level_0 -->
                <div class="hd_title_link  tog_lv_0_ai">
                    <a href="#">AI?????????</a>
                </div>

                <!-- ??????????????????_level_1 ---------------->
                <div class="tog_lv_1_ai d-none" style="
                    margin: 5px 0 0px 30px;
                    display: flex;
                            flex-direction: column;text-align: left;letter-spacing: 0.3rem;font-size: 1rem;
                            font-weight: 400;
                            color: #5a5a5a; ">

                    <?php
                    $sql = "SELECT `cate_id`, `cate_name` FROM `categories` WHERE `parent_id` = 1";
                    $arr = $pdo->query($sql)->fetchAll();
                    foreach ($arr as $obj) {
                    ?>

                        <div class="tog_lv_2_ai lv2-1" style="margin-bottom: 20px;">

                            <a href=" product_list_01_smart.php?cate_id=<?= $obj['cate_id'] ?>" style="color: #5a5a5a; text-decoration: none;">
                                <?= $obj['cate_name'] ?>
                            </a>

                        </div>

                        <!-- <div class="tog_lv_4">
                                    <a href="#">???????????????</a>
                                </div> -->

                    <?php
                    }
                    ?>

                </div>

                <!-- ???????????? -->
                <div class="hd_title_link">
                    <a href="#">????????????</a>
                </div>

                <!-- ???????????? -->
                <div class="hd_title_link">
                    <a href="#">????????????</a>
                </div>

            </div>

        </div>

        <div class="toggler_box_right"></div>
    </div>



    <!-- ????????????????????????????????? ------------------->
    <!-- WP : wrap -->
    <!-- ????????? ???????????????wrap?????????(in 0.body.css) -->
    <div class="wrap">

        <!--??????????????????-->
        <div class="web_part">
            <!--????????????-->
            <div class="lgbtn">
                <div class="btn-group btn-group-lg col-12" style="padding: 0;">
                    <a href="./product_list_01_smart.php" class="btn btn-light" aria-current="page">????????????</a>
                    <a href="./product_list_02_ai.php" class="btn btn-light active">Ai ?????????</a>
                </div>
            </div>

            <!-- title : ???????????? -->
            <div class="lgtitle">
                <h4>????????????</h4>
            </div>

            <!-- ?????? -->
            <div class="pathnfilter">
                <!--path ??????php???-->
                <div class="path">
                    <a href="#">????????????</a>
                    >
                    <a href="#">?????????</a>
                    >
                    <a href="#">Panasonic</a>
                    <!-- ?????????????????????????????????????????????????????????????????? -->
                    <!-- <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item"><a href="#">Library</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                      </nav> -->
                </div>



                <!--filter ??????php???-->
                <div class="filter">
                    <div class="dropdown">
                        <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ????????????
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">????????????</a>
                            <a class="dropdown-item" href="#">????????????</a>
                            <a class="dropdown-item" href="#">????????????</a>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <!--sidebar-->
            <div class="mainpart">

                <!-- ???????????? -->
                <div class="l_part col-2">
                    <h3 class="mt-5">??????</h3>
                    <h5 class="mt-5">
                        ?????????
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
                        ?????????
                    </h5>
                    <div>
                        <input type="checkbox" name="product_name" <label for="c1"><span></span>?????????</label>
                    </div>
                    <div>
                        <input type="checkbox" name="product_name" <label for="c1"><span></span>?????????</label>
                    </div>
                    <h5 class="mt-5">
                        ????????????
                    </h5>
                    <div>
                        <input type="checkbox" name="product_name" <label for="c1"><span></span>?????????</label>
                    </div>
                    <div>
                        <input type="checkbox" name="product_name" <label for="c1"><span></span>?????????</label>
                    </div>

                </div>



                <!--right-part-->
                <div class="r_part col-10">

                    <!-- ??????????????? -->
                    <div class="smbtn col-12">
                        <div class="card text-center">

                            <!--php : ??????????????? ------------------------>
                            <div class="card-header">

                                <ul class="nav nav-tabs card-header-tabs">

                                    <?php
                                    $sql = "SELECT `cate_id`, `cate_name` FROM `categories` WHERE `parent_id` = 0";
                                    $arr = $pdo->query($sql)->fetchAll();
                                    foreach ($arr as $obj) {
                                    ?>

                                        <li class="nav-item">

                                            <a class="nav-link active" href="product_list_01_smart.php?cate_id=<?= $obj['cate_id'] ?>"><?= $obj['cate_name'] ?></a>

                                        </li>

                                        <!-- <a class="nav-link active" href="#">????????????</a> -->
                                    <?php
                                    }
                                    ?>

                                </ul>
                            </div>


                            <!--php : ??????????????????????????? ----------------------->
                            <div class="card-body">

                                <?php if (isset($_GET['cate_id'])) { ?>

                                    <div class="minibtn">

                                        <?php
                                        $sql = "SELECT `cate_id`, `cate_name` FROM `categories` WHERE `parent_id` = {$_GET['cate_id']}";
                                        $arr1 = $pdo->query($sql)->fetchAll();
                                        foreach ($arr1 as $obj1) {
                                        ?>

                                            <a class="btn btn-light" href="product_list_01_smart.php?cate_id=<?= $_GET['cate_id'] ?>&sub_cate_id=<?= $obj1['cate_id'] ?>"><?= $obj1['cate_name'] ?></a>

                                            <!-- <a href="#" class="btn btn-light">?????????</a> -->

                                        <?php } ?>

                                    </div>

                                <?php } ?>

                            </div>


                        </div>
                    </div>


                    <!-- ??????????????????-->
                    <div class="maincards col-12">

                        <?php if (isset($_GET['sub_cate_id'])) { ?>

                            <div class="row justify-content-between">

                                <?php
                                $sql = "SELECT * FROM `products` 
                                        WHERE `cate_id` = {$_GET['sub_cate_id']} ";

                                $stmt = $pdo->query($sql);
                                if ($stmt->rowCount() > 0) {
                                    /**
                                     * ???????????????????????????
                                     * $stmt->fetchAll()
                                     * 
                                     * ????????????????????????
                                     * $stmt->fetch()
                                     */
                                    $arr = $stmt->fetchAll();
                                    foreach ($arr as $obj) {
                                ?>

                                        <!-- ??????card ------------>
                                        <div class="col-lg-3 col-sm-12">
                                            <div class="card">

                                                <div class="firstline">
                                                    <h4 class="card-title">Panasonic</h4>

                                                    <button class="compare" data-prod-id="<?= $obj['prod_id'] ?>" alt="">??????</button>

                                                    <button class="saved" data-prod-id="<?= $obj['prod_id'] ?>" data-prod-name="<?= $obj['prod_name'] ?>" data-prod-thumbnail="<?= $obj['prod_thumbnail'] ?>" data-prod-price="<?= $obj['prod_price'] ?>"><img src="./img/icon_saved.svg" alt="">????????????</button>
                                                </div>

                                                <!-- php : ???????????? -->
                                                <h5 class="card-title"><?= $obj['prod_name'] ?></h5>

                                                <!-- php : ???????????? -->
                                                <img src="./img_prod_thumbnail/<?= $obj['prod_thumbnail'] ?>" class="card-img-top" alt="...">

                                                <!-- ???????????? -->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="149.945" height="36" viewBox=" 0 0 149.945 36">
                                                    <g id="Group_650" data-name="Group 650" transform="translate(-364.442 -1080)">
                                                        <g id="Group_275" data-name="Group 275">
                                                            <path id="Subtraction_1" data-name="Subtraction 1" d="M-6172.056,39H-6322V3h149.943L-6190.4,21l18.338,18Z" transform="translate(6686.442 1077)" fill="#8b82b2" opacity="0.561" />
                                                            <text id="????????????" transform="translate(377.442 1103.857)" fill="#fff" font-size="16" font-family="PingFangHK-Regular, PingFang HK" letter-spacing="0.2em">
                                                                <tspan x="0" y="0">88???</tspan>
                                                            </text>
                                                        </g>
                                                    </g>
                                                </svg>

                                                <div class="card-body">

                                                    <!-- php : ?????? -->
                                                    <p class="price">$<?= $obj['prod_price'] ?></p>

                                                    <!-- ??????????????? -->
                                                    <button class="joincart" data-prod-id="<?= $obj['prod_id'] ?>" data-prod-name="<?= $obj['prod_name'] ?>" data-prod-thumbnail="<?= $obj['prod_thumbnail'] ?>" data-prod-price="<?= $obj['prod_price'] ?>">
                                                        ???????????????</button>
                                                </div>


                                            </div>
                                        </div>

                            <?php
                                    }
                                }
                            }
                            ?>

                            <!-- ??????card -->
                            <!-- <div class="col-lg-3 col-sm-12">
                                <div class="card">
                                    <div class="firstline">
                                        <h4 class="card-title">Panasonic</h4>
                                        <a href="#" class="compare"><img src="
                                                ./img/icon_compare-list.svg" alt="">??????</a>
                                        <a href="#" class="saved"><img src="./img/icon_saved.svg" alt="">???????????????</a>
                                    </div>
                                    <h5 class="card-title">??????????????? SR-PG501 </h5>
                                    <img src="./img/1.jpeg" class="card-img-top" alt="...">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="149.945" height="36""
                                        viewBox=" 0 0 149.945 36">
                                        <g id="Group_650" data-name="Group 650" transform="translate(-364.442 -1080)">
                                            <g id="Group_275" data-name="Group 275">
                                                <path id="Subtraction_1" data-name="Subtraction 1" d="M-6172.056,39H-6322V3h149.943L-6190.4,21l18.338,18Z" transform="translate(6686.442 1077)" fill="#8b82b2" opacity="0.561" />
                                                <text id="????????????" transform="translate(377.442 1103.857)" fill="#fff" font-size="16" font-family="PingFangHK-Regular, PingFang HK" letter-spacing="0.2em">
                                                    <tspan x="0" y="0">88???</tspan>
                                                </text>
                                            </g>
                                        </g>
                                    </svg>
                                    <div class="card-body">
                                        <a href="#" class="price">$18,888</a>
                                        <a href="#" class="joincart">???????????????</a>
                                    </div>
                                </div>
                            </div> -->


                            </div>


                    </div>


                </div>
            </div>
        </div>


        <!-- ?????????????????? -->
        <div class="moblie_part">

            <!--????????????-->
            <div class="lgbtn">
                <div class="btn-group btn-group-lg col-12" style="padding: 0;">
                    <a href="./product_list_01_smart.php" class="btn btn-light" aria-current="page">????????????</a>
                    <a href="./product_list_02_ai.php" class="btn btn-light active">Ai ?????????</a>
                </div>
            </div>

            <!-- title : ???????????? -->
            <div class="lgtitle">
                <h4>????????????</h4>
            </div>

            <hr>

            <!--path ??????php???-->
            <div class="path">
                <a href="#">????????????</a>
                >
                <a href="#">?????????</a>
                >
                <a href="#">Panasonic</a>
                <!-- ?????????????????????????????????????????????????????????????????? -->
                <!-- <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item"><a href="#">Library</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                      </nav> -->
            </div>


            <div class="moblie_filter">

                <!-- ??????+?????? -->
                <div class="head">

                    <!-- ???????????? ----------------------------->
                    <button class="m_button">??????</button>

                    <!-- ???????????? -->
                    <div class="filter">
                        <div class="dropdown">
                            <button class="btndropdown-toggle dropdown_btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ????????????
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">????????????</a>
                                <a class="dropdown-item" href="#">????????????</a>
                                <a class="dropdown-item" href="#">????????????</a>
                            </div>
                        </div>
                    </div>


                </div>

                <!-- ??????????????????-->
                <div class="m_body">

                    <?php if (isset($_GET['sub_cate_id'])) { ?>

                        <?php
                        $sql = "SELECT * FROM `products` 
                                        WHERE `cate_id` = {$_GET['sub_cate_id']} ";

                        $stmt = $pdo->query($sql);
                        if ($stmt->rowCount() > 0) {
                            /**
                             * ???????????????????????????
                             * $stmt->fetchAll()
                             * 
                             * ????????????????????????
                             * $stmt->fetch()
                             */
                            $arr = $stmt->fetchAll();
                            foreach ($arr as $obj) {
                        ?>

                                <div class="m_card">


                                    <div class=" m_card_head">

                                        <!-- php : ???????????? -->
                                        <h6 class="mb-0"><?= $obj['prod_name'] ?></h6>

                                        <!-- ???????????? -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="83.3" height="20" viewBox=" 0 0 149.945 36">
                                            <g id="Group_650" data-name="Group 650" transform="translate(-364.442 -1080)">
                                                <g id="Group_275" data-name="Group 275">
                                                    <path id="Subtraction_1" data-name="Subtraction 1" d="M-6172.056,39H-6322V3h149.943L-6190.4,21l18.338,18Z" transform="translate(6686.442 1077)" fill="#8b82b2" opacity="0.561" />
                                                    <text id="????????????" transform="translate(377.442 1103.857)" fill="#fff" font-size="16" font-family="PingFangHK-Regular, PingFang HK" letter-spacing="0.2em">
                                                        <tspan x="0" y="0">88???</tspan>
                                                    </text>
                                                </g>
                                            </g>
                                        </svg>

                                    </div>

                                    <div class="card_center">

                                        <!-- php : ???????????? -->
                                        <img src="./img_prod_thumbnail/<?= $obj['prod_thumbnail'] ?>" alt="">


                                        <div class="r_rpart">

                                            <!-- php : ?????????????????? -->
                                            <div class="m_button2 mr-2" data-prod-id="<?= $obj['prod_id'] ?>" alt="">
                                                ??????</div>

                                            <!-- php : ?????????????????? -->
                                            <div class="m_button2 mr-2" data-prod-id="<?= $obj['prod_id'] ?>" data-prod-name="<?= $obj['prod_name'] ?>" data-prod-thumbnail="<?= $obj['prod_thumbnail'] ?>" data-prod-price="<?= $obj['prod_price'] ?>"><img src="./img/icon_compare-list.svg" alt="">
                                                ??????</div>


                                            <div class="m_rpart">

                                                <!-- php : price -->
                                                <div class="m_price mb-3">$<?= $obj['prod_price'] ?></div>

                                                <!-- php : ??????????????? -->
                                                <button class="m_button1" data-prod-id="<?= $obj['prod_id'] ?>" data-prod-name="<?= $obj['prod_name'] ?>" data-prod-thumbnail="<?= $obj['prod_thumbnail'] ?>" data-prod-price="<?= $obj['prod_price'] ?>"><img src="./img/icon_shopping-cart.svg" alt="">
                                                    ???????????????</button>
                                            </div>


                                        </div>
                                    </div>
                                </div>

                    <?php
                            }
                        }
                    }
                    ?>
                </div>

            </div>
            <!--filter ??????php???-->


        </div>


        <!-- ??????????????????????????? ----------------------->
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

                <!-- footer_link ???????????? -->
                <p class="col ft_tt">
                    <a href="#">????????????</a>
                </p>

                <!-- footer_link ???????????? -->
                <p class="col ft_tt">
                    <a href="#">????????????</a>
                </p>

                <!-- footer_link ???????????? -->
                <p class="col ft_tt">
                    <a href="#">????????????</a>
                </p>

                <!-- footer_link ???????????? -->
                <p class="col ft_tt">
                    <a href="#">????????????</a>
                </p>

                <!-- footer_link ???????????? -->
                <p class="col ft_tt">
                    <a href="#">????????????</a>
                </p>
            </div>

            <div class="ft_box_bot">
                ?? copy right by Tech it
            </div>

        </div>

        <!-- ft_mobile_copy_right -->
        <div class="ft_mb_copy_right d-lg-none">
            <p>?? copy right by Tech it</p>
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


        // toggler ???????????? ---------------------------------

        // open/close toggler
        $('.btn_toggler').click(function() {
            console.log('btn_toggler click');
            $('.hd_toggler').removeClass('d-none');
        });

        $('.toggler_box_right').click(function() {
            console.log('.toggler_box_right click');
            $('.hd_toggler').addClass('d-none');
        });

        // tog_lv_0 ???????????? : ????????????
        $('.tog_lv_0').click(function() {
            console.log('???????????? click');
            if ($('.tog_lv_1').hasClass('d-none')) {
                $('.tog_lv_1').removeClass('d-none');
            } else {
                $('.tog_lv_1').addClass('d-none');
            }

            // ????????????????????????
            $('.lv3-1,.lv3-2,.lv3-3,.lv3-4,.lv3-5').addClass('d-none');
            $('.lv2-1>p, .lv2-2>p, .lv2-3>p, .lv2-4>p, .lv2-5>p').css('color', '#5a5a5a');
            // $('.tog_lv_0').css('color', 'white').css('background-color', 'wheat');
        });

        // tog_lv_0 ???????????? : AI?????????
        $('.tog_lv_0_ai').click(function() {
            console.log('???????????? click');
            if ($('.tog_lv_1_ai').hasClass('d-none')) {
                $('.tog_lv_1_ai').removeClass('d-none');
            } else {
                $('.tog_lv_1_ai').addClass('d-none');
            }

            // ????????????????????????
            // $('.lv3-1,.lv3-2,.lv3-3,.lv3-4,.lv3-5').addClass('d-none');
            // $('.lv2-1>p, .lv2-2>p, .lv2-3>p, .lv2-4>p, .lv2-5>p').css('color', '#5a5a5a');
            // $('.tog_lv_0').css('color', 'white').css('background-color', 'wheat');
        });

        // tog_lv_2
        // tog_lv2-1 ????????????
        $('.lv2-1').click(function() {
            console.log('???????????? click');
            if ($('.lv3-1').hasClass('d-none')) {
                $('.lv3-1').removeClass('d-none');
                $('.lv2-1>p').css('color', 'rgb(11, 141, 173)');
            } else {
                $('.lv3-1').addClass('d-none');
            }

            // ????????????????????????
            $('.lv3-2, .lv3-3, .lv3-4, .lv3-5').addClass('d-none');
            $('.lv2-2>p, .lv2-3>p, .lv2-4>p, .lv2-5>p').css('color', '#5a5a5a');
        });

        $('.lv2-2, .lv2-3, .lv2-4, .lv2-5').click(function() {
            console.log('?????????????????? click');
            $('.lv3-1').addClass('d-none');
            $('.lv2-1>p').css('color', '#5a5a5a');
        });

        // tog_lv2-2 ????????????
        $('.lv2-2').click(function() {
            console.log('???????????? click');
            if ($('.lv3-2').hasClass('d-none')) {
                $('.lv3-2').removeClass('d-none');
                $('.lv2-2>p').css('color', 'rgb(11, 141, 173)');
            } else {
                $('.lv3-2').addClass('d-none');
            }

            // ????????????????????????
            $('.lv3-1, .lv3-3, .lv3-4, .lv3-5').addClass('d-none');
            $('.lv2-1>p, .lv2-3>p, .lv2-4>p, .lv2-5>p').css('color', '#5a5a5a');
        });

        $('.lv2-1, .lv2-3, .lv2-4, .lv2-5').click(function() {
            console.log('?????????????????? click');
            $('.lv3-2').addClass('d-none');
            $('.lv2-2>p').css('color', '#5a5a5a');
        });

        // tog_lv2-3 ????????????
        $('.lv2-3').click(function() {
            console.log('???????????? click');
            if ($('.lv3-3').hasClass('d-none')) {
                $('.lv3-3').removeClass('d-none');
                $('.lv2-3>p').css('color', 'rgb(11, 141, 173)');
            } else {
                $('.lv3-3').addClass('d-none');
            }

            // ????????????????????????
            $('.lv3-1, .lv3-2, .lv3-4, .lv3-5').addClass('d-none');
            $('.lv2-1>p, .lv2-2>p, .lv2-4>p, .lv2-5>p').css('color', '#5a5a5a');
        });

        $('.lv2-1, .lv2-2, .lv2-4, .lv2-5').click(function() {
            console.log('?????????????????? click');
            $('.lv3-3').addClass('d-none');
            $('.lv2-3>p').css('color', '#5a5a5a');
        });

        // tog_lv2-4 ???????????????
        $('.lv2-4').click(function() {
            console.log('???????????? click');
            if ($('.lv3-4').hasClass('d-none')) {
                $('.lv3-4').removeClass('d-none');
                $('.lv2-4>p').css('color', 'rgb(11, 141, 173)');
            } else {
                $('.lv3-4').addClass('d-none');
            }

            // ????????????????????????
            $('.lv3-1, .lv3-2, .lv3-3, .lv3-5').addClass('d-none');
            $('.lv2-1>p, .lv2-2>p, .lv2-3>p, .lv2-5>p').css('color', '#5a5a5a');
        });

        $('.lv2-1, .lv2-2, .lv2-3, .lv2-5').click(function() {
            console.log('????????????????????? click');
            $('.lv3-4').addClass('d-none');
            $('.lv2-4>p').css('color', '#5a5a5a');
        });

        // tog_lv2-5 ????????????
        $('.lv2-5').click(function() {
            console.log('???????????? click');
            if ($('.lv3-5').hasClass('d-none')) {
                $('.lv3-5').removeClass('d-none');
                $('.lv2-5>p').css('color', 'rgb(11, 141, 173)');
            } else {
                $('.lv3-5').addClass('d-none');
            }

            // ????????????????????????
            $('.lv3-1, .lv3-2, .lv3-3, .lv3-4').addClass('d-none');
            $('.lv2-1>p, .lv2-2>p, .lv2-3>p, .lv2-4>p').css('color', '#5a5a5a');
        });

        $('.lv2-1, .lv2-2, .lv2-3, .lv2-4').click(function() {
            console.log('???????????? click');
            $('.lv3-5').addClass('d-none');
            $('.lv2-5>p').css('color', '#5a5a5a');
        });
    </script>

</body>

</html>