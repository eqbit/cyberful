<!doctype html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<? wp_head(); ?>
	<link rel="icon" type="image/png" href="<?= get_template_directory_uri(); ?>/images/favicon.png" />
	<link
		href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,400i,500,700,900&display=swap&subset=cyrillic"
		rel="stylesheet">
	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/app.css">
	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style.css">
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-150335761-1"></script>
	<script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      
      gtag('config', 'UA-150335761-1');
	</script>
	
	<script type="text/javascript" >
      (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
      (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
      
      ym(55816039, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
      });
	</script>
</head>

<body>
<header class="header">
	<div class="header-top-container">
		<div class="container">
			<div class="header-top">
				<a href="/" class="header-top__logo">
					<img src="<?= get_template_directory_uri(); ?>/images/logo.svg" alt="logo">
				</a>
				
				<div class="header-top-contacts">
					<div class="header-top-contacts-phones">
						<svg width="40" height="40" viewBox="0 0 40 40" fill="none"
						     xmlns="http://www.w3.org/2000/svg">
							<path
								d="M37.0284 29.6678L32.0786 24.5463C32.074 24.5415 32.0693 24.5368 32.0646 24.5321C30.6907 23.1582 28.4671 23.158 27.0932 24.5321L24.8333 26.7918C23.7926 27.8326 22.108 27.8328 21.0672 26.7918C21.0667 26.7914 21.0662 26.7909 21.0658 26.7904L13.2069 19.1175C12.1662 18.0767 12.166 16.3921 13.2069 15.3512L15.4667 13.0915C16.8374 11.7208 16.8374 9.49061 15.4667 8.11999L10.4952 3.14851C9.12453 1.77797 6.89437 1.77797 5.52375 3.14851C5.52328 3.14898 3.86625 4.80609 3.86664 4.80562C3.86625 4.80609 3.71641 4.95585 3.71602 4.95632C-1.23772 9.90999 -1.23952 17.9282 3.7168 22.8845L17.3009 36.2827C22.2436 41.2255 30.2483 41.2439 35.2109 36.3002C35.2381 36.2751 36.9943 34.6574 37.0205 34.6313C38.3884 33.2632 38.391 31.039 37.0284 29.6678ZM7.18093 4.80562C7.63781 4.34875 8.38117 4.34875 8.83804 4.80562L13.8095 9.77709C14.2675 10.2351 14.2676 10.9762 13.8095 11.4343L12.981 12.2628L6.35234 5.63421L7.18093 4.80562ZM18.9572 34.6249L5.37313 21.2266C1.54516 17.3986 1.3636 11.3622 4.72649 7.32265L11.3319 13.928C9.60179 15.8922 9.67374 18.8986 11.5512 20.7761L19.4115 28.4504C21.2901 30.3276 24.2869 30.4049 26.2568 28.6671L32.8616 35.2719C28.7822 38.6606 22.7822 38.4497 18.9572 34.6249ZM35.3772 32.9599L34.5897 33.6856L27.9218 27.0177L28.7503 26.1892C29.2068 25.7328 29.9435 25.7314 30.4016 26.1833C30.4107 26.1928 35.354 31.3076 35.3633 31.3168C35.8156 31.7692 35.8202 32.5021 35.3772 32.9599Z"
								fill="black" />
							<path
								d="M20.0796 0.00146484C19.4325 0.00146484 18.9079 0.526151 18.9079 1.17326C18.9079 1.82037 19.4325 2.34505 20.0796 2.34505C29.7715 2.34505 37.6564 10.23 37.6564 19.9218C37.6564 20.5689 38.1811 21.0936 38.8282 21.0936C39.4753 21.0936 40 20.569 40 19.9218C40 8.91176 31.0906 0.00146484 20.0796 0.00146484Z"
								fill="black" />
							<path
								d="M20.0796 4.68896C19.4325 4.68896 18.9079 5.21365 18.9079 5.86076C18.9079 6.50786 19.4325 7.03255 20.0796 7.03255C27.187 7.03255 32.9693 12.8148 32.9693 19.9222C32.9693 20.5693 33.494 21.094 34.1411 21.094C34.7882 21.094 35.3129 20.5694 35.3129 19.9222C35.3129 11.5226 28.4792 4.68896 20.0796 4.68896Z"
								fill="black" />
							<path
								d="M20.0796 9.37598C19.4325 9.37598 18.9079 9.90066 18.9079 10.5478C18.9079 11.1949 19.4325 11.7196 20.0796 11.7196C24.6025 11.7196 28.2821 15.3992 28.2821 19.922C28.2821 20.5691 28.8068 21.0938 29.4539 21.0938C30.101 21.0938 30.6257 20.5692 30.6257 19.922C30.6257 14.1069 25.8948 9.37598 20.0796 9.37598Z"
								fill="black" />
							<path
								d="M20.0796 14.0625C19.4325 14.0625 18.9079 14.5872 18.9079 15.2343C18.9079 15.8814 19.4325 16.4061 20.0796 16.4061C22.018 16.4061 23.595 17.983 23.595 19.9214C23.595 20.5686 24.1197 21.0932 24.7668 21.0932C25.4139 21.0932 25.9386 20.5686 25.9386 19.9214C25.9385 16.6908 23.3103 14.0625 20.0796 14.0625Z"
								fill="black" />
						</svg>
						<a href="tel:+73452699968" class="header-top-contacts-phones__item">+7(3452)69-99-68</a>
					</div>
					<div class="btn btn_primary" data-popup-form-toggle>ОСТАВИТЬ ЗАЯВКУ</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid  dark-bg">
		<div class="container">
			<div class="header-menu">
				<a href="/dev" class="header-menu-item">РАЗРАБОТКА</a>
				<a href="/optimization" class="header-menu-item">ПРОДВИЖЕНИЕ</a>
				<a href="/support" class="header-menu-item">ПОДДЕРЖКА</a>
				<a href="/maintenance" class="header-menu-item">СОПРОВОЖДЕНИЕ</a>
				<a href="/context" class="header-menu-item">КОНТЕКСТ</a>
				<a href="/contacts" class="header-menu-item">КОНТАКТЫ</a>
			</div>
		</div>
	</div>
</header>
<main>

<div class="m-menu" data-m-menu>
	<nav class="m-menu__nav" data-m-menu-nav>
		<ul class="m-menu__list" data-m-menu-list>
			<li class="m-menu__item">
				<a href="#0"><img src="<?= get_template_directory_uri(); ?>/images/logo.svg" alt="logo"></a>
			</li>
			<li class="m-menu__item">
				<a href="/dev" class="m-menu__link">РАЗРАБОТКА</a>
			</li>
			<li class="m-menu__item">
				<a href="/optimization" class="m-menu__link">ПРОДВИЖЕНИЕ</a>
			</li>
			<li class="m-menu__item">
				<a href="/support" class="m-menu__link">ПОДДЕРЖКА</a>
			</li>
			<li class="m-menu__item">
				<a href="/maintenance" class="m-menu__link">СОПРОВОЖДЕНИЕ</a>
			</li>
			<li class="m-menu__item">
				<a href="/context" class="m-menu__link">КОНТЕКСТ</a>
			</li>
			<li class="m-menu__item">
				<a href="/contacts" class="m-menu__link">КОНТАКТЫ</a>
			</li>
			<li class="m-menu__item">
				<a href="tel:+73452699968" class="m-menu__link">+7 (3452) 69-99-68</a>
			</li>
		</ul>
	</nav>
	<button class="m-menu__hamburger" data-toggle-m-menu-ham>
		<span class="m-menu__hamburger-line"></span>
		<span class="m-menu__hamburger-line"></span>
		<span class="m-menu__hamburger-line"></span>
	</button>
</div>

<div class="dev-message"><p>Сайт находится на этапе разработки</p></div>
	<? if(!is_front_page()) : ?>
		<div class="block-distation"></div>
		<div class="block-margin"></div>
	<? endif; ?>
	