<?php

class ShanghaiBeijingToursController extends Controller
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
      $this->render('index',array(
      	'message' => Message::newMessage()
      ));
  }

  public function actionBeijingshanghaixian(){

    $this->render('beijingshanghaixian');
  }

  public function actionSearch()
  {
  	  $uri = $_GET['title'];
  	  $condition[] = "category_parentid=77";
	  $condition[] = "find_in_set('5', destination_addr)";
  	  switch($uri){
  	  	case "shanghai-to-beijing-tours":
	  	  	 $condition[] = "find_in_set(18, one_category) or id in(738,737)";
	  	  	 $title = "Shanghai to Beijing Tours";
	  	  	 break;
	  	case "beijing-to-shanghai-tours":
	  	  	 $condition[] = "find_in_set(17, one_category) or id in(738,737)";
	  	  	 $title = "Beijing to Shanghai Tours";
           break;
	  	case "beijing-and-shanghai-tours":
	  	  	 $condition[] = "find_in_set(26, one_category) or id in(738,737)";
	  	  	 $title = "Beijing & Shanghai Tours";
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

  public function actionShanghaiTransferService(){
  	$this->render('shanghaiTransferService');
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
}
