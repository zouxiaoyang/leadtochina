<?php

/**
 * This is the model class for table "{{cruisePorts}}".
 *
 * The followings are the available columns in table '{{cruisePorts}}':
 * @property integer $id
 * @property string $cityName
 * @property string $portIntro
 * @property string $tourIds
 * @property string $sceneryIds
 */
class CruisePorts extends CActiveRecord
{
	const UPLOAD_PATH = 'images/uploads/cruiseport/';
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CruisePorts the static model class
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
		return '{{cruiseports}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cityName', 'required'),
			array('cityName', 'length', 'max'=>30),
			array('tourIds, sceneryIds', 'length', 'max'=>100),
			array('portIntro, tourIntro, catNameUrl', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, cityName, portIntro,tourIntro, tourIds, sceneryIds,pic', 'safe', 'on'=>'search'),
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
			'cityName' => '港口城市名称',
			'portIntro' => '城市港口介绍',
			'catNameUrl' => '港口城市类别',
			'tourIntro' => '行程介绍',
			'tourIds' => '行程Ids',
			'sceneryIds' => '景点Ids',
			'pic' => '缩略图',
		);
	}
	
	public function getAllProtInfos(){
		$portInfo=self::model()->findAll();
		$allPortInfo=array();
		foreach ($portInfo as $k=>$v){
			$tourIds=$v->tourIds==""?'(0)':'('.$v->tourIds.')';
			$sceneryIds=$v->sceneryIds==""?'(0)':'('.$v->sceneryIds.')';
			$tours=Yii::app()->db->createCommand("select a.id,a.name,a.price,b.url from jos_cos_tours_package a LEFT JOIN jos_cos_route b ON a.id=b.packageid where a.id in $tourIds")->queryAll();
			$scenery=Yii::app()->db->createCommand("select name,url from jos_cos_scenery where id in $sceneryIds")->queryAll();
			$allPortInfo[$k][id]=$v->id;
			$allPortInfo[$k][cityName]=$v->cityName;
			$allPortInfo[$k][catNameUrl]=$v->catNameUrl;
			$allPortInfo[$k][portIntro]=$v->portIntro;
			$allPortInfo[$k][tourIntro]=$v->tourIntro;
			$allPortInfo[$k][pic]=$v->pic;
			$allPortInfo[$k][tour]=$tours;
			$allPortInfo[$k][scenery]=$scenery;
		}
		return $allPortInfo;
	}
	public function Getportslist(){
		$list = self::model()->findAll(array(
		'select'=>array('id,cityName'),
		));	
		foreach($list as $v){
			$lists[$v['id']] = $v['cityName']; 
		}
		return $lists;
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
		$criteria->compare('cityName',$this->cityName,true);
		$criteria->compare('portIntro',$this->portIntro,true);
		$criteria->compare('tourIntro',$this->tourIntro,true);
		$criteria->compare('catNameUrl',$this->catNameUrl,true);
		$criteria->compare('tourIds',$this->tourIds,true);
		$criteria->compare('sceneryIds',$this->sceneryIds,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


	public static function getAllCityName(){
		 $cruiseports = self::model()->findAll(array(
     		'select' => 'id,cityName',
     ));
     foreach($cruiseports as $v){     	
     		$arr[$v->id] = $v->cityName;
     }
     $arr[999] = 'Cruise Faq';
     return $arr;
	}

  public function addQuestion($question){
    $question->question_type_id = $this->id;
    return $question->save();
  }
}
