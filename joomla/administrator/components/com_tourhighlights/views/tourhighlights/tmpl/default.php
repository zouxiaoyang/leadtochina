<?php defined('_JEXEC') or die('Restricted access'); ?>

<?php JHTML::_('behavior.tooltip');
$db = & JFactory::getDBO();
?>

<?php
JToolBarHelper::title(JText::_('Tour Highlights管理'));
JToolBarHelper::deleteList();
JToolBarHelper::addNewX();
JToolBarHelper::cancel('returnCtours');
?>


<script language="javascript" type="text/javascript">
    /* 
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
     */
</script>




<form action="index.php?option=com_tourhighlight" method="post" name="adminForm">

    <div id="tablecell">
        <table class="adminlist">
            <thead>
                <tr>
                    <th width="3%">
                        ID
                    </th>             
                    <th width="3%">
                        <input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count($this->items); ?>);" />
                    </th>
                    <th width="20%" align="center">
                        标题
                    </th>
                    <th width="45%" align="center">
                        描述
                    </th>
                </tr>
            </thead>            
            <tbody>
<?php foreach ($this->items as $key => $rows): ?>
                    <tr class="<?php echo "row$key"; ?>">
                        <td>
    <?php echo $rows->id; ?>
                        </td>                 
                        <td>
                            <input type="checkbox" onclick="isChecked(this.checked);" value="<?php echo $rows->id; ?>" name="ids[]" id="cb<?php echo $key; ?>">
                        </td>
                        <td>
                            <a href="<?php echo 'index.php?option=com_tourhighlights&view=tourhightlight&task=edit&tid=' . $rows->tid . '&id=' . $rows->id ?>"><?php echo $rows->title; ?></a>
                        </td>
                        <td>
    <?php echo substr($rows->description, 0, 200); ?>...
                        </td>
                    </tr>
<?php endforeach; ?>
            </tbody>
        </table>
    </div>


    <input type="hidden" name="option" value="com_tourhighlights" />
    <input type="hidden" name="task" value="" />
    <input type="hidden" name="boxchecked" value="0" />
    <input type="hidden" name="tid" value="<?php echo JRequest::getVar('cid', 0); ?>" />
    <input type="hidden" name="filter_order" value="<?php echo $this->lists['order']; ?>" />
    <input type="hidden" name="filter_order_Dir" value="<?php echo $this->lists['order_Dir']; ?>" />
<?php echo JHTML::_('form.token'); ?>
</form>
