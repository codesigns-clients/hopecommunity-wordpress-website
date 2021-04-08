<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */

get_header();
?>

<main class="site-main site-main--single">

	<section class="page-header-section">
		<div class="page-header page-header-default bg-primary page-header-xs">
			<div class="page-header-mask"></div>
			<div class="page-header-content">
				<div class="container-fluid container-xxl">
					<div class="row text-white text-center align-items-center page-header-xs">
						<div class="col-sm-12">
							<?php
								the_title( '<h1 class="entry-title">', '</h1>' );
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="main-content" id="main-content">
		<section class="section section-sm pt-5">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="container">
					
					<div class="entry-image mb-3 text-center">
						<?php the_post_thumbnail(); ?>
					</div>

					<header class="entry-header row justify-content-center">
						<div class="col-12 col-md-11">
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
