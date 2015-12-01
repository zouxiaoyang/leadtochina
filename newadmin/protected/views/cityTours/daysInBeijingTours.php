<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/newbeijing1.css'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/My97DatePicker/WdatePicker.js');?>
<?php
 $this->setPageTitle("Day Tours in Beijing");
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
  <a href="/travel/city-beijing-tours">Beijing Tours</a> Day Tours in Beijing
</div>
<!--  left start  -->
<div id="left">
   <div class="side_title"><h2>Day Tours in Beijing</h2></div>  
   <div class="side_content">
      <ul>
        <li class="pic"><a href="/travel/search-beijing-tours?tour_type=1_Private+Tours"><img src="/images/beijingtours/new/pic20.jpg" alt="" /><span>Beijing Private Tour</span></a></li>
        <?php 
          $tour_ids = array(103,944,333);
          $tours = ToursPackage::model()->findAllByPk($tour_ids);
        ?>
        <?php foreach($tours as $v):?>
        <li><a href="<?php echo $v->url();?>"><?php echo $v->name;?></a></li>
        <?php endforeach;?>
        <li class="view"><a href="/travel/search-beijing-tours?tour_type=1_Private+Tours">View Beijing Private Tour Full List</a></li>
      </ul>
      <ul>
        <li class="pic"><a href="/travel/search-beijing-tours?tour_type=2_Join+Groups"><img src="/images/beijingtours/new/pic21.jpg" alt="" /><span>Beijing Coach Tour</span></a></li>
        <?php 
          $tour_ids = array(90,356,575);
          $tours = ToursPackage::model()->findAllByPk($tour_ids);
        ?>
        <?php foreach($tours as $v):?>
        <li><a href="<?php echo $v->url();?>"><?php echo $v->name;?></a></li>
        <?php endforeach;?>
        <li class="view"><a href="/travel/search-beijing-tours?tour_type=2_Join+Groups">View Beijing Coach Tour Full List</a></li>
      </ul>
      <ul>
        <li class="pic"><a href="/beijing/tours?v=list&id=1"><img src="/images/beijingtours/new/pic22.jpg" alt="" /><span>Great Wall Tour</span></a></li>
        <?php 
          $tour_ids = array(312,556,541);
          $tours = ToursPackage::model()->findAllByPk($tour_ids);
        ?>
        <?php foreach($tours as $v):?>
        <li><a href="<?php echo $v->url();?>"><?php echo $v->name;?></a></li>
        <?php endforeach;?>
        <li class="view"><a href="/beijing/tours?v=list&id=1">View Great Wall Tour Full List</a></li>
      </ul>

      <ul>
        <li class="pic"><a href="/travel/search-beijing-tours?theme=113_72+Hours+Visa+Free+Tour"><img src="/images/beijingtours/new/pic23.jpg" alt="" /><span>72hrs Visa Free Tours</span></a></li>
        <?php 
          $tour_ids = array(944,949,333);
          $tours = ToursPackage::model()->findAllByPk($tour_ids);
        ?>
        <?php foreach($tours as $v):?>
        <li><a href="<?php echo $v->url();?>"><?php echo $v->name;?></a></li>
        <?php endforeach;?>
        <li class="view"><a href="/travel/search-beijing-tours?theme=113_72+Hours+Visa+Free+Tour">View 72hrs Visa Free Tours Full List</a></li>
      </ul>
      <ul>
        <li class="pic"><a href="/travel/search-beijing-tours?theme=114_Airport+Stop+Tour"><img src="/images/beijingtours/new/pic24.jpg" alt="" /><span>Airport Stop Tours</span></a></li>
        <?php 
          $tour_ids = array(685,598,653);
          $tours = ToursPackage::model()->findAllByPk($tour_ids);
        ?>
        <?php foreach($tours as $v):?>
        <li><a href="<?php echo $v->url();?>"><?php echo $v->name;?></a></li>
        <?php endforeach;?>
        <li class="view"><a href="/travel/search-beijing-tours?theme=114_Airport+Stop+Tour">View Airport Stop Tours Full List</a></li>
      </ul>
      <ul>
        <li class="pic"><a href="/travel/search-beijing-tours?theme=110_Beijing+Musilm+Tour"><img src="/images/beijingtours/new/pic25.jpg" alt="" /><span>Beijing Muslim Tours</span></a></li>
        <?php 
          $tour_ids = array(341,417,588);
          $tours = ToursPackage::model()->findAllByPk($tour_ids);
        ?>
        <?php foreach($tours as $v):?>
        <li><a href="<?php echo $v->url();?>"><?php echo $v->name;?></a></li>
        <?php endforeach;?>
        <li class="view"><a href="/travel/search-beijing-tours?theme=110_Beijing+Musilm+Tour">View Beijing Muslim Tours Full List</a></li>
      </ul>
   </div>   
</div>
<!--  left end  -->

<!--  right start  -->
<div id="rightnew">
  <!--  <div class="right_list">
      <h2>Beijing Day Tours</h2>
      <ul>
         <li><a href="#">&gt; Half Day Beijing Tour</a></li> 
         <li><a href="/travel/search-beijing-tours?days=1+Day">&gt; 1-Day Beijing Tour</a></li>
         <li><a href="/travel/search-beijing-tours?days=2+days">&gt; 2-Days Beijing Tour</a></li>
         <li><a href="/travel/search-beijing-tours?days=3+Days">&gt; 3-Days Beijing Tour</a></li>
         <li><a href="/travel/search-beijing-tours?days=4+Days">&gt; 4-Days Beijing Tour</a></li>
         <li><a href="/travel/search-beijing-tours?days=5+Days">&gt; 5-Days Beijing Tour</a></li>
         <li><a href="/travel/search-beijing-tours?days=6+Days">&gt; 6-Days Beijing Tour</a></li>
         <li><a href="#">&gt; 7-Days Beijing Tour</a></li>
         <li class="tesu"><img src="/images/beijingtours/new/tesu.jpg" alt="" /></li>
      </ul>
   </div> -->
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
    </div>
</div>
<!--  right end  -->
</div>