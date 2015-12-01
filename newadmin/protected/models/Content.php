<?php

/**
 * This is the model class for table "jos_content".
 *
 * The followings are the available columns in table 'jos_content':
 * @property string $id
 * @property string $title
 * @property string $alias
 * @property string $title_alias
 * @property string $introtext
 * @property string $fulltext
 * @property integer $state
 * @property string $sectionid
 * @property string $mask
 * @property string $catid
 * @property string $created
 * @property string $created_by
 * @property string $created_by_alias
 * @property string $modified
 * @property string $modified_by
 * @property string $checked_out
 * @property string $checked_out_time
 * @property string $publish_up
 * @property string $publish_down
 * @property string $images
 * @property string $urls
 * @property string $attribs
 * @property string $version
 * @property string $parentid
 * @property integer $ordering
 * @property string $metakey
 * @property string $metadesc
 * @property integer $provinceid
 * @property integer $cityid
 * @property string $province_name
 * @property string $city_name
 * @property string $seo_title
 * @property string $seo_url
 * @property string $access
 * @property string $hits
 * @property string $metadata
 */
class Content extends CActiveRecord
{
	const UPLOAD_PATH = 'images/uploads/content/';
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
		return 'jos_content';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
		array('title,introtext', 'required'),
		array('state, ordering, provinceid, cityid', 'numerical', 'integerOnly'=>true),
		array('title, alias, title_alias, created_by_alias, seo_title, seo_url', 'length', 'max'=>255),
		array('sectionid, mask, catid, created_by, modified_by, checked_out, version, parentid, access, hits,index_recommend', 'length', 'max'=>11),
		array('province_name, city_name', 'length', 'max'=>50),
		array('created, modified, metakey, metadesc, checked_out_time, publish_up, publish_down', 'safe'),
		// The following rule is used by search().
		// Please remove those attributes that should not be searched.
		array('id, title, alias, title_alias, introtext, fulltext, state, sectionid, mask, catid, created, created_by, created_by_alias, modified, modified_by, checked_out, checked_out_time, publish_up, publish_down, images, urls, attribs, version, parentid, ordering, metakey, metadesc, provinceid, cityid, province_name, city_name, seo_title, seo_url, access, hits, metadata', 'safe', 'on'=>'search'),
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
			'alias' => 'Alias',
			'title_alias' => 'Title Alias',
			'introtext' => '文章内容',
			'fulltext' => 'Fulltext',
			'state' => '状态',
			'sectionid' => '所属单元',
			'mask' => 'Mask',
			'catid' => '所属分类',
			'created' => '创建日期',
			'created_by' => '作者',
			'created_by_alias' => '作者笔名',
			'modified' => '修改时间',
			'modified_by' => '修改人',
			'checked_out' => '审核人',
			'checked_out_time' => '审核时间',
			'publish_up' => '开始发布',
			'publish_down' => '发布结束',
			'images' => 'Images',
			'urls' => 'Urls',
			'attribs' => 'Attribs',
			'version' => 'Version',
			'parentid' => 'Parentid',
			'ordering' => 'Ordering',
			'metakey' => 'Metakey',
			'metadesc' => 'Metadesc',
			'provinceid' => '所属省份',
			'cityid' => '所属城市',
			'province_name' => '省份名称',
			'city_name' => '城市名称',
			'seo_title' => 'Seo Title',
			'seo_url' => 'Seo Url',
			'access' => '访问级别',
			'hits' => '点击数',
			'metadata' => 'Metadata',
			'index_recommend'=>'首页推荐',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('alias',$this->alias,true);
		$criteria->compare('title_alias',$this->title_alias,true);
		$criteria->compare('introtext',$this->introtext,true);
		$criteria->compare('fulltext',$this->fulltext,true);
		$criteria->compare('state',$this->state);
		$criteria->compare('sectionid',$this->sectionid,true);
		$criteria->compare('mask',$this->mask,true);
		$criteria->compare('catid',$this->catid,true);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('created_by_alias',$this->created_by_alias,true);
		$criteria->compare('modified',$this->modified,true);
		$criteria->compare('modified_by',$this->modified_by,true);
		$criteria->compare('checked_out',$this->checked_out,true);
		$criteria->compare('checked_out_time',$this->checked_out_time,true);
		$criteria->compare('publish_up',$this->publish_up,true);
		$criteria->compare('publish_down',$this->publish_down,true);
		$criteria->compare('images',$this->images,true);
		$criteria->compare('urls',$this->urls,true);
		$criteria->compare('attribs',$this->attribs,true);
		$criteria->compare('version',$this->version,true);
		$criteria->compare('parentid',$this->parentid,true);
		$criteria->compare('ordering',$this->ordering);
		$criteria->compare('metakey',$this->metakey,true);
		$criteria->compare('metadesc',$this->metadesc,true);
		$criteria->compare('provinceid',$this->provinceid);
		$criteria->compare('cityid',$this->cityid);
		$criteria->compare('province_name',$this->province_name,true);
		$criteria->compare('city_name',$this->city_name,true);
		$criteria->compare('seo_title',$this->seo_title,true);
		$criteria->compare('seo_url',$this->seo_url,true);
		$criteria->compare('access',$this->access,true);
		$criteria->compare('hits',$this->hits,true);
		$criteria->compare('metadata',$this->metadata,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function getGuideTravelTips(){
		return self::model()->findAll(array(
			'condition'=>'sectionid=8 and state=1',
			'limit'=>'7',
		));
	}
	
	public function getGuideTravelTools(){
		return self::model()->findAll(array(
			'condition'=>'sectionid=10 and state=1',
			'limit'=>'8',
		));
	}
	
	public function getGuideContent($cityid,$catid){
		return self::getContents($cityid, $catid,'1');
	}
	
	public function getCityFats($cityId){
		return self::getContents($cityId, '42');
	}
	
	public function getCityMaps($cityId){
		return self::getContents($cityId, '61');
	}
	
	protected function getContents($cityId,$catid,$state=1,$limit=10){
		return self::model()->findByAttributes(array('cityid'=>$cityId),array(
			//'select'=>'introtext',
			'condition'=>"catid='$catid' and state='$state'",
			'order'=>'id desc',
			'limit'=>$limit,
		));
	}

}