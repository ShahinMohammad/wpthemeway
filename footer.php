<?php
/**
 *
 * @package wpthemeway
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wpthemeway' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'wpthemeway' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'wpthemeway' ), 'wpthemeway', '<a href="http://underscores.me/" rel="designer">Shahin</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
