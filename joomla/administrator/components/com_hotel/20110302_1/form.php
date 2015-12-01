<?php defined('_JEXEC') or die('Restricted access'); ?>

<?php
	$cid = JRequest::getVar( 'cid', array(0), '', 'array' );
	$edit=JRequest::getVar( 'edit', true );
	JArrayHelper::toInteger($cid, array(0));
	$editor = &Jfactory::getEditor();

	$text = ( $edit ? JText::_( 'Edit' ) : JText::_( 'New' ) );

	JToolBarHelper::title(  JText::_( '酒店' ).': <small><small>[ ' . $text.' ]</small></small>' );
	JToolBarHelper::Preview('index.php?option=com_poll&controller=poll&cid[]='.$cid[0]);
	JToolBarHelper::save();
	//JToolBarHelper::apply();
	if ($edit) {
		// for existing items the button is renamed `close`
		JToolBarHelper::cancel( 'cancel', 'Close' );
	} else {
		JToolBarHelper::cancel();
	}
	JToolBarHelper::help( 'screen.polls.edit' );
?>

<?php

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
			alert( "<?php echo JText::_( 'Poll must have a title', true ); ?>" );
		} else{

			submitform( pressbutton );
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
					酒店名称
				</label>
			</td>
			<td>
		
				<input class="inputbox" type="text" name="name" id="name" value="<?php echo $this->options['0']->name;?>" size="60" />
			</td>
		</tr>

		<tr>
			<td class="key">
				<label for="polloption">
					酒店地址
				</label>
			</td>
			<td>
		
				<input class="inputbox" type="text" name="hotel_addr" id="hotel_addr" value="<?php echo $this->options['0']->hotel_addr;?>" size="60" maxlength="255" />
			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="polloption">
					谷歌地图坐标
				</label>
			</td>
			<td>
		
				经度<input class="inputbox" type="text" name="lon" id="lon" size=20 value="<?php echo $this->options['0']->lon;?>"  maxlength="255" />&nbsp;&nbsp;				纬度<input class="inputbox" type="text" name="lat" id="lat" size=20 value="<?php echo $this->options['0']->lat;?>" size="20" maxlength="255" />
			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="polloption">
					所属酒店连锁
				</label>
			</td>
			<td>
		
<select name="brand"  id="brand">
			<option value=0>请选择酒店连锁品牌</option>
			<?php echo $this->brand_str;?>
			</select>
			</td>
		</tr>

		<tr>
			<td class="key">
				<label for="polloption">
					省份/城市
				</label>
			</td>
			<td>
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




	function SetDis(cid){

		   if(cid==0){
		   
		   return false;
		   }





     var cid = String(cid);
	 re = /\d*/i; //\d表示数字,*表示匹配多个数字
	r = cid.match(re);
	
	 if(cid!=r){


	 cid=document.getElementById("cityid").options[document.getElementById("cityid").selectedIndex].value;

	<?php
		
	if($this->options['0']->districtid!=0){

		$temp="&disid=".$this->options[0]->districtid;

		echo "var cidStr='$temp';";

	}else{
		echo "var cidStr='';";
	}
	?>
		var url = "../index.php?option=com_getdistrict&cid=" + escape(cid)+cidStr;
	 }else{
	<?php
		
	if($this->options['0']->districtid!=0){

		$temp="&disid=".$this->options[0]->districtid;

		echo "var cidStr='$temp';";

	}else{
		echo "var cidStr='';";
	}
	?>
		var url = "../index.php?option=com_getdistrict&cid=" + escape(cid)+cidStr;
		
	}

     
	 
     request.open("GET", url, true);
     request.onreadystatechange = displayDis;
     request.send(null);


}


  function displayDis(){
  
     if (request.readyState == 4) {
       if (request.status == 200) {
         var response = request.responseText;
         //document.getElementById("order").value = response[0];
		 document.getElementById("districthidden").style.display="";
         document.getElementById("districthidden").innerHTML =response;
       } else
         alert("status is " + request.status);
     }  
  
  }

   function SetCity(val) {
	   if(val==0){
	   
	   return false;
	   }
     var pid = String(val);
	 re = /\d*/i; //\d表示数字,*表示匹配多个数字
	r = pid.match(re);
	
	 if(pid!=r){


	 pid=document.getElementById("provinceid").options[document.getElementById("provinceid").selectedIndex].value;

	<?php
		
	if($this->options['0']->cityid!=0){

		$temp="&cid=".$this->options[0]->cityid;

		echo "var cidStr='$temp';";

	}else{
		echo "var cidStr='';";
	}
	?>
		var url = "../index.php?option=com_getcity&pid=" + escape(pid)+cidStr;
	 }else{
	<?php
		
	if($this->options['0']->cityid!=0){

		$temp="&cid=".$this->options[0]->cityid;

		echo "var cidStr='$temp';";

	}else{
		echo "var cidStr='';";
	}
	?>
		var url = "../index.php?option=com_getcity&pid=" + escape(pid)+cidStr;
		
	}

     
	 
     request.open("GET", url, true);
     request.onreadystatechange = updatePage;
     request.send(null);
   }

   function updatePage() {
     if (request.readyState == 4) {
       if (request.status == 200) {
         var response = request.responseText;
         //document.getElementById("order").value = response[0];
		 document.getElementById("cityhidden").style.display="";
         document.getElementById("cityhidden").innerHTML =response;
       } else
         alert("status is " + request.status);
     }
   }

</script>


		


<script language="javascript" type="text/javascript"> 
  var trIndex = 0;
 function zj(){
 

 
var inpput_season="<input type=\"text\" id=\"room[]\" name=\"room[]\"  size=20>";
 
var inpput_two="<input type=\"text\" id=\"price[]\" name=\"price[]\"  size=20>"; 
var input_breakfast="<input type=\"checkbox\" id=\"breakfast[]\" name=\"breakfast[]\" value=1 checked>"
 

 
 
 
var table    = document.getElementById("hotelroom");
	
	   
 
var count=document.getElementById("hotelroom").rows.length;
var row=document.getElementById("hotelroom").insertRow(count);

 var delHref = "<a href='javascript:void(0);' onclick=\"this.parentNode.parentNode.parentNode.deleteRow(this.parentNode.parentNode.rowIndex);\">删除</a>";
row.insertCell(0).innerHTML=inpput_season;
row.insertCell(1).innerHTML=inpput_two;
row.insertCell(2).innerHTML=input_breakfast;
row.insertCell(3).innerHTML=delHref;

 
 }
    function delTR(r) {
 
        if (window.confirm("确认删除吗？")) {
			  var i=r.parentNode.parentNode.rowIndex;
			 
  document.getElementById('hotelroom').deleteRow(i);
 

 
        }
    }
</script>








			<select name="provinceid" onchange="SetCity(this.options[this.selectedIndex].value)" id="provinceid">
			<option value=0>请选择省份</option>
			<?php echo $this->pro_str;?>
			</select>&nbsp;&nbsp;&nbsp;&nbsp;<span id="cityhidden" style="display: none;"></span>
&nbsp;&nbsp;&nbsp;&nbsp;<span id="districthidden" style="display: none;"></span>
			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="polloption">
					酒店星级
				</label>
			</td>
			<td>
		
			<select name="hotel_grade"  id="hotel_grade">
			<option value=0>请选择</option>
			<?php echo $this->cat_str;?>
			</select>
			</td>
		</tr>

		<tr>
			<td class="key">
				<label for="polloption">
					酒店房型/价格
				</label>
			</td>
			<td>
			<table border=1 id="hotelroom" width="400">
			<tr><td>房间类型</td><td>房间价格</td><td>早餐</td><td><a href="#" onclick="javascript:zj()">增加</a></td></tr>
			<?php echo $this->hotelroom_str;?>
			</table>


				
			</td>
		</tr>




		<tr>
			<td class="key">
				<label for="polloption">
					酒店简介
				</label>
			</td>
			<td>
			<?php 	echo $editor->display( 'description',  htmlspecialchars($this->options['0']->description,ENT_QUOTES), '550', '300', '60', '20', array('pagebreak', 'readmore'));?>
				
			</td>
		</tr>


		<tr>
			<td class="key">
				<label for="polloption">
					周围交通描述
				</label>
			</td>
			<td>
			<?php 	echo $editor->display( 'surrounding',  htmlspecialchars($this->options['0']->surrounding,ENT_QUOTES), '550', '300', '60', '20', array('pagebreak', 'readmore'));?>
				
			</td>
		</tr>

		<tr>
			<td class="key">
				<label for="polloption">
					酒店设施与服务
				</label>
			</td>
			<td>
			<?php 	echo $editor->display( 'service',  htmlspecialchars($this->options['0']->service,ENT_QUOTES), '550', '300', '60', '20', array('pagebreak', 'readmore'));?>
				
			</td>
		</tr>


		<tr>
			<td class="key">
				<label for="polloption">
					酒店图片
				</label>
			</td>
			<td>
<input type="file" name="ufile" id="ufile" size=50>
				
			</td>
		</tr>

		
		<!--tr>
			<td class="key">
				<label for="polloption">
					地图
				</label>
			</td>
			<td>
				<div id="content">

		<p>点击“浏览”按钮，选择您要上传的文档文件后，系统将自动上传并在完成后提示您。</p>
		<p>请勿上传包含中文文件名的文件！</p>
		<div class="fieldset flash" id="fsUploadProgress">
			<span class="legend">快速上传</span>
	  </div>
		<div id="divStatus">0 个文件已上传</div>
			<div>
				<span id="spanButtonPlaceHolder"></span>
				<input id="btnCancel" type="button" value="取消所有上传" onclick="swfu.cancelQueue();" disabled="disabled" style="margin-left: 2px; font-size: 8pt; height: 29px;" />
			</div>


</div>
				
			</td>
		</tr-->											
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
				<input class="inputbox" type="text" name="seo_title" id="seo_title" size="60" value="<?php echo $this->options[0]->seo_title; ?>" />
			</td>
		</tr>
		<tr>
			<td width="110" class="key">
				<label for="alias">
					页面Key:
				</label>
			</td>
			<td>
				<input class="inputbox" type="text" name="seo_key" id="seo_key" size="60" value="<?php echo $this->options[0]->seo_key; ?>" />
			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="lag">
					页面Description:
				</label>
			</td>
			<td>
				<input class="inputbox" type="text" size="60" name="seo_description" id="seo_description" size="10" value="<?php echo $this->options[0]->seo_description; ?>" />
				
			</td>
		</tr>

	</table>
	</fieldset>
</div>
<div class="clr"></div>

	<input type="hidden" name="task" value="" />
	<input type="hidden" name="option" value="com_hotel" />
<input type="hidden" name="edit" value="<?php echo $this->edit; ?>" />

	<input type="hidden" name="id" value="<?php echo $this->options[0]->id; ?>" />
	<input type="hidden" name="cid[]" value="<?php echo $this->options[0]->id; ?>" />
	<input type="hidden" name="textfieldcheck" value="<?php echo $n; ?>" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>
<script> window.onload=SetCity;</script>