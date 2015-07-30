<?php
/*
	Template Name: Reservation Page
*/


get_header(); ?>


<header class="small-header reservation-header">
	<h1 class="small-header--title">Varaa pöytä</h1>
</header>

<?php get_template_part('template-parts/content', 'table-reservation'); ?>

<?php get_template_part('template-parts/content', 'map'); ?>

<?php get_template_part('template-parts/content', 'contact'); ?>

<?php get_footer(); ?>