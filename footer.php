<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package custome-theme
 */

?>

	</div><!-- #content -->
</div>
	<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'custome-theme' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'custome-theme' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'custome-theme' ), 'custome-theme', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
