<? get_header(); ?>

<? if (20 == $post->post_parent) : ?>

<? $fields = get_fields(); ?>
	
	<div class="container">
		<div class="site-block opt-block">
			<div class="site-block__inner opt-block__inner">
				<div class="site-block__card">
					<h4 class="site-block__card-title"><?= get_field("type"); ?></h4>
					<i class="site-block__card-icon">
						<img src="<?= $fields["icon"]; ?>" alt="">
					</i>
					<div class="site-block__card-price">
						<p>Стоимость</p>
						<span></span>
						<p><?= $fields["price"]; ?></p>
					</div>
				</div>
			</div>
			<div class="site-block__inner opt-block__inner">
				<h1 class="site-block__title section-title opt-block__title">
					<? the_title(); ?>
				</h1>
				<div class="site-block__text opt-block__text styled-redactor">
					<?= $fields["description"]; ?>
				</div>
			</div>
		</div>
	</div>
	
	<div class="block-margin"></div>
	
	<div class="container">
		<h3 class="section-title contacts-title">
			<?= $fields["modules-title"]; ?>
		</h3>
		<div class="block-margin"></div>
		<div class="linear-heroes">
			<? foreach($fields["modules"] as $item) : ?>
				<div class="linear-hero">
					<i class="linear-hero__icon">
						<img src="<?= $item["img"]; ?>" alt="">
					</i>
					<h5 class="linear-hero__title"><?= $item["title"]; ?></h5>
					<? if($item["text"]) : ?>
					<div class="linear-hero__text">
						<?= $item["text"]; ?>
					</div>
					<? endif; ?>
				</div>
			<? endforeach; ?>
		</div>
	</div>
	
	<div class="block-margin"></div>
	
	<div class="container-fluid">
		<img src="<?= $fields["wp-img"]; ?>" alt="bg-img" class="specialization__bg-img">
		<span class="specialization__bg-shadow"></span>
		<div class="container">
			<div class="specialization">
				<div class="specialization__content">
					<h2 class="section-title specialization__title"><?= $fields["wp-title"]; ?></h2>
					
					<div class="specialization__text-wrap styled-redactor"><?= $fields["wp-text"]; ?></div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="block-margin"></div>
	
	<div class="container">
		<h3 class="section-title"><?= $fields["advantages-title"]; ?></h3>
		<div class="block-margin"></div>
		<div class="imp-grid">
			<? foreach(get_field('advantages') as $item) : ?>
				<div class="imp-card">
					<div class="imp-card__icon-wrap">
						<img src="<?= $item["img"]; ?>" alt="icon" class="imp-card__icon">
					</div>
					<h4 class="imp-card__title"><?= $item["title"]; ?></h4>
					<p class="imp-card__text"><?= $item["text"]; ?></p>
				</div>
			<? endforeach; ?>
		</div>
		<div class="block-margin"></div>
		
		<button class="btn btn_secondary btn_long center-el"
		        data-popup-form-toggle
		        data-info="<?= $fields["button-form-title"]; ?>"><?= $fields["button-text"]; ?></button>
	</div>
	
	<div class="block-margin"></div>
	
	<div class="container">
		<h3 class="section-title"><?= $fields["dev-title"]; ?></h3>
		
		<div class="section-text"><?= $fields["dev-text"]; ?></div>
		
		<div class="block-margin"></div>
		
		<div class="tabs-deadline">
			<ul class="tabs-deadline__list" data-deadlines>
				<? foreach($fields["dev-stages"] as $i => $item) : ?>
					<li class="tabs-deadline__item">
						<a href="#deadline-tab-<?=$i;?>" class="tabs-deadline__point" data-deadline="<?=
						$item["time"]; ?>">
							<span class="tabs-deadline__inside-dot"></span>
						</a>
						<h2 class="tabs-deadline__item-title">
							<?= $item["label"]; ?>
						</h2>
					</li>
				<? endforeach; ?>
			</ul>
			
			<div class="tabs-deadline__tab-wrap"  data-deadline-screen>
				<? foreach($fields["dev-stages"] as $i => $item) : ?>
					<div class="tabs-deadline__tab" id="deadline-tab-<?=$i;?>">
						<h3 class="tabs-deadline__tab-title"><?= $item["title"]; ?></h3>
						
						<p class="tabs-deadline__tab-descr"><?= $item["text"]; ?></p>
					</div>
				<? endforeach; ?>
				
				<div class="tabs-deadline__watch">
					<i class="tabs-deadline__watch-icon">
						<svg width="94" height="94" viewBox="0 0 94 94" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g filter="url(#filter0_d)">
								<circle cx="47" cy="43" r="43" fill="white" />
							</g>
							<circle cx="47" cy="42.9999" r="34.1818" fill="white" stroke="#FF9800" stroke-width="2" />
							<rect x="82.1818" y="42.3485" width="1.30303" height="6.51515"
							      transform="rotate(90 82.1818 42.3485)" fill="#FF9800" />
							<rect x="18.3334" y="42.3485" width="1.30303" height="6.51515"
							      transform="rotate(90 18.3334 42.3485)" fill="#FF9800" />
							<rect x="72.338" y="67.4166" width="1.30303" height="6.56214"
							      transform="rotate(135 72.338 67.4166)" fill="#FF9800" />
							<rect x="27.1804" y="22.259" width="1.30303" height="6.50112"
							      transform="rotate(135 27.1804 22.259)" fill="#FF9800" />
							<rect x="71.4166" y="17.662" width="1.30303" height="6.51796"
							      transform="rotate(45 71.4166 17.662)" fill="#FF9800" />
							<rect x="26.2902" y="62.7885" width="1.30303" height="6.5453"
							      transform="rotate(45 26.2902 62.7885)" fill="#FF9800" />
							<rect x="46.3485" y="7.81812" width="1.30303" height="6.51515" fill="#FF9800" />
							<rect x="46.3485" y="71.6666" width="1.30303" height="6.51515" fill="#FF9800" />
							<defs>
								<filter id="filter0_d" x="0" y="0" width="94" height="94" filterUnits="userSpaceOnUse"
								        color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feColorMatrix in="SourceAlpha" type="matrix"
									               values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
									<feOffset dy="4" />
									<feGaussianBlur stdDeviation="2" />
									<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
									<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow" />
									<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape" />
								</filter>
							</defs>
						</svg>
						
						<span class="tabs-deadline__watch-icon--arrow"></span>
						<span class="tabs-deadline__watch-icon--arrow" data-deadline-arrow></span>
					</i>
					<p class="tabs-deadline__watch-time">
						от <?= $fields["dev-stages"][0]["time"]; ?> дней
					</p>
				</div>
			</div>
		</div>
	</div>
	
	<div class="block-margin"></div>
	
	<div class="container">
		<h3 class="section-title">
			Cтек технологий
		</h3>
		<div class="sub-block-margin"></div>
		<div class="tech-stack">
			<ul class="tools__list tech-stack__list">
				<li class="tools__item tech-stack__item">
					<img src="<?= get_template_directory_uri(); ?>/images/s-html.png" alt="html5" class="tools__item-img tech-stack__item-img">
					<h4 class="tools__item-title  tech-stack__item-title">HTML 5</h4>
				</li>
				<li class="tools__item tech-stack__item">
					<img src="<?= get_template_directory_uri(); ?>/images/s-css.png" alt="html5" class="tools__item-img tech-stack__item-img">
					<h4 class="tools__item-title  tech-stack__item-title">CSS 3</h4>
				</li>
				<li class="tools__item tech-stack__item">
					<img src="<?= get_template_directory_uri(); ?>/images/s-wordpress.png" alt="html5" class="tools__item-img tech-stack__item-img">
					<h4 class="tools__item-title  tech-stack__item-title">Wordpress</h4>
				</li>
				<li class="tools__item tech-stack__item">
					<img src="<?= get_template_directory_uri(); ?>/images/s-jquery.png" alt="html5" class="tools__item-img tech-stack__item-img">
					<h4 class="tools__item-title  tech-stack__item-title">jQuery</h4>
				</li>
				<li class="tools__item tech-stack__item">
					<img src="<?= get_template_directory_uri(); ?>/images/s-webpack.png" alt="html5" class="tools__item-img tech-stack__item-img">
					<h4 class="tools__item-title  tech-stack__item-title">Webpack</h4>
				</li>
				<li class="tools__item tech-stack__item">
					<img src="<?= get_template_directory_uri(); ?>/images/s-php.png" alt="html5" class="tools__item-img tech-stack__item-img">
					<h4 class="tools__item-title  tech-stack__item-title">PHP 7.x</h4>
				</li>
			</ul>
		</div>
	</div>

<? endif; ?>

<? get_footer();
