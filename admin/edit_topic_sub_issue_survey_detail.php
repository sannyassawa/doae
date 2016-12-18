<?php include('header.php'); ?>
<?php include('function/form_navigator.php'); ?>


<div class="container">
	<?php
	$sql = " select * from tbl_survey where id = '".$_GET['parentid']."'";
	$query = mysql_query($sql);
	$main = mysql_fetch_array($query);
	$sql1 = " select * from  tbl_survey_issue where id = '".$_GET['parentid']."'";
	$query1 = mysql_query($sql1);
	$main1 = mysql_fetch_array($query1);
	$array_tab["contactperson"]["th"]="ข้อมูลการติดต่อ";
	$array_tab["contactperson"]["en"]="ข้อมูลการติดต่อ";
	$array_tab["servay"]["th"]="แบบสำรวจ";
	$array_tab["servay"]["en"]="แบบสำรวจ";
	$array_tab["OnlinePoll"]["th"]=(strlen($main['title_th'])>50)?mb_substr($main['title_th'], 0, 50, 'utf-8').'...':$main['title_th'];
	$array_tab["OnlinePoll"]["en"]=(strlen($main['title_en'])>50)?mb_substr($main['title_en'], 0, 50, 'utf-8').'...':$main['title_en'];
	$array_tab["OnlinePoll1"]["th"]=(strlen($main['title_th'])>50)?mb_substr($main1['title_th'], 0, 50, 'utf-8').'...':$main1['title_th'];
	$array_tab["OnlinePoll1"]["en"]=(strlen($main['title_en'])>50)?mb_substr($main1['title_en'], 0, 50, 'utf-8').'...':$main1['title_en'];
	$link["contactperson"]["th"]="contact.php";
	$link["contactperson"]["en"]="contact.php";
	$link["servay"]["th"]="survey.php";
	$link["servay"]["en"]="survey.php";
	$link["OnlinePoll"]["th"]="#";
	$link["OnlinePoll"]["en"]="#";

	form_navigator($array_tab,$link);

	?>


	<hr style=" -moz-border-bottom-colors: none;
  -moz-border-image: none;
  -moz-border-left-colors: none;
  -moz-border-right-colors: none;
  -moz-border-top-colors: none;
  border-color: #EEEEEE;
  -moz-use-text-color #FFFFFF;
  border-style: solid none;
  border-width: 1px 0;
  margin: 18px 0;" />

<?php
$array_tab["OnlinePoll"]["th"]=(strlen($main['title_th'])>50)?mb_substr($main['title_th'], 0, 50, 'utf-8').'...':$main['title_th'];
$array_tab["OnlinePoll"]["en"]=(strlen($main['title_en'])>50)?mb_substr($main['title_en'], 0, 50, 'utf-8').'...':$main['title_en'];
$link_tab["OnlinePoll"]["th"]="survey_issue_sub_topic_list.php?id=".$result["id"];
$link_tab["OnlinePoll"]["en"]="survey_issue_sub_topic_list.php?id=".$result["id"];
$tab["OnlinePoll1"]["th"]=(strlen($main['title_th'])>50)?mb_substr($main1['title_th'], 0, 50, 'utf-8').'...':$main1['title_th'];
$tab["OnlinePoll1"]["en"]=(strlen($main['title_en'])>50)?mb_substr($main1['title_en'], 0, 50, 'utf-8').'...':$main1['title_en'];
$link_tab["OnlinePoll1"]["th"]="survey_issue_sub_topic_list.php?id=".$result["id"];
$link_tab["OnlinePoll1"]["en"]="survey_issue_sub_topic_list.php?id=".$result["id"];

?>
		<div class="row">
			<div class="col-lg-12">


				<form action="function/save_tbl_survey_issue_sub.php" method="POST">
<?php

ob_start("ob_gzhandler");


header("Content-Type: text/html; charset=utf-8");



$sql = " SELECT * ";
$sql .= " FROM tbl_survey_issue_sub  where id = ".$_GET["pkid"];




$result = mysql_query($sql);
$result = mysql_fetch_array($result);
$tab["Topicservay"]["th"]=$result["title_th"];
$tab["Topicservay"]["en"]=$result["title_th"];
$link_tab["Topicservay"]["th"]="edit_topic_sub_issue_survey_detail.php?parentid=".$_GET["parentid"]."&pkid=".$_GET["pkid"];
$link_tab["Topicservay"]["en"]="edit_topic_sub_issue_survey_detail.php?parentid=".$_GET["parentid"]."&pkid=".$_GET["pkid"];
				form_navigator($tab,$link_tab);
echo '
<pre style="border: 0; background-color: transparent; " >
	หัวข้อประเด็น <input type="text" name = "topic" id="topic" value = "'.$result["title_th"].'"  style="width:50%"><br>
สถานะการแสดงผล     <select name="status" id="status">
    				<option value="1">ใช้งาน</option>
  					<option value="0">ไม่ใช้งาน</option>
 					</select><br><input type="hidden" id = "id" name="id" value = "'.$result["id"].'">
 					<input type ="hidden" id="id_survey_issue" name="id_survey_issue" value="'.$_GET["parentid"].'">
				<input type ="submit" id="Topic_survay" name="Topic_survay" value="บันทึก"></pre>';


?>


					</form>
			</div>
			
        </div>
</div>



<? include('footer.php'); ?>



