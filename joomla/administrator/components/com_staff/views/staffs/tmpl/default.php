<?php defined('_JEXEC') or die('Restricted access'); ?>

<?php JHTML::_('behavior.tooltip');
$db = & JFactory::getDBO();
include_once (JPATH_ROOT.'/config/search_config.php');
?>

<?php
JToolBarHelper::title(JText::_('staff管理'));
JToolBarHelper::editListX();
JToolBarHelper::addNewX();
JToolBarHelper::deleteList();
?>
<form action="index.php?option=com_staff" method="post"	name="adminForm">
<div id="tablecell">
<table class="adminlist">
	<thead>
		<tr>
			<th width="3%"><?php echo JText::_( 'NUM' ); ?></th>
			<th width="2%"><input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $this->items ); ?>);" /></th>
			<th width="20%" align="center">姓名</th>
			<th width="10%" align="center">LIKE</th>
			<th width="10%" align="center">DISLIKE</th>
			<th width="10%" align="center">添加相片</th>
			<th width="10%" align="center">DATETIME</th>
			<th width="2%" nowrap="nowrap">ID</th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<td colspan="8"><?php echo $this->pagination->getListFooter(); ?></td>
		</tr>
	</tfoot>
	<tbody>
	<?php
	$k = 0;
	//$db					=& JFactory::getDBO();
	for ($i=0, $n=count( $this->items ); $i < $n; $i++){
		$row = &$this->items[$i];
		$checked = JHTML::_('grid.checkedout',   $row, $i );
		?>
		<tr class="<?php echo "row$k"; ?>">
			<td align="center"><?php echo $this->pagination->getRowOffset( $i ); ?></td>
			<td align="center"><?php echo $checked; ?></td>
			<td align="center"><?php echo $row->name;?></td>
			<td align="center"><?php echo $row->like;?></td>
			<td align="center"><?php echo $row->dislike;?></td>
			<td align="center"><a href="index.php?option=com_staff&c=upload&view=uploadpic&task=upload&cid[]=<?php echo $row->id;?>">添加相片</a></td>
			<td align="center"><?php echo date("Y-m-d H:i:s",$row->created);?></td>
			<td align="center"><?php echo $row->id; ?></td>
		</tr>
		<?php
		$k = 1 - $k;
	}
	?>
	</tbody>
</table>
</div>
<input type="hidden" name="option" value="com_staff" />
<input type="hidden" name="task" value="" /> 
<input type="hidden"	name="boxchecked" value="0" /> 
<?php echo JHTML::_('form.token'); ?>
</form>
