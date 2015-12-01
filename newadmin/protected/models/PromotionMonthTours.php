<?php

/**
 * This is the model class for table "{{promotion_month_tours}}".
 *
 * The followings are the available columns in table '{{promotion_month_tours}}':
 * @property integer $id
 * @property integer $month
 * @property string $tour_ids
 */
class PromotionMonthTours extends CActiveRecord
{

  public static $monthArr = array(
    1 => 1,
    2 => 2,
    3 => 3,
    4 => 4,
    5 => 5,
    6 => 6,
    7 => 7,
    8 => 8,
    9 => 9,
    10 => 10,
    11 => 11,
    12 =>12   
  );

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PromotionMonthTours the static model class
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
		return '{{promotion_month_tours}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('month', 'numerical', 'integerOnly'=>true),
			array('tour_ids', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, month, tour_ids', 'safe', 'on'=>'search'),
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
			'month' => 'Month',
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

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('month',$this->month);
		$criteria->compare('tour_ids',$this->tour_ids,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
