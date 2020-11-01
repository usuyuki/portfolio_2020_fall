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
                <div class="">
                    <!-- 画像 -->
                    <?php 
            $image = get_field('coffee_img');
            $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
            if( $image ) {
                echo wp_get_attachment_image( $image, $size );
            }
            ?>

                </div>

                <p>産地:<?php  the_field ("coffee_country" ); ?></p>

                <p>味の種類:<?php the_field ( "coffee_taste" ); ?></p>
                <p>焙煎:<?php the_field ( "coffee_roast" ); ?></p>
                <p>購入日:<?php the_field ( "coffee_date" ); ?></p>
                <p>購入店:<?php the_field ( "coffee_store" ); ?></p>

            </section>
        </div>
    </div>
</div><!-- メインのcolのdiv閉じ -->



<?php get_sidebar(); ?>



<?php get_footer(); ?>