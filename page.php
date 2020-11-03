<?php get_header(); ?>
<!-- ここからメインコンテンツ -->
<div class="col-10" style="min-height:100vh;">
    <div class="for-page text-white text-center">
        <?php 
            if ( have_posts() ) :
            while ( have_posts() ) : the_post();
        ?>
        <div class="col text-left mt-4 h2">
            <h1><?php the_title(); ?></h1>
        </div>
        <article class="col text-left">
            <p><?php the_content(); ?></p>
        </article>
        <?php 
            endwhile;
        endif;
        ?>
    </div>
</div><!-- メインのcolのdiv閉じ -->



<?php get_sidebar(); ?>



<?php get_footer(); ?>