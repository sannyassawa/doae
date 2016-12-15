<?php include('header.php'); 
	if($_SESSION['userid'] == "") {	
		echo "<script> 
				alert('!!!!Username and Password incorrect!!!!');
				document.location.href='../index.php';
				</script>";
			exit();
	}else{
		
	}
	$sql = "SELECT * 
			FROM user
			where user_id = ".$_GET['user_id'];
			
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
				<div class="panel panel-default">
                        <div class="panel-heading text-right">
                            <input type="button" class="btn btn-primary" onclick="cmdSave()" value="บันทึก">
							<input type="button" class="btn btn-primary" onclick="cmdReset()" value="รีเซ็ตรหัสผ่านใหม่">
							<input type="button" class="btn btn-danger" onclick="cmdCancel()" value="ย้อนกลับ">
							<p>รหัสผ่านหลังรีเซ็ตคือ " doae1234 "</p>
							<input type="hidden" name="delID" id="delID" value="0"> 
                        </div>
						<div class="panel-body">
						<div class="form-group">
							<label>username</label>
							<input class="form-control" id="username" name="username" value="<?=$row['username'] ?>">
						</div>
						<div class="form-group">
							<label>email</label>
							<input class="form-control" id="email" name="email" value="<?=$row['email'] ?>">
						</div>
					
						<div class="form-group">
							<label>ชื่อ</label>
							<input class="form-control" id="fname" name="fname" value="<?=$row['fname'] ?>">
						</div>
						
						<div class="form-group">
							<label>นามสกุล</label>
							<input class="form-control" id="lname" name="lname" value="<?=$row['lname'] ?>">
						</div>
						<div class="form-group">
							<label>หมายเลขโทรศัพท์</label>
							<input class="form-control" id="tel" name="tel" value="<?=$row['tel'] ?>">
						</div>
						
						</div>
						</div>
					</div>
				
			</div>
        </div>
</div>
<input type="hidden" name="userid" id="userid" value="<?=$_SESSION['userid'] ?>">
<input type="hidden" name="user_id" id="user_id" value="<?=$_GET['user_id'] ?>"> 
<input type="hidden" name="ID" id="ID" value="0"> 
<script type="text/javascript">

function cmdCancel(){
	document.location.href="m_user.php" ;
}

function cmdSave(){


	var params = "n=" + Math.random();
	params = params + "&" + $('#user_id').serialize();
	params = params + "&" + $('#userid').serialize();
    params = params + "&" + $('#fname').serialize();
	params = params + "&" + $('#lname').serialize();
	params = params + "&" + $('#email').serialize();
	params = params + "&" + $('#tel').serialize();
	params = params + "&" + $('#username').serialize();


	$.ajax({
		type: "POST",
		url: "function/save_user.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
				alert('บันทึกเรียบร้อยแล้ว')
				window.location.href = "m_user.php";

			} else {
				alert(sxAjax);
			}	
		}
	});	
}

function cmdReset(){


	var params = "n=" + Math.random();
	params = params + "&" + $('#user_id').serialize();
	params = params + "&" + $('#userid').serialize();



	$.ajax({
		type: "POST",
		url: "function/save_reset.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
				alert('บันทึกเรียบร้อยแล้ว')
				window.location.href = "m_user.php";

			} else {
				alert(sxAjax);
			}	
		}
	});	
}

</script>





