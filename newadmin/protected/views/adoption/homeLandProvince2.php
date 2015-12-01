<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/adoptionHome.css');?>

<style type="text/css">
<!--
.errorMessage{display:none}
#myFocus{ width:245px; height:169px; float:left; margin-top:15px;}
#adoption-left{ width:220px;}
#content{padding: 10px 21px 10px 20px; width: 920px;}
.addthis_toolbox a{ color:#666;}
-->
</style>
<!-- contentnew start  -->
<div class="contentnew">
  <!-- leftspace start  -->
  <div class="leftspace"> 
     <!-- content start  -->
     <div id="content">
        <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('adoption/index');?>">China Adoption Tours</a> <?php echo $provinceDescription->name;?> Reunion</div>
        <div id="banner"><img src="/images/adoption/banner_<?php echo strtolower($provinceDescription->name);?>.jpg"  alt="" /></div>
        <!--  brief start  -->
        <div class="brief">
            <!--  briefleft start  -->
            <div class="briefleft">
                 <div class="textleft">
                   <h2>About <?php echo $provinceDescription->name;?></h2>
                       <p><?php echo SiteUtils::mb_truncate_text(strip_tags($provinceDescription->description),550);?></p>
                 </div>
                 <div class="callbutton"><a href="<?php echo Yii::app()->createUrl('adoption/customizeAdoption');?>"><img src="/images/adoption/call.png"></a></div>
            </div>
            <!--  briefleft end  -->
            
            <!--  briefright start  -->
            <div class="briefright">
               <ul>
                  <li class="title"><?php echo $provinceDescription->name;?> Guide</li>
                   <?php if(count($provinceArticle)==5)array_pop($provinceArticle);?>
                   <?php foreach ((array)$provinceArticle as $k=>$v):?>             
                      <li><a href="<?php echo Yii::app()->createUrl('adoption/homeLandView',array('id'=>$v->id,'provinceid'=>$provinceid));?>"><?php echo $v->title;?></a></li>
                   <?php endforeach;?>       
               </ul>
            </div>
            <!--  briefright end  -->
        </div>
        <!--  brief end  -->
        
        <!--  package start  -->
        <div class="package">
            <!-- <div class="packagetitle"><?php echo $provinceDescription->name; ?> Reunion Tour Package</div>  -->
            <?php if($packageProvince):?>

            <?php $pic_dir = str_replace('uploads', 'images/uploads', $packageProvince->filedir);?>
            <div class="packagepic"><img src="<?php echo ImageUtils::getThumbnail($pic_dir.$packageProvince->pic, '303x200');?>"></div>
            <!--  packageright start  -->
            <div class="packageright">
              
                 <a href="<?php echo $packageProvince->url();?>"><?php echo $packageProvince->name;?></a>
                 <span><?php echo $packageProvince->route;?></span>
                 <div class="clear"></div>
                 <div class="recommend">
                    <h2>Recommended Reason:</h2>
                    <?php $recommand_reason=explode(',', $packageProvince['recommand_reason']); ?>
                    <ul>
                       <li title="<?php echo $recommand_reason[0];?>"><?php echo SiteUtils::mb_truncate_text($recommand_reason[0],80);?></li> 
                           <li class="rtwo" title="<?php echo $recommand_reason[1];?>"><?php echo SiteUtils::mb_truncate_text($recommand_reason[1],80);?></li>
                           <li class="rthree" title="<?php echo $recommand_reason[2];?>"><?php echo SiteUtils::mb_truncate_text($recommand_reason[2],80);?></li>
                           <li class="rfour" title="<?php echo $recommand_reason[3];?>"><?php echo SiteUtils::mb_truncate_text($recommand_reason[3],80);?></li>
                    </ul>
                    <a style="float:left; width:195px; margin-right:25px;" href="<?php echo $packageProvince->url();?>"><img src="/images/adoption/itinerary.png"></a> <a style="float:left; width:138px;" href="<?php echo Yii::app()->createUrl("adoption/customizeAdoption"); ?>"><img src="/images/adoption/creat.png"></a>
                 </div>
            </div>
            <?php endif;?>
            <!--  packageright end  -->
        </div>
        <!--  package end  -->
        
        <!-- welfare start  -->
            <div class="welfare">
                <div class="walfare-title">Information on China Orphanage Visit</div>
                <div class="clear"></div>
                <table cellspacing="0" cellpadding="0">
                   <tbody>
                      <tr class="welfaretop">
                        <td width="91">Province</td>
                        <td width="445">Orphanages we have arranged</td>
                        <td width="228">Documents for approval of visit</td>
                        <td width="154">Provincial fee for orphanage visit</td>
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
        
        <!-- orp-address start  -->
        <div class="orp-address">
           <!-- <div class="walfare-title">Chinese Orphanage Addresses - <?php echo $provinceDescription->name;?> Province</div>-->
		   <div class="walfare-title">Chinese Orphanage Addresses - <?php echo $provinceDescription->name;?></div>
           <div class="clear"></div>
         <table cellspacing="0" cellpadding="0" border="0">
          <tbody>
           <tr>
            <td colspan="4" style="padding:10px;"><span>Note:</span> At the end of the address, please do not forget to add "Province, Postal Code, People's Republic of China", for example:BengBu Children's Welfare Institute 950 Chaoyang Road BangBu, Anhui 238000 People's Repulic of China</td>
          </tr>
           <tr class="tblheader">
            <td width="332">Orphanage Name</td>
            <td width="312">Address</td>
            <td width="130">Postal <br />Code</td>
            <td width="129">Telephone No.<br />(86)+</td>
          </tr>
          <?php foreach($orphanage_address as $v):?>
          <tr>
            <?php if($v->description):?>
            <td><a href="<?php echo Yii::app()->createUrl('adoption/orphanageTravelGuide', array('id'=>$v->id));?>"><?php echo $v->orphanage_name;?></a></td>
            <?php else:?>
            <td><?php echo $v->orphanage_name;?></td>
            <?php endif;?>
            
            <td><?php echo $v->address;?> </td>
            <td><?php echo $v->postal_code;?></td>
            <td width="17"><?php echo $v->tel;?></td>
          </tr>
          <?php endforeach;?>
          
		</tbody></table>
        </div>
        <!-- orp-address end  -->
        
        <!-- tips start  -->
        <div class="tips">
             <div class="tipstitle">Tips for a China Orphanage Visit</div>
             <div class="tipstext">
                <p><img style="float:right; margin-left:5px;" src="/images/adoption/tipspic1.jpg" alt="" /> When you plan to have a China return trip, you'd better prepare a gift for other children in the orphanage. You can ask our travel consultant about the details and buy some gifts several days before your trip or you can buy that after your arrival in China if you're inconvenient for the excessive baggage. The guide from LeadtoChina will give you proper suggestions and help you to buy these. If you're confused about what items the SWI need, here are some good examples: snacks, or a basket of fruit, backpack, books or other school supplies. You are also suggested to buy fans and air conditioning in summer in some poor SWI. Most of the SWI will give you a present in return for memory.</p> 
                <p>Many families care about the donation, and if you want to do this, we suggest you to exchange the donated money for RMB and show this to the director of the SWI. Some SWI will issue a donation certificate to you but not every SWI will do this.</p>
                <p>According to the size of the SWI and the frequency of the families' return, the visit can be the most important thing for the staff or a small part of the orphanage’s routine work. You can talk to your child about the actual situation you’ve known to let them make enough preparations. You’d better tell them what will happen and what to do if things are not the same as they expected. They should keep a flexible attitude towards life and enjoy the process instead of following a certain model to start as things are not exactly what we think and this is very important.
One more important point which is often ignored is that most of the orphanage children always have various special needs. It is better to consider this before visiting and your child should know that some children in the SWI have physical or mental disability. All these can provide a better atmosphere for the children with special needs in the orphanage during your return visit.
</p>
                <img style="float:left; margin-right:5px; margin-top:5px;" src="/images/adoption/tipspic2.jpg" alt="" />
                <span><p>If you'd love to invite the orphanage director to lunch, please don't forget other people in the SWI as they are usually the director's assistants. If you want to invite the caregiver or nanny, you’d better extend the invitation through the director to request the consent out of courtesy. 
Our guide can help you to do this and convey your invitation accurately and politely. 
What’s more, some of the orphanages will offer you free lunch but many SWI will charge you for about 100 USD as lunch fee. You can inquire about this through your trip consultant before travelling.</p>
                <p>At last, some Chinese individuals act turgidly in front of you for not losing face. But most people follow traditional Chinese values, modesty and gentleness. Bearing this in mind can help you deal with problems in different situations successfully during your return visit.</p></span>
             </div>
        </div>
        <!-- tips end  -->
        
        <!--  questions start  -->
           <?php echo $this->renderPartial("_adoptionQuestion", array('commonQuestion'=>$commonQuestion, 'chinaTripQuestion'=>$chinaTripQuestion));?>
          <!--  questions end  -->          
     </div>
     <!-- content end  -->
  </div>
  <!-- leftspace end  -->
</div>
<!-- contentnew end  -->