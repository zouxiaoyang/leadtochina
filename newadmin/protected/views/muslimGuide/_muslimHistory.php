<ul>
	<?php foreach ((array)MuslimContents::getMuslimHistoryArticles() as $k=>$v):?>
	<li><a <?php if($_GET['id']==$v->id):?>class="dq"<?php endif;?> href="<?php echo Yii::app()->createUrl('muslimGuide/muslimHistoryView', array('id'=>$v->id,'name'=>SiteUtils::stringURLSafe($v->title)));?>"><?php echo $v->title;?></a></li>
	<?php endforeach;?>
</ul>
