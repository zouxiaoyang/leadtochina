<?php

/**
 * This is the model class for table "{{tour_info_final}}".
 *
 * The followings are the available columns in table '{{tour_info_final}}':
 * @property integer $id
 * @property string $username
 * @property string $title
 * @property integer $pic
 * @property string $tracking_code
 * @property string $travel_advisor
 * @property string $tel
 * @property string $email
 * @property integer $tour_days
 * @property string $simple_itinerary
 * @property string $quotation
 * @property integer $uid
 * @property integer $create_time
 * @property string $price_include
 * @property string $price_exclude
 */
class TourInfoFinal extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TourInfoFinal the static model class
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
		return '{{tour_info_final}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id', 'required'),
			array('id','unique','message'=>'已生成此记录！'),
			array('id, pic, tour_days, uid, create_time', 'numerical', 'integerOnly'=>true),
			array('username, travel_advisor, tel', 'length', 'max'=>20),
			array('title', 'length', 'max'=>100),
			array('tracking_code, email', 'length', 'max'=>50),
			array('simple_itinerary, quotation, price_include, price_exclude', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, title, pic, tracking_code, travel_advisor, tel, email, tour_days, simple_itinerary, quotation, uid, create_time, price_include, price_exclude', 'safe', 'on'=>'search'),
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
			'username' => 'Traveller Name',
			'title' => '标题',
			'pic' => 'Banner',
			'tracking_code' => 'Tracking Code',
			'travel_advisor' => 'Travel Advisor',
			'tel' => '公司电话',
			'email' => '公司Email',
			'tour_days' => 'duration',
			'simple_itinerary' => 'Simple Itinerary',
			'quotation' => 'Quotation',
			'price_include' => '价格包含',
			'price_exclude' => '价格不包含',
			'uid' => 'Uid',
			'create_time' => '创建时间',
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
		$this->id=$_GET['id'];
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('pic',$this->pic);
		$criteria->compare('tracking_code',$this->tracking_code,true);
		$criteria->compare('travel_advisor',$this->travel_advisor,true);
		$criteria->compare('tel',$this->tel,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('tour_days',$this->tour_days);
		$criteria->compare('simple_itinerary',$this->simple_itinerary,true);
		$criteria->compare('quotation',$this->quotation,true);
		$criteria->compare('uid',$this->uid);
		$criteria->compare('create_time',$this->create_time);
		$criteria->compare('price_include',$this->price_include,true);
		$criteria->compare('price_exclude',$this->price_exclude,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}