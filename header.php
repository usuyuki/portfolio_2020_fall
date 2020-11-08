<!DOCTYPE html>
<html lang="ja">

<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-07RXE7Y9QP"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-07RXE7Y9QP');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- WordPressのjquery読み込ませない -->
    <?php wp_deregister_script('jquery'); ?>
    <!-- googleフォント読み込み -->
    <link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kosugi&display=swap" rel="stylesheet">


    <!-- bootstrap4読み込み -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link ref="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/destyle.css">

    <!-- font awsome読み込み -->
    <link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" rel="stylesheet">

    <?php wp_head(); ?>
    <style>
        header {
            height: 100%
        }

        html,
        body {
            font-family: 'Kosugi Maru', sans-serif;

        }

        .kosugi {
            font-family: 'Kosugi', sans-serif;

        }

        .sidebar_fixed {
            position: fixed;
            top: 0px;
            background-color: #9C776D;
            /* height: 100%; */
            height: 100vh;
            max-height: 100vh;
            /* heightとmax-heightで画面いっぱいかつスクロール固定を実現 */
        }

        .main {
            background-color: black;
        }

        .back-black {
            background-color: black;
        }

        .copyright {
            margin-top: 10%;

        }

        a:hover {

            text-decoration: underline;
            color: white;

        }

        .wrap {
            /* overflow: hidden; */
        }

        .logo-img {
            width: 100%;
            height: auto;
        }

        .work-img img {
            object-fit: contain;
            max-width: 100%;
            max-height: 100%;
            margin: auto 0;
        }



        .work-img iframe {
            object-fit: contain;

            max-width: 100%;
            max-height: 100%;
        }

        .box-hobby {
            background-color: #8d1e47;
            border: 2px dashed #fff;
            border-radius: 8px;
            box-shadow: 0 0 0 4px #8d1e47;
            color: #fff;
            margin: 2em 0;
            padding: 2em;
        }

        .for-page {}

        .for-page h2 {
            font-size: 1.5em;
            font-weight: bold;
            margin: 1% 0;
            border-top: 1px solid white;
        }

        .for-page h3 {
            font-size: 1em;
            font-weight: bold;
            margin: 1% 0;
            border-top: 1px solid white;

        }

        figcaption {
            font-size: 0.5em;
            text-align: center;
        }

        .ekimeihyou img {
            object-fit: contain;
            max-width: 100%;
            max-height: 100%;
        }

        .table-aaa {
            object-fit: contain;
            max-width: 100%;
            max-height: 100%;
        }

        .fit-img img {
            object-fit: contain;
            width: 100%;
            /* height: 100%; */
        }

        .link-btn a {

            text-decoration: none;

            padding: 0.5em;

            text-align: center;
            color: white;
            background: black;
            border: 1px solid white;
            border-radius: 10%;
        }

        .link-btn:hover a {
            background: #DFF68F;
            border: 1px solid #DFF68F;
            color: #343a40;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-circle-border-simple {
            display: inline-block;
            text-decoration: none;
            color: #DFF68F;
            width: 120px;
            height: 120px;
            line-height: 120px;
            border-radius: 50%;
            border: solid 2px #DFF68F;
            text-align: center;
            overflow: hidden;
            font-weight: bold;
            transition: .4s;
        }

        .btn-circle-border-simple:hover {
            text-decoration: none;
            background: white;
            border: solid 2px white;
            color: black;

        }

        .max-percent-img {
            width: 100%;
        }

        .bg-img {
            background-image: url(<?php echo get_template_directory_uri();
            ?>/img/bg/coffee_bg.jpg);
            background-size: cover;
            background-attachment: fixed;
            background-position: center center;
            /* 縦横中央 */

        }
    </style>

</head>

