<?php get_header(); ?>

<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
		<div class="post">
			<?php the_title(); ?>
			<?php the_content(); ?>

			<?php echo wpsc_shopping_cart(); ?>
		</div>
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>

</body>
</html>