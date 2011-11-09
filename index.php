<?php get_header(); ?>

<div id="page-content">
    <?php while(have_posts()) : the_post(); ?>
        <div class="post">
    		<h2 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
    		<div class="post-metadata"><?php the_author() ?>, <?php the_time('F jS, Y') ?></div>
    		<?php the_content(); ?>
        </div>
    <?php endwhile; ?>
    <div class="navigation">
        <hr />
        <div class="alignleft"><?php previous_posts_link('&laquo; Previous Entries') ?></div>
        <div class="alignright"><?php next_posts_link('Next Entries &raquo;','') ?></div>
     </div>
    <div style="clear:both"></div>
</div>

<?php get_footer(); ?>