<?php
get_header();
while ( have_posts() ) : the_post();
?>

<div class="entry">
	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	<?php
	$hero = papi_get_field( 'hero_image' );
	if ( $hero ):
		?>
		<div class="entry-hero">
			<img src="<?php echo $hero->url; ?>" />
		</div>
		<?php
	endif;
	?>

	<h1>Content</h1>
	<?php $feature_module = papi_get_field( 'feature_module' ); ?>
	<h2><?php echo $feature_module->post_title; ?></h2>
	<?php echo apply_filters( 'the_content', $feature_module->post_content ); ?>
</div>

<?php
	endwhile;
	get_footer();
?>
