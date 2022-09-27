<?php
/*
Template Name: Контакты
*/
?>

<?php get_header(); ?>
<?php $page_id = get_the_id(); ?>
<?php
/* breadcrumb Yoast */
if ( function_exists( 'yoast_breadcrumb' ) ) :
   yoast_breadcrumb( '<div id="breadcrumbs">', '</div>' );
endif;
?>

<main class="main">
            <div class="container">
                <h2>Контакты</h2>

                <div class="manager-info">

                    <div class="manager-name">
                        <h2>Наш офис в г. Волжский</h2>
                    </div>
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Acb689429e5335c2f09afa075a685caf8b98458777a87e9bcda99375ccddc1310&amp;width=100%25&amp;height=350&amp;lang=ru_RU&amp;scroll=true"></script>

                </div>
                <h2>Наши менеджеры</h2>

                <div class="our-manager">
                
                   
                        <?php
                        $contacts_managers = carbon_get_post_meta ($page_id, 'contacts_of_managers');                                           
                       

                                if (( $contacts_managers ) ): ?>
                               
                                <?php foreach ( $contacts_managers as $manage ): ?>
                                    <div class="manager-container">
                                    <div class="manager-info">
                                    <div class="manager-name"> 
                                        <h2><?php echo $manage['name_manager'] ?></h2>
                                    </div>                                   
                                    <div class="manager-phone">
                                        <a href="tel:<?php echo $manage['phone_manager'] ?>">
                                        <?php echo $manage['phone_manager'] ?></a>
                                    </div>
                                    <div class="manager-mail">
                                        <a href="mailto:<?php echo $manage['email_manager'] ?>">
                                        <?php echo $manage['email_manager'] ?></a>
                                    </div>
                                    <div class="button item-border ">
                                        <button class="callback-button">Обратный звонок</button>
                                    </div>
                                    </div>
                                    <div class="list-regions">
                                    <ul>
                                        <li><?php echo $manage['location_text'] ?></li>                                        
                                    </ul>                                    
                                    </div>
                                
          
                                    </div>
            
    
                              
                              
                                <?php endforeach; ?>
                              
                               
                                    </div>
                                <?php endif; ?>
   
                                
                                </div>

                                </div>
                     
                    
                 
                


    </main>
<?php get_footer(); ?>
