<?php defined('_JEXEC') or die('Restricted access'); ?>

<?php
	$cid = JRequest::getVar( 'cid', array(0), '', 'array' );
	$edit=JRequest::getVar( 'edit', true );
	JArrayHelper::toInteger($cid, array(0));
	$editor = &Jfactory::getEditor();

	$text = ( $edit ? JText::_( 'Edit' ) : JText::_( 'New' ) );

	JToolBarHelper::title(  JText::_( '中国文化' ).': <small><small>[ ' . $text.' ]</small></small>' );
	JToolBarHelper::Preview('index.php?option=com_chinaculture&controller=chinaculture&cid[]='.$cid[0]);
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
JFilterOutput::objectHTMLSafe( $this->poll, ENT_QUOTES );
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
			<?php
					echo $editor->save( 'content' ) ; ?>
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
		 displayCat1(document.getElementById("cat1").options[document.getElementById("cat1").selectedIndex].value,1);
		  SetDis();
       } else
         alert("status is " + request.status);
     }
   }













   function displayCat1(val,selid) {
	 document.getElementById('spancat2').style.display="none";
	 document.getElementById('spancat3').style.display="none";

	displayCat(val,selid);
  
   }

   function displayCat2(val,selid) {
 document.getElementById('spancat3').style.display="none";
	displayCat(val,selid);
 
   }

   function displayCat3(val,selid) {
   
	displayCat(val,selid);
   
   }

   function displayCat(val,selid) {
	   if(val==0){
	   
	   return false;
	   }
	var selectid="cat"+selid;
	var next_id=selid+1;

	var spanid="spancat"+next_id;

     var catid = String(val);

	
	 catid=document.getElementById(selectid).options[document.getElementById(selectid).selectedIndex].value;

	if(selectid=='cat1'){
	<?php

	if(empty($this->sec_parentid)==false){

		$temp="&fromsec=com_chinaculture&from=1&ccatid=".$this->sec_parentid;

		echo "var cidStr='$temp';";

	}else{
		echo "var cidStr='&fromsec=com_chinaculture&from=1';";
	}
	?>
	}

	if(selectid=='cat2'){
	<?php
		
	if(empty($this->third_parentid)==false){

		$temp="&fromsec=com_chinaculture&from=2&ccatid=".$this->third_parentid;

		echo "var cidStr='$temp';";

	}else{
		echo "var cidStr='&fromsec=com_chinaculture&from=2';";
	}
	?>
	}

	if(selectid=='cat3'){
	<?php
		
	if(empty($this->four_parentid)==false){

		$temp="&fromsec=com_chinaculture&from=3&ccatid=".$this->four_parentid;

		echo "var cidStr='$temp';";

	}else{
		echo "var cidStr='&fromsec=com_chinaculture&from=3';";
	}
	?>
	}


	var url = "../index.php?option=com_childCat&catid=" + escape(catid)+cidStr;

     request.open("GET", url, true);

     request.onreadystatechange = updatePage1;
     request.send(null);

   }






   function updatePage1() {
     if (request.readyState == 4) {
       if (request.status == 200) {
         var response = request.responseText;

		 if(document.getElementById('spancat2').style.display==""){

			 document.getElementById('spancat3').style.display="";
			document.getElementById('spancat3').innerHTML =response;


		 }else{

			 document.getElementById('spancat2').style.display="";
			 document.getElementById('spancat2').innerHTML =response;


	document.getElementById("spancat2").style.display='';
	displayCat2(document.getElementById("cat2").options[document.getElementById("cat2").selectedIndex].value,2);

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
					标题
				</label>
			</td>
			<td>
		
				<input class="inputbox" type="text" name="title" id="title" value="<?php echo $this->options['0']->title;?>" size="60" />
			</td>
		</tr>
		<!--tr>
			<td class="key">
				<label for="polloption">
					省份
				</label>
			</td>
			<td>
			<select name="provinceid" onchange="SetCity(this.options[this.selectedIndex].value);" id="provinceid">
			<option value=0>请选择省份</option>
			<?php echo $this->pro_str;?>
			</select>
				&nbsp;&nbsp;&nbsp;&nbsp;<span id="cityhidden" style="display: none;"></span>
				&nbsp;&nbsp;&nbsp;&nbsp;<span id="districthidden" style="display: none;"></span>
			</td>
		</tr-->
		<tr>
			<td class="key">
				<label for="polloption">
					文化类别
				</label>
			</td>
			<td>
			<select name='cat1' onchange="displayCat1(this.options[this.selectedIndex].value,1);" id='cat1'>
			<option value=0>请选择类别</option>
			<?php echo $this->cat_str;?>
			</select>&nbsp;&nbsp;&nbsp;&nbsp;<span id="spancat2" style="display: none;"></span>
&nbsp;&nbsp;&nbsp;&nbsp;<span id="spancat3" style="display: none;"></span>
				
			</td>
		</tr>		
		<!--tr>
			<td class="key">
				<label for="polloption">
					价格
				</label>
			</td>
			<td>
			<input type="text" name="price" id="price" value="<?php echo $this->options[0]->price?>">
				
			</td>
		</tr-->
		<tr>
			<td class="key">
				<label for="polloption">
					描述
				</label>
			</td>
			<td>
			<?php 	echo $editor->display( 'content',  htmlspecialchars($this->options['0']->content,ENT_QUOTES), '550', '300', '60', '20', array('pagebreak', 'readmore'));?>
				
			</td>
		</tr>
	
		<tr>
			<td class="key">
				<label for="polloption">
					景点图片
				</label>
			</td>
			<td>
<input type="file" name="ufile" id="ufile" size=50>
				
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
	<input type="hidden" name="option" value="com_chinaculture" />
	<input type="hidden"  name="id" value="<?php echo $this->options[0]->id; ?>" />
	
	<input type="hidden" name="textfieldcheck" value="<?php echo $n; ?>" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>
<script> displayCat1(document.getElementById("cat1").options[document.getElementById("cat1").selectedIndex].value,1);


</script>