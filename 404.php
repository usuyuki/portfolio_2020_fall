<?php get_header(); ?>
<!-- ここからメインコンテンツ -->
<div class="col-md-10" style="min-height:100vh;">
    <div class="main text-white text-center  ">
        <div class="ekimeihyou text-center mt-3 mb-5">
            <img class="my-3 mt-5 p-3 mx-auto rounded" src="<?php echo get_template_directory_uri(); ?>/img/bg/404.jpg"
                usemap="#underworld">
            <map name="underworld">
                <area shape="poly"
                    coords="50,360,81,381,83,417,136,415,170,404,205,383,257,404,294,400,291,365,288,333,335,318,338,353,325,404,362,410,347,383,361,339,369,327,397,330,443,333,482,293,466,273,409,273,381,295,355,279,329,270,321,271,299,292,281,305,263,317,246,300,222,294,208,286,182,306,173,307,146,302,103,305,116,320,121,328,108,354,90,359,98,368"
                    href="#" alt="" />
            </map>

        </div>
        <div class="row text-center">
            <p class="h1 m-3  mx-auto">404 Not Found</p>
            <p class="h5 m-4  mx-auto">指定されたページは存在しません。</p>
        </div>


    </div>
</div><!-- メインのcolのdiv閉じ -->



<?php get_sidebar(); ?>



<?php get_footer(); ?>