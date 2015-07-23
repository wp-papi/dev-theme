<?php
	get_header();
	while ( have_posts() ) : the_post();
?>

<div class="entry">
	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	<div class="entry-text">
		<h1>Flex lists</h1>
		<ul>
		<?php
			$sections = papi_field( 'sections' );
			echo '<pre>';
			var_dump($sections);
			echo '</pre>';
		?>
		</ul>
	</div>
</div>

<?php
	endwhile;
	get_footer();
?>
