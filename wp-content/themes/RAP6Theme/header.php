<?php

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body class="page-fit" <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<?php $banner=new display_banner; ?>
				<div class='hero-background'>
					<div class='height40px flex flex-center-j'>
						<nav id="site-navigation" class="main-navigation width90 flex flex-space-between flex-center-a" role="navigation">
							<div id="navlogo" class="<?php $logo=new display_logo; ?>">
								<a href="<?php echo site_url();?>">
									<?php dynamic_sidebar('top-nav-logo'); ?>
								</a>
							</div>
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
								<div class="flex flex-center-j flex-center-a flex-space-between">
									<div class="<?php $logo=new display_logo; ?>">
										<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
										<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
									</div>
									<div class="<?php $logo=new display_logo; ?>">
										<div class="margin5">
											<form method="GET" action="./">
												<input type="search" name="s" placeholder="SEARCH.." >
												<i class="fa fa-search white-color nav-search-logo" aria-hidden="true"></i>
											</form>
										</div>
										<div class="margin5">
											<form method="GET" action="./">
											  	<input type="search" name="s" placeholder="SEARCH.." >
											  	<i class="fa fa-search nav-search-logo" aria-hidden="true"></i>
											</form>
										</div>
									</div>
								</div>
						</nav><!-- #site-navigation -->
					</div>
				</div>
			</header><!-- #masthead -->
