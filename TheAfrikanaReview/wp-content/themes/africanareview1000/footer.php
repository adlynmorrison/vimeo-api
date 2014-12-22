<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package AfricanaReview1000
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php get_sidebar('footer'); ?>
        <div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'africanareview1000' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'africanareview1000' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'africanareview1000' ), 'AfricanaReview1000', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<script>
    jQuery( document ).ready( function( $ ) {
        $( '#container' ).masonry( { columnWidth: 60 } ).imagesLoaded(function() {
            $('#container').masonry('reload');
        });
    } );
</script>

<?php wp_footer(); ?>

</body>
</html>
