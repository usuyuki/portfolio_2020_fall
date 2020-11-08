<?php get_header(); ?>
<!-- ここからメインコンテンツ -->
<div class="col-md-10">
    <div class="ekimeihyou text-center mt-3 mb-5">
        <!-- <p class="h1 mx-auto text-center">Hello World</p> -->
        <img src="<?php echo get_template_directory_uri(); ?>/img/station/work.png" usemap="#ImageMap" alt="制作物ページ">
        <map name="ImageMap">
            <area shape="rect" coords="101,155,307,231" href="/" alt="" />
            <area shape="rect" coords="104,240,231,274" href="/" alt="" />
            <area shape="rect" coords="385,155,592,230" href="/hobby" alt="" />
            <area shape="rect" coords="477,241,591,277" href="/hobby" alt="" />
        </map>
    </div>
    <!-- ジャンル分けコーナー -->
    <div class="">
        <p class="text-center h4 text-white">デザイン</p>
    </div>
    <div class="d-flex flex-wrap justify-content-center">
        <a class="btn btn-info mx-2 my-2" href="/work">全ジャンル</a>
        <a class="btn btn-info  mx-2 my-2" href="/category/programing">プログラミング</a>
        <a class="btn btn-info  mx-2 my-2" href="/category/video_editing">動画編集</a>
        <a class="btn btn-info  mx-2 my-2" href="/category/design">デザイン</a>
    </div>
    <!-- 日付順でソート -->
    <div class="mx-auto pt-4">




        <!-- スマホ・PC -->
        <div class=" text-white  mb-4 row">
            <?php
                $args = array(
                    'category'=>'design',
                    'post_type' => 'work',
                    'numberposts' => -1,
                    'post_status' => 'publish',
                    'orderby' => 'meta_value',
                    'meta_query' => array(
                        'relation' => 'AND',
          array(
            'meta_key' => 'work_start', //ACFのフィールド名
              'meta_value
              ' => "A",
              'meta_compare' => '=',
          ),
          array(
              'meta_key' => 'meta_vlue',
              'meta_value
              ' => "B",
              'meta_compare' => '=',
          ),),
                    'order' => 'DESC'
                );
            
                $posts = get_posts($args);

                if ( $posts ):
                    foreach( $posts as $post ): setup_postdata( $post );
                 
            ?>

            <div class=" border mx-5 my-4 p-1 rounded row " style="min-width:70%">

                <!-- 画像 -->
                <div class="col-12 col-md-4">
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
                <div class="col-12 col-md-8">
                    <div class="d-flex flex-column p-2">
                        <div class="text-decoration-none text-white  mx-auto">
                            <a class="h4 text-center my-2" href="<?php echo get_permalink(); ?>">
                                "<?php the_title(); ?>"</a>
                        </div>
                        <div class="row mt-1">

                            <div class="col-12 col-md-3 detail my-1 mx-auto my-mt-auto">
                                <p class="text-warning">公開・デプロイ日:<?php the_field ( "work_start" ); ?></p>

                            </div>
                            <div class="col-12 col-md-3 detail  my-1 mx-auto my-mt-auto">
                                <p class="text-info">使用技術:<?php the_field ( "work_tech" ); ?></p>

                            </div>
                            <div class="col-12 col-md-3 work-kind  my-1 mx-auto my-mt-auto">
                                <p class="p-2 border border-primary rounded ">
                                    <?php the_field ( "work_kind" ); ?>
                                </p>
                            </div>
                        </div>
                        <div class="mt-4 pl-0  text-left mx-center">

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