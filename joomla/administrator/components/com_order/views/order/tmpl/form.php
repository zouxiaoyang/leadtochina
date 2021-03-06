<?php defined('_JEXEC') or die('Restricted access'); 
JToolBarHelper::cancel( 'cancel', 'Close' );
include_once(JPATH_ROOT.'/config/order_config.php');
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

<form action="index.php?option=com_order" method="post" name="adminForm" enctype="multipart/form-data">

<div class="col">
	<fieldset class="adminform">
	<legend><?php echo JText::_( 'Options' ); ?></legend>
	<table class="admintable">
	
		<tr>
			<td class="key"><label for="polloption">类型</label></td>
		<td><span><?php echo $order_purpose[$this->rows[0]->order_purpose];?></span></td>
			<td class="key" colspan=6><label for="polloption">订单信息</label></td>
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
		
			<?php if($this->package_cate==1){
				echo "China Tours";
			}elseif($this->package_cate==2){
				echo "City Tours";
			}else{
				echo "Customize";
			}?>
			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="polloption">
					订单客户名
				</label>
			</td>
			<td>
				<?php echo $this->rows[0]->order_user;?>		
			</td>
			<td class="key">
				<label for="polloption">
					客户国籍
				</label>
			</td>
			<td>
				<?php echo $this->contacts[0]->nationality;?>		
			</td>
			<td class="key">
				<label for="polloption">
					客户城市
				</label>
			</td>
			<td>
						
			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="polloption">
					电子邮件
				</label>
			</td>
			<td>
		
<?php echo $this->contacts[0]->email;?>
			</td>


			<td class="key">
				<label for="polloption">
					联系电话
				</label>
			</td>
			<td>
		
<?php echo $this->contacts[0]->phone;?>
			</td>

			<td class="key">
				<label for="polloption">
					客户地址
				</label>
			</td>
			<td>
		
<?php echo $this->contacts[0]->addr;?>
			</td>
		</tr>



		<tr>
			<td class="key">
				<label for="polloption">
					附加邮件
				</label>
			</td>
			<td>
		
<?php echo $this->contacts[0]->other_email;?>
			</td>


			<td class="key">
				<label for="polloption">
					进入城市
				</label>
			</td>
			<td>
		
<?php echo $this->rows[0]->entry_city;?>
			</td>

			<td class="key">
				<label for="polloption">
					离开城市
				</label>
			</td>
			<td>
		
<?php echo $this->rows[0]->exit_city;?>
			</td>
		</tr>





		<tr>
			<td class="key">
				<label for="polloption">
					目的地
				</label>
			</td>
			<td>
		
<?php echo $this->rows[0]->destinations;?>
			</td>


			<td class="key">
				<label for="polloption">
					航班
				</label>
			</td>
			<td>
		
<?php echo $this->rows[0]->traffic;?>
			</td>

			<td class="key">
				<label for="polloption">
					酒店
				</label>
			</td>
			<td>
		
<?php echo $this->rows[0]->hotel;?>
			</td>
		</tr>



		<tr>
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
			<td class="key">
				<label for="polloption">
					婴儿人数
				</label>
			</td>
			<td>

<?php echo $this->rows[0]->infant;?>				
			</td>
		</tr>


		<tr>
			<td class="key">
				<label for="polloption">
					入境旅游日期
				</label>
			</td>
			<td>
              <?php echo $this->rows[0]->entry_date;?>
			</td>

			<td class="key">
				<label for="polloption">
					持续天数
				</label>
			</td>
			<td>
<?php echo $this->rows[0]->duration;?>
				
			</td>

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
		</tr>


		<tr>
			<td class="key">
				<label for="polloption">
					套餐名称
				</label>
			</td>
			<td>
<?php 
echo $this->rows[0]->package_name;
?>
				
			</td>
			<td class="key">
				<label for="polloption">
					下单URL
				</label>
			</td>
			<td>
<?php 
echo $this->rows[0]->url_referer;
?>
				
			</td>
			<td class="key">
				<label for="polloption">
					套餐主题
				</label>
			</td>
			<td>
<?php 
echo $this->rows[0]->package_category;
?>
				
			</td>
		</tr>

		<tr>
			<td class="key">
				<label for="polloption">
					IP地址：
				</label>
			</td>
			<td colspan=5><?php 
echo $this->rows[0]->usr_ip;
?></td>
</tr>
		<tr>
			<td class="key"><label for="polloption">结束日期限</label></td>
			<td><?php 	echo $this->rows[0]->end_date;?></td>
			<td class="key"><label for="polloption">付款方式</label></td>
			<td><?php echo $payment_method[$this->rows[0]->payment_method];?></td>
			<td class="key"><label for="polloption">折扣信息</label></td>
			<td><?php echo $discount_type[$this->rows[0]->discount_type];?></td>
		</tr>
		<tr>
			<td class="key">
				<label for="polloption">
					客户附加说明
				</label>
			</td>
			<td colspan=5>
			<?php 	echo $this->rows[0]->other_mes;?>
			</td>
		</tr>
		<tr>
			<td class="key"><label for="polloption">其他游客信息：</label></td>
			<td colspan=5>
				<?php $passenger = unserialize($this->rows[0]->passenger_info);$count = count($passenger['last']);?>
				<?php for($i=0; $i<=$count; $i++):?>
					<?php if($passenger['first'][$i] && $passenger['last'][$i]):?>
					  <?php echo '全名:'.$passenger['first'][$i] . ' ' .$passenger['last'][$i] . '  生日:' . $passenger['birth_y'][$i] . '年'. $passenger['birth_m'][$i] .'月'. $passenger['birth_d'][$i].'日  护照:'. $passenger['passport'][$i]. "<br />";?>
					<?php endif;?>
				<?php endfor;?>
			</td>
		</tr>
		<tr>
			<td class="key"><label for="polloption">原价：</label></td>
			<td>$<?php echo $this->rows[0]->total_price;?></td>
			<td class="key"><label for="polloption">最终价：</label></td>
			<td>$<?php echo $this->rows[0]->final_price;?></td>
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
			 var url = "../index.php?option=com_updateorder&task=update&orderid=" +orderid+"&stateval="+radioVal;
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