<?php get_header(); ?>
<!-- ここからメインコンテンツ -->
<div class="col-md-10" style="min-height:100vh;">

    <div class="ekimeihyou text-center mt-3 mb-5">
        <!-- <p class="h1 mx-auto text-center">Hello World</p> -->
        <img src="<?php echo get_template_directory_uri(); ?>/img/bg/404.jpg" usemap="#ImageMap" alt="珈琲ページ">
        <map name="ImageMap">
            <area shape="circle" coords="813,384,37" href="#" alt="" />
        </map>
    </div>
    <div class="row text-center text-white">
        <p class="h1 m-3  mx-auto">404 Not Found</p>
        <p class="h5 m-4  mx-auto">指定されたページは存在しません。</p>
    </div>



</div><!-- メインのcolのdiv閉じ -->



<?php get_sidebar(); ?>



<?php get_footer(); ?>