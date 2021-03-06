<?php

/**
 * This is the model class for table "{{province}}".
 *
 * The followings are the available columns in table '{{province}}':
 * @property integer $id
 * @property string $name
 * @property string $description
 */
class Province extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Province the static model class
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
		return 't_province';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'length', 'max'=>50),
			array('description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, description', 'safe', 'on'=>'search'),
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
			'name' => '省份名称',
			'description' => '省份介绍',
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
		$criteria->compare('description',$this->description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	//得到所有省份id和名称
	static function getAllProvince(){
		$list=self::allProvinces();
		return self::swapToArray($list);
	}
	
	public function getProvinceUrl(){
	    return 
	    Yii::app()->createUrl('adoption/homeLandProvince',array('id'=>$this->id,'name'=>SiteUtils::stringURLSafe($this->name)));
	  }
	static function allProvinces(){
		$list = self::model()->findAll(array(
		'select'=>array('id,name'),
		));	
		return $list;
	}
	static function swapToArray($obj){
		$ret=array();
		$ret[0]='请选择省份';
		foreach ($obj as $v){
			$ret[$v->id]=$v->name;
		}
		return $ret;		
	}
	
	public function getAllSortProvince(){
		$allProvinces=self::allProvinces();
		$arrProvinces=array();
		foreach ($allProvinces as $k=>$v){
			$arrProvinces[$v->name]=$v;	
		}
		ksort($arrProvinces);
		return $arrProvinces;
	}
}