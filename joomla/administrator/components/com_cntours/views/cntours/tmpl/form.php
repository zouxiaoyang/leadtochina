<?php defined('_JEXEC') or die('Restricted access'); ?>

<?php
	$cid = JRequest::getVar( 'cid', array(0), '', 'array' );
	$edit=JRequest::getVar( 'edit', true );
	JArrayHelper::toInteger($cid, array(0));
	JRequest::setVar( 'hidemainmenu', 1 );
	$editor = &Jfactory::getEditor();

	$text = ( $edit ? JText::_( 'Edit' ) : JText::_( 'New' ) );

	JToolBarHelper::title(  JText::_( '编辑中国旅游' ).': <small><small>[ ' . $text.' ]</small></small>' );
	//JToolBarHelper::Preview('index.php?option=com_cntours&controller=cntours&cid[]='.$cid[0]);
	JToolBarHelper::save();
	//JToolBarHelper::addNew();
	//JToolBarHelper::apply();
	if ($edit) {
		// for existing items the button is renamed `close`
		JToolBarHelper::cancel( 'cancel', 'Close' );
	} else {
		JToolBarHelper::cancel();
	}
	JToolBarHelper::help( 'screen.cntours.edit' );
	include_once(JPATH_ROOT.'/config/beijing_tours_config.php');
    include_once(JPATH_ROOT.'/config/search_config.php');
?>

<?php
JFilterOutput::objectHTMLSafe( $this->poll, ENT_QUOTES );
$cparams = JComponentHelper::getParams ('com_media');
?>
<script language="javascript" type="text/javascript">
	function submitbutton(pressbutton) {

		var form = document.adminForm;
		if (pressbutton == 'cancel') {
			submitform( pressbutton );
			return;
		}
		// do field validation
		if (form.name.value == "") {
			alert( "<?php echo JText::_( 'cntours must have a title', true ); ?>" );
		} else{
<?php
				//echo $editor->save( 'route_Intro' ) ;
//echo $editor->save( 'tour_intro' ) ;
//echo $editor->save( 'note' ) ;
?>
			submitform( pressbutton );
		}
	}
</script>





<script language="javascript" type="text/javascript">
  
   var request = false;
   try {
     request = new XMLHttpRequest();
   } catch (trymicrosoft) {
     try {
       request = new ActiveXObject("Msxml2.XMLHTTP");
     } catch (othermicrosoft) {
       try {
         request = new ActiveXObject("Microsoft.XMLHTTP");
       } catch (failed) {
         request = false;
       }  
     }
   }
   if (!request)
     alert("Error initializing XMLHttpRequest!");


		function GetRoutes(childid){
			
			if(childid>0){
			 var url = "/ajaxdata/getroute.php?pcaid=" + escape(childid);
			 request.open("GET", url, true);
			 request.onreadystatechange = updateRoute;
			 request.send(null);
			 }
		}



	function updateRoute(){
	
     if (request.readyState == 4) {
       if (request.status == 200) {
         var response = request.responseText;
		 
			if(response!=""){
				
			document.getElementById("route").value=response;
			document.getElementById("route").readOnly=true;
			}
		 }
		}	
	
	
	}




   function SetDisplay(val) {
     var pid = val;
	 if(isNaN(pid)){


	 pid=document.getElementById("categorieid_str").options[document.getElementById("categorieid_str").selectedIndex].value;

	 }


	<?php

	if($this->options['0']->categorieid_str>0){

		$temp="&childid={$this->options['0']->categorieid_str}";
		echo "var tempid={$this->options['0']->categorieid_str};\n";
		echo "var cidStr='$temp';";

	}else{
		echo "var tempid='';";
		echo "var cidStr='';";
	}
	?>
	if(tempid!=pid){
	
	}else{

		cidStr="";
	}
	
     var url = "/ajaxdata/getchild.php?cid=" + escape(pid)+cidStr;
     request.open("GET", url, true);
     request.onreadystatechange = updatePage;
     request.send(null);
   }

   function updatePage() {
     if (request.readyState == 4) {
       if (request.status == 200) {
         var response = request.responseText;
		 
         //document.getElementById("order").value = response[0];
		 if(response!=""){
			 <?php echo "var grade_string='".$this->grade_str."';";?>
			 document.getElementById("packname").innerHTML="套餐等级";
			document.getElementById("dis_name").innerHTML=grade_string;
			 document.getElementById("child_cat").style.display="";
			 document.getElementById("child_cat").innerHTML =response;			
		 }else{
		 document.getElementById("child_cat").innerHTML="";
		 document.getElementById("packname").innerHTML="套餐等级";
		document.getElementById("dis_name").innerHTML="";		 
		//document.getElementById("dis_name").innerHTML="<input class=\"inputbox\" type=\"text\" name=\"name\" id=\"name\" value=\"<?php echo $this->options['0']->name;?>\" size=\"60\" />";
		 }

       } else
         alert("status is " + request.status);
     }
   }

