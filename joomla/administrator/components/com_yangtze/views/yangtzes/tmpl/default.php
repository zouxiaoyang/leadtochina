<?php defined('_JEXEC') or die('Restricted access'); ?>

<?php JHTML::_('behavior.tooltip');$db	=& JFactory::getDBO(); ?>

<?php
	JToolBarHelper::title(  JText::_( '套餐管理' ) );
	JToolBarHelper::publishList();
	JToolBarHelper::unpublishList();
	JToolBarHelper::deleteList();
	JToolBarHelper::editListX();
	JToolBarHelper::addNewX();
	
?>

<form action="index.php?option=com_yangtze" method="post" name="adminForm">
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
				套餐名称
			</th>
			<th width="30" align="center">
				套餐类型
			</th>
			<th width="30" align="center">
				编辑详细行程 
			</th>
			<th width="30" align="center">
				编辑套餐价格 
			</th>		
			<th width="1%" nowrap="nowrap">
		
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
	//$db					=& JFactory::getDBO();
	for ($i=0, $n=count( $this->items ); $i < $n; $i++)
	{
		$row = &$this->items[$i];

		$category_id=$row->categorieid_str;
		$strpos=strpos($category_id,',');



		if($strpos===false){
			
			$db->setQuery( "SELECT parent_id FROM jos_categories WHERE id={$category_id}");

			$c_row=$db->loadAssoc();
//假如是China Small Groups类型的话。换另一个模板显示
			if($c_row['parent_id']==68 OR $category_id==68){
			
				$is_small="editsmprice";
			}else{
			
				$is_small="editprice";
			}
			
		}		


		$link1     = JRoute::_( 'index.php?option=com_yangtze&view=yangtze&task=edit&cid[]='. $row->id );
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
				<?php echo $checked; ?>
			</td>
			<td>
			<?php if (  JTable::isCheckedOut($this->user->get ('id'), $row->checked_out )  ) {
				echo $row->title;
			} else {
				?>
				
				<a href="<?php echo $link1  ?>">
					<?php echo htmlspecialchars($row->name); ?></a>
				<?php
			}
			?>
			</td>

			<td align="center">
				<?php echo $row->categorie_name_str; ?>
			</td>
			<td align="center">
				<a href="<?php echo 'index.php?option=com_yangtze&view=yangtze&c=route&task=editroute&cid[]='. $row->id?>">编辑行程</a>
			</td>
			<td align="center">
				<a href="<?php echo "index.php?option=com_yangtze&c=price&view=price&task=editprice&cid[]=". $row->id?>">编辑价格</a>				
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

	<input type="hidden" name="option" value="com_yangtze" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="boxchecked" value="0" />
	<input type="hidden" name="filter_order" value="<?php echo $this->lists['order']; ?>" />
	<input type="hidden" name="filter_order_Dir" value="<?php echo $this->lists['order_Dir']; ?>" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>