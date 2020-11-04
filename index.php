<?php get_header(); ?>
<!-- ここからメインコンテンツ -->
<div class="col-md-10" style="min-height:100vh;">
    <div class="main text-white text-center  ">
        <div class="row text-center fit-img">
            <img class="my-3 mt-5 p-3 mx-auto rounded"
                src="<?php echo get_template_directory_uri(); ?>/img/bg/coffee_bg.jpg">

        </div>
        <div class="row text-center">
            <p class="h1 m-3  mx-auto">This is Usuyuki Portfolio</p>
        </div>

        <div class="row d-flex justify-content-around">
            <!-- <div class="my-3" style="flex-basis:40%;">

                <img
                    src="https://raw.githubusercontent.com/Usuyuki/Usuyuki/master/profile-summary-card-output/solarized/0-profile-details.svg">
            </div> -->
            <div class="my-3" style="flex-basis:20%;">
                <img
                    src="https://raw.githubusercontent.com/Usuyuki/Usuyuki/master/profile-summary-card-output/solarized/3-stats.svg">
            </div>
            <div class="my-3" style="flex-basis:20%;">
                <img
                    src="https://raw.githubusercontent.com/Usuyuki/Usuyuki/master/profile-summary-card-output/solarized/2-most-commit-language.svg">
            </div>
            <div class="my-3" style="flex-basis:20%;">
                <img
                    src="https://raw.githubusercontent.com/Usuyuki/Usuyuki/master/profile-summary-card-output/solarized/1-repos-per-language.svg">
            </div>
            <!-- Git-grassうまく画像生成されない -->
            <!-- <div class="my-3" style="flex-basis:20%;">
                <img src="https://grass-graph.moshimo.works/images/Usuyuki.png">

            </div> -->
        </div>
    </div>
</div><!-- メインのcolのdiv閉じ -->



<?php get_sidebar(); ?>



<?php get_footer(); ?>