<?php

class ReviewsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';



	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Reviews;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Reviews']))
		{
			$model->attributes=$_POST['Reviews'];
			if($model->save(false)){ 
				if(!empty($_POST['hide_pic_id'])){
					$arr_list_pic_id = explode('--',trim($_POST['hide_pic_id']));
					$arr_list_pic_id = array_filter($arr_list_pic_id);
					$str_list_pic_id = '('.implode(',',$arr_list_pic_id).')';
					$insertid = $model->id;
			//更新图片;
					$sql="update `t_reviews_pic` set `tid`=".$insertid." where `tid`=-1 and `id` in ".$str_list_pic_id."";
					Yii::app()->db->createCommand($sql)->execute();
				}

				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Reviews']))
		{
			$model->attributes=$_POST['Reviews'];
			if($model->save(false))
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	} 
	function actionUpload() {

			if (!empty($_FILES['imgfile']['name'])) {
				//echo json_encode(array('file_infor' => dirname(__FILE__)));exit;
				//$dirs = dirname(__FILE__);           
				/* 设定上传目录 */
				$file_url	 = '/images/reviews/'.date('Ym');
				$uploads_dir = getcwd().$file_url;
				$uploads_dir = str_replace("\\","/",$uploads_dir);
	//            chdir($uploads_dir);//转换新地址为当前目录,测试完关闭，不然无法正常上传
	//            getcwd()  //打印出新目录的绝对地址

				/* 检测上传目录是否存在 */
				if (!is_dir($uploads_dir) || !is_writeable($uploads_dir)) {
					if (!mkdir($uploads_dir, 0777)) {
						echo json_encode(array('file_infor' => "mkdir error"));
						exit;
					}
				}
				/* 设置允许上传文件的类型 */
				$allow_type = array("image/jpg", "image/jpeg", "image/png", "image/pjpeg", "image/gif", "image/bmp", "image/x-png");
				$get_img_type = $_FILES['imgfile']['type'];
				if (!in_array($get_img_type, $allow_type)) {
					echo json_encode(array('file_infor' => "图片格式不对，请重新上传!"));
					exit;
				}
				/* 设置文件名为"日期_文件名" */
				date_default_timezone_set('PRC');
				$file_info = pathinfo($_FILES['imgfile']['name']);
				$newName = uniqid().'.'.$file_info['extension'];

				/* 移动上传文件到指定文件夹 */
				$state = move_uploaded_file($_FILES['imgfile']['tmp_name'], Reviews::UPLOAD_PATH.$newName);
				$imgsrc = Reviews::UPLOAD_PATH.$newName;

				if ($state) {
					if(empty($_POST['id'])){
						$message = "文件上传成功!";
						if($_POST['f_id']){
							$reviewsPic = new ReviewsPic;
							$reviewsPic->pic = $newName;
							$reviewsPic->tid = $_POST['f_id'];
							$reviewsPic->published =1;
							if(isset($_POST['type']) && (int)$_POST['type']){
								$reviewsPic->type = (int)$_POST['type'];
							}
							if(!$reviewsPic->save()){
								$message.= "---图片数据插入失败！！";
							}
							$insertid = $reviewsPic->id;
						}
					}else{
						$message = "文件修改成功!";
						if($_POST['f_id']){
							$reviewsPic = ReviewsPic::model()->findByPk($_POST['id']);
							$reviewsPic->pic = $newName;
							if(!$reviewsPic->save()){
								$message.= "---图片数据更新失败！！";
							}
							$insertid = $_POST['id'];
						}
					}
				} else {
					/* 处理错误信息 */
					switch ($_FILES['imgfile']['error']) {
						case 1 : $message = "上传文件大小超出 php.ini:upload_max_filesize 限制";
						case 2 : $message = "上传文件大小超出 MAX_FILE_SIZE 限制";
						case 3 : $message = "文件仅被部分上传";
						case 4 : $message = "没有文件被上传";
						case 5 : $message = "找不到临时文件夹";
						case 6 : $message = "文件写入失败";
					}
				}
				echo json_encode(array('file_infor' => $message, 'imgsrc' => $imgsrc,'id'=>$insertid));
				exit;
			} else {
				echo json_encode(array('file_infor' => 'false1'));
			}
		// }
    }

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Reviews');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Reviews('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Reviews']))
			$model->attributes=$_GET['Reviews'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Reviews::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}


	public function actionDelPic($id){
		$reviewsPic = ReviewsPic::model()->findByPk($id);
		unlink(Reviews::UPLOAD_PATH.$reviewsPic->pic);
		$reviewsPic->delete();
		echo 0;
		Yii::app()->end();
	}

	public function actionCheckPic($id){
		$reviewsPic = ReviewsPic::model()->findByPk($id);
		if($reviewsPic->published) $reviewsPic->published = 0;
		else $reviewsPic->published = 1;

		$reviewsPic->save();
		echo $reviewsPic->published;
		Yii::app()->end();
	}


	public function actionDelComment($id){
		$reviewsComment = ReviewsComment::model()->findByPk($id);
		$reviewsComment->delete();
		echo 0;
		Yii::app()->end();
	}

	public function actionCheckComment($id){
		$reviewsComment = ReviewsComment::model()->findByPk($id);
		if($reviewsComment->published) $reviewsComment->published = 0;
		else $reviewsComment->published = 1;

		$reviewsComment->save();
		echo $reviewsComment->published;
		Yii::app()->end();
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='reviews-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	protected function ajaxupload(){

		if($_FILES['mypic']['size']){
				//echo json_encode(array('file_infor' => dirname(__FILE__)));exit;
				//$dirs = dirname(__FILE__);           
				/* 设定上传目录 */
				$tour_id = (int)$_GET['tour_id'];
				$file_url	 = '/images/reviews/'.date('Ym');
				$uploads_dir = getcwd().$file_url;
				$uploads_dir = str_replace("\\","/",$uploads_dir);
	//            chdir($uploads_dir);//转换新地址为当前目录,测试完关闭，不然无法正常上传
	//            getcwd()  //打印出新目录的绝对地址

				/* 检测上传目录是否存在 */
				if (!is_dir($uploads_dir) || !is_writeable($uploads_dir)) {
					if (!mkdir($uploads_dir, 0777)) {
						echo json_encode(array('file_infor' => "mkdir error"));
						exit;
					}
				}
				/* 设置允许上传文件的类型 */
				$allow_type = array("image/jpg", "image/jpeg", "image/png", "image/pjpeg", "image/gif", "image/bmp", "image/x-png");
				$get_img_type = $_FILES['mypic']['type'];
				if (!in_array($get_img_type, $allow_type)) {
					echo json_encode(array('file_infor' => "图片格式不对，请重新上传!"));
					exit;
				}
				/* 设置文件名为"日期_文件名" */
				date_default_timezone_set('PRC');
				$file_info = pathinfo($_FILES['mypic']['name']);
				$newName = uniqid().'.'.$file_info['extension'];

				/* 移动上传文件到指定文件夹 */
				$state = move_uploaded_file($_FILES['mypic']['tmp_name'], Reviews::UPLOAD_PATH.$newName);
				$imgsrc = Reviews::UPLOAD_PATH.$newName;

				if ($state) {
					$message = "文件上传成功!";
					if(!isset($_GET['id'])){
						if($_GET['f_id']){
							// echo "2222";exit;
							$reviewsPic = new ReviewsPic;
							$reviewsPic->pic = $newName;
							$reviewsPic->tid = $_GET['f_id'];

							if(!$reviewsPic->save()){
								$message.= "---图片数据插入失败！！";
							}
							$insertid = $reviewsPic->id;
						}
					}else{
						if($_GET['f_id']){
							$reviewsPic = ReviewsPic::model()->findByPk($_GET['id']);
							$reviewsPic->pic = $newName;
							if(!$reviewsPic->save()){
								$message.= "---图片数据更新失败！！";
							}
							$insertid = $_GET['id'];
						}
					}
				} else {
					/* 处理错误信息 */
					switch ($_FILES['imgfile']['error']) {
						case 1 : $message = "上传文件大小超出 php.ini:upload_max_filesize 限制";
						case 2 : $message = "上传文件大小超出 MAX_FILE_SIZE 限制";
						case 3 : $message = "文件仅被部分上传";
						case 4 : $message = "没有文件被上传";
						case 5 : $message = "找不到临时文件夹";
						case 6 : $message = "文件写入失败";
					}
				}

				// 获取数据;
				/*
						$db = & JFactory::getDBO();
						$sql = "select `id`,`image_path`,`image_alt` from `jos_cos_tours_des_image` where `packageid`=".(int)$_GET['packageid']." and `cid`=".(int)$_GET['cid'][0]." order by `id` asc";
						$db->setQuery($sql);
						$items = $db->loadObjectList();

						echo json_encode($items);
*/
				echo json_encode(array('file_infor' => $message, 'imgsrc' => $imgsrc,'id'=>$insertid));
				exit;
			} else {
				echo json_encode(array('file_infor' => 'false1'));
			}
	}
}
