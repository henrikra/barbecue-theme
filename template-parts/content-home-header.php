<header class="header">
	<div class="header--content">
		<?php if (get_field('header_main_message')): ?>
			<h2 class="header--sub-title"><?php the_field('header_main_message'); ?></h2>
		<?php endif; ?>
		<?php if (get_field('header_secondary_message')): ?>
			<h1 class="header--main-title"><?php the_field('header_secondary_message'); ?></h1>
		<?php endif; ?>
		<?php if (get_field('cta_link') && get_field('cta_text')): ?>
			<a href="<?php the_field('cta_link'); ?>" class="btn btn-default cta-btn"><?php the_field('cta_text'); ?></a>
		<?php endif; ?>
	</div>
	<i class="header--down-btn fa fa-angle-down"></i>
</header>