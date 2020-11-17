<?php get_header(); ?>
<!-- ここからメインコンテンツ -->
<div class="col-md-10">
    <div class="main text-white">
        <p class="h1 mx-auto text-center">アーカイブページ</p>
    </div>
    <div class="col text-white">
        <?php if ( have_posts() ): ?>
        <?php while ( have_posts() ) : the_post(); ?>
        <!--ループ-->
        <article class="article__item border border-primary mx-auto my-4 p-3">
            <a href="<?php the_permalink(); ?>">
                <h1 class="ttl"><?php the_title(); ?></h1>
                <time class="date"><?php the_time(); ?></time>
            </a>
        </article>
        <!--ループここまで-->
        <?php endwhile; ?>
        <!--ページ送り-->
        <nav class="pagenav">
            <?php
        global $wp_query;
        $big = 999999999; // need an unlikely integer
        echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $wp_query->max_num_pages
        ) );
    ?>
        </nav>
        <!--ページ送りここまで-->
        <?php else: ?>
        <!--投稿が見つからない-->
        <p>投稿はまだありません。</p>

        <?php endif; ?>

    </div>
</div><!-- メインのcolのdiv閉じ -->



<?php get_sidebar(); ?>



<?php get_footer(); ?>