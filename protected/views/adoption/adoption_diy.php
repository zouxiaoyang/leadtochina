<img src="/images/adoption-diybanner01.jpg" class="img-responsive"  />
<div class="container ">
  <div class="adoption-diy">
    <div class="adoption-diy-top">
    <h2  class="page-title13">Creating Your Trip</h2>
      <p>Designing your ideal itinerary is a harmonious blend of your ideas and desires and our expertise. Though we offer very popular set tours, it is often the case that families need to travel at other times during the year or for shorter periods of time. Lead to China is now offering the ability to tailor a completely personalized heritage tour to your family's travel wishes.
		</p>
    </div>
    <form id="adoptionOrder" method="post" name="adoptionOrder" action="<?php echo Yii::app()->createUrl('adoption/saveOrder');?>" onsubmit="return checksubmit()">
      <div class="adoptionOrder-block">
        <h3>1.&nbsp;	Orphanage Visit</h3>
        <section class="clearfix">
          <div class="table-header">
            <label>Orphanage Name</label>
            <span class="must">*</span>
          </div>
          <div class="table-body">
            <input type="text" name="orphange_nanme" id="orphange_nanme" value="" />
          </div>
        </section>
        <section class="clearfix">
          <div class="table-header">
            <label>Desired Experiences</label>
          </div>
          <div class="table-body">
            <ul class="list01">
              <li>
                <input type="checkbox" name="desired_experience[]" value="Visit the foster family" class="form-checkbox" />
                <span>Visit the foster family</span> </li>
              <li>
                <input type="checkbox" name="desired_experience[]" value="Visit the old site of orphanage" class="form-checkbox" />
                <span>Visit the old site of orphanage</span> </li>
              <li>
                <input type="checkbox" name="desired_experience[]" value="Visit the finding site" class="form-checkbox" />
                <span>Visit the finding site</span> </li>
              <li>
                <input type="checkbox" name="desired_experience[]" value="Sightseeing around the Birth Place" class="form-checkbox" />
                <span>Sightseeing around the Birth Place</span> </li>
              <li>
                <input type="checkbox" name="desired_experience[]" value="Donate to the orphanage" class="form-checkbox" />
                <span>Donate to the orphanage</span> </li>
              <li>
                <input type="checkbox" name="desired_experience[]" value="Buy gift for the orphanage" class="form-checkbox" />
                <span>Buy gift for the orphanage</span>  </li>
            </ul>
          </div>
        </section>
        <h3>2.&nbsp;	Destinations you want to visit</h3>
        <section class="clearfix">
          <div class="table-header">
            <label>Desired Experiences</label>
          </div>
          <div class="table-body">
            <ul class="list02">
              <li>
                <input type="checkbox" value="Beijing" name="city[]" class="form-checkbox" />
                <span>Beijing</span> </li>
              <li>
                <input type="checkbox" value="Xian" name="city[]" class="form-checkbox" />
                <span>Xian</span> </li>
              <li>
                <input type="checkbox" value="Shanghai" name="city[]" class="form-checkbox" />
                <span>Shanghai</span> </li>
              <li>
                <input type="checkbox" value="Chengdu" name="city[]" class="form-checkbox" />
                <span>Chengdu</span> </li>
              <li>
                <input type="checkbox" value="Guilin" name="city[]" class="form-checkbox" />
                <span>Guilin</span> </li>
              <li>
                <input type="checkbox" value="Yangshuo" name="city[]" class="form-checkbox" />
                <span>Yangshuo</span>  </li>
              <li>
                <input type="checkbox" value="Yangtze Cruise" name="city[]" class="form-checkbox" />
                <span>Yangtze Cruise</span>  </li>
              <li>
                <input type="checkbox" value="Hangzhou" name="city[]" class="form-checkbox" />
                <span>Hangzhou</span>  </li>
              <li>
                <input type="checkbox" value="Suzhou" name="city[]" class="form-checkbox" />
                <span>Suzhou</span>  </li>
              <li>
                <input type="checkbox" value="Tibet" name="city[]" class="form-checkbox" />
                <span>Tibet</span>  </li>
              <li>
                <input type="checkbox" value="Hong Kong" name="city[]" class="form-checkbox" />
                <span>Hong Kong</span>  </li>
            </ul>
          </div>
        </section>
        <section class="clearfix">
          <div class="table-header">
            <label>more destinattions?</label>
          </div>
          <div class="table-body">
            <textarea class="form-text" style="color:#ACA899;" onfocus="if(this.value.indexOf('more destinattions')!=-1){this.value =''; this.style.color = '#000000'; }" onblur="if(this.value == ''){this.style.color = '#ACA899'; this.value = 'more destinattions?'; }" id="Other" name="other_city">more destinattions?
			</textarea>
          </div>
        </section>
        <h3>3.&nbsp;	Featured activities for family tour</h3>
        <section class="clearfix">
          <div class="table-header">
            <label></label>
          </div>
          <div class="table-body">
            <ul class="list01">
              <li>
                <input type="checkbox" class="form-checkbox" name="activities_for_families[]" value="Make Dumplings" />
                <span>Make Dumplings</span> </li>
              <li>
                <input type="checkbox" class="form-checkbox" name="activities_for_families[]" value="Visit a local school" />
                <span>Visit a local school</span></li>
              <li>
                <input type="checkbox" class="form-checkbox" name="activities_for_families[]" value="Countryside Biking" />
                <span>Countryside Biking</span></li>
              <li>
                <input type="checkbox" class="form-checkbox" name="activities_for_families[]" value="Visit a local family" />
                <span>Visit a local family</span></li>
              <li>
                <input type="checkbox" class="form-checkbox" name="activities_for_families[]" value="Chinese Calligraphy" />
                <span>Chinese Calligraphy</span></li>
              <li>
                <input type="checkbox" class="form-checkbox" name="activities_for_families[]" value="Paint Panda t-shirts" />
                <span>Paint Panda t-shirts</span></li>
              <li>
                <input type="checkbox" class="form-checkbox" name="activities_for_families[]" value="Makeup for the Beijing Opera" />
                <span>Makeup for the Beijing Opera</span></li>
              <li>
                <input type="checkbox" class="form-checkbox" name="activities_for_families[]" value="Visit the Giant Panda" />
                <span>Visit the Giant Panda</span></li>
              <li>
                <input type="checkbox" class="form-checkbox" name="activities_for_families[]" value="Learn to cook Chinese dishes" />
                <span>Learn to cook Chinese dishes</span></li>
              <li>
                <input type="checkbox" class="form-checkbox" name="activities_for_families[]" value="Watch a Kungfu Show" />
                <span>Watch a Kungfu Show</span></li>
              <li>
                <input type="checkbox" class="form-checkbox" name="activities_for_families[]" value="Make and Fly Kite" >
                <span>Make and Fly Kite</span></li>
              <li>
                <input type="checkbox" class="form-checkbox" name="activities_for_families[]" value="Watch an Acrobatic Show" />
                <span>Watch an Acrobatic Show</span></li>
            </ul>
          </div>
        </section>
        <h3>4.&nbsp;	Your trip details</h3>
        <section class="clearfix">
          <div class="table-header">
            <label>estimated travel time</label>
            <span class="must">*</span>
          </div>
          <div class="table-body">
            <input id="Order_travel_date" class="calendarIcon Wdate" type="text" placeholder=" mm/dd/yyyy"  name="starting_date" autocomplete="off">
          </div>
        </section>
        <section class="clearfix">
          <div class="table-header">
            <label>Length of Stay</label>
            <span class="must">*</span>
          </div>
          <div class="table-body">
            <input type="text" id="travel_duration" name="Duration" value="" placeholder="e.g. 10 days" />
          </div>
        </section>
        <section class="clearfix">
          <div class="table-header">
            <label>Number of Adults</label>
            <span class="must">*</span>
          </div>
          <div class="table-body">
            <ul class="list03">
              <li> <i>Adults(>11 years old)</i>
                <select class="form-select01" name="adults">
                  <option  selected="selected" value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                </select>
              </li>
              <li> <i>Children(2-11 years old)</i>
                <select class="form-select01" name="children">
                  <option selected="selected" value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                </select>
              </li>
              <li> <i> Babies(< 2 years old)</i>
                <select class="form-select01" name="infant">
                  <option selected="selected" value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                </select>
              </li>
            </ul>
          </div>
        </section>
        <section class="clearfix">
          <div class="table-header">
            <label>Hotel Class</label>
            <span class="must">*</span>
          </div>
          <div class="table-body">
            <select class="form-select02" name="star">
              <option value="5 star" selected="selected">Top 5 Star (Above USD250 per night per room)</option>
              <option value="5 star">Standard 5 Star (USD150 to USD250 per night per room)</option>
              <option value="4 star">Comfortable Hotel: 4 star (USD 80 to USD 100 per night per room)</option>
              <option value="3 star">Economy Hotel: 3 star (USD 50 to USD 70 per night per room)</option>
              <option value="No Need">Booked on my own</option>
           </select>
          </div>
        </section>
        <section class="clearfix">
          <div class="table-header">
            <label>more idea on hotel</label>
          </div>
          <div class="table-body">
             <textarea class="form-text" style="color:#ACA899;" onfocus="if(this.value.indexOf('Stay at the hotel you had been to')!=-1){this.value =''; this.style.color = '#000000'; }" onblur="if(this.value == ''){this.style.color = '#ACA899'; this.value = 'Stay at the hotel you had been to? Need the connecting room?'; }" id="other_hotel" name="other_hotel">Stay at the hotel you had been to? Need the connecting room?
			</textarea>
          </div>
        </section>
        <section class="clearfix">
          <div class="table-header">
            <label>Meal Plan</label>
          </div>
          <div class="table-body">
             <textarea class="form-text" style="color:#ACA899;" onfocus="if(this.value.indexOf('Tell us your special requirements')!=-1){this.value =''; this.style.color = '#000000'; }" onblur="if(this.value == ''){this.style.color = '#ACA899'; this.value = 'Tell us your special requirements on meals.'; }" id="Other_meals" name="other_meals">Tell us your special requirements on meals.
			</textarea>
          </div>
        </section>
        <h3>5.&nbsp;	Contact information</h3>
        <section class="clearfix">
          <div class="table-header">
            <label>Full Name</label>
            <span class="must">*</span>
          </div>
          <div class="table-body">
            <select class="form-select01" name="gender">
              <option value="Mr."> Mr.</option>
              <option value="Ms."> Ms.</option>
            </select>
            <input type="text" class="Personal_field" id="fullName" name="fullName" />
          </div>
        </section>
        <section class="clearfix">
          <div class="table-header">
            <label>Email</label>
            <span class="must">*</span>
          </div>
          <div class="table-body">
            <input type="text" id="email" name="email" value=""/>
          </div>
        </section>
        <section class="clearfix">
          <div class="table-header">
            <label>Backup Email</label>
            <!-- <span class="must">*</span> -->
          </div>
          <div class="table-body">
            <input type="text" name="other_email" value="" />
          </div>
        </section>
        <section class="clearfix">
          <div class="table-header">
            <label>Nationality</label>
          </div>
          <div class="table-body">
            <input type="text" name="nationality" value="" />
          </div>
        </section>
        <section class="clearfix">
          <div class="table-header">
            <label>Contact Phone Number</label>
          </div>
          <div class="table-body">
            <input type="text" name="phone" value="" />
          </div>
        </section>
        <br />
        <section class="clearfix">
          	<div class="table-header">
            <label></label>
          </div>
          <div class="table-body">
            <div class="link">
              <input type="submit" class="large-button" id="BookNowBtn" value="Get My Trip Planned">
              <p class="description">We will reply in 12 working hours!</p>
              <br /><br /><br /><br /><br /><br />
            </div>
           </div>
        </section>
      </div>
    </form>
  </div>
