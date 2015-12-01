<?php defined('_JEXEC') or die('Restricted access'); ?>

<?php JHTML::_('behavior.tooltip'); ?>

<?php
	JToolBarHelper::title(  JText::_( '套餐价格管理' ) );
	//JToolBarHelper::publishList();
	//JToolBarHelper::unpublishList();
	JToolBarHelper::deleteList();
	JToolBarHelper::editListX();
JToolBarHelper::cancel( 'cancel', 'Close' );
	JToolBarHelper::addNewX();
	
?>

<form action="index.php?option=com_yangtze" method="post" name="adminForm">

<div id="tablecell">
	<table class="adminlist">
	<?php echo $this->table_head;?>
	<tbody>
	<?php
	$k = 0;
	//$db					=& JFactory::getDBO();
	for ($i=0, $n=count( $this->items ); $i < $n; $i++)
	{
		$row = &$this->items[$i];

		
		if($this->package_class=="small"){
		
			
	$checked 	= JHTML::_('grid.checkedout',   $row, $i );	
		
	?>
		<tr>
			<td>
				<?php echo $checked; ?>
			</td>
			<td>
				<?php echo $row->group_code; ?>
			</td>

			<td>
				<?php echo $row->arrival_date; ?>
			</td>
			<td>

				<?php echo $row->departure_date; ?>


			</td>

			<td align="center">
				<?php echo $row->double_occ; ?>
			</td>

			
			<td align="center">
				<?php echo $row->single_occ; ?>
			</td>
			<td align="center">
				<?php echo $row->years; ?>
			</td>

		</tr>
		<?php
			
		}else{
			$checked 	= JHTML::_('grid.checkedout',   $row, $i );	
			if($row->off_season==1){
				$season="淡季";
			}elseif($row->off_season==0){
				$season="旺季";
			}

			//$year=substr($row->ymd,0,4);
			?>

		<tr>
			<td>
				<?php echo $checked; ?>
			</td>

			<td>
				<?php echo $season; ?>
			</td>
			<td>

				<?php echo $row->two; ?>


			</td>

			<td align="center">
				<?php echo $row->three_five; ?>
			</td>

			
			<td align="center">
				<?php echo $row->six_nice; ?>
			</td>


		</tr>		

		
		<?php
		}}
		?>
	</tbody>
	</table>
</div>

	<input type="hidden" name="option" value="com_yangtze" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="boxchecked" value="0" />
	<input type="hidden" name="c" value="<?php echo $this->c;?>" />
	<input type="hidden" name="packageid" value="<?php echo $this->cid;?>" />
	<input type="hidden" name="package_class" value="<?php echo $this->package_class;?>" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>