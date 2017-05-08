<?php
	include_once 'yxt_curl.php';
	$url = "http://127.0.0.1/YXT/index.php?m=school_reader&area=wl&machine_code=aaaa";
	echo Curl::doCurlGetRequest($url);
?>