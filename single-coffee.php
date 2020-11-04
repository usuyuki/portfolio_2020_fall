<?php get_header(); ?>
<!-- ここからメインコンテンツ -->
<div class="col-md-10 " style="height:100vh;">
    <div class="main text-white">
        <div class="post">
            <h1 class="h1 text-white text-center mt-3"><?php the_title() ?></h1>

            <section>
                <article class=" text-white text-left my-4 mx-auto py-3 pl-1 border-white border" style="width:70%;">
                    <p><?php the_content(); ?></p>
                </article>
                <div class="text-center">
                    <p class="my-2">産地:<?php  the_field ("coffee_country" ); ?></p>

                    <p class="my-2">味の種類:<?php the_field ( "coffee_taste" ); ?></p>
                    <p class="my-2">焙煎:<?php the_field ( "coffee_roast" ); ?></p>
                    <p class="my-2">購入日:<?php the_field ( "coffee_date" ); ?></p>
                    <p class="my-2">購入店:<?php the_field ( "coffee_store" ); ?></p>
                </div>

                <div class="text-center mt-1 fit-img">
                    <!-- 画像 -->
                    <?php 
                        $image = get_field('coffee_img');
                        $size = 'large'; // (thumbnail, medium, large, full or custom size)
                        if( $image ) {
                            echo wp_get_attachment_image( $image, $size );
                        }
              
                    ?>

                </div>


            </section>
        </div>
    </div>
</div><!-- メインのcolのdiv閉じ -->



<?php get_sidebar(); ?>



<?php get_footer(); ?>