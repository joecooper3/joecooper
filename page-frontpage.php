<?php /* Template Name: Frontpage Template */ ?>

<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Joe_Cooper
 */

get_header(); ?>
<div class="intro-container">
    <div class="intro-container-2">
        <p>Joe Cooper is a front end developer and graphic designer living in Ridgewood, Queens.
        He is currently the Associate Director of Communications and Design for 
        <a href="https://www.cases.org" target="_blank">CASES</a> and has 
        provided freelance web and print design services for non-profit organizations
        based in the New York City area.</p>
    </div>
</div>
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content-frontpage', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->

<?php
get_footer();
