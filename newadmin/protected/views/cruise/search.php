<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/yangtze.css'); ?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/js/jqueryUi/jquery.ui.core.css'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jqueryUi/jquery.ui.core.js');?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jqueryUi/jquery.ui.datepicker.js');?>

<style type="text/css">
<!--
.list-view .pager{width:100%; height:auto; float:left; margin-top:20px; padding-bottom:20px; text-align:center; color:#1c1a1b;}
-->
</style>
<div id="content">
   <div id="menu-home"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('cruise/index');?>">Yangtze Cruise</a> Search</div>
   <!--  main start -->
   <div id="main">
          <!--  search1 start -->
          <div class="search1">
               <form name="cruiseSearch" action="<?php echo Yii::app()->createUrl('cruise/search');?>" method="get">
                  <table border="0" cellspacing="0" cellpadding="0">
                      <tr>
                           <td>Sailing Dates: <input name="sailling_date" id="sailling_date" type="text" autocomplete="off" value="<?php echo htmlentities($_GET['sailling_date']);?>" class="Wdate" /></td>
                           <td>Ship Route 
                            <select name="sailling_city" onchange="if(this.value=='') style='';else style='color:#000;'">
                                <option value="">Choose Ship Route</option>
                                <option value="2_down" <?php if($_GET['sailling_city'] == '2_down'):?>selected="selected" <?php endif;?>>4 Days Chongqing-Yichang</option> 
                                <option value="1_up" <?php if($_GET['sailling_city'] == '1_up'):?>selected="selected" <?php endif;?>>5 Days Yichang-Chongqing</option>
                                <option value="1_down" <?php if($_GET['sailling_city'] == '1_down'):?>selected="selected" <?php endif;?>>7 Days Chongqing-Shanghai</option>
                                <option value="2_up" <?php if($_GET['sailling_city'] == '2_up'):?>selected="selected" <?php endif;?>>9 Days Shanghai-Chongqing</option>
<!--
                              <option value="">Choose Ship Route</option>
                              <?php foreach(Cruise::$upCityArr as $k=>$v):?>
                                <option value="<?php echo $k;?>_up" <?php if($_GET['sailling_city'] == $k.'_up'):?>selected="selected" <?php endif;?>><?php echo Cruise::$upCityDays[$k].$v;?></option>
                              <?php endforeach;?>
                              <?php foreach(Cruise::$downCityArr as $k=>$v):?>
                                <option value="<?php echo $k;?>_down" <?php if($_GET['sailling_city'] == $k.'_down'):?>selected="selected" <?php endif;?>><?php echo Cruise::$downCityDays[$k].$v;?></option>
                              <?php endforeach;?>
-->
                            </select>
                            </td>  
                            
                            <td>Ship Name 
                                <?php $cruise_names = Cruise::getAllCruiseName();?>
                            <select name="ship_name" onchange="if(this.value=='') style='';else style='color:#000;'">
                                    <option value="">Choose Ship Name</option>
                                    <?php foreach($cruise_names as $v):?>
                                    <option <?php if($_GET['ship_name'] == $v['cruise_name']):?>selected="selected"<?php endif;?>value="<?php echo $v['cruise_name'];?>"><?php echo $v['cruise_name'];?></option>
                                    <?php endforeach;?>
                            </select>
                            </td>
                           <td width="66"><a href="javascript:;" onclick="document.forms['cruiseSearch'].submit();" ><img src="/images/yangtze/search_new.png" alt="" /></a></td>
                    </tr>
                  </table>
                </form>
                <div class="clear"></div>
                <h2><span><?php echo $dataProvider->totalItemCount;?></span> Yangtze Cruises matching your chosen criteria</h2>
           </div>
          <!--  search1 end -->
          
          <!--  result start -->
           <div class="result_new">

          <?php if($dataProvider->totalItemCount):?>
               <?php $this->widget('zii.widgets.CListView', array(
                 'dataProvider'=>$dataProvider,
                 'itemView'=>'_list',
                 'ajaxUpdate'=>false,
		              'pager'=>array(
                    'cssFile'=>False,
                    'header'=>'',
                  ),
                 'template'=>"{items}\n{pager}",
               )); ?>
          <?php else:?>
          <p style="margin: 20px;">There is no cruise ships or the cruise schedule is unstable in this period, <a href="http://messenger.providesupport.com/messenger/travelthing.html" target="_blank">contact us</a> to get the latest cruise schedule.</p>
         <?php endif;?>
               
           </div>
           </div>
          <!--  result end -->
   </div>
   <!--  main end -->
</div>

<script type="text/javascript">
$("#sailling_date").datepicker({
  changeMonth: true,
  "dateFormat":"yy-mm-dd",
  numberOfMonths: 1,
});
</script>
