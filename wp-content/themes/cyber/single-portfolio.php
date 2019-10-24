<? get_header(); ?>

<? the_post(); ?>

<div class="container">
	<h1 class="site-block__title"><? the_title(); ?></h1>
	
	<div class="portfolio-info">
		<?
		$post_tags = get_the_tags();
		pre($post_tags);
		?>
	</div>
	
	<div class="portfolio-content styled-redactor">
		<?= get_field("main-text"); ?>
	</div>
</div>

<? get_footer();
