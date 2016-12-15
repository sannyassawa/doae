<?  require_once('../inc/connectDB.php');
	
	header("Content-Type: text/html; charset=utf-8");
	
	
	
	function get_news($id){
		$sql = "SELECT `id`, `decisions_id`, `decisions_subid` FROM `tbl_callrecord` WHERE `id` = '".$recordid."' AND `cuslist_id` = ".$cusid." AND `status` = '1'";
		return $sql;	
	}
?>