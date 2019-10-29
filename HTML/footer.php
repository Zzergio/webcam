<!-- FOOTER -->

<footer>
	<div class="flex content foot-contacts">
		<div class="copy">
			<p>
			<?php 
				$start_year = 2019;
				$current_year = date('Y');
					if ($current_year!=$start_year) {
							echo "BEE HARVEST © ".$start_year."- ".$current_year;
						}
					else {
						echo "BEE HARVEST © ".$start_year; 
						} 
			?>
			 </p>
		</div>
		<div class="middle">
			<div class="email1">
				<p><?php dynamic_sidebar( 'email-area' ); ?></p>
			</div>	
		</div>

		<div class="middle">
			<div class="email1">
				<p><?php dynamic_sidebar( 'usage-area' ); ?></p>
			</div>	
		</div>

			<div class="email1"><?php dynamic_sidebar( 'copy-area' ); ?>
			</div>
	</div>
	<?php dynamic_sidebar( 'popup-area' ); ?>
</footer>
<script type="text/javascript">     
var wow = new WOW(
  {
    boxClass:     'wow',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset:       0,          // distance to the element when triggering the animation (default is 0)
    mobile:       false        // trigger animations on mobile devices (true is default)
  }
);
wow.init();
</script>

</body>
</html>