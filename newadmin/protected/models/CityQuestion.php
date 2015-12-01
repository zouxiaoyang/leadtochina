<?php

/**
 * This is the model class for table "{{city_question}}".
 *
 * The followings are the available columns in table '{{city_question}}':
 * @property integer $id
 * @property integer $type
 * @property string $username
 * @property string $question
 * @property string $reply
 * @property integer $datelin
 */
class CityQuestion extends CActiveRecord
{
  
    public static  $type_arr = array(
      1 => 'China Trip Questions',
      2=> 'Common Questions',    
    );
    
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CityQuestion the static model class
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
		return '{{city_question}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('type', 'numerical', 'integerOnly'=>true),
			array('username,time,city', 'length', 'max'=>20),
			array('question, reply', 'length', 'max'=>1000),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, type, username, question, reply, city, time', 'safe', 'on'=>'search'),
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
		    'city' => 'City Name',
			'type' => 'Type',
			'username' => 'Username',
			'question' => 'Question',
			'reply' => 'Reply',
			'time' => 'Time',
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
		$criteria->compare('city',$this->city);
		$criteria->compare('type',$this->type);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('question',$this->question,true);
		$criteria->compare('reply',$this->reply,true);
		$criteria->compare('time',$this->time);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public static function pageQuestionByType($type = 1, $city = '')
	{
    $pageSize = 5;
    if($city == 'adoption' && $type == 1){
      $pageSize = 2;
    }
	  if($type) $condition[] = "type='$type'";
	  if($city) $condition[] = "city='$city'";
	  $where = implode(" and ", $condition);
	  
	  $criteria=new CDbCriteria(array(
	      'select' => array('*'),
	      'condition' => $where,
	      'order' => 'id desc',
	  ));
	  $dataProvider = new CActiveDataProvider('CityQuestion', array(
	      'pagination'=>array(
	          'pageSize'=> $pageSize,
	          'pageVar' =>'page',
	      ),
	      'criteria'=>$criteria,
	  ));
	  return $dataProvider;
	}
}
