<?php
	ob_start("ob_gzhandler");
	require_once('../inc/connectDB.php');

	header("Content-Type: text/html; charset=utf-8");

	$userid = intval($_POST['user_id']);
	$cat_people_id= intval($_POST['cat_people_id']);


 	$queryOK = true;
	if (mysql_query("BEGIN",$conn)) {

			$sql = " Update t_people_cat set ";
			$sql .= "active = 0,";
            $sql .= "update_id = $userid, ";
            $sql .= "update_date = Now()";
            $sql .= "where cat_people_id = $cat_people_id";

			//echo $sql;

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