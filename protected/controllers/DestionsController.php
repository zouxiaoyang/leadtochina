<?php
class DestionsController extends Controller
{
	public function actionIndex(){
		// seo;
		$title = 'China City Tours, China Holidays, Tour to Beijing, Shanghai, Guilin';
		$k = 'tour of china, china holidays, visit china, china city tours, china tour operator';
		$d = 'China Tour Operator offering China City Tours to Beijing, Shanghai, Guilin, Tibet and other hot destinations with great value. 24/7 Onli
  ne Support.';
		Seo::_seo($this,$title,$k,$d);
		$this->render('index');
	}
	public function actionCityToursCommon(){
		$city_name = addslashes($_GET['city_name']); 
		$sql="select `id`,`title`,`description`,`trip_notes`,`seo_title`,`seo_key`,`seo_description` from `jos_categories` where `parent_id`=0 and `title` like '".$city_name."%'";
		$res =  Yii::app()->db->createCommand($sql)->queryRow();
		if(!empty($res)){
			$parent_id  = $res['id'];
			$parent_name = $res['title'];
			$description = $res['description'];
			$trip_notes = $res['trip_notes'];
			// seo:
				$t = $res['seo_title'];
				$k = $res['seo_key'];
				$d = $res['seo_description'];
				Seo::_seo($this,$t,$k,$d);

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
				$sql = "SELECT * FROM `jos_cos_tours_package` WHERE `categorieid_str` in ".$str_package_category_id." order by `days` asc";
				$package_info =  Yii::app()->db->createCommand($sql)->queryAll();
				//获取问答:
				$criteria=new CDbCriteria();
					//$criteria->condition=('product_id=1 and status=1');//查询的条件
					//$criteria->order='comment_date DESC';//排序
					$dataProvider=new CActiveDataProvider('FrequentlyAskContent',array( //ProductComment 商品评论模型
						'pagination'=>array(
						'pageSize'=>5, //每页显示多少条数据
						),
						'criteria'=>$criteria,
					));
					//$this->render('default',array('dataProvider'=>$dataProvider));
				
				$this->render('common',array(
					'parent_name'=>	$parent_name,
					'parent_id'	=>$parent_id,
					'description'=>$description,
					'trip_notes'	=>$trip_notes,
					'child_info'=>$child_info,
					'package_info'=>$package_info,
					'dataProvider'=>$dataProvider
				));
			}else{
				$this->errorPage();
			}
		}else{
			$this->errorPage();
		}
	}

// beijing to xian ;

	public function actionBeijingToXian(){
	
		$this->render('beijingtoxian');
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