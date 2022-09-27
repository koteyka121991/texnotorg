<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package master
 */

?>
<?php get_template_part( 'template-parts/content-cat' ); ?>

   
        <?php         
        
            $taxonomy_name = 'product-categories';
            $queried_object = get_queried_object();
            $term_id = $queried_object->term_id;
            $categories = get_terms( $taxonomy_name, [
            'parent' => $term_id, 
            'hide_empty' => false,
                      
             ] );     
             if ( $categories): ?>    
                            <?php foreach ( $categories as $category ) {
            
            $category_img = carbon_get_term_meta($category->term_id, 'crb_thumb' );
            $category_img_url = wp_get_attachment_image_url( $category_img, '' );   
            $category_link = site_url() . '/'.$category->taxonomy.'/'.$category->slug;
          
            
            echo'<div class="category__item">'; 
            echo'<img src="' . $category_img_url . '" alt="">'; 
            echo'<a class="btn" href="'. $category_link.'">'.$category->name.'</a>';        
            echo'</div>';
        }
  
      
   else :

      get_template_part( 'template-parts/content-products' );

   endif;
   ?>

	





          

    