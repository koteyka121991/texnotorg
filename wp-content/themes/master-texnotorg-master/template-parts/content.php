<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package master
 */
?>

	  <div class="category__item">

		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<a class="btn" href="' . esc_url( get_permalink() ) . '">', '</a>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<?php echo master_post_thumbnail(); ?>
		<?php endif; ?>		
	
		</div>

		