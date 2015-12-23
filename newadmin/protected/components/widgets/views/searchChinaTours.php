<?php
  function city_list($start,$end,$city_list){
    $city_arr=array();
    foreach ($city_list as $k=>$v){
        if((substr($v, 0,1)>=$start)&&(substr($v, 0,1)<=$end)){
          $city_arr[]=$v;
          sort($city_arr);
        }   
      }
    foreach ($city_arr as $k=>$v){
      echo "<li><input name=\"sc[]\" type=\"checkbox\" value=\"".$v."\" id=\"".$v."_".$k."\" onclick=\"checkd()\" /><label for=\"".$v."_".$k."\">".$v."</label></li>";
    }
  }
?>

<div class="search">
              <div class="tourism-newtit">Search China Tours</div>
            <div id=TabTab03Con1>
              <form name="searchform" method="get" action="/index.php">
                <table width="92%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="30"><select name="days" id="days" style="width:235px;">
                        <option value="0"> - Length of Tour - </option>
                        <?php foreach($days_list as $k=>$v):?>
                        <?php if($k==0) continue;?>
                        <option value="<?php echo $v;?>"><?php echo $v;?></option>
                        <?php endforeach;?>
                    </select></td>
                  </tr>
                  <tr>
                    <td height="27"><strong>Select Cities:</strong></td>
                  </tr>
                  <tr>
                    <td>
                       <ul>
                          <li><label><input type="checkbox" name="sc[]" value="Beijing" onclick="checkd()" /></label> Beijing</li>
                          <li><label><input type="checkbox" name="sc[]" value="Shanghai" onclick="checkd()" /></label> Shanghai</li>
                          <li><label><input type="checkbox" name="sc[]" value="Guilin" onclick="checkd()" /></label> Guilin</li>
                          <li><label><input type="checkbox" name="sc[]" value="Hong Kong" onclick="checkd()" /></label> Hong Kong</li>
                          <li><label><input type="checkbox" name="sc[]" value="Xian" onclick="checkd()" /></label> Xian</li>
                          <li><label><input type="checkbox" name="sc[]" value="Kunming" onclick="checkd()" /></label> Kunming</li>
                          <li><label><input type="checkbox" name="sc[]" value="Lhasa" onclick="checkd()" /></label> Lhasa</li>
                          <li><label><input type="checkbox" name="sc[]" value="Yangtze" onclick="checkd()" /></label> Yangtze</li>
                          
                       </ul>
                      </td>
                  </tr>
                  <tr>
                    <td class="link3"><label >
                      <textarea  name="city"  cols="25" style="width:235px; border:1px solid #e0e0e0; height:50px;" id="city" ></textarea>
                      <input type="hidden" name="Itemid" id="Itemid" value="151" />
                      <input type="hidden" name="option" id="option" value="com_msearch" />
                      <input type="hidden" name="task" id="task" value="search" />
                      </label>
                      <span id="select-city">Select more cities</span>
                      <div class="not_morelist" style="display:none;">
                        <h2>A-G <span id="close_new"><img src="/images/newhomepage/close.jpg" alt="" /></span></h2>
                         <ul>
                          <?php city_list('A', 'G',$city_list);?>
                         </ul>
                        <h2>H-K</h2>
                         <ul>
                          <?php city_list('H', 'K',$city_list);?>
                         </ul>
                        <h2>L-Q</h2>
                         <ul>
                          <?php city_list('L', 'Q',$city_list);?>
                         </ul>
                        <h2>S-Z</h2>
                         <ul>
                          <?php city_list('S', 'Z',$city_list);?>
                         </ul>
                        <div class="select">
                        </div>
                        <div class="search_new"><a href="javascript:;" onclick="javascript:document.searchform.submit()"><img src="/images/newhomepage/search_new.jpg" alt="" /></a> <a href="javascript:;" onclick="go_to_diy_search()"><img src="/images/newhomepage/tailor.jpg" alt="" style="margin-left:15px;"/></a></div>
                      </div>

                  </td>
                  </tr>
                  <tr>
                    <td align="left"><label>
                      <a href="javascript:;" onclick="javascript:document.searchform.submit()" style="margin-right:15px;"><img src="/images/newhomepage/search_new.jpg" alt="" /></a>
                    </label>
                    <label>
                      <a href="javascript:;" onclick="go_to_diy_search()" style="margin-right:15px;"><img src="/images/newhomepage/tailor.jpg" alt="" /></a>
                    </label>
                    </td>
                  </tr>
                </table>
              </form>
            </div>
            <div style="width:100%; height:auto; float:left; padding:0px; margin:0px;"><img src="/images/right1_10.jpg" /></div>
          </div>

<script>
  (function($){
      $("#select-city").click(function(){
         $(".not_morelist").show();
      });

      $("#close_new").click(function(){
        $(".not_morelist").hide();
      });
  })(jQuery);

  function checkd(){
      var selected_city = [];
      $("input[name='sc[]']:checked").each(function(){
          if($.inArray($(this).val(), selected_city) == -1) selected_city.push($(this).val());
          $("#city").val(selected_city.join(','));
      });       
  }

  function go_to_diy_search(){
     if(document.getElementById('city').value==''){
         alert('Please select cities.');
         return false;
     }  
     document.location.href="/index.php?option=com_diy&template=customize2&view=customize1&city_url="+document.getElementById('city').value;
  }
</script>

