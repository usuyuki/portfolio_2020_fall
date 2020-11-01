<?php get_header(); ?>
<!-- ここからメインコンテンツ -->
<div class="col-10">
    <div class="main text-white text-center  ">
        <div class="row">
            <img class="my-3 " src="<?php echo get_template_directory_uri(); ?>/img/bg/coffee_bg.jpg" width="1000px"
                height="562px">
            <p class="h1 mt-4 ml-4 text-center">This is Usuyuki Portfolio</p>
        </div>

        <div class="row d-flex justify-content-around">
            <div class="my-3" style="flex-basis:40%;">

                <img
                    src="https://raw.githubusercontent.com/Usuyuki/Usuyuki/master/profile-summary-card-output/solarized/0-profile-details.svg">
            </div>
            <div class="my-3" style="flex-basis:40%;">
                <img
                    src="https://raw.githubusercontent.com/Usuyuki/Usuyuki/master/profile-summary-card-output/solarized/3-stats.svg">
            </div>
            <div class="my-3" style="flex-basis:40%;">
                <img
                    src="https://raw.githubusercontent.com/Usuyuki/Usuyuki/master/profile-summary-card-output/solarized/2-most-commit-language.svg">
            </div>
            <div class="my-3" style="flex-basis:40%;">
                <img
                    src="https://raw.githubusercontent.com/Usuyuki/Usuyuki/master/profile-summary-card-output/solarized/1-repos-per-language.svg">
            </div>
        </div>
    </div>
</div><!-- メインのcolのdiv閉じ -->



<?php get_sidebar(); ?>



<?php get_footer(); ?>