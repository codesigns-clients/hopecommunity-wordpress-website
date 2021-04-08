<?php
/**
 * The template for Grubhub
 *
 * Template Name: Grubhub
 */
get_header(); ?>
<?php if ( have_posts() ) : ?>
	
	<main class="site-main">

		<?php get_template_part('inc/components/page-header'); ?>

		<?php while ( have_posts() ) : the_post(); ?>
		<div class="main-content" id="main-content">

			<!-- start: what-we-do -->
			<section class="section">
				<div class="container-fluid container-xxl">
					<div class="row justify-content-center text-center mb-5">
						<div class="col-md-10 col-lg-8">
							<img class="img-fluid section-logo mb-4" src="/wp-content/themes/hopecommunity/static/images/logo-grubhub.svg" alt="Hope Community Projects Logo">
							<h1 class="h4"><?php the_field('nursery_intro_title'); ?></h1>
							<div class="sep bg-orange"></div>
							<?php the_field('nursery_intro_content'); ?>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="pics-grid-grubhub">
								<div class="pic pic1"></div>
								<div class="pic pic2"></div>
								<div class="pic pic3"></div>
								<div class="pic pic4"></div>
								<div class="pic pic5"></div>
								<div class="pic pic6"></div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- // end: what-we-do -->
			
			<!-- start: your-child-matters -->
			<section class="section pt-0">
				<div class="container-fluid container-xxl">
					<div class="row justify-content-center text-center">
						<div class="col-md-10 col-lg-8">
							<h2 class="h4"><?php the_field('nursery_second_title'); ?></h2>
							<div class="sep bg-blue"></div>
							<?php the_field('nursery_second_content'); ?>
						</div>
					</div>
				</div>
			</section>
			<!-- // end: your-child-matters -->

			<section class="section section-xl bg--image" style="background: no-repeat center / cover url('/wp-content/themes/hopecommunity/static/images/grubhub-section-2.jpg');">
				<div class="container-fluid container-xxl py-7"></div>
			</section>

			<!-- start: the-grubhub-promise -->
			<section class="section">
				<div class="container-fluid container-xxl">
				
					<div class="row justify-content-center text-center">
						<div class="col-md-10 col-lg-8">
							<h2 class="h4"><?php the_field('nursery_third_title'); ?></h2>
							<div class="sep bg-green"></div>
							<?php the_field('nursery_third_content'); ?>
						</div>
					</div>
					
					<div class="row mt-5 text-center">

						<div class="col-sm-4 mb-5 mb-sm-0">
							<img src="/wp-content/themes/hopecommunity/static/images/grubhub-statement-1.svg" alt="Hands" class="img-fluid" style="width: 30%;">
							<h6 class="mt-3">Children</h6>
						</div>
						<div class="col-sm-4 mb-5 mb-sm-0">
							<img src="/wp-content/themes/hopecommunity/static/images/grubhub-statement-2.svg" alt="Hands" class="img-fluid" style="width: 30%;">
							<h6 class="mt-3">Learning</h6>
						</div>
						<div class="col-sm-4">
							<img src="/wp-content/themes/hopecommunity/static/images/grubhub-statement-3.svg" alt="Hands" class="img-fluid" style="width: 30%;">
							<h6 class="mt-3">Through Play</h6>
						</div>
						
					</div>

				</div>
			</section>
			<!-- // end: the-grubhub-promise -->

			<!-- start: the-grubhub-team -->
			<section class="section bg-light pb-5">
				<div class="container-fluid container-xxl">
					<div class="row justify-content-center text-center">
						<div class="col-md-10 col-lg-8">
							<img class="img-fluid section-logo mb-4" src="/wp-content/themes/hopecommunity/static/images/logo-grubhub.svg" alt="Hope Community Projects Logo">
							<h2 class="h4"><?php the_field('team_title'); ?></h2>
							<div class="sep bg-red"></div>
							<?php the_field('team_content'); ?>
						</div>
					</div>
				</div>
			</section>
			<!-- // end: the-grubhub-team -->

			<!-- start: contact-form-grubhub -->
			<section class="section">
				<div class="container-fluid container-xxl">
					
					<div class="row justify-content-center text-center pb-3">
						<div class="col-md-6">
							<h2 class="h4">Contact Hope Community Grubhub</h2>
							<p class="mb-4">We look forward to hearing from you, please submit your details below and our team will get back to you.</p>
						</div>
					</div>

					<div class="row justify-content-center">
						<div class="col-md-8">
							<div class="contact-form-wrapper">
								<?php get_template_part('inc/contact-form-grubhub'); ?>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- // end: contact-form-grubhub -->

		</div>
		<?php endwhile; ?>

	</main>
	<!-- end: // main -->
	
<?php endif; ?>
<?php
get_footer();
