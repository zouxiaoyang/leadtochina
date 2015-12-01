<?php defined('_JEXEC') or die('Restricted access'); ?>

<?php JHTML::_('behavior.tooltip'); ?>

<?php
	JToolBarHelper::title(  JText::_( '机票油轮订单管理' ) );
	JToolBarHelper::deleteList();
?>
<form action="index.php?option=com_toursOder" method="post" name="adminForm">
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
				类型
			</th>
			<th width="8%" align="center">
				订单客户
			</th>
			<th width="8%" align="center">
				国家
			</th>
			<th width="8%" align="center">
				Email
			</th>
			<th width="15%" align="center">
				下单时间
			</th>
			<th width="8%" align="center">
				订单状态
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

	?>
		<tr class="<?php echo "row$k"; ?>">
			<td>
				<?php echo $this->pagination->getRowOffset( $i ); ?>
			</td>
			<td>
				<?php echo $checked; ?>
			</td>
			<td>
			<a href="index.php?option=com_flicruorder&view=flicruorder&task=showOder&orderid=<?php echo $row->id?>">
			<?php 
		//echo $row->ordertype;

	if($row->ordertype==0){
	echo "油轮";
	
	}else{
	echo "机票";
	}
	
	?></a>
			</td>
			<td align="center">
				<?php echo $row->order_user;?>
			</td>
			<td align="center">
				<?php echo $row->nationality;?>
			</td>
			<td align="center">
				<?php echo $row->email;?>
			</td>
			<td align="center">
				<?php echo date("Y-m-d H:i:s",$row->dateline);?>
			</td>
			<td align="center">
			<?php if($row->order_state==0){
				echo "未付款";
			}elseif($row->order_state==1){
				echo "已付款";
			}elseif($row->order_state==2){
				echo "已完成";
			}elseif($row->order_state==3){
				echo "已作废";
			}elseif($row->order_state==4){
				echo "问题单";
			}?>
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


	<input type="hidden" name="option" value="com_flicruorder" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="boxchecked" value="0" />
	<input type="hidden" name="filter_order" value="<?php echo $this->lists['order']; ?>" />
	<input type="hidden" name="filter_order_Dir" value="<?php echo $this->lists['order_Dir']; ?>" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>