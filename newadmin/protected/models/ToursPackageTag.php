<?php

/**
 * This is the model class for table "jos_cos_tours_package_tag".
 *
 * The followings are the available columns in table 'jos_cos_tours_package_tag':
 * @property integer $id
 * @property integer $tour_id
 * @property string $name
 * @property integer $parent_id
 * @property string $created
 */
class ToursPackageTag extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ToursPackageTag the static model class
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
		return 'jos_cos_tours_package_tag';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tour_id, parent_id', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>50),
			array('created', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, tour_id, name, parent_id, created', 'safe', 'on'=>'search'),
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
			'tour_id' => 'Tour',
			'name' => 'Name',
			'parent_id' => 'Parent',
			'created' => 'Created',
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
		$criteria->compare('tour_id',$this->tour_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('parent_id',$this->parent_id);
		$criteria->compare('created',$this->created,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

  public function getThemeTag()
  {
    $themes = Yii::app()->db->createCommand("select id,name from jos_cos_tours_package_tag where parent_id=0")->queryAll();
    foreach($themes as $v){
      $ret[$v['id']] = $v['name'];
    }
    return $ret; 
  }

  public function getThemeSubTag()
  {
    $subTab = Yii::app()->db->createCommand("select id,name from jos_cos_tours_package_tag where parent_id>0")->queryAll();
    foreach($subTab as $v){
      $ret[$v['id']] = $v['name'];
    }
    return $ret; 
  }
}
