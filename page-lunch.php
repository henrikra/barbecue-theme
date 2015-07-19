<?php
/*
	Template Name: Lunch Page
*/


get_header(); ?>


<header class="sub-page-header">
	<h1 class="sub-page-header--title">Lounas<div class="sub-page-header--sub-title">ma-pe 11-15</div></h1>
</header>

<?php get_template_part('template-parts/content', 'lunch-menu'); ?>

<?php get_template_part('template-parts/content', 'map'); ?>

<?php get_template_part('template-parts/content', 'contact'); ?>

<?php get_footer(); ?>