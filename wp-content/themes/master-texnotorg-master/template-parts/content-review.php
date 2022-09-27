<?php
/**
 * Template part for displaying page content in front-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package master
 */

?>

<main class="main">

<section class="content__category">
    <div class="category__items">
                <?php 
                   $catalog_nav = carbon_get_post_meta($page_id,'catalog_nav');
                   $catalog_nav_ids = wp_list_pluck($catalog_nav, 'id');
                   $catalog_nav_items = get_terms([
                    'include' => $catalog_nav_ids,
                   ]);    
                    ?>   
                    <?php foreach ($catalog_nav_items as $item): ?>                              
                    <?php  $categories = get_categories ([
                    'taxonomy'    => 'product-categories',
                    ] );  
                    $category_link = site_url() . '/'.$item->taxonomy.'/'.$item->slug;
                   $category_img = carbon_get_term_meta($item->term_id, 'crb_thumb' );
                   $category_img_url = wp_get_attachment_image_url( $category_img, '' );   ?>
                        <div class="category__item">
                        <img src="<?php echo $category_img_url; ?>" alt="">
                        <a class="btn" href="<?php echo $category_link; ?>"><?php echo $item->name; ?></a>
                </div>
                            <?php endforeach; ?>               
                            </div>
            </section>
            <div class="container">
                <section class="section__text-box">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php
		the_content();	
		?>
	  </div>

</main>
