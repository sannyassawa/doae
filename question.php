<?php include('header.php'); 
	$sql = "select * from t_survey where survey_id = ".$_GET['survey_id'];
			
	$objQuery = mysql_query($sql);
	$row = mysql_fetch_array($objQuery);
?>


<!-- Page Content -->
<div class="container">
		<div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
					<span class="en">Online Survey</span><span class="th">แบบสำรวจ</span>
				</h1>
				
                <ol class="breadcrumb">
                   <li>
						<span class="en"><a href="index.php">Home</a></span>
						<span class="th"><a href="index.php">หน้าหลัก</a></span>
                    </li>
                    <li>
						<span class="en"><a href="contact.php">ข้อมูลการติดต่อ</a></span>
						<span class="th"><a href="contact.php">ข้อมูลการติดต่อ</a></span>
					</li>
                </ol>
            </div>
        </div>
	
		<div class="row">
			<div class="col-lg-12">
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
				<br />
				<br />
				<br />
				<input type="button" class="btn btn-primary" onclick="cmdSave()" value="บันทึก">
			</div>
			
        </div>
</div>

<script type="text/javascript">
function cmdSave(){
	alert('บันทึกเรียบร้อยแล้ว ขอบคุณที่ใช้บริการ');
	window.location.href = "contact.php";

}
</script>
<? include('footer.php'); ?>



