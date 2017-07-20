<?php
$widget_id = "widget_" . $args["widget_id"];
if( get_field('header', $widget_id) ) {
    $header = get_field('header', $widget_id);
}
if( get_field('subheader', $widget_id) ) {
    $subheader = get_field('subheader', $widget_id);
}
$page_link = '#';
if( get_field('page_link', $widget_id) ) {
    $page_link = get_field('page_link', $widget_id);
}
$button_text = 'Contact Widget';
if( get_field('button_text', $widget_id) ) {
    $button_text = get_field('button_text', $widget_id);
}
if( get_field('background_image', $widget_id) ) {
    $image = get_field('background_image', $widget_id);
}
?>
<div class="wp-swift-fancy-contact-widget">

	<?php if ( isset($image) ) : ?>
		<div class="image" style="background-image: url(<?php echo $image['sizes']['medium_large']; ?>);">
	<?php endif; ?>

	<div class="wrapper">
		<div class="text-center">

			<?php if (isset($header)): ?>
				<h5><?php echo $header ?></h5>
				<hr>
			<?php endif ?>

			<div class="buttons">
				<a href="<?php echo $page_link ?>" class="button large orange"><?php echo $button_text ?></a>
			</div>

			<?php if (isset($subheader)): ?>
				<p><?php echo $subheader ?></p>
			<?php endif ?>

		</div>
	</div><!-- @end .wrapper -->

	<?php if ( isset($image) ) : ?>
		</div><!-- @end .image -->
	<?php endif; ?>

</div><!-- @end .wp-swift-fancy-contact-widget -->