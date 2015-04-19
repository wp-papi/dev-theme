<?php
	get_header();
	while ( have_posts() ) : the_post();
?>

<div class="entry">
	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	<?php
		$hero = papi_field('hero_image');
		if ($hero):
			?>
			<div class="entry-hero">
				<img src="<?php echo $hero->url; ?>" />
			</div>
			<?php
		endif;
	?>

	<div class="entry-text">
		<?php the_papi_field('editor'); ?>
	</div>
</div>

<?php
	endwhile;
	get_footer();
?>
