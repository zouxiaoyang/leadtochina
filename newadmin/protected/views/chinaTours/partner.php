<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/cooperation.css');?>

<div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> Travel Agent</div>
<div class="cooper-banner"><img alt="" src="/images/cooperation/banner.jpg"></div>
<div class="setting">
        <div class="number">
          <div class="list">
           <h2>Who We Are</h2>
           <p>Established in 2008, China Hefei Full View Travel Agency focus on providing customized China tours to overseas' tourists of Europe, America, and the Asian-Pacific region. Our operation principle is to create the most reasonable, convenient and effective Online &amp; Actual China Travel Experiences for our dear clients. Because of this, we have built a superb public praise on China travel services among them. The most important is Full View has already been the first choice of China inbound travel to overseas' tourists.</p>
        </div>
        
        <div class="list" style="background:url(/images/cooperation/two.jpg) #eeeeee left top no-repeat; margin-top:22px;">
           <h2>Our Advantages</h2>
           <p>With 400+ China tour packages from budget to luxury from Lead to China, you can choose the Private Tour, Group Tour, Customizing Tour and various Theme Tours to meet your concerns easily. Choose Lead to China; be lifelong partners and friends. <br />
           1. Excellent Quality &amp; Reasonable Price Guaranteed<br />
           2. Professional, Passionate and Responsible Sales Team<br />
           3. 400+ Well-designed China Tour Packages with real Highlights <br />
           4. Domestic Solid Membership Network Establishment<br />
           5. Pre, During and After Tour Monitoring System Established<br />
           6. Visible and controllable Tour Costs</p>
        </div>
        
        <div class="list" style="background:url(/images/cooperation/three.jpg) #eeeeee left top no-repeat; margin-top:22px;">
           <h2>What Are the Benefits for Your Company?</h2>
           <p>A team of English speaking Chinese trip advisors will deal with you and your customers, providing the best china travel services with competitive price and up-to-date China travel information. Besides, you can monitor your tours daily with phone call to local travel guide and listen to the response of your clients. Choose us, it means save your worry, time and money.<br />
           1. Professional sales team on China tour behind you.<br />
           2. Years of Experiences on DIY, Tailor-made and Customize China Tours<br />
           3. Great Value, Competitive Price, No Hidden Fees <br />
           4. Quality Guaranteed, Solid Cooperation, Chinese Host<br />
           5. Net Quotation or Commission return on Your Preference</p>
        </div>
        
        <div class="list" style="background:url(/images/cooperation/four.jpg) #eeeeee left top no-repeat; margin-top:22px;">
           <h2>How to Cooperate with Lead to China?</h2>
           <p>Lead to China provides all China land tour with net prices to your agency so that you can sell in your market or website earning your profits. Or, you can market our tour packages with commission return by referring your clients to us by either website click through or E-mail referrals. </p>
           <p>Then, we will act as your China Branch Office Representatives to answer the questions from your clients and be responsible for tour 
arrangements, bookings and payments, and then you get your commission back. </p>
           <p>So, both of us can make best use of ourselves’ advantages and give quick response and best China tour service to our clients and have mutual benefits at last. Have a try, check it with your our eyes.</p>
        </div></div>
        <div class="clear"></div>
        <div class="Become">Become Our Partners</div>
        <div class="box">
          <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'cooperation-form',
            'enableClientValidation'=>true,
          )); ?>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="110" height="30">Your Full Name</td>
                <td width="335"><strong>
                    <select name="Order[gender]" id="Gender_1" style="width:70px; height:24px;">
                      <option value="Mr."> Mr.</option>
                      <option value="Ms."> Ms.</option>
                    </select>
                    <?php echo $form->textField($model,'fullname',array('class'=>'field2')); ?>
                    <?php echo $form->error($model,'fullname'); ?>

                  </strong></td>
                <td width="110">Company Type</td>
                <td width="315">
                  <strong>
                    <?php echo $form->dropDownList($model,'company_type', CooperationPartners::$company_type_arr, array('class'=>'field')); ?>
                  </strong></td>
              </tr>
              <tr>
                <td height="30">Company Name</td>
                <td><strong>
                    <?php echo $form->textField($model,'compnay_name',array('class'=>'field')); ?>
                    <?php echo $form->error($model,'compnay_name'); ?>
                  </strong></td>
                <td>Phone Number</td>
                <td><strong>
                    <?php echo $form->textField($model,'phone',array('class'=>'field')); ?>
                    <?php echo $form->error($model,'phone'); ?>
                  </strong></td>
              </tr>
              <tr>
                <td height="30">Fax Number</td>
                <td>
                  <strong>
                    <?php echo $form->textField($model,'fax_num',array('class'=>'field')); ?>
                    <?php echo $form->error($model,'fax_num'); ?>
                  </strong></td>
                <td>Your Email</td>
                <td><strong>
                    <?php echo $form->textField($model,'email',array('class'=>'field')); ?>
                    <?php echo $form->error($model,'email'); ?>
                  </strong>
                </td>
              </tr>
            </table>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="110" valign="top">Other Request</td>
                <td align="left"><strong>
                    <?php echo $form->textArea($model,'other_request',array('class'=>'field3')); ?>
                    <?php echo $form->error($model,'other_request'); ?>
                  </strong></td>
              </tr>
            </table>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="50%" height="60" align="right" valign="middle">
                  <strong><input type="image" src="/images/cooperation/cooperation_r3.gif" style="width:109px; height:30px;" />&nbsp;&nbsp;&nbsp;&nbsp;</strong>
                </td>
                <td align="left"><strong>
                    <label for="textfield"><em>Get a quick reply with in 24 hours</em></label>
                  </strong></td>
              </tr>
            </table>
          <?php $this->endWidget(); ?>
        </div>
        <div class="d">
          <strong>
            <!-- MENU-LOCATION=NONE -->
            <!-- MENU-LOCATION=NONE --></strong></div></div>


