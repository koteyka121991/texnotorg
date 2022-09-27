<?php
                            wp_nav_menu( [
	'theme_location'  => 'side-menu',	
	'container'       => null,
	'menu_class'      => 'header__list parent-list ',
    'menu_id'      => '',
    'walker' => new EST_Walker_Nav()


] );
?>