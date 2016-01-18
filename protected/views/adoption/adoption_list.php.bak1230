<?php /*?><img class="img-responsive" src="/images/noresult-adoption-banner01.png" /><?php */?>
<img class="img-responsive" src="/images/adoptionhome-banner01.jpg" style="position:relative" />
<div class="container">
<?php 
	$this->renderPartial('_search');
?>
<br />
  <div class="row">
      <div class="orphanagelist clearfix">
	  <?php 
		$arr_tmp = array();

		foreach($arr_adoption_info as $province_name=>$info){
			$arr_tmp[$province_name] = count($info);
		}
		asort($arr_tmp);
		$j=1;
		foreach($arr_tmp as $key=>$value):?>
			<ul>
				<li class="title3"><?php echo $key;?></li>
					<?php foreach($arr_adoption_info[$key] as $v):?>
					  <li>
						<a href="<?php echo Yii::app()->createUrl('adoption/orphanageTravelGuide',array('aid'=>$v['aid']));?>"><?php echo $v['province_name'];?></a>
					  </li>
					<?php endforeach;?>
			 </ul>
			 <?php if($j%4==0):?>
				<div class="clearfix"></div>
			 <?php endif;?>
			 <?php $j++;?>
		  <?php endforeach;?>
       
      </div>
  </div>
</div>
