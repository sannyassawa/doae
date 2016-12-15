<?php
	ob_start("ob_gzhandler");
	require_once('../inc/connectDB.php');
	
	header("Content-Type: text/html; charset=utf-8");
	

	
	$userid = intval($_POST['user_id']);
	
	
	
	
		
	
 	$queryOK = true;
	if (mysql_query("BEGIN",$conn)) {
		
			$sql = " SELECT MAX(article_id) AS mns";
			$sql .= " FROM t_article  ";
			
			if ($queryOK) {
				if (!mysql_query($sql,$conn)) {
					$queryOK = false;
				}
				else {
					$result = mysql_query($sql, $conn);
					$row = mysql_fetch_array($result);
					$mns = $row['mns'];
					$sort_order = $mns + 1;
				}
			}	
			
			
		
		
		
		
			$sql = " INSERT ignore INTO t_article
					 ( create_id, create_date, update_id,update_date,sort_order,active) ";
			$sql .= " VALUES ";
			$sql .= "( $userid, now(), $userid,now(),$sort_order,1 )";
			
			
		
			if ($queryOK) {
				if (!mysql_query($sql,$conn)) {
					$queryOK = false;
				}
			}
			
			$sql = " SELECT MAX(article_id) AS MaxID ";
			$sql .= " FROM t_article  ";
			
			if ($queryOK) {
				if (!mysql_query($sql,$conn)) {
					$queryOK = false;
				}
				else {
					$result = mysql_query($sql, $conn);
					$row = mysql_fetch_array($result);
					$MaxID = $row['MaxID'];
					
				}
			}
			
			

		
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
		echo "Completed,".$MaxID;	
	} else {
		echo "ระบบไม่สามารถบันทึกข้อมูลตามรายละเอียดที่ระบุได้ กรุณาลองอีกครั้ง หรือ ติดต่อเจ้าหน้าที่ที่เกี่ยวข้องเพื่อทำการตรวจสอบ";
	}

	mysql_close($conn);
  	ob_end_flush();
?>