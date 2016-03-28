<?php

/**
 * This is the model class for table "jos_cos_tours_order".
 *
 * The followings are the available columns in table 'jos_cos_tours_order':
 * @property integer $id
 * @property integer $customizeid
 * @property integer $contactid
 * @property integer $packageid
 * @property string $orderNO
 * @property string $order_user
 * @property string $tour_code
 * @property integer $adults
 * @property integer $children
 * @property string $infant
 * @property string $entry_city
 * @property string $entry_date
 * @property string $duration
 * @property string $exit_city
 * @property string $destinations
 * @property string $traffic
 * @property string $url_referer
 * @property string $package_name
 * @property string $package_category
 * @property string $hotel
 * @property string $other_mes
 * @property string $dateline
 * @property string $usr_ip
 * @property integer $order_state
 * @property string $end_date
 * @property integer $payment_method
 * @property string $passenger_info
 * @property integer $discount_type
 * @property integer $order_purpose
 * @property string $total_price
 * @property string $final_price
 */
class JosCosToursOrder extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return JosCosToursOrder the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'jos_cos_tours_order';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('contactid, orderNO, order_user, tour_code, adults, children, infant, entry_city, entry_date, duration, exit_city, destinations, traffic, url_referer, package_name, package_category, hotel, other_mes, dateline, usr_ip, passenger_info', 'required'),
			array('customizeid, contactid, packageid, adults, children, order_state, payment_method, discount_type, order_purpose', 'numerical', 'integerOnly'=>true),
			array('orderNO, hotel', 'length', 'max'=>30),
			array('order_user, entry_city, exit_city, traffic', 'length', 'max'=>50),
			array('tour_code, duration, usr_ip', 'length', 'max'=>20),
			array('infant', 'length', 'max'=>3),
			array('entry_date, end_date', 'length', 'max'=>15),
			array('destinations, package_name', 'length', 'max'=>255),
			array('url_referer', 'length', 'max'=>200),
			array('package_category', 'length', 'max'=>100),
			array('dateline, total_price, final_price', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, customizeid, contactid, packageid, orderNO, order_user, tour_code, adults, children, infant, entry_city, entry_date, duration, exit_city, destinations, traffic, url_referer, package_name, package_category, hotel, other_mes, dateline, usr_ip, order_state, end_date, payment_method, passenger_info, discount_type, order_purpose, total_price, final_price', 'safe', 'on'=>'search'),
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
			'id' => 'Id',
			'customizeid' => 'Customizeid',
			'contactid' => 'Contactid',
			'packageid' => 'Packageid',
			'orderNO' => 'Order No',
			'order_user' => 'Order User',
			'tour_code' => 'Tour Code',
			'adults' => 'Adults',
			'children' => 'Children',
			'infant' => 'Infant',
			'entry_city' => 'Entry City',
			'entry_date' => 'Entry Date',
			'duration' => 'Duration',
			'exit_city' => 'Exit City',
			'destinations' => 'Destinations',
			'traffic' => 'Traffic',
			'url_referer' => 'Url Referer',
			'package_name' => 'Package Name',
			'package_category' => 'Package Category',
			'hotel' => 'Hotel',
			'other_mes' => 'Other Mes',
			'dateline' => 'Dateline',
			'usr_ip' => 'Usr Ip',
			'order_state' => 'Order State',
			'end_date' => 'End Date',
			'payment_method' => 'Payment Method',
			'passenger_info' => 'Passenger Info',
			'discount_type' => 'Discount Type',
			'order_purpose' => 'Order Purpose',
			'total_price' => 'Total Price',
			'final_price' => 'Final Price',
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

		$criteria->compare('id',$this->id);

		$criteria->compare('customizeid',$this->customizeid);

		$criteria->compare('contactid',$this->contactid);

		$criteria->compare('packageid',$this->packageid);

		$criteria->compare('orderNO',$this->orderNO,true);

		$criteria->compare('order_user',$this->order_user,true);

		$criteria->compare('tour_code',$this->tour_code,true);

		$criteria->compare('adults',$this->adults);

		$criteria->compare('children',$this->children);

		$criteria->compare('infant',$this->infant,true);

		$criteria->compare('entry_city',$this->entry_city,true);

		$criteria->compare('entry_date',$this->entry_date,true);

		$criteria->compare('duration',$this->duration,true);

		$criteria->compare('exit_city',$this->exit_city,true);

		$criteria->compare('destinations',$this->destinations,true);

		$criteria->compare('traffic',$this->traffic,true);

		$criteria->compare('url_referer',$this->url_referer,true);

		$criteria->compare('package_name',$this->package_name,true);

		$criteria->compare('package_category',$this->package_category,true);

		$criteria->compare('hotel',$this->hotel,true);

		$criteria->compare('other_mes',$this->other_mes,true);

		$criteria->compare('dateline',$this->dateline,true);

		$criteria->compare('usr_ip',$this->usr_ip,true);

		$criteria->compare('order_state',$this->order_state);

		$criteria->compare('end_date',$this->end_date,true);

		$criteria->compare('payment_method',$this->payment_method);

		$criteria->compare('passenger_info',$this->passenger_info,true);

		$criteria->compare('discount_type',$this->discount_type);

		$criteria->compare('order_purpose',$this->order_purpose);

		$criteria->compare('total_price',$this->total_price,true);

		$criteria->compare('final_price',$this->final_price,true);

		return new CActiveDataProvider('JosCosToursOrder', array(
			'criteria'=>$criteria,
		));
	}
}