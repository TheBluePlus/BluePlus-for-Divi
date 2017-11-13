<?php if ( 'on' == et_get_option( 'divi_back_to_top', 'false' ) ) : ?>

	<span class="et_pb_scroll_top et-pb-icon"></span>

<?php endif;

if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>

			<footer id="main-footer">
				<?php get_sidebar( 'footer' ); ?>


		<?php
			if ( has_nav_menu( 'footer-menu' ) ) : ?>

				<div id="et-footer-nav">
					<div class="container">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'footer-menu',
								'depth'          => '1',
								'menu_class'     => 'bottom-nav',
								'container'      => '',
								'fallback_cb'    => '',
							) );
						?>
					</div>
				</div> <!-- #et-footer-nav -->

			<?php endif; ?>

				<div id="footer-bottom">
					<div class="container clearfix">
				<?php
					if ( false !== et_get_option( 'show_footer_social_icons', true ) ) {
						get_template_part( 'includes/social_icons', 'footer' );
					}
				?>
                        <div style="float:left;">
                            <p class="copyrightFooter" style="margin-top: 20px;">&copy; <?php echo date("Y") . " Tous droits réservés - Réfrigération TAREF" ?></p>
                        </div>
                        <div style=" float:right;">
                            <p class="copyrightFooter" style="margin-top: 20px;">Site web réalisé par <a href="http://impactlocal.ca" target="_blank" rel="external" title="L'impact local - Agence Web!"><img style="height: 60px; vertical-align: middle;" src="/wp-content/themes/divi-child/logo-impactlocal-web-blanc.svg" alt="Logo agence web impact local inc"></a></p>
                        </div>
					</div>	<!-- .container -->
				</div>
			</footer> <!-- #main-footer -->
		</div> <!-- #et-main-area -->

<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>

	</div> <!-- #page-container -->

	<?php wp_footer(); ?>
</body>
</html>