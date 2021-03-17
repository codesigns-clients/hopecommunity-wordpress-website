<section class="section section-sm bg-orange">
	<div class="container-fluid container-xxl">
		<div class="row justify-content-center text-center">
			<div class="col-md-10">
				<div class="card">
					<div class="card-body bg-orange text-white p-4">
						<img class="img-fluid mb-4" style="height: 150px;" src="/wp-content/themes/hopecommunity/static/images/logo-donate-white.svg" alt="Hope Community Projects Logo">
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