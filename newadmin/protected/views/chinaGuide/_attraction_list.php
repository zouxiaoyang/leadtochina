<?php
  $catInfo = Categories::model()->findByPk($data->categoreid);
  $catitle=str_replace(chr(32),'-',strtolower(trim($catInfo->title)));
  $cattilehtml="<a href=\"/china-guide/$catitle/\">".$catInfo->title."</a>";
  $sql = "SELECT pic_dir,pic_path  FROM jos_cos_scenerypic   WHERE sceneryid='{$data->id}' LIMIT 1";
  $attpic = Yii::app()->db->createCommand($sql)->queryRow();
  if($attpic['pic_path']){
    $picthumb="/".$attpic['pic_dir']."thumb/thumb_".$attpic['pic_path'];
    $picbig="/".$attpic['pic_dir'].$attpic['pic_path'];
  }
  if($picthumb){
    $pichtml="background-image: url($picthumb); ";
  }
?>
<div style="border-bottom-width: 1px;border-bottom-style: solid;border-bottom-color: #CCC;margin-bottom:30px;">
<div style="<?php echo $pichtml;?> background-repeat: no-repeat; background-position: center center;width:150px;height:150px; border-width: 1px; border-style: solid; border-color: #ddd; float:left; margin-right:15px; margin-bottom:15px;"> 
</div>
<a style="font-size:15px;margin-bottom:10px;" href="<?php echo Yii::app()->createUrl('chinaGuide/attractionView', array('cityname'=>$_GET['cityname'],'title'=>SiteUtils::stringURLSafe($data->name),'id'=>$data->id));?>">
<?php echo $data->name?></a><br/><br/>
<strong>Attractions Category:</strong>
<?php 
    echo $cattilehtml."<br />";
    echo substr(strip_tags($data->description),0, 400);
?>
<div class="clearfix"></div>
</div>