<?php /* Template Name: Demo Page Template */ get_header(); ?>

    <div id="main-content" class="main-content">

        <?php
	if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
?>
            <div id="primary" class="content-area">
                <div id="content" class="site-content" role="main">
                    <div id="mainSec" class="container">
                        <?php
    $loop = new WP_Query( array( 'post_type' => 'main') );
    if ( $loop->have_posts() ) :
        while ( $loop->have_posts() ) : $loop->the_post(); ?>

                            <div class="video">
                                <div class="col-md-12">
                                    <iframe src="<?php echo get_post_meta( get_the_ID(), 'vidLink', true ); ?>">
                                    </iframe>
                                </div>
                            </div>
                            <div class="numbers">
                                <div class="col-md-4">
                                    <div class="number">
                                        <?php echo get_post_meta( get_the_ID(), 'roi', true ); ?>
                                    </div>
                                    <label>ROI</label>
                                </div>
                                <div class="col-md-4">
                                    <div class="number">
                                        <?php echo get_post_meta( get_the_ID(), 'countries', true ); ?>
                                    </div>

                                    <label>Countries</label>
                                </div>
                                <div class="col-md-4">
                                    <div class="number">
                                        <?php echo get_post_meta( get_the_ID(), 'epc', true ); ?>
                                    </div>

                                    <label>EPC</label>
                                </div>
                            </div>
                            <?php endwhile;

	endif;
    wp_reset_postdata();
?>

                    </div>



<!--advertisers start-->

                    <div id="advertisers" class="container-fluid">
						<div class="container">
                        <?php
    $loop = new WP_Query( array( 'post_type' => 'advertisers') );
    if ( $loop->have_posts() ) :
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
        			<?php the_content(); // Dynamic Content ?>

                            <div class="advImg">
                                <img src="<?php echo get_post_meta( get_the_ID(), 'podcast_file', true ); ?>"/>
                            </div>
							<div class="labels">
								<label><?php echo get_post_meta( get_the_ID(), 'sectionLabel', true ); ?></label>
								<h2 class="sec-title"><?php echo get_post_meta( get_the_ID(), 'sectionName', true ); ?></h2>
								<div class="plus-icon">+</div>
							</div>
							<div class="adv-content">
								<p>  <?php echo get_post_meta( get_the_ID(), 'text', true ); ?></p>
								<a href="<?php echo get_post_meta( get_the_ID(), 'link', true ); ?>"><?php echo get_post_meta( get_the_ID(), 'linkText', true ); ?></a>
							</div>	

                            <?php endwhile;

	endif;
    wp_reset_postdata();
?>
</div>
                    </div>


<!--advertisers end-->



                </div>
                <!-- #content -->
            </div>
            <!-- #primary -->
    </div>
    <!-- #main-content -->

    <?php
get_footer();