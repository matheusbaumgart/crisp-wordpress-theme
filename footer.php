<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Matheus Baumgart
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<span>© <?php echo date('Y') ?> <?php bloginfo( 'name' ); ?>. All the rights reserved.</span>
			
			<!-- Please, don't take the credits off. I'll be thankfull as you probably was when you get this for free. -->
			<p class="credits">Theme by <a href="http://www.matheusbaumgart.com" target="_blank">Matheus Baumgart</a>, based in _s and crisp-ghost-theme by <a href="http://kathyqian.com" target="_blank">Kathy Qian</a>.</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/retina.min.js"></script>

</body>
</html>