</script>



<form action="index.php" method="post" name="adminForm" enctype="multipart/form-data">

<div class="col width-55">
	<fieldset class="adminform">
	<legend><?php echo JText::_( 'Options' ); ?></legend>
	<table class="admintable">
		<tr>
			<td class="key">
				<label for="polloption">
					套餐名称 
				</label>
			</td>
			<td>
    <input class="inputbox" type="input" name="name" id="" value="<?php echo $this->options['0']->name;?>" size="60" />
			</td>
		</tr>
		
		<tr>
			<td class="key">
				<label for="polloption">
					套餐类型 
				</label>
			</td>
			<td>
    <select name='category_parentid' onchange="SetDisplay(this.options[this.selectedIndex].value);" id='categorieid_str'>;
<?php echo $this->cat_str;?>   </select>&nbsp;&nbsp;&nbsp;&nbsp;<span id="child_cat" style="display:none"></span>
				
			</td>
		</tr>
<!--
		<tr>
			<td class="key" id="packname">
				<label  for="polloption">
					套餐等级
				</label>
			</td>
			<td id="dis_name"></td>
		</tr> -->

		<tr>
			<td class="key">
				<label for="polloption">
					套餐代码
				</label>
			</td>
			<td>
		
				<input class="inputbox" type="text" name="package_code" id="package_code" value="<?php echo $this->options['0']->package_code;?>" size="60" />
			</td>
		</tr>

		<tr>
			<td class="key">
				<label for="polloption">
					套餐路线
				</label>
			</td>
			<td>
			  <input class="inputbox" type="text" name="route" id="route" value="<?php echo $this->options['0']->route;?>" size="60" />		
			</td>
		</tr>
    <tr>
      <td class="key"><label>Starting City:</label></td>
      <td>
      <select name="start_city">
        <option value="0">请选择</option>
        <option value="shanghai" <?php if($this->options[0]->start_city == 'shanghai'):?>selected="selected"<?php endif;?>>shanghai</option> 
        <option value="beijing" <?php if($this->options[0]->start_city == 'beijing'):?>selected="selected"<?php endif;?>>beijing</option> 
        <option value="hongkong" <?php if($this->options[0]->start_city == 'hongkong'):?>selected="selected"<?php endif;?>>hongkong</option> 
      </select>
      </td>
    </tr>
    <tr>
      <td class="key"><label>Ending City:</label></td>
      <td>
      <select name="end_city">
        <option value="0">请选择</option>
        <option value="shanghai" <?php if($this->options[0]->end_city == 'shanghai'):?>selected="selected"<?php endif;?>>shanghai</option> 
        <option value="beijing" <?php if($this->options[0]->end_city == 'beijing'):?>selected="selected"<?php endif;?>>beijing</option> 
        <option value="hongkong" <?php if($this->options[0]->end_city == 'hongkong'):?>selected="selected"<?php endif;?>>hongkong</option> 
      </select>
      </td>
    </tr>
		<tr>
			<td class="key">
				<label for="polloption">
					Tour Type
				</label>
			</td>
			<td>
			<input type="text" name="package_tour_type" id="package_tour_type" value="<?php echo $this->options[0]->package_tour_type?>">
				
			</td>
		</tr>		
		<tr>
			<td class="key">
				<label for="polloption">
					适合人群
				</label>
			</td>
			<td>
			<input type="text" name="targets" id="targets" value="<?php echo $this->options[0]->targets?>">
				
			</td>
		</tr>		
		<tr>
			<td class="key">
				<label for="polloption">
					天数
				</label>
			</td>
			<td>
			<input type="text" name="days" id="days" value="<?php echo $this->options[0]->days?>">
				
			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="polloption">
					Departs
				</label>
			</td>
			<td>
			<input type="text" name="departs" id="departs" value="<?php echo $this->options[0]->departs?>">
				
			</td>
		</tr>	
		<tr>
			<td class="key">
				<label>
          IS_HOT
				</label>
			</td>
			<td>
			<input type="checkbox" name="hot" <?php if($this->options[0]->hot==1):?>checked="checked"<?php endif;?> value="1">
			原价：<input type="text" name="price_yuan" value="<?php if($this->options[0]->price_yuan) echo $this->options[0]->price_yuan;?>" />
			</td>
		</tr>
		<tr>
		<td class="key">
				<label>
			地图城市
				</label>
			</td>
			<td>
			<input type="text" name="map_city" id="map_city" value="<?php echo ($this->options[0]->map_city)?$this->options[0]->map_city:$this->options[0]->route;?>" size="69">
			</td>
		</tr>

		  <td class="key">
				<label>
			图片编号
				</label>
			</td>
			<td>
			<input type="text" name="lightbox" id="lightbox" value="<?php echo $this->options[0]->lightbox;?>" size="69">
			</td>
		</tr>
		<tr>
