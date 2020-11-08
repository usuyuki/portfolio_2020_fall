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

    <div class="row mx-auto pt-4 text-white ">

        <!-- 說明-->
        <div class="text-center mb-4 mx-auto">
            <p class="h5 border-bottom  ">このページについて</p>
            <p class="">このページでは私が読んだ本に感想を添えて掲載しております。読んだ本は大学入学以降に限定しました。</p>
        </div>

        <div class="text-center mb-4 mx-auto">
            <p class="h5 border-bottom  ">このページに掲載されている画像について</p>
            <p class="">このページではAmazonアソシエイト・プログラムの画像つきリンク生成機能により画像を添付しております。<br>画像をクリックすると該当するAmazonの購入ページへ遷移します。</p>
        </div>



        <!-- 詳細情報 -->
        <div class="row text-decoration-none  " style="max-width:100%;">


            <div class="">


                <table
                    class="table table-striped text-white text-left table-bordered my-auto mx-auto  table-responsive-md">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">表紙</th>
                            <th scope="col" class="text-center">書名</th>
                            <th scope="col" class="text-center">著者</th>
                            <th scope="col" class="text-center">出版社</th>
                            <th scope="col" class="text-center">発売日</th>
                            <th scope="col" class="text-center">読了日</th>
                            <th scope="col" class="text-center">ジャンル</th>
                            <th scope="col" class="text-center">感想</th>
                        </tr>
                    </thead>
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
                    <tbody>
                        <tr>
                            <td> <?php  the_field ("book_img_link" ); ?></td>
                            <td><?php the_title(); ?></td>
                            <td><?php the_field ( "book_writer" ); ?> </td>
                            <td><?php the_field ( "book_publisher" ); ?></td>
                            <td><?php the_field ( "book_publishdate" ); ?></td>
                            <td><?php the_field ( "book_read" ); ?></td>
                            <td><?php the_field ( "book_kind" ); ?></td>
                            <td><?php the_excerpt(); ?></td>
                        </tr>

                    </tbody>
                    <?php 
                endforeach;
            endif;
            ?>
                </table>
            </div>

        </div>




    </div>
</div><!-- メインのcolのdiv閉じ -->



<?php get_sidebar(); ?>



<?php get_footer(); ?>