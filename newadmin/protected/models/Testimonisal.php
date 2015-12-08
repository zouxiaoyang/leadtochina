<?php

/**
 * This is the model class for table "jos_cos_testimonisal".
 *
 * The followings are the available columns in table 'jos_cos_testimonisal':
 * @property integer $id
 * @property integer $city_id
 * @property integer $packageid
 * @property string $name
 * @property string $nationnality
 * @property string $tour_time
 * @property integer $type
 * @property string $pic_name
 * @property string $title
 * @property string $description
 * @property string $pic_alt
 * @property integer $recomment
 * @property string $created
 */
class Testimonisal extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Testimonisal the static model class
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
		return 'jos_cos_testimonisal';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('city_id, packageid, type, recomment', 'numerical', 'integerOnly'=>true),
			array('name, nationnality, title', 'length', 'max'=>100),
			array('tour_time', 'length', 'max'=>50),
			array('pic_name, pic_alt', 'length', 'max'=>255),
			array('created', 'length', 'max'=>20),
			array('description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, city_id, packageid, name, nationnality, tour_time, type, pic_name, title, description, pic_alt, recomment, created', 'safe', 'on'=>'search'),
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
			'city_id' => 'City',
			'packageid' => 'Packageid',
			'name' => 'Name',
			'nationnality' => 'Nationnality',
			'tour_time' => 'Tour Time',
			'type' => 'Type',
			'pic_name' => 'Pic Name',
			'title' => 'Title',
			'description' => 'Description',
			'pic_alt' => 'Pic Alt',
			'recomment' => 'Recomment',
			'created' => 'Created',
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
		$criteria->compare('city_id',$this->city_id);
		$criteria->compare('packageid',$this->packageid);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('nationnality',$this->nationnality,true);
		$criteria->compare('tour_time',$this->tour_time,true);
		$criteria->compare('type',$this->type);
		$criteria->compare('pic_name',$this->pic_name,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('pic_alt',$this->pic_alt,true);
		$criteria->compare('recomment',$this->recomment);
		$criteria->compare('created',$this->created,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}