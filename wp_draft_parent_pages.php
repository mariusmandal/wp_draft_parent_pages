<?php  
/* 
Plugin Name: Draft parent pages
Plugin URI: http://www.github.com/mariusmandal/wp_draft_parent_pages
Description: Micro-module which allows draft pages to be selected as parent of another page.
Author: Marius Mandal
Version: 1.0 
Author URI: http://mariusmandal.no
*/

add_filter('page_attributes_dropdown_pages_args', 'mm_parent_page_args', 1, 1);

function mm_parent_page_args($dropdown_args) {

    $dropdown_args['post_status'] = array('publish','draft');

    return $dropdown_args;
}