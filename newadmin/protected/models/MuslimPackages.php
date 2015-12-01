<?php

/**
 * This is the model class for table "{{all_packages}}".
 *
 * The followings are the available columns in table '{{all_packages}}':
 * @property string $id
 * @property integer $package_id
 * @property integer $muslim_cat_id
 * @property integer $province_id
 * @property integer $city_id
 * @property integer $package_type
 */
class MuslimPackages extends CActiveRecord
{
	public static $chinaMuslimTourCategory=array(
		'0'=>'请选择China Muslim Tours类别',
		'1'=>'Classical China Muslim Tour',
		'2'=>'China Silk Road Muslim Tour',
		'3'=>'China Tibet Muslim Tour',
		'4'=>'China Muslim Shopping Tours',
	);
	public static $chinaMuslimTourDes=array(
		'1'=>"Islam has been practiced in China for over 1300 years. Mosques with traditional Chinese architecture started to be built nationwide since then. Muslim Experience Tours will take you to the areas where Chinese Muslim inhabited and you will be able to visit Muslim families and communicate with Chinese Muslims face to face.",
		'2'=>"1357 years ago, caravans brought Arabic traders and Islam to China and Islam began to flourish in this ancient country since then. East meets West on the Silk Road; China Silk Road Muslim Tour Packages will bring you to experience the vast Wild West of China and the unique Muslim culture created by Chinese Muslims.",
		'3'=>"Being the roof of the world, the average elevation in Tibet is over 4000 meters above sea level. There are four mosques and thousands of Tibetan Muslims living in Lhasa. China Tibet Muslim Tour Packages will help you to experience harmonious life among Tibet Buddhism, Local architecture, Muslim and Muslim architecture.",
		'4'=>"Being the world factories, China has massive amounts of cheap but gorgeous products in many aspects. It's definitely easy to find dazzling tourist souvenirs on streets, in markets and even near attractions. With China Muslim Shopping Tour, you will find the funny of buying souvenirs with bargaining and slashing the price.",
	);

	public static $recommend = array(
		'否',
		'是'
		);

		/**
		 * Returns the static model of the specified AR class.
		 * @param string $className active record class name.
		 * @return AllPackages the static model class
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
			return '{{muslim_packages}}';
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
			array('package_id, muslim_cat_id, province_id, city_id, package_type', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, package_id, muslim_cat_id, province_id, city_id, package_type', 'safe', 'on'=>'search'),
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
			'package_id' => '行程ID',
			'muslim_cat_id' => 'Muslim类别',
			'province_id' => '所属省份',
			'city_id' => '所属城市',
			'package_type' => '行程类别',
			);
		}

		public function getMuslimChinaTour(){
			$idList=self::model()->findAll(array(
			'condition'=>'muslim_cat_id>0 AND package_type=1',
			));

			$muslimChinaTour=array();
			foreach ($idList as $k=>$v){
				$packageInfo=Yii::app()->db->createCommand("select a.*,b.url from jos_cos_tours_package a LEFT JOIN jos_cos_route b ON a.id=b.packageid where a.id=".(int)$v->package_id)->queryAll();
				$muslimChinaTour[$v->muslim_cat_id][]=$packageInfo[0];
			}
			return $muslimChinaTour;
		}

		public function getMuslimCityTours($cityId){
			$tourIds=self::model()->findAll(array(
			'select'=>'package_id',
			'condition'=>'package_type=1 AND city_id='.$cityId,
			));
			$tourIdarr=array();
			foreach ($tourIds as $v){
				$tourIdarr[]=$v->package_id;
			}
			$tourIdstr="(".implode(',', $tourIdarr).")";
			$sql="select a.*,b.url from jos_cos_tours_package a LEFT JOIN jos_cos_route b ON a.id=b.packageid where a.id in $tourIdstr";
			$packageInfos=Yii::app()->db->createCommand($sql)->queryAll();
			return $packageInfos;
		}

		public function getMuslimCities(){
			$muslimCityIds=self::model()->findAll(array(
			'select'=>'city_id',
			'condition'=>'city_id>0 AND package_type=1',
			'group'=>'city_id',
			));
			$muslimCityList=array();
			foreach ($muslimCityIds as $k=>$v){
				$cityInfo=JosCosCity::model()->find(array(
				'select'=>'id,name',
				'condition'=>'id='.$v->city_id,
				));
				$packageCount=self::model()->findAll(array(
				'condition'=>'city_id='.$v->city_id,
				));
				$muslimCityList[$cityInfo->id]['name']=$cityInfo->name;
				$muslimCityList[$cityInfo->id]['packageCount']=count($packageCount);
			}
			return $muslimCityList;
		}


		public function getAjaxCityTours(){
			$cityName=$_GET['cityName'];
			$cityId=JosCosCity::model()->find(array(
				'condition'=>"name='".$cityName."'",
			))->id;
			$cityTours=MuslimPackages::model()->findAll(array(
				'condition'=>'city_id='.$cityId,
			));
			$packageIds=array();
			foreach ($cityTours as $k=>$v){
				if($k>3)break;
				$packageIds[]=$v->package_id;
			}
			$packageIdsStr="(".implode(',', $packageIds).")";
			$sql="select a.*,b.url from jos_cos_tours_package a LEFT JOIN jos_cos_route b ON a.id=b.packageid where a.id in $packageIdsStr";
			$packageInfos=Yii::app()->db->createCommand($sql)->queryAll();
			$returnHtml='';
			foreach ($packageInfos as $k=>$v){
				if ($v['url']) $url = $v['url']; else $url = "/index.php?option=com_showpc&view=default&Itemid=137&pcid=" . $v['id'];
				$tourName=$v['name'];
				$route=$v['route'];
				$price=SiteUtils::getCurrencyPrice($v['price']);
				$image=$v['filedir'].$v['pic'];
				$returnHtml.="<ul>";
		           $returnHtml.="<li class='pic'><a href='{$url}'><img src='/{$image}' alt='{$tourName}' /></a></li>";
		           $returnHtml.="<li><a href='{$url}' title='{$tourName}'>".substr($tourName,0,30)."...</a>";
	               $returnHtml.="[Destination: {$route}]<br />";
	               $returnHtml.="From:<span>".$price."</span> p/p";
	               $returnHtml.="</li>";
	        	 $returnHtml.="</ul>";
			}
			$returnHtml.="<span style='clear:left;float:right;margin-top:10px;margin-right:10px;'><a href='".Yii::app()->createUrl('muslimTour/muslimCityTour', array('cityid'=>$cityId,'title'=>SiteUtils::stringURLSafe($cityName.'-muslim-tour')))."' style='color:red;'>More ".$cityName." Muslim Tours</a></span>";
			echo $returnHtml;
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
			$criteria->compare('muslim_cat_id',$this->muslim_cat_id);
			$criteria->compare('province_id',$this->province_id);
			$criteria->compare('city_id',$this->city_id);
			$criteria->compare('package_type',$this->package_type);

			return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
		}

		public function beforeSave(){
			if(parent::beforeSave()){
				$this->package_type=1;
				return true;
			}
		}
}
