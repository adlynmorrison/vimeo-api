<?php
/**
 * The template for displaying search results pages.
 *
 * @package AfricanaReview1000
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search: %s', 'africanareview1000' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

            <div id="searchpage-container" class="box">
                <div class="searchpage-wrapper">
                    <div class="searchpage-container" class="searchpage-box-wrapper">
                        <span class="search-icon"><i class="fa fa-search"></i></span>
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </div>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'content', 'search' );
				?>

			<?php endwhile; ?>

			<?php africanareview1000_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>