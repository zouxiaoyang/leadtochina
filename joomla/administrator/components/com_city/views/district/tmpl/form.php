<?php defined('_JEXEC') or die('Restricted access'); ?>

<?php
	$cid = JRequest::getVar( 'cid', array(0), '', 'array' );
	$edit=JRequest::getVar( 'edit', true );
	JArrayHelper::toInteger($cid, array(0));
	$editor = &Jfactory::getEditor();

	$text = ( $edit ? JText::_( 'Edit' ) : JText::_( 'New' ) );

	JToolBarHelper::title(  JText::_( '套餐图片管理' ).': <small><small>[ ' . $text.' ]</small></small>' );
	//JToolBarHelper::Preview('index.php?option=com_poll&controller=poll&cid[]='.$cid[0]);
	JToolBarHelper::save();
	//JToolBarHelper::apply();

		// for existing items the button is renamed `close`
		JToolBarHelper::cancel( 'cancel', 'Close' );

	//JToolBarHelper::help( 'screen.polls.edit' );
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
   function submitdis(pid,cid) {
 
     
 
    
	var dis=document.getElementById("district").value;
	 var url = "../index.php?option=com_subdis&pid="+pid+"&cid="+cid+"&disname="+encodeURIComponent(dis);
     request.open("GET", url, true);
     request.onreadystatechange = updatePage;
     request.send(null);
   }
 
   function updatePage() {
     if (request.readyState == 4) {
       if (request.status == 200) {
         var response = request.responseText;
         //document.getElementById("order").value = response[0];
			alert(response);
			document.location.reload();
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
					城市区名
				</label>
			</td>
			<td>
				<input type="text" name="district" id="district" size=50><input type="button" name="subdis" id="subdis" value="提交" onclick="submitdis(<?php echo $this->provinceid; ?>,<?php echo $this->cityid; ?>)">
				
			</td>
		</tr>

				
									
<?php echo $this->dis_str;?>
	</table>
	</fieldset>
</div>


</div>
<div class="clr"></div>

	<input type="hidden" name="task" value="" />
	<input type="hidden" name="option" value="com_city" />
	<input type="hidden" name="cityid" value="<?php echo $this->cityid; ?>" />
	<input type="hidden" name="packageid" value="<?php echo $this->packageid; ?>" />
	<input type="hidden" name="textfieldcheck" value="<?php echo $n; ?>" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>
