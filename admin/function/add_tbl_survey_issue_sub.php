<?php
	ob_start("ob_gzhandler");
	require_once('../inc/connectDB.php');
	
	header("Content-Type: text/html; charset=utf-8");

$sql = " SELECT max(id) ";
$sql .= " FROM tbl_survey_issue_sub ";
$rs=mysql_query($sql,$conn);
$rs = mysql_fetch_array($rs);

$id = $rs['max(id)'];
$id = $id+1;
$id_survey_issue = $_POST["id_survey_issue"];

    $status = intval($_POST['status']);
	//$type = intval($_POST['type']);
    $title ="'".trim($_POST['topic'])."'";



 	$queryOK = true;
	if (mysql_query("BEGIN",$conn)) {

		



                $sql = " INSERT  INTO tbl_survey_issue_sub
					 ( id,id_survey_issue,title_th, status, create_date,update_date) ";
                $sql .= " VALUES ";
                $sql .= "( $id,$id_survey_issue,$title, $status, now(),now() )";
				


				
				if ($queryOK) {
					if (!mysql_query($sql,$conn)) {
						$queryOK = false;
					}
				}


            
			
			//echo $sql;

		if ($queryOK) {
			$result = mysql_query("COMMIT",$conn);
            header("Location: ../survey_issue_sub_topic_list.php?id=$id_survey_issue");

		} 
		else {
			echo "1ßERROR : ไม่สามารถบันทึกข้อมูล LOG กรุณาแจ้งเจ้าหน้าที่ IT เพื่อทำการตรวจสอบครับ\n "  . mysql_error($conn);
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