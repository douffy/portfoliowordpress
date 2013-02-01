<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="fr-BE"> <!-- <![endif]-->
    <head> 
		<meta charset="<?php bloginfo('charset'); ?>" />
        <title><?php bloginfo('name'); ?></title>
        <meta name="description" content="<?php bloginfo('description'); ?>" />
        
        <meta name="viewport" content="width=device-width">
        
	    <meta property="og:title" content="<?php bloginfo('name'); ?>" />
	    <meta property="og:type" content="blog" />
		<meta property="og:url" content="<?php bloginfo('url'); ?>" />
		<meta property="og:image" content="<?php bloginfo('template_directory'); ?>/img/logo2.png" />
		<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
		<meta property="og:description" content="<?php bloginfo('description'); ?>" />
 		
 		<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/img/favicon.png" />
 		
 		<!-- <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/normalize.min.css"> -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
 
        <script src="<?php bloginfo('template_directory') ?>/js/jquery-1.9.0.min.js" type="text/javascript"></script>
        <script src="<?php bloginfo('template_directory') ?>/js/jquery.masonry.min.js"></script>
        <script src="<?php bloginfo('template_directory') ?>/js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
    </head>
    <body>
    	<header>
        	<div id="logo">
        	<a href="<?php bloginfo('wpurl'); ?>"> 
        		<img src="<?php bloginfo('template_directory') ?>/img/logo3.png" alt="douffy" width="272" height="120"/> 
        	</a>
        	</div>
        	<h1 class="nom">
        	<a href="<?php bloginfo('wpurl'); ?>">Douffet Philippe | Web Designer</a>
        	</h1>
        	<nav>
        		<h2>Menu</h2>
        		 <?php wp_nav_menu(array('menu'=>'Header Menu')); ?>
        	</nav>
        </header>
       
       