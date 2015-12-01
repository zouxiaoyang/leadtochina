<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/newbeijing1.css'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/My97DatePicker/WdatePicker.js');?>
<?php
 $this->setPageTitle("Beijing Side Trips");
include_once(SITEROOT.'/config/beijingtours.php');
$request_uri = Yii::app()->createUrl('cityTours/search',array('title'=>$title)).'?';
?>
<style type="text/css">
<!--
.contentnew{background:#eee; overflow:hidden; font-size:12px; margin-top:8px;}
#content{ padding-top:0px;}
#left,#rightnew{ margin-top:4px;}
#right{ margin-top:0px;}
.get_start{ margin-top:12px;}
.errorMessage{display:none}
-->
</style>
<div class="content-beijing">
<div id="menu-tours"><strong>You are here: </strong><a href="/">Home</a><a href="/citytour">City Tours</a> 
  <a href="/travel/city-beijing-tours">Beijing Tours</a> Beijing Side Trips
</div>
<!--  left start  -->
<div id="left">
   <div class="side_title"><h2>Beijing Side Trips</h2></div>  
   <div class="side_content">
      <ul>
        <li class="pic"><a href="/travel/beijing-shanghai-tours"><img src="/images/beijingtours/new/pic6.jpg" alt="" /><span>Beijing Shanghai Tours</span></a></li>
        <?php 
          $tour_ids = '351,411,352';

          //$tours = ToursPackage::model()->findAllByPk($tour_ids);

          $tours = ToursPackage::model()->findAll(array(
           'select' => 'id,name',
           'condition' => "id in($tour_ids)"
          ));

        ?>
        <?php foreach($tours as $v):?>
        <li><a href="<?php echo $v->url();?>"><?php echo $v->name;?></a></li>
        <?php endforeach;?>
        <li class="view"><a href="/travel/beijing-shanghai-tours">View Beijing Shanghai Tours Full List</a></li>
      </ul>
      <ul>
        <li class="pic"><a href="/travel/beijing-xian-tours"><img src="/images/beijingtours/new/pic7.jpg" alt="" /><span>Beijing Xi'an Tours</span></a></li>
        <?php 
          $tour_ids = '562,152,410';
          $tours = ToursPackage::model()->findAll(array(
           'select' => 'id,name',
           'condition' => "id in($tour_ids)"
          ));
         //$tours = ToursPackage::model()->findAllByPk($tour_ids);
        ?>
        <?php foreach($tours as $v):?>
        <li><a href="<?php echo $v->url();?>"><?php echo $v->name;?></a></li>
        <?php endforeach;?>
        <li class="view"><a href="/travel/beijing-xian-tours">View Beijing Xi'an Tours Full List</a></li>
      </ul>
      <ul>
        <li class="pic"><a href="/travel/cruise-port/tianjin-port-port-excursion-5"><img src="/images/beijingtours/new/pic8.jpg" alt="" /><span>Beijing Tianjin Tours</span></a></li>
        <?php 
          $tour_ids = '908,907,923';
          $tours = ToursPackage::model()->findAll(array(
           'select' => 'id,name',
           'condition' => "id in($tour_ids)"
          ));
          //$tours = ToursPackage::model()->findAllByPk($tour_ids);
        ?>
        <?php foreach($tours as $v):?>
        <li><a href="<?php echo $v->url();?>"><?php echo $v->name;?></a></li>
        <?php endforeach;?>
        <li class="view"><a href="/travel/cruise-port/tianjin-port-port-excursion-5">View Beijing Tianjin Tours Full List</a></li>
      </ul>

      <ul>
        <li class="pic"><a href="/travel/beijing-xian-shanghai-tours"><img src="/images/beijingtours/new/pic9.jpg" alt="" /><span>Beijing Xi'an Shanghai</span></a></li>
        <?php 
          $tour_ids = '17,72,578';
          $tours = ToursPackage::model()->findAll(array(
           'select' => 'id,name',
           'condition' => "id in($tour_ids)"
          ));
          //$tours = ToursPackage::model()->findAllByPk($tour_ids);
        ?>
        <?php foreach($tours as $v):?>
        <li><a href="<?php echo $v->url();?>"><?php echo $v->name;?></a></li>
        <?php endforeach;?>
        <li class="view"><a href="/travel/beijing-xian-shanghai-tours">View Beijing Xi'an Shanghai Full List</a></li>
      </ul>
      <ul>
        <li class="pic"><a href="/travel/search-beijing-tours?des=6_Beijing+Datong+Tours"><img src="/images/beijingtours/new/pic10.jpg" alt="" /><span>Beijing Datong Tours</span></a></li>
        <?php 
          $tour_ids = '385,372,376';
          $tours = ToursPackage::model()->findAll(array(
           'select' => 'id,name',
           'condition' => "id in($tour_ids)"
          ));
          //$tours = ToursPackage::model()->findAllByPk($tour_ids);
        ?>
        <?php foreach($tours as $v):?>
        <li><a href="<?php echo $v->url();?>"><?php echo $v->name;?></a></li>
        <?php endforeach;?>
        <li class="view"><a href="/travel/search-beijing-tours?des=6_Beijing+Datong+Tours">View Beijing Datong Tours Full List</a></li>
      </ul>
      <ul>
        <li class="pic"><a href="/travel/search-beijing-tours?des=10_Beijing+Luoyang+Tours"><img src="/images/beijingtours/new/pic11.jpg" alt="" /><span>Beijing Luoyang Tours</span></a></li>
        <?php 
          $tour_ids = '382,387,833';
          $tours = ToursPackage::model()->findAll(array(
           'select' => 'id,name',
           'condition' => "id in($tour_ids)"
          ));
          //$tours = ToursPackage::model()->findAllByPk($tour_ids);
        ?>
        <?php foreach($tours as $v):?>
        <li><a href="<?php echo $v->url();?>"><?php echo $v->name;?></a></li>
        <?php endforeach;?>
        <li class="view"><a href="/travel/search-beijing-tours?des=10_Beijing+Luoyang+Tours">View Beijing Luoyang Tours Full List</a></li>
      </ul>
      <ul>
        <li class="pic"><a href="/travel/search-beijing-tours?des=19_beijing_pingyao_tours"><img src="/images/beijingtours/new/pic12.jpg" alt="" /><span>Beijing Pingyao Tours</span></a></li>
        <?php 
          $tour_ids = '945,946,947';
          $tours = ToursPackage::model()->findAll(array(
           'select' => 'id,name',
           'condition' => "id in($tour_ids)"
          ));
          //$tours = ToursPackage::model()->findAllByPk($tour_ids);
        ?>
        <?php foreach($tours as $v):?>
        <li><a href="<?php echo $v->url();?>"><?php echo $v->name;?></a></li>
        <?php endforeach;?>
        <li class="view"><a href="/travel/search-beijing-tours?des=19_Beijing-Pingyao-Tours">View Beijing Pingyao Tours Full List</a></li>
      </ul>
      <ul>
        <li class="pic"><a href="/travel/china-winter-tours"><img src="/images/beijingtours/new/pic13.jpg" alt="" /><span>Beijing Harbin Tours</span></a></li>
        <?php 
          $tour_ids = '905,906,308';
          $tours = ToursPackage::model()->findAll(array(
           'select' => 'id,name',
           'condition' => "id in($tour_ids)"
          ));
          //$tours = ToursPackage::model()->findAllByPk($tour_ids);
        ?>
        <?php foreach($tours as $v):?>
        <li><a href="<?php echo $v->url();?>"><?php echo $v->name;?></a></li>
        <?php endforeach;?>
        <li class="view"><a href="/travel/china-winter-tours">View Beijing Harbin Tours Full List</a></li>
      </ul>
      <ul>
        <li class="pic"><a href="/travel/search-beijing-tours?des=18_beijing_inner_mongolia_tours"><img src="/images/beijingtours/new/pic14.jpg" alt="" /><span>Beijing Inner Mongolia Tours</span></a></li>
        <?php 
          $tour_ids = '941,942';
          $tours = ToursPackage::model()->findAll(array(
           'select' => 'id,name',
           'condition' => "id in($tour_ids)"
          ));
          //$tours = ToursPackage::model()->findAllByPk($tour_ids);
        ?>
        <?php foreach($tours as $v):?>
        <li><a href="<?php echo $v->url();?>"><?php echo $v->name;?></a></li>
        <?php endforeach;?>
        <li class="view"><a href="/travel/search-beijing-tours?des=18_beijing_inner_mongolia_tours">View Beijing Inner Mongolia Tours Full List</a></li>
      </ul>
      <ul>
        <li class="pic"><a href="/travel/search-beijing-tours?des=8_Beijing+Chengde+Tours"><img src="/images/beijingtours/new/pic15.jpg" alt="" /><span>Beijing Chengde Tours</span></a></li>
        <?php 
          $tour_ids = '403,400';
          $tours = ToursPackage::model()->findAll(array(
           'select' => 'id,name',
           'condition' => "id in($tour_ids)"
          ));
          //$tours = ToursPackage::model()->findAllByPk($tour_ids);
        ?>
        <?php foreach($tours as $v):?>
        <li><a href="<?php echo $v->url();?>"><?php echo $v->name;?></a></li>
        <?php endforeach;?>
        <li class="view"><a href="/travel/search-beijing-tours?des=8_Beijing+Chengde+Tours">View Beijing Chengde Tours Full List</a></li>
      </ul>
      <ul>
        <li class="pic"><a href="/travel/search-beijing-tours?des=7_Beijing+Qinhuangdao+Tours"><img src="/images/beijingtours/new/pic16.jpg" alt="" /><span>Beijing Qinhuangdao Tours</span></a></li>
        <?php 
          $tour_ids = '398,950,951';
          $tours = ToursPackage::model()->findAll(array(
           'select' => 'id,name',
           'condition' => "id in($tour_ids)"
          ));
          //$tours = ToursPackage::model()->findAllByPk($tour_ids);
        ?>
        <?php foreach($tours as $v):?>
        <li><a href="<?php echo $v->url();?>"><?php echo $v->name;?></a></li>
        <?php endforeach;?>
        <li class="view"><a href="/travel/search-beijing-tours?des=7_Beijing+Qinhuangdao+Tours">View Beijing Qinhuangdao Tours Full List</a></li>
      </ul>
      <ul>
        <li class="pic"><a href="/travel/city-huangshan-tours#3"><img src="/images/beijingtours/new/pic17.jpg" alt="" /><span>Beijing Huangshan Tours</span></a></li>
        <?php 
          $tour_ids = '390,878,879';
          $tours = ToursPackage::model()->findAll(array(
           'select' => 'id,name',
           'condition' => "id in($tour_ids)"
          ));
          //$tours = ToursPackage::model()->findAllByPk($tour_ids);
        ?>
        <?php foreach($tours as $v):?>
        <li><a href="<?php echo $v->url();?>"><?php echo $v->name;?></a></li>
        <?php endforeach;?>
        <li class="view"><a href="/travel/city-huangshan-tours#3">View Beijing Huangshan Tours Full List</a></li>
      </ul>
      <ul>
        <li class="pic"><a href="/travel/search-beijing-tours?des=11_Beijing+Guilin+Tours"><img src="/images/beijingtours/new/pic18.jpg" alt="" /><span>Beijing Guilin Tours</span></a></li>
        <?php 
          $tour_ids = '514,517,515';
          $tours = ToursPackage::model()->findAll(array(
           'select' => 'id,name',
           'condition' => "id in($tour_ids)"
          ));
          //$tours = ToursPackage::model()->findAllByPk($tour_ids);
        ?>
        <?php foreach($tours as $v):?>
        <li><a href="<?php echo $v->url();?>"><?php echo $v->name;?></a></li>
        <?php endforeach;?>
        <li class="view"><a href="/travel/search-beijing-tours?des=11_Beijing+Guilin+Tours">View Beijing Guilin Tours Full List</a></li>
      </ul>
      <ul>
        <li class="pic"><a href="/travel/search-beijing-tours?des=14_Hong+Kong+to+Beijing+Tour"><img src="/images/beijingtours/new/pic19.jpg" alt="" /><span>Beijing Hong Kong Tours</span></a></li>
        <?php 
          $tour_ids = '581,580';
          $tours = ToursPackage::model()->findAll(array(
           'select' => 'id,name',
           'condition' => "id in($tour_ids)"
          ));
          //$tours = ToursPackage::model()->findAllByPk($tour_ids);
        ?>
        <?php foreach($tours as $v):?>
        <li><a href="<?php echo $v->url();?>"><?php echo $v->name;?></a></li>
        <?php endforeach;?>
        <li class="view"><a href="/travel/search-beijing-tours?des=14_Hong+Kong+to+Beijing+Tour">View Beijing Hong Kong Tours Full List</a></li>
      </ul>
   </div>   
</div>
<!--  left end  -->

<!--  right start  -->
<div id="rightnew">
   <div class="right_list">
      <h2>Beijing Tour Service</h2>
      <ul>
         <li><a href="/travel/search-beijing-tours?tour_type=1_Private+Tours">&gt; Beijing Private Tours</a></li>
         <li><a href="/travel/search-beijing-tours?tour_type=2_Join+Groups">&gt; Beijing Coach Tours</a></li>
         <li><a href="/beijing/tours?v=list&id=1">&gt; Great Wall Tours</a></li>
         <li><a href="/travel/beijing-side-trips">&gt; Beijing Side Trips</a></li>
         <li><a href="/travel/search-beijing-tours?theme=113_72+Hours+Visa+Free+Tour">&gt; 72 Hours Visa Free Tour</a></li>
         <li><a href="/travel/search-beijing-tours?theme=110_Beijing+Musilm+Tour">&gt; Beijing Muslim Tours</a></li>
         <li><a href="/travel/search-beijing-tours?theme=114_Airport+Stop+Tour">&gt; Airport Stop Tour</a></li>
         <li><a href="/travel/air">&gt; Great Wall Helicopter Tour</a></li>
      </ul>
   </div>
   <div id="right">
       <div class="tripcont"><a href="/index.php?option=com_diytour"><img src="/images/beijingtours/new/diy.jpg" alt="" /></a></div>
       <?php $this->renderPartial("_message");?>   
       <div class="tripcont">
        <script src="/travel/js/tripadvisor.js"></script> 
       </div>
    </div>
</div>
<!--  right end  -->
</div>

<!-- Google Code for &#30331;&#24405;&#36807;BEIJING TOURS -->
<!-- Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. For instructions on adding this tag and more information on the above requirements, read the setup guide: google.com/ads/remarketingsetup -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1001932638;
var google_conversion_label = "xYT9COLs_AIQ3o7h3QM";
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1001932638/?value=1.000000&amp;label=xYT9COLs_AIQ3o7h3QM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
