<?php get_header();?>

<?php while ( have_posts() ) : the_post();
the_title();// заголовок
the_post_thumbnail(array(150,150)); //получаем миниатюру записи
echo '';
the_content();// запись
echo '';
endwhile;
?>

<?php get_footer();?>
