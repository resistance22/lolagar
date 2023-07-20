<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lolagar
 */

get_header();

?>
  <?php if(is_plugin_active('studioMarkazi')): ?>
    <h1>Plugin Active</h1>
  <?php else: ?>
    <h1>Plugin Not Active</h1>
  <?php endif; ?>
	<main id="primary" class="site-main">

	</main><!-- #main -->

<?php
get_footer();
