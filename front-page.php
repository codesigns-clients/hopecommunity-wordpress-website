<?php

get_header(); ?>
<?php if ( have_posts() ) : ?>
	
	<main class="site-main site-main--frontpage">

		<?php get_template_part('inc/components/page-header'); ?>
		
		<?php while ( have_posts() ) : the_post(); ?>
		<div class="main-content" id="main-content">
			
			<section class="section">
				<div class="container-fluid container-xxl">
					<div class="row align-items-center">
						<div class="col-12 col-lg-7 pb-5">
							<h2 class="h3"><?php the_field('primary_title'); ?></h2>
							<?php the_field('primary_content'); ?>
							<a href="/about/" class="btn btn-lg no-border no-border-radius btn-with-arrow btn-blue text-white text-uppercase">
								<span>Read more <i class="ml-3 fal fa-arrow-right fa-xs"></i></span>
							</a>
						</div>
						<div class="col-12 col-lg-5">
							<?php if( get_field('primary_image') ): ?>
								<img class="img-fluid d-block mx-auto" src="<?php the_field('primary_image'); ?>" />
							<?php endif; ?>
						</div>
					</div>
				</div>
			</section>

			<?php get_template_part('inc/components/section-wide'); ?>
			
			<!-- start: home--our-aims -->
			<section class="section bg-light pb-0">

				<div class="container-fluid container-xxl">

					<div class="row justify-content-center text-center">
						<div class="col-md-10 col-lg-8">
							<?php get_template_part('inc/blocks/section-logo'); ?>
							<h2 class="my-4 h4"><?php the_field('homepage_boxes_title'); ?></h2>
							<div class="sep bg-blue"></div>
							<?php the_field('homepage_boxes_intro_text'); ?>
						</div>
					</div>

				</div>

				<div class="row align-items-center bg-blue mt-5">
				
					<div class="col-md-6 p-5 text-white order-1 order-md-0">
						<h3><?php the_field('homepage_box_1_title'); ?></h3>
						<p><?php the_field('homepage_box_1_content'); ?></p>
						<p><a class="btn btn-outline-white btn-lg no-border-radius" href="<?php the_field('homepage_box_1_link'); ?>">Read more</a></p>
					</div>
					<div class="col-md-6 bg-cover order-0 order-md-1 homepage-box-image" style="background-image:url('<?php the_field('homepage_box_1_image'); ?>');"></div>

				</div>
				
				<div class="row align-items-center bg-blue">
					<div class="col-md-6 bg-cover homepage-box-image" style="background-image:url('<?php the_field('homepage_box_2_image'); ?>');"></div>
					<div class="col-md-6 p-5 text-white">
						<h3><?php the_field('homepage_box_2_title'); ?></h3>
						<p><?php the_field('homepage_box_2_content'); ?></p>
						<p><a class="btn btn-outline-white btn-lg no-border-radius" href="<?php the_field('homepage_box_2_link'); ?>">Read more</a></p>
					</div>
				</div>

			</section>
			<!-- // end: home--our-aims -->

			<?php
				if( get_field('enable_donate') ) {
					get_template_part('inc/blocks/donate');	
				}
			?>
			
			<!-- start: home--news -->
			<section class="section bg-light">
				<div class="container-fluid container-xxl">

					<div class="row justify-content-center text-center">
						<div class="col-md-10 col-lg-8">
							<?php get_template_part('inc/blocks/section-logo'); ?>
							<h2 class="h4">Hope Community Projects News</h2>
							<?php the_field('news_intro_text'); ?>
						</div>
					</div>

					<div class="row justify-content-center mt-5">
						<div class="col-sm-10 mb-4">
							<div class="card no-border-radius h-100 no-border">
								<div class="card-body px-5">
									<h3 class="text-center mt-4 h4">Latest News</h3>
									<div class="sep bg-blue"></div>
									<?php echo do_shortcode('[custom-facebook-feed num=1]'); ?>
								</div>
								<div class="card-footer no-border-radius bg-blue">
									<div class="btn-container text-center">
										<a class="h5 text-white text-uppercase d-block mb-0" href="/news" title="View all news">View all news</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-10 mb-4">
							<div class="card no-border-radius h-100 no-border card--press-releases">
								<div class="card-body px-5">
									<h3 class="text-center mt-4 h4">Latest Press Releases</h3>
									<div class="sep bg-orange"></div>
									<div class="row">
										
										<?php $the_query = new WP_Query( array( 'posts_per_page' => 2, )); ?>
										<?php if ( $the_query->have_posts() ) : ?>
											<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
											<div class="col-md-6">
												<a href="<?php the_permalink(); ?>">
													<div class="image mb-3">
														<?php the_post_thumbnail(); ?>
													</div>
												</a>
												<a href="<?php the_permalink(); ?>">
													<h2 class="card-title h6"><?php the_title(); ?></h2>
												</a>
											</div>
											<?php endwhile; ?>
											<?php wp_reset_postdata(); ?>
											<?php else : ?>
											<div class="col-12">
												<p><?php __('No Press Releases'); ?></p>
											</div>
										<?php endif; ?>
									</div>
								</div>
								<div class="card-footer no-border-radius bg-orange">
									<div class="btn-container text-center">
										<a class="h5 text-white text-uppercase d-block mb-0" href="/press-releases" title="View all press releases">View all press releases</a>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</section>
			<!-- // end: home--news -->

		</div>
		<?php endwhile; ?>

	</main>
	<!-- end: // main -->

<?php endif; ?>
<?php
get_footer();
