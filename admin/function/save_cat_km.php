<?php
	ob_start("ob_gzhandler");
	require_once('../inc/connectDB.php');
	
	header("Content-Type: text/html; charset=utf-8");
	
	
	
	$userid = intval($_POST['user_id']);

    $cat_km_id = intval($_POST['cat_km_id']);
	$flag_index = intval($_POST['flag_index']);
    $name ="'".trim($_POST['name'])."'";
	$name_en ="'".trim($_POST['name_en'])."'";
	



	
 	$queryOK = true;
	if (mysql_query("BEGIN",$conn)) {
		
		
			if($cat_km_id == 0){
				
				$sql = " SELECT MAX(km_id) AS mns";
				$sql .= " FROM t_km  ";
				
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
			
				$sql = " INSERT ignore INTO t_km_cat
					 ( name,flag_index,name_en,create_id, create_date, update_id,update_date,sort_order,active) ";
			$sql .= " VALUES ";
			$sql .= "( $name,$flag_index,$name_en,  $userid, now(), $userid,now(),$sort_order,1 )";
			
				
				//echo $sql;
			

				if ($queryOK) {
					if (!mysql_query($sql,$conn)) {
						$queryOK = false;
					}
				}			
				
			}
			else {
				
				$sql = " Update t_km_cat set ";
				$sql .= "name = $name,";
				$sql .= "flag_index = $flag_index,";
				$sql .= "name_en = $name_en,";
				$sql .= "update_id = $userid, ";
				$sql .= "update_date = Now()";
				$sql .= "where cat_km_id = $cat_km_id";
				
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