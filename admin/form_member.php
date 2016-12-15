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
			FROM t_member 
			left join t_subscribe on t_member.member_id = t_subscribe.member_id 
			where t_member.member_id = ".$_GET['member_id'];
			
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
				<div class="panel panel-default">
                        <div class="panel-heading text-right">
                            
							<input type="button" class="btn btn-danger" onclick="cmdCancel()" value="ย้อนกลับ">
							<input type="hidden" name="delID" id="delID" value="0"> 
                        </div>
					
						<div class="form-group">
							<label>email</label>
							<input class="form-control" id="email" name="email" value="<?=$row['email'] ?>">
						</div>
						
						<div class="form-group">
							<label>ชื่อ-นามสกุล</label>
							<input class="form-control" id="name" name="name" value="<?=$row['name'] ?>">
						</div>
						<div class="form-group">
							<label>หมายเลขโทรศัพท์</label>
							<input class="form-control" id="phone" name="phone" value="<?=$row['phone'] ?>">
						</div>
						
						
						
						<p>เลือกข่าวสารที่ต้องการแจ้งไปยังอีเมล์</p>
							<ul>
								<li class="active">	
									<input type="checkbox" id="news1" name="news1" value="1" <? if($row['news1'] == 1) echo "checked";?>>
									<span class="th">ข่าวกิจกรรมและภารกิจผู้บริหาร</span>
								</li>
								<li class="">	
									<input type="checkbox" id="news2" name="news2" value="1" <? if($row['news2'] == 1) echo "checked";?>>
									<span class="th">ข่าวประชาสัมพันธ์ทั่วไป</span>
								</li>
								<li class="">	
									<input type="checkbox" id="news3" name="news3" value="1" <? if($row['news3'] == 1) echo "checked";?> >
									<span class="th">ข่าวประกาศรับสมัครงาน</span>
								</li>
								<li class="">	
									<input type="checkbox" id="news4" name="news4" value="1" <? if($row['news4'] == 1) echo "checked";?>>
									<span class="th">ข่าวการจัดซื้อจัดจ้าง</span>
								</li>
								<li class="">	
									<input type="checkbox" id="news5" name="news5" value="1" <? if($row['news5'] == 1) echo "checked";?>>
									<span class="th">ข่าวการฝึกอบรม</span>
								</li>
								<li class="">	
									<input type="checkbox" id="news6" name="news6" value="1" <? if($row['news6'] == 1) echo "checked";?>>
									<span class="th">ข่าวภูมิภาค</span>
								</li>
							</ul>
						
						</div>
					</div>
				
			</div>
        </div>
</div>
<input type="hidden" name="user_id" id="user_id" value="<?=$_SESSION['userid'] ?>">
<input type="hidden" name="ID" id="ID" value="0"> 
<script type="text/javascript">

function cmdCancel(){
	document.location.href="m_member.php" ;
}
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





