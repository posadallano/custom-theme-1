<?php
/**
 * Template part for displaying a calendar block
 *
 * @link        https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package     Cold_Spring_School
 * @subpackage  templates
 * @author      Andres Posada
 * @link        https://github.com/posadallano
 * @since       1.0.0
 */


// Get block acf value
$posts_to_show = get_sub_field('posts_to_show');
$category_slug = get_sub_field('category_slug');
$heading = get_sub_field('heading');
$subheading = get_sub_field('subheading');
$button_text = get_sub_field('button_text');
$button_url = get_sub_field('button_url');

?>

<!-- Begin Calendar section -->
<section class="calendar-box">
	<div class="container">
		<div class="row top">
			<div class="col-md-8 col-sm-12">
				<?php if ($heading): ?>
					<h2> <?php echo $heading; ?> </h2>	
				<?php endif ?>
				<?php if ($subheading): ?>
					<h5> <?php echo $subheading; ?> </h5>	
				<?php endif ?>
			</div>
			<div class="col-md-4 col-sm-12 only-desktop btn-cal">
				<?php if ($button_url): ?>
					<a class="btn btn-info cmp__btnWh" role="button" href="<?php echo $button_url; ?>"> <?php echo $button_text; ?> </a>
				<?php endif ?>
			</div>
		</div>			
		<div class="row row-cal">
			<!-- Begin Calendar-Box -->
			<?php 
			// Retrieve the next upcoming events
			$events = tribe_get_events( array(
			    'eventDisplay'=>'upcoming',
	            'posts_per_page'=> $posts_to_show,
	            'tax_query'=> array(
	                array(
	                    'taxonomy' => 'tribe_events_cat',
	                    'field' => 'slug',
	                    'terms' => $category_slug
	                )
	            )
			)    );
			 
			// Loop through the events and content for each
			foreach ( $events as $event ) { ?>
				<div class="col col-cal">
					<?php  
						echo "<span class='date'>" . tribe_get_start_date( $event->ID, true, 'd M' ) . "</span>";
					    echo "<p>$event->post_excerpt</p>";
					?>
				</div>
			<?php 
			}	
			?>			
		</div>
	</div>
	<?php if ($button_url): ?>
		<div class="col-sm-12 only-mobile btn-calendar">
			<a class="btn btn-info cmp__btnWh" role="button" href="<?php echo $button_url; ?>"> <?php echo $button_text; ?> </a>
		</div>
	<?php endif ?>
</section>
<!-- End Calendar section -->
