<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/chinatours.css'); ?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/component.css'); ?>
<style type="text/css">
<!--
a{ color:#2487D2}
-->
</style>
<div id="menu-home"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('CityTours/Index')?>">City Tours</a> <?php echo $cityIntro->title;?> </div>
<div class="main">
    <div class="left">
       <div class="city-content">
          <h2><?php echo $cityIntro->title;?></h2>
          <?php echo $cityIntro->description;?>
       </div>
       <?php foreach ($cityPackageInfo as $k=>$v):?>
        <div class="Tourlist">
                <div>
                    <div class="Tourimgbg">
                         <div class="position"><img src="<?php echo $v['ufile'];?>"></div>
                    </div>
                    <div class="TourDetail">
                         <h2 id="note1"><?php echo $v['title'];?></h2>
                         <ul>
                         <?php foreach ($v['tours'] as $k=>$tour):?>
                            <li><a href="<?php echo Yii::app()->createUrl('toursPackage/view', array('title'=>SiteUtils::stringURLSafe($tour['name']),'id'=>$tour['id']));?>" title="<?php echo $tour['name'];?>" style="white-space: nowrap;"><?php if(strlen($tour['name'])>50)echo substr($tour['name'],0,50); else echo $tour['name'];?></a> <span>From <?php echo SiteUtils::getCurrencyPrice($tour['price']);?> p/p</span> </li>
                         <?php endforeach;?>
                         </ul>
                         <div class="TourDesc"><?php echo $v['description'];?></div>
                    </div>
               </div>
        </div>
       <?php endforeach;?>
    </div>
    <div class="right">
        <?php $this->Widget('application.components.widgets.SearchChinaTours'); ?>

        <div class="clear"></div>
        <div class="note3"><a href="<?php echo Yii::app()->createUrl('cityTours/airView');?>"><img border="0" src="/images/air.jpg"></a></div>
        <div class="listcity">
           <h2>Shanghai <span>City Guide</span></h2>
           <ul>
		          <li class="fact"><a title="Shanghai facts" href="/shanghai/facts.html">Shanghai Facts</a></li>
              <li class="Attraction"><a title="Shanghai Attractions" href="/shanghai/attractions.html">Shanghai Attractions</a></li>
              <li class="shopping"><a title="Shanghai  Shopping" href="/shanghai/shopping.html">Shanghai Shopping </a></li>
              <li class="Nightlife"><a title="Shanghai  Nightlife" href="/shanghai/nightlife.html">Shanghai Nightlife</a></li>
              <li class="tour"><a title="Shanghai  Tours" href="/shanghai/tours/">Shanghai Tours</a></li>
              <li class="food"><a title="Shanghai  Food" href="/shanghai/food-&amp;-restaurants.html">Shanghai Food &amp; Restaurants</a></li>
              <li class="tip"><a title="Shanghai  Travel Tips" href="/shanghai/travel-tips.html">Shanghai Travel Tips</a></li>
              <li class="Climate"><a title="Shanghai  Travel Tips" href="/shanghai/climate.html">Shanghai Climate</a></li>
              <li class="Transportation"><a title="Shanghai  Transportations" href="/shanghai/transportations.html">Shanghai Transportations</a></li>     
              <li class="hotel"><a title="Shanghai  hotel" href="/hotel/shanghai-hotels/">Shanghai Hotel</a></li>
		      </ul>
        </div>
        <div style="width:100%; height:auto; float:left; margin-bottom:19px;">
<img src="/images/right1_10.jpg"></div>
        <div class="note3"><a href="/travel/china-diy-tours"><img border="0" src="/images/tourism/left_custom_29.jpg"></a></div>
        </div>
</div>
<?php 
  $catid_google_services_arr = array(
    88 => 'HBJFCMLw_AIQ3o7h3QM', //hangzhou
    121 => 'Sb7cCNLu_AIQ3o7h3QM', //xian
    109 => 'IUjOCNrt_AIQ3o7h3QM', //shanghai
    69 => 'biRBCLri_AIQ3o7h3QM', //Best China Tour 
    73 => 'CPVHCKrk_AIQ3o7h3QM', //cheap-china-tours
    68 => 'ny2iCKLl_AIQ3o7h3QM', //small-group-tours
    70 => 'FNhOCJLn_AIQ3o7h3QM', //yangtze-river-tours
    71 => 'eKU8CIro_AIQ3o7h3QM', //silk-road-tours
    75 => 'Dcc0CNLf_AIQ3o7h3QM', //special-china-tours
    73 => 'Dcc0CNLf_AIQ3o7h3QM', //minority-discovery
  );
  //$catid = JRequest::getVar('catid');
?>

<?php 
  if($catid_google_services_arr[$catid]) $google_code = $catid_google_services_arr[$catid];
  else $google_code = 'kiLlCMrg_AIQ3o7h3QM';
?>
<!-- Google Code for &#30331;&#24405;&#36807;SHANGHAI TOURS Remarketing List -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1001932638;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "<?php echo $google_code;?>";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/1001932638/?value=0&amp;label=<?php echo $google_code;?>&amp;guid=ON&amp;script=0"/>
</div>
</noscript>


















