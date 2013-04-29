<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package bhd_s
 */
?>

	</div><!-- #main -->
	<div id="footer-sidebar" class="secondary">
	<div id="footer-sidebar1" class="footer-sidebar-area">
	<?php
	if(is_active_sidebar('footer-sidebar-1')){
	dynamic_sidebar('footer-sidebar-1');
	}
	?>
	</div>
	<div id="footer-sidebar2" class="footer-sidebar-area">
	<?php
	if(is_active_sidebar('footer-sidebar-2')){
	dynamic_sidebar('footer-sidebar-2');
	}
	?>
	</div>
	<div id="footer-sidebar3" class="footer-sidebar-area">
	<?php
	if(is_active_sidebar('footer-sidebar-3')){
	dynamic_sidebar('footer-sidebar-3');
	}
	?>
	</div>
	</div>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'bhd_s_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'bhd_s' ); ?>" rel="generator"><?php printf( __( 'Powered by %s', 'bhd_s' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'bhd_s' ), 'bhd_s', '<a href="http://www.bighairydave.com/" rel="designer">David Tyler</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>