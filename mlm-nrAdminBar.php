<?php
/*
Plugin Name: Now-Reading Admin Bar Menu
Plugin URI: http://wordpress.org/extend/plugins/now-reading-admin-bar-menu/
Description: Adds the Now-Reading menu links to the admin bar introduced in WordPress 3.1
Version: 0.2.5
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
			global $wp_admin_bar, $nr_id;
			$url = site_url();
			$nr_options = get_option('nowReadingOptions');

			if ($nr_options['useModRewrite'] == 'on') {
				$library = $nr_options['permalinkBase'];
			} else {
				$library = '?now_reading_library=true';
			}
			$library_url = $url .'/' . $library;

			$wp_admin_bar->add_menu( array( 'id' => 'mlm-nr-menu', 'title' => __( 'Now Reading', 'mlmnr' ), 'href' => admin_url('admin.php?page=add_book'), ) );
			$wp_admin_bar->add_menu( array( 'parent' => 'mlm-nr-menu', 'id' => 'mlm-nr-add', 'title' => __( 'Add a Book', 'mlmnr' ), 'href' =>  admin_url('admin.php?page=add_book'), ) );
			$wp_admin_bar->add_menu( array( 'parent' => 'mlm-nr-menu', 'id' => 'mlm-nr-manage', 'title' => __( 'Manage Books', 'mlmnr' ), 'href' => admin_url('admin.php?page=manage_books'), ) );
			if ( have_books('status=reading&num=-1') ) :
				$wp_admin_bar->add_menu( array( 'parent' => 'mlm-nr-menu', 'id' => 'mlm-nr-lib', 'title' => __( 'View Library', 'mlmnr' ), 'href' =>  $library_url, ) );
				$i = 0;
				while( have_books('status=reading&num=-1') ) : the_book();
					$book_title = book_title(false);
					$book_permalink = book_permalink(false);
					$i++;
					$wp_admin_bar->add_menu( array( 'parent' => 'mlm-nr-lib', 'id' => 'mlm-nr-book' . $i, 'title' => __( $book_title, 'mlmnr' ), 'href' =>  $book_permalink, ) );
				endwhile;
			 else :
				$wp_admin_bar->add_menu( array( 'parent' => 'mlm-nr-menu', 'id' => 'mlm-nr-lib', 'title' => __( 'View Library', 'mlmnr' ), 'href' =>  $library_url, ) );
			endif;
			$wp_admin_bar->add_menu( array( 'parent' => 'mlm-nr-menu', 'id' => 'mlm-nr-options', 'title' => __( 'Options', 'mlmnr' ), 'href' => admin_url('admin.php?page=nr_options'), ) );
		}
}
add_action('admin_bar_menu', 'mlm_nr_admin_bar', 95);
?>
