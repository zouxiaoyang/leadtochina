<?php

class ReviewsController extends Controller
{
	public function actionIndex()
	{
		//seo:
		$t='LeadToChina - GuestReviewsDetail Reviews';
		$k='';
		$d='';
		Seo::_seo($this,$t,$k,$d);
		$sql = "select `r`.`tour_id`,`p`.`name`,`p`.`package_tour_type`,`r`.`name` as `review_name`,`r`.`description`,`r`.`nationality`,`r`.`dateline` from `jos_cos_tours_package` as `p`,`t_reviews` as `r` where `p`.`id`=`r`.`tour_id` and `r`.`tour_id`=".(int)$_GET['packageid']." and `r`.`id`=".(int)$_GET['tid']."";
		$info = Yii::app()->db->createCommand($sql)->queryRow(); //获取头部提示信息;
		// 根据review id 获取该reviews下面的所有图片信息;
		$sql ="select `pic` from `t_reviews_pic` where `tid`=".(int)$_GET['tid']." and `type`=2";
		$pics= Yii::app()->db->createCommand($sql)->queryAll();
		if(empty($pics)){
			$sql ="select `pic` from `t_reviews_pic` where `tid`=".(int)$_GET['tid']." and `type`=0"; //默认的图片;
			$pics= Yii::app()->db->createCommand($sql)->queryAll();
		}
		// $sql="select `pic` from `t_reviews_pic` where `tid`=".(int)$_GET['tid']." and `type`=1 order by `id` desc limit 1";
		// $piclist= Yii::app()->db->createCommand($sql)->queryRow();
		$this->render('index',array(
				'info'=>$info,
				'pics'=>$pics,// 详细页面，大图;
				// 'piclist'=>$piclist,//列表页面图片的第一张;
			)
		);
	}

	// -----------------------------------------------------------
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}