<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/citytours.css');  ?>
<style type="text/css">
<!--
.tourlist1{ margin-top:0px;}
#menu-tours{ margin-bottom:0px;}
.right_div{ margin-top:10px;}
.zhang_banner{ background:url(/images/citytours/banner_zhangjiajie.jpg) no-repeat; width:920px; height:281px;margin-top:10px;}
#CDSWIDSSP {width: 160px !important;}
.zhang_txt1{ font-size:18px; color:#8C4600; font-weight:bold}
.zhang_list{ width:737px; border-top:1px #ccc solid; margin-top:10px; padding:15px 0; color:#333; line-height:160%;}
.zhang_list_img{ width:215px; float:left}
.zhang_list_cont{ width:507px; float:right}
.zhang_list_cont_tit a{ font-size:16px; text-decoration:none; color:#2766B1;}
.zhang_list_cont_tit a:hover{ text-decoration:underline}
.pt10{ padding-top:10px;}
.zhang_txt2{ font-size:14px; color:#000;}
-->
 .errorMessage{display:none}
#content{ background:#EEEEEE; font-family:Verdana,Arial,Helvetica,sans-serif; font-size:12px; height:auto; margin:0 auto 15px; overflow:hidden; padding:9px 21px 12px 18px; width:920px;}
.more-indexcont{ top:1540px;}
</style>
<!--  index start  -->
<div class="index">
    <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('cityTours/index');?>">City Tours</a> <?php echo $cityInfo->name;?> Tours</div>
    <div style="clear:both; overflow:hidden"></div>
    <div class="zhang_banner"></div>
    <!--  right start  -->
    <div id="right" style="float:left;">
       <div class="guide"><?php echo $this->renderPartial('/common/cityGuide', array('cityName'=>$cityInfo->name,'cityId'=>$cityInfo->id));?></div>
       <div style="clear:both"></div>
       <div style="margin-top:10px;float:left;">
        <script src="/travel/js/tripadvisor.js"></script>
        </div>
   </div>
    <!--  right end  -->
    <!--  left start  -->
    <div id="left" style="float:right">
      <div class="zhang_txt1">China Zhangjiajie Tours</div>

        <?php foreach($tours as $v):?>
        <div class="zhang_list">
         <div class="zhang_list_img"><img src="/uploads/cityTours/<?php echo $v->pic;?>" width="215" height="150" /></div>
         <div class="zhang_list_cont">
          <p class="zhang_list_cont_tit"><a href="<?php echo $v->url();?>"><?php echo $v->name;?></a></p>
          <p class="pt10 zhang_txt2"><?php echo $v->route;?></p>
          <p class="pt10"><?php echo $v->recommand_reason;?></p>
          <p class="pt10" style="text-align:right"><a href="<?php echo $v->url();?>"><img src="/images/citytours/zhang_btn1.png"/></a></p>
         </div>
        </div>
        <div style="clear:both"></div>
      <?php endforeach;?>


         <!--  questions start  -->
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
                            'itemView'=>'_chinaTripQuestion',
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
                         <td><textarea name="message" id="qmessage" cols="" rows=""></textarea>
                         <span class="qmessage_error errorMessage">It can't be blank.</span>
                         </td>
                      </tr>
                      <tr>
                         <td style="font-size:11px; font-family:Arial, Helvetica, sans-serif;"><input type="checkbox" name="" value="" style=" float:none; width:auto; border:none;"> Do you want to book a tour / hotel / flights.etc</td>
                      </tr>
                      <tr>
                         <td><span>Your Name:</span> <input name="username" id="qusername" type="text" />
                         <span class="qusername_error errorMessage">It can't be blank.</span>
                         </td>
                      </tr>
                      <tr>
                         <td><span>E-mail:</span> <input name="email" id="qemail" type="text" />
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
        <!--  questions end  -->
    </div>
    <!--  left end  -->
    
   
</div>
<!--  index end  -->    
<?php echo $this->renderPartial("//common/pop_more_cities");?>
    
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
