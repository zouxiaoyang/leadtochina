<?php

/**
 * This is the model class for table "{{traffic}}".
 *
 * The followings are the available columns in table '{{traffic}}':
 * @property integer $id
 * @property integer $tid
 * @property string $date
 * @property string $depart_time
 * @property string $depart_city
 * @property string $arrive_time
 * @property string $arrive_city
 * @property string $flight_train_info
 * @property string $e_tickets
 */
class Traffic extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Traffic the static model class
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
		return '{{traffic}}';
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
			array('date, depart_time, arrive_time', 'length', 'max'=>50),
			array('depart_city, arrive_city, flight_train_info', 'length', 'max'=>255),
			array('e_tickets', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, tid, date, depart_time, depart_city, arrive_time, arrive_city, flight_train_info, e_tickets', 'safe', 'on'=>'search'),
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
			'date' => 'Date',
			'depart_time' => 'Depart Time',
			'depart_city' => 'Depart City',
			'arrive_time' => 'Arrive Time',
			'arrive_city' => 'Arrive City',
			'flight_train_info' => 'Flight Train Info',
			'e_tickets' => 'E Tickets',
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
		$this->tid=Yii::app()->user->getState('traffic_tid')?Yii::app()->user->getState('traffic_tid'):$this->tid;
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('tid',$this->tid);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('depart_time',$this->depart_time,true);
		$criteria->compare('depart_city',$this->depart_city,true);
		$criteria->compare('arrive_time',$this->arrive_time,true);
		$criteria->compare('arrive_city',$this->arrive_city,true);
		$criteria->compare('flight_train_info',$this->flight_train_info,true);
		$criteria->compare('e_tickets',$this->e_tickets,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}