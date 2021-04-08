<?php
/**
 *    The main template file
 */

get_header(); ?>
	<?php if ( have_posts() ) : ?>
	<main class="site-main site-main--index bg-light">

		<section class="page-header-section">
			<div class="page-header page-header-default page-header-masked page-header-md" style="background-image: url('/wp-content/uploads/2021/01/hero.jpg');">
				<div class="page-header-mask page-header-mask-30"></div>
			</div>
			<div class="page-header-title-box bg-orange py-4 py-md-5 mr-4 mr-lg-7 mt-n6">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center">
							<p>Press Releases</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="main-content" id="main-content">
			
			<section class="section section--press-releases-list">
				<div class="container">
					<div class="row">
						<?php while ( have_posts() ) : the_post(); ?>
						<div class="col-12 col-md-4 mb-5">
							<div class="card post-item">
								<a href="<?php the_permalink(); ?>">
									<div class="card-img-top mb-3">
										<?php the_post_thumbnail(); ?>
									</div>
								</a>
								<div class="card-body">
									<a href="<?php the_permalink(); ?>">
										<h2 class="h3"><?php the_title(); ?></h2>
									</a>
									<?php the_excerpt(); ?>
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
