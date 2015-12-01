<?php

/**
 * This is the model class for table "{{ImgVideo}}".
 *
 * The followings are the available columns in table '{{ImgVideo}}':
 * @property integer $id
 * @property string $name
 * @property string $http_url
 * @property string $type
 * @property integer $img_video
 * @property integer $status
 * @property string $creattime
 */
class ImgVideo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ImgVideo the static model class
	 */
	static $imgvideo_type_arr = array(1=>'学生团');
	const UPLOAD_PATH = 'images/imgvideo/';

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{ImgVideo}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('', 'required'),
			array('id, img_video, status', 'numerical', 'integerOnly'=>true),
			array('file_name, type', 'length', 'max'=>255),
			array('http_url', 'length', 'max'=>2000),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array(' type, img_video', 'safe', 'on'=>'search'),
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
			'file_name' => '文件名',
			'http_url' => '视频地址',
			'type' => '位置类别',
			'img_video' => '图片|视频',
			'status' => '展示',
			'duration'=>'视频时长',
			'creattime' => '写入时间',
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
		$criteria->compare('file_name',$this->file_name,true);
		$criteria->compare('http_url',$this->http_url,true);
		$criteria->compare('duration',$this->duration,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('img_video',$this->img_video);
		$criteria->compare('status',$this->status);
		$criteria->compare('creattime',$this->creattime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function beforeSave()
	{
		if(parent::beforeSave()){
			$this->creattime = date("Y-m-d");
			return true;
		}
	}
	public function behaviors(){
    return array(
      'UploadBehavor' => array(
        'class' => 'application.models.UploadBehavior',
        'attribute' => 'file_name',
        'uploadPath' => self::UPLOAD_PATH,
      ),
    );
  }
}