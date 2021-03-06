<?php

/**
 * This is the model class for table "{{index_recommend_city}}".
 *
 * The followings are the available columns in table '{{index_recommend_city}}':
 * @property integer $id
 * @property string $city_name
 * @property string $url
 * @property string $description
 * @property string $pic
 */
class IndexRecommendCity extends CActiveRecord
{

	const UPLOAD_PATH = 'images/uploads/index_recommend/';

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return IndexRecommendCity the static model class
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
		return '{{index_recommend_city}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('city_name', 'length', 'max'=>20),
			array('city_name,month', 'required'),
			array('pic', 'length', 'max'=>50),
			array('url,description', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, city_name, url, description, pic,month', 'safe', 'on'=>'search'),
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
			'city_name' => 'City Name',
			'url' => 'Url',
			'description' => 'Description',
			'pic' => 'Pic',
			'month' => 'Month',
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
		$criteria->compare('city_name',$this->city_name,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('pic',$this->pic,true);
		$criteria->compare('month',$this->month,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	 public function behaviors(){
    return array(
      'UploadBehavor' => array(
        'class' => 'application.models.UploadBehavior',
        'attribute' => 'pic',
        'uploadPath' => self::UPLOAD_PATH,
      ),
    );
  }

}
