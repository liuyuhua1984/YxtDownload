<?php
include_once 'yxt_curl.php';

if (isset($_REQUEST['m'])){
	include $_REQUEST['m'].".php";
}


/**
 * 写日志，方便测试（看网站需求，也可以改成把记录存入数据库）
 * 注意：服务器需要开通fopen配置
 *
 * @param $word 要写入日志里的文本内容
 *        	默认值：空值
 */
function dgLog($word="",$tag=""){
	$path="logs/";
	$path.=($tag==''?"log":$tag)."_";
	$path.=strftime("%Y_%m_%d",time());
	$path.=".log";

	$fp=fopen($path,"a");
	flock($fp,LOCK_EX);
	fwrite($fp,"[".strftime("%Y/%m/%d %H:%M:%S",time())."]>> ".$word."\r\n");
	flock($fp,LOCK_UN);
	fclose($fp);
}





























?>