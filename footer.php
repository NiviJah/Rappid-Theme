<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _rappid
 */
?>
			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .main-content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="site-footer-inner col-sm-12">

				<div class="site-info">
					
				</div><!-- close .site-info -->

			</div>
		</div>
	</div><!-- close .container -->
</footer><!-- close #colophon -->

<?php wp_footer(); ?>

<script>
    $(function() {

        $(".skills-arch").knob({
        	'readOnly': true	
		});
		    });

    	var initval = 20;
    	var endValue = 80;
			$({value: 0}).animate({value: endValue}, {
			duration: 1200,
			easing:'swing',
			step: function()
			{
			$('.skills-arch').val(this.value).trigger('change');
			//$('#preval').val(initval);
			}
		});
</script>

</body>
</html>