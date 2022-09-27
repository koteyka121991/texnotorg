<?php

if (!defined('ABSPATH')) {
  exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;



Container::make( 'term_meta', 'Category Properties' )
    ->where( 'term_taxonomy', '=', 'product-categories' )
    ->add_fields( [

        Field::make( 'image', 'crb_thumb' )
     
    ] );