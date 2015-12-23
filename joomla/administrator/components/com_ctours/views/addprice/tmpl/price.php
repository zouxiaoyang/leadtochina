<?php defined('_JEXEC') or die('Restricted access'); ?>

<?php
	$cid = JRequest::getVar( 'cid', array(0), '', 'array' );
	$edit=JRequest::getVar( 'edit', true );
	JArrayHelper::toInteger($cid, array(0));
	JRequest::setVar( 'hidemainmenu', 1 );
	$editor = &Jfactory::getEditor();

	$text = ( $edit ? JText::_( 'Edit' ) : JText::_( 'New' ) );

	JToolBarHelper::title(  JText::_( '套餐价格' ).': <small><small>[ ' . $text.' ]</small></small>' );
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
		if (form.name.value == "") {
			alert( "<?php echo JText::_( 'cntours must have a title', true ); ?>" );
		} else{
<?php
				//echo $editor->save( 'route_Intro' ) ;
//echo $editor->save( 'tour_intro' ) ;
//echo $editor->save( 'note' ) ;
?>
			submitform( pressbutton );
		}
	}
</script>

	<script type="text/javascript">		

		window.addEvent('domready', function() { 
			myCal1 = new Calendar({ w_arrival_date: 'd/m/Y' }, { direction: 1, tweak: {x: 9, y: 0} });
			myCal2 = new Calendar({ w_departure_date: 'd/m/Y' }, { direction: 1, tweak: {x: 6, y: 0} });
			//myCal3 = new Calendar({ date3: 'd/m/Y' }, { classes: ['i-heart-ny'], direction: 1, tweak: {x: 3, y: 0} });
		});

	</script>



<script language="javascript" type="text/javascript">
  var trIndex = 0;
 function addPrice(){
      <?php if($this->package_class=="small"){?>
      	var groupCode =document.getElementById('w_group_code').value;
      	var arrivalDate =document.getElementById('w_arrival_date').value;
      	var departureDate =document.getElementById('w_departure_date').value;
      	var doubleOcc =document.getElementById('w_double_occ').value;
      	var singleOcc =document.getElementById('w_single_occ').value;
           //  var userName = document.getElementById("nameText").value; 
      
          var inpput_group="<input type=\"text\" id=\"group_code[]\" name=\"group_code[]\" value='"+groupCode+"' size=20>";
          
          var inpput_arrival="<input type=\"text\" id=\"arrival_date[]\" name=\"arrival_date[]\" value='"+arrivalDate+"' size=20>";
          
          var inpput_departure="<input type=\"text\" id=\"departure_date[]\" name=\"departure_date[]\" value='"+departureDate+"' size=20>";
          
          var inpput_double="<input type=\"text\" id=\"double_occ_occ[]\" name=\"double_occ[]\" value='"+doubleOcc+"' size=20>";
          
          var inpput_single="<input type=\"text\" id=\"single_occ[]\" name=\"single_occ[]\" value='"+singleOcc+"' size=20>";
      
          var table    = document.getElementById("tableid");
      
          var count=document.getElementById("tableid").rows.length;
          var row=document.getElementById("tableid").insertRow(count);
          //var row=document.getElementById("t1").insertRow(-1);
           var delHref = "<a href='javascript:void(0);' onclick=\"this.parentNode.parentNode.parentNode.deleteRow(this.parentNode.parentNode.rowIndex);\">删除</a>";
          row.insertCell(0).innerHTML=inpput_group;
          row.insertCell(1).innerHTML=inpput_arrival;
          row.insertCell(2).innerHTML=inpput_departure;
          row.insertCell(3).innerHTML=inpput_double;
          row.insertCell(4).innerHTML=inpput_single;
          row.insertCell(5).innerHTML=delHref;
      	document.getElementById('w_group_code').value="";
      	document.getElementById('w_arrival_date').value="";
      	document.getElementById('w_departure_date').value="";
      	document.getElementById('w_double_occ').value="";
      	document.getElementById('w_single_occ').value="";
      
      <?php
      	
      }else{?>
      
      	//var seasonVal =document.getElementById('season').options[document.getElementById('season').selectedIndex].value;
      	var twoVal =document.getElementById('twop').value;
      	var threeVal =document.getElementById('threep').value;
      	var sixVal =document.getElementById('sixp').value;
      	var hotelVal =document.getElementById('hotel').options[document.getElementById('hotel').selectedIndex].value;
           //  var userName = document.getElementById("nameText").value;
      
          //var inpput_season="<input type=\"text\" id=\"off_season[]\" name=\"off_season[]\" value='"+seasonVal+"' size=20>";
          
          var inpput_two="<input type=\"text\" id=\"two[]\" name=\"two[]\" value='"+twoVal+"' size=20>";
          
          var inpput_three="<input type=\"text\" id=\"three_five[]\" name=\"three_five[]\" value='"+threeVal+"' size=20>";
          
          var inpput_six="<input type=\"text\" id=\"six_nice[]\" name=\"six_nice[]\" value='"+sixVal+"' size=20>";
          
          var inpput_hotel="<input type=\"text\" id=\"hotel_start[]\" name=\"hotel_start[]\" value='"+hotelVal+"' size=20>";
      
          var table    = document.getElementById("tableid");
      	
      	   
      
          var count=document.getElementById("tableid").rows.length;
          var row=document.getElementById("tableid").insertRow(count);
          //var row=document.getElementById("t1").insertRow(-1);
           var delHref = "<a href='javascript:void(0);' onclick=\"this.parentNode.parentNode.parentNode.deleteRow(this.parentNode.parentNode.rowIndex);\">删除</a>";
          //row.insertCell(0).innerHTML=inpput_season;
          row.insertCell(0).innerHTML=inpput_two;
          row.insertCell(1).innerHTML=inpput_three;
          row.insertCell(2).innerHTML=inpput_six;
          row.insertCell(3).innerHTML=inpput_hotel;
          row.insertCell(4).innerHTML=delHref;
      	//document.getElementById('season').value="";
      	document.getElementById('twop').value="";
      	document.getElementById('threep').value="";
      	document.getElementById('sixp').value="";
      	document.getElementById('hotel').value="";
      <?php
      }
      ?>
      //var inpput_str="<input type=\"text\" id=\"group_code[]\" name=\"group_code[]\" size=20>";
      document.getElementById('isNew').value = 'yes';
 }
    function delTR(r) {
        if (window.confirm("确认删除吗？")) {
			var i=r.parentNode.parentNode.rowIndex;
            document.getElementById('tableid').deleteRow(i);
        }
    }
