<?php get_header(); ?>
<!-- ここからメインコンテンツ -->
<div class="col-10">
    <div class="main text-center mt-3 mb-5">
        <!-- <p class="h1 mx-auto text-center">Hello World</p> -->
        <img src="<?php echo get_template_directory_uri(); ?>/img/station/work.png" alt="制作物ページ">
    </div>

    <!-- 最近買った豆 -->
    <div class="mx-auto pt-4">



        <div class="latest-coffee text-white  mb-4 ">
            <?php
                $args = array(
                    'post_type' => 'work',
                    'numberposts' => -1,
                    'post_status' => 'publish',
                    'orderby' => 'meta_value',
                    'meta_key' => 'work_start', //ACFのフィールド名
                    'order' => 'DESC'
                );

                $posts = get_posts($args);

                if ( $posts ):
                    foreach( $posts as $post ): setup_postdata( $post );
                 
            ?>

            <div class="row border mx-5 my-4 py-4 rounded">

                <!-- 画像 -->
                <div class=" col-3">
                    <?php 
            $image = get_field('work_img');
            $size = 'medium'; // (thumbnail, medium, large, full or custom size)
            if( $image ) {
                echo wp_get_attachment_image( $image, $size );
            }
            ?>

                </div>



                <!-- 詳細情報 -->
                <section class="text-decoration-none col-9">
                    <div class="text-decoration-none text-white row text-right">
                        <a class="h4 " href="<?php echo get_permalink(); ?>">
                            "<?php the_title(); ?>"</a>


                        <div class="detail mx-5 my-auto">
                            <p class="text-warning">公開・デプロイ日<?php the_field ( "work_start" ); ?></p>

                        </div>
                        <div class="detail mx-5 my-auto ">
                            <p class="text-info">使用技術:<?php the_field ( "work_tech" ); ?></p>

                        </div>
                        <div class="work-kind ml-5 ">
                            <p class="p-2 border border-primary rounded-pill "><?php the_field ( "work_kind" ); ?></p>
                        </div>
                    </div>
                    <div class=" mt-3">

                        <p><?php the_excerpt(); ?></p>
                    </div>


                </section>
            </div>
            <?php 
                endforeach;
            endif;
            ?>


        </div>

    </div>

</div><!-- メインのcolのdiv閉じ -->



<?php get_sidebar(); ?>



<?php get_footer(); ?>