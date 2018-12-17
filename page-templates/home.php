<?php
/**
 * Template Name: Home
 *
 */


//get_header(); ?>

<div id="main-content" class="main-content">

<?php
	if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
?>
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile;
			?>

<?php
    $loop = new WP_Query( array( 'post_type' => 'main') );
    if ( $loop->have_posts() ) :
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<div id="mainSec">
				<div class="video"></div>
				<div class="numbers">
					<div class="col-md-12">
						<label>ROI</label>
						<div class="number"><?php echo get_post_meta( get_the_ID(), 'roi', true ); ?></div>
					</div>
				</div>
			</div>
        <?php endwhile;

    endif;
    wp_reset_postdata();
?>



		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<?php
//get_footer();
