<?php include('header.php'); ?>


<!-- Page Content -->
<div class="container">
		<div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
					<span class="en">บริการของกรมส่งเสริม</span>
					<span class="th">บริการของกรมส่งเสริม</span>
					
					
				</h1>
				<hr />
				
                <ol class="breadcrumb">
                    <li>
						<span class="en"><a href="index.php">Home</a></span>
						<span class="th"><a href="index.php">หน้าหลัก</a></span>
                    </li>
                    <li class="active">
						<span class="en">บริการของกรมส่งเสริม</span>
						<span class="th">บริการของกรมส่งเสริม</span>
					</li>
				
                </ol>
            </div>
        </div>
		
		<div class='adminDiv text-right'>	
			<button type="button" class="btn btn-success adminDiv" onclick="cmdNew()">เพิ่มหมวดหมู่</button>
		</div>
		<br />
		<div class="row">
			<div class="col-lg-12">
			<?php
							$sql = "SELECT *FROM t_service ";
							if($_SESSION["userid"] == "") {
								$sql .= "WHERE active = 1";
							}else{
								
							}
							$objQuery = mysql_query($sql);
								while ($row = mysql_fetch_array($objQuery)) {
									echo "<div class='row'>
											<div class='col-lg-12'>
											<h4><span class='en'>".$row['title_en']."</span><span class='th'>".$row['title']."</span></h4>
												<p class='text-right adminDiv'>
													<button type='button' class='btn btn-success btn-xs' onclick='cmdNewF(".$row['service_id'].")'>เพิ่ม</button>
													<a href='form_service.php?service_id=".$row['service_id']."' class='btn btn-info btn-xs ' ><i class='fa fa-pencil-square-o'></i> แก้ไข</a>";
													if($row['active'] == 0){
														echo " <a href='#' class='btn btn-success btn-xs' onclick='cmdShowC(".$row['service_id'].")'><i class='fa fa-minus-square-o'></i> แสดง</a>";
													}else{
														echo " <a href='#' class='btn btn-warning btn-xs' onclick='cmdHiddenC(".$row['service_id'].")'><i class='fa fa-minus-square-o'></i> ซ่อน</a>";
													}
													
											echo "	<a href='#' onclick='cmdDelC(".$row['service_id'].")' class='btn btn-danger btn-xs' ><i class='fa fa-trash-o'></i> ลบ</a>
												</p>
											
											</div>";
										$sql1 = "SELECT * FROM t_service_file where ";
											if($_SESSION['userid'] == ""){
												$sql1 .= " active = 1 and ";
											}else{
												
											}  
											$sql1 .= "service_id =".$row['service_id'];
											
									$objQuery1 = mysql_query($sql1);
									
									//echo $sql1;
									while ($row1 = mysql_fetch_array($objQuery1)) {
										echo "<div class='col-md-2 col-sm-3'>";
										echo "	<div class='sevice_box_2'>
												<a href='".$row1['url']."' title='".$row1['title']."' target='_blank'>
												<img src='../".$row1['path']."' style='width: 100%;' >
												</a>";
										echo "
											<br clare='all'>
											<br clare='all'>";
										echo "<div class='adminDiv'>
												<a href='form_service_file.php?service_id=".$row1['file_id']."' class='btn btn-info btn-xs ' ><i class='fa fa-pencil-square-o'></i> แก้ไข</a>";
												if($row1['active'] == 0){
														echo " <a href='#' class='btn btn-success btn-xs' onclick='cmdShowF(".$row1['file_id'].")'><i class='fa fa-minus-square-o'></i> แสดง</a>";
													}else{
														echo " <a href='#' class='btn btn-warning btn-xs' onclick='cmdHiddenF(".$row1['file_id'].")'><i class='fa fa-minus-square-o'></i> ซ่อน</a>";
													}
												
										 echo "  
												 <a href='#' onclick='cmdDelF(".$row1['file_id'].")' class='btn btn-danger btn-xs'><i class='fa fa-trash-o'></i> ลบ</a>
											</div>";
													
										echo	"</div>";
									echo "</div>";
										
									}
								echo "</div>";
								echo "<br clare='all'>";
							}
						?>
				
        </div>
	</div>
		<input type="hidden" name="user_id" id="user_id" value="<?=$_SESSION['userid'] ?>">
		<input type="hidden" name="ID" id="ID" value="0"> 
</div>
<script type="text/javascript">
function cmdNew(){

	var params = "n=" + Math.random();
	params = params + "&" + $('#user_id').serialize();
    
    //params = params + "&" + $('#Coll').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/add_service_cat.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
                document.location.href="form_service.php?"+"service_id=" + (sxAjax.substr(10)) ;

			} else {
				alert(sxAjax);
			}	
		}
	});	


}
function cmdNewF(ID){


	document.getElementById('ID').value = ID;
	var params = "n=" + Math.random();
	
	var params = "n=" + Math.random();
	params = params + "&" + $('#user_id').serialize();
    params = params + "&" + $('#ID').serialize();
    //params = params + "&" + $('#Coll').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/add_service.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
                document.location.href="form_service_file.php?"+"service_id=" + (sxAjax.substr(10)) ;

			} else {
				alert(sxAjax);
			}	
		}
	});	


}

function cmdHiddenC(ID){
	//alert(ID);
	
	document.getElementById('ID').value = ID;
	var params = "n=" + Math.random();

    params = params + "&" + $('#ID').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/hidden_service_cat.php",
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
function cmdShowC(ID){
	//alert(ID);
	
	document.getElementById('ID').value = ID;
	var params = "n=" + Math.random();

    params = params + "&" + $('#ID').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/show_service_cat.php",
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


function cmdDelC(ID){
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
		url: "function/del_service_cat.php",
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


function cmdHiddenF(ID){
	//alert(ID);
	
	document.getElementById('ID').value = ID;
	var params = "n=" + Math.random();

    params = params + "&" + $('#ID').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/hidden_service.php",
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
function cmdShowF(ID){
	//alert(ID);
	
	document.getElementById('ID').value = ID;
	var params = "n=" + Math.random();

    params = params + "&" + $('#ID').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/show_service.php",
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


function cmdDelF(ID){
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
		url: "function/del_service.php",
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




<? include('footer.php'); ?>



