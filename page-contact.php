<?php
/**
 * The template for Contact
 *
 * Template Name: Contact
 */
get_header(); ?>
<?php if ( have_posts() ) : ?>

	<main class="site-main">
	
		<?php get_template_part('inc/components/page-header'); ?>

		<?php while ( have_posts() ) : the_post(); ?>
		<div class="main-content" id="main-content">

			<section class="section">
				<div class="container-fluid container-xxl">
					<div class="row">
						
						<div class="col-md-7 pb-5 pb-md-0">
							<div class="d-flex">
								<img class="img-fluid mr-4 mr-md-6" style="height: 100px;" src="/wp-content/themes/hopecommunity/assets/images/logo-contact.svg" alt="Hope Community Projects Logo">
								<div>
									<?php the_title( '<h3 class="h6">', '</h3>' ); ?>
									<?php the_content(); ?>
								</div>
							</div>
							<div class="contact-form-wrapper">
								<?php get_template_part('inc/contact-form-charity'); ?>
							</div>
						</div>

						<div class="col-md-4 offset-md-1">
							<div class="row">
								<div class="col-12 pb-2">
									<img class="w-100" src="/wp-content/themes/hopecommunity/assets/images/hope-community-projects.jpg" alt="Hope Community Projects Centre">
								</div>

								<div class="col-12">
									<p><b><?php the_field('company_name', 'options'); ?></b>
										</p><address>
										<?php the_field('company_address', 'options'); ?>
										</address>
									<p></p>
									<div class="py-2">
										<i class="fal fa-phone"></i>
										<a href="tel:<?php echo telephone(get_field('phone_number', 'options')); ?>" class="telephone"><?php the_field('phone_number', 'options'); ?></a>
									</div>
									<div class="py-2">
										<i class="fal fa-envelope"></i> 
										<a href="mailto:caroline@hopecommunityprojects.com">caroline@hopecommunityprojects.com</a>
									</div>
								</div>
							</div>
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
