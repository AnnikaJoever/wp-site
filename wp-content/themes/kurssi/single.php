<?php get_header(); ?>

<div class="banner" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>

<main class="section">

    <?php 
        if (in_category('ruokalistat')) {
            $menu = "ruokalistat-menu";
        } else {
            $menu = "tuotteet-menu";
        }
    ?>

    <div class="section">
	<?php if (have_posts()): ?>
		<?php while(have_posts()): ?>
			<?php the_post(); ?>
			<div class="post-content"><?php the_content(); ?></div>
		<?php endwhile; ?>
	<?php endif; ?>
    </div>

</main>

<?php get_footer(); ?>
