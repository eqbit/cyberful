<? get_header(); ?>
<div class="container">
	<h1 class="page-title">Публикации</h1>
	<div class="blog__list">
		<? if(have_posts()) : while(have_posts()) : the_post(); ?>
			<div class="blog-item">
				<div class="blog-item__img">
					<img src="" alt="">
				</div>
				
				<div class="blog-item__title"><? the_title(); ?></div>
			</div>
		<? endwhile; endif; ?>
	</div>
</div>
<? get_footer();