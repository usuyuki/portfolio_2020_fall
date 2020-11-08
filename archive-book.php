<?php get_header(); ?>
<!-- ここからメインコンテンツ -->
<div class="col-md-10 ">
    <div class="ekimeihyou text-center mt-3 mb-5">
        <!-- <p class="h1 mx-auto text-center">Hello World</p> -->
        <img src="<?php echo get_template_directory_uri(); ?>/img/station/book.png" usemap="#ImageMap" alt="珈琲ページ">
        <map name="ImageMap">
            <area shape="rect" coords="101,155,307,231" href="/work" alt="" />
            <area shape="rect" coords="104,240,231,274" href="/work" alt="" />
            <area shape="rect" coords="385,155,592,230" href="/coffee" alt="" />
            <area shape="rect" coords="477,241,591,277" href="/coffee" alt="" />
        </map>
    </div>

    <div class="mx-auto pt-4 text-white ">

        <!-- 說明-->
        <div class="text-center mb-4 mx-auto">
            <p class="h5 border-bottom  ">このページについて</p>
            <p class="">このページでは私が読んだ本に感想を添えて掲載しております。読んだ本は記憶の辿れる大学入学以降に限定しました。</p>
        </div>

        <div class="text-center mb-4 mx-auto">
            <p class="h5 border-bottom  ">このページに掲載されている画像について</p>
            <p class="">
                このページではAmazonアソシエイト・プログラムの画像つきリンク生成機能により画像を添付しております。<br>Amazon側が公式機能として提供しているものですので著作権法上の問題は無いと解釈しておりますが、問題が生じた場合は速やかに掲載を取り消します。<br>画像をクリックすると該当するAmazonの購入ページへ遷移します。
            </p>
        </div>



        <!-- 詳細情報 -->
        <div class="row text-decoration-none d-flex flex-column ">
            <?php
                            $args = array(
                                'post_type' => 'book',
                                'numberposts' => -1,
                                'post_status' => 'publish',
                                'orderby' => 'meta_value',
                                'meta_key' => 'book_read', //ACFのフィールド名
                                'order' => 'DESC'
                            );

                            $posts = get_posts($args);

                            if ( $posts ):
                                foreach( $posts as $post ): setup_postdata( $post );
                            
                        ?>

            <div class="book-waku border rounded border-white my-2 mx-auto p-2" style="width:80%;">
                <div class="d-flex flex-wrap">

                    <div class=" pl-md-4 pr-md-0 mx-auto mx-md-0 mt-1 book-img">
                        <!-- アマゾンアソシエイト・プログラムによる本の画像 -->
                        <?php  the_field ("book_img_link" ); ?>
                    </div>
                    <div class="pl-3 pr-4">
                        <p class="h3 border-bottom border-white my-3 my-md-3 text-wrap"><?php the_title(); ?></p>
                        <p>著者:<?php the_field ( "book_writer" ); ?> </p>
                        <p>出版社:<?php the_field ( "book_publisher" ); ?></p>
                        <p>出版日:<?php the_field ( "book_publishdate" ); ?></p>
                        <p>ジャンル:<?php the_field ( "book_kind" ); ?></p>
                    </div>
                </div>
                <div class="row my-1 pl-4">

                    <div class=" mt-4  pl-2 pr-4">
                        <p class="">読了日:<?php the_field ( "book_read" ); ?></p>

                        <p class="text-wrap">感想:<?php the_excerpt(); ?></p>
                        <p class="text-wrap">アクションプラン:<?php the_excerpt(); ?></p>
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