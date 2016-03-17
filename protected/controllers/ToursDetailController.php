<?php

class ToursDetailController extends Controller
{
	public function actionIndex()
	{
		$id = $package_id = (int)trim($_GET['id']);

		
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
		
	   // $toursPackage = $this->loadModel($id);
	   $model = $question = new Question;
	   if(isset($_POST['Question'])){
        $this->newQuestion($id);
        $question->attributes=$_POST['Question'];
	   }
		$this->render('index',array('ress'	=>$ress,
			'router'=>$router,
			'reviews'=>$reviews,
			'ligboxalt'=>$ligboxalt,
			'dataProvider' => Question::pageCommentsByQuestionId($question_type=2,$id),
			'questionModel' => $question
		));
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
// question;
    protected function newQuestion($id)
    {
        $question = new Question;
        if(isset($_POST['Question'])){
          if(strpos($_SERVER['REMOTE_ADDR'], "104.194.28")){
            die("error");
          }
          //过滤日文垃圾问答
          if(!preg_match('/^[A-Za-z0-9\/\-\_\.\s]+$/',$_POST['Question']['username'])){
             die("error"); 
          }
          $question->attributes=$_POST['Question'];
          
          if(strpos($_POST['Question']['content'], "http") !== false){
            echo 'invaid conent';
            exit;
          }
          $valid=$question->validate();
          if($valid){
            $question->question_type_id = $id;
			$question->save();
            echo CJSON::encode(array(
              'status'=>'success'
            ));
            Yii::app()->end();
          }else{
            $error = CActiveForm::validate($question);
            if($error!='[]')  echo $error;
            Yii::app()->end();
          }
        }
    }
//留言弹窗
	public function actionsendsecced(){
		$this->renderPartial("success",array());
	}
}