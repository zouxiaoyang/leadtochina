<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Leadtochina Feedback</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="/travel/css/feedback.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="/js/jquery-1.3.2.min.js"></script>
</head>
<body>
<div class="top">

  <?php $form=$this->beginWidget('CActiveForm', array(
  'id'=>'question_feedback_form',
  'enableClientValidation'=>true,
)); ?>
    <div class="content">
        <div class="logo"><a href="http://www.leadtochina.com/"></a></div>
        <div class="list">
           <h2>1. Why choose us?</h2>
           <ul>
              <li><input type="checkbox" name="question[1][]" value="Professionalism"> Professionalism</li>
              <li><input type="checkbox" name="question[1][]" value=Price""> Price</li>
              <li><input type="checkbox" name="question[1][]" value="Customization"> Customization</li>
              <li><input type="checkbox" name="question[1][]" value="Other (please be specific)"> Other (please be specific)</li>
           </ul>
        </div>
        <div class="list">
           <h2>2. From which medium do you communicate with other family?</h2>
           <ul>
              <li><input type="checkbox" name="question[2][]" value="Email"> Email</li>
              <li><input type="checkbox" name="question[2][]" value="Social networks like facebook etc."> Social networks like facebook etc.</li>
              <li><input type="checkbox" name="question[2][]" value="Phone call"> Phone call</li>
              <li><input type="checkbox" name="question[2][]" value="Activity"> Activity</li>
           </ul>
        </div>
        <div class="list">
           <h2>3. Which medium do you like best to know about the China Adoption around your area?</h2>
           <ul>
              <li><input type="checkbox" name="question[3][]" value="Adoptive Families"> Adoptive Families</li>
              <li><input type="checkbox" name="question[3][]" value="Adoption Agencies"> Adoption Agencies</li>
              <li><input type="checkbox" name="question[3][]" value="Other (please be specific)"> Other (please be specific)</li>
           </ul>
        </div>
        <div class="list">
           <h2>4. Would you like to take your children to travel China again?</h2>
           <ul>
              <li><input type="checkbox" name="question[4][]" value="Yes"> Yes</li>
              <li><input type="checkbox" name="question[4][]" value="No"> No</li>
              <li><input type="checkbox" name="question[4][]"  value="It depends"> It depends</li>
           </ul>
        </div>
        <div class="list">
           <h2>5. What information do you want us to provide for you in the future?</h2>
           <ul>
              <li><input type="checkbox" name="question[5][]" value="Your children’s birthplace"> Your children’s birthplace</li>
              <li><input type="checkbox" name="question[5][]" value="Interesting places in China"> Interesting places in China</li>
              <li><input type="checkbox" name="question[5][]" value="No need"> No need</li>
              <li><input type="checkbox" name="question[5][]" value="Other (please be specific)"> Other (please be specific)</li>
           </ul>
        </div>
        <div class="list">
           <h2>6. Which way do you prefer to travel in?</h2>
           <ul>
              <li><input type="checkbox" name="question[6][]" value="Private Tour"> Private Tour</li>
              <li><input type="checkbox" name="question[6][]" value="Group Tour"> Group Tour</li>
           </ul>
        </div>
        <div class="list">
           <h2>7. When choose the China Adoption Heritage Tour, which one is the most important for you?</h2>
           <ul>
              <li style="width:100%; margin-right:0px;"><input type="checkbox" name="question[7][]" value="The condition and security of accommodation"> The condition and security of accommodation</li>
              <li style="width:100%; margin-right:0px;"><input type="checkbox" name="question[7][]" value="The safety of your personal and property during the trip"> The safety of your personal and property during the trip</li>
              <li style="width:100%; margin-right:0px;"><input type="checkbox" name="question[7][]" value="The tour arrangement in children’s adoption place"> The tour arrangement in children’s adoption place</li>
              <li style="width:100%; margin-right:0px;"><input type="checkbox" name="question[7][]" value="Tour flexibility"> Tour flexibility</li>
           </ul>
        </div>
        <div class="list" style="border-bottom:none;">
           <h2>8. What suggestions do you have to improve our product/service?</h2>
           <div class="clear"></div>
           <textarea cols="" rows="" name="suggestions"></textarea>
        </div>
        <div class="clear"></div>
        <div class="button"><img onclick="check_form();" src="/images/feedback/button.jpg" /></div>
    </div>
  <?php $this->endWidget(); ?>
</div>
<div class="clear"></div>
<div class="footer">
   <div class="footleft"><h2>China Hefei Full-view Travel Service Co., Ltd</h2>
   Copyright © 2008. All Rights Reserved to Lead To China.</div>
   <div class="member">
      <h2>Member of</h2>
      <img src="/images/feedback/pata.png" alt="" />
   </div>
</div>
<script>
  function check_form(){
    if($("input[type='checkbox']:checked").length == 0){
      return false; 
    }
    $("#question_feedback_form").submit();

  }
</script>
</body>
</html>
