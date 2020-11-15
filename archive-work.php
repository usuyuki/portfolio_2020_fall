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
    <!-- 說明コーナー -->
    <div class="text-white text-center mb-5">
        <p>ここは私が制作したものを紹介するページです。</p>
        <p>各制作物の画像または名前をクリックすると個別ページに飛びます。</p>
    </div>

    <!-- ジャンル分けコーナー -->
    <div class="">
        <p class="text-center h4 text-white">ジャンル:全ジャンル</p>
    </div>
    <div class="d-flex flex-wrap justify-content-center">
        <a class="btn btn-info mx-2 my-2" href="/work">全ジャンル</a>
        <a class="btn btn-info  mx-2 my-2" href="/category/programing">プログラミング</a>
        <a class="btn btn-info  mx-2 my-2" href="/category/video_editing">動画編集</a>
        <a class="btn btn-info  mx-2 my-2" href="/category/design">デザイン</a>
    </div>


    <!-- ドラフトコーナー ここから-->
    <div class="mt-5">
        <p class="text-center h4 text-white">--進行中の制作物--</p>
    </div>
    <div class="mx-auto  text-white  mb-4 row">
        <?php
                       $args = array(
                        'post_type' => 'work',
                        'numberposts' => -1,
                        'post_status' => 'draft',
                        'orderby' => 'meta_value',
                        'meta_key' => 'work_start', //ACFのフィールド名
                        'order' => 'DESC'
                    );
            
                $posts = get_posts($args);

                if ( $posts):
                    foreach( $posts as $post ): setup_postdata( $post );
                        
                            
                 
            ?>

        <div class=" border border-warning mx-5 my-4 p-1 rounded row " style="min-width:70%;">

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
                            // 画像なかったとき用
                            echo  wp_get_attachment_image( 126, $size );
                            
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


                        <div class="col-12 col-md-3 detail  my-1 mx-auto my-mt-auto">
                            <p class="text-info">使用予定技術:<?php the_field ( "work_tech" ); ?></p>

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
    <!-- ドラフトコーナー ここまで-->


    <div class="mt-3">
        <p class="text-center h4 text-white">--制作物--</p>
    </div>
    <!-- 完了制作物 スマホ・PC -->
    <div class="mx-auto  text-white  mb-4 row">
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

                if ( $posts):
                    foreach( $posts as $post ): setup_postdata( $post );
                        
                            
                 
            ?>
        <!-- 個別表示 -->
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
                            // 画像なかったとき用
                            echo  wp_get_attachment_image( 126, $size );
                            
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




</div><!-- メインのcolのdiv閉じ -->



<?php get_sidebar(); ?>



<?php get_footer(); ?>