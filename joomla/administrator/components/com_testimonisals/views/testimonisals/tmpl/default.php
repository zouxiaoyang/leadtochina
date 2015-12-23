<?php defined('_JEXEC') or die('Restricted access'); ?>

<?php JHTML::_('behavior.tooltip');
$db = & JFactory::getDBO();
include_once (JPATH_ROOT.'/config/search_config.php');
?>

<?php
JToolBarHelper::title(JText::_('Testimonisals管理'));
JToolBarHelper::deleteList();
JToolBarHelper::editListX();
JToolBarHelper::addNewX();
JToolBarHelper::cancel('returnCtours');
?>
<form action="index.php?option=com_testimonisals" method="post"	name="adminForm">
<div id="tablecell">
<table class="adminlist">
	<thead>
		<tr>
			<th width="3%"><?php echo JText::_( 'NUM' ); ?></th>
			<th width="2%"><input type="checkbox" name="toggle" value=""
				onclick="checkAll(<?php echo count( $this->items ); ?>);" /></th>
			<th width="20%" align="center">图片名称</th>
			<th width="10%" align="center">所属城市</th>
			<th width="10%" align="center">推荐</th>
			<th width="10%" align="center">创建时间</th>
			<th width="2%" nowrap="nowrap">ID/PID</th>
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
	for ($i=0, $n=count( $this->items ); $i < $n; $i++)
	{
		$row = &$this->items[$i];

		$link1     = JRoute::_( 'index.php?option=com_testimonisals&view=testimonisal&task=edit&cid[]='. $row->id );
		$checked 	= JHTML::_('grid.checkedout',   $row, $i );
		if($row->recommnet==1){
			$tj_str="取消推荐";
			$tj="no";
		}elseif($row->recomment==0){
			$tj_str="推荐";
			$tj="yes";

		}
		?>
		<tr class="<?php echo "row$k"; ?>">
			<td align="center"><?php echo $this->pagination->getRowOffset( $i ); ?></td>
			<td align="center"><?php echo $checked; ?></td>
			<td align="center"><?php echo $row->title;?></td>
			<td align="center"><?php echo $city_list[$row->city_id];?></td>
			<td align="center"><?php if($row->recomment=='1'):?>推荐<?php else:?>非推荐<?php endif;?></td>
			<td align="center"><?php echo date("Y-m-d H:i:s",$row->created);?></td>
			<td align="center"><?php echo $row->id; ?>/<?php echo $this->packageid;?></td>
		</tr>
		<?php
		$k = 1 - $k;
	}
	?>
	</tbody>
</table>
</div>


<input type="hidden" name="option" value="com_testimonisals" /> 
<input type="hidden" name="task" value="" /> 
<input type="hidden"	name="boxchecked" value="0" /> 
<input type="hidden" name="tid"	value="<?php echo $this->packageid; ?>" /> 
<input type="hidden" name="catid"	value="<?php echo JRequest::getVar('catid', 0); ?>" />
<input type="hidden" name="chinatours"	value="<?php echo JRequest::getVar('chinatours', 0); ?>" />
<input type="hidden" name="filter_order" value="<?php echo $this->lists['order']; ?>" /> 
<input type="hidden" name="filter_order_Dir" value="<?php echo $this->lists['order_Dir']; ?>" /> 
<?php echo JHTML::_('form.token'); ?>
</form>
