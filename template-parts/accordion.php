<?php
/**
 * Template part for displaying Accordion contents
 *
 * @link        https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package     Cold_Spring_School
 * @subpackage  templates
 * @author      Adrian Morelos ~ Esteban Rocha ~ Jonathan Caiaffa
 * @link        https://github.com/adrian-morelos
 *              https://github.com/Esteban-Rocha
 *              https://github.com/jcaiaffa
 * @since       1.0.0
 */


$max_content = get_sub_field('max_content');

?>

<!-- Begin Accordion Content -->
<section class="faq-accordion accordion-content only-desktop">
	<div class="container">
		<div class="row">
			<?php if ($max_content == 'eighty'): ?>
				<div class="eighty"">
			<?php elseif ($max_content == 'fifty'): ?>
				<div class="col-md-6 col-sm-12">
			<?php else: ?>		
				<div class="col-md-12 col-sm-12">
			<?php endif ?>
					<!-- Begin accordion-box -->
					<div class="faq-accordion accordion-box">
						<?php if ( have_rows('item') ): ?>
							<?php while ( have_rows('item') ) : the_row(); ?>
								<?php 
								$header = get_sub_field('header'); 
								$summary = get_sub_field('summary'); 
								?>
								<h3><?php echo $header; ?></h3>
							    <div><?php echo $summary; ?></div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
					<!-- End accordion box -->
			</div>
		</div>
	</div>
</section>
<!-- End Accordion Content -->

<!-- Begin Carousel Content -->
<section class="faq-slider only-mobile">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<!-- Begin carousel-box -->
				<div class="carousel-box text-center">
					<div class="faq-carousel owl-theme">
						<?php if ( have_rows('item') ): ?>
							<?php while ( have_rows('item') ) : the_row(); ?>
								<?php 
									$header = get_sub_field('header'); 
									$summary = get_sub_field('summary'); 
								?>
								<div class="item">
									<h3><?php echo $header; ?></h3>
								    <div><?php echo $summary; ?></div>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
				<!-- End carousel box -->
			</div>
		</div>
	</div>
</section>
<!-- End Carousel Content -->