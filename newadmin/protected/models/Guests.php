<?php

/**
 * This is the model class for table "{{guests}}".
 *
 * The followings are the available columns in table '{{guests}}':
 * @property integer $id
 * @property integer $tid
 * @property integer $number
 * @property string $full_name
 * @property string $passport
 * @property string $nationality
 */
class Guests extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Guests the static model class
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
		return '{{guests}}';
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
			array('id, tid, number', 'numerical', 'integerOnly'=>true),
			array('full_name, passport, nationality', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, tid, number, full_name, passport, nationality', 'safe', 'on'=>'search'),
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
			'number' => 'Number',
			'full_name' => 'Full Name',
			'passport' => 'Passport',
			'nationality' => 'Nationality',
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
		$this->tid=Yii::app()->user->getState('tourinfoFinal_id')?Yii::app()->user->getState('tourinfoFinal_id'):$this->tid;
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('tid',$this->tid);
		$criteria->compare('number',$this->number);
		$criteria->compare('full_name',$this->full_name,true);
		$criteria->compare('passport',$this->passport,true);
		$criteria->compare('nationality',$this->nationality,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}