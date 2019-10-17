<? get_header(); ?>

<? if (20 == $post->post_parent) : ?>
	
	<div class="container">
		<div class="site-block opt-block">
			<div class="site-block__inner opt-block__inner">
				<div class="site-block__card">
					<h4 class="site-block__card-title"><?= get_field("type"); ?></h4>
					<i class="site-block__card-icon">
						<img src="<?= get_field("icon"); ?>" alt="">
					</i>
					<div class="site-block__card-price">
						<p>Стоимость</p>
						<span></span>
						<p><?= get_field("price"); ?></p>
					</div>
				</div>
			</div>
			<div class="site-block__inner opt-block__inner">
				<h1 class="site-block__title section-title opt-block__title">
					<? the_title(); ?>
				</h1>
				<p class="site-block__text opt-block__text">
					<?= get_field("description"); ?>
				</p>
			</div>
		</div>
	</div>
	
	<div class="block-margin"></div>
	
	<div class="container">
		<h3 class="section-title contacts-title">
			<?= get_field("modules-title"); ?>
		</h3>
		<div class="block-margin"></div>
		<div class="linear-heroes">
			<? foreach(get_field("modules") as $item) : ?>
				<div class="linear-hero">
					<i class="linear-hero__icon">
						<img src="<?= $item["img"]; ?>" alt="">
					</i>
					<h5 class="linear0hero__title"><?= $item["title"]; ?></h5>
				</div>
			<? endforeach; ?>
		</div>
	</div>
	
	<div class="block-margin"></div>
	
	<div class="container-fluid">
		<img src="<?= get_template_directory_uri(); ?>/images/spec-bg.png" alt="bg-img" class="specialization__bg-img">
		<span class="specialization__bg-shadow"></span>
		<div class="container">
			<div class="specialization">
				<div class="specialization__content">
					<h2 class="section-title specialization__title">
						Простая админ панель
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
						<img src="<?= get_template_directory_uri(); ?>/images/wp-logo.svg" alt="wordpress" class="specialization__img">
					</div>
					<p class="specialization__desc">
						Более трети всех сайтов в мире сделано на Worpress.
					</p>
				</div>
			</div>
		</div>
	</div>
	
	<div class="block-margin"></div>
	
	<div class="container">
		<h3 class="section-title">
			C нами удобно
		</h3>
		<div class="block-margin"></div>
		<div class="imp-grid">
			<div class="imp-card">
				<div class="imp-card__icon-wrap">
					<img src="<?= get_template_directory_uri(); ?>/images/imp-grid1.svg" alt="icon" class="imp-card__icon">
				</div>
				<h4 class="imp-card__title">
					Продуманный дизайн
				</h4>
				<p class="imp-card__text">
					Самая важная составляющая будущего сайта. От того, насколько проработан пользовательский интерфейс, напрямую зависят продающие свойства
				</p>
			</div>
			<div class="imp-card">
				<div class="imp-card__icon-wrap">
					<img src="<?= get_template_directory_uri(); ?>/images/imp-grid2.svg" alt="icon" class="imp-card__icon">
				</div>
				<h4 class="imp-card__title">
					Чистый код
				</h4>
				<p class="imp-card__text">
					Грамотная архитектура - основа любого хорошего интернет проекта.  Сайт проще поддерживать и новый функционал реализуется без проблем
				</p>
			</div>
			<div class="imp-card">
				<div class="imp-card__icon-wrap">
					<img src="<?= get_template_directory_uri(); ?>/images/imp-grid3.svg" alt="icon" class="imp-card__icon">
				</div>
				<h4 class="imp-card__title">
					Качественная верстка
				</h4>
				<p class="imp-card__text">
					Загрузка страницы в течение 3-4 секунд. Корректное отображение и правильная работа на любом современном устройстве
				</p>
			</div>
			<div class="imp-card">
				<div class="imp-card__icon-wrap">
					<img src="<?= get_template_directory_uri(); ?>/images/imp-grid4.svg" alt="icon" class="imp-card__icon">
				</div>
				<h4 class="imp-card__title">
					Любой доп. функционал
				</h4>
				<p class="imp-card__text">
					Галереи изображений, индивидуальные калькуляторы, каталоги статей, счетчики акций и любые индивидуальные пожелания
				</p>
			</div>
		</div>
		<div class="block-margin"></div>
		
		<button class="btn btn_primary btn_primary-long center-el" data-popup-form-toggle>
			ОСТАВЬТЕ ЗАЯВКУ НА РАЗРАБОТКУ САЙТА
		</button>
	</div>
	<div class="block-margin"></div>
	
	<div class="container">
		<div class="tabs-deadline">
			<ul class="tabs-deadline__list" data-deadlines>
				<li class="tabs-deadline__item">
					<a href="#tab-analytics" class="tabs-deadline__point" data-deadline="3">
						<span class="tabs-deadline__inside-dot"></span>
					</a>
					<h2 class="tabs-deadline__item-title">
						Аналитика
					</h2>
				</li>
				<li class="tabs-deadline__item">
					<a href="#tab-content" class="tabs-deadline__point" data-deadline="2">
						<span class="tabs-deadline__inside-dot"></span>
					</a>
					<h2 class="tabs-deadline__item-title">
						Контент
					</h2>
				</li>
				<li class="tabs-deadline__item">
					<a href="#tab-prototype" class="tabs-deadline__point" data-deadline="3">
						<span class="tabs-deadline__inside-dot"></span>
					</a>
					<h2 class="tabs-deadline__item-title">
						Прототип
					</h2>
				</li>
				<li class="tabs-deadline__item">
					<a href="#tab-design" class="tabs-deadline__point" data-deadline="10">
						<span class="tabs-deadline__inside-dot"></span>
					</a>
					<h2 class="tabs-deadline__item-title">
						Дизайн
					</h2>
				</li>
				<li class="tabs-deadline__item">
					<a href="#tab-coding" class="tabs-deadline__point" data-deadline="8">
						<span class="tabs-deadline__inside-dot"></span>
					</a>
					<h2 class="tabs-deadline__item-title">
						Верстка
					</h2>
				</li>
				<li class="tabs-deadline__item">
					<a href="#tab-production" class="tabs-deadline__point" data-deadline="4">
						<span class="tabs-deadline__inside-dot"></span>
					</a>
					<h2 class="tabs-deadline__item-title">
						Публикация
					</h2>
				</li>
			</ul>
			
			<div class="tabs-deadline__tab-wrap"  data-deadline-screen>
				<div class="tabs-deadline__tab" id="tab-analytics">
					<h3 class="tabs-deadline__tab-title">
						Аналитика и разработка ТЗ
					</h3>
					<p class="tabs-deadline__tab-descr">
						Проведем анализ конкурентов, учтем особенности и потребности вашего бизнеса
					</p>
				</div>
				<div class="tabs-deadline__tab" id="tab-content" style="display: none">
					<h3 class="tabs-deadline__tab-title">
						Подготовка контента
					</h3>
					<p class="tabs-deadline__tab-descr">
						Тексты могут быть как предоставлены заказчиком, так и быть написаны нашими специалистами
					</p>
				</div>
				<div class="tabs-deadline__tab" id="tab-prototype" style="display: none">
					<h3 class="tabs-deadline__tab-title">
						Создание прототипа
					</h3>
					<p class="tabs-deadline__tab-descr">
						Разработаем прототип проекта, призванный обозначить окончательную структуру веб-приложения
					</p>
				</div>
				<div class="tabs-deadline__tab" id="tab-design" style="display: none">
					<h3 class="tabs-deadline__tab-title">
						Дизайн и согласование
					</h3>
					<p class="tabs-deadline__tab-descr">
						Нарисуем макет, главной миссией которого будет донесение нужных идей до
						конечного пользователя
					</p>
				</div>
				<div class="tabs-deadline__tab" id="tab-coding" style="display: none">
					<h3 class="tabs-deadline__tab-title">
						Верстка и программирование
					</h3>
					<p class="tabs-deadline__tab-descr">
						Проводим разработку на 1С Битрикс или Wordpress, в зависимости от требований конктретного проекта
					</p>
				</div>
				<div class="tabs-deadline__tab" id="tab-production" style="display: none">
					<h3 class="tabs-deadline__tab-title">
						Наполнение, тестирование и публикация
					</h3>
					<p class="tabs-deadline__tab-descr">
						После выполнения всех работ наши специалисты проверят потенциально слабые места и
						отправят на публикацию полностью готовый продукт
					</p>
				</div>
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
						от 20 дней
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
