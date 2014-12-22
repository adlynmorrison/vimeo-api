<?php
/**
 * @package AfricanaReview1000
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

        <?php
        // Display a thumb tack in the top right hand corner if this post is sticky
        if (is_sticky()) {
            echo '<i class="fa fa-thumb-tack sticky-post"></i>';
        }
        ?>

        <?php
        if( $wp_query->current_post == 0 && !is_paged() ) {
            echo '<div class="red"></div>';
        }
        ?>

		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php africanareview1000_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'africanareview1000' ), 
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'africanareview1000' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php africanareview1000_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
