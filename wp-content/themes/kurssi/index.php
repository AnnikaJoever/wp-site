<?php get_header(); ?>

	<main class="section">
	  <?php if (have_posts()): ?>
			<?php while(have_posts()): ?>
				<?php the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</main>
<?php get_footer(); ?>