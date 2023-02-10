<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Jacobs-Portfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Aboreto&family=Montserrat:wght@100;200;400&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'jacobs-portfolio' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<a href="/homepage">
				<h3>Jacob Difede</h3>
				<h6>UX/ UI Designer</h6>
			</a>
			<?php
			the_custom_logo();
			?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span class="burger-menu"> &#9776;</span></button> -->
			<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">resume</button> -->
			<a  aria-controls="primary-menu" href="https://codepen.io/Grxcelyn-mx/pen/YzjGdEj" target="__blank" class="menu-toggle" aria-expanded="false">resume</a>

			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
		<!-- <button  aria-controls="primary-menu" href="https://codepen.io/Grxcelyn-mx/pen/YzjGdEj" target="__blank" class="menu-toggle" aria-expanded="false">resume</button> -->

	</header><!-- #masthead -->
