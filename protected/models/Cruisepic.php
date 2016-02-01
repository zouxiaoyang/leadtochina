<?php

/**
 * This is the model class for table "{{cruisepic}}".
 *
 * The followings are the available columns in table '{{cruisepic}}':
 * @property integer $id
 * @property integer $cruiseid
 * @property string $pic_alt
 * @property string $pic_dir
 * @property string $pic_path
 * @property integer $state
 */
class Cruisepic extends CActiveRecord
{
	const UPLOAD_PATH = 'images/uploads/cruise/';
	
	static $picCategory=array(
		'游轮图片',
		'甲板图片',
		'房间图片',
		'Deck Plan',
		'港口图片',
	);
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cruisepic the static model class
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
		return 't_cruisepic';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pic_alt, state', 'required'),
			array('cruiseid, state', 'numerical', 'integerOnly'=>true),
			array('pic_alt', 'length', 'max'=>255),
			array('pic_dir, pic_path', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, cruiseid, pic_alt, pic_dir, pic_path, state', 'safe', 'on'=>'search'),
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
			'cruiseid' => '游轮ID',
			'pic_alt' => '图片Alt',
			'pic_dir' => 'Pic Dir',
			'pic_path' => '图片',
			'state' => '图片类型',

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

		if($_GET['state']==4)Yii::app()->user->setState('state', $_GET['state']);
		$this->state = Yii::app()->user->getState('state') ? Yii::app()->user->getState('state') : $this->state;

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('cruiseid',$this->cruiseid);
		$criteria->compare('pic_alt',$this->pic_alt,true);
		$criteria->compare('pic_dir',$this->pic_dir,true);
		$criteria->compare('pic_path',$this->pic_path,true);
		$criteria->compare('state',$this->state);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

  public function getPic($pic)
  {
    return Chtml::image(ImageUtils::getThumbnail(self::UPLOAD_PATH.$pic,'140x140'),'');
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
	        'attribute' => 'pic_path',
	        'uploadPath' => self::UPLOAD_PATH,
	      ),
	    );
  }
}
