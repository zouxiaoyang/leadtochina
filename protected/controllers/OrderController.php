<?php

class OrderController extends Controller
{
	public function actionIndex()
	{
		$package_id = Yii::app()->session['package_id'];

		$sql="select `name`,`categorieid_str`,`package_code`,`route`,`price`,`days` from `jos_cos_tours_package` where `id`=".(int)$package_id."";

		$ress = Yii::app()->db->createCommand($sql)->queryRow();

		

		$this->render('index',array('ress'=>$ress));
	}

	public function actionSuccess(){ // 提交成功的页面;
		// 提交成功，删除session;
	//	unset(Yii::app()->session['package_id']); 
	//	unset(Yii::app()->session['url_referer']);

		$this->render('success');
	}

	public function actionSave(){ // 保存订单;


		$post = $_POST;

		$packageid  = (int)$post['packageid']; //行程的id;
		//$orderNO = $post['orderNO'];//订单号;
		//判断性别
        $gender = 0;
		if($post['Gender']=='Mr.'){
			$gender=1;
		}elseif($post['Gender']=='Ms.'){
			$gender=0;
		}
		$order_user  = addslashes($post['Gender'].$post['FullName']); // 下单客户名称;
		$tour_code = addslashes($post['tour_code']);
		if(isset($post['adults'])){ //成人数量;
		  $adults   = (int)$post['adults'];
		}else{
		  $adults   = (int)$post['adults_num'];
		}
		$children   = (int)$post['children'];// 儿童数量;
		$infant   =  (int)$post['infant'];// 婴儿数量;
		$entry_city   =  isset($post['entry_city'])?addslashes($post['entry_city']):'';
		if(isset($post['entry_date'])){ //开始日期;
			$entry_date   = $post['entry_date'];
		}elseif($post['start_date']){
			$entry_date   = $post['start_date'];
		}else{
			$entry_date = $post['entry_month']." / ".$post['entry_day']." / ".$post['entry_year'];
		}
		$duration   =  (int)$post['duration']; //持续时间;
		$exit_city   =  isset($post['exit_city'])?addslashes($post['exit_city']):''; //离开城市;
		if(isset($post['destinations'])&&empty($post['destinations'])){ //旅游线路;
		  $destinations = $package_res->route;
		}else{
		  $destinations = addslashes($post['destinations']);
		}
		
		$other_messages = $this->getOtherMessage($post);

		$traffic   =  isset($post['flight'])?addslashes($post['flight']):'';// 交通;
		$url_referer   =  Yii::app()->request->urlReferrer; // 上个页面的url;
		$package_name   =  isset($post['package_name'])?addslashes($post['package_name']):''; //套餐名称
		$package_category   = (int)$post['package_category'];//套餐分类
		$hotel   =  addslashes($post['hotel']); //旅馆;
		$other_mes   = isset($other_messages)?addslashes($other_messages):'';// 其它信息;
		$dateline   = time(); // 下单日期;
		$usr_ip   = Yii::app()->request->userHostAddress; //下单的ip;
		$order_state = 0; //订单状态;
		if(isset($post['end_date'])) { // 结束日期;
			$end_date = $post['end_date'];
		}else if(isset($post['end_month'])){
			$end_date = $post['end_month']." / ".$post['end_day']." / ".$post['end_year'];
		}else{
			$end_date='';
		}
		if(isset($post['payment_method'])){ //付款方式;
		  $payment_method = $post['payment_method']; 
		}else{
			$payment_method = ''; 
		}
		if(isset($post['passenger'])){ //客户联系信息
		  $passenger_info = serialize($post['passenger']);
		}else{
			$passenger_info = '';
		}
		if(isset($post['discount_type'])){ //折扣类型;
		  $discount_type = $post['discount_type'];
		}else{
			$discount_type = 0;
		}
		if(isset($post['order_purpose'])){ //订单意向
		  $order_purpose = $post['order_purpose'];
		}else{
			$order_purpose='';
		}
		
		$total_price = isset($post['total_price'])?$post['total_price']:0; //订单总价;
		$final_price = isset($post['final_price'])?$post['final_price']:0;// 订单最终价格;
// contact 表的字段;
		$nation = addslashes($post['Nation']);
		$promotionCode = addslashes($post['PromotionCode']);
		$addr = isset($post['addr'])?addslashes($post['addr']):'';
		$email = isset($post['Email'])?addslashes($post['Email']):'';
		$other_email = isset($post['Cemail'])?addslashes($post['Cemail']):'';
		$phone = isset($post['PhoneNo'])?addslashes($post['PhoneNo']):'';
		
		$sql="insert into `jos_cos_tours_order` set `packageid`=".$packageid.",`order_user`='".$order_user."',`tour_code`='".$tour_code."',`adults`=".$adults.",`children`=".$children.",`infant`=".$infant.",`entry_city`='".$entry_city."',`entry_date`='".$entry_date."',`duration`=".$duration.",`exit_city`='".$exit_city."',`destinations`='".$destinations."',`traffic`='".$traffic."',`url_referer`='".$url_referer."',`package_name`='".$package_name."',`package_category`='".$package_category."',`hotel`='".$hotel."',`other_mes`='".$other_mes."',`dateline`='".$dateline."',`usr_ip`='".$usr_ip."',`order_state`=".$order_state.",`end_date`='".$end_date."',`payment_method`='".$payment_method."',`passenger_info`='".$passenger_info."',`discount_type`='".$discount_type."',`order_purpose`=".$order_purpose.",`total_price`=".$total_price.",`final_price`=".$final_price.""; //插入数据;

		Yii::app()->db->createCommand($sql)->execute(); // insert;
		$insertid = Yii::app()->db->getLastInsertID();

    // 更新 contact 表;
		$sql="insert into `jos_cos_user_contact` set `orderid`='{$insertid}',`full_name`='{$order_user}',`gender`={$gender},`addr`='{$addr}',`nationality`='{$nation}',`email`='{$email}',`other_email`='{$other_email}',`phone`='{$phone}',`subscribe`=0,`is_activity`=0";

		Yii::app()->db->createCommand($sql)->execute();
	//生成订单号;
		$insertid1=Yii::app()->db->getLastInsertID();
		$id_len=strlen($insertid);
		$id_str=str_pad($insertid,3,0,STR_PAD_LEFT);
		$today_date=date("ymd");
    	$order_str = 'LTC'.$today_date.$id_str;

		$is_update = Yii::app()->db->createCommand("UPDATE `jos_cos_tours_order` SET `orderNO`='{$order_str}',`contactid`={$insertid1} WHERE `id`={$insertid}")->execute();

		$is_update?$this->redirect('/travel/success'):exit('Error Submit');
		
	}


protected function getOtherMessage($post){ // 获取other message;

	$other_messages="";
		if(isset($_GET['submit_from']) && $_GET['submit_from']=="beijing_diy"){
			if(isset($post['other_mes']) && $post['other_mes']=="Tell us about your requests,we will plan a pleasant beijing tour for you!"){
				$post['other_mes']='';    
			}
		}
		if($_POST['ordertype']!=7&&$_POST['ordertype']!=8&&$_POST['ordertype']!=14){
			$bed_info="<b>BED INFORMATION :</b> Twin Beds:".$post['Twin_Beds'].",King/Double Beds:".$post['Double_Beds'].",Triple Beds:".$post['Triple_Beds']."<br/>";
			$meal_info="<b>MEALS :</b> Breakfast:".$post['breakfast'].",Lunch:".$post['lunch']."Dinner:".$post['dinner']."</br>";
		}else{
			$bed_info='';
			$meal_info='';
		}
	  
	    if($post['new_com_order']){
			$king_bed = isset($post['king_bed'])?$post['king_bed']:'';
			$twin_beds = isset($post['twin_beds'])?$post['twin_beds']:'';
			$one_bed = isset($post['one_bed'])?$post['one_bed']:'';
			$tour_space = isset($post['tour_space'])?$post['tour_space']:'';
			$tour_for = isset($post['tour_for'])?$post['tour_for']:'';
			$guide_language = isset($post['guide_language'])?$post['guide_language']:'';

	  		$room_type_info="<b>ROOM INFO :</b>".$king_bed." ,".$twin_beds.",".$one_bed."<br/>";
			$tour_idea_info="<b>TOUR IDEA :</b> Tour Space:".$tour_space." Tour For:".$tour_for."<br/>";
			if(!empty($guide_language)){
				$guide_language_info="<b>GUIDE LANGUAGE :</b> ".implode(',', $guide_language)."<br/>";
			}else{
				$guide_language_info="<b>GUIDE LANGUAGE :</b> none<br/>";
			}
	    }
	  
	 	if(isset($post['choose_city'])){
	  		$other_messages.="<b>TRAVEL DESTINATIONS :</b> ".$post['choose_city']."<br/>";
	  	}	  	
	  	if(isset($post['flexible_date'])){
	  		$other_messages.="<b>FLEXIBLE TOUR DATE :</b>".$post['flexible_date']." <br/>";
	  	}	
	  	if(isset($post['your_team'])){
	  		$other_messages.="<b>IN YOUR TEAM :</b>".$post['your_team']."<br/>";
	  	}  	
	  	if(isset($post['choose_interest'])){
	  		$other_messages.="<b>TRAVEL INTEREST :</b> ".$post['choose_interest']."<br/>";
	  	}
	  	if(isset($post['evenning_entertainment'])){
	  		$other_messages.="<b>EVENNING ENTERTAINMENT :</b> ".$post['evenning_entertainment']."<br/>";
	  	}
		if(isset($post['flight'])){
	  		$other_messages.="<b>FLIGHT :</b> ".$post['flight']."<br/>";
	  	}
		if(isset($post['hotel'])){
	  		$other_messages.="<b>HOTEL :</b> ".$post['hotel']."<br/>";
	  	}
		if(isset($post['hotel_class'])&&is_array($post['hotel_class'])){
	  		$other_messages.="<b>HOTEL CLASS :</b> ".implode(',', $post['hotel_class'])."<br/>";
	  	}else if(isset($post['hotel_class'])){
	  		$other_messages.="<b>HOTEL CLASS :</b> ".$post['hotel_class']."<br/>";
	  	}else{
			$other_messages.="<b>HOTEL CLASS :</b> ".$post['hotel']."<br/>";
		}
		if(isset($post['dietetic'])){
	  		$other_messages.="<b>DIETETIC :</b> ".$post['dietetic']."<br/>";
	  	}
		if(isset($post['language'])||isset($post['language_other'])){
	  		$other_messages.="<b>GUIDE LANGUAGE :</b> ".$post['language'].$post['language_other']."<br/>";
	  	}
		if(isset($post['destinations'])){
	  		$other_messages.="<b>DESTINATIONS :</b> ".$post['destinations']."<br/>";
	  	}
	  	if($meal_info!="<b>MEALS :</b> Breakfast:,Lunch:Dinner:</br>"){	  		
	  		$other_messages.=$meal_info;
	  	}
	  	if($bed_info!="<b>BED INFORMATION :</b> Twin Beds:,King/Double Beds:,Triple Beds:<br/>"){	  		
	 			$other_messages.=$bed_info;
	  	}
 		$other_messages.=$room_type_info;
 		$other_messages.=$tour_idea_info;
 		$other_messages.=$guide_language_info;
	  	if(isset($post['other_mes'])){
	  		$other_messages.="<b>OTHER MESSAGE :</b> ".$post['other_mes']."<br/>";
	  	}
	  	if(isset($post['search_condition'])){
	  		$other_messages.="<b>SEARCH CONDITION :</b> ".$post['search_condition']."<br/>";
	  	}
		if(isset($post['other_children'])){
			$other_messages .= "<b>Other Children:</b>".$post['other_children']."<br />"; 
		}
		if(isset($post['adoption_tour_title'])){
			$other_messages .= "<b>Adoption Tour Title:</b>".$post['adoption_tour_title']."<br />"; 
		}

		return $other_messages;
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