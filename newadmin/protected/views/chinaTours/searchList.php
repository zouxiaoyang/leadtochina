<?php 
  Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jquery.floatDiv.js');
  Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/My97DatePicker/WdatePicker.js');
  Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.lazyload.js');

 
    $this->setPageTitle("China Tour, China Tour Packages, China Travel Tours");
    Yii::app()->clientScript->registerMetaTag('keywords',"china travel, china tours, travel china, china travel agent");
    Yii::app()->clientScript->registerMetaTag('description',"China Travel Agent offering China Tours, Yangtze Cruise Travel, China Flights, China Hotels Booking and huge China Travel Guide Info.");

    Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/chinanew.css'); 

    $current_url = Yii::app()->createUrl("chinaTours/searchList").'?';
?>
<!--  index start  -->
<div id="index">
    <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('chinaTours/index');?>">China Tours</a> Search</div>
    <!--  search start  -->
    <div id="search">
        <div class="title1"><img src="/images/chinatours/searchtitle.png" alt="" /></div>
        <!--  searchtable start  -->
        
        <div class="searchtable">
            <table border="0" cellspacing="0" cellpadding="0">
             <tbody>
                 <tr>
                    <td class="tdtop">Select Cities</td>
                    <td colspan="5">
                        <ul id="advance_search_cities">
                            <li><input type="checkbox" name="city[]"  value="Beijing"> Beijing</li>
                            <li><input type="checkbox" name="city[]"  value="Shanghai"> Shanghai</li>
                            <li><input type="checkbox" name="city[]"  value="Xian"> Xian</li>
                            <li><input type="checkbox" name="city[]"  value="Guilin"> Guilin</li>
                            <li><input type="checkbox" name="city[]"  value="Tibet(Lhasa)"> Tibet(Lhasa)</li>
                            <li><input type="checkbox" name="city[]"  value="Chengdu"> Chengdu</li>
                            <li><input type="checkbox" name="city[]"  value="Hangzhou"> Hangzhou</li>
                            <li><input type="checkbox" name="city[]"  value="Chongqing"> Chongqing</li>
                            <li><input type="checkbox" name="city[]"  value="Chengde"> Chengde</li>
                            <li><input type="checkbox" name="city[]"  value="Changsha"> Changsha</li>
                            <li><input type="checkbox" name="city[]"  value="Datong"> Datong</li>
                            <li><input type="checkbox" name="city[]"  value="Dunhuang"> Dunhuang</li>
                            <li><input type="checkbox" name="city[]"  value="Dali"> Dali</li>
                            <li><input type="checkbox" name="city[]"  value="Dalian"> Dalian</li>
                            <li><input type="checkbox" name="city[]"  value="Guangzhou"> Guangzhou</li>
                            <li><input type="checkbox" name="city[]"  value="Guiyang"> Guiyang</li>
                            <li><input type="checkbox" name="city[]"  value="Huangshan"> Huangshan</li>
                            <li><input type="checkbox" name="city[]"  value="Hong Kong"> Hong Kong</li>
                            <li><input type="checkbox" name="city[]"  value="Hohhot"> Hohhot</li>
                            <li><input type="checkbox" name="city[]"  value="Harbin"> Harbin</li>
                            <li><input type="checkbox" name="city[]"  value="Haikou"> Haikou</li>
                            <li><input type="checkbox" name="city[]"  value="Jiuzhaigou"> Jiuzhaigou</li>
                            <li><input type="checkbox" name="city[]"  value="Kunming"> Kunming</li>
                            <li><input type="checkbox" name="city[]"  value="Kashgar"> Kashgar</li>
                            <li><input type="checkbox" name="city[]"  value="Kaili"> Kaili</li>
                            <li><input type="checkbox" name="city[]"  value="Lijiang"> Lijiang</li>
                            <li><input type="checkbox" name="city[]"  value="Luoyang"> Luoyang</li>
                            <li><input type="checkbox" name="city[]"  value="Longsheng"> Longsheng</li>
                            <li><input type="checkbox" name="city[]"  value="Lanzhou"> Lanzhou</li>
                            <li><input type="checkbox" name="city[]"  value="Macau"> Macau</li>
                            <li><input type="checkbox" name="city[]"  value="Nanjing"> Nanjing</li>
                            <li><input type="checkbox" name="city[]"  value="Pingyao"> Pingyao</li>
                            <li><input type="checkbox" name="city[]"  value="Qinhuangdao"> Qinhuangdao</li>
                            <li><input type="checkbox" name="city[]"  value="Qingdao"> Qingdao</li>
                            <li><input type="checkbox" name="city[]"  value="Shenzhen"> Shenzhen</li>
                            <li><input type="checkbox" name="city[]"  value="Suzhou"> Suzhou</li>
                            <li><input type="checkbox" name="city[]"  value="Silk Road"> Silk Road</li>
                            <li><input type="checkbox" name="city[]"  value="Sanjiang"> Sanjiang</li>
                            <li><input type="checkbox" name="city[]"  value="Shangri-la"> Shangri-la</li>
                            <li><input type="checkbox" name="city[]"  value="Sanya"> Sanya</li>
                            <li><input type="checkbox" name="city[]"  value="Turpan"> Turpan</li>
                            <li><input type="checkbox" name="city[]"  value="Tianjin"> Tianjin</li>
                            <li><input type="checkbox" name="city[]"  value="Urumqi"> Urumqi</li>
                            <li><input type="checkbox" name="city[]"  value="Wuhan"> Wuhan</li>
                            <li><input type="checkbox" name="city[]"  value="Xiamen"> Xiamen</li>
                            <li><input type="checkbox" name="city[]"  value="Xining"> Xining</li>
                            <li><input type="checkbox" name="city[]"  value="Yangshuo"> Yangshuo</li>
                            <li><input type="checkbox" name="city[]"  value="Yangtze River"> Yangtze River</li>
                            <li><input type="checkbox" name="city[]"  value="Yichang"> Yichang</li>
                            <li><input type="checkbox" name="city[]"  value="Zhangjiajie"> Zhangjiajie</li>
                            <li><input type="checkbox" name="city[]"  value="Zhangmu"> Zhangmu</li>
                            <li><input type="checkbox" name="city[]"  value="Zhengzhou"> Zhengzhou</li>
                            <li style="width:90px;"><input type="checkbox" name="city[]" checked="checked" value=""> <span>Any</span></li>
                            
                        </ul>
                    </td>
                  </tr>
                  <tr>
                    <td class="tdtop">Select Hot<br /> Attractions</td>
                    <td colspan="5">
                       <ul class="three" id="advance_search_highlights">
                            <?php $china_highlights = Yii::app()->params['china_highlights_list'];?>
                            <?php foreach($china_highlights as $k=>$v):?>
                                <li><input type="checkbox" name="highlights[]" value="<?php echo $k;?>"> <?php echo $v;?></li>
                            <?php endforeach;?>
                            <li><input type="checkbox" checked="checked" name="highlights[]" value=""> <span>Any</span></li>
                        </ul>
                    </td>
                  </tr>
                  <tr>
                     <td class="tdtop">Tour Themes:</td>
                     <td colspan="2" style="padding-left:20px;">
                      <?php $theme_list = Yii::app()->params['theme_list'];?>
                        <select id="advance_search_tour_themes" name="tour_themes" style="width:210px;">
                                    <option selected="selected" value=""> All </option>
                                       <optgroup label="= Most Popular Themes =">
                                         <?php foreach($theme_list as $k=>$v):?>
                                            <?php if($k==20) {break;} else unset($theme_list[$k]); ?>
                                            <option value="<?php echo $k;?>"> <?php echo $v;?> </option>
                                         <?php endforeach;?>
                                      </optgroup>
                                      <optgroup label="= Other Themes =">
                                         <?php foreach($theme_list as $k=>$v):?>
                                            <option value="<?php echo $k;?>"> <?php echo $v;?> </option>
                                         <?php endforeach;?>
                                       </optgroup>
                        </select>
                     </td>
                     <td class="tdtop">Duration:</td>
                    <td style="padding-left:25px;" colspan="2">
                        <select id="advance_search_duration" name="duration">
                            <option value=""> Choose Duration </option>
                            <?php foreach(Yii::app()->params['days_list'] as $k=>$v):?>
                                <?php if($k == 0) continue;?>
                                <option value="<?php echo $v;?>"><?php echo $v;?></option>
                            <?php endforeach;?>
                        </select>    
                    </td>
                  </tr>
                  <tr>
                    <td class="tdtop">Your Budget:</td>
                    <td style="padding-left:20px;">
                      <select id="advance_search_your_budget" name="your_budget">
                            <option value="0"> Price Per Person </option>
                            <?php foreach(Yii::app()->params['price_list'] as $k=>$v):?>
                            <option value="<?php echo $v;?>"> <?php echo $v;?> </option>
                            <?php endforeach;?>           
                        </select>
                    </td>
                    <td class="tdtop">Starting City:</td>
                    <td style="padding-left:20px;">
                      <select id="advance_search_starting_city" name="starting_city">
                          <option value=""> No Preference </option>
                          <option value="beijing"> Beijing </option>
                          <option value="shanghai"> Shanghai </option>
                          <option value="hongkong"> Hong Kong </option>
                      </select>
                    </td>
                    <td class="tdtop">Ending City:</td>
                    <td style="padding-left:20px;">
                      <select id="advance_search_ending_city" name="ending_city">
                        <option value=""> No Preference </option>
                        <option value="beijing">Beijing</option>
                        <option value="shanghai">Shanghai</option>
                        <option value="hongkong">Hong Kong</option>
                      </select>
                    </td>
                  </tr>
             </tbody>
          </table>
        </div>
        <!--  searchtable end  -->
        <!--  button start  -->
        <div class="button" style="border-bottom:1px dashed #b1abab; padding-bottom:10px; margin:15px 0px 10px 0px;">
          <a href="javascript:;" onclick="document.forms['advance_search_form'].submit();" style="margin-right:40px;"><img src="/images/chinatours/search3.png" alt="" /></a>
          <a href="javascript:;" onclick="advance_search_form_reset();"><img src="/images/chinatours/reset.png" /></a></div>
        <!--  button end  -->
        
        
        <!--  resulttitle start  -->
        <div class="resulttitle" style="background: url(/images/chinatours/title1.png) no-repeat left center;"><a id="result"></a>
            <ul>
               <li style="font-size:16px;"><?php echo $dataProvider->totalItemCount;?> Search Results</li>
               <li class="sort">Sort by: Price 
                <span><a href="<?php echo $current_url.http_build_query($_GET);?>&order=price_asc">&uarr;</a></span> 
                <span><a href="<?php echo $current_url.http_build_query($_GET);?>&order=price_desc">&darr;</a></span> 
                Tour Length 
                <span><a href="<?php echo $current_url.http_build_query($_GET);?>&order=days_asc">&uarr;</a></span> 
                <span><a href="<?php echo $current_url.http_build_query($_GET);?>&order=price_desc">&darr;</a></span></li>
               <li class="preview" style="display:none">Preview  <a href="#" class="dq">1</a> <a href="#">2</a> <a href="#">3</a> ... <a href="#">8</a>  <a href="#">Next</a> </li>
            </ul>
        </div>
        <!--  resulttitle end  -->
        
        <!--  searching start  -->
        <div class="searching" id="search_condition" <?php if(!$dataProvider->totalItemCount):?>style="display:none"<?php endif;?>>
           <b>You are searching for:</b>
           <ul>
              <?php if($_GET['city']):?>
              <li><?php 
                $link_city = $current_url.http_build_query(array_diff_key($_GET,array('city'=>'')));
                $city = strip_tags(str_replace('|', ', ', $_GET['city'])); echo $city;?></li>
              <li class="cha"><a href="<?php echo $link_city;?>">X</a></li>
              <?php endif;?>
           </ul>

           <?php 
             if($_GET['highlight']){
                $link_highlight = $current_url.http_build_query(array_diff_key($_GET,array('highlight'=>'')));
                $highlights = explode('|',$_GET['highlight']);
                foreach($highlights as $v){
                  $highlight_keys[] = (int) $v;
                }
                foreach($highlight_keys as $key){
                  $highlights_arr[] = Yii::app()->params['china_highlights_list'][$key];
                }
             }
           ?>
           <?php if($highlights_arr):?>
           <ul>
              <li>
                <?php echo implode(', ', $highlights_arr);?>
              </li>
              <li class="cha"><a href="<?php echo $link_highlight;?>">X</a></li>
           </ul>
           <?php endif;?>

          <ul>
              <?php if($_GET['theme']):?>
              <li>
                <?php 
                  $link_theme = $current_url.http_build_query(array_diff_key($_GET,array('theme'=>'')));
                  $theme = (int) $_GET['theme'];
                  echo Yii::app()->params['theme_list'][$theme];
                ?>
              </li>
              <li class="cha"><a href="<?php echo $link_theme;?>">X</a></li>
              <?php endif;?>
          </ul>

          <?php if($_GET['days']):?>
          <ul>
            <li><?php 
            $link_days = $current_url.http_build_query(array_diff_key($_GET,array('days'=>'')));
            echo strip_tags($_GET['days']);?></li>
            <li class="cha"><a href="<?php echo $link_days;?>">X</a></li>
          </ul>
          <?php endif;?>

          <?php if($_GET['price']):?>
          <ul>
            <li><?php 
            $link_price = $current_url.http_build_query(array_diff_key($_GET,array('price'=>'')));
            echo strip_tags($_GET['price']);?></li>
            <li class="cha"><a href="<?php echo $link_price;?>">X</a></li>
          </ul>
          <?php endif;?>

          <?php if($_GET['starting_city']):?>
          <ul>
            <li><?php 
            $link_starting_city = $current_url.http_build_query(array_diff_key($_GET,array('starting_city'=>'')));
            echo strip_tags('Starting City '.ToursPackage::$from_city[$_GET['starting_city']]);?></li>
            <li class="cha"><a href="<?php echo $link_starting_city;?>">X</a></li>
          </ul>
          <?php endif;?>

          <?php if($_GET['ending_city']):?>
          <ul>
            <li><?php 
            $link_ending_city = $current_url.http_build_query(array_diff_key($_GET,array('ending_city'=>'')));
            echo strip_tags('Ending City '.ToursPackage::$from_city[$_GET['ending_city']]);?></li>
            <li class="cha"><a href="<?php echo $link_ending_city;?>">X</a></li>
          </ul>
          <?php endif;?>

        </div>
        <!--  searching end  -->
        
        <?php if($dataProvider->totalItemCount):?>
          <!--  searchlist start  -->
          <div class="searchlist">
          <?php $this->widget('zii.widgets.CListView', array(
               'dataProvider'=>$dataProvider,
               'itemView'=>'_searchList',
               'ajaxUpdate'=>false,
                'pager'=>array(
                  'cssFile'=>False,
                  'header'=>'',
                ),
               'template'=>"{items}\n{pager}",
          )); ?>
          </div>        
          <!--  searchlist end  -->
        <?php else:?>
    <div id="search">
        <!--  zerocontainer start  -->
        <div class="zerocontainer">
        <!--  zerocontent start  -->
        <div class="zerocontent">
            <!--  searching start  -->
            <div class="searching">
                <b>You are searching for:</b>
                <ul>
                   <li>Beijing</li>
                   <li class="cha">X</li>
                </ul>
                <ul>
                   <li>Shanghai</li>
                   <li class="cha">X</li>
                </ul>
                <ul>
                   <li>Great Wall of China</li>
                   <li class="cha">X</li>
                </ul>
             </div>
             <!--  searching end  -->
             
            <!--  zero start  -->
            <div class="zero">
                <h2><span>0</span> trips have been found based on your choices!</h2>
                <p>Can not find package to meet your request ?  Do not disappointed! Just leave your travel plan here, and we will customize a tour with price for you.</p>
            </div>
            <!--  zero end  -->
        
          <?php $form=$this->beginWidget('CActiveForm', array(
              'id'=>'tours-package-form',
              'enableClientValidation'=>true,
            )); ?>
            <!--  thoughts start  -->
            <div class="thoughts">
                <h2>My thoughts on the tour</h2>
                <div class="tleft">
                   <table cellspacing="0" cellpadding="0" border="0">
                       <tbody>
                          <tr>
                            <td width="33%">Adults(&gt;12)<br>
                             <?php
                              for($i=1;$i<31;$i++) $arr[$i]=$i;
                              echo $form->dropDownList($model,'adults', $arr, array('options'=>array('2'=>array('selected'=>true))));
                              ?>
                            </td> 
                            <td width="38%">Children(2-12)<br>
                              <?php
                                unset($arr);
                                for($i=0;$i<31;$i++) $arr[$i]=$i;
                                echo $form->dropDownList($model,'children', $arr);
                              ?>
                            </td> 
                            <td width="29%">Babies(0-2)<br>
                              <?php
                                unset($arr);
                                for($i=0;$i<12;$i++) $arr[$i]=$i;
                                echo $form->dropDownList($model,'infant', $arr);
                              ?>
                            </td>   
               </tr>
               <tr>
                   <td colspan="3">
                    <?php echo $form->textArea($model,'other_message', array('class'=>'simpleinfoBox'));?>
                   </td>
               </tr>
              </tbody>
             </table>
                </div>
                <div class="tright">
                   <div class="interest">
                      <h3>My Interests:</h3>
                      <div class="searching">
                          <ul>
                             <li>Beijing</li>
                             <li class="cha">X</li>
                          </ul>
                          <ul>
                             <li>Shanghai</li>
                             <li class="cha">X</li>
                          </ul>
                          <ul>
                            <li>Great Wall of China</li>
                            <li class="cha">X</li>
                          </ul>
                    </div>
                   </div>
                   <div class="kuang">
                     <div class="tipsBox roundCorner">
                            <div class="arrowLeft"></div>
                            <ol>
                                 <li>1. Length of stay in China</li>
                                 <li>2. City or cities of entry/exit</li>
                                 <li>3. Places or attraction that you want to visit </li>
                                 <li>4. Class of Hotel: 3 star/4 star/5 star</li>
                                 <li>5. Estimative total budget per person</li>
                            </ol>
                      </div>
                   </div>
                </div>
            </div>
            <!--  thoughts end  -->
            
            <!--  information start  -->
            <div class="information">
                <h2><b>Fill in Your Information</b> <span>Your privacy is protected!</span></h2>
                <table border="0" cellspacing="0" cellpadding="0">
                   <tbody>
                      <tr>
                         <td>Full Name:<br />
                            <select name="Order[gender]" id="Gender_1" style="width:70px;">
                                <option value="Mr."> Mr.</option>
                                <option value="Ms."> Ms.</option>
                            </select>
                            <?php echo $form->textField($model,'full_name',array('style'=>"width:200px; float:left;")); ?>
                            <?php echo $form->error($model,'full_name'); ?>
                         </td>
                         <td>Nationality:<br />
                             <?php echo $form->textField($model,'nationality'); ?>
                         </td>
                         <td>Email Address:<br />
                             <?php echo $form->textField($model,'email'); ?>
                             <?php echo $form->error($model,'email'); ?>
                         </td>
                      </tr>
                      <tr>
                         <td>Confirm Email Address:<br />
                            <input name="" type="text" /> 
                         </td>
                         <td>Tour Starting Date:<br />
                            <?php echo $form->textField($model,'entry_date',array('onclick'=>"WdatePicker({dateFmt:'MM/dd/yyyy',minDate:'%y-%M-%d',lang:'en'})",'class'=>'Wdate'));?>
                            <?php echo $form->error($model,'entry_date');?>
                         </td>
                         <td>Duration:<br />
                             <?php echo $form->textField($model,'duration'); ?>
                         </td>
                      </tr>
                      <tr>
                         <td colspan="3"><div class="otherRequest01">
                            <div class="submitButton">

                                <input type="submit" value="" style="width:189px;height:37px;border:0px;cursor:pointer;background:url(/images/chinatours/confirm.png) no-repeat;">
                                <span>No booking fees!</span> 
                            </div>
                        </div></td>
                      </tr>
                    </tbody>
                 </table>
                
            </div>
            <?php $this->endWidget(); ?>
            <!--  information end  -->
          </div>
          <!--  zerocontent end  -->
        </div>
        <!--  zerocontainer end  -->
        
        <?php if($recommend_tours):?>
        <!--  resulttitle start  -->
        <div class="resulttitle">
            <ul>
               <li style="font-size:16px; background:none;">Recommended Tours Covering Your Destinations</li>
            </ul>
        </div>
        <!--  resulttitle end  -->
        <!--  searchlist start  -->
        <div class="searchlist">
          <?php foreach($recommend_tours as $v):?>
           <ul>
              <li class="pic">
                <a href="<?php echo Yii::app()->createUrl('toursPackage/view', array('id'=>$v['id'], 'title'=>SiteUtils::stringURLSafe($v['name'])));?>">
                 <img style="width:213px;height:266px;" src="/images/grey.gif" data-original="/<?php echo $v['filedir'];?>/<?php  if($v['pic_big']) echo $v['pic_big']; else echo $dv['pic'];?>" />
                </a>
                <ol>
                   <li><strong>DURATION:</strong> <?php echo $v['days'];?> Days</li>
                   <li><strong>DESTINATION:</strong> <?php echo $v['route'];?></li>
                   <li><strong>PRICE:</strong> From <b><?php echo SiteUtils::getCurrencyPrice($v['price']);?></b> p/p</li>
                   <li><strong>PRICE INCLUDE:</strong> <?php echo $v['tour_intro'];?></li>
                </ol>
              </li>
              <li class="name"><a href="<?php echo Yii::app()->createUrl('toursPackage/view', array('id'=>$v['id'], 'title'=>SiteUtils::stringURLSafe($v['name'])));?>"><?php echo $v['name'];?></a></li>
           </ul>
         <?php endforeach;?>
        </div>        
        <!--  searchlist end  -->
        <?php endif;?>

    </div>
    <!--  search end  -->
        <?php endif;?>

    </div>
    <!--  search end  -->
    
    