<!--
   <tr>
    <td class="key">
				<label>
          首页推荐 
				</label>
			</td>
			<td>
			<input type="checkbox" name="index_recommend" <?php if($this->options[0]->index_recommend==1):?>checked="checked"<?php endif;?> value="1"> ChinaTours
			<input type="checkbox" name="index_recommend" <?php if($this->options[0]->index_recommend==2):?>checked="checked"<?php endif;?> value="2"> CityTours 
			<input type="text" name="index_recommend_order" value="<?php echo $this->options[0]->index_recommend_order;?>"/> 排序（数字越大越靠前）
			</td>
		</tr>
-->

		<tr>
			<td class="key">
				<label for="polloption">
					景点
				</label>
			</td>
			<td>
              <textarea name="attractions" id="attractions" cols="60" rows="10"><?php echo $this->options[0]->attractions; ?></textarea>			
			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="polloption">
					Recommanded Reason
				</label>
			</td>
			<td>
              <textarea name="recommand_reason" id="recommand_reason" cols="60" rows="6"><?php echo $this->options[0]->recommand_reason; ?></textarea>			
			</td>
		</tr>

<!--
		<tr>
			<td class="key">
				<label for="Promotion">Promotion</label>
			</td>
			<td>
      <textarea name="promotion" id="promotion" cols="60" rows="6"><?php echo $this->options[0]->promotion; ?></textarea>			
			</td>
		</tr>
		<tr>
      <td class="key"><label>By Transportation:(选择不要超过6个)</label></td>
      <td>
       <?php $vehicle_type = explode(',', $this->options[0]->vehicle_type);?>
       <?php foreach($vehicles as $k=>$v):?>
       <?php echo $v;?><input type="checkbox" name="vehicle_type[]" value="<?php echo $k;?>" <?php if(in_array($k, $vehicle_type)):?>checked="checked"<?php endif;?> />
       <?php endforeach;?>
       </td>
   </tr>
-->
    <tr>
          <td class="key"><table for="polloption">By Theme:</table></td>
          <td>
              <?php $theme_arr = explode(',', $this->options[0]->theme);?>
          		<?php foreach ($theme_list as $k=>$v):?>
                <span style="width:160px;float:left;"><?php echo $v;?><input type="checkbox" name="theme[]" value="<?php echo $k;?>" <?php if(in_array($k, $theme_arr)) echo 'checked="checked"'; ?> /></span>
          		<?php endforeach;?>
          </td>
        </tr>
        <tr>
          <td class="key"><table for="polloption">China Highlights:</table></td>
          <td>
              <?php $highlight_arr = explode(',', $this->options[0]->highlight);?>
          		<?php foreach ($china_highlights_list as $k=>$v):?>
                <span style="width:150px;float:left;"><?php echo $v;?><input type="checkbox" name="highlight[]" value="<?php echo $k;?>" <?php if(in_array($k, $highlight_arr)) echo 'checked="checked"'; ?> /></span>
          		<?php endforeach;?>
          	</select>
          </td>
        </tr>
        <tr>
          <td class="key"><table for="polloption">Season:</table></td>
          <td>
          	<select name="season" id="season">
          		<option value="">请指派season</option>
          		<?php foreach ($season_list as $k=>$v):?>
          		<option value="<?php echo $k;?>" <?php if($this->options['0']->season==$k):?>selected="selected"<?php endif;?>><?php echo $v;?></option>
          		<?php endforeach;?>
          	</select>
          </td>
        </tr>
        <tr>
          <td class="key"><label>排序</label></td>
          <td>
            <input type="text" name="sort" value="<?php echo $this->options[0]->sort;?>" />
          </td>
        </tr>
<!--
      <tr>
			<td class="key">
				<label for="polloption">
					facebook分享数
				</label>
			</td>
			<td>			
				<input type="text" name="fnum" id="fnum" value="<?php echo $this->options[0]->fnum;?>">
			</td>
		</tr>
