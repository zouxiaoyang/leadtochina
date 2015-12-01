<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/adoption.css');?>

<style type="text/css">
<!--
#myFocus{ width:245px; height:169px; float:left; margin-top:15px;}
#adoption-left{ width:220px;}
#content{padding: 10px 21px 10px 20px; width: 920px;}
#menu-home{ width:910px;}
-->
</style>

<!-- contentnew start  -->
<div class="contentnew">
  <!-- leftspace start  -->
  <div class="leftspace"> 
     <!-- content start  -->
     <div id="content">
        <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('adoption/index');?>">China Adoption Tours</a> <?php echo $provinceDescription->name;?> Reunion</div>
        <!-- adoption-left start  -->
        <div id="adoption-left">
			<?php $this->renderPartial('_adoptionLeft');?>
        </div>
        <!-- adoption-left end  -->
        
        <!-- adoption-right start  -->
        <div id="adoption-right">
            <!-- text start  -->
            <div class="text">
               <h2><?php echo $provinceDescription->name;?> Guide</h2>
               <?php echo $provinceDescription->description;?>
            </div>
            <!-- text end  -->
            
            <!-- recommended start  -->
            <div class="recommended"> 
                <!-- rleft start  -->
                <div class="rleft">
                   <?php
                    $price_array=unserialize($packageProvince['price_serialize']);
                   ?>
                   <h2><a><?php echo $provinceDescription->name;?> Reunion Tour Package</a></h2>
                   <ul>
                      <li class="name"><a href="<?php echo $packageProvince->url();?>" title="<?php echo $packageProvince->name;?>"><?php echo substr($packageProvince->name,0,40);?>...</a></li>
                      <li class="city" title="<?php echo $packageProvince->route;?>"><?php echo $packageProvince->route;?></li>
                      <li class="reviews"><a href="<?php echo $packageProvince->url();?>">[Reviews <?php echo $packageProvince->reviews;?>]</a><span>From <b><?php echo SiteUtils::getCurrencyPrice($price_array[1]);?></b></span></li>
                   </ul>
                </div>
                <!-- rleft end  -->
                
                <!-- rright start  -->
                <div class="rright">
                    <h2>Recommended Reason:</h2>
                     <?php 
			           $recommand_reason=explode(',', $packageProvince['recommand_reason']);           
			         ?>		         
                    <ul>
                           <li title="<?php echo $recommand_reason[0];?>"><?php echo substr($recommand_reason[0],0,45);?>...</li> 
                           <li class="rtwo" title="<?php echo $recommand_reason[1];?>"><?php echo substr($recommand_reason[1],0,45);?>...</li>
                           <li class="rthree" title="<?php echo $recommand_reason[2];?>"><?php echo substr($recommand_reason[2],0,45);?>...</li>
                           <li class="rfour" title="<?php echo $recommand_reason[3];?>"><?php echo substr($recommand_reason[3],0,45);?>...</li>
                    </ul>
               </div>
               <!-- rright end  -->
            </div>
            <!-- recommended end  -->
            
            <!-- welfare start  -->
            <div class="welfare">
                <div class="walfare-title">Orphanages Visit Request Infornation</div>
                <div class="clear"></div>
                <table cellspacing="0" cellpadding="0">
                   <tbody>
                      <tr class="welfaretop">
                        <td width="56">Province</td>
                        <td width="260">Orphanages we have arranged</td>
                        <td width="411">Documents for approval of visit</td>
                        <td width="191">Provincial fee for orphanage visit</td>
                      </tr>
                      <tr>
                      <td><?php echo $provinceDescription->name; ?></td>
                      <td><?php echo $orphanage->arranged_info; ?></td>
                        <td>
                          <?php echo $orphanage->approval_info;?>
                        </td>
                          <td><?php echo $orphanage->fee_info;?></td>
                      </tr>
                    </tbody>
                 </table>

            </div>
            <!-- welfare end  -->            
                        
            <!-- anhui start  -->
            <div class="anhui">
               <ul>
               <?php if(count($provinceArticle)==5)array_pop($provinceArticle);?>
               <?php foreach ((array)$provinceArticle as $k=>$v):?>             
               	  <li><a href="<?php echo Yii::app()->createUrl('adoption/homeLandView',array('id'=>$v->id,'provinceid'=>$provinceid));?>"><h2><?php echo $v->title;?></h2> <img src="<?php echo ImageUtils::getThumbnail(AdoptionContent::UPLOAD_PATH . $v->image, '308x95');?>" alt="" /></a></li>
               <?php endforeach;?>                  
               </ul>
            </div>
            <!-- anhui end  -->
            
            <!-- list3 start  -->
            <div class="list3">
               <?php $this->renderPartial('allProvince');?>
            </div>
            <!-- list3 end  -->
        </div>
        <!-- adoption-right end  -->
     </div>
     <!-- content end  -->
  </div>
  <!-- leftspace end  -->
</div>
<!-- contentnew end  -->
