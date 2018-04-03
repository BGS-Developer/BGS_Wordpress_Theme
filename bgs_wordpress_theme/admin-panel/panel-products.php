<?php

add_action('admin_menu', function(){
	add_menu_page( 'Products', 'Products', 'administrator', 'product_menu', 'product_menu_func', 'dashicons-store', 6 );
});

function product_menu_func(){
  ?>
  <div class="wrap">
      <h2><?= get_admin_page_title();?></h2>
  </div>
  <?php
}
?>
