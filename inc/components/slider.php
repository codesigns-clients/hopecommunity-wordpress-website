<?php if(have_rows('slider')): ?>
<div class="slider">
	<?php while(have_rows('slider')): the_row();
		$image = get_sub_field('slide_image');
		$size = 'full';
		$image_url = wp_get_attachment_image_url($image, $size); ?>
		<div class="slide text-center" style="background-image: url(<?php echo $image_url; ?>)">
			<div class="container">
				<h2><?php the_sub_field('slide_title'); ?></h2>
				<!-- <?php if( get_sub_field('slide_link') ): ?>
				<a class="btn btn-default btn-white btn-border" title="READ MORE" href="/information/">READ MORE</a>
				<?php endif; ?> -->
			</div>
		</div>
	<?php endwhile; ?>
</div>
<div class="clear"></div>
<?php endif; ?>
