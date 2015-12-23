<?php defined('_JEXEC') or die('Restricted access'); ?>
<?php JHTML::_('behavior.tooltip'); ?>
<?php
  // Set toolbar items for the page
  $edit   = JRequest::getVar('edit',true);
  $text = !$edit ? JText::_( 'New' ) : JText::_( 'Edit' );
  JToolBarHelper::title(   JText::_( '添加子标签' ).': <small><small>[ ' . $text.' ]</small></small>' );
  JToolBarHelper::save();
  JToolBarHelper::cancel();
  
?>
<script src="/media/system/js/jquery-1.3.2.min.js"></script>
<script language="javascript" type="text/javascript">
    var $j=jQuery.noConflict(); 
  function submitbutton(pressbutton) {
      var form = document.adminForm;
      if (pressbutton == 'cancel') {
        submitform( pressbutton );
        return;
      }
      submitform( pressbutton );
  }
</script>
<style type="text/css">
  table.paramlist td.paramlist_key {
    width: 92px;
    text-align: left;
    height: 30px;
  }
</style>

<form action="index.php" method="post" enctype="multipart/form-data" name="adminForm" id="adminForm" >
<div>
  <fieldset class="adminform">
    <table class="admintable" width="80%">
          <tr>
          <td align="right" class="key">
            <label for="alias">
              <?php echo JText::_( '名称' ); ?>: 
            </label>
          </td>
          <td>
            <input type="text" name="name" value="<?php echo $this->item->name;?>" size="40" />
          </td>
        </tr>
  </table>
  </fieldset>
</div>

<div class="clr"></div>
  <input type="hidden" name="option" value="com_tags" />
  <input type="hidden" name="cid[]" value="<?php echo $this->item->id; ?>" />
  <input type="hidden" name="parent_id" value="<?php echo $this->parent_id;?>" />
  <input type="hidden" name="task" value="" />
  <?php echo JHTML::_( 'form.token' ); ?>
</form>