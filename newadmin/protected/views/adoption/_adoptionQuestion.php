
<div class="questions">
   <div class="ques-menu">
      <ul>
         <li class="dq">Top Trip Faqs</li>
      </ul>
   </div>
   
   <!--  common-questuon start  -->
   <div class="common-questuon" id="questionTab2">

     <div class="tripleft">
       <!--  answer start  -->
          <div class="answer">
                <?php if($chinaTripQuestion->totalItemCount):?>
                  <?php $this->widget('zii.widgets.CListView', array(
                    'dataProvider'=>$chinaTripQuestion,
                    'itemView'=>'//cityTours/_chinaTripQuestion',
                    'pager'=>array(
                      'cssFile'=>False,
                      'header'=>'',
                    ),
                    'template'=>"{items}\n{pager}",
                  )); ?>
                 <?php endif;?>
          </div>
          <!--  answer end  -->
        </div>

      <!--  tripright start  -->
      <div class="tripright">
        <h2>Planning a trip ? Ask us here</h2>
        <div class="clear"></div>
        <table border="0" cellspacing="0" cellpadding="0">
           <tbody>
              <tr>
                 <td><textarea name="message" cols="" rows=""></textarea>
                 <span class="qmessage_error errorMessage">It can't be blank.</span>
                 </td>
              </tr>
              <tr>
                 <td style="font-size:11px; font-family:Arial, Helvetica, sans-serif;"><input type="checkbox" name="" value="" style=" float:none; width:auto; border:none;"> Do you want to book a tour / hotel / flights.etc</td>
              </tr>
              <tr>
                 <td><span>Your Name:</span> <input name="username" type="text" />
                 <span class="qusername_error errorMessage">It can't be blank.</span>
                 </td>
              </tr>
              <tr>
                 <td><span>E-mail:</span> <input name="email" type="text" />
                 <span class="qemail_error errorMessage">Please enter correct email.</span>
                 </td>
              </tr>
              <tr>
                 <td><input type="button" value="" name="yt0" style="height:40px;border:0px;cursor:pointer;background:url(/images/view/submit.png) left center no-repeat; dispaly:block; width:221px;" class="form_button" onclick="_cityTours.submitMessage(this);"></td>
              </tr>
           </tbody>
         </table>
      </div>
      <!--  tripright end  -->
   </div>
   <!--  common-questuon end  -->
</div>
      

<script>
var _cityTours = {
    questionTab:function(num, obj){
        $(obj).parents("ul").find("li").removeClass("dq");
        $(obj).addClass("dq");
        if(num == 1){
          $("#questionTab1").hide();
          $("#questionTab2").show();
        }else{
          $("#questionTab1").show();
          $("#questionTab2").hide();
        }
    },
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


