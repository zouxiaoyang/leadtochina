<?php

/**
 * This is the model class for table "{{cruisecycle}}".
 *
 * The followings are the available columns in table '{{cruisecycle}}':
 * @property integer $id
 * @property integer $cruiseid
 * @property string $activition
 * @property integer $upOrdown
 * @property string $cruise_name
 */
class Cruisecycle extends CActiveRecord
{
	const UPLOAD_PATH = 'images/uploads/cruisecycle/';
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cruisecycle the static model class
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
		return '{{cruisecycle}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cruiseid, activition, upOrdown', 'required'),
			array('cruiseid, upOrdown', 'numerical', 'integerOnly'=>true),
			array('cruise_name,cruisecycle_pic', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, cruiseid, activition, upOrdown, cruise_name', 'safe', 'on'=>'search'),
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
			'activition' => '行程路线',
			'upOrdown' => '类型',
			'cruise_name' => '游轮名称',
			'cruisecycle_pic' => '航期图片',
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
		$this->cruiseid = Yii::app()->user->getState('cruiseid') ? Yii::app()->user->getState('cruiseid') : $this->cruiseid;
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('cruiseid',$this->cruiseid);
		$criteria->compare('activition',$this->activition,true);
		$criteria->compare('upOrdown',$this->upOrdown);
		$criteria->compare('cruise_name',$this->cruise_name,true);
		$criteria->order='upOrdown DESC';
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function getCruiseCycle($id){
		$cruiseCycle=self::model()->findAllByAttributes(array('cruiseid'=>$id));
		$cruiseCycleArr=array();
		foreach ($cruiseCycle as $k=>$v){
			$cruiseCycleArr[$v->upOrdown][]=$v;
		}
		return $cruiseCycleArr;
	}
	
  public function behaviors(){
    return array(
      'UploadBehavor' => array(
        'class' => 'application.models.UploadBehavior',
        'attribute' => 'cruisecycle_pic',
        'uploadPath' => self::UPLOAD_PATH,
      ),
    );
  }
}