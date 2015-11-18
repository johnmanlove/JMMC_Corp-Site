<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Full Content Template
 *
Template Name:  Case Study Page (no sidebar)
 *
 * @file           case-study-page.php
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

<?php echo do_shortcode( '[su_row class="capabilities"]

[su_column size="1/2"]
<h2>Capabilities</h2>
Strong brands have strong brand identities. One unmistakable story for customers, employees, stakeholders and shareholders. Told memorably at every touch-point, through consistent design, behaviour and engagement.

We play an active part from the definition of the brand\'s objectives, to the development of a unique visual language, to the translations of the new brand identity to all brand touch points. As a committed brand guardian we ensure that the identity is implemented successfully throughout the company.
<h3>Clarify      Brand      Reach</h3>
[/su_column]

[su_column size="1/2"]

<ul class="red">
	<li>Brand Positioning</li>
	<li>Brand Stories </li>
	<li>Brand Architecture </li>
	<li>Brand Identity </li>
	<li>Brand Portfolio </li>
	<li>Corporate Literature </li>
	<li>Internal Branding </li>
	<li>Brand Activation Programs </li>
	<li>Identity implementation</li>
</ul>

<p class="red">We have developed Identities for: ING, Cuauhtémoc Moctezuma, The HEINEKEN Company, PostNL, SNS Reaal.</p>

[/su_column]

[/su_row]

[su_row class="lets-talk"]

[su_column size="1/2" class="spheres"]<img src="/JMMC_Corp-Site/wp-content/uploads/2015/11/spheres.png" alt="JMMC Spheres of Influence" />[/su_column]

[su_column size="1/2"]
<h3 style="text-align: center;">Now you know about us,</h3>
<h3 style="text-align: center;"><a href="#">let\'s talk</a></h3>
[/su_column]
[/su_row]' ); ?>

<?php get_footer(); ?>
