<?php get_header(); ?>

<?php get_sidebar(); ?>
<div class="archive_content">

    <?php
    $temp = $wp_query;
    $wp_query = null;
    $wp_query = new WP_Query();
    $wp_query->query('showposts=100&post_type=san-pham'.'&paged='.$paged);
    $count = 0;

    while ($wp_query->have_posts()) : $wp_query->the_post(); $count++;
    ?>

    <?php //Tạo biến chèn class 'thrid' vào mỗi 3 bài viết.
    if ($count == 3) {
        $p3 = 'thrid';
        $count = 0;
    } else { $p3 = ''; }
    ?>

            <div <?php post_class($sp3); ?>>


                <!--BEGIN: PRODUCT THUMBNAIL-->
                <div class="hinh_san_pham">
                    <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail( 'large' ); ?></a>
                </div>
                <!--END: PRODUCT THUMBNAIL-->

                <!--BEGIN: PRODUCT INFO-->
                <div class="thong_tin_san_pham">
                    <h1><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h1> <!--Tiêu đề sản phẩm-->
                    <p class="gia_san_pham">
                        <?php echo "<strong>Giá bán:</strong> ". get_post_meta( $post->ID, 'wpcf-gia-san-pham', true ) . "<strong> VNĐ</strong>"; ?>
                    </p><!--Giá sản phẩm-->

                    <p class="tinh_trang">
                        <?php echo "<strong>Tình trạng:</strong>";
                        $product_status = get_post_meta( $post->ID, 'wpcf-tinh-trang-san-pham', true );
                        if ($product_status == conhang) {
                            echo " <strong>Còn hàng</strong>";
                        }
                        else {
                            echo " <strong>Hết hàng</strong>";
                        }
                        ?>
                    </p><!--Tình trạng sản phẩm-->

                    <div class="mo_ta_ngan">
                        <?php echo get_post_meta( $post->ID, 'wpcf-mo-ta-ngan-san-pham', true ); ?>
                    </div>
                </div>
             </div>

    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
</div>
<?php get_footer(); ?>
