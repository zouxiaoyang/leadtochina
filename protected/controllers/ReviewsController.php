<?php

class ReviewsController extends Controller
{
	public function actionIndex()
	{
		$sql = "select `p`.`name`,`p`.`package_tour_type`,`r`.`name` as `review_name`,`r`.`nationality`,`r`.`dateline` from `jos_cos_tours_package` as `p`,`t_reviews` as `r` where `p`.`id`=`r`.`tour_id` and `r`.`tour_id`=".(int)$_GET['packageid']." and `r`.`id`=".(int)$_GET['tid']."";
		$info = Yii::app()->db->createCommand($sql)->queryRow(); //获取头部提示信息;
		// 根据review id 获取该reviews下面的所有图片信息;
		$sql ="select `pic` from `t_reviews_pic` where `tid`=".(int)$_GET['tid']."";
		$pics= Yii::app()->createCommand($sql)->queryAll();
		$this->render('index',array(
				'info'=>$info,
				'pics'=>$pics
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