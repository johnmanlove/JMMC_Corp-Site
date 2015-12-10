<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Full Content Template
 *
Template Name:  Internal Page (no sidebar)
 *
 * @file           Internal-page.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/full-width-page.php
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */

get_header(); ?>

<div id="content-full" class="grid col-940">

	<?php if ( have_posts() ) : ?>

		<?php while( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'loop-header', get_post_type() ); ?>

			<?php responsive_entry_before(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php responsive_entry_top(); ?>

				<!--?php get_template_part( 'post-meta', get_post_type() ); ?-->

				<div class="post-entry">
					<?php the_content( __( 'Read more &#8250;', 'responsive' ) ); ?>
					<?php wp_link_pages( array( 'before' => '<div class="pagination">' . __( 'Pages:', 'responsive' ), 'after' => '</div>' ) ); ?>
				</div>
				<!-- end of .post-entry -->

				<?php get_template_part( 'post-data', get_post_type() ); ?>

				<?php responsive_entry_bottom(); ?>
			</div><!-- end of #post-<?php the_ID(); ?> -->
			<?php responsive_entry_after(); ?>

			<?php responsive_comments_before(); ?>
			<?php comments_template( '', true ); ?>
			<?php responsive_comments_after(); ?>

		<?php
		endwhile;

		get_template_part( 'loop-nav', get_post_type() );

	else :

		get_template_part( 'loop-no-posts', get_post_type() );

	endif;
	?>

</div><!-- end of #content-full -->

<div class="su-row video-gallery">
	<div class="su-column su-column-size-1-1">
		<h2>Media Library</h2>
		<?php echo do_shortcode( '[rev_slider alias="vm-slider"]' ); ?>
	</div>
</div>
<div class="su-row spheres-row">
	<div class="su-column su-column-size-1-1">
		<img class="size-full wp-image-83 aligncenter" src="http://localhost:8888/JMMC_Corp-Site/wp-content/uploads/2015/11/logo_white.png" alt="logo_white" width="367" height="174" />
	</div>
</div>
<!--div class="su-row contact">
	<div class="su-column su-column-size-2-5 text">
		<h3>Receive the latest news from JMMC</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		<span class="legal"><p>Legal terms</p>
			<p>You are entitled to access, correct and delete personal data which relates to you, and to object to the processing of your personal data, subject to legitimate grounds. To exercise these rights, please write to the following address [Protection des données personnelles JMMC – Communications Director – 5125 Preston Ave. | Houston, Texas 77505 or contact us via our contact form.</p></span>
	</div>
	<div class="su-column su-column-size-3-5 contact-form">
		<h3>Please fill in your details below:</h3>
		<p>All fields are required</p>
		<?php //echo do_shortcode( '[constantcontactapi formid="1"]' ); ?>
	</div>
</div-->
<?php echo do_shortcode('[su_row class="lets-talk"]

[su_column size="1/2" class="spheres"]<img src="/JMMC_Corp-Site/wp-content/uploads/2015/11/spheres.png" alt="JMMC Spheres of Influence" />[/su_column]

[su_column size="1/2"]
<h3 style="text-align: center;">Now you know about us,<br />let\'s talk</h3>
[/su_column]
[/su_row]' ); ?>

<?php get_footer(); ?>
