<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */

get_header();
?>

<main class="main main--single--portfolio">

	<?php get_template_part('inc/components/page-header'); ?>

	<div class="main-content" id="main-content">

		<article id="post-<?php the_ID(); ?>" <?php post_class('section pt-5'); ?>>

			<div class="container-fluid container-xxl text-center">

				<div class="row justify-content-center entry-content">
					<div class="col-12 col-md-7">
						<?php the_content(); ?>
						<div class="google-form-wrapper">
							<iframe src="<?php the_field('form_url'); ?>/viewform?embedded=true" width="640" height="<?php the_field('form_height'); ?>" frameborder="0" marginwidth="0" marginheight="0">Loading…</iframe>
						</div>
					</div>
				</div>

			</div>

		</article>
		<!-- #post-<?php the_ID(); ?> -->
	
	</div>

</main>

<?php
get_footer();