</script>


<div class="col">
	<fieldset class="adminform">
	<legend><?php echo JText::_( 'Options' ); ?></legend>


<?php if($this->package_class!="small"){?>


	<table class="admintable" >
		<!--tr>
			<td class="key">
				<label for="polloption">
					旅游季节 
				</label>
			</td>
			<td>
			<select name='season'  id='season'>
			<option value=0>选择旅游季节</option>
			<option value="淡季">淡季</option>
			<option value="旺季">旺季</option>
			</select>
				
			</td>
		</tr-->
		<tr>
			<td class="key">
				<label for="polloption">
					住宿标准
				</label>
			</td>
			<td>
						<select name='hotel'  id='hotel'>
			<option value=0>选择住宿标准</option>
			<option value="3">三星级</option>
			<option value="4">四星级</option>
			<option value="5">五星级</option>
			</select>
				
			</td>
		</tr>		
		<tr>
			<td class="key" id="packname">
				<label  for="polloption">
					2-5人(价格)
				</label>
			</td>
			<td>
		
				<input class="inputbox" type="text" name="twop" id="twop"  size="20" />
			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="polloption">
					6-9人(价格)
				</label>
			</td>
			<td>
		
				<input class="inputbox" type="text" name="threep" id="threep"  size="20" />
			</td>
		</tr>

		<tr>
			<td class="key">
				<label for="polloption">
					10人(价格)
				</label>
			</td>
			<td>
			<input class="inputbox" type="text" name="sixp" id="sixp"  size="20" />		
				
			</td>
		</tr>

		
		<tr>
			<td class="key">

			</td>
			<td>
			<input type="button" name="button" onclick="addPrice();" style="cursor:pointer" id="button" value="增加" >
				
			</td>
		</tr>
										
	</table><?php
	
	}else{?>
	
	
	
	<table class="admintable" >
		<tr>
			<td class="key">
				<label for="polloption">
					Group Code 
				</label>
			</td>
			<td>
				<input class="inputbox" type="text" name="w_group_code" id="w_group_code"  size="30" />
				
			</td>
		</tr>
		
		<tr>
			<td class="key" id="packname">
				<label  for="polloption">
					Arrival Date
				</label>
			</td>
			<td>
		
				<input class="inputbox" type="text" name="w_arrival_date" id="w_arrival_date"  size="30" />
			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="polloption">
					Departure Date
				</label>
			</td>
			<td>
		
				<input class="inputbox" type="text" name="w_departure_date" id="w_departure_date"  size="30" />
			</td>
		</tr>

		<tr>
			<td class="key">
				<label for="polloption">
					Double Occupancy（价格）
				</label>
			</td>
			<td>
			<input class="inputbox" type="text" name="w_double_occ" id="w_double_occ"  size="20" />		
				
			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="polloption">
					Single Occupancy（价格）
				</label>
			</td>
			<td>
			<input type="text" name="w_single_occ" id="w_single_occ" size="20" >
				
			</td>
		</tr>
		
		<tr>
			<td class="key">

			</td>
			<td>
			<input type="button" name="button" onclick="addPrice();" style="cursor:pointer" id="button" value="增加" >
				
			</td>
		</tr>
										
	</table>	
	
	
	
	
	
<?php	}?>
	</fieldset>
