<?php get_header();
?>


<main class="main">

<section class="content__section">
<?php
/* breadcrumb Yoast */
if ( function_exists( 'yoast_breadcrumb' ) ) :
   yoast_breadcrumb( '<div id="breadcrumbs">', '</div>' );
   
endif;
?>
	<div class= "content__category">


<div class="category__items">

		<?php if ( have_posts() ) : ?>			
			<?php		
 get_template_part( 'template-parts/content', 'categories' ); 
		else :
			get_template_part( 'template-parts/content','none');
		endif;
		?>
		     </div>
			 <div class=sidebar-box>
	<?php get_template_part( 'template-parts/content', 'sidemenu' ); ?>
</div>
			 </div>

		          </section>
				
			</main>
	
<?php
get_footer();
