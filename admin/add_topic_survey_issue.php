<?php include('header.php'); ?>
<?php include('function/form_navigator.php'); ?>


<div class="container">
	<?php
	$sql1 = " select * from  tbl_survey_issue where id = '".$_GET['id_survey_sub']."'";
	$query1 = mysql_query($sql1);
	$main1 = mysql_fetch_array($query1);
	//echo json_encode();
	$sql = " select * from tbl_survey where id = '".$main1['id']."'";
	$query = mysql_query($sql);
	$main = mysql_fetch_array($query);
	$array_tab["contactperson"]["th"]="ข้อมูลการติดต่อ";
	$array_tab["contactperson"]["en"]="ข้อมูลการติดต่อ";
	$array_tab["servay"]["th"]="แบบสำรวจ";
	$array_tab["servay"]["en"]="แบบสำรวจ";
	$array_tab["OnlinePoll"]["th"]=(strlen($main['title_th'])>50)?mb_substr($main['title_th'], 0, 50, 'utf-8').'...':$main['title_th'];
	$array_tab["OnlinePoll"]["en"]=(strlen($main['title_en'])>50)?mb_substr($main['title_en'], 0, 50, 'utf-8').'...':$main['title_en'];
	$link["contactperson"]["th"]="contact.php";
	$link["contactperson"]["en"]="contact.php";
	$link["servay"]["th"]="survey.php";
	$link["servay"]["en"]="survey.php";
	$link["OnlinePoll"]["th"]="survey_issue_topic_list.php?id_survey_sub=".$main1['id'];
	$link["OnlinePoll"]["en"]="survey_issue_topic_list.php?id_survey_sub=".$main1['id'];

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
$tab["OnlinePoll"]["th"]=(strlen($main['title_th'])>50)?mb_substr($main['title_th'], 0, 50, 'utf-8').'...':$main['title_th'];
$tab["OnlinePoll"]["en"]=(strlen($main['title_en'])>50)?mb_substr($main['title_en'], 0, 50, 'utf-8').'...':$main['title_en'];
$link_tab["OnlinePoll"]["th"]="survey_issue_topic_list.php?id_survey_sub=".$main1['id'];
$link_tab["OnlinePoll"]["en"]="survey_issue_topic_list.php?id_survey_sub=".$main1['id'];

?>
		<div class="row">
			<div class="col-lg-12">
				<?php
				form_navigator($tab,$link_tab);?>

				<form action="function/add_tbl_survey_issue.php" method="POST">
<?php

ob_start("ob_gzhandler");


header("Content-Type: text/html; charset=utf-8");


echo '
<pre style="border: 0; background-color: transparent; " >
	หัวข้อประเด็น <input type="text" name = "topic" id="topic" value = " "  style="width:50%"><br>
สถานะการแสดงผล     <select name="status" id="status">
    				<option value="1">ใช้งาน</option>
  					<option value="0">ไม่ใช้งาน</option>
 					</select><br><input type="hidden" id = "id" name="id" value = " ">
				<input type ="submit" id="Topic_survay" name="Topic_survay" value="เพิ่ม"></pre>
				<input type="hidden" id="id_survey_sub" name="id_survey_sub" value = "'.$_GET["id_survey_sub"].'">'

;


?>


					</form>
			</div>
			
        </div>
</div>



<? include('footer.php'); ?>



