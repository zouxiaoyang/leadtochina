<?php defined('_JEXEC') or die('Restricted access'); ?>

<?php JHTML::_('behavior.tooltip'); ?>

<?php
	JToolBarHelper::title(  JText::_( '城市管理' ) );
	JToolBarHelper::Preview('index.php?option=com_city&controller=city&cid[]='.$this->pid);
	JToolBarHelper::save();
	JToolBarHelper::addNewX();
	JToolBarHelper::deleteList();
	JToolBarHelper::cancel( 'cancel', 'Close' );
	JToolBarHelper::apply();
?>

<form action="index.php?option=com_city" method="post" name="adminForm">
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
				城市
			</th>
			<th  align="center">
				图片上传
			</th>

			<th  align="center">
				操作
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

		//$link 		= JRoute::_( 'index.php?option=com_province&view=province&task=edit&cid[]='. $row->id );
		$link1     = JRoute::_( 'index.php?option=com_city&view=city&task=edit&cid[]='.$this->pid.'&cityid[]='. $row->id );
		$link2     = JRoute::_( 'index.php?option=com_city&view=district&task=view&cid[]='.$this->pid.'&cityid[]='. $row->id );
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
			<?php if (  JTable::isCheckedOut($this->user->get ('id'), $row->checked_out )  ) {
				echo $row->title;
			} else {
				?>
				<span class="editlinktip hasTip" title="<?php echo JText::_( 'Edit Pronvince' );?>::<?php echo htmlspecialchars($row->title); ?>">
				<a href="<?php echo $link1;?>">
					<?php echo htmlspecialchars($row->name); ?></a></span>
				<?php
			}
			?>
			</td>
			<td align="center">
				<a href="index.php?option=com_city&c=upload&view=uploadpic&task=upload&pid=<?php echo $this->pid;?>&cid[]=<?php echo $row->id;?>">上传地图</a>
			</td>

			<td align="center">
							
				<a href="<?php echo $link2  ?>">
					增加区</a></span>
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

	<input type="hidden" name="option" value="com_city" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="boxchecked" value="0" />
			<input type="hidden" name="cid[]" value="<?php echo $this->pid;?>" />
	<input type="hidden" name="filter_order" value="<?php echo $this->lists['order']; ?>" />
	<input type="hidden" name="filter_order_Dir" value="<?php echo $this->lists['order_Dir']; ?>" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>