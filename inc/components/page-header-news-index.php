<section class="page-header-section">
	<div class="page-header page-header-default page-header-masked page-header-md" style="background-image: url('/wp-content/uploads/2021/01/hero.jpg');">
		<div class="page-header-mask page-header-mask-30"></div>
	</div>
	<div class="page-header-title-box bg-blue py-4 py-md-5 mr-4 mr-lg-7 mt-n6">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<?php while ( have_posts() ) : the_post(); ?>
					<p>Hope Community Projects <?php the_title(); ?></p>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</div>
</section>