</div>
<!--  index end  -->

<form id="advance_search_form" name="advance_search_form" action="<?php echo Yii::app()->createUrl("chinaTours/searchList");?>" method="get">
    <input type="hidden" name="city" value="<?php echo CHtml::encode($_GET['city']);?>" />
    <input type="hidden" name="highlight" value="<?php echo CHtml::encode($_GET['highlight']);?>" />
    <input type="hidden" name="theme" value="<?php echo CHtml::encode($_GET['theme']);?>" />
    <input type="hidden" name="price" value="<?php echo CHtml::encode($_GET['price']);?>" />
    <input type="hidden" name="days" value="<?php echo CHtml::encode($_GET['days']);?>" />
    <input type="hidden" name="starting_city" value="<?php echo CHtml::encode($_GET['starting_city']);?>" />
    <input type="hidden" name="ending_city" value="<?php echo CHtml::encode($_GET['ending_city']);?>" />
</form>



<!-- duibi start -->
<div id="template" style="display:none">
   <div><table width="100%" cellspacing="0" cellpadding="0" border="0">
   <tbody>
    <tr>
      <td width="3%" valign="top"><label> <input type="checkbox" value="{{id}}" checked="ckecked"  name="tour_id[]"></label></td>
      <td colspan="2"><a href="#"><span>{{tour_title}}</span></a></td>
    </tr> 
    <tr>
      <td>&nbsp;</td>
      <td width="57%" class="org"><strong>{{tour_price}}</strong></td> 
      <td width="40%"><a href="javascript:;" class="delete-new" onclick="_comparison.delete_tour(this, '{{id}}')">Delete</a></td> 
    </tr>
    </tbody>
   </table></div>
