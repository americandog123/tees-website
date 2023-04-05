<?php get_header(); ?>

<div class="woocommerce-shop-page">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
                    <h1 class="woocommerce-page-title"><?php woocommerce_page_title(); ?></h1>
                <?php endif; ?>

                <?php
                    /**
                     * Hook: woocommerce_before_main_content.
                     *
                     * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
                     * @hooked woocommerce_breadcrumb - 20
                     * @hooked WC_Structured_Data::generate_website_data() - 30
                     */
                    do_action( 'woocommerce_before_main_content' );
                ?>

                <?php if ( have_posts() ) : ?>
                    <div class="woocommerce-products-wrapper">
                        <?php
                            /**
                             * Hook: woocommerce_before_shop_loop.
                             *
                             * @hooked woocommerce_output_all_notices - 10
                             * @hooked woocommerce_result_count - 20
                             * @hooked woocommerce_catalog_ordering - 30
                             */
                            do_action( 'woocommerce_before_shop_loop' );
                        ?>
                        <ul class="products">
                            <?php while ( have_posts() ) : ?>
                                <?php the_post(); ?>
                                <?php wc_get_template_part( 'content', 'product' ); ?>
                            <?php endwhile; ?>
                        </ul>
                        <?php
                            /**
                             * Hook: woocommerce_after_shop_loop.
                             *
                             * @hooked woocommerce_pagination - 10
                             */
                            do_action( 'woocommerce_after_shop_loop' );
                        ?>
                    </div>
                <?php else : ?>
                    <?php do_action( 'woocommerce_no_products_found' ); ?>
                <?php endif; ?>

                <?php
                    /**
                     * Hook: woocommerce_after_main_content.
                     *
                     * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
                     */
                    do_action( 'woocommerce_after_main_content' );
                ?>
            </div>

            <div class="col-md-3">
                <?php dynamic_sidebar( 'woocommerce-sidebar' ); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
