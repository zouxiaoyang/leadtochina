<?php
$this->pageTitle= "Sorry, the page you're looking for isn't here";
$this->breadcrumbs=array(
	'Error',
);
?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/404.css'); ?>
<div class="contentnew">
    <div id="error">
        <div class="left">
           <div class="tour"><a href="/tour/diytours.html"><img src="/images/tourism/left_custom_29.jpg" alt="" /></a></div>
        </div>
        <div class="right">
           <div class="sorry"><p><span>Error <?php echo $code; ?></span><?php echo CHtml::encode($message); ?></p>
              <div class="clear"></div>
              <ul>
                <li>&raquo; <a href="javascript:history.go(-1);";>Back to Previous Page</a></li>
                <li>&raquo; <a href="/">Back to Homepage</a></li>
              </ul>
              </div>
          <div id="a1">Fast Inquiry</div>
         <div class="fast">
                <form id="messageask" action="/index.php?option=com_doask" name="messageask" method="post">
                <table border="0" cellspacing="0" cellpadding="0">
                     <tr>
                         <td colspan="3">Need Help? Ask a Question Here</td>
                     </tr>
                     <tr>
                         <td colspan="3"><textarea name="mes_user_content" id="mes_user_content" cols="" rows=""></textarea></td>
                     </tr>
                     <tr>
                         <td width="150">Name : 
                       <input name="mes_username" id="mes_username" style="width:100px;" type="text" /></td>
                       <td width="230">E-mail : 
                       <input name="mes_user_email" id="mes_user_email" style="width:150px;" type="text" /></td>                   
                       <td width="180">verify code:
                       <input style=" width:60px;" name="validity" type="text" /><img id="safecode" onclick="reloadcode()" style="cursor:pointer;display:block;float:right;" src="/index.php?option=com_verifycode"></td>
                  </tr>
                     <tr>
                         <td colspan="3"><a style="display:block; margin-top:10px;" href="#"><img src="/images/404/submit.jpg" alt="" name="messagebut" id="messagebut" onclick="checkmessageform()"/></a></td>
                     </tr>
               </table>
               </form>
               <form id="searchcity" method="post" action="/index.php?option=com_searchcity&Itemid=180" name="searchcity" autocomplete="off">
               <table border="0" cellspacing="0" cellpadding="0">
                     <tr>
                         <td colspan="3"><div style="position:relative; width:492px; height:34px; margin-top:15px;"><input style=" width:480px; height:32px; padding-left:10px; line-height:32px; color:#3c3c3c; font-style:italic;" name="cityname" id="suggest1" type="text" /> <a style="cursor:pointer;position:absolute; right:1px; top:1px; display:block; width:36px; height:32px;" onClick="search_city()"><img src="/images/404/search.jpg" id="searchcity" alt="" /></a></div></td>
                     </tr>
               </table>
               </form>
             </div>
        </div>
    </div>
</div>
<script>
function checkmessageform(){
  var username=document.getElementById("mes_username").value;
  var email=document.getElementById("mes_user_email").value;
  var content=document.getElementById("mes_user_content").value;
  if(username==""){
  alert("Please fill in your full name.");
  return;
  }
  if(email==""){
  alert("Please fill in your Email.");
  return;
  }
  if(content==""){
  alert("Please fill in your Messaage.");
  return;
  }
  document.forms["messageask"].submit();
  } 

function reloadcode(){
  var verify=document.getElementById('safecode');
  verify.setAttribute('src','/index.php?option=com_verifycode&rand='+Math.random());
  }

function search_city(){
  var cityname=document.getElementById("suggest1").value;
  if(cityname==""){
    alert('Please fill in your search keywords.');
    document.getElementById("suggest1").focus();
    return false;
    }
  document.forms['searchcity'].submit();
}
</script>


