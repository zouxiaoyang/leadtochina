<?php

/**
 * This is the model class for table "{{rental}}".
 *
 * The followings are the available columns in table '{{rental}}':
 * @property integer $id
 * @property string $name
 * @property string $pic
 * @property string $alt
 * @property string $price_serialize
 * @property integer $rental_type
 */
class Rental extends CActiveRecord
{
	const UPLOAD_PATH="images/uploads/rental/";
	public static $carRentalList=array(
		'1'=>'Airport-downtown and vice versa(one - way)',
		'2'=>'Railway Station-downtown and vice versa(one - way)',
		'3'=>'Half day Beijing (4 hours)',
		'4'=>'Full day Beijing (8 hours)',
		'5'=>'Badaling Great Wall and Ming Tombs',
		'6'=>'Mutianyu Great Wall(8 hours)',
		'7'=>'Simatai Great Wall(8 hours)',
		'8'=>'Tianjin City Tour',
		'9'=>'Xingang Port to Beijing Dowtown(one way)',
		'10'=>'Each extra hour after 8 hours',
	);
	public static $guideRentalList=array(
		'11'=>'1-2 Travelers',
		'12'=>'3-5 Travelers',
		'13'=>'6-9 Travelers',
		'14'=>'10 Travelers and above',
	);
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Rental the static model class
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
		return '{{rental}}';
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
		array('id, rental_type', 'numerical', 'integerOnly'=>true),
		array('name, pic, alt', 'length', 'max'=>255),
		array('price_serialize', 'safe'),
		// The following rule is used by search().
		// Please remove those attributes that should not be searched.
		array('id, name, pic, alt, price_serialize, rental_type', 'safe', 'on'=>'search'),
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
			'pic' => 'Pic',
			'alt' => 'Alt',
			'price_serialize' => 'Price Serialize',
			'rental_type' => 'Rental Type',
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
		if(Yii::app()->getController()->id=="carRental"){
			$rentalType=1;
		}else if(Yii::app()->getController()->id=="guideRental"){
			$rentalType=2;
		}
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('pic',$this->pic,true);
		$criteria->compare('alt',$this->alt,true);
		$criteria->compare('price_serialize',$this->price_serialize,true);
		$criteria->compare('rental_type',$rentalType);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function getRentalList($rentalType){
		return self::model()->findAll(array(
			'condition'=>'rental_type='.$rentalType,
		));
	}
}
