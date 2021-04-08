<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */

get_header();
?>

<main class="site-main site-main--single">

	<?php get_template_part('inc/components/page-header-press-release'); ?>

	<div class="main-content" id="main-content">
		<section class="section section-sm pt-5">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="container-fluid container-xxl">
					
					<div class="entry-image mb-3 text-center">
						<?php the_post_thumbnail(); ?>
					</div>

					<header class="entry-header row justify-content-center">
						<div class="col-12 col-md-11">
							<?php the_title( '<h1 class="entry-title h3">', '</h1>' ); ?>
							<span class="date"><?php the_date() ?></span>
						</div>
					</header>

					<div class="entry-content row justify-content-center">
						<div class="col-12 col-md-11">
						<?php the_content(); ?>
						</div>
					</div>

				</div>
			</article>
			<!-- #post-<?php the_ID(); ?> -->
		</section>
	</div>

</main>
<!-- end: // main -->

<?php
get_footer();
