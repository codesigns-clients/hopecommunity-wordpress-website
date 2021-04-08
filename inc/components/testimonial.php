<?php if (get_field('testimonial')): ?>
<div class="testimonial-wrapper">
	<div class="container text-center">
		<?php $test_id = get_field('testimonial'); ?>
		<blockquote>
			<?php the_field('testimonial', $test_id); ?>
		</blockquote>
		<cite>
			<?php echo get_the_title($test_id); ?>
		</cite>
	</div>
</div>
<?php endif; ?>
