<?php
	ob_start("ob_gzhandler");
	require_once('../inc/connectDB.php');
	
	header("Content-Type: text/html; charset=utf-8");
	
	
	
	$userid = intval($_POST['user_id']);

    $com_id = intval($_POST['com_id']);
	$qa_id = intval($_POST['qa_id']);
	$status = intval($_POST['status']);
	
    $comment ="'".trim($_POST['comment'])."'";




	
 	$queryOK = true;
	if (mysql_query("BEGIN",$conn)) {
		
		
			$sql = " INSERT ignore INTO t_comment
					 ( qa_id,comment,create_id, create_date, update_id,update_date) ";
			$sql .= " VALUES ";
			$sql .= "( $qa_id,$comment,$userid, now(), $userid,now() )";
			
			if ($queryOK) {
				if (!mysql_query($sql,$conn)) {
					$queryOK = false;
				}
			}
			
				$sql = " Update t_qa set ";
				$sql .= "status = $status,";
				$sql .= "update_id = $userid, ";
				$sql .= "update_date = Now()";
				$sql .= "where qa_id = $qa_id";
				
				if ($queryOK) {
					if (!mysql_query($sql,$conn)) {
						$queryOK = false;
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