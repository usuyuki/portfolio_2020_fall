<?php get_header(); ?>
<!-- ここからメインコンテンツ -->
<div class="col-md-10">
    <div class="ekimeihyou text-center mt-3 mb-5">
        <!-- <p class="h1 mx-auto text-center">Hello World</p> -->
        <img src="<?php echo get_template_directory_uri(); ?>/img/station/work.png" alt="制作物ページ">
    </div>

    <!-- 日付順でソート -->
    <div class="mx-auto pt-4">



        <!-- PC用 -->
        <div class=" text-white  mb-4 d-none d-md-block">
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
                <div class="col-3">
                    <div class="work-img d-none d-md-block">
                        <a href="<?php echo get_permalink(); ?>">
                            <?php 
                        $image = get_field('work_img');
                        $size = 'thumbnail_medium'; // (thumbnail, medium, large, full or custom size)
                        if( $image ) {
                            echo wp_get_attachment_image( $image, $size );
                        }
                        else{
                            if( get_field('work-video') ){
                                echo $embed_code = wp_oembed_get( get_field('work-video') ); 

                            }
                            
                        }
                        ?>
                        </a>
                    </div>

                </div>



                <!-- 詳細情報 -->
                <div class="col-9">
                    <div class="text-decoration-none text-white row text-right">
                        <a class="h4 " href="<?php echo get_permalink(); ?>">
                            "<?php the_title(); ?>"</a>
                    </div>
                    <div class="row">
                        <div class="detail mx-5 my-auto">
                            <p class="text-warning">公開・デプロイ日:<?php the_field ( "work_start" ); ?></p>

                        </div>
                        <div class="detail mx-5 my-auto ">
                            <p class="text-info">使用技術:<?php the_field ( "work_tech" ); ?></p>

                        </div>
                        <div class="work-kind ml-5 ">
                            <p class="p-2 border border-primary rounded-pill "><?php the_field ( "work_kind" ); ?>
                            </p>
                        </div>
                    </div>

                    <div class=" row mt-3 pl-0 pr-5">

                        <p><?php the_excerpt(); ?></p>
                    </div>


                </div>
            </div>
            <?php 
                endforeach;
            endif;
            ?>


        </div>


        <!-- スマホ用 -->
        <div class=" text-white  mb-4 d-block d-md-none">
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

            <div class="row border mx-5 my-4 p-1 rounded d-flex ">

                <!-- 画像 -->
                <div class="">
                    <div class="work-img m-2">
                        <a href="<?php echo get_permalink(); ?>">
                            <?php 
                        $image = get_field('work_img');
                        $size = 'thumbnail_medium'; // (thumbnail, medium, large, full or custom size)
                        if( $image ) {
                            echo wp_get_attachment_image( $image, $size );
                        }
                        else{
                            if( get_field('work-video') ){
                                echo $embed_code = wp_oembed_get( get_field('work-video') ); 

                            }
                            
                        }
                        ?>
                        </a>
                    </div>

                </div>



                <!-- 詳細情報 -->
                <div class="">
                    <div class="d-flex flex-column p-2">
                        <div class="text-decoration-none text-white text-center mx-auto">
                            <a class="h5 text-center " href="<?php echo get_permalink(); ?>">
                                "<?php the_title(); ?>"</a>
                        </div>
                        <div class="detail mx-auto my-auto">
                            <p class="text-warning">公開・デプロイ日:<?php the_field ( "work_start" ); ?></p>

                        </div>
                        <div class="detail  my-auto mx-auto">
                            <p class="text-info">使用技術:<?php the_field ( "work_tech" ); ?></p>

                        </div>
                        <div class="work-kind  mx-auto">
                            <p class="p-2 border border-primary rounded "><?php the_field ( "work_kind" ); ?>
                            </p>
                        </div>
                        <div class="mt-3 pl-0  text-center mx-center">

                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>



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