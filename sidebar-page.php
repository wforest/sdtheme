<?php
/**
 * The sidebar containing the page widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SD_Theme
 */

if ( ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}
?>

<aside id="page-secondary" class="widget-area page-sidebar" role="complementary">
	<?php dynamic_sidebar( 'sidebar-2' ); ?>
</aside><!-- #page-secondary -->
