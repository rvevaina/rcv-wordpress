<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/flat-ui/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/flat-ui/css/flat-ui.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
        <!-- Using only with Flat-UI (free)-->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common-files/css/icon-font.css">
        <!-- end -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common-files/css/animations.css">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
        <script src="<?php echo get_template_directory_uri(); ?>/flat-ui/js/bootstrap.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/common-files/js/jquery.parallax.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/common-files/js/startup-kit.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/common-files/js/css_browser_selector.js" type="text/javascript"></script>
<!--        <script src="--><?php //echo get_template_directory_uri(); ?><!--/js/main.js"></script>-->


	</head>
	<body <?php body_class(); ?>>

