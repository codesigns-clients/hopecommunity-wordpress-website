<?php
/**
 * The template for Donate
 *
 * Template Name: Donate
 */
get_header(); ?>
<?php if ( have_posts() ) : ?>
	
	<main class="site-main">

		<?php get_template_part('inc/components/page-header'); ?>

		<?php while ( have_posts() ) : the_post(); ?>
		<div class="main-content" id="main-content">
	
			<!-- start: page-intro -->
			<section class="section">
				<div class="container-fluid container-xxl">
					<div class="row justify-content-center align-items-center">
						<div class="col-md-6">
							<h1 class="h4 text-center d-md-none"><?php the_field('primary_title'); ?></h1>
							<h2 class="h5 mb-3 text-center d-md-none"><?php the_field('primary_subtitle'); ?></h2>
							<?php if( get_field('primary_image') ): ?>
								<img class="img-fluid d-block mx-auto mb-5 mb-md-0" src="<?php the_field('primary_image'); ?>" />
							<?php endif; ?>
						</div>
						<div class="col-md-6 text-center text-lg-left">
							<h1 class="h4 text-left d-none d-md-block"><?php the_field('primary_title'); ?></h1>
							<h2 class="h5 mb-3 text-left d-none d-md-block"><?php the_field('primary_subtitle'); ?></h2>
							<?php the_field('primary_content'); ?>
						</div>
					</div>
				</div>
			</section>
			<!-- // end: page-intro -->

			<!-- start: donate -->
			<?php get_template_part('inc/blocks/donate'); ?>
			<!-- end //: donate -->
		
		</div>
		<?php endwhile; ?>

	</main>
	<!-- end: // main -->
	
<?php endif; ?>
<?php
get_footer();
