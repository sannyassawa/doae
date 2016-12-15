<?  session_start();
	ob_start("ob_gzhandler");
	require_once('../inc/connectDB.php');

	$id = $_POST['id'];
	$txtName_TH = $_POST['txtName_TH'];
	$txtName_EN = $_POST['txtName_EN'];
	$function_uri = $_POST['function_uri'];
	//echo $txtName_EN;
//function_uri
	header("Content-Type: text/html; charset=utf-8");
	$strSQL = " UPDATE functions SET name_en= '$txtName_EN', name = '$txtName_TH' ,function_uri = '$function_uri' 
				WHERE function_id = '$id' "  ;
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	header("location:../m_menu.php");
	
	mysql_close();
?>