<?php

/**
 * This is the model class for table "{{tour_itinerary}}".
 *
 * The followings are the available columns in table '{{tour_itinerary}}':
 * @property integer $id
 * @property integer $tid
 * @property integer $days
 * @property string $today_date
 * @property string $place_transport
 * @property string $accommodation
 * @property string $today_activities
 * @property string $meals
 * @property string $scenery_ids
 * @property integer $uid
 * @property integer $create_time
 */
class TourItinerary extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TourItinerary the static model class
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
		return '{{tour_itinerary}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tid, days, uid, create_time', 'numerical', 'integerOnly'=>true),
			array('today_date', 'length', 'max'=>20),
			array('place_transport', 'length', 'max'=>255),
			array('accommodation', 'length', 'max'=>1000),
			array('today_activities, meals', 'length', 'max'=>500),
			//array('scenery_ids', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, tid, days, today_date, place_transport, accommodation, today_activities, meals, scenery_ids, uid, create_time', 'safe', 'on'=>'search'),
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
			'tourInfo' => array(self::BELONGS_TO, 'TourInfo', 'tid')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'tid' => 'Tid',
			'days' => 'Days',
			'today_date' => 'Today Date',
			'place_transport' => 'Place Transport',
			'accommodation' => 'Accommodation',
			'today_activities' => 'Today Activities',
			'meals' => 'Meals',
			'scenery_ids' => 'Add Scenery',
			'uid' => 'Uid',
			'create_time' => 'Create Time',
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

		$this->tid = Yii::app()->user->getState('tourinfo_id') ? Yii::app()->user->getState('tourinfo_id') : $this->tid;
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('tid',$this->tid);
		$criteria->compare('days',$this->days);
		$criteria->compare('today_date',$this->today_date,true);
		$criteria->compare('place_transport',$this->place_transport,true);
		$criteria->compare('accommodation',$this->accommodation,true);
		$criteria->compare('today_activities',$this->today_activities,true);
		$criteria->compare('meals',$this->meals,true);
		$criteria->compare('scenery_ids',$this->scenery_ids,true);
		$criteria->compare('uid',$this->uid);
		$criteria->compare('create_time',$this->create_time);
		$criteria->order = 'days asc';

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function getDays($days)
	{
		return $days.' Days';
	}

	public function updateTourDateOnFirst($first_day,$tid)
	{
		if($first_day){
			$date_arr = explode('-',$first_day);
			$tour_itineraries = TourItinerary::model()->findAllByAttributes(array('tid'=>$tid));
			foreach($tour_itineraries as $k=>$v){
				if(empty($v->today_date)){
					$today_date = date("Y-m-d",mktime(0,0,0,$date_arr[1],$date_arr[2]+$k,$date_arr[0]));
					TourItinerary::model()->updateByPk($v->id,array('today_date'=>$today_date));
				}
			}
		}
	}

	public function beforeSave()
	{
		if(parent::beforeSave()){
			if($_POST['TourItinerary']['scenery_ids']){
				foreach($_POST['TourItinerary']['scenery_ids'] as $v){
					$scenery_ids[] = (int) $v;
				}
				$this->scenery_ids = implode(',',$scenery_ids);
			}

			return true;
		}
	}
}