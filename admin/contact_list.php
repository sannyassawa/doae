<?php include('header.php'); ?>


<!-- Page Content -->
<div class="container">
		<div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><span class="en">คำถามที่พบบ่อย</span><span class="th">คำถามที่พบบ่อย</span>
				</h3>
				<ol class="breadcrumb">
                    <li><a href="index.php">หน้าหลัก</a>
                    </li>
                   
					<li class="active"><span class="en">คำถามที่พบบ่อย</span><span class="th">คำถามที่พบบ่อย</span></li>
                </ol>
            </div>
        </div>
		<div class='adminDiv text-right'>	
						<button type="button" class="btn btn-success adminDiv" onclick="cmdNew()">เพิ่ม</button>
						<p></p>
						<p></p>
					</div>
		<div class="row">
			<div class="col-lg-12">
			<table class='table table-striped'>
			<?
					$sql = "SELECT * from t_freq_cat";
					if($_SESSION['userid'] == ""){
						$sql .= " where active = 1";
						
					}else{
						
					}
					//echo $sql;
					$objQuery = mysql_query($sql);
						echo "<div class='carousel-inner'>";
							while ($row = mysql_fetch_array($objQuery)) {
								echo "<tr>";

									echo "<td><a href='freq.php?cat_freq_id=".$row['cat_freq_id']."'>".$row['name']."</a></td>";
									echo "<td  class='text-right adminDiv' style='width:240px;'>";
												echo "
														<a href='form_freq_cat.php?cat_freq_id=".$row['cat_freq_id']."' class='btn btn-info btn-xs'><i class='fa fa-pencil-square-o'></i> แก้ไข</a>
														";
														if($row['active'] == 0){
															echo " <a href='#' class='btn btn-success btn-xs' onclick='cmdShow(".$row['cat_freq_id'].")'><i class='fa fa-minus-square-o'></i> แสดง</a>";
														}else{
															echo " <a href='#' class='btn btn-warning btn-xs' onclick='cmdHidden(".$row['cat_freq_id'].")'><i class='fa fa-minus-square-o'></i> ซ่อน</a>";
														}
														
												echo " <a href='#' class='btn btn-danger btn-xs' onclick='cmdDel(".$row['cat_freq_id'].")'><i class='fa fa-trash-o'></i> ลบ</a>
													
												";
											echo "</td>";
								echo "</tr>";
								
							}
					echo "</table>	";
				
				?>		
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
		url: "function/add_freq_cat.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
                document.location.href="form_freq_cat.php?"+"cat_freq_id=" + (sxAjax.substr(10)) ;

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
		url: "function/hidden_freq_cat.php",
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
		url: "function/show_freq_cat.php",
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
		url: "function/del_freq_cat.php",
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



