<?php include('header.php'); ?>
<?php include('function/form_issue.php'); ?>

<!-- Page Content -->

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

	form_issue($array_tab,$link);

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

		<div class="row">
			<div class="col-lg-12">
				<form action="#" method="POST">

				<pre style = 'color: #333;'>
					    หัวข้อประเด็น <input type="text" id="topic" style="width:50%"><br>
					สถานะการแสดงผล <select name="type" id="status">
    <option value="active">ใช้งาน</option>
    <option value="non-active">ไม่ใช้งาน</option>
  </select><br>
					               <input type ='submit' id="Topic_survay" name="Topic_survay" value="บันทึก">
					</pre>

					</form>
			</div>
			
        </div>
</div>



<? include('footer.php'); ?>



