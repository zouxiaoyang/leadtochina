<?php

/**
 * This is the model class for table "{{english}}".
 *
 * The followings are the available columns in table '{{english}}':
 * @property integer $id
 * @property integer $type
 * @property string $title
 * @property string $play_url
 * @property string $download_url
 * @property string $english_text
 * @property string $chinese_content
 * @property integer $jifen
 */
class English extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return English the static model class
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
		return '{{english}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('type, jifen', 'numerical', 'integerOnly'=>true),
			array('title, play_url, download_url', 'length', 'max'=>255),
			array('english_text, chinese_content', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, type, title, play_url, download_url, english_text, chinese_content, jifen', 'safe', 'on'=>'search'),
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
			'type' => 'Type',
			'title' => 'Title',
			'play_url' => 'Play Url',
			'download_url' => 'Download Url',
			'english_text' => 'English Text',
			'chinese_content' => 'Chinese Content',
			'jifen' => 'Jifen',
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
		$criteria->compare('type',$this->type);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('play_url',$this->play_url,true);
		$criteria->compare('download_url',$this->download_url,true);
		$criteria->compare('english_text',$this->english_text,true);
		$criteria->compare('chinese_content',$this->chinese_content,true);
		$criteria->compare('jifen',$this->jifen);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}