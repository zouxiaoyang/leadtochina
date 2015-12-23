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
include_once JPATH_ROOT.'/config/order_config.php';
?>

<form action="index.php?option=com_totalorder" method="post" name="adminForm">
<table>
	<tr>
		<td align="left" width="100%">
			接单人:
			<input type="text" name="executor" id="executor" value="<?php echo htmlspecialchars($this->var_list['executor']);?>" class="text_area" />
			开始时间
			<input type="text" name="starttime" id="starttime" value="<?php echo htmlspecialchars($this->var_list['starttime']);?>" class="text_area" />(格式：M/D/Y)
			结束时间
			<input type="text" name="endtime" id="endtime" value="<?php echo htmlspecialchars($this->var_list['endtime']);?>" class="text_area" />(格式：M/D/Y)
			来源网站
			<input type="text" name="sourcesite" id="sourcesite" value="<?php echo htmlspecialchars($this->var_list['sourcesite']);?>" class="text_area" />
			<select name="orderstate" id="orderstate">
			<option value="-1" selected>订单状态</option>
			<?php foreach($order_state as $k=>$v):?>
				<option value="<?php echo $k;?>"><?php echo $v;?></option>
			<?php endforeach;?>
			</select>
			<button onclick="this.form.submit();"><?php echo JText::_( 'Go' ); ?></button>
			<button onclick="document.getElementById('executor').value='';document.getElementById('starttime').value='';document.getElementById('endtime').value='';document.getElementById('sourcesite').value='';this.form.submit();"><?php echo JText::_( 'Reset' ); ?></button>
		</td>
		<td nowrap="nowrap">
			<?php echo $this->lists['state']; ?>
		</td>
	</tr>
</table>
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
			<th width="10%">订单号</th>
			<th width="50" align="center">接单人</th>
			<th width="30" align="center">订单用户</th>
			<th width="30" align="center">订单人数</th>
			<th width="30" align="center">订单来源</th>
			<th width="30" align="center">下单时间</th>
			<th width="30" align="center">订单状态</th>
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
	date_default_timezone_set('Asia/Shanghai');
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
			<a href="index.php?option=com_totalorder&view=order&task=showOder&orderid=<?php echo $row->id?>">
			<?php echo $row->orderNO;?></a>
			</td>
			<td align="center">
				<?php 
              	if(empty($row->executor)){
              		echo "暂未安排！";
              	}else{
            		echo $row->executor;
            	}
  	            ?>
			</td>
			<td align="center"><?php echo $row->full_name;?></td>
			<td align="center"><?php echo $row->adults;?></td>
			<td align="center"><?php echo $row->submit_source;?></td>
			<td align="center"><?php echo $order_time;?></td>
			<td align="center"><?php echo $order_state[$row->order_state];?></td>
		</tr>
		<?php
			$k = 1 - $k;
		}
		?>
	</tbody>
	</table>
</div>
	<input type="hidden" name="option" value="com_totalorder" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="boxchecked" value="0" />
	<input type="hidden" name="filter_order" value="<?php echo $this->lists['order']; ?>" />
	<input type="hidden" name="filter_order_Dir" value="<?php echo $this->lists['order_Dir']; ?>" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>

<script type="text/javascript">		
		//window.addEvent('domready', function() {
			//myCal1 = new Calendar({ starttime: 'd/m/Y' }, { direction: 1, tweak: {x: 9, y: 0} });
			//myCal2 = new Calendar({ endtime: 'd/m/Y' }, { direction: 1, tweak: {x: 6, y: 0} });
			//myCal3 = new Calendar({ date3: 'd/m/Y' }, { classes: ['i-heart-ny'], direction: 1, tweak: {x: 3, y: 0} });
		//});
 
	</script>
