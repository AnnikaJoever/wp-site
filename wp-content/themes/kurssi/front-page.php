<?php get_header(); ?>

<div class="banner" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>

	<main class="section">
	  <?php if (have_posts()): ?>
			<?php while(have_posts()): ?>
				<?php the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</main>
<?php get_footer(); ?>