<?php
/**
 *    Archive Template for Posts
 */
get_header(); ?>
<?php if ( have_posts() ) : ?>
	
	<main class="site-main site-main--archive site-main--archive--user-forms">

		<?php get_template_part('inc/components/page-header-user-forms'); ?>	
	
		<div class="main-content" id="main-content">

			<section class="section pt-4 pb-0">
				<div class="container-fluid container-xxl">

					<div class="row">
						<?php while ( have_posts() ) : the_post(); ?>
						<div class="col-12 col-md-6 mb-4">
							
							<a class="card bg-light no-border no-border-radius h-100" href="<?php the_permalink(); ?>">
								<article id="post-<?php the_ID(); ?>" <?php post_class('card-body py-6 pr-5'); ?>>			
						
									<?php if( get_field('form_type') == 'application-form' ) {
										echo '<span class="badge bg-blue text-white mb-3 text-uppercase pt-1">Application Form</span>';
									} ?>

									<?php if( get_field('form_type') == 'survey' ) {
										echo '<span class="badge bg-green text-white mb-3 text-uppercase pt-1">Survey</span>';
									} ?>
									
									<h2 class="h3 text-dark"><?php the_title(); ?></h2>
									<span class="card-text">
										<?php the_field('form_excerpt'); ?>
									</span>
									<!-- < ?php the_excerpt(); ?> -->
							
								</article>
							</a>
							
							<!-- #post-<?php the_ID(); ?> -->
						</div>
						<?php endwhile; ?>
					</div>
				</div>
			</section>

		</div>
		
	</main>
	<!-- end: // main -->

<?php endif; ?>
<?php
get_footer();