<?php  
header("Content-type:application/json; charset=UTF-8");            
header("Cache-Control: no-store, no-cache, must-revalidate");           
header("Cache-Control: post-check=0, pre-check=0", false);      
require_once('inc/connectDB.php');

	$sql = "SELECT * FROM t_event WHERE  active = 1
								";
								
								//echo $sql;
						$objQuery = mysql_query($sql);
						while ($row = mysql_fetch_array($objQuery)) {
								$json_data[]=array(    
								"id"=>$row['event_id'],  
								"title"=>$row['title'],  
								"start"=>$row['start'], 
								"end"=>$row['end']
							 
							       
								// กำหนด event object property อื่นๆ ที่ต้องการ  
							); 
						}

$json= json_encode($json_data);    
   
echo $json;  

  
    

?>    
