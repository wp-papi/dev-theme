<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,700italic,400italic" rel="stylesheet" type="text/css">
		<link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" type="text/css">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div class="papi-debug">
			<div>
				<p>Papi debug info</p>
				<div class="papi-debug-info">
					<table>
						<thead>
							<tr>
								<th>Key</th>
								<th>Value</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Page Type</td>
								<td><?php echo empty( papi_get_page_type_name() ) ? 'No papi page type' : papi_get_page_type_name() ; ?></td>
							</tr>
							<tr>
								<td>Template</td>
								<td><?php global $template; echo basename( $template ); ?></td>
							</tr>
							<tr>
								<td>Fields</td>
								<td>
									<?php print_r( papi_get_slugs() ); ?>
								</td>
							</tr>
							<tr>
								<td>URL</td>
								<td>
									<a href="<?php echo current_url(); ?>"><?php echo current_url(); ?></a>
								</td>
							</tr>
							<tr>
								<td>PHP Version</td>
								<td>
									<?php echo phpversion(); ?>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
