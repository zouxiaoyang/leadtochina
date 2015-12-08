<?php 
    $this->setPageTitle("China Tours Search");
    //Yii::app()->clientScript->registerMetaTag('keywords',"china travel, china tours, travel china, china travel agent");
    //Yii::app()->clientScript->registerMetaTag('description',"China Travel Agent offering China Tours, Yangtze Cruise Travel, China Flights, China Hotels Booking and huge China Travel Guide Info.");
    Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/chinanew.css'); 
?>

<!--  index start  -->
<div id="index">
   <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('chinaTours/index');?>">China Tours</a> Advance Search</div>  
   <!--  leftlist start  -->
     <div id="leftlist">
      <div class="left1">  
          <div class="left1list">
              <h2><a href="#">China Tours by Theme</a></h2>
              <ul>
                 <li><a href="<?php echo Yii::app()->createUrl('chinaTours/top10Tours');?>">Top 10 China Tours</a></li>
                 <li><a href="<?php echo Yii::app()->createUrl('chinaTours/classicTours');?>">Classic China Tours</a></li>
                 <li><a href="<?php echo Yii::app()->createUrl('cruise/index');?>">Yangtze River Tours</a></li>
                 <li><a href="<?php echo Yii::app()->createUrl('chinaTours/familyTours');?>">China Family Tours</a></li>
                 <li><a href="<?php echo Yii::app()->createUrl('chinaTours/searchList');?>?theme=9">China Tibet Tours</a></li>
                 <li><a href="<?php echo Yii::app()->createUrl('chinaTours/trainTravel');?>">China Train Travel</a></li>
                 <li><a href="<?php echo Yii::app()->createUrl('chinaTours/72HourVisaFreeTours');?>">72-hour Visa-free Tours</a></li>
                 <li><a href="<?php echo Yii::app()->createUrl('adoption/index');?>">China Adoption Travel</a></li>
              </ul>
              <h2><a href="<?php echo Yii::app()->createUrl('cityTours/index');?>">China City Tours</a></h2>
              <ul>
                 <li><a href="<?php echo Yii::app()->createUrl('city-beijing-tours'); ?>">Beijing Tours</a></li>
                 <li><a href="/shanghai/tours/">Shanghai Tours</a></li>
                 <li><a href="/xian/tours/">Xi'an Tours</a></li>
                 <li><a href="/lhasa/tours/">Lhasa Tours</a></li>
                 <li><a href="/guilin/tours/">Guilin Tours</a></li>
              </ul>
          </div>
      </div>   
      
      <div class="left1" style="margin-top:15px;">
         <div class="left1list"><a href="/travel/china-diy-tours" target="_blank"><img src="/images/chinatours/tailor.jpg" alt="" /></a></div>
      </div>
     </div>
   <!--  leftlist end  -->
   
   <!--  right1 start  -->
      <div id="right1"> 
          <div class="title1"><img src="/images/chinatours/title2.jpg" alt="" /></div>
          <table border="0" cellspacing="0" cellpadding="0">
             <tbody>
                 <tr>
                    <td class="tdtop">Select Cities</td>
                    <td colspan="3">
                        <ul id="advance_search_cities">
                            <li><input type="checkbox" name="city[]"  value="Beijing"> Beijing</li>
                            <li><input type="checkbox" name="city[]"  value="Shanghai"> Shanghai</li>
                            <li><input type="checkbox" name="city[]"  value="Xian"> Xian</li>
                            <li><input type="checkbox" name="city[]"  value="Guilin"> Guilin</li>
                            <li><input type="checkbox" name="city[]"  value="Tibet(Lhasa)"> Tibet(Lhasa)</li>
                            <li><input type="checkbox" name="city[]"  value="Chengdu"> Chengdu</li>
                            <li><input type="checkbox" name="city[]"  value="Hangzhou"> Hangzhou</li>
                            <li><input type="checkbox" name="city[]"  value="Yangshuo"> Yangshuo</li>
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
                            <li><input type="checkbox" name="city[]"  value="Yangtze River"> Yangtze River</li>
                            <li><input type="checkbox" name="city[]"  value="Yichang"> Yichang</li>
                            <li><input type="checkbox" name="city[]"  value="Zhangjiajie"> Zhangjiajie</li>
                            <li><input type="checkbox" name="city[]"  value="Zhangmu"> Zhangmu</li>
                            <li><input type="checkbox" name="city[]"  value="Zhengzhou"> Zhengzhou</li>
                            <li><input type="checkbox" checked="checked" name="city[]"  value=""> <span>Any</span></li>
                        </ul>
                    </td>
                  </tr>
                  <tr>
                    <td class="tdtop">Select Hot Attractions</td>
                    <td colspan="3">
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
                     <td colspan="3" style="padding-left:25px;">
                        <?php $theme_list = Yii::app()->params['theme_list'];?>
                        <select id="advance_search_tour_themes" name="tour_themes" style="width:210px;">
                                    <option selected="selected" value=""> All </option>
                                       <optgroup label="= Most Popular Themes =">
                                         <?php foreach($theme_list as $k=>$v):?>
                                            <?php if($k==20) break; else unset($theme_list[$k]);?>
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
                  </tr>
                  <tr>
                    <td class="tdtop">Your Budget:</td>
                    <td style="padding-left:25px;">
                        <select id="advance_search_your_budget" name="your_budget">
                            <option value=""> Price Per Person </option>
                            <?php foreach(Yii::app()->params['price_list'] as $k=>$v):?>
                            <option value="<?php echo $v;?>"> <?php echo $v;?> </option>
                            <?php endforeach;?>           
                        </select>
                    </td>
                    <td class="tdtop">Starting City:</td>
                    <td><select id="advance_search_starting_city" name="starting_city">
                                <option value=""> No Preference </option>
                                <option value="beijing"> Beijing </option>
                                <option value="shanghai"> Shanghai </option>
                                <option value="kongkong"> Hong Kong </option>
                        </select></td>
                  </tr>
                  <tr>
                    <td class="tdtop">Duration:</td>
                    <td style="padding-left:25px;">
                        <select id="advance_search_duration" name="duration">
                            <option value=""> Choose Duration </option>
                            <?php foreach(Yii::app()->params['days_list'] as $k=>$v):?>
                                <?php if($k == 0) continue;?>
                                <option value="<?php echo $v;?>"><?php echo $v;?></option>
                            <?php endforeach;?>
                        </select></td>
                    <td class="tdtop">Ending City:</td>
                    <td><select id="advance_search_ending_city" name="ending_city">
                                <option value=""> No Preference </option>
                                <option value="beijing">Beijing</option>
                                <option value="shanghai">Shanghai</option>
                                <option value="kongkong">Hong Kong</option>
                            </select>
                    </td>
                  </tr>
             </tbody>
          </table>
          <div class="button">
            <a href="javascript:;" onclick="document.forms['advance_search_form'].submit();"><img src="/images/chinatours/search2.jpg" /></a>
            <a href="javascript:;" onclick="advance_search_form_reset();"><img src="/images/chinatours/reset.jpg" /></a>
          </div>
          <div class="want"><span>Want to tailor make a tour to your exact requirements? If yes, pease click</span> <a href="/travel/china-diy-tours" target="_blank"><img src="/images/chinatours/tailor1.jpg" alt="" /></a></div>
      </div>
   <!--  right1 end  -->
</div>
<!--  index end  -->


<form id="advance_search_form" name="advance_search_form" action="<?php echo Yii::app()->createUrl("chinaTours/searchList");?>" method="get">
    <input type="hidden" name="city" value="" />
    <input type="hidden" name="highlight" value="" />
    <input type="hidden" name="theme" value="" />
    <input type="hidden" name="price" value="" />
    <input type="hidden" name="days" value="" />
    <input type="hidden" name="starting_city" value="" />
    <input type="hidden" name="ending_city" value="" />
</form>
<script>

    $(function(){
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
            $("#advance_search_form").find("input[name='ending_city ']").val(choose_ending_city);
        })


    })

  function advance_search_form_reset(){
    $("#advance_search_cities").find("input").attr("checked",false);
    $("#advance_search_highlights").find("input").attr("checked", false);
    $("#advance_search_tour_themes").val('');
    $('#advance_search_your_budget').val('');
    $("#advance_search_duration").val('');
    $("#advance_search_starting_city").val('');
    $("#advance_search_ending_city").val('');
  }
</script>
