<?php defined('_JEXEC') or die('Restricted access'); ?>

<?php
	$cid = JRequest::getVar( 'cid', array(0), '', 'array' );
	$edit=JRequest::getVar( 'edit', true );
	JArrayHelper::toInteger($cid, array(0));
	$editor = &Jfactory::getEditor();

	$text = ( $edit ? JText::_( 'Edit' ) : JText::_( 'New' ) );

	JToolBarHelper::title(  JText::_( '省份地图管理' ).': <small><small>[ ' . $text.' ]</small></small>' );
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
   function del(url) {
 
     
 
     var url = url;
	 
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
					标题
				</label>
			</td>
			<td>
		
				<textarea name="title" id="title" cols="30" rows="5"></textarea>
			</td>
		</tr>
		
		<tr>
			<td class="key">
				<label for="polloption">
					地图ALT
				</label>
			</td>
			<td>
		
				<textarea name="pic_alt" id="pic_alt" cols="30" rows="5"></textarea>
			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="polloption">
					地图上传
				</label>
			</td>
			<td>
		
<input type="file" name="ufile" id="ufile" size=50>
			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="polloption">
					属性：
				</label>
			</td>
			<td>
			<select name="state" size=1>
                <option value="0" >省份地图 </option>
                <option value="1">旅游地图</option>
              
              </select>	
			</td>
		</tr>
									
<?php echo $this->pic_str;?>
	</table>
	</fieldset>
</div>


</div>
<div class="clr"></div>

	<input type="hidden" name="task" value="" />
	<input type="hidden" name="option" value="com_province" />
	<input type="hidden" name="c" value="upload" />
	<input type="hidden" name="provinceid" value="<?php echo $this->provinceid; ?>" />
	<input type="hidden" name="textfieldcheck" value="<?php echo $n; ?>" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>
