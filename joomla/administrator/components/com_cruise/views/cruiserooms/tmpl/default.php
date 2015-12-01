<?php defined('_JEXEC') or die('Restricted access'); ?>

<?php JHTML::_('behavior.tooltip'); ?>

<?php
	JToolBarHelper::title(  JText::_( '游轮房间管理' ) );
	JToolBarHelper::deleteList();	
	JToolBarHelper::cancel( 'cancel', 'Close' );
	JToolBarHelper::addNew('add', '添加');
	
?>

<form action="index.php?option=com_cruise" method="post" name="adminForm">

<div id="tablecell">
	<table class="adminlist">
	<thead>
		<tr>
        <th width="8%" align="center">
				<input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $this->items ); ?>);" />
			</th>
			<th width="30%" align="center">
				游轮名称
			</th>
			
			<th width="30%" align="center" >
				房间名称
			</th>
			<th width="8%" align="center">
				房间数
			</th>
			<th width="8%" align="center">
				是否提供早餐
			</th>
			<th width="1%" nowrap="nowrap">
				ID
			</th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<td colspan="8">
				<?php echo $this->pagination->getListFooter(); ?>
			</td>
		</tr>
	</tfoot>
	<tbody>
	<?php
	$k = 0;
	
	//上行的行程
	for ($i=0, $n=count( $this->items ); $i < $n; $i++)
	{
		
		$row = &$this->items[$i];
		$ds=$i+1;
		$link1     = JRoute::_( 'index.php?option=com_cruise&view=cruiseroom&c=cruiseroom&cruiseid='.$this->cid.'&task=edit&cid[]='. $row->id );
		$checked 	= JHTML::_('grid.checkedout',   $row, $i );
		$des=$row->description;
		if(strlen($des)>40){
			$des=htmlspecialchars(mb_strimwidth($des,0,39,'..',"utf-8"));
		}else{
			
			$des=htmlspecialchars($des);
		}
		
		
	?>
		<tr class="<?php echo "row$k"; ?>">
			
			<td align="center">
				<?php echo $checked; ?>
			</td>
            <td align="center">
            <a href="<?php echo $link1  ?>">
					<?php echo htmlspecialchars($row->cruise_name); ?></a>
			
			</td>
			<td align="center">				
				<?php echo $row->name; ?>
			</td >

			<td align="center">
				$<?php echo $row->price; ?>
			</td>		
            <td align="center">
			<?php
			if($row->breakfast==0){
				echo "否";
			}else{
			
				echo "是";
			}
		
		
			?>
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
	<input type="hidden" name="c" value="<?php echo $this->c;?>" />
	<input type="hidden" name="cruiseid" value="<?php echo $this->cid;?>" />
	<input type="hidden" name="filter_order" value="<?php echo $this->lists['order']; ?>" />
	<input type="hidden" name="filter_order_Dir" value="<?php echo $this->lists['order_Dir']; ?>" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>