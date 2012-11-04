<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <!-- / WEBMASTERTOOLS VERIFICATION -->
  <meta content="7FkS5x5z7SDnRIUL4pf/lozHbpK5B8Z6w8JKRxnQ9GA=" name="verify-v1" />
  <meta charset="utf-8">
  <meta content="Denkmalschutz Immobilien, Denkmalschutz, Denkmalimmobilien, Denkmal Immobilien, Baudenkmal, Denkmalgeschützte Immobilien" name="keywords" />
  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
  <meta name="viewport" content="width=device-width">
  <link href="http://<?php echo $_SERVER['SERVER_NAME']?>/feed" rel="alternate" title="Aktuelle Objekte von Denkmalimmobilien.info" type="application/atom+xml" />
  <link href="/favicon.ico" rel="shortcut icon" type="image/png" />
  <script src="<?php echo get_template_directory_uri(); ?>/js/libs/modernizr-2.5.0.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery-1.7.1.min.js"><\/script>')</script>
  <?php wp_head(); ?>
  <?php roots_head(); ?>
  <script src="http://<?php echo $_SERVER['SERVER_NAME']?>/javascripts/jquery.tools.min.js"></script>
  <script src="http://<?php echo $_SERVER['SERVER_NAME']?>/javascripts/thickbox.js"></script>
  <script src="http://<?php echo $_SERVER['SERVER_NAME']?>/javascripts/cufon.js"></script>
  <script src="http://<?php echo $_SERVER['SERVER_NAME']?>/javascripts/font.js"></script>
  <script src="http://<?php echo $_SERVER['SERVER_NAME']?>/javascripts/application.js"></script>
  <script src="http://<?php echo $_SERVER['SERVER_NAME']?>/javascripts/forms.js"></script>  
  <script src="http://<?php echo $_SERVER['SERVER_NAME']?>/slider/js/jquery.anythingslider.js"></script>
  <link rel="stylesheet" type="text/css" media="all" href="http://<?php echo $_SERVER['SERVER_NAME']?>/stylesheets/compiled/grid.css" />
  <link rel="stylesheet" type="text/css" media="all" href="http://<?php echo $_SERVER['SERVER_NAME']?>/stylesheets/thickbox.css" />
  <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" />
</head>

<body <?php body_class(roots_body_class()); ?>>

  <?php roots_header_before(); ?>
    <header id="banner" class="navbar navbar-fixed-top" role="banner">
	<?php 
		$ch = curl_init(); 
		curl_setopt($ch, CURLOPT_URL, "http://" . $_SERVER['SERVER_NAME'] . "/static/header");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$output = curl_exec($ch); 
		echo $output;
	?>
    </header>
  <?php roots_header_after(); ?>

  <?php roots_wrap_before(); ?>
  <div id="body" class="<?php echo WRAP_CLASSES; ?>" role="document">