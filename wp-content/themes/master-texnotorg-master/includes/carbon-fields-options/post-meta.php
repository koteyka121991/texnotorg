<?php

if (!defined('ABSPATH')) {
  exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;





Container::make( 'post_meta', 'Дополнительные поля')
 ->show_on_page(5)
  ->add_tab( 'О нас', [
    Field::make('text','about_title', 'Загаловок'),  
    Field::make('rich_text','about_text', 'Текст')   
  ])
  ->add_tab( 'Слайдер', [
    Field::make( 'complex', 'crb_slider', 'Слайдер'  )
    ->add_fields( [ 
        Field::make( 'text', 'slide_link', 'Текст ссылки' ),
        Field::make( 'image', 'slide_photo', 'Изображение'  )
        ->set_value_type( 'url' )
     ] )     
     ] )
     ->add_tab( 'Категории на главной', [
      Field::make( 'association', 'catalog_nav', 'Категории товаров' )
       ->set_types( [
        [
            'type'      => 'term',
            'taxonomy' => 'product-categories',
        ]
    ])    
    
      ]);
      


  Container::make( 'post_meta', 'Дополнительные поля')
  ->where( 'post_type', '=', 'page' )
  ->add_tab( 'Наши менеджеры', [
    Field::make( 'complex', 'contacts_of_managers', 'Контакты менеджеров'  )
    ->add_fields( [          
        Field::make( 'text', 'name_manager', 'Имя менеджера' ),
        Field::make( 'text', 'phone_manager', 'Телефона менеджера' ),
        Field::make( 'text', 'phone_manager_didgets', 'Телефон менеджера без пробелов' ),
        Field::make( 'text', 'email_manager', 'email менеджера' ),
        Field::make('rich_text','location_text', 'Зоны ответственности')   
      ] )      
    ]);



    Container::make( 'post_meta', 'Дополнительные поля')
    ->where( 'post_type', '=', 'product' )
    ->add_fields( [    
      Field::make( 'media_gallery', 'crb_media_gallery', 'Слайдер' ),     
      Field::make( 'complex', 'additional_information', 'Дополнительная информация'  )
      ->add_fields( [ 
        Field::make( 'text', 'tab_name', 'Наименование кнопок' ),
        Field::make('rich_text','technical_specifications', 'Технические характеристики')          
       ] )    
   ] )  ;
  
  
 