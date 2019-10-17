<? get_header(); ?>

<? the_post(); ?>

<div class="container">
	<h1 class="site-block__title"><? the_title(); ?></h1>
	
	<div class="portfolio-content">
		<?= get_field("main-text"); ?>
	</div>
</div>

<? get_footer();
