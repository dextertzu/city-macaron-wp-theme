<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package citymacaron
 */

get_header(); ?>
	
	<div class="container single">
		<div class="row">
			<div class="col-xs-12 col-md-9">
				<div class="well">
					<div id="primary" class="content-area">
						<main id="main" class="site-main" role="main">

						<?php
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', get_post_format() );

							the_post_navigation();

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>

						</main><!-- #main -->
					</div><!-- #primary -->
				</div>
			</div>

			<div class="col-xs-12 col-md-3">
				<div class="well">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
