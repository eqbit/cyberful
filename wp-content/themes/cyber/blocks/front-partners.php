<? pre($fields); ?>
<div class="container-fluid our-clients__main-wrap" data-check-visibility>
	<div class="container">
		<div class="our-clients">
			<h4 class="our-clients__title">
				<?= $fields["clients-title"]; ?>
			</h4>
			<ul class="our-clients__list" data-op-slider>
				<? foreach($fields["clients"] as $item) : ?>
					<li class="our-clients__item">
						<img src="<?= $item["img"]; ?>" alt=""
						     class="our-clients__item--img">
					</li>
				<? endforeach; ?>
			</ul>
		</div>
	</div>
</div>