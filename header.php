<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/main.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700&subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo bloginfo('stylesheet_url'); ?>"/>
<?php wp_head(); ?>
</head>
<body>
	<header id="header" class="background-bar">
		<div class="top-bar">
			<div class="wrapper">
				<div class="inline">
					<span class="icon"><i class="fa fa-facebook" aria-hidden="true"></i></span>
					<span class="icon"><i class="fa fa-twitter" aria-hidden="true"></i></span>
					<span class="icon"><i class="fa fa-pinterest" aria-hidden="true"></i></span>
					<span class="icon"><i class="fa fa-camera-retro" aria-hidden="true"></i></span>
				</div>
				<nav class="inline alignright">
                    <!--MENU-->
					<ul class="menu">
                        <?php
						wp_nav_menu( array( 'theme_location' => 'main-menu' ) );
                        ?>
					</ul>
				</nav>
			</div>
		</div>
		<div class="wrapper">
			<div class="logo-box aligncenter">
				<p class="aside-text">since<span class="logo"><i class="fa fa-coffee" aria-hidden="true"></i></span>2001</p>
				<h1><?php bloginfo('name'); ?></h1>
				<p class="sentence"><?php bloginfo('description'); ?></p>
			</div>
		</div>
	</header>
	<section>
		<div class="photo-wrapper">
			<div class="photo-box">
				<img src="<?php echo bloginfo('template_directory'); ?>/img/img1.jpg" alt="" />
                
			</div>
			<div class="photo-box">
				<img src="<?php echo bloginfo('template_directory'); ?>/img/img2.jpg" alt=''>
			</div>
		</div>
	</section>