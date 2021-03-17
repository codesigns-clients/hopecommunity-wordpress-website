<?php
/**
 * The template for Covid
 *
 * Template Name: COVID
 */

get_header(); ?>
	<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>

	<main class="site-main">

		<?php get_template_part('inc/components/page-header'); ?>

		<div class="main-content" id="main-content">

			<!-- start: page-intro -->
			<section class="section bg-light">
				<div class="container-fluid container-xxl">
					<div class="row justify-content-center align-items-center">
						<div class="col-md-6">
							<?php if( get_field('primary_image') ): ?>
								<img class="img-fluid d-block mx-auto mb-4 mb-lg-0" src="<?php the_field('primary_image'); ?>" />
							<?php endif; ?>
						</div>
						<div class="col-md-6 text-center text-lg-left">
							<?php if( get_field('primary_title') ): ?><h1 class="h5 mb-3 "><?php the_field('primary_title'); ?></h1><?php endif; ?>
							<?php if( get_field('primary_subtitle') ): ?><h2 class="h5 mb-3 "><?php the_field('primary_subtitle'); ?></h2><?php endif; ?>
							<?php the_field('primary_content'); ?>
						</div>
					</div>
				</div>
			</section>
			<!-- // end: page-intro -->

			<?php if( have_rows('coronavirus_boxes') ): ?>
			<!-- start: coronovirus-advice -->
			<section class="section pb-0">
				<div class="container-fluid container-xxl">
					<div class="row text-center mb-4">
						<div class="col-12">
							<h2 class="h4"><?php the_field('coronavirus_title'); ?></h2>
						</div>
					</div>
					<div class="row">				
						<?php while( have_rows('coronavirus_boxes') ) : the_row(); ?>
						<div class="col-md-6 mb-4">
							<div class="card shadow h-100">
								<div class="card-body">
									<h6 class="card-title"><?php the_sub_field('coronavirus_box_title'); ?></h6>
									<?php the_sub_field('coronavirus_box_content'); ?>
								</div>
							</div>
						</div>
						<?php endwhile; ?>
					</div>
				</div>
			</section>
			<!-- // end: coronovirus-advice -->
			<?php endif; ?>

			<!-- start: donate -->
			<?php get_template_part('inc/blocks/donate'); ?>
			<!-- end //: donate -->

		</div>
	
	</main>
	<!-- end: // main -->
	<?php endwhile; ?>
	<?php endif; ?>
<?php
get_footer();
