<?php

add_action('admin_menu', function(){
	add_menu_page( 'Products', 'Products', 'manage_options', 'product_menu_slug', 'page_menu_callback_function', 'dashicons-store', 6 );
	add_submenu_page( 'product_menu_slug', 'Product metal', 'Metal', 'manage_options', 'product_submenu_slug1', 'products_submenu1_callback_function');
  add_submenu_page( 'product_menu_slug', 'Product wood', 'Wood', 'manage_options', 'product_submenu_slug2', 'products_submenu2_callback_function');
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
function products_submenu1_callback_function(){
	page_title_callback_function();
  ?>
  <div class="wrap">
      <h2>678</h2>
  </div>
  <?php
}
//Product subpage in admin 2
function products_submenu2_callback_function(){
	page_title_callback_function();
  ?>
  <div class="wrap">
      <h2>6788</h2>
			<a href="<?php get_edit_post_link(1);?>">Изменить</a>
  </div>
  <?php
}
?>
