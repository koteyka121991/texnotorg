<?php

if (!defined('ABSPATH')) {
  exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'theme_options', __( 'Настройки сайта' ) )
->add_tab( 'Общие настройки' ,[
    Field::make( 'image', 'site_logo', 'Логотип' ),
]) 
->add_tab( 'Контакты' ,[
  Field::make( 'text', 'site_phone_one', 'Контакт №1' ),
  Field::make( 'text', 'site_phone_one_didgets', 'Контакт №1 телефон без пробелов' ),
  Field::make( 'text', 'site_phone_two', 'Контакт №2' ),
  Field::make( 'text', 'site_phone_two_didgets', 'Контакт №2 телефон без пробелов' ),
  Field::make( 'text', 'address', 'Адрес' ),
  Field::make( 'text', 'email', 'email' ),
  Field::make( 'text', 'social_vk', 'Вконтакте' ),
  Field::make( 'text', 'social_instagram', 'Instagram' ),
]);
