<?php
$fName=$_GET['f'];
$file=fopen($fName,'r');
if ($file){
	$size = filesize($fName);
	$stream=fread($file,$size);
    //返 回文件类型 
	header("Content-type: application/octet-stream");
    header("Accept-Length: $size");
    
	fclose($file);
	echo $stream;
}
?>