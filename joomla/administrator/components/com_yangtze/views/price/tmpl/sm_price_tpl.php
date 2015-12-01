<?php defined('_JEXEC') or die('Restricted access'); ?>

<?php JHTML::_('behavior.tooltip'); ?>

<?php
	JToolBarHelper::title(  JText::_( '套餐价格管理' ) );
	JToolBarHelper::publishList();
	JToolBarHelper::unpublishList();
	JToolBarHelper::deleteList();
	//JToolBarHelper::editListX();

	JToolBarHelper::addNewX();
	
?>

<form action="index.php?option=com_cntours" method="post" name="adminForm">

<div id="tablecell">
	<table class="adminlist">
	<thead>
		<tr>
			<th width="50">
				Year
			</th>
			<th width="20">
			Group Code
			</th>
			<th width="20">
				Arrival Date
			</th>
			<th  >
				Departure Date
			</th>
			<th width="30" align="center">
				Double Occupancy
			</th>
	
			<th width="20">
			Single Occupancy
			</th>


			<th width="10" nowrap="nowrap">
			
			</th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<td colspan="7">
				<?php echo $this->pagination->getListFooter(); ?>
			</td>
		</tr>
	</tfoot>
	<tbody>
	<?php
	$k = 0;
	//$db					=& JFactory::getDBO();
	for ($i=0, $n=count( $this->items ); $i < $n; $i++)
	{
		$row = &$this->items[$i];

		$ds=$i+1;
		$link1     = JRoute::_( 'index.php?option=com_cntours&view=cntours&c=route&d='.$ds.'&packageid='.$this->cid.'&task=edit&cid[]='. $row->id );
		$checked 	= JHTML::_('grid.checkedout',   $row, $i );
		$des=$row->description;
		if(strlen($des)>40){
			$des=htmlspecialchars(mb_strimwidth($des,0,39,'..',"utf-8"));
		}else{
			
			$des=htmlspecialchars($des);
		}
		//$published 	= JHTML::_('grid.published', $row, $i );
	?>
		<tr class="<?php echo "row$k"; ?>">
			<td>
				<?php echo $this->pagination->getRowOffset( $i ); ?>
			</td>

			<td>

				
				<a href="<?php echo $link1  ?>">
					<?php echo htmlspecialchars($row->packagename); ?></a>

			</td>

			<td align="center">
				<?php echo $row->today_route; ?>
			</td>

			
			<td align="center">
				<?php echo $row->id; ?>
			</td>
			<td align="center">
				<?php echo $row->id; ?>
			</td>
			<td align="center">
				<?php echo $row->id; ?>
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

	<input type="hidden" name="option" value="com_cntours" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="boxchecked" value="0" />
	<input type="hidden" name="c" value="<?php echo $this->c;?>" />
	<input type="hidden" name="packageid" value="<?php echo $this->cid;?>" />
	<input type="hidden" name="package_class" value="<?php echo $this->package_class;?>" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>