</div>

<div class="col width-35"><form action="index.php" method="post" name="adminForm" enctype="multipart/form-data">
	<fieldset class="adminform">
	<legend>价格列表</legend>
	<table class="admintable" border=1  id="tableid">
	
	<tbody id="tableBody">

		<?php 

		echo $this->table_head;

		for ($i=0, $n=count( $this->row ); $i < $n; $i++){

			$priceid=$this->row[$i]->id;

			if( $this->package_class == "small" ){

		  ?>
		
		<tr>
			<td >

			

			<input type="text" name="group_code[<?php echo $priceid;?>]" id="group_code[<?php echo $priceid;?>]" value="<?php echo $this->row[$i]->group_code;?>" size=30>
			</td>
			<td>
			<input type="text" name="arrival_date[<?php echo $priceid;?>]" id="arrival_date[<?php echo $priceid;?>]" value="<?php echo $this->row[$i]->arrival_date;?>" size=30>
			</td>

			<td>
			<input type="text" name="departure_date[<?php echo $priceid;?>]" id="departure_date[<?php echo $priceid;?>]" value="<?php echo $this->row[$i]->departure_date;?>" size=30>
			</td>
			<td>
			<input type="text" name="double_occ[<?php echo $priceid;?>]" id="double_occ[<?php echo $priceid;?>]" value="<?php echo $this->row[$i]->double_occ;?>" size=30>
			</td>
			
			<td>
			<input type="text" name="single_occ[<?php echo $priceid;?>]" id="single_occ[<?php echo $priceid;?>]" value="<?php echo $this->row[$i]->single_occ;?>" size=30>
			</td>
			<td>
			<!--a href='javascript:void(0);' onclick="this.parentNode.parentNode.parentNode.deleteRow(this.parentNode.parentNode.rowIndex);">删除</a-->
			</td>
		</tr>		
		
		<?php
			}else{?>
		
	<tr>

			<td>
			<input type="text" name="two[<?php echo $priceid;?>]" id="two[<?php echo $priceid;?>]" value="<?php echo $this->row[$i]->two;?>" size=30>
			</td>

			<td>
			<input type="text" name="three_five[<?php echo $priceid;?>]" id="three_five[<?php echo $priceid;?>]" value="<?php echo $this->row[$i]->three_five;?>" size=30>
			</td>
			<td>
			<input type="text" name="six_nice[<?php echo $priceid;?>]" id="six_nice[<?php echo $priceid;?>]" value="<?php echo $this->row[$i]->six_nice;?>" size=30>
			</td>
			
			<td>
			<input type="text" name="hotel_start[<?php echo $priceid;?>]" id="hotel_start[<?php echo $priceid;?>]" value="<?php echo $this->row[$i]->hotel_start;?>" size=30>
			</td>
			<td>
			<!--a href='javascript:void(0);' onclick="this.parentNode.parentNode.parentNode.deleteRow(this.parentNode.parentNode.rowIndex);">删除</a-->
			</td>
		</tr>			
		
		
		<?php

		}

		}
		?>
		</tbody>
	</table>
	<table ><tr><td height=10>  </td></tr><tr><td><?php 	echo $editor->display( 'price_in',  htmlspecialchars($this->price_in,ENT_QUOTES), '600', '300', '80', '50', array('pagebreak', 'readmore'));?></td></tr></table>
	</fieldset>
</div>
<div class="clr"></div>

	<input type="hidden" name="task" value="" />
	<input type="hidden" name="option" value="com_ctours" />
	<input type="hidden" name="c" value="<?php echo $this->c;?>" />
	<input type="hidden" name="isNew" id="isNew" value="<?php echo $this->isNew;?>" />	
	<input type="hidden" name="packageid" value="<?php echo $this->packageid;?>" />
	<input type="hidden" name="package_class" value="<?php echo $this->package_class;?>" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>
