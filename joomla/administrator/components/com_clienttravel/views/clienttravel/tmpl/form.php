<?php defined('_JEXEC') or die('Restricted access'); ?>

<?php
	$cid = JRequest::getVar( 'cid', array(0), '', 'array' );
	$edit=JRequest::getVar( 'edit', true );
	JArrayHelper::toInteger($cid, array(0));
	JRequest::setVar( 'hidemainmenu', 1 );
	$editor = &Jfactory::getEditor();

	$text = ( $edit ? JText::_( 'Edit' ) : JText::_( 'New' ) );

	JToolBarHelper::title(  JText::_( '客户行程管理' ).': <small><small>[ ' . $text.' ]</small></small>' );
	//JToolBarHelper::Preview('index.php?option=com_cntours&controller=cntours&cid[]='.$cid[0]);
	JToolBarHelper::save();
	//JToolBarHelper::apply();
	if ($edit) {
		// for existing items the button is renamed `close`
		JToolBarHelper::cancel( 'cancel', 'Close' );
	} else {
		JToolBarHelper::cancel();
	}
	JToolBarHelper::help( 'screen.cntours.edit' );
?>

<?php
JFilterOutput::objectHTMLSafe( $this->poll, ENT_QUOTES );
$cparams = JComponentHelper::getParams ('com_media');
?>
<script language="javascript" type="text/javascript">
	function submitbutton(pressbutton) {

		var form = document.adminForm;
		if (pressbutton == 'cancel') {
			submitform( pressbutton );
			return;
		}
		// do field validation


			submitform( pressbutton );
		
	}
</script>



<script type="text/javascript">
function HS_DateAdd(interval,number,date){
	number = parseInt(number);
	if (typeof(date)=="string"){var date = new Date(date.split("-")[0],date.split("-")[1],date.split("-")[2])}
	if (typeof(date)=="object"){var date = date}
	switch(interval){
	case "y":return new Date(date.getFullYear()+number,date.getMonth(),date.getDate()); break;
	case "m":return new Date(date.getFullYear(),date.getMonth()+number,checkDate(date.getFullYear(),date.getMonth()+number,date.getDate())); break;
	case "d":return new Date(date.getFullYear(),date.getMonth(),date.getDate()+number); break;
	case "w":return new Date(date.getFullYear(),date.getMonth(),7*number+date.getDate()); break;
	}
}
function checkDate(year,month,date){
	var enddate = ["31","28","31","30","31","30","31","31","30","31","30","31"];
	var returnDate = "";
	if (year%4==0){enddate[1]="29"}
	if (date>enddate[month]){returnDate = enddate[month]}else{returnDate = date}
	return returnDate;
}

