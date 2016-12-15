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
.li_member {
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
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>ID</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Create Date</th>
							<th>Option</th>
						</tr>
					</thead>
				 
					<tbody>
					
						<? $sql = " Select * from  t_member order by member_id DESC";
						
							$objQuery = mysql_query($sql);
				
							while ($row = mysql_fetch_array($objQuery)) {
								echo "<tr>";
									echo "<td>".$row['member_id']."</td>";
									echo "<td>".$row['email']."</td>";
									echo "<td>".$row['phone']."</td>";
									echo "<td>".$row['create_date']."</td>";
									echo "<td>";
									echo "
														<a href='form_member.php?member_id=".$row['member_id']."' class='btn btn-info btn-xs'><i class='fa fa-pencil-square-o'></i> ดูรายละเอียด</a>
														";
														if($row['active'] == 0){
															echo " <a href='#' class='btn btn-success btn-xs' onclick='cmdShow(".$row['member_id'].")'><i class='fa fa-minus-square-o'></i> แสดง</a>";
														}else{
															echo " <a href='#' class='btn btn-warning btn-xs' onclick='cmdHidden(".$row['member_id'].")'><i class='fa fa-minus-square-o'></i> ซ่อน</a>";
														}
														
												echo " <a href='#' class='btn btn-danger btn-xs' onclick='cmdDel(".$row['member_id'].")'><i class='fa fa-trash-o'></i> ลบ</a></td>";
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
function cmdNew(){

	var params = "n=" + Math.random();
	params = params + "&" + $('#user_id').serialize();
    
    //params = params + "&" + $('#Coll').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/add_member.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
                document.location.href="form_member.php?"+"member_id=" + (sxAjax.substr(10)) ;

			} else {
				alert(sxAjax);
			}	
		}
	});	


}

function cmdHidden(ID){
	//alert(ID);
	
	document.getElementById('ID').value = ID;
	var params = "n=" + Math.random();

    params = params + "&" + $('#ID').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/hidden_member.php",
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
		url: "function/show_member.php",
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
		url: "function/del_member.php",
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





