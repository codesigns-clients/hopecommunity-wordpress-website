<?php 
	$style = get_field('page_header_style');
	$type = get_field('page_header_type');
	
	$height = get_field('page_header_height');
	$overlay = get_field('page_header_overlay');
	$overlay_value = get_field('page_header_overlay_value');
	$title_box = get_field('page_header_title_box_colour');
	$text = get_field('page_header_text');
	$image = get_field('page_header_image');
	$bg_colour = get_field('page_header_background_colour');
	$size = 'full';
	$image_url = wp_get_attachment_image_url($image, $size); 
?>

<?php if(($style) == 'default' ) : ?>
<section class="page-header-section">
	<div class="page-header page-header-<?php echo $style; ?> <?php if(($overlay) == 'yes' ) : ?>page-header-masked<?php endif; ?> page-header-<?php echo $height; ?> <?php if(($type) == 'bg-colour' ) : ?><?php echo $bg_colour; ?><?php endif; ?>"
		<?php if(($type) == 'bg-image' ) : ?>style="background-image: url(<?php echo $image_url; ?>)"<?php endif; ?>>
		<?php if(($overlay) == 'yes' ) : ?><div class="page-header-mask page-header-mask-<?php echo $overlay_value; ?>"></div><?php endif; ?>
		<div class="page-header-content">
			<div class="container-fluid container-xxl">
				<div class="row text-white text-center justify-content-center align-items-center page-header-<?php echo $height; ?>">
					<div class="col-md-10">
						<?php echo $text; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php elseif(($style) == 'title-boxed' ) : ?>
	<section class="page-header-section">
		<div class="page-header page-header-<?php echo $style; ?> <?php if(($overlay) == 'yes' ) : ?>page-header-masked<?php endif; ?> page-header-<?php echo $height; ?> <?php if(($type) == 'bg-colour' ) : ?><?php echo $bg_colour; ?><?php endif; ?>"
		<?php if(($type) == 'bg-image' ) : ?>style="background-image: url(<?php echo $image_url; ?>)"<?php endif; ?>>
		<?php if(($overlay) == 'yes' ) : ?><div class="page-header-mask page-header-mask-<?php echo $overlay_value; ?>"></div><?php endif; ?>
	</div>
	<div class="page-header-title-box <?php echo $title_box; ?> py-5 mr-4 mr-lg-7 mt-n6">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<?php echo $text; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php endif; ?>