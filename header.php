<?php
/**
*    Theme Header
*/
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="alternate" href="<?php echo esc_url( home_url( '/' ) ); ?>" hreflang="en_gb" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="site">

	<header class="site-header">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid container-xxl">
				<a class="navbar-brand" href="/">
					<img class="img-fluid" src="/wp-content/themes/hopecommunity/assets/images/logo.svg" alt="Hope Community Projects Logo"> 
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbar-collapse">
				<?php wp_nav_menu(array(
						'theme_location' => 'main-menu',
						'menu_id'        => 'nav-list',
						'depth'          => 2,
						'container'      => false,
						'menu_class'     => 'navbar-nav ml-auto text-uppercase',
						// Process nav menu using custom bootstrap nav walker
						'walker'         => new wp_bootstrap_navwalker()
						)); 
					?>
				</div>
			</div>
		</nav>
	</header>
	