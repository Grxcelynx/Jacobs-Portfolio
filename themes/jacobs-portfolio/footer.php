<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Jacobs-Portfolio
 */

?>

<?php 
    // $footer_logo = get_theme_mod('footer_logo');

    $instagram_url = get_theme_mod('ig_url');
	$linkedin_url = get_theme_mod('linkedin_url');
	$github_url = get_theme_mod('github_url');
	$other_url = get_theme_mod('other_media_url');
	$other2_url = get_theme_mod('other_media2_url');

    $instagram_icon = get_theme_mod('instagram_icon');
	$linkedin_icon = get_theme_mod('linkedin_icon');
	$github_icon = get_theme_mod('github_icon');
	$other_icon = get_theme_mod('other_media_icon');
	$other2_icon = get_theme_mod('other_media2_icon');
?>

	<footer id="colophon" class="site-footer">

		<h2 class="footer-title">Let's work together</h2>

		<a class="email" href="mailto:jacobdifede65@gmail.com">jacobdifede65@gmail.com</a>
		<!-- SOCIAL MEDIA ROW -->
		<div class="social-media">
            <ul>
			<?php if($linkedin_url && $linkedin_icon):?>
                    <a href="<?php echo esc_url($linkedin_url)?>"><li><img src="<?php echo esc_url($linkedin_icon)?>" alt="instagram footer icon"></li></a>
				<?php endif; ?>

				<?php if($github_url && $github_icon):?>
						<a href="<?php echo esc_url($github_url)?>"><li><img src="<?php echo esc_url($github_icon)?>" alt="twitter footer icon"></li></a>
					<?php endif; ?>

                <?php if($instagram_url && $instagram_icon):?>
                    <a href="<?php echo esc_url($instagram_url)?>"><li><img src="<?php echo esc_url($instagram_icon)?>" alt="instagram footer icon"></li></a>
                <?php endif; ?>

					<?php if($other_url && $other_icon):?>
						<a href="<?php echo esc_url($other_url)?>"><li><img src="<?php echo esc_url($other_icon)?>" alt="other footer icon"></li></a>
				<?php endif; ?>
				
				<?php if($other2_url && $other2_icon):?>
						<a href="<?php echo esc_url($other2_url)?>"><li><img src="<?php echo esc_url($other2_icon)?>" alt="other2 footer icon"></li></a>
				<?php endif; ?>
            </ul>
        </div>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'jacobs-portfolio' ) ); ?>">
			</a>
			<!-- <span class="sep"> | </span> -->
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'jacobs-portfolio' ), 'jacobs-portfolio', '<a target="_blank" href="http://grxcelyn.com">Grace Birnam</a>' );
				?>
		</div><!-- .site-info -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
