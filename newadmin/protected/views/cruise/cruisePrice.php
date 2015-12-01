
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/yangtze3.css'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/My97DatePicker/WdatePicker.js');?>

<div id="content">
<div id="menu-home"><strong>You are here:</strong> <a href="/">Home</a> 
    <a href="/travel/yangtzecruise">Yangtze Cruise</a>
    <a class="last" href="/travel/yangtzecruise/ships">Yangtze Cruise Ships</a>
</div>
<div class="add-new">
<div class="cruise_nav">
        <h2><?php echo $model->cruise_name;?> <span style=" display:inline-block; padding-bottom:3px;" class="star<?php echo $model->cruise_grade;?>"></span> Price</h2>
  <?php echo $this->renderPartial("_cruiseNav", array('model'=>$model));?>
  </div>
<div class="clear"></div>
<div id="price-rightnew">
  <div id="c15">
 		<?php $price_arr2=unserialize($model->price_serialize_2);?>
		<table cellspacing="0" cellpadding="0" border="0">
			<tbody>
			  <tr class="top">
			     <td>Ship</td>
		       <td>Days</td>
		       <td>Season</td>
		       <td>High Season</td>
		       <td>Low Season</td>
			  </tr>
			  <tr>
		         <?php $price_arr2=unserialize($model->price_serialize_2);?>
		         <td><span><?php echo $price_arr2[0];?></span></td>
		         <td><span><?php echo $price_arr2[1];?></span></td>
		         <td><span><?php echo $price_arr2[2];?></span></td>
		         <td><a href="<?php echo Yii::app()->createUrl('cruise/cruiseOrder', array('cruiseid'=>$model->id));?>"><?php echo $price_arr2[3];//SiteUtils::getCurrencyPrice($price_arr2[3]);?></a></td>
		         <td><a href="<?php echo Yii::app()->createUrl('cruise/cruiseOrder', array('cruiseid'=>$model->id));?>"><?php echo $price_arr2[4];//SiteUtils::getCurrencyPrice($price_arr2[4]);?></a></td>
		      </tr>
		      <tr>
		         <td><span><?php echo $price_arr2[5];?></span></td>
		         <td><span><?php echo $price_arr2[6];?></span></td>
		         <td><span><?php echo $price_arr2[7];?></span></td>
		         <td><a href="<?php echo Yii::app()->createUrl('cruise/cruiseOrder', array('cruiseid'=>$model->id));?>"><?php echo $price_arr2[8];//SiteUtils::getCurrencyPrice($price_arr2[8]);?></a></td>
		         <td><a href="<?php echo Yii::app()->createUrl('cruise/cruiseOrder', array('cruiseid'=>$model->id));?>"><?php echo $price_arr2[9];//SiteUtils::getCurrencyPrice($price_arr2[9]);?></a></td>
		      </tr>
			</tbody>
		</table>
</div>
  <div class="c01-new">
    <p><strong style="color:#000; font-size:13px; font-weight:bold;">Price Inclusion</strong></p>
    <?php echo $model->price_include;?> 
  </div>
  <div class="c01-new">
    <p><strong style="color:#000; font-size:13px; font-weight:bold;">Price Exclusion</strong></p>
    <?php echo $model->price_exclude;?>   
  </div>
  
</div>


<div class="note-value">
    <div class="note">
       <h2>Note on Our Price:</h2>
       <p><strong>High Season:</strong> May, Spetember, October<br />
       <strong>Shouler Season:</strong> March, April, June, July, August, November<br />
       The above price range is based on a standard cabin for twin sharing. Please enquiry for the exact price according to your nationality, cruising time and cruising route. Service charge of CNY150.00 per person is recruited by the ship company.</p>
    </div>
    <div class="value">
       <h2>Value for money</h2>
       <p>We believe that value for money is important; we hope you will travel with LeadtoChina again. When comparing prices, ensure you are comparing like for like often there may be a cheaper option, but there may be hidden extras or the quality may not be as good. You can get honest price &amp; service here.</p>
    </div>
</div>

</div>
<div class="bottom-menu"><?php echo $this->renderPartial("_cruiseNav", array('model'=>$model));?></div>
</div>