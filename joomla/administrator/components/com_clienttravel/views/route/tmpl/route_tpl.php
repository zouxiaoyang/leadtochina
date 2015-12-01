<?php defined('_JEXEC') or die('Restricted access'); ?>

<?php JHTML::_('behavior.tooltip'); ?>

<?php
	JToolBarHelper::title(  JText::_( '行程管理' ) );
	JToolBarHelper::publishList();
	JToolBarHelper::unpublishList();
	JToolBarHelper::deleteList();
	//JToolBarHelper::editListX();

		// for existing items the button is renamed `close`
	JToolBarHelper::cancel( 'cancel', 'Close' );

	JToolBarHelper::addNewX();
	
?>

<form action="index.php?option=com_clienttravel" method="post" name="adminForm">
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
			<th width="50">
				日期
			</th>
			<th width="20">
				<input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $this->items ); ?>);" />
			</th>
			<th  >
				行程名称
			</th>
			<th width="30" align="center">
				行程路线
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
	/*	
		if($row->provinceid>0){
			$db->setQuery("SELECT name FROM jos_cos_province WHERE id=".$row->provinceid);
			$p_res=$db->query();
			$p_a=@mysql_fetch_array($p_res);
			$p_n=$p_a['name'];
			mysql_free_result($p_res);
		}

		if($row->categoreid >0 ){
			$db->setQuery("SELECT title  FROM jos_categories WHERE id=".$row->categoreid);
			$c_res=$db->query();
			$c_a=@mysql_fetch_array($c_res);
			$c_n=$c_a['title'];
			mysql_free_result($c_res);
		}
		
		
		if($row->cityid>0){
			$db->setQuery("SELECT name FROM jos_cos_city WHERE id=".$row->cityid);
			$ci_res=$db->query();
			$ci_a=@mysql_fetch_array($ci_res);
			$ci_n=$ci_a['name'];
			mysql_free_result($ci_res);		
		}
		
		*/
		$ds=$i+1;
		$link1     = JRoute::_( 'index.php?option=com_clienttravel&c=route&d='.$ds.'&packageid='.$this->cid.'&task=edit&cid[]='. $row->id );
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
				第<?php echo $this->pagination->getRowOffset( $i ); ?>天
			</td>
			<td>
				<?php echo $checked; ?>
			</td>
			<td>

				
				<a href="<?php echo $link1  ?>">
					<?php if(empty($row->packagename)==false)
					{
					echo htmlspecialchars($row->packagename);
				}else{
				echo "第 ".$this->pagination->getRowOffset( $i )."天";
				} 
				?></a>

			</td>

			<td align="center">
				<?php echo $row->today_route; ?>
			</td>
			<!--td align="center">
				<a href="<?php echo 'index.php?option=com_cntours&view=cntours&task=editroute&cid[]='. $row->id?>">编辑行程</a>
			</td>
			<td align="center">
				<a href="<?php echo 'index.php?option=com_cntours&view=cntours&task=editprice&cid[]='. $row->id?>">编辑价格</a>				
			</td-->						
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

	<input type="hidden" name="option" value="com_clienttravel" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="boxchecked" value="0" />
	<input type="hidden" name="c" value="<?php echo $this->c;?>" />
		<input type="hidden" name="home" value="home" />
	<input type="hidden" name="c_packageid" value="<?php echo $this->cid;?>" />
	<!--input type="hidden" name="cid[]" id="cid[]" value="" /-->
	<input type="hidden" name="filter_order" value="<?php echo $this->lists['order']; ?>" />
	<input type="hidden" name="filter_order_Dir" value="<?php echo $this->lists['order_Dir']; ?>" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>