<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package SD_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if ( has_post_thumbnail() ) { ?>
        <figure class="featured-image index-image">
            <a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark">
                <?php
                the_post_thumbnail('sdtheme-index-img');
                ?>
            </a>
        </figure><!-- .featured-image.index-img -->
    <?php } ?>

    <div class="post__content">
        <header class="entry-header">

            <?php sdtheme_the_category_list(); ?>

            <?php
            if ( is_singular() ) :
                the_title( '<h1 class="entry-title">', '</h1>' );
            else :
                the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
            endif;

            if ( 'post' === get_post_type() ) : ?>
                <div class="entry-meta">
                    <?php sdtheme_posted_on(); ?>
                </div><!-- .entry-meta -->
                <?php
            endif; ?>
        </header><!-- .entry-header -->

        <div class="entry-content">
            <?php
            the_excerpt();
            ?>
        </div><!-- .entry-content -->

        <div class="continue-reading">

            <?php
            $read_more_link = sprintf(
                wp_kses(
                /* translators: %s: Name of current post. Only visible to screen readers */
                    __( 'Continue reading<span class="screen-reader-text"> "%s"</span> <span class="meta-nav">&rarr;</span>', 'sdtheme' ),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                get_the_title()
            );
            ?>

            <a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark">
                <?php echo $read_more_link; ?>
            </a>
        </div><!-- .continue-reading -->

    </div><!-- .post__content -->

</article><!-- #post-<?php the_ID(); ?> -->

