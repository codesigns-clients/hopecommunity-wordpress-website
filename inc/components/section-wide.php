<!-- start: section-wide-with-background -->
<section class="section section-sm bg-<?php the_field('wide_section_colour'); ?>">
	<div class="container-fluid container-xxl">
		<div class="row justify-content-center text-white">
			<div class="col text-center">
				<h2 class="mb-4 h4"><?php the_field('wide_section_title'); ?></h2>
			</div>
		</div>
		<div class="row justify-content-center text-white">
			<div class="col-md-10 col-lg-8 text-center">
				<?php the_field('wide_section_content'); ?>
			</div>
		</div>
	</div>
</section>
<!-- // end: section-wide-with-background -->