<?php
/**
 * Template Name: Masonry Blog
 *
 * Blog Template
 *
 */
?>
<?php include_once( 'header.php' ); ?>
<div id="search-container" class="box">
    <div class="search-wrapper">
        <div class="search-container-2" class="search-box-wrapper">
            <span class="search-icon"><i class="fa fa-search"></i></span>
            <?php get_search_form(); ?>
        </div>
    </div>
</div>
<br>
<br>
<br>
<?php
    echo do_shortcode("[metaslider id=2086]");
?>


<section class="donation donationDesktop">
    <div class="donation_box">
        <div class="donation_copy">
            <p>expand the narrative, support <span style="font-family: core-circus;">Africana!</span></p>
        </div>
        <a href="http://anunaproduction.com/TheAfrikanaReview/support-the-afrikana-review/#.VICC9jHF_pE"><div class="light_button donation_button">
            <p>Donate!</p>
        </div></a>
    </div>
</section>

<!-- Start the Loop. -->
<div id="container">
    <?php
    $temp = $wp_query;
    $wp_query= null;
    $wp_query = new WP_Query();
    $wp_query->query('posts_per_page=10'.'&paged='.$paged);
    while ($wp_query->have_posts()) : $wp_query->the_post();
        ?>
        <div class="brick">
            <div class="brick_header">
                <h1 title="Click to view: <?php the_title_attribute(); ?>">
                    <a href="<?php the_permalink() ?>"</a>
                    <?php the_title(); ?></h1>
            </div>
            <div class="brick_featured_image">
                <?php if ( has_post_thumbnail() ) {
                $size=75;
                ?>
                <a href="<?php the_permalink() ?>" rel="bookmark" title="Click to view: <?php the_title_attribute(); ?>">
                    <?php the_post_thumbnail( $size );  }  ?>
                </a>
            </div>
           <!--<?php the_excerpt(); ?>-->
            <h3><a class="tag" href="<?php the_permalink() ?>" <?php the_tags(); ?> </a></h3>
        </div>
    <?php endwhile;?>
    <?php $wp_query = null; $wp_query = $temp;?>
    <!-- stop The Loop. -->
</div><!-- container -->
    <section class="donation donationMobile">
        <div class="donation_box">
            <div class="donation_copy">
                <p>expand the narrative, support <span style="font-family: core-circus;">Africana!</span></p>
            </div>
            <div class="light_button donation_button">
                <p>Donate!</p>
            </div>
        </div>
    </section>
<?php get_footer(); ?>

<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package AfricanaReview1000
 */


