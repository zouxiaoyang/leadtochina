<?php

/**
 * This is the model class for table "{{cruiseact}}".
 *
 * The followings are the available columns in table '{{cruiseact}}':
 * @property integer $id
 * @property integer $cruiseid
 * @property string $cruise_name
 * @property string $cruise_date
 * @property integer $year
 * @property integer $month
 * @property integer $days
 * @property integer $upOrdown
 */
class Cruiseact extends CActiveRecord
{


	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cruiseact the static model class
	 */
	static $upOrdownArr=array('上行','下行');
	
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{cruiseact}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cruiseid, cruise_name, year, month', 'required'),
			array('cruiseid, year, month, days, upOrdown, flag', 'numerical', 'integerOnly'=>true),
			array('cruise_name', 'length', 'max'=>100),
			array('cruise_date', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, cruiseid, cruise_name, cruise_date, year, month, days, upOrdown', 'safe', 'on'=>'search'),
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
			'cruiseid' => 'Cruiseid',
			'cruise_name' => '游轮名称',
			'cruise_date' => '出行日期',
			'year' => '年',
			'month' => '月',
			'days' => '日',
			'upOrdown' => '类型',
			'flag' => 'flag',
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
		$this->cruiseid = Yii::app()->user->getState('cruiseid') ? Yii::app()->user->getState('cruiseid') : $this->cruiseid;
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('cruiseid',$this->cruiseid);
		$criteria->compare('cruise_name',$this->cruise_name,true);
		$criteria->compare('cruise_date',$this->cruise_date,true);
		$criteria->compare('year',$this->year);
		$criteria->compare('month',$this->month);
		$criteria->compare('days',$this->days);
		$criteria->compare('upOrdown',$this->upOrdown);
    $criteria->order = 'ID DESC';

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination'=>array(
          'pageSize'=>20,
      ),
		));
	}

	public function getEveryMonth ()
	{
    $fun = create_function('','foreach(range(1,12) as $v) $tmp_arr[] = "2013-$v-1";return $tmp_arr;');
    return $fun();
	}

	public function getMonthCruiseSailling($year, $month, $category = null)
	{
         /*
         $ret = self::model()->findAll(array(
            'select'=>'cruiseid, cruise_name, days, upOrdown',
            'condition'=>"year='2013' And month=:month",
            'params'=>array(':month'=>$month),
          ));
          */
    	  $condition[] = "year='$year'";
    	  $condition[] = "month='$month'";
    	  if($category !== null) $condition[] = "category='$category'";
    	  $where = implode(' and ', $condition);
    	  $where .= ' and is_hide = 0';
    	  
    	  $ret = Yii::app()->db->createCommand()
                	    ->select('a.cruiseid, a.cruise_name,a.cruise_date, a.year, a.month, a.days, a.upOrdown,b.id,b.cruise_grade, b.upcity, b.downcity, b.uphighprice, b.uplowprice, b.downhighprice, b.downlowprice')
                	    ->from('{{cruiseact}} a')
                	    ->leftjoin('{{cruise b}}', 'a.cruiseid=b.id')
                	    //->where('year=:year and month=:month', array(':year'=>$year,':month'=>$month))
    		            ->where($where)
                	  ->queryAll();
    	   return $ret;
	}
	
	public function getMonthCruise($year, $month,Cruise $cruise){

		$ret = Yii::app()->db->createCommand()
	    ->select('a.cruiseid, a.cruise_name, a.days, a.upOrdown,
	    					b.id,b.cruise_grade, b.upcity, b.downcity, 
	    					b.uphighprice, b.uplowprice, b.downhighprice, b.downlowprice')
	    ->from('{{cruiseact}} a')
	    ->leftjoin('{{cruise b}}', 'a.cruiseid=b.id')
	    ->where('year=:year and month=:month and a.cruiseid=:cruiseid and b.is_hide=0 and b.upcity=:upcity and b.downcity=:downcity', array(':year'=>$year,':month'=>$month,':cruiseid'=>$cruise->id,':upcity'=>$cruise->upcity,':downcity'=>$cruise->downcity))
	    ->queryAll();
		return $ret;
	}
}
