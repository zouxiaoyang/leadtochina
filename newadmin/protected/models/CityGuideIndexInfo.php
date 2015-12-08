<?php

/**
 * This is the model class for table "{{city_guide_index_info}}".
 *
 * The followings are the available columns in table '{{city_guide_index_info}}':
 * @property integer $id
 * @property integer $provinceid
 * @property integer $cityid
 * @property string $figure_img
 * @property string $figure_desc
 * @property string $transportation_img
 * @property string $transportation_desc
 * @property string $attractions_info
 */
class CityGuideIndexInfo extends CActiveRecord
{
	const UPLOAD_PATH = 'images/uploads/cityGuideIndex/';

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CityGuideIndexInfo the static model class
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
		return '{{city_guide_index_info}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('provinceid, cityid', 'numerical', 'integerOnly'=>true),
			array('figure_img, transportation_img', 'length', 'max'=>20),
			array('figure_desc', 'length', 'max'=>1000),
			array('transportation_desc', 'length', 'max'=>500),
			array('attractions_info', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, provinceid, cityid, figure_img, figure_desc, transportation_img, transportation_desc, attractions_info', 'safe', 'on'=>'search'),
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
			'provinceid' => 'Provinceid',
			'cityid' => 'Cityid',
			'figure_img' => 'Figure Img',
			'figure_desc' => 'Figure Desc',
			'transportation_img' => 'Transportation Img',
			'transportation_desc' => 'Transportation Desc',
			'attractions_info' => 'Attractions Info',
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
		$criteria->compare('figure_img',$this->figure_img,true);
		$criteria->compare('figure_desc',$this->figure_desc,true);
		$criteria->compare('transportation_img',$this->transportation_img,true);
		$criteria->compare('transportation_desc',$this->transportation_desc,true);
		$criteria->compare('attractions_info',$this->attractions_info,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


	public function beforeSave()
	{
		if(parent::beforeSave()){
			if(isset($_POST['CityGuideIndexInfo']))
			{
				if($_GET['id']) $model = self::model()->findByPk($_GET['id']);
				else $model = new CityGuideIndexInfo;

				$file = CUploadedFile::getInstance($model, 'figure_file');
			
	      if($file){
	        $fileName = uniqid().'.'.$file->extensionName;
	        $file->saveAs(CityGuideIndexInfo::UPLOAD_PATH.$fileName);
	        $this->figure_img=$fileName;
	      }

	      $file = CUploadedFile::getInstance($model, 'transportation_file');
	      if($file){
	        $fileName = uniqid().'.'.$file->extensionName;
	        $file->saveAs(CityGuideIndexInfo::UPLOAD_PATH.$fileName);
	        $this->transportation_img=$fileName;
	      }

	      if($this->attractions_info) $attractions_info_arr = unserialize($this->attractions_info);

	      foreach($_POST['title'] as $k=>$v){
	      	$attractions_info['title'][$k] = $v;
	      	$attractions_info['url'][$k] = $_POST['url'][$k];
	      	$name = $_FILES['files']['tmp_name'][$k];

	      	if($attractions_info_arr) $attractions_info['file'][$k] = $attractions_info_arr['file'][$k];

	   			if (isset($_FILES["files"]) && $_FILES["files"]["error"][$k] == 0) {
	   				
				      $upload_file = $_FILES['files'];
				      $file_info = pathinfo($upload_file['name'][$k]);
				      $file_type = $file_info['extension'];
				      $saveDir = CityGuideIndexInfo::UPLOAD_PATH;
				      $filename = uniqid().'.'.$file_info['extension'];
				      $saveFile = $saveDir.$filename;
				      $name = $_FILES['files']['tmp_name'][$k];
				      if (move_uploaded_file($name, $saveFile)) {
				      		$attractions_info['file'][$k] = $filename;
				      }
				  }
	      }
	      $this->attractions_info = serialize($attractions_info);
    	}
			return true;
		}
	}
}