<?php

/**
 * This is the model class for table "t_adoption_orphanage_address_article".
 *
 * The followings are the available columns in table 't_adoption_orphanage_address_article':
 * @property integer $id
 * @property integer $aid
 * @property string $title
 * @property string $content
 * @property string $pic
 * @property string $date
 * @property integer $recommend
 * @property integer $province_id
 */
class AdoptionArticle extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return AdoptionArticle the static model class
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
		return 't_adoption_orphanage_address_article';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('province_id', 'required'),
			array('aid, recommend, province_id', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>100),
			array('pic', 'length', 'max'=>50),
			array('content, date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, aid, title, content, pic, date, recommend, province_id', 'safe', 'on'=>'search'),
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
			'id' => 'Id',
			'aid' => 'Aid',
			'title' => 'Title',
			'content' => 'Content',
			'pic' => 'Pic',
			'date' => 'Date',
			'recommend' => 'Recommend',
			'province_id' => 'Province',
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

		$criteria->compare('aid',$this->aid);

		$criteria->compare('title',$this->title,true);

		$criteria->compare('content',$this->content,true);

		$criteria->compare('pic',$this->pic,true);

		$criteria->compare('date',$this->date,true);

		$criteria->compare('recommend',$this->recommend);

		$criteria->compare('province_id',$this->province_id);

		var_dump($criteria);exit;

		return new CActiveDataProvider('AdoptionArticle', array(
			'criteria'=>$criteria,
		));
	}
}