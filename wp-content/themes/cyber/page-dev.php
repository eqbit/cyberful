<? get_header(); ?>
	
	<div class="container">
		<div class="img-info">
			<div class="img-info__inner">
				<div class="img-info__img-wrapper">
					<img src="<?= get_template_directory_uri(); ?>/images/dev-img1.png" alt="block-img"
					class="img-info__main-img">
				</div>
				<div class="img-info__text-wrapper">
					<h2 class="img-info__title section-title">
						Разработка сайтов
					</h2>
					<p class="img-info__text">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
						labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
						laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
						voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
						non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<p class="img-info__text">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
						labore et dolore magna aliqua.
					</p>
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
						<div class="swiper-slide work-process__icon-slider--carousel-slide">
							<img src="/images/wp-icon1.svg" alt="icon">
							<h3>
								Брифинг
							</h3>
							<p>
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi rem sit reprehenderit magnam
								saepe ad accusamus ratione, non tempore nesciunt vero nostrum. Doloribus, obcaecati nihil!
							</p>
						</div>
						<div class="swiper-slide work-process__icon-slider--carousel-slide">
							<img src="/images/wp-icon1.svg" alt="icon">
							<h3>
								Reprehenderit magnam
							</h3>
							<p>
								Nam molestie leo tortor, nec aliquam justo ultrices at. Nunc sed mattis dui, et lobortis
								nisi. Phasellus aliquet, nibh eget sodales aliquet, lorem massa sollicitudin eros.
							</p>
						</div>
						<div class="swiper-slide work-process__icon-slider--carousel-slide">
							<img src="/images/wp-icon1.svg" alt="icon">
							<h3>
								Doloribus
							</h3>
							<p>
								Praesent vehicula, ipsum id dignissim tristique, enim ipsum iaculis ligula, ac
								posuere dui elit non lectus. Proin ultricies ipsum sodales lorem sodales, id sodales enim
								pulvinar.
							</p>
						</div>
						<div class="swiper-slide work-process__icon-slider--carousel-slide">
							<img src="/images/wp-icon1.svg" alt="icon">
							<h3>
								Accusamus
							</h3>
							<p>
								Maecenas rutrum augue non eleifend dignissim. Sed vel sem velit. Vivamus aliquam consectetur
								porttitor. Curabitur pulvinar mattis tortor, sit amet varius sapien hendrerit non.
							</p>
						</div>
						<div class="swiper-slide work-process__icon-slider--carousel-slide">
							<img src="/images/wp-icon1.svg" alt="icon">
							<h3>
								Vero nostrum
							</h3>
							<p>
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi rem sit reprehenderit magnam
								saepe ad accusamus ratione, non tempore nesciunt vero nostrum. Doloribus, obcaecati nihil!
							</p>
						</div>
						<div class="swiper-slide work-process__icon-slider--carousel-slide">
							<img src="/images/wp-icon1.svg" alt="icon">
							<h3>
								Sit amet
							</h3>
							<p>
								Fusce nec justo vulputate, maximus nisi sit amet, varius lectus.
								Praesent dapibus aliquam dolor ac congue. Duis eget nisl dolor.
								Nullam tempor tortor eu scelerisque rutrum.
							</p>
						</div>
					</div>
				</div>
				<div class="work-process__icon-slider--dots"></div>
			</div>
			
			<div class="work-process__text-side">
				<h1 class="section-title work-process__text-side--title">
					Как мы работаем
				</h1>
				<p class="work-process__text-side--desc">
					Curabitur lacus tellus, pellentesque nec consequat eget, accumsan et turpis. Sed iaculis porttitor
					mauris, et finibus sapien ultricies at. Ut in tristique elit.
				</p>
			</div>
		</div>
	</div>
	
	<div class="block-margin"></div>
	
	<div class="container-fluid">
		<img src="<?= get_template_directory_uri(); ?>/images/spec-bg.png" alt="" class="specialization__bg-img">
		<span class="specialization__bg-shadow"></span>
		<div class="container">
			<div class="specialization">
				<div class="specialization__content">
					<h2 class="section-title specialization__title">
						Специализация
					</h2>
					<div class="specialization__text-wrap">
						<p class="specialization__text">
							99% веб сайтов требуют изменения контентной части без помощи программиста.
						</p>
						<p class="specialization__text">
							Чтобы легко дать такую возможность, разработку базируем на системах управления контентом
							- CMS.
						</p>
					</div>
					<div class="specialization__imgs-wrap">
						<img src="<?= get_template_directory_uri(); ?>/images/wp-logo.svg" alt="wordpress"
						     class="specialization__img">
					</div>
					<p class="specialization__desc">
						Более трети всех сайтов в мире сделано на Wordpress.
					</p>
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
					Прогнозируем эффективность
					на этапе проектирования
				</h3>
				<p class="chart-block__text opt-block__text">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
					dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
					ex
					ea commodo consequat.
				</p>
			</div>
		</div>
	</div>
	
	<div class="block-margin"></div>
	
	<div class="container">
		<div class="tech-stack">
			<h2 class="section-title tech-stack__title">
				Стек технологий
			</h2>
			<ul class="tech-stack__list">
				<li class="tech-stack__item">
					<img src="<?= get_template_directory_uri(); ?>/images/s-html.png" alt="html5" class="tech-stack__item-img">
					<h4 class="tech-stack__item-title">HTML 5</h4>
				</li>
				<li class="tech-stack__item">
					<img src="<?= get_template_directory_uri(); ?>/images/s-css.png" alt="ccs3" class="tech-stack__item-img">
					<h4 class="tech-stack__item-title">CSS 3</h4>
				</li>
				<li class="tech-stack__item">
					<img src="<?= get_template_directory_uri(); ?>/images/s-react.png" alt="react" class="tech-stack__item-img">
					<h4 class="tech-stack__item-title">React</h4>
				</li>
				<li class="tech-stack__item">
					<img src="<?= get_template_directory_uri(); ?>/images/s-webpack.png" alt="webpack" class="tech-stack__item-img">
					<h4 class="tech-stack__item-title">Webpack</h4>
				</li>
				<li class="tech-stack__item">
					<img src="<?= get_template_directory_uri(); ?>/images/s-jquery.png" alt="jQuery" class="tech-stack__item-img">
					<h4 class="tech-stack__item-title">jQuery</h4>
				</li>
				<li class="tech-stack__item">
					<img src="<?= get_template_directory_uri(); ?>/images/s-bootstrap.png" alt="bootstrap4" class="tech-stack__item-img">
					<h4 class="tech-stack__item-title">Bootstrap4</h4>
				</li>
			
			</ul>
			
			<ul class="tech-stack__list">
				<li class="tech-stack__item">
					<img src="<?= get_template_directory_uri(); ?>/images/s-ubuntu.png" alt="linux" class="tech-stack__item-img">
					<h4 class="tech-stack__item-title">Linux</h4>
				</li>
				<li class="tech-stack__item">
					<img src="<?= get_template_directory_uri(); ?>/images/s-php.png" alt="php7" class="tech-stack__item-img">
					<h4 class="tech-stack__item-title">PHP 7.x</h4>
				</li>
				<li class="tech-stack__item">
					<img src="<?= get_template_directory_uri(); ?>/images/s-mysql.png" alt="my-sql" class="tech-stack__item-img">
					<h4 class="tech-stack__item-title">MySQL</h4>
				</li>
				<li class="tech-stack__item">
					<img src="<?= get_template_directory_uri(); ?>/images/s-nodejs.png" alt="nodeJS" class="tech-stack__item-img">
					<h4 class="tech-stack__item-title">Node JS</h4>
				</li>
				<li class="tech-stack__item">
					<img src="<?= get_template_directory_uri(); ?>/images/s-wordpress.png" alt="wordpress" class="tech-stack__item-img">
					<h4 class="tech-stack__item-title">Wordpress</h4>
				</li>
				<li class="tech-stack__item">
					<img src="<?= get_template_directory_uri(); ?>/images/s-bitrix.png" alt="bitrix" class="tech-stack__item-img">
					<h4 class="tech-stack__item-title">Bitrix</h4>
				</li>
			</ul>
		
		</div>
	</div>

<? get_footer();
