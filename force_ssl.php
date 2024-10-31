<?php
/*
Plugin Name: Dwamian's Per Page Force SSL
Plugin URI: http://cornersix.com
Description: Forces a page to switch to ssl with a "force_ssl" = "true" custom tag is included
Version: 1.1
Author: Dwamian Mcleish
Author URI: http://dmcleish.wordpress.com

LICENSE
Copyright 2010  Dwamian Mcleish  (email : mcleish@cornersix.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
function force_ssl(){
    global $post;
    $post_id = $post;
    if (is_object($post_id)) {
	    	$post_id = $post_id->ID;
	}

    $force_ssl  = get_post_meta($post_id, 'force_ssl');
    if(!empty($force_ssl)){
        if($_SERVER["HTTPS"] != "on") {
            $newurl = "https://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
            header("Location: $newurl");
            exit();
        }

    }

    else{
        if($_SERVER["HTTPS"] == "on") {
            $newurl = "http://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
            header("Location: $newurl");
            exit();
        }
    }
}
add_action('wp_head', 'force_ssl');
?>