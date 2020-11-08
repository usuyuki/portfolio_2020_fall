<?php get_header(); ?>
<!-- ここからメインコンテンツ -->
<div class="col-md-10 " style="min-height:100vh">




    <!-- 日付順でソート -->
    <div class="mx-auto pt-4">
        <div class="latest-coffee text-white  mb-4 d-flex flex-wrap justify-content-around ">
            <?php
                $args = array(
                    'post_type' => 'link',
                    'numberposts' => -1,
                    'post_status' => 'publish',
                    'orderby' => 'meta_value',
                    'meta_key' => 'link_date', //ACFのフィールド名
                    'order' => 'DESC'
                );

                $posts = get_posts($args);

                if ( $posts ):
                    foreach( $posts as $post ): setup_postdata( $post );
                 
            ?>






            <!-- 詳細情報 -->
            <div class="text-center mx-4" style="">

                <!-- <div class="text-decoration-none text-white row text-right"> -->

                <div class=" mx-auto">
                    <p class="text-info"><?php the_field ( "link_kind" ); ?></p>

                </div>
                <div class="">

                    <a href=" <?php the_field ( "link_link" ); ?>" class="btn-circle-border-simple" role="button"
                        target="_blank">
                        <p><?php the_field ( "link_logo" ); ?>
                            <?php the_title(); ?></p>
                    </a>
                </div>

                <div class="row mx-auto">

                    <p><?php the_excerpt(); ?></p>
                </div>





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