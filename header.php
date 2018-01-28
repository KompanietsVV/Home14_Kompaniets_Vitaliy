<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package my_first_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="wp-content/themes/my_first_theme/css/main.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text"
       href="#content"><?php esc_html_e('Skip to content', 'my_first_theme'); ?></a>

    <header id="masthead" class="site-header">
        <div class="container clearfix">
            <div class="float-left">
                <a href="#"><img src="wp-content/themes/my_first_theme/img/panakeia_logo.png" alt="logo" class="img-logo"></a>
                <span class="psd">Free PSD template</span>
            </div>
            <nav class="float-right">
                <ul>
                    <li class="nav-menu"><a href="#">Fusce at</a></li>
                    <li class="nav-menu"><a href="#">Facilisis</a></li>
                    <li class="nav-menu"><a href="#">Ante donec</a></li>
                    <li class="nav-menu"><a href="#">Blandit rhoncus</a></li>
                    <li class="nav-menu"><a href="#">Placerat</a></li>
                </ul>
            </nav>
        </div>
    </header><!-- #masthead -->

    <div id="content" class="site-content">
