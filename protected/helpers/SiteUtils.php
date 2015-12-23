<?php
/**
 * ImageUtils helper class.
 *
 * @author     Fang Lin
 * @copyright  (c) 2007-2008
 */
class SiteUtils {

	public static function stringURLSafe($string)
	{
		//remove any '-' from the string they will be used as concatonater
		$str = trim(str_replace('-', ' ', $string));

		// remove any duplicate whitespace, and ensure all characters are alphanumeric
		$str = preg_replace(array('/\s+/','/[^A-Za-z0-9\-]/'), array('-',''), $str);

		// lowercase and trim
		$str = trim(strtolower($str));
		return $str;
	}


	public static function getCurrencyPrice($price, $currency_type=1)
	{
		$currency = Yii::app()->params['currency'];
		if($_COOKIE['currency']){
			  $currency_type = $_COOKIE['currency'];
		}
			return $currency['symbol'][$currency_type].round($price*$currency['exchange_rate'][$currency_type]);
	}

	public static function getClientIp(){
		if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown"))
		$ip = getenv("HTTP_CLIENT_IP");
		else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown"))
		$ip = getenv("HTTP_X_FORWARDED_FOR");
		else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown"))
		$ip = getenv("REMOTE_ADDR");
		else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown"))
		$ip = $_SERVER['REMOTE_ADDR'];
		else
		$ip = "unknown";
		return($ip);
	}

	public static function mb_truncate_text($text, $length = 30, $truncate_string = '...', $truncate_lastspace = false){
		if ($text == ''){
			return '';
		}
		$encoding = "utf-8";
		if (mb_strlen($text, $encoding) > $length){
			$truncate_text = mb_substr($text, 0, $length - mb_strlen($truncate_string, $encoding), $encoding);
			if ($truncate_lastspace){
				$truncate_text = preg_replace('/\s+?(\S+)?$/', '', $truncate_text);
			}
			return $truncate_text.$truncate_string;
		}
		else{
			return $text;
		}
	}
}
