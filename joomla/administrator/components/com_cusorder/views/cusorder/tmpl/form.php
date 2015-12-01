<?php defined('_JEXEC') or die('Restricted access'); 
JToolBarHelper::cancel( 'cancel', 'Close' );
?>
<script language="javascript" type="text/javascript">
	function submitbutton(pressbutton) {
		var form = document.adminForm;
		if (pressbutton == 'cancel') {
			submitform( pressbutton );
			return;
		}

			submitform( pressbutton );
	
	}
</script>

<form action="index.php?option=com_cusorder" method="post" name="adminForm" enctype="multipart/form-data">

<div class="col">
	<fieldset class="adminform">
	<legend><?php echo JText::_( 'Options' ); ?></legend>
	<table class="admintable" border=1>
	
		<tr>
			<td  colspan=6 align="center">
				
					订单信息
				
			</td>

		</tr>
		
		<tr>
			<td class="key">
				<label for="polloption">
					订单号
				</label>
			</td>
			<td>
		
			<?php echo $this->rows[0]->orderNO;?>
			</td>

			<td class="key">
				<label for="polloption">
					订单状态
				</label>
			</td>
			<td>
		
			<?php if($this->rows[0]->order_state==0){
				echo "未付款";
			}elseif($this->rows[0]->order_state==1){
				echo "已付款";
			}elseif($this->rows[0]->order_state==2){
				echo "已完成";
			}elseif($this->rows[0]->order_state==3){
				echo "已作废";
			}elseif($this->rows[0]->order_state==4){
				echo "问题单";
			}?>
			</td>
			<td class="key">
				<label for="polloption">
					套餐类型
				</label>
			</td>
			<td>

				 NEW Customize;

			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="polloption">
					订单客户名
				</label>
			</td>
			<td>
				<?php echo $this->rows[0]->full_name;?>		
			</td>
			<td class="key">
				<label for="polloption">
					客户国籍
				</label>
			</td>
			<td>
				<?php echo $this->rows[0]->nationality;?>		
			</td>
			<td class="key">
				<label for="polloption">
					电子邮件
				</label>
			</td>
			<td>
		
<?php echo $this->rows[0]->email;?>
			</td>
		</tr>
		<tr>


			<td class="key">
				<label for="polloption">
					联系电话
				</label>
			</td>
			<td>
		
<?php echo $this->rows[0]->moblie;?>
			</td>

			<td class="key">
				<label for="polloption">
					旅游总人数(成年)
				</label>
			</td>
			<td>

<?php echo $this->rows[0]->adults;?>				
			</td>
			<td class="key">
				<label for="polloption">
					小孩人数
				</label>
			</td>
			<td>

<?php echo $this->rows[0]->children;?>				
			</td>
		</tr>

		<tr>


			<td class="key">
				<label for="polloption">
					婴儿人数
				</label>
			</td>
			<td>

<?php echo $this->rows[0]->infant;?>				
			</td>

			<td class="key">
				<label for="polloption">
					入境旅游日期
				</label>
			</td>
			<td>
<?php echo $this->rows[0]->traveltime;?>
				
			</td>
		
			<td class="key">
				<label for="polloption">
					结束日期:
				</label>
			</td>
			<td>
<?php echo $this->rows[0]->endtime;?>
				
			</td>

		<tr>







		<tr>


			<td class="key">
				<label for="polloption">
					不固定旅游如期
				</label>
			</td>
			<td>

<?php echo $this->rows[0]->traveltime1 ;?>				
			</td>

			<td class="key">
				<label for="polloption">
					旅游天数
				</label>
			</td>
			<td>
<?php echo $this->rows[0]->duration ;?>
				
			</td>
		
			<td class="key">
				<label for="polloption">
					Skype:
				</label>
			</td>
			<td>
<?php echo $this->rows[0]->skype;?>
				
			</td>

		<tr>






			<td class="key">
				<label for="polloption">
					IP地址：
				</label>
			</td>
			<td ><?php 
echo $this->rows[0]->user_ip;
?></td>
			<td class="key">
				<label for="polloption">
					下单时间
				</label>
			</td>
			<td>
<?php $dateline=$this->rows[0]->dateline;
$date_format=date("Y-m-d H:i:s",$dateline);
echo $date_format;
?>
				
			</td>
			<td class="key">
				<label for="polloption">
					成员:
				</label>
			</td>
			<td>
<?php 
echo $this->rows[0]->yourteam;
?>
				
			</td>

		</tr>






		<tr>



			<td class="key">
				<label for="polloption">
					城市信息：
				</label>
			</td>
			<td colspan=5>
		
