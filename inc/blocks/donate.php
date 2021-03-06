<section class="section section-sm bg-<?php the_field('donate_section_background_colour'); ?>">
	<div class="container-fluid container-xxl">
		<div class="row justify-content-center text-center">
			<div class="col-md-10">
				<div class="card">
					<div class="card-body bg-<?php the_field('donate_section_background_colour'); ?> text-white p-4">
						<img class="img-fluid section-logo mb-4" src="/wp-content/themes/hopecommunity/assets/images/logo-donate-white.svg" alt="Hope Community Projects Logo">
						<?php
							if ( is_page( 5 ) ) {
								get_template_part('inc/blocks/donate-home');
							} else {
								get_template_part('inc/blocks/donate-main');
							} 
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>