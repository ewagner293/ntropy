<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h3><?php the_title(); ?></h3>
    <?php the_content(); ?>
<?php endwhile; else: ?>
    <p><?php _e('Oops, an error has occurred!'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>