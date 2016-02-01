<?php

/**
 * This is the model class for table "{{cruise_porst_type}}".
 *
 * The followings are the available columns in table '{{cruise_porst_type}}':
 * @property integer $id
 * @property integer $cid
 * @property integer $pid
 * @property string $schedule
 * @property string $tour_type_ids
 */
class CruisePorstType extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CruisePorstType the static model class
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
		return 't_cruise_porst_type';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'length', 'max'=>5000),
			array('cid, pid', 'numerical', 'integerOnly'=>true),
			array('schedule', 'length', 'max'=>5000),
			array('tour_type_ids', 'length', 'max'=>2000),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id,name, cid, pid, schedule, tour_type_ids', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'cid' => 'Cid',
			'pid' => 'Pid',
			'schedule' => 'Schedule',
			'tour_type_ids' => 'Tour Type Ids',
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

		$this->cid = Yii::app()->user->getState('CruisePorstTypeCid') ? Yii::app()->user->getState('CruisePorstTypeCid') : $this->cid;
		
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('cid',$this->cid);
		$criteria->compare('pid',$this->pid);
		$criteria->compare('schedule',$this->schedule,true);
		$criteria->compare('tour_type_ids',$this->tour_type_ids,true);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function getAllCruisePorstType(){
		$cruiseports = self::model()->findAll(array(
			'select' => 'id,name,cid,pid,schedule,tour_type_ids',
		));
		foreach($cruiseports as $v){     	
				$arr[$v->cid][] = $v;
		}
		$arr[999] = 'Cruise Faq';
		return $arr;
	}
}