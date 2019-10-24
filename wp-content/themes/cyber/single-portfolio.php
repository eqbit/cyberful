<? get_header(); ?>

<?
the_post();
$post_tags = get_the_terms( get_the_ID(), 'portfolio_tag' );

$fields = get_fields();
?>
	
	<div class="container">
		<h1 class="site-block__title"><? the_title(); ?></h1>
		
		<div class="portfolio-info">
			<div class="portfolio-info__type">Тип работы: <?= $fields["type"]; ?></div>
			
			<? if ( $post_tags && count( $post_tags ) ) : ?>
				<div class="portfolio-info__tags">
					<? foreach ( $post_tags as $item ) : ?>
						<div class="portfolio-info__tag"><?= $item->name; ?></div>
					<? endforeach; ?>
				</div>
			<? endif; ?>
		</div>
		
		<div class="portfolio-content styled-redactor">
			<?= get_field( "main-text" ); ?>
		</div>
	</div>

<? get_footer();
