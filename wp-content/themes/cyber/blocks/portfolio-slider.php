<? $query = new WP_Query(array(
	'post_type' => 'portfolio',
	'post_status' => 'publish',
	'posts_per_page' => -1
));


?>

<div class="container-fluid">
	<div class="slider-portfolio">
		<div class="slider-portfolio__carousel" data-sp-carousel>
			<? $i = 0; ?>
			<? while ($query->have_posts()) : $query->the_post();  ?>
				<?
				if(!$i) {
					$portfolioTitle = get_the_title();
					$portfolioDescription = get_field("short-description");
					$portfolioImg = get_field("preview-img");
					$portfolioLink = get_the_permalink();
					$i++;
				} ?>
				<div class="slider-portfolio__slide">
					<img src="<?= get_field("preview-img"); ?>"
					     alt="bg-img"
					     data-title="<? the_title(); ?>"
					     data-text="<?= get_field("short-description"); ?>"
					     data-link="<? the_permalink(); ?>"
					     class="slider-portfolio__carousel--img">
				</div>
			<? endwhile; ?>
			<? wp_reset_query(); ?>
		</div>
		
		<span class="slider-portfolio__carousel--shadow"></span>
		
		<div class="container slider-portfolio__container">
			<div class="slider-portfolio__content">
				<h3 class="slider-portfolio__main-title">
					Последние
					выполненные работы
				</h3>
				<h4 class="slider-portfolio__slide-title underline" data-sp-title><?= $portfolioTitle; ?></h4>
				<p class="slider-portfolio__text" data-sp-text>
					<?= $portfolioDescription; ?>
				</p>
				<a href="<?= $portfolioLink; ?>" class="btn slider-portfolio__link" data-sp-link>
					Смотреть кейс
				</a>
				
				<div class="slider-portfolio__arrows">
					<div class="slider-portfolio__arrow slider-portfolio__arrow-prev" data-sp-arrow-prev>
						<svg width="4" height="8" viewBox="0 0 4 8" fill="none" xmlns="http://www.w3.org/2000/svg">
							<line x1="3.4" y1="0.3" x2="0.4" y2="4.3" stroke="black" />
							<line x1="0.4" y1="3.7" x2="3.4" y2="7.7" stroke="black" />
						</svg>
					</div>
					<div class="slider-portfolio__arrow slider-portfolio__arrow-next" data-sp-arrow-next>
						<svg width="4" height="8" viewBox="0 0 4 8" fill="none" xmlns="http://www.w3.org/2000/svg">
							<line x1="0.6" y1="7.7" x2="3.6" y2="3.7" stroke="black" />
							<line x1="3.6" y1="4.3" x2="0.6" y2="0.3" stroke="black" />
						</svg>
					</div>
				</div>
			
			</div>
		</div>
	</div>
</div>