<? $no_top_margin = true; ?>
<? get_header(); ?>

<? $fields = get_fields(8); ?>

<? get_block("top-screen"); ?>

<? get_block("front-partners", $fields); ?>

<div class="block-margin"></div>

<? get_block("portfolio-slider"); ?>

<div class="block-margin"></div>

<? get_block("front-advantages"); ?>

<? get_block("main-form"); ?>

<? get_footer();