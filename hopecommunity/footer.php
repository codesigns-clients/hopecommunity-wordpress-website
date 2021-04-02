	<footer class="footer text-white py-4 py-sm-5 py-md-6 bg-blue">
	
		<div class="container-fluid container-xxl">

			<div class="box--transparent mb-4 p-4 d-md-flex justify-content-sm-between footer-brand">
				<a href="/" title="Hope Community Projects Coventry"> 
					<img class="img-fluid mb-4" style="height: 150px;" src="/wp-content/themes/hopecommunity/static/images/logo-white.svg" alt="Hope Community Projects Logo">
				</a>
				<div class="footer-contact mt-4 mt-md-0">
					<h3 class="h4 mb-4">Contact us:</h3>
					<div class="py-3 d-flex">
						<i class="fal fa-phone"></i> 
						<a class="ml-3 font-weight-bold" title="Call Hope Community Projects" href="tel:<?php echo telephone(get_field('phone_number', 'options')); ?>" class="telephone"><?php the_field('phone_number', 'options'); ?></a>
					</div>
					<div class="py-3 d-flex">
						<i class="fal fa-envelope"></i> 
						<a class="ml-3 slidelink slidelink--white font-weight-bold" title="Email Hope Community Projects" href="mailto:<?php the_field('email_address', 'options'); ?>" class="email">Email <?php the_field('company_name', 'options'); ?></a>
					</div>
				</div>

			</div>
			
			<div class="box--transparent mb-4 p-4 footer-social text-center text-sm-left">
				<div class="row align-items-center">
					<div class="col-sm-4">
						<h3 class="mb-0">Find us on:</h3>
					</div>
					<div class="col-sm-8">
						<ul class="footer-social-links list-unstyled d-flex justify-content-between mt-4">
							<li class="mx-auto"><a target="_blank" href="https://www.facebook.com/hopecommunityproject2/" title="Find us on Facebook"><i class="fab fa-facebook-f"></i></a></li>
							<li class="mx-auto"><a target="_blank" href="https://www.twitter.com/hopecommunityP2/" title="Follow us on Twitter"><i class="fab fa-twitter"></i></a></li>
							<li class="mx-auto"><a target="_blank" href="https://www.instagram.com/hopecommunityproject2/" title="See us on Instagram"><i class="fab fa-instagram"></i></a></li>
						</ul>		
					</div>
				</div>
			</div>

			<div class="box--transparent mb-4 p-4 footer-menu">
				<div class="row">
					<ul class="col-12 footer-site-links list-unstyled d-md-flex justify-content-between mb-0">
						<li class="mb-2 mb-md-0"><a class="slidelink slidelink--white text-uppercase font-weight-bold" href="/cookies/" title="Cookies">Cookies</a></li>
						<li class="mb-2 mb-md-0"><a class="slidelink slidelink--white text-uppercase font-weight-bold" href="/privacy-policy/" title="Privacy Policy">Privacy Policy</a></li>
						<li class="mb-2 mb-md-0"><a class="slidelink slidelink--white text-uppercase font-weight-bold" href="/safeguarding-policy/" title="Safeguarding Policy">Safeguarding Policy</a></li>
						<li class="mb-2 mb-md-0"><a class="slidelink slidelink--white text-uppercase font-weight-bold" href="/terms-conditions/" title="Terms &amp; Conditions">Terms &amp; Conditions</a></li>
					</ul>
				</div>
			</div>
			
			<div class="box--transparent text-center p-4 footer-copyright">
				<p>UK Registered Charity No. <a target="_blank" href="https://register-of-charities.charitycommission.gov.uk/charity-search/-/results/page/1/delta/20/keywords/<?php the_field('company_registration_number', 'options'); ?>"><?php the_field('company_registration_number', 'options'); ?></a>.</p>
				<p>Website content may not be reproduced without expressed written permission.</p>
				<p>©<span class="current-year">2019 - <?php echo date("Y"); ?></span> Hope Community Projects.</p>
				<p class="mb-0">Website by: <a target="_blank" title="Website by Co:Designs" href="https://www.codesigns.co.uk">Co:Designs</a></p>
			</div>

		</div>

	</footer>

</div>
<!-- end: // site -->
<?php wp_footer(); ?>
</body>
</html>