<body>
    <!--
      ようこそソースへ！
    MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
    MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
    MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
    MMMMMMMMMMMMMMMMMMM"8YY<<<<>:::::::::?+<7YT"HMMMMMMMMMMMMMMMMMMMMMMMMM
    MMMMMMMMMMMM83<::::::::::::::::::::::::::::::::::?7TMMMMMMMMMMMMMMMMMM
    MMMMMMMMB3:::::::::::::::::::::::::::::::::::::::::::<?WMMMMMMMMMMMMMM
    MMMMMMB>:::::;::::<++JgggkNNNNNMNNNNNNgggg+J+:::::::::::?MMMMMMMMMMMMM
    MMMMM@::::::::jgMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMNg<:::::::<MMMMMMMMMMMM
    MMMMM>:::::;:JMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM>::::::::::::::?TMMM
    MMMMM<::::::::?HMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM9>::::::::::::::::::TM
    MMMMMI::::::::::::<7TTHWMMMMMMMMMMMMMMMMHHY5C::::::::::::::::::::::::J
    MMMMMb:::;:::;::::::::::::::::::::::::::::::::::::::::::::+MMMm<::::::
    MMMMMN;:::::::::;::::::::::::::::::::::::::::::::::::::::jMMMMMI::::::
    MMMMMMr::::::;::::::::::::::::::::::::::::::::::::::::::;dMMMM#<:::::;
    MMMMMMN<:::;::::::::::::::::::::::::::::::::::::::::::::jMMMM8:::::::+
    MMMMMMMR::::::::;:::::::::::::::::::::::::::::::::::::::<T3<::::::::+M
    MMMMMMMM+;::::;:::::::::::::::::::::::::::::::::::::::::::::::::::+&MM
    MMMMMMMMN<::::::::::::::::::::::::::::::::::::::::::::::::::::::+gMMMM
    MMMMMMMMMN<::::::::::::::::::::::::::::::::::::::::::+aJ+++++gNMMMMMMM
    MMMMMMMBC::::;::;::::::::::::::::::::::::::::::::::::::?7HMMMMMMMMMMMM
    MMMM8<:::::::::::::::::::::::::::::::::::::::::::::::::::::?WMMMMMMMMM
    MMB:::::::j+ge:::::::::::::::::::::::::::::::::::;dNgJ<::::::?HMMMMMMM
    M3:::::jgMMMMMN+::::::::::::::::::::::::::::::::jMMMMMMNx<:::::?MMMMMM
    3::::<dMMMMMMMMMN+::::::::::::::::::::::::::::+MMMMMMMMMMMe:::::dMMMMM
    :::::dMMMMMMMMMMMM5::::::::::::::::::::::::::::?TMMMMMMMMMMc::::jMMMMM
    ::::;dMMMMMMMMMMMr:::::::::::::::::::::::::::::::jMMMMMMMMM3::::jMMMMM
    J:;:::TMMMMMMMMMMMgJ;::::::::::::::::::::::::;<+gMMMMMMMMM6:::::gMMMMM
    Mx:::::<TMMMMMMMMMMMMMNNggJ+++++++<+++++++ggMMMMMMMMMMMB>:::::<dMMMMMM
    MMN+:;:::::?TMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM#9>::::::;+MMMMMMMM
    MMMMNJ:::::::::<?T"MMMMMMMMMMMMMMMMMMMMMMMMMMH85>:::::::::(+MMMMMMMMMM
    MMMMMMMNJ+::::::::::::::::?<+<<17<<<+<::::::::::::::::<++MMMMMMMMMMMMM
    MMMMMMMMMMMNgJ+<:::::::::::::::::::::::::::::::::+++gMMMMMMMMMMMMMMMMM
    MMMMMMMMMMMMMMMMMNNgg&J+J+++::::::::<++++++&ggNMMMMMMMMMMMMMMMMMMMMMMM
    MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
    MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
    MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM -->

    <div class="wrap">
        <div class="container-fluid back-black">


            <!-- スマホ用ヘッダー -->
            <nav class="row navbar navbar-dark bg-white d-flex 	d-block d-md-none fixed-top" style=" ">
                <div class="side-logo  fit-img mx-auto my-auto  " style="width:70%;">
                    <a href="/" class="text-decoration-none ">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo/portfolio_title20201027.png">
                    </a>
                </div>


                <div>
                    <!-- 選択ボタン -->
                    <div class="btn-group dropleft bg-black kosugi  ">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Menu
                        </button>
                        <div class="dropdown-menu">
                            <div class="d-flex my-2">
                                <div class="ml-2">

                                    <img
                                        src="<?php echo get_template_directory_uri(); ?>/img/logo/card_giftcard-24px.svg">

                                </div>
                                <div class="">
                                    <a class="dropdown-item mt-2" href="/work">

                                        制作
                                    </a>
                                </div>

                            </div>

                            <div class="d-flex my-2">
                                <div class="ml-2">

                                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo/loyalty-24px.svg">

                                </div>
                                <div class="">
                                    <a class="dropdown-item mt-2" href="/hobby">

                                        趣味
                                    </a>
                                </div>

                            </div>



                            <div class="d-flex my-2">
                                <div class="ml-2">

                                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo/local_cafe-24px.svg">

                                </div>
                                <div class="">
                                    <a class="dropdown-item mt-2" href="/coffee">

                                        珈琲
                                    </a>
                                </div>

                            </div>

                            <div class="d-flex my-2">
                                <div class="ml-2">

                                    <img
                                        src="<?php echo get_template_directory_uri(); ?>/img/logo/account_box-24px.svg">

                                </div>
                                <div class="">
                                    <a class="dropdown-item mt-2" href="/aboutme">

                                        個人
                                    </a>
                                </div>

                            </div>



                            <div class="dropdown-divider"></div>

                            <div class="d-flex my-2">
                                <div class="ml-2">

                                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo/home-24px.svg">

                                </div>
                                <div class="">
                                    <a class="dropdown-item mt-2" href="/">

                                        ホーム
                                    </a>
                                </div>

                            </div>
                            <a style="font-size:0.6em;" class="dropdown-item" href="/privacy-policy">プライバシーポリシー</a>
                            <a style="font-size:0.6em;" class="dropdown-item" href="/link"><i
                                    class="fas fa-link"></i>リンク集</a>

                            <div class="dropdown-divider"></div>
                            <a style="font-size:0.9em;" class="dropdown-item" href="https://twitter.com/usuyuki26"
                                target=”_blank”>Twitter</a>
                            <a style="font-size:0.9em;" class="dropdown-item" href="https://github.com/Usuyuki"
                                target=”_blank”>GitHub</a>

                        </div>
                    </div>


                </div>
            </nav>


            <div class="row mt-5  mt-md-0">