function WeekDay(date){
	var theDate;
	if (typeof(date)=="string"){theDate = new Date(date.split("-")[0],date.split("-")[1],date.split("-")[2]);}
	if (typeof(date)=="object"){theDate = date}
	return theDate.getDay();
}
function HS_calender(){
	var lis = "";
	var style = "";
	style +="<style type='text/css'>";
	style +=".calender { width:170px; height:auto; font-size:12px; margin-right:14px; background:url(calenderbg.gif) no-repeat right center #fff; border:1px solid #397EAE; padding:1px}";
	style +=".calender ul {list-style-type:none; margin:0; padding:0;}";
	style +=".calender .day { background-color:#EDF5FF; height:20px;}";
	style +=".calender .day li,.calender .date li{ float:left; width:14%; height:20px; line-height:20px; text-align:center}";
	style +=".calender li a { text-decoration:none; font-family:Tahoma; font-size:11px; color:#333}";
	style +=".calender li a:hover { color:#f30; text-decoration:underline}";
	style +=".calender li a.hasArticle {font-weight:bold; color:#f60 !important}";
	style +=".lastMonthDate, .nextMonthDate {color:#bbb;font-size:11px}";
	style +=".selectThisYear a, .selectThisMonth a{text-decoration:none; margin:0 2px; color:#000; font-weight:bold}";
	style +=".calender .LastMonth, .calender .NextMonth{ text-decoration:none; color:#000; font-size:18px; font-weight:bold; line-height:16px;}";
	style +=".calender .LastMonth { float:left;}";
	style +=".calender .NextMonth { float:right;}";
	style +=".calenderBody {clear:both}";
	style +=".calenderTitle {text-align:center;height:20px; line-height:20px; clear:both}";
	style +=".today { background-color:#ffffaa;border:1px solid #f60; padding:2px}";
	style +=".today a { color:#f30; }";
	style +=".calenderBottom {clear:both; border-top:1px solid #ddd; padding: 3px 0; text-align:left}";
	style +=".calenderBottom a {text-decoration:none; margin:2px !important; font-weight:bold; color:#000}";
	style +=".calenderBottom a.closeCalender{float:right}";
	style +=".closeCalenderBox {float:right; border:1px solid #000; background:#fff; font-size:9px; width:11px; height:11px; line-height:11px; text-align:center;overflow:hidden; font-weight:normal !important}";
	style +="</style>";

	var now;
	if (typeof(arguments[0])=="string"){
		selectDate = arguments[0].split("-");
		var year = selectDate[0];
		var month = parseInt(selectDate[1])-1+"";
		var date = selectDate[2];
		now = new Date(year,month,date);
	}else if (typeof(arguments[0])=="object"){
		now = arguments[0];
	}
	var lastMonthEndDate = HS_DateAdd("d","-1",now.getFullYear()+"-"+now.getMonth()+"-01").getDate();
	var lastMonthDate = WeekDay(now.getFullYear()+"-"+now.getMonth()+"-01");
	var thisMonthLastDate = HS_DateAdd("d","-1",now.getFullYear()+"-"+(parseInt(now.getMonth())+1).toString()+"-01");
	var thisMonthEndDate = thisMonthLastDate.getDate();
	var thisMonthEndDay = thisMonthLastDate.getDay();
	var todayObj = new Date();
	today = todayObj.getFullYear()+"-"+todayObj.getMonth()+"-"+todayObj.getDate();
	
	for (i=0; i<lastMonthDate; i++){  // Last Month's Date
		lis = "<li class='lastMonthDate'>"+lastMonthEndDate+"</li>" + lis;
		lastMonthEndDate--;
	}
	for (i=1; i<=thisMonthEndDate; i++){ // Current Month's Date

		if(today == now.getFullYear()+"-"+now.getMonth()+"-"+i){
			var todayString = now.getFullYear()+"-"+(parseInt(now.getMonth())+1).toString()+"-"+i;
			lis += "<li><a href=javascript:void(0) class='today' onclick='_selectThisDay(this)' title='"+now.getFullYear()+"-"+(parseInt(now.getMonth())+1)+"-"+i+"'>"+i+"</a></li>";
		}else{
			lis += "<li><a href=javascript:void(0) onclick='_selectThisDay(this)' title='"+now.getFullYear()+"-"+(parseInt(now.getMonth())+1)+"-"+i+"'>"+i+"</a></li>";
		}
		
	}
	var j=1;
	for (i=thisMonthEndDay; i<6; i++){  // Next Month's Date
		lis += "<li class='nextMonthDate'>"+j+"</li>";
		j++;
	}
	lis += style;

	var CalenderTitle = "<a href='javascript:void(0)' class='NextMonth' onclick=HS_calender(HS_DateAdd('m',1,'"+now.getFullYear()+"-"+now.getMonth()+"-"+now.getDate()+"'),this) title='Next Month'>&raquo;</a>";
	CalenderTitle += "<a href='javascript:void(0)' class='LastMonth' onclick=HS_calender(HS_DateAdd('m',-1,'"+now.getFullYear()+"-"+now.getMonth()+"-"+now.getDate()+"'),this) title='Previous Month'>&laquo;</a>";
	CalenderTitle += "<span class='selectThisYear'><a href='javascript:void(0)' onclick='CalenderselectYear(this)' title='Click here to select other year' >"+now.getFullYear()+"</a></span>年<span class='selectThisMonth'><a href='javascript:void(0)' onclick='CalenderselectMonth(this)' title='Click here to select other month'>"+(parseInt(now.getMonth())+1).toString()+"</a></span>月"; 

	if (arguments.length>1){
		arguments[1].parentNode.parentNode.getElementsByTagName("ul")[1].innerHTML = lis;
		arguments[1].parentNode.innerHTML = CalenderTitle;

	}else{
		var CalenderBox = style+"<div class='calender'><div class='calenderTitle'>"+CalenderTitle+"</div><div class='calenderBody'><ul class='day'><li>日</li><li>一</li><li>二</li><li>三</li><li>四</li><li>五</li><li>六</li></ul><ul class='date' id='thisMonthDate'>"+lis+"</ul></div><div class='calenderBottom'><a href='javascript:void(0)' class='closeCalender' onclick='closeCalender(this)'>×</a><span><span><a href=javascript:void(0) onclick='_selectThisDay(this)' title='"+todayString+"'>Today</a></span></span></div></div>";
		return CalenderBox;
	}
}
function _selectThisDay(d){
	var boxObj = d.parentNode.parentNode.parentNode.parentNode.parentNode;
		boxObj.targetObj.value = d.title;
		boxObj.parentNode.removeChild(boxObj);
}
function closeCalender(d){
	var boxObj = d.parentNode.parentNode.parentNode;
		boxObj.parentNode.removeChild(boxObj);
}

