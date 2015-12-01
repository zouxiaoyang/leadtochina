<?php 
  Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/chinaGuide.css'); 
  $this->setPageTitle($cityInfo->name." Attraction, ".$cityInfo->name." Tourist Attractions,  Sightseeing in ".$cityInfo->name);
  Yii::app()->clientScript->registerMetaTag($cityInfo->name." Attractions Guide: List of".$cityInfo->name."  tourist attractions with tours, pictures and detailed introduction
 and show you the sightseeing in ".$cityInfo->name);
?>
<style type="text/css">
<!--
#content{ width:961px; height:auto; padding:0px;}
-->
</style>
<div id="menu-guide"><strong>You are here: </strong>
    <a href="/">Home</a><a href="<?php echo Yii::app()->createUrl('cityTours/index');?>">China Guide</a>
    <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo', array('cityname'=>strtolower($cityInfo->name)));?>"><?php echo $cityInfo->name;?></a>
    <?php echo $cityInfo->name;?> Attractions
</div>
<!--  guide start  -->
<div id="guide">
    <!--  guide-left start  -->
    <div id="guide-left">
       <!--  text start  -->
        <div class="text">
          <h1><?php echo $cityInfo->name;?> Attractions</h1>
          <?php if($cityInfo->id==11):?>
          <ul>
             <li style="width:150px;float:left"><a href="/great-wall/">Great Wall</a> </li>
             <li style="width:150px;float:left"><a href="/summer-palace/">Summer Palace</a> </li>
             <li style="width:150px;float:left"><a href="/forbidden-city/">Forbidden City</a> </li>
             <li style="width:150px;float:left"><a href="/tiananmen-square/">Tiananmen Square</a> </li>
          </ul><br />
             <br /> 
             <?php elseif($cityInfo->id==180):?>
         <ul>
            <li><a href="/terra-cotta-warriors/">Terra Cotta Warriors</a> </li>
         </ul><br />
         <br />
         <?php elseif($cityInfo->id==129):?>
         <ul> 
           <li ><a href="/west-lake/">West Lake</a> </li>
         </ul><br />
         <br />
         <?php elseif($cityInfo->id==22):?>
        <ul>
          <li ><a href="/li-river/">Li River</a> </li></ul><br />
         <br />
        <?php elseif($cityInfo->id==108):?>
       <ul>
       <li><a href="/potala-palace/">Potala Palace</a> </li></ul><br />
      <br />
      <?php endif;?>

       <?php $this->widget('zii.widgets.CListView', array(
             'dataProvider'=>$dataProvider,
             'itemView'=>'_attraction_list',
             'ajaxUpdate'=>false,
              'pager'=>array(
                'cssFile'=>False,
                'header'=>'',
              ),
             'template'=>"{items}\n{pager}",
    )); ?>
        </div>
       <!--  text end  -->
    </div>
    <!--  guide-left end  -->
    
    <!--  guide-right start  -->
    <div id="guide-right">
        <!--  right1 start  -->
        <div class="right1">
          <?php $this->renderPartial('/common/cityGuide', array('cityName'=>$cityInfo->name,'cityId'=>$cityInfo->id));?>
        </div>
        <!--  right1 end  -->
        <!--  right1 start  -->
        <?php echo $this->renderPartial("/common/weather", array('cityInfo'=>$cityInfo));?>
        <!--  right1 end  -->
        <div class="rightbottom"></div>
        <div class="right4"><?php echo $this->renderPartial('/common/customizeTour');?></div>
    </div>
    <!--  guide-right end  -->
</div>
<!--  guide end  -->
