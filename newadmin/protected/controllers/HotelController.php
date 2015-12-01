<?php
class HotelController extends Controller
{
	public function actions() {
		return array(
       'captcha'=> array(  
          'class'=>'CaptchaAction',
		));
	}
	
	public function actionIndex()
	{
		$this->setPageTitle("China Hotel, China Hotels, Hotels in China Beijing, Shanghai, Guangzhou");
	    Yii::app()->clientScript->registerMetaTag('keywords',"china hotel, china hotels, hotel china, hotel in china, china hotel, beijing hotels, shanghai hotels");
	    Yii::app()->clientScript->registerMetaTag('description',"China Hotels Booking including Beijing hotels, Shanghai hotels, Guangzhou hotels and other china hotels with lowest price and great value.");
		$hotCityHotelList=JosCosHotel::getIndexCityHotels();
		$hotelCityList=JosCosCity::getAllHotelCities();

		$this->render('index',array(
			'hotCityHotelList'=>$hotCityHotelList,
			'hotelCityList'=>$hotelCityList,
		));
	}

	public function actionSearch()
	{
    $cityInfo = JosCosCity::model()->findByAttributes(array('name'=>$_GET['city']));
    $cityId = 0;
    $cityName = '';
    if($cityInfo){
      $cityId = $cityInfo->id; 
      $cityName = $cityInfo->name;
    }

		$randomCityTours=JosCosHotel::getTours($cityId);
		$message=Message::newMessage();
		$dataProviderList=JosCosHotel::getSearchHotelList();
		$this->setPageHeader($cityName);
		$this->render('search',array(
			'dataProviderList'=>$dataProviderList,
			'message'=>$message,
			'randomCityTours'=>$randomCityTours,
		));
	}

	public function actionView()
	{
		$message=Message::newMessage();
		$model=new Order;
		$post=$_POST['Order'];
		$save=array();
		if(isset($_POST['Order'])){
			if($_POST['Order']['full_name'])$save['full_name'] = $_POST['Order']['gender'].$_POST['Order']['full_name'];
			$save['gender'] = $_POST['Order']['gender'];
			$save['email'] = $_POST['Order']['email'];
			$save['nationality'] = $_POST['Order']['nationality'];
			$save['adults'] = $_POST['Order']['adults'];
			$save['url_referer'] = Yii::app()->request->urlReferrer;
			$save['submit_source'] = $_SERVER['HTTP_HOST'];
			$save['user_ip'] = SiteUtils::getClientIp();
			$save['dateline'] = time();
			$save['ordertype']=13;//Hotel下单
			
			$other_message='';
			if($_POST['Order']['other_city']){
				$other_message.="<b>OTHER GUESTS:</b> ".$_POST['Order']['other_city']."<br/>";
			}
			if($_POST['Order']['total_price']){
				$other_message.="<b>ROOM TYPE:</b> ".$_POST['Order']['total_price']."<br/>";
			}
			if($_POST['Order']['city']){
				$other_message.="<b>NUM OF ROOMS:</b> ".$_POST['Order']['city']."<br/>";
			}
			if($_POST['Order']['entry_date']){
				$other_message.="<b>ARRIVAL DATE:</b> ".$_POST['Order']['entry_date']."<br/>";
			}
			if($_POST['Order']['end_date']){
				$other_message.="<b>DEPARTURE DATE:</b> ".$_POST['Order']['end_date']."<br/>";
			}
			if($_POST['Order']['payment_method']){
				$other_message.="<b>CHECK IN TIME:</b> ".$_POST['Order']['payment_method']."<br/>";
			}
			if($_POST['Order']['other_message']){
				$other_message.="<b>OTHER MESSAGE:</b> ".$_POST['Order']['other_message']."<br/>";
			}
			if(strpos($other_message, "http") !== false){
	        echo 'invaid conent';
	        exit;
      }
			$save['other_travelinfo']=$other_message;
			
			$model->attributes = $save;
			if($model->save()){
				$insertId = $model->getPrimaryKey();
				$order_str = 'LTCHOTEL'.date("ymd").$insertId;
				Order::model()->updateBypK($insertId, array('orderNO'=>$order_str));
			  	header("location:/succeed.html");
			}else{
				$model->attributes = $post;
				Yii::app()->user->setState('orderStarttime',$post['entry_date']);
				Yii::app()->user->setState('orderEndtime',$post['end_date']);
				Yii::app()->user->setState('orderRooms',$post['city']);
				Yii::app()->user->setState('orderGuests',$post['adults']);
				
			}
		}
		$id=$_GET['hotelid'];
		$cityInfo=JosCosHotel::model()->findByPk($id);
		$cityId=$cityInfo->cityid;
		$cityName=$cityInfo->city_name;
		$sceneryList=JosCosHotel::getSceneryList($cityId);
		$hotelDetail=JosCosHotel::getHotelDetail($id);
		
		$this->setPageTitle($hotelDetail->name);
		Yii::app()->clientScript->registerMetaTag('keywords', $hotelDetail->seo_key);
    Yii::app()->clientScript->registerMetaTag('description', $hotelDetail->description);

		$this->render('view',array(
			'hotelDetail'=>$hotelDetail,
			'model'=>$model,
		    'message'=>$message,
			'sceneryList'=>$sceneryList,
			'cityName'=>$cityName,
		));
	}

	public function actionList()
	{
		$message=Message::newMessage();
		$cityId=$_GET['hotelid']?$_GET['hotelid']:'11';
		$hotelList=JosCosHotel::getHotels($cityId);
		$randomCityTours=JosCosHotel::getTours($cityId);
		$sceneryList=JosCosHotel::getSceneryList($cityId);
		$cityName=JosCosCity::model()->findByPk($cityId)->name;
		$this->setPageHeader($cityName);
		$this->render('list',array(
			'hotelList'=>$hotelList,
			'message'=>$message,
			'randomCityTours'=>$randomCityTours,
			'cityName'=>$cityName,
			'sceneryList'=>$sceneryList,
		));
	}

	
	protected function setPageHeader($cityName)
	{
		$this->setPageTitle("$cityName Hotel, $cityName China Hotels, Cheap Hotels in $cityName");
    Yii::app()->clientScript->registerMetaTag('keywords',"$cityName Hotel, $cityName China Hotels, Cheap Hotels in $cityName");
    Yii::app()->clientScript->registerMetaTag('description',"Hotels in $cityName from 3 star cheap $cityName hotels to 5 star luxury $cityName hotels are offered with great discount and guests reviews.");
	}
	
}
