<?php

/**
 * This is the model class for table "{{content}}".
 *
 * The followings are the available columns in table '{{content}}':
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $images
 * @property integer $cat_id
 * @property integer $province_id
 * @property integer $homeland_cat
 */
class AdoptionContent extends CActiveRecord
{
  const UPLOAD_PATH = 'images/uploads/content/';

  static $content_category=array(
      0=>'请选择Adoption类别',
      1=>'Pre-adoption travel',
      2=>'Homeland Tours',
      3=>'Theme Tours',
      4=>'China Guide',
      5=>'Tips For Tour With Kids',
      7=>'Adoption Travel Guide',
      8=>'Facts about Children',
      //6=>'Latest Travel Stories',
      9=>'Orphanages Visit Guide',
  );

  static $homeland_category=array(
      0=>'请选择homeland文章类别',
      1=>'Facts',
      2=>'Food',
      3=>'Climate',
      4=>'Transportations',
      5=>'Reunion Tour Package',
  );

  public static $recommend = array(
      '否',
      '是'
  );

  /**
   * Returns the static model of the specified AR class.
   * @param string $className active record class name.
   * @return Content the static model class
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
    return '{{adoption_content}}';
  }

  /**
   * @return array validation rules for model attributes.
   */
  public function rules()
  {
    // NOTE: you should only define rules for those attributes that
    // will receive user inputs.
    return array(
        array('cat_id, province_id, homeland_cat, rate_time, rate_value', 'numerical', 'integerOnly'=>true),
        array('title, image', 'length', 'max'=>255),
        array('description,dateline', 'safe'),
        // The following rule is used by search().
        // Please remove those attributes that should not be searched.
        array('id, title, description, image, cat_id, province_id, homeland_cat', 'safe', 'on'=>'search'),
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
        'title' => '文章标题',
        'description' => '文章内容',
        'image' => '列表页缩略图',
        'cat_id' => 'Adoption大类别',
        'province_id' => '关联省份文章',
        'homeland_cat' => 'Homeland中文章类别',
        'rate_time' => '投票次数',
        'rate_value' => '投票分数',
        'dateline' => '时间',
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
    $criteria->compare('title',$this->title,true);
    $criteria->compare('description',$this->description,true);
    $criteria->compare('image',$this->image,true);
    $criteria->compare('cat_id',$this->cat_id);
    $criteria->compare('province_id',$this->province_id);
    $criteria->compare('homeland_cat',$this->homeland_cat);
    $criteria->order = "id desc";

    return new CActiveDataProvider($this, array(
        'criteria'=>$criteria,
    ));
  }

  public function getPic($pic){
    return Chtml::image(ImageUtils::getThumbnail(self::UPLOAD_PATH.$pic,'240x140'),'');
  }
   
  public function getContentUrl(){
    return
    Yii::app()->createUrl('adoption/homeLandView',array('id'=>$this->id,'title'=>SiteUtils::stringURLSafe($this->title)));
  }
   
  public function getHomeLandArticle($id){
    $homeLandArticle=self::model()->findAll(array(
        'condition'=>'province_id='.$id,
    ));
    $homeLandCategory=array();
    foreach ($homeLandArticle as $k=>$v){
      $homeLandCategory[$v->homeland_cat]=$v;
    }
    ksort($homeLandCategory);
    return $homeLandCategory;
  }
   
  public function behaviors(){
    return array(
        'UploadBehavor' => array(
            'class' => 'application.models.UploadBehavior',
            'attribute' => 'image',
            'uploadPath' => self::UPLOAD_PATH,
        ),
    );
  }

  public function beforeSave(){
    if(parent::beforeSave()){
      if($this->isNewRecord){
        $this->dateline = date("Y-m-d");
      }   
      return true;
    }   
  }
}
