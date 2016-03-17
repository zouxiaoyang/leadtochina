<?php

class ContentController extends Controller
{
	public function actionIndex()
	{
		$sql="select * from `jos_content` where id=".(int)$_GET['at_id']." and state=1";
		$res  = Yii::app()->db->createCommand($sql)->queryRow();
		//for seo:
		$t=$res['title'];
		$k=$res['metakey'];
		$d=$res['metadesc'];
		Seo::_seo($this,$t,$k,$d);
		$this->render('index',array('res'=>$res));
	}
// things;
	public function actionThings(){
		// seo:
		$t='Things to Do in China, Places to Visit China, Info about China Trip, Food, Shopping';
		$d='Lastest China travel Info about things to do in China, best places to visit China, where and when to go China and so on. Offering you how to travel China in a best way.';
		$k='top 10 things to do in china, when to visit china, places to visit china, travel china';
		Seo::_seo($this,$t,$k,$d);
		// get the data;
		$sql="select `c`.`id` as `content_id`,`c`.`title`,`c`.`alias`,`c`.`introtext`,`c`.`metakey`,`c`.`metadesc`,`cp`.`pic_alt`,`cp`.`pic_dir`,`cp`.`pic_path` from `jos_content` as `c` left join `jos_categories` as `cat` on `cat`.`id`=`c`.`catid` left join `jos_cos_contentpic` as `cp` on `cp`.`contentid`=`c`.`id` where `cat`.`id`=189 and `c`.`state`=1  order by `c`.`id` desc";
		// pagination;
		$criteria=new CDbCriteria();
		$result = Yii::app()->db->createCommand($sql)->query();
		$cnt = $result->rowCount;
		$pages=new CPagination($cnt);
		$pages->pageSize=20; 
		$pages->applyLimit($criteria);
		$result=Yii::app()->db->createCommand($sql." LIMIT :offset,:limit"); 
		$result->bindValue(':offset', $pages->currentPage*$pages->pageSize); 
		$result->bindValue(':limit', $pages->pageSize); 
		$ress=$result->query();
		
		$this->render('things',array(
			'ress'=>$ress,
			'pages'=>$pages,
		));
	}
}