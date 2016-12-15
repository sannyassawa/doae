<?php include('header.php'); 

$sql = "select * from t_survey where survey_id = ".$_GET['survey_id'];
			
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
				<input style="width: 565px;" type="text" name="txtQN" id="txtQN" value=""><input type="button" value="เพิ่ม" onclick="cmdNew()" >
				<h4><?=$row['name'] ?></h4>
				<table border='1' style='width:100%'>
					<tr>
						<td style='text-align:center'>หัวข้อการประเมิน</td>
						<td style='text-align:center'>มากที่สุด</td>
						<td style='text-align:center'>มาก</td>
						<td style='text-align:center'>ปานกลาง</td>
						<td style='text-align:center'>ค่อนข้างน้อย</td>
						<td style='text-align:center'>น้อย</td>
					</tr>
				<?
					$sql1 = "select * from t_question where survey_id = ".$row['survey_id']." ";
					$objQuery1 = mysql_query($sql1);
				
							while ($row1 = mysql_fetch_array($objQuery1)) {
								echo "<tr>";
								echo "<td><a href='form_question.php?qn_id=".$row1['qn_id']."'> ".$row1['name']." </a></td>";
								echo "<td style='text-align:center' ><input type='radio' id='q".$row1['qn_id']."' name='q".$row1['qn_id']."' value='5'></td>";
								echo "<td style='text-align:center' ><input type='radio' id='q".$row1['qn_id']."' name='q".$row1['qn_id']."' value='4'></td>";
								echo "<td style='text-align:center' ><input type='radio' id='q".$row1['qn_id']."' name='q".$row1['qn_id']."' value='3'></td>";
								echo "<td style='text-align:center' ><input type='radio' id='q".$row1['qn_id']."' name='q".$row1['qn_id']."' value='2'></td>";
								echo "<td style='text-align:center' ><input type='radio' id='q".$row1['qn_id']."' name='q".$row1['qn_id']."' value='1'></td>";
								echo "</tr>";
								
							}
				
				?>
				</table>
                
			
            </div>
            </div>
        </div>
</div>
<input type="hidden" name="user_id" id="user_id" value="<?=$_SESSION['userid'] ?>">
<input type="hidden" id="survey_id" name="survey_id" value="<?=$_GET['survey_id'] ?>">
<script type="text/javascript">
function cmdNew(){


	var survey_id = $('#survey_id').val();

	var params = "n=" + Math.random();
	params = params + "&" + $('#user_id').serialize();
	params = params + "&" + $('#survey_id').serialize();
	params = params + "&" + $('#txtQN').serialize();



	$.ajax({
		type: "POST",
		url: "function/add_qn.php",
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



