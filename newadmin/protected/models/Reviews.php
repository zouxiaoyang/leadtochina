<?php

/**
 * This is the model class for table "{{reviews}}".
 *
 * The followings are the available columns in table '{{reviews}}':
 * @property integer $id
 * @property integer $tour_id
 * @property string $name
 * @property string $email
 * @property string $telephone
 * @property string $description
 * @property integer $review_type
 * @property integer $year
 * @property integer $dateline
 * @property integer $published
 */
class Reviews extends CActiveRecord
{

	const UPLOAD_PATH = 'images/reviews/';

  static $published_arr = array('否','是');
  static $reviews_type_arr = array(1=>'Excellent', 2=>'Very good', 3=>'Average', '4'=>'Poor', 5=>'Terrible');

  public $verifyCode;

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Reviews the static model class
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
		return '{{reviews}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tour_id, review_type, year, published, vote1, vote2, recommend,is_student, cityid', 'numerical', 'integerOnly'=>true),
			array('name, email, description', 'required'),
			array('name, telephone, dateline, nationality', 'length', 'max'=>20),
			array('email, index_pic', 'length', 'max'=>50),
			//array('description', 'length', 'max'=>1000),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, tour_id, name, email, telephone, description, review_type, year, dateline, published,vote1, vote2', 'safe', 'on'=>'search'),
			array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
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
			 'reviewsPic' => array(self::HAS_MANY,'ReviewsPic','tid'),
			 'reviewsComment' => array(self::HAS_MANY, 'ReviewsComment', 'tid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'tour_id' => 'Tour Id',
			'name' => 'Full Name',
			'email' => 'Email',
			'telephone' => '电话',
			'description' => 'Description',
			'review_type' => '评论类型',
			'year' => 'Year',
			'vote1' => '票数1',
			'vote2' => '票数2',
			'dateline' => '日期',
			'published' => '是否审核',
			'recommend' => '推荐到首页',
			'is_student' => '学生团',
			'index_pic' => '首页图片(大小191x119)',
			'nationality' => 'Nationality',
			//'cityid'=> 'City',
			'cityid'=> 'Theme',
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
		$criteria->compare('email',$this->email,true);
		$criteria->compare('telephone',$this->telephone,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('review_type',$this->review_type);
		$criteria->compare('vote1',$this->vote1);
		$criteria->compare('vote2',$this->vote2);
		$criteria->compare('year',$this->year);
		$criteria->compare('dateline',$this->dateline);
		$criteria->compare('published',$this->published);
		$criteria->order = 'ID DESC';

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function beforeSave()
	{
		if(parent::beforeSave()){
			if($_POST['Reviews']['dateline']){
				$this->dateline = $_POST['Reviews']['dateline'];
			}else{
				$this->dateline = date("Y-m-d");
			}
			$this->year = date("Y");

			return true;
		}
	}
	

	public function behaviors(){
    return array(
      'UploadBehavor' => array(
        'class' => 'application.models.UploadBehavior',
        'attribute' => 'index_pic',
        'uploadPath' => self::UPLOAD_PATH,
      ),
    );
  }


}
