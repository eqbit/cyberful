
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
						<a href="#">Политика обработки персональных данных</a>
					</li>
				</ul>
			</div>
			<div class="footer-part">
				<ul class="footer-part__list">
					<li class="footer-part__item">
						<a href="#">
							Разработка сайта
						</a>
					</li>
					<li class="footer-part__item">
						<a href="#">
							Продвижение сайта
						</a>
					</li>
					<li class="footer-part__item">
						<a href="#">
							Техническая поддержка
						</a>
					</li>
				</ul>
			</div>
			<div class="footer-part">
				<ul class="footer-part__list">
					<li class="footer-part__item">
						<a href="#">
							Цена
						</a>
					</li>
					<li class="footer-part__item">
						<a href="#">
							Вакансии
						</a>
					</li>
					<li class="footer-part__item">
						<a href="#">
							О нас
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

<? wp_footer(); ?>

<script src="<?= get_template_directory_uri(); ?>/vendor/jQuery.js"></script>
<script src="<?= get_template_directory_uri(); ?>/vendor/typed.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/vendor/slick.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/vendor/jQuery.visible.js"></script>
<script src="https://api-maps.yandex.ru/2.1/?apikey=b651fec1-d70f-4c48-a6fa-393232c5cf36&lang=ru_RU" type="text/javascript"></script>
<script src="<?= get_template_directory_uri(); ?>/js/app.js"></script>
</body>

</html>