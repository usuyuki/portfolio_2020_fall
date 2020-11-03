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
    <title>うすゆきポートフォリオ</title>


    <!-- bootstrap4読み込み -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link ref="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/destyle.css">
    <?php wp_head(); ?>
    <style>
        header {
            height: 100%
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
            max-width: 100%;
            max-height: 100%;
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
            <nav class="row navbar navbar-dark bg-white d-flex 	d-block d-md-none">
                <div class="side-logo  fit-img " style="width:70%;">
                    <a href="/" class="text-decoration-none">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo/portfolio_title20201027.png">
                    </a>
                </div>


                <div>
                    <!-- Default dropleft button -->
                    <div class="btn-group dropleft bg-black">
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

                                    <img
                                        src="<?php echo get_template_directory_uri(); ?>/img/logo/account_box-24px.svg">

                                </div>
                                <div class="">
                                    <a class="dropdown-item mt-2" href="/aboutme">

                                        AboutMe
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
                            <div class="dropdown-divider"></div>
                            <a style="font-size:0.9em;" class="dropdown-item"
                                href="https://twitter.com/usuyuki26">Twitter</a>
                            <a style="font-size:0.9em;" class="dropdown-item"
                                href="https://github.com/Usuyuki">GitHub</a>
                        </div>
                    </div>


                </div>
            </nav>


            <div class="row">