</div>

<div class="duibi" id="duibi" style="display:none">
<form name="comparison_form" action="/index.php?option=com_pgcategory&task=comparison" target="_blank" method="post" >
   <h4><span class="f_right" onclick="_comparison.close();">X</span>Product Comparison</h4>
   <ul id="tour_comparison">
    <p>only 3 tours maximum can be compared each time</p>
   </ul>
   <table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tbody>
     <tr>
      <td height="60" align="center"><img width="121" height="29" onclick="_comparison.submit()" style="cursor: pointer;" id="btnContrast1" src="/images/newhomepage/db.jpg"></td>
     </tr>
  </tbody>
   </table>
</form>
</div>

<div id="loading" style="z-index:1001;left:100px; top:100px; width:230px; height:auto; border:1px solid #d0d1d3; background:url(/templates/jv_news_ii/images/loading.gif
) #fff 17px 15px no-repeat; padding:5px 30px 15px 60px; display:none; font-size:14px; color:#000;">
  <p>Searching, Please Wait...</p>
</div>

<div class="tool-tips"><div class="tool-text"></div></div>
<!-- duibi end -->

<script>

    $(function(){

        $("img").lazyload({
           threshold:30,
           effect : "fadeIn" 
        })


        $("#advance_search_cities").find("input").bind("click",function(){
            var choose_cities = [];
            if($(this).val() == ""){
                $("#advance_search_cities").find("input[value!='']").attr("checked",false);
            }
            $("#advance_search_cities").find("input:checked").each(function(){
                if($(this).val()) choose_cities.push($(this).val());
            })
            if(choose_cities.length) $("#advance_search_cities").find("input[value='']").attr("checked", false);
            else $("#advance_search_cities").find("input[value='']").attr("checked", true);
            
            $("#advance_search_form").find("input[name='city']").val(choose_cities.join('|'));
        })

        $("#advance_search_highlights").find("input").bind("click", function(){
            var choose_highlights = [];
            if($(this).val() == ""){
                $("#advance_search_highlights").find("input[value!='']").attr("checked",false);
            }

            $("#advance_search_highlights").find("input:checked").each(function(){
              choose_highlights.push($(this).val());  
            })
            
            if(choose_highlights.length) $("#advance_search_highlights").find("input[value='']").attr("checked", false);
            else $("#advance_search_highlights").find("input[value='']").attr("checked", true);

            $("#advance_search_form").find("input[name='highlight']").val(choose_highlights.join('|'));
        })

        $("#advance_search_tour_themes").bind("change",function(){
            var choose_themes = 0;
            choose_themes = $(this).val();

            $("#advance_search_form").find("input[name='theme']").val(choose_themes);
        })

        $('#advance_search_your_budget').bind("change",function(){
            var choose_budget = 0;
            choose_budget = $(this).val();  
            $("#advance_search_form").find("input[name='price']").val(choose_budget);
        })

        $("#advance_search_duration").bind("change", function(){
            var choose_duration = 0;
            choose_duration = $(this).val();
            $("#advance_search_form").find("input[name='days']").val(choose_duration);
        })

        $("#advance_search_starting_city").bind("change", function(){
            var choose_starting_city = "";
            choose_starting_city = $(this).val();
            $("#advance_search_form").find("input[name='starting_city']").val(choose_starting_city);
        })

        $("#advance_search_ending_city").bind("change", function(){
            var choose_ending_city = "";
            choose_ending_city = $(this).val();
            $("#advance_search_form").find("input[name='ending_city']").val(choose_ending_city);
        })

        $(".searchlist").find("div.items").find("ul").hover(function(){
          $(".searchlist").find("div.items").find("ul").find("ol").hide();
          $(this).find("ol").show();
        },function(){
          $(this).find("ol").hide();
        })

        <?php 
          if($_GET['city']){
            $city_arr = explode('|', $_GET['city']);
            foreach($city_arr as $v){
              echo "$('#advance_search_cities').find('input[value=\"$v\"]').attr('checked',true);";
            }
            echo "$('#advance_search_cities').find('input[value=\"\"]').attr('checked',false);";
          }

          if($_GET['highlight']){
            $highlight_arr = explode('|', $_GET['highlight']);
            foreach($highlight_arr as $v){
              echo "$('#advance_search_highlights').find('input[value=\"$v\"]').attr('checked',true);";
            }
            echo "$('#advance_search_highlights').find('input[value=\"\"]').attr('checked',false);";
          }
        ?>

        <?php if($_GET['theme']):?>
            $("#advance_search_tour_themes").val(<?php echo (int)$_GET['theme'];?>);
        <?php endif;?>


        <?php if($_GET['days']):?>
            $("#advance_search_duration").val("<?php echo CHtml::encode($_GET['days']);?>");
        <?php endif;?>

        <?php if($_GET['price']):?>
            $("#advance_search_your_budget").val("<?php echo CHtml::encode($_GET['price']);?>");
        <?php endif;?>

        <?php if($_GET['starting_city']):?>
            $("#advance_search_starting_city").val("<?php echo CHtml::encode($_GET['starting_city']);?>");
        <?php endif;?>

        <?php if($_GET['ending_city']):?>
            $("#advance_search_ending_city").val("<?php echo CHtml::encode($_GET['ending_city']);?>");
        <?php endif;?>

        <?php if(!$dataProvider->totalItemCount):?>
          var searching = $("#search_condition").html();
          $(".searching").html(searching);
        <?php endif;?>

        location.href="#result";
    })
