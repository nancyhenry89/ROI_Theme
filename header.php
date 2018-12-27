<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="stylesheet" href="https://use.typekit.net/wqw3ijv.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css" >

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
     /*   conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
		});
		*/
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper container-fluid">

			<!-- header -->
			<header class="header clear" role="banner">

					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
						</a>
					</div>
					<!-- /logo -->
					<div class="header-btns">
						<div class="login"><a href="#">login</a></div>
						<div class="sign-up"><a href="#">Sign Up</a></div>
					</div>
					<!-- nav -->
					<div class="desktop-nav">
						<div class="open">	<img src="<?php echo get_template_directory_uri(); ?>/img/open.png" ></div>
						<div class="close">	<img src="<?php echo get_template_directory_uri(); ?>/img/close.png" ></div>
						<ul>
							<li><a href="#advertisers">Advertisers</a></li>
							<li><a href="#affiliates">Affiliates</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#services">Services</a></li>
							<li><a href="#contact">Contact</a></li>
							<div class="nav-footer">
					<a href="marketing@roi.boutique" target="_top">marketing@roi.boutique</a>

					</div>
						</ul>

					</div>
					<div class="mobile-nav">
						<div class="open">	<img src="<?php echo get_template_directory_uri(); ?>/img/open.png" ></div>
						<div class="close">	<img src="<?php echo get_template_directory_uri(); ?>/img/close.png" ></div>
						<ul>
							<li class="login-nav"><a href="#">Login</a></li>
							<li><a href="#advertisers">Advertisers</a></li>
							<li><a href="#affiliates">Affiliates</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#services">Services</a></li>
							<li><a href="#contact">Contact</a></li>
							<div class="mobile-nav-footer">
								<div>
										<p>Don’t waste you time, </p>
										<p>Sign up and join our teams </p>
								</div>
								<button class="btn">Start Earning Now!</button>
								<p>Ask us anything </p>
								<a href="marketing@roi.boutique" target="_top">marketing@roi.boutique</a>
							</div>
						</ul>

					</div>
					<!--<nav class="nav" role="navigation">
						<?php //html5blank_nav(); ?>
					</nav>-->
					<!-- /nav -->

			</header>
			<!-- /header -->
