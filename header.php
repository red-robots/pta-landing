<?php
/**
 * The header for theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

<script defer src="<?php bloginfo( 'template_url' ); ?>/assets/svg-with-js/js/fontawesome-all.js"></script>

<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Source+Sans+Pro:400,600,700" rel="stylesheet">


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">

