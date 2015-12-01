<?php defined('_JEXEC') or die('Restricted access'); ?>

<?php
	$cid = JRequest::getVar( 'cid', array(0), '', 'array' );
	$edit=JRequest::getVar( 'edit', true );
	JArrayHelper::toInteger($cid, array(0));
	JRequest::setVar( 'hidemainmenu', 1 );
	$editor = &Jfactory::getEditor();

	$text = ( $edit ? JText::_( 'Edit' ) : JText::_( 'New' ) );

	JToolBarHelper::title(  JText::_( '套餐' ).': <small><small>[ ' . $text.' ]</small></small>' );
	//JToolBarHelper::Preview('index.php?option=com_cntours&controller=cntours&cid[]='.$cid[0]);
	JToolBarHelper::save();
	//JToolBarHelper::apply();
	if ($edit) {
		// for existing items the button is renamed `close`
		JToolBarHelper::cancel( 'cancel', 'Close' );
	} else {
		JToolBarHelper::cancel();
	}
	JToolBarHelper::help( 'screen.cntours.edit' );
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
			 var url = "../index.php?option=com_getroute&pcaid=" + escape(childid);
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
	
     var url = "../index.php?option=com_getchild&cid=" + escape(pid)+cidStr;
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
		 document.getElementById("packname").innerHTML="套餐名称";
		document.getElementById("dis_name").innerHTML="<input class=\"inputbox\" type=\"text\" name=\"name\" id=\"name\" value=\"<?php echo $this->options['0']->name;?>\" size=\"60\" />";		 
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
					套餐类型 
				</label>
			</td>
			<td>
    <select name='categorieid_str' onchange="SetDisplay(this.options[this.selectedIndex].value);" id='categorieid_str'>;
<?php echo $this->cat_str;?>   </select>&nbsp;&nbsp;&nbsp;&nbsp;<span id="child_cat" style="display:none"></span>
				
			</td>
		</tr>
		
		<tr>
			<td class="key" id="packname">
				<label  for="polloption">
					套餐名称
				</label>
			</td>
			<td id="dis_name">
		
				<input class="inputbox" type="text" name="name" id="name" value="<?php echo $this->options['0']->name;?>" size="60" />
			</td>
		</tr>
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
					套餐景点路线
				</label>
			</td>
			<td>
			<?php 	echo $editor->display( 'tour_intro',  htmlspecialchars($this->options['0']->tour_intro,ENT_QUOTES), '550', '300', '60', '20', array('pagebreak', 'readmore'));?>
				
			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="polloption">
					套餐注意事项
				</label>
			</td>
			<td>
			<?php 	echo $editor->display( 'note',  htmlspecialchars($this->options['0']->note,ENT_QUOTES), '550', '300', '60', '20', array('pagebreak', 'readmore'));?>
				
			</td>
		</tr>		
		<tr>
			<td class="key">
				<label for="polloption">
					图片
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
	<input type="hidden" name="option" value="com_yangtze" />
	<input type="hidden" name="package_type" value="3" />
	<input type="hidden"  name="id" value="<?php echo $this->options[0]->id; ?>" />
	
	<input type="hidden" name="textfieldcheck" value="<?php echo $n; ?>" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>
<script language="javascript" type="text/javascript">window.onload=SetDisplay;</script>