<?php

/**
 * This is the model class for table "jos_total_order".
 *
 * The followings are the available columns in table 'jos_total_order':
 * @property integer $id
 * @property string $orderNO
 * @property string $executor
 * @property string $full_name
 * @property integer $gender
 * @property string $nationality
 * @property string $packagecode
 * @property string $email
 * @property string $other_email
 * @property string $phone
 * @property string $addr
 * @property integer $adults
 * @property integer $children
 * @property integer $infant
 * @property string $entry_city
 * @property string $entry_date
 * @property string $duration
 * @property string $exit_city
 * @property string $other_travelinfo
 * @property string $url_referer
 * @property string $submit_source
 * @property string $user_ip
 * @property string $country_id
 * @property string $dateline
 * @property integer $order_state
 * @property string $state_description
 * @property integer $ordertype
 * @property string $end_date
 * @property integer $payment_method
 * @property string $passenger_info
 * @property integer $discount_type
 * @property integer $order_purpose
 * @property string $total_price
 * @property string $final_price
 * @property integer $checked_out
 * @property integer $state
 * @property integer $is_activity
 * @property integer $is_read
 * @property string $destination
 * @property string $other_message
 * @property integer $send_email_flag
 * @property integer $send_email_count
 */
class Order extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Order the static model class
	 */
	public $city;
	public $other_city;
	//public $verifyCode;
	
	public static function model($className=__CLASS__)
	{		
		return parent::model($className);
		
	}

	
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'joomla.jos_total_order';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('full_name, email', 'required'),
			array('email', 'email'),
			array('adults, children, infant, order_state, ordertype, payment_method, discount_type, order_purpose, checked_out, state, is_activity, is_read, send_email_flag, send_email_count', 'numerical', 'integerOnly'=>true),
			array('orderNO, executor', 'length', 'max'=>30),
			array('full_name,total_price, nationality, phone', 'length', 'max'=>50),
			array('packagecode,  final_price', 'length', 'max'=>10),
			array('email, other_email, addr,  other_city, url_referer', 'length', 'max'=>150),
			array('exit_city, end_date', 'length', 'max'=>15),
			array('entry_date, duration, submit_source, destination', 'length', 'max'=>100),
			array('user_ip', 'length', 'max'=>20),
			array('country_id', 'length', 'max'=>5),
			array('dateline', 'length', 'max'=>11),
			array('gender, entry_city,city, state_description,other_travelinfo, other_message', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, orderNO, executor, full_name, gender, nationality, packagecode, email, other_email, phone, addr, adults, children, infant, entry_city, entry_date, duration, exit_city, other_travelinfo, url_referer, submit_source, user_ip, country_id, dateline, order_state, state_description, ordertype, end_date, payment_method, passenger_info, discount_type, order_purpose, total_price, final_price, checked_out, state, is_activity, is_read, destination, other_message, send_email_flag, send_email_count', 'safe', 'on'=>'search'),
			//array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'orderNO' => 'Order No',
			'executor' => 'Executor',
			'full_name' => 'Full Name',
			'gender' => 'Gender',
			'nationality' => 'Nationality',
			'packagecode' => 'Packagecode',
			'email' => 'Email',
			'other_email' => 'Other Email',
			'phone' => 'Phone',
			'addr' => 'Addr',
			'adults' => 'Adults',
			'children' => 'Children',
			'infant' => 'Infant',
			'entry_city' => 'Entry City',
			'entry_date' => 'Entry Date',
			'budget' => 'Tour Budget',
			'duration' => 'Duration',
			'exit_city' => 'Exit City',
			'other_travelinfo' => 'Other Travelinfo',
			'url_referer' => 'Url Referer',
			'submit_source' => 'Submit Source',
			'user_ip' => 'User Ip',
			'country_id' => 'Country',
			'dateline' => 'Dateline',
			'order_state' => 'Order State',
			'state_description' => 'State Description',
			'ordertype' => 'Ordertype',
			'end_date' => 'End Date',
			'payment_method' => 'Payment Method',
			'passenger_info' => 'Passenger Info',
			'discount_type' => 'Discount Type',
			'order_purpose' => 'Order Purpose',
			'total_price' => 'Total Price',
			'final_price' => 'Final Price',
			'checked_out' => 'Checked Out',
			'state' => 'State',
			'is_activity' => 'Is Activity',
			'is_read' => 'Is Read',
			'destination' => 'Destination',
			'other_message' => 'Other Message',
			'send_email_flag' => 'Send Email Flag',
			'send_email_count' => 'Send Email Count',
			'route' => 'Route',
			'city' =>'City',
			'other_city'=>'Other city'
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		//$this->_attributes['budget'] = $_POST['Order']['budget'];

		$criteria->compare('id',$this->id);
		$criteria->compare('orderNO',$this->orderNO,true);
		$criteria->compare('executor',$this->executor,true);
		$criteria->compare('full_name',$this->full_name,true);
		$criteria->compare('gender',$this->gender);
		$criteria->compare('nationality',$this->nationality,true);
		$criteria->compare('packagecode',$this->packagecode,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('other_email',$this->other_email,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('addr',$this->addr,true);
		$criteria->compare('adults',$this->adults);
		$criteria->compare('children',$this->children);
		$criteria->compare('infant',$this->infant);
		$criteria->compare('entry_city',$this->entry_city,true);
		$criteria->compare('budget',$this->budget,true);		
		$criteria->compare('entry_date',$this->entry_date,true);
		$criteria->compare('duration',$this->duration,true);
		$criteria->compare('exit_city',$this->exit_city,true);
		$criteria->compare('other_travelinfo',$this->other_travelinfo,true);
		$criteria->compare('url_referer',$this->url_referer,true);
		$criteria->compare('submit_source',$this->submit_source,true);
		$criteria->compare('user_ip',$this->user_ip,true);
		$criteria->compare('country_id',$this->country_id,true);
		$criteria->compare('dateline',$this->dateline,true);
		$criteria->compare('order_state',$this->order_state);
		$criteria->compare('state_description',$this->state_description,true);
		$criteria->compare('ordertype',$this->ordertype);
		$criteria->compare('end_date',$this->end_date,true);
		$criteria->compare('payment_method',$this->payment_method);
		$criteria->compare('passenger_info',$this->passenger_info,true);
		$criteria->compare('discount_type',$this->discount_type);
		$criteria->compare('order_purpose',$this->order_purpose);
		$criteria->compare('total_price',$this->total_price,true);
		$criteria->compare('final_price',$this->final_price,true);
		$criteria->compare('checked_out',$this->checked_out);
		$criteria->compare('state',$this->state);
		$criteria->compare('is_activity',$this->is_activity);
		$criteria->compare('is_read',$this->is_read);
		$criteria->compare('destination',$this->destination,true);
		$criteria->compare('other_message',$this->other_message,true);
		$criteria->compare('send_email_flag',$this->send_email_flag);
		$criteria->compare('send_email_count',$this->send_email_count);
		$criteria->compare('city',$this->city);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


	function newOrder()
  {
        $model =new Order;

        if(isset($_POST['Order']))
        {
          if($_POST['Order']['full_name']) {
            $_POST['Order']['full_name'] = $_POST['Order']['gender'].$_POST['Order']['full_name'];
          }
          $_POST['Order']['url_referer'] = Yii::app()->request->urlReferrer;
          $_POST['Order']['submit_source'] = $_SERVER['HTTP_HOST'];
          $_POST['Order']['dateline'] = time();

          if($_POST['entry_date']){
            $_POST['Order']['entry_date'] = $_POST['entry_date'];
          }

          $other_message='';
          if($_POST['Order']['total_price']){
            $other_message .= "<b>Num of Rooms:</b>".$_POST['Order']['total_price']."</br>";
          }
          if($_POST['Order']['final_price']){
            $other_message .= "<b>HOtel Class:</b>".$_POST['Order']['final_price']."</br>";
          }
          if($_POST['hotel']){
            $other_message .= "<b>Hotel Choice:</b>".$_POST['hotel']."</br>";
          }
          if($_POST['dietetic']){
            $other_message .= "<b>Dietetic Requirement:</b>".$_POST['dietetic']."</br>";
          }
          if($_POST['language']){
            $other_message .= "<b>Guide Language:</b>".$_POST['language']."</br>";
          }

          if($_POST['Order']['other_message']){
            $other_message .= "<b>OTHER MESSAGE :</b>".$_POST['Order']['other_message']."</br>";
          }
          $_POST['Order']['other_travelinfo'] = $other_message;
          $_POST['Order']['user_ip'] = SiteUtils::getClientIp();
          $model->attributes = $_POST['Order'];

          if($_POST['ajax']){
            $valid=$model->validate();
            if($valid){
              echo CJSON::encode(array(
                'status'=>'success'
              ));
              if($model->save()){
                $insertId = $model->getPrimaryKey();
                $order_str = 'LTC'.date("ymd").$insertId;
                Order::model()->updateBypK($insertId, array('orderNO'=>$order_str));
              }
              Yii::app()->end();
            }else{
              echo CActiveForm::validate($model);
              Yii::app()->end();
            }
          }else{
            if($model->save()){
              $insertId = $model->getPrimaryKey();
              $order_str = 'LTC'.date("ymd").$insertId;
              Order::model()->updateBypK($insertId, array('orderNO'=>$order_str));
              header("location:/succeed.html");
            }else{
              $model->attributes = $_POST['Order'];
            }
          }
        }
        return $model;
    }

}
