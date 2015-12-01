<?php defined('_JEXEC') or die('Restricted access'); ?>

<?php JHTML::_('behavior.tooltip'); ?>

<?php
  // Set toolbar items for the page
  JToolBarHelper::title(   JText::_( '行程标签' ), 'generic.png' );
  JToolBarHelper::addNew();
  JToolBarHelper::deleteList();
  JToolBarHelper::editListX();
  JToolBarHelper::cancel();
  $ordering = ($this->lists['order'] == 'a.ordering');
?>
<form action="index.php" method="post" name="adminForm">
<table>
<tr>
  <td align="left" width="100%">
    <?php echo JText::_( 'Filter' ); ?>:
    <input type="text" name="search" id="search" value="<?php echo htmlspecialchars($this->lists['search']);?>" class="text_area" onchange="document.adminForm.submit();" />
    <button onclick="this.form.submit();"><?php echo JText::_( 'Go' ); ?></button>
    <button onclick="document.getElementById('search').value='';this.form.getElementById('filter_catid').value='0';this.form.getElementById('filter_state').value='';this.form.submit();"><?php echo JText::_( 'Reset' ); ?></button>
  </td>
  <td nowrap="nowrap">

  </td>
</tr>
</table>
<div id="editcell">
  <table class="adminlist">
  <thead>
    <tr>
      <th width="5">
        ID
      </th>
      <th width="10">
        <input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $this->items ); ?>);" />
      </th>
      <th class="title">主题名</th>
      <th>创建时间</th>
      <th>子标签</th>
    </tr>
  </thead>
  <tfoot>
    <tr>
      <td colspan="9">
        <?php //echo $this->pagination->getListFooter(); ?>
      </td>
    </tr>
  </tfoot>
  <tbody>
  <?php
  $k = 0;
  for ($i=0, $n=count( $this->items ); $i < $n; $i++)
  {
    $row = &$this->items[$i];

    $link   = JRoute::_( 'index.php?option=com_tags&view=tag&task=edit&cid[]='. $row->id );

    $checked  = JHTML::_('grid.checkedout',   $row, $i );
    $published  = JHTML::_('grid.published', $row, $i );
    ?>
    <tr class="<?php echo "row$k"; ?>">
      <td>
        <?php echo $row->id; ?>
      </td>
      <td>
        <?php echo $checked; ?>
      </td>
      <td align="center">
        <a href="<?php echo $link;?>"><?php echo $row->name;?></a>
      </td>
      <td class="order">
        <?php echo $row->created;?>
      </td>
      <td align="center">
        <a href="<?php echo JRoute::_( 'index.php?option=com_tags&task=details&filter_id='. $row->id );?>">添加子标签</a>
      </td>
    </tr>
    <?php
    $k = 1 - $k;
  }
  ?>
  </tbody>
  </table>
</div>

  <input type="hidden" name="option" value="com_tags" />
  <input type="hidden" name="task" value="" />
  <input type="hidden" name="boxchecked" value="0" />
  <input type="hidden" name="filter_order" value="<?php echo $this->lists['order']; ?>" />
  <input type="hidden" name="filter_order_Dir" value="<?php echo $this->lists['order_Dir']; ?>" />
  <?php echo JHTML::_( 'form.token' ); ?>
</form>
