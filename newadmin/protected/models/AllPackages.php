<?php

/**
 * This is the model class for table "{{all_packages}}".
 *
 * The followings are the available columns in table '{{all_packages}}':
 * @property string $id
 * @property integer $package_id
 * @property integer $muslim_cat_id
 * @property integer $province_id
 * @property integer $city_id
 * @property integer $package_type
 */
class AllPackages extends CActiveRecord
{
	public static $chinaMuslimTourCategory=array(
		'0'=>'请选择China Muslim Tours类别',
		'1'=>'Classical China Muslim Tour',
		'2'=>'China Silk Road Muslim Tour',
		'3'=>'China Tibet Muslim Tour',
		'4'=>'China Muslim Shopping Tours',
	);
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return AllPackages the static model class
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
		return '{{all_packages}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('package_id', 'required'),
			array('package_id, muslim_cat_id, province_id, city_id, package_type', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, package_id, muslim_cat_id, province_id, city_id, package_type', 'safe', 'on'=>'search'),
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
			'package_id' => '行程ID',
			'muslim_cat_id' => 'Muslim类别',
			'province_id' => '所属省份',
			'city_id' => '所属城市',
			'package_type' => '行程类别',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('package_id',$this->package_id);
		$criteria->compare('muslim_cat_id',$this->muslim_cat_id);
		$criteria->compare('province_id',$this->province_id);
		$criteria->compare('city_id',$this->city_id);
		$criteria->compare('package_type',$this->package_type);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function beforeSave(){
		if(parent::beforeSave()){
			$this->package_type=1;
			return true;
		}
	}
}