<?php get_header(); ?>
<section class="content">
        <div class="inner-content">
                <a href=""><h2>máy Lạnh Cũ</h2></a>
            </div>
            <?php

                $query = new WP_Query( array(
                'post_type' => 'san-pham',          // name of post type.
                'tax_query' => array(
                array(
                'taxonomy' => 'danh-muc-san-pham',   // taxonomy name
                'field' => 'term_id',           // term_id, slug or name
                'terms' => 3,                  // term id, term slug or term name
                )
                )
                ) );
            ?>

            <?php
                while ( $query->have_posts() ) : $query->the_post();
                ?>
            <div <?php post_class(); ?> class="post">

                <div class="product">
                    <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('large'); ?></a>
                    <h4><?php the_title(); ?></h4>

                    <p class="tinh_trang_index">
                        <?php echo "<strong>Tình trạng:</strong>";
                        $product_status = get_post_meta( $post->ID, 'wpcf-tinh-trang-san-pham', true );
                        if ($product_status == conhang) {
                            echo "Còn hàng";
                        }
                        else {
                            echo "Hết hàng";
                        }
                        ?>
                    </p><!--Tình trạng sản phẩm-->


                    <h5><?php echo "<strong>Giá: </strong>" . get_post_meta( $post->ID, 'wpcf-gia-san-pham', true ); ?> <strong>VNĐ</strong></h5>

                    <div class="chi_tiet">
                        <div class="text"><a href="<?php the_permalink(); ?>">Chi Tiết</a></div>
                    </div>

                </div>

            </div>
            <?php endwhile; wp_reset_query();?>

            <div class="content-widget">
                <h2>tủ Lạnh Cũ</h2>
                <?php

                $query = new WP_Query( array(
                    'post_type' => 'san-pham',          // name of post type.
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'danh-muc-san-pham',   // taxonomy name
                            'field' => 'term_id',           // term_id, slug or name
                            'terms' => 4,                  // term id, term slug or term name
                        )
                    )
                ) );
                ?>

                <?php
                while ( $query->have_posts() ) : $query->the_post();
                    ?>
                    <div <?php post_class(); ?> class="post-<?php the_ID(); ?>">

                        <div class="product">
                            <a href="<?php the_permalink(); ?>">  <?php the_post_thumbnail('large'); ?></a>
                            <h4><?php the_title(); ?></h4>

                            <p class="tinh_trang_index">
                                <?php echo "<strong>Tình trạng:</strong>";
                                $product_status = get_post_meta( $post->ID, 'wpcf-tinh-trang-san-pham', true );
                                if ($product_status == conhang) {
                                    echo "Còn hàng";
                                }
                                else {
                                    echo "Hết hàng";
                                }
                                ?>
                            </p><!--Tình trạng sản phẩm-->


                            <h5><?php echo "<strong>Giá: </strong>" . get_post_meta( $post->ID, 'wpcf-gia-san-pham', true ); ?> <strong>VNĐ</strong></h5>

                            <div class="chi_tiet">
                                <div class="text"><a href="<?php the_permalink(); ?>">Chi Tiết</a></div>
                            </div>

                        </div>

                    </div>
                <?php endwhile; wp_reset_query();?>
            </div>

            <div class="content-widget">
                <h2>Máy Giặt Cũ</h2>
                <?php

                $query = new WP_Query( array(
                    'post_type' => 'san-pham',          // name of post type.
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'danh-muc-san-pham',   // taxonomy name
                            'field' => 'term_id',           // term_id, slug or name
                            'terms' => 5,                  // term id, term slug or term name
                        )
                    )
                ) );
                ?>

                <?php
                while ( $query->have_posts() ) : $query->the_post();
                    ?>
                    <div <?php post_class(); ?> class="post-<?php the_ID(); ?>">

                        <div class="product">
                            <a href="<?php the_permalink(); ?>">  <?php the_post_thumbnail('large'); ?></a>
                            <h4><?php the_title(); ?></h4>

                            <p class="tinh_trang_index">
                                <?php echo "<strong>Tình trạng:  </strong>";
                                $product_status = get_post_meta( $post->ID, 'wpcf-tinh-trang-san-pham', true );
                                if ($product_status == conhang) {
                                    echo "  Còn hàng";
                                }
                                else {
                                    echo "  Hết hàng";
                                }
                                ?>
                            </p><!--Tình trạng sản phẩm-->



                            <h5><?php echo "<strong>Giá: </strong>" . get_post_meta( $post->ID, 'wpcf-gia-san-pham', true ); ?> <strong>VNĐ</strong></h5>

                            <div class="chi_tiet">
                                <div class="text"><a href="<?php the_permalink(); ?>">Chi Tiết</a></div>
                            </div>

                        </div>

                    </div>
                <?php endwhile; wp_reset_query();?>

            </div>
        </div>
    </section>

    <!--end content-->
</section><!--end page-wrap-->

<?php get_footer(); ?>
