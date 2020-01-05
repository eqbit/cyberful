<? get_header(); ?>

<?
the_post();
$post_tags = get_the_terms( get_the_ID(), 'portfolio_tag' );

$fields = get_fields();
?>
	
	<div class="container">
		<h1 class="site-block__title"><? the_title(); ?></h1>
		
		<? if ( $post_tags && count( $post_tags ) ) : ?>
			<div class="portfolio-info">
				<div class="portfolio-info__tags">
					<? foreach ( $post_tags as $item ) : ?>
						<div class="portfolio-info__tag"><?= $item->name; ?></div>
					<? endforeach; ?>
				</div>
			</div>
		<? endif; ?>
		
		<div class="portfolio-content styled-redactor">
			<?= get_field( "main-text" ); ?>
		</div>
		
		<? if ( $fields["author"] ) : ?>
			<h2>Автор</h2>
			
			<div class="sub-block-margin"></div>
			
			<div class="team">
				<? foreach ( $fields["author"] as $id ) : ?>
					<div class="team-unit">
						<div class="team-unit__img">
							<img src="<?= get_field( "img", $id )["sizes"]["category-thumb"]; ?>" alt="">
						</div>
						<div class="team-unit__bottom">
							<b><?= get_the_title( $id ); ?></b> <br>
						</div>
					</div>
				<? endforeach; ?>
			</div>
		<? endif; ?>
	</div>

<? get_footer();
