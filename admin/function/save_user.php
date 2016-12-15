<?php
	ob_start("ob_gzhandler");
	require_once('../inc/connectDB.php');
	
	header("Content-Type: text/html; charset=utf-8");
	
	
	
	$user_id = intval($_POST['user_id']);
	$userid = intval($_POST['userid']);


    $username ="'".trim($_POST['username'])."'";
	$fname ="'".trim($_POST['fname'])."'";
	$lname ="'".trim($_POST['lname'])."'";
    $tel ="'".trim($_POST['tel'])."'";
	$email ="'".trim($_POST['email'])."'";



	
 	$queryOK = true;
	if (mysql_query("BEGIN",$conn)) {
		
		
			if($user_id == 0){
				
					$sql = " INSERT ignore INTO user
					 ( username,password,fname,lname,email,tel,create_id, create_date, update_id,update_date,active) ";
					$sql .= " VALUES ";
					$sql .= "( $username,'doae1234',$fname,$lname,$email,$tel,$userid, now(), $userid,now(),1 )";
			

				if ($queryOK) {
					if (!mysql_query($sql,$conn)) {
						$queryOK = false;
					}
				}			
				
			}
			else {
				
				$sql = " Update user set ";
				$sql .= "username = $username,";
				$sql .= "fname = $fname,";
				$sql .= "lname = $lname,";
				$sql .= "email = $email,";
				$sql .= "tel = $tel,";
				$sql .= "update_id = $userid, ";
				$sql .= "update_date = Now()";
				$sql .= "where user_id = $user_id";
				
				if ($queryOK) {
					if (!mysql_query($sql,$conn)) {
						$queryOK = false;
					}
				}
				
				if ($queryOK) {
					if (!mysql_query($sql,$conn)) {
						$queryOK = false;
					}
				}
			}

            
			
			//echo $sql;

		if ($queryOK) {
			$result = mysql_query("COMMIT",$conn);
		} 
		else {
			echo "1ERROR : ไม่สามารถบันทึกข้อมูล LOG กรุณาแจ้งเจ้าหน้าที่ IT เพื่อทำการตรวจสอบครับ\n "  . mysql_error($conn);
			echo $sql;
			$result = mysql_query("ROLLBACK",$conn);	
			$queryOK = false;
		}
	} 
	else {
		$queryOK = false;
		echo "2ERROR : ไม่สามารถบันทึกข้อมูล LOG กรุณาแจ้าหน้าที่ IT เพื่อทำการตรวจสอบครับ\n". mysql_error($conn);
	}
	if ($queryOK) {
            echo "Completed";
	
	} else {
		echo "ระบบไม่สามารถบันทึกข้อมูลตามรายละเอียดที่ระบุได้ กรุณาลองอีกครั้ง หรือ ติดต่อเจ้าหน้าที่ที่เกี่ยวข้องเพื่อทำการตรวจสอบ";
	}

	mysql_close($conn);
  	ob_end_flush();
?>