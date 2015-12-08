<?php

/**
 * This is the model class for table "jos_cos_chinaculture".
 *
 * The followings are the available columns in table 'jos_cos_chinaculture':
 * @property integer $id
 * @property string $title
 * @property integer $catid
 * @property string $cat_path
 * @property string $content
 * @property string $ufile
 * @property string $filedir
 * @property string $url
 * @property string $seo_title
 * @property string $seo_key
 * @property string $seo_description
 * @property integer $enable
 * @property integer $update_route
 */
class Chinaculture extends CActiveRecord
{
	const UPLOAD_PATH='images/uploads/chinaculture/';
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Chinaculture the static model class
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
		return 'jos_cos_chinaculture';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, content', 'required'),
			array('catid, enable, update_route', 'numerical', 'integerOnly'=>true),
			array('title, filedir', 'length', 'max'=>100),
			array('cat_path', 'length', 'max'=>30),
			array('ufile, seo_title, seo_key, seo_description', 'length', 'max'=>255),
			array('url', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, catid, cat_path, content, ufile, filedir, url, seo_title, seo_key, seo_description, enable, update_route', 'safe', 'on'=>'search'),
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
			'title' => 'Title',
			'catid' => 'Catid',
			'cat_path' => 'Cat Path',
			'content' => 'Content',
			'ufile' => 'Ufile',
			'filedir' => 'Filedir',
			'url' => 'Url',
			'seo_title' => 'Seo Title',
			'seo_key' => 'Seo Key',
			'seo_description' => 'Seo Description',
			'enable' => 'Enable',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('catid',$this->catid);
		$criteria->compare('cat_path',$this->cat_path,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('ufile',$this->ufile,true);
		$criteria->compare('filedir',$this->filedir,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('seo_title',$this->seo_title,true);
		$criteria->compare('seo_key',$this->seo_key,true);
		$criteria->compare('seo_description',$this->seo_description,true);
		$criteria->compare('enable',$this->enable);
		$criteria->compare('update_route',$this->update_route);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
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