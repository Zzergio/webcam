<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="it-rating" content="it-rat-dcb80ef2c930352326d90eaf1c03733f"/>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<div id="wptime-plugin-preloader"></div>

<!-- HEADER -->

	<header>
		<div class="content">
			<div class="flex top-contacts">
				<div class="logo">
					<a href="/">
						<img src="/img/logo-bh.png" alt="BeeHarvest logo">
					</a>
				</div>
			<div class="header-flex-wrapper">
				<div class="contacts">
					<div class="contacts-wrap">
						<div class="ico">
							<img src="<?php bloginfo('template_url'); ?>/img/ico-mail.png" alt="">
						</div>
						<div class="email">
							<?php dynamic_sidebar( 'email-area' ); ?>
						</div>
					</div>
				
					<div class="contacts-wrap">
						<div class="ico">
							<img src="<?php bloginfo('template_url'); ?>/img/ico-phone.png" alt="">
						</div>
						<div class="phones">
							<?php dynamic_sidebar( 'phone-area' ); ?>
						</div>
					</div>	

				<div class="flags">
					<?php dynamic_sidebar( 'flags-area' ); ?>
				</div>
			</div>

			<div class="menu">
				<div class="menu-icon">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
					

					<?php 
						if('uk'==pll_current_language()) {
   						wp_nav_menu(array('menu' => 'nav', 'menu_class' => 'nav'));}
						elseif('ru'==pll_current_language()) {
   						wp_nav_menu(array('menu' => 'nav_ru', 'menu_class' => 'nav'));}
   						else {
   						wp_nav_menu(array('menu' => 'nav_en', 'menu_class' => 'nav'));}
   					?>

			</div>
		</div>
	</div>
	</div>
</header>