<?php

/**
 * This is the model class for table "jos_cos_tours_des".
 *
 * The followings are the available columns in table 'jos_cos_tours_des':
 * @property integer $id
 * @property integer $packageid
 * @property string $packagename
 * @property string $eat_standard
 * @property string $today_route
 * @property string $hotel_name
 * @property integer $hotel_grade
 * @property string $hotel_grade_str
 * @property integer $hotel_standardid
 * @property string $ufile
 * @property string $filedir
 * @property string $activities
 * @property string $activities_summ
 * @property string $package_tips
 * @property integer $published
 */
class ToursDes extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ToursDes the static model class
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
		return 'jos_cos_tours_des';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('packageid, packagename, eat_standard, today_route, hotel_name, hotel_grade, hotel_grade_str, hotel_standardid, ufile, filedir, activities, activities_summ, package_tips', 'required'),
			array('packageid, hotel_grade, hotel_standardid, published', 'numerical', 'integerOnly'=>true),
			array('packagename, filedir', 'length', 'max'=>100),
			array('eat_standard, hotel_grade_str', 'length', 'max'=>50),
			array('today_route, hotel_name, ufile, activities_summ', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, packageid, packagename, eat_standard, today_route, hotel_name, hotel_grade, hotel_grade_str, hotel_standardid, ufile, filedir, activities, activities_summ, package_tips, published', 'safe', 'on'=>'search'),
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
			'packageid' => 'Packageid',
			'packagename' => 'Packagename',
			'eat_standard' => 'Eat Standard',
			'today_route' => 'Today Route',
			'hotel_name' => 'Hotel Name',
			'hotel_grade' => 'Hotel Grade',
			'hotel_grade_str' => 'Hotel Grade Str',
			'hotel_standardid' => 'Hotel Standardid',
			'ufile' => 'Ufile',
			'filedir' => 'Filedir',
			'activities' => 'Activities',
			'activities_summ' => 'Activities Summ',
			'package_tips' => 'Package Tips',
			'published' => 'Published',
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
		$criteria->compare('packageid',$this->packageid);
		$criteria->compare('packagename',$this->packagename,true);
		$criteria->compare('eat_standard',$this->eat_standard,true);
		$criteria->compare('today_route',$this->today_route,true);
		$criteria->compare('hotel_name',$this->hotel_name,true);
		$criteria->compare('hotel_grade',$this->hotel_grade);
		$criteria->compare('hotel_grade_str',$this->hotel_grade_str,true);
		$criteria->compare('hotel_standardid',$this->hotel_standardid);
		$criteria->compare('ufile',$this->ufile,true);
		$criteria->compare('filedir',$this->filedir,true);
		$criteria->compare('activities',$this->activities,true);
		$criteria->compare('activities_summ',$this->activities_summ,true);
		$criteria->compare('package_tips',$this->package_tips,true);
		$criteria->compare('published',$this->published);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}