<?php
	ob_start("ob_gzhandler");
	require_once('../inc/connectDB.php');
	
	header("Content-Type: text/html; charset=utf-8");
	
	
	
	$userid = intval($_POST['user_id']);

    $email ="'".trim($_POST['lemail'])."'";
	$password ="'".trim($_POST['lpassword'])."'";



	
 	$queryOK = true;
	if (mysql_query("BEGIN",$conn)) {
		
			$sql = " SELECT *";
			$sql .= " FROM t_member where email = ".$email." and password = ".$password;
			
			if ($queryOK) {
				if (!mysql_query($sql,$conn)) {
					$queryOK = false;
				}
				else {
					$result = mysql_query($sql, $conn);
					$row = mysql_fetch_array($result);
					$member_id = $row['member_id'];
					$token = $row['token'];
				
				}
			}
			
			//echo $sql;
			
			if($member_id > 0){
				echo "Completed,".$token;
				
			}else{
				echo "รหัสผ่านไม่ถูกต้อง";
			}
		
			

		
	} 
	else {
		$queryOK = false;
		echo "2ERROR : ไม่สามารถบันทึกข้อมูล LOG กรุณาแจ้าหน้าที่ IT เพื่อทำการตรวจสอบครับ\n". mysql_error($conn);
	}
	

	mysql_close($conn);
  	ob_end_flush();
?>