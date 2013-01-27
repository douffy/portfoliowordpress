<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="fr-BE"> <!--<![endif]-->
    <head>
		
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php bloginfo('name'); ?></title>
        <meta name="description" content="<?php bloginfo('description'); ?>"/>
        
        <meta name="viewport" content="width=device-width">
        
	    <meta property="og:title" content="<?php bloginfo('name'); ?>"/>
	    <meta property="og:type" content="blog"/>
		<meta property="og:url" content="<?php bloginfo('url'); ?>"/>
		<meta property="og:image" content="<?php bloginfo('template_directory'); ?>/img/logo2.png"/>
		<meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>
		<meta property="og:description" content="<?php bloginfo('description'); ?>"/>
 
        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php bloginfo('template_directory') ?>/img/apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_directory') ?>/img/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('template_directory') ?>/img/apple-touch-icon-114x114.png" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo('template_directory') ?>/img/apple-touch-icon-144x144.png" />
 
 		<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory') ?>/img/favicon.ico" /><![endif]-->
        <link rel="icon" type="image/png" href="<?php bloginfo('template_directory') ?>/img/favicon.png" />
 
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/normalize.min.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>" />
        
        <script src="<?php bloginfo('template_directory') ?>/js/jquery-1.8.2.js" type="text/javascript"></script>
        <script src="<?php bloginfo('template_directory') ?>/js/jquery.masonry.js"></script>
        <script src="<?php bloginfo('template_directory') ?>/js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
    </head>
    
    <body>
    <h1>Portfolio Philippe Douffet</h1>
    
    <header>
    		
        	
        	
        	<div id="logo">
        	<a href="<?php bloginfo('wpurl'); ?>"> 
        		<img src="<?php bloginfo('template_directory') ?>/img/logo3.png" alt="Accueil" width="272" height="120"/> 
        	</a>
        	</div>
        	<div class="nom">
        	<a href="<?php bloginfo('wpurl'); ?>">Douffet Philippe | Web Designer</a>
        	</div>
        	<nav id="nav">
        		 <?php wp_nav_menu(array('menu'=>'Header Menu')); ?>
        	</nav>
        </header>
       
       