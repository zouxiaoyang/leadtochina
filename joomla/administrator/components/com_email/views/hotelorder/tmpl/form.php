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
<?php
	JToolBarHelper::title(  JText::_( '酒店订单详情' ) );
	JToolBarHelper::save();
?>
<form action="index.php" method="post" name="adminForm" enctype="multipart/form-data">
<div class="col">
	<fieldset class="adminform">
	<legend><?php echo JText::_( 'Options' ); ?></legend>
	<table class="admintable">
	
		<tr>
			<td class="key" colspan=6>
				<label for="polloption">
					酒店订单信息
				</label>
			</td>

		</tr>
		
		<tr>
			<td class="key">
				<label for="polloption">
					酒店名称
				</label>
			</td>
			<td>
		
			<?php echo $this->rows[0]->hotelname;?>
			</td>
			<td class="key">
				<label for="polloption">
					房间名称
				</label>
			</td>
			<td>
		<?php echo $this->rows[0]->roomname;?>
			
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
			
		</tr>
		<tr>
			<td class="key">
				<label for="polloption">
					电子邮件
				</label>
			</td>
			<td>
		
<?php echo $this->rows[0]->email;?>
			</td>


			<td class="key">
				<label for="polloption">
					联系电话
				</label>
			</td>
			<td>
		
<?php echo $this->rows[0]->phone;?>
			</td>

		</tr>
		<tr>
			<td class="key">
				<label for="polloption">
					入住时间
				</label>
			</td>
			<td>
		
<?php echo $this->rows[0]->checkin;?>
			</td>

			<td class="key">
				<label for="polloption">
					离开时间
				</label>
			</td>
			<td>
		
<?php echo $this->rows[0]->checkout;?>
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
			
		</tr>


		<tr>
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
					下单URL
				</label>
			</td>
			<td>
<?php 
echo $this->rows[0]->url_referer;
?>
			</td>
			
		</tr>
		<tr>
			<td class="key">
				<label for="polloption">
					客户附加说明
				</label>
			</td>
			<td colspan=5>
			<?php 	echo $this->rows[0]->other_message;?>
				
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
			</td>
		</tr>
	</table>
	</fieldset>
</div>

<div class="clr"></div>

<input type="hidden" name="task" value="" />
	<input type="hidden" name="id" value="<?php echo $this->rows[0]->id;?>" />
	<input type="hidden" name="option" value="com_hotelorder" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>