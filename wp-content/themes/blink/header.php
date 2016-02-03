<!doctype html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]>
<!--> 
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="keywords" content="Blink">	

	<!-- HTML5 SHIV -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Mobile Viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- Force IE to render best possible view -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<!-- FAVICON -->
	<link rel="icon" href="images/icons/favicon.png" type="image/png" sizes="16x16">

	<!-- FONT -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,300,300italic,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="//cloud.typography.com/6413692/7416752/css/fonts.css" />
			
	<?php wp_head(); ?>

	<script type="text/javascript">
	var homeUrl = '<?php echo get_home_url(); ?>';
	</script>

</head>
<body <?php body_class(); ?>>
	<?php get_template_part( 'content', 'mobile-menu' ); ?>

	<div id="page-wrapper">