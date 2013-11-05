<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '-', true, 'right' ); ?></title>
	<!--[if lt IE 9]>
	<script src="http://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="app-head">
    <div class="container">
        <?php if( is_home() ){?>
        <h1><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></h1>
        <?php } else {?>
        <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></a></h1>
        <?php } ?>
    </div>
</header>

<div class="app-body">
    <div class="container">
        <div class="layout-container">
            <div class="primary">
                <div class="inner">
                    <nav class="category-nav" role="navigator">
                        <?php wp_nav_menu( array( 'theme_location' => 'category_nav', 'container' => '', 'menu_class' => 'nav nav-pills nav-stacked') ); ?>
                    </nav>
