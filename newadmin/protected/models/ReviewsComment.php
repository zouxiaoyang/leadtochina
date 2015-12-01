<?php

/**
 * This is the model class for table "{{reviews_comment}}".
 *
 * The followings are the available columns in table '{{reviews_comment}}':
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $comment
 * @property integer $dateline
 * @property string $userip
 */
class ReviewsComment extends CActiveRecord
{

	static $published_arr = array('未审核','已审核');
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ReviewsComment the static model class
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
		return '{{reviews_comment}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('dateline,published', 'numerical', 'integerOnly'=>true),
			array('name, userip', 'length', 'max'=>20),
			array('email', 'length', 'max'=>50),
			array('comment', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, email, comment, dateline, userip', 'safe', 'on'=>'search'),
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
			'email' => 'Email',
			'comment' => 'Comment',
			'dateline' => 'Dateline',
			'userip' => 'Userip',
			'published' => 'published'
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
		$criteria->compare('email',$this->email,true);
		$criteria->compare('comment',$this->comment,true);
		$criteria->compare('dateline',$this->dateline);
		$criteria->compare('userip',$this->userip,true);
		$criteria->compare('published',$this->published,true);
		$criteria->order = 'id desc';

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
