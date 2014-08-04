		</section><!-- #wrapper -->

		<footer></footer>
		
		
		<section id="js">
			<!-- JQUERY -->
			<script>
				if (!window.jQuery) {
					document.write("<script src='<?php bloginfo('template_url'); ?>/js/libs/jquery-1.11.0.min.js'><\/script>");
				}
			</script>
		
			<!-- MODERNIZR -->
			<script src="<?php bloginfo('template_url');?>/js/libs/modernizr-2.6.2.v.min.js"></script>

			<!-- PLUGINS -->
			<script src="<?php bloginfo('template_url');?>/js/plugins.js"></script>

			<!-- TEMPLATE SCRIPT -->
			<script src="<?php bloginfo('template_url');?>/js/script.js"></script>

			<!-- GOOGLE ANALYTICS -->
			<script> // Change UA-XXXXX-X to be your site's ID
			window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
			Modernizr.load({
			  load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
			});
			</script>
			
			<!--[if lt IE 7 ]>
			  <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
			  <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
			<![endif]-->
		</section><!-- #js -->
		
		<?php wp_footer(); ?>
	
	</body>
</html>
