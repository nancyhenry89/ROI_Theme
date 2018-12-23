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

                    <div id="advertisers" class="container-fluid double-sec sec">

                       
                            <?php
    $loop = new WP_Query( array( 'post_type' => 'advertisers') );
    if ( $loop->have_posts() ) :
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <div class="advImg">
                            <img src="<?php echo get_post_meta( get_the_ID(), 'podcast_file', true ); ?>" />
                        </div>
                        <div class="container">
                                <div class="labels">
                                    <label>
                                        <?php echo get_post_meta( get_the_ID(), 'sectionLabel', true ); ?>
                                    </label>
                                    <h2 class="sec-title"><?php echo get_post_meta( get_the_ID(), 'sectionName', true ); ?></h2>
                                    <div class="plus-icon" data="advertisers">+</div>
                                </div>
                                <div class="adv-content" data-open="advertisers">
                                    <p>
                                        <?php the_content(); // Dynamic Content ?>
                                    </p>
                                    <a href="<?php echo get_post_meta( get_the_ID(), 'link', true ); ?>">
                                        <?php echo get_post_meta( get_the_ID(), 'linkText', true ); ?>
                                    </a>
                                </div>

                                <?php endwhile;

	endif;
    wp_reset_postdata();
?>
                        </div>
                    </div>

                    <!--advertisers end-->

                    <!--affilates start-->

                    <div id="affiliates" class="container-fluid double-sec sec">
                       
                            <?php
    $loop = new WP_Query( array( 'post_type' => 'affiliates') );
    if ( $loop->have_posts() ) :
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                <div class="advImg">
                                    <img src="<?php echo get_post_meta( get_the_ID(), 'podcast_file', true ); ?>" />
                                </div>
                                <div class="container">
                                <div class="labels">
                                    <label>
                                        <?php echo get_post_meta( get_the_ID(), 'sectionLabel', true ); ?>
                                    </label>
                                    <h2 class="sec-title"><?php echo get_post_meta( get_the_ID(), 'sectionName', true ); ?></h2>
                                    <div class="plus-icon" data="affiliates">+</div>
                                </div>
                                <div class="adv-content" data-open="affiliates">
                                    <p>
                                        <?php the_content(); // Dynamic Content ?>
                                    </p>
                                    <a href="<?php echo get_post_meta( get_the_ID(), 'link', true ); ?>">
                                        <?php echo get_post_meta( get_the_ID(), 'linkText', true ); ?>
                                    </a>
                                </div>

                                <?php endwhile;

	endif;
    wp_reset_postdata();
?>
                        </div>
                    </div>

                    <!--affilates end-->
                    <!--about us start-->

                    <div id="about" class="container-fluid ">
                        <div class="container">
                            <?php
    $loop = new WP_Query( array( 'post_type' => 'aboutUS') );
    if ( $loop->have_posts() ) :
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h2 class="sec-title"><?php echo get_post_meta( get_the_ID(), 'sectionName', true ); ?></h2>
                                        <div class="about_cont">
                                            <div class="about_sec one">
                                                <?php echo get_post_meta( get_the_ID(), 'about1_box', true ); ?>
                                                    <button type="button" class="btn btn-primary">
                                                        <?php echo get_post_meta( get_the_ID(), 'btn1', true ); ?>
                                                    </button>

                                            </div>
                                            <div class="about_sec two">
                                                <?php echo get_post_meta( get_the_ID(), 'about2_box', true ); ?>
                                                    <button type="button" class="btn btn-primary">
                                                        <?php echo get_post_meta( get_the_ID(), 'btn2', true ); ?>
                                                    </button>

                                            </div>
                                            <div class="about_sec three">
                                                <?php echo get_post_meta( get_the_ID(), 'about3_box', true ); ?>
                                                    <button type="button" class="btn btn-primary">
                                                        <?php echo get_post_meta( get_the_ID(), 'btn3', true ); ?>
                                                    </button>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="about-img">
                                            <img src="<?php echo get_post_meta( get_the_ID(), 'podcast_file', true ); ?>" />
                                        </div>
                                    </div>
                                </div>

                                <?php endwhile;

	endif;
    wp_reset_postdata();
?>
                        </div>
                    </div>

                    <!--about us end-->
                    <!--Services start-->

                    <div id="services" class="container-fluid ">
                        <div class="container">
                            <?php
    $loop = new WP_Query( array( 'post_type' => 'services') );
    if ( $loop->have_posts() ) :
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                <div class="row">
                                    <div class="servicesImg">
                                        <img src="<?php echo get_post_meta( get_the_ID(), 'services_bg', true ); ?>" />
                                    </div>
                                    <div class="labels">
                                        <label>
                                            <?php echo get_post_meta( get_the_ID(), 'sectionLabel', true ); ?>
                                        </label>
                                        <h2 class="sec-title"><?php echo get_post_meta( get_the_ID(), 'sectionName', true ); ?></h2>
                                        <div class="plus-icon">+</div>
                                    </div>
                                    <div class="adv-content">
                                        <p>
                                            <?php the_content(); // Dynamic Content ?>
                                        </p>
                                        <a href="<?php echo get_post_meta( get_the_ID(), 'link', true ); ?>">
                                            <?php echo get_post_meta( get_the_ID(), 'linkText', true ); ?>
                                        </a>
                                    </div>

                                    <div class="row">
                                        <div class="services-icons">
                                            <div class="service">
                                                <div class="service-img"><img src="<?php echo get_post_meta( get_the_ID(), 'service1_icon', true ); ?>" /></div>
                                                <label>
                                                    <?php echo get_post_meta( get_the_ID(), 'service1', true ); ?>
                                                </label>
                                            </div>
                                            <div class="service">
                                                <div class="service-img"><img src="<?php echo get_post_meta( get_the_ID(), 'service2_icon', true ); ?>" /></div>
                                                <label>
                                                    <?php echo get_post_meta( get_the_ID(), 'service2', true ); ?>
                                                </label>
                                            </div>
                                            <div class="service">
                                                <div class="service-img"><img src="<?php echo get_post_meta( get_the_ID(), 'service3_icon', true ); ?>" /></div>
                                                <label>
                                                    <?php echo get_post_meta( get_the_ID(), 'service3', true ); ?>
                                                </label>
                                            </div>
                                            <div class="service">
                                                <div class="service-img"><img src="<?php echo get_post_meta( get_the_ID(), 'service4_icon', true ); ?>" /></div>
                                                <label>
                                                    <?php echo get_post_meta( get_the_ID(), 'service4', true ); ?>
                                                </label>
                                            </div>
                                            <div class="service">
                                                <div class="service-img"><img src="<?php echo get_post_meta( get_the_ID(), 'service5_icon', true ); ?>" /></div>
                                                <label>
                                                    <?php echo get_post_meta( get_the_ID(), 'service5', true ); ?>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php endwhile;

	endif;
    wp_reset_postdata();
?>
                        </div>
                    </div>

                    <!--Services end-->

                </div>
                <!-- #content -->
            </div>
            <!-- #primary -->
    </div>
    <!-- #main-content -->

    <?php
get_footer();