 <ul class="tesu">
    <li class="pic"><a href="<?php echo Yii::app()->createUrl('muslimGuide/muslimMosquesView', array('id'=>$data->id,'title'=>SiteUtils::stringURLSafe($data->title)));?>"><img src="<?php echo ImageUtils::getThumbnail(MuslimContents::UPLOAD_PATH . $data->image, '191x131');?>" alt="<?php echo $data->title;?>" /></a></li>
    <li><a href="<?php echo Yii::app()->createUrl('muslimGuide/muslimMosquesView', array('id'=>$data->id,'title'=>SiteUtils::stringURLSafe($data->title)));?>"><?php echo $data->title;?></a><?php if($data->address):?>Add:<?php echo $data->address;?><?php endif;?></li>
</ul>
