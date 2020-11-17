<?php get_header(); ?>
<!-- ここからメインコンテンツ -->
<div class="col-md-10" style="min-height:100vh;">
    <div class="main text-white">
        <div class="post mx-auto">
            <h1 class="h1 mx-auto text-center"><?php the_title() ?></h1>

            <section class="mx-auto">
                <article class=" text-white PostFont">
                    <?php the_content(); ?>
                </article>

            </section>
        </div>
    </div>
</div><!-- メインのcolのdiv閉じ -->



<?php get_sidebar(); ?>



<?php get_footer(); ?>