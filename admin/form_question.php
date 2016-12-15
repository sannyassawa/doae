<?php include('header.php'); 

$sql = "select * from t_question where qn_id = ".$_GET['qn_id'];
			
	$objQuery = mysql_query($sql);
	$row = mysql_fetch_array($objQuery);
	
	//echo $sql;
?>
<style>
.li_survey{
	background: #3a7f14;
    color: #fff !important;
}

</style>

<!-- Page Content -->
<div class="container">
		<div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">จัดการแบบสำรวจ</h1>
            </div>
        </div>
			<div class="row">
            <!-- Sidebar Column -->
            <div class="col-md-3">
              <? include('sidebar.php') ?>
              
			</div>
            <!-- Content Column -->
            <div class="col-md-9">
				<input style="width: 565px;" type="text" name="txtQN" id="txtQN" value="<?=$row['name'] ?>"><input type="button" value="แก้ไข" onclick="cmdSave()" >
		
				
            </div>
            </div>
        </div>
</div>
<input type="hidden" name="user_id" id="user_id" value="<?=$_SESSION['userid'] ?>">
<input type="hidden" id="qn_id" name="qn_id" value="<?=$_GET['qn_id'] ?>">
<input type="hidden" id="survey_id" name="survey_id" value="<?=$row['survey_id'] ?>">
<script type="text/javascript">
function cmdSave(){


	var survey_id = $('#survey_id').val();

	var params = "n=" + Math.random();
	params = params + "&" + $('#user_id').serialize();
	params = params + "&" + $('#survey_id').serialize();
	params = params + "&" + $('#qn_id').serialize();
	params = params + "&" + $('#txtQN').serialize();



	$.ajax({
		type: "POST",
		url: "function/save_qn.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
				alert('บันทึกเรียบร้อยแล้ว')
				window.location.href = "m_question.php?survey_id=" + survey_id;

			} else {
				alert(sxAjax);
			}	
		}
	});	
}
</script>
<? include('footer.php'); ?>



