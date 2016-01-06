<?php

/**
 * This is the model class for table "{{package}}".
 *
 * The followings are the available columns in table '{{package}}':
 * @property string $id
 * @property integer $package_id
 * @property integer $cat_id
 * @property integer $province_id
 */
class AdoptionPackage extends CActiveRecord
{
	static $theme_category=array(
		'title'=>array(
			0=>'请选择分类',
			1=>'China Recreational Facilites and Zoo Tour',
			2=>'China Homeland Heritage Tour',
			3=>'Panda Heritage Tour',
			4=>'China Metropolis and Watertown Tour',
			5=>'China Yangtze Cruise',
			6=>'Ancient Silk Road Tour'
		),
		'description'=>array(
			1=>'Most zoos in China have large number of species, such as elephants, gorillas, Panda. Besides, most of them have amusement facilities to please kids.',
			2=>'China World Heritage Tour Packages offer you great chance to have close touch with China\'s marvelous world heritages Relics, such as Great Wall, Forbidden  City.',
			3=>'With World Heritage and Marvelous China Natural landscape, Panda Heritage Tour would please your whole family needs covering most interests.',
			4=>'Shanghai and its surrounding watertowns with convenient transportations, unqiue characteristics, profound history and elegant gardens become the "Pearl of  the East"',
			5=>'Yangtze River, the world third largest river in the world, causes world\'s attention with the largest construction project and vanishing cultures.',
			6=>'The blood vessel connects China and West from 202 BC and lasts in centuries, which produces unprecedented prosperity in economy, culture.'
		),	
	);
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Package the static model class
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
		return 't_adoption_package';
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
			array('package_id, cat_id, province_id', 'numerical', 'integerOnly'=>true),
			array('seo_title_adoption,seo_keyword_adoption,seo_description_adoption', 'length', 'max'=>500),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, package_id, cat_id, province_id,seo_title_adoption,seo_keyword_adoption,seo_description_adoption', 'safe', 'on'=>'search'),
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
			'cat_id' => 'Theme Tour中Recommended China Tours分类',
			'province_id' => 'homeland中关联的省份',
			'seo_title_adoption' => 'Title标签',
			'seo_keyword_adoption' => 'Keywords标签',
			'seo_description_adoption' => 'description标签',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	
	public static function getRecommendpackage($id){
			$package=self::model()->find(array(
		'select'=>'package_id,seo_title_adoption,seo_keyword_adoption,seo_description_adoption',
		'condition'=>'province_id='.$id,
		));

		/*$packageInfo =Yii::app()->db->createCommand("select a.seo_title_adoption,a.seo_keyword_adoption,a.seo_description_adoption,b.* from t_adoption_package a LEFT JOIN jos_cos_tours_package b ON a.package_id=b.id where a.province_id=".(int)$id)->queryAll();*/
		
		if($package->package_id){
			//$packageInfo = ToursPackage::model()->findByPk($package->package_id);
			$packageInfo=Yii::app()->db->createCommand("select a.*,b.url from jos_cos_tours_package a LEFT JOIN jos_cos_route b ON a.id=b.packageid where a.id=".(int)$package->package_id)->queryRow();
		}
		return array(0=>$packageInfo,1=>$package);
	}
	
	public function getThemePackage(){
		$recommendPackage=self::model()->findAll(array(
			'condition'=>'cat_id>0',
		));
		$themeRecommendPackage=array();
		foreach ($recommendPackage as $k=>$v){
			$packageInfo=Yii::app()->db->createCommand("select a.*,b.url from jos_cos_tours_package a LEFT JOIN jos_cos_route b ON a.id=b.packageid where a.id=".(int)$v->package_id)->queryAll();
			$themeRecommendPackage[$v->cat_id][]=$packageInfo[0];
		}
		ksort($themeRecommendPackage);
		return $themeRecommendPackage;
	}
	
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('package_id',$this->package_id);
		$criteria->compare('cat_id',$this->cat_id);
		$criteria->compare('province_id',$this->province_id);
		$criteria->compare('seo_title_adoption',$this->seo_title_adoption);
		$criteria->compare('seo_keyword_adoption',$this->seo_keyword_adoption);
		$criteria->compare('seo_description_adoption',$this->seo_description_adoption);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
