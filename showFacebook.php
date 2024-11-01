<?php
/**
 * @package showFacebook
 * @version 1.0
 */
/*
Plugin Name: showFacebook
Plugin URI: http://oxo.nu/tag/showfacebook
Description: Show facebook likes using a shortcode [showfacebook] in posts.
Author: Niklas Rydén
Version: 1.0
Author URI: http://kafit.se/
*/

function showfacebookfunc($fbparams) {

// We need to pass some parameters for this code to work.

//Provide the url for the page you want to show.
	$fburl = $fbparams['url'];

	$output = '<div id="fb-root" style="position: absolute;"></div>';
	$output = $output.'<script>(function(d, s, id) {';
 	$output = $output.' var js, fjs = d.getElementsByTagName(s)[0];';
 	$output = $output.' if (d.getElementById(id)) return;';
 	$output = $output.' js = d.createElement(s); js.id = id;';
 	$output = $output.' js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";';
 	$output = $output.' fjs.parentNode.insertBefore(js, fjs);';
	$output = $output.'}(document, \'script\', \'facebook-jssdk\'));</script>';
        $output = $output.'<div class="fb-like-box" data-width="185" data-height="130" style="width:185px;height:130px;" data-href="'.$fburl.'" data-show-faces="false" data-stream="false" data-header="false"></div>';

	return $output;
}

add_shortcode('showfacebook', 'showfacebookfunc');

?>
