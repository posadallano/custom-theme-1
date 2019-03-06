<?php
/**
 * Template part for displaying FAQ Carrousel contents
 *
 * @link        https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package     Cold_Spring_School
 * @subpackage  templates
 * @author      Andres Posada
 * @link        https://github.com/posadallano
 * @since       1.0.0
 */

$additional_class = get_sub_field('additional_class');
$anchor_id = get_sub_field('anchor_id');

?>

<!-- Begin FAQ Carrousel Content -->
<section id="<?php echo $anchor_id; ?>" class="faq-carrousel carousel-content <?php echo $field; if ($additional_class){ echo " " . $additional_class; } ?>">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<!-- Begin carousel-box -->
				<div class="carousel-box text-center">
					<div class="faq-carousel owl-theme">
						<?php if ( have_rows('questions') ): ?>
							<?php while ( have_rows('questions') ) : the_row(); ?>
								<?php 
									$title = get_sub_field('title'); 
									$content = get_sub_field('content'); 
								?>
								<div class="item">
									<?php if ($title): ?>
										<h3><?php echo $title; ?></h4>
									<?php endif ?>
									<?php if ($content): ?>
										<?php echo $content; ?>
									<?php endif ?>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
				<!-- End carousel-box -->
			</div>
		</div>
	</div>
</section>
<!-- End FAQ Carrousel Content -->
