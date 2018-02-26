<?php
/*
Plugin Name: BTNS Plugin
Plugin URI: http://btns.mysparkmedia.com
Description: Allows you to use the BTNS CSS library on your WP site.
Author: Daniel Winning
Version: 1.0
 */
?>
<?php
function btns(){ ?>
  <link rel='stylesheet' type='text/css' href='http://www.css-btns.com/css/btns.css'>
<?php }

add_action('wp_head', 'btns');
?>
