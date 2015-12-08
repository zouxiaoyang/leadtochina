<?php

class BeijingXianToursController extends Controller
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
  	  $condition[] = "category_parentid=77";
	    $condition[] = "find_in_set('2', destination_addr)";

  	  switch($uri){
  	  	case "beijing-to-xian-tour-by-flight":
	  	  	 $condition[] = "find_in_set(22, one_category)";
	  	  	 $title = "Beijing to Xian Tour by Flight";
	  	  	 break;
	  	case "beijing-to-xian-tour-by-train":
	  	  	 $condition[] = "find_in_set(23, one_category)";
	  	  	 $title = "Beijing to Xian Tour by Train";
           break;
	  	case "beijing-and-xian-tours":
	  	  	 $condition[] = "find_in_set(27, one_category)";
	  	  	 $title = "Beijing and Xian Tours";
	  		break;
      case "beijing-xian-extended-tour":
           $condition[] = "find_in_set(25, one_category)";
           $title = "Beijing Xian Extended Tour";
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

  public function actionBeijingTransferService(){
  	$this->render('beijingTransferService');
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
        $order_sql = " sort desc, price asc";
        //$order_sql = " price asc";
        break;
    }
    return $order_sql;
  }

  protected function setPageHeader()
  {
    $this->setPageTitle("Xian Tours from Beijing, Beijing to Xian Tours, Travel Tours from Beijing to  Xian");
    Yii::app()->clientScript->registerMetaTag('keywords','xian tours from beijing, beijing to xian tours, tours from beijing to xian,  travel from beijing to xian');
    Yii::app()->clientScript->registerMetaTag('description','Here we are offering you 1-8 days Beijing to Xian Tours, Xian tours from Beijing, Xian Terra Cotta Warrior tours, Beijing city & side tour with lowest price.');
 
  }
}
