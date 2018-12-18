<?php 
/*
Template name: Default
*/

get_header(); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php require_once('src/sections/navigation.php')?>
		<?php require_once('src/sections/slider.php')?>
		<?php require_once('src/sections/home-content.php')?>
	
<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php get_footer(); ?>
