<div class="get_start">
  <h2><img src="/images/beijingtours/new/title.png" alt="" /></h2>
  <div class="start_content">
      <table border="0" cellspacing="0" cellpadding="0">
        <tbody>
           <tr>
              <td><input type="text" value="" placeholder="Full Name:" name="username">
                <br />
                <span class="qusername_error errorMessage">It can't be blank.</span>
              </td>
           </tr>
           <tr>
              <td><input type="text" value="" placeholder="Email:" name="email">
                <br />
                <span class="qemail_error errorMessage">Please enter correct email.</span>
              </td>
           </tr>
           <tr>
              <td>
                <textarea  name="message" placeholder="Tell us your tour ideas: where to visit, how many people and days ..."></textarea>
                <br />
                <span class="qmessage_error errorMessage">It can't be blank.</span>
              </td>
           </tr>
           <tr>
              <td style="text-align:center;">
               <input type="checkbox" checked style="width:5px;height:5px;" /> I agree with <a href="/privacy-policy.html" target="_blank" style="color: #352E2C;text-decoration: underline;">Privacy Policy</a>
              <a href="###" onclick="_cityTours.submitMessage(this)"><img src="/images/beijingtours/new/send.png" alt="" /></a></td>
           </tr>
        </tbody>
       </table>
  </div>
</div>    
<script type="text/javascript">
var _cityTours = {
    submitMessage:function(obj){
        var message = $(obj).parents("table").find("textarea[name='message']").val();
        var username = $(obj).parents("table").find("input[name='username']").val();
        var email = $(obj).parents("table").find("input[name='email']").val();
       
        if($.trim(username) == ''){
          $(obj).parents("table").find(".qusername_error").show();
          return false;
        }else{
          $(obj).parents("table").find(".qusername_error").hide();
        }

        if(!/(\S)+[@]{1}(\S)+[.]{1}(\w)+/.test(email)) {
          $(obj).parents("table").find(".qemail_error").show();return false;
        }else{
          $(obj).parents("table").find(".qemail_error").hide();
        }

        if($.trim(message) == ''){ 
          $(obj).parents("table").find(".qmessage_error").show();
          return false;
        }else{
          $(obj).parents("table").find(".qmessage_error").hide();
        }
        var YII_CSRF_TOKEN = "<?php echo Yii::app()->request->csrfToken;?>";
        $.post("<?php echo Yii::app()->createUrl("toursPackage/ajaxAddMessage");?>", {message:message, username:username, email:email,  YII_CSRF_TOKEN:YII_CSRF_TOKEN}, function(ret){
          /*
          alert("Submit Successful.");
          $(obj).parents("table").find("textarea[name='message']").val("");
          $(obj).parents("table").find("input").val("");
          */
          location.href="/succeed.html";
        })
      }
}
</script>
