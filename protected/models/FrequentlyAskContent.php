<?php

/**
 * This is the model class for table "frequently_ask_content".
 *
 * The followings are the available columns in table 'frequently_ask_content':
 * @property integer $id
 * @property integer $cat_id
 * @property string $cat_title
 * @property string $question
 * @property string $answer
 * @property string $create_time
 */
class FrequentlyAskContent extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return FrequentlyAskContent the static model class
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
		return 'frequently_ask_content';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cat_id', 'numerical', 'integerOnly'=>true),
			array('cat_title, question', 'length', 'max'=>255),
			array('create_time', 'length', 'max'=>50),
			array('answer', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, cat_id, cat_title, question, answer, create_time', 'safe', 'on'=>'search'),
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
			'cat_id' => 'Cat',
			'cat_title' => 'Cat Title',
			'question' => 'Question',
			'answer' => 'Answer',
			'create_time' => 'Create Time',
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

		$criteria->compare('cat_id',$this->cat_id);

		$criteria->compare('cat_title',$this->cat_title,true);

		$criteria->compare('question',$this->question,true);

		$criteria->compare('answer',$this->answer,true);

		$criteria->compare('create_time',$this->create_time,true);

		return new CActiveDataProvider('FrequentlyAskContent', array(
			'criteria'=>$criteria,
		));
	}
}