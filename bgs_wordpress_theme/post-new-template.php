<?php
/*
*WP Post Template: Шаблон для новых записей
*/
 get_header();?>

<?php

    $query = new WP_Query('cat=2');
    if( $query->have_posts() ){
      while($query->have_posts()){ $query->the_post();
        ?>
          <h2><?php the_title();?></h2>
          <p><?php the_content();?></p>
        <?php
      }
    }
    wp_reset_postdata();
?>
<?php if ( function_exists( 'echo_ald_crp' ) ) echo_ald_crp(); ?>
<?php get_footer();?>
