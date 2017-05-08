<?php
 $fName = $_GET['f'];
   $file = fopen($fName, 'r');
   if ($file){
  	 $stream =fread($file, filesize($fName));
     fclose($file);
     echo $stream;
   }
  
?>