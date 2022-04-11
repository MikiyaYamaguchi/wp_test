<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/common.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick-theme.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.css">
</head>

<body>
	<header>
		<div class="container">
			<h1 class="logo">
				<a href="<?php echo site_url(); ?>">
					<img src="<?php echo site_url(); ?>/wp-content/uploads/logo.png" alt="logo">
				</a>
			</h1>
			<div class="header_sns">
				<a href="#" target="_blank"><img src="<?php echo site_url(); ?>/wp-content/uploads/twitter.png" alt="twitter"></a>
				<a href="#" target="_blank"><img src="<?php echo site_url(); ?>/wp-content/uploads/instagram.png" alt="instagram"></a>
			</div>
		</div>
		<?php
		wp_nav_menu(array(
			'theme_location' => 'global',
			'container' => 'div',
			'container_class' => 'global_nav',
		));
		?>
		<div class="menu_icon">
			<div class="menu_icon_inner">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
	</header>