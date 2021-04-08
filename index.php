<?php
/**
 *    The main template file
 */

get_header(); ?>
	<?php if ( have_posts() ) : ?>
	<main class="site-main site-main--index bg-light">

		<?php get_template_part('inc/components/page-header-press-releases'); ?>

		<div class="main-content" id="main-content">
			
			<section class="section section--press-releases-list">
				<div class="container">
					<div class="row">
						<?php while ( have_posts() ) : the_post(); ?>
						<div class="col-12 col-md-4 mb-5">
							<div class="card post-item h-100">
								<a href="<?php the_permalink(); ?>">
									<div class="card-img-top mb-3">
										<?php the_post_thumbnail(); ?>
									</div>
								</a>
								<div class="card-body">
									<a href="<?php the_permalink(); ?>">
										<h2 class="h5"><?php the_title(); ?></h2>
									</a>
									
								</div>
							</div>
						</div>
						<?php endwhile; ?>
					</div>
				</div>
			</section>
		
		</div>

	</main>
	<?php endif; ?>
<?php
get_footer();
