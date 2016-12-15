<?php
	ob_start("ob_gzhandler");
	require_once('../inc/connectDB.php');
	
	header("Content-Type: text/html; charset=utf-8");
	
	
					
	
	$userid = intval($_POST['user_id']);

	$qa_id = intval($_POST['qa_id']);
    $name ="'".trim($_POST['name'])."'";
	$phone ="'".trim($_POST['phone'])."'";
    $cus_type ="'".trim($_POST['cus_type'])."'";
	$con_type ="'".trim($_POST['con_type'])."'";
	$respons ="'".trim($_POST['respons'])."'";
	$title ="'".trim($_POST['title'])."'";
	$content ="'".trim($_POST['content'])."'";



 	$queryOK = true;
	if (mysql_query("BEGIN",$conn)) {
		
		
			if($qa_id == 0){
				$sql = " INSERT ignore INTO t_qa
					 (  name,phone,cus_type,con_type,responsi,title,content,create_date,update_date,status) ";
				$sql .= " VALUES ";
				$sql .= "( $name,$phone,$cus_type,$con_type,$respons,$title,$content,now(),now(),1 )";
				
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