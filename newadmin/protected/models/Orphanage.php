<?php

/**
 * This is the model class for table "{{orphanage}}".
 *
 * The followings are the available columns in table '{{orphanage}}':
 * @property integer $id
 * @property integer $provinceid
 * @property string $arranged_info
 * @property string $approval_info
 * @property string $fee_info
 */
class Orphanage extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Orphanage the static model class
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
		return '{{orphanage}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('provinceid', 'numerical', 'integerOnly'=>true),
			array('arranged_info, approval_info, fee_info', 'length', 'max'=>500),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, provinceid, arranged_info, approval_info, fee_info', 'safe', 'on'=>'search'),
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
			'provinceid' => 'Provinceid',
			'arranged_info' => 'Arranged Info',
			'approval_info' => 'Approval Info',
			'fee_info' => 'Fee Info',
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
		$criteria->compare('provinceid',$this->provinceid);
		$criteria->compare('arranged_info',$this->arranged_info,true);
		$criteria->compare('approval_info',$this->approval_info,true);
		$criteria->compare('fee_info',$this->fee_info,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}