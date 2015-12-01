<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/chinaGuide.css'); ?>
<style type="text/css">
<!--
#content{ width:961px; height:auto; padding:0px;}
-->
</style>
<div id="menu-guide"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('chinaGuide/index');?>">China Guide</a> <a href="<?php echo Yii::app()->createUrl('chinaGuide/cultureIndex');?>">Chinese Culture</a> <?php echo $thisCategory->title;?></div>
<div class="clear"></div>
<!--  guide start  -->
<div id="guide">
    <!--  guide-left start  -->
    <div id="guide-left">
       <!--  text start  -->
       <div class="text">
          <h2><?php echo $thisCategory->title;?></h2>
          <?php echo $thisCategory->description;?>
       </div>
       <!--  text end  -->
       <div class="clear"></div>
       <!--  arts start  -->
        <div class="arts">
        <?php foreach ((array)$subCategoryList as $k=>$v):?>
           <ul <?php if($k%2!=0):?>class="two"<?php endif;?>>
              <li class="pic"><img src="<?php echo ImageUtils::getThumbnail(Categories::UPLOAD_PATH.$v->ufile, '150x199')?>" alt="" /></li>
              <li>  
                 <ol>
                    <li id="anchor_<?php echo $v->id?>" class="title"><?php echo $v->title;?></li>
                    <li><?php echo $v->description;?></li>
                    <li>
                    	<?php foreach ((array)$v->subCategory as $k1=>$v1):?>
                    	<a href="<?php echo Yii::app()->createUrl('chinaGuide/cultureView',array('catid'=>$v1->id,'title'=>SiteUtils::stringURLSafe($v1->title),'onecatid'=>$onecatid));?>"><?php echo $v1->title;?></a>
                      <?php endforeach;?>                  
                    </li>
                 </ol>
              </li>
           </ul>
        <?php endforeach;?>
        </div>
       <!--  arts end  -->
    </div>
    <!--  guide-left end  -->
    
    <!--  guide-right start  -->
    <div id="guide-right">
        <!--  right1 start  -->
        <div class="right1">
          <h2>Culture</h2>
          <ul class="two">
             <li><a href="/travel/china-guide/chinesae-culture/arts-607"><b><img src="/images/chinaGuide/pic85.jpg" alt="" /></b><span>Arts</span></a></li>
             <li><a href="/travel/china-guide/chinesae-culture/traditions-608"><b><img src="/images/chinaGuide/pic43.jpg" alt="" /></b> <span>Traditions</span></a></li>
             <li><a href="/travel/china-guide/chinesae-culture/food-609"><b><img src="/images/chinaGuide/pic45.jpg" alt="" /></b><span>Food</span></a></li>
             <li><a href="/travel/china-guide/chinesae-culture/history-610"><b><img src="/images/chinaGuide/pic44.jpg" alt="" /></b><span>History</span></a></li>
             <li><a href="/travel/china-guide/chinesae-culture/architecture-611"><b><img src="/images/chinaGuide/pic84.jpg" alt="" /></b><span>Architecture</span></a></li>
             <li><a href="/travel/china-guide/chinesae-culture/literature-612"><b><img src="/images/chinaGuide/pic83.jpg" alt="" /></b><span>Literature</span></a></li>
          </ul>
          <ul style="background:#f8f8f8; border-top:none;">
             <li><a href="/travel/china-guide/chinesae-culture/chinese-language-699">Chinese Language</a></li>
             <li><a href="/travel/china-guide/chinesae-culture/chinese-religions-700">Chinese Religions</a></li>
             <li><a href="/travel/china-guide/chinesae-culture/china-ethnic-groups-701">China Ethnic Groups</a></li>
             <li><a href="/travel/china-guide/chinesae-culture/catid-704-707/spring-festival-565">Chinese Traditional Festival</a></li>
             <li><a href="/travel/china-guide/chinesae-culture/catid-708-710/zodiac-signs-introduction-575">12 Chinese Zodiac Signs</a></li>
             <li><a href="/travel/china-guide/chinesae-culture/catid-711-713/chinese-lucky-numbers-576">Chinese Lucky Numbers</a></li>
          </ul>
        </div>
        <!--  right1 end  -->
        <div class="rightbottom"></div>
        <div class="right4"><a href="/travel/china-diy-tours"><img src="/images/tourism/left_custom_29.jpg" alt="" /></a></div>
    </div>
    <!--  guide-right end  -->
</div>
<!--  guide end  -->

