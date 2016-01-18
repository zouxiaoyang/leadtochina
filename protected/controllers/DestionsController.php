<?php
class DestionsController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
	public function actionCityToursCommon(){
		$city_name = addslashes($_GET['city_name']); 
		$sql="select `id`,`title`,`description` from `jos_categories` where `parent_id`=0 and `city`='".$city_name."'";
		$res =  Yii::app()->db->createCommand($sql)->queryRow();
		if(!empty($res)){
			$parent_id  = $res['id'];
			$parent_name = $res['title'];
			$description = $res['description'];
			// 获取子分类;
			$sql="select `c`.`id`,`c`.`title` from `jos_categories` as c ,`jos_cos_tours_package` as p where c.id=p.categorieid_str and `c`.`parent_id`=".$parent_id." group by `c`.`id`";
			$res =  Yii::app()->db->createCommand($sql)->queryAll();
			if(!empty($res)){
				$child_info = $res;
				$package_category_id = array();
				foreach($res as $v){
					$package_category_id[] = $v['id'];
				}
				$str_package_category_id = '('.implode(',',$package_category_id).')';
				// 获取分的套餐;
				$sql = "SELECT * FROM `jos_cos_tours_package` WHERE `categorieid_str` in ".$str_package_category_id."";
				$package_info =  Yii::app()->db->createCommand($sql)->queryAll();
				// ec ho
				$this->render('common',array(
					'parent_name'=>	$parent_name,
					'parent_id'	=>$parent_id,
					'description'=>$description,
					'child_info'=>$child_info,
					'package_info'=>$package_info
				));
			}else{
				$this->errorPage();
			}
		}else{
			$this->errorPage();
		}
	}

	protected function errorPage(){
		echo '404 not Found!'; 
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