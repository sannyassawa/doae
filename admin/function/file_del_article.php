<?php
	session_start();
	ob_start("ob_gzhandler");
	require_once('../inc/connectDB.php');
	
	header("Content-Type: text/html; charset=utf-8");
		
    $ID = intval($_POST['delID']);


    //echo $Content;

	//$collecName ="'".trim($_POST['collecName'])."'";
    //$roomId = intval($_POST['roomId']);

	
 	$queryOK = true;
	if (mysql_query("BEGIN",$conn)) {
     
   
            $sql = " SELECT file_id,name,path from t_article_file
					WHERE file_id = $ID ";
					$result = mysql_query($sql, $conn);
					$row = mysql_fetch_array($result);
					$path = $row['path'];
					$name = $row['name'];
				
			//echo $path;
            $sql = "Update t_article_file SET
            		active = 0
            		where file_id = $ID ";

            if ($queryOK) {
				if (!mysql_query($sql,$conn)) {
					$queryOK = false;
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
            echo "Completed";
	
	} else {
		echo "ระบบไม่สามารถบันทึกข้อมูลตามรายละเอียดที่ระบุได้ กรุณาลองอีกครั้ง หรือ ติดต่อเจ้าหน้าที่ที่เกี่ยวข้องเพื่อทำการตรวจสอบ";
	}

	mysql_close($conn);
  	ob_end_flush();
?>