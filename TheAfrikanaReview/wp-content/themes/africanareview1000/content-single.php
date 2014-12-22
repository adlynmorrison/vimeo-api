<?php
/**
 * @package AfricanaReview1000
 */
?>
<div class="content-wrapper">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
            <h4 class="rubric">
                <?php
                /* translators: used between list items, there is a space after the comma */
                $category_list = get_the_category_list( __( ', ', 'africanareview1000' ) );

                if ( africanareview1000_categorized_blog() ) {
                    echo '<div class="category-list">' . $category_list . '</div>';
                }
                ?>

                <div class="magazine-date"><?php the_time('F j, Y'); ?> Issue </div>
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

                <div class="entry-meta">
                    <p> by: <?php the_author_link(); ?> </p>
                </div><!-- .entry-meta -->
            </h4>
        </header><!-- .entry-header -->

        <?php
            if (has_post_thumbnail()) {
                echo '<div class="single-post-thumbnail clear">';
                echo the_post_thumbnail('large-thumb');
                echo '</div>';
            }
        ?>

        <div class="entry-content">
            <?php the_content(); ?>
            <?php
            wp_link_pages( array(
                'before' => '<div class="page-links">' . __( 'Pages:', 'africanareview1000' ),
                'after'  => '</div>',
            ) );
            ?>
        </div><!-- .entry-content -->

        <footer class="entry-footer">

            <section class="bio-box">
                <section class="author-details">
                    <figure>

                    </figure>
                    <div class="author-masthead">
                        <div class="entry-meta">
                            <p> <?php the_author_link(); ?>
                        </div><!-- .entry-meta -->
                        <?php the_author_meta( description ); ?>
                    </div>
                    <div class="author-links">

                    </div>
                    </section>
                </section>
            </section>

        </footer><!-- .entry-footer -->
    </article><!-- #post-## -->
</div>