function CalenderselectYear(obj){
		var opt = "";
		var thisYear = obj.innerHTML;
		for (i=1970; i<=2020; i++){
			if (i==thisYear){
				opt += "<option value="+i+" selected>"+i+"</option>";
			}else{
				opt += "<option value="+i+">"+i+"</option>";
			}
		}
		opt = "<select onblur='selectThisYear(this)' onchange='selectThisYear(this)' style='font-size:11px'>"+opt+"</select>";
		obj.parentNode.innerHTML = opt;
}

function selectThisYear(obj){
	HS_calender(obj.value+"-"+obj.parentNode.parentNode.getElementsByTagName("span")[1].getElementsByTagName("a")[0].innerHTML+"-1",obj.parentNode);
}

function CalenderselectMonth(obj){
		var opt = "";
		var thisMonth = obj.innerHTML;
		for (i=1; i<=12; i++){
			if (i==thisMonth){
				opt += "<option value="+i+" selected>"+i+"</option>";
			}else{
				opt += "<option value="+i+">"+i+"</option>";
			}
		}
		opt = "<select onblur='selectThisMonth(this)' onchange='selectThisMonth(this)' style='font-size:11px'>"+opt+"</select>";
		obj.parentNode.innerHTML = opt;
}
function selectThisMonth(obj){
	HS_calender(obj.parentNode.parentNode.getElementsByTagName("span")[0].getElementsByTagName("a")[0].innerHTML+"-"+obj.value+"-1",obj.parentNode);
}
function HS_setDate(inputObj){
	var calenderObj = document.createElement("span");
	calenderObj.innerHTML = HS_calender(new Date());
	calenderObj.style.position = "absolute";
	calenderObj.targetObj = inputObj;
	inputObj.parentNode.insertBefore(calenderObj,inputObj.nextSibling);
}
  </script>

<?php $temp=explode(".",$this->options['0']->c_name);
		$client_name=$temp[1];
		$client_pri=$temp[0];
		if($client_pri=="Mr"){
			$mrsel="selected";
			$mssel="";
		}else{
			$mssel="selected";
			$mrsel="";
		}
?>
<form action="index.php" method="post" name="adminForm" enctype="multipart/form-data">

