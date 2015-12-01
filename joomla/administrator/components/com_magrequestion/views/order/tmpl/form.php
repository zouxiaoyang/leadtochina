<?php defined('_JEXEC') or die('Restricted access'); 
JToolBarHelper::cancel( 'cancel', 'Close' );
?>
<script language="javascript" type="text/javascript">
	function submitbutton(pressbutton) {
		var form = document.adminForm;
		if (pressbutton == 'cancel') {
			submitform( pressbutton );
			return;
		}
			submitform( pressbutton );
	}
</script>

<form action="index.php?option=com_magrequestion" method="post" name="adminForm" enctype="multipart/form-data">
<div class="col">
	<table style="background-color: #F6F6F6;">
		<tr>
			<td style="
    border-bottom: 1px solid #E9E9E9;
    border-right: 1px solid #E9E9E9;
    color: #666666;
    font-weight: bold;
    text-align: center;width:150px;"  >
				<label for="polloption">
					用户名
				</label>
			</td>
				<td style="
    border-bottom: 1px solid #E9E9E9;
    border-right: 1px solid #E9E9E9;
    color: #666666;
    font-weight: bold;
    text-align: center;width:550px;">
				<label for="polloption">
					问题
				</label>
			</td>
				<td style="
    border-bottom: 1px solid #E9E9E9;
    border-right: 1px solid #E9E9E9;
    color: #666666;
    font-weight: bold;
    text-align: center;width:100px;">
				<label for="polloption">
					IP
				</label>
			</td>
				<td style="
    border-bottom: 1px solid #E9E9E9;
    border-right: 1px solid #E9E9E9;
    color: #666666;
    font-weight: bold;
    text-align: center;width:100px;">
				<label for="polloption">
					时间
				</label>
			</td>
      
      <td style="
    border-bottom: 1px solid #E9E9E9;
    border-right: 1px solid #E9E9E9;
    color: #666666;
    font-weight: bold;
    text-align: center;width:100px;">
        <label for="polloption">
          操作
        </label>
      </td>
		</tr>

		<tr>
			<td style="
    border-bottom: 1px solid #E9E9E9;
    border-right: 1px solid #E9E9E9;">
				<label for="polloption">
					<?php echo $this->rows[0]->username;?>
				</label>
			</td>
				<td style="
    border-bottom: 1px solid #E9E9E9;
    border-right: 1px solid #E9E9E9;">
				<label for="polloption">
					<?php echo $this->rows[0]->shortcontent."<br />".$this->rows[0]->content;?>
				</label>
			</td>
				<td style="
    border-bottom: 1px solid #E9E9E9;
    border-right: 1px solid #E9E9E9;">
				<label for="polloption">
					<?php echo $this->rows[0]->user_ip;?>
				</label>
			</td>
				<td style="
    border-bottom: 1px solid #E9E9E9;
    border-right: 1px solid #E9E9E9;">
				<label for="polloption">
					<?php
					date_default_timezone_set('Asia/Shanghai');
					$datenow=date("Y-m-d H:i:s",$this->rows[0]->dateline);
					echo $datenow;?>
				</label>
			</td>
            <td style="
          border-bottom: 1px solid #E9E9E9;
          border-right: 1px solid #E9E9E9;">
            </td>
		</tr>										


<?php

$db		=& JFactory::getDBO();
$query = 'SELECT * FROM jos_cos_question   WHERE postid='.$this->rows[0]->id.' order by id desc';

$db->setQuery( $query);
$rows = $db->loadObjectList();
if(count($rows)>=1){
?>

		<tr>
			<td colspan=4 align="centor" style="
    border-bottom: 1px solid #E9E9E9;
    border-right: 1px solid #E9E9E9;">
				<label for="polloption">
					回复帖子：
				</label>
			</td>
				
		</tr>	

<?php

	foreach($rows AS $row){
	?>
		<tr>
			<td  style="border-bottom: 1px solid #E9E9E9;border-right: 1px solid #E9E9E9;">
				<label for="polloption">
					<?php echo $row->username;?>
				</label>
			</td>
				<td style="border-bottom: 1px solid #E9E9E9;border-right: 1px solid #E9E9E9;">
				<label for="polloption">
					<?php echo $row->content;?>
				</label>
			</td>
				<td style="border-bottom: 1px solid #E9E9E9;border-right: 1px solid #E9E9E9;">
				<label for="polloption">
					<?php echo $row->user_ip;?>
				</label>
			</td>
				<td style="border-bottom: 1px solid #E9E9E9;border-right: 1px solid #E9E9E9;">
				<label for="polloption">
					<?php
					date_default_timezone_set('Asia/Shanghai');
					$datenow=date("Y-m-d H:i:s",$row->dateline);
					echo $datenow;?>
				</label>
			</td>
            <td style="border-bottom: 1px solid #E9E9E9;border-right: 1px solid #E9E9E9;">
              <label for="polloption">
                <a href="#" onclick="delete_reply(<?php echo $row->id;?>, this);">删除</a>/<a href="#" onclick="edit_reply('<?php echo $row->id;?>','<?php echo htmlspecialchars(addslashes($row->username));?>','<?php echo htmlspecialchars(addslashes($row->content));?>','<?php echo $row->user_ip;?>')">编辑</a>
              </label>
            </td>
		</tr>	
	
	<?php
	
	}
}

