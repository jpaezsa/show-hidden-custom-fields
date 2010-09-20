<?php
/*
Plugin Name: Show Hidden Custom Fields
Plugin URI: http://themergency.com
Description: Makes hidden custom fields visible to edit and delete. Thanks to ViperBond007 for the orginal solution found at http://www.viper007bond.com/2009/08/16/wordpress-trick-how-to-show-hidden-custom-fields/
Version: 1
Author: Brad Vincent
Author URI: http://themergency.com
License: GPL2
*/

class ShowHiddenCustomFields {
	
	function ShowHiddenCustomFields() {
		add_action( 'admin_head', array(&$this, 'ShowDem') );
	}
	
	function ShowDem() {
		echo "<style type='text/css'>#postcustom .hidden { display: table-row; }</style>\n";
	}
}

add_action("init", create_function('', 'global $SHCF; $SHCF = new ShowHiddenCustomFields();'));

?>