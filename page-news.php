<?php
/*
	Template Name: News Page
*/


get_header(); ?>

<header class="small-header">
	<h1 class="small-header--title">Ajankohtaista</h1>
</header>

<section class="news single-page">
	<div class="container">
		<div class="news--container">
			<?php if( is_page('barbecue-home-page')) : ?>
				<h2 class="news--title">Ajankohtaista</h2>
			<?php endif; ?>
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
					<article class="article">
						<div class="article--date">25.07.2015</div>
						<h3 class="article--title">KESÄKAUDEN AUKIOLOAJAT</h3>
						<div class="article--body">Ravintola Allotria suljettu iltasin kesäkauden 18.6. - 4.8.15. Lounas päivittäin ma-pe klo 11:00-14:00</div>
					</article>
					<article class="article">
						<div class="article--date">25.07.2015</div>
						<h3 class="article--title">UUSI KAUDEN A LA CARTE</h3>
						<div class="article--body">Himenaeos ullamcorper. Ipsum magna morbi. Iaculis nisi.
Vel dolore consectetur. Nostrud libero etiam mus.
Sapien feugiat ad. Ultricies venenatis litora nostra. At elementum laboris. Etiam dolore quis quisque.
...</div>
					</article>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_template_part('template-parts/content', 'map'); ?>

<?php get_template_part('template-parts/content', 'contact'); ?>

<?php get_footer(); ?>