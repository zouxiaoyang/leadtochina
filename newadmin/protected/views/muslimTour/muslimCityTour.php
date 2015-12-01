<?php $themes_sub_tags=ToursPackageTag::getThemeSubTag();?>

<link rel="stylesheet" type="text/css" href="/travel/css/muslim.css" />
<div id="menu-home"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('muslimTour/index')?>">Muslim Tours</a> <a href="<?php echo Yii::app()->createUrl('muslimTour/muslimCityTourIndex')?>">City Muslim Tour</a> <?php echo JosCosCity::model()->findByPk($_GET['cityid'])->name;?> Muslim City</div>

<div id="left-muslim">
   <?php $this->renderPartial("/muslimTour/_leftMenu");?>
   <?php //$this->renderPartial('/message/_hotelMessageForm',array('model'=>$message));?>
</div>

<div id="right-muslim">
   <div class="text">
       <h2><?php echo JosCosCity::model()->findByPk($_GET['cityid'])->name;?> Muslim City</h2>
       	<?php echo JosCosCity::model()->findByPk($_GET['cityid'])->muslim_description;?>
   </div>
   <div class="compareleft">
   		<?php foreach ($muslimCityTours as $k=>$v):?>
   		<?php if ($v['url']) $url = $v['url']; else $url = "/index.php?option=com_showpc&view=default&Itemid=137&pcid=" . $v['id'];
   			  $tour_subtag_ids = array();
              if($v['tour_subtag_ids']){
                 $tour_subtag_ids = explode(',', $v['tour_subtag_ids']);
               }
   		?>
          <ul>
                <li class="pic3"><a target="_blank" href="<?php echo $url;?>"><img src="/<?php echo $v['filedir'].$v['pic'];?>" alt="<?php echo $v['name'];?>" /></a></li>
                <li class="pic-right">
                            <ol>
                                 <li class="cont-tour"><a target="_blank" href="<?php echo $url;?>"><?php echo $v['name'];?></a></li>
                                 <li class="destin"><b>Destination:</b> <span><?php echo $v['route'];?></span><br>
                                                    <b>Included:</b> <?php echo strip_tags($v['tour_intro']);?><br>
                                                    <?php if($tour_subtag_ids):?>
                                                    <b>Highlights:</b> 
                                                     <?php $tag_arr = array(); foreach($tour_subtag_ids as $k=>$tag):?>
								                     <?php if($themes_sub_tags[$tag]) $tag_arr[] = $themes_sub_tags[$tag];?>	                   
								                     <?php endforeach;?>
								                     <?php if($tag_arr) echo implode(',', $tag_arr);?>
								                     <?php endif;?>
                                                    </li>
                           </ol>
              </li>
              <li class="pic-review">
                <ol>
                   <li>[Reviews <a target="_blank" href="<?php echo $url;?>#question_nav"><?php echo $v['reviews'];?></a>]</li>
                   <li>From <b><?php echo SiteUtils::getCurrencyPrice($v['price']);?></b></li>
                   <li><a target="_blank" href="<?php echo $url;?>"><img alt="" src="/images/muslim/button.png"></a></li>
                </ol>
              </li>
          </ul>          
      <?php endforeach;?>
   </div>
   <!--  
   <div class="pager">
               <ul class="yiiPager" id="yw1">
                    <li class="first hidden"><a href="#">&lt;&lt; First</a></li>
                    <li class="previous hidden"><a href="#">&lt; Previous</a></li>
                    <li class="page selected"><a href="#">1</a></li>
                    <li class="page"><a href="#">2</a></li>
                    <li class="page"><a href="#">3</a></li>
                    <li class="page"><a href="#">4</a></li>
                    <li class="page"><a href="#">5</a></li>
                    <li class="next"><a href="#">Next &gt;</a></li>
                    <li class="last"><a href="#">Last &gt;&gt;</a></li>
               </ul>
   </div>
    -->
   <div class="single">
      <h2>Single City Muslim Tours Package</h2>
      <?php $this->renderPartial('_muslimCityList');?>
   </div>
</div>
