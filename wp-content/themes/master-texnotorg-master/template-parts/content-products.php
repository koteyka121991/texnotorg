<?php 

$cur_terms = wp_get_post_terms( $post->ID, 'product-categories' );

if( is_array( $cur_terms ) ){
	foreach( $cur_terms as $cur_term ){
		
		$args = array(
			'post_type' => 'product',
			'product-categories' => $cur_term->slug,
			
	'posts_per_page' => 9,
	'paged' => get_query_var( 'paged' )
		
		);
		$my_products = new WP_Query( $args );
		

		while ( $my_products->have_posts() ) : $my_products->the_post(); ?>

					<div class="category__item">
						<a href="<?php the_permalink();?>">
                        <img src="<?php echo get_the_post_thumbnail(); ?>
                        <a class="btn" href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></a>
                    </div>


               
        <?php endwhile;
		wp_reset_postdata();
	}
}

the_posts_pagination();