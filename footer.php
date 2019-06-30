<?php
/**
 * Theme Footer
 * See also inc/template-parts/footer.php
 *
 * @package Page Builder Framework
 */
 
// exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

		do_action( 'wpbf_before_footer' );

		if ( get_theme_mod( 'footer_layout' ) !== 'none' ) do_action( 'wpbf_footer' );

		do_action( 'wpbf_after_footer' );

		?>

	</div> 

<?php do_action( 'wpbf_body_close' ); ?> 

<footer>
		<div class="container" id="footer">
			<div class="row">
				<div class="one-third column">
					<?php wp_nav_menu(array(
			              'theme_location' => 'footer-menu',
			              'container-class' => 'menu-footer'
			)); ?>
				</div>
				<div>
					<?php dynamic_sidebar('left-footer'); ?>
				</div>

				<div>
					<?php dynamic_sidebar('center-left-footer'); ?>
				</div>

				<div>
					<?php dynamic_sidebar('center-right-footer'); ?>
				</div>

				<div>
					<?php dynamic_sidebar('right-footer'); ?>
				</div>
			</div> <!--Row close -->
		</div> <!--Container close-->

	</footer>

	<?php wp_footer(); ?>
  </body>
</html>