<?php

/**
 * This is the model class for table "{{all_contents}}".
 *
 * The followings are the available columns in table '{{all_contents}}':
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $image
 * @property integer $muslim_cat_id
 * @property integer $province_id
 * @property integer $city_id
 * @property integer $rate_time
 * @property integer $rate_value
 * @property integer $content_type
 */
class AllContents extends CActiveRecord
{
	const UPLOAD_PATH = 'images/uploads/muslim/';
	public static $muslimGuide=array(
		'0'=>'请选择China Muslim Guide分类',
		'1'=>'China Muslim in History',
		'2'=>'Mosques (masjid) in China',
		'3'=>'Halal Food (Muslim Restaurants) in China',
		'4'=>'Prayer Time',
		'5'=>'Shopping Malls in China',
	);
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return AllContents the static model class
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
		return '{{all_contents}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title,description','required'),
			array('muslim_cat_id, province_id, city_id, rate_time, rate_value, hot, content_type', 'numerical', 'integerOnly'=>true),
			array('title, image', 'length', 'max'=>255),
			array('description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, description, image, muslim_cat_id, province_id, city_id, rate_time, rate_value, content_type', 'safe', 'on'=>'search'),
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
			'title' => '标题',
			'description' => '内容',
			'image' => '缩略图',
			'muslim_cat_id' => 'Muslim 类别',
			'province_id' => '所属省份',
			'city_id' => '所属城市',
			'rate_time' => 'Rate Time',
			'rate_value' => 'Rate Value',
			'hot' => '推荐',
			'content_type' => 'Content Type',
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
		$criteria->compare('muslim_cat_id',$this->muslim_cat_id);
		$criteria->compare('province_id',$this->province_id);
		$criteria->compare('city_id',$this->city_id);
		$criteria->compare('rate_time',$this->rate_time);
		$criteria->compare('rate_value',$this->rate_value);
		$criteria->compare('hot',$this->hot);
		$criteria->compare('content_type',$this->content_type);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function beforeSave(){
		if(parent::beforeSave()){
			$this->content_type=1;
			return true;
		}
	}
	
 	public function behaviors(){
    return array(
      'UploadBehavor' => array(
        'class' => 'application.models.UploadBehavior',
        'attribute' => 'image',
        'uploadPath' => self::UPLOAD_PATH,
      ),
    );
  }
}