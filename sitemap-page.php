<?php
/**
 * The template for Sitemap
 *
 * Template Name: Sitemap
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

<main class="site-main site-main--sitemap">

	<div class="main-content" id="main-content">

		<div class="container-fluid container-xxl">
			<div class="row">
				
				<div class="col col-sm-6 col-md-4 sitemap-nav">
					<h3>Sitemap</h3>
					<?php
					$sm_pages_args = array(
						'post_type' => 'page',
						'orderby' => 'menu_order',
						'order' => 'ASC',
						'posts_per_page' => -1
					);
					$sm_pages = new WP_Query($sm_pages_args);
					if ( $sm_pages->have_posts() ) {
						echo '<ul class="sitemap-nav__list">';
						while ( $sm_pages->have_posts() ) { $sm_pages->the_post();
							echo '<li class="sitemap-nav__item"><a class="sitemap-nav__link" href="' . get_the_permalink() . '" title="'. get_the_title() . '" >' . get_the_title() . '</a></li>';
						}
						echo '</ul>';
						wp_reset_postdata();
						}
					?>
				</div>
				
				<div class="col col-sm-6 col-md-4 latest-posts">
					<h3>Latest Posts</h3>
					<?php
					$sm_posts_args = array(
						'post_type' => 'post',
						'orderby' => 'date',
						'order' => 'DESC',
						'posts_per_page' => 15
					);
					$sm_posts = new WP_Query($sm_posts_args);
					if ( $sm_posts->have_posts() ) {
						echo '<ul class="latest-posts__list">';
						while ( $sm_posts->have_posts() ) { $sm_posts->the_post();
							echo '<li class="latest-posts__item"><a class="latest-posts__link" href="' . get_the_permalink() . '" title="'. get_the_title() . '" >' . get_the_title() . ' <br><span class="date">' . get_the_date() . '</span></a></li>';
						}
						echo '</ul>';
						wp_reset_postdata();
						}
					?>
				</div>
				
			</div>
		</div>
		
	</div>

</main>
<!-- end: // main -->

<?php endwhile;
get_footer();
