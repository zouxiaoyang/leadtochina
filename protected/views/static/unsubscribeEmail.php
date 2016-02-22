<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Leadtochina Cancel Subscription</title>
<link href="style.css" type="text/css" rel="stylesheet">
<script src="/js/jquery-1.4.js"></script>
</head>
<body>
   <div id="container">
       <h2>Cancel Subscription</h2>  
       <div class="clear"></div>
	   <form method="post" action="/index.php" name="formname">
       <div class="content">
           <div class="email">E-mail: <input name="email" id="email" type="text" value="<?php echo base64_decode($_GET['email']);?>" /></div>
           <div class="thanks"><input name="" type="checkbox" value="" checked="checked" /> Please Do not sent this kind of mails to me, Thanks!</div>
           <div class="confirm"><a href="javascript:;" onclick="check_form();">Confirm</a></div>
       </div>
	   <input type="hidden" name="option" value="com_order" />
	   <input type="hidden" name="task" value="unsubscribeEmail" />
	   </form>
   </div>
   <script>
		function check_form()
		{
			$.post("http://www.leadtochina.com/index.php?option=com_order&task=unsubscribeEmail",{email:$('#email').val()}, function(){
				window.opener=null;
				window.open('','_self');
				window.close();
			})
		}
   </script>
</body>
</html>
