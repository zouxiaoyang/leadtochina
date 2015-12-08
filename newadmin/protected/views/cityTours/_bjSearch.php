<?php $city_arr=explode(',', $city);?>
<div class="right1">
      <h2><span class="dq" onclick="_bj.searchtab(this);">Beijing Tour</span><span onclick="_bj.searchtab(this);">China Tour</span></h2>
      
      <!-- Start beijing search-->
      <div class="search">
         <ul>
            <li><select name="days" id="choose_bj_search_days">
                 <?php foreach(Yii::app()->params['days_list'] as $k=>$v):?>
                  <option value="<?php if($k) echo $v;?>" <?php if($v == $_GET['days']):?>selected<?php endif;?>><?php echo $v;?></option>
                 <?php endforeach;?>
                </select>
            </li>
            <li style="padding:0px;">
               <ol>
                  <li><input type="checkbox" value="13" name="subtags[]" <?php if(in_array(13, $subtagid_arr)):?>checked<?php endif;?>> Great Wall</li>
                  <li><input type="checkbox" value="25" name="subtags[]" <?php if(in_array(25, $subtagid_arr)):?>checked<?php endif;?>> Forbidden City</li>
                  <li><input type="checkbox" value="27" name="subtags[]" <?php if(in_array(27, $subtagid_arr)):?>checked<?php endif;?>> Ming Tombs</li>
                  <li><input type="checkbox" value="30" name="subtags[]" <?php if(in_array(30, $subtagid_arr)):?>checked<?php endif;?>> Hutong</li>
               </ol>
            </li>
            <li><input type="checkbox" value="26" name="subtags[]" <?php if(in_array(26, $subtagid_arr)):?>checked<?php endif;?>> Summer Palace</li>
            <li><input type="checkbox" value="14" name="subtags[]" <?php if(in_array(14, $subtagid_arr)):?>checked<?php endif;?>> Temple of Heaven</li>
            <li><input type="checkbox" value="35" name="subtags[]" <?php if(in_array(35, $subtagid_arr)):?>checked<?php endif;?>> Olympic Venues</li>
         </ul>
         <ul class="three">
            <li><strong>With Other City</strong></li>
            <li style="padding:0px;">
               <ol>
                  <li><input type="checkbox" value="Xian" <?php if(in_array('xian', $city_arr)):?>checked="checked"<?php endif;?> name="city2[]"> Xian</li>
                  <li><input type="checkbox" value="Shanghai" <?php if(in_array('shanghai', $city_arr)):?>checked="checked"<?php endif;?> name="city2[]"> Shanghai</li>
                  <li><input type="checkbox" value="Chengde" <?php if(in_array('chengde', $city_arr)):?>checked="checked"<?php endif;?> name="city2[]"> Chengde</li>
                  <li><input type="checkbox" value="Datong" <?php if(in_array('datong', $city_arr)):?>checked="checked"<?php endif;?> name="city2[]"> Datong</li>
                  <li><input type="checkbox" value="Tianjin" <?php if(in_array('tianjin', $city_arr)):?>checked="checked"<?php endif;?> name="city2[]"> Tianjin</li>
                  <li><input type="checkbox" value="Guilin" <?php if(in_array('guilin', $city_arr)):?>checked="checked"<?php endif;?> name="city2[]"> Guilin</li>
                  <li><input type="checkbox" value="Yangtze" <?php if(in_array('yangtze', $city_arr)):?>checked="checked"<?php endif;?> name="city2[]"> Yangtze</li>
                  <li><input type="checkbox" value="Tibet(Lhasa)" <?php if(in_array('tibet', $city_arr)):?>checked="checked"<?php endif;?> name="city2[]"> Tibet</li>
               </ol>
            </li>
            <li><textarea class="choose_city" name="" cols="" rows=""></textarea></li>
         </ul> 
         <form action="<?php echo Yii::app()->createUrl('cityTours/beijingTourSearch');?>" method="get">
           <input type="hidden" value="<?php echo $city;?>" name="city" />
           <input type="hidden" value="<?php echo $days;?>" name="days" />
           <input type="hidden" value="<?php echo implode(',', $subtagid_arr);?>"  name="themetags" />
           <input name="" type="image" src="/images/beijingtour/search.png" alt="Submit" style="width:73px; border:none; height:25px; float:left;" /> <a href="/index.php?option=com_diytour" target="_blank">Diy Beijing Tour</a>
        </form>
      </div>
      <!-- End beijing search-->
      
      <!--Start China Tour-->
      <div class="search" style="display:none;">
        <form action="<?php echo Yii::app()->createUrl("chinaTours/searchList");?>" method="get" name="toursearchpanelform">
          <input id="menu_city" type="hidden" value="" name="city">
         <ul class="three" style="padding-top:8px;">
            <li><select name="days" id="">
                     <?php foreach(Yii::app()->params['days_list'] as $k=>$v):?>
                      <option value="<?php if($k) echo $v;?>"><?php echo $v;?></option>
                     <?php endforeach;?>
                </select>
            </li>
            <li><strong>Select Cities:</strong></li>
            <li style="padding:0px;">
               <ol>
                  <li><input type="checkbox" value="Beijing" name="city2[]"> Beijing</li>
                  <li><input type="checkbox" value="Shanghai" name="city2[]"> Shanghai</li>
                  <li><input type="checkbox" value="Guilin" name="city2[]"> Guilin</li>
                  <li><input type="checkbox" value="Hongkong" name="city2[]"> Hongkong</li>
                  <li><input type="checkbox" value="Xian" name="city2[]"> Xian</li>
                  <li><input type="checkbox" value="Kunming" name="city2[]"> Kunming</li>
                  <li><input type="checkbox" value="Lhasa" name="city2[]"> Lhasa</li>
                  <li><input type="checkbox" value="Yangtze" name="city2[]"> Yangtze</li>
               </ol>
            </li>
            <li><textarea id="choose_index_city"></textarea></li>
            <li><a id="select-city" style="cursor:pointer;color:#606060; width:100%; height:auto; float:left; font-weight:normal; line-height:16px;">Select more cities</a></li>
            <div style="display:none;" class="not_morelist">						
						<h2>A-G <span id="close_new"><img src="/images/newhomepage/close.jpg" alt="" /></span></h2>
						 <ul>
						 	<?php echo $this->city_list('A', 'G');?>
						 </ul>
						<h2>H-K</h2>
						 <ul>
						 	<?php echo$this->city_list('H', 'K');?>
						 </ul>
						<h2>L-Q</h2>
						 <ul>
						 	<?php echo $this->city_list('L', 'Q');?>
						 </ul>
						<h2>S-Z</h2>
						 <ul>
						 	<?php echo $this->city_list('S', 'Z');?>
						 </ul>
						<div class="search_new"><a onclick="javascript:document.toursearchpanelform.submit()" href="javascript:;"><img alt="" src="/images/yangtze/search1.png"></a> <a onclick="go_to_diy_search()" href="javascript:;"><img style="margin-left:15px;" alt="" src="/images/yangtze/tailor.png"></a></div>
						</div>
            <li><input name="" type="image" src="/images/beijingtour/search.png" alt="Submit" style="width:73px; border:none; height:25px; float:left;" /> <a style="width:95px;" href="/travel/advance-search" style="white-space:nowrap;">Advanced Search</a></li>
         </ul> 
        </form>
      </div>
      <!--End China Tour-->

    </div>

    <script>
  $(document).ready(function(){  

      $("input[name='city2[]']").click(function(){
         var that = this;
         if($("input[name='city2[]']:checked").length==0){
        	  $(this).parents(".search").find("input[name='city']").val('');
        	  $("#choose_index_city").val('');
         }
         var choose_city_string = [];
         $(this).parents(".search").find("input[name='city2[]']:checked").each(function(){
           choose_city_string.push($(this).val());
           choose_city_string.sort();
           $.unique(choose_city_string); 
           $(this).parents(".search").find("input[name='city']").val(choose_city_string.join(','));
           //$("#choose_index_city").val(choose_city_string.join(','));
           $(that).parents(".search").find("textarea.choose_city").val(choose_city_string.join(','));
         })
         
      })


      $("#choose_bj_search_days").change(function(){
        $(this).parents(".search").find("input[name='days']").val($(this).val());
      })

      $("input[name='subtags[]']").click(function(){
        var choose_subtags = [];
        $(this).parents(".search").find("input[name='subtags[]']:checked").each(function(){
            choose_subtags.push($(this).val());
        })
        $(this).parents(".search").find("input[name='themetags']").val(choose_subtags.join(','));
        
      })
});

  $('#select-city').click(function(){
    $(".not_morelist").show();
  });
  $('#close_new').click(function(){
    $(".not_morelist").hide();
  });

  function go_to_diy_search(){
      if($('#choose_index_city').val()==''){
          alert('Please select cities.');
          return false;
      }  
      document.location.href="/index.php?option=com_diy&template=customize2&view=customize1&city_url="+$('#choose_index_city').val();
  }
    </script>