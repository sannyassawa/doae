<?  session_start();
	ob_start("ob_gzhandler");
	require_once('../inc/connectDB.php');

	if($_POST['txtPassword'] == "doae1234"){

		header("location:../changepassword.php");
	}else{
	
	header("Content-Type: text/html; charset=utf-8");
	$strSQL = "SELECT * FROM user WHERE username = '".mysql_real_escape_string($_POST['txtUsername'])."' 
	and password = '".mysql_real_escape_string($_POST['txtPassword'])."' AND active = 1"  ;
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	
	}
	//echo $strSQL;
	
	
	if(!$objResult)
	{
			echo "<script> 
				alert('!!!!Username and Password incorrect!!!!');
				document.location.href='../admin.php';
				</script>";
			exit();
	}
	else
	{
			$_SESSION["userid"] = $objResult["user_id"];
			$_SESSION["fname"] = $objResult["fname"];
			$_SESSION["lname"] = $objResult["lname"];
			$_SESSION["levelid"] = $objResult["level_id"];
			
			session_write_close();
			header("location:../index.php");
			
	}
	mysql_close();
?>