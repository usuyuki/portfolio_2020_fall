<!DOCTYPE html>
<html lang="ja">

<head>
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
        }
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
            <div class="row">