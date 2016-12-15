<?php
	session_start();
	ob_start("ob_gzhandler");
	require_once('../inc/connectDB.php');
	
	header("Content-Type: text/html; charset=utf-8");
		
    $order = intval($_POST['order']);
    $table = $_POST['table'];
    $type = intval($_POST['type']);

    //echo $Content;

	//$collecName ="'".trim($_POST['collecName'])."'";
    //$roomId = intval($_POST['roomId']);
	if($type==1){
            $sqlselect = "SELECT MAX(CONVERT(sort_order , UNSIGNED INTEGER)) M FROM ".$table." WHERE sort_order < ".$order;

             $objQuery = mysql_query($sqlselect);

        while ($row = mysql_fetch_array($objQuery)) {

            $next = $row["M"];
        }

    }
    else{
        $sqlselect = "SELECT MIN(CONVERT(sort_order , UNSIGNED INTEGER)) M FROM ".$table." WHERE sort_order > ".$order;
        $objQuery = mysql_query($sqlselect);

        while ($row = mysql_fetch_array($objQuery)) {

            $next = $row["M"];

        }

    }




 	$queryOK = true;
	if (mysql_query("BEGIN",$conn)) {
     
   

				
			//echo $path;

        $temp = "Update ".$table." SET
            		sort_order = '0'
            		where sort_order = $next ";
        $sql = "Update ".$table." SET
            		sort_order = $next
            		where sort_order = $order ";
        $sql1 = "Update ".$table." SET
            		sort_order = $order
            		where sort_order = '0' ";



            if ($queryOK) {
				if (!mysql_query($temp,$conn)) {
					$queryOK = false;
				}
                if (!mysql_query($sql,$conn)) {
                    $queryOK = false;
                }
                if (!mysql_query($sql1,$conn)) {
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