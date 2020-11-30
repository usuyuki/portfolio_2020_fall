<?php get_header(); ?>
<!-- ここからメインコンテンツ -->
<div class="col-md-10 ">
    <div class="ekimeihyou text-center mt-3 mb-5">
        <!-- <p class="h1 mx-auto text-center">Hello World</p> -->
        <img src="<?php echo get_template_directory_uri(); ?>/img/station/coffee.png" usemap="#ImageMap" alt="珈琲ページ">
        <map name="ImageMap">
            <area shape="rect" coords="101,155,307,231" href="/book" alt="" />
            <area shape="rect" coords="104,240,231,274" href="/book" alt="" />
            <area shape="rect" coords="385,155,592,230" href="/aboutme" alt="" />
            <area shape="rect" coords="477,241,591,277" href="/aboutme" alt="" />
        </map>
    </div>

    <div class="mx-auto pt-4 ">


        <div class="">

            <p class="text-center text-white mb-4 h5">直近で購入した珈琲豆</p>
        </div>


        <!--最近買った豆  -->
        <div class="latest-coffee text-white d-flex mb-4  flex-column">
            <?php
                $args = array(
                    'post_type' => 'coffee',
                    'numberposts' => 1,
                    'post_status' => 'publish',
                    'orderby' => 'meta_value',
                    'meta_key' => 'coffee_date', //ACFのフィールド名
                    'order' => 'DESC'
                );

                $posts = get_posts($args);

                if ( $posts ):
                    foreach( $posts as $post ): setup_postdata( $post );
                 
            ?>


            <!-- 画像 -->
            <div class="mr-3 text-center">
                <a href="<?php echo get_permalink(); ?>">
                    <?php 
                    $image = get_field('coffee_img');
                    $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
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



            <!-- 詳細情報 -->
            <section class="text-decoration-none ">

                <div class="coffee-name">
                    <h2 class="text-decoration-none text-white h4 text-center my-2">
                        <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                </div>
                <div class="coffee-latest-table">


                    <table class="table table-striped text-white text-center table-bordered">
                        <thead>
                            <tr>

                                <th scope="col" class="text-center">産地</th>
                                <th scope="col" class="text-center">味の種類</th>
                                <th scope="col" class="text-center">焙煎</th>
                                <th scope="col" class="text-center">購入店</th>
                                <th scope="col" class="text-center">購入日</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                <td><?php  the_field ("coffee_country" ); ?></td>
                                <td><?php the_field ( "coffee_taste" ); ?></td>
                                <td><?php the_field ( "coffee_roast" ); ?></td>
                                <td><?php the_field ( "coffee_store" ); ?></td>
                                <td><?php the_field ( "coffee_date" ); ?></td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </section>

            <?php 
                endforeach;
            endif;
            ?>


        </div>

    </div>
    <!-- 購入した珈琲豆一覧 -->
    <div class="post border-top border-white">


        <p class="text-white text-center h5 mt-5">これまでに購入した珈琲豆</p>



        <div class="d-flex flex-wrap  justify-content-around ">

            <div class="horizontal_scroll mb-5 mb-md-3" id="scroll_box">
                <?php
            $args = array(
                'post_type' => 'coffee',
                'numberposts' => -1,
                'post_status' => 'publish',
                'orderby' => 'meta_value',
                'meta_key' => 'coffee_date', //ACFのフィールド名
                'order' => 'DESC'
            );

               $posts = get_posts($args);

            if ( $posts ):
                foreach( $posts as $post ): setup_postdata( $post );
                 
            ?>
                <section class="text-white text-decoration-none text-center my-5  px-2" style="flex-basis:30%; ">

                    <div class="">
                        <!-- 画像 -->
                        <a href="<?php echo get_permalink(); ?>">
                            <?php 
                            $image = get_field('coffee_img');
                            $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
                            if( $image ) {
                                echo wp_get_attachment_image( $image, $size );
                            }
                            else{
                                echo  wp_get_attachment_image( 126, $size );
                            }
                        ?>
                        </a>

                    </div>
                    <h2 class="text-decoration-none text-white h5 text-center mt-2 mb-1">
                        <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    <p>産地:<?php  the_field ("coffee_country" ); ?></p>

                    <p>購入日:<?php the_field ( "coffee_date" ); ?></p>

                </section>

                <?php 
                endforeach;
            endif;
            ?>

            </div>



        </div>

    </div>
</div><!-- メインのcolのdiv閉じ -->



<?php get_sidebar(); ?>



<?php get_footer(); ?>