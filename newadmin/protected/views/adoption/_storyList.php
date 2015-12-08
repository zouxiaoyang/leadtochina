 <ul>
 <li class="pic"><a href="<?php echo Yii::app()->createUrl('adoption/orphanageArticle', array('title'=>SiteUtils::stringURLSafe($data->title),'id'=>$data->id));?>"><img src="<?php echo ImageUtils::getThumbnail(AdoptionOrphanageAddressArticle::UPLOAD_PATH.$data->pic, '152x93')?>"  /></a></li>
 <li><a href="<?php echo Yii::app()->createUrl('adoption/orphanageArticle', array('title'=>SiteUtils::stringURLSafe($data->title),'id'=>$data->id));?>" target="_blank"><?php echo $data->title;?></a>
      
     <?php echo mb_substr(strip_tags($data->content),0, 280);?>... 
     <span>Date: <?php echo date('M dS, Y', strtotime($data->date));?></span>
 </li>
</ul>