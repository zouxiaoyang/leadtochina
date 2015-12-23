<?php defined('_JEXEC') or die('Restricted access'); ?>

<?php JHTML::_('behavior.tooltip');
$db = & JFactory::getDBO();
?>

<?php
JToolBarHelper::title(JText::_('StaffComments管理'));
JToolBarHelper::deleteList();
?>
<form action="index.php?option=com_staffcomments" method="post"
	name="adminForm">
<div id="tablecell">
<table class="adminlist">
	<thead>
		<tr>
			<th width="3%"><?php echo JText::_( 'NUM' ); ?></th>
			<th width="2%"><input type="checkbox" name="toggle" value=""
				onclick="checkAll(<?php echo count( $this->items ); ?>);" /></th>
			<th width="5%" align="center">姓名</th>
			<th width="10%" align="center">Email</th>
			<th width="50%" align="center">Comment</th>
			<th width="10%" align="center">创建时间</th>
			<th width="10%" align="center">审核状态</th>
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
	for ($i=0, $n=count( $this->items ); $i < $n; $i++)
	{
		$row = &$this->items[$i];
		$checked 	= JHTML::_('grid.checkedout',   $row, $i );
		if($row->status==0){
			$status_str="<span style='color:red;'>未审核</span>";
		}else{
			$status_str="<span style='color:green;'>已审核</span>";
		}
		?>
		<tr class="<?php echo "row$k"; ?>">
			<td align="center"><?php echo $this->pagination->getRowOffset( $i ); ?></td>
			<td align="center"><?php echo $checked; ?></td>
			<td align="center"><?php echo $row->name;?></td>
			<td align="center"><?php echo $row->email;?></td>
			<td align="center"><?php echo $row->comments;?></td>
			<td align="center"><?php echo date("Y-m-d H:i:s",$row->created);?></td>
			<td align="center"><a style="cursor:pointer;" onClick="change_status('<?php echo $row->status;?>','<?php echo $row->id;?>',this)"><?php echo $status_str;?></a></td>
			<td align="center"><?php echo $row->id;?></td>
		</tr>
		<?php
		$k = 1 - $k;
	}
	?>
	</tbody>
</table>
</div>
<input type="hidden" name="option" value="com_staffcomments" /> 
<input type="hidden" name="task" value="" /> 
<input type="hidden" name="boxchecked" value="0" /> 
<input type="hidden" name="id" value="<?php echo $row->id;?>" /> 
<?php echo JHTML::_('form.token'); ?>
</form>
<script src="/js/jquery-1.4.js" type="text/javascript"></script>
<script>
var jq=jQuery.noConflict();
function change_status(st,id,obj){
	jq.post("index.php?option=com_staffcomments&task=change_status",{status:st,id:id},function(ret){
		if(ret==1){
			if(st==0){
				jq(obj).html("<span style='color:green;'>已审核</span>");
				jq(obj).attr("onClick","change_status('1',"+id+",this)");
			}else{
				jq(obj).html("<span style='color:red;'>未审核</span>");
				jq(obj).attr("onClick","change_status('0',"+id+",this)");
				}
		}
		});
}
</script>