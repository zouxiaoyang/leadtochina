<?php

/**
 * This is the model class for table "{{international_cruise}}".
 *
 * The followings are the available columns in table '{{international_cruise}}':
 * @property integer $id
 * @property string $name
 * @property string $intro
 * @property string $schedule
 */
class InternationalCruise extends CActiveRecord
{

	const UPLOAD_PATH = 'images/uploads/cruiseport/';
	static $status_list = array(
		0 => '正常',
		1 => '已暂停',
		2 => '已删除',
	);

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return InternationalCruise the static model class
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
		return 't_international_cruise';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'length', 'max'=>100),
			array('pic', 'length', 'max'=>50),
			array('schedule', 'length', 'max'=>10000),
			array('intro', 'safe'),
			array('sort', 'numerical', 'integerOnly'=>true),
			array('status', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, intro, pic,schedule,status', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'intro' => 'Intro',
			'schedule' => 'Schedule',
			'sort' => 'Sort',
			'pic' => 'Banner图片',
			'status' => '状态'
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
		$criteria->compare('intro',$this->intro,true);
		$criteria->compare('schedule',$this->schedule,true);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination'=>array(
	            'pageSize'=>20,
	        ),
		));
	}


	public function behaviors(){
    return array(
      'UploadBehavor' => array(
        'class' => 'application.models.UploadBehavior',
        'attribute' => 'pic',
        'uploadPath' => self::UPLOAD_PATH,
      ),  
    );  
  }
}
