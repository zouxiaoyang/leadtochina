<?php defined('_JEXEC') or die('Restricted access'); ?>



<?php


         $editor =& JFactory::getEditor();
      
	JToolBarHelper::title(   JText::_( 'Cruise' ).': <small><small>[编辑]</small></small>' );
	JToolBarHelper::save();
	if (!$edit)  {
		JToolBarHelper::cancel();
	} else {
		// for existing items the button is renamed `close`
		JToolBarHelper::cancel( 'cancel', 'Close' );
	}
	//JToolBarHelper::help( 'screen.cruise.edit' );
  
?>

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


<script language="javascript" type="text/javascript">
	function submitbutton(pressbutton) {
		var form = document.adminForm;
		if (pressbutton == 'cancel') {
			submitform( pressbutton );
			return;
		}

		// do field validation
		if (form.title.value == ""){
			alert( "<?php echo JText::_( 'cruise item must have a title', true ); ?>" );
		} else {
			submitform( pressbutton );
		}
	}
</script>
<style type="text/css">
	table.paramlist td.paramlist_key {
		width: 92px;
		text-align: left;
		height: 30px;
	}
</style>

<form action="index.php" method="post" name="adminForm" id="adminForm" enctype="multipart/form-data">
<div class="col width-70">
	<fieldset class="adminform">
		<legend><?php echo JText::_( 'Details' ); ?></legend>

		<table class="admintable">
		<tr>
			<td width="100" align="right" class="key">
				<label for="title">
					游轮名称:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="cruise_name" id="cruise_name" size="32" maxlength="250" value="<?php echo $this->cruise->cruise_name ;?>" />
			</td>
		</tr>
           <tr>
           <tr>
			<td width="100" align="right" class="key">
				<label for="title">
					seo_title:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="seo_title" id="seo_title" size="32" maxlength="250" value="<?php echo $this->cruise->seo_title ;?>" />
			</td>
		</tr>
           <tr>
           <tr>
			<td width="100" align="right" class="key">
				<label for="title">
					seo_key:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="seo_key" id="seo_key" size="32" maxlength="250" value="<?php echo $this->cruise->seo_key;?>" />
			</td>
		</tr>
           <tr>
           <tr>
			<td width="100" align="right" class="key">
				<label for="title">
					seo_description:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="seo_description" id="seo_description" size="32" maxlength="250" value="<?php echo $this->cruise->seo_description ;?>" />
			</td>
		</tr>
           <tr>
			<td width="100" align="right" class="key">
				<label for="title">
					游轮生产日期:
				</label>
			</td>
			<td>
                            <input  type="text" name="year_built" id="year_built" size="32" maxlength="250"  value="<?php echo $this->cruise->year_built;?>" />



			</td>
   
		</tr>
        
        
                <tr>
			<td width="100" align="right" class="key">
				<label for="title">
					<?php echo '载客人数'; ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="total_passengers" id="total_passengers" size="32" maxlength="250" value="<?php echo $this->cruise->total_passengers;?>" />
			</td>
		</tr>
                <tr>
			<td width="100" align="right" class="key">
				<label for="title">
					<?php echo '工作人员'; ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="crew" id="crew" size="32" maxlength="250" value="<?php echo $this->cruise->crew;?>" />
			</td>
		</tr>
                <tr>
			<td width="100" align="right" class="key">
				<label for="title">
					<?php echo JText::_( '游轮长度' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="length" id="length" size="32" maxlength="250" value="<?php echo $this->cruise->length;?>" />
			</td>
		</tr>
         <tr>
			<td width="100" align="right" class="key">
				<label for="title">
					<?php echo JText::_( '游轮宽度' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="width" id="width" size="32" maxlength="250" value="<?php echo $this->cruise->width;?>" />
			</td>
		</tr>
          <tr>
			<td width="100" align="right" class="key">
				<label for="title">
					<?php echo JText::_( '上行旺季价格' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="uphighprice" id="uphighprice" size="32" maxlength="250" value="<?php echo $this->cruise->uphighprice;?>" />
			</td>
		</tr>
          <tr>
			<td width="100" align="right" class="key">
				<label for="title">
					<?php echo JText::_( '上行淡季价格' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="uplowprice" id="uplowprice" size="32" maxlength="250" value="<?php echo $this->cruise->uplowprice;?>" />
			</td>
		</tr>
                
         <tr>
			<td width="100" align="right" class="key">
				<label for="title">
					<?php echo JText::_( '下行旺季价格' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="downhighprice" id="downhighprice" size="32" maxlength="250" value="<?php echo $this->cruise->downhighprice;?>" />
			</td>
		</tr>
          <tr>
			<td width="100" align="right" class="key">
				<label for="title">
					<?php echo JText::_( '下行淡季价格' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="downlowprice" id="downlowprice" size="32" maxlength="250" value="<?php echo $this->cruise->downlowprice;?>" />
			</td>
		</tr>
         <tr>
			<td width="100" align="right" class="key">
				<label for="title">
					<?php echo JText::_( '上行城市' ); ?>:
				</label>
			</td>
			<td>
				<?php if($this->cruise->upcity==1){?>
				<select name="upcity" size=1>
                <option value="1" selected="selected">宜昌--重庆 </option>
                <option value="2">上海--重庆</option>
              
                </select>
                <?php }else if($this->cruise->upcity==2){?>
                
                <select name="upcity" size=1>
              	<option value="1" >宜昌--重庆 </option>
                <option value="2" selected="selected">上海--重庆</option>
                </select>
                
                
               <?php }else{?>
                <select name="upcity" size=1>
                  <option value="1" selected="selected">宜昌--重庆 </option>
                <option value="2">上海--重庆</option>
                </select>
               
                <?php }?>
			</td>
		</tr>
         <tr>
			<td width="100" align="right" class="key">
				<label for="title">
					<?php echo JText::_( '下行城市' ); ?>:
				</label>
			</td>
			<td>
				<?php if($this->cruise->downcity==1){?>
				<select name="downcity" size=1>
                <option value="1" selected="selected">重庆--上海 </option>
                <option value="2">重庆--宜昌</option>
                </select>
                <?php }else if($this->cruise->downcity==2){?>
                
                <select name="downcity" size=1>
              <option value="1" >重庆--上海 </option>
                <option value="2" selected="selected">重庆--宜昌</option>
                </select>
                
                
               <?php }else{?>
                <select name="downcity" size=1>
                 <option value="1" selected="selected">重庆--上海 </option>
                <option value="2">重庆--宜昌</option>
           
                </select>
               
                <?php }?>
			</td>
		</tr>
        
                 <tr>
			<td width="100" align="right" class="key">
				<label for="title">
					<?php echo JText::_( '游轮层数' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="passenger_decks" id="passenger_decks" size="32" maxlength="250" value="<?php echo $this->cruise->passenger_decks ;?>" />
			</td>
		</tr>
          <tr>
			<td width="100" align="right" class="key">
				<label for="title">
					<?php echo JText::_( '游轮等级' ); ?>:
				</label>
			</td>
			<td>
            <?php if($this->cruise->cruise_grade==4){?>
				<select name="cruise_grade" size=1>
                <option value="4" selected="selected">四星级</option>
                <option value="5">五星级</option>
                </select>
                <?php }else if($this->cruise->cruise_grade==5){?>
                
                <select name="cruise_grade" size=1>
                <option value="4" >四星级</option>
                <option value="5" selected="selected">五星级</option>
                </select>
                
                
               <?php }else{?>
                 <select name="cruise_grade" size=1>
                <option value="4" >四星级</option>
                <option value="5" >五星级</option>
                </select>
               
                <?php }?>
			</td>
		</tr>
        <tr>
			<td width="100" align="right" class="key">
				<label for="title">
					上行日期:
				</label>
			</td>
			<td>
                            <input style="width:70px" onfocus="HS_setDate(this)" type="text" name="uplink" id="uplink"  maxlength="250" value="<?php echo $this->cruise->uplink;?>" />

			</td>
   
		</tr>
        
        
        
          <tr>
			<td width="100" align="right" class="key">
				<label for="title">
					<?php echo JText::_( '下行日期' ); ?>:
				</label>
			</td>
			<td>
                            <input style="width:70px" onfocus="HS_setDate(this)" type="text" name="down" id="down"  maxlength="250" value="<?php echo $this->cruise->down;?>" />

			</td>
		</tr>
        
          
        <tr>
        	<td width="100" align="right" class="key">
				<label for="title">
					游轮设备：
				</label>
			</td>
			<td>
            
            <?php echo $editor->display( 'equipment', $this->cruise->equipment, '170%', '450', '40', '5' ) ; ?>
          
           </td>
		</tr>
        
      
            <tr>
			<td width="100" align="right" class="key">
				<label for="title">
					游轮简介：
				</label>
			</td>
			<td><?php echo $editor->display( 'introduction', $this->cruise->introduction, '170%', '450', '40', '5' ) ; ?>
	
                         </td>
		</tr>
             
      
        
        
		<tr>
			<td valign="top" align="right" class="key">
				<?php echo JText::_( 'Published' ); ?>:
			</td>
			<td>
				<?php echo $this->lists['published']; ?>
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
		</tr>		
		<tr>
			<td class="key">
				<label for="polloption">
					
				</label>
			</td>
			<td>
			<?php 
			if(empty($this->cruise->filedir)==false){

			echo "<img src=\"/".$this->cruise->filedir."thumb/thumb_".$this->cruise->ufile."\" >";
			
			}
			
			?>
				
			</td>
		</tr>		
	</table>
	</fieldset>
</div>
<div class="col width-30">
	<fieldset class="adminform">
		<legend><?php echo JText::_( 'Parameters' ); ?></legend>

		<table class="admintable">
		<tr>
			<td colspan="2">
				<?php echo $this->params->render();?>
			</td>
		</tr>
		</table>
	</fieldset>
</div>
<div class="clr"></div>

	<input type="hidden" name="option" value="com_cruise" />
	<input type="hidden" name="id[]" value="<?php echo $this->cruise->id; ?>" />
	<input type="hidden" name="task" value="" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>
