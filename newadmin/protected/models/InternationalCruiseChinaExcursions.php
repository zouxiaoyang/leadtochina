<?php

/**
 * This is the model class for table "{{international_cruise_china_excursions}}".
 *
 * The followings are the available columns in table '{{international_cruise_china_excursions}}':
 * @property integer $id
 * @property integer $cid
 * @property string $name
 * @property string $intro
 * @property string $tour_ids
 */
class InternationalCruiseChinaExcursions extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return InternationalCruiseChinaExcursions the static model class
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
		return '{{international_cruise_china_excursions}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cid', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>100),
			array('tour_ids', 'length', 'max'=>100),
			array('intro', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, cid, name, intro, tour_ids', 'safe', 'on'=>'search'),
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
			'cid' => 'Cid',
			'name' => 'Name',
			'intro' => 'Intro',
			'tour_ids' => 'Tour Ids',
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

		$this->cid = Yii::app()->user->getState('InternationalCruiseChinaExcursionsCid') ? Yii::app()->user->getState('InternationalCruiseChinaExcursionsCid') : $this->cid;

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('cid',$this->cid);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('intro',$this->intro,true);
		$criteria->compare('tour_ids',$this->tour_ids,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
