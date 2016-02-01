<?php

class ToursDetailController extends Controller
{
	public function actionIndex()
	{
		$package_id = (int)trim($_GET['id']);

		
		Yii::app()->session['package_id'] = $package_id;// 将参数的id带到订单页面;

		
		$ress = $this->getPackage($package_id);// 具体行程


		$router = $this->getRouter($package_id);// 具体行程详细；

		$reviews = $this->getReviews($package_id);

		$ligboxalt = $this->getLightboxImageAlt();
		// seo;
		$t = $ress['name'];
		$k = $ress['seo_key'];
		$d = $ress['seo_description'];
		Seo::_seo($this,$t,$k,$d);
		$this->render('index',array('ress'	=>$ress,'router'=>$router,'reviews'=>$reviews,'ligboxalt'=>$ligboxalt));
	}

	public function getPackage($package_id){
		
		$sql="select * from `jos_cos_tours_package` where `id`=".$package_id."";
		$ress = Yii::app()->db->createCommand($sql)->queryRow();
		return $ress;
	}

	public function getRouter($package_id){
		$sql="select * from `jos_cos_tours_des` where `packageid`=".$package_id." order by `id` asc";
		$ress = Yii::app()->db->createCommand($sql)->queryAll();
		
		return $ress;
	}

	public function getReviews($package_id){ // review
	
		$sql="select `r`.`id`,`r`.`name`,`r`.`description` from `t_reviews` as `r` where `r`.`tour_id`=".$package_id." order by `r`.`id` desc limit 3";

		$ress = Yii::app()->db->createCommand($sql)->queryAll();

		if(!empty($ress)){
				foreach($ress as $res){

					$sql="select `pic` from `t_reviews_pic` where `tid`=".$res['id']." and `type`=1 order by `id` desc limit 2";

					$res_1 = Yii::app()->db->createCommand($sql)->queryAll();

					$reviews[$res['id']] =array(
						
						'name'=>$res['name'],
						'des'=>$res['description'],
						'pic'=>$res_1,
					); 
					
				}
				return $reviews;
		}else{
				
				return false;
			
		}
	}

	protected function getLightboxImageAlt(){
		
		if(Yii::app()->cache->get('ligboxalt')){
			return Yii::app()->cache->get('ligboxalt');
		}else{
			$sql="select `code`,`name` from `jos_cos_tours_package_lightbox`";
			$ress = Yii::app()->db->createCommand($sql)->queryAll();
			$alt[] = array();
			foreach($ress as $res){
				$alt[$res['code']] = $res['name'];
			}
			Yii::app()->cache->set('ligboxalt',$alt);

			return $alt;
		}
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