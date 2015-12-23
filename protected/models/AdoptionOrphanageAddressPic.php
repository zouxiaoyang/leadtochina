<?php

/**
 * This is the model class for table "t_adoption_orphanage_address_pic".
 *
 * The followings are the available columns in table 't_adoption_orphanage_address_pic':
 * @property integer $id
 * @property integer $oid
 * @property string $title
 * @property string $pic
 */
class AdoptionOrphanageAddressPic extends CActiveRecord
{
	const UPLOAD_PATH = 'images/uploads/orphanageAddress/';
	/**
	 * Returns the static model of the specified AR class.
	 * @return AdoptionOrphanageAddressPic the static model class
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
		return 't_adoption_orphanage_address_pic';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('oid', 'numerical', 'integerOnly'=>true),
			array('title, pic', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, oid, title, pic', 'safe', 'on'=>'search'),
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
			'id' => 'Id',
			'oid' => 'Oid',
			'title' => 'Title',
			'pic' => 'Pic',
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

		$criteria->compare('oid',$this->oid);

		$criteria->compare('title',$this->title,true);

		$criteria->compare('pic',$this->pic,true);

		return new CActiveDataProvider('AdoptionOrphanageAddressPic', array(
			'criteria'=>$criteria,
		));
	}
}