<?php
	get_header();
	while ( have_posts() ) : the_post();
?>

<div class="entry">
	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	<?php
		$hero = papi_field( 'pages' );
		if ($hero):
			?>
			<div class="entry-hero">
				<img src="<?php echo $hero->url; ?>" />
			</div>
			<?php
		endif;
	?>

	<div class="entry-text">
		<h1>Page lists</h1>
		<ul>
		<?php
			$pages = papi_field( 'pages' );

			foreach ( $pages as $p ) {
				foreach ( $p as $post ) {
					echo '<li><a href="' . get_permalink( $post ) . '">' . $post->post_title . '</a></li>';
				}
			}
		?>
		</ul>
	</div>
</div>

<?php
	endwhile;
	get_footer();
?>
