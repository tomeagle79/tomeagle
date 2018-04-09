<?php get_header(); ?>

<h1><?php single_post_title(); ?></h1>

<div class="container">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="teaser-snippet">
      <h1><h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2></h1>
      <p><?php the_post_thumbnail( 'medium'); ?></p>
      <p><?php the_content(); ?></p>
      <hr>
    </div>
  <?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts found to match your criteria'); ?></p>
  <?php endif; ?>

</div>


<?php get_footer(); ?>
