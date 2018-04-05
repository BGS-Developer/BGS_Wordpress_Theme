<?php

add_action('admin_menu', function(){
	add_menu_page( 'Material', 'Material', 'manage_options', 'material_menu_slug', 'page_menu_callback_function', 'dashicons-tickets', 6 );
	add_submenu_page( 'material_menu_slug', 'Material metal', 'Metal', 'manage_options', 'material_submenu_slug1', 'material_submenu1_callback_function');
  add_submenu_page( 'material_menu_slug', 'Material wood', 'Wood', 'manage_options', 'material_submenu_slug2', 'material_submenu2_callback_function');
});

function page_title_callback_function(){
  ?>
  <div class="wrap">
      <h2><?= get_admin_page_title();?></h2>
  </div>
  <?php
}

//Main product page in admin
function page_menu_callback_function(){
	page_title_callback_function()
  ?>
  <div class="wrap">
      <h2>main</h2>
  </div>
  <?php
}
//Product subpage in admin 1
function material_submenu1_callback_function(){
	page_title_callback_function();
  ?>
  <div class="wrap">
      <h2>678</h2>
  </div>
  <?php
}
//Product subpage in admin 2
function material_submenu2_callback_function(){
	page_title_callback_function();
  ?>
  <div class="wrap">
      <h2>6788</h2>
			<a href="<?php get_edit_post_link(1);?>">Изменить</a>
  </div>
  <?php
}

function create_post_type() { // создаем новый тип записи
		register_post_type( 'products', // указываем названия типа
			array(
			'labels' => array(
				'name' => ( 'Products' ), // даем названия разделу, для панели управления
				'singular_name' => ( 'Product' ), // даем названия одной записи
				'add_new' => __('Добавить новый'),
				'add_new_item' => __('Добавить новый продукт'),
				'edit_item' => __('Редактировать продукт'),
				'new_item' => __('Новый продукт'),
				'all_items' => __('Все продукты'),
				'search_items' => __('Поиск продукта'),
				'not_found' => __('Нет продуктов'),
				'not_found_in_trash' => __('Продукты не найдены'),
				'menu_name' => __('Все продукты')
				),
				'public' => true,
				'menu_position' => 5, // указываем место в левой баковой панели
				'rewrite' => array('slug' => 'products'), // указываем slug для ссылок например: http://mysite/reviews/
				'menu_icon' => ('dashicons-store'),
				'supports' => array('title', 'editor', 'thumbnail', 'revisions') // тут мы активируем поддержку миниатюр
			)
		);
}

add_action( 'init', 'create_post_type' ); // инициируем добавления типа

?>
