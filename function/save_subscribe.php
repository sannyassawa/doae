<?php
	ob_start("ob_gzhandler");
	require_once('../inc/connectDB.php');
	
	header("Content-Type: text/html; charset=utf-8");
	
	
	
	$userid = intval($_POST['user_id']);

    $member_id = intval($_POST['member_id']);
    $news1 ="'".trim($_POST['news1'])."'";
	$news2 ="'".trim($_POST['news2'])."'";
	$news3 ="'".trim($_POST['news3'])."'";
	$news4 ="'".trim($_POST['news4'])."'";
	$news5 ="'".trim($_POST['news5'])."'";
	$news6 ="'".trim($_POST['news6'])."'";


	
 	$queryOK = true;
	if (mysql_query("BEGIN",$conn)) {
		
			$sql = " SELECT member_id as mem";
			$sql .= " FROM t_subscribe where member_id = ".$member_id;
			
			if ($queryOK) {
				if (!mysql_query($sql,$conn)) {
					$queryOK = false;
				}
				else {
					$result = mysql_query($sql, $conn);
					$row = mysql_fetch_array($result);
					$mem = $row['mem'];
				
				}
			}
			echo  $mem;
		
			if($mem == 0){
				
				$sql = " INSERT ignore INTO t_subscribe
					 ( member_id,news1,news2,news3,news4,news5,news6 ) ";
				$sql .= " VALUES ";
				$sql .= "( $member_id,$news1,$news2,$news3,$news4,$news5,$news6 )";
				
			

				if ($queryOK) {
					if (!mysql_query($sql,$conn)) {
						$queryOK = false;
					}
				}			
				
			}
			else {
				
				$sql = " Update t_subscribe set ";
				$sql .= "news1 = $news1,";
				$sql .= "news2 = $news2,";
				$sql .= "news3 = $news3,";
				$sql .= "news4 = $news4,";
				$sql .= "news5 = $news5,";
				$sql .= "news6 = $news6";
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