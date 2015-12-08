<?php

/**
 * This is the model class for table "jos_cos_hotel".
 *
 * The followings are the available columns in table 'jos_cos_hotel':
 * @property integer $id
 * @property string $name
 * @property string $hotel_addr
 * @property integer $provinceid
 * @property integer $cityid
 * @property string $province_name
 * @property string $city_name
 * @property integer $districtid
 * @property integer $hotel_grade
 * @property integer $classica
 * @property double $standard
 * @property double $double
 * @property string $description
 * @property string $service
 * @property string $food
 * @property integer $brandid
 * @property string $surrounding
 * @property string $features
 * @property string $ufile
 * @property string $filedir
 * @property string $lon
 * @property string $lat
 * @property string $seo_title
 * @property string $seo_key
 * @property string $seo_description
 * @property integer $hot
 */
class JosCosHotel extends CActiveRecord
{
	const UPLOAD_PATH = 'images/uploads/hotel/';
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return JosCosHotel the static model class
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
		return 'jos_cos_hotel';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name,provinceid,cityid,province_name,city_name', 'required'),
			array('provinceid, cityid, districtid, hotel_grade, classica, brandid, hot', 'numerical', 'integerOnly'=>true),
			array('standard, double', 'numerical'),
			array('name, hotel_addr, filedir', 'length', 'max'=>100),
			array('province_name, city_name', 'length', 'max'=>50),
			array('ufile', 'length', 'max'=>25),
			array('lon, lat', 'length', 'max'=>30),
			array('seo_title, seo_key, seo_description', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, hotel_addr, provinceid, cityid, province_name, city_name, districtid, hotel_grade, classica, standard, double, description, service, food, brandid, surrounding, features, ufile, filedir, lon, lat, seo_title, seo_key, seo_description, hot', 'safe', 'on'=>'search'),
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
			'districtName'=>array(self::BELONGS_TO,'JosCosDistrict','districtid'),
			'hotelPrice'=>array(self::HAS_MANY,'JosCosRoomType','hotelid'),
			'hotelPics'=>array(self::HAS_MANY,'JosCosHotelpic','hotelid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => '酒店名称',
			'hotel_addr' => '酒店地址',
			'provinceid' => '所属省份',
			'cityid' => '所属城市',
			'province_name' => '省份名称',
			'city_name' => '城市名称',
			'districtid' => 'Districtid',
			'hotel_grade' => '酒店星级',
			'classica' => 'Classica',
			'standard' => 'Standard',
			'double' => 'Double',
			'description' => '描述简介',
			'service' => 'Service',
			'food' => 'Food',
			'brandid' => 'Brandid',
			'surrounding' => 'Surrounding',
			'features' => 'Features',
			'ufile' => '缩略图',
			'filedir' => 'Filedir',
			'lon' => 'Lon',
			'lat' => 'Lat',
			'seo_title' => 'Reviews图片',
			'seo_key' => 'Tripadvisor链接',
			'seo_description' => 'Seo Description',
			'hot' => '是否推荐',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('hotel_addr',$this->hotel_addr,true);
		$criteria->compare('provinceid',$this->provinceid);
		$criteria->compare('cityid',$this->cityid);
		$criteria->compare('province_name',$this->province_name,true);
		$criteria->compare('city_name',$this->city_name,true);
		$criteria->compare('districtid',$this->districtid);
		$criteria->compare('hotel_grade',$this->hotel_grade);
		$criteria->compare('classica',$this->classica);
		$criteria->compare('standard',$this->standard);
		$criteria->compare('double',$this->double);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('service',$this->service,true);
		$criteria->compare('food',$this->food,true);
		$criteria->compare('brandid',$this->brandid);
		$criteria->compare('surrounding',$this->surrounding,true);
		$criteria->compare('features',$this->features,true);
		$criteria->compare('ufile',$this->ufile,true);
		$criteria->compare('filedir',$this->filedir,true);
		$criteria->compare('lon',$this->lon,true);
		$criteria->compare('lat',$this->lat,true);
		$criteria->compare('seo_title',$this->seo_title,true);
		$criteria->compare('seo_key',$this->seo_key,true);
		$criteria->compare('seo_description',$this->seo_description,true);
		$criteria->compare('hot',$this->hot);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function getIndexCityHotels(){
		/*
		$CityHotellist=self::model()->findAll(array(
			'alias'=>'a',
			'select'=>array('a.*,b.name as districtName'),
			'join'=>'LEFT JOIN jos_cos_district AS b ON a.districtid=b.id',
			'condition'=>'city_name IN("Beijing","Shanghai","Xian","Guangzhou") AND hot=1',
			//'group'=>'a.id',
			'order'=>'cityid asc',
		));
		*/
		$CityHotelList=Yii::app()->db->createCommand('SELECT a.*,b.name as districtName FROM `jos_cos_hotel` `a` LEFT JOIN jos_cos_district AS b ON a.districtid=b.id WHERE city_name IN("Beijing","Shanghai","Xian","Guangzhou") AND hot=1 ORDER BY cityid asc')->queryAll();
		$indexCityHotelList=array();
		$retList=array();
		foreach ($CityHotelList as $k=>$v){
			$indexCityHotelList[$v['city_name']][]=$v;
		}		
		$retList['Beijing']=$indexCityHotelList['Beijing'];
		$retList['Shanghai']=$indexCityHotelList['Shanghai'];
		$retList['Xian']=$indexCityHotelList['Xian'];
		$retList['Guangzhou']=$indexCityHotelList['Guangzhou'];
		return $retList;
	}
	
	public function getHotels($cityid){
		$criteria = new CDbCriteria(array(
			'alias'=>'a',	
			'condition'=>'a.cityid='.$cityid,
			//'with'=>array('districtName'),
		));
		
		return new CActiveDataProvider('JosCosHotel', array(
			'pagination'=>array(
				'pageSize'=>7,
		),
		'criteria'=>$criteria,
		));
	}
	
	public function getSearchHotelList(){
		$condition=array();
		if($_GET['city']){
			$condition[]='city_name LIKE "%'.addslashes(trim($_GET['city'])).'%"';
		}
		if($_GET['hotelname']){
			$condition[]='a.name LIKE "%'.addslashes($_GET['hotelname']).'%"';
		}
		if($_GET['starttime']){
			Yii::app()->user->setState('orderStarttime',$_GET['starttime']);
		}
		if($_GET['endtime']){
			Yii::app()->user->setState('orderEndtime',$_GET['endtime']);
		}
		if($_GET['rooms3']){
			Yii::app()->user->setState('orderRooms',$_GET['rooms3']);
		}
		if($_GET['guests']){
			Yii::app()->user->setState('orderGuests',$_GET['guests']);
		}
		/*
		switch($_GET['price']){
		    case 1:
		      $condition[] = "b.price>=250";
		      break;
		    case 2:
		      $condition[] = "b.price>=150 AND b.price<=249";
		      break;
		    case 3:
		      $condition[] = "b.price>=80 AND b.price<=149";
		      break;
		    case 4:
		      $condition[] = "b.price<80";
		      break;
		    default: 
		      break;
		  }
		  */
		switch($_GET['hotelclass']){
		    case 1:
		      $condition[] = "hotel_grade=136";
		      break;
		    case 2:
		      $condition[] = "hotel_grade=137";
		      break;
		    case 3:
		      $condition[] = "hotel_grade=138";
		      break;
		    default: 
		      break;
		  }
		$criteria = new CDbCriteria(array(
			'alias'=>'a',
			//'join'=>'LEFT JOIN jos_cos_room_type AS b ON c.id=b.hotelid',
			'condition'=>implode(' AND ', $condition),
			'order'=>'hotel_grade DESC',
			//'group' => 'c.id',
			/*
			'with'=>array(
			array('hotelPrice'),
			array('districtName'),
			),
			*/
			'with'=>array('districtName'),
		));
		
		return new CActiveDataProvider('JosCosHotel', array(
			'pagination'=>array(
				'pageSize'=>7,
			),
			'criteria'=>$criteria,
		));
	}
	
	public function getHotelDetail($id){
		$hotelDetail=self::model()->with(array(
			//array('hotelPrice'),
			array('districtName'),
			array('hotelPics'),
		))->findByPk($id);
		return $hotelDetail;
	}
	
	public function getTours($cityid){
		$packageTours=Yii::app()->db->createCommand("select a.name,a.id,b.url from jos_cos_tours_package 
			a LEFT JOIN jos_cos_route b ON a.id=b.packageid 
			LEFT JOIN jos_categories c ON a.category_parentid=c.id 
			LEFT JOIN jos_cos_city d ON c.cityid=d.id 
			WHERE d.id='$cityid' AND a.package_type=2 AND a.days>1 AND a.days<6 ORDER BY a.days DESC LIMIT 4")->queryAll();
		return $packageTours;
	}
	
	public function getSceneryList($val){
		$sceneryList=Yii::app()->db->createCommand("SELECT * FROM jos_cos_scenery WHERE published=1 and cityid='".$val."' ORDER BY id ASC,hot DESC LIMIT 10")->queryAll();
		return $sceneryList;
	}
	
 	public function getPic($pic)
 	{
    	return Chtml::image(ImageUtils::getThumbnail(self::UPLOAD_PATH.$pic,'140x140'),'');
 	}
	
	public function behaviors(){
    return array(
      'UploadBehavor' => array(
        'class' => 'application.models.UploadBehavior',
        'attribute' => 'seo_title',
        'uploadPath' => self::UPLOAD_PATH,
      ),
    );
  }
}
