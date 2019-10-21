<? get_header(); ?>
<? $fields = get_fields(); ?>
	
	<div class="container">
		<div class="img-info">
			<div class="img-info__inner">
				<div class="img-info__img-wrapper">
					<img src="<?= $fields["main-img"]; ?>" alt="block-img"
					class="img-info__main-img">
				</div>
				<div class="img-info__text-wrapper">
					<h2 class="img-info__title section-title"><? the_title(); ?></h2>
					<div class="img-info__text styled-redactor">
						<?= $fields["short-description"]; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="block-margin"></div>
	
	<? get_block("prices"); ?>
	
	<div class="block-margin"></div>
	
	<div class="container">
		<div class="work-process">
			<div class="work-process__icon-slider">
				<div class="work-process__icon-slider--arrows">
					<div class="work-process__icon-slider--arrow work-process__icon-slider--arrow-prev" data-wp-arrow-prev>
						<svg width="4" height="8" viewBox="0 0 4 8" fill="none" xmlns="http://www.w3.org/2000/svg">
							<line x1="3.4" y1="0.3" x2="0.4" y2="4.3" stroke="black" />
							<line x1="0.4" y1="3.7" x2="3.4" y2="7.7" stroke="black" />
						</svg>
					</div>
					<div class="work-process__icon-slider--arrow work-process__icon-slider--arrow-next" data-wp-arrow-next>
						<svg width="4" height="8" viewBox="0 0 4 8" fill="none" xmlns="http://www.w3.org/2000/svg">
							<line x1="0.6" y1="7.7" x2="3.6" y2="3.7" stroke="black" />
							<line x1="3.6" y1="4.3" x2="0.6" y2="0.3" stroke="black" />
						</svg>
					</div>
				</div>
				<div class="swiper-container work-process__icon-slider--carousel" data-wp-icon-slider>
					<div class="swiper-wrapper work-process__icon-slider--carousel-wrapper">
						<? foreach( $fields["stages"] as $item) : ?>
							<div class="swiper-slide work-process__icon-slider--carousel-slide">
								<h3 class="swiper-slide__title">
									<?= $item["title"]; ?>
								</h3>
								
								<img class="swiper-slide__img" src="<?= $item["img"]; ?>" alt="icon">
								
								
								<div class="styled-redactor swiper-slide__text"><?= $item["text"]; ?></div>
							</div>
						<? endforeach; ?>
					</div>
				</div>
				
				<div class="work-process__icon-slider--dots"></div>
			</div>
			
			<div class="work-process__text-side">
				<h1 class="section-title work-process__text-side--title"><?= $fields["stages-title"]; ?></h1>
				<div class="work-process__text-side--desc style-redactor">
					<?= $fields["stages-text"]; ?>
				</div>
			</div>
		</div>
	</div>
	
	<div class="block-margin"></div>
	
	<div class="container-fluid">
		<img src="<?= $fields["img-text-img"]; ?>" alt="" class="specialization__bg-img">
		<span class="specialization__bg-shadow"></span>
		<div class="container">
			<div class="specialization">
				<div class="specialization__content">
					<h2 class="section-title specialization__title">
						<?= $fields["img-text-title"]; ?>
					</h2>
					<div class="specialization__text-wrap">
						<div class="specialization__text styled-redactor">
							<?= $fields["img-text-text"]; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="block-margin"></div>
	
	<div class="container">
		<div class="chart-block opt-block">
			<div class="chart-block__inner opt-block__inner">
				<canvas class="chart-block__chart-wrap opt-block__img-wrap" id="chart-wrap" data-check-visibility></canvas>
			</div>
			<div id="animationProgress"></div>
			<div class="chart-block__inner opt-block__inner">
				<h3 class="section-title chart-block__title opt-block__title">
					<?= $fields["chart-title"]; ?>
				</h3>
				<div class="chart-block__text opt-block__text styled-redactor">
					<?= $fields["chart-text"]; ?>
				</div>
			</div>
		</div>
	</div>
	
	<div class="block-margin"></div>
	
	<div class="container">
		<div class="tech-stack">
			<h2 class="section-title tech-stack__title">
				<?= $fields["tech-title"]; ?>
			</h2>
			<ul class="tech-stack__list">
				<? foreach($fields["tech"] as $item) : ?>
					<li class="tech-stack__item" data-ts-tooltip data-info="<?= $item["tooltip-text"]; ?>">
						<img src="<?= $item["icon"]; ?>" alt="" class="tech-stack__item-img">
						<h4 class="tech-stack__item-title"><?= $item["title"]; ?></h4>
					</li>
				<? endforeach; ?>
			</ul>
		</div>
	</div>

<? get_footer();
