<?php
/**
 * The sidebar containing the secondary widget area, displays on posts and pages.
 *
 * If no active widgets in this sidebar, it will be hidden completely.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
    <div class="sidebar">
        <div class="inner">
            <?php dynamic_sidebar( 'sidebar-2' ); ?>
        </div>
    </div>
<?php endif; ?>