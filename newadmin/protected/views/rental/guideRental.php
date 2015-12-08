<link rel="stylesheet" type="text/css" href="/travel/css/rental.css" />
<div id="content">
   <div id="menu-home"><strong>You are here:</strong> <a href="/">Home</a> <a href="/beijing/tours/">Beijing Tour</a> Hire Tour Guide</div>
   <div id="main">
      <div id="rental">
           <div class="txt">
              <h2>Beijing Tour Guide Rental</h2>
              <p>Besides Beijing Tours, Beijing Car Rental Services, HFV also offers Tour Guide Rental services for international tourists who may have trouble in shopping, dining, finding entertainment or conducting business in Beijing China. With HFV tour guide, you are certain to have a better Beijing travel experience. All guides we offer are well trained and have the following skills: fluent English (other small languages please check with HFC Trip Advisor), knowledgeable, communicative and easygoing. Moreover, all of our tour guides are paid with fixed salary, which means they have mind to give you sincere services.</p>
           </div>
           <div class="how">
               <table cellspacing="0" cellpadding="0">
                   <tr>
                      <td colspan="5" class="top">How HFV Tour Guides help you?</td>
                   </tr>
                   <tr>
                      <td colspan="5" style="text-align:left; padding:4px 4px 12px 12px;">
                      	<p>1 Tour guide: They are knowledgeable on Beijing's history, culture, transportation and tourist sites.<br />
                        2 Shopping guide: They offer the best Beijing shopping solutions by giving you advice on purchases and assist in bargaining with real things.<br />
                        3 Dining guide: Transportation from your hotel, provide information on Beijing cuisines and restaurants, assist you in ordering dishes, suggest activities in the area and best transport home.<br />
                        4 Entertaining guide: offer their advices on entertainment and nightlife activities, assist in your transportation and communication<br />
                        5 Language Translator: daily activities translation only</p>
                     </td>
                   </tr>
                   <tr>
                      <td colspan="5" class="top"><b>Beijing Tour Guide Quotations</b> <span>Quotation based on USD and per Group</span></td>
                   </tr>
                   <tr class="title">
                      <td width="273">Service Time :09:00 - 16:00</td>
                   <?php foreach (Rental::$guideRentalList as $v):?>
                     <td width="163"><?php echo $v;?></td>
                   <?php endforeach;?>
                 </tr>
                   <?php foreach ($guideRentalList as $v):?>
                   <?php $rentalList=unserialize($v['price_serialize']);?>
                   <tr>
                      <td><?php echo $v['name'];?></td>
                      <?php foreach ($rentalList as $v1):?>
                      <td><?php echo $v1==''?'/':$v1;?></td>
                   	  <?php endforeach;?>
                   </tr>
                   <?php endforeach;?>
               </table>
           </div>
           <div class="quick" id="orderForm">
              <h2>Quick Book or Inquiry</h2>
              <div class="clear"></div>
              <?php $this->renderPartial('_orderForm',array('model'=>$model));?>
           </div>
           <div class="note">
             <h2>Hire Beijing Tour Guide Note</h2>
             <div class="clear"></div>
             <span>
                1、Tour Guide working hours:8 hours per day<br />
                2、For one extra hour ,please pay extra charge RMB 50<br />
                3、Tipping is not included in the tour guide fees above.Not compulsory,but tipping is expected by drivers.tour guides and hotel portage.Following tipping standard is only for your referance.<br />
                Tour Guide:RMB 80 - RMB 100 per day<br />
                Driver:RMB 60 -  RMB 80 per day<br />
                Hotel Bellboy:RMB 5 -RMB 10 per room each time <br />
                4、The above quotations are subject to change due to varied circumstances. For services in other cities, please email us for specific quotations. <br/>
                5、Meals for guide are not mandatory. <br/>
                6、Above quotations exclude tips to the guide.<br/>
                7、<b>Hotline:+86-551-65355416 +86-551-65355416 </b>            
            </span>
           </div>
           <?php $this->renderPartial('_topBeijingTours');?>
      </div>
   </div>
</div>