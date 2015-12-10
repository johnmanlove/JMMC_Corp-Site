<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Footer Template
 *
 *
 * @file           footer.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.2
 * @filesource     wp-content/themes/responsive/footer.php
 * @link           http://codex.wordpress.org/Theme_Development#Footer_.28footer.php.29
 * @since          available since Release 1.0
 */

/*
 * Globalize Theme options
 */
global $responsive_options;
$responsive_options = responsive_get_options();
?>
<?php responsive_wrapper_bottom(); // after wrapper content hook ?>
</div><!-- end of #wrapper -->
<?php responsive_wrapper_end(); // after wrapper hook ?>
</div><!-- end of #container -->
<?php responsive_container_end(); // after container hook ?>

<div id="footer" class="clearfix">
	<?php responsive_footer_top(); ?>

	<div id="footer-wrapper">

		<?php get_sidebar( 'footer' ); ?>

		<div class="grid col-940">
			<div class="su-row footer">
				<div class="su-column su-column-size-1-2 contact">
					<h2>Contact Us</h2>
					<p class="contact-info">
						<!--img src="/JMMC_Corp-Site/wp-content/uploads/2015/11/icon_phone.png" alt=""> 281.487.6767<br />
						<img src="/JMMC_Corp-Site/wp-content/uploads/2015/11/icon_map.png" alt=""> 5125 Preston ave. Houston, TX 77505<br />
						<img src="/JMMC_Corp-Site/wp-content/uploads/2015/11/icon_mail.png" alt=""> <a href="mailto:info@johnmanlove.com">info@johnmanlove.com</a-->

						<?php echo do_shortcode( '[contact-form-7 id="87" title="Contact form 1"]' ); ?>

					</p>
					<!--p class="locations">
						Houston <span>|</span> Austin <span>|</span> Dallas
					</p-->
				</div>
				<div class="su-column su-column-size-1-2 map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7776.240460596675!2d-95.1720049989364!3d29.63491218065176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864099195d1e35eb%3A0xecbd70a85875439b!2sJohn+Manlove+Marketing+%26+Communications!5e0!3m2!1sen!2sus!4v1446581274701" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
			
		</div><!-- end of col-940 -->

	</div><!-- end #footer-wrapper -->

	<?php responsive_footer_bottom(); ?>
</div><!-- end #footer -->
<?php responsive_footer_after(); ?>

<?php wp_footer(); ?>
</body>
</html>