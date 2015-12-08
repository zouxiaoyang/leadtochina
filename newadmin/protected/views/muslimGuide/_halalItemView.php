<ul>
   <li class="pic"><a href="<?php echo Yii::app()->createUrl('muslimGuide/muslimHalalFoodView', array('id'=>$data->id,'title'=>SiteUtils::stringURLSafe($data->title)));?>"><img src="<?php echo ImageUtils::getThumbnail(MuslimContents::UPLOAD_PATH . $data->image, '132x92');?>" alt="<?php echo $data->title;?>" /></a></li>
   <li><a href="<?php echo Yii::app()->createUrl('muslimGuide/muslimHalalFoodView', array('id'=>$data->id,'title'=>SiteUtils::stringURLSafe($data->title)));?>"><?php echo $data->title;?></a>
   <span title="<?php echo $data->address;?>"><?php echo substr($data->address,0,30);?> ...</span>
   <a href="<?php echo Yii::app()->createUrl('muslimGuide/muslimHalalFoodView', array('id'=>$data->id,'title'=>SiteUtils::stringURLSafe($data->title)));?>" class="detail">Detail</a>
   </li>
</ul>
