<?php

class ShanghaiXianToursController extends Controller
{

  public $order;

  public function actions() {
		return array(
       'captcha'=> array(  
          'class'=>'CaptchaAction',
		));
  }

  public function actionIndex()
  {
      $this->setPageHeader();
      $this->render('index',array(
      	'message' => Message::newMessage()
      ));
  }

  public function actionSearch()
  {

  	  $uri = $_GET['title'];

  	  switch($uri){
  	  	case "xian-tours-from-shanghai":
	  	  	 $condition[] = " id in(731,733,734,735,736,513,512,732)";
	  	  	 $title = "Xian Tours from Shanghai";
	  	  	 break;
	  	case "shanghai-tours-from-xian":
	  	  	 $condition[] = " id in(841,842,843)";
	  	  	 $title = "Shanghai Tours from Xian";
           break;
	  	case "shanghai-xian-tours":
	  	  	 $condition[] = " id in(844,838,840)";
	  	  	 $title = "Shanghai & Xian Tours";
	  		break;
      case "xian-side-tours":
           $condition[] = " id in(559,570,563,160,154,327)";
           $title = "Xian City & Side Tour";
      break;
      case "shanghai-side-tours":
           $condition[] = " id in(148,156,124,583,155,734,701)";
           $title = "Shanghai City & Side Tours";
      break;
  	  default:
  	  		break;
  	  }
  	  $where_sql = implode(' AND ', $condition);
  
  	  $criteria=new CDbCriteria(array(
        'select' => array('id,package_type,categorieid_str,name,route,price_serialize,price,days,ufile,filedir,pic,tour_subtag_ids,attractions,categorie_name_str,reviews,tour_intro'),
        'condition' => $where_sql,
        'order'=>$this->getOrderSql(),
      ));
      $dataProvider = new CActiveDataProvider('ToursPackage', array(
        'criteria'=>$criteria,
      ));

      $this->render('search', array(
      	'dataProvider' => $dataProvider,
      	'message' => Message::newMessage(),
      	'title' => $title,
      ));
  }

  public function actionFlightSchedule(){
  	 $this->render('flightSchedule');
  }

  public function actionTrainSchedule(){
  	$this->render('trainSchedule');
  }

  public function actionSeatsAndCabin(){
  	$this->render('seatsAndCabin');
  }

  public function actionXianTransferService(){
  	$this->render('xianTransferService');
  }

  public function actionShanghaiTransferService(){
  	$this->render('shanghaiTransferService');
  }

  public function actionHowToBookAndTakeTrain(){
  	$this->render('howToBookAndTakeTrain');
  }

  private function getOrderSql()
  {
    $orders = $_GET['order'];
    $this->order = $orders;
    switch ($orders) {
      case 'price_up':
        $order_sql = " price asc";
        $orders = "price_down";
        break;
      case 'price_down':
        $order_sql = " price desc";
        $orders = "price_up";
        break;
      case 'day_up':
        $order_sql = " days asc";
        $orders = "day_down";
        break;
      case 'day_down':
        $order_sql = " days desc";
        $orders = "day_up";
        break;
      case 'reviews_up':
        $order_sql = " reviews asc";
        $orders = "reviews_down";
        break;
      case 'reviews_down':
        $order_sql = " reviews desc";
        $orders = "reviews_up";
        break;
      default:
        $order_sql = " days asc";
        //$order_sql = " price asc";
        break;
    }
    return $order_sql;
  }

  protected function setPageHeader()
  {
    $this->setPageTitle("Shanghai Xian Tour, Xian Tours from Shanghai, Shanghai and Xian Tour Packages");
    Yii::app()->clientScript->registerMetaTag('keywords','shanghai xian tour, xian tours from shanghai, shanghai tour from xian, shanghai and xian tour packages');
    Yii::app()->clientScript->registerMetaTag('description','1-8 days Shanghai & xian tours by Flight, Xian tours from Shanghai by train/ flight, Shanghai city and side tours from Xian and customize service.');
 
  }
}
