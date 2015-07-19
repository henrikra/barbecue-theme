<section class="lunch">
	<div class="container">
		<div class="lunch--container">
			<div class="row">
				<?php for ($i = 0; $i < 5; $i++) : ?>	
					<?php
						$finnish_weekdays = array(
							'Monday' => 'maanantai',
							'Tuesday' => 'tiistai',
							'Wednesday' => 'keskiviikko',
							'Thursday' => 'torstai',
							'Friday' => 'perjantai',
							'Saturday' => 'lauantai',
							'Sunday' => 'sunnuntai'
						);

						$currentDay = new DateTime();
						$loopWeekday = new DateTime('Monday this week'); // Aloita loop viikon alusta

						// Jos nykyinen päivä on viikonloppuna niin haetaan seuraavan viikon luonaslista
						// Tsekataan vain onko päivänä lauantai, koska sunnuntai menee automaattisesti ensi viikolle jenkkikalenterin takia
						if ($currentDay->format('N') == 6) {
							$loopWeekday->add(new DateInterval('P1W'))->format('j.n.Y');
						}

						$loopWeekday->add(new DateInterval('P' . $i . 'D'));

						$loop =  new WP_Query(array(
							'post_type' => 'dish',
							'orderby' => 'date',
							'order' => 'ASC',
							'meta_query' => array(
								array(
									'key' => 'date',
									'value' => $loopWeekday->format('Y-m-d'),
									'compare' => '='
								)
							)
						));
					?>
					<div class="col-md-1-5 lunch--day <?php echo $currentDay ==  $loopWeekday ? 'current-day' : ''; ?>">
						<div class="lunch--day-date">
							<?php if ($currentDay ==  $loopWeekday) : ?>
								<div class="lunch--today">Tänään</div>
							<?php endif; ?>
							<?php echo ucfirst($finnish_weekdays[$loopWeekday->format('l')]) . ' ' . $loopWeekday->format('j.n.Y'); ?>
						</div>
						<div class="lunch--day-content">
						<?php if ($loop->have_posts()) : ?>
							<?php while ($loop->have_posts()) : $loop->the_post(); ?>
								<div class="lunch--day-dish">
									<div class="lunch--day-dish-title"><?php the_title(); ?></div>
									<div class="lunch--day-dish-price">
										<?php echo is_decimal(get_field('price')) ? number_format((float)get_field('price'), 2, ',', '') : the_field('price'); ?> €
									</div>
								</div>
							<?php endwhile; ?>
						<?php else : echo 'Ei vielä lounaita tälle päivälle'; endif; ?>
						</div>
					</div>
				<?php endfor; ?>
			</div>
			<div class="diet">
				<div class="diet--icon">vl</div>
				<div class="diet--body">Vähälaktoosinen</div>
			</div>
			<div class="diet">
				<div class="diet--icon">m</div>
				<div class="diet--body">Maidoton</div>
			</div>
			<div class="diet">
				<div class="diet--icon">k</div>
				<div class="diet--body">Kasvissyöjät</div>
			</div>
			<div class="diet">
				<div class="diet--icon">l</div>
				<div class="diet--body">Laktoositon</div>
			</div>
			<div class="diet">
				<div class="diet--icon">g</div>
				<div class="diet--body">Gluteeniton</div>
			</div>
			<div class="diet">
				<div class="diet--icon">Ve</div>
				<div class="diet--body">Vegaani</div>
			</div>
		</div>
	</div>
</section>