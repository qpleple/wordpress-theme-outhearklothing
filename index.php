<?php get_header(); ?>

<div id="page-content">
    <?php while(have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
    	<?php the_content(); ?>
    <?php endwhile; ?>
    <div style="clear:both"></div>
</div>

<?php get_footer(); ?>