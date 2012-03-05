<?php
/*
Plugin Name: Remove Links in Comments
Plugin URI: http://www.stefannilsson.com/remove-links-in-comments/
Description: Deactivate hyperlinks in comments.
Version: 1.1
Author: Stefan Nilsson
Author URI: http://www.stefannilsson.com/
*/

function remove_links($string = '') {
	$link_pattern = "/<a[^>]*>(.*)<\/a>/iU";
	$string = preg_replace($link_pattern, "$1", $string);

	return $string;
}

add_filter('comment_text', 'remove_links');

?>