<aside> 
    <?php dynamic_sidebar('sidebar-1'); ?>
</aside> 

<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div>
		<label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
		<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="<?php esc_attr_e( 'Search Products...', 'textdomain' ); ?>">
		<button type="submit" id="searchsubmit"><i class="fa fa-search"></i></button>
	</div>
</form>

<h3><?php esc_html_e( 'Product Categories', 'textdomain' ); ?></h3>
<ul>
	<?php
		$args = array(
			'taxonomy' => 'product_cat',
			'orderby' => 'name',
			'show_count' => 1,
			'pad_counts' => 0,
			'hierarchical' => 1,
			'title_li' => '',
			'hide_empty' => 0,
			'echo' => 1,
		);

		wp_list_categories( $args );
	?>
</ul>

<h3><?php esc_html_e( 'Recent Products', 'textdomain' ); ?></h3>
<ul class="product_list_widget">
	<?php
		$args = array(
			'post_type' => 'product',
			'posts_per_page' => 5,
			'orderby' => 'date',
			'order' => 'DESC',
		);

		$products = new WP_Query( $args );

		while ( $products->have_posts() ) :
			$products->the_post();
			wc_get_template_part( 'content', 'product' );
		endwhile;

		wp_reset_postdata();
	?>
</ul>

<h3><?php esc_html_e( 'Product Tags', 'textdomain' ); ?></h3>
<div class="tagcloud">
	<?php
		$args = array(
			'taxonomy' => 'product_tag',
			'orderby' => 'name',
			'show_count' => 1,
			'pad_counts' => 0,
			'hierarchical' => 0,
			'title_li' => '',
			'hide_empty' => 0,
			'echo' => 1,
		);

		wp_tag_cloud( $args );
	?>
</div>
