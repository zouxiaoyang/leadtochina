   <div id="right">
            <div class="cruiselist">
               <h2><img src="/images/yangtze/toursh2.jpg" alt="" /></h2>
               <ul>
                  <li><a href="/travel/yangtzecruise">Yangtze River Cruise</a></li>
                  <li><a href="/travel/yangtzecruise/ships">Yangtze Cruise Ships</a></li>
                  <li><a href="/travel/yangtze-river-tours">Yangtze Cruise Tours</a></li>
                  <li><a href="/travel/yangtzecruise/china-river-cruises.html#name2">Guilin Li River Cruise</a></li>
                  <li><a href="/travel/yangtzecruise/china-river-cruises.html#name3">Shanghai Huangpu River Cruise</a></li>
                  <li><a href="/travel/yangtzecruise/china-river-cruises.html#name4">Southeast Water Town Cruise</a></li>
                  <li><a href="/travel/yangtzecruise/yangtzetour-from-chongqing.html">Yangtze River Cruise from Chongqing</a></li>
                  <li><a href="/travel/yangtzecruise/yangtzetour-from-shanghai.html">Yangtze River Cruise from Shanghai</a></li>
               </ul>
            </div>
            <div class="cruiselist">
               <h2><img src="/images/yangtze/toursh21.jpg" alt="" /></h2>
               <ul>
                  <li><a href="/travel/city-shanghai-tours">Shanghai Tours</a></li>
                  <li><a href="/travel/city-guilin-tours">Guilin Tours</a></li>
                  <li><a href="/travel/city-suzhou-tours">Suzhou Tours</a></li>
                  <li><a href="/travel/city-hangzhou-tours">Hangzhou Tours</a></li>
                  <li><a href="/travel/city-chongqing-tours">Chongqing Tours</a></li>
                  <li><a href="/travel/city-chengdu-tours">Chengdu Tours</a></li>
               </ul>
            </div>
            <?php $this->renderPartial('_rightSearch');?>
            <div class="calnew">
               <div class="callist">
                   <table cellspacing="0" cellpadding="0" border="0">
                     <tbody>
                      <?php 
                        $month_arr = array_chunk(range(1,12),4);
                      ?>
                      <?php foreach($month_arr as $arr):?>
                        <tr>
                            <?php foreach($arr as $v):?>
                            <td <?php if($v%4 == 0):?> style="border-right:none;" <?php endif;?>>
                              <?php if(date("m") == $v):?>
                              <a style="background:#dbdada; display:block;" href="/travel/yangtzecruise/calendar?month=<?php echo $v;?>"><?php echo date('M',strtotime(date("Y-".$v."-d")));?></a>
                              <?php elseif(date("m")<$v):?>
                              <a href="/travel/yangtzecruise/calendar?month=<?php echo $v;?>"><?php echo date('M',strtotime(date("Y-".$v."-d")));?></a>
                              <?php else:?>
                              <?php echo date('M',strtotime(date("Y-".$v."-d")));?>
                              <?php endif;?>
                              </td>
                            <?php endforeach;?>
                        </tr>
                      <?php endforeach;?>

                     </tbody>
                   </table>
               </div>
            </div>
            
            <?php if(Yii::app()->getController()->action->id == "chinaRiverCruise"):?>
            <div class="tripadvisor">
              <script src="/travel/js/tripadvisor.js"></script> 
            </div>
            <?php endif;?>
        </div>
