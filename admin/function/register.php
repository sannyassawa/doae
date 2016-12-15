<?php
	ob_start("ob_gzhandler");
	require_once('../inc/connectDB.php');
	
	header("Content-Type: text/html; charset=utf-8");
	
	function randomToken($len) { 
					srand( date("s") ); 
					$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz"; 
					$chars.= "1234567890"; // กำหนดอักขษะที่จะนำมา random แก้ได้นะ 
					$ret_str = ""; 
					$num = strlen($chars); 
					for($i=0; $i < $len; $i++) { 
					$ret_str.= $chars[rand()%$num]; // ใช้ฟังชั่น rand() เข้ามาช่วยในการทำงาน 
					} 
					return $ret_str; 
					} 
					
					$code = randomToken(10); // เรียกฟังชั่นขึ้นมาใช้งาน โดยกำหนดค่า พารามิเตอร์ลงไป ว่าจะใช้กี่ตัวอักษร ในตัวอย่างใช้ 5 ตัวอักษรครับ 
					
					//echo $code;
					
					
	
	$userid = intval($_POST['user_id']);

 
    $email ="'".trim($_POST['email'])."'";
	$password ="'".trim($_POST['password'])."'";
    $phone ="'".trim($_POST['phone'])."'";
	$name ="'".trim($_POST['name'])."'";


 	$queryOK = true;
	if (mysql_query("BEGIN",$conn)) {
		
		
			if($member_id == 0){
				$sql = " INSERT ignore INTO t_member
					 (  create_date, name,email,phone,password,token,active) ";
				$sql .= " VALUES ";
				$sql .= "( now(), $name,$email,$phone,$password,'$code',1 )";
				
				//echo $sql;
			

				if ($queryOK) {
					if (!mysql_query($sql,$conn)) {
						$queryOK = false;
					}
				}			
				
			}
			else {
				
				$sql = " Update t_member set ";
				$sql .= "email = $email,";
				$sql .= "password = $password,";
				$sql .= "phone = $phone,";
				$sql .= "name = $name";
				$sql .= "where member_id = $member_id";
				
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