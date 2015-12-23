<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
jimport( 'joomla.application.component.view');
class StaffViewUploadpic extends JView
{
	function display($tpl = null)
	{
		global $mainframe;

		$db		=& JFactory::getDBO();
		$user 	=& JFactory::getUser();
		$cid 	= JRequest::getVar( 'cid', array(0), '', 'array' );
		$option = JRequest::getCmd( 'option');
		$id=JRequest::getCmd('id');
		$c = JRequest::getCmd( 'c');
		$uid 	= (int) @$cid[0];
		$options = array();
		if(empty($id)){
			$db->setQuery("SELECT id,pic_alt,pic_dir ,pic_path FROM jos_cos_uploadpic WHERE staffid=$uid ORDER BY id DESC");
			$piclist = $db->loadObjectList();
			$pic_count=count($piclist);
			$pic_str="<tr>";
			$j=1;
			for($i=1;$i<=$pic_count;$i++){
				if($i!=1 AND $i%2==1){
					$pic_str.="<tr>";
				}

				$temp_index=$i-1;
				$temp_dir="/".$piclist[$temp_index]->pic_dir;
				$temp_file_path=$temp_dir."thumb/thumb_".$piclist[$temp_index]->pic_path;
				$pic_str.="<td><img src=\"$temp_file_path\"><br />
				{$piclist[$temp_index]->pic_alt}
			<br /><a href=\"#\" onclick=\"javascript:del('../index.php?option=com_delpic&id={$piclist[$temp_index]->id}')\">删除</a> <a href=\"index.php?option=com_staff&c=upload&task=editpic&cid[]=$uid&id={$piclist[$temp_index]->id}\">编辑</a></td>";

				if($i%2==0){
					$j=1;
					$pic_str.="</tr>";
				}
				$j++;
			}

			if($j==2){
				$pic_str.="<td></td></tr>";
			}
		}elseif(empty($id)==false){
			$db->setQuery("SELECT id,pic_alt,pic_dir ,pic_path FROM jos_cos_uploadpic WHERE id=$id");
			$options = $db->loadObjectList();
			$temp_dir="/".$options[0]->pic_dir;
			$temp_file_path=$temp_dir."thumb/thumb_".$options[0]->pic_path;
			$pic_str="<tr><td colspan=2><img src=\"$temp_file_path\"></td></tr>";
}
		$this->assignRef('staffid',	$uid);
		$this->assignRef('pic_str',$pic_str);
		$this->assignRef('options',	$options);
		$this->assignRef('id',$id);
		parent::display($tpl);

	}
}