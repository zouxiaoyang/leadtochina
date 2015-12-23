<?php defined('_JEXEC') or die('Restricted access'); ?>

<?php JHTML::_('behavior.tooltip'); ?>

<?php
	JToolBarHelper::title(  JText::_( '城市管理' ) );



?>


<form action="index.php?option=com_province" method="post" name="adminForm" enctype="multipart/form-data">
<div id="tablecell">
	<table class="adminlist">
	<thead>
		<tr>
			<th width="100">
				省份
			</th>
			<th align="left">
				<input type="text" value="" size="60" id="pro" name="pro" class="inputbox">
			</th>

		</tr><tr>
			<th >
				城市
			</th>
			<th align="left">
				<input type="text" value="" size="60" id="city" name="city" class="inputbox">
			</th>

		</tr>
			<th >
				描述
			</th>
			<th align="left">
				<textarea name="des" id="des" rows="5" cols="55"></textarea>
			</th>

		</tr><tr>
			<th>
				交通
			</th>
			<th align="left">
				<textarea name="traffic" id="traffic" rows="5" cols="55"></textarea>
			</th>

		</tr><tr>
			<th>
				TIPs
			</th>
			<th align="left">
				<textarea name="tips" id="tips" rows="5" cols="55"></textarea>
			</th>

		</tr>
		<tr>
			<th>
				天气
			</th>
			<th align="left">
				<textarea name="weather" id="weather" rows="5" cols="55"></textarea>
			</th>

		</tr>
		<tr>
			<th>
				购物
			</th>
			<th align="left">
			<textarea name="shopping" id="shopping" rows="5" cols="55"></textarea>
				
			</th>

		</tr>
		<tr>
			<th>
				城市图片
			</th>
			<th align="left">
			<input name="files" id="files" type="file" size=50>
				
			</th>

		</tr>														
		<tr>
		<th></th>
				<th align="left">
				<input type="submit" name="sub" id="sub" value="提交">
			</th>	
		</tr>
	</thead>


	</table>
</div>	<input type="hidden" name="option" value="com_poll" />
	<input type="hidden" name="task" value="add" />

	
</form>

