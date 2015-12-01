<?php
if(strpos($_SERVER['HTTP_HOST'], 'leadtochina.lab') !== false){
  $online_site_host = "localhost";
  $online_site_db_user = 'root';
  $online_site_db_pass = 'root';
  $online_site_db_name = 'joomla';
  $online_site_db_driver = 'mysql';
  $online_site_db_prefix = 'jos_';
}else{
  $online_site_host = "67.228.160.106";
  $online_site_db_user = 'toursdbuser';
  $online_site_db_pass = 'bGDxeBeDravqWs.7';
  $online_site_db_name = 'joomla';
  $online_site_db_driver = 'mysql';
  $online_site_db_prefix = 'jos_';
}


$currency = array(
    'type' => array(    //货币类型
      1 => 'USD - United States Dollar',
      2 => 'CNY - Chinese Yuan',
      3 => 'EUR - Euro',
      4 => 'JPY-Japanese Yen', //日本日元
      5 => 'INR-Indian Rupee', //印度卢比
      6 => 'SUR-Russian Ruble', //俄罗斯卢布
      7 => 'DEM-Deutsche Mark', //德国马克
      8 => 'GBP-Pound Sterling', //英镑
      9 => 'CAD-Canadian Dollar', //加拿大加元
      10 =>'AUD-Australian Dollar', //澳大利亚澳大利亚元
      11 => 'SAR-Saudi Arabian Riyal' //沙特阿拉伯亚尔
     ),  
    'exchange_rate' => array(   //货币类型对应汇率
       1 => 1,
       2 => '6.2197',
       3 => '0.7528',
       4 => '88.2950',
       5 => '54.6250',
       6 => '30.3355',
       7 => '0.2437',
       8 => '0.6225',
       9 => '0.9846',
      10 => '0.9467',
      11 => '3.7503'
     ),  
     'symbol' => array( //货币地应符号表示
       1 => '$',
       2 => '¥',
       3 => '€',
       4 => 'JPY',
       5 => 'INR',
       6 => 'SUR',
       7 => 'DEM',
       8 => '£',
       9 => 'CAD',
       10 => 'AUD',
       11 => 'CAD'
     )   
);
