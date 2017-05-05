<?php /* Template Name: Portfolio Template */ ?>

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

		<main id="main" class="portfolio-main" role="main">

			<?php
			while ( have_posts() ) : the_post(); ?>
                    <h2><?php the_title(); ?></h2>
                                <?php
				the_content();

			endwhile; // End of the loop.
			?>
		</main><!-- #main -->

<?php
get_footer();
