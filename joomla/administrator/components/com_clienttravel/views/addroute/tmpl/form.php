<?php defined('_JEXEC') or die('Restricted access'); ?>

<?php
	$cid = JRequest::getVar( 'cid', array(0), '', 'array' );
	$edit=JRequest::getVar( 'edit', true );
	JArrayHelper::toInteger($cid, array(0));
	$editor = &Jfactory::getEditor();

	$text = ( $edit ? JText::_( 'Edit' ) : JText::_( 'New' ) );

	JToolBarHelper::title(  JText::_( '具体行程' ).': <small><small>[ ' . $text.' ]</small></small>' );
	//JToolBarHelper::Preview('index.php?option=com_cntours&controller=cntours&cid[]='.$cid[0]);
	JToolBarHelper::save();
	//JToolBarHelper::apply();
	if ($edit) {
		// for existing items the button is renamed `close`
		JToolBarHelper::cancel( 'cancel', 'Close' );
	} else {
		JToolBarHelper::cancel();
	}
	//JToolBarHelper::help( 'screen.cntours.edit' );
?>

<?php
//JFilterOutput::objectHTMLSafe( $this->poll, ENT_QUOTES );
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
 
 
 
 

 
   function Sethotel(val) {
	   if(val==0){
	   
	   return false;
	   }
     var pid = String(val);
	 var hidstr='';
	 re = /\d*/i; //\d表示数字,*表示匹配多个数字

	
	
	var hid=document.getElementById("hotel_grade").options[document.getElementById("hotel_grade").selectedIndex].value;
 
	 pid=document.getElementById("cityid").options[document.getElementById("cityid").selectedIndex].value;
	<?php

		if(empty($this->options[0]->hotelid)==false){
		
			echo "var hotelid='&hotelid=".$this->options[0]->hotelid."';";
		}else{
			echo "var hotelid=\"\";";
		}

		?>
		if(hid==0 || hid==""){
			hidstr='';
		}else{
			hidstr='&id='+hid;
		}


	var url = "../index.php?option=com_gethotel&cid=" + escape(pid)+hotelid+hidstr;

 
     
	 
     request.open("GET", url, true);
     request.onreadystatechange = updatePage;
     request.send(null);
   }
 
   function updatePage() {
     if (request.readyState == 4) {
       if (request.status == 200) {
         var response = request.responseText;

		 document.getElementById("hotelhidden").style.display="";
         document.getElementById("hotelhidden").innerHTML =response;
 
		 
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
					行程日期
				</label>
			</td>
			<td>
		
				<input class="inputbox" type="text" name="dateno" id="dateno" disabled value="<?php echo $this->d;?>" size="60" />
			</td>
		</tr>

		<tr>
			<td class="key">
				<label for="polloption">
					当日行程
				</label>
			</td>
			<td>
			<textarea rows="3" cols="50" class="inputbox"  name="today_route" id="today_route"  /><?php echo $this->options['0']->today_route;?></textarea>	
				
			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="polloption">
					用餐标准
				</label>
			</td>
			<td>
			<textarea name="eat_standard" rows="3" cols="50" id="eat_standard"><?php echo $this->options['0']->eat_standard;?></textarea>				
			</td>
		</tr>	
		





	<tr>
			<td class="key">
				<label for="polloption">
					宾馆名称
				</label>
			</td>
			<td>
			    <select name='hotel_grade' id='hotel_grade' onchange="Sethotel();">;
<option value=0>酒店星级</option>
<?php echo  $this->hotel_str;?>
</select>&nbsp;&nbsp;&nbsp;&nbsp;<select name='cityid' id='cityid' onchange="Sethotel(this.options[this.selectedIndex].value);">;
<option value=0>请选择</option>
<?php echo $this->pro_str;?>
</select>

</select>&nbsp;&nbsp;&nbsp;&nbsp;<span id="hotelhidden" style="display: none;"></span>
			<??>
			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="polloption">
					具体活动行程
				</label>
			</td>
			<td>
			<?php 	echo $editor->display( 'activities',  htmlspecialchars($this->options['0']->activities,ENT_QUOTES), '550', '300', '60', '20', array('pagebreak', 'readmore'));?>
				
			</td>
		</tr>
										
	</table>
	</fieldset>
</div>
<!--div class="col width-35">
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
</div-->
<div class="clr"></div>

	<input type="hidden" name="task" value="" />
	<input type="hidden" name="option" value="com_clienttravel" />
	<input type="hidden" name="c" value="<?php echo $this->c;?>" />
	<input type="hidden" name="c_packageid" value="<?php echo $this->packageid;?>" />
	<input type="hidden"  name="id" value="<?php echo $this->options[0]->id; ?>" />
	
	<input type="hidden" name="textfieldcheck" value="<?php echo $n; ?>" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>

<script>
var cityid=document.getElementById("cityid").options[document.getElementById("cityid").selectedIndex].value;
Sethotel(cityid);
//window.onload=Sethotel;
</script>