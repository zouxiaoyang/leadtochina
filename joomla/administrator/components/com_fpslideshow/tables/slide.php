<?php
/*
// "Frontpage Slideshow" Component for Joomla! 1.5.x - Version 1.7.1
// Copyright (c) 2006 - 2008 JoomlaWorks, a Komrade LLC company.
// This code cannot be redistributed without permission from JoomlaWorks - http://www.joomlaworks.gr.
// More info at http://www.joomlaworks.gr and http://www.frontpageslideshow.net
// Developers: Fotis Evangelou - George Chouliaras
// ***Last update: February 27th, 2008***
*/

defined('_JEXEC') or die('Restricted access');

class TableSlide extends JTable
{
	var $id 			= null;
	var $name 			= null;
	var $path 			= null;
	var $path_type 		= null;
	var $state 			= null;
	var $publish_up 	= null;
	var $publish_down 	= null;
	var $menu 			= null;
	var $menu2 			= null;
	var $target 		= null;
	var $clink 			= null;
	var $ctext 			= null;
	var $plaintext 		= null;
	var $registers 		= null;
	var $showtitle 		= null;
	var $showseccat 	= null;
	var $showcustomtext = null;
	var $showplaintext 	= null;
	var $showreadmore 	= null;
	var $ordering 		= null;
	
	function __construct(&$db)
	{
		parent::__construct( '#__fpslideshow_slides', 'id', $db );
	}
}
?>