<?php
//订单意向
$order_purpose = array(
	0 => 'making a general enquiry',
	1 => 'ready a book'
);
//订单支付类型
$payment_method = array(
  1=> 'Paypal',
  2=> 'Bank Transfer',
  3=> 'Moneybookers',
  4=> 'Credit Card',
  5=> 'Cash',
);

//订单折扣信息
$discount_type = array(
  1 => ' Paid 3 months before, save 5%',
  2 => ' Repeat travelers, save 3%',
  3 => 'Being our member, get $10 per person'
);

//订单状态
$order_state = array(
  0 => '未付款',  
  1 => '已付款',
  2 => '已完成',
  3 => '已作废',
  4 => '问题单',
  5 => '没有结果',
);
