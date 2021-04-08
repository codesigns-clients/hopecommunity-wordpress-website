<?php
/**
 *    Archive Template for Posts
 */
get_header(); ?>
<?php if ( have_posts() ) : ?>
	
	<main class="site-main site-main--archive site-main--archive--user-forms">

		<section class="page-header-section">
			<div class="page-header page-header-default page-header-masked page-header-md" style="background-image: url('/wp-content/uploads/2021/01/hero.jpg');">
				<div class="page-header-mask page-header-mask-30"></div>
			</div>
			<div class="page-header-title-box bg-pink py-4 py-md-5 mr-4 mr-lg-7 mt-n6">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center">
							<p>Hope Community Projects Forms</p>
						</div>
					</div>
				</div>
			</div>
		</section>

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