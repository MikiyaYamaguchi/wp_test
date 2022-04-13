<footer>
	<div class="container">
		<div class="ftr_left">
			<div class="ftr_logo">
				<a href="<?php echo site_url(); ?>">
					<img src="<?php echo site_url(); ?>/wp-content/uploads/logo.png" alt="logo">
				</a>
			</div>
			<div class="ftr_info">
				<?php get_search_form(); ?>
				<p class="tel">TEL <span class="pc-only">000-0000-0000</span><span class="sp-only"><a href="tel:00000000000">000-0000-0000</a></span></p>
				<p class="address">住所 テキストテキストテキストテキストテキスト</p>
				<div class="ftr_sns">
					<a href="#" target="_blank"><img src="<?php echo site_url(); ?>/wp-content/uploads/twitter.png" alt="twitter"></a>
					<a href="#" target="_blank"><img src="<?php echo site_url(); ?>/wp-content/uploads/instagram.png" alt="instagram"></a>
				</div>
			</div>
		</div>
		<div class="footer_right">
			<div class="ftr_menu">
				<?php
				wp_nav_menu(array(
					'theme_location' => 'footer',
					'container' => 'div',
					'container_class' => 'footer_nav',
				));
				?>
			</div>
		</div>
	</div>
	<p class="copy_right">&copy; texttexttexttext All Rights Reserved.</p>
</footer>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js"></script>
</body>

</html>