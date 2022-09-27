<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package master
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
        <div class="wrapper">
        <div class="header">
            <div class="container">
                <div class="menu-burger">
                    <span></span>
                </div>
                <div class="mobile-wrapper">
                    <div class="header__info-block parent-header">
                    <div class="logo logo-scroll">
						<?php if (is_front_page( )):
                            echo wp_get_attachment_image( carbon_get_theme_option('site_logo'), 'full' );
                            ?>
                            <?php else :?>
                            <a href="<?php echo get_home_url(); ?>">
                           <?php echo wp_get_attachment_image( carbon_get_theme_option('site_logo'), 'full'  );
                            ?>
                            <?php endif; ?>
                        </div>
                        <div class="info-line">
                            <div class="item item-border">
                                <a>г. Волжский, ул. Кирова 19, каб. 107</a>
                            </div>
                            <div class="item">
                                <ul>
                                    <li class="item-border"><a href="tel:+79093830775">8 (909) 383-07-75</a></li>
                                    <li class="item-border"><a href="tel:+79033769087">8 (903) 376-90-87</a></li>
                                </ul>
                            </div>
                            <div class="button item-border ">
                                <button class="callback-button">Заказать звонок</button>
                                <!-- <a class="callback-button" href="#">Обратный звонок</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="header__menu header__menu-mini_up">
                       
                        <div class=" header__menu-mini ">
						<?php
                            wp_nav_menu( [
	'theme_location'  => 'menu-1',	
	'container'       => null,
	'menu_class'      => 'header__list parent-list ',
    'menu_id'      => '',
    'walker' => new EST_Walker_Nav()


] );
?><?php get_search_form( $args ); ?>
                        </div>
                    </div>
                </div>
            </div>


            <?php if(is_home()|| is_front_page( ) ): ?>
	<?php echo get_template_part('template-parts/content-slider'); ?>        
		<?php endif; ?>
        </div>
        