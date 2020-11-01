<?php get_header(); ?>
<!-- ここからメインコンテンツ -->
<div class="col-10">
    <div class="main text-white">
        <div class="post">
            <h1 class="h1"><?php the_title() ?></h1>

            <section>
                <article class="h4 text-white">
                    <?php the_content(); ?>
                </article>

            </section>
        </div>
    </div>
</div><!-- メインのcolのdiv閉じ -->



<?php get_sidebar(); ?>



<?php get_footer(); ?>