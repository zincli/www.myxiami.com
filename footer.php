<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- .layout-container -->
    </div><!-- .container -->
</div><!-- .app-body -->

<footer class="app-footer">
    <div class="container">
        <?php /* If this is the frontpage */ if ( is_home() ) { ?>
            <section class="app-links">
                <ul>
                <?php $args = array(
                    'orderby'          => 'name',
                    'order'            => 'ASC',
                    'limit'            => -1,
                    'category'         => '',
                    'exclude_category' => '',
                    'category_name'    => '',
                    'hide_invisible'   => 1,
                    'show_updated'     => 0,
                    'echo'             => 1,
                    'categorize'       => 1,
                    'title_li'         => '',
                    'title_before'     => '<h5>',
                    'title_after'      => '</h5>',
                    'category_orderby' => 'name',
                    'category_order'   => 'ASC',
                    'class'            => 'friend-link',
                    'category_before'  => '<li class=%class>',
                    'category_after'   => '</li>' );
                wp_list_bookmarks( $args ); ?>
                </ul>
            </section>
        <?php } ?>

        <section class="copyright">
            Copyright &copy; MYXIAMI.com
        </section>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>