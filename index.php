<?php get_header(); ?>
<!-- ここからメインコンテンツ -->
<div class="col-md-10" style="min-height:100vh;">
    <div class="main text-white text-center bg-img ">

        <div class="row text-center " style="padding-top:10%;">
            <p class="h1 m-3  mx-auto">This is Usuyuki Portfolio</p>
        </div>

        <div class="row d-flex justify-content-around" style="padding-top:20%;">
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