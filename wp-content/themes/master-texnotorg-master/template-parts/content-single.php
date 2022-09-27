<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package master
 */

?>



                                                          

               <main class="main">
               <?php
/* breadcrumb Yoast */
if ( function_exists( 'yoast_breadcrumb' ) ) :
   yoast_breadcrumb( '<div id="breadcrumbs">', '</div>' );
   
endif;
?>
                <h2><?php the_title(); ?></h2>
                <div class="container">
                    <section class="content">
                        <div class="gallery-block">
                            <div class="gallery">
                            
                                <div class="gallery-conatiner">
  
                                    <div class="swiper-gallery">
                                    <div class="swiper-button-prev swiper-button"></div>
                            <div class="swiper-button-next swiper-button"></div>
                                        <div class="swiper-wrapper">
                                        
										<?php
                        $galary = carbon_get_post_meta (get_the_id(), 'crb_media_gallery');                                           
						
                                if ((  $galary ) ): ?>
                               
                                <?php foreach ( $galary as $item ): ?>
                                            <div class="swiper-slide">
                                                <a data-fslightbox href="<?php echo wp_get_attachment_image_url($item, 'full'); ?>"><img src="<?php echo wp_get_attachment_image_url($item, 'full'); ?>" alt=""></a>
                                            </div>
											<?php endforeach; ?>                              
                            
							<?php endif; ?>

                           
                                        </div>
                                    </div>
                                    <div class="swiper-prew">
                                        <div class="swiper-wrapper">
										<?php
                        $galary = carbon_get_post_meta (get_the_id(), 'crb_media_gallery');                                           
						
                                if ((  $galary ) ): ?>
                               
                                <?php foreach ( $galary as $item ): ?>
                                            <div class="swiper-slide"><img src="<?php echo wp_get_attachment_image_url($item, 'full'); ?>" alt=""></div>
                                            <?php endforeach; ?>                              
                            
							<?php endif; ?>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="short-description">
                                <p>

                                <div class="button item-border ">
                                    <button class="callback-button">Узнать цену</button>
                                </div>
                            </div>
                        </div>
                        <div class="description-product">
                        <ul class="tab-list">
                            <li class="active">Описание</li>
                            <?php $additionalInformation = carbon_get_post_meta(get_the_id(), 'additional_information');                    
                          if ( $additionalInformation ): ?>                                          
                       <?php foreach ( $additionalInformation  as $item): ?>   
                            <li><?php echo $item['tab_name'] ?></li>
                            <?php endforeach; ?>   
                            <?php endif; ?>
                           
                        </ul>
                        <ul class="tab-content">
                            <li class="active"><?php
                        the_content();	
                        ?></p></li>
                       
                       <?php $additionalInformation = carbon_get_post_meta(get_the_id(), 'additional_information');                    
                          if ( $additionalInformation ): ?>                                          
                       <?php foreach ( $additionalInformation  as $item): ?>   
                            <li><?php echo $item['technical_specifications'] ?></li>
                            <?php endforeach; ?>   
                            <?php endif; ?>
                        </ul>

                            <!-- <ul>
                                <li class="tab-description" type="button" data-tab="#tab-1">Описание</li>
                                <li class="tab-description" type="button" data-tab="#tab-2">Технические характеристики</li>
                            </ul>
                            <div class="tab-item" id="tab-1">
                                <p>
								<?php echo carbon_get_post_meta( get_the_ID(), 'description_single' ); ?></p>
                                </p>
                            </div>
                            <div class="tab-item" id="tab-2">
                                <p>
								<?php echo carbon_get_post_meta( get_the_ID(), 'technical_specifications' ); ?></p>
                                </p>
                            </div> -->
                        </div>
                    </section>
                </div>
                
            </main>