<?php
/**
 * Template Name: Home
 *
 */


get_header(); ?>

<div id="main-content" class="main-content">

<?php
	if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
?>
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		<div id="mainSec">
<?php
    $loop = new WP_Query( array( 'post_type' => 'main') );
    if ( $loop->have_posts() ) :
        while ( $loop->have_posts() ) : $loop->the_post(); ?>

				<div class="video"></div>
				<div class="numbers">
					<div class="col-md-4">
						<label>ROI</label>
						<div class="number"><?php echo get_post_meta( get_the_ID(), 'roi', true ); ?></div>
					</div>
					<div class="col-md-4">
						<label>Countries</label>
						<div class="number"><?php echo get_post_meta( get_the_ID(), 'countries', true ); ?></div>
					</div>
					<div class="col-md-4">
						<label>EPC</label>
						<div class="number"><?php echo get_post_meta( get_the_ID(), 'epc', true ); ?></div>
					</div>
				</div>
        <?php endwhile;

	endif;
    wp_reset_postdata();
?>

			</div>


		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<?php
//get_footer();
