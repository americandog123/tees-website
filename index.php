<?php get_header(); ?> 

<main> 
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
        <?php get_template_part('template-parts/content', get_post_format()); ?> 
    <?php endwhile; else : ?> 
        <?php get_template_part('template-parts/content', 'none'); ?> 
    <?php endif; ?>

</main> 

<section class="featured-products">
  <h2>Featured Products</h2>
  <div class="product-grid">
    <!-- Add the HTML for each featured product -->
  </div>
</section>

<?php get_footer(); ?> 
