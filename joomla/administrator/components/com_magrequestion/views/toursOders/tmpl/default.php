<?php defined('_JEXEC') or die('Restricted access'); ?>

<?php JHTML::_('behavior.tooltip'); ?>

<?php
	JToolBarHelper::title(  JText::_( '订单管理' ) );
	//JToolBarHelper::publishList();
	//JToolBarHelper::unpublishList();
	JToolBarHelper::deleteList();
	//JToolBarHelper::editListX();
	//JToolBarHelper::addNewX();
//JToolBarHelper::help( 'screen.polls' );
?>

<form action="index.php?option=com_toursOder" method="post" name="adminForm">
<!--  table>
	<tr>
		<td align="left" width="100%">
			<?php echo JText::_( 'Filter' ); ?>:
			<input type="text" name="search" id="search" value="<?php echo htmlspecialchars($this->lists['search']);?>" class="text_area" onchange="document.adminForm.submit();" />
			<button onclick="this.form.submit();"><?php echo JText::_( 'Go' ); ?></button>
			<button onclick="document.getElementById('search').value='';this.form.getElementById('filter_state').value='';this.form.submit();"><?php echo JText::_( 'Reset' ); ?></button>
		</td>
		<td nowrap="nowrap">
			<?php echo $this->lists['state']; ?>
		</td>
	</tr>
</table>-->
<div id="tablecell">
	<table class="adminlist">
	<thead>
		<tr>
			<th width="5">
				<?php echo JText::_( 'NUM' ); ?>
			</th>
			<th width="20">
				<input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $this->items ); ?>);" />
			</th>
			<th  >
				订单号
			</th>
			<th width="30" align="center">
				订单客户
			</th>
			<th width="30" align="center">
				订单人数
			</th>
			<th width="30" align="center">
				套餐名称
			</th>
			<th width="30" align="center">
				订单时间
			</th>
			<th width="1%" nowrap="nowrap">
		
			</th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<td colspan="6">
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

		$order_time=date("Y-m-d H:i:s",$row->dateline);
		$checked 	= JHTML::_('grid.checkedout',   $row, $i );

	?>
		<tr class="<?php echo "row$k"; ?>">
			<td>
				<?php echo $this->pagination->getRowOffset( $i ); ?>
			</td>
			<td>
				<?php echo $checked; ?>
			</td>
			<td>
			<a href="index.php?option=com_toursOder&view=toursOder&task=showOder&orderid=<?php echo $row->id?>">
			<?php echo $row->orderNO;?></a>
			</td>
			<td align="center">
				<?php echo $row->order_user;?>
			</td>
			<td align="center">
				<?php echo $row->adults;?>
			</td>
			<td align="center">
				<?php echo $row->package_name;?>
			</td>
			<td align="center">
				<?php echo $order_time;?>
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

	<input type="hidden" name="option" value="com_toursOder" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="boxchecked" value="0" />
	<input type="hidden" name="filter_order" value="<?php echo $this->lists['order']; ?>" />
	<input type="hidden" name="filter_order_Dir" value="<?php echo $this->lists['order_Dir']; ?>" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>