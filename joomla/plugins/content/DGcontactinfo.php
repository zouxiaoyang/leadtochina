<?php
# ---------------------------------------------------------------------------------

/**
* Contact Information Plugin 1.5
* Joomla 1.5 Plugin
* Edward Cupler
* www.digitalgreys.com
* ecupler@digitalgreys.com
* @copyright Copyright (C) 2008 Digital Greys. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* Contact Information Plugin is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
*/

# ---------------------------------------------------------------------------------

/** ensure this file is being included by a parent file */
defined( '_JEXEC' ) or die( 'Restricted access' );

$mainframe->registerEvent( 'onPrepareContent', 'botcontactinfo' );
function botcontactinfo( &$row, &$params, $page=0 ) {

	$regex = "#{dgcontactinfo.*?\}(.*?){/dgcontactinfo}#s";

	$row->text = preg_replace_callback( $regex, 'botcontactinfo_replacer', $row->text );
	return true;
}

function botcontactinfo_replacer ( &$matches ) {
	$database =& JFactory::getDBO();
	$idarray=explode(" ", $matches[0]);
	$contact_id=intval($idarray[1]);
	$query="SELECT * FROM #__contact_details WHERE id = $contact_id";
	$database->setQuery( $query );
	$contacts = $database->loadObject();
	if (!$contacts) {
		return '(invalid contact id)';
	} else {
		$contact_html=$matches[1];
		$contact_html=str_replace("[name]",$contacts->name,$contact_html);
		$contact_html=str_replace("[con_position]",$contacts->con_position,$contact_html);
		$contact_html=str_replace("[email_to]",$contacts->email_to,$contact_html);
		$contact_html=str_replace("[address]",$contacts->address,$contact_html);
		$contact_html=str_replace("[suburb]",$contacts->suburb,$contact_html);
		$contact_html=str_replace("[state]",$contacts->state,$contact_html);
		$contact_html=str_replace("[postcode]",$contacts->postcode,$contact_html);
		$contact_html=str_replace("[country]",$contacts->country,$contact_html);
		$contact_html=str_replace("[telephone]",$contacts->telephone,$contact_html);
		$contact_html=str_replace("[fax]",$contacts->fax,$contact_html);
		$contact_html=str_replace("[misc]",$contacts->misc,$contact_html);
		$contact_html=str_replace("[webpage]",$contacts->webpage,$contact_html);
		$contact_html=str_replace("[mobile]",$contacts->mobile,$contact_html);
		$contact_html=str_replace("[alias]",$contacts->alias,$contact_html);
		$contact_html=str_replace('[image]','<img src="'.JURI::base().'images/stories/' . $contacts->image . '">',$contact_html);
		return $contact_html;
	}
}
?>