-->
		<tr>
			<td class="key">
				<label for="polloption">
					Tips
				</label>
			</td>
			<td>
			<?php 	echo $editor->display( 'tips',  htmlspecialchars($this->options['0']->tips,ENT_QUOTES), '550', '300', '60', '20', array('pagebreak', 'readmore'));?>
				
			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="polloption">
					套餐行程特色
				</label>
			</td>
			<td>
			<?php 	echo $editor->display( 'route_Intro',  htmlspecialchars($this->options['0']->route_Intro,ENT_QUOTES), '550', '300', '60', '20', array('pagebreak', 'readmore'));?>
				
			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="polloption">
					套餐景点路线或列表页include
				</label>
			</td>
			<td>
			<?php 	//echo $editor->display( 'tour_intro',  htmlspecialchars($this->options['0']->tour_intro,ENT_QUOTES), '550', '300', '60', '20', array('pagebreak', 'readmore'));?>
		    <textarea rows="5" cols="40" id="tour_intro" name="tour_intro"><?php echo $this->options['0']->tour_intro;?></textarea>
			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="polloption">
          top10tours页面的overview
				</label>
			</td>
			<td>
			<?php 	echo $editor->display( 'note',  htmlspecialchars($this->options['0']->note,ENT_QUOTES), '550', '300', '60', '20', array('pagebreak', 'readmore'));?>
				
			</td>
		</tr>		
		<tr>
			<td class="key">
				<label for="polloption">
          具体行程的地图
				</label>
			</td>
			<td>
			<input type="file" name="ufile" id="ufile" size=50><br />
			  <?php if($this->options[0]->ufile):?>
                <img src="/<?php echo $this->options[0]->filedir;?><?php echo $this->options[0]->ufile;?>"  width="235" height="220"/>
              <?php endif;?>
			</td>
		</tr>
        <tr>
          <td class="key">
             <label for="polloption">列表页面的图片</label>
           </td>
           <td>
            <input type="file" name="pic" id="pic" size=50><span>图片大小：350 x 240</span>
               <div>
                    <?php if($this->options[0]->pic):?>
                      <img src="/<?php echo $this->options[0]->filedir;?><?php echo $this->options[0]->pic;?>" width="140" height="117"/>
                    <?php endif;?>
              </div>
            </td>
          </tr> 
          <tr>
          <td class="key">
             <label for="polloption">搜索页面的图片</label>
           </td>
           <td>
            <input type="file" name="pic_big" id="pic_big" size=50><span>图片大小：213x266</span>
               <div><br/>
                    <?php if($this->options[0]->pic_big):?>
                      <img src="/<?php echo $this->options[0]->filedir;?><?php echo $this->options[0]->pic_big;?>" width="213" height="266"/>
                    <?php endif;?>
              </div>
            </td>
          </tr> 
           <tr>
          <td class="key">
             <label for="polloption">搜索页面的图片ALT</label>
           </td>
           <td>
            <input type="inputbox" name="pic_big_alt" id="pic_big_alt" value="<?php echo $this->options[0]->pic_big_alt;?>" size=50>
             </td>
          </tr>											

        <tr>
          <td class="key">
             <label for="polloption">新版游轮页面行程推荐图片</label>
           </td>
           <td>
            <input type="file" name="cruise_recommend_pic" size=50><span>图片大小：150x120</span>
               <div><br/>
                    <?php if($this->options[0]->cruise_recommend_pic):?>
                      <img src="/<?php echo $this->options[0]->filedir;?><?php echo $this->options[0]->cruise_recommend_pic;?>" />
                    <?php endif;?>
              </div>
            </td>
          </tr>
	</table>
	</fieldset>

</div>
<div class="col width-35">
	<fieldset class="adminform">
	<legend><?php echo JText::_( 'Details' ); ?></legend>
	<table class="admintable">
		<tr>
			<td width="110" class="key">
				<label for="title">
					页面Title:
				</label>
			</td>
			<td>
			<textarea name="seo_title" id="seo_title" cols="40" rows="5"><?php echo $this->options[0]->seo_title; ?></textarea>
				<!--input class="inputbox" type="text" name="seo_title" id="seo_title" size="60" value="" /-->
			</td>
		</tr>
		<tr>
			<td width="110" class="key">
				<label for="alias">
					页面Key:
				</label>
			</td>
			<td>
				<textarea name="seo_key" id="seo_key" cols="40" rows="5"><?php echo $this->options[0]->seo_key; ?></textarea>

			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="lag">
					页面Description:
				</label>
			</td>
			<td>
				<textarea name="seo_description" id="seo_description" cols="40" rows="5"><?php echo $this->options[0]->seo_description; ?></textarea>
			
			</td>
		</tr>

	</table>
	</fieldset>
</div>
<div class="clr"></div>

	<input type="hidden" name="task" value="" />
	<input type="hidden" name="option" value="com_cntours" />
	<input type="hidden" name="package_type" value="1" />
	<input type="hidden"  name="id" value="<?php echo $this->options[0]->id; ?>" />
	
	<input type="hidden" name="textfieldcheck" value="<?php echo $n; ?>" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>
<script language="javascript" type="text/javascript">window.onload=SetDisplay;</script>
<script src="/js/jquery-1.3.2.min.js"></script>
<script>
var jq = jQuery.noConflict();
(function($){
$("input[name='vehicle_type[]']").click(function(){
	var length=$("input[name='vehicle_type[]']:checked").length;
	  if(length>6){
		 alert("最多只能选择6个！");
		 return false;
		}
});	
}(jQuery))
</script>
