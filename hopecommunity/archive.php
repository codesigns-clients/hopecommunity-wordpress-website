<?php
/**
 *    Archive Template for Posts
 */

get_header(); ?>
	<?php if ( have_posts() ) : ?>
	
	<main class="site-main site-main--archive">
		
		<div class="main-content" id="main-content">

			<section class="section">
				<div class="container">
					<div class="row">
						<?php while ( have_posts() ) : the_post(); ?>
						<div class="col col-md-5 col-md-offset-1">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail(); ?>
								<h2><?php the_title(); ?></h2>
							</a>
							<?php the_excerpt(); ?>
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
