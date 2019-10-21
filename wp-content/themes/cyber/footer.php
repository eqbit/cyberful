
<?
global $no_form;
if(!is_front_page() && !$no_form) {
	get_block("main-form");
}?>

</main>
<footer class="footer" id="footer">
	<div class="container">
		<div class="footer-wrap">
			<div class="footer-part">
				<ul class="footer-part__list">
					<li class="footer-part__item">
						<p>© Cyberful 2019</p>
					</li>
					<li class="footer-part__item">
						<a href="#policy" data-fancybox>Политика обработки персональных данных</a>
					</li>
				</ul>
			</div>
			<div class="footer-part">
				<ul class="footer-part__list">
					<li class="footer-part__item">
						<a href="/dev">
							Разработка сайта
						</a>
					</li>
					<li class="footer-part__item">
						<a href="/optimization">
							Продвижение сайта
						</a>
					</li>
					<li class="footer-part__item">
						<a href="/support">
							Техническая поддержка
						</a>
					</li>
				</ul>
			</div>
			<div class="footer-part">
				<ul class="footer-part__list">
					<li class="footer-part__item">
						<a href="/maintenance">
							Сопровождение
						</a>
					</li>
					<li class="footer-part__item">
						<a href="/context">
							Контекст
						</a>
					</li>
					<li class="footer-part__item">
						<a href="/contacts">
							Контакты
						</a>
					</li>
				</ul>
			</div>
			<div class="footer-part">
				<ul class="footer-part__list">
					<li class="footer-part__item">
						<p>
							Офис разработки: <br>
							Тюмень, ули 50 лет Октября 206,офис 11
						</p>
					</li>
					<li class="footer-part__item">
						<a href="tel:+73452699968">
							+7 (3452) 69-99-68
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</footer>

<? get_block("popup-form"); ?>
<? get_block("policy"); ?>

<? wp_footer(); ?>

<script src="<?= get_template_directory_uri(); ?>/vendor/jQuery.js"></script>
<script src="<?= get_template_directory_uri(); ?>/vendor/typed.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/vendor/slick.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/vendor/jQuery.visible.js"></script>
<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/vendor/fancybox/style.css">
<script src="<?= get_template_directory_uri(); ?>/vendor/fancybox/script.js"></script>
<script src="<?= get_template_directory_uri(); ?>/vendor/chart.js"></script>
<script src="<?= get_template_directory_uri(); ?>/vendor/input-mask.js"></script>
<script src="<?= get_template_directory_uri(); ?>/vendor/swiper.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/app.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/custom.js"></script>
</body>

</html>