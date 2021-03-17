<?php
/**
 * The template for Gallery
 *
 * Template Name: Gallery
 */

get_header(); ?>
	<?php if ( have_posts() ) : ?>
	
	<main class="site-main">

		<?php get_template_part('inc/components/page-header'); ?>

		<?php while ( have_posts() ) : the_post(); ?>
		<div class="main-content" id="main-content">			

			<section class="section pt-4">
				<div class="container-fluid container-xxl">

					<div class="row justify-content-center">
						<div class="col-12 col-md-8">
							<?php the_content(); ?>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<?php echo do_shortcode('[instagram-feed user="hopecommunityproject2"]'); ?>
						</div>
					</div>
				</div>
			</section>

		</div>
		<?php endwhile; ?>
	</main>
	<!-- end: // main -->
	<?php endif; ?>
<?php
get_footer();
