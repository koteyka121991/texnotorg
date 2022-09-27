<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package master
 */

get_header();
?>
<div class="head-image" style="background-image: url(<?php echo header_image(); ?>)">    
	<div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1><?php esc_html_e( '404', 'master' ); ?></h1>
          </div>
        </div>
      </div>
    </div>
</div>
<div class="container">
<div class="row">
	<main id="primary"  class="col-lg-8 col-md-8 col-sm-7 mx-auto">
		<section class="error-404 not-found text-center mb-5">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'master' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p>
					<?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'master' ); ?>
				</p>

				<?php get_search_form();?>
			</div><!-- .page-content -->
		</section><!-- .error-404 -->
	</main><!-- #main -->
</div>
</div>
<?php
get_footer();
