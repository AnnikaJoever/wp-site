<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&&display=swap" rel="stylesheet">
    <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="main-header">
        <div class="site-title">
            <a href="<?php echo get_home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
        </div>
        <button class="mobile-bars"><i class="fas fa-bars"></i></button>
        <?php wp_nav_menu( array( 'theme_location' => 'header', 'container' => 'nav', 'container_class' => 'main-nav' ) ); ?>
    </header>