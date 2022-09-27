<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package master
 */

get_header();
?>
<div class="container">
<div class="row">
	<main id="primary"  class="col-lg-8 col-md-8 col-sm-7 mx-auto">
		<div class="page-heading">
            <h1>
            	<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'master' ), '<span>' . get_search_query() . '</span>' );
				?>
            </h1>
          </div>
		<?php if ( have_posts() ) : ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php get_sidebar(); ?>
</div>
</div>
<?php
get_footer();
