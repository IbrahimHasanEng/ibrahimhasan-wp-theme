<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ibrahimhasan
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
                <div class="socials-menu">
                    <?php
                            wp_nav_menu( array(
                                    'theme_location' => 'socials',
                                    'menu_id'        => 'socials-menu',
                            ) );
                    ?>                
                </div>

		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'ibrahimhasan' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'ibrahimhasan' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'ibrahimhasan' ), 'ibrahimhasan', '<a href="http://underscores.me/">Ibrahim Hasan</a>' );
			?>
		</div><!-- .site-info -->
<!--                <span class="fa-stack fa-lg">
                  <i class="fa fa-square fa-stack-2x"></i>
                  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                </span>
                <span class="fa-stack fa-lg">
                  <i class="fa fa-square fa-stack-2x"></i>
                  <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                </span>
                <span class="fa-stack fa-lg">
                  <i class="fa fa-square fa-stack-2x"></i>
                  <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                </span>
                <span class="fa-stack fa-lg">
                  <i class="fa fa-square fa-stack-2x"></i>
                  <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                </span>-->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
