<?php
/**
 * The template for About
 *
 * Template Name: About
 */
get_header(); ?>
<?php if ( have_posts() ) : ?>
	
	<main class="site-main">

		<?php get_template_part('inc/components/page-header'); ?>

		<?php while ( have_posts() ) : the_post(); ?>
		<div class="main-content" id="main-content">

			<!-- start: page-intro -->
			<section class="section pb-0">
				<div class="container-fluid container-xxl">
					<div class="row justify-content-center align-items-end align-items-lg-center">						
						<div class="col-md-6 order-1 order-md-0">
							<?php if( get_field('primary_image') ): ?>
								<img class="img-fluid d-block mx-auto" src="<?php the_field('primary_image'); ?>" />
							<?php endif; ?>
						</div>
						<div class="col-md-6 text-center order-0 order-md-1">
							<h1 class="h4 mb-3"><?php the_field('primary_title'); ?></h1>
							<?php the_field('primary_content'); ?>
						</div>
					</div>
				</div>
			</section>
			<!-- // end: page-intro -->

			<!-- start: section-wide-with-background -->
			<?php get_template_part('inc/components/section-wide'); ?>
			<!-- // end: section-wide-with-background -->
			
			<!-- start: about--our-projects -->
			<section class="section">
				<div class="container-fluid container-xxl">

					<div class="row mb-3">
						<div class="col-12">
							<div class="block-title text-center">
								<img class="img-fluid section-logo mb-4"
									src="/wp-content/themes/hopecommunity/assets/images/logo.svg"
									alt="Hope Community Projects Logo">
								<h2 class="h4"><?php the_field('project_boxes_title'); ?></h2>
								<div class="sep bg-blue"></div>
							</div>
						</div>
					</div>

					<div class="row justify-content-center mb-0 mb-md-2">

						<div class="col-lg-10">

							<div class="row">
								
								<div class="col-12 mb-4">
									<div class="card">
										<div class="card-body p-4 p-md-5">
											<h5 class="card-title"><?php the_field('projects_box_one_title'); ?></h5>
											<?php the_field('projects_box_one'); ?>
										</div>
									</div>
								</div>

								<div class="col-md-6 mb-4 mb-md-0">
									<div class="card h-100">
										<div class="card-body bg-blue text-white p-4 p-md-5">
											<h5 class="card-title"><?php the_field('projects_box_two_title'); ?></h5>
											<?php the_field('projects_box_two'); ?>
										</div>
									</div>
								</div>

								<div class="col-md-6">
									<div class="card h-100">
										<div class="card-body bg-blue text-white p-4 p-md-5">
											<h5 class="card-title"><?php the_field('projects_box_three_title'); ?></h5>
											<?php the_field('projects_box_three'); ?>
										</div>
									</div>
								</div>
								
							</div>

						</div>
					</div>

				</div>
			</section>
			<!-- // end: about--our-projects -->
			
			<!-- start: about--the-charity-team -->
			<section class="section bg-light pb-5">
				<div class="container-fluid container-xxl">
					<div class="row justify-content-center text-center">
						<div class="col-md-10 col-lg-8">
							<img class="img-fluid section-logo mb-4"
								src="/wp-content/themes/hopecommunity/assets/images/logo.svg"
								alt="Hope Community Projects Logo">
							<h2 class="h4"><?php the_field('team_title'); ?></h2>
							<div class="sep bg-orange"></div>
							<?php the_field('team_content'); ?>
						</div>
					</div>
				</div>
			</section>
			<!-- // end: about--the-charity-team -->

		</div>
		<?php endwhile; ?>

	</main>
	<!-- end: // main -->

<?php endif; ?>
<?php
get_footer();
		