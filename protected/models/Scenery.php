<?php

/**
 * This is the model class for table "{{scenery}}".
 *
 * The followings are the available columns in table '{{scenery}}':
 * @property integer $id
 * @property integer $provinceid
 * @property integer $cityid
 * @property string $province_name
 * @property string $browse_time
 * @property string $city_name
 * @property integer $districtid
 * @property string $name
 * @property double $price
 * @property string $description
 * @property string $ufile
 * @property string $filedir
 * @property integer $published
 * @property integer $hot
 * @property integer $update_route
 */
class Scenery extends CActiveRecord
{
   const UPLOAD_PATH = 'images/uploads/scenery/';
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Scenery the static model class
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
		return '{{scenery}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cityid,districtid,name, description', 'required'),
			array('provinceid, cityid, districtid, published, hot, update_route', 'numerical', 'integerOnly'=>true),
			array('price', 'numerical'),
			array('province_name, city_name', 'length', 'max'=>50),
			array('browse_time', 'length', 'max'=>200),
			array('name, filedir', 'length', 'max'=>100),
			array('ufile', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, provinceid, cityid, province_name, browse_time, city_name, districtid, name, price, description, ufile, filedir, published, hot, update_route', 'safe', 'on'=>'search'),
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
			//'district_name'=>array(self::BELONGS_TO, 'jos_cos_district', 'name'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'provinceid' => '省份',
			'cityid' => '城市',
			'province_name' => '省份名',
			'browse_time' => '游览时间',
			'city_name' => '城市名',
			'districtid' => '区域',
			'name' => '景点名称',
			'price' => '价格',
			'description' => 'Description',
			'ufile' => 'Ufile',
			'filedir' => 'Filedir',
			'published' => 'Published',
			'hot' => 'Hot',
			'update_route' => 'Update Route',
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
		$criteria->compare('cityid',$this->cityid);
		$criteria->compare('province_name',$this->province_name,true);
		$criteria->compare('browse_time',$this->browse_time,true);
		$criteria->compare('city_name',$this->city_name,true);
		$criteria->compare('districtid',$this->districtid);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('price',$this->price);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('ufile',$this->ufile,true);
		$criteria->compare('filedir',$this->filedir,true);
		$criteria->compare('published',$this->published);
		$criteria->compare('hot',$this->hot);
		$criteria->compare('update_route',$this->update_route);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'Pagination' => array (
                  'PageSize' => Yii::app()->user->getState('PageSize',Yii::app()->params['defaultPageSize'])
              ),
		));
	}

	static function getProvinceList()
	{
		$db = Yii::app()->db;
		$list = $db->createCommand('select id,name from jos_cos_province order by name asc')->queryAll();
		return CHtml::listData($list, 'id', 'name');
	}

	public function getCityById($cityid)
	{
		$db = Yii::app()->db;
		$city = Yii::app()->db->createCommand('select id,name from jos_cos_city where id=:cityid')->bindValue('cityid',$cityid)->queryRow();
		return $city;
	}

	public function searchScenery($searchName)
	{
		$criteria=new CDbCriteria;
		$criteria->select='id,name';
		$criteria->condition='name LIKE :name';
		$criteria->params = array(':name'=>'%'.$searchName.'%');
		$sceneries = Scenery::model()->findAll($criteria); 
		foreach($sceneries as $v){
			$ret .= "{$v->id}|{$v->name}\n";
		}
		return $ret;
		/*
		foreach($sceneries as $v){
			$ret[] = array('to'=>$v->id,'name'=>$v->name);
		}
		return $ret;
		*/
		//return CHtml::listData($sceneries, 'id', 'name');
	}

	public function beforeSave()
	{
		if(parent::beforeSave()){
			$provinceList = $this->getProvinceList();
			$this->province_name = $provinceList[$this->provinceid];
			$city = $this->getCityById($this->cityid);
			$this->city_name = $city['name'];
			return true;
		}
	}
	
	
	public function getDistrictName($id){
		$db = Yii::app()->db;
		//$district=Yii::app()->db->createCommand('select name from jos_cos_district where id=:id')->bindValue('id',$id)->queryRow();
		$district=Yii::app()->db->createCommand("select name from jos_cos_district where id=$id")->queryRow();
		return $district['name'];
	}
	
	public function getSceneryName($arr_scenery_ids){
		$scenery_arr =Scenery::model()->findAllByPk($arr_scenery_ids);
		$sceneries="";
		foreach ($scenery_arr as $v){
			$sceneries.=$v->name.", ";
		}
		return rtrim($sceneries,", ");		
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
