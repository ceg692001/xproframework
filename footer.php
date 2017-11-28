<?php 
/**
 * footer.php
 *
 * The template for displaying the footer.
 */
?>

	<!-- FOOTER -->
	<footer class="site-footer">
		<div class="container">
            <div class="col-xs-12 col-sm-4">
                <?php social_media_links($networks = array('facebook' => true, 'twitter' => FALSE, 'google_plus' => true, 'pinterest' => FALSE, 'linked_in' => FALSE, 'telephone' => FALSE), $size = 'sm', $style = 'square', $echo = TRUE) ?>
            </div>
			<?php get_sidebar( 'footer' ); ?>

			<div class="copyright">
				<p>
					&copy; <?php echo date( 'Y' ); ?>
					<a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
					<?php _e( 'All rights reserved.', 'xpro' ); ?>
				</p>
			</div> <!-- end copyright -->
		</div> <!-- end container -->
	</footer> <!-- end site-footer -->

	<?php wp_footer(); ?>
</body>
</html>