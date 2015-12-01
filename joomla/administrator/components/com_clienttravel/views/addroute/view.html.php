<?php
/**
* @version		$Id: view.html.php 14401 2010-01-26 14:10:00Z louis $
* @package		Joomla
* @subpackage	Config
* @copyright	Copyright (C) 2005 - 2010 Open Source Matters. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* Joomla! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.application.component.view');

/**
 * HTML View class for the Poll component
 *
 * @static
 * @package		Joomla
 * @subpackage	Poll
 * @since 1.0
 */
class ClienttravelViewAddroute extends JView
{
	function display($tpl = null)
	{
		global $mainframe;

		$db		=& JFactory::getDBO();
		$user 	=& JFactory::getUser();
		
		$cid 	= JRequest::getVar( 'cid', array(0), '', 'array' );
		$d     =JRequest::getVar( 'd',0,'','int');
		$packageid =JRequest::getVar( 'packageid',0,'','int');

		$option = JRequest::getCmd( 'option');
		$c = JRequest::getCmd( 'c');


		$uid 	= (int) @$cid[0];

		$edit=JRequest::getVar( 'edit', true );
		$document	= & JFactory::getDocument();

		//$document->addscript("/Joomla/jquery"."/"."jquery-1.4.min.js");

		//$poll =& JTable::getInstance('cntours', 'Table');
		// load the row from the db table
		///if($edit)
		//$poll->load( $uid );

		// fail if checked out not by 'me'
/*		
		if ($poll->isCheckedOut( $user->get('id') )) {
			$msg = JText::sprintf( 'DESCBEINGEDITTED', JText::_( 'The poll' ), $poll->title );

			$this->setRedirect( 'index.php?option='. $option, $msg );
		}
*/

		
		if ($poll->id == 0)
		{
			// defaults
			$row->published	= 1;
		}

		$options = array();

		if ($edit)
		{
			//$poll->checkout( $user->get('id') );
			$query = 'SELECT * '
			. ' FROM #__cos_client_route'
			. ' WHERE id = '.(int) $uid
			. ' ORDER BY id'
			;
			$db->setQuery($query);
			$options = $db->loadObjectList();
		}
		else
		{
			$poll->lag = 3600*24;
		}

		if(!$edit){
			$query1 = 'SELECT * '
			. ' FROM #__cos_client_route'
			. ' WHERE c_packageid = '.(int) $packageid
			
			;
			$db->setQuery($query1);
			$p_res=$db->query();
			$rows_num=$db->getNumRows($p_res);
			$d=$rows_num+1;

		}

	//循环获取住宿标准
	$hot_arr=array("136"=>"3 Star","137"=>"4 Star","138"=>"5 Star");
	$hotel_str="";
	$hotel_sel="";
	foreach($hot_arr AS $key=>$val){
		if(empty($options)==false and $options[0]->hotel_grade==$key){
			$hotel_sel="selected='selected'";
		}else{
			$hotel_sel="";
		}

		$hotel_str.="<option value=\"{$key}\" $hotel_sel>{$val}</option>";

	}

$city_array=array("hefei"=>1,"tianjin"=>16,"luoyang"=>3,"changdu"=>245,"wuyuan"=>241,"wuzhen"=>217,"foshan"=>233,"chaozhou"=>232,"zhangjiajie"=>28,"changsha"=>29,"kaifeng"=>31,"guilin"=>22,"shenyang"=>203,"wuhan"=>26,"qinhuangdao"=>49,"beijing"=>11,"baoding"=>51,"jinan"=>229,"nanning"=>53,"liuzhou"=>54,"wuzhou"=>56,"baise"=>57,"xiangfan"=>58,"quanzhou"=>231,"suzhou"=>230,""=>227,"yangshuo"=>209,"chengde"=>210,"zhengzhou"=>211,"yichang"=>212,"guiyang"=>75,"zunyi"=>76,"tongren"=>77,"anshun"=>78,""=>228,"kaili"=>81,"chengdu"=>82,"mianyang"=>83,"leshan"=>86,"xining"=>88,"jingzhou"=>253,"shiyan"=>254,"golmud"=>93,"taiyuan"=>94,"datong"=>95,"pingyao"=>96,"chongqing"=>97,"kunming"=>98,"handan"=>250,"anyang"=>251,"dali"=>102,"shanghai"=>14,"yuxi"=>104,"lijiang"=>105,"xishuangbanna"=>106,"dengfeng"=>252,"lhasa"=>108,"shigatse"=>109,"nyingchi"=>110,"shijiazhuang"=>249,"urumqi"=>112,"kelamayi"=>113,"turpan"=>114,"kashgar"=>115,"guangzhou"=>116,"shenzhen"=>117,"zhuhai"=>118,"shantou"=>119,"zhaoxing"=>248,"dongguan"=>122,"zhongshan"=>123,"fuzhou"=>124,"xiamen"=>125,"jiuzhaigou"=>213,"taipei"=>214,"hangzhou"=>129,"naqu"=>246,"tengchong"=>247,"ningbo"=>133,"wenzhou"=>134,"shaoxing"=>135,"yiwu"=>136,"zhoushan"=>137,"nanjing"=>138,"wuxi"=>139,"xuzhou"=>140,"guyuan"=>242,"suzhou"=>142,"zhongwei"=>243,"yangzhou"=>145,"weifang"=>244,"huangshan"=>147,"wuhu"=>149,""=>225,"dalian"=>226,"harbin"=>153,""=>224,""=>223,"changchun"=>157,"jilin"=>158,"taizhong"=>215,"qingdao"=>162,"tainan"=>216,"yantai"=>164,"taian"=>165,"weihai"=>166,"yinchuan"=>167,"haikou"=>204,"hohhot"=>205,"hongkong"=>172,"lanzhou"=>173,"tianshui"=>174,"jiayuguan"=>175,"jiuquan"=>176,"macau"=>177,"taiwan"=>178,"xianyang"=>179,"xian"=>180,"nanchang"=>202,"yan'an"=>182,"jingdezhen"=>240,"tonghua"=>239,"fenghuang"=>238,"hezhou"=>237,"beihai"=>236,"sanjiang"=>235,"zhaoqing"=>234,"sanya"=>198,"dunhuang"=>199,"dujiangyan"=>200,"guanghan"=>201,"yixing"=>256,"zhenjiang"=>257,"zhouzhuang"=>258,"baotou"=>259,"erdos"=>260,"hulun-buir"=>261,"manzhouli"=>262,"kangding"=>263,"leshan"=>264,"hetian"=>265,"kanas"=>266,"kuqa"=>267,"korla"=>268,"haining"=>269,"jiaxing"=>270);


	$pro_str="";
	ksort($city_array);
    foreach($city_array AS $key=>$val){
	
		if($options[0]->cityid==$val){
			$pro_seled="selected='selected'";
		}else{
			$pro_seled="";
		}
		if(empty($key)){
			continue;
		}
		$pro_str.="<option value={$val} $pro_seled>{$key}</option>";
	
	}

	/*		
		$db->setQuery("SELECT id,name FROM jos_cos_province ORDER BY id ASC");
		$pro_res=$db->query();
		$pro_seled="";
		$pro_str="";
		while ($pro_row=mysql_fetch_assoc($pro_res)){
			if(empty($options)==false and $options[0]->provinceid==$pro_row['id']){
				$pro_seled="selected='selected'";
			}else{
				$pro_seled="";
			}
			$pro_str.="<option value={$pro_row['id']} $pro_seled>{$pro_row['name']}</option>";
		}
		mysql_free_result($pro_res);
	*/	
		




	
		

		$this->assignRef('options',	$options);
		$this->assignRef('pro_str',$pro_str);
		$this->assignRef('hotel_str',$hotel_str);
		$this->assignRef('cat_str',$cat_str);
		$this->assignRef('d',$d);
		$this->assignRef('c',$c);
		$this->assignRef('packageid',$packageid);
		parent::display($tpl);

	}
}