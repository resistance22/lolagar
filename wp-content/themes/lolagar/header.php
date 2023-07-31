<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lolagar
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php $langs_array = pll_the_languages( array( 'dropdown' => 1, 'raw' => 1 ) ); ?>
<!-- <pre>
	<?php print_r($langs_array); ?>
</pre> -->
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'lolagar' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<div class="languages">
			<div class="lang-en">
					<a class="lang-link" href="<?php echo $langs_array['en']['url']; ?>">
						<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M2.26435 12.6265H10.3203V13.4457H1.23089V7.16199H0.199951V6.28431H1.23089V0.428009H7.15691V1.32096H2.26435V6.28431H7.06617V7.15945H2.26435V12.6265Z" fill="white"/>
							<path d="M10.3178 1.05385C10.6102 0.631545 11.084 0.354248 11.6285 0.354248C12.5385 0.354248 13.2669 1.08947 13.2669 1.99004V13.3694H12.2486V2.19356C12.2486 1.65932 11.8125 1.21921 11.2832 1.21921C10.7538 1.21921 10.3178 1.65932 10.3178 2.19356V13.3719H9.29944V0.501801H10.3203V1.05385H10.3178Z" fill="white"/>
						</svg>
					</a>
				</div>
				<div class="lang-fa">
					<a class="lang-link" href="<?php echo $langs_array['fa']['url']; ?>">
						<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8.83319 13.4432H2.39045V2.29026L0.200012 1.18361L0.610875 0.356812L3.31048 1.71785V12.5172H8.83319V13.4432Z" fill="white"/>
							<path d="M9.24407 13.4432H6.32013V12.5172H9.24407C10.1515 12.5172 10.89 11.7718 10.89 10.8559V9.39569H6.13361V5.43467C6.13361 4.82411 6.49406 4.30768 7.14942 3.98459C7.64347 3.74036 8.30388 3.60553 9.00965 3.60553C10.3607 3.60553 11.8126 4.11179 11.8126 5.22606V8.46713H13.0528V9.39569H11.8126V10.8559C11.8076 12.2831 10.6556 13.4432 9.24407 13.4432ZM7.0486 8.46967H10.8875V5.22861C10.8875 4.90043 10.0809 4.53409 9.00461 4.53409C8.44503 4.53409 7.91318 4.6384 7.54768 4.81648C7.0486 5.06325 7.0486 5.34054 7.0486 5.43213V8.46967Z" fill="white"/>
							<path d="M9.92745 0.664673H8.8335V1.76877H9.92745V0.664673Z" fill="white"/>
						</svg>
					</a>
				</div>
			</div>
			<div class="logo-cont">
				<div id="logo">
					<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 272.93 380.12"><path d="M107.06,39.81a2.29,2.29,0,0,0,4.57,0V27H114V39.43a4.68,4.68,0,1,1-9.35,0V13.63a4.68,4.68,0,1,1,9.35,0v6.8h-2.37V13.24a2.29,2.29,0,0,0-4.57,0Z" transform="translate(-0.78)"/><path d="M128,43.65h-2.37V29.09H121V43.65H118.6V29.09h-6.37v-2h6.37V17.85a4.68,4.68,0,1,1,9.35,0Zm-2.37-26.19a2.29,2.29,0,0,0-4.57,0v9.61h4.57Z" transform="translate(-0.78)"/><path d="M135.75,2.07h-4.83V0h7.2V13.57h2.41v2h-2.41V43.65h-2.37V15.59h-4.57v-2h4.57Z" transform="translate(-0.78)"/><path d="M149.94,13.57h4.56v2h-4.56V43.65h-2.37V15.59h-2.41v-2h2.41V0h7.19V2.07h-4.82Z" transform="translate(-0.78)"/><path d="M161.27,41.76h11.44v1.89H158.85V29.09h-2.41v-2h2.41V13.5h13.86v2.07H161.27v11.5H172.5v2H161.27Z" transform="translate(-0.78)"/><rect x="147.22" y="41.76" width="13.9" height="1.89"/><rect x="126.05" y="41.76" width="8.75" height="1.89"/><polygon points="268.5 141 252.56 148.97 252.56 215.26 225.26 215.26 225.26 225.19 262.48 225.19 262.48 155.11 272.93 149.88 268.5 141"/><path d="M219,21.29l11.46,7.51,5.43-8.3L215.47,7.12,135.12,153.49,54.77,7.12,34.34,20.5l5.43,8.3,11.46-7.51L129.46,163.8,95.77,225.19h78.7L140.78,163.8Zm-61.3,194H112.53l22.59-41.15Z" transform="translate(-0.78)"/><path d="M221.79,200.43c0-6.67-7.07-11.15-17.6-11.15a26,26,0,0,0-11.12,2.27c-4.36,2.14-6.87,5.77-6.87,10v23.66h25.67v5.31a6.4,6.4,0,0,1-6.39,6.39H189.7v9.92h15.78a16.33,16.33,0,0,0,16.31-16.31v-5.31H226v-9.93h-4.2Zm-9.92,14.83H196.13V201.53c0-.27.71-.91,2.23-1.45,5-1.79,11.87-.57,13.51.82Z" transform="translate(-0.78)"/><path d="M67.69,230.5V200.43H57.76v14.83H27.39l12.86-60,.31-.38L21.23,138.7l-4.82,5.77-11.7-5.05L.78,148.53l28.15,12.14L15.12,225.19H57.76v5.31a16.33,16.33,0,0,0,16.31,16.31H89.85v-9.92H74.07A6.39,6.39,0,0,1,67.69,230.5Z" transform="translate(-0.78)"/><path d="M65.85,261.28v60.1h8.86v3.75H61.38V261.28Z" transform="translate(-0.78)"/><path d="M79.9,270a8.66,8.66,0,1,1,17.31,0v58.68a8.66,8.66,0,1,1-17.31,0Zm4.47,59.4a4.23,4.23,0,0,0,8.45,0V269.26a4.23,4.23,0,1,0-8.45,0Z" transform="translate(-0.78)"/><path d="M110.46,261.28v89.09h8.86v3.75H106V261.28Z" transform="translate(-0.78)"/><path d="M143.42,380.12H139V309.49h-8.46v70.58h-4.47V309.49h-4.39v-3.75h4.39V270a8.66,8.66,0,1,1,17.31,0ZM139,269.26a4.23,4.23,0,0,0-8.46,0v36.48H139Z" transform="translate(-0.78)"/><path d="M164.66,309.6h-4.39v-3.83h8.86v41a8.66,8.66,0,1,1-17.32,0V270a8.66,8.66,0,1,1,17.32,0V280h-4.47V269.26a4.19,4.19,0,1,0-8.38,0V347.5a4.19,4.19,0,0,0,8.38,0Z" transform="translate(-0.78)"/><path d="M195.63,336.65h-4.39v-27h-8.46v27h-4.47v-27h-4.39v-3.75h4.39V270a8.66,8.66,0,1,1,17.32,0Zm-4.39-67.39a4.23,4.23,0,0,0-8.46,0v36.66h8.46Z" transform="translate(-0.78)"/><path d="M219.65,317.15c-.88-.56-1.12-1.68-1.12-3.12V293.28a3.17,3.17,0,0,0-3.11-3.11h-5.35v27H205.6v-27h-4.39v-3.75h4.39V261.28h10.22a7.08,7.08,0,0,1,7.1,7.18v14.29c0,2.32-.56,4.47-3.11,5.59,2.55,1,3.11,3.27,3.11,5.58V311.8c0,2.71.4,3.75,1.68,5.35Zm-9.58-30.73h5.35a3.16,3.16,0,0,0,3.11-3.11V268.23a3.12,3.12,0,0,0-3.11-3.12h-5.35Z" transform="translate(-0.78)"/></svg>
				</div>
			</div>
		</div><!-- .site-branding -->

	</header><!-- #masthead -->
