<?php

/**
 * This is the model class for table "{{cruiseOnboard}}".
 *
 * The followings are the available columns in table '{{cruiseOnboard}}':
 * @property integer $id
 * @property integer $cruiseid
 * @property string $cruise_name
 * @property string $name
 * @property string $description
 * @property string $onboard_pic
 */
class CruiseOnboard extends CActiveRecord
{
	const UPLOAD_PATH = "images/uploads/cruiseonboard/";
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CruiseOnboard the static model class
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
		return '{{cruiseOnboard}}';
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
			array('cruiseid', 'numerical', 'integerOnly'=>true),
			array('cruise_name', 'length', 'max'=>100),
			array('name', 'length', 'max'=>50),
			array('onboard_pic', 'length', 'max'=>30),
			array('description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, cruiseid, cruise_name, name, description, onboard_pic', 'safe', 'on'=>'search'),
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
			'cruiseid' => 'Cruiseid',
			'cruise_name' => '游轮名称',
			'name' => '标题',
			'description' => '描述内容',
			'onboard_pic' => 'onboard图片',
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
		if($_GET['cruiseid']) Yii::app()->user->setState('cruiseid', $_GET['cruiseid']);
		$this->cruiseid = Yii::app()->user->getState('cruiseid') ? Yii::app()->user->getState('cruiseid') : $this->cruiseid;
		
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('cruiseid',$this->cruiseid);
		$criteria->compare('cruise_name',$this->cruise_name,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('onboard_pic',$this->onboard_pic,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function beforeSave(){
		if(parent::beforeSave()){
			$this->cruiseid = Yii::app()->user->getState('cruiseid');
			return true;
		}
	}
	
  public function behaviors(){
    return array(
      'UploadBehavor' => array(
        'class' => 'application.models.UploadBehavior',
        'attribute' => 'onboard_pic',
        'uploadPath' => self::UPLOAD_PATH,
      ),
    );
  }
}