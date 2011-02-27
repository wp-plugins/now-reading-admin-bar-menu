<?php
/*
Plugin Name: Now-Reading Admin Bar Menu
Plugin URI: http://coffeebear.net/code/#mlm-nrAdminBar
Description: Adds the Now-Reading menu links to the new admin bar introduced in WordPress 3.1
Version: 0.0.0
Author: Mark McKibben
Author URI: http://coffeebear.net/
*/

/*
Special Thanks:
 * Ben Gunnink: author of Now Reading Reloaded Plugin
    http://heliologue.com
 * EAMann: wrote the answer at WordPress.SE on which this plugin is based
    http://wordpress.stackexchange.com/questions/4998/is-the-new-wordpress-3-1-admin-bar-pluggable-and-how-can-i-extend-it/5005#5005
*/
function mlm_nr_admin_bar()
{
if ( function_exists('nr_check_versions') ) {
        global $wp_admin_bar;
        $wp_admin_bar->add_menu( array( 'id' => 'mlm-nr-menu', 'title' => __( 'Now Reading' ), 'href' => admin_url('admin.php?page=add_book'), ) );
        $wp_admin_bar->add_menu( array( 'parent' => 'mlm-nr-menu', 'id' => 'mlm-nr-add', 'title' => __( 'Add a Book' ), 'href' =>  admin_url('admin.php?page=add_book'), ) );
        $wp_admin_bar->add_menu( array( 'parent' => 'mlm-nr-menu', 'id' => 'mlm-nr-manage', 'title' => __( 'Manage Books' ), 'href' => admin_url('admin.php?page=manage_books'), ) );
        $wp_admin_bar->add_menu( array( 'parent' => 'mlm-nr-menu', 'id' => 'mlm-nr-options', 'title' => __( 'Options' ), 'href' => admin_url('admin.php?page=nr_options'), ) );
    }
}
add_action('admin_bar_menu', 'mlm_nr_admin_bar', 95);
?>
