<?php include('header.php'); 
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
                <h1 class="page-header">จัดการถาม-ตอบ</h1>
            </div>
        </div>
			<div class="row">
            <!-- Sidebar Column -->
            <div class="col-md-3">
              <? include('sidebar.php') ?>
              
			</div>
            <!-- Content Column -->
            <div class="col-md-9">
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>ID</th>
							<th>หัวข้อคำถาม</th>
							<th>ผู้ถาม</th>
							<th>วันที่ตั้งคำถาม</th>
							<th>ผู้ตอบ</th>
							<th>วันที่ตอบคำถาม</th>
							<th>สถานะ</th>
							<th>Option</th>
						</tr>
					</thead>
				 
					<tbody>
					
						<? $sql = " SELECT
									t_qa.qa_id,
									t_qa.`name`,
									t_qa.phone,
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
									GROUP BY t_qa.qa_id
									ORDER BY t_qa.update_date DESC ";
						
							$objQuery = mysql_query($sql);
							
							//echo $sql;
				
							while ($row = mysql_fetch_array($objQuery)) {
								echo "<tr>";
									echo "<td>".$row['qa_id']."</td>";
									echo "<td>".$row['title']."</td>";
									echo "<td>".$row['name']."</td>";
									echo "<td>".$row['qcreate_date']."</td>";
									echo "<td>".$row['fname']." ".$row['lname']."</td>";
									echo "<td>".$row['cupdate_date']."</td>";
									echo "<td>".$row['sname']."</td>";
									echo "<td>";
									echo "
														<a href='form_qa.php?qa_id=".$row['qa_id']."' class='btn btn-info btn-xs'><i class='fa fa-pencil-square-o'></i> ตอบ</a>
														";
														if($row['active'] == 0){
															echo " <a href='#' class='btn btn-success btn-xs' onclick='cmdShow(".$row['qa_id'].")'><i class='fa fa-minus-square-o'></i> แสดง</a>";
														}else{
															echo " <a href='#' class='btn btn-warning btn-xs' onclick='cmdHidden(".$row['qa_id'].")'><i class='fa fa-minus-square-o'></i> ซ่อน</a>";
														}
														
												echo " <a href='#' class='btn btn-danger btn-xs' onclick='cmdDel(".$row['qa_id'].")'><i class='fa fa-trash-o'></i> ลบ</a></td>";
								echo "</tr>";
							
							}
						?>
						
					</tbody>
				</table>
            </div>
        </div>
</div>
<input type="hidden" name="user_id" id="user_id" value="<?=$_SESSION['userid'] ?>">
<input type="hidden" name="ID" id="ID" value="0"> 
<script type="text/javascript">


function cmdHidden(ID){
	//alert(ID);
	
	document.getElementById('ID').value = ID;
	var params = "n=" + Math.random();

    params = params + "&" + $('#ID').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/hidden_qa.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
				alert('ถูกซ่อนเรียบร้อยแล้ว')
                location.reload();

			} else {
				alert(sxAjax);
			}	
		}
	});	


}
function cmdShow(ID){
	//alert(ID);
	
	document.getElementById('ID').value = ID;
	var params = "n=" + Math.random();

    params = params + "&" + $('#ID').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/show_qa.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
				alert('ถูกแสดงผลเรียบร้อยแล้ว')
                location.reload();

			} else {
				alert(sxAjax);
			}	
		}
	});	


}


function cmdDel(ID){
	//alert(ID);
	if(confirm('  กรุณายืนยันการลบอีกครั้ง !!!  ')){
		//return true;
	}else{
		return false;
	}
	
	document.getElementById('ID').value = ID;
	var params = "n=" + Math.random();

    params = params + "&" + $('#ID').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/del_qa.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
				alert('ลบเรียบร้อยแล้ว')
                location.reload();

			} else {
				alert(sxAjax);
			}	
		}
	});	


}
</script>





