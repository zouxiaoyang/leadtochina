<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/citytours.css');  ?>
<style type="text/css">
<!--
.tourlist1{ margin-top:0px;}
#menu-tours{ margin-bottom:0px;}
.right_div{ margin-top:10px;}
-->
</style>
<!--  index start  -->
<div class="index">
    <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('cityTours/index');?>">City Tours</a> <?php echo $cityInfo->name;?> Tours</div>
    <!--  left start  -->
    <div id="left">
        <!--  textnew start  -->
        <div class="textnew">
            <h2><?php echo $cityIntro->title;?></h2>
            <p><?php echo $cityIntro->description;?></p>
        </div>
        <!--  textnew end  -->
        
        <?php foreach($categories as $category):?>
        <?php
           if(empty($category->parent_id)){
              if($category->id !=81){
                continue;
              }else{
                
              }   
            } 
        ?>
        <!--  tourlist start  -->
        <div class="tourlist">
           <h2><?php echo $category->title;?></h2>
            <div class="pct"><div class="pctimgbg">
                <div style="text-align:right; position: relative; left:1px; top:1px;height: 124px; width: 152px; overflow: hidden;background: url(<?php echo '/'.$category->filedir."thumb"."/"."thumb_".$category->ufile;?>) #fff center center no-repeat; ">
                </div></div></div>
              <div class="listcontentnew">
                <ul>
                 <li><p><?php echo $category->description;?></p></li>
                 <li>
                    <ol>
                        <?php foreach($tours as $v):?>
                          <?php if($v->categorieid_str == $category->id):?>
                            <li><a href="<?php echo $v->url();?>"><?php echo $v->name;?></a> <span>From <strong>$<?php echo $v->price;?></strong> p/p</span> </li>
                          <?php endif;?>
                        <?php endforeach;?>
                        <?php if($category->tour_ids):?>
                          <?php 
                              $tour_ids = explode(',',$category->tour_ids);
                              foreach($tour_ids as &$v){
                                $v = (int)$v;
                              }
                              $tour_ids = implode(',', $tour_ids);
                              $tours2 = ToursPackage::model()->findAll(array(
                               'select' => 'id,name',
                               'condition' => "id in($tour_ids)"
                              ));
                          ?>
                            <?php foreach($tours2 as $v):?>
                              <li><a href="<?php echo $v->url();?>"><?php echo $v->name;?></a> <span>From <strong>$<?php echo $v->price;?></strong> p/p</span> </li>
                            <?php endforeach;?>
                        <?php endif;?>
                      </ol>
                 </li>
              </ul>              
              </div>
        </div>
        <!--  tourlist end  -->
        <?php endforeach;?>
        
       
        
       
    </div>
    <!--  left end  -->
    
    <!--  right start  -->
    <div id="right">
       <div class="guide"><?php echo $this->renderPartial('/common/cityGuide', array('cityName'=>$cityInfo->name,'cityId'=>$cityInfo->id));?></div>
       <div class="cooperation" style="margin-top:20px;"> <a target="_blank" href="/travel/china-diy-tours"><img src="/images/citytours/customize.jpg" alt=""></a></div>
       <div id="right_div" class="right_div" style=" float:left;">
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
    
