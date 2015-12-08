<style>
#CDSWIDSSP {width:160px !important;}
</style>
<div class="guide">
       <?php echo $this->renderPartial('/common/cityGuide', array('cityName'=>'Xian','cityId'=>$cityInfo->id));?>
     </div>
     
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
     <div class="advanced"><img src="/images/chinatours/advancedbott.jpg" alt="" /></div>
		<div class="advanced"><img alt="" src="/images/chinatours/advanced.jpg"></div>
     <div class="recommend">
         <ul>
             <li><span>1</span> <a href="/travel/best-china-tours">Top 10 China Tours</a></li>
             <li><span>2</span> <a href="/travel/classic-china-tours">Classic China Tours</a></li>
             <li><span>3</span> <a href="/travel/yangtze-river-tours">Yangtze River Tours</a></li>
             <li><span>4</span> <a href="/travel/china-family-tours">China Family Tours</a></li>
             <li><span>5</span> <a href="/travel/china-tibet-tours">China Tibet Tours</a></li>
             <li><span>6</span> <a href="/travel/china-train-travel">China Train Travel</a></li>
             <li><span>7</span> <a href="/travel/72-hour-visa-free-tours">72-hour Visa-free Tours</a></li>
             <li><span>8</span> <a href="/travel/adoption">China Adoption Travel</a></li>
         </ul>
     </div>

    <div style="clear:both"></div>

    <div style="margin-top:10px;float:left;">
      <script src="/travel/js/tripadvisor.js"></script>
    </div>

</div>
