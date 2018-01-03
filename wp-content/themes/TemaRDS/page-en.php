
<?php /* Template Name: Inglés Template */ ?>
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

	<?php get_header(); ?>
	<?php wp_head(); ?>


	<?php the_content(); ?>
   

   

    

  <?php endwhile; else: ?>

    <p><?php _e('No hay entradas .'); ?></p>
    

  <?php endif; ?>
<?php get_footer(en); ?>