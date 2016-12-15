<?php include('header.php'); 
	if($_SESSION['userid'] == "") {	
		echo "<script> 
				alert('!!!!Username and Password incorrect!!!!');
				document.location.href='../index.php';
				</script>";
			exit();
	}else{
		
	}
								$sql = "SELECT
									t_qa.qa_id,
									t_qa.`name`,
									t_qa.phone,
									t_qa.email,
									t_qa.cus_type,
									t_qa.con_type,
									t_qa.title,
									t_qa.content,
									t_qa.create_date as qcreate_date,
									t_qa.update_id,
									t_qa.update_date,
									t_qa.responsi,
									t_qa.`status`,
									t_qa.active,
									`user`.fname,
									`user`.lname,
									t_comment.com_id,
									t_comment.`comment`,
									t_comment.update_date as cupdate_date,
									t_status.name as sname
									FROM
									t_qa
									LEFT JOIN t_comment ON t_qa.qa_id = t_comment.qa_id
									LEFT JOIN `user` ON `user`.user_id = t_comment.create_id AND `user`.user_id = t_comment.update_id
									LEFT JOIN t_status ON t_qa.`status` = t_status.status_id
									WHERE t_qa.qa_id = ".$_GET['qa_id'];
			
	$objQuery = mysql_query($sql);
	$row = mysql_fetch_array($objQuery);
?>


<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<script>
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>





<style>
.li_qa {
	background: #3a7f14;
    color: #fff !important;
}

</style>

<!-- Page Content -->
<div class="container">
		<div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">จัดการสมาชิก</h1>
            </div>
        </div>
			<div class="row">
            <!-- Sidebar Column -->
            <div class="col-md-3">
              <? include('sidebar.php') ?>
              
			</div>
            <!-- Content Column -->
            <div class="col-md-9">
				<div class="panel panel-default">
                        <div class="panel-heading text-right">
                            
							<input type="button" class="btn btn-danger" onclick="cmdCancel()" value="ย้อนกลับ">
							<input type="hidden" name="delID" id="delID" value="0"> 
                        </div>
						<div class="panel-body">
							<div class="qa_box">
								<table>
									<tr>
										<td style="text-align: right;"> <b>หัวข้อคำถาม : </b> </td>
										<td><?=$row['title'] ?></td>
									</tr>
									<tr>
										<td style="text-align: right;"> <b>เนื้อหา :  </b> </td>
										<td><?=$row['content'] ?></td>
									</tr>
									<tr>
										<td style="text-align: right;"></td>
										<td></td>
									</tr>
								</table>
							</div>
						</div>
						<div class="panel-footer">
							<p><b>ถามโดย :  </b><?=$row['name'] ?> <b> วันที่ตั้งคำถาม :  </b><?=$row['qcreate_date'] ?> <b> เบอร์โทรศัพท์ :  </b><?=$row['phone'] ?>   <b>อีเมล์ :  </b><?=$row['email'] ?> </p>
							<p><b>สถานะ :  </b><?=$row['sname'] ?></p>
						</div>
				</div>
			
				<? $sql = " SELECT
							t_comment.com_id,
							t_comment.qa_id,
							t_comment.`comment`,
							t_comment.create_id,
							t_comment.create_date,
							t_comment.update_id,
							t_comment.update_date,
							`user`.fname,
							`user`.lname
							FROM
							t_comment
							LEFT JOIN `user` ON `user`.user_id = t_comment.update_id 
							WHERE t_comment.qa_id = ".$_GET['qa_id'];
						
							$objQuery = mysql_query($sql);
				
							while ($row = mysql_fetch_array($objQuery)) {
								echo "<div class='panel panel-default'>
											<div class='panel-body'>
												<div class='comment_box_box'>
													".$row['comment']."
												</div>
											</div>
											<div class='panel-footer'>
												<p><b>ตอบโดย :  </b>".$row['fname']." ".$row['lname']." <b> วันที่ตอบคำถาม  :  </b>".$row['update_date']."  </p>
											</div>
									</div>";
							
							}
						?>
						
						
						
						<div class='panel panel-default'>
                        <div class='panel-heading text-right'>
						<div class="form-group" style="width: 250px;float: left;">
                                    <select class="form-control" name="status" id="status" >
										<?php
											$sql1 = "SELECT * FROM t_status";
											$objQuery1 = mysql_query($sql1);
											while ($row1 = mysql_fetch_array($objQuery1)) {
												
											
											echo "<option value='".$row1['status_id']."'>".$row1['name']."</option>";
											}
										?>
								
									</select>
							
                                </div>
                            <input type="button" class="btn btn-primary" onclick="cmdSave()" value="บันทึก">
							
                        </div>
						<div class='panel-body'>
							<div class='form_box'>
								<div class="form-group">
                                    <label>ตอบคำถาม</label>
                                    <textarea class="form-control" cols="20" id="comment" name="comment" rows="20">
											<?php echo $row['comment']; ?>
										</textarea>

										
                                </div>
							</div>
						</div>
						
					</div>
			</div>
				
		</div>
    </div>
</div>
<input type="hidden" name="user_id" id="user_id" value="<?=$_SESSION['userid'] ?>">
<input type="hidden" name="qa_id" id="qa_id" value="<?=$_GET['qa_id'] ?>"> 
<input type="hidden" name="ID" id="ID" value="0"> 
<script type="text/javascript">

function cmdCancel(){
	document.location.href="m_qa.php" ;
}

function cmdSave(){

	var cate = $('#qa_id').val();

	var params = "n=" + Math.random();
	params = params + "&" + $('#user_id').serialize();
	params = params + "&" + $('#qa_id').serialize();
    params = params + "&" + $('#status').serialize();
	params = params + "&" + $('#comment').serialize();


	$.ajax({
		type: "POST",
		url: "function/save_comment.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
				alert('บันทึกเรียบร้อยแล้ว')
				window.location.href = "form_qa.php?qa_id=" + cate;

			} else {
				alert(sxAjax);
			}	
		}
	});	
}


</script>





