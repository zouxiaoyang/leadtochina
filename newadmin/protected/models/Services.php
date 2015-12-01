<?php

/**
 * This is the model class for table "{{services}}".
 *
 * The followings are the available columns in table '{{services}}':
 * @property string $id
 * @property integer $city_id
 * @property string $services_name
 * @property double $price_bus
 * @property double $price_1
 * @property double $price_2_5
 * @property double $price_6_9
 */
class Services extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Services the static model class
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
		return '{{services}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('city_id', 'numerical', 'integerOnly'=>true),
			array('price_bus, price_1, price_2_5, price_6_9', 'numerical'),
			array('services_name', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, city_id, services_name, price_bus, price_1, price_2_5, price_6_9', 'safe', 'on'=>'search'),
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
			'city_id' => '所属城市',
			'services_name' => 'Services Name',
			'price_bus' => 'Bus',
			'price_1' => '1 People',
			'price_2_5' => '2-5 People',
			'price_6_9' => '6-9 People',
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
		$this->city_id=Yii::app()->user->getState('services_city_id')?Yii::app()->user->getState('services_city_id'):$this->city_id;
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('city_id',$this->city_id);
		$criteria->compare('services_name',$this->services_name,true);
		$criteria->compare('price_bus',$this->price_bus);
		$criteria->compare('price_1',$this->price_1);
		$criteria->compare('price_2_5',$this->price_2_5);
		$criteria->compare('price_6_9',$this->price_6_9);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	protected function beforeSave(){
		//parent::beforeSave();
		$this->city_id=Yii::app()->user->getState('services_city_id');
		return true;
	}
}