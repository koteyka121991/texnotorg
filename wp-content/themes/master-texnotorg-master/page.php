<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package master
 */

get_header();
?>
<?php 
    $image_id = get_post_thumbnail_id();
    $image_url = wp_get_attachment_image_src( $image_id,'',true );
?>
<div class="head-image" style="background-image: url(<?php echo esc_url($image_url[0]);?>)"> 
	<div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
          	<?php
				the_title( '<h1 class="page-title">', '</h1>' );
			?>
          </div>
        </div>
      </div>
    </div>
</div>
<div class="container">
<div class="row">
	<main id="primary"  class="col-lg-8 col-md-8 col-sm-7 mx-auto">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php get_sidebar(); ?>
</div>
</div>
<?php
get_footer();
