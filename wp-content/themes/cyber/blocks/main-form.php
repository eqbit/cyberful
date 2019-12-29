<section class="section-contacts" id="section-contacts">
	<div class="block-margin"></div>
	<div class="container">
		<h3 class="section-title contacts-title">
			Оставьте контакты
		</h3>
		<p class="section-subtitle section-subtitle_mt20 contacts-subtitle">
			Свяжусь с вами в течение рабочего дня и отвечу на все вопросы по условиям сотрудничества
		</p>
	</div>
	<div class="container">
		<form class="main-form" data-form-handle>
			<div class="main-form__side-wrap">
				<div class="main-form__inputs-wrap">
					<input type="hidden" name="form_name" value="Заявка со страницы <? the_title(); ?>">
					
					<input type="text" class="main-form__field main-form__input" name="name" placeholder="Имя" required>
					<input type="tel" class="main-form__field main-form__input" name="phone" data-phone placeholder="Телефон"
					       required>
					<input type="email" class="main-form__field main-form__input" name="email" placeholder="Почта">
				</div>
				<textarea name="message" cols="30" rows="5" class="main-form__field main-form__textarea"
				          placeholder="Можете кратко описать вашу проблему"></textarea>
				<small class="main-form__privacy">
					Отправляя заявку, вы соглашаетесь с <a href="#policy" data-fancybox>Политикой
						конфиденциональности</a>
				</small>
			</div>
			<div class="main-form__side-wrap">
				<button type="submit" class="main-form__btn-submit">
					Отправить
				</button>
			</div>
		</form>
	</div>
	<div class="block-margin"></div>
</section>