?>

<tr>
<td colspan=4><div class="box" id="boxid">
  <div class="box_title">
    <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="47" align="left">Your answer to <?php echo $this->rows[0]->username;?></td>
    <td align="right"></td>
  </tr>
</table>
 </div>
 
 <div class="box_tab">
 <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30">You can post as a member (<a href="#">Login</a> first) or a guest! <span style="color:#FF0000">*</span>Name:</td>
    <td width="58%">
      <label>
        <input name="replay_username" type="text" id="replay_username" size="30" />
        </label> </td>
  </tr>
  <tr>
    <td colspan="2"><label>
      <textarea name="replay_content" id="replay_content" cols="100" rows="5"></textarea>
    </label></td>
    </tr>
  <tr>
    <td height="30" colspan="2">No more than 2,000 characters, please.</td>
    </tr>
  <tr>
    <td colspan="2"><label>
	<input type="hidden" name="replay_postid" id="replay_postid" value="<?php echo $this->rows[0]->id;?>">
      <input type="button" onclick="replay_message()" name="button5" id="button5" value=""  
      style="background:url(/images/box/box3_11.jpg) no-repeat; width:53px; height:22px; border:0px;" />
    </label>
</td>
    </tr>
</table>
</div>

</div></td>
</tr>

	</table>

</div>

<div class="clr"></div>

<input type="hidden" name="task" value="" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>
<div id="editWindow" style="width:500px;height: auto; border:solid 5px #ddd; background-color: #fdfdfd; display:none; position: absolute;left:300px; top:180px; z-index: 1;">
  <div id="closeWindow" style="margin-top:2px;height: 20px; display: block; float: right; width: 30px; color:#333; cursor: pointer; font-size: 12px;">关闭</div>
  <div id="neirong" style="display: none;float:left;width:490px;margin: 10px;">
    <form action="index.php?option=com_magrequestion&task=editReply" method="post" name="modifyok">
      <table style="background-color: #f6f6f6; width: 480px; margin: 0px auto;">
        <tr>
          <td width="60">姓名：</td>
          <td><input type="text" value="sdfsdf" size="50" id="username" name="username"/></td>
        </tr>
        <tr>
          <td>回复内容：</td>
          <td><textarea cols="50" rows="5" id="content" name="content">sfsdfs</textarea></td>
        </tr>
        <tr>
          <td>ip地址：</td>
          <td><input type="text" value="sdfsdf" size="50" id="user_ip" name="user_ip"/></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" value="确认修改"/></td>
          <input type="hidden" name="huifuid" id="huifuid"/>
        </tr>    
      </table>
    </form>
  </div>
</div>

<script src="/js/jquery-1.4.js"></script>
<script>
var jq = jQuery.noConflict();
function delete_reply(id, obj)
{
  if(confirm('确定删除？')){
    jq.post('index.php?option=com_magrequestion&task=delete', {id:id,postid:<?php echo $this->rows[0]->id;?>}, function(ret){
      if(ret==0){
        jq(obj).parents("tr").remove();
      }
    })
  }
}

function edit_reply(id,username,content,user_ip){
    jq("#editWindow").show();
    jq("#neirong").show();
    jq("#huifuid").val(id);
    jq("#username").val(username);
    jq("#content").val(content);
    jq("#user_ip").val(user_ip);
}

(function($){
  $("#closeWindow").click(function(){
    $("#editWindow").hide();
  });
})(jQuery);

function replay_message(){
	if(document.getElementById("replay_content").value==""){
		alert("Submission failed!");
		return false;
	}

	if(document.getElementById("replay_username").value==""){
		alert("Submission failed!Please enter your name!");
		return false;
	}
	var ask_content="";
	var ask_username=document.getElementById("replay_username").value;
	ask_content=document.getElementById("replay_content").value;
	var replay_postid=document.getElementById("replay_postid").value;

	jq.post("index.php?option=com_magrequestion&task=Reply_message",{ask_username:ask_username,ask_content:ask_content,replay_postid:replay_postid},function(ret){
		if(ret=='ok'){
			alert("Reply successfully!");
			window.location.reload();
		}else{
			alert(ret);
			}
	});	
}
</script>

