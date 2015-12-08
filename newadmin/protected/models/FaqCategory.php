<?php

/**
 * This is the model class for table "{{faq_category}}".
 *
 * The followings are the available columns in table '{{faq_category}}':
 * @property integer $id
 * @property integer $fid
 * @property string $cat_name
 * @property string $url
 * @property integer $flag
 */
class FaqCategory extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return FaqCategory the static model class
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
		return '{{faq_category}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('fid', 'required'),
			array('fid, flag', 'numerical', 'integerOnly'=>true),
			array('cat_name, url, meta_keywords,meta_description', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, fid, cat_name, url, flag', 'safe', 'on'=>'search'),
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
			'fid' => 'Fid',
			'cat_name' => 'Cat Name',
			'url' => 'Url',
			'flag' => 'Flag',
      'meta_keywords' => 'Meta Keywords',
      'meta_description' => 'Meta Description',
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
		$criteria->compare('fid',$this->fid);
		$criteria->compare('cat_name',$this->cat_name,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('flag',$this->flag);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

  public function getAllCategories()
  {
	$data = $data2 = Yii::app()->filecache->get('faq_categories');

	if($data === false){
		$data = $data2 = self::model()->findAll();
		Yii::app()->filecache->set('faq_categories',$data,600);
	}

    foreach($data as $v){
      if($v->fid == 0 && $v->fid != $v->id) $ret[$v->id][] = $v->cat_name;

      foreach($data2 as $v2){
            if($v->id == $v2->fid) $ret[$v->id][$v2->id] = $v2->cat_name;
        }
    }


    foreach($ret as $k=>$v){
    	if(count($v) == 1){
    		$ret['Other'][$k] = $v[0]; 
    		unset($ret[$k]);
    	}
    }
    $ret['Other'][0] = 'Other';
 
    return $ret;
  }
}
