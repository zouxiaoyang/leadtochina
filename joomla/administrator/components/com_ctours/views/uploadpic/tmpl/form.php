<?php defined('_JEXEC') or die('Restricted access'); ?>
<script src="/js/jquery.js"></script>
<script>
  var jq = jQuery.noConflict();
</script>


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

<div class="col width-55" style="width:74%;">
	<fieldset class="adminform">
	<legend><?php echo JText::_( 'Options' ); ?></legend>
	<table class="admintable">
	

		
		<tr>
			<td class="key">
				<label for="polloption">
					图片ALT
				</label>
			</td>
			<td>
		
				<textarea name="pic_alt" id="pic_alt" cols="30" rows="5"></textarea>
			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="polloption">
					图片上传
				</label>
			</td>
			<td>
		
<input type="file" name="ufile" id="ufile" size=50>
			</td>
		</tr>
				
									
<?php //echo $this->pic_str;?>
	</table>
 <?php foreach($this->piclist as $v):?>
    <?php
        $pic = "/".$v->pic_dir ."thumb/thumb_".$v->pic_path;
    ?>
      <div style="float:left;margin-right:10px; height:210px; width:160px;">
      <img src="<?php echo $pic;?>" /><br />
      <a style=" float:left; height:30px; line-height:30px; width:25px;display:block;" href="#" onclick="javascript:del('../index.php?option=com_delpic&id=<?php echo $v->id;?>}')">删除</a> 
      <a style="float:left; height:30px; line-height:30px;  width:25px;display:block;" href="index.php?option=com_cntours&c=upload&task=editpic&cid[]=$uid&id=<?php echo $v->id;?>" style="display:none">编辑</a>&nbsp;
      <a style="float:left;  height:30px; line-height:30px;  width:34px;display:block;" href='###' onclick='upload_pic(<?php echo$v->id;?>, this)'><?php if($v->recommend == 1):?>已推荐<?php else:?>未推荐<?php endif;?></a>
      <input type="text" value="<?php echo $v->pic_sort;?>" onblur="modify_pic_sort(<?php echo $v->id;?>, this);" style="width:50px;margin-top:5px;" /></br>
      <div style="clear:left;"></div>
      <input type="text" value="<?php echo $v->pic_alt;?>" onblur="modify_pic_alt(<?php echo $v->id;?>, this);" style="width:150px" />
      </div>
    <?php endforeach;?>

	</fieldset>
</div>


</div>
<div class="clr"></div>

	<input type="hidden" name="task" value="" />
	<input type="hidden" name="option" value="com_ctours" />
	<input type="hidden" name="c" value="upload" />
	<input type="hidden" name="packageid" value="<?php echo $this->packageid; ?>" />
	<input type="hidden" name="textfieldcheck" value="<?php echo $n; ?>" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>

<script>
  function upload_pic(id,obj){
    jq.get("/administrator/index.php?option=com_cntours&task=recommend", {id:id}, function(ret){
      if(ret == 1) jq(obj).html("已推荐");
      if(ret == 0) jq(obj).html("未推荐");
      
    })
  }

  function modify_pic_alt(id,obj){
    var pic_alt = jq(obj).val();
    jq.get("/administrator/index.php?option=com_cntours&task=modify_pic_alt", {id:id,pic_alt:pic_alt}, function(ret){
    })

  }
  function modify_pic_sort(id,obj){
    var pic_sort = jq(obj).val();
    jq.get("/administrator/index.php?option=com_cntours&task=modify_pic_sort", {id:id,pic_sort:pic_sort}, function(ret){
    })

  } 
</script>
