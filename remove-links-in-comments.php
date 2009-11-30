<?php
/*
Plugin Name: Remove Links in Comments
Plugin URI: http://ducedo.com/remove-links-in-comments/
Description: Deactivate hyperlinks in comments.
Version: 1.0
Author: Stefan Nilsson
Author URI: http://ducedo.com/
Min WP Version: 2.8
Max WP Version: 2.8.6
Update Server: http://wordpress.org/extend/plugins/remove-links-in-comments/
*/

remove_filter('comment_text', 'make_clickable', 9);

?>