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
.li_user {
	background: #3a7f14;
    color: #fff !important;
}

</style>

<!-- Page Content -->
<div class="container">
		<div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">จัดการ user</h1>
            </div>
        </div>
			<div class="row">
            <!-- Sidebar Column -->
            <div class="col-md-3">
              <? include('sidebar.php') ?>
              
			</div>
            <!-- Content Column -->
            <div class="col-md-9">
			<a href='form_user.php?user_id=0' class='btn btn-info btn-xs'><i class='fa fa-pencil-square-o'></i> เพิ่ม</a>
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>ID</th>
							<th>username</th>
							<th> ชื่อ - นามสกุล</th>
							
							<th>Option</th>
						</tr>
					</thead>
				 
					<tbody>
					
						<? $sql = " select * from user";
						
							$objQuery = mysql_query($sql);
				
							while ($row = mysql_fetch_array($objQuery)) {
								echo "<tr>";
									echo "<td>".$row['user_id']."</td>";
									echo "<td>".$row['username']."</td>";
									echo "<td>".$row['fname']." ".$row['lname']."</td>";
								
									echo "<td>";
									echo "
														<a href='form_user.php?user_id=".$row['user_id']."' class='btn btn-info btn-xs'><i class='fa fa-pencil-square-o'></i> เลือก</a>
														";
														if($row['active'] == 0){
															echo " <a href='#' class='btn btn-success btn-xs' onclick='cmdShow(".$row['user_id'].")'><i class='fa fa-minus-square-o'></i> แสดง</a>";
														}else{
															echo " <a href='#' class='btn btn-warning btn-xs' onclick='cmdHidden(".$row['user_id'].")'><i class='fa fa-minus-square-o'></i> ซ่อน</a>";
														}
														
												echo " <a href='#' class='btn btn-danger btn-xs' onclick='cmdDel(".$row['user_id'].")'><i class='fa fa-trash-o'></i> ลบ</a></td>";
								echo "</tr>";
							
							}
						?>
						
					</tbody>
				</table>
            </div>
        </div>
</div>
<input type="hidden" name="userid" id="userid" value="<?=$_SESSION['userid'] ?>">
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
		url: "function/hidden_user.php",
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
		url: "function/show_user.php",
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
		url: "function/del_user.php",
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





