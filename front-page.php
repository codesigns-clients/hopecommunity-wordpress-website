<?php

get_header(); ?>
<?php if ( have_posts() ) : ?>
	
	<main class="site-main site-main--frontpage">

		<?php get_template_part('inc/components/page-header'); ?>
		
		<?php while ( have_posts() ) : the_post(); ?>
		<div class="main-content" id="main-content">
			
			<section class="section section-sm pb-0">
				<div class="container-fluid container-xxl">
					<div class="row">
						<div class="col-12 col-md-7 pb-5" style="z-index:100">
							<h2 class="h3"><?php the_field('primary_title'); ?></h2>
							<?php the_field('primary_content'); ?>
							<a href="/about/" class="btn btn-lg no-border no-border-radius btn-with-arrow btn-orange text-white text-uppercase">
								<span>Find out more <i class="fal fa-arrow-right fa-xs"></i></span>
							</a>
						</div>
						<div class="col-12 col-md-5">
							<figure class="mb-5">
								<img class="img-fluid" alt="" src="/wp-content/uploads/2021/02/coventry.jpg">
							</figure>

						</div>
					</div>
				</div>
			</section>

			<!-- start: page-intro -->
			<section class="section bg-light d-none">
				<div class="container-fluid container-xxl">
					<div class="row justify-content-center align-items-center text-center">
						
						<div class="col-md-10 col-lg-8 text-center">
							<h1 class="h4 mb-3 text-center"><?php the_field('primary_title'); ?></h1>
							
						</div>

					</div>
				</div>
			</section>
			<!-- // end: page-intro -->

			<!-- start: section-wide-with-background -->
			<?php get_template_part('inc/components/section-wide'); ?>
			<!-- // end: section-wide-with-background -->
			<!-- start: home--our-aims -->
			<section class="section bg-light pb-0">
				<div class="container-fluid container-xxl">

					<div class="row justify-content-center text-center">
						<div class="col-md-10 col-lg-8">
							<img class="img-fluid mb-4"
								style="height: 150px;"
								src="/wp-content/themes/hopecommunity/static/images/logo.svg"
								alt="Hope Community Projects Logo">
							<h2 class="my-4 h4"><?php the_field('homepage_boxes_title'); ?></h2>
							<div class="sep bg-blue"></div>
							<?php the_field('homepage_boxes_intro_text'); ?>
						</div>
					</div>

				</div>

				<div class="row mt-5 d-none">
					
					<?php if( have_rows('homepage_boxes') ): ?>
					<?php while( have_rows('homepage_boxes') ) : the_row(); ?>
					<div class="col-md-6 mb-5 mb-md-0">
						<div class="card h-100 no-border no-border-radius">
							<div class="card-img-top">
								<?php if( get_sub_field('homepage_box_image') ): ?>
									<?php 
									$link = get_sub_field('homepage_box_link');
									if( $link ): ?>
										<a href="<?php echo esc_url( $link ); ?>"><img class="img-fluid d-block mx-auto mb-4 mb-lg-0" src="<?php the_sub_field('homepage_box_image'); ?>" /></a>
									<?php endif; ?>				
								<?php endif; ?>
							</div>
							<div class="card-body d-flex flex-column bg-blue text-white">
								<h4 class="mb-4 h4"><?php the_sub_field('homepage_box_title'); ?></h4>
								<?php the_sub_field('homepage_box_text'); ?>
							</div>
							<div class="card-footer no-border no-border-radius bg-blue">
								<?php 
									$link = get_sub_field('homepage_box_link');
									if( $link ): ?>
										<a class="text-white" href="<?php echo esc_url( $link ); ?>">Read More</a>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<?php endwhile; ?>
					<?php endif; ?>
					
				</div>

				<div class="row align-items-center bg-blue mt-5">
				
					<div class="col-md-6 p-6 text-white order-1 order-md-0">
						<h3>ABOUT HOPE COMMUNITY PROJECTS</h3>
						<p>Hope Community Projects seek to offer practical support to enable opportunities for social interaction, a nursery, a holiday feeding programme, friendship, support and advice. Children and families are given the right support at the right time in the right way, by running a varied program of opportunities supporting people to build their capabilities, confidence, understanding and well-being.</p>
						<p><a class="btn btn-outline-white btn-lg no-border-radius" href="/about" title="About Hope Community Projects">Learn more</a></p>
					</div>
					<div class="col-md-6 bg-cover order-0 order-md-1" style="min-height:530px; background-image:url('/wp-content/uploads/2021/04/home-hope-nursery-large.jpg'); background-size:cover; background-repeat:no-repeat;"></div>
				
				</div>
				
				<div class="row align-items-center bg-blue ">
					<div class="col-md-6 bg-cover" style="min-height:530px; background-image:url('/wp-content/uploads/2021/04/home-about-hope-large.jpg'); background-size:cover; background-repeat:no-repeat;"></div>
					<div class="col-md-6 p-6 text-white">
						<h3>GRUBHUB</h3>
						<p>We believe that early intervention and excellent affordable accessible childcare forms the foundation for a good start in life. Every child and family member irrespective of ethnicity, wealth, health or ability deserve to live their best life.</p>
						<p><a class="btn btn-outline-white btn-lg no-border-radius" href="/grubhub" title="Hope Community GrubHub">Learn more</a></p>
					</div>
				</div>
			</section>
			<!-- // end: home--our-aims -->

			<!-- start: donate -->
			<?php get_template_part('inc/blocks/donate'); ?>
			<!-- end //: donate -->

			<!-- start: home--news -->
			<section class="section bg-light">
				<div class="container-fluid container-xxl">

					<div class="row justify-content-center text-center">
						<div class="col-md-10 col-lg-8">
							<img class="img-fluid mb-4"
								style="height: 150px;"
								src="/wp-content/themes/hopecommunity/static/images/logo.svg"
								alt="Hope Community Projects Logo">
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
										<a class="h5 text-white" href="/news" title="View all news">View all news</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-10 mb-4">
							<div class="card no-border-radius h-100 no-border card--press-releases">
								<div class="card-body px-5">
									<h3 class="text-center mt-4 h4">Latest Press Releases</h3>
									<div class="sep bg-green"></div>
									<div class="row">
										
										<?php $the_query = new WP_Query( array( 'posts_per_page' => 2, )); ?>
										<?php if ( $the_query->have_posts() ) : ?>
											<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
											<div class="col-6">
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
								<div class="card-footer no-border-radius bg-green">
									<div class="btn-container text-center">
										<a class="h5 text-white" href="/press-releases" title="View all press releases">View all press releases</a>
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
