<?php

/**
 * This is the model class for table "{{cooperation_partners}}".
 *
 * The followings are the available columns in table '{{cooperation_partners}}':
 * @property integer $id
 * @property string $fullname
 * @property string $company_type
 * @property string $compnay_name
 * @property string $phone
 * @property string $fax_num
 * @property string $email
 * @property string $other_request
 */
class CooperationPartners extends CActiveRecord
{

  static $company_type_arr = array(
    'Hotel Suppiler' => 'Hotel Suppiler',
    'Travel Agents' => 'Travel Agents',
    'Airline Agents' => 'Airline Agents',
  );

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CooperationPartners the static model class
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
		return '{{cooperation_partners}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
      array('fullname, email, compnay_name, phone', 'required'),
      array('email', 'email'),
			array('fullname, company_type, phone, fax_num, email', 'length', 'max'=>20),
			array('compnay_name', 'length', 'max'=>100),
			array('other_request', 'length', 'max'=>500),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, fullname, company_type, compnay_name, phone, fax_num, email, other_request', 'safe', 'on'=>'search'),
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
			'fullname' => 'Fullname',
			'company_type' => 'Company Type',
			'compnay_name' => 'Company Name',
			'phone' => 'Phone',
			'fax_num' => 'Fax Num',
			'email' => 'Email',
			'other_request' => 'Other Request',
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
		$criteria->compare('fullname',$this->fullname,true);
		$criteria->compare('company_type',$this->company_type,true);
		$criteria->compare('compnay_name',$this->compnay_name,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('fax_num',$this->fax_num,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('other_request',$this->other_request,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

  public function newPartner(){
    $model =new self;
    if(isset($_POST['CooperationPartners']))
    {
      if($_POST['CooperationPartners']['fullname']) {
        $_POST['CooperationPartners']['fullname'] = $_POST['CooperationPartners']['gender'].$_POST['CooperationPartners']['fullname'];
      }
      //$_POST['CooperationPartners']['dateline'] = time();

      $model->attributes = $_POST['CooperationPartners'];
      if($model->save()){
        //保存一份到总后台留言
        $message = new Message();
        $message->username =  $model->attributes['fullname'];
        $message->email =  $model->attributes['email'];
        $content = 'Company Name:'.$model->attributes['compnay_name']."<br />";
        $content .= 'Phone:'.$model->attributes['phone']."<br />";
        $content .= 'Company Type:'.$model->attributes['company_type']."<br />";
        $content .= 'Fax:'.$model->attributes['fax_num']."<br />";
        $content .= 'Other Request:'.$model->attributes['other_request']; 
        $message->message= $content;
        $message->dateline = time(); 
        $message->referer_url = Yii::app()->request->urlReferrer; 
        $message->ip =  SiteUtils::getClientIp();
        $message->save(false);

        header("location:/succeed.html");
      }else{
        $model->attributes = $_POST['Order'];
      }
    }
    return $model;
  }
}
