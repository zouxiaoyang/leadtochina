<?php defined('_JEXEC') or die('Restricted access'); ?>

<?php JHTML::_('behavior.tooltip'); ?>

<?php
	JToolBarHelper::title(  JText::_( '酒店管理' ) );
	JToolBarHelper::publishList();
	JToolBarHelper::unpublishList();
	JToolBarHelper::deleteList();
	JToolBarHelper::editListX();
	JToolBarHelper::addNewX();
	JToolBarHelper::help( 'screen.polls' );
?>
<script language="javascript" type="text/javascript">
  
   var request = false;
   try {
     request = new XMLHttpRequest();
   } catch (trymicrosoft) {
     try {
       request = new ActiveXObject("Msxml2.XMLHTTP");
     } catch (othermicrosoft) {
       try {
         request = new ActiveXObject("Microsoft.XMLHTTP");
       } catch (failed) {
         request = false;
       }  
     }
   }
   if (!request)
     alert("Error initializing XMLHttpRequest!");
   function SetHot(url) {

     

     var url = url;
	 
     request.open("GET", url, true);
     request.onreadystatechange = updatePage;
     request.send(null);
   }

   function updatePage() {
     if (request.readyState == 4) {
       if (request.status == 200) {
         var response = request.responseText;
         //document.getElementById("order").value = response[0];
			alert(response);
			document.location.reload();
       } else
         alert("status is " + request.status);
     }
   }

</script>
<form action="index.php?option=com_hotel" method="post" name="adminForm">
<table>
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
			<th  >
				酒店名称
			</th>
			<th  align="center">
				描述
			</th>
			<th  align="center">
				图片上传
			</th>
			<th  align="center">
				推荐
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
		if($row->hot==1){
			$tj_str="取消推荐";
			$tj="no";
		}elseif($row->hot==0){
			$tj_str="推荐";
			$tj="yes";		
		
		}
		$link 		= JRoute::_( 'index.php?option=com_hotel&view=hotel&task=edit&cid[]='. $row->id );
		$link1     = JRoute::_( 'index.php?option=com_hotel&view=hotel&task=add&cid[]='. $row->id );
		$checked 	= JHTML::_('grid.checkedout',   $row, $i );
		$des=$row->description;
		JFilterOutput::objectHTMLSafe( $des, ENT_QUOTES );
		if(strlen($des)>40){
			$des=htmlspecialchars(mb_strimwidth($des,0,39,'..',"utf-8"));
		}else{
			
			$des=htmlspecialchars($des);
		}
		$published 	= JHTML::_('grid.published', $row, $i );
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
				<a href="<?php echo $link  ?>">
					<?php echo htmlspecialchars($row->name); ?></a></span>
				<?php
			}
			?>
			</td>
			<td align="center">
				<?php echo $des;?>
			</td>
			<td align="center">
			<?php 
				$db=& JFactory::getDBO();
				$sql="select count(id) from jos_cos_hotelpic where hotelid='{$row->id}'";
				$result_count=$db->getone($sql);				
			?>
				<a href="index.php?option=com_hotel&c=upload&view=uploadpic&task=upload&cid[]=<?php echo $row->id;?>">上传图片(<?php echo $result_count;?>)</a>
			</td>
			<td align="center">
				<a href="#" onclick="javascript:SetHot('../index.php?option=com_setsceHot&from=hotel&id=<?php echo $row->id;?>&tj=<?php echo $tj;?>')"><?php echo $tj_str;?></a>				
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

	<input type="hidden" name="option" value="com_hotel" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="boxchecked" value="0" />
	<input type="hidden" name="filter_order" value="<?php echo $this->lists['order']; ?>" />
	<input type="hidden" name="filter_order_Dir" value="<?php echo $this->lists['order_Dir']; ?>" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>