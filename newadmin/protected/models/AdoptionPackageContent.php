<?php

/**
 * This is the model class for table "{{adoption_package_content}}".
 *
 * The followings are the available columns in table '{{adoption_package_content}}':
 * @property integer $id
 * @property integer $pacakage_id
 * @property string $name
 * @property string $day1
 * @property string $day2
 * @property string $day3
 * @property string $day4
 * @property string $description
 */
class AdoptionPackageContent extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return AdoptionPackageContent the static model class
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
		return '{{adoption_package_content}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pacakage_id, name, day1, day2, day3, day4, description', 'required'),
			array('pacakage_id', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, pacakage_id, name, day1, day2, day3, day4, description', 'safe', 'on'=>'search'),
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
			'pacakage_id' => 'Pacakage',
			'name' => 'Name',
			'day1' => 'Day1',
			'day2' => 'Day2',
			'day3' => 'Day3',
			'day4' => 'Day4',
			'description' => 'Description',
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
		$criteria->compare('pacakage_id',$this->pacakage_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('day1',$this->day1,true);
		$criteria->compare('day2',$this->day2,true);
		$criteria->compare('day3',$this->day3,true);
		$criteria->compare('day4',$this->day4,true);
		$criteria->compare('description',$this->description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function getPackages($pacakage_id){ // 获取已经有的值;
	
		$sql = "select * from `t_adoption_package_content` where `pacakage_id`={$pacakage_id}";

		$ress = Yii::app()->db->createCommand($sql)->queryRow();

		return $ress;

	}
}