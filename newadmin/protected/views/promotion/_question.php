<style>
.qmessage_error,.qusername_error,.qemail_error{display:none;color:red !important;}
</style>
<div class="question">
            <div class="list-view" id="yw0" style="display:none">
                 <div class="items">
                   <!--  quest-one start  -->
                    <div class="quest-one">
                       <div class="direction"><img alt="" src="/images/view/question1.png"></div>
                       <!--  describe start  -->
                       <div class="describe">
                          <p>Hello im going to be in shanghai in Dec 2012. How's the weather going to be?<br>
Asked by <span>Melody</span> (Jul.25, 2012)</p>
                       </div>
                       <!--  describe end  -->
                       
                       <!--  ask start  -->
                       <div class="ask"><p><span>Lead To China Trip Advisor</span> (Jul.25, 2012) replied: <br>
                  It is cold and humid winter in Shanghai. but not as serious as these cities in North China, where the snow is available. So, please wear warm sweater, overcoat or down jacket and scarf.</p>
                       </div>
                       <!--  ask end  -->
                   </div>
                   <!--  quest-one end  -->
                 </div>   
            </div>           
            <!--  write start  -->
            <div class="write">
               <h2><img alt="" src="/images/view/write.png"></h2>
               <div class="writecont">
                  <table cellspacing="0" cellpadding="0" border="0">
                      <tbody>
                         <tr>
                           <td colspan="3">You can post as a member!</td>
                         </tr>
                         <tr>
                           <td colspan="3"><textarea name="message" style="border:1px #CCCCCC solid" cols="60" rows="5"></textarea>
                              <span class="qmessage_error">It can't be blank.</span>
                           </td>
                         </tr>
                         <tr>
                           <td class="tesu">Your Name: 
                            <input type="text" name="username"  style="border:1px #CCCCCC solid;" maxlength="128" size="15">
                              <br /><span class="qusername_error">It can't be blank.</span>
                           </td>
                         <td class="tesu">E-mail:
                            <input type="text" maxlength="150" name="email" style="border:1px #CCCCCC solid;">  
                            <br />
                            <span class="qemail_error">Please enter correct email.</span>                
                         </td>
                         <td class="tesu">
                          <input type="button" value="" name="yt0" style="height:40px;border:0px;cursor:pointer; width:221px; background:url(/images/view/submit.png) left center no-repeat; dispaly:block;" class="form_button" onclick="_cityTours.submitMessage(this);">
                          
                        </td>
                        </tr>
                    </tbody>
              </table>
   </div>
</div>
<!--  write end  -->
</div>

<script>
var _cityTours = {
    submitMessage:function(obj){
        var message = $(obj).parents("table").find("textarea[name='message']").val();
        var username = $(obj).parents("table").find("input[name='username']").val();
        var email = $(obj).parents("table").find("input[name='email']").val();

        if($.trim(message) == ''){ 
          $(obj).parents("table").find(".qmessage_error").show();
          return false;
        }else{
          $(obj).parents("table").find(".qmessage_error").hide();
        }
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
        var YII_CSRF_TOKEN = "<?php echo Yii::app()->request->csrfToken;?>";
        $.post("<?php echo Yii::app()->createUrl("toursPackage/ajaxAddMessage");?>", {message:message, username:username, email:email,  YII_CSRF_TOKEN:YII_CSRF_TOKEN}, function(ret){
          alert("Submit Successful.");
          $(obj).parents("table").find("textarea[name='message']").val("");
          $(obj).parents("table").find("input").val("");
        })
      }
}
 </script>