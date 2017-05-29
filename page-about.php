<?php /* Template Name: About Template */ ?>

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

		<main id="main" class="about-main" role="main">
                    <h2 class="about-header">About Joe Cooper</h2>
                    <div class="about-container">
                        <div class="itme">
                            <img src="../wp-content/themes/joecooper/images/itme.jpg"
srcset="../wp-content/themes/joecooper/images/itme.jpg 1x,
../wp-content/themes/joecooper/images/itme@2x.jpg 2x"
alt="A photo of Joe Cooper">
                        </div>
                        <div class="paras">
			<?php
			while ( have_posts() ) : the_post(); ?>
                    
                                <?php
				the_content();

			endwhile; // End of the loop.
			?>
                        </div>
                    </div>
		</main><!-- #main -->

<?php
get_footer();
