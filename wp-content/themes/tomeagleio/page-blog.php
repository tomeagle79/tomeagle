<?php

/*

Template Name: Blog page

*/

?>
<?php get_header(); ?>

<h1>Code snippets page</h1>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ; ?>

	<section>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h2></a>
		<h3><?php the_author(); ?><?php echo ', ' ?><?php the_time( 'M d, Y' ); ?></h3>
		<p><?php the_excerpt(); ?></p>
	</section><hr>


<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts found to match your criteria'); ?></p>
<?php endif; ?>



<?php get_footer(); ?>
