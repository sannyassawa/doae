<?php
	ob_start("ob_gzhandler");
	require_once('../inc/connectDB.php');
	
	header("Content-Type: text/html; charset=utf-8");
	
	
	echo $_POST["flag_index"];
	
	if (mysql_query("BEGIN",$conn)) {
		
			  for($i=0;$i<count($_POST["flag_index"]);$i++)
				{
						if($_POST["flag_index"][$i] != "")
						{
							$sql = 	" update t_gallery set
										flag_index = '1'
										 ";
							echo $sql;
							if ($queryOK) {
								if (!mysql_query($sql,$conn)) {
									$queryOK = false;
								}
							}
						}
				}
				echo $sql;
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
		//echo "ระบบไม่สามารถบันทึกข้อมูลตามรายละเอียดที่ระบุได้ กรุณาลองอีกครั้ง หรือ ติดต่อเจ้าหน้าที่ที่เกี่ยวข้องเพื่อทำการตรวจสอบ";
		echo "จำนวนเกิน";
	}
	
	
	mysql_close($conn);
  	ob_end_flush();
?>