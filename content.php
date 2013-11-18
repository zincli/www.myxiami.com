<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="article-header">

		<?php if ( is_single() ) : ?>
		<h1 class="title"><?php the_title(); ?></h1>
		<?php else : ?>
		<h1 class="title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h1>
		<?php endif; // is_single() ?>

		<div class="meta">
			<?php myxiami_post_date( true ); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->
    <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
        <div class="entry-thumbnail">
            <?php the_post_thumbnail(); ?>
        </div>
    <?php endif; ?>

    <?php if ( get_field('is_promotion') ) : ?>
    <?php
    $promotion_link;
    preg_match_all("<{([^}]+),([^}]+)}>", get_field('promotion_link'), $links, PREG_SET_ORDER);
    $promotion_link = $links[0];
    ?>
    <div class="show-box">
        <div class="media">
            <div class="media-show">
                <a href="<?php echo $promotion_link[2] ?>" target="_blank">
                <img class="media-object" src="<?php the_field('promotion_img') ?>" alt="" width="150px" height="150px"/>
                </a>
            </div>
            <div class="media-body">
                <div class="promotion-flag">
                    <?php the_field('promotion_flag') ?>
                </div>
                <div class="promotion-price">
                    <?php the_field('promotion_prices') ?>
                </div>
                <div class="actions">
                     <?php echo '<a class="btn btn-primary action" href="'.$promotion_link[2].'" title="'.$promotion_link[1].'" target="_blank">点击购买</a>'; ?>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="article-body">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
    <?php elseif( get_field('is_promotion') && ! is_single() ) : ?>

	<?php else : ?>
	<div class="article-body">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) ); ?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="article-footer">
		<?php if ( comments_open() && ! is_single() ) : ?>
			<div class="comments-link">
				<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'twentythirteen' ) . '</span>', __( 'One comment so far', 'twentythirteen' ), __( 'View all % comments', 'twentythirteen' ) ); ?>
			</div><!-- .comments-link -->
		<?php endif; // comments_open() ?>

		<?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
			<?php get_template_part( 'author-bio' ); ?>
		<?php endif; ?>
	</footer><!-- .entry-meta -->
</article><!-- #post -->
