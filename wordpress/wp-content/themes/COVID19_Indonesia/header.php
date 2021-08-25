<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
    <header id="header">
    <div class="container">
    <div class="row">
        <div id="branding">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>
        </div>
        <nav id="main-menu">
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
        </nav>
    </div>
    </div>
    </header>
<div id="container">