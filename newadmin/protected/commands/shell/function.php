<?php
function change_proxy($url)
{
	  $snoopy = new Snoopy();
	  //$snoopy->referer = "http://tp.18cccc.com";
	  $snoopy->referer = "http://conelcorazonenchina.blogspot.com";
	  $snoopy->agent = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 2.0.50727; MAXTHON 2.0)';
	  $snoopy->rawheaders["Pragma"] = 'no-cache';
	  $snoopy->proxy_host = '199.115.231.51'; 
	  $snoopy->proxy_port = '3128'; 
	  $snoopy->rawheaders["X_FORWARDED_FOR"] = ""; 
	  $snoopy->fetch($url);
	  return $snoopy->results;
}
