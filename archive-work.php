<?php get_header(); ?>
<!-- ここからメインコンテンツ -->
<div class="col-10">
    <div class="main text-center mt-3 mb-5">
        <!-- <p class="h1 mx-auto text-center">Hello World</p> -->
        <img src="<?php echo get_template_directory_uri(); ?>/img/station/work.png" alt="制作物ページ">
    </div>

    <!-- 最近買った豆 -->
    <div class="mx-auto pt-4">


        <div class="">

            <p class="h3 text-white">制作</p>
        </div>
        <div class="latest-coffee text-white d-flex mb-4">
            <?php
        $coffee_posts = get_posts('post_type=coffee&posts_per_page=5');
        if ( !empty($coffee_posts) ): ?>

            <?php 
        foreach ( $coffee_posts as $post ):
            setup_postdata($post); ?>


            <!-- 画像 -->
            <div class="mr-3">
                <?php 
            $image = get_field('work_img');
            $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
            if( $image ) {
                echo wp_get_attachment_image( $image, $size );
            }
            ?>

            </div>



            <!-- 詳細情報 -->
            <section class="text-decoration-none ">



            </section>

            <?php endforeach;
        wp_reset_postdata(); ?>

            <?php endif; ?>


        </div>

    </div>
    <!-- 購入した珈琲豆一覧 -->
    <div class="post border-top border-white">


        <!-- <p class="text-white text-center h1">購入した珈琲豆</p> -->



        <div class="d-flex flex-wrap  mt-4">


            <?php 
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                 
            ?>
            <section class="text-white text-decoration-none text-center m-3  " style="flex-basis:30%">

                <div class="">
                    <!-- 画像 -->
                    <?php 
            $image = get_field('work_img');
            $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
            if( $image ) {
                echo wp_get_attachment_image( $image, $size );
            }
            else{
                echo  wp_get_attachment_image( 126, $size );
            }
            ?>

                </div>
                <h2 class="text-decoration-none text-white h5 text-center">
                    <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <p>言語:<?php  the_field ("work_tech" ); ?></p>
                <p>種類:<?php  the_field ("work_kind" ); ?></p>

                <p><?php the_field ( "work_start" ); ?></p>

            </section>

            <?php 
                endwhile;
            endif;
            ?>

        </div>





    </div>
</div><!-- メインのcolのdiv閉じ -->



<?php get_sidebar(); ?>



<?php get_footer(); ?>