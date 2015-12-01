<?php

/**
 * This is the model class for table "jos_categories".
 *
 * The followings are the available columns in table 'jos_categories':
 * @property integer $id
 * @property integer $parent_id
 * @property string $sce_cat_path
 * @property string $title
 * @property string $name
 * @property string $alias
 * @property integer $provinceid
 * @property integer $cityid
 * @property integer $hot
 * @property string $city
 * @property string $image
 * @property string $section
 * @property string $image_position
 * @property string $description
 * @property integer $published
 * @property string $checked_out
 * @property string $checked_out_time
 * @property string $routes
 * @property string $seo_title
 * @property string $seo_key
 * @property string $seo_description
 * @property string $ufile
 * @property string $filedir
 * @property string $jianjie
 * @property string $editor
 * @property integer $ordering
 * @property integer $access
 * @property integer $count
 * @property string $params
 */
class Categories extends CActiveRecord
{
	const UPLOAD_PATH = 'images/uploads/category/';

	static $published = array('不发布','发布');
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Categories the static model class
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
		return 'jos_categories';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
		array('title', 'required'),
		array('parent_id, provinceid, cityid, hot, published,newpublished, ordering, access, count', 'numerical', 'integerOnly'=>true),
		array('sce_cat_path, image_position', 'length', 'max'=>30),
		array('title, name, alias, image, routes, seo_title, seo_key, seo_description, ufile', 'length', 'max'=>255),
		array('city, section, editor', 'length', 'max'=>50),
		array('checked_out', 'length', 'max'=>11),
		array('filedir', 'length', 'max'=>100),
		array('checked_out_time,description,jianjie', 'safe'),
		// The following rule is used by search().
		// Please remove those attributes that should not be searched.
		array('id, parent_id, sce_cat_path, title, name, alias, provinceid, cityid, hot, city, image, section, image_position, description, published, checked_out, checked_out_time, routes, seo_title, seo_key, seo_description, ufile, filedir, jianjie, editor, ordering, access, count, params', 'safe', 'on'=>'search'),
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
			'subCategory'=>array(self::HAS_MANY,'Categories','parent_id','limit'=>'12'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'parent_id' => 'Parent',
			'sce_cat_path' => 'Sce Cat Path',
			'title' => 'Title',
			'name' => 'Name',
			'alias' => 'Alias',
			'provinceid' => 'Provinceid',
			'cityid' => 'Cityid',
			'hot' => 'Hot',
			'city' => 'City',
			'image' => 'Image',
			'section' => 'Section',
			'image_position' => 'Image Position',
			'description' => 'Description',
			'published' => 'Published',
			'newpublished' => 'Newpublished',
			'checked_out' => 'Checked Out',
			'checked_out_time' => 'Checked Out Time',
			'routes' => 'Routes',
			'seo_title' => 'Seo Title',
			'seo_key' => 'Seo Key',
			'seo_description' => 'Seo Description',
			'ufile' => 'Ufile',
			'filedir' => 'Filedir',
			'jianjie' => 'Jianjie',
			'editor' => 'Editor',
			'ordering' => '排序',
			'access' => 'Access',
			'count' => 'Count',
			'params' => 'Params',
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

		$criteria->compare('section',$this->section,true);
		if($_GET['section']){
			$this->section = $_GET['section'];
			Yii::app()->session['category_section'] = $this->section;  
			$criteria->compare('section',$this->section,true);
		}elseif(Yii::app()->session['category_section']){
			$this->section = Yii::app()->session['category_section'];
			$criteria->compare('section',$this->section,true);
		}


		$criteria->compare('id',$this->id);
		$criteria->compare('parent_id',$this->parent_id);
		$criteria->compare('sce_cat_path',$this->sce_cat_path,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('alias',$this->alias,true);
		$criteria->compare('provinceid',$this->provinceid);
		$criteria->compare('cityid',$this->cityid);
		$criteria->compare('hot',$this->hot);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('image',$this->image,true);
		
		$criteria->compare('image_position',$this->image_position,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('published',$this->published);
		$criteria->compare('newpublished',$this->newpublished);
		$criteria->compare('checked_out',$this->checked_out,true);
		$criteria->compare('checked_out_time',$this->checked_out_time,true);
		$criteria->compare('routes',$this->routes,true);
		$criteria->compare('seo_title',$this->seo_title,true);
		$criteria->compare('seo_key',$this->seo_key,true);
		$criteria->compare('seo_description',$this->seo_description,true);
		$criteria->compare('ufile',$this->ufile,true);
		$criteria->compare('filedir',$this->filedir,true);
		$criteria->compare('jianjie',$this->jianjie,true);
		$criteria->compare('editor',$this->editor,true);
		$criteria->compare('ordering',$this->ordering);
		$criteria->compare('access',$this->access);
		$criteria->compare('count',$this->count);
		$criteria->compare('params',$this->params,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


	function getCultureParentCategories($parentid,$sec=''){

		if($_GET['section']){
			$section = $_GET['section'];
			Yii::app()->session['category_section'] = $_GET['section'];
		}elseif($sec!=''){
			$section=$sec;
			Yii::app()->session['category_section'] = $sec;
		}elseif(Yii::app()->session['category_section']){
			$section = Yii::app()->session['category_section'];
		}

		$list = self::model()->findAll(array(
		'select'=>array('id,title'),
		'condition'=>"section='$section' and newpublished=1 and parent_id='$parentid'",
		));	
		$ret[0]='请选择';	
		foreach ($list as $v){
			$ret[$v->id]=$v->title;
		}
		return $ret;
	}

	function getCityPackageInfo($catId){
		$catResult=self::model()->findAll(array(
			'select'=>array('id,parent_id,title,jianjie,description,ufile,filedir,routes'),
			'condition'=>'id='.$catId.' OR parent_id='.$catId,
		    'order' => 'ordering desc',
		));
		$cityCatPackages=array();
		foreach ($catResult as $k=>$catRow){
			if(empty($catRow->parent_id)){
				if($catRow->id!=81){
					continue;
				}else{
					$catRow->description="";
				}
			}
			$cityCatPackages[$k]['ufile']='/'.$catRow->filedir."/".$catRow->ufile;
			$cityCatPackages[$k]['title']=$catRow->title;
			$cityCatPackages[$k]['description']=$catRow->description;
			$cityCatPackages[$k]['jianjie'] = $catRow->jianjie;
			$childId=$catRow->id;
			$cityCatPackages[$k]['tours']=Yii::app()->db->createCommand("SELECT id,package_type,price_serialize,categorieid_str,name,route,price,days,ufile FROM jos_cos_tours_package WHERE FIND_IN_SET($childId,categorieid_str) order by days asc")->queryAll();
		//echo "<p>$catRow->title</p>";	
//echo ("SELECT id,package_type,price_serialize,categorieid_str,name,route,price,days,ufile FROM jos_cos_tours_package WHERE FIND_IN_SET($childId,categorieid_str) order by days asc");
	}

		return $cityCatPackages;
	}
	
	public function getAttractionCategory(){
		return self::model()->with('subCategory')->findAll(array(
			'alias'=>'a',
			'select'=>array('a.id,subCategory.id,subCategory.title'),
			'condition'=>"a.parent_id=0 AND a.section LIKE 'com_scenery'",
		));
	}
	public function getCultureCategory(){
		return self::model()->with('subCategory')->findAll(array(
			'alias'=>'a',
			//'select'=>array('a.id,subCategory.id,subCategory.title'),
			'condition'=>"a.parent_id=0 AND a.newpublished=1 AND a.section ='com_chinaculture'",
			'order'=>'a.ordering asc',
		));		
	}
	
	public function getSubCategoryList($oneCatId){
		return self::model()->with('subCategory')->findAll(array(
			'alias'=>'a',
			'condition'=>"a.newpublished=1 AND a.parent_id=$oneCatId",
			'order'=>'a.ordering asc,subCategory.ordering asc'
		));
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
