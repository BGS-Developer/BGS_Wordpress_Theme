<?php

add_action('admin_menu', function(){
	add_menu_page( 'Front-end', 'Front-end', 'manage_options', 'material_menu_slug', 'page_menu_callback_function', 'dashicons-tickets', 7 );
	add_submenu_page( 'material_menu_slug', 'Material metal', 'Metal', 'manage_options', 'material_submenu_slug1', 'material_submenu1_callback_function', 1);
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
		register_post_type( 'plagins', // указываем названия типа
			array(
				'labels' => array(
					'name' => ( 'Plagins' ), // даем названия разделу, для панели управления
					'singular_name' => ( 'Plagins' ), // даем названия одной записи
					'add_new' => __('Добавить новый'),
					'add_new_item' => __('Добавить новый продукт'),
					'edit_item' => __('Редактировать продукт'),
					'new_item' => __('Новый продукт'),
					'all_items' => __('Плагины'),
					'search_items' => __('Поиск продукта'),
					'not_found' => __('Нет продуктов'),
					'not_found_in_trash' => __('Продукты не найдены'),
					/*'archives' => 'frontend'*/
					),
					'public' => true,
					'menu_position' => 2, // указываем место в левой баковой панели
					'show_in_menu' => 'material_menu_slug',
					'rewrite' => array('slug' => 'frontend-plagins'), // указываем slug для ссылок например: http://mysite/reviews/
					'supports' => array('title', 'editor', 'thumbnail', 'revisions') // тут мы активируем поддержку миниатюр
			)
		);
		register_post_type( 'codex', // указываем названия типа
			array(
			'labels' => array(
				'name' => ( 'Codex' ), // даем названия разделу, для панели управления
				'singular_name' => ( 'Codex' ), // даем названия одной записи
				'add_new' => __('Добавить новый'),
				'add_new_item' => __('Добавить новый продукт'),
				'edit_item' => __('Редактировать продукт'),
				'new_item' => __('Новый продукт'),
				'all_items' => __('Кодекс'),
				'search_items' => __('Поиск продукта'),
				'not_found' => __('Нет продуктов'),
				'not_found_in_trash' => __('Продукты не найдены'),
				/*'archives' => 'frontend'*/
				),
				'public' => true,
				'menu_position' => 3, // указываем место в левой баковой панели
				'show_in_menu' => 'material_menu_slug',
				'hierarchical' => true,
				'rewrite' => array('slug' => 'frontend-codex'), // указываем slug для ссылок например: http://mysite/reviews/
				'supports' => array('title', 'editor', 'thumbnail', 'revisions') // тут мы активируем поддержку миниатюр
			)
		);
}

add_action( 'init', 'create_post_type' ); // инициируем добавления типа


//Верхняя часть админ панели "+ Добавить"
/*function remove_admin_bar_links() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('new-content');
		$wp_admin_bar->remove_menu('new-link');
		$wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'remove_admin_bar_links' );*/
?>
