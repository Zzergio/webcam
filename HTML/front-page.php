<?php get_header(); ?>

	
<!-- BANNER -->

<div class="banner">
	<div class="content">
		<div class="hello wow fadeIn" data-wow-duration="2s">
			<h1><?php the_field('bh_banner_text'); ?></h1>
			<div class="flex buttons">
				<button id="offer" class="button" onclick="showPop()"><?php dynamic_sidebar( 'button1' ); ?></button>	
				<button id="honey" class="button" onclick="showPop()"><?php dynamic_sidebar( 'button2' ); ?></button>
			</div>
		</div>
	</div>
</div>

<?php
    dynamic_sidebar( 'send-message' ); ?>		

<!-- SERVICES -->
<main>
	<div class="aboutus">
		<div class="content">
			<h3><?php the_field('bh_header_1'); ?></h3>
			<div class="flex about">
				<div class="wow fadeInLeft" data-wow-duration="2s">
					<?php the_field('bh_about_us_text'); ?>
				<a href="<?php the_field('bh_aboutus_link'); ?>"><?php the_field('bh_about_us_link_text'); ?></a>
				</div>
			<div class="wow fadeInRight" data-wow-duration="2s">
				<img src="<?php the_field('bh_aboutus_img'); ?>" alt="">		
			</div>
			</div>
		</div>
	</div>
	
	<div class="gallery wow fadeInDown" data-wow-duration="2s">
		<div class="content"></div>
			<?php the_field('bh_gallery_1'); ?>
		</div>
	</div>

<!-- ADVANTAGES -->

	
	<div class="advantages">
		<div class="content">
			<h3><?php the_field('bh_header_2'); ?></h3>
			<div class="adv-items">
				<div class="adv-item wow fadeInLeft" data-wow-duration="2s">
					<img src="<?php the_field('bh_icon_1'); ?>" alt="">
					<?php the_field('adv_text_1'); ?>
				</div>
				<div class="adv-item wow fadeIn" data-wow-duration="2s">
					<img src="<?php the_field('bh_icon_2'); ?>" alt="">
					<?php the_field('adv_text_2'); ?>
				</div>
				<div class="adv-item wow fadeInRight" data-wow-duration="2s">
					<img src="<?php the_field('bh_icon_3'); ?>" alt="">
					<?php the_field('adv_text_3'); ?>
				</div>
			</div>
		</div>
	</div>		
	

<!-- CONTACTS BOTTOM -->

	<div class="wow fadeIn" data-wow-duration="2s">
		<div class="contacts-bottom">
			<div class="content">
				<h3><?php the_field('bh_header_contacts'); ?></h3>
			
				<div class="flex bottom">
					<div class="geo1">
						<img src="<?php bloginfo('template_url'); ?>/img/ico-geo.png" alt=""><?php dynamic_sidebar( 'address-area' ); ?>
					</div>

					<div class="phones1">
						<img src="<?php bloginfo('template_url'); ?>/img/ico-phone.png" alt=""><?php dynamic_sidebar( 'phone-area' ); ?>
					</div>

					<div class="email1">
					<img src="<?php bloginfo('template_url'); ?>/img/ico-mail.png" alt=""><?php dynamic_sidebar( 'email-area' ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>	
		
</main>

<?php get_footer(); ?>



