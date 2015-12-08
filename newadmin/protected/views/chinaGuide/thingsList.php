<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/chinaGuide.css'); ?>
<?php
$arr = explode('-', $_GET['title']);
$cityName = ucfirst(array_pop($arr));
  
$this->setPageTitle("Things to Do in {$cityName}, Top Things to Do in {$cityName}, What to See in {$cityName}");
Yii::app()->clientScript->registerMetaTag('keywords',"top 5 things to do in {$cityName}, what to see in {$cityName}, {$cityName} must-see");
Yii::app()->clientScript->registerMetaTag('description',"Top Things to do in {$cityName} including {$cityName} local highlights, best destinations, local food, what to see in {$cityName}.");
?>

<style type="text/css">
<!--
#content{ width:961px; height:auto; padding:0px;}
-->
</style>
<div id="menu-guide"><strong>You are here:</strong> <a href="/">Home</a> Things To Do In China</div>
<div class="clear"></div>
<!--  guide start  -->
<div id="guide">
    <!--  guide-left start  -->
    <div id="guide-left">   
      <div class="text">
        <h1>Things To Do</h1>
        <p>Do not know where to visit in China ? Which is the best time for China travel ? What to see in China ? What are the famous Chinese dishes ? Need a unique China trip ?You will find these answer here. Meanwhile, our professional trip advisor are offering the lastest and interesting travel info everyday. Get to know these must-see before travelling China will make your trip better.</p>
      </div> 
      <div class="thingslist">
         <ul>
           <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/thingsList', array('title'=>'things-to-do-in-beijing','catid'=>44));?>">Things to Do in Beijing</a></li>
           <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/thingsList', array('title'=>'things-to-do-in-china','catid'=>189));?>">Things to Do in China</a></li>
           <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/thingsList', array('title'=>'things-to-do-in-xian','catid'=>45));?>">Things to Do in Xian</a></li>
           <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/thingsList', array('title'=>'things-to-do-in-cities','catid'=>552));?>">Things to do in Cities</a></li>
         </ul>
        </div>
        <div class="list-things">
        <div class="list-title"><span class="number">#</span><span class="title"><span>Article Title</span></span></div>
          <?php $this->widget('zii.widgets.CListView', array(
                   'dataProvider'=>$dataProvider,
                   'itemView'=>'_thingsList',
                   'ajaxUpdate'=>false,
                   'pager'=>array(
                   'cssFile'=>False,
                   'header'=>'',
                  ),
                'template'=>"{items}\n{pager}",
             )); ?>
        </div>
      </div>   
    <!--  guide-left end  -->
    
    <!--  guide-right start  -->
    <div id="guide-right">
        <!--  right4 start  -->
        <div class="right4" style="margin-top:0px;"><?php echo $this->renderPartial('/common/customizeTour');?></div>
        <!--  right4 end  -->
    </div>
    <!--  guide-right end  -->
</div>
<!--  guide end  -->