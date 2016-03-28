<img src="/images/neworder-banner01.jpg" class="img-responsive"  />
<div class="container ">
	<div class="adoption-diy">
		<div class="adoption-diy-top">
			<h2  class="page-title13">Tailor-made your tour</h2>
			<p>Couldn't find your favorite travel routes in our ready-made itineraries? Whether you wish to modify a tour package on our website or have a special holiday built from scratch, the local travel experts at Lead to China can customize the ideal itinerary for you.Let us know what we can do for you in the form below. Please try to give as many details as possible-even estimates are helpful. We do our best to reply to you in a few hours, maximum 24 hours!<br />
				Mandatory fields are marked with an asterisk (*).</p>
		</div>
		<form id="adoptionOrder" method="post" name="adoptionOrder" action="<?php echo Yii::app()->createUrl('order/saveDiyOrder');?>" onsubmit="return checksubmit()">
			<div class="adoptionOrder-block">
				<h3>1.&nbsp;	Destinations you want to visit</h3>
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
							<li style="width:100%;">
								<input type="checkbox" value="Yangtze Cruise" name="city[]" class="form-checkbox" />
								<span>Yangtze Cruise</span>  </li>
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
				<h3>2.&nbsp;	Your trip details</h3>
				<section class="clearfix">
					<div class="table-header">
						<label>estimated travel time</label>
						<span class="must">*</span> </div>
					<div class="table-body">
						<input id="Order_travel_date" class="calendarIcon Wdate" type="text" placeholder=" mm/dd/yyyy"  name="starting_date" autocomplete="off">
					</div>
				</section>
				<section class="clearfix">
					<div class="table-header">
						<label>Length of Stay</label>
						<span class="must">*</span> </div>
					<div class="table-body">
						<input type="text" id="travel_duration" name="Duration" value="" placeholder="e.g. 10 days" />
					</div>
				</section>
				<section class="clearfix">
					<div class="table-header">
						<label>Number of Adults</label>
						<span class="must">*</span> </div>
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
						<span class="must">*</span> </div>
					<div class="table-body">
						<select class="form-select02" name="star">
							<option value="" selected="selected"></option>
							<option value="5 star" >Top 5 Star (Above USD250 per night per room)</option>
							<option value="5 star">Standard 5 Star (USD150 to USD250 per night per room)</option>
							<option value="4 star">Comfortable Hotel: 4 star (USD 80 to USD 100 per night per room)</option>
							<option value="3 star">Economy Hotel: 3 star (USD 50 to USD 70 per night per room)</option>
							<option value="No Need">Booked on my own</option>
						</select>
					</div>
				</section>
				<section class="clearfix">
					<div class="table-header">
						<label>per person budget</label>
						<br />
						<span  style=" color:#555; font-size:12px; text-transform:capitalize;">(Exclude International Airfare)</span> </div>
					<div class="table-body">
						<select class="form-select02" name="per_person_budget">
							<option value="_none">- Select a value -</option>
							<option value="500-1000">Per Person: $500 - $1000 USD</option>
							<option value="1000-1500">Per Person: $1000 - $1500 USD</option>
							<option value="1500-2000">Per Person: $1500 - $2000 USD</option>
							<option value="2000-2500">Per Person: $2000 - $2500 USD</option>
							<option value="2500-3000">Per Person: $2500 - $3000 USD</option>
							<option value="3000-4000">Per Person: $3000 - $4000 USD</option>
							<option value="4000-5000">Per Person: $4000 - $5000 USD</option>
							<option value="Over $5000">Per Person: Over $5000 USD</option>
						</select>
					</div>
				</section>
				<section class="clearfix">
					<div class="table-header">
						<label>is budget flexible?</label>
					</div>
					<div class="table-body">
						<select  class="form-select02"  name="budget_flexible">
							<option value="">- Select a value -</option>
							<option value="The above is my maximum budget">The above is my maximum budget</option>
							<option value="Flexible: I can increase up to 20% if needed">Flexible: I can increase up to 20% if needed</option>
							<option value="Very flexible: Plan me the trip I want. Do not focus on specific budget">Very flexible: Plan me the trip I want. Do not focus on specific budget</option>
						</select>
					</div>
				</section>
				<section class="clearfix">
					<div class="table-header">
						<label>ANY SPECIFIC REQUESTS?</label>
					</div>
					<div class="table-body">
						<textarea class="form-text" style="color:#ACA899;" onfocus="if(this.value.indexOf('bullet train preferred')!=-1){this.value =''; this.style.color = '#000000'; }" onblur="if(this.value == ''){this.style.color = '#ACA899'; this.value = 'e.g. culture, food, taboos, adventure, bullet train preferred, etc.'; }" id="Other_meals" name="want_see_and_do">e.g. culture, food, taboos, adventure, bullet train preferred, etc.
						</textarea>
					</div>
				</section>
				<h3>3.&nbsp;	Contact information</h3>
				<section class="clearfix">
					<div class="table-header">
						<label>Full Name</label>
						<span class="must">*</span> </div>
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
						<span class="must">*</span> </div>
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
					
					<div class="table-body">
						<div class="link">
							<input type="submit" class="large-button" id="BookNowBtn" value="Get My Trip Planned">
							<p class="description">We will reply in 12 working hours!</p>
							<br />
						</div>
					</div>
				</section>
			</div>
		</form>
	</div>
</div>
<script src="/js/jqueryUi/jquery.ui.core.js" type="text/javascript" language="javascript"></script>
<script src="/js/jqueryUi/jquery.ui.datepicker.js" type="text/javascript" language="javascript"></script>
<link href="/js/jqueryUi/jquery.ui.core.css" type="text/css" rel="stylesheet">
<script>
	$("#Order_travel_date").datepicker({
	  changeMonth: true,
	  numberOfMonths: 1,
	});
function checksubmit(){
	var reg = /^[^\@]+@.*\.[a-z]{2,6}$/i;
	var status = false;
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
