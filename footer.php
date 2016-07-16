

	<footer class="footer">
		<div class="footer_wrapper">
			<div class="footer_logo"><a href="<?php echo home_url(); ?>"></a></div>
			<?php if (!dynamic_sidebar('menu_footer')): ?>
				<div class="footer_menu">
					<ul>
						<li class="footer_menu_item"><a href='<?php echo home_url(); ?>'>Home</a></li>
						<li class="footer_menu_item"><a href="about">About company</a></li>
						<li class="footer_menu_item"><a href="news">News</a></li>
						<li class="footer_menu_item"><a href="site">About this site</a></li>
					</ul>
				</div>
			<?php endif; ?>
			<span class="footer_copy">Created by Aleksei Zakharov &#169;</span>
		</div>	
	</footer>
<?php wp_footer(); ?>
</body>
</html>