<div class="col width-55">
	<fieldset class="adminform">
	<legend><?php echo JText::_( 'Options' ); ?></legend>
	<table class="admintable">
	
		<tr>
			<td class="key">
				<label for="polloption">
					行程名称
				</label>
			</td>
			<td>
			<input type="text" name="package_name" id="package_name" maxlength=255 value="<?php echo $this->options['0']->package_name;?>" size=60>
				
			</td>
		</tr>
		
		<tr>
			<td class="key" id="packname">
				<label  for="polloption">
					客户全名
				</label>
			</td>
			<td id="dis_name">
		<select class="contactform" name="Gender" id="Gender" style="width:54px;">
									<option value="Mr." <?php echo $mrsel;?>>Mr.</option>
									<option value="Ms." <?php echo $mssel;?>>Ms.</option>
								</select>
				<input class="inputbox" type="text" name="c_name" id="c_name" value="<?php echo $client_name;?>" size="60" />
			</td>
		</tr>

		<tr>
			<td class="key" id="packname">
				<label  for="polloption">
					客户EMAIL
				</label>
			</td>
			<td id="dis_name">
		
				<input class="inputbox" type="text" name="c_email" maxlength=255 id="c_email" value="<?php echo $this->options['0']->c_email;?>" size="60" />
			</td>
		</tr>

		<tr>
			<td class="key" id="packname">
				<label  for="polloption">
					下单日期
				</label>
			</td>
			<td id="dis_name">
		
				<input  type="text" name="order_date" id="order_date" value="<?php echo $this->options['0']->order_date;?>" style="width:70px" onfocus="HS_setDate(this)" />
			</td>
		</tr>


		<tr>
			<td class="key" id="packname">
				<label  for="polloption">
					开始日期
				</label>
			</td>
			<td id="dis_name">
		
				<input style="width:70px" onfocus="HS_setDate(this)" type="text" name="start_date" id="start_date" value="<?php echo $this->options['0']->start_date;?>" size="60" />
			</td>
		</tr>

		<tr>
			<td class="key" id="packname">
				<label  for="polloption">
					结束日期
				</label>
			</td>
			<td id="dis_name">
		
				<input style="width:70px" onfocus="HS_setDate(this)" type="text" name="end_date" id="end_date" value="<?php echo $this->options['0']->end_date;?>" size="60" />
			</td>
		</tr>


		<tr>
			<td class="key">
				<label for="polloption">
					人数
				</label>
			</td>
			<td>
		
				<input class="inputbox" type="text" name="pax" id="pax" value="<?php echo $this->options['0']->pax;?>" size="60" />
			</td>
		</tr>

		<tr>
			<td class="key">
				<label for="polloption">
					行程代码
				</label>
			</td>
			<td>
		
				<input class="inputbox" type="text" name="tour_code" id="tour_code" value="<?php echo $this->options['0']->tour_code;?>" size="60" />
			</td>
		</tr>

		<tr>
			<td class="key">
				<label for="polloption">
					行程路线
				</label>
			</td>
			<td>
			<input class="inputbox" type="text" name="route" maxlength=255 id="route" value="<?php echo $this->options['0']->route;?>" size="60" />		
				
			</td>
		</tr>
	
		<tr>
			<td class="key">
				<label for="polloption">
					天数
				</label>
			</td>
			<td>
			<input type="text" name="days" id="days" value="<?php echo $this->options[0]->days?>">
				
			</td>
		</tr>
		<tr>
			<td class="key">
				价格区间
			</td>
			<td>
				<input type="text" name="minprice" id="minprice" size=10 value="<?php echo $this->options[0]->minprice?>">至				<input type="text" name="maxprice" id="maxprice" size=10 value="<?php echo $this->options[0]->maxprice?>">美元
				
			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="polloption">
					行程特色描述
				</label>
			</td>
			<td>
			<?php 	echo $editor->display( 'tour_intro',  htmlspecialchars($this->options['0']->tour_intro,ENT_QUOTES), '300', '150', '60', '20', array('pagebreak', 'readmore'));?>
				
			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="polloption">
					Price Includes:
				</label>
			</td>
			<td>
			<?php 	echo $editor->display( 'pinclude',  htmlspecialchars($this->options['0']->pinclude,ENT_QUOTES), '300', '150', '60', '20', array('Notice', 'readmore'));?>
				
			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="polloption">
					Warm Notice:
				</label>
			</td>
			<td>
			<?php 	echo $editor->display( 'notice',  htmlspecialchars($this->options['0']->notice,ENT_QUOTES), '300', '150', '60', '20', array('Notice', 'readmore'));?>
				
			</td>
		</tr>
		<!--tr>
			<td class="key">
				<label for="polloption">
					图片ALT(说明)
				</label>
			</td>
			<td>

			<input type="text" name="pic_alt" id="pic_alt" value="<?php echo $this->options['0']->pic_alt;?>" maxlength=255 size=50>
				
			</td>
		</tr>	
		<tr>
			<td class="key">
				<label for="polloption">
					图片
				</label>
			</td>
			<td>
			<input type="file" name="ufile" id="ufile" size=50>
				
			</td>
		</tr-->
		
		<tr>

			<td colspan=2>
			<?php echo $this->imgstr; ?>
				
			</td>
		</tr>
	</table>
	</fieldset>
</div>
<div class="col width-35">
	<fieldset class="adminform">
	<legend><?php echo JText::_( 'Details' ); ?></legend>
	<table class="admintable">
		<tr>
			<td width="110" class="key">
				<label for="title">
					页面Title:
				</label>
			</td>
			<td>
			<textarea name="seo_title" id="seo_title" cols="40" rows="5"><?php echo $this->options[0]->seo_title; ?></textarea>
				<!--input class="inputbox" type="text" name="seo_title" id="seo_title" size="60" value="" /-->
			</td>
		</tr>
		<tr>
			<td width="110" class="key">
				<label for="alias">
					页面Key:
				</label>
			</td>
			<td>
				<textarea name="seo_key" id="seo_key" cols="40" rows="5"><?php echo $this->options[0]->seo_key; ?></textarea>

			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="lag">
					页面Description:
				</label>
			</td>
			<td>
				<textarea name="seo_description" id="seo_description" cols="40" rows="5"><?php echo $this->options[0]->seo_description; ?></textarea>
			
			</td>
		</tr>
		<!--tr>
			<td class="key">
				<label for="lag">
					URL:
				</label>
			</td>
			<td>
				<input type="text" name="url" id="url" size=50 maxlength=255 ><?php echo $this->options[0]->url; ?></textarea>
			
			</td>
		</tr-->
	</table>
	</fieldset>
</div>
<div class="clr"></div>

	<input type="hidden" name="task" value="" />
	<input type="hidden" name="option" value="com_clienttravel" />

	<input type="hidden"  name="id" value="<?php echo $this->options[0]->id; ?>" />
	
	<input type="hidden" name="textfieldcheck" value="<?php echo $n; ?>" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>
