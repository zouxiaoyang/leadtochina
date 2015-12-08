<?php

/**
 * This is the model class for table "{{guides}}".
 *
 * The followings are the available columns in table '{{guides}}':
 * @property integer $id
 * @property integer $tid
 * @property string $name
 * @property string $city
 * @property string $mobie
 */
class Guides extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Guides the static model class
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
		return '{{guides}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tid', 'required'),
			array('tid', 'numerical', 'integerOnly'=>true),
			array('name, city', 'length', 'max'=>255),
			array('mobie', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, tid, name, city, mobie', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'city' => 'City',
			'mobie' => 'Mobie',
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
		$this->tid=Yii::app()->user->getState('guides_tid')?Yii::app()->user->getState('guides_tid'):$this->tid;
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('tid',$this->tid);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('mobie',$this->mobie,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}