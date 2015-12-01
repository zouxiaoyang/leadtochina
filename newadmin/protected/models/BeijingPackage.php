<?php

/**
 * This is the model class for table "{{beijing_package}}".
 *
 * The followings are the available columns in table '{{beijing_package}}':
 * @property string $id
 * @property integer $package_id
 * @property integer $cat_id
 * @property integer $province_id
 * @property string $description
 * @property string $ufile
 */
class BeijingPackage extends CActiveRecord
{
	const UPLOAD_PATH = 'images/uploads/bejingPackage/';
	static $category=array(
		'name'=>array(
			'0'=>'请选择分类',
			'1'=>'幻灯',
			'2'=>'Private Tours',
			'3'=>'Group Tours',
			'4'=>'Great Wall',
			'5'=>'Forbidden City',
			'6'=>'Hutong',
			'7'=>'Beijing Xi\'an',
			'8'=>'Beijing Shanghai',
			'9'=>'Beijing Tianjin',
			'10'=>'China Tours From',
		),
		'description'=>array(
			'4'=>'The Great Wall was a great defense project in ancient time and it embodied the ancient people of strong will and high intelligence',
			'5'=>'Located at the center of Beijing, it was the imperial palace of the Ming and Qing dynasties.',
			'6'=>'It is said that the real culture of Beijing is "the culture of hutong and courtyard in it".',
			'7'=>"Beijing amd Xian, the two most historically significant cities, have the most world heritages in China. These two cities are the paradise for culture and history enthusiast. It only takes 1.5 hour from Beijing to Xian by flight.",
			'8'=>'Beijing is the capital of China as well as political and cultural center. Shanghai is a amazing metropolis with rich history and culture. We start the exciting tour from Beijing city, surely your tour is not complete without a Shanghai visit.',
			'9'=>"Beijing, the most historically significant cities, has the most world heritages in China. Tianjin is only second to Shanghai, becoming the second largest commercial city in China and the biggest financial and trading center in north China. ",
		),
	);
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return BeijingPackage the static model class
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
		return '{{beijing_package}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('package_id', 'required'),
			array('package_id, cat_id, province_id, hot', 'numerical', 'integerOnly'=>true),
			array('ufile', 'length', 'max'=>50),
			array('title,url,destination,description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, package_id, title, cat_id, province_id, description, ufile', 'safe', 'on'=>'search'),
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
			'package_id' => '关联行程ID',
			'title'=>'标题',
			'url'=>'幻灯URL',
			'cat_id' => '选择类别',
			'province_id' => 'Province',
			'destination'=>'Destination',
			'description' => '描述',
			'ufile' => '图片',
			'hot'=>'热门推荐',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('package_id',$this->package_id);
		$criteria->compare('title',$this->title);
		$criteria->compare('cat_id',$this->cat_id);
		$criteria->compare('province_id',$this->province_id);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('ufile',$this->ufile,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function getBeijingIndexPackages(){
		return Yii::app()->db->createCommand("select a.id,a.url,a.title,a.cat_id,a.destination,a.description,a.ufile,a.hot,b.id,b.name,b.price from t_beijing_package a left join jos_cos_tours_package b on a.package_id=b.id ")->queryAll();
	}
	  
	public function behaviors(){
	    return array(
	      'UploadBehavor' => array(
	        'class' => 'application.models.UploadBehavior',
	        'attribute' => 'ufile',
	        'uploadPath' => self::UPLOAD_PATH,
	      ),
	    );
  }
}