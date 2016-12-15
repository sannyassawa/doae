<?  session_start();
	ob_start("ob_gzhandler");
	require_once('../inc/connectDB.php');

	$password = $_POST['txtnew'];

	if($_POST['txtnew'] !== $_POST['txtconfirm']){

		header("location:../changepassword.php");
	}else{
	
	header("Content-Type: text/html; charset=utf-8");
	$strSQL = " UPDATE `user` SET password= '$password'
				WHERE `password`= 'doae1234' "  ;
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	
	}
	
	mysql_close();
?>