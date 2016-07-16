
					<!-- HEADER -->

<?php get_header() ?>

					<!-- END HEADER -->

							<!-- MAIN -->
<?php if (!dynamic_sidebar('slider_main')): ?>
	<section class="main">
		<h1>Why choose us:</h1>
		<div class="main_nav">
			<div class="main_nav_page" id="main_nav_p1">
				<img src="<?php bloginfo('template_url') ?>/img/zakaz.png" alt="zakaz">
				<span>Easy to buy</span>
			</div>
			<div class="main_nav_page" id="main_nav_p2">
				<img src="<?php bloginfo('template_url') ?>/img/consult.png" alt="consult">
				<span>Comfortable service <br> Professional consultations</span>
			</div>
			<div class="main_nav_page" id="main_nav_p3">
				<img src="<?php bloginfo('template_url') ?>/img/skidka.png" alt="skidka">
				<span>Individual approach to <br>discounts and bonuses</span>
			</div>
		</div>
		<div class="main_content">
			<div class="main_content_page" id="main_content_p1">
				<p>Quite simply, at a convenient time for you, you can purchase our high quality product!</p>
			</div>
			<div class="main_content_page" id="main_content_p2">
				<p>Our specialists will be happy to help you. For all your questions</p>
			</div>
			<div class="main_content_page" id="main_content_p3">
				<p>We are pleased to offer you a personalized discount or bonus to get you once again benefited from our services!</p>
			</div>
		</div>
	</section>
<?php endif; ?>

					<!-- MOBILE NAVIGATION -->
	<div class="main_mobile">
		<div class="main_mobile_wrapper">
			<h1>Why choose us:</h1>
			<h3>Easy to buy</h3>
			<p class="main_mobile_text">Quite simply, at a convenient time for you, you can purchase our high quality product !</p>
			<h3>Comfortable service <br> Professional consultations</h3>
			<p class="main_mobile_text">Our specialists will be happy to help you. For all your questions !</p>
			<h3>Individual approach to <br>discounts and bonuses</h3>
			<p class="main_mobile_text">We are pleased to offer you a personalized discount or bonus to get you once again benefited from our services !</p>
		</div>
	</div>


						<!-- END MAIN -->

						<!-- REVIEWS -->

	<section class="reviews">
		<h1>Customer feedback about our product:</h1>
		<div class="reviews_item">
			<img src="<?php bloginfo('template_url') ?>/img/faсe1.png" alt="faсe">
			<h3>Mary Poppins</h3>
			<p>I am very satisfied with the service your company! The speed of the order and delivery! It is so easy and convenient! I will always use your services.</p>
		</div>
		<div class="reviews_item">
			<img src="<?php bloginfo('template_url') ?>/img/faсe2.png" alt="faсe">
			<h3>Harry Potter</h3>
			<p>I use your product for a long time. No complaints, some positive impressions. We will continue to cooperate.</p>
		</div>
		<div class="reviews_item">
			<img src="<?php bloginfo('template_url') ?>/img/faсe3.png" alt="faсe">
			<h3>Margaret Thatcher</h3>
			<p>Your customer is already quite a long time, like the speed and quality of your service. Udavletvoren full cooperation!</p>
		</div>
		<div class="reviews_item">
			<img src="<?php bloginfo('template_url') ?>/img/faсe4.png" alt="faсe">
			<h3>John Doe</h3>
			<p>I am very satisfied with the service your company! The speed of the order and delivery! It is so easy and convenient! I will always use your services.</p>
		</div>
		<div class="reviews_item">
			<img src="<?php bloginfo('template_url') ?>/img/faсe5.png" alt="faсe">
			<h3>Sarah Connor</h3>
			<p>Your customer is already quite a long time, like the speed and quality of your service. Udavletvoren full cooperation!</p></div>
		<div class="reviews_item">
			<img src="<?php bloginfo('template_url') ?>/img/faсe6.png" alt="faсe">
			<h3>Peter Pan</h3>
			<p>I use your product for a long time. No complaints, some positive impressions. We will continue to cooperate.</p>
		</div>
		<div class="reviews_end">
			<div class="reviews_end_item" id="reviews_end_item_left"></div>
			<div class="reviews_end_item" id="reviews_end_item_midle"></div>
			<div class="reviews_end_item" id="reviews_end_item_right"></div>
		</div>
	</section> 

					<!-- END REVIEWS -->

					<!-- PRODUCT -->

	<section class="product">
		<h1>You can place your order now!</h1>
		<form action="#" method="post" id="product_form">
		<?php dynamic_sidebar('form_product'); ?>
		</form>
		<div class="product_image">
			<img src="<?php bloginfo('template_url') ?>/img/podarok.png" class="product_image_img" alt="product">
		</div>
	</section>
					<!-- END PRODUCT -->

					<!-- TABS ABOUT COMPANY -->

	<div class="tabs">
	<?php dynamic_sidebar('tabs'); ?>
	</div>
					<!-- END TABS -->


					<!-- FOOTER -->

<?php get_footer() ?>	