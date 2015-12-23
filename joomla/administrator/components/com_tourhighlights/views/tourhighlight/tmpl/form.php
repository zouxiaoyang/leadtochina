<?php defined('_JEXEC') or die('Restricted access'); ?>

<?php
$cid = JRequest::getVar('cid', array(0), '', 'array');
$edit = JRequest::getVar('edit', true);
JArrayHelper::toInteger($cid, array(0));
$editor = &Jfactory::getEditor();
//var_dump($editor);
$id = JRequest::getVar('id');
$text = ( $edit ? JText::_('Edit') : JText::_('New') );

JToolBarHelper::title(JText::_('Tour Highlights') . ': <small><small>[ ' . $text . ' ]</small></small>');
//JToolBarHelper::Preview('index.php?option=com_cntours&controller=cntours&cid[]='.$cid[0]);
JToolBarHelper::save();
JToolBarHelper::addNewX();
if ($edit) {
    // for existing items the button is renamed `close`
    JToolBarHelper::cancel('cancel', 'Close');
} else {
    JToolBarHelper::cancel();
}
?>

<?php
$tour_highlight_type = array(
  1 => 'Attractions',
  2 => 'Shops',
  3 => 'Vehicles',
  4 => 'Optional Activities(paid locally)'
);
?>

<form action="" method="post" name="adminForm" enctype="multipart/form-data">

    <div class="col width-55">
        <fieldset class="adminform">
            <legend><?php echo JText::_('Options'); ?></legend>
            <table class="admintable">

                <tr>
                    <td class="key">
                        <label for="polloption">
                            分类选择
                        </label>
                    </td>
                    <td>
                        <select name='type' id='hotel_grade'>;
                          <option value=0>请选择</option>
                          <?php foreach ($tour_highlight_type as $k=>$v): ?>
                          <option value="<?php echo $k; ?>" <?php if ($this->tour_highlight_content->type == $k) echo 'selected="selected"'; ?>><?php echo $v;?></option>
                          <?php endforeach; ?>
                        </select>

                    </td>
                </tr>
                <tr>
                    <td class="key">
                        <label for="polloption">
                            标题
                        </label>
                    </td>
                    <td>

                        <input class="inputbox" type="text" name="title" id="name" value="<?php echo $this->tour_highlight_content->title; ?>" size="85" />
                    </td>
                </tr>
                <tr>
                    <td class="key">
                        <label for="polloption">
                            描述
                        </label>
                    </td>
                    <td>
                      <?php 	echo $editor->display( 'description',  htmlspecialchars($this->tour_highlight_content->description,ENT_QUOTES), '550', '300', '60', '20', array('pagebreak', 'readmore'));?>
                        
                    </td>
                </tr>
                <tr>
                    <td class="key">
                        <label for="polloption">
                            上传图片
                        </label>
                    </td>
                    <td>                       
                        <input name="ufile" type="file" id="uppic"/> 
                        <br /><br />
                        <?php if($this->tour_highlight_content->pic):?>
                          <img src="/uploads/tour_highlight/thumb/thumb_<?php echo $this->tour_highlight_content->pic;?>" />
                        <?php endif;?>
                    </td>
                </tr>            											
            </table>
        </fieldset>
    </div>    

    <input type="hidden" name="option" value="com_tourhighlights" />
    <input type="hidden" name="task" value="" />
    <input type="hidden" name="boxchecked" value="0" />
    <input type="hidden" name="tid" value="<?php echo JRequest::getVar('tid', 0); ?>" />
    <input type="hidden" name="id" value="<?php echo JRequest::getVar('id', 0); ?>" />
    <input type="hidden" name="filter_order" value="<?php echo $this->lists['order']; ?>" />
    <input type="hidden" name="filter_order_Dir" value="<?php echo $this->lists['order_Dir']; ?>" />
    <?php echo JHTML::_('form.token'); ?>

</form>
