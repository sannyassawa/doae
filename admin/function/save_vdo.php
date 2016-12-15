<?php
	ob_start("ob_gzhandler");
	require_once('../inc/connectDB.php');
	
	header("Content-Type: text/html; charset=utf-8");
	
	
	
	$userid = intval($_POST['user_id']);

    $vdo_id = intval($_POST['vdo_id']);
	$flag_index = intval($_POST['flag_index']);
	$url ="'".trim($_POST['url'])."'";
    $title ="'".trim($_POST['title'])."'";
	$title_en ="'".trim($_POST['title_en'])."'";
	$cat_vdo_id = intval($_POST['cat_vdo_id']);
    $content ="'".trim($_POST['content'])."'";
	$content_en ="'".trim($_POST['content_en'])."'";



	
 	$queryOK = true;
	if (mysql_query("BEGIN",$conn)) {
		
		
			if($vdo_id == 0){
				
				//echo $sql;
			

				if ($queryOK) {
					if (!mysql_query($sql,$conn)) {
						$queryOK = false;
					}
				}			
				
			}
			else {
				
				$sql = " Update t_vdo set ";
				$sql .= "url = $url,";
				$sql .= "flag_index = $flag_index,";
				$sql .= "title = $title,";
				$sql .= "title_en = $title_en,";
				$sql .= "content = $content,";
				$sql .= "content_en = $content_en,";
				$sql .= "cat_vdo_id = $cat_vdo_id,";
				$sql .= "update_id = $userid, ";
				$sql .= "update_date = Now()";
				$sql .= "where vdo_id = $vdo_id";
				
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