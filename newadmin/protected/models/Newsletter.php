<?php

/**
 * This is the model class for table "{{newsletter}}".
 *
 * The followings are the available columns in table '{{newsletter}}':
 * @property integer $id
 * @property string $top_tour_cities
 * @property string $banner
 * @property string $more_china_tours
 * @property string $more_banner
 * @property string $theme_tours
 */
class Newsletter extends CActiveRecord
{

  const UPLOAD_PATH = 'images/uploads/newsletter/';

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Newsletter the static model class
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
		return '{{newsletter}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('banner, more_banner', 'length', 'max'=>20),
			array('top_tour_cities, more_china_tours, theme_tours, more_banner_link, banner_link', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, top_tour_cities, banner, more_china_tours, more_banner, theme_tours', 'safe', 'on'=>'search'),
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
			'top_tour_cities' => 'Top 8 China Tourists Cities：',
			'banner' => 'Banner',
			'banner_link' => 'Banner Link',
			'more_china_tours' => 'More China Golden Triangle Tour：',
			'more_banner' => 'More China Tours image',
			'more_banner_link' => 'More China Tours image link',
			'theme_tours' => '主题游推荐',
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
		$criteria->compare('top_tour_cities',$this->top_tour_cities,true);
		$criteria->compare('banner',$this->banner,true);
		$criteria->compare('more_china_tours',$this->more_china_tours,true);
		$criteria->compare('more_banner',$this->more_banner,true);
		$criteria->compare('theme_tours',$this->theme_tours,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function beforeSave()
	{

		if(parent::beforeSave()){
			if(isset($_POST['Newsletter'])){
				if($_GET['id']) $model = self::model()->findByPk($_GET['id']);
				else $model = new Newsletter;
				$file = CUploadedFile::getInstance($model, 'banner_img');
				
	      if($file){
	        $fileName = uniqid().'.'.$file->extensionName;
	        $file->saveAs(Newsletter::UPLOAD_PATH.$fileName);
	        $this->banner = $fileName;
	      }

	      $top_tour_cities_arr = unserialize($this->top_tour_cities);
				foreach($_POST['title'] as $k=>$v){
	      	$top_tour_cities['title'][$k] = $v;
	      	$top_tour_cities['url'][$k] = $_POST['url'][$k];
	      	$top_tour_cities['desc'][$k] = $_POST['desc'][$k];
	      	$name = $_FILES['files']['tmp_name'][$k];

	      	if($top_tour_cities_arr) $top_tour_cities['file'][$k] = $top_tour_cities_arr['file'][$k];
	   			if (isset($_FILES["files"]) && $_FILES["files"]["error"][$k] == 0) {
				      $upload_file = $_FILES['files'];
				      $file_info = pathinfo($upload_file['name'][$k]);
				      $file_type = $file_info['extension'];
				      $saveDir = Newsletter::UPLOAD_PATH;
				      $filename = uniqid().'.'.$file_info['extension'];
				      $saveFile = $saveDir.$filename;
				      $name = $_FILES['files']['tmp_name'][$k];
				      if (move_uploaded_file($name, $saveFile)) {
				      		$top_tour_cities['file'][$k] = $filename;
				      }
				  }
	      }
	      $this->top_tour_cities = serialize($top_tour_cities);

	      foreach($_POST['title2'] as $k=>$v){
	      	$more_china_tours['title2'][$k] = $v;
	      	$more_china_tours['route2'][$k] = $_POST['route2'][$k];
 	      	$more_china_tours['url2'][$k] = $_POST['url2'][$k];
	      	$more_china_tours['tags'][$k] = $_POST['tags'][$k];
	      }
	      $this->more_china_tours = serialize($more_china_tours);

	      $file = CUploadedFile::getInstance($model, 'more_banner_img');
	      if($file){
	        $fileName = uniqid().'.'.$file->extensionName;
	        $file->saveAs(Newsletter::UPLOAD_PATH.$fileName);
	        $this->more_banner = $fileName;
	      }

	      foreach($_POST['title3'] as $k=>$v){
	      	$theme_tours['title3'][$k] = $v;
	      	$theme_tours['url3'][$k] = $_POST['url3'][$k];
	      }
	      $this->theme_tours = serialize($theme_tours);

			}
			return true;
		}
	}

 public function getTopTourCities($top_tour_cities){
    $top_tour_cities = unserialize($top_tour_cities);
    foreach($top_tour_cities['title'] as $v){
      $ret[] = $v;
    }
    return implode('<br />', $ret);
  }

}
