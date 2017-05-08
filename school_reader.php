<?php
   include 'school.php';
   $area = $_GET['area'];
   $machine_code = $_GET['machine_code'];
   dgLog($area."::".$machine_code,"code");
   if (array_key_exists($area,$school)){
   	if (array_key_exists($machine_code,$school[$area])){
   		echo  json_encode(array("school"=>$school[$area][$machine_code]));
   	}else{
   		echo json_encode(array("school"=>$machine_code.":机器码不匹配"));
   	}
   }else{
   		echo json_encode(array("school"=>$area.":学校code不匹配"));
   }
//   print_r($school);
  // if(array_key_exists($area, $school) && array_key_exists($machine_code, $machine_code[$area])){
  
//    }else{
//    	echo 0;
//    }

?>