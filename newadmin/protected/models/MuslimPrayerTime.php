<?php

/**
 * This is the model class for table "{{prayer_time}}".
 *
 * The followings are the available columns in table '{{prayer_time}}':
 * @property integer $id
 * @property integer $date
 * @property string $day
 * @property string $fajr
 * @property string $sunrise
 * @property string $dhuhr
 * @property string $asr
 * @property string $maghrib
 * @property string $lsha
 * @property integer $month
 * @property string $city
 */
class MuslimPrayerTime extends CActiveRecord
{
	public static $prayerTimeCities=array(
		'Beijing',
		'Chengdu',
		'Chongqing',
		'Guangzhou',
		'Guilin',
		'Harbin',
		'Lhasa',
		'Shanghai', 
		'Tianjin',
		'Xian'
	);
	
	public static $months=array(
		'1'=>'Jan',
		'2'=>'Feb',
		'3'=>'Mar',
		'4'=>'Apr',
		'5'=>'May',
		'6'=>'Jun',
		'7'=>'Jul',
		'8'=>'Aug',
		'9'=>'Sep',
		'10'=>'Oct',
		'11'=>'Nov',
		'12'=>'Dec'
	);
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MuslimPrayerTime the static model class
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
		return '{{prayer_time}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('date, month', 'numerical', 'integerOnly'=>true),
			array('day, fajr, sunrise, dhuhr, asr, maghrib, lsha', 'length', 'max'=>10),
			array('city', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, date, day, fajr, sunrise, dhuhr, asr, maghrib, lsha, month, city', 'safe', 'on'=>'search'),
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
			'date' => 'Date',
			'day' => 'Day',
			'fajr' => 'Fajr',
			'sunrise' => 'Sunrise',
			'dhuhr' => 'Dhuhr',
			'asr' => 'Asr',
			'maghrib' => 'Maghrib',
			'lsha' => 'Lsha',
			'month' => 'Month',
			'city' => 'City',
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
		$criteria->compare('date',$this->date);
		$criteria->compare('day',$this->day,true);
		$criteria->compare('fajr',$this->fajr,true);
		$criteria->compare('sunrise',$this->sunrise,true);
		$criteria->compare('dhuhr',$this->dhuhr,true);
		$criteria->compare('asr',$this->asr,true);
		$criteria->compare('maghrib',$this->maghrib,true);
		$criteria->compare('lsha',$this->lsha,true);
		$criteria->compare('month',$this->month);
		$criteria->compare('city',$this->city,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function getMuslimPrayerTimes(){
		$cityName=$_GET['title'];
		$month=$_GET['month']?$_GET['month']:date('m');
		$prayerTimes=self::model()->findAll(array(
			'condition'=>"city='".$cityName."' AND month='".$month."'",
		));
		return $prayerTimes;
	}
}