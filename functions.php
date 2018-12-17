<?php 
require_once('incl/setup.php');
require_once('incl/posttypes.php');
require_once('incl/scripts.php');
remove_filter( 'the_content', 'wpautop' );
add_filter('show_admin_bar', '__return_true');
?>
