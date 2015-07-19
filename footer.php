<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Barbecue
 */

?>

<?php wp_footer(); ?>
<footer class="footer">
	<div class="container">
		<a href="<?php echo get_permalink( get_page_by_path('barbecue-home-page')); ?>">
			<img class="footer--logo" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt="Site logo">
		</a>
		<ul class="footer--links">
			<li class="footer--link"><a href="">Menu</a><i class="fa fa-circle footer--link-separator"></i></li>
			<li class="footer--link"><a href="">Uutiset</a><i class="fa fa-circle footer--link-separator"></i></li>
			<li class="footer--link"><a href="">Yhteystiedot</a><i class="fa fa-circle footer--link-separator"></i></li>
			<li class="footer--link"><a href="<?php echo get_permalink( get_page_by_path('barbecue-lunch')); ?>">Lounas</a></li>
			<div class="clearfix"></div>
		</ul>
		<span class="footer--copyright">&copy; 2015 Restaurant Barbecue. All Rights Reserved</span>
	</div>
</footer>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-2.1.4.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

</body>
</html>
