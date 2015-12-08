<?php

/**
 * This is the model class for table "jos_cos_hotelpic".
 *
 * The followings are the available columns in table 'jos_cos_hotelpic':
 * @property integer $id
 * @property integer $hotelid
 * @property string $pic_alt
 * @property string $pic_dir
 * @property integer $recommend
 * @property string $pic_path
 */
class JosCosHotelpic extends CActiveRecord
{

	const UPLOAD_PATH = 'images/uploads/hotel/';
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return JosCosHotelpic the static model class
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
		return 'jos_cos_hotelpic';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('hotelid, pic_alt', 'required'),
			array('hotelid, recommend', 'numerical', 'integerOnly'=>true),
			array('pic_alt', 'length', 'max'=>255),
			array('pic_dir, pic_path', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, hotelid, pic_alt, pic_dir, recommend, pic_path', 'safe', 'on'=>'search'),
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
			'hotelid' => '所属酒店',
			'pic_alt' => 'Pic Alt',
			'pic_dir' => 'Pic Dir',
			'recommend' => 'Recommend',
			'pic_path' => '图片',
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
		$criteria->compare('hotelid',$this->hotelid);
		$criteria->compare('pic_alt',$this->pic_alt,true);
		$criteria->compare('pic_dir',$this->pic_dir,true);
		$criteria->compare('recommend',$this->recommend);
		$criteria->compare('pic_path',$this->pic_path,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}