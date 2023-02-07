<?php
/**
 * Jacobs-Portfolio functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Jacobs-Portfolio
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function jacobs_portfolio_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Jacobs-Portfolio, use a find and replace
		* to change 'jacobs-portfolio' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'jacobs-portfolio', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'jacobs-portfolio' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'jacobs_portfolio_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'jacobs_portfolio_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function jacobs_portfolio_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'jacobs_portfolio_content_width', 640 );
}
add_action( 'after_setup_theme', 'jacobs_portfolio_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function jacobs_portfolio_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'jacobs-portfolio' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'jacobs-portfolio' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'jacobs_portfolio_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function jacobs_portfolio_scripts() {
	wp_enqueue_style( 'jacobs-portfolio-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'jacobs-portfolio-style', 'rtl', 'replace' );

	wp_enqueue_script( 'jacobs-portfolio-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'jacobs-portfolio-navbar-scroll', get_template_directory_uri() . '/js/navbar-scroll.js', array("jquery") );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'jacobs_portfolio_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

	
function theme_get_customizer_css() {
	ob_start();

  //CALL TO ACTION BTN BACKGROUND
	$navbarclr = get_theme_mod( 'customize_color_call2action', '' );
		if ( ! empty( $navbarclr ) ) {
			?>
			
			.call-2action a, .call-2-banner-btn a{
					background-color: <?php echo $navbarclr; ?> ;
				}
			
			<?php
	}
	//Custom Color 2
	$navtext = get_theme_mod( 'customize_navtxt_color', '' );
	if ( ! empty( $navtext ) ) {
		?>
		
		header .site-branding h3, header .site-branding h6, .main-navigation a{
				color: <?php echo $navtext; ?> ;
			}
		
		<?php
	}
	//Custom Color 3
	$navhov = get_theme_mod( 'customize_navbarhov_color', '' );
	if ( ! empty( $navhov ) ) {
		?>
		
		.main-navigation ul li a:hover{
			border-bottom: solid 2px <?php echo $navhov; ?>;
		}
		
		<?php
	}
	//Custom Color 4
	$btnhov = get_theme_mod( 'customize_btnhov_color', '' );
	if ( ! empty( $btnhov ) ) {
		?>
		.about-section .wp-block-column .wp-block-buttons .wp-block-button a:hover, .project-display .wp-block-column .wp-block-buttons .wp-block-button a:hover{
            background-color: <?php echo $btnhov; ?>  !important;
			}
		
		<?php
	}
	//Custom Color 5
	$btnhovtxt = get_theme_mod( 'customize_btnhovtext_color', '' );
	if ( ! empty( $btnhovtxt ) ) {
		?>
		
		.about-section .wp-block-column .wp-block-buttons .wp-block-button a:hover, .project-display .wp-block-column .wp-block-buttons .wp-block-button a:hover{
				color: <?php echo $btnhovtxt; ?> !important;
			}
		
		<?php
	}
	//Custom Color 6
	$btnhovborder = get_theme_mod( 'customize_btnhovborder_color', '' );
	if ( ! empty( $btnhovborder ) ) {
		?>
		
		.project-display .wp-block-columns  a:hover{
				border: 1px solid <?php echo $btnhovborder; ?> !important;
			}
		
		<?php
	}
	//Custom Color 7
	$footerbkgd = get_theme_mod( 'customize_footerbkg_color', '' );
	if ( ! empty( $footerbkgd ) ) {
		?>
		
			footer{
				background-color: <?php echo $footerbkgd; ?> ;
			}
		
		<?php
	}
	//Custom Color 8
	$footerheader = get_theme_mod( 'customize_footerheader_color', '' );
	if ( ! empty( $footerheader ) ) {
		?>
		
		footer .footer-title{
				color: <?php echo $footerheader; ?> ;
			}
		
		<?php
	}
	//Custom Color 9
	$footeremail = get_theme_mod( 'customize_footeremail_color', '' );
	if ( ! empty( $footeremail ) ) {
		?>
		
		footer .email{
				color: <?php echo $footeremail; ?> ;
			}
		
		<?php
	}

	//Custom Color 10
	$footercred = get_theme_mod( 'customize_creds_color', '' );
	if ( ! empty( $footercred ) ) {
		?>
		
		footer .site-info, footer .site-info a{
				color: <?php echo $footercred; ?> ;
			}
		
		<?php
	}
	//Custom Color 11
	$footericonhov = get_theme_mod( 'customize_iconhov_color', '' );
	if ( ! empty( $footericonhov ) ) {
		?>
		
		footer .social-media ul a li img:hover{
				background-color: <?php echo $footericonhov; ?> ;
			}
		
		<?php
	}
	//Custom Color 12
	$sitecolor = get_theme_mod( 'customize_site_color', '' );
	if ( ! empty( $sitecolor ) ) {
		?>
		
		.site-main{
				background-color: <?php echo $sitecolor; ?> !important;
			}
		
		<?php
	}
	//Custom Color 13
	$sitehome = get_theme_mod( 'customize_sitehome_color', '' );
	if ( ! empty( $sitehome ) ) {
		?>
		
		.page-name{
				background-color: <?php echo $sitehome; ?> !important;
			}
		
		<?php
	}




	$css = ob_get_clean();
	return $css;
}	


function theme_enqueue_styles() {
	  wp_enqueue_style( 'theme-styles', get_stylesheet_uri() ); // This is where you enqueue your theme's main stylesheet
	$custom_css = theme_get_customizer_css();
	wp_add_inline_style( 'theme-styles', $custom_css );
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );