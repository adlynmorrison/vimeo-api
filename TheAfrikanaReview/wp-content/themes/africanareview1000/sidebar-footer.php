<?php
/**
 * Created by PhpStorm.
 * User: Addy
 * Date: 10/18/14
 * Time: 8:41 PM
 */

if ( ! is_active_sidebar( 'sidebar-2' ) ) {
    return;
}
?>

<div id="supplementary">
    <div id="footer-widgets" class="footer-widgets widget-area clear" role="complementary">
        <?php dynamic_sidebar( 'sidebar-2' ); ?>
    </div><!-- #footer-sidebar -->
</div><!-- #supplementary -->