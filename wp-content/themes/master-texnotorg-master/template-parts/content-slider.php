
     <div class="container slider-box">           
            <div class="swiper-slider">               
                <div class="swiper-wrapper"> 
                <?php $slider = carbon_get_post_meta($page_id, 'crb_slider');                    
                   
    if ( $slider): ?>
                            
        <?php foreach ( $slider as $slide): ?>                     
            <div class="swiper-slide">  
            <a href="<?php echo $slide['slide_link'] ?>">
            <img src="<?php echo $slide['slide_photo'] ?>" alt=""></a>
            </div>    
                   <?php endforeach; ?>               
        
                          <?php endif; ?>
                </div>              
                <div class="swiper-button-prev swiper-button "></div>
                <div class="swiper-button-next swiper-button "></div> 
            </div>          
            <div class="swiper-pagination"></div>
        </div>    



 
 
  