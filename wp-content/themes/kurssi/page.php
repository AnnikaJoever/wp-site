<?php get_header(); ?>

<div class="banner" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>

<main class="section">
    <div class="page-content">
        <?php if (have_posts()): ?>
            <?php while(have_posts()): ?>
                <?php the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php endif; ?>
    
        <?php 
            if (is_page('ruokalistat')) {
                $category = "ruokalistat";
            } else {
                $category = "tuotteet";
            }
        ?>
        
        <?php 
            $id = get_queried_object()->term_id;
            $artikkelit = get_posts( array('category_name' => $category, 'numberposts' => 999 ));
        ?>
        <div class="post-menu">
            <?php foreach($artikkelit as $artikkeli_btn): ?>
                <button class="post-btn"><?php echo $artikkeli_btn->post_title; ?></button>
            <?php endforeach; ?>
        </div>
    </div>
    
    <?php foreach( $artikkelit as $artikkeli ): ?>
        <article id="<?php echo $artikkeli->post_title; ?>" class="page-article">
            <div class="post-content"><?php echo $artikkeli->post_content; ?></div>
        </article>
    <?php endforeach; ?>
</main>

<?php get_footer(); ?>