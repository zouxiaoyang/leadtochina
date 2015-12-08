      <div class="rightlist1">
         <h2><img src="/images/adoptionNew/homeland.png" alt="" /></h2>
         <ul>
            <li><a href="/travel/adoption/11-day-beijing-xian-chengdu-guilinyangshuo-guangzhou-shanghai-orphanage-province-tour-1">Group 1</a></li>
            <li><a href="/travel/adoption/12-days-beijing-xian-guilin-yangshuo-orphanage-province-guangzhou-2">Group 2</a></li>
            <li><a href="<?php echo Yii::app()->createUrl('adoption/orphanageVisit');?>">Orphanage Visit</a></li>
            <li><a href="<?php echo Yii::app()->createUrl('adoption/privateTours');?>">Private Tours</a></li>
            <li><a href="<?php echo Yii::app()->createUrl('adoption/customizeAdoption');?>">Customize Tour</a></li>
         </ul>
      </div>
      
      <div class="rightlist1">
         <h2><img src="/images/adoptionNew/connections.png" alt="" /></h2>
         <ul>
            <li><a href="/travel/adoption-guide/doc-required-for-orphanages-visit-177">Doc for SWI Visit</a></li>
            <li><a href="/travel/adoption-guide/tips-for-a-homeland-orphanage-visit-172">Tips for SWI Visit</a></li>
            <li><a href="<?php echo Yii::app()->createUrl('adoption/orphanageList');?>">List of China SWI</a></li>
            <li><a href="<?php echo Yii::app()->createUrl('adoption/storyIndex');?>">Latest Travel Stories</a></li>
         </ul>
      </div>
      
      <div class="rightlist1">
         <h2><img src="/images/adoptionNew/travel.png" alt="" /></h2>
         <ul>
            <?php foreach($chinaAdoptionGuide as $v):?>
                   <li> <a href="<?php echo Yii::app()->createUrl('adoption/adoptionList', array('title'=>SiteUtils::stringURLSafe($v->title),'id'=>$v->id));?>" title="<?php echo $v->title;?>"><?php echo $v->title;?></a></li>
            <?php endforeach;?>
         </ul>
      </div>