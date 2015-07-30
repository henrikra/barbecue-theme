<?php
/*
	Template Name: Menu Page
*/


get_header(); ?>

<header class="small-header">
	<h1 class="small-header--title">Menu</h1>
</header>

<?php get_template_part('template-parts/content', 'food-menu'); ?>

<?php get_template_part('template-parts/content', 'map'); ?>

<?php get_template_part('template-parts/content', 'contact'); ?>

<?php get_footer(); ?>