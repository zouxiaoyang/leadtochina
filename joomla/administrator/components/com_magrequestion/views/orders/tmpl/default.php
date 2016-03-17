<?php defined('_JEXEC') or die('Restricted access'); ?>

<?php JHTML::_('behavior.tooltip'); ?>

<?php
	JToolBarHelper::title(  JText::_( '问答管理' ) );
	JToolBarHelper::deleteList();
?>
<script src="/js/jquery-1.4.js"></script>
<script language="javascript" type="text/javascript">
  
function submitform(pressbutton){
  if (pressbutton) {
    document.adminForm.task.value=pressbutton;
  }
  if (typeof document.adminForm.onsubmit == "function") {
    document.adminForm.onsubmit();
  }
  if(pressbutton == 'remove'){
    if(confirm('确定删除吗？')){
      document.adminForm.submit();
    }
  }else{
    document.adminForm.submit();
  }
}

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


  jq = jQuery.noConflict();
  
  var _ajax_message = {
    scrollTimeID:'',
    messageTimeID: '', 

    getUnreadNum: function(){
      jq.post('/joomla/administrator/index.php?option=com_magrequestion&task=getUnreadNum', function(ret){
           if(ret > 0){
              document.title = "有"+ret+"条新问答需要处理！";
              _ajax_message.scrollTitle();
           }else if(ret == 0){
             clearTimeout(_ajax_message.scrollTimeID);
           }
      })
    },
    updateStatus: function(obj,id){
        jq.post('/joomla/administrator/index.php?option=com_magrequestion&task=updateReadStatus',{id_num:id},function(ret){
            if(ret==0){
              jq(obj).html("已读提问");
              clearTimeout(_ajax_message.scrollTimeID);
              clearInterval(_ajax_message.messageTimeID);
              _ajax_message.messageTimeID = setInterval("_ajax_message.onload()", 10000);
              _ajax_message.scrollTimeID = setTimeout("_ajax_message.scrollTitle()", 500)

            }
          })
    },
    onload: function(){
      this.getUnreadNum();
    },
    scrollTitle: function(){
        clearTimeout(this.scrollTimeID)
        var text = document.title;
        document.title=text.substring(1,text.length)+text.substring(0,1)
        text=document.title.substring(0,text.length)
        this.scrollTimeID = setTimeout("_ajax_message.scrollTitle()", 500)
    }
  }

  _ajax_message.messageTimeID = setInterval("_ajax_message.onload()", 10000);
</script>



<form action="index.php?option=com_magrequestion" method="post" name="adminForm">
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
			<th >
				<input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $this->items ); ?>);" />
			</th>
			<th  >
				用户名
			</th>
			<th  align="center">
				问题
			</th>
			<th  align="center">
				提问时间
			</th>
			<th  align="center">
				IP地址
			</th>
			<th  align="center">
				URL
			</th>
			<th  align="center">
				E-MAIL
			</th>
			<th  align="center">
				回复数
			</th>
			<th  nowrap="nowrap">
			操作
			</th>
      <th  nowrap="nowrap">
			状态
			</th>
			<th  nowrap="nowrap">
			ID
			</th>
			<th  nowrap="nowrap">
			PCID
			</th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<td colspan="10">
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

		$order_time=date("Y-m-d H:i:s",$row->dateline);
		$checked 	= JHTML::_('grid.checkedout',   $row, $i );

		if($row->auditing==0){
		
			$tj_str="未审核";
			$tj="yes";
		
		}elseif($row->auditing==1){
		
			$tj_str="已审核";
			$tj="no";			
		
		}

	?>
		<tr class="<?php echo "row$k"; ?>">
			<td>
				<?php echo $this->pagination->getRowOffset( $i ); ?>
			</td>
			<td>
				<?php echo $checked; ?>
			</td>
			<td>
			<a href="index.php?option=com_magrequestion&view=order&task=showOder&orderid=<?php echo $row->id?>">
			<?php echo $row->username;?></a>
			</td>
			<td align="center">
				<?php echo $row->shortcontent."<br />".$row->content;?>
			</td>
			<td align="center">
				<?php echo $order_time;?>
			</td>
			<td align="center">
				<?php echo $row->user_ip;?>
			</td>
			<td align="center">
				<?php echo $row->url;?>
			</td>
			<td align="center">
				<?php echo $row->email;?>
			</td>
			<td align="center">
				<?php echo  $row->countreply;?>	
			</td>
			<td align="center">
<a href="#" onclick="javascript:SetHot('../administrator/index.php?option=com_setaud&id=<?php echo $row->id;?>&tj=<?php echo $tj;?>')"><?php echo $tj_str;?></a>
			</td>
      <td align="center" width="8%" onclick="_ajax_message.updateStatus(this, <?php echo $row->id;?>)" style="cursor: pointer;">
				<?php if($row->is_read == 0){
          echo '<b>未读提问</b>';
        }else{
          echo "已读提问";
        }
?>
			</td>
			<td align="center">
				<?php echo $row->id; ?>
			</td>

			<td align="center">
				<?php echo $row->question_type_id; ?>
				<input type="hidden" value="<?php echo $row->question_type_id;?>" name="pcid[]"/>
			</td>
		</tr>
		<?php
			$k = 1 - $k;
		}
		?>
	</tbody>
	</table>
</div>

	<input type="hidden" name="option" value="com_magrequestion" />
	<input type="hidden" name="task" value="" />	
	<input type="hidden" name="boxchecked" value="0" />
	<input type="hidden" name="filter_order" value="<?php echo $this->lists['order']; ?>" />
	<input type="hidden" name="filter_order_Dir" value="<?php echo $this->lists['order_Dir']; ?>" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>
