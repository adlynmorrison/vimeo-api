<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package AfricanaReview1000
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'africanareview1000' ); ?></a>
    <header class="website-header banner" id="masthead" role="banner">
        <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="Logo">
        </a>

        <div class="wrap">
            <span class="tagline">a quarterly journal of literature and criticism</span>
            <div class="nav-header">
                <div class="dropdown general pull-left">
                    <a href="#" class="btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </a>
                    <div class="header-social" style="margin-left: 30px;">
                        <?php africanareview1000_social_menu(); ?>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <ul id="site-navigation" class="dropdown-menu links main-navigation" role="navigation" aria-labelledby="dropdownMenu1">
        <div style="color: white;"><?php _e( 'Primary Menu', 'africanareview1000' ); ?></div>
        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    </ul>



	<div id="content" class="site-content">
