<?php get_header(); ?>
<!-- ここからメインコンテンツ -->
<div class="col-10" style="min-height:100vh;">
    <div class="main text-white">
        <div class="post">
            <h1 class="h1 text-white text-center mt-3"><?php the_title() ?></h1>

            <section>

                <section class="text-decoration-none mt-3">
                    <div class="text-decoration-none  d-flex mx-auto justify-content-center">


                        <div class="detail mx-3 my-auto">
                            <p class="text-warning">公開・デプロイ日<?php the_field ( "work_start" ); ?></p>

                        </div>
                        <div class="detail mx-3 my-auto ">
                            <p class="text-info">使用技術:<?php the_field ( "work_tech" ); ?></p>

                        </div>
                        <div class="work-kind mx-3 my-auto ">
                            <p class=" text-danger ">種類:<?php the_field ( "work_kind" ); ?></p>
                        </div>
                    </div>
                    <!-- リンクあったら出てくる -->
                    <div class="work-kind mx-3   text-center mt-3">
                        <a href="<?php the_field ( "work_link" ); ?>">
                            <p class="  text-white "><?php the_field ( "work_link" ); ?></p>
                        </a>
                    </div>


                </section>
                <article class=" text-white text-left my-4 mx-auto py-3 px-1 border-white border" style="width:40%;">
                    <p><?php the_content(); ?></p>
                </article>
                <div class="text-center mt-3">
                    <!-- 画像 -->
                    <?php 
                        $image = get_field('work_img');
                        $size = 'large'; // (thumbnail, medium, large, full or custom size)
                        if( $image ) {
                            echo wp_get_attachment_image( $image, $size );
                        }
                        else{
                            if( get_field('work-video') ){
                                echo $embed_code = wp_oembed_get( get_field('work-video') ); 

                            }
                            
                        }
                    ?>

                </div>


            </section>
        </div>
    </div>
</div><!-- メインのcolのdiv閉じ -->



<?php get_sidebar(); ?>



<?php get_footer(); ?>