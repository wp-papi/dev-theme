<?php
	get_header();
	while ( have_posts() ) : the_post();
?>

<div class="entry">
	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	<div class="entry-text">
		<?php the_content(); ?>
	</div>
</div>

<?php
	endwhile;
	get_footer();
?>
