<?php
/**
 *    The main template file
 */

get_header(); ?>
<?php if ( have_posts() ) : ?>
	<main class="site-main site-main--page">

		<?php
			if ( is_page( 192 ) ) {
				get_template_part('inc/components/page-header-news-index');
			} else {
				get_template_part('inc/components/page-header');
			} 
		?>

		<div class="main-content" id="main-content">
			
			<?php while ( have_posts() ) : the_post(); ?>
			<section class="section pt-3 pb-0">
				<div class="container-fluid container-xxl">
					<div class="row justify-content-center py-5">
						<div class="col-lg-8 user-content">				
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</section>
			<?php endwhile; ?>

		</div>

	</main>
	<!-- end: // main -->
	
<?php endif; ?>
<?php
get_footer();
