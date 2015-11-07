<section id="intro" class="dark-brown-section">
	<div class="dark-bg-half"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 intro">
			<article class="intro--article">
				<div class="row">
					<div class="col-lg-8">
						<div class="intro--content">
							<?php if (get_field('welcome_title')): ?>
								<h2 class="intro--title"><?php the_field('welcome_title'); ?></h2>
							<?php endif; ?>
							<?php if (get_field('welcome_text')): ?>
								<div class="intro--body">
									<?php the_field('welcome_text'); ?>
								</div>
							<?php endif; ?>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="intro--image"></div>
					</div>
				</div>
			</article>
			</div>
			<div class="col-sm-6">
				<div class="row intro-info">
						<div class="col-xs-6 intro-info--column">
							<div class="intro-info--container">
								<div class="intro-info--icon-container">
									<i class="fa fa-cutlery"></i>
								</div>
								<div class="intro-info--content">
									<div class="intro-info--title">Lounas</div>
									<?php if (get_field('lunch_opening_times')): ?>
										<div class="intro-info--body">
											<?php the_field('lunch_opening_times'); ?>
										</div>
									<?php endif; ?>
									<div class="intro-info--link">
										<a href="<?php echo get_permalink( get_page_by_path('barbecue-lunch')); ?>">Lounas <i class="fa fa-arrow-circle-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-6 intro-info--column">
							<div class="intro-info--container">
								<div class="intro-info--icon-container">
									<i class="fa fa-home"></i>
								</div>
								<div class="intro-info--content">
									<div class="intro-info--title">Aukioloajat</div>
									<?php if (get_field('restaurant_opening_times')): ?>
										<div class="intro-info--body">
											<?php the_field('restaurant_opening_times'); ?>
										</div>
									<?php endif; ?>
									<div class="intro-info--link">
										<a href="">Yhteystiedot <i class="fa fa-arrow-circle-right"></i></a>
									</div>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>
</section>