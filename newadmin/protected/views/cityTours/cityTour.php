<?php
   Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/citytours.css'); 
   $this->setPageTitle($cityIntro->seo_title);
   Yii::app()->clientScript->registerMetaTag('keywords', $cityIntro->seo_key);
   Yii::app()->clientScript->registerMetaTag('description', $cityIntro->seo_description);
 ?>
<style type="text/css">
 .errorMessage{display:none}
#content{ background:#EEEEEE; font-family:Verdana,Arial,Helvetica,sans-serif; font-size:12px; height:auto; margin:0 auto 15px; overflow:hidden; padding:9px 21px 12px 18px; width:920px;}
.more-indexcont{ top:1540px;}
</style>

<!--  index start  -->
<div class="index">
    <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('cityTours/index');?>">City Tours</a> <?php echo $cityInfo->name;?> Tours</div>
    <div id="banner"><img src="/images/citytours/banner_<?php echo strtolower($cityInfo->name);?>.jpg" alt="" ></div>
    <div class="clear"></div>
    <!--  left start  -->
    <div id="left">
        <!--  text start  -->
        <div class="text">
           <div class="textleft">
              <h2><?php echo $cityIntro->title;?></h2>
              <p><?php echo $cityIntro->description;?></p>
              <span style="display:none">Show More <img src="/images/citytours/down.png" ></span>
            </div>
            <div class="callbutton"><a href="<?php echo Yii::app()->createUrl("chinaTours/quickCustomizeTours", array('city'=>$cityInfo->name));?>"><img src="/images/citytours/call.png" ></a></div>
        </div>
        <!--  text end  -->
        
        <!--  toplist start  -->
        <div class="toplist">
          <?php $this->renderPartial("_cityTopTour", array('cityInfo'=>$cityInfo));?>
        </div>
        <!--  toplist end  -->
        
        
        <?php foreach ($cityPackageInfo as $k=>$v): $tours = array();?>
        <?php if($v['title'] == 'Shanghai Port Transfer & Tours') continue;?>
        <!--  tourlist start  -->
        <div class="tourlist">
           <h2><a name="<?php echo SiteUtils::stringURLSafe($v['title']);?>"></a><?php echo $v['title'];?> <span>( <?php echo strip_tags($v['jianjie']);?> )</span></h2>
           <div class="listpic"><img src="<?php echo $v['ufile'];?>"  style="width:220px;height:150px"></div>
           <div class="listcontent">
              <ul>
                 <li><?php echo $v['description'];?></li>
                 <li>
                    <ol>
                    <?php if($v['title'] == 'Shanghai Beijing Tour'):?>
                      <li><a href="/travel/china-2-days-beijing-private-tours-fly-from-shanghai-351.html" >2 Days Beijing Private Tours Fly from Shanghai</a> <span>From <strong>$365</strong> p/p</span> </li>
                      <li><a href="/travel/china-4-days-beijing-classic-tours-fly-from-shanghai-321.html" >4 Days Beijing Classic Tours Fly from Shanghai</a> <span>From <strong>$575</strong> p/p</span> </li>
                      <li><a href="/travel/china-1-day-beijing-tours-from-shanghai-by-overnight-train-511.html" >1-Day Beijing Tours from Shanghai by Overnight Train</a> <span>From <strong>$475</strong> p/p</span> </li>
                      <li><a href="/travel/china-5-days-beijing-group-tour-from-shanghai-573.html" >5 Days Beijing Group Tour from Shanghai</a> <span>From <strong>$525</strong> p/p</span> </li>
                      <li><a href="/travel/china-3-days-beijing-tour-from-shanghai-round-trip-352.html" >3 Days Beijing Tour from Shanghai (Round Trip)</a> <span>From <strong>$627</strong> p/p</span> </li>
                     <?php elseif($v['title'] == 'Shanghai China Tours'):?>
                         <li><a href="/travel/china-9-days-shanghai-xian-beijing-private-tour-578.html" >9 Days Shanghai Xian Beijing Private Tour</a> <span>From <strong>$1513</strong> p/p</span> </li>
                        <li><a href="/travel/china-7-days-shanghai--yangtze-cruise-tour-upstream-701.html" >7 Days Shanghai & Yangtze Cruise Tour (Upstream)</a> <span>From <strong>$1025</strong> p/p</span> </li>
                        <li><a href="/travel/china-12-days-china-contrast-tour-with-yangtze-cruise-702.html" >12 Days China Contrast Tour with Yangtze Cruise</a> <span>From <strong>$1520</strong> p/p</span> </li>
                        <li><a href="/travel/china-9-days-guizhou-ethnic-minorities-budget-tour-73.html" >9 Days Guizhou Ethnic Minorities Budget Tour</a> <span>From <strong>$2033</strong> p/p</span> </li>
                    <?php elseif($cityInfo->name == 'Shanghai' && in_array($v['title'], array('Shanghai Side Trips'))):?>
                      <?php 
                          $tours_ids['Shanghai Side Trips'] = array(155,583);
                          if($tours_ids[$v['title']]) $tours = ToursPackage::model()->findAllByPk($tours_ids[$v['title']]);
                      ?>
                    <?php elseif($cityInfo->name == 'Xian' && in_array($v['title'], array('Beijing Xian tour','Xian China Tours','Shanghai Xian Tour'))):?>
                        <?php
                          $tours_ids['Beijing Xian tour'] = array(562,152,409,410,571,327,326);
                          $tours_ids['Xian China Tours'] = array(14,72,93,714,79);
                          $tours_ids['Shanghai Xian Tour'] = array(731,512,733,734,732,735,736,513);
                          if($tours_ids[$v['title']]) $tours = ToursPackage::model()->findAllByPk($tours_ids[$v['title']]);
                        ?>
                    <?php elseif($cityIno->name='Guilin' && in_array($v['title'], array('China Tours including Guilin'))):?>
                        <?php
                          $tours_ids['China Tours including Guilin'] = array(21,47,739,714,703,78);
                          if($tours_ids[$v['title']]) $tours = ToursPackage::model()->findAllByPk($tours_ids[$v['title']]);
                        ?>
					<?php elseif($cityIno->name='Lhasa' && in_array($v['title'], array('China Tibet Tours'))):?>
                        <?php
                          $tours_ids['China Tibet Tours'] = array(744,93,83,34,79);
                          if($tours_ids[$v['title']]) $tours = ToursPackage::model()->findAllByPk($tours_ids[$v['title']]);
                        ?>
					<?php elseif($cityIno->name='HongKong' && in_array($v['title'], array('China Tours from Hong Kong'))):?>
                        <?php
                          $tours_ids['China Tours from Hong Kong'] = array(580,581,26);
                          if($tours_ids[$v['title']]) $tours = ToursPackage::model()->findAllByPk($tours_ids[$v['title']]);
                        ?>
					<?php elseif($cityInfo->name == 'Suzhou' && in_array($v['title'], array('Shanghai to Suzhou Tours','China Tours Including Suzhou'))):?>
                        <?php
                          $tours_ids['Shanghai to Suzhou Tours'] = array(585,157,743,584,208);
                          $tours_ids['China Tours Including Suzhou'] = array(780,199);
                          if($tours_ids[$v['title']]) $tours = ToursPackage::model()->findAllByPk($tours_ids[$v['title']]);
                        ?>
					<?php elseif($cityInfo->name == 'Hangzhou' && in_array($v['title'], array('Hangzhou Side Tours','China Tours including Hangzhou'))):?>
                        <?php
                          $tours_ids['Hangzhou Side Tours'] = array(155);
                          $tours_ids['China Tours including Hangzhou'] = array(783,779,780);
                          if($tours_ids[$v['title']]) $tours = ToursPackage::model()->findAllByPk($tours_ids[$v['title']]);
                        ?>
					<?php elseif($cityInfo->name == 'Chengdu' && in_array($v['title'], array('Chengdu Side Tours','China Tours including Chengdu'))):?>
					<?php
					  $tours_ids['Chengdu Side Tours'] = array(231,507,937);
					  $tours_ids['China Tours including Chengdu'] = array(713,32,83,78);
					  if($tours_ids[$v['title']]) $tours = ToursPackage::model()->findAllByPk($tours_ids[$v['title']]);
					?>
                    <?php endif;?>

					<?php if($tours):?>
						<?php foreach($tours as $v2):?>
						<li><a href="<?php echo Yii::app()->createUrl('toursPackage/view', array('title'=>SiteUtils::stringURLSafe($v2->name),'id'=>$v2->id));?>" title="<?php echo $v2->name;?>"><?php echo $v2->name;?></a> <span>From <strong><?php echo SiteUtils::getCurrencyPrice($v2->price);?></strong> p/p</span> </li>
						<?php endforeach;?>
          <?php endif;?>

          <?php if($v['title'] == 'China Tours including Huangshan'):?>
                 <li><a href="/travel/china-3-days-beijing-huangshan-tours-round-trip-by-flight-390.html">3 Days Huangshan Tours Fly from Beijing</a></li>
                 <li><a href="/travel/china-5-days-huangshan-and-hangzhou-tour-237.html">5 Days Huangshan and Hangzhou Tour</a> <span>From <strong>$859</strong> p/p</span> </li>
                 <li><a href="/travel/china-10-days-east-china-tour-with-mount-huang-780.html">10 Days Shanghai, Huangshan, Suzhou, Wuzhen, Hangzhou Tour</a> <span>From <strong>$1788</strong> p/p</span> </li>
                 <li><a href="/travel/china-12-days-china-landscape-tour-782.html">12 Days Beijing, Guilin, Shanghai, Huangshan, Shanghai Tour</a> <span>From <strong>$2145</strong> p/p</span> </li>
                 <li><a href="/travel/china-12-days-of-selected-picturesque-china-tour-779.html">12 Days Shanghai, Huangshan, Hangzhou, Guilin, Yangshuo, Hong Kong Tour</a> <span>From <strong>$3105</strong> p/p</span> </li>
                 <li><a href="/travel/china-16-days-china-classic-photography-tour-783.html">16 Days Beijing, South China, Xian, Guilin, Yangshuo, Hong Kong Tour</a> <span>From <strong>$2909</strong> p/p</span> </li>
          <?php else:?>
                    <?php foreach ($v['tours'] as $k=>$tour):?>
                            <li><a href="<?php echo Yii::app()->createUrl('toursPackage/view', array('title'=>SiteUtils::stringURLSafe($tour['name']),'id'=>$tour['id']));?>" title="<?php echo $tour['name'];?>"><?php echo $tour['name'];?></a> <span>From <strong><?php echo SiteUtils::getCurrencyPrice($tour['price']);?></strong> p/p</span> </li>
                     <?php endforeach;?>
          <?php endif;?>
                    </ol>
                 </li>
              </ul>
           </div>
        </div>
        <!--  tourlist end  -->
        <?php endforeach;?>

        
        <!--  questions start  -->
        <div class="questions">
           <div class="ques-menu">
              <ul>
                 <li class="dq">Top Trip Faqs</li>
              </ul>
           </div>
           <!--  common-questuon start  -->
           <div class="common-questuon" id="questionTab2">

             <div class="tripleft">
               <!--  answer start  -->
                  <div class="answer">
                        <?php if($chinaTripQuestion->totalItemCount):?>
                          <?php $this->widget('zii.widgets.CListView', array(
                            'dataProvider'=>$chinaTripQuestion,
                            'itemView'=>'_chinaTripQuestion',
                            'pager'=>array(
                              'cssFile'=>False,
                              'header'=>'',
                            ),
                            'template'=>"{items}\n{pager}",
                          )); ?>
                         <?php endif;?>
                  </div>
                  <!--  answer end  -->
                </div>

                  <!--  tripright start  -->
              <div class="tripright">
                <h2>Planning a trip ? Ask us here</h2>
                <div class="clear"></div>
                <table border="0" cellspacing="0" cellpadding="0">
                   <tbody>
                      <tr>
                         <td><textarea name="message" id="qmessage" cols="" rows=""></textarea>
                         <span class="qmessage_error errorMessage">It can't be blank.</span>
                         </td>
                      </tr>
                      <tr>
                         <td style="font-size:11px; font-family:Arial, Helvetica, sans-serif;"><input type="checkbox" name="" value="" style=" float:none; width:auto; border:none;"> Do you want to book a tour / hotel / flights.etc</td>
                      </tr>
                      <tr>
                         <td><span>Your Name:</span> <input name="username" id="qusername" type="text" />
                         <span class="qusername_error errorMessage">It can't be blank.</span>
                         </td>
                      </tr>
                      <tr>
                         <td><span>E-mail:</span> <input name="email" id="qemail" type="text" />
                         <span class="qemail_error errorMessage">Please enter correct email.</span>
                         </td>
                      </tr>
                      <tr>
                         <td><input type="button" value="" name="yt0" style="height:40px;border:0px;cursor:pointer;background:url(/images/view/submit.png) left center no-repeat; dispaly:block; width:221px;" class="form_button" onclick="_cityTours.submitMessage(this);"></td>
                      </tr>
                   </tbody>
                 </table>
              </div>
              <!--  tripright end  -->
           </div>
           <!--  common-questuon end  -->
        </div>
        <!--  questions end  -->
    </div>
    <!--  left end  -->
    
    <!--  right start  -->
    <div id="right">
     <div class="guide">
       <?php echo $this->renderPartial('/common/cityGuide', array('cityName'=>$cityInfo->name,'cityId'=>$cityInfo->id));?>
     </div>
     
     <?php if($cityInfo->id == 14): //shanghai tours?>
     <div class="citylist">
         <ul>
           <li style="height:152px;"><a href="/travel/cruise-port/shanghai-port-port-excursion-6"><img src="/images/citytours/ports.jpg"></a></li>
         </ul>
     </div>
     <?php endif;?>
     <div class="citylist">
        <h2 style="height:30px;"><img src="/images/citytours/citytitle.jpg"></h2>
        <ul>
           <li><a href="/beijing/tours/"><img src="/images/citytours/city1.jpg"></a></li>
           <li><a href="/xian/tours/"><img src="/images/citytours/city2.jpg"></a></li>
           <li><a href="/shanghai/tours/"><img src="/images/citytours/city3.jpg"></a></li>
           <li><a href="/guilin/tours/"><img src="/images/citytours/city4.jpg"></a></li>
           <li><a href="/lhasa/tours/"><img src="/images/citytours/city5.jpg"></a></li>
           <li><a href="/chengdu/tours/"><img src="/images/citytours/city6.jpg"></a></li>
        </ul>
     </div>

    <div id="right_div" class="right_div">
     <h2><img src="/images/chinatours/right.jpg" alt="" /></h2>
     <div class="rcontent">
        <ul>
           <li><strong>Your Budget</strong> 
            <select id="choose_price" name="choose_price">
              <option value="0">Choose Price</option>
            <?php foreach(Yii::app()->params['price_list'] as $v):?>
              <option value="<?php echo $v;?>"><?php echo $v;?></option>
            <?php endforeach;?>                                     
            </select>
           </li>
           
           <li><strong>Duration</strong>
            <select id="choose_days" name="choose_days">
            <?php foreach(Yii::app()->params['days_list'] as $v):?>
              <option value="<?php echo $v;?>"><?php echo $v;?></option>
            <?php endforeach;?>                                     
            </select>
           </li>
        </ul>
        <div class="clear"></div>
        <table border="0" cellspacing="0" cellpadding="0">
          <tbody>
            <tr>
               <td><strong>Visiting</strong></td>
            </tr>
            <tr>
               <td>
                  <ol>
                     <li><input type="checkbox" name="city2[]" value="Beijing">Beijing</li>
                     <li><input type="checkbox" name="city2[]" value="Xian">Xian</li>
                     <li><input type="checkbox" name="city2[]" value="Shanghai">Shanghai</li>
                     <li><input type="checkbox" name="city2[]" value="Guilin">Guilin</li>
                     <li><input type="checkbox" name="city2[]" value="Yangtze">Yangtze</li>
                     <li><input type="checkbox" name="city2[]" value="Tibet">Tibet</li>
                  </ol>
               </td>
            </tr>
            <tr>
               <td><span id="more_index">Select more cities</span></td>
            </tr>
            <tr>
               <td style="padding:5px 0px 2px 0px;">
                  <form name="toursearchpanelform" method="get" action="<?php echo Yii::app()->createUrl("chinaTours/searchList");?>">
                      <input type="hidden" name="city" id="menu_city" value="" />
                      <input type="hidden" name="days" id="menu_days" value="" />
                      <input type="hidden" name="price" id="menu_price" value="" />
                      <input type="image" src="/images/chinatours/search1.jpg" />
                  </form>
                </td>
            </tr>
             <tr>
               <td><a style="text-decoration:underline; color:#333; font-style:italic;" href="/travel/advance-search">Advanced Search &raquo;</a></td>
            </tr>
          </tbody>
        </table>
     </div>
     <div class="advanced"><img src="/images/chinatours/advanced.jpg" alt="" /></div>
     <div class="recommend">
         <ul>
             <li><span>1</span> <a href="<?php echo Yii::app()->createUrl('chinaTours/top10Tours');?>">Top 10 China Tours</a></li>
             <li><span>2</span> <a href="<?php echo Yii::app()->createUrl('chinaTours/classicTours');?>">Classic China Tours</a></li>
             <li><span>3</span> <a href="<?php echo Yii::app()->createUrl('chinaTours/yangtzeRiverTours');?>">Yangtze River Tours</a></li>
             <li><span>4</span> <a href="<?php echo Yii::app()->createUrl('chinaTours/familyTours');?>">China Family Tours</a></li>
             <li><span>5</span> <a href="<?php echo Yii::app()->createUrl('chinaTours/tibetTours');?>">China Tibet Tours</a></li>
             <li><span>6</span> <a href="<?php echo Yii::app()->createUrl('chinaTours/trainTravel');?>">China Train Travel</a></li>
             <li><span>7</span> <a href="<?php echo Yii::app()->createUrl('chinaTours/72HourVisaFreeTours');?>">72-hour Visa-free Tours</a></li>
             <li><span>8</span> <a href="<?php echo Yii::app()->createUrl('adoption');?>">China Adoption Travel</a></li>
         </ul>
     </div>
    </div>
    
   </div>
    <!--  right end  -->
</div>
<!--  index end  -->

<?php echo $this->renderPartial("//common/pop_more_cities");?>

<script>
var _cityTours = {
		questionTab:function(num, obj){
			  $(obj).parents("ul").find("li").removeClass("dq");
			  $(obj).addClass("dq");
			  if(num == 1){
				  $("#questionTab1").hide();
				  $("#questionTab2").show();
			  }else{
				  $("#questionTab1").show();
				  $("#questionTab2").hide();
			  }
		},
		submitMessage:function(obj){
			  var message = $(obj).parents("table").find("textarea[name='message']").val();
			  var username = $(obj).parents("table").find("input[name='username']").val();
			  var email = $(obj).parents("table").find("input[name='email']").val();
			  if($.trim(message) == ''){ 
				  $(obj).parents("table").find(".qmessage_error").show();
				  return false;
			  }else{
				  $(obj).parents("table").find(".qmessage_error").hide();
			  }
			  if($.trim(username) == ''){
				  $(obj).parents("table").find(".qusername_error").show();
				  return false;
			  }else{
				  $(obj).parents("table").find(".qusername_error").hide();
			  }

			  if(!/(\S)+[@]{1}(\S)+[.]{1}(\w)+/.test(email)) {
				  $(obj).parents("table").find(".qemail_error").show();return false;
			  }else{
				  $(obj).parents("table").find(".qemail_error").hide();
			  }
			  var YII_CSRF_TOKEN = "<?php echo Yii::app()->request->csrfToken;?>";
			  $.post("<?php echo Yii::app()->createUrl("toursPackage/ajaxAddMessage");?>", {message:message, username:username, email:email,  YII_CSRF_TOKEN:YII_CSRF_TOKEN}, function(ret){
				  alert("Submit Successful.");
				  $(obj).parents("table").find("textarea[name='message']").val("");
				  $(obj).parents("table").find("input").val("");
			  })
	    }
}
 </script>
