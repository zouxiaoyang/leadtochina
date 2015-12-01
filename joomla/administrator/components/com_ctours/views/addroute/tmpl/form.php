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
		
				<input class="inputbox" type="text" name="name" id="name" disabled value="<?php echo $this->d;?>" size="60" />
			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="polloption">
					套餐类型 
				</label>
			</td>
			<td>

<textarea rows="3" cols="50" class="inputbox"  name="categorieid_str" id="categorieid_str" disabled /><?php echo $this->cat_str;?></textarea>	
				
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
		<!--tr>
			<td class="key">
				<label for="polloption">
					住宿标准
				</label>
			</td>
			<td>
			    <select name='hotel_standard' id='hotel_standard'>;
<option value=0>请选择</option>
<?php echo $this->hotel_str;?>
</select>
				
			</td>
		</tr-->



	<tr>
			<td class="key">
				<label for="polloption">
					宾馆星级
				</label>
			</td>
			<td>
			    <select name='hotel_grade' id='hotel_grade'>;
<option value=0>请选择</option>
<?php echo $this->hotel_str;?>
</select>
				
			</td>
		</tr>


	<tr>
			<td class="key">
				<label for="polloption">
					宾馆名称
				</label>
			</td>
			<td>
			    <!--select name='hotel_standard' id='hotel_standard'>;
<option value=0>请选择</option>
<?php echo $this->hotel_str;?>
</select-->
			<?php 	echo $editor->display( 'hotel_name',  htmlspecialchars($this->options['0']->hotel_name,ENT_QUOTES), '550', '200', '60', '20', array('pagebreak', 'readmore'));?>				
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
		<tr>
			<td class="key">
				<label for="polloption">
					活动简介
				</label>
			</td>
			<td>
			<?php 	echo $editor->display( 'activities_summ',  htmlspecialchars($this->options['0']->activities_summ,ENT_QUOTES), '550', '300', '60', '20', array('pagebreak', 'readmore'));?>
				
			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="polloption">
					行程TIPS
				</label>
			</td>
			<td>
			<?php 	echo $editor->display( 'package_tips',  htmlspecialchars($this->options['0']->package_tips,ENT_QUOTES), '550', '300', '60', '20', array('pagebreak', 'readmore'));?>
				
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
		<tr>
			<td class="key">图片显示</td>
			<td><img src="/<?php echo $this->options['0']->filedir."thumb/thumb_".$this->options['0']->ufile;?>" /></td>
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
	<input type="hidden" name="option" value="com_ctours" />
	<input type="hidden" name="c" value="<?php echo $this->c;?>" />
	<input type="hidden" name="packageid" value="<?php echo $this->packageid;?>" />
	<input type="hidden"  name="id" value="<?php echo $this->options[0]->id; ?>" />
	
	<input type="hidden" name="textfieldcheck" value="<?php echo $n; ?>" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>