<?php echo $this->rows[0]->cityinfo;?>
			</td>


		</tr>

		<tr>



			<td class="key">
				<label for="polloption">
					客户附加信息：
				</label>
			</td>
			<td colspan=5>
		
<?php echo $this->rows[0]->message;?>
			</td>


		</tr>	


		<tr>



			<td class="key">
				<label for="polloption">
					酒店信息：
				</label>
			</td>
			<td colspan=5>
		
<?php echo $this->rows[0]->hotelinfo;?>
			</td>


		</tr>





		<tr>
			<td class="key">
				<label for="polloption">
					餐饮需求:
				</label>
			</td>
			<td colspan=5>
		
<?php echo $this->rows[0]->restaurant;?>
			</td>



		</tr>

		<tr>
			<td class="key">
				<label for="polloption">
					其他要求:
				</label>
			</td>
			<td colspan=5>
		
<?php echo $this->rows[0]->activites;?>
			</td>



		</tr>


		<tr>
			<td class="key">
				<label for="polloption">
					订单状态修改
				</label>
			</td>
			<td colspan=5>
	<?php 	if($this->rows[0]->order_state==0){
	
			$w_order="checked='checked'";
	
	}elseif($this->rows[0]->order_state==1){
	
			$yf_order="checked='checked'";
	
	}elseif($this->rows[0]->order_state==2){
	
			$yw_order="checked='checked'";
	
	}elseif($this->rows[0]->order_state==3){
	
			$yz_order="checked='checked'";
	
	}elseif($this->rows[0]->order_state==4){
	
			$wt_order="checked='checked'";
	
	}?>

 &nbsp;<input id="RadioButton1" type="radio" name="ostate" value="0" <?php echo $w_order;?>  />未付款
                                        <input id="RadioButton2" type="radio" name="ostate" value="1"<?php echo $yf_order;?>/>已付款
                                        <input id="RadioButton3" type="radio" name="ostate" value="2" <?php echo $yw_order;?>/>已完成
                                        <input id="RadioButton4" type="radio" name="ostate" value="3" <?php echo $yz_order;?>/>已作废
                                        <input id="RadioButton5" type="radio" name="ostate" value="4" <?php echo $wt_order;?>/>问题单


<input type="button" name="updateoder" id="updateoder" onclick="Update_order()" style="height:20px;width:60px;" value="修改提交">
		
				
			</td>
	
		</tr>
		
		<!--tr>
			<td class="key">
				<label for="polloption">
					地图
				</label>
			</td>
			<td>
				<div id="content">

		<p>点击“浏览”按钮，选择您要上传的文档文件后，系统将自动上传并在完成后提示您。</p>
		<p>请勿上传包含中文文件名的文件！</p>
		<div class="fieldset flash" id="fsUploadProgress">
			<span class="legend">快速上传</span>
	  </div>
		<div id="divStatus">0 个文件已上传</div>
			<div>
				<span id="spanButtonPlaceHolder"></span>
				<input id="btnCancel" type="button" value="取消所有上传" onclick="swfu.cancelQueue();" disabled="disabled" style="margin-left: 2px; font-size: 8pt; height: 29px;" />
			</div>


</div>
				
			</td>
		</tr-->											
	</table>
	</fieldset>
</div>

<div class="clr"></div>

<input type="hidden" name="task" value="" />
	<?php echo JHTML::_( 'form.token' ); ?>
	

</form>
<script language="javascript" type="text/javascript">
  
   var request = false;
   try {
     request = new XMLHttpRequest();
   } catch (trymicrosoft) {
     try {
       request = new ActiveXObject("Msxml2.XMLHTTP");
     } catch (othermicrosoft) {
       try {
         request = new ActiveXObject("Microsoft.XMLHTTP");
       } catch (failed) {
         request = false;
       }  
     }
   }
   if (!request)
     alert("Error initializing XMLHttpRequest!");


		function Update_order(){
			var orderid=<?php echo $this->rows[0]->id;?>;
	var radioVal="";
	var flage=false;
	 var radios = document.forms[0].ostate;   
   for (var i = 0; i < radios.length; i++) {   
       if (radios[i].checked == true) {
		   radioVal=radios[i].value;
           flage = true;   
 
       }   
   }   		if(flage==true){
	  // alert("test");
	  // return;
			 var url = "./index.php?option=com_updateorder1&task=update&orderid=" +orderid+"&stateval="+radioVal;
			 request.open("GET", url, true);
			 request.onreadystatechange = updateRoute;
			 request.send(null);
   }
		}



	function updateRoute(){
	
     if (request.readyState == 4) {
       if (request.status == 200) {
         var response = request.responseText;

			if(response=="ok"){
				alert("修改成功！");
             location.reload();
			}
		 }
		}	
	
	
	}
	</script>