<? get_header(); ?>
<div class="container">
	<h1 class="page-title">Публикации</h1>
	<div class="blog__list">
		<? if(have_posts()) : while(have_posts()) : the_post(); ?>
			<div class="blog-item">
				<a href="<?= get_the_permalink(); ?>" class="blog-item__title">
					<h2 class="blog-item__title"><? the_title(); ?></h2>
				</a>
				
				<? if(get_field('preview-img')) : ?>
					<div class="blog-item__img">
						<img src="<?= get_field('preview-img'); ?>" alt="">
					</div>
				<? endif; ?>
				
				<? if(get_field('short-description')) : ?>
					<div class="blog-item__short-description">
						<?= get_field('short-description'); ?>
					</div>
				<? endif; ?>
				
				<a href="<?= get_the_permalink(); ?>" class="blog-item__read-more">
					Читать полностью
				</a>
			</div>
		<? endwhile; endif; ?>
	</div>
</div>
<? get_footer();