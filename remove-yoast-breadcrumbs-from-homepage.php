<?php
/* Remove Yoast breadcrumbs from homepage only
*
*  @link https://digitalgeekblog.com/remove-yoast-breadcrumbs-from-homepage-only
*
*/

add_filter('wpseo_breadcrumb_single_link', 'dgb_remove_homepage_breadcrumb' );

function dgb_remove_homepage_breadcrumb( $link_output) {
	if( is_front_page() ) {
		$link_output = '';
	}
	return $link_output;	   
}
