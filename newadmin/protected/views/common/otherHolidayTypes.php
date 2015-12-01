<select onchange="_other_holiday_types.changeUrl(this);">
  <option value="">other holiday types </option>
  <option value="<?php echo Yii::app()->createUrl('chinaTours/top10Tours');?>">Top 10 China Tours</option>
  <option value="<?php echo Yii::app()->createUrl('chinaTours/classicTours');?>">Classic China Tours</option>
  <option value="<?php echo Yii::app()->createUrl('chinaTours/yangtzeRiverTours');?>">Yangtze River Tours</option>
  <option value="<?php echo Yii::app()->createUrl('chinaTours/familyTours');?>">China Family Tours</option>
  <option value="<?php echo Yii::app()->createUrl('chinaTours/tibetTours');?>">China Tibet Tours</option>
  <option value="<?php echo Yii::app()->createUrl('chinaTours/trainTravel');?>">China Train Travel </option>
  <option value="<?php echo Yii::app()->createUrl('chinaTours/studentTours');?>">China Student Tours</option>
  <option value="<?php echo Yii::app()->createUrl('chinaTours/JewishTours');?>">China Jewish Tours</option>
  <option value="<?php echo Yii::app()->createUrl('chinaTours/72HourVisaFreeTours');?>">72-hour Visa-free Tours</option>
  <option value="<?php echo Yii::app()->createUrl('adoption');?>">China Adoption Travel</option>
</select>
<span><a href="/custom-china-tour/" target="_blank"><img src="/images/top10/make.png" /></a></span>



<script>
  var _other_holiday_types = {
    changeUrl:function(obj){
      var url = $(obj).val();
      if(url != '') location.href = $(obj).val();
      else return;
    }

  }
</script>
