<section class="light-brown-section contact">
	<div class="container">
		<h2 class="contact--title">Yhteystiedot</h2>
		<div class="row">
			<div class="col-sm-4">
				<div class="contact-item">
					<i class="fa fa-envelope-o contact-item--icon"></i>
					<div class="contact-item--title">Sähköposti</div>
					<?php if (get_field('email')): ?>
						<div class="contact-item--content"><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></div>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="contact-item">
					<i class="fa fa-phone contact-item--icon"></i>
					<div class="contact-item--title">Puhelin</div>
					<?php if (get_field('phone')): ?>
						<div class="contact-item--content"><a href="tel:<?php echo str_replace(' ', '', get_field('phone')); ?>"><?php the_field('phone'); ?></a></div>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="contact-item">
					<i class="fa fa-map-marker contact-item--icon"></i>
					<div class="contact-item--title">Osoite</div>
					<?php if (get_field('full_address')): ?>
						<div class="contact-item--content"><a href="https://www.google.fi/maps/place/<?php the_field('full_address'); ?>" target="_blank"><?php the_field('full_address'); ?></a></div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>