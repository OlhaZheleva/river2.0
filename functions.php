<?php
/**
* Чистый Шаблон для разработки
* Функции шаблона
* @package WordPress
* @subpackage clean
*/

// Підключення класичного редактора WP
add_filter('use_block_editor_for_post_type', '__return_false');

register_nav_menus( array( // Регистрируем 2 меню
	'top' => 'Верхнее меню',
	'left' => 'Нижнее'
) );
add_theme_support('post-thumbnails');
add_image_size('300-300', 300, 300, false);
add_image_size('161-234', 161, 234, false);



?>