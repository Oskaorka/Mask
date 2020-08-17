<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php bloginfo('name'); echo " | "; bloginfo('description'); ?></title>
		<meta name="theme-color" content="#c9e0e04d">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<!-- <link rel="shortcut icon" href="<?php echo bloginfo('template_url');?>/assets/img/favicons/favicon.ico" type="image/x-icon"> -->
		<!-- <link rel="apple-touch-icon" href="<?php echo bloginfo('template_url');?>/assets/img/favicons/apple-touch-icon.png"> -->
		<!-- <link rel="apple-touch-icon" sizes="57x57" href="<?php echo bloginfo('template_url');?>/assets/img/favicons/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo bloginfo('template_url');?>/assets/img/favicons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo bloginfo('template_url');?>/assets/img/favicons/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo bloginfo('template_url');?>/assets/img/favicons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo bloginfo('template_url');?>/assets/img/favicons/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo bloginfo('template_url');?>/assets/img/favicons/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo bloginfo('template_url');?>/assets/img/favicons/apple-touch-icon-180x180.png"> -->
		<?php
			wp_head();
		?>
	</head>
		<body class="no-svg">
			<header style="
				<?php
					$field = get_field('header_color');
					if ($field == 'Wheat') {
						?>
						background: #F5DEB3;
						<?php
					}
					if ($field == 'Lavanda') {
						?>
						background: #e6e6fa;
						<?php
					} 
					if ($field == 'GreenYellow') {
						?>
						background: #c0f2c0;
						<?php
					}
					?> 
					">
			<div class="container">
			
				<div class="row align-items-center">
						<div class="header__logo">
							<?php the_custom_logo(); ?>
				</div>
						<div class="header__contacts">
						<div class="name_logo"><?php the_field('name_logo', 2); ?></div>
							<div class="header__contacts-item">
								<img src="<?php echo bloginfo('template_url');?>/assets/img/icons/svg/phone.svg" alt="телефон" class="header__contacts-logo">
								<div class="header__contacts-tel">
									<a href="tel:<?php the_field('phone', 2); ?>"><?php the_field('phone', 2); ?></a>
									<a href="tel:<?php the_field('phone', 2); ?>"><?php the_field('phone-2', 2); ?></a>
								</div>
							</div>
							
							<div class="header__contacts-item ">
								<img src="<?php echo bloginfo('template_url');?>/assets/img/icons/svg/cart.svg" alt="указатель" class="header__contacts-logo "width="20%">
								<a href="<?php echo bloginfo('template_url');?>/sample-page/korzina/" class="button" style="
						<?php
							$field = get_field('header_color');
							if ($field == 'Wheat') {
								?>
								background: #F5DEB3;
								<?php
							}
							if ($field == 'Lavanda') {
								?>
								background: #e6e6fa;
								<?php
							} 
							if ($field == 'GreenYellow') {
								?>
								background: #c0f2c0;
								<?php
							}
							?>
						">ЗАКАЗАТЬ</a>
							<!-- визуальная корзина на экране начало  -->
							<div class="header__basket-min"></div>
							<!-- визуальная корзина на экране конец -->
						</div>
					</div>
			</div>
			<nav class="row" data-slide="1">
			<!-- <?php
					wp_nav_menu( [
					'menu'            => 'Main', 
					'container'       => 'false', 
					'menu_class'      => 'header__nav', 
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'items_wrap'      => '<ul class="header__nav">%3$s</ul>',
					'depth'           => 1,
					] );
					
					?> -->
					<ul class="header__nav">
					<?php
						$field = get_field('nav-1_btn');
						if ($field == 'on') {
							?>
							<li>
								<a class="header__nav-item" href="<?php the_field('Link_nav-1'); ?>"><?php the_field('nav-1', 2); ?></a>
							</li>
							<?php
						}
					?>
						<li>
							<a class="header__nav-item" href="<?php the_field('Link_nav-2'); ?>"><?php the_field('nav-2', 2); ?></a>
						</li>
						<li>
							<a class="header__nav-item" href="<?php the_field('Link_nav-3'); ?>"><?php the_field('nav-3', 2); ?></a>
						</li>
						<li>
							<a class="header__nav-item" href="<?php the_field('Link_nav-4'); ?>"><?php the_field('nav-4', 2); ?></a>
						</li>
						<li>
							<a class="header__nav-item" href="<?php the_field('Link_nav-5'); ?>"><?php the_field('nav-5', 2); ?></a>
						</li>
						<!-- <li>
							<a id="childhood" class="header__nav-item" href="#childhood"><?php the_field('nav-6', 2); ?></a>
						</li> -->
					</ul>
				</nav>
			<div class="header__hamburger">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</header>
		