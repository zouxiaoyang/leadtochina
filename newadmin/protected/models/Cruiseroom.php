<?php

/**
 * This is the model class for table "{{cruiseroom}}".
 *
 * The followings are the available columns in table '{{cruiseroom}}':
 * @property integer $id
 * @property integer $cruiseid
 * @property string $cruise_name
 * @property string $name
 * @property integer $price
 * @property integer $breakfast
 */
class Cruiseroom extends CActiveRecord
{
	const UPLOAD_PATH = "images/uploads/cruiseroom/";
  static $breakfast = array(
    '不提供',
    '提供'  
  );

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cruiseroom the static model class
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
		return '{{cruiseroom}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, price', 'required'),
			array('cruiseid, price, breakfast', 'numerical', 'integerOnly'=>true),
			array('cruise_name', 'length', 'max'=>100),
			array('name,room_pic1,room_pic2', 'length', 'max'=>50),
			array('description', 'length', 'max'=>1024),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, cruiseid, cruise_name, name, price, breakfast,description', 'safe', 'on'=>'search'),
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
			'cruiseid' => 'Cruiseid',
			'cruise_name' => '游轮名称',
			'name' => '房间名称',
			'price' => '房间数',
			'breakfast' => '是否提供早餐',
			'description'=>'房间描述',
			'room_pic1'=>'房间平面图',
			'room_pic2'=>'房间照片',
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
		if($_GET['cruiseid']) Yii::app()->user->setState('cruiseid', $_GET['cruiseid']);
		$this->cruiseid = Yii::app()->user->getState('cruiseid') ? Yii::app()->user->getState('cruiseid') : $this->cruiseid;

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('cruiseid',$this->cruiseid);
		$criteria->compare('cruise_name',$this->cruise_name,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('price',$this->price);
		$criteria->compare('breakfast',$this->breakfast);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function beforeSave(){
		if(parent::beforeSave()){
			$this->cruiseid = Yii::app()->user->getState('cruiseid');
			return true;
		}
	}
}
