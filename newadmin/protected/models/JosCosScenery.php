<?php

/**
 * This is the model class for table "jos_cos_scenery".
 *
 * The followings are the available columns in table 'jos_cos_scenery':
 * @property integer $id
 * @property integer $provinceid
 * @property integer $cityid
 * @property string $province_name
 * @property string $city_name
 * @property integer $districtid
 * @property integer $categoreid
 * @property string $cat_path
 * @property string $name
 * @property string $url
 * @property integer $grade
 * @property double $price
 * @property string $description
 * @property string $notes
 * @property string $remark
 * @property string $ufile
 * @property string $filedir
 * @property string $seo_title
 * @property string $seo_key
 * @property string $seo_description
 * @property integer $published
 * @property integer $hot
 * @property integer $update_route
 */
class JosCosScenery extends CActiveRecord
{
	const UPLOAD_PATH = 'images/uploads/scenery/';
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return JosCosScenery the static model class
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
		return 'jos_cos_scenery';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('provinceid, cityid, categoreid, cat_path, name, grade, description, notes, remark, ufile, filedir, seo_title, seo_key, seo_description', 'required'),
			array('description', 'required'),
			array('provinceid, cityid,index_recommend, districtid, categoreid, grade, published, hot, update_route', 'numerical', 'integerOnly'=>true),
			array('price', 'numerical'),
			array('province_name, city_name', 'length', 'max'=>50),
			array('cat_path', 'length', 'max'=>30),
			array('name, filedir', 'length', 'max'=>100),
			array('url', 'length', 'max'=>150),
			array('ufile, seo_title, seo_key, seo_description', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, provinceid, cityid, province_name, city_name, districtid, categoreid, cat_path, name, url, grade, price, description, notes, remark, ufile, filedir, seo_title, seo_key, seo_description, published, hot, update_route', 'safe', 'on'=>'search'),
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
			'provinceid' => '省份',
			'cityid' => '城市',
			'province_name' => '省份名称',
			'city_name' => '城市名称',
			'districtid' => '区域',
			'categoreid' => '二级分类',
			'cat_path' => '分类',
			'name' => '景点名称',
			'url' => 'Url',
			'grade' => 'Grade',
			'price' => '价格',
			'description' => 'Description',
			'notes' => 'Notes',
			'remark' => 'Remark',
			'ufile' => 'Ufile',
			'filedir' => 'Filedir',
			'seo_title' => 'Seo Title',
			'seo_key' => 'Seo Key',
			'seo_description' => 'Seo Description',
			'published' => 'Published',
			'hot' => 'Hot',
			'update_route' => 'Update Route',
			'index_recommend'=> '景点首页推荐',
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
		$criteria->compare('city_name',$this->city_name,true);
		$criteria->compare('districtid',$this->districtid);
		$criteria->compare('categoreid',$this->categoreid);
		$criteria->compare('cat_path',$this->cat_path,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('grade',$this->grade);
		$criteria->compare('price',$this->price);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('notes',$this->notes,true);
		$criteria->compare('remark',$this->remark,true);
		$criteria->compare('ufile',$this->ufile,true);
		$criteria->compare('filedir',$this->filedir,true);
		$criteria->compare('seo_title',$this->seo_title,true);
		$criteria->compare('seo_key',$this->seo_key,true);
		$criteria->compare('seo_description',$this->seo_description,true);
		$criteria->compare('published',$this->published);
		$criteria->compare('hot',$this->hot);
		$criteria->compare('update_route',$this->update_route);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function getOneCategoryList(){		
		$list=Yii::app()->db->createCommand("SELECT id,title FROM jos_categories where parent_id=0 AND section LIKE 'com_scenery'")->queryAll();
		return CHtml::listData($list, 'id', 'title');
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