</script>


<script>
  function show_more_cities(obj){
    if($("#show_more_cities").css('display') == "none"){
      $("#show_more_cities").show();
      $(obj).attr('src','/images/chinatours/showup.jpg');
    }else{
      $("#show_more_cities").hide();
      $(obj).attr('src','/images/chinatours/showdown.jpg');
    }
  }

  function advance_search_form_reset(){
    $("#advance_search_cities").find("input").attr("checked",false);
    $("#advance_search_highlights").find("input").attr("checked", false);
    $("#advance_search_tour_themes").val('');
    $('#advance_search_your_budget').val('');
    $("#advance_search_duration").val('');
    $("#advance_search_starting_city").val('');
    $("#advance_search_ending_city").val('');
    $("#advance_search_form").find("input").val('');
  }
</script>

<script>
  var _comparison = {
      choose_tourids:[],
      add_tour:function(obj,id){
        if($.inArray(id, this.choose_tourids) != -1){
          alert("This tour has already existed.");
          return;
        }
        if(this.choose_tourids.length >=3){
          alert("Only 3 tours maximum can be compared each time.");
          return;
        }
        this.choose_tourids.push(id);
        var template = $('#template').html();
        var content_template = '';
        var tour_title = $(obj).parents("ul").find(".tour_title").html();
        var tour_price = $(obj).parents("ul").find(".tour_price").html();

        content_template = "<li>" + template.replace( /{{tour_title}}/, tour_title).replace(/{{tour_price}}/, tour_price).replace(/{{id}}/g, id)+"</li>";
        $(content_template).appendTo($("#tour_comparison"));
        $("#duibi").floatdiv({right:"230px",top:"115px"}).show();
      }, 
        delete_tour:function(obj, id){
        var inx = $.inArray(id, this.choose_tourids);
        if(inx != -1){
          this.choose_tourids.splice(inx, 1);
        }
        $(obj).parents("li").remove();
      },
      close:function(){
        $(".duibi").hide();
        $("#tour_comparison").html('');
        this.choose_tourids = [];
      },
        submit: function(){
          if($("#duibi").find("input[name='tour_id[]']:checked").length < 2){
          alert("At Least 2 tours for comparison");
          return;
        } 
        document.forms['comparison_form'].submit();
      }
  }
</script>
