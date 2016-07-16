<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); wp_title(); ?></title>
	
	<?php wp_head(); ?>
</head>
<body>


	<header class="header">
		<div class="header_logo"><a href="<?php echo home_url(); ?>"> </a></div>
		<div class="header_menu">
		<?php if (!dynamic_sidebar('menu_header')): ?>
			<ul>
				<li class="header_menu_item"><a href="about">About company</a></li>
				<li class="header_menu_item"><a href="#">News</a></li>
				<li class="header_menu_item"><a href="site">About this site</a></li>
				<li class="header_menu_item"><a href="#">Register</a></li>
			</ul>
		<?php endif; ?>	  
		</div>

					<!-- HEADER MOBILE MENU -->

		<div class="header_mobile_menu">
			<ul>
				<li class="header_mobile_menu_icon">
					<div id='sandwich'>
				  		<div class='sw-topper'></div>
				  		<div class='sw-bottom'></div>
				  		<div class='sw-footer'></div>
					</div>
				</li>
				<li class="header_mobile_menu_content">
				<?php if (!dynamic_sidebar('menu_header_mobile')): ?>	
					<ul>
						<li class="header_mobile_menu_item"><a href="<?php echo home_url(); ?>">Home</a></li>
						<li class="header_mobile_menu_item"><a href="about">About company</a></li>
						<li class="header_mobile_menu_item"><a href="news">News</a></li>
						<li class="header_mobile_menu_item"><a href="site">About this site</a></li>
					</ul>
				<?php endif; ?>		
				</li>
			</ul>
		</div>
		<div class="header_slogan">
		<a href="about">We know what you need..</a>
		</div>
	</header>
	