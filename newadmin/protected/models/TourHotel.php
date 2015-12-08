<?php

/**
 * This is the model class for table "{{tour_hotel}}".
 *
 * The followings are the available columns in table '{{tour_hotel}}':
 * @property integer $id
 * @property integer $tid
 * @property integer $cityid
 * @property integer $hotelid
 * @property string $url
 * @property string $root_type
 * @property integer $uid
 * @property integer $create_time
 */
class TourHotel extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TourHotel the static model class
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
		return '{{tour_hotel}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tid, provinceid,cityid, uid, create_time', 'numerical', 'integerOnly'=>true),
			array('url,hotelid', 'length', 'max'=>100),
			array('root_type', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, tid, provinceid,cityid, hotelid, url, root_type, uid, create_time', 'safe', 'on'=>'search'),
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
			'tid' => 'Tid',
			'cityid' => '城市',
			'provinceid' => '省份',
			'hotelid' => '酒店',
			'url' => '酒店url',
			'root_type' => 'Root Type',
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

		if($_GET['tid']) Yii::app()->user->setState('tourinfo_id', $_GET['tid']);
		$this->tid = Yii::app()->user->getState('tourinfo_id') ? Yii::app()->user->getState('tourinfo_id') : $this->tid;
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('tid',$this->tid);
		$criteria->compare('cityid',$this->cityid);
		$criteria->compare('provinceid',$this->provinceid);
		$criteria->compare('hotelid',$this->hotelid);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('root_type',$this->root_type,true);
		$criteria->compare('uid',$this->uid);
		$criteria->compare('create_time',$this->create_time);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function beforeSave(){
		if(parent::beforeSave()){
			$this->tid = Yii::app()->user->getState('tourinfo_id');
			if($this->isNewRecord){
				$this->uid = Yii::app()->user->id;
				$this->create_time = time();
			}
			return true;
		}
	}
	
	public function getProvinceName($provinceId){
		$db = Yii::app()->db;		
		$proviceName = $db->createCommand('select name from jos_cos_province where id=:provinceid')->bindValue('provinceid', $provinceId)->queryRow();
		return $proviceName['name'];
	}
	
	public function getCityName($cityId){
		$db = Yii::app()->db;
		$CityName = $db->createCommand('select name from jos_cos_city where id=:cityid')->bindValue('cityid',$cityId)->queryRow();
		return $CityName['name'];
	}

	static function getDuration($tour_days)
	{
		return $tour_days.' days';
	}
}