</div>
<script src="http://cdn.bootcss.com/jquery-browser/0.0.8/jquery.browser.min.js"></script>
<script src="/js/jqueryUi/jquery.ui.core.js" type="text/javascript" language="javascript"></script>
<script src="/js/jqueryUi/jquery.ui.datepicker.js" type="text/javascript" language="javascript"></script>
<link href="/js/jqueryUi/jquery.ui.core.css" type="text/css" rel="stylesheet">
<script>
	$("#Order_travel_date").datepicker({
	  changeMonth: true,
	  numberOfMonths: 2,
	});
function checksubmit(){
	var reg = /^[^\@]+@.*\.[a-z]{2,6}$/i;
	var status = false;
	if(!$('#orphange_nanme').val()){
		status=true;
		$('#orphange_nanme').css('border','1px dotted #F00');
	}else{
		$('#orphange_nanme').css('border','0 none');
	}
	if(!$('#Order_travel_date').val()){
		status=true;
		$('#Order_travel_date').css('border','1px dotted #F00');
	}else{
		$('#Order_travel_date').css('border','0 none');
	}
	if(!$('#travel_duration').val()){
		status=true;
		$('#travel_duration').css('border','1px dotted #F00');
	}else{
		$('#travel_duration').css('border','0 none');
	}
	if(!$('#fullName').val()){
		status=true;
		$('#fullName').css('border','1px dotted #F00');
	}else{
		$('#fullName').css('border','0 none');
	}
	if(!reg.test($('#email').val())){
		status=true;
		$('#email').css('border','1px dotted #F00');
	}else{
		$('#email').css('border','0 none');
	}
	if(status){
		return false;
	}else{
	  return true;
	}
}
</script>
</script>
