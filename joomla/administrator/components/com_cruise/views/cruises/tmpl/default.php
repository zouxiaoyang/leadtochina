<?php defined('_JEXEC') or die('Restricted access'); ?>

<?php JHTML::_('behavior.tooltip'); ?>

<?php
	// Set toolbar items for the page
	JToolBarHelper::title(   JText::_( 'Cruise Manager' ), 'generic.png' );
	JToolBarHelper::publish();
    JToolBarHelper::unpublish();
	JToolBarHelper::addNew();
    JToolBarHelper::deleteList();
	JToolBarHelper::help( 'screen.feedback' );
?>
<form action="index.php" method="post" name="adminForm">
<table>
<tr>
	<td align="left" width="100%">
		<?php echo JText::_( 'Filter' ); ?>:
		<input type="text" name="search" id="search" value="<?php echo htmlspecialchars($this->lists['search']);?>" class="text_area" onchange="document.adminForm.submit();" />
		<button onclick="this.form.submit();"><?php echo JText::_( 'Go' ); ?></button>
		<button onclick="document.getElementById('search').value='';this.form.getElementById('filter_catid').value='0';this.form.getElementById('filter_state').value='';this.form.submit();"><?php echo JText::_( 'Reset' ); ?></button>
	</td>
	<td nowrap="nowrap">
		<?php
			echo $this->lists['state'];
		?>
	</td>
</tr>
</table>
<div id="editcell">
	<table class="adminlist">
	<thead>
		<tr>
			<th width="5">
				<?php echo JText::_( 'NUM' ); ?>
			</th>
			<th width="20">
				<input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $this->items ); ?>);" />
			</th>
			<th class="title">
				<?php echo '游轮名称'; ?>
			</th>
                        <th   class="title">
				<?php echo '游轮星级'; ?>
			</th>
                        <th   class="title">
				<?php echo '生产时间'; ?>
			</th>
			<th width="8%" nowrap="nowrap">
				<?php echo '发布状态'; ?>
			</th>
            <th width="8%" nowrap="nowrap">
				<?php echo '编辑行程'; ?>
			</th>
             <th width="8%" nowrap="nowrap">
				<?php echo '编辑航期'; ?>
			</th>
             <th width="8%" nowrap="nowrap">
				<?php echo '编辑房间'; ?>
			</th>
			<th width="8%" nowrap="nowrap">
				<?php echo '上传图片'; ?>
			</th>
			<th width="5%" nowrap="nowrap">
				<?php echo 'ID'; ?>
			</th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<td colspan="9">
				<?php echo $this->pagination->getListFooter(); ?>
			</td>
		</tr>
	</tfoot>
	<tbody>
	<?php
	$k = 0;
 	for ($i=0, $n=count( $this->items ); $i < $n; $i++)
	{
		$row = &$this->items[$i];

		$link 	= JRoute::_( 'index.php?option=com_cruise&task=edit&id[]='. $row->id );

		$checked 	= JHTML::_('grid.checkedout',   $row, $i );
		$published 	= JHTML::_('grid.published', $row, $i );
		?>
		<tr class="<?php echo "row$k"; ?>">
			<td>
				<?php echo $this->pagination->getRowOffset( $i ); ?>
			</td>
			<td>
				<?php echo $checked; ?>
			</td>
			<td>
				<?php
				if (  JTable::isCheckedOut($this->user->get ('id'), $row->checked_out ) ) {
					echo $this->escape($row->title);
				} else {
				?>
				<span class="editlinktip hasTip" title="<?php echo JText::_( 'Edit Weblinks' );?>::<?php echo $this->escape($row->title); ?>">
					<a href="<?php echo $link; ?>">
						<?php echo $row->cruise_name; ?></a></span>
				<?php
				}
				?>
			</td>
                        <td align="center"  width="14%">
				<?php echo $row->cruise_grade; ?>星级
			</td>
                        <td align="center"  width="14%">
				<?php echo $row->year_built ; ?>
			</td>
			<td align="center">
				<?php echo $published;?>
			</td>
            <td align="center">
				<a href="index.php?option=com_cruise&view=route&c=route&task=route&cid[]=<?php echo  $row->id;?>">编辑行程</a>	
			</td>
            <td align="center">
				<a href="index.php?option=com_cruise&view=cruiseact&c=cruiseact&task=cruiseact&cid[]=<?php echo  $row->id;?>">编辑航期</a>	
			</td>
             <td align="center">
				<a href="index.php?option=com_cruise&view=cruiserooms&c=cruiseroom&task=cruiseroom&cid[]=<?php echo  $row->id;?>">编辑房间</a>	
			</td>
			<td align="center">
				<a href="index.php?option=com_cruise&view=uploadpic&c=upload&task=upload&cid[]=<?php echo  $row->id;?>">上传图片</a>	
			</td>
			
			<td align="center">
				<?php echo $row->id; ?>
			</td>
		</tr>
		<?php
		$k = 1 - $k;
	}
	?>
	</tbody>
	</table>
</div>

	<input type="hidden" name="option" value="com_cruise" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="boxchecked" value="0" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>
