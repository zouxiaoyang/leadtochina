<?php

/**
 * This is the model class for table "jos_cos_question".
 *
 * The followings are the available columns in table 'jos_cos_question':
 * @property integer $id
 * @property integer $postid
 * @property string $shortcontent
 * @property string $content
 * @property string $username
 * @property string $email
 * @property string $url
 * @property integer $countreply
 * @property string $user_ip
 * @property integer $dateline
 * @property integer $auditing
 * @property integer $question_type
 * @property integer $question_type_id
 * @property integer $is_read
 */
class Question extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Question the static model class
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
		return 'jos_cos_question';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('content, username, email', 'required'),
			array('email','email'),
			array('postid, countreply, dateline, auditing, question_type, question_type_id,cruise_port_id, is_read', 'numerical', 'integerOnly'=>true),
			array('username', 'length', 'max'=>50),
			array('email', 'length', 'max'=>150),
			array('url', 'length', 'max'=>200),
			array('user_ip', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, postid, shortcontent, content, username, email, url, countreply, user_ip, dateline, auditing, question_type, question_type_id, is_read', 'safe', 'on'=>'search'),
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
			'postid' => 'Postid',
			'shortcontent' => 'Shortcontent',
			'content' => 'Content',
			'username' => 'Username',
			'email' => 'Email',
			'url' => 'Url',
			'countreply' => 'Countreply',
			'user_ip' => 'User Ip',
			'dateline' => 'Dateline',
			'auditing' => 'Auditing',
			'question_type' => 'Question Type',
			'question_type_id' => 'Question Type',
			'cruise_port_id' => '港口ID',
			'is_read' => 'Is Read',
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
		$criteria->compare('postid',$this->postid);
		$criteria->compare('shortcontent',$this->shortcontent,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('countreply',$this->countreply);
		$criteria->compare('user_ip',$this->user_ip,true);
		$criteria->compare('dateline',$this->dateline);
		$criteria->compare('auditing',$this->auditing);
		$criteria->compare('question_type',$this->question_type);
		$criteria->compare('question_type_id',$this->question_type_id);
		$criteria->compare('cruise_port_id',$this->cruise_port_id);
		$criteria->compare('is_read',$this->is_read);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function pageCommentsByQuestionId($question_type,$question_type_id,$postid=true)
	{
		if($postid){
			$criteria=new CDbCriteria(array(
	        'select' => array('*'),
	        'condition' => "question_type='$question_type' and question_type_id='$question_type_id' and auditing=1",
	        'order' => 'id desc',
	      )); 
		}else{
			$criteria=new CDbCriteria(array(
	        'select' => array('*'),
	        'condition' => "question_type='$question_type' and question_type_id='$question_type_id' and auditing=1 and postid!=0",
	        'order' => 'id desc',
	      )); 
		}
      $dataProvider = new CActiveDataProvider('Question', array(
             'pagination'=>array(
             'pageSize'=>5,
             'pageVar' =>'page',
            ),  
            'criteria'=>$criteria,
     )); 
      return $dataProvider;
	}

	public function beforeSave()
	{
		if(parent::beforeSave()){
			 $this->user_ip = Yii::app()->request->userHostAddress;
       $this->url = Yii::app()->request->urlReferrer;
			 $this->dateline = time();
       return true;
     }
	}
}
