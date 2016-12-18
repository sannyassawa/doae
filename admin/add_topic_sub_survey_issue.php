<?php include('header.php'); ?>
<?php include('function/form_navigator.php'); ?>


<div class="container">
	<?php
	$array_tab["contactperson"]["th"]="ข้อมูลการติดต่อ";
	$array_tab["contactperson"]["en"]="ข้อมูลการติดต่อ";
	$array_tab["servay"]["th"]="แบบสำรวจ";
	$array_tab["servay"]["en"]="แบบสำรวจ";
	$array_tab["OnlinePoll"]["th"]="การสำรวจความคิดเห็นของประชาชน(Online Poll)";
	$array_tab["OnlinePoll"]["en"]="การสำรวจความคิดเห็นของประชาชน(Online Poll)";
	$link["contactperson"]["th"]="contact.php";
	$link["contactperson"]["en"]="contact.php";
	$link["servay"]["th"]="#";
	$link["servay"]["en"]="#";
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
$tab["OnlinePoll"]["th"]="การสำรวจความคิดเห็นของประชาชน(Online Poll)";
$tab["OnlinePoll"]["en"]="การสำรวจความคิดเห็นของประชาชน(Online Poll)";
$link_tab["OnlinePoll"]["th"]="#";
$link_tab["OnlinePoll"]["en"]="#";
$tab["Topicservay"]["th"]="ประเด็นการสำรวจ";
$tab["Topicservay"]["en"]="ประเด็นการสำรวจ";
$link_tab["Topicservay"]["th"]="#";
$link_tab["Topicservay"]["en"]="#";
?>
		<div class="row">
			<div class="col-lg-12">
				<?php
				form_navigator($tab,$link_tab);?>

				<form action="function/add_tbl_survey_issue_sub.php" method="POST">
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
				<input type="hidden" id="id_survey_issue" name="id_survey_issue" value = "'.$_GET["id_survey_issue"].'">';


?>


					</form>
			</div>
			
        </div>
</div>



<? include('footer.php'); ?>



