<?php defined('_JEXEC') or die('Restricted access'); ?>

<?php JHTML::_('behavior.tooltip'); ?>

<?php
	JToolBarHelper::title(  JText::_( 'EMAIL管理' ) );
	JToolBarHelper::deleteList();
?>
<form action="index.php?option=com_email" method="post" name="adminForm">

<table>
	<tr>
		<td align="left" width="100%">
			<?php echo JText::_( 'Filter' ); ?>:
			<input type="text" name="search" id="search" value="<?php echo htmlspecialchars($this->lists['search']);?>" class="text_area" onchange="document.adminForm.submit();" />
			<button onclick="this.form.submit();"><?php echo JText::_( 'Go' ); ?></button>
			<button onclick="document.getElementById('search').value='';this.form.getElementById('filter_state').value='';this.form.submit();"><?php echo JText::_( 'Reset' ); ?></button>
		</td>
		<td nowrap="nowrap">
			<select name="filter_catid" id="filter_catid" class="inputbox" size="1" onchange="document.adminForm.submit();"><option value="0" <?php echo $this->isnull;?>>- 选择</option><option value="read" <?php echo $this->isread;?>>已读</option><option value="click" <?php echo $this->isclick;?>>已点击</option></select>
		</td>
	</tr>
</table>



	<table class="adminlist">
	<thead>
		<tr>
			<th width="5">
				<?php echo JText::_( 'NUM' ); ?>
			</th>
			<th width="20">
				<input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $this->items ); ?>);" />
			</th>
			<th>
				email
			</th>
			<th width="8%" align="center">
				点击时间
			</th>
			<th width="8%" align="center">
				查看时间
			</th>

			<th width="1%" nowrap="nowrap">
			ID
			</th>
		</tr>
	</thead>
	
	<tbody>
	<?php
	$k = 0;
	for ($i=0, $n=count( $this->items ); $i < $n; $i++)
	{
		$row = &$this->items[$i];
		$checked 	= JHTML::_('grid.checkedout',   $row, $i );
		date_default_timezone_set('Asia/Shanghai');
		$readline=date("Y-m-d H:i",$row->readdateline);
		$clickline=date("Y-m-d H:i",$row->clickdateline);


	?>
		<tr class="<?php echo "row$k"; ?>">
			<td>
				<?php echo $this->pagination->getRowOffset( $i ); ?>
			</td>
			<td>
				<?php echo $checked; ?>
			</td>
			<td>
			 <?php echo $row->email;?></a>
			</td>
			<td align="center">
				<?php echo $clickline;?>
			</td>
			
			<td align="center">
			<?php echo $readline;?>
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
	<tfoot>
		<tr>
			<td colspan="6">
				<?php echo $this->pagination->getListFooter(); ?>
			</td>
		</tr>
	</tfoot>
	</table>


	<input type="hidden" name="option" value="com_email" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="boxchecked" value="0" />
	<input type="hidden" name="filter_order" value="<?php echo $this->lists['order']; ?>" />
	<input type="hidden" name="filter_order_Dir" value="<?php echo $this->lists['order_Dir']; ?>" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>