<?php
/**
* @version		$Id: helper.php 14401 2010-01-26 14:10:00Z louis $
* @package		Joomla
* @copyright	Copyright (C) 2005 - 2010 Open Source Matters. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* Joomla! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

class modGetHotTourHelper
{
	function getCncategory()
	{
		$db		=& JFactory::getDBO();

		$result	= array();

		$query = 'SELECT a.id AS id, a.name AS name,a.route AS route,b.url AS url
			 FROM jos_cos_tours_package AS a LEFT JOIN jos_cos_route AS b ON a.id=b.packageid
			 WHERE hot=1 LIMIT 8'			;

		$db->setQuery($query);

		$result1 = $db->loadObjectList();

		
		if ($db->getErrorNum()) {
			JError::raiseWarning( 500, $db->stderr() );
		}

		return $result1;
	}

	function getCncategoryOptions($id)
	{
		$db	=& JFactory::getDBO();

		$query = 'SELECT id, text' .
			' FROM #__poll_data' .
			' WHERE pollid = ' . (int) $id .
			' AND text <> ""' .
			' ORDER BY id';
		$db->setQuery($query);

		if (!($options = $db->loadObjectList())) {
			echo "MD ".$db->stderr();
			return;
		}

		return $options;
	}
}
?>
