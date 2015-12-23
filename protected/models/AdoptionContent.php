<?php

/**
 * This is the model class for table "t_adoption_content".
 *
 * The followings are the available columns in table 't_adoption_content':
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $image
 * @property integer $cat_id
 * @property integer $province_id
 * @property integer $homeland_cat
 * @property integer $rate_time
 * @property integer $rate_value
 * @property string $dateline
 */
class AdoptionContent extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return AdoptionContent the static model class
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
		return 't_adoption_content';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cat_id, province_id, homeland_cat, rate_time, rate_value', 'numerical', 'integerOnly'=>true),
			array('title, image', 'length', 'max'=>255),
			array('description, dateline', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, description, image, cat_id, province_id, homeland_cat, rate_time, rate_value, dateline', 'safe', 'on'=>'search'),
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
			'title' => 'Title',
			'description' => 'Description',
			'image' => 'Image',
			'cat_id' => 'Cat',
			'province_id' => 'Province',
			'homeland_cat' => 'Homeland Cat',
			'rate_time' => 'Rate Time',
			'rate_value' => 'Rate Value',
			'dateline' => 'Dateline',
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

		$criteria->compare('title',$this->title,true);

		$criteria->compare('description',$this->description,true);

		$criteria->compare('image',$this->image,true);

		$criteria->compare('cat_id',$this->cat_id);

		$criteria->compare('province_id',$this->province_id);

		$criteria->compare('homeland_cat',$this->homeland_cat);

		$criteria->compare('rate_time',$this->rate_time);

		$criteria->compare('rate_value',$this->rate_value);

		$criteria->compare('dateline',$this->dateline,true);

		return new CActiveDataProvider('AdoptionContent', array(
			'criteria'=>$criteria,
		));
	}
}