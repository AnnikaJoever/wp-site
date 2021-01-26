<?php get_header(); ?>

<main class="section">
    <h2><?php echo get_queried_object()->name; ?></h2>
    <p><?php echo get_queried_object()->description; ?></p>

    <?php 
        if (is_category('ruokalistat')) {
            $menu = "ruokalistat-menu";
        } else {
            $menu = "tuotteet-menu";
        }
    ?>
    <?php wp_nav_menu( array( 'theme_location' => $menu, 'container_class' => 'my_extra_menu_class', 'menu_class' => 'category-submenu' ) ); ?>

    <?php 
        $id = get_queried_object()->term_id;
        $artikkelit = get_posts( array('category' => $id, 'numberposts' => 999 ));
        foreach( $artikkelit as $artikkeli ):
	?>
	<article id="<?php echo $artikkeli->post_title; ?>" class="category-article">
		<h4><?php echo $artikkeli->post_title; ?></h4>
        <p><?php echo $artikkeli->post_content; ?></p>
	</article>
    <?php endforeach; ?>
</main>

<?php get_footer(); ?>
