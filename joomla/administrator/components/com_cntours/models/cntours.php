<?php


// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die( 'Restricted access' );

jimport('joomla.application.component.model');

/**
 * Weblinks Component Weblink Model
 *
 * @package		Joomla
 * @subpackage	Content
 * @since 1.5
 */
class CntoursModelCntours extends JModel
{

	function season_changes($id_array,$state)
	{
		
		$db		=& JFactory::getDBO();
		for ($i=0, $n=count($id_array); $i < $n; $i++){
			$id=$id_array[$i];
			$sql="UPDATE jos_cos_tours_package SET season='$state' WHERE id='$id'";
	
			$db->setQuery($sql);
			if(!$db->query()){
				return false;
			}
		}		
		return true;
	}
}
