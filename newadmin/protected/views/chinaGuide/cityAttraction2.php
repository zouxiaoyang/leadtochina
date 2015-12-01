<?php 
  Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/chinaGuide.css'); 
  $this->setPageTitle($cityInfo->name." Attraction, ".$cityInfo->name." Tourist Attractions,  Sightseeing in ".$cityInfo->name);
  Yii::app()->clientScript->registerMetaTag($cityInfo->name." Attractions Guide: List of".$cityInfo->name."  tourist attractions with tours, pictures and detailed introduction and show you the sightseeing in ".$cityInfo->name);
?>
<style type="text/css">
<!--
#content{ width:961px; height:auto; padding:0px;}
-->
</style>
<!--  guide start  -->
<div id="guidenew">
    <div id="menu-tours"><strong>You are here: </strong>
    <a href="/">Home</a><a href="<?php echo Yii::app()->createUrl('cityTours/index');?>">China Guide</a>
    <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo', array('cityname'=>strtolower($cityInfo->name)));?>"><?php echo $cityInfo->name;?></a>
    <?php echo $cityInfo->name;?> Attractions
</div>
    <!--  guide-left start  -->
    <div id="guide-leftnew">
       <!--  text start  -->
        <div class="textnew">
          <h2><?php echo $cityInfo->name;?> Attttractions</h2>
          <!--  listcity start  -->
          <div class="listcity">
            <?php if($cityInfo->id==11):?>
                <ul>
                   <li><a href="/great-wall/">Great Wall</a> </li>
                   <li><a href="/summer-palace/">Summer Palace</a> </li>
                   <li><a href="/forbidden-city/">Forbidden City</a> </li>
                   <li style="padding-right:0px;"><a href="/tiananmen-square/">Tiananmen Square</a> </li>
                </ul>
            <?php elseif($cityInfo->id==180):?>
               <ul>
                  <li><a href="/terra-cotta-warriors/">Terra Cotta Warriors</a> </li>
               </ul>
            <?php elseif($cityInfo->id==129):?>
               <ul> 
                 <li ><a href="/west-lake/">West Lake</a> </li>
               </ul>
            <?php elseif($cityInfo->id==22):?>
                <ul>
                  <li ><a href="/li-river/">Li River</a> </li></ul>
            <?php elseif($cityInfo->id==108):?>
               <ul>
               <li><a href="/potala-palace/">Potala Palace</a> </li></ul>
            <?php endif;?>
          </div>
          <!--  listcity end  -->

          <?php foreach($categories_obj as $category):?>
          <?php
            $sql = "SELECT b.pic_dir,b.pic_path  FROM jos_cos_scenery a right join jos_cos_scenerypic b  on a.id=b.sceneryid and a.categoreid='{$category->id}' order by rand() limit 1";
            $attpic = Yii::app()->db->createCommand($sql)->queryRow();
            if($attpic['pic_path']){
              $picthumb="/".$attpic['pic_dir']."thumb/thumb_".$attpic['pic_path'];
            }
          ?>
          <div class="attract-lilst">
             <div class="titlenew"><?php echo $category->title;?></div>
          <!--  attract-lilst start  -->
             <!--  pic-desc start  -->
             <div class="pic-desc">
                <ul>
                   <li class="att-pic"><img src="<?php echo $picthumb;?>" /></li>
                   <li><?php echo $category->description;?></li>
                </ul>
             </div>
             <!--  pic-desc end  -->
             
             <!--  attract-list start  -->
             <div class="attract-list">
                <ul>
                   <?php foreach($scenerires_obj as $v):?>
                    <?php if($v->categoreid == $category->id):?>
                      <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/attractionView', array('cityname'=>$_GET['cityname'],'title'=>SiteUtils::stringURLSafe($v->name),'id'=>$v->id));?>"><?php echo $v->name?></a></li>
                    <?php endif;?>
                   <?php endforeach;?>
                </ul>
             </div>
             <!--  attract-list end  -->
          </div>
         <?php endforeach;?>
          <!--  attract-lilst end  -->
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
<script>
  $(function(){
    $(".attract-list").each(function(){
      var length = $(this).find("ul > li").length;
      if(length<=4){
        $(this).find("ul > li").css({
        "width":"210px",
        "white-space":"nowrap"
        });
      }
    })

  })
</script>
