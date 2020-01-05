<? get_header(); ?>
<div class="container">
	<div class="blog__list">
		<? if(have_posts()) : while(have_posts()) : the_post(); ?>
			<div class="blog-item">
				<div class="blog-item__date">
					<? the_date('j F Y'); ?>
				</div>
				
				<a href="<?= get_the_permalink(); ?>" class="blog-item__title">
					<h2 class="blog-item__title"><? the_title(); ?></h2>
				</a>
				
				<div class="blog-item__content">
					<? if(get_field('preview-img')) : ?>
						<div class="blog-item__img">
							<img src="<?= get_field('preview-img')["sizes"]["blog-thumb"]; ?>" alt="">
						</div>
					<? endif; ?>
					
					<? if(get_field('short-description')) : ?>
						<div class="blog-item__short-description">
							<?= get_field('short-description'); ?>
						</div>
					<? endif; ?>
				</div>
				
				<a href="<?= get_the_permalink(); ?>" class="blog-item__read-more">
					<span>Читать полностью</span>
				</a>
			</div>
		<? endwhile; endif; ?>
		
		<div class="pagination">
			<?= get_the_posts_pagination(); ?>
		</div>
	</div>
</div>
<? get_footer();