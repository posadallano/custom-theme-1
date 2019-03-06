<?php
/**
 * Template part for displaying lightbox callery contents
 *
 * @link        https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package     Cold_Spring_School
 * @subpackage  templates
 * @author      Andres Posada
 * @link        https://github.com/posadallano
 * @since       1.0.0
 */

?>

<!-- Begin Lightbox Gallery Content -->
<div class="lightbox-gallery-content">
	<div class="container">
		<div class="row no-gutters">
			<div class="col-md-12 col-sm-12">
				<!-- Begin lightbox-gallery-box -->
				<div class="lightbox-gallery-box">
					<div class="owl-lightbox-gallery owl-theme">
						<?php $lightbox_id =  "lightbox-" . randomString($length = 6); ?>
						<?php if ( have_rows('slide') ): ?>
							<?php while ( have_rows('slide') ) : the_row(); ?>
								<?php $image = get_sub_field('gallery_image'); ?>
								<div class="item">
									<a href="<?php echo $image; ?>" data-lightbox="<?php echo $lightbox_id; ?>" data-title="<?php the_sub_field('caption_title'); ?>">
										<img typeof="foaf:Image" class="img-responsive" src="<?php echo $image; ?>" alt="<?php the_sub_field('caption_title'); ?>">
										<h4 class="title"><?php the_sub_field('caption_title'); ?></h4>
									</a>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
				<!-- End lightbox-gallery-box -->
			</div>
		</div>
	</div>
</div>
<!-- End Lightbox Gallery Content -->
