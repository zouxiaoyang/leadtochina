<?php

/**
 * This is the model class for table "{{adoption_orphanage_address}}".
 *
 * The followings are the available columns in table '{{adoption_orphanage_address}}':
 * @property integer $id
 * @property integer $provinceid
 * @property string $province_name
 * @property string $orphanage_name
 * @property string $address
 * @property string $postal_code
 * @property string $tel
 */
class AdoptionOrphanageAddress extends CActiveRecord
{

	const UPLOAD_PATH = 'images/uploads/orphanageAddress/';

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return AdoptionOrphanageAddress the static model class
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
		return '{{adoption_orphanage_address}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('provinceid,cityid', 'numerical', 'integerOnly'=>true),
			array('province_name,city_name', 'length', 'max'=>20),
			array('orphanage_name, address, postal_code', 'length', 'max'=>255),
			array('tel', 'length', 'max'=>50),
			array('seo_title_adoption,seo_keyword_adoption,seo_description_adoption', 'length', 'max'=>500),
			array('population, features, area_code', 'length', 'max'=>100),
			array('description', 'safe'),
			array('public_content', 'safe'),

			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, provinceid, province_name, orphanage_name, address, postal_code, tel, description,seo_title,seo_keyword,seo_description', 'safe', 'on'=>'search'),
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
			'provinceid' => 'Province',
			'province_name' => 'Province Name',
			'cityid' => 'City',
			'city_name' => 'City Name',
			'orphanage_name' => 'Orphanage Name',
			'address' => 'Address',
			'postal_code' => 'Postal Code',
			'tel' => 'Tel',
			'seo_title' => 'Title标签',
			'seo_keyword' => 'Keyword标签',
			'seo_description' => 'Description标签',
			'description' => 'Overview',
			'public_content' => 'Public Content',
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
		$criteria->compare('province_name',$this->province_name,true);
		$criteria->compare('orphanage_name',$this->orphanage_name,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('postal_code',$this->postal_code,true);
		$criteria->compare('tel',$this->tel,true);
		$criteria->compare('description',$this->description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination'=>array(
          'pageSize'=>20,
       ), 
		));
	}
}
