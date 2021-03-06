<?php

/**
 * This is the model class for table "jos_cos_message".
 *
 * The followings are the available columns in table 'jos_cos_message':
 * @property integer $id
 * @property integer $state
 * @property integer $checked_out
 * @property string $email
 * @property string $message
 * @property string $username
 * @property string $writeto
 * @property string $addr
 * @property string $phone
 * @property string $country
 * @property string $company
 * @property string $city
 * @property string $fax
 * @property string $states
 * @property string $postalcode
 * @property string $message_type
 * @property integer $mes_type
 * @property string $ip
 * @property string $dateline
 * @property integer $messagetype
 * @property integer $is_read
 */
class Message extends CActiveRecord
{
	public $verifyCode;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return JosCosMessage the static model class
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
		return 'joomla.jos_cos_message';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, email, message', 'required'),
			array('email', 'email'),
			array('username', 'length', 'max'=>70),
			array('writeto, country, city, fax, states', 'length', 'max'=>50),
			array('addr', 'length', 'max'=>255),
			array('phone', 'length', 'max'=>30),
			array('company', 'length', 'max'=>150),
			array('postalcode, ip', 'length', 'max'=>20),
			array('message_type', 'length', 'max'=>80),
			array('dateline', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, state, checked_out, email, message, username, writeto, addr, phone, country, company, city, fax, states, postalcode, message_type, mes_type, ip, dateline, messagetype, is_read,referer_url', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'state' => 'State',
			'checked_out' => 'Checked Out',
			'email' => 'Email',
			'message' => 'Content',
			'username' => 'Username',
			'writeto' => 'Writeto',
			'addr' => 'Addr',
			'phone' => 'Phone',
			'country' => 'Country',
			'company' => 'Company',
			'city' => 'City',
			'fax' => 'Fax',
			'states' => 'States',
			'postalcode' => 'Postalcode',
			'message_type' => 'Message Type',
			'mes_type' => 'Mes Type',
			'ip' => 'Ip',
			'dateline' => 'Dateline',
			'messagetype' => 'Messagetype',
			'is_read' => 'Is Read',
			'referer_url'=>'Referer Url',
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
		$criteria->compare('state',$this->state);
		$criteria->compare('checked_out',$this->checked_out);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('message',$this->message,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('writeto',$this->writeto,true);
		$criteria->compare('addr',$this->addr,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('company',$this->company,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('states',$this->states,true);
		$criteria->compare('postalcode',$this->postalcode,true);
		$criteria->compare('message_type',$this->message_type,true);
		$criteria->compare('mes_type',$this->mes_type);
		$criteria->compare('ip',$this->ip,true);
		$criteria->compare('dateline',$this->dateline,true);
		$criteria->compare('messagetype',$this->messagetype);
		$criteria->compare('is_read',$this->is_read);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function newMessage()
  {
    $model = new Message;
    if(isset($_POST['ajax']) && $_POST['ajax']==='message-form')
    {
      echo CActiveForm::validate($model);
      Yii::app()->end();
    }

    if(isset($_POST['Message']))
    {
      $model->attributes=$_POST['Message'];
      $model->ip=SiteUtils::getClientIp();
      $model->referer_url=Yii::app()->request->urlReferrer;
      $model->dateline = time();
      if($model->save())
      {
        header("location:/succeed.html");
        Yii::app()->end();
      }
    }
    return $model;
  }
}
