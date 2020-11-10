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
    <!-- kosugiMaruは通常文で使用 -->
    <link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&display=swap" rel="stylesheet">
    <!-- kosugiはサイドバーで使用 -->
    <link href="https://fonts.googleapis.com/css2?family=Kosugi&display=swap" rel="stylesheet">
    <!-- aboutmeページのタイトルで使用 英語文字のみ対応 -->
    <link href="https://fonts.googleapis.com/css2?family=Goldman:wght@400;700&display=swap" rel="stylesheet">
    <!-- bootstrap4読み込み -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- 初期CSS消す -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/destyle.css">
    <!-- CSS読み込み 通常の記述だとWordPress反映してくれないので少し特殊な書き方 -->
    <link rel="stylesheet"
        href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>"
        type="text/css" />
    <!-- Font Awesome読み込み -->
    <link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" rel="stylesheet">

    <?php wp_head(); ?>


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

                                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo/home-24px.svg">

                                </div>
                                <div class="">
                                    <a class="dropdown-item mt-2" href="/">

                                        ホーム
                                    </a>
                                </div>

                            </div>


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

                                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo/book-24px.svg">

                                </div>
                                <div class="">
                                    <a class="dropdown-item mt-2" href="/book">

                                        読書
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
                            <a style="font-size:0.8em;" class="dropdown-item my-1" href="/aboutme"><i
                                    class="fas fa-user-circle fa-mg"></i>私について</a>
                            <a style="font-size:0.8em;" class="dropdown-item my-1" href="/link"><i
                                    class="fas fa-link fa-mg"></i>リンク集</a>
                            <a style="font-size:0.6em;" class="dropdown-item my-1" href="/privacy-policy">プライバシーポリシー</a>
                            <a style="font-size:0.6em;" class="dropdown-item my-1"
                                href="https://forms.gle/imCx9WurBvjQBA119" target=”_blank”>お問い合わせ(GoogleForm)</a>
                            <div class=" dropdown-divider">
                            </div>
                            <a style="font-size:0.8em;" class="dropdown-item" href="https://twitter.com/usuyuki26"
                                target=”_blank”><i class="fab fa-twitter fa-mg"></i>Twitter</a>
                            <a style="font-size:0.8em;" class="dropdown-item" href="https://github.com/Usuyuki"
                                target=”_blank”><i class="fab fa-github fa-mg"></i>GitHub</a>

                        </div>
                    </div>


                </div>
            </nav>


            <div class="row mt-5  mt-md-0">