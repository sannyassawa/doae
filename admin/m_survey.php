<?php include('header.php'); 
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
                <div id="bs-example-navbar-collapse-1">
					 <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>ID</th>
							<th>แบบสอบถาม</th>
							<th>สร้างเมื่อวันที่</th>
							<th>Option</th>
						</tr>
					</thead>
				 
					<tbody>
					
						<? $sql = " select * from t_survey   ";
						
							$objQuery = mysql_query($sql);
				
							while ($row = mysql_fetch_array($objQuery)) {
								echo "<tr>";
									echo "<td>".$row['survey_id']."</td>";
									echo "<td><a href='m_question.php?survey_id=".$row['survey_id']."'>".$row['name']."</a></td>";
									echo "<td>".$row['create_date']."</td>";
								
									echo "<td>";
									echo "
														<a href='form_qa.php?survey_id=".$row['survey_id']."' class='btn btn-info btn-xs'><i class='fa fa-pencil-square-o'></i> ตอบ</a>
														";
														if($row['active'] == 0){
															echo " <a href='#' class='btn btn-success btn-xs' onclick='cmdShow(".$row['survey_id'].")'><i class='fa fa-minus-square-o'></i> แสดง</a>";
														}else{
															echo " <a href='#' class='btn btn-warning btn-xs' onclick='cmdHidden(".$row['survey_id'].")'><i class='fa fa-minus-square-o'></i> ซ่อน</a>";
														}
														
												echo " <a href='#' class='btn btn-danger btn-xs' onclick='cmdDel(".$row['survey_id'].")'><i class='fa fa-trash-o'></i> ลบ</a></td>";
								echo "</tr>";
							
							}
						?>
						
					</tbody>
				</table>
            
                    
            </div>
            </div>
        </div>
</div>
<input type="hidden" name="user_id" id="user_id" value="<?=$_SESSION['userid'] ?>">
<script type="text/javascript">
function cmdNew(){


	var params = "n=" + Math.random();
	params = params + "&" + $('#user_id').serialize();
	params = params + "&" + $('#txtQN').serialize();



	$.ajax({
		type: "POST",
		url: "function/add_survey.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
				alert('บันทึกเรียบร้อยแล้ว')
				window.location.href = "m_survey.php";

			} else {
				alert(sxAjax);
			}	
		}
	});	
}
</script>

<? include('footer.php'); ?>



