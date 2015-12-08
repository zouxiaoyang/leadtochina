<?php

/**
 * This is the model class for table "jos_cos_city".
 *
 * The followings are the available columns in table 'jos_cos_city':
 * @property integer $id
 * @property integer $provinceid
 * @property string $name
 * @property string $shortname
 * @property string $description
 * @property string $traffic
 * @property string $weather
 * @property string $shopping
 * @property string $tips
 * @property integer $hot
 * @property string $ufile
 * @property string $filedir
 * @property integer $showroder
 * @property string $seo_title
 * @property string $seo_key
 * @property string $seo_description
 * @property integer $isupdate
 */
class JosCosCity extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return JosCosCity the static model class
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
		return 'jos_cos_city';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
		array('name', 'required'),
		array('provinceid, hot, showroder, isupdate', 'numerical', 'integerOnly'=>true),
		array('name', 'length', 'max'=>30),
		array('shortname', 'length', 'max'=>5),
		array('weather, ufile, seo_title, seo_key, seo_description, muslim_description, muslim_shop_des, muslim_mos_des, muslim_halal_des, muslim_prayer_des', 'length', 'max'=>2000),
		array('filedir', 'length', 'max'=>100),
		// The following rule is used by search().
		// Please remove those attributes that should not be searched.
		array('id, provinceid, name, shortname, description, traffic, weather, shopping, tips, hot, ufile, filedir, showroder, seo_title, seo_key, seo_description, isupdate', 'safe', 'on'=>'search'),
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
			'provinceid' => '所属省份',
			'name' => '城市名称',
			'shortname' => 'Shortname',
			'description' => 'Description',
			'muslim_description'=>'Muslim Tour城市描述',
			'muslim_shop_des'=>'Muslim shopping城市描述',
			'muslim_mos_des'=>'Muslim Mosques城市描述',
			'muslim_halal_des'=>'Muslim Halal城市描述',
			'muslim_prayer_des'=>'Muslim prayer城市描述',
			'traffic' => 'Traffic',
			'weather' => 'Weather',
			'shopping' => 'Shopping',
			'tips' => 'Tips',
			'hot' => 'Hot',
			'ufile' => 'Ufile',
			'filedir' => 'Filedir',
			'showroder' => 'Showroder',
			'seo_title' => 'Seo Title',
			'seo_key' => 'Seo Key',
			'seo_description' => 'Seo Description',
			'isupdate' => 'Isupdate',
		);
	}


	public function getMuslimRecommendCities(){
		$recommendIds="(11,14,22,116)"; //Beijing,Shanghai,Guilin,Guangzhou
		$recommendCityList=array();
		$recommendCities=self::model()->findAll(array(
			'condition'=>'id in '.$recommendIds,
		));
		foreach ($recommendCities as $k=>$v){
			$packageCount=MuslimPackages::model()->findAll(array(
				'condition'=>'city_id='.$v->id,
			));
			$recommendCityList[$k]['cityId']=$v->id;
			$recommendCityList[$k]['cityName']=$v->name;
			$recommendCityList[$k]['muslimDescription']=$v->muslim_description;
			$recommendCityList[$k]['packageCount']=count($packageCount);
		}
		return $recommendCityList;
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('shortname',$this->shortname,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('traffic',$this->traffic,true);
		$criteria->compare('weather',$this->weather,true);
		$criteria->compare('shopping',$this->shopping,true);
		$criteria->compare('tips',$this->tips,true);
		$criteria->compare('hot',$this->hot);
		$criteria->compare('ufile',$this->ufile,true);
		$criteria->compare('filedir',$this->filedir,true);
		$criteria->compare('showroder',$this->showroder);
		$criteria->compare('seo_title',$this->seo_title,true);
		$criteria->compare('seo_key',$this->seo_key,true);
		$criteria->compare('seo_description',$this->seo_description,true);
		$criteria->compare('isupdate',$this->isupdate);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function getAllHotelCities(){
		$list=self::allCities();
		$ret=array();
		foreach ($list as $k=>$v){
			$ret[substr(ucfirst(trim($v->name)),0,1)][]=$v;
		}
		ksort($ret);
		return $ret;
	}

	static function getAllcities(){
		$list=self::allCities();
		return self::swapToArray($list);
	}
	static function allCities(){
		$list=self::model()->findAll(array(
			'select'=>array('id','name'),
		));
		return $list;
	}
	static function swapToArray($obj){
		$ret=array();
		$ret[0]="请选择城市";
		foreach($obj as $k=>$v){
			$ret[$v->id]=$v->name;
		}
		return $ret;
	}
}