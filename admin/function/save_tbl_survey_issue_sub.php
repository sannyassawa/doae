<?php
	ob_start("ob_gzhandler");
	require_once('../inc/connectDB.php');
	
	header("Content-Type: text/html; charset=utf-8");
	
	
	
	$id = intval($_POST['id']);

    $status = intval($_POST['status']);
	//$type = intval($_POST['type']);
    $title ="'".trim($_POST['topic'])."'";
    $id_survey_issue = $_POST["id_survey_issue"];


 	$queryOK = true;
	if (mysql_query("BEGIN",$conn)) {
        echo "test1";
		
			if($id == 0){

				//echo $sql;
			

				if ($queryOK) {
					if (!mysql_query($sql,$conn)) {

						$queryOK = false;
					}
				}			
				
			}
			else {
				
				$sql = " Update tbl_survey_issue_sub set ";
				//$sql .= "parent_id = $parent_id,";
				$sql .= "title_th = $title,";
				//$sql .= "title_en = $title_en,";
				$sql .= "status = $status,";
				//$sql .= "content_en = $content_en,";
				//$sql .= "update_id = $userid, ";
				$sql .= "update_date = Now()";
				$sql .= "where id = $id";

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
            header("Location: ../survey_issue_sub_topic_list.php?id=$id_survey_issue");

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