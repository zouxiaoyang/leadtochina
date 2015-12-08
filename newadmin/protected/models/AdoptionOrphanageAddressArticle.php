<?php

/**
 * This is the model class for table "{{adoption_orphanage_address_article}}".
 *
 * The followings are the available columns in table '{{adoption_orphanage_address_article}}':
 * @property integer $id
 * @property integer $aid
 * @property string $title
 * @property string $content
 * @property string $pic
 * @property string $date
 */
class AdoptionOrphanageAddressArticle extends CActiveRecord
{

	const UPLOAD_PATH = 'images/uploads/adoption/';
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return AdoptionOrphanageAddressArticle the static model class
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
		return '{{adoption_orphanage_address_article}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('aid, recommend,province_id', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>100),
			array('pic', 'length', 'max'=>50),
			array('content, date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, aid,province_id,title, content, pic, date', 'safe', 'on'=>'search'),
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
			'aid' => '收养团地址id',
			'title' => '标题',
			'content' => '内容',
			'pic' => '图片',
			'date' => '日期',
			'recommend' => '推荐',
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

		$this->aid = Yii::app()->user->getState('adoption_orphanage_address_id') ? Yii::app()->user->getState('adoption_orphanage_address_id') : $this->aid;

		$criteria=new CDbCriteria;

		$criteria->order = ' id desc'; 
		$criteria->compare('id',$this->id);
		$criteria->compare('aid',$this->aid);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('pic',$this->pic,true);
		$criteria->compare('date',$this->date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination'=>array(
				'pageSize'=>50,
			),
		));
	}

	 public function behaviors(){
    return array(
      'UploadBehavor' => array(
        'class' => 'application.models.UploadBehavior',
        'attribute' => 'pic',
        'uploadPath' => self::UPLOAD_PATH,
      ),
    );
  }
}