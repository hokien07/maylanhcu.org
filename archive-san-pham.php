<?php get_header(); ?>

<?php get_sidebar(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

    <!--BEGIN: PRODUCT THUMBNAIL-->
    <div class="hinh_san_pham">
        <?php the_post_thumbnail( 'medium' ); ?>
    </div>
    <!--END: PRODUCT THUMBNAIL-->

    <!--BEGIN: PRODUCT INFO-->
    <div class="thong_tin_san_pham">
        <h1><?php the_title(); ?></h1> <!--Tiêu đề sản phẩm-->
        <p class="gia_san_pham">
            <?php echo "<strong>Giá:</strong> ". get_post_meta( $post->ID, 'wpcf-product-price', true ); ?>
        </p><!--Giá sản phẩm-->

        <p class="tinh_trang">
            <?php echo "<strong>Tình trạng:</strong> ";
            $product_status = get_post_meta( $post->ID, 'wpcf-product-status', true );
            if ($product_status == conhang) {
                echo "Còn hàng";
            } else { echo "Hết hàng"; }
            ?>
        </p><!--Tình trạng sản phẩm-->

        <div class="mo_ta_ngan">
            <?php echo get_post_meta( $post->ID, 'wpcf-product-description', true ); ?>
        </div><!--Mô tả sản phẩm-->

        <a href="#" class="order-button">Đặt hàng</a>
    </div>
    <!--BEGIN: PRODUCT INFO-->

    <div class="Thong_tin_chi_tiet">
        <?php the_content(); ?>
    </div>

    <?php endwhile; endif; ?>
    <?php get_footer(); ?>
