<?php get_header(); ?>

<div id="page-content">
    <?php while(have_posts()) : the_post(); ?>
        <div class="post">
    		<h2 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
    		<div class="post-metadata"><?php the_author() ?>, <?php the_time('F jS, Y') ?></div>
    		<?php the_content(); ?>
        </div>
    <?php endwhile; ?>
    <div style="clear:both"></div>
</div>

<?php get